<?php


namespace CyberSource\Authentication\Util\JWE;


use CyberSource\Authentication\Core\MerchantConfiguration;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Core\JWK;
use Jose\Component\Encryption\Algorithm\KeyEncryption\RSAOAEP256;
use Jose\Component\Encryption\Algorithm\ContentEncryption\A256GCM;
use Jose\Component\Encryption\Compression\CompressionMethodManager;
use Jose\Component\Encryption\Compression\Deflate;
use Jose\Component\Encryption\Serializer\JWESerializerManager;
use Jose\Component\Encryption\Serializer\CompactSerializer;
use Jose\Component\Encryption\JWEDecrypter;
use Jose\Component\KeyManagement\JWKFactory;


class JWEUtility {
    public static function loadKeyFromPEMFile($path) : JWK {
        return JWKFactory::createFromKeyFile(
            $path,
            '',                   // Secret if the key is encrypted
            [
                'use' => 'enc',         // Additional parameters
            ]
        );
    }

    public static function decryptJWEUsingPEM(MerchantConfiguration $merchantConfig, string $jweBase64Data) : ?string {
        $jweKey = self::loadKeyFromPEMFile($merchantConfig -> getJwePEMFileDirectory());
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
        if($jweDecrypter->decryptUsingKey($jwe, $jweKey, 0)) {
            return $jwe ->getPayload();
        } else {
            return null;
        }
    }
}

?>
