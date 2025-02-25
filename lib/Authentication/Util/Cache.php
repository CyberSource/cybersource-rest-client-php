<?php

namespace CyberSource\Authentication\Util;
use Jose\Component\KeyManagement\JWKFactory;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Authentication\Core\AuthException as AuthException;

class Cache
{
    private $file_cache = array();

    public function __construct()
    {

    }

    public function fetchFromCache($key)
    {
        if ($this->checkIfExistInCache($key))
        {
            return $this->file_cache[$key];
        }

        return false;
    }

    public function storeInCache($key, $value)
    {
        if (!$this->checkIfExistInCache($key))
        {
            $this->file_cache[$key] = $value;
            return true;
        }

        return false;
    }

    public function checkIfExistInCache($key)
    {
        foreach ($this->file_cache as $cache_key => $cache_value)
        {
            if (isset($cache_value))
            {
                return true;
            }
        }

        return false;
    }

    public function updateCache($filePath, $merchantConfig)
    {
        $fileName = basename($filePath);
        $fileModTime = filemtime($filePath);
        $keyPass = $merchantConfig->getKeyPassword();
        if (empty($keyPass)) {
            $keyPass = $merchantConfig->getMerchantID();
        }

        $certStore = file_get_contents($filePath);
        $privateKey = null;
        $publicKey = null;
        $mleCert = null;

        if (openssl_pkcs12_read($certStore, $certs, $keyPass)) {
            $privateKey = $certs['pkey'];
            $publicKey = $this->PemToDer($certs['cert']);
        }

        if (!empty($merchantConfig->getMleKeyAlias())) {
            $mleCert = Utility::findCertByAlias($certs, $merchantConfig->getMleKeyAlias());
        }

        $this->file_cache[$fileName] = [
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

        if (!isset($this->file_cache[$fileName]) || $this->file_cache[$fileName]['file_mod_time'] !== $fileModTime) {
            $this->updateCache($filePath, $merchantConfig);
        }

        return $this->fetchFromCache($fileName);
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

        if (!isset($this->file_cache[$fileName]) || $this->file_cache[$fileName]['file_mod_time'] !== $fileModTime) {
            $privateKeyFromPEMFile = self::loadKeyFromPEMFile($filePath);
            $this->file_cache[$fileName] = [
                'private_key' => $privateKeyFromPEMFile,
                'file_mod_time' => $fileModTime,
            ];
        }

        return $this->file_cache[$fileName]['private_key'];
    }

    private function PemToDer($Pem)
    {
        $lines = explode("\n", trim($Pem ?? ''));
        unset($lines[count($lines) - 1]);
        unset($lines[0]);
        return implode("\n", $lines);
    }
}