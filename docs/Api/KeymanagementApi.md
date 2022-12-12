# CyberSource\KeymanagementApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchKeys**](KeymanagementApi.md#searchKeys) | **GET** /kms/v2/keys | Search Keys


# **searchKeys**
> \CyberSource\Model\InlineResponse200 searchKeys($offset, $limit, $sort, $organizationIds, $keyIds, $keyTypes, $expirationStartDate, $expirationEndDate)

Search Keys

Search one or more Keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\KeymanagementApi();
$offset = 56; // int | This allows you to specify the page offset from the resulting list resultset you want the records to be returned
$limit = 56; // int | This allows you to specify the total number of records to be returned off the resulting list resultset
$sort = "sort_example"; // string | This allows you to specify a comma separated list of fields in the order which the resulting list resultset must be sorted.
$organizationIds = array("organizationIds_example"); // string[] | List of Orgaization Ids to search. The maximum size of the organization Ids list is 1. The maximum length of Organization Id is 30.
$keyIds = array("keyIds_example"); // string[] | List of Key Ids to search. The maximum size of the Key Ids list is 1
$keyTypes = array("keyTypes_example"); // string[] | Key Type, Possible values -  certificate, password, pgp and scmp_api. When Key Type is provided atleast one more filter needs to be provided
$expirationStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Expiry Filter Start Date. When Expiration Date filter is provided, atleast one more filter needs to be provided
$expirationEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Expiry Filter End Date. When Expiration Date filter is provided, atleast one more filter needs to be provided

try {
    $result = $api_instance->searchKeys($offset, $limit, $sort, $organizationIds, $keyIds, $keyTypes, $expirationStartDate, $expirationEndDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeymanagementApi->searchKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| This allows you to specify the page offset from the resulting list resultset you want the records to be returned | [optional]
 **limit** | **int**| This allows you to specify the total number of records to be returned off the resulting list resultset | [optional]
 **sort** | **string**| This allows you to specify a comma separated list of fields in the order which the resulting list resultset must be sorted. | [optional]
 **organizationIds** | [**string[]**](../Model/string.md)| List of Orgaization Ids to search. The maximum size of the organization Ids list is 1. The maximum length of Organization Id is 30. | [optional]
 **keyIds** | [**string[]**](../Model/string.md)| List of Key Ids to search. The maximum size of the Key Ids list is 1 | [optional]
 **keyTypes** | [**string[]**](../Model/string.md)| Key Type, Possible values -  certificate, password, pgp and scmp_api. When Key Type is provided atleast one more filter needs to be provided | [optional]
 **expirationStartDate** | **\DateTime**| Expiry Filter Start Date. When Expiration Date filter is provided, atleast one more filter needs to be provided | [optional]
 **expirationEndDate** | **\DateTime**| Expiry Filter End Date. When Expiration Date filter is provided, atleast one more filter needs to be provided | [optional]

### Return type

[**\CyberSource\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

