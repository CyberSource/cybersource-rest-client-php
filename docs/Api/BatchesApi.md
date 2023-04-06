# CyberSource\BatchesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBatchReport**](BatchesApi.md#getBatchReport) | **GET** /accountupdater/v1/batches/{batchId}/report | Retrieve a Batch Report
[**getBatchStatus**](BatchesApi.md#getBatchStatus) | **GET** /accountupdater/v1/batches/{batchId}/status | Retrieve a Batch Status
[**getBatchesList**](BatchesApi.md#getBatchesList) | **GET** /accountupdater/v1/batches | List Batches
[**postBatch**](BatchesApi.md#postBatch) | **POST** /accountupdater/v1/batches | Create a Batch


# **getBatchReport**
> \CyberSource\Model\InlineResponse20014 getBatchReport($batchId)

Retrieve a Batch Report

**Get Batch Report**<br>This resource accepts a batch id and returns: - The batch status. - The total number of accepted, rejected, updated records. - The total number of card association responses. - The billable quantities of:   - New Account Numbers (NAN)   - New Expiry Dates (NED)   - Account Closures (ACL)   - Contact Card Holders (CCH) - Source record information including token ids, masked card number, expiration dates & card type. - Response record information including response code, reason, token ids, masked card number, expiration dates & card type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BatchesApi();
$batchId = "batchId_example"; // string | Unique identification number assigned to the submitted request.

try {
    $result = $api_instance->getBatchReport($batchId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->getBatchReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchId** | **string**| Unique identification number assigned to the submitted request. |

### Return type

[**\CyberSource\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchStatus**
> \CyberSource\Model\InlineResponse20013 getBatchStatus($batchId)

Retrieve a Batch Status

**Get Batch Status**<br>This resource accepts a batch id and returns: - The batch status. - The total number of accepted, rejected, updated records. - The total number of card association responses. - The billable quantities of:   - New Account Numbers (NAN)   - New Expiry Dates (NED)   - Account Closures (ACL)   - Contact Card Holders (CCH)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BatchesApi();
$batchId = "batchId_example"; // string | Unique identification number assigned to the submitted request.

try {
    $result = $api_instance->getBatchStatus($batchId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->getBatchStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchId** | **string**| Unique identification number assigned to the submitted request. |

### Return type

[**\CyberSource\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchesList**
> \CyberSource\Model\InlineResponse20012 getBatchesList($offset, $limit, $fromDate, $toDate)

List Batches

**List Batches**<br>This resource accepts a optional date range, record offset and limit, returning a paginated response of batches containing: - The batch id. - The batch status. - The batch created / modified dates. - The total number of accepted, rejected, updated records. - The total number of card association responses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BatchesApi();
$offset = 0; // int | Starting record in zero-based dataset that should be returned as the first object in the array.
$limit = 20; // int | The maximum number that can be returned in the array starting from the offset record in zero-based dataset.
$fromDate = "fromDate_example"; // string | ISO-8601 format: yyyyMMddTHHmmssZ
$toDate = "toDate_example"; // string | ISO-8601 format: yyyyMMddTHHmmssZ

try {
    $result = $api_instance->getBatchesList($offset, $limit, $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->getBatchesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Starting record in zero-based dataset that should be returned as the first object in the array. | [optional] [default to 0]
 **limit** | **int**| The maximum number that can be returned in the array starting from the offset record in zero-based dataset. | [optional] [default to 20]
 **fromDate** | **string**| ISO-8601 format: yyyyMMddTHHmmssZ | [optional]
 **toDate** | **string**| ISO-8601 format: yyyyMMddTHHmmssZ | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBatch**
> \CyberSource\Model\InlineResponse2022 postBatch($body)

Create a Batch

**Create a Batch**<br>This resource accepts TMS tokens ids of a Customer, Payment Instrument or Instrument Identifier. <br> The card numbers for the supplied tokens ids are then sent to the relevant card associations to check for updates.<br>The following type of batches can be submitted: -  **oneOff** batch containing tokens id for Visa or MasterCard card numbers. - **amexRegistration** batch containing tokens id for Amex card numbers.  A batch id will be returned on a successful response which can be used to get the batch status and the batch report.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BatchesApi();
$body = new \CyberSource\Model\Body(); // \CyberSource\Model\Body | 

try {
    $result = $api_instance->postBatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->postBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CyberSource\Model\Body**](../Model/Body.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2022**](../Model/InlineResponse2022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

