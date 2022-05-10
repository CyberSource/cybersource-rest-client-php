# CyberSource\RefundApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundCapture**](RefundApi.md#refundCapture) | **POST** /pts/v2/captures/{id}/refunds | Refund a Capture
[**refundPayment**](RefundApi.md#refundPayment) | **POST** /pts/v2/payments/{id}/refunds | Refund a Payment


# **refundCapture**
> \CyberSource\Model\PtsV2PaymentsRefundPost201Response refundCapture($refundCaptureRequest, $id)

Refund a Capture

Refund a capture API is only used, if you have requested Capture independenlty using [/pts/v2/payments/{id}/captures](https://developer.cybersource.com/api-reference-assets/index.html#payments_capture) API call. Include the capture ID in the POST request to refund the captured amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\RefundApi();
$refundCaptureRequest = new \CyberSource\Model\RefundCaptureRequest(); // \CyberSource\Model\RefundCaptureRequest | 
$id = "id_example"; // string | The capture ID. This ID is returned from a previous capture request.

try {
    $result = $api_instance->refundCapture($refundCaptureRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundCapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refundCaptureRequest** | [**\CyberSource\Model\RefundCaptureRequest**](../Model/RefundCaptureRequest.md)|  |
 **id** | **string**| The capture ID. This ID is returned from a previous capture request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsRefundPost201Response**](../Model/PtsV2PaymentsRefundPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPayment**
> \CyberSource\Model\PtsV2PaymentsRefundPost201Response refundPayment($refundPaymentRequest, $id)

Refund a Payment

Refund a Payment API is only used, if you have requested Authorization and Capture together in [/pts/v2/payments](https://developer.cybersource.com/api-reference-assets/index.html#payments_payments) API call. Include the payment ID in the POST request to refund the payment amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\RefundApi();
$refundPaymentRequest = new \CyberSource\Model\RefundPaymentRequest(); // \CyberSource\Model\RefundPaymentRequest | 
$id = "id_example"; // string | The payment ID. This ID is returned from a previous payment request.

try {
    $result = $api_instance->refundPayment($refundPaymentRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refundPaymentRequest** | [**\CyberSource\Model\RefundPaymentRequest**](../Model/RefundPaymentRequest.md)|  |
 **id** | **string**| The payment ID. This ID is returned from a previous payment request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsRefundPost201Response**](../Model/PtsV2PaymentsRefundPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

