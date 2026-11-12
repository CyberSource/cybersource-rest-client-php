# CyberSource\SubscriptionsFollowOnsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFollowOnSubscription**](SubscriptionsFollowOnsApi.md#createFollowOnSubscription) | **POST** /rbs/v1/subscriptions/follow-ons/{requestId} | Create a Follow-On Subscription
[**getFollowOnSubscription**](SubscriptionsFollowOnsApi.md#getFollowOnSubscription) | **GET** /rbs/v1/subscriptions/follow-ons/{requestId} | Get a Follow-On Subscription


# **createFollowOnSubscription**
> \CyberSource\Model\CreateSubscriptionResponse createFollowOnSubscription($requestId, $createFollowOnSubscriptionRequest)

Create a Follow-On Subscription

Create a new Subscription based on the Request Id of an existing successful Transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsFollowOnsApi();
$requestId = "requestId_example"; // string | Request Id of an existing successful Transaction
$createFollowOnSubscriptionRequest = new \CyberSource\Model\CreateFollowOnSubscriptionRequest(); // \CyberSource\Model\CreateFollowOnSubscriptionRequest | 

try {
    $result = $api_instance->createFollowOnSubscription($requestId, $createFollowOnSubscriptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsFollowOnsApi->createFollowOnSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestId** | **string**| Request Id of an existing successful Transaction |
 **createFollowOnSubscriptionRequest** | [**\CyberSource\Model\CreateFollowOnSubscriptionRequest**](../Model/CreateFollowOnSubscriptionRequest.md)|  |

### Return type

[**\CyberSource\Model\CreateSubscriptionResponse**](../Model/CreateSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFollowOnSubscription**
> \CyberSource\Model\GetFollowOnSubscriptionResponse getFollowOnSubscription($requestId)

Get a Follow-On Subscription

Get details of the Subscription being created based on the Request Id of an existing successful Transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsFollowOnsApi();
$requestId = "requestId_example"; // string | Request Id of an existing successful Transaction

try {
    $result = $api_instance->getFollowOnSubscription($requestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsFollowOnsApi->getFollowOnSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestId** | **string**| Request Id of an existing successful Transaction |

### Return type

[**\CyberSource\Model\GetFollowOnSubscriptionResponse**](../Model/GetFollowOnSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

