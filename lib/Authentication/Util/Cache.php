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

    public function __construct()
    {
        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), new \CyberSource\Logging\LogConfiguration());
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
        // --- Response MLE Private Key handling with early return ---
        if (substr($lowercaseCacheKey, -strlen($respPrivKeyIdentifier)) === $respPrivKeyIdentifier) {
            $password = $merchantConfig->getResponseMlePrivateKeyFilePassword();
            try {
                $loaded = Utility::loadResponseMlePrivateKey($mleCertPath, $password);
                self::$file_cache[$cacheKey] = [
                    'response_mle_private_key' => $loaded,
                    'file_mod_time'            => $fileModTime
                ];
            } catch (\Exception $e) {
                if (self::$logger) { 
                    self::$logger->error("Response MLE private key load failed: ".$e->getMessage()); 
                }
                self::$file_cache[$cacheKey] = [
                    'response_mle_private_key' => null,
                    'file_mod_time' => $fileModTime
                ];
            }
            return;
        }
        // --- End Response MLE block ---

        if (str_ends_with($lowercaseCacheKey, $configCertIdentifier)) {
            $mleCert = $this->loadCertificateFromPEM($mleCertPath, $merchantConfig);
        } elseif (str_ends_with($lowercaseCacheKey, $p12CertIdentifier)) {
            $mleCert = $this->loadCertificateFromP12($mleCertPath, $merchantConfig);
        } else {
            if (self::$logger) {
                self::$logger->warning("Unrecognized MLE cache key pattern: " . $cacheKey);
            }
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
