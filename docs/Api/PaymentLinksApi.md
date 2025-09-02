# CyberSource\PaymentLinksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentLink**](PaymentLinksApi.md#createPaymentLink) | **POST** /ipl/v2/payment-links | Create a Payment Link
[**getAllPaymentLinks**](PaymentLinksApi.md#getAllPaymentLinks) | **GET** /ipl/v2/payment-links | Get a List of Payment Links
[**getPaymentLink**](PaymentLinksApi.md#getPaymentLink) | **GET** /ipl/v2/payment-links/{id} | Get Payment Link Details
[**updatePaymentLink**](PaymentLinksApi.md#updatePaymentLink) | **PATCH** /ipl/v2/payment-links/{id} | Update a Payment Link


# **createPaymentLink**
> \CyberSource\Model\PblPaymentLinksPost201Response createPaymentLink($createPaymentLinkRequest)

Create a Payment Link

Pay by Link is an easy and fast way to securely sell products or receive donations online. This solution is ideal for distributing the same payment link to multiple customers.   Links for making purchases are referred to as fixed-price links, and links for making donations are referred to as customer-set price links.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentLinksApi();
$createPaymentLinkRequest = new \CyberSource\Model\CreatePaymentLinkRequest(); // \CyberSource\Model\CreatePaymentLinkRequest | 

try {
    $result = $api_instance->createPaymentLink($createPaymentLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->createPaymentLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPaymentLinkRequest** | [**\CyberSource\Model\CreatePaymentLinkRequest**](../Model/CreatePaymentLinkRequest.md)|  |

### Return type

[**\CyberSource\Model\PblPaymentLinksPost201Response**](../Model/PblPaymentLinksPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPaymentLinks**
> \CyberSource\Model\PblPaymentLinksAllGet200Response getAllPaymentLinks($offset, $limit, $status)

Get a List of Payment Links

Provides a (filtered) list of payment links that have been created in your account. You can filter the list based on the following status types:  - ACTIVE  - INACTIVE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentLinksApi();
$offset = 56; // int | Page offset number.
$limit = 56; // int | Maximum number of items you would like returned.   Maximum limit: 1000
$status = "status_example"; // string | The status of the purchase or donation link.  Possible values:   - ACTIVE   - INACTIVE

try {
    $result = $api_instance->getAllPaymentLinks($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->getAllPaymentLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Page offset number. |
 **limit** | **int**| Maximum number of items you would like returned.   Maximum limit: 1000 |
 **status** | **string**| The status of the purchase or donation link.  Possible values:   - ACTIVE   - INACTIVE | [optional]

### Return type

[**\CyberSource\Model\PblPaymentLinksAllGet200Response**](../Model/PblPaymentLinksAllGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentLink**
> \CyberSource\Model\PblPaymentLinksGet200Response getPaymentLink($id)

Get Payment Link Details

You can retrieve details of a specific payment link. For each payment transaction you can use the Transaction Details API to get more details on the payment transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentLinksApi();
$id = "id_example"; // string | The purchase number.

try {
    $result = $api_instance->getPaymentLink($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->getPaymentLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The purchase number. |

### Return type

[**\CyberSource\Model\PblPaymentLinksGet200Response**](../Model/PblPaymentLinksGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentLink**
> \CyberSource\Model\PblPaymentLinksPost201Response updatePaymentLink($id, $updatePaymentLinkRequest)

Update a Payment Link

You can update all information except the payment link number for a payment link. Changes made to amount/price will apply to new payments made using the payment link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentLinksApi();
$id = "id_example"; // string | The purchase number.
$updatePaymentLinkRequest = new \CyberSource\Model\UpdatePaymentLinkRequest(); // \CyberSource\Model\UpdatePaymentLinkRequest | Updating the purchase or donation link does not resend the link automatically. You must resend the purchase or donation link separately.

try {
    $result = $api_instance->updatePaymentLink($id, $updatePaymentLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->updatePaymentLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The purchase number. |
 **updatePaymentLinkRequest** | [**\CyberSource\Model\UpdatePaymentLinkRequest**](../Model/UpdatePaymentLinkRequest.md)| Updating the purchase or donation link does not resend the link automatically. You must resend the purchase or donation link separately. |

### Return type

[**\CyberSource\Model\PblPaymentLinksPost201Response**](../Model/PblPaymentLinksPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

