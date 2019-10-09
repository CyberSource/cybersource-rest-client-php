# CyberSource\TransactionDetailsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransaction**](TransactionDetailsApi.md#getTransaction) | **GET** /tss/v2/transactions/{id} | Retrieve a Transaction


# **getTransaction**
> \CyberSource\Model\TssV2TransactionsGet200Response getTransaction($id)

Retrieve a Transaction

Include the Request ID in the GET request to retrieve the transaction details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransactionDetailsApi();
$id = "id_example"; // string | Request ID.

try {
    $result = $api_instance->getTransaction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionDetailsApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Request ID. |

### Return type

[**\CyberSource\Model\TssV2TransactionsGet200Response**](../Model/TssV2TransactionsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

