# CyberSource\CreateNewWebhooksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhookSubscription**](CreateNewWebhooksApi.md#createWebhookSubscription) | **POST** /notification-subscriptions/v1/webhooks | Create a Webhook
[**findProductsToSubscribe**](CreateNewWebhooksApi.md#findProductsToSubscribe) | **GET** /notification-subscriptions/v1/products/{organizationId} | Find Products You Can Subscribe To
[**saveSymEgressKey**](CreateNewWebhooksApi.md#saveSymEgressKey) | **POST** /kms/egress/v2/keys-sym | Create Webhook Security Keys


# **createWebhookSubscription**
> \CyberSource\Model\InlineResponse2013 createWebhookSubscription($createWebhookRequest)

Create a Webhook

Create a new webhook subscription. Before creating a webhook, ensure that a security key has been created at the top of this developer center section. You will not need to pass us back the key during the creation of the webhook, but you will receive an error if you did not already create a key or store one on file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CreateNewWebhooksApi();
$createWebhookRequest = new \CyberSource\Model\CreateWebhookRequest(); // \CyberSource\Model\CreateWebhookRequest | The webhook payload

try {
    $result = $api_instance->createWebhookSubscription($createWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateNewWebhooksApi->createWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createWebhookRequest** | [**\CyberSource\Model\CreateWebhookRequest**](../Model/CreateWebhookRequest.md)| The webhook payload | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProductsToSubscribe**
> \CyberSource\Model\InlineResponse2003[] findProductsToSubscribe($organizationId)

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

[**\CyberSource\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveSymEgressKey**
> \CyberSource\Model\InlineResponse2012 saveSymEgressKey($vCSenderOrganizationId, $vCPermissions, $vCCorrelationId, $saveSymEgressKey)

Create Webhook Security Keys

Create security keys that CyberSource will use internally to connect to your servers and validate messages using a digital signature.  Select the CREATE example for CyberSource to generate the key on our server and maintain it for you as well. Remeber to save the key in the API response, so that you can use it to validate messages later.

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

[**\CyberSource\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

