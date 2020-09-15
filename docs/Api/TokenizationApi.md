# CyberSource\TokenizationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenize**](TokenizationApi.md#tokenize) | **POST** /flex/v1/tokens | Tokenize Card


# **tokenize**
> \CyberSource\Model\FlexV1TokensPost200Response tokenize($tokenizeRequest)

Tokenize Card

Returns a token representing the supplied card details. The token replaces card data and can be used as the Subscription ID in the CyberSource Simple Order API or SCMP API. This is an unauthenticated call that you should initiate from your customer’s device or browser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenizationApi();
$tokenizeRequest = new \CyberSource\Model\TokenizeRequest(); // \CyberSource\Model\TokenizeRequest | 

try {
    $result = $api_instance->tokenize($tokenizeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizationApi->tokenize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenizeRequest** | [**\CyberSource\Model\TokenizeRequest**](../Model/TokenizeRequest.md)|  |

### Return type

[**\CyberSource\Model\FlexV1TokensPost200Response**](../Model/FlexV1TokensPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

