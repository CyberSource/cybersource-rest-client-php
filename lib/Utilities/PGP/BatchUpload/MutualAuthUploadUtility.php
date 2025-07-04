<?php

namespace CyberSource\Utilities\PGP\BatchUpload;

use CyberSource\ApiException;
use CyberSource\Utilities\MultipartHelpers\MultipartHelper;

class MutualAuthUploadUtility
{
    /**
     * Uploads an encrypted file using mTLS with a PKCS#12 (.p12/.pfx) client certificate.
     *
     * @param string $encryptedPgpBytes The encrypted file content.
     * @param string $endpointUrl The full API endpoint URL.
     * @param string $fileName The file name to use in the multipart upload.
     * @param string $p12FilePath Path to the PKCS#12 client certificate file.
     * @param string $p12Password Password for the PKCS#12 file.
     * @param string|null $caCertPath Path to the CA cert(s) in PEM format. Optional.
     * @return array [responseBody, statusCode, headers]
     * @throws ApiException
     */
    public static function uploadWithP12(
        $encryptedPgpBytes,
        $endpointUrl,
        $fileName,
        $p12FilePath,
        $p12Password,
        $caCertPath = null,
        $verify_ssl = true,
        $logger = null
    ) {
        return self::doMultipartUpload(
            $encryptedPgpBytes,
            $endpointUrl,
            $fileName,
            [
                'type' => 'p12',
                'cert' => $p12FilePath,
                'password' => $p12Password,
            ],
            $caCertPath,
            $verify_ssl,
            $logger
        );
    }

    /**
     * Uploads an encrypted file using mTLS with client key/cert PEM files.
     *
     * @param string $encryptedPgpBytes The encrypted file content.
     * @param string $endpointUrl The full API endpoint URL.
     * @param string $fileName The file name to use in the multipart upload.
     * @param string $clientCertPath Path to the client certificate (PEM).
     * @param string $clientKeyPath Path to the client private key (PEM).
     * @param string|null $caCertPath Path to the CA cert(s) in PEM format. Optional.
     * @param string|null $clientKeyPassword Password for the client private key. Optional.
     * @return array [responseBody, statusCode, headers]
     * @throws ApiException
     */
    public static function uploadWithKeyAndCert(
        $encryptedPgpBytes,
        $endpointUrl,
        $fileName,
        $clientCertPath,
        $clientKeyPath,
        $caCertPath = null,
        $clientKeyPassword = null,
        $verify_ssl = true,
        $logger = null
    ) {
        return self::doMultipartUpload(
            $encryptedPgpBytes,
            $endpointUrl,
            $fileName,
            [
                'type' => 'pem',
                'cert' => $clientCertPath,
                'key' => $clientKeyPath,
                'password' => $clientKeyPassword,
            ],
            $caCertPath,
            $verify_ssl,
            $logger
        );  
    }

    /**
     * Shared logic for multipart upload with mTLS.
     */
    private static function doMultipartUpload(
        $encryptedPgpBytes,
        $endpointUrl,
        $fileName,
        $tlsConfig,
        $caCertPath,
        $verify_ssl,
        $logger
    ){

        $boundary = uniqid();
        $formParams = [
            $fileName => $encryptedPgpBytes
        ];
        $multipartBody = MultipartHelper::build_data_files($boundary, $formParams);
        $correlationId = self::generateCorrelationId();
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpointUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $multipartBody);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: multipart/form-data; boundary=-------------$boundary",
            "v-c-correlation-id: $correlationId"
        ]);

        //mTLS: handle both PKCS#12 and cert and key
        if ($tlsConfig['type'] === 'p12') {
            curl_setopt($ch, CURLOPT_SSLCERT, $tlsConfig['cert']);
            curl_setopt($ch, CURLOPT_SSLCERTTYPE, 'P12');
            curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $tlsConfig['password']);
        } else {
            curl_setopt($ch, CURLOPT_SSLCERT, $tlsConfig['cert']);
            curl_setopt($ch, CURLOPT_SSLKEY, $tlsConfig['key']);
            if (!empty($tlsConfig['password'])) {
                curl_setopt($ch, CURLOPT_KEYPASSWD, $tlsConfig['password']);
            }
        }

        // CA cert for server validation
        if ($caCertPath) {
            print_r("Using custom CA cert path: $caCertPath\n");
            $defaultCaCertPath = __DIR__ . '/../../../ssl/cacert.pem';
            $defaultCa = file_exists($defaultCaCertPath) ? file_get_contents($defaultCaCertPath) : '';
            $userCa = file_get_contents($caCertPath);
            $combinedCa = rtrim($defaultCa, "\r\n") . "\n" . ltrim($userCa, "\r\n");
            curl_setopt($ch, CURLOPT_CAINFO_BLOB, $combinedCa);
        }else{
            $defaultCaCertPath = __DIR__ . '/../../../ssl/cacert.pem';
            $defaultCa = file_exists($defaultCaCertPath) ? file_get_contents($defaultCaCertPath) : '';
            curl_setopt($ch, CURLOPT_CAINFO_BLOB, $defaultCa);
        }

        // SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $verify_ssl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $verify_ssl ? 2 : 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Use CURLOPT_HEADERFUNCTION to parse headers
        $responseHeaders = [];
        curl_setopt($ch, CURLOPT_HEADERFUNCTION, function($curl, $header_line) use (&$responseHeaders) {
            $len = strlen($header_line);
            $header_line = trim($header_line);
            if (empty($header_line) || strpos($header_line, ':') === false) {
                return $len;
            }
            
            list($key, $value) = explode(':', $header_line, 2);
            $key = trim($key);
            $value = trim($value);
            
            if (isset($responseHeaders[$key])) {
                if (is_array($responseHeaders[$key])) {
                    $responseHeaders[$key][] = $value;
                } else {
                    $responseHeaders[$key] = [$responseHeaders[$key], $value];
                }
            } else {
                $responseHeaders[$key] = $value;
            }
            
            return $len;
        });

        $body = curl_exec($ch);

        if ($body === false) {
            $err = curl_error($ch);
            curl_close($ch);
            $error_message = "cURL error: $err";
            if ($logger) $logger->error($error_message);
            throw new ApiException($error_message, 500);
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);

        curl_close($ch);

        if ($err || $httpCode === 0) {
            if ($err) {
                $error_message = "cURL error: $err";
            } elseif ($httpCode === 0) {
                $error_message = "API call failed: No HTTP response received. This may indicate a network issue, DNS resolution failure, or SSL/TLS handshake problem.";
            } else {
                $error_message = "API call failed for an unknown reason.";
            }
            if ($logger) $logger->error($error_message);
            throw new ApiException($error_message, 500);
        } elseif ($httpCode >= 200 && $httpCode < 300) {
            if ($logger) $logger->info("Upload completed for correlationId: $correlationId. Status: $httpCode");
            // Check if response is JSON and return decoded JSON if it is, otherwise return as string
            $jsonResponse = json_decode($body, true);
            $processedBody = (json_last_error() === JSON_ERROR_NONE) ? $jsonResponse : $body;
            return [$processedBody, $httpCode, $responseHeaders];
        } else {
            $msg = "File upload failed. Status code: $httpCode, body: $body";
            if ($logger) $logger->error($msg);
            throw new ApiException($msg, $httpCode, $responseHeaders, $body);
        }
    }

    private static function generateCorrelationId()
    {
        return bin2hex(random_bytes(16));
    }
}
