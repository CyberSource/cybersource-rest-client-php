# CyberSource\ReportDefinitionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getResourceInfoByReportDefinition**](ReportDefinitionsApi.md#getResourceInfoByReportDefinition) | **GET** /reporting/v3/report-definitions/{reportDefinitionName} | Get a single report definition information
[**getResourceV2Info**](ReportDefinitionsApi.md#getResourceV2Info) | **GET** /reporting/v3/report-definitions | Get reporting resource information


# **getResourceInfoByReportDefinition**
> \CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response getResourceInfoByReportDefinition($reportDefinitionName, $organizationId)

Get a single report definition information

The report definition name must be used as path parameter exclusive of each other

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportDefinitionsApi();
$reportDefinitionName = "reportDefinitionName_example"; // string | Name of the Report definition to retrieve
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id

try {
    $result = $api_instance->getResourceInfoByReportDefinition($reportDefinitionName, $organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionsApi->getResourceInfoByReportDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionName** | **string**| Name of the Report definition to retrieve |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response**](../Model/ReportingV3ReportDefinitionsNameGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResourceV2Info**
> \CyberSource\Model\ReportingV3ReportDefinitionsGet200Response getResourceV2Info($organizationId)

Get reporting resource information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportDefinitionsApi();
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id

try {
    $result = $api_instance->getResourceV2Info($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionsApi->getResourceV2Info: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportDefinitionsGet200Response**](../Model/ReportingV3ReportDefinitionsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

