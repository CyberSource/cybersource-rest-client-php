# CyberSource\PaymentTokensApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveOrDeletePaymentToken**](PaymentTokensApi.md#retrieveOrDeletePaymentToken) | **POST** /pts/v2/payment-tokens | Retrieve or Delete Payment Token


# **retrieveOrDeletePaymentToken**
> \CyberSource\Model\InlineResponse201 retrieveOrDeletePaymentToken($request)

Retrieve or Delete Payment Token

This API can be used in two flavours - for retrieval or deletion of vault id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentTokensApi();
$request = new \CyberSource\Model\Request(); // \CyberSource\Model\Request | 

try {
    $result = $api_instance->retrieveOrDeletePaymentToken($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTokensApi->retrieveOrDeletePaymentToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CyberSource\Model\Request**](../Model/Request.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

