# CyberSource\ManageWebhooksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhookSubscription**](ManageWebhooksApi.md#deleteWebhookSubscription) | **DELETE** /notification-subscriptions/v2/webhooks/{webhookId} | Delete a Webhook Subscription
[**getWebhookSubscriptionById**](ManageWebhooksApi.md#getWebhookSubscriptionById) | **GET** /notification-subscriptions/v2/webhooks/{webhookId} | Get Details On a Single Webhook
[**getWebhookSubscriptionsByOrg**](ManageWebhooksApi.md#getWebhookSubscriptionsByOrg) | **GET** /notification-subscriptions/v2/webhooks | Get Details On All Created Webhooks
[**notificationSubscriptionsV2WebhooksWebhookIdStatusPut**](ManageWebhooksApi.md#notificationSubscriptionsV2WebhooksWebhookIdStatusPut) | **PUT** /notification-subscriptions/v2/webhooks/{webhookId}/status | Update a Webhook Status
[**saveAsymEgressKey**](ManageWebhooksApi.md#saveAsymEgressKey) | **POST** /kms/egress/v2/keys-asym | Message Level Encryption
[**testWebhookSubscription**](ManageWebhooksApi.md#testWebhookSubscription) | **POST** /notification-subscriptions/v1/webhooks/{webhookId} | Test a Webhook Configuration
[**updateWebhookSubscription**](ManageWebhooksApi.md#updateWebhookSubscription) | **PATCH** /notification-subscriptions/v2/webhooks/{webhookId} | Update a Webhook Subscription


# **deleteWebhookSubscription**
> deleteWebhookSubscription($webhookId)

Delete a Webhook Subscription

Delete the webhook. Please note that deleting a particular webhook does not delete the history of the webhook notifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$webhookId = "webhookId_example"; // string | The webhook identifier.

try {
    $api_instance->deleteWebhookSubscription($webhookId);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->deleteWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The webhook identifier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookSubscriptionById**
> \CyberSource\Model\CreateWebhookSubscriptionResponse getWebhookSubscriptionById($webhookId)

Get Details On a Single Webhook

Retrieve the details of a specific webhook by supplying the webhook ID in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$webhookId = "webhookId_example"; // string | The webhook Identifier

try {
    $result = $api_instance->getWebhookSubscriptionById($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->getWebhookSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The webhook Identifier |

### Return type

[**\CyberSource\Model\CreateWebhookSubscriptionResponse**](../Model/CreateWebhookSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookSubscriptionsByOrg**
> \CyberSource\Model\WebhookSubscription[] getWebhookSubscriptionsByOrg($organizationId, $productId, $eventType)

Get Details On All Created Webhooks

Retrieve a list of all previously created webhooks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$organizationId = "organizationId_example"; // string | The Organization Identifier.
$productId = "productId_example"; // string | The Product Identifier.
$eventType = "eventType_example"; // string | The Event Type.

try {
    $result = $api_instance->getWebhookSubscriptionsByOrg($organizationId, $productId, $eventType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->getWebhookSubscriptionsByOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| The Organization Identifier. |
 **productId** | **string**| The Product Identifier. | [optional]
 **eventType** | **string**| The Event Type. | [optional]

### Return type

[**\CyberSource\Model\WebhookSubscription[]**](../Model/WebhookSubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationSubscriptionsV2WebhooksWebhookIdStatusPut**
> notificationSubscriptionsV2WebhooksWebhookIdStatusPut($webhookId, $updateStatus)

Update a Webhook Status

Users can update the status of a webhook subscription by calling this endpoint.   The webhookId parameter in the URL path identifies the specific webhook subscription to be updated. The request body accepts the values ACTIVE or INACTIVE. If the subscription is set to INACTIVE, webhooks will not be delivered until the subscription is activated again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$webhookId = "webhookId_example"; // string | The Webhook Identifier.
$updateStatus = new \CyberSource\Model\UpdateStatus(); // \CyberSource\Model\UpdateStatus | The status that the subscription should be updated to.

try {
    $api_instance->notificationSubscriptionsV2WebhooksWebhookIdStatusPut($webhookId, $updateStatus);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->notificationSubscriptionsV2WebhooksWebhookIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The Webhook Identifier. |
 **updateStatus** | [**\CyberSource\Model\UpdateStatus**](../Model/UpdateStatus.md)| The status that the subscription should be updated to. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveAsymEgressKey**
> \CyberSource\Model\SaveAsymEgressKeyResponse saveAsymEgressKey($saveAsymEgressKey, $vCCorrelationId, $vCSenderOrganizationId, $vCPermissions)

Message Level Encryption

Store and manage certificates that will be used to preform Message Level Encryption (MLE). Each new webhook will need its own unique asymmetric certificate. You can either use a digital certificate issued/signed by a CA or self-sign your own using the documentation available on the Developer Guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$saveAsymEgressKey = new \CyberSource\Model\SaveAsymEgressKey(); // \CyberSource\Model\SaveAsymEgressKey | Provide egress Asymmetric key information to save (create or store)
$vCCorrelationId = "vCCorrelationId_example"; // string | A globally unique id associated with your request
$vCSenderOrganizationId = "vCSenderOrganizationId_example"; // string | Sender organization id
$vCPermissions = "vCPermissions_example"; // string | Encoded user permissions returned by the CGK, for the entity user who initiated the boarding

try {
    $result = $api_instance->saveAsymEgressKey($saveAsymEgressKey, $vCCorrelationId, $vCSenderOrganizationId, $vCPermissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->saveAsymEgressKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saveAsymEgressKey** | [**\CyberSource\Model\SaveAsymEgressKey**](../Model/SaveAsymEgressKey.md)| Provide egress Asymmetric key information to save (create or store) |
 **vCCorrelationId** | **string**| A globally unique id associated with your request | [optional]
 **vCSenderOrganizationId** | **string**| Sender organization id | [optional]
 **vCPermissions** | **string**| Encoded user permissions returned by the CGK, for the entity user who initiated the boarding | [optional]

### Return type

[**\CyberSource\Model\SaveAsymEgressKeyResponse**](../Model/SaveAsymEgressKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testWebhookSubscription**
> \CyberSource\Model\TestWebhookSubscriptionResponse testWebhookSubscription($webhookId)

Test a Webhook Configuration

Test the webhook configuration by sending a sample webhook. Calling this endpoint sends a sample webhook to the endpoint identified in the user's subscription.   It will contain sample values for the product & eventType based on values present in your subscription along with a sample message in the payload.   Based on the webhook response users can make any necessary modifications or rest assured knowing their setup is configured correctly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$webhookId = "webhookId_example"; // string | The Webhook Identifier.

try {
    $result = $api_instance->testWebhookSubscription($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->testWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The Webhook Identifier. |

### Return type

[**\CyberSource\Model\TestWebhookSubscriptionResponse**](../Model/TestWebhookSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookSubscription**
> \CyberSource\Model\UpdateWebhookSubscriptionResponse updateWebhookSubscription($webhookId, $updateWebhook)

Update a Webhook Subscription

Update a Webhook Subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$webhookId = "webhookId_example"; // string | The Webhook Identifier.
$updateWebhook = new \CyberSource\Model\UpdateWebhook(); // \CyberSource\Model\UpdateWebhook | The webhook payload or changes to apply.

try {
    $result = $api_instance->updateWebhookSubscription($webhookId, $updateWebhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->updateWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The Webhook Identifier. |
 **updateWebhook** | [**\CyberSource\Model\UpdateWebhook**](../Model/UpdateWebhook.md)| The webhook payload or changes to apply. | [optional]

### Return type

[**\CyberSource\Model\UpdateWebhookSubscriptionResponse**](../Model/UpdateWebhookSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

