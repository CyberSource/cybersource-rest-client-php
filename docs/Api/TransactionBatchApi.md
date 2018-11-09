# CyberSource\TransactionBatchApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ptsV1TransactionBatchesIdGet**](TransactionBatchApi.md#ptsV1TransactionBatchesIdGet) | **GET** /pts/v1/transaction-batches/{id} | Get an individual batch file Details processed through the Offline Transaction Submission Services


# **ptsV1TransactionBatchesIdGet**
> ptsV1TransactionBatchesIdGet($id)

Get an individual batch file Details processed through the Offline Transaction Submission Services

Provide the search range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransactionBatchApi();
$id = "id_example"; // string | The batch id assigned for the template.

try {
    $api_instance->ptsV1TransactionBatchesIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionBatchApi->ptsV1TransactionBatchesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The batch id assigned for the template. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

