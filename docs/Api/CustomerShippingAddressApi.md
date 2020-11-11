# CyberSource\CustomerShippingAddressApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomerShippingAddress**](CustomerShippingAddressApi.md#deleteCustomerShippingAddress) | **DELETE** /tms/v2/customers/{customerTokenId}/shipping-addresses/{shippingAddressTokenId} | Delete a Customer Shipping Address
[**getCustomerShippingAddress**](CustomerShippingAddressApi.md#getCustomerShippingAddress) | **GET** /tms/v2/customers/{customerTokenId}/shipping-addresses/{shippingAddressTokenId} | Retrieve a Customer Shipping Address
[**getCustomerShippingAddressesList**](CustomerShippingAddressApi.md#getCustomerShippingAddressesList) | **GET** /tms/v2/customers/{customerTokenId}/shipping-addresses | List Shipping Addresses for a Customer
[**patchCustomersShippingAddress**](CustomerShippingAddressApi.md#patchCustomersShippingAddress) | **PATCH** /tms/v2/customers/{customerTokenId}/shipping-addresses/{shippingAddressTokenId} | Update a Customer Shipping Address
[**postCustomerShippingAddress**](CustomerShippingAddressApi.md#postCustomerShippingAddress) | **POST** /tms/v2/customers/{customerTokenId}/shipping-addresses | Create a Customer Shipping Address


# **deleteCustomerShippingAddress**
> deleteCustomerShippingAddress($customerTokenId, $shippingAddressTokenId, $profileId)

Delete a Customer Shipping Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerShippingAddressApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$shippingAddressTokenId = "shippingAddressTokenId_example"; // string | The TokenId of an shipping address.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $api_instance->deleteCustomerShippingAddress($customerTokenId, $shippingAddressTokenId, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressApi->deleteCustomerShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **shippingAddressTokenId** | **string**| The TokenId of an shipping address. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerShippingAddress**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultShippingAddress getCustomerShippingAddress($customerTokenId, $shippingAddressTokenId, $profileId)

Retrieve a Customer Shipping Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerShippingAddressApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$shippingAddressTokenId = "shippingAddressTokenId_example"; // string | The TokenId of an shipping address.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getCustomerShippingAddress($customerTokenId, $shippingAddressTokenId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressApi->getCustomerShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **shippingAddressTokenId** | **string**| The TokenId of an shipping address. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultShippingAddress**](../Model/Tmsv2customersEmbeddedDefaultShippingAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerShippingAddressesList**
> \CyberSource\Model\ShippingAddressListForCustomer getCustomerShippingAddressesList($customerTokenId, $profileId, $offset, $limit)

List Shipping Addresses for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerShippingAddressApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$offset = 0; // int | Starting record in zero-based dataset that should be returned as the first object in the array. Default is 0.
$limit = 20; // int | The maximum number that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100.

try {
    $result = $api_instance->getCustomerShippingAddressesList($customerTokenId, $profileId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressApi->getCustomerShippingAddressesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]
 **offset** | **int**| Starting record in zero-based dataset that should be returned as the first object in the array. Default is 0. | [optional] [default to 0]
 **limit** | **int**| The maximum number that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100. | [optional] [default to 20]

### Return type

[**\CyberSource\Model\ShippingAddressListForCustomer**](../Model/ShippingAddressListForCustomer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCustomersShippingAddress**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultShippingAddress patchCustomersShippingAddress($customerTokenId, $shippingAddressTokenId, $patchCustomerShippingAddressRequest, $profileId, $ifMatch)

Update a Customer Shipping Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerShippingAddressApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$shippingAddressTokenId = "shippingAddressTokenId_example"; // string | The TokenId of an shipping address.
$patchCustomerShippingAddressRequest = new \CyberSource\Model\PatchCustomerShippingAddressRequest(); // \CyberSource\Model\PatchCustomerShippingAddressRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$ifMatch = "ifMatch_example"; // string | Contains an ETag value from a GET request to make the request conditional.

try {
    $result = $api_instance->patchCustomersShippingAddress($customerTokenId, $shippingAddressTokenId, $patchCustomerShippingAddressRequest, $profileId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressApi->patchCustomersShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **shippingAddressTokenId** | **string**| The TokenId of an shipping address. |
 **patchCustomerShippingAddressRequest** | [**\CyberSource\Model\PatchCustomerShippingAddressRequest**](../Model/PatchCustomerShippingAddressRequest.md)|  |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]
 **ifMatch** | **string**| Contains an ETag value from a GET request to make the request conditional. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultShippingAddress**](../Model/Tmsv2customersEmbeddedDefaultShippingAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerShippingAddress**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultShippingAddress postCustomerShippingAddress($customerTokenId, $postCustomerShippingAddressRequest, $profileId)

Create a Customer Shipping Address

Include an existing TMS Customer token id in the request URI. * A Customer token can be created by calling: **POST *_/tms/v2/customers***

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerShippingAddressApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$postCustomerShippingAddressRequest = new \CyberSource\Model\PostCustomerShippingAddressRequest(); // \CyberSource\Model\PostCustomerShippingAddressRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postCustomerShippingAddress($customerTokenId, $postCustomerShippingAddressRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerShippingAddressApi->postCustomerShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **postCustomerShippingAddressRequest** | [**\CyberSource\Model\PostCustomerShippingAddressRequest**](../Model/PostCustomerShippingAddressRequest.md)|  |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultShippingAddress**](../Model/Tmsv2customersEmbeddedDefaultShippingAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

