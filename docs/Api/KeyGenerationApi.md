# CyberSource\KeyGenerationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generatePublicKey**](KeyGenerationApi.md#generatePublicKey) | **POST** /flex/v1/keys | Generate Key


# **generatePublicKey**
> \CyberSource\Model\FlexV1KeysPost200Response generatePublicKey($format, $generatePublicKeyRequest)

Generate Key

Generate a one-time use public key and key ID to encrypt the card number in the follow-on Tokenize Card request. The key used to encrypt the card number on the cardholder’s device or browser is valid for 15 minutes and must be used to verify the signature in the response message. CyberSource recommends creating a new key for each order. Generating a key is an authenticated request initiated from your servers, prior to requesting to tokenize the card data from your customer’s device or browser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\KeyGenerationApi();
$format = "JWT"; // string | Indicator to enable the receipt of the Keys response in Flex 11+ format (JWT) or legacy (parameter not required)
$generatePublicKeyRequest = new \CyberSource\Model\GeneratePublicKeyRequest(); // \CyberSource\Model\GeneratePublicKeyRequest | 

try {
    $result = $api_instance->generatePublicKey($format, $generatePublicKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyGenerationApi->generatePublicKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Indicator to enable the receipt of the Keys response in Flex 11+ format (JWT) or legacy (parameter not required) | [default to JWT]
 **generatePublicKeyRequest** | [**\CyberSource\Model\GeneratePublicKeyRequest**](../Model/GeneratePublicKeyRequest.md)|  |

### Return type

[**\CyberSource\Model\FlexV1KeysPost200Response**](../Model/FlexV1KeysPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

