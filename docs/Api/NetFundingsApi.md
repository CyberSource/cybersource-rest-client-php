# CyberSource\NetFundingsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNetFundingInfo**](NetFundingsApi.md#getNetFundingInfo) | **GET** /reporting/v3/net-fundings | Get Netfunding information for an account or a merchant


# **getNetFundingInfo**
> \CyberSource\Model\ReportingV3NetFundingsGet200Response getNetFundingInfo($startTime, $endTime, $organizationId, $groupName)

Get Netfunding information for an account or a merchant

Get Netfunding information for an account or a merchant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetFundingsApi();
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ssXXX
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ssXXX
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id
$groupName = "groupName_example"; // string | Valid CyberSource Group Name.

try {
    $result = $api_instance->getNetFundingInfo($startTime, $endTime, $organizationId, $groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetFundingsApi->getNetFundingInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **\DateTime**| Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX |
 **endTime** | **\DateTime**| Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]
 **groupName** | **string**| Valid CyberSource Group Name. | [optional]

### Return type

[**\CyberSource\Model\ReportingV3NetFundingsGet200Response**](../Model/ReportingV3NetFundingsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

