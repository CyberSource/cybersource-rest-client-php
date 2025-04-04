# CyberSource\CreateNewWebhooksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saveSymEgressKey**](CreateNewWebhooksApi.md#saveSymEgressKey) | **POST** /kms/egress/v2/keys-sym | Create Webhook Security Keys


# **saveSymEgressKey**
> \CyberSource\Model\InlineResponse2013 saveSymEgressKey($vCSenderOrganizationId, $vCPermissions, $vCCorrelationId, $saveSymEgressKey)

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

[**\CyberSource\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

