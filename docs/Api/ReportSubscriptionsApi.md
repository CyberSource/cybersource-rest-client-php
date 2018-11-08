# CyberSource\ReportSubscriptionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscription**](ReportSubscriptionsApi.md#createSubscription) | **PUT** /reporting/v3/report-subscriptions/{reportName} | Create Report Subscription for a report name by organization
[**deleteSubscription**](ReportSubscriptionsApi.md#deleteSubscription) | **DELETE** /reporting/v3/report-subscriptions/{reportName} | Delete subscription of a report name by organization
[**getAllSubscriptions**](ReportSubscriptionsApi.md#getAllSubscriptions) | **GET** /reporting/v3/report-subscriptions | Retrieve all subscriptions by organization
[**getSubscription**](ReportSubscriptionsApi.md#getSubscription) | **GET** /reporting/v3/report-subscriptions/{reportName} | Retrieve subscription for a report name by organization


# **createSubscription**
> createSubscription($reportName, $requestBody)

Create Report Subscription for a report name by organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReportSubscriptionsApi();
$reportName = "reportName_example"; // string | Name of the Report to Create
$requestBody = new \CyberSource\Model\RequestBody(); // \CyberSource\Model\RequestBody | Report subscription request payload

try {
    $api_instance->createSubscription($reportName, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling ReportSubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportName** | **string**| Name of the Report to Create |
 **requestBody** | [**\CyberSource\Model\RequestBody**](../Model/RequestBody.md)| Report subscription request payload |

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

Retrieve all subscriptions by organization



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

Retrieve subscription for a report name by organization



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

