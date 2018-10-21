# CyberSource\PaymentInstrumentApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentinstrumentsPost**](PaymentInstrumentApi.md#paymentinstrumentsPost) | **POST** /paymentinstruments | Create a Payment Instrument
[**paymentinstrumentsTokenIdDelete**](PaymentInstrumentApi.md#paymentinstrumentsTokenIdDelete) | **DELETE** /paymentinstruments/{tokenId} | Delete a Payment Instrument
[**paymentinstrumentsTokenIdGet**](PaymentInstrumentApi.md#paymentinstrumentsTokenIdGet) | **GET** /paymentinstruments/{tokenId} | Retrieve a Payment Instrument
[**paymentinstrumentsTokenIdPatch**](PaymentInstrumentApi.md#paymentinstrumentsTokenIdPatch) | **PATCH** /paymentinstruments/{tokenId} | Update a Payment Instrument


# **paymentinstrumentsPost**
> \CyberSource\Model\InlineResponse2016 paymentinstrumentsPost($profileId, $body)

Create a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$body = new \CyberSource\Model\Body2(); // \CyberSource\Model\Body2 | Please specify the customers payment details for card or bank account.

try {
    $result = $api_instance->paymentinstrumentsPost($profileId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->paymentinstrumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **body** | [**\CyberSource\Model\Body2**](../Model/Body2.md)| Please specify the customers payment details for card or bank account. |

### Return type

[**\CyberSource\Model\InlineResponse2016**](../Model/InlineResponse2016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentinstrumentsTokenIdDelete**
> paymentinstrumentsTokenIdDelete($profileId, $tokenId)

Delete a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.

try {
    $api_instance->paymentinstrumentsTokenIdDelete($profileId, $tokenId);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->paymentinstrumentsTokenIdDelete: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentinstrumentsTokenIdGet**
> \CyberSource\Model\InlineResponse2016 paymentinstrumentsTokenIdGet($profileId, $tokenId)

Retrieve a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.

try {
    $result = $api_instance->paymentinstrumentsTokenIdGet($profileId, $tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->paymentinstrumentsTokenIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of a Payment Instrument. |

### Return type

[**\CyberSource\Model\InlineResponse2016**](../Model/InlineResponse2016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentinstrumentsTokenIdPatch**
> \CyberSource\Model\InlineResponse2016 paymentinstrumentsTokenIdPatch($profileId, $tokenId, $body)

Update a Payment Instrument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentInstrumentApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of a Payment Instrument.
$body = new \CyberSource\Model\Body3(); // \CyberSource\Model\Body3 | Please specify the customers payment details.

try {
    $result = $api_instance->paymentinstrumentsTokenIdPatch($profileId, $tokenId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentInstrumentApi->paymentinstrumentsTokenIdPatch: ', $e->getMessage(), PHP_EOL;
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

[**\CyberSource\Model\InlineResponse2016**](../Model/InlineResponse2016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

