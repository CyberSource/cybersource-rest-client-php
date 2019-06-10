# CyberSource\InstrumentIdentifierApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInstrumentIdentifier**](InstrumentIdentifierApi.md#createInstrumentIdentifier) | **POST** /tms/v1/instrumentidentifiers | Create an Instrument Identifier
[**deleteInstrumentIdentifier**](InstrumentIdentifierApi.md#deleteInstrumentIdentifier) | **DELETE** /tms/v1/instrumentidentifiers/{tokenId} | Delete an Instrument Identifier
[**getAllPaymentInstruments**](InstrumentIdentifierApi.md#getAllPaymentInstruments) | **GET** /tms/v1/instrumentidentifiers/{tokenId}/paymentinstruments | Retrieve all Payment Instruments
[**getInstrumentIdentifier**](InstrumentIdentifierApi.md#getInstrumentIdentifier) | **GET** /tms/v1/instrumentidentifiers/{tokenId} | Retrieve an Instrument Identifier
[**updateInstrumentIdentifier**](InstrumentIdentifierApi.md#updateInstrumentIdentifier) | **PATCH** /tms/v1/instrumentidentifiers/{tokenId} | Update a Instrument Identifier


# **createInstrumentIdentifier**
> \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response createInstrumentIdentifier($profileId, $createInstrumentIdentifierRequest)

Create an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$createInstrumentIdentifierRequest = new \CyberSource\Model\CreateInstrumentIdentifierRequest(); // \CyberSource\Model\CreateInstrumentIdentifierRequest | Please specify either a Card, Bank Account or Enrollable Card

try {
    $result = $api_instance->createInstrumentIdentifier($profileId, $createInstrumentIdentifierRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->createInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **createInstrumentIdentifierRequest** | [**\CyberSource\Model\CreateInstrumentIdentifierRequest**](../Model/CreateInstrumentIdentifierRequest.md)| Please specify either a Card, Bank Account or Enrollable Card |

### Return type

[**\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response**](../Model/TmsV1InstrumentIdentifiersPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInstrumentIdentifier**
> deleteInstrumentIdentifier($profileId, $tokenId)

Delete an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.

try {
    $api_instance->deleteInstrumentIdentifier($profileId, $tokenId);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->deleteInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPaymentInstruments**
> \CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response getAllPaymentInstruments($profileId, $tokenId, $offset, $limit)

Retrieve all Payment Instruments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.
$offset = 0; // int | Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0.
$limit = 20; // int | The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100.

try {
    $result = $api_instance->getAllPaymentInstruments($profileId, $tokenId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->getAllPaymentInstruments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |
 **offset** | **int**| Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0. | [optional] [default to 0]
 **limit** | **int**| The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100. | [optional] [default to 20]

### Return type

[**\CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response**](../Model/TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstrumentIdentifier**
> \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response getInstrumentIdentifier($profileId, $tokenId)

Retrieve an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.

try {
    $result = $api_instance->getInstrumentIdentifier($profileId, $tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->getInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response**](../Model/TmsV1InstrumentIdentifiersPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInstrumentIdentifier**
> \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response updateInstrumentIdentifier($profileId, $tokenId, $updateInstrumentIdentifierRequest)

Update a Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.
$updateInstrumentIdentifierRequest = new \CyberSource\Model\UpdateInstrumentIdentifierRequest(); // \CyberSource\Model\UpdateInstrumentIdentifierRequest | Specify the previous transaction ID to update.

try {
    $result = $api_instance->updateInstrumentIdentifier($profileId, $tokenId, $updateInstrumentIdentifierRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->updateInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |
 **updateInstrumentIdentifierRequest** | [**\CyberSource\Model\UpdateInstrumentIdentifierRequest**](../Model/UpdateInstrumentIdentifierRequest.md)| Specify the previous transaction ID to update. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response**](../Model/TmsV1InstrumentIdentifiersPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

