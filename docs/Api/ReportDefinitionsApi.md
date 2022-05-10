# CyberSource\ReportDefinitionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getResourceInfoByReportDefinition**](ReportDefinitionsApi.md#getResourceInfoByReportDefinition) | **GET** /reporting/v3/report-definitions/{reportDefinitionName} | Get Report Definition
[**getResourceV2Info**](ReportDefinitionsApi.md#getResourceV2Info) | **GET** /reporting/v3/report-definitions | Get Reporting Resource Information


# **getResourceInfoByReportDefinition**
> \CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response getResourceInfoByReportDefinition($reportDefinitionName, $subscriptionType, $reportMimeType, $organizationId)

Get Report Definition

View the attributes of an individual report type. For a list of values for reportDefinitionName, see the [Reporting Developer Guide](https://www.cybersource.com/developers/documentation/reporting_and_reconciliation/)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportDefinitionsApi();
$reportDefinitionName = "reportDefinitionName_example"; // string | Name of the Report definition to retrieve
$subscriptionType = "subscriptionType_example"; // string | The subscription type for which report definition is required. By default the type will be CUSTOM. Valid Values: - CLASSIC - CUSTOM - STANDARD
$reportMimeType = "reportMimeType_example"; // string | The format for which the report definition is required. By default the value will be CSV. Valid Values: - application/xml - text/csv
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $result = $api_instance->getResourceInfoByReportDefinition($reportDefinitionName, $subscriptionType, $reportMimeType, $organizationId);
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
 **subscriptionType** | **string**| The subscription type for which report definition is required. By default the type will be CUSTOM. Valid Values: - CLASSIC - CUSTOM - STANDARD | [optional]
 **reportMimeType** | **string**| The format for which the report definition is required. By default the value will be CSV. Valid Values: - application/xml - text/csv | [optional]
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response**](../Model/ReportingV3ReportDefinitionsNameGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResourceV2Info**
> \CyberSource\Model\ReportingV3ReportDefinitionsGet200Response getResourceV2Info($subscriptionType, $organizationId)

Get Reporting Resource Information

View a list of supported reports and their attributes before subscribing to them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportDefinitionsApi();
$subscriptionType = "subscriptionType_example"; // string | Valid Values: - CLASSIC - CUSTOM - STANDARD
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $result = $api_instance->getResourceV2Info($subscriptionType, $organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionsApi->getResourceV2Info: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionType** | **string**| Valid Values: - CLASSIC - CUSTOM - STANDARD | [optional]
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportDefinitionsGet200Response**](../Model/ReportingV3ReportDefinitionsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

