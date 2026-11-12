# CyberSource\SubscriptionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateSubscription**](SubscriptionsApi.md#activateSubscription) | **POST** /rbs/v1/subscriptions/{id}/activate | Reactivating a Suspended Subscription
[**cancelSubscription**](SubscriptionsApi.md#cancelSubscription) | **POST** /rbs/v1/subscriptions/{id}/cancel | Cancel a Subscription
[**createSubscription**](SubscriptionsApi.md#createSubscription) | **POST** /rbs/v1/subscriptions | Create a Subscription
[**getAllSubscriptions**](SubscriptionsApi.md#getAllSubscriptions) | **GET** /rbs/v1/subscriptions | Get a List of Subscriptions
[**getSubscription**](SubscriptionsApi.md#getSubscription) | **GET** /rbs/v1/subscriptions/{id} | Get a Subscription
[**getSubscriptionCode**](SubscriptionsApi.md#getSubscriptionCode) | **GET** /rbs/v1/subscriptions/code | Get a Subscription Code
[**subscriptionsIdPaymentsGet**](SubscriptionsApi.md#subscriptionsIdPaymentsGet) | **GET** /rbs/v1/subscriptions/{id}/payments | Get Payments for a Subscription
[**subscriptionsIdPaymentsPut**](SubscriptionsApi.md#subscriptionsIdPaymentsPut) | **PUT** /rbs/v1/subscriptions/{id}/payments | Update Payments for a subscription
[**suspendSubscription**](SubscriptionsApi.md#suspendSubscription) | **POST** /rbs/v1/subscriptions/{id}/suspend | Suspend a Subscription
[**updateSubscription**](SubscriptionsApi.md#updateSubscription) | **PATCH** /rbs/v1/subscriptions/{id} | Update a Subscription


# **activateSubscription**
> \CyberSource\Model\ActivateSubscriptionResponse activateSubscription($id, $processMissedPayments)

Reactivating a Suspended Subscription

# Reactivating a Suspended Subscription  You can reactivate a suspended subscription for the next billing cycle. You cannot reactivate a canceled or completed subscription.  You can specify whether you want to process missed payments for the period during which the subscription was suspended using the `processMissedPayments` query parameter by setting it to true or false.  If no value is specified, the system will default to `true`.  **Important:** The \"processMissedPayments\" query parameter is only effective when the Ask each time before reactivating option is selected in the reactivation settings. If any other option is chosen, the value provided in the request will be ignored by the system. For more information, see the [Recurring Billing User Guide](https://developer.cybersource.com/docs/cybs/en-us/recurring-billing/user/all/rest/recurring-billing-user/recurring-billing-user-about-guide.html).  You can check how many payments were missed and the total amount by retrieving the subscription details, where you will find the `reactivationInformation` object. See: [Retrieving a Subscription](https://developer.cybersource.com/docs/cybs/en-us/recurring-billing/developer/all/rest/recurring-billing-dev/recur-bill-subscriptions/recur-bill-getting-a-subscription.html).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id
$processMissedPayments = true; // bool | Indicates if missed payments should be processed from the period when the subscription was suspended. By default, this is set to true. When any option other than \"Ask each time before reactivating\" is selected in the reactivation settings, the value that you enter will be ignored.

try {
    $result = $api_instance->activateSubscription($id, $processMissedPayments);
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
 **processMissedPayments** | **bool**| Indicates if missed payments should be processed from the period when the subscription was suspended. By default, this is set to true. When any option other than \&quot;Ask each time before reactivating\&quot; is selected in the reactivation settings, the value that you enter will be ignored. | [optional] [default to true]

### Return type

[**\CyberSource\Model\ActivateSubscriptionResponse**](../Model/ActivateSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSubscription**
> \CyberSource\Model\CancelSubscriptionResponse cancelSubscription($id)

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

[**\CyberSource\Model\CancelSubscriptionResponse**](../Model/CancelSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscription**
> \CyberSource\Model\CreateSubscriptionResponse createSubscription($createSubscriptionRequest)

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

[**\CyberSource\Model\CreateSubscriptionResponse**](../Model/CreateSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubscriptions**
> \CyberSource\Model\GetAllSubscriptionsResponse getAllSubscriptions($offset, $limit, $code, $status, $customerId, $clientReferenceInformationCode)

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
$customerId = "customerId_example"; // string | Filter by Customer Id
$clientReferenceInformationCode = "clientReferenceInformationCode_example"; // string | Filter by Client Reference Information Code / Merchant Reference Number

try {
    $result = $api_instance->getAllSubscriptions($offset, $limit, $code, $status, $customerId, $clientReferenceInformationCode);
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
 **customerId** | **string**| Filter by Customer Id | [optional]
 **clientReferenceInformationCode** | **string**| Filter by Client Reference Information Code / Merchant Reference Number | [optional]

### Return type

[**\CyberSource\Model\GetAllSubscriptionsResponse**](../Model/GetAllSubscriptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \CyberSource\Model\GetSubscriptionResponse getSubscription($id)

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

[**\CyberSource\Model\GetSubscriptionResponse**](../Model/GetSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionCode**
> \CyberSource\Model\GetSubscriptionCodeResponse getSubscriptionCode()

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

[**\CyberSource\Model\GetSubscriptionCodeResponse**](../Model/GetSubscriptionCodeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdPaymentsGet**
> \CyberSource\Model\GetSubscriptionsPaymentsResponse subscriptionsIdPaymentsGet($id, $offset, $limit, $scheduledPaymentsCount)

Get Payments for a Subscription

Retrieve a list of payments for a specific subscription by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id
$offset = 56; // int | Page offset number.
$limit = 56; // int | Number of items to be returned. Default - `20`, Max - `100`
$scheduledPaymentsCount = 56; // int | Number of existing scheduled payments to be returned. Default - `5`, Max - `9999`

try {
    $result = $api_instance->subscriptionsIdPaymentsGet($id, $offset, $limit, $scheduledPaymentsCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsIdPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription Id |
 **offset** | **int**| Page offset number. | [optional]
 **limit** | **int**| Number of items to be returned. Default - &#x60;20&#x60;, Max - &#x60;100&#x60; | [optional]
 **scheduledPaymentsCount** | **int**| Number of existing scheduled payments to be returned. Default - &#x60;5&#x60;, Max - &#x60;9999&#x60; | [optional]

### Return type

[**\CyberSource\Model\GetSubscriptionsPaymentsResponse**](../Model/GetSubscriptionsPaymentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdPaymentsPut**
> \CyberSource\Model\UpdateSubscriptionsPaymentsResponse subscriptionsIdPaymentsPut($id, $updatePayments)

Update Payments for a subscription

Modifies the state of a subscription's payments. Currently, the only possible modifications are \"skipping\" and \"restoring\" payments.  Marking a payment as \"skipped\" means it will not be processed when its scheduled time arrives. \"Restoring\" a payment removes it from the list of payments to be skipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SubscriptionsApi();
$id = "id_example"; // string | Subscription Id
$updatePayments = new \CyberSource\Model\UpdatePayments(); // \CyberSource\Model\UpdatePayments | Modify payments of a subscription

try {
    $result = $api_instance->subscriptionsIdPaymentsPut($id, $updatePayments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsIdPaymentsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription Id |
 **updatePayments** | [**\CyberSource\Model\UpdatePayments**](../Model/UpdatePayments.md)| Modify payments of a subscription |

### Return type

[**\CyberSource\Model\UpdateSubscriptionsPaymentsResponse**](../Model/UpdateSubscriptionsPaymentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suspendSubscription**
> \CyberSource\Model\SuspendSubscriptionResponse suspendSubscription($id)

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

[**\CyberSource\Model\SuspendSubscriptionResponse**](../Model/SuspendSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscription**
> \CyberSource\Model\UpdateSubscriptionResponse updateSubscription($id, $updateSubscription)

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

[**\CyberSource\Model\UpdateSubscriptionResponse**](../Model/UpdateSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

