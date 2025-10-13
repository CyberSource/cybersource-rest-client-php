<?php

namespace CyberSource\Authentication\Util;
use Jose\Component\KeyManagement\JWKFactory;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Logging\LogFactory as LogFactory;
use CyberSource\Authentication\Util\MLEException as MLEException;

class Cache
{
    private static $file_cache = array();
    private static $logger = null;
    private static $responseMleKeyLoadFailed = false; // suppress repeated error logs

    public function __construct()
    {
        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), new \CyberSource\Logging\LogConfiguration());
        }
    }
    public static function clearAllFileCache(): void
    {
        self::$file_cache = [];
        if (self::$logger) {
            self::$logger->debug("Cache: cleared all entries.");
        }
    }

    public function updateCache($filePath, $merchantConfig)
    {
        $fileName = basename($filePath);
        $fileModTime = filemtime($filePath);
        $keyPass = $merchantConfig->getKeyPassword();
        $cacheKey = $fileName . '_' . "jwt";
        $certStore = null;
        if (file_exists($filePath)) {
            $certStore = file_get_contents($filePath);
        } else {
            $exception = new AuthException(GlobalParameter::KEY_FILE_INCORRECT, 0);
            self::$logger->error("AuthException : " . GlobalParameter::KEY_FILE_INCORRECT);
            throw $exception;
        }

        $privateKey = null;
        $publicKey = null;

        if (openssl_pkcs12_read($certStore, $certs, $keyPass)) {
            $privateKey = $certs['pkey'];
            $keyAlias = $merchantConfig->getKeyAlias();
            if (empty($keyAlias)) {
                $keyAlias = $merchantConfig->getMerchantID();
            }
            $publicKey = Utility::findCertByAlias($certs, $keyAlias);
            $publicKey = $this->PemToDer($publicKey);
        } else {
            $exception = new AuthException(GlobalParameter::INCORRECT_KEY_PASSWORD, 0);
            self::$logger->error("AuthException : " . GlobalParameter::INCORRECT_KEY_PASSWORD);
            throw $exception;
        }

        self::$file_cache[$cacheKey] = [
            'private_key' => $privateKey,
            'publicKey' => $publicKey,
            'file_mod_time' => $fileModTime,
        ];
    }

    public function grabFileFromP12($merchantConfig)
    {
        $filePath = $this->getFilePath($merchantConfig);

        $fileName = basename($filePath);
        $fileModTime = filemtime($filePath);
        $cacheKey = $fileName . '_' . "jwt";

        if (!isset(self::$file_cache[$cacheKey]) || self::$file_cache[$cacheKey]['file_mod_time'] !== $fileModTime) {
            $this->updateCache($filePath, $merchantConfig);
        }

        return self::$file_cache[$cacheKey];
    }

    private function getFilePath($merchantConfig)
    {
        $keyDir = $merchantConfig->getKeysDirectory();
        $keyFileName = $merchantConfig->getKeyFileName();
        if (empty($keyFileName)) {
            $keyFileName = $merchantConfig->getMerchantID();
        }
        if (empty($keyDir)) {
            $keyDir = GlobalParameter::KEY_DIR_PATH_DEFAULT;
        }

        return $keyDir . $keyFileName . ".p12";
    }

    private function loadKeyFromPEMFile($path)
    {
        return JWKFactory::createFromKeyFile(
            $path,
            '',                   // Secret if the key is encrypted
            [
                'use' => 'enc',         // Additional parameters
            ]
        );
    }

    public function grabKeyFromPEM($filePath)
    {
        $fileName = basename($filePath);
        $fileModTime = filemtime($filePath);
        $cacheKey = $fileName . '_' . "jwe";

        if (!isset(self::$file_cache[$cacheKey]) || self::$file_cache[$cacheKey]['file_mod_time'] !== $fileModTime) {
            $privateKeyFromPEMFile = self::loadKeyFromPEMFile($filePath);
            self::$file_cache[$cacheKey] = [
                'private_key' => $privateKeyFromPEMFile,
                'file_mod_time' => $fileModTime,
            ];
        }

        return self::$file_cache[$cacheKey]['private_key'];
    }

    private function PemToDer($Pem)
    {
        $lines = explode("\n", trim($Pem ?? ''));
        unset($lines[count($lines) - 1]);
        unset($lines[0]);
        return implode("\n", $lines);
    }


    /**
     * Retrieves MLE certificate from cache or loads it if not cached
     * 
     * @param MerchantConfiguration $merchantConfig The merchant configuration
     * @return string|null The MLE certificate or null if not available
     */
    public function getRequestMLECertFromCache($merchantConfig) {
        $merchantId = $merchantConfig->getMerchantID();
        $mleCertPath = null;
        $cacheKey = null;
        if (!empty($merchantConfig->getMleForRequestPublicCertPath())) {
            $mleCertPath = $merchantConfig->getMleForRequestPublicCertPath();
            $cacheKey = $merchantId . GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_CONFIG_CERT;
        } elseif (GlobalParameter::JWT == $merchantConfig->getAuthenticationType()) {
            $mleCertPath = self::getFilePath($merchantConfig);
            if (!file_exists($mleCertPath) || !is_readable($mleCertPath)) {
                self::$logger->warn("MLE certificate file not found or not readable: ". $mleCertPath);
                return null;
            }
            $cacheKey = $merchantId . GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_P12_CERT;
        } else {
            self::$logger->debug("The certificate to use for MLE for requests is not provided in the merchant configuration. Please ensure that the certificate path is provided.");
            return null;
        }
        return self::getMLECertBasedOnCacheKey($merchantConfig, $cacheKey, $mleCertPath);
    }


    private function getMLECertBasedOnCacheKey($merchantConfig, $cacheKey, $mleCertPath) {
        if (!isset(self::$file_cache[$cacheKey]) || self::$file_cache[$cacheKey]['file_mod_time'] !== filemtime($mleCertPath)) {
            self::setupMLECache($merchantConfig, $cacheKey, $mleCertPath);
        } else {
            self::$logger->debug("MLE Certificate found in cache for key: " . $cacheKey);
        }
        return self::$file_cache[$cacheKey]['mle_cert'];
    }

    private function setupMLECache($merchantConfig, $cacheKey, $mleCertPath) {
        
        $fileModTime = filemtime($mleCertPath);
        $mleCert = null;
        
        $lowercaseCacheKey = strtolower($cacheKey);
        $configCertIdentifier = strtolower(GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_CONFIG_CERT);
        $p12CertIdentifier = strtolower(GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_P12_CERT);
        
        $respPrivKeyIdentifier = strtolower(GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_RESPONSE_PRIVATE_KEY);

        // --- Response MLE Private Key handling (early return like Java) ---
        if (substr($lowercaseCacheKey, -strlen($respPrivKeyIdentifier)) === $respPrivKeyIdentifier) {
            $password = $merchantConfig->getResponseMlePrivateKeyFilePassword();
            try {
                $loaded = $this->loadResponseMlePrivateKey($mleCertPath, $password);
                self::$file_cache[$cacheKey] = [
                    'response_mle_private_key' => $loaded['pem'],
                    'file_mod_time'            => $fileModTime
                ];
                self::$responseMleKeyLoadFailed = false; // reset on success
                if (self::$logger) { self::$logger->debug("Response MLE private key cached (length=".strlen($loaded['pem']).")"); }
            } catch (MLEException $e) {
                if (!self::$responseMleKeyLoadFailed) {
                    self::$responseMleKeyLoadFailed = true; // only log first hard failure
                    if (self::$logger) { self::$logger->error("Response MLE private key load failed: ".$e->getMessage()); }
                } else {
                    if (self::$logger) { self::$logger->debug("Response MLE private key load failed again; suppressing repeated error log."); }
                }
            }
            return; // early return either way
        }
        // --- End Response MLE block ---

        if (str_ends_with($lowercaseCacheKey, $configCertIdentifier)) {
            $mleCert = $this->loadCertificateFromPEM($mleCertPath, $merchantConfig);
        } elseif (str_ends_with($lowercaseCacheKey, $p12CertIdentifier)) {
            $mleCert = $this->loadCertificateFromP12($mleCertPath, $merchantConfig);
        } else {
            self::$logger->warning("Unrecognized MLE cache key pattern: " . $cacheKey);
            return;
        }

        self::validateCertificateExpiry($mleCert, $merchantConfig->getRequestMleKeyAlias(), $cacheKey);
        
        self::$file_cache[$cacheKey] = [
            'mle_cert' => $mleCert,
            'file_mod_time' => $fileModTime,
        ];
    }

    /**
     * Loads a certificate from a PEM file
     * 
     * @param string $filePath Path to the PEM file
     * @param MerchantConfiguration $merchantConfig The merchant configuration
     * @return string The certificate
     * @throws MLEException If no certificates are found or an error occurs
     */
    private function loadCertificateFromPEM($filePath, $merchantConfig) {
        try {
            $certs = Utility::extractAllCertificates(file_get_contents($filePath));
            if (empty($certs)) {
                $exception = new MLEException("No certs found in " . $filePath, 0);
                self::$logger->error("No certs found in " . $filePath);
                throw $exception;
            }
            
            try {
                $mleCert = Utility::findCertByAlias(array("extracerts" => $certs), $merchantConfig->getRequestMleKeyAlias());
            } catch (\Exception $e) {
                self::$logger->warning("No certificate found for the specified RequestMleKeyAlias '{$merchantConfig->getRequestMleKeyAlias()}'. Using the first certificate from file {$filePath} as the MLE request certificate.");
                $mleCert = $certs[0];
            }
            
            return $mleCert;
        } catch (\Exception $e) {
            throw new MLEException("Error occurred while loading MLE certificate from PEM file: " . $e->getMessage(), 0, $e);
        }
    }


    /**
     * Loads a certificate from a P12 file
     * 
     * @param string $filePath Path to the P12 file
     * @param MerchantConfiguration $merchantConfig The merchant configuration
     * @return string The certificate
     * @throws MLEException If no certificates are found or an error occurs
     * @throws AuthException If the key password is incorrect
     */
    private function loadCertificateFromP12($filePath, $merchantConfig) {
        try {
            $certStore = file_get_contents($filePath);
            $certs = array();
            $keyPass = $merchantConfig->getKeyPassword();
            
            if (!openssl_pkcs12_read($certStore, $certs, $keyPass)) {
                $exception = new AuthException(GlobalParameter::INCORRECT_KEY_PASSWORD, 0);
                self::$logger->error("AuthException : " . GlobalParameter::INCORRECT_KEY_PASSWORD);
                throw $exception;
            }
            
            $mleCert = Utility::findCertByAlias($certs, $merchantConfig->getRequestMleKeyAlias());
            
            if ($mleCert == null) {
                throw new MLEException("No certificate found with alias " . $merchantConfig->getRequestMleKeyAlias() . " in " . $filePath);
            }
            
            return $mleCert;
        } catch (AuthException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new MLEException("Error occurred while loading MLE certificate from P12 file: " . $e->getMessage(), 0, $e);
        }
    }


    public static function validateCertificateExpiry($certificate, $keyAlias, $cacheKey)
    {
        // Default warning messages
        $warnMessageForNotHaveExpiryDate = "Certificate don't have expiry date.";
        $warnMessageForBeingExpiredCert = "Certificate with alias %s is going to expired on %s . Please update cert before that.";
        $warnMessageForExpiredCert = "Certificate with alias %s is expired as of %s . Please update cert before that.";
        
        // Override log error message based on MLE identifier
        if (strpos($cacheKey, GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_CONFIG_CERT) !== false) {
            $warnMessageForNotHaveExpiryDate = "Certificate for Request MLE don't have expiry date from mleForRequestPublicCertPath in merchant config.";
            $warnMessageForBeingExpiredCert = "Certificate for Request MLE with alias %s is going to expired on %s . Please update cert file in mleForRequestPublicCertPath in merchant config before that.";
            $warnMessageForExpiredCert = "Certificate for Request MLE with alias %s is expired as of %s . Please update cert file in mleForRequestPublicCertPath in merchant config.";
        }
        if (strpos($cacheKey, GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_P12_CERT) !== false) {
            $warnMessageForNotHaveExpiryDate = "Certificate for Request MLE don't have expiry date in p12 file.";
            $warnMessageForBeingExpiredCert = "Certificate for Request MLE with alias %s is going to expired on %s . Please update p12 file before that.";
            $warnMessageForExpiredCert = "Certificate for Request MLE with alias %s is expired as of %s . Please update p12 file.";
        }
        
        try {
            $certDetails = openssl_x509_parse($certificate);
            $notValidAfter = isset($certDetails['validTo_time_t']) ? $certDetails['validTo_time_t'] : null;

            if ($notValidAfter === null) {
                self::$logger->warning(str_replace("{}", $keyAlias, $warnMessageForNotHaveExpiryDate));
            }

            if ($notValidAfter < time()) {
                $expiryDate = date('Y-m-d H:i:s', $notValidAfter);
                $message = sprintf($warnMessageForExpiredCert, $keyAlias, $expiryDate);
                self::$logger->warning($message);
                // throw new MLEException("Certificate with MLE alias $keyAlias is expired.");
            } else {
                $timeToExpire = $notValidAfter - time();
                $warningPeriod = GlobalParameter::CERTIFICATE_EXPIRY_DATE_WARNING_DAYS * 24 * 60 * 60;

                if ($timeToExpire < $warningPeriod) {
                    $expiryDate = date('Y-m-d H:i:s', $notValidAfter);
                    $message = sprintf($warnMessageForBeingExpiredCert, $keyAlias, $expiryDate);
                    self::$logger->warning($message);
                }
            }
        } catch (\Exception $e) {
            self::$logger->error("Error validating certificate expiry: " . $e->getMessage());
            // throw new MLEException("Error validating certificate expiry: " . $e->getMessage());
        } 
    }    /**
     * Load Response MLE private key supporting:
     *  - PKCS#12 (.p12, .pfx)
     *  - PEM / KEY / P8
     * Returns ['pem' => normalized unencrypted PEM string, 'resource' => OpenSSL key resource]
     */
    private function loadResponseMlePrivateKey(string $filePath, ?string $password): array
    {
        if (!extension_loaded('openssl')) {
            throw new MLEException("OpenSSL extension not loaded; cannot read private key.");
        }

        $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

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

        if (in_array($ext, ['pem','key','p8'], true)) {
            // Use your proven decryption method for encrypted PEM/P8 keys
            try {
                $unencryptedPem = $this->decryptPrivateKeyPem($filePath, $password);
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
     * Decrypt encrypted PEM/P8 private key files using your proven method
     * Integrated from your working code snippet with cross-platform compatibility
     */
    private function decryptPrivateKeyPem(string $pemPath, ?string $passphrase): string
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
            // private_key_type - let OpenSSL auto-detect
            // private_key_bits - not applicable to all types
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
            throw new MLEException('Failed to export unencrypted private key. ' . ($err ?: 'Unknown error'));
        }

        // Free the key handle explicitly (PHP version compatibility)
        if (is_resource($key)) {
            openssl_free_key($key);
        } elseif ($key instanceof \OpenSSLAsymmetricKey) {
            // PHP 8+: no need to free explicitly, GC will handle it
        }
        
        return $unencryptedPem;
    }

    public function getMleResponsePrivateKeyFromFilePath($merchantConfig)
    {
        $merchantId = $merchantConfig->getMerchantID();
        $filePath   = $merchantConfig->getResponseMlePrivateKeyFilePath();

        if (empty($filePath) || !file_exists($filePath)) {
            self::$logger->debug("Response MLE private key file not found: " . $filePath);
            return null;
        }

        $cacheKey = $merchantId . GlobalParameter::MLE_CACHE_IDENTIFIER_FOR_RESPONSE_PRIVATE_KEY;
        $modTime  = filemtime($filePath);

        if ($modTime === false) {
            self::$logger->error("Unable to obtain modification time for response MLE private key file: " . $filePath);
            return null;
        }

        if (!isset(self::$file_cache[$cacheKey]) ||
            self::$file_cache[$cacheKey]['file_mod_time'] !== $modTime) {

            $this->setupMLECache($merchantConfig, $cacheKey, $filePath);
        } else {
            self::$logger->debug("Response MLE private key retrieved from cache.");
        }

        return self::$file_cache[$cacheKey]['response_mle_private_key'] ?? null;

    }
}
