<?php


namespace CyberSource\Authentication\Util\JWE;


use CyberSource\Authentication\Core\MerchantConfiguration;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Encryption\Algorithm\ContentEncryption\A256GCM;
use Jose\Component\Encryption\Algorithm\KeyEncryption\RSAOAEP256;
use Jose\Component\Encryption\Compression\CompressionMethodManager;
use Jose\Component\Encryption\Compression\Deflate;
use Jose\Component\Encryption\JWEDecrypter;
use Jose\Component\Encryption\Serializer\CompactSerializer;
use Jose\Component\Encryption\Serializer\JWESerializerManager;
use Jose\Component\KeyManagement\JWKFactory;
use CyberSource\Authentication\Util\Cache as Cache;


class JWEUtility {
    private static $cache = null;
    
    /**
     * @deprecated This method has been marked as Deprecated and will be removed in coming releases.
     */
    private static function loadKeyFromPEMFile($path) {
        trigger_error("This method has been marked as Deprecated and will be removed in coming releases.", E_USER_DEPRECATED);
        return JWKFactory::createFromKeyFile(
            $path,
            '',                   // Secret if the key is encrypted
            [
                'use' => 'enc',         // Additional parameters
            ]
        );
    }

    /**
     * @deprecated This method has been marked as Deprecated and will be removed in coming releases. Use decryptJWEUsingPrivateKey(\$privateKey, \$encodedResponse) instead.
     */
    public static function decryptJWEUsingPEM(MerchantConfiguration $merchantConfig, string $jweBase64Data) {
        trigger_error("This method has been marked as Deprecated and will be removed in coming releases. Use decryptJWEUsingPrivateKey(\$privateKey, \$encodedResponse) instead.", E_USER_DEPRECATED);
        if (!isset(self::$cache)) {
            self::$cache = new Cache();
        }
        $filePath = $merchantConfig -> getJwePEMFileDirectory();
        if (!file_exists($filePath)) {
            return null;
        }

        $jweKey = self::$cache->grabKeyFromPEM($filePath);

        $serializerManager = new JWESerializerManager([
            new CompactSerializer(),
        ]);

        // The key encryption algorithm manager with the A256KW algorithm.
        $keyEncryptionAlgorithmManager = new AlgorithmManager([
            new RSAOAEP256()
        ]);

        // The content encryption algorithm manager with the A256CBC-HS256 algorithm.
        $contentEncryptionAlgorithmManager = new AlgorithmManager([
            new A256GCM(),
        ]);

        // The compression method manager with the DEF (Deflate) method.
        $compressionMethodManager = new CompressionMethodManager([
            new Deflate()
        ]);

        $jweDecrypter = new JWEDecrypter(
            $keyEncryptionAlgorithmManager,
            $contentEncryptionAlgorithmManager,
            $compressionMethodManager
        );

        $jwe = $serializerManager->unserialize($jweBase64Data);
        if($jweDecrypter -> decryptUsingKey($jwe, $jweKey, 0)) {
            return $jwe ->getPayload();
        } else {
            return null;
        }
    }

    public static function decryptJWEUsingPrivateKey(string $privateKey, string $encodedResponse) {
        $jwk = JWKFactory::createFromKey($privateKey);
        // The key encryption algorithm manager with the A256KW algorithm.
        $keyEncryptionAlgorithmManager = new AlgorithmManager([
            new RSAOAEP256()
        ]);

        // The content encryption algorithm manager with the A256CBC-HS256 algorithm.
        $contentEncryptionAlgorithmManager = new AlgorithmManager([
            new A256GCM(),
        ]);

        // The serializer manager. We only use the JWE Compact Serialization Mode.
        $serializerManager = new JWESerializerManager([
            new CompactSerializer(),
        ]);

        $jweDecrypter = new JWEDecrypter(
            $keyEncryptionAlgorithmManager,
            $contentEncryptionAlgorithmManager,
            new CompressionMethodManager([new Deflate()])
        );

        $jwe = $serializerManager->unserialize($encodedResponse);
        if($jweDecrypter -> decryptUsingKey($jwe, $jwk, 0)) {
            return $jwe ->getPayload();
        } else {
            return null;
        }
    }
}

?>
