# CyberSource\TaxesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateTax**](TaxesApi.md#calculateTax) | **POST** /vas/v2/tax | Calculate Taxes
[**voidTax**](TaxesApi.md#voidTax) | **PATCH** /vas/v2/tax/{id} | Void Taxes


# **calculateTax**
> \CyberSource\Model\VasV2PaymentsPost201Response calculateTax($taxRequest)

Calculate Taxes

The tax calculation service provides real-time sales tax and VAT calculations for orders placed with your business worldwide.  It enhances your ability to conduct business globally and enables you to avoid the risk and complexity of managing online tax calculation.  The service supports product-based tax rules and exemptions for goods and services.  The tax rates are updated twice a month and calculations include sub-level detail (rates per taxing jurisdiction, names and types of jurisdictions). Implementation guidance, list of supported countries, and information on tax reporting are in the [Tax User Guide](https://developer.cybersource.com/docs/cybs/en-us/tax-calculation/developer/all/rest/tax-calculation/tax-overview.html). The availability of API features for a merchant can depend on the portfolio configuration and may need to be enabled at the portfolio level before they can be added to merchant accounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TaxesApi();
$taxRequest = new \CyberSource\Model\TaxRequest(); // \CyberSource\Model\TaxRequest | 

try {
    $result = $api_instance->calculateTax($taxRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->calculateTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxRequest** | [**\CyberSource\Model\TaxRequest**](../Model/TaxRequest.md)|  |

### Return type

[**\CyberSource\Model\VasV2PaymentsPost201Response**](../Model/VasV2PaymentsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidTax**
> \CyberSource\Model\VasV2TaxVoid200Response voidTax($voidTaxRequest, $id)

Void Taxes

Pass the Tax Request ID in the PATCH request to void the committed tax calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TaxesApi();
$voidTaxRequest = new \CyberSource\Model\VoidTaxRequest(); // \CyberSource\Model\VoidTaxRequest | 
$id = "id_example"; // string | The tax ID returned from a previous request.

try {
    $result = $api_instance->voidTax($voidTaxRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->voidTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voidTaxRequest** | [**\CyberSource\Model\VoidTaxRequest**](../Model/VoidTaxRequest.md)|  |
 **id** | **string**| The tax ID returned from a previous request. |

### Return type

[**\CyberSource\Model\VasV2TaxVoid200Response**](../Model/VasV2TaxVoid200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

