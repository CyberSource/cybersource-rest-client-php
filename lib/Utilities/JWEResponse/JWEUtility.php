<?php

namespace CyberSource\Utilities\JWEResponse;
use CyberSource\Authentication\Core\MerchantConfiguration;
use CyberSource\Authentication\Util\JWE\JWEUtility as AuthJWEUtility;
use Exception;

class JWEUtility {

    /**
     * @throws Exception
     */
    public static function decryptJWEResponse($encodedResponse, MerchantConfiguration $merchantConfig) {
        return AuthJWEUtility::decryptJWEUsingPEM($merchantConfig, $encodedResponse);
    }
}
