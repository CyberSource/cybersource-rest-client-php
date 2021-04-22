# CyberSource\CustomerPaymentInstrumentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomerPaymentInstrument**](CustomerPaymentInstrumentApi.md#deleteCustomerPaymentInstrument) | **DELETE** /tms/v2/customers/{customerTokenId}/payment-instruments/{paymentInstrumentTokenId} | Delete a Customer Payment Instrument
[**getCustomerPaymentInstrument**](CustomerPaymentInstrumentApi.md#getCustomerPaymentInstrument) | **GET** /tms/v2/customers/{customerTokenId}/payment-instruments/{paymentInstrumentTokenId} | Retrieve a Customer Payment Instrument
[**getCustomerPaymentInstrumentsList**](CustomerPaymentInstrumentApi.md#getCustomerPaymentInstrumentsList) | **GET** /tms/v2/customers/{customerTokenId}/payment-instruments | List Payment Instruments for a Customer
[**patchCustomersPaymentInstrument**](CustomerPaymentInstrumentApi.md#patchCustomersPaymentInstrument) | **PATCH** /tms/v2/customers/{customerTokenId}/payment-instruments/{paymentInstrumentTokenId} | Update a Customer Payment Instrument
[**postCustomerPaymentInstrument**](CustomerPaymentInstrumentApi.md#postCustomerPaymentInstrument) | **POST** /tms/v2/customers/{customerTokenId}/payment-instruments | Create a Customer Payment Instrument


# **deleteCustomerPaymentInstrument**
> deleteCustomerPaymentInstrument($customerTokenId, $paymentInstrumentTokenId, $profileId)

Delete a Customer Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$paymentInstrumentTokenId = "paymentInstrumentTokenId_example"; // string | The TokenId of a payment instrument.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $api_instance->deleteCustomerPaymentInstrument($customerTokenId, $paymentInstrumentTokenId, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->deleteCustomerPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **paymentInstrumentTokenId** | **string**| The TokenId of a payment instrument. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument getCustomerPaymentInstrument($customerTokenId, $paymentInstrumentTokenId, $profileId)

Retrieve a Customer Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$paymentInstrumentTokenId = "paymentInstrumentTokenId_example"; // string | The TokenId of a payment instrument.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getCustomerPaymentInstrument($customerTokenId, $paymentInstrumentTokenId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->getCustomerPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **paymentInstrumentTokenId** | **string**| The TokenId of a payment instrument. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentInstrumentsList**
> \CyberSource\Model\PaymentInstrumentList getCustomerPaymentInstrumentsList($customerTokenId, $profileId, $offset, $limit)

List Payment Instruments for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$offset = 0; // int | Starting record in zero-based dataset that should be returned as the first object in the array. Default is 0.
$limit = 20; // int | The maximum number that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100.

try {
    $result = $api_instance->getCustomerPaymentInstrumentsList($customerTokenId, $profileId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->getCustomerPaymentInstrumentsList: ', $e->getMessage(), PHP_EOL;
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

[**\CyberSource\Model\PaymentInstrumentList**](../Model/PaymentInstrumentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCustomersPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument patchCustomersPaymentInstrument($customerTokenId, $paymentInstrumentTokenId, $patchCustomerPaymentInstrumentRequest, $profileId, $ifMatch)

Update a Customer Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$paymentInstrumentTokenId = "paymentInstrumentTokenId_example"; // string | The TokenId of a payment instrument.
$patchCustomerPaymentInstrumentRequest = new \CyberSource\Model\PatchCustomerPaymentInstrumentRequest(); // \CyberSource\Model\PatchCustomerPaymentInstrumentRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$ifMatch = "ifMatch_example"; // string | Contains an ETag value from a GET request to make the request conditional.

try {
    $result = $api_instance->patchCustomersPaymentInstrument($customerTokenId, $paymentInstrumentTokenId, $patchCustomerPaymentInstrumentRequest, $profileId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->patchCustomersPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **paymentInstrumentTokenId** | **string**| The TokenId of a payment instrument. |
 **patchCustomerPaymentInstrumentRequest** | [**\CyberSource\Model\PatchCustomerPaymentInstrumentRequest**](../Model/PatchCustomerPaymentInstrumentRequest.md)|  |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]
 **ifMatch** | **string**| Contains an ETag value from a GET request to make the request conditional. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument postCustomerPaymentInstrument($customerTokenId, $postCustomerPaymentInstrumentRequest, $profileId)

Create a Customer Payment Instrument

Include an existing TMS Customer & Instrument Identifier token id in the request. * A Customer token can be created by calling: **POST *_/tms/v2/customers*** * An Instrument Identifier token can be created by calling: **POST *_/tms/v1/instrumentidentifiers***

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$postCustomerPaymentInstrumentRequest = new \CyberSource\Model\PostCustomerPaymentInstrumentRequest(); // \CyberSource\Model\PostCustomerPaymentInstrumentRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postCustomerPaymentInstrument($customerTokenId, $postCustomerPaymentInstrumentRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->postCustomerPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **postCustomerPaymentInstrumentRequest** | [**\CyberSource\Model\PostCustomerPaymentInstrumentRequest**](../Model/PostCustomerPaymentInstrumentRequest.md)|  |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

