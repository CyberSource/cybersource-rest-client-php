# CyberSource\DownloadXSDApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getXSDV2**](DownloadXSDApi.md#getXSDV2) | **GET** /reporting/v3/xsds/{reportDefinitionNameVersion} | Download XSD for Report


# **getXSDV2**
> getXSDV2($reportDefinitionNameVersion)

Download XSD for Report

Used to download XSDs for reports on no-auth.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DownloadXSDApi();
$reportDefinitionNameVersion = "reportDefinitionNameVersion_example"; // string | Name and version of XSD file to download. Some XSDs only have one version. In that case version name is not needed. Some example values are DecisionManagerDetailReport, DecisionManagerTypes

try {
    $api_instance->getXSDV2($reportDefinitionNameVersion);
} catch (Exception $e) {
    echo 'Exception when calling DownloadXSDApi->getXSDV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionNameVersion** | **string**| Name and version of XSD file to download. Some XSDs only have one version. In that case version name is not needed. Some example values are DecisionManagerDetailReport, DecisionManagerTypes |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

