# CyberSource\FlexAPIApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateFlexAPICaptureContext**](FlexAPIApi.md#generateFlexAPICaptureContext) | **POST** /flex/v2/sessions | Establish a Payment Session with a Capture Context


# **generateFlexAPICaptureContext**
> string generateFlexAPICaptureContext($generateFlexAPICaptureContextRequest)

Establish a Payment Session with a Capture Context

To establish a payment session, include the API fields you plan to use in that session in the body of the request.  The system then returns a JSON Web Token (JWT) that includes the capture context.   To determine which fields to include in your capture context, identify the personal information that you wish to isolate from the payment session.  **Capture Context Fields**<br> When making a session request, any fields that you request to be added to the capture context are required by default.  However, you can choose to make a field optional by setting the required parameter to false.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\FlexAPIApi();
$generateFlexAPICaptureContextRequest = new \CyberSource\Model\GenerateFlexAPICaptureContextRequest(); // \CyberSource\Model\GenerateFlexAPICaptureContextRequest | 

try {
    $result = $api_instance->generateFlexAPICaptureContext($generateFlexAPICaptureContextRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexAPIApi->generateFlexAPICaptureContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generateFlexAPICaptureContextRequest** | [**\CyberSource\Model\GenerateFlexAPICaptureContextRequest**](../Model/GenerateFlexAPICaptureContextRequest.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jwt

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

