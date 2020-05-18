# CyberSource\DownloadDTDApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDTDV2**](DownloadDTDApi.md#getDTDV2) | **GET** /reporting/v3/dtds/{reportDefinitionNameVersion} | Download DTD for Report


# **getDTDV2**
> getDTDV2($reportDefinitionNameVersion)

Download DTD for Report

Used to download DTDs for reports on no-auth.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DownloadDTDApi();
$reportDefinitionNameVersion = "reportDefinitionNameVersion_example"; // string | Name and version of DTD file to download. Some DTDs only have one version. In that case version name is not needed. Some example values are ctdr-1.0, tdr, pbdr-1.1

try {
    $api_instance->getDTDV2($reportDefinitionNameVersion);
} catch (Exception $e) {
    echo 'Exception when calling DownloadDTDApi->getDTDV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionNameVersion** | **string**| Name and version of DTD file to download. Some DTDs only have one version. In that case version name is not needed. Some example values are ctdr-1.0, tdr, pbdr-1.1 |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/xml-dtd

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

