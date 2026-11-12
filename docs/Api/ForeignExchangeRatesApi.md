# CyberSource\ForeignExchangeRatesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFxRates**](ForeignExchangeRatesApi.md#createFxRates) | **POST** /pts/v2/payouts/fx-rates | Retrieve Foreign Exchange Rates


# **createFxRates**
> \CyberSource\Model\CreateFxRatesResponse createFxRates($createFxRatesRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)

Retrieve Foreign Exchange Rates

Retrieve current foreign exchange rates for cross-border payouts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ForeignExchangeRatesApi();
$createFxRatesRequest = new \CyberSource\Model\CreateFxRatesRequest(); // \CyberSource\Model\CreateFxRatesRequest | 
$contentType = "contentType_example"; // string | 
$xRequestid = "xRequestid_example"; // string | 
$vCMerchantId = "vCMerchantId_example"; // string | 
$vCPermissions = "vCPermissions_example"; // string | 
$vCCorrelationId = "vCCorrelationId_example"; // string | 
$vCOrganizationId = "vCOrganizationId_example"; // string | 

try {
    $result = $api_instance->createFxRates($createFxRatesRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignExchangeRatesApi->createFxRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createFxRatesRequest** | [**\CyberSource\Model\CreateFxRatesRequest**](../Model/CreateFxRatesRequest.md)|  |
 **contentType** | **string**|  |
 **xRequestid** | **string**|  |
 **vCMerchantId** | **string**|  |
 **vCPermissions** | **string**|  |
 **vCCorrelationId** | **string**|  |
 **vCOrganizationId** | **string**|  |

### Return type

[**\CyberSource\Model\CreateFxRatesResponse**](../Model/CreateFxRatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

