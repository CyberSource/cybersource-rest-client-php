# CyberSource\ReportSubscriptionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscription**](ReportSubscriptionsApi.md#createSubscription) | **PUT** /reporting/v3/report-subscriptions | Create Report Subscription for a report name by organization
[**deleteSubscription**](ReportSubscriptionsApi.md#deleteSubscription) | **DELETE** /reporting/v3/report-subscriptions/{reportName} | Delete subscription of a report name by organization
[**getAllSubscriptions**](ReportSubscriptionsApi.md#getAllSubscriptions) | **GET** /reporting/v3/report-subscriptions | Get all subscriptions
[**getSubscription**](ReportSubscriptionsApi.md#getSubscription) | **GET** /reporting/v3/report-subscriptions/{reportName} | Get subscription for report name


# **createSubscription**
> createSubscription($requestBody, $organizationId)

Create Report Subscription for a report name by organization

Create a report subscription for your organization. The report name must be unique.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$requestBody = new \CyberSource\Model\RequestBody1(); // \CyberSource\Model\RequestBody1 | Report subscription request payload
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id

try {
    $api_instance->createSubscription($requestBody, $organizationId);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBody** | [**\CyberSource\Model\RequestBody1**](../Model/RequestBody1.md)| Report subscription request payload |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> deleteSubscription($reportName)

Delete subscription of a report name by organization

Delete a report subscription for your organization. You must know the unique name of the report you want to delete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$reportName = "reportName_example"; // string | Name of the Report to Delete

try {
    $api_instance->deleteSubscription($reportName);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportName** | **string**| Name of the Report to Delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubscriptions**
> \CyberSource\Model\ReportingV3ReportSubscriptionsGet200Response getAllSubscriptions()

Get all subscriptions

View a summary of all report subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();

try {
    $result = $api_instance->getAllSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->getAllSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CyberSource\Model\ReportingV3ReportSubscriptionsGet200Response**](../Model/ReportingV3ReportSubscriptionsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \CyberSource\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions getSubscription($reportName)

Get subscription for report name

View the details of a report subscription, such as the report format or report frequency, using the report’s unique name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$reportName = "reportName_example"; // string | Name of the Report to Retrieve

try {
    $result = $api_instance->getSubscription($reportName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportName** | **string**| Name of the Report to Retrieve |

### Return type

[**\CyberSource\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions**](../Model/ReportingV3ReportSubscriptionsGet200ResponseSubscriptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

