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
use \CyberSource\Authentication\Util\JWE\JWEUtility;

/*
Purpose : MLE encryption for request body
*/

class MLEUtility
{
    private static $logger = null;

    private static $cache = null;

    public static function checkIsMLEForAPI($merchantConfig, $inboundMLEStatus, $operationIds)
    {
        $isMLEForAPI = false;

        if (
            isset($inboundMLEStatus) &&
            strtolower($inboundMLEStatus) === 'optional' &&
            $merchantConfig->getEnableRequestMLEForOptionalApisGlobally()
        ) {
            $isMLEForAPI = true;
        }

        if (
            isset($inboundMLEStatus) &&
            strtolower($inboundMLEStatus) === 'mandatory'
        ) {
            $isMLEForAPI = !$merchantConfig->getDisableRequestMLEForMandatoryApisGlobally();
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

    public static function checkIsResponseMLEForAPI($merchantConfig, $operationIds)
    {
        // default false
        $isResponseMLEForAPI = false;

        // Global flag
        if (method_exists($merchantConfig, 'getEnableResponseMleGlobally') &&
            $merchantConfig->getEnableResponseMleGlobally()) {
            $isResponseMLEForAPI = true;
        }

        // Multiple operation ids (e.g., apiCall, apiCallAsync)
        $operationArray = array_map('trim', explode(',', (string)$operationIds));

        // Per-operation override map (internal response map)
        if (method_exists($merchantConfig, 'getInternalMapToControlResponseMLEonAPI')) {
            $map = $merchantConfig->getInternalMapToControlResponseMLEonAPI();
            if (is_array($map) && !empty($map)) {
                foreach ($operationArray as $operationId) {
                    if (array_key_exists($operationId, $map)) {
                        $isResponseMLEForAPI = (bool)$map[$operationId]; //check
                        break;
                    }
                }
            }
        }
        echo "[MLE] Response MLE decision for operations [" . implode(',', $operationArray) . "]: " . ($isResponseMLEForAPI ? "true" : "false") . "\n";

        return $isResponseMLEForAPI;
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

    public static function checkIsMleEncryptedResponse($responseBody)
    {
        echo " m here 2.\n";
        if ($responseBody === null) { return false; }
        $trim = trim($responseBody);
        if ($trim === '' || $trim[0] !== '{') { return false; }
        try {
            $decoded = json_decode($responseBody, true);
            if (!is_array($decoded)) { return false; }
            if (count($decoded) !== 1) { return false; }
            return array_key_exists('encryptedResponse', $decoded) && is_string($decoded['encryptedResponse']);
        } catch (\Exception $e) {
            return false;
        }
    }    public static function decryptMleResponsePayload($merchantConfig, $mleResponseBody)
    {
        echo "[MLE][Decrypt] Enter decryptMleResponsePayload()\n";

        if (!self::checkIsMleEncryptedResponse($mleResponseBody)) {
            throw new MLEException("Response body is not MLE encrypted.");
        }
        $jweToken = self::getResponseMleToken($mleResponseBody);
        if (empty($jweToken)) {
            echo "[MLE][Decrypt] JWE token missing in encryptedResponse wrapper.\n";
            return $mleResponseBody;
        }
        $privateKey = self::getMleResponsePrivateKey($merchantConfig);
        if (empty($privateKey)) {
            echo "[MLE][Decrypt] Private key unavailable for decryption.\n";
            throw new MLEException("Response MLE private key not available for decryption.");
        }
        echo "[MLE][Decrypt] Loaded private key (" . strlen($privateKey) . " bytes).\n";        // Cache already handles password decryption and returns unencrypted PEM
        // No password needed for JWE decryption since key is already decrypted
        try {
            $decrypted = JWEUtility::decryptJWEUsingPrivateKey($privateKey, $jweToken);
            if ($decrypted === null) {
                throw new MLEException("Failed to decrypt MLE response payload.");
            }
            echo "[MLE][Decrypt] Decryption successful. Decrypted payload length: " . strlen($decrypted) . "\n";
            return $decrypted;
        } catch (\Exception $e) {
            throw new MLEException("MLE Response decryption error: " . $e->getMessage());
        }
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

    private static function getResponseMleToken($mleResponseBody)
    {
        echo " m here 1.\n";
        try {
            $decoded = json_decode($mleResponseBody, true);
            return $decoded['encryptedResponse'] ?? null;
        } catch (\Exception $e) {
            return null;
        }
    }

    private static function getMleResponsePrivateKey($merchantConfig)
    {
        // if (null != $merchantConfig->getResponseMlePrivateKey()) {
        //     echo "[MLE] Using inline response private key.\n";
        //     return $merchantConfig->getResponseMlePrivateKey();
        // }

        if (!isset(self::$cache)) { //check static n multithreading
            echo "[MLE] Creating Cache instance for response private key.\n";

            self::$cache = new Cache();
        }
        // self::$cache::clearAllFileCache();
        // echo "[MLE] Cleared all file cache.\n";
        $key = self::$cache->getMleResponsePrivateKeyFromFilePath($merchantConfig);

        if ($key) {
            echo "[MLE] Loaded response private key from file/cache.\n";
        } else {
            echo "[MLE] Failed to load response private key from file/cache.\n";
        }

        return $key;
        // return self::$cache->getMleResponsePrivateKeyFromFilePath($merchantConfig);
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