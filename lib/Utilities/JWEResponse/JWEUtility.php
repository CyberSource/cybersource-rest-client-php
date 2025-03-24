<?php

namespace CyberSource\Utilities\JWEResponse;
use CyberSource\Authentication\Core\MerchantConfiguration;
use CyberSource\Authentication\Util\JWE\JWEUtility as AuthJWEUtility;
use Exception;

class JWEUtility {

    /**
     * @deprecated This method has been marked as Deprecated and will be removed in coming releases. Use decryptJWEResponseUsingPrivateKey(\$privateKey, \$encodedResponse) instead.
     */
    public static function decryptJWEResponse($encodedResponse, MerchantConfiguration $merchantConfig) {
        trigger_error("This method has been marked as Deprecated and will be removed in coming releases. Use Use decryptJWEResponseUsingPrivateKey(\$privateKey, \$encodedResponse) instead.", E_USER_DEPRECATED);
        return AuthJWEUtility::decryptJWEUsingPEM($merchantConfig, $encodedResponse);
    }

    public static function decryptJWEResponseUsingPrivateKey($privateKey, $encodedResponse) {
        return AuthJWEUtility::decryptJWEUsingPrivateKey($privateKey, $encodedResponse);
    }
}
