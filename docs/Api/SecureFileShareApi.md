# CyberSource\SecureFileShareApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFile**](SecureFileShareApi.md#getFile) | **GET** /sfs/v1/files/{fileId} | Download a file with file identifier
[**getFileDetail**](SecureFileShareApi.md#getFileDetail) | **GET** /sfs/v1/file-details | Get list of files


# **getFile**
> getFile($fileId, $organizationId)

Download a file with file identifier

Download a file for the given file identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SecureFileShareApi();
$fileId = "fileId_example"; // string | Unique identifier for each file
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id

try {
    $api_instance->getFile($fileId, $organizationId);
} catch (Exception $e) {
    echo 'Exception when calling SecureFileShareApi->getFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | **string**| Unique identifier for each file |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/xml, text/csv, application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileDetail**
> \CyberSource\Model\V1FileDetailsGet200Response getFileDetail($startDate, $endDate, $organizationId)

Get list of files

Get list of files and it's information of them available inside the report directory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SecureFileShareApi();
$startDate = new \DateTime("2013-10-20"); // \DateTime | Valid start date in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)   **Example date format:**   - yyyy-MM-dd
$endDate = new \DateTime("2013-10-20"); // \DateTime | Valid end date in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)   **Example date format:**   - yyyy-MM-dd
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id

try {
    $result = $api_instance->getFileDetail($startDate, $endDate, $organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureFileShareApi->getFileDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| Valid start date in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)   **Example date format:**   - yyyy-MM-dd |
 **endDate** | **\DateTime**| Valid end date in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)   **Example date format:**   - yyyy-MM-dd |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]

### Return type

[**\CyberSource\Model\V1FileDetailsGet200Response**](../Model/V1FileDetailsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

