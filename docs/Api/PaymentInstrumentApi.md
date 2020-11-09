# CyberSource\PaymentInstrumentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePaymentInstrument**](PaymentInstrumentApi.md#deletePaymentInstrument) | **DELETE** /tms/v1/paymentinstruments/{paymentInstrumentTokenId} | Delete a Payment Instrument
[**getPaymentInstrument**](PaymentInstrumentApi.md#getPaymentInstrument) | **GET** /tms/v1/paymentinstruments/{paymentInstrumentTokenId} | Retrieve a Payment Instrument
[**patchPaymentInstrument**](PaymentInstrumentApi.md#patchPaymentInstrument) | **PATCH** /tms/v1/paymentinstruments/{paymentInstrumentTokenId} | Update a Payment Instrument
[**postPaymentInstrument**](PaymentInstrumentApi.md#postPaymentInstrument) | **POST** /tms/v1/paymentinstruments | Create a Payment Instrument


# **deletePaymentInstrument**
> deletePaymentInstrument($paymentInstrumentTokenId, $profileId)

Delete a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$paymentInstrumentTokenId = "paymentInstrumentTokenId_example"; // string | The TokenId of a payment instrument.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $api_instance->deletePaymentInstrument($paymentInstrumentTokenId, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->deletePaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument getPaymentInstrument($paymentInstrumentTokenId, $profileId)

Retrieve a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$paymentInstrumentTokenId = "paymentInstrumentTokenId_example"; // string | The TokenId of a payment instrument.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getPaymentInstrument($paymentInstrumentTokenId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->getPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **patchPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument patchPaymentInstrument($paymentInstrumentTokenId, $patchPaymentInstrumentRequest, $profileId, $ifMatch)

Update a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$paymentInstrumentTokenId = "paymentInstrumentTokenId_example"; // string | The TokenId of a payment instrument.
$patchPaymentInstrumentRequest = new \CyberSource\Model\PatchPaymentInstrumentRequest(); // \CyberSource\Model\PatchPaymentInstrumentRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$ifMatch = "ifMatch_example"; // string | Contains an ETag value from a GET request to make the request conditional.

try {
    $result = $api_instance->patchPaymentInstrument($paymentInstrumentTokenId, $patchPaymentInstrumentRequest, $profileId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->patchPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentInstrumentTokenId** | **string**| The TokenId of a payment instrument. |
 **patchPaymentInstrumentRequest** | [**\CyberSource\Model\PatchPaymentInstrumentRequest**](../Model/PatchPaymentInstrumentRequest.md)|  |
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

# **postPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument postPaymentInstrument($postPaymentInstrumentRequest, $profileId)

Create a Payment Instrument

Include an existing TMS Instrument Identifier id in the request body. * An Instrument Identifier token can be created by calling: **POST *_/tms/v1/instrumentidentifiers***

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$postPaymentInstrumentRequest = new \CyberSource\Model\PostPaymentInstrumentRequest(); // \CyberSource\Model\PostPaymentInstrumentRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postPaymentInstrument($postPaymentInstrumentRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->postPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postPaymentInstrumentRequest** | [**\CyberSource\Model\PostPaymentInstrumentRequest**](../Model/PostPaymentInstrumentRequest.md)|  |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

