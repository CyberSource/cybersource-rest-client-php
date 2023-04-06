# CyberSource\MicroformIntegrationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateCaptureContext**](MicroformIntegrationApi.md#generateCaptureContext) | **POST** /microform/v2/sessions | Generate Capture Context


# **generateCaptureContext**
> string generateCaptureContext($generateCaptureContextRequest)

Generate Capture Context

This API is used to generate the Capture Context data structure for the Microform Integration.  Microform is a browser-based acceptance solution that allows a seller to capture payment information is a secure manner from their website.  For more information about Flex Microform transactions, see the [Flex Developer Guides Page](https://developer.cybersource.com/api/developer-guides/dita-flex/SAFlexibleToken.html). For examples on how to integrate Flex Microform within your webpage please see our [GitHub Flex Samples](https://github.com/CyberSource?q=flex&type=&language=) This API is a server-to-server API to generate the capture context that can be used to initiate instance of microform on a acceptance page.  The capture context is a digitally signed JWT that provides authentication, one-time keys, and the target origin to the Microform Integration application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MicroformIntegrationApi();
$generateCaptureContextRequest = new \CyberSource\Model\GenerateCaptureContextRequest(); // \CyberSource\Model\GenerateCaptureContextRequest | 

try {
    $result = $api_instance->generateCaptureContext($generateCaptureContextRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MicroformIntegrationApi->generateCaptureContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generateCaptureContextRequest** | [**\CyberSource\Model\GenerateCaptureContextRequest**](../Model/GenerateCaptureContextRequest.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jwt

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

