<?php

namespace CyberSource\Authentication\Util;

class Utility
{
    public static function fetchCertFromCache($cache, $merchantConfig)
    {
        $merchantID = $merchantConfig->getMerchantID();
        $keyFileName = $merchantConfig->getKeyFileName();
        $keyDir = $merchantConfig->getKeysDirectory();

        if (empty($keyFileName)) {
            $keyFileName = $merchantID;
        }

        if (empty($keyDir)) {
            $keyDir = GlobalParameter::KEY_DIR_PATH_DEFAULT;
        }

        $filePath = $keyDir . $keyFileName . ".p12";

        // Get certificate from p12
        if (file_exists($filePath)) {
            $certStore = file_get_contents($filePath);
            $cacheKey = $keyFileName . "_" . strtotime(date("F d Y H:i:s", filemtime($filePath)));
        } else {
            throw new AuthException(GlobalParameter::KEY_FILE_INCORRECT, 0);
        }

        $cacheCertStore = $cache->fetchFromCache($cacheKey);
        if ($cacheCertStore == false) {
            $cache->storeInCache($cacheKey, $certStore);
            $cacheCertStore = $cache->fetchFromCache($cacheKey);
        }
        return $cacheCertStore;
    }

    public static function findCertByAlias($certs, $keyAlias)
    {
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
}
?>