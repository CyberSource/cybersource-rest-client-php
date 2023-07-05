# CyberSource\SubscriptionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateSubscription**](SubscriptionsApi.md#activateSubscription) | **POST** /rbs/v1/subscriptions/{id}/activate | Activate a Subscription
[**cancelSubscription**](SubscriptionsApi.md#cancelSubscription) | **POST** /rbs/v1/subscriptions/{id}/cancel | Cancel a Subscription
[**createSubscription**](SubscriptionsApi.md#createSubscription) | **POST** /rbs/v1/subscriptions | Create a Subscription
[**getAllSubscriptions**](SubscriptionsApi.md#getAllSubscriptions) | **GET** /rbs/v1/subscriptions | Get a List of Subscriptions
[**getSubscription**](SubscriptionsApi.md#getSubscription) | **GET** /rbs/v1/subscriptions/{id} | Get a Subscription
[**getSubscriptionCode**](SubscriptionsApi.md#getSubscriptionCode) | **GET** /rbs/v1/subscriptions/code | Get a Subscription Code
[**suspendSubscription**](SubscriptionsApi.md#suspendSubscription) | **POST** /rbs/v1/subscriptions/{id}/suspend | Suspend a Subscription
[**updateSubscription**](SubscriptionsApi.md#updateSubscription) | **PATCH** /rbs/v1/subscriptions/{id} | Update a Subscription


# **activateSubscription**
> \CyberSource\Model\InlineResponse2009 activateSubscription($id)

Activate a Subscription

Activate a `CANCELLED` Or `SUSPENDED` Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id

try {
    $result = $api_instance->activateSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->activateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription Id |

### Return type

[**\CyberSource\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSubscription**
> \CyberSource\Model\InlineResponse202 cancelSubscription($id)

Cancel a Subscription

Cancel a Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id

try {
    $result = $api_instance->cancelSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription Id |

### Return type

[**\CyberSource\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscription**
> \CyberSource\Model\InlineResponse2011 createSubscription($createSubscriptionRequest)

Create a Subscription

Create a Recurring Billing Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$createSubscriptionRequest = new \CyberSource\Model\CreateSubscriptionRequest(); // \CyberSource\Model\CreateSubscriptionRequest | 

try {
    $result = $api_instance->createSubscription($createSubscriptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSubscriptionRequest** | [**\CyberSource\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubscriptions**
> \CyberSource\Model\InlineResponse2006 getAllSubscriptions($offset, $limit, $code, $status)

Get a List of Subscriptions

Retrieve Subscriptions by Subscription Code & Subscription Status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$offset = 56; // int | Page offset number.
$limit = 56; // int | Number of items to be returned. Default - `20`, Max - `100`
$code = "code_example"; // string | Filter by Subscription Code
$status = "status_example"; // string | Filter by Subscription Status

try {
    $result = $api_instance->getAllSubscriptions($offset, $limit, $code, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getAllSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Page offset number. | [optional]
 **limit** | **int**| Number of items to be returned. Default - &#x60;20&#x60;, Max - &#x60;100&#x60; | [optional]
 **code** | **string**| Filter by Subscription Code | [optional]
 **status** | **string**| Filter by Subscription Status | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \CyberSource\Model\InlineResponse2007 getSubscription($id)

Get a Subscription

Get a Subscription by Subscription Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id

try {
    $result = $api_instance->getSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription Id |

### Return type

[**\CyberSource\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionCode**
> \CyberSource\Model\InlineResponse20010 getSubscriptionCode()

Get a Subscription Code

Get a Unique Subscription Code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();

try {
    $result = $api_instance->getSubscriptionCode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CyberSource\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suspendSubscription**
> \CyberSource\Model\InlineResponse2021 suspendSubscription($id)

Suspend a Subscription

Suspend a Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id

try {
    $result = $api_instance->suspendSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->suspendSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription Id |

### Return type

[**\CyberSource\Model\InlineResponse2021**](../Model/InlineResponse2021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscription**
> \CyberSource\Model\InlineResponse2008 updateSubscription($id, $updateSubscription)

Update a Subscription

Update a Subscription by Subscription Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id
$updateSubscription = new \CyberSource\Model\UpdateSubscription(); // \CyberSource\Model\UpdateSubscription | Update Subscription

try {
    $result = $api_instance->updateSubscription($id, $updateSubscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription Id |
 **updateSubscription** | [**\CyberSource\Model\UpdateSubscription**](../Model/UpdateSubscription.md)| Update Subscription |

### Return type

[**\CyberSource\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

