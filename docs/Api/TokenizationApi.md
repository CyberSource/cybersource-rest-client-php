# CyberSource\TokenizationApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenize**](TokenizationApi.md#tokenize) | **POST** /payments/flex/v1/tokens/ | Tokenize card


# **tokenize**
> \CyberSource\Model\InlineResponse2001 tokenize($tokenizeRequest)

Tokenize card

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
 **tokenizeRequest** | [**\CyberSource\Model\TokenizeRequest**](../Model/TokenizeRequest.md)|  | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

