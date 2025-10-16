<?php

namespace CyberSource\Authentication\Util;

class Utility
{

    public static function findCertByAlias($certs, $keyAlias)
    {
        $keyAlias = trim($keyAlias); 
        if (isset($certs['cert'])) {
            $certData = openssl_x509_parse($certs['cert'], 1);
            if (isset($certData['subject']['CN']) && $certData['subject']['CN'] === $keyAlias) {
                return $certs['cert'];
            }
        }

        if (isset($certs['extracerts']) && is_array($certs['extracerts'])) {
            foreach ($certs['extracerts'] as $cert) {
                $certData = openssl_x509_parse($cert, 1);
                if (isset($certData['subject']['CN']) && $certData['subject']['CN'] === $keyAlias) {
                    return $cert;
                }
            }
        }

        throw new \Exception("Certificate with alias $keyAlias not found.");
    }

    public static function extractAllCertificates($certContent)
    {
        $certs = [];

        $pattern = '/-----BEGIN CERTIFICATE-----[\r\n]+.*?[\r\n]+-----END CERTIFICATE-----/s';

        if (preg_match_all($pattern, $certContent, $matches)) {
            foreach ($matches[0] as $certPem) {
                $cert = openssl_x509_read($certPem);
                if ($cert !== false) {
                    $certs[] = $cert;
                }
            }
        } else {
            // Try reading as a single certificate if no PEM format matches found
            $cert = openssl_x509_read($certContent);
            if ($cert !== false) {
                $certs[] = $cert;
            }
        }
        return $certs;
    }

    /**
     * Load Response MLE private key supporting:
     *  - PKCS#12 (.p12, .pfx)
     *  - PEM / KEY / P8
     * 
     * @param string $filePath Path to the private key file
     * @param string|null $password Password for encrypted keys
     * @return string unencrypted PEM string
     * @throws \Exception If key cannot be loaded or decrypted
     */
    public static function loadResponseMlePrivateKey(string $filePath, ?string $password): string
    {
        if (!extension_loaded('openssl')) {
            throw new \Exception("OpenSSL extension not loaded; cannot read private key.");
        }

        $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

        // Handle PKCS#12 formats (.p12, .pfx)
        if (in_array($ext, ['p12','pfx'], true)) {
            $pkcs12 = file_get_contents($filePath);
            if ($pkcs12 === false) {
                throw new \Exception("Unable to read PKCS#12 file: {$filePath}");
            }
            $certs = [];
            if (!openssl_pkcs12_read($pkcs12, $certs, (string)$password)) {
                $err = openssl_error_string();
                throw new \Exception("Unable to parse PKCS#12: {$filePath}. OpenSSL: {$err}");
            }
            if (empty($certs['pkey'])) {
                throw new \Exception("No private key found in PKCS#12: {$filePath}");
            }

            $exported = '';
            
            // Clear OpenSSL error queue
            while (openssl_error_string() !== false);
            
            // Try export without config first
            $exportOk = @openssl_pkey_export($certs['pkey'], $exported, null);
            
            // If that fails, try with Windows config
            if (!$exportOk || trim($exported) === '') {
                $configArgs = ['config' => 'NUL'];
                $exportOk = @openssl_pkey_export($certs['pkey'], $exported, null, $configArgs);
            }

            if (!$exportOk || trim($exported) === '') {
                $err = '';
                while ($msg = openssl_error_string()) {
                    $err .= ($err ? ' | ' : '') . $msg;
                }
                throw new \Exception("Failed exporting private key from PKCS#12. OpenSSL: " . ($err ?: 'Unknown error'));
            }

            if (!$exportOk || trim($exported) === '') {
                // Broader fallback: accept any BEGIN .. PRIVATE KEY block
                if (is_string($certs['pkey']) && preg_match('/BEGIN\\s.+PRIVATE KEY/', $certs['pkey'])) {
                    $exported = $certs['pkey'];
                }
            }
            return $exported;
        }

        // Handle PEM-based formats (.pem, .key, .p8)
        if (in_array($ext, ['pem','key','p8'], true)) {
            try {
                $unencryptedPem = self::decryptPrivateKeyPem($filePath, $password);
                return  $unencryptedPem;
            } catch (\Exception $e) {
                throw new \Exception("Failed to load PEM/KEY/P8 private key: " . $e->getMessage());

            }
        }

        throw new \Exception("Unsupported Response MLE Private Key file format: {$ext}. Supported: .p12, .pfx, .pem, .key, .p8");
    }

