# CyberSource\UnifiedCheckoutCaptureContextApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateUnifiedCheckoutCaptureContext**](UnifiedCheckoutCaptureContextApi.md#generateUnifiedCheckoutCaptureContext) | **POST** /up/v1/capture-contexts | Generate Unified Checkout Capture Context


# **generateUnifiedCheckoutCaptureContext**
> string generateUnifiedCheckoutCaptureContext($generateUnifiedCheckoutCaptureContextRequest)

Generate Unified Checkout Capture Context

Generate a one-time use capture context used for the invocation of Unified Checkout. The Request wil contain all of the parameters for how Unified Checkout will operate within a client webpage. The resulting payload will be a JWT signed object that can be used to initiate Unified Checkout within a merchant web page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UnifiedCheckoutCaptureContextApi();
$generateUnifiedCheckoutCaptureContextRequest = new \CyberSource\Model\GenerateUnifiedCheckoutCaptureContextRequest(); // \CyberSource\Model\GenerateUnifiedCheckoutCaptureContextRequest | 

try {
    $result = $api_instance->generateUnifiedCheckoutCaptureContext($generateUnifiedCheckoutCaptureContextRequest);
    print_r($result);
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jwt

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

