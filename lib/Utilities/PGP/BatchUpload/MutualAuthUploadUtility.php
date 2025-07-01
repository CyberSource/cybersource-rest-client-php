<?php

namespace CyberSource\Utilities\PGP\BatchUpload;

use CyberSource\ApiException;

class MutualAuthUploadUtility
{
    /**
     * Uploads an encrypted file using mTLS with a PKCS#12 (.p12/.pfx) client certificate.
     *
     * @param string $encryptedPgpBytes The encrypted file content (ASCII-armored).
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
        $tmpFile = tempnam(sys_get_temp_dir(), 'pgp_');
        file_put_contents($tmpFile, $encryptedPgpBytes);

        $ch = curl_init();
        $cfile = new \CURLFile($tmpFile, 'application/octet-stream', $fileName);
        $postFields = ['file' => $cfile];

        curl_setopt($ch, CURLOPT_URL, $endpointUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

        // mTLS: client cert (PKCS#12)
        curl_setopt($ch, CURLOPT_SSLCERT, $p12FilePath);
        curl_setopt($ch, CURLOPT_SSLCERTTYPE, 'P12');
        curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $p12Password);

        // CA cert for server validation
        if ($caCertPath) {
            curl_setopt($ch, CURLOPT_CAINFO, $caCertPath);
        }

        // SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $verify_ssl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $verify_ssl ? 2 : 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Optional: Add correlation ID for logging/tracing
        $correlationId = self::generateCorrelationId();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "v-c-correlation-id: $correlationId"
        ]);

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
            unlink($tmpFile);
            $error_message = "cURL error: $err";
            if ($logger) $logger->error($error_message);
            throw new ApiException($error_message, 500);
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);

        curl_close($ch);
        unlink($tmpFile);

        if ($err || $httpCode === 0) {
            $error_message = $err ? "cURL error: $err" : "API call failed, but for an unknown reason. This could happen if you are disconnected from the network.";
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

    /**
     * Uploads an encrypted file using mTLS with client key/cert PEM files.
     *
     * @param string $encryptedPgpBytes The encrypted file content (ASCII-armored).
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
        $tmpFile = tempnam(sys_get_temp_dir(), 'pgp_');
        file_put_contents($tmpFile, $encryptedPgpBytes);

        $ch = curl_init();
        $cfile = new \CURLFile($tmpFile, 'application/octet-stream', $fileName);
        $postFields = ['file' => $cfile];

        curl_setopt($ch, CURLOPT_URL, $endpointUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

        // mTLS: client cert and key
        curl_setopt($ch, CURLOPT_SSLCERT, $clientCertPath);
        curl_setopt($ch, CURLOPT_SSLKEY, $clientKeyPath);
        if ($clientKeyPassword) {
            curl_setopt($ch, CURLOPT_KEYPASSWD, $clientKeyPassword);
        }

        // CA cert for server validation
        if ($caCertPath) {
            curl_setopt($ch, CURLOPT_CAINFO, $caCertPath);
        }

        // SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $verify_ssl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $verify_ssl ? 2 : 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Optional: Add correlation ID for logging/tracing
        $correlationId = self::generateCorrelationId();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "v-c-correlation-id: $correlationId"
        ]);

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
            unlink($tmpFile);
            $error_message = "cURL error: $err";
            if ($logger) $logger->error($error_message);
            throw new ApiException($error_message, 500);
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);
        $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $http_body = substr($body, $http_header_size);
        curl_close($ch);
        unlink($tmpFile);

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
            $jsonResponse = json_decode($http_body);
            $processedBody = (json_last_error() === JSON_ERROR_NONE) ? $jsonResponse : $body;
            return [$processedBody, $httpCode, $responseHeaders];
        } else {
            $msg = "File upload failed. Status code: $httpCode, body: $http_body";
            if ($logger) $logger->error($msg);
            throw new ApiException($msg, $httpCode, $responseHeaders, $http_body);
        }
    }

    private static function generateCorrelationId()
    {
        return bin2hex(random_bytes(16));
    }
}
