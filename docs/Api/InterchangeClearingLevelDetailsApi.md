# CyberSource\InterchangeClearingLevelDetailsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInterchangeClearingLevelDetails**](InterchangeClearingLevelDetailsApi.md#getInterchangeClearingLevelDetails) | **GET** /reporting/v3/interchange-clearing-level-details | Interchange Clearing Level data for an account or a merchant


# **getInterchangeClearingLevelDetails**
> \CyberSource\Model\ReportingV3InterchangeClearingLevelDetailsGet200Response getInterchangeClearingLevelDetails($startTime, $endTime, $organizationId)

Interchange Clearing Level data for an account or a merchant

Interchange Clearing Level data for an account or a merchant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InterchangeClearingLevelDetailsApi();
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z)
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd'T'HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z)
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $result = $api_instance->getInterchangeClearingLevelDetails($startTime, $endTime, $organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterchangeClearingLevelDetailsApi->getInterchangeClearingLevelDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **\DateTime**| Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) |
 **endTime** | **\DateTime**| Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) |
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3InterchangeClearingLevelDetailsGet200Response**](../Model/ReportingV3InterchangeClearingLevelDetailsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

