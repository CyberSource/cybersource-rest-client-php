# CyberSource\TransactionQueryApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQueryApi**](TransactionQueryApi.md#createQueryApi) | **POST** /pts/v2/payouts/transaction-query/{id} | Query Transaction Details


# **createQueryApi**
> \CyberSource\Model\CreateQueryApiResponse createQueryApi($id, $createQueryApiRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId, $limit, $offset)

Query Transaction Details

Query the status and details of payouts transactions including Pull Funds, Push Funds, and Pull Funds Reversals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TransactionQueryApi();
$id = "id_example"; // string | This is the CyberSource Request ID generated for successfully processed AFT/OCT that needs to be queried.
$createQueryApiRequest = new \CyberSource\Model\CreateQueryApiRequest(); // \CyberSource\Model\CreateQueryApiRequest | 
$contentType = "contentType_example"; // string | 
$xRequestid = "xRequestid_example"; // string | 
$vCMerchantId = "vCMerchantId_example"; // string | 
$vCPermissions = "vCPermissions_example"; // string | 
$vCCorrelationId = "vCCorrelationId_example"; // string | 
$vCOrganizationId = "vCOrganizationId_example"; // string | 
$limit = 56; // int | The maximum number of options to be retrieved from the processor and displayed to the consumer.
$offset = 56; // int | Offset from the first item in the list of options received from the processor. If you want to display the options in multiple lists, this number represents the first option displayed in each list.

try {
    $result = $api_instance->createQueryApi($id, $createQueryApiRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionQueryApi->createQueryApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| This is the CyberSource Request ID generated for successfully processed AFT/OCT that needs to be queried. |
 **createQueryApiRequest** | [**\CyberSource\Model\CreateQueryApiRequest**](../Model/CreateQueryApiRequest.md)|  |
 **contentType** | **string**|  |
 **xRequestid** | **string**|  |
 **vCMerchantId** | **string**|  |
 **vCPermissions** | **string**|  |
 **vCCorrelationId** | **string**|  |
 **vCOrganizationId** | **string**|  |
 **limit** | **int**| The maximum number of options to be retrieved from the processor and displayed to the consumer. | [optional]
 **offset** | **int**| Offset from the first item in the list of options received from the processor. If you want to display the options in multiple lists, this number represents the first option displayed in each list. | [optional]

### Return type

[**\CyberSource\Model\CreateQueryApiResponse**](../Model/CreateQueryApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

