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

        $mleCert = Utility::findCertByAlias($certs, $merchantConfig->getMleKeyAlias());

        self::$file_cache[$cacheKey] = [
            'private_key' => $privateKey,
            'publicKey' => $publicKey,
            'file_mod_time' => $fileModTime,
            'mle_cert' => $mleCert,
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
}
