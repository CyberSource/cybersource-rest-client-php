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
     * @return string Unencrypted PEM string
     * @throws \Exception If key cannot be loaded or decrypted
     */
    public static function loadResponseMlePrivateKey(string $filePath, ?string $password): string
    {
        self::validateOpenSslExtension();

        $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

        if (in_array($ext, ['p12', 'pfx'], true)) {
            return self::loadPrivateKeyFromPkcs12($filePath, $password);
        }

        if (in_array($ext, ['pem', 'key', 'p8'], true)) {
            return self::loadPrivateKeyFromPem($filePath, $password);
        }

        throw new \Exception("Unsupported Response MLE Private Key file format: {$ext}. Supported: .p12, .pfx, .pem, .key, .p8");
    }

    /**
     * Load private key from PKCS#12 file
     * 
     * @param string $filePath Path to the PKCS#12 file
     * @param string|null $password Password for the PKCS#12 file
     * @return string Unencrypted PEM string
     * @throws \Exception If key cannot be loaded
     */
    public static function loadPrivateKeyFromPkcs12(string $filePath, ?string $password): string
    {
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

        return self::exportPrivateKey($certs['pkey'], (string)$password);
    }

    /**
     * Load private key from PEM file
     * 
     * @param string $filePath Path to the PEM file
     * @param string|null $password Password for encrypted PEM
     * @return string Unencrypted PEM string
     * @throws \Exception If key cannot be loaded
     */
    public static function loadPrivateKeyFromPem(string $filePath, ?string $password): string
    {
        if (!is_file($filePath) || !is_readable($filePath)) {
            throw new \Exception("PEM file not found or not readable: {$filePath}");
        }

        $pem = file_get_contents($filePath);
        if ($pem === false || $pem === '') {
            throw new \Exception('Failed to read PEM file contents.');
        }

        $isEncrypted = self::isPemEncrypted($pem);

        if ($isEncrypted) {
            return self::decryptEncryptedPem($pem, $filePath, $password);
        }

        return self::normalizeUnencryptedPem($pem, $filePath);
    }

    /**
     * Export private key to PEM format with cross-platform compatibility
     * 
     * @param mixed $key OpenSSL key resource or PEM string
     * @param string $password Password for the key
     * @return string Exported PEM string
     * @throws \Exception If export fails
     */
    private static function exportPrivateKey($key, string $password): string
    {
        $exported = '';
        
        self::clearOpenSslErrors();
        
        // Try export without config first (cross-platform)
        $exportOk = @openssl_pkey_export($key, $exported, null);
        
        // Fallback: try with Windows config
        if (!$exportOk || trim($exported) === '') {
            $configArgs = ['config' => 'NUL'];
            $exportOk = @openssl_pkey_export($key, $exported, null, $configArgs);
        }

        // Fallback: check if key is already a PEM string
        if (!$exportOk || trim($exported) === '') {
            if (is_string($key) && preg_match('/BEGIN\\s.+PRIVATE KEY/', $key)) {
                return $key;
            }
            
            $errors = self::collectOpenSslErrors();
            throw new \Exception("Failed exporting private key. OpenSSL: " . ($errors ?: 'Unknown error'));
        }

        return $exported;
    }

    /**
     * Normalize unencrypted PEM to standard format
     * 
     * @param string $pem PEM string
     * @param string $pemPath Path to PEM file (for error messages)
     * @return string Normalized PEM string
     * @throws \Exception If normalization fails
     */
    public static function normalizeUnencryptedPem(string $pem, string $pemPath): string
    {
        self::clearOpenSslErrors();

        $priv = @openssl_pkey_get_private($pem);
        if ($priv === false) {
            $errors = self::collectOpenSslErrors();
            throw new \Exception("Unable to load unencrypted private key from {$pemPath}. OpenSSL errors: " . ($errors ?: 'No specific error'));
        }

        $normalized = '';
        self::clearOpenSslErrors();

        // Try export without config first
        $success = @openssl_pkey_export($priv, $normalized, null);

        // Fallback: try with Windows config
        if (!$success) {
            $configArgs = ['config' => 'NUL'];
            $success = @openssl_pkey_export($priv, $normalized, null, $configArgs);
        }

        if (!$success) {
            $errors = self::collectOpenSslErrors();
            throw new \Exception("Failed to normalize unencrypted key. OpenSSL errors: " . ($errors ?: 'Unknown error'));
        }

        return $normalized;
    }

    /**
     * Decrypt encrypted PEM file
     * 
     * @param string $pem PEM file contents
     * @param string $pemPath Path to PEM file (for error messages)
     * @param string|null $passphrase Password for encrypted PEM
     * @return string Decrypted PEM string
     * @throws \Exception If decryption fails
     */
    public static function decryptEncryptedPem(string $pem, string $pemPath, ?string $passphrase): string
    {
        if ($passphrase === null || $passphrase === '') {
            throw new \Exception('Private key is encrypted but no passphrase provided');
        }

        $key = openssl_pkey_get_private($pem, $passphrase);
        if ($key === false) {
            $errors = self::collectOpenSslErrors();
            throw new \Exception('Unable to decrypt private key. ' . ($errors ?: 'Check passphrase and key format.'));
        }

        $unencryptedPem = '';
        
        // Try without config first (cross-platform)
        $success = @openssl_pkey_export($key, $unencryptedPem, null);
        
        // Fallback: try with Windows config
        if (!$success) {
            $configArgs = ['config' => 'NUL'];
            $success = @openssl_pkey_export($key, $unencryptedPem, null, $configArgs);
        }

        if (!$success) {
            $errors = self::collectOpenSslErrors();
            throw new \Exception('Failed to export unencrypted private key. ' . ($errors ?: 'Unknown error'));
        }

        return $unencryptedPem;
    }

    /**
     * Check if PEM is encrypted
     * 
     * @param string $pem PEM string
     * @return bool True if encrypted
     */
    private static function isPemEncrypted(string $pem): bool
    {
        return strpos($pem, 'BEGIN ENCRYPTED PRIVATE KEY') !== false ||
               strpos($pem, 'Proc-Type: 4,ENCRYPTED') !== false;
    }

    /**
     * Clear OpenSSL error queue
     * 
     * @return void
     */
    private static function clearOpenSslErrors(): void
    {
        while (openssl_error_string() !== false);
    }

    /**
     * Collect all OpenSSL errors from the error queue
     * 
     * @return string Concatenated error messages
     */
    private static function collectOpenSslErrors(): string
    {
        $errors = '';
        while ($msg = openssl_error_string()) {
            $errors .= ($errors ? ' | ' : '') . $msg;
        }
        return $errors;
    }

    /**
     * Validate OpenSSL extension is loaded
     * 
     * @return void
     * @throws \Exception If OpenSSL extension is not loaded
     */
    private static function validateOpenSslExtension(): void
    {
        if (!extension_loaded('openssl')) {
            throw new \Exception("OpenSSL extension not loaded; cannot read private key.");
        }
    }

    /**
     * Convert OpenSSL key object to PEM string
     * 
     * @param \OpenSSLAsymmetricKey|resource $key OpenSSL key object or resource
     * @return string PEM string
     * @throws \Exception If conversion fails
     */
    public static function convertKeyObjectToPem($key): string
    {
        if (is_string($key)) {
            // Already a PEM string
            return $key;
        }

        self::clearOpenSslErrors();

        $pemString = '';
        
        // Try export without config first
        $success = @openssl_pkey_export($key, $pemString, null);
        
        // Fallback: try with Windows config
        if (!$success || trim($pemString) === '') {
            $configArgs = ['config' => 'NUL'];
            $success = @openssl_pkey_export($key, $pemString, null, $configArgs);
        }

        if (!$success || trim($pemString) === '') {
            $errors = self::collectOpenSslErrors();
            throw new \Exception('Failed to convert OpenSSL key object to PEM string. OpenSSL: ' . ($errors ?: 'Unknown error'));
        }

        return $pemString;
    }
}
