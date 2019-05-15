# CyberSource\PaymentInstrumentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentInstrument**](PaymentInstrumentApi.md#createPaymentInstrument) | **POST** /tms/v1/paymentinstruments | Create a Payment Instrument
[**deletePaymentInstrument**](PaymentInstrumentApi.md#deletePaymentInstrument) | **DELETE** /tms/v1/paymentinstruments/{tokenId} | Delete a Payment Instrument
[**getPaymentInstrument**](PaymentInstrumentApi.md#getPaymentInstrument) | **GET** /tms/v1/paymentinstruments/{tokenId} | Retrieve a Payment Instrument
[**updatePaymentInstrument**](PaymentInstrumentApi.md#updatePaymentInstrument) | **PATCH** /tms/v1/paymentinstruments/{tokenId} | Update a Payment Instrument


# **createPaymentInstrument**
> \CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments createPaymentInstrument($profileId, $createPaymentInstrumentRequest)

Create a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$createPaymentInstrumentRequest = new \CyberSource\Model\CreatePaymentInstrumentRequest(); // \CyberSource\Model\CreatePaymentInstrumentRequest | Specify the customer's payment details for card or bank account.

try {
    $result = $api_instance->createPaymentInstrument($profileId, $createPaymentInstrumentRequest);
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
 **createPaymentInstrumentRequest** | [**\CyberSource\Model\CreatePaymentInstrumentRequest**](../Model/CreatePaymentInstrumentRequest.md)| Specify the customer&#39;s payment details for card or bank account. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments**](../Model/TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentInstrument**
> deletePaymentInstrument($profileId, $tokenId)

Delete a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.

try {
    $api_instance->deletePaymentInstrument($profileId, $tokenId);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->deletePaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of a Payment Instrument. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentInstrument**
> \CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments getPaymentInstrument($profileId, $tokenId)

Retrieve a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.

try {
    $result = $api_instance->getPaymentInstrument($profileId, $tokenId);
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
 **tokenId** | **string**| The TokenId of a Payment Instrument. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments**](../Model/TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentInstrument**
> \CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments updatePaymentInstrument($profileId, $tokenId, $updatePaymentInstrumentRequest)

Update a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.
$updatePaymentInstrumentRequest = new \CyberSource\Model\UpdatePaymentInstrumentRequest(); // \CyberSource\Model\UpdatePaymentInstrumentRequest | Specify the customer's payment details.

try {
    $result = $api_instance->updatePaymentInstrument($profileId, $tokenId, $updatePaymentInstrumentRequest);
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
 **tokenId** | **string**| The TokenId of a Payment Instrument. |
 **updatePaymentInstrumentRequest** | [**\CyberSource\Model\UpdatePaymentInstrumentRequest**](../Model/UpdatePaymentInstrumentRequest.md)| Specify the customer&#39;s payment details. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments**](../Model/TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

