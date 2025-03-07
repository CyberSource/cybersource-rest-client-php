<?php

namespace CyberSource\Authentication\Util;
use Jose\Component\KeyManagement\JWKFactory;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Core\AuthException as AuthException;

class Cache
{
    private static $file_cache = array();

    public function __construct()
    {

    }

    public function updateCache($filePath, $merchantConfig)
    {
        $fileName = basename($filePath);
        $fileModTime = filemtime($filePath);
        $keyPass = $merchantConfig->getKeyPassword();
        $cacheKey = $fileName . '_' . "jwt";

        $certStore = file_get_contents($filePath);
        $privateKey = null;
        $publicKey = null;
        $mleCert = null;

        if (openssl_pkcs12_read($certStore, $certs, $keyPass)) {
            $privateKey = $certs['pkey'];
            if (!empty($merchantConfig->getKeyAlias())) {
            $publicKey = Utility::findCertByAlias($certs, $merchantConfig->getKeyAlias());
            } else {
            $publicKey = $certs['cert'];
            }
            $publicKey = $this->PemToDer($publicKey);
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