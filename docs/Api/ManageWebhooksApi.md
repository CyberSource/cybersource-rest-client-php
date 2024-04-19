# CyberSource\ManageWebhooksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhookSubscription**](ManageWebhooksApi.md#deleteWebhookSubscription) | **DELETE** /notification-subscriptions/v1/webhooks/{webhookId} | Delete a Webhook Subscription
[**getWebhookSubscriptionById**](ManageWebhooksApi.md#getWebhookSubscriptionById) | **GET** /notification-subscriptions/v1/webhooks/{webhookId} | Get Details On a Single Webhook
[**getWebhookSubscriptionsByOrg**](ManageWebhooksApi.md#getWebhookSubscriptionsByOrg) | **GET** /notification-subscriptions/v1/webhooks | Get Details On All Created Webhooks
[**saveAsymEgressKey**](ManageWebhooksApi.md#saveAsymEgressKey) | **POST** /kms/egress/v2/keys-asym | Message Level Encryption
[**updateWebhookSubscription**](ManageWebhooksApi.md#updateWebhookSubscription) | **PATCH** /notification-subscriptions/v1/webhooks/{webhookId} | Update a Webhook Subscription


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
> \CyberSource\Model\InlineResponse2005 getWebhookSubscriptionById($webhookId)

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

[**\CyberSource\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookSubscriptionsByOrg**
> \CyberSource\Model\InlineResponse2004[] getWebhookSubscriptionsByOrg($organizationId, $productId, $eventType)

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
 **productId** | **string**| The Product Identifier. |
 **eventType** | **string**| The Event Type. |

### Return type

[**\CyberSource\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveAsymEgressKey**
> \CyberSource\Model\InlineResponse2014 saveAsymEgressKey($vCSenderOrganizationId, $vCPermissions, $saveAsymEgressKey, $vCCorrelationId)

Message Level Encryption

Store and manage certificates that will be used to preform Message Level Encryption (MLE). Each new webhook will need its own unique asymmetric certificate. You can either use a digital certificate issued/signed by a CA or self-sign your own using the documentation available on the Developer Guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$vCSenderOrganizationId = "vCSenderOrganizationId_example"; // string | Sender organization id
$vCPermissions = "vCPermissions_example"; // string | Encoded user permissions returned by the CGK, for the entity user who initiated the boarding
$saveAsymEgressKey = new \CyberSource\Model\SaveAsymEgressKey(); // \CyberSource\Model\SaveAsymEgressKey | Provide egress Asymmetric key information to save (create or store)
$vCCorrelationId = "vCCorrelationId_example"; // string | A globally unique id associated with your request

try {
    $result = $api_instance->saveAsymEgressKey($vCSenderOrganizationId, $vCPermissions, $saveAsymEgressKey, $vCCorrelationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->saveAsymEgressKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vCSenderOrganizationId** | **string**| Sender organization id |
 **vCPermissions** | **string**| Encoded user permissions returned by the CGK, for the entity user who initiated the boarding |
 **saveAsymEgressKey** | [**\CyberSource\Model\SaveAsymEgressKey**](../Model/SaveAsymEgressKey.md)| Provide egress Asymmetric key information to save (create or store) |
 **vCCorrelationId** | **string**| A globally unique id associated with your request | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookSubscription**
> updateWebhookSubscription($webhookId, $updateWebhookRequest)

Update a Webhook Subscription

Update the webhook subscription using PATCH.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$webhookId = "webhookId_example"; // string | The Webhook Identifier.
$updateWebhookRequest = new \CyberSource\Model\UpdateWebhookRequest(); // \CyberSource\Model\UpdateWebhookRequest | The webhook payload or changes to apply.

try {
    $api_instance->updateWebhookSubscription($webhookId, $updateWebhookRequest);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->updateWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The Webhook Identifier. |
 **updateWebhookRequest** | [**\CyberSource\Model\UpdateWebhookRequest**](../Model/UpdateWebhookRequest.md)| The webhook payload or changes to apply. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

