# CyberSource\DefaultApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**octCreatePayment**](DefaultApi.md#octCreatePayment) | **POST** /v2/payouts/ | Process a Payout


# **octCreatePayment**
> octCreatePayment($octCreatePaymentRequest)

Process a Payout

Send funds from a selected funding source to a designated credit/debit card account or a prepaid card using an Original Credit Transaction (OCT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DefaultApi();
$octCreatePaymentRequest = new \CyberSource\Model\OctCreatePaymentRequest(); // \CyberSource\Model\OctCreatePaymentRequest | 

try {
    $api_instance->octCreatePayment($octCreatePaymentRequest);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->octCreatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **octCreatePaymentRequest** | [**\CyberSource\Model\OctCreatePaymentRequest**](../Model/OctCreatePaymentRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

