# CyberSource\VoidApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voidCapture**](VoidApi.md#voidCapture) | **POST** /pts/v2/captures/{id}/voids | Void a Capture
[**voidCredit**](VoidApi.md#voidCredit) | **POST** /pts/v2/credits/{id}/voids | Void a Credit
[**voidPayment**](VoidApi.md#voidPayment) | **POST** /pts/v2/payments/{id}/voids | Void a Payment
[**voidRefund**](VoidApi.md#voidRefund) | **POST** /pts/v2/refunds/{id}/voids | Void a Refund


# **voidCapture**
> \CyberSource\Model\PtsV2PaymentsVoidsPost201Response voidCapture($voidCaptureRequest, $id)

Void a Capture

Include the capture ID in the POST request to cancel the capture.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\VoidApi();
$voidCaptureRequest = new \CyberSource\Model\VoidCaptureRequest(); // \CyberSource\Model\VoidCaptureRequest | 
$id = "id_example"; // string | The capture ID returned from a previous capture request.

try {
    $result = $api_instance->voidCapture($voidCaptureRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoidApi->voidCapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voidCaptureRequest** | [**\CyberSource\Model\VoidCaptureRequest**](../Model/VoidCaptureRequest.md)|  |
 **id** | **string**| The capture ID returned from a previous capture request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsVoidsPost201Response**](../Model/PtsV2PaymentsVoidsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidCredit**
> \CyberSource\Model\PtsV2PaymentsVoidsPost201Response voidCredit($voidCreditRequest, $id)

Void a Credit

Include the credit ID in the POST request to cancel the credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\VoidApi();
$voidCreditRequest = new \CyberSource\Model\VoidCreditRequest(); // \CyberSource\Model\VoidCreditRequest | 
$id = "id_example"; // string | The credit ID returned from a previous credit request.

try {
    $result = $api_instance->voidCredit($voidCreditRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoidApi->voidCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voidCreditRequest** | [**\CyberSource\Model\VoidCreditRequest**](../Model/VoidCreditRequest.md)|  |
 **id** | **string**| The credit ID returned from a previous credit request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsVoidsPost201Response**](../Model/PtsV2PaymentsVoidsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidPayment**
> \CyberSource\Model\PtsV2PaymentsVoidsPost201Response voidPayment($voidPaymentRequest, $id)

Void a Payment

Include the payment ID in the POST request to cancel the payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\VoidApi();
$voidPaymentRequest = new \CyberSource\Model\VoidPaymentRequest(); // \CyberSource\Model\VoidPaymentRequest | 
$id = "id_example"; // string | The payment ID returned from a previous payment request.

try {
    $result = $api_instance->voidPayment($voidPaymentRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoidApi->voidPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voidPaymentRequest** | [**\CyberSource\Model\VoidPaymentRequest**](../Model/VoidPaymentRequest.md)|  |
 **id** | **string**| The payment ID returned from a previous payment request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsVoidsPost201Response**](../Model/PtsV2PaymentsVoidsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidRefund**
> \CyberSource\Model\PtsV2PaymentsVoidsPost201Response voidRefund($voidRefundRequest, $id)

Void a Refund

Include the refund ID in the POST request to cancel the refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\VoidApi();
$voidRefundRequest = new \CyberSource\Model\VoidRefundRequest(); // \CyberSource\Model\VoidRefundRequest | 
$id = "id_example"; // string | The refund ID returned from a previous refund request.

try {
    $result = $api_instance->voidRefund($voidRefundRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoidApi->voidRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voidRefundRequest** | [**\CyberSource\Model\VoidRefundRequest**](../Model/VoidRefundRequest.md)|  |
 **id** | **string**| The refund ID returned from a previous refund request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsVoidsPost201Response**](../Model/PtsV2PaymentsVoidsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

