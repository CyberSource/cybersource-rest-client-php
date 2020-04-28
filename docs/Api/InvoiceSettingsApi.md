# CyberSource\InvoiceSettingsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoiceSettings**](InvoiceSettingsApi.md#getInvoiceSettings) | **GET** /invoicing/v2/invoiceSettings | Get Invoice Settings
[**updateInvoiceSettings**](InvoiceSettingsApi.md#updateInvoiceSettings) | **PUT** /invoicing/v2/invoiceSettings | Update Invoice Settings


# **getInvoiceSettings**
> \CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response getInvoiceSettings()

Get Invoice Settings

Get the invoice settings for the invoice payment page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoiceSettingsApi();

try {
    $result = $api_instance->getInvoiceSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSettingsApi->getInvoiceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response**](../Model/InvoicingV2InvoiceSettingsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoiceSettings**
> \CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response updateInvoiceSettings($invoiceSettingsRequest)

Update Invoice Settings

Update invoice settings for the invoice payment page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoiceSettingsApi();
$invoiceSettingsRequest = new \CyberSource\Model\InvoiceSettingsRequest(); // \CyberSource\Model\InvoiceSettingsRequest | 

try {
    $result = $api_instance->updateInvoiceSettings($invoiceSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSettingsApi->updateInvoiceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceSettingsRequest** | [**\CyberSource\Model\InvoiceSettingsRequest**](../Model/InvoiceSettingsRequest.md)|  |

### Return type

[**\CyberSource\Model\InvoicingV2InvoiceSettingsGet200Response**](../Model/InvoicingV2InvoiceSettingsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

