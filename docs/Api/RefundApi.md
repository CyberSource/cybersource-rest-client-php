# CyberSource\RefundApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRefund**](RefundApi.md#getRefund) | **GET** /v2/refunds/{id} | Retrieve a Refund
[**refundCapture**](RefundApi.md#refundCapture) | **POST** /v2/captures/{id}/refunds | Refund a Capture
[**refundPayment**](RefundApi.md#refundPayment) | **POST** /v2/payments/{id}/refunds | Refund a Payment


# **getRefund**
> \CyberSource\Model\InlineResponse2005 getRefund($id)

Retrieve a Refund

Include the refund ID in the GET request to to retrieve the refund details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\RefundApi();
$id = "id_example"; // string | The refund ID. This ID is returned from a previous refund request.

try {
    $result = $api_instance->getRefund($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->getRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The refund ID. This ID is returned from a previous refund request. |

### Return type

[**\CyberSource\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundCapture**
> \CyberSource\Model\InlineResponse2013 refundCapture($refundCaptureRequest, $id)

Refund a Capture

Include the capture ID in the POST request to refund the captured amount.

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

[**\CyberSource\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPayment**
> \CyberSource\Model\InlineResponse2013 refundPayment($refundPaymentRequest, $id)

Refund a Payment

Include the payment ID in the POST request to refund the payment amount.

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

[**\CyberSource\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

