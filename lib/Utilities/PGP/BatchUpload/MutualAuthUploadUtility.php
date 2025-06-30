<?php

namespace CyberSource\Utilities\PGP\BatchUpload;

use Exception;
//to do: check ssl verify flag and how to append server cert
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
     * @throws Exception
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
        curl_setopt($ch, CURLOPT_HEADER, true);

        // Optional: Add correlation ID for logging/tracing
        $correlationId = self::generateCorrelationId();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "v-c-correlation-id: $correlationId"
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $headers = curl_getinfo($ch);
        $err = curl_error($ch);

        curl_close($ch);
        unlink($tmpFile);

        if ($err) {
            if ($logger) {
                $logger->error("cURL error: $err");
            }
            throw new Exception("cURL error: $err");
        }

        if ($logger) {
            $logger->info("Upload completed for correlationId: $correlationId. Status: $httpCode");
        } 
        if ($httpCode >= 200 && $httpCode < 300) {
            return [$response, $httpCode, $headers];
        } else {
            $msg = "File upload failed. Status code: $httpCode, body: $response";
            if ($logger) {
                $logger->error($msg);
            }
            throw new Exception($msg);
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
     * @throws Exception
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
        
        curl_setopt($ch, CURLOPT_HEADER, true);

        // Optional: Add correlation ID for logging/tracing
        $correlationId = self::generateCorrelationId();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "v-c-correlation-id: $correlationId"
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $headers = curl_getinfo($ch);
        $err = curl_error($ch);

        curl_close($ch);
        unlink($tmpFile);

        if ($err) {
            if ($logger) {
            $logger->error("cURL error: $err");
            }
            throw new Exception("cURL error: $err");
        }

        if ($logger) {
            $logger->info("Upload completed for correlationId: $correlationId. Status: $httpCode");
        }
        if ($httpCode >= 200 && $httpCode < 300) {
            return [$response, $httpCode, $headers];
        } else {
            $msg = "File upload failed. Status code: $httpCode, body: $response";
            if ($logger) {
            $logger->error($msg);
            }
            throw new Exception($msg);
        }
        }

    private static function generateCorrelationId()
    {
        return bin2hex(random_bytes(16));
    }

}