# CyberSource\ReportSubscriptionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStandardOrClassicSubscription**](ReportSubscriptionsApi.md#createStandardOrClassicSubscription) | **PUT** /reporting/v3/predefined-report-subscriptions | Create a Standard or Classic Subscription
[**createSubscription**](ReportSubscriptionsApi.md#createSubscription) | **PUT** /reporting/v3/report-subscriptions | Create Report Subscription for a Report Name by Organization
[**deleteSubscription**](ReportSubscriptionsApi.md#deleteSubscription) | **DELETE** /reporting/v3/report-subscriptions/{reportName} | Delete Subscription of a Report Name by Organization
[**getAllSubscriptions**](ReportSubscriptionsApi.md#getAllSubscriptions) | **GET** /reporting/v3/report-subscriptions | Get All Subscriptions
[**getSubscription**](ReportSubscriptionsApi.md#getSubscription) | **GET** /reporting/v3/report-subscriptions/{reportName} | Get Subscription for Report Name


# **createStandardOrClassicSubscription**
> createStandardOrClassicSubscription($predefinedSubscriptionRequestBean, $organizationId)

Create a Standard or Classic Subscription

Create or update an already existing classic or standard subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$predefinedSubscriptionRequestBean = new \CyberSource\Model\PredefinedSubscriptionRequestBean(); // \CyberSource\Model\PredefinedSubscriptionRequestBean | Report subscription request payload
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $api_instance->createStandardOrClassicSubscription($predefinedSubscriptionRequestBean, $organizationId);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->createStandardOrClassicSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefinedSubscriptionRequestBean** | [**\CyberSource\Model\PredefinedSubscriptionRequestBean**](../Model/PredefinedSubscriptionRequestBean.md)| Report subscription request payload |
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscription**
> createSubscription($createReportSubscriptionRequest, $organizationId)

Create Report Subscription for a Report Name by Organization

Create a report subscription for your organization. The report name must be unique.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$createReportSubscriptionRequest = new \CyberSource\Model\CreateReportSubscriptionRequest(); // \CyberSource\Model\CreateReportSubscriptionRequest | Report subscription request payload
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $api_instance->createSubscription($createReportSubscriptionRequest, $organizationId);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createReportSubscriptionRequest** | [**\CyberSource\Model\CreateReportSubscriptionRequest**](../Model/CreateReportSubscriptionRequest.md)| Report subscription request payload |
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> deleteSubscription($reportName, $organizationId)

Delete Subscription of a Report Name by Organization

Delete a report subscription for your organization. You must know the unique name of the report you want to delete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$reportName = "reportName_example"; // string | Name of the Report to Delete
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $api_instance->deleteSubscription($reportName, $organizationId);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportName** | **string**| Name of the Report to Delete |
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubscriptions**
> \CyberSource\Model\ReportingV3ReportSubscriptionsGet200Response getAllSubscriptions($organizationId)

Get All Subscriptions

View a summary of all report subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $result = $api_instance->getAllSubscriptions($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->getAllSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportSubscriptionsGet200Response**](../Model/ReportingV3ReportSubscriptionsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \CyberSource\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions getSubscription($reportName, $organizationId)

Get Subscription for Report Name

View the details of a report subscription, such as the report format or report frequency, using the report’s unique name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$reportName = "reportName_example"; // string | Name of the Report to Retrieve
$organizationId = "organizationId_example"; // string | Valid Organization Id

try {
    $result = $api_instance->getSubscription($reportName, $organizationId);
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
 **organizationId** | **string**| Valid Organization Id | [optional]

### Return type

[**\CyberSource\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions**](../Model/ReportingV3ReportSubscriptionsGet200ResponseSubscriptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

