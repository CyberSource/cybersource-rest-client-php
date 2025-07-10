<?php

namespace CyberSource\Authentication\Util;
use Jose\Component\KeyManagement\JWKFactory;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Logging\LogFactory as LogFactory;

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
        $mleCert = null;

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

        $this->putMLECertToCache($merchantConfig);

        self::$file_cache[$cacheKey] = [
            'private_key' => $privateKey,
            'publicKey' => $publicKey,
            'file_mod_time' => $fileModTime,
        ];
    }

    private function tryGetMLECertFromPath($filePath, $merchantConfig)
    {
        if (empty($filePath) || !file_exists($filePath)) {
            return null;
        }        
        $fileName = basename($filePath);
        $fileModTime = filemtime($filePath);
        $cacheKey = $fileName . '_' . "mle";
        
        if (!isset(self::$file_cache[$cacheKey]) || self::$file_cache[$cacheKey]['file_mod_time'] !== $fileModTime) {
            $certContent = file_get_contents($filePath);
            $x509Cert = openssl_x509_read($certContent);
            if ($x509Cert === false) {
                self::$logger->error("Failed to read X.509 certificate from file: " . $filePath);
                return null;
            }
            $mleCert = Utility::findCertByAlias(array("cert" => $x509Cert), $merchantConfig->getMleKeyAlias());

            if (!$mleCert) {
                self::$logger->error("MLE certificate with alias " . $merchantConfig->getMleKeyAlias() . " not found in file: " . $filePath);
                return null;
            }
            self::$file_cache[$cacheKey] = [
                'mle_cert' => $mleCert,
                'file_mod_time' => $fileModTime,
            ];
        }
        
        return self::$file_cache[$cacheKey];
    }

    public function putMLECertToCache($merchantConfig)
    {
        // 1. First check filepath
        $filePath = $merchantConfig->getMLECert();
        if (!empty($filePath)) {
            try {
                $cacheEntry = $this->tryGetMLECertFromPath($filePath, $merchantConfig);
                if ($cacheEntry !== null) {
                    self::$logger->debug("MLE certificate found in specified path: " . $filePath);
                    return $cacheEntry;
                }
            } catch (\Exception $e) {
                self::$logger->warning("Failed to read MLE cert from path: " . $e->getMessage());
            }
        }
        
        // 2. Then check p12
        try {
            $p12FilePath = $this->getFilePath($merchantConfig);
            $keyPass = $merchantConfig->getKeyPassword();
            $certStore = file_get_contents($p12FilePath);
            
            if (openssl_pkcs12_read($certStore, $certs, $keyPass)) {
                $mleCert = Utility::findCertByAlias($certs, $merchantConfig->getMleKeyAlias());
                if ($mleCert) {
                    // Convert to X.509 certificate object
                    $x509Cert = openssl_x509_read($mleCert);
                    if ($x509Cert === false) {
                        self::$logger->error("Failed to read X.509 certificate from p12");
                        throw new \Exception("Failed to read X.509 certificate from p12");
                    }
                    self::$logger->debug("MLE certificate found in specified path: " . $p12FilePath);
                    $fileName = basename($p12FilePath);
                    $cacheKey = $fileName . '_' . "mle";
                    self::$file_cache[$cacheKey] = [
                        'mle_cert' => $x509Cert,
                        'file_mod_time' => filemtime($p12FilePath),
                    ];
                    return self::$file_cache[$cacheKey];
                }
            }
        } catch (\Exception $e) {
            self::$logger->warning("Failed to extract MLE cert from p12: " . $e->getMessage());
        }
        
        // 3. Then use default
        $defaultPath = GlobalParameter::DEFAULT_MLE_CERT;
        $cacheEntry = $this->tryGetMLECertFromPath($defaultPath, $merchantConfig);
        if ($cacheEntry !== null) {
            self::$logger->debug("MLE certificate found in default path: " . $defaultPath);
            return $cacheEntry;
        }
        
        // If we get here, all methods failed
        self::$logger->error("Failed to get MLE certificate from any source");
        throw new AuthException("Failed to get MLE certificate", 0);
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
    
    public function getMLECert($merchantConfig)
    {
        // Try to get the MLE cert from cache or retrieve it if not present
        $cacheEntry = $this->putMLECertToCache($merchantConfig);
        
        if ($cacheEntry === null || !isset($cacheEntry['mle_cert'])) {
            self::$logger->error("Failed to get MLE certificate");
            throw new AuthException("Failed to get MLE certificate", 0);
        }
        
        return $cacheEntry;
    }

    private function PemToDer($Pem)
    {
        $lines = explode("\n", trim($Pem ?? ''));
        unset($lines[count($lines) - 1]);
        unset($lines[0]);
        return implode("\n", $lines);
    }
}
