# CyberSource\PaymentBatchSummariesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentBatchSummary**](PaymentBatchSummariesApi.md#getPaymentBatchSummary) | **GET** /reporting/v3/payment-batch-summaries | Get Payment Batch Summary Data


# **getPaymentBatchSummary**
> \CyberSource\Model\ReportingV3PaymentBatchSummariesGet200Response getPaymentBatchSummary($startTime, $endTime, $organizationId, $rollUp, $breakdown, $startDayOfWeek)

Get Payment Batch Summary Data

Scope can be either account/merchant or reseller.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentBatchSummariesApi();
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z)
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z)
$organizationId = "organizationId_example"; // string | Valid Organization Id
$rollUp = "rollUp_example"; // string | Conditional - RollUp for data for day/week/month. Required while getting breakdown data for a Merchant
$breakdown = "breakdown_example"; // string | Conditional - Breakdown on account_rollup/all_merchant/selected_merchant. Required while getting breakdown data for a Merchant.
$startDayOfWeek = 56; // int | Optional - Start day of week to breakdown data for weeks in a month

try {
    $result = $api_instance->getPaymentBatchSummary($startTime, $endTime, $organizationId, $rollUp, $breakdown, $startDayOfWeek);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentBatchSummariesApi->getPaymentBatchSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **\DateTime**| Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) |
 **endTime** | **\DateTime**| Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) |
 **organizationId** | **string**| Valid Organization Id | [optional]
 **rollUp** | **string**| Conditional - RollUp for data for day/week/month. Required while getting breakdown data for a Merchant | [optional]
 **breakdown** | **string**| Conditional - Breakdown on account_rollup/all_merchant/selected_merchant. Required while getting breakdown data for a Merchant. | [optional]
 **startDayOfWeek** | **int**| Optional - Start day of week to breakdown data for weeks in a month | [optional]

### Return type

[**\CyberSource\Model\ReportingV3PaymentBatchSummariesGet200Response**](../Model/ReportingV3PaymentBatchSummariesGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json, text/csv, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

