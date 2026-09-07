# CyberSource\ForeignExchangeRatesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFxRates**](ForeignExchangeRatesApi.md#createFxRates) | **POST** /pts/v2/payouts/fx-rates | Retrieve Foreign Exchange Rates


# **createFxRates**
> \CyberSource\Model\InlineResponse2013 createFxRates($body, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)

Retrieve Foreign Exchange Rates

Retrieve current foreign exchange rates for cross-border payouts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ForeignExchangeRatesApi();
$body = new \CyberSource\Model\Body(); // \CyberSource\Model\Body | 
$contentType = "contentType_example"; // string | 
$xRequestid = "xRequestid_example"; // string | 
$vCMerchantId = "vCMerchantId_example"; // string | 
$vCPermissions = "vCPermissions_example"; // string | 
$vCCorrelationId = "vCCorrelationId_example"; // string | 
$vCOrganizationId = "vCOrganizationId_example"; // string | 

try {
    $result = $api_instance->createFxRates($body, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignExchangeRatesApi->createFxRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CyberSource\Model\Body**](../Model/Body.md)|  |
 **contentType** | **string**|  |
 **xRequestid** | **string**|  |
 **vCMerchantId** | **string**|  |
 **vCPermissions** | **string**|  |
 **vCCorrelationId** | **string**|  |
 **vCOrganizationId** | **string**|  |

### Return type

[**\CyberSource\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

