# CyberSource\CaptureApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**capturePayment**](CaptureApi.md#capturePayment) | **POST** /pts/v2/payments/{id}/captures | Capture a Payment


# **capturePayment**
> \CyberSource\Model\PtsV2PaymentsCapturesPost201Response capturePayment($capturePaymentRequest, $id)

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

[**\CyberSource\Model\PtsV2PaymentsCapturesPost201Response**](../Model/PtsV2PaymentsCapturesPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

