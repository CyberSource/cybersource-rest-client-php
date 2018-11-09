# CyberSource\ReportsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReport**](ReportsApi.md#createReport) | **POST** /reporting/v3/reports | Create Adhoc Report
[**getReportByReportId**](ReportsApi.md#getReportByReportId) | **GET** /reporting/v3/reports/{reportId} | Get Report based on reportId
[**searchReports**](ReportsApi.md#searchReports) | **GET** /reporting/v3/reports | Retrieve available reports


# **createReport**
> createReport($requestBody)

Create Adhoc Report

Create one time report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportsApi();
$requestBody = new \CyberSource\Model\RequestBody1(); // \CyberSource\Model\RequestBody1 | Report subscription request payload

try {
    $api_instance->createReport($requestBody);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->createReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBody** | [**\CyberSource\Model\RequestBody1**](../Model/RequestBody1.md)| Report subscription request payload |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportByReportId**
> \CyberSource\Model\ReportingV3ReportsIdGet200Response getReportByReportId($reportId, $organizationId)

Get Report based on reportId

ReportId is mandatory input

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportsApi();
$reportId = "reportId_example"; // string | Valid Report Id
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id

try {
    $result = $api_instance->getReportByReportId($reportId, $organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportByReportId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportId** | **string**| Valid Report Id |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportsIdGet200Response**](../Model/ReportingV3ReportsIdGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchReports**
> \CyberSource\Model\ReportingV3ReportsGet200Response searchReports($startTime, $endTime, $timeQueryType, $organizationId, $reportMimeType, $reportFrequency, $reportName, $reportDefinitionId, $reportStatus)

Retrieve available reports

Retrieve list of available reports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportsApi();
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ssXXX
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ssXXX
$timeQueryType = "timeQueryType_example"; // string | Specify time you woud like to search
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id
$reportMimeType = "reportMimeType_example"; // string | Valid Report Format
$reportFrequency = "reportFrequency_example"; // string | Valid Report Frequency
$reportName = "reportName_example"; // string | Valid Report Name
$reportDefinitionId = 56; // int | Valid Report Definition Id
$reportStatus = "reportStatus_example"; // string | Valid Report Status

try {
    $result = $api_instance->searchReports($startTime, $endTime, $timeQueryType, $organizationId, $reportMimeType, $reportFrequency, $reportName, $reportDefinitionId, $reportStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->searchReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **\DateTime**| Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX |
 **endTime** | **\DateTime**| Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX |
 **timeQueryType** | **string**| Specify time you woud like to search |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]
 **reportMimeType** | **string**| Valid Report Format | [optional]
 **reportFrequency** | **string**| Valid Report Frequency | [optional]
 **reportName** | **string**| Valid Report Name | [optional]
 **reportDefinitionId** | **int**| Valid Report Definition Id | [optional]
 **reportStatus** | **string**| Valid Report Status | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportsGet200Response**](../Model/ReportingV3ReportsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

