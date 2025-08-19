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
}
?>