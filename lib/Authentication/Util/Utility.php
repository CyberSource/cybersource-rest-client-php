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
     * @return array ['pem' => unencrypted PEM string, 'resource' => OpenSSL key resource]
     * @throws MLEException If key cannot be loaded or decrypted
     */
    public static function loadResponseMlePrivateKey(string $filePath, ?string $password): array
    {
        if (!extension_loaded('openssl')) {
            throw new MLEException("OpenSSL extension not loaded; cannot read private key.");
        }

        $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

        // Handle PKCS#12 formats (.p12, .pfx)
        if (in_array($ext, ['p12','pfx'], true)) {
            $pkcs12 = file_get_contents($filePath);
            if ($pkcs12 === false) {
                throw new MLEException("Unable to read PKCS#12 file: {$filePath}");
            }
            $certs = [];
            if (!openssl_pkcs12_read($pkcs12, $certs, (string)$password)) {
                $err = openssl_error_string();
                throw new MLEException("Unable to parse PKCS#12: {$filePath}. OpenSSL: {$err}");
            }
            if (empty($certs['pkey'])) {
                throw new MLEException("No private key found in PKCS#12: {$filePath}");
            }

            $exported = '';
            $exportOk = @openssl_pkey_export($certs['pkey'], $exported, null);
            if (!$exportOk || trim($exported) === '') {
                // Broader fallback: accept any BEGIN .. PRIVATE KEY block
                if (is_string($certs['pkey']) && preg_match('/BEGIN\\s.+PRIVATE KEY/', $certs['pkey'])) {
                    $exported = $certs['pkey'];
                } else {
                    // Try again via handle
                    $handle = @openssl_pkey_get_private($certs['pkey'], (string)$password);
                    if ($handle && @openssl_pkey_export($handle, $exported, null) && trim($exported) !== '') {
                        // success
                    } else {
                        $err = openssl_error_string();
                        throw new MLEException("Failed exporting private key from PKCS#12 (OpenSSL 3 legacy issue). OpenSSL: {$err}");
                    }
                }
            }

            $resource = @openssl_pkey_get_private($exported, (string)$password) ?: @openssl_pkey_get_private($exported);
            if ($resource === false) {
                throw new MLEException("Re-validation of PKCS#12 private key failed after fallback.");
            }
            return ['pem' => $exported, 'resource' => $resource];
        }

        // Handle PEM-based formats (.pem, .key, .p8)
        if (in_array($ext, ['pem','key','p8'], true)) {
            try {
                $unencryptedPem = self::decryptPrivateKeyPem($filePath, $password);
                $resource = @openssl_pkey_get_private($unencryptedPem);
                if ($resource === false) {
                    throw new MLEException("Failed to create resource from decrypted PEM");
                }
                return ['pem' => $unencryptedPem, 'resource' => $resource];
            } catch (\Exception $e) {
                // If decryption fails, try the original approach for unencrypted keys
                $raw = file_get_contents($filePath);
                if ($raw === false || trim($raw) === '') {
                    throw new MLEException("Unable to read key file: {$filePath}");
                }

                $priv = @openssl_pkey_get_private($raw);
                if ($priv === false) {
                    throw new MLEException("Unable to load private key: {$filePath}. " . $e->getMessage());
                }

                // Normalize unencrypted keys
                $norm = '';
                if (@openssl_pkey_export($priv, $norm, null) && trim($norm) !== '') {
                    $raw = $norm;
                }

                return ['pem' => $raw, 'resource' => $priv];
            }
        }

        throw new MLEException("Unsupported Response MLE Private Key file format: {$ext}. Supported: .p12, .pfx, .pem, .key, .p8");
    }

    /**
     * Decrypt encrypted PEM/P8 private key files with cross-platform compatibility
     * 
     * @param string $pemPath Path to the PEM file
     * @param string|null $passphrase Password for encrypted keys
     * @return string Unencrypted PEM string
     * @throws MLEException If decryption fails
     */
    public static function decryptPrivateKeyPem(string $pemPath, ?string $passphrase): string
    {
        if (!extension_loaded('openssl')) {
            throw new MLEException('The OpenSSL extension is required.');
        }
        if (!is_file($pemPath) || !is_readable($pemPath)) {
            throw new MLEException("PEM file not found or not readable: {$pemPath}");
        }

        $pem = file_get_contents($pemPath);
        if ($pem === false || $pem === '') {
            throw new MLEException('Failed to read PEM file contents.');
        }

        // Only attempt decryption if password provided and key appears encrypted
        $isEncrypted = strpos($pem, 'BEGIN ENCRYPTED PRIVATE KEY') !== false ||
                      strpos($pem, 'Proc-Type: 4,ENCRYPTED') !== false;
        
        if (!$isEncrypted) {
            // Return as-is for unencrypted keys
            return $pem;
        }

        if ($passphrase === null || $passphrase === '') {
            throw new MLEException('Private key is encrypted but no passphrase provided');
        }

        // Obtain an OpenSSL private key handle using the passphrase
        $key = openssl_pkey_get_private($pem, $passphrase);
        if ($key === false) {
            // Collect the last OpenSSL error to help with debugging
            $err = '';
            while ($msg = openssl_error_string()) {
                $err .= ($err ? ' | ' : '') . $msg;
            }
            throw new MLEException('Unable to decrypt private key. ' . ($err ?: 'Check passphrase and key format.'));
        }
        
        // Export the key without a passphrase (i.e., decrypted)
        $unencryptedPem = '';
        
        // Universal config - works for RSA, EC, DSA keys
        // May specify what's needed for Windows compatibility
        $configArgs = [
            'config' => 'NUL', // Pass config file search on Windows
        ];
        
        // First attempt with minimal config (Windows-friendly)
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
            throw new MLEException('Failed to export unencrypted private key. ' . ($err ?: 'Unknown error'));        }

        // Free the key handle explicitly for PHP 7 compatibility
        // Note: Static analyzers may flag this for PHP 8+ where signature changed
        // The is_resource() guard ensures this only runs on PHP 7
        if (is_resource($key)) {
            @openssl_free_key($key);
        }
        // PHP 8+ uses OpenSSLAsymmetricKey object and handles cleanup automatically
        
        return $unencryptedPem;
    }
}
?>