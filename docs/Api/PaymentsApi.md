# CyberSource\PaymentsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayment**](PaymentsApi.md#createPayment) | **POST** /pts/v2/payments/ | Process a Payment


# **createPayment**
> \CyberSource\Model\PtsV2PaymentsPost201Response createPayment($createPaymentRequest)

Process a Payment

Authorize the payment for the transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentsApi();
$createPaymentRequest = new \CyberSource\Model\CreatePaymentRequest(); // \CyberSource\Model\CreatePaymentRequest | 

try {
    $result = $api_instance->createPayment($createPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPaymentRequest** | [**\CyberSource\Model\CreatePaymentRequest**](../Model/CreatePaymentRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2PaymentsPost201Response**](../Model/PtsV2PaymentsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

