# CyberSource\TransactionBatchesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionBatchDetails**](TransactionBatchesApi.md#getTransactionBatchDetails) | **GET** /pts/v1/transaction-batch-details | Filters batch response.
[**getTransactionBatchId**](TransactionBatchesApi.md#getTransactionBatchId) | **GET** /pts/v1/transaction-batches/{id} | Get individual batch file
[**getTransactionBatches**](TransactionBatchesApi.md#getTransactionBatches) | **GET** /pts/v1/transaction-batches | Get a list of batch files


# **getTransactionBatchDetails**
> getTransactionBatchDetails($transactionBatchId, $uploadDate, $status)

Filters batch response.

Filters batch response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransactionBatchesApi();
$transactionBatchId = "transactionBatchId_example"; // string | Transaction Batch Id, this is unique.
$uploadDate = new \DateTime("2013-10-20"); // \DateTime | Date in which the original batch file was uploaded. Date must be in ISO-8601 format.
$status = "status_example"; // string | Allows you to filter by rejected response.

try {
    $api_instance->getTransactionBatchDetails($transactionBatchId, $uploadDate, $status);
} catch (Exception $e) {
    echo 'Exception when calling TransactionBatchesApi->getTransactionBatchDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionBatchId** | **string**| Transaction Batch Id, this is unique. |
 **uploadDate** | **\DateTime**| Date in which the original batch file was uploaded. Date must be in ISO-8601 format. | [optional]
 **status** | **string**| Allows you to filter by rejected response. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: text/vnd.cybersource.map-csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionBatchId**
> getTransactionBatchId($id)

Get individual batch file

Provide the search range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransactionBatchesApi();
$id = "id_example"; // string | The batch id assigned for the template.

try {
    $api_instance->getTransactionBatchId($id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionBatchesApi->getTransactionBatchId: ', $e->getMessage(), PHP_EOL;
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

# **getTransactionBatches**
> \CyberSource\Model\PtsV1TransactionBatchesGet200Response getTransactionBatches($startTime, $endTime)

Get a list of batch files

Provide the search range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransactionBatchesApi();
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZZ
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZZ

try {
    $result = $api_instance->getTransactionBatches($startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionBatchesApi->getTransactionBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **\DateTime**| Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZZ |
 **endTime** | **\DateTime**| Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZZ |

### Return type

[**\CyberSource\Model\PtsV1TransactionBatchesGet200Response**](../Model/PtsV1TransactionBatchesGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

