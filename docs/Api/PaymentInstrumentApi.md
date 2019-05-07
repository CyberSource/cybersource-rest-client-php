# CyberSource\PaymentInstrumentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentInstrument**](PaymentInstrumentApi.md#createPaymentInstrument) | **POST** /tms/v1/paymentinstruments | Create a Payment Instrument
[**deletePaymentInstrument**](PaymentInstrumentApi.md#deletePaymentInstrument) | **DELETE** /tms/v1/paymentinstruments/{tokenId} | Delete a Payment Instrument
[**getPaymentInstrument**](PaymentInstrumentApi.md#getPaymentInstrument) | **GET** /tms/v1/paymentinstruments/{tokenId} | Retrieve a Payment Instrument
[**updatePaymentInstrument**](PaymentInstrumentApi.md#updatePaymentInstrument) | **PATCH** /tms/v1/paymentinstruments/{tokenId} | Update a Payment Instrument


# **createPaymentInstrument**
> \CyberSource\Model\TmsV1PaymentinstrumentsPatch200Response createPaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $createPaymentInstrumentRequest, $clientApplication)

Create a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$vCMerchantId = "vCMerchantId_example"; // string | CyberSource merchant id.
$vCCorrelationId = "vCCorrelationId_example"; // string | The mandatory correlation id passed by upstream (calling) system.
$createPaymentInstrumentRequest = new \CyberSource\Model\CreatePaymentInstrumentRequest(); // \CyberSource\Model\CreatePaymentInstrumentRequest | Specify the customer's payment details for card or bank account.
$clientApplication = "clientApplication_example"; // string | Client application name

try {
    $result = $api_instance->createPaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $createPaymentInstrumentRequest, $clientApplication);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->createPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **vCMerchantId** | **string**| CyberSource merchant id. |
 **vCCorrelationId** | **string**| The mandatory correlation id passed by upstream (calling) system. |
 **createPaymentInstrumentRequest** | [**\CyberSource\Model\CreatePaymentInstrumentRequest**](../Model/CreatePaymentInstrumentRequest.md)| Specify the customer&#39;s payment details for card or bank account. |
 **clientApplication** | **string**| Client application name | [optional]

### Return type

[**\CyberSource\Model\TmsV1PaymentinstrumentsPatch200Response**](../Model/TmsV1PaymentinstrumentsPatch200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentInstrument**
> deletePaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $tokenId, $clientApplication)

Delete a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$vCMerchantId = "vCMerchantId_example"; // string | CyberSource merchant id.
$vCCorrelationId = "vCCorrelationId_example"; // string | The mandatory correlation id passed by upstream (calling) system.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.
$clientApplication = "clientApplication_example"; // string | Client application name

try {
    $api_instance->deletePaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $tokenId, $clientApplication);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->deletePaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **vCMerchantId** | **string**| CyberSource merchant id. |
 **vCCorrelationId** | **string**| The mandatory correlation id passed by upstream (calling) system. |
 **tokenId** | **string**| The TokenId of a Payment Instrument. |
 **clientApplication** | **string**| Client application name | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentInstrument**
> \CyberSource\Model\TmsV1PaymentinstrumentsPatch200Response getPaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $tokenId, $clientApplication)

Retrieve a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$vCMerchantId = "vCMerchantId_example"; // string | CyberSource merchant id.
$vCCorrelationId = "vCCorrelationId_example"; // string | The mandatory correlation id passed by upstream (calling) system.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.
$clientApplication = "clientApplication_example"; // string | Client application name

try {
    $result = $api_instance->getPaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $tokenId, $clientApplication);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->getPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **vCMerchantId** | **string**| CyberSource merchant id. |
 **vCCorrelationId** | **string**| The mandatory correlation id passed by upstream (calling) system. |
 **tokenId** | **string**| The TokenId of a Payment Instrument. |
 **clientApplication** | **string**| Client application name | [optional]

### Return type

[**\CyberSource\Model\TmsV1PaymentinstrumentsPatch200Response**](../Model/TmsV1PaymentinstrumentsPatch200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentInstrument**
> \CyberSource\Model\TmsV1PaymentinstrumentsPatch200Response updatePaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $tokenId, $updatePaymentInstrumentRequest, $clientApplication)

Update a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$vCMerchantId = "vCMerchantId_example"; // string | CyberSource merchant id.
$vCCorrelationId = "vCCorrelationId_example"; // string | The mandatory correlation id passed by upstream (calling) system.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.
$updatePaymentInstrumentRequest = new \CyberSource\Model\UpdatePaymentInstrumentRequest(); // \CyberSource\Model\UpdatePaymentInstrumentRequest | Specify the customer's payment details.
$clientApplication = "clientApplication_example"; // string | Client application name

try {
    $result = $api_instance->updatePaymentInstrument($profileId, $vCMerchantId, $vCCorrelationId, $tokenId, $updatePaymentInstrumentRequest, $clientApplication);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->updatePaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **vCMerchantId** | **string**| CyberSource merchant id. |
 **vCCorrelationId** | **string**| The mandatory correlation id passed by upstream (calling) system. |
 **tokenId** | **string**| The TokenId of a Payment Instrument. |
 **updatePaymentInstrumentRequest** | [**\CyberSource\Model\UpdatePaymentInstrumentRequest**](../Model/UpdatePaymentInstrumentRequest.md)| Specify the customer&#39;s payment details. |
 **clientApplication** | **string**| Client application name | [optional]

### Return type

[**\CyberSource\Model\TmsV1PaymentinstrumentsPatch200Response**](../Model/TmsV1PaymentinstrumentsPatch200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

