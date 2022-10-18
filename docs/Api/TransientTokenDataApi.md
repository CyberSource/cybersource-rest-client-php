# CyberSource\TransientTokenDataApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionForTransientToken**](TransientTokenDataApi.md#getTransactionForTransientToken) | **GET** /up/v1/payment-details/{transientToken} | Get Transient Token Data


# **getTransactionForTransientToken**
> getTransactionForTransientToken($transientToken)

Get Transient Token Data

Retrieve the data captured by Unfied Checkout. This API is used to retrieve the detailed data represented by the Transient Token. This API will not return PCI payment data (PAN). Include the Request ID in the GET request to retrieve the transaction details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransientTokenDataApi();
$transientToken = "transientToken_example"; // string | Transient Token returned by the Unified Checkout application.

try {
    $api_instance->getTransactionForTransientToken($transientToken);
} catch (Exception $e) {
    echo 'Exception when calling TransientTokenDataApi->getTransactionForTransientToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transientToken** | **string**| Transient Token returned by the Unified Checkout application. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

