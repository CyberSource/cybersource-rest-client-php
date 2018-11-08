# CyberSource\PaymentInstrumentsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet**](PaymentInstrumentsApi.md#tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet) | **GET** /tms/v1/instrumentidentifiers/{tokenId}/paymentinstruments | Retrieve all Payment Instruments associated with an Instrument Identifier
[**tmsV1PaymentinstrumentsPost**](PaymentInstrumentsApi.md#tmsV1PaymentinstrumentsPost) | **POST** /tms/v1/paymentinstruments | Create a Payment Instrument
[**tmsV1PaymentinstrumentsTokenIdDelete**](PaymentInstrumentsApi.md#tmsV1PaymentinstrumentsTokenIdDelete) | **DELETE** /tms/v1/paymentinstruments/{tokenId} | Delete a Payment Instrument
[**tmsV1PaymentinstrumentsTokenIdGet**](PaymentInstrumentsApi.md#tmsV1PaymentinstrumentsTokenIdGet) | **GET** /tms/v1/paymentinstruments/{tokenId} | Retrieve a Payment Instrument
[**tmsV1PaymentinstrumentsTokenIdPatch**](PaymentInstrumentsApi.md#tmsV1PaymentinstrumentsTokenIdPatch) | **PATCH** /tms/v1/paymentinstruments/{tokenId} | Update a Payment Instrument


# **tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet**
> \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet($profileId, $tokenId, $offset, $limit)

Retrieve all Payment Instruments associated with an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentsApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.
$offset = "offset_example"; // string | Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0.
$limit = "20"; // string | The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100.

try {
    $result = $api_instance->tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet($profileId, $tokenId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentsApi->tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |
 **offset** | **string**| Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0. | [optional]
 **limit** | **string**| The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100. | [optional] [default to 20]

### Return type

[**\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response**](../Model/TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmsV1PaymentinstrumentsPost**
> \CyberSource\Model\TmsV1PaymentinstrumentsPost201Response tmsV1PaymentinstrumentsPost($profileId, $body)

Create a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentsApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$body = new \CyberSource\Model\Body2(); // \CyberSource\Model\Body2 | Please specify the customers payment details for card or bank account.

try {
    $result = $api_instance->tmsV1PaymentinstrumentsPost($profileId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentsApi->tmsV1PaymentinstrumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **body** | [**\CyberSource\Model\Body2**](../Model/Body2.md)| Please specify the customers payment details for card or bank account. |

### Return type

[**\CyberSource\Model\TmsV1PaymentinstrumentsPost201Response**](../Model/TmsV1PaymentinstrumentsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmsV1PaymentinstrumentsTokenIdDelete**
> tmsV1PaymentinstrumentsTokenIdDelete($profileId, $tokenId)

Delete a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentsApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.

try {
    $api_instance->tmsV1PaymentinstrumentsTokenIdDelete($profileId, $tokenId);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentsApi->tmsV1PaymentinstrumentsTokenIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **tmsV1PaymentinstrumentsTokenIdGet**
> \CyberSource\Model\TmsV1PaymentinstrumentsPost201Response tmsV1PaymentinstrumentsTokenIdGet($profileId, $tokenId)

Retrieve a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentsApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.

try {
    $result = $api_instance->tmsV1PaymentinstrumentsTokenIdGet($profileId, $tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentsApi->tmsV1PaymentinstrumentsTokenIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of a Payment Instrument. |

### Return type

[**\CyberSource\Model\TmsV1PaymentinstrumentsPost201Response**](../Model/TmsV1PaymentinstrumentsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmsV1PaymentinstrumentsTokenIdPatch**
> \CyberSource\Model\TmsV1PaymentinstrumentsPost201Response tmsV1PaymentinstrumentsTokenIdPatch($profileId, $tokenId, $body)

Update a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentsApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.
$body = new \CyberSource\Model\Body3(); // \CyberSource\Model\Body3 | Please specify the customers payment details.

try {
    $result = $api_instance->tmsV1PaymentinstrumentsTokenIdPatch($profileId, $tokenId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentsApi->tmsV1PaymentinstrumentsTokenIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of a Payment Instrument. |
 **body** | [**\CyberSource\Model\Body3**](../Model/Body3.md)| Please specify the customers payment details. |

### Return type

[**\CyberSource\Model\TmsV1PaymentinstrumentsPost201Response**](../Model/TmsV1PaymentinstrumentsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

