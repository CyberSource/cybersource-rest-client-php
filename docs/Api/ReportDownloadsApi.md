# CyberSource\ReportDownloadsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadReport**](ReportDownloadsApi.md#downloadReport) | **GET** /reporting/v3/report-downloads | Download a Report


# **downloadReport**
> downloadReport($reportDate, $reportName, $organizationId, $reportTime)

Download a Report

Download a report using the unique report name and date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportDownloadsApi();
$reportDate = new \DateTime("2013-10-20"); // \DateTime | Valid date on which to download the report in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd
$reportName = "reportName_example"; // string | Name of the report to download
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id
$reportTime = "reportTime_example"; // string | Valid time on which to download the report in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Time Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example time format:**   - hh:mm:ss±hh:mm

try {
    $api_instance->downloadReport($reportDate, $reportName, $organizationId, $reportTime);
} catch (Exception $e) {
    echo 'Exception when calling ReportDownloadsApi->downloadReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDate** | **\DateTime**| Valid date on which to download the report in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd |
 **reportName** | **string**| Name of the report to download |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]
 **reportTime** | **string**| Valid time on which to download the report in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Time Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example time format:**   - hh:mm:ss±hh:mm | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/xml, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

