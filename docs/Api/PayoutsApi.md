# CyberSource\PayoutsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**octCreatePayment**](PayoutsApi.md#octCreatePayment) | **POST** /pts/v2/payouts | Process a Payout


# **octCreatePayment**
> \CyberSource\Model\PtsV2PayoutsPost201Response octCreatePayment($octCreatePaymentRequest)

Process a Payout

Send funds from a selected funding source to a designated credit/debit card account or a prepaid card using an Original Credit Transaction (OCT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PayoutsApi();
$octCreatePaymentRequest = new \CyberSource\Model\OctCreatePaymentRequest(); // \CyberSource\Model\OctCreatePaymentRequest | 

try {
    $result = $api_instance->octCreatePayment($octCreatePaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->octCreatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **octCreatePaymentRequest** | [**\CyberSource\Model\OctCreatePaymentRequest**](../Model/OctCreatePaymentRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2PayoutsPost201Response**](../Model/PtsV2PayoutsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

