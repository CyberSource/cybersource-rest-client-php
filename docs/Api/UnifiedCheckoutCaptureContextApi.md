# CyberSource\UnifiedCheckoutCaptureContextApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateUnifiedCheckoutCaptureContext**](UnifiedCheckoutCaptureContextApi.md#generateUnifiedCheckoutCaptureContext) | **POST** /up/v1/capture-contexts | Generate Unified Checkout Capture Context


# **generateUnifiedCheckoutCaptureContext**
> generateUnifiedCheckoutCaptureContext($generateUnifiedCheckoutCaptureContextRequest)

Generate Unified Checkout Capture Context

Generate a one-time use capture context used for the invocation of Unified Checkout. The Request wil contain all of the paramiters for how Unified Chkcout will operate within a client webpage. The resulting payload will be a JWT signed object that can be used to initate Unified Checkout within a merchnat web page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UnifiedCheckoutCaptureContextApi();
$generateUnifiedCheckoutCaptureContextRequest = new \CyberSource\Model\GenerateUnifiedCheckoutCaptureContextRequest(); // \CyberSource\Model\GenerateUnifiedCheckoutCaptureContextRequest | 

try {
    $api_instance->generateUnifiedCheckoutCaptureContext($generateUnifiedCheckoutCaptureContextRequest);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedCheckoutCaptureContextApi->generateUnifiedCheckoutCaptureContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generateUnifiedCheckoutCaptureContextRequest** | [**\CyberSource\Model\GenerateUnifiedCheckoutCaptureContextRequest**](../Model/GenerateUnifiedCheckoutCaptureContextRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jwt

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

