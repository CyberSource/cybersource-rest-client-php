# CyberSource\ReportsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReport**](ReportsApi.md#createReport) | **POST** /reporting/v3/reports | Create Adhoc Report
[**getReportByReportId**](ReportsApi.md#getReportByReportId) | **GET** /reporting/v3/reports/{reportId} | Get Report Based on Report Id
[**searchReports**](ReportsApi.md#searchReports) | **GET** /reporting/v3/reports | Retrieve Available Reports


# **createReport**
> createReport($createAdhocReportRequest, $organizationId)

Create Adhoc Report

Create a one-time report. You must specify the type of report in reportDefinitionName. For a list of values for reportDefinitionName, see the [Reporting Developer Guide](https://www.cybersource.com/developers/documentation/reporting_and_reconciliation)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportsApi();
$createAdhocReportRequest = new \CyberSource\Model\CreateAdhocReportRequest(); // \CyberSource\Model\CreateAdhocReportRequest | Report subscription request payload
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $api_instance->createReport($createAdhocReportRequest, $organizationId);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->createReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createAdhocReportRequest** | [**\CyberSource\Model\CreateAdhocReportRequest**](../Model/CreateAdhocReportRequest.md)| Report subscription request payload |
 **organizationId** | **string**| Valid Organization Id | [optional]

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

Get Report Based on Report Id

Download a report using the reportId value. If you don’t already know this value, you can obtain it using the Retrieve available reports call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportsApi();
$reportId = "reportId_example"; // string | Valid Report Id
$organizationId = "organizationId_example"; // string | Valid Organization Id

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
 **organizationId** | **string**| Valid Organization Id | [optional]

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

Retrieve Available Reports

Retrieve a list of the available reports to which you are subscribed. This will also give you the reportId value, which you can also use to download a report.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportsApi();
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z)
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z)
$timeQueryType = "timeQueryType_example"; // string | Specify time you would like to search  Valid values: - reportTimeFrame - executedTime
$organizationId = "organizationId_example"; // string | Valid Organization Id
$reportMimeType = "reportMimeType_example"; // string | Valid Report Format  Valid values: - application/xml - text/csv
$reportFrequency = "reportFrequency_example"; // string | Valid Report Frequency  Valid values: - DAILY - WEEKLY - MONTHLY - USER_DEFINED - ADHOC
$reportName = "reportName_example"; // string | Valid Report Name
$reportDefinitionId = 56; // int | Valid Report Definition Id
$reportStatus = "reportStatus_example"; // string | Valid Report Status  Valid values: - COMPLETED - PENDING - QUEUED - RUNNING - ERROR - NO_DATA

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
 **startTime** | **\DateTime**| Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) |
 **endTime** | **\DateTime**| Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) |
 **timeQueryType** | **string**| Specify time you would like to search  Valid values: - reportTimeFrame - executedTime |
 **organizationId** | **string**| Valid Organization Id | [optional]
 **reportMimeType** | **string**| Valid Report Format  Valid values: - application/xml - text/csv | [optional]
 **reportFrequency** | **string**| Valid Report Frequency  Valid values: - DAILY - WEEKLY - MONTHLY - USER_DEFINED - ADHOC | [optional]
 **reportName** | **string**| Valid Report Name | [optional]
 **reportDefinitionId** | **int**| Valid Report Definition Id | [optional]
 **reportStatus** | **string**| Valid Report Status  Valid values: - COMPLETED - PENDING - QUEUED - RUNNING - ERROR - NO_DATA | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportsGet200Response**](../Model/ReportingV3ReportsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

