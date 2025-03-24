# CyberSource\ManageWebhooksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationSubscriptionsV1WebhooksWebhookIdPost**](ManageWebhooksApi.md#notificationSubscriptionsV1WebhooksWebhookIdPost) | **POST** /notification-subscriptions/v1/webhooks/{webhookId} | Test a Webhook Configuration
[**saveAsymEgressKey**](ManageWebhooksApi.md#saveAsymEgressKey) | **POST** /kms/egress/v2/keys-asym | Message Level Encryption


# **notificationSubscriptionsV1WebhooksWebhookIdPost**
> \CyberSource\Model\InlineResponse2014 notificationSubscriptionsV1WebhooksWebhookIdPost($webhookId)

Test a Webhook Configuration

Test the webhook configuration by sending a sample webhook. Calling this endpoint sends a sample webhook to the endpoint identified in the user's subscription.   It will contain sample values for the product & eventType based on values present in your subscription along with a sample message in the payload.   Based on the webhook response users can make any necessary modifications or rest assured knowing their setup is configured correctly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ManageWebhooksApi();
$webhookId = "webhookId_example"; // string | The Webhook Identifier.

try {
    $result = $api_instance->notificationSubscriptionsV1WebhooksWebhookIdPost($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageWebhooksApi->notificationSubscriptionsV1WebhooksWebhookIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The Webhook Identifier. |

### Return type

[**\CyberSource\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveAsymEgressKey**
> \CyberSource\Model\InlineResponse2015 saveAsymEgressKey($vCSenderOrganizationId, $vCPermissions, $saveAsymEgressKey, $vCCorrelationId)

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

[**\CyberSource\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

