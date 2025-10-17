# CyberSource\CreateNewWebhooksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findProductsToSubscribe**](CreateNewWebhooksApi.md#findProductsToSubscribe) | **GET** /notification-subscriptions/v2/products/{organizationId} | Find Products You Can Subscribe To
[**notificationSubscriptionsV2WebhooksPost**](CreateNewWebhooksApi.md#notificationSubscriptionsV2WebhooksPost) | **POST** /notification-subscriptions/v2/webhooks | Create a New Webhook Subscription
[**saveSymEgressKey**](CreateNewWebhooksApi.md#saveSymEgressKey) | **POST** /kms/egress/v2/keys-sym | Create Webhook Security Keys


# **findProductsToSubscribe**
> \CyberSource\Model\InlineResponse2004[] findProductsToSubscribe($organizationId)

Find Products You Can Subscribe To

Retrieve a list of products and event types that your account is eligible for. These products and events are the ones that you may subscribe to in the next step of creating webhooks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CreateNewWebhooksApi();
$organizationId = "organizationId_example"; // string | The Organization Identifier.

try {
    $result = $api_instance->findProductsToSubscribe($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateNewWebhooksApi->findProductsToSubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| The Organization Identifier. |

### Return type

[**\CyberSource\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationSubscriptionsV2WebhooksPost**
> \CyberSource\Model\InlineResponse2015 notificationSubscriptionsV2WebhooksPost($createWebhook)

Create a New Webhook Subscription

Create a new webhook subscription. Before creating a webhook, ensure that a signature key has been created.  For the example \"Create Webhook using oAuth with Client Credentials\" - for clients who have more than one oAuth Provider and have different client secrets that they would like to config for a given webhook, they may do so by overriding the keyId inside security config of webhook subscription. See the Developer Center examples section titled \"Webhook Security - Create or Store Egress Symmetric Key - Store oAuth Credentials For Symmetric Key\" to store these oAuth credentials that CYBS will need for oAuth.  For JWT authentication, attach your oAuth details to the webhook subscription. See the example \"Create Webhook using oAuth with JWT\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CreateNewWebhooksApi();
$createWebhook = new \CyberSource\Model\CreateWebhook(); // \CyberSource\Model\CreateWebhook | The webhook payload

try {
    $result = $api_instance->notificationSubscriptionsV2WebhooksPost($createWebhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateNewWebhooksApi->notificationSubscriptionsV2WebhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createWebhook** | [**\CyberSource\Model\CreateWebhook**](../Model/CreateWebhook.md)| The webhook payload | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveSymEgressKey**
> \CyberSource\Model\InlineResponse2014 saveSymEgressKey($vCSenderOrganizationId, $vCPermissions, $vCCorrelationId, $saveSymEgressKey)

Create Webhook Security Keys

Create security keys that CyberSource will use internally to connect to your servers and validate messages using a digital signature.  Select the CREATE example for CyberSource to generate the key on our server and maintain it for you as well. Remember to save the key in the API response, so that you can use it to validate messages later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CreateNewWebhooksApi();
$vCSenderOrganizationId = "vCSenderOrganizationId_example"; // string | Sender organization id
$vCPermissions = "vCPermissions_example"; // string | Encoded user permissions returned by the CGK, for the entity user who initiated the boarding
$vCCorrelationId = "vCCorrelationId_example"; // string | A globally unique id associated with your request
$saveSymEgressKey = new \CyberSource\Model\SaveSymEgressKey(); // \CyberSource\Model\SaveSymEgressKey | Provide egress Symmetric key information to save (create or store or refresh)

try {
    $result = $api_instance->saveSymEgressKey($vCSenderOrganizationId, $vCPermissions, $vCCorrelationId, $saveSymEgressKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateNewWebhooksApi->saveSymEgressKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vCSenderOrganizationId** | **string**| Sender organization id |
 **vCPermissions** | **string**| Encoded user permissions returned by the CGK, for the entity user who initiated the boarding |
 **vCCorrelationId** | **string**| A globally unique id associated with your request | [optional]
 **saveSymEgressKey** | [**\CyberSource\Model\SaveSymEgressKey**](../Model/SaveSymEgressKey.md)| Provide egress Symmetric key information to save (create or store or refresh) | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

