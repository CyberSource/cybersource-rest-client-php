# CyberSource\ProcessAPayoutApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**octCreatePayment**](ProcessAPayoutApi.md#octCreatePayment) | **POST** /pts/v2/payouts/ | Process a Payout


# **octCreatePayment**
> octCreatePayment($octCreatePaymentRequest)

Process a Payout

Send funds from a selected funding source to a designated credit/debit card account or a prepaid card using an Original Credit Transaction (OCT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ProcessAPayoutApi();
$octCreatePaymentRequest = new \CyberSource\Model\PtsV2PayoutsPostResponse(); // \CyberSource\Model\PtsV2PayoutsPostResponse | 

try {
    $api_instance->octCreatePayment($octCreatePaymentRequest);
} catch (Exception $e) {
    echo 'Exception when calling ProcessAPayoutApi->octCreatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **octCreatePaymentRequest** | [**\CyberSource\Model\PtsV2PayoutsPostResponse**](../Model/PtsV2PayoutsPostResponse.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