    /**
     * Decrypt encrypted PEM/P8 private key files with cross-platform compatibility
     * 
     * @param string $pemPath Path to the PEM file
     * @param string|null $passphrase Password for encrypted keys
     * @return string Unencrypted PEM string
     * @throws \Exception If decryption fails
     */
    public static function decryptPrivateKeyPem(string $pemPath, ?string $passphrase): string
    {
        if (!extension_loaded('openssl')) {
            throw new \Exception('The OpenSSL extension is required.');
        }
        if (!is_file($pemPath) || !is_readable($pemPath)) {
            throw new \Exception("PEM file not found or not readable: {$pemPath}");
        }

        $pem = file_get_contents($pemPath);
        if ($pem === false || $pem === '') {
            throw new \Exception('Failed to read PEM file contents.');
        }

        // Only attempt decryption if password provided and key appears encrypted
        $isEncrypted = strpos($pem, 'BEGIN ENCRYPTED PRIVATE KEY') !== false ||
                      strpos($pem, 'Proc-Type: 4,ENCRYPTED') !== false;
        
        if (!$isEncrypted) {
            $priv = @openssl_pkey_get_private(private_key: $pem);
            if ($priv === false) {
                $err = '';
                while ($msg = openssl_error_string()) {
                    $err .= ($err ? ' | ' : '') . $msg;
                }
                throw new \Exception("Unable to load unencrypted private key from {$pemPath}. OpenSSL errors: " . ($err ?: 'No specific error'));
            }

            // ALWAYS normalize to standard PKCS#8 PEM format for JWE compatibility
            $normalized = '';
            // Clear error queue before export
            while (openssl_error_string() !== false)
                ;

            // Try export without config first
            $success = @openssl_pkey_export($priv, $normalized, null);

            // If that fails, try with Windows config
            if (!$success) {
                $configArgs = ['config' => 'NUL'];
                $success = @openssl_pkey_export($priv, $normalized, null, $configArgs);
            }

            if (!$success) {
                $err = '';
                while ($msg = openssl_error_string()) {
                    $err .= ($err ? ' | ' : '') . $msg;
                }
                throw new \Exception("Failed to normalize unencrypted key. OpenSSL errors: " . ($err ?: 'Unknown error'));
            }

            return $normalized;
        }

        if ($passphrase === null || $passphrase === '') {
            throw new \Exception('Private key is encrypted but no passphrase provided');
        }

        // Obtain an OpenSSL private key handle using the passphrase
        $key = openssl_pkey_get_private($pem, $passphrase);
        if ($key === false) {
            $err = '';
            while ($msg = openssl_error_string()) {
                $err .= ($err ? ' | ' : '') . $msg;
            }
            throw new \Exception('Unable to decrypt private key. ' . ($err ?: 'Check passphrase and key format.'));
        }
        
        // Export the key without a passphrase (i.e., decrypted)
        $unencryptedPem = '';
        
        // Windows compatibility
        $configArgs = [
            'config' => 'NUL', // Pass config file search on Windows
        ];
        
        //(Windows-friendly)
        $success = @openssl_pkey_export($key, $unencryptedPem, null, $configArgs);
        
        // If that fails, try without any config args (best for Mac/Linux)
        if (!$success) {
            $success = @openssl_pkey_export($key, $unencryptedPem, null);
        }
        
        if (!$success) {
            // Collect OpenSSL errors for debugging
            $err = '';
            while ($msg = openssl_error_string()) {
                $err .= ($err ? ' | ' : '') . $msg;
            }
            throw new \Exception('Failed to export unencrypted private key. ' . ($err ?: 'Unknown error'));        
        }
        return $unencryptedPem;
    }
}
