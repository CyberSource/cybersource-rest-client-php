<?php

namespace CyberSource\Authentication\Util;

use CyberSource\Authentication\Util\GlobalParameter;
use CyberSource\Authentication\Util\Cache as Cache;
use \CyberSource\Logging\LogFactory as LogFactory;
use CyberSource\Logging\LogConfiguration;
use Jose\Component\Core\JWK;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Encryption\JWEBuilder;
use Jose\Component\Encryption\Serializer\CompactSerializer;
use Jose\Component\KeyManagement\JWKFactory;
use Jose\Component\Encryption\Algorithm\KeyEncryption\RSAOAEP256;
use Jose\Component\Encryption\Algorithm\ContentEncryption\A256GCM;
use Jose\Component\Encryption\Compression\CompressionMethodManager;
use Jose\Component\Encryption\Compression\Deflate;
use CyberSource\Authentication\Util\MLEException;

/*
Purpose : MLE encryption for request body
*/

class MLEUtility
{
    private static $logger = null;

    private static $cache = null;

    public static function checkIsMLEForAPI($merchantConfig, $isMLESupportedByCybsForApi, $operationIds)
    {
        $isMLEForAPI = false;

        if ($isMLESupportedByCybsForApi && $merchantConfig->getUseMLEGlobally()) {
            $isMLEForAPI = true;
        }

        $operationArray = array_map('trim', explode(',', $operationIds));

        if (!empty($merchantConfig->getMapToControlMLEonAPI())) {
            foreach ($operationArray as $operationId) {
                if (array_key_exists($operationId, $merchantConfig->getMapToControlMLEonAPI())) {
                    $isMLEForAPI = $merchantConfig->getMapToControlMLEonAPI()[$operationId];
                    break;
                }
            }
        }
        return $isMLEForAPI;
    }

    public static function encryptRequestPayload($merchantConfig, $requestBody)
    {
        if ($requestBody === null || $requestBody === '') {
            return $requestBody;
        }
        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(static::class), $merchantConfig->getLogConfiguration());
        }
        
        $mleCert = self::getMLECert($merchantConfig);

        if ($mleCert == false && GlobalParameter::HTTP_SIGNATURE == $merchantConfig->getAuthenticationType()) {
            self::$logger->debug("The certificate to use for MLE for requests is not provided in the merchant configuration. Please ensure that the certificate path is provided.");
            self::$logger->debug("Currently, MLE for requests using HTTP Signature as authentication is not supported by Cybersource. By default, the SDK will fall back to non-encrypted requests.");
            return $requestBody;
        }

        if ($merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
            $printRequestBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($requestBody);
        } else {
            $printRequestBody = $requestBody;
        }

        self::$logger->debug("Request before MLE:\n" . print_r($printRequestBody, true));

        $jweToken = self::generateToken($mleCert, $requestBody);
        $mleRequest = json_encode(['encryptedRequest' => $jweToken]);

        self::$logger->debug("Request after MLE:\n" . print_r($mleRequest, true));
        return $mleRequest;
    }

    private static function generateToken($cert, $requestBody)
    {
        try {
            $serialNumber = self::extractSerialNumber($cert);

            $publicKey = openssl_pkey_get_details(openssl_pkey_get_public($cert))['key'];

            $jwk = JWKFactory::createFromKey($publicKey, null, [
                'kid' => $serialNumber,
            ]);

            $header = [
                'alg' => 'RSA-OAEP-256',
                'enc' => 'A256GCM',
                'cty' => 'JWT',
                'kid' => $serialNumber,
                'iat' => time(),
            ];

            $algorithmManager = new AlgorithmManager([
                new RSAOAEP256(),
                new A256GCM()
            ]);

            $compressionManager = new CompressionMethodManager([
                new Deflate()
            ]);

            $jweBuilder = new JWEBuilder(
                $algorithmManager,
                $algorithmManager,
                $compressionManager
            );

            $jwe = $jweBuilder
                ->create()
                ->withPayload($requestBody)
                ->withSharedProtectedHeader($header)
                ->addRecipient($jwk)
                ->build();

            $serializer = new CompactSerializer();
            return $serializer->serialize($jwe);
        } catch (\Exception $e) {
            self::$logger->error("Error encrypting request payload: " . $e->getMessage());
            throw new MLEException("Error encrypting request payload: " . $e->getMessage());
        }
    }

    public static function getMLECert($merchantConfig)
    {
        try {
            if (!isset(self::$cache)) {
                self::$cache = new Cache();
            }
            return self::$cache->getRequestMLECertFromCache($merchantConfig);

        } catch (\Exception $e) {
            self::$logger->error("Error fetching MLE certificate: " . $e->getMessage());
            throw new MLEException("Error fetching MLE certificate: " . $e->getMessage());
        }
    }

    public static function extractSerialNumber($cert)
    {
        try {
            $certDetails = openssl_x509_parse($cert);

            $serialNumber = null;
            if (isset($certDetails['subject']['serialNumber'])) {
                $serialNumber = $certDetails['subject']['serialNumber'];
            }

            if ($serialNumber === null) {
                self::$logger->warning("Serial number not found in MLE certificate for alias.");
                $serialNumber = $certDetails['serialNumber'];
            }
            return $serialNumber;
        } catch (\Exception $e) {
            self::$logger->error("Error extracting serial number from certificate: " . $e->getMessage());
            throw new MLEException("Error extracting serial number from certificate: " . $e->getMessage());
        }
    }

    
}
?>