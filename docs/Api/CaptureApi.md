# CyberSource\CaptureApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**capturePayment**](CaptureApi.md#capturePayment) | **POST** /v2/payments/{id}/captures | Capture a Payment
[**getCapture**](CaptureApi.md#getCapture) | **GET** /v2/captures/{id} | Retrieve a Capture


# **capturePayment**
> \CyberSource\Model\InlineResponse2012 capturePayment($capturePaymentRequest, $id)

Capture a Payment

Include the payment ID in the POST request to capture the payment amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CaptureApi();
$capturePaymentRequest = new \CyberSource\Model\CapturePaymentRequest(); // \CyberSource\Model\CapturePaymentRequest | 
$id = "id_example"; // string | The payment ID returned from a previous payment request. This ID links the capture to the payment.

try {
    $result = $api_instance->capturePayment($capturePaymentRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CaptureApi->capturePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capturePaymentRequest** | [**\CyberSource\Model\CapturePaymentRequest**](../Model/CapturePaymentRequest.md)|  |
 **id** | **string**| The payment ID returned from a previous payment request. This ID links the capture to the payment. |

### Return type

[**\CyberSource\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCapture**
> \CyberSource\Model\InlineResponse2004 getCapture($id)

Retrieve a Capture

Include the capture ID in the GET request to retrieve the capture details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CaptureApi();
$id = "id_example"; // string | The capture ID returned from a previous capture request.

try {
    $result = $api_instance->getCapture($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CaptureApi->getCapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The capture ID returned from a previous capture request. |

### Return type

[**\CyberSource\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

