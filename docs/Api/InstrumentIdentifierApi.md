# CyberSource\InstrumentIdentifierApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**instrumentidentifiersPost**](InstrumentIdentifierApi.md#instrumentidentifiersPost) | **POST** /instrumentidentifiers | Create an Instrument Identifier
[**instrumentidentifiersTokenIdDelete**](InstrumentIdentifierApi.md#instrumentidentifiersTokenIdDelete) | **DELETE** /instrumentidentifiers/{tokenId} | Delete an Instrument Identifier
[**instrumentidentifiersTokenIdGet**](InstrumentIdentifierApi.md#instrumentidentifiersTokenIdGet) | **GET** /instrumentidentifiers/{tokenId} | Retrieve an Instrument Identifier
[**instrumentidentifiersTokenIdPatch**](InstrumentIdentifierApi.md#instrumentidentifiersTokenIdPatch) | **PATCH** /instrumentidentifiers/{tokenId} | Update a Instrument Identifier
[**instrumentidentifiersTokenIdPaymentinstrumentsGet**](InstrumentIdentifierApi.md#instrumentidentifiersTokenIdPaymentinstrumentsGet) | **GET** /instrumentidentifiers/{tokenId}/paymentinstruments | Retrieve all Payment Instruments associated with an Instrument Identifier


# **instrumentidentifiersPost**
> \CyberSource\Model\InlineResponse2007 instrumentidentifiersPost($profileId, $body)

Create an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$body = new \CyberSource\Model\Body(); // \CyberSource\Model\Body | Please specify either a Card or Bank Account.

try {
    $result = $api_instance->instrumentidentifiersPost($profileId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->instrumentidentifiersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **body** | [**\CyberSource\Model\Body**](../Model/Body.md)| Please specify either a Card or Bank Account. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **instrumentidentifiersTokenIdDelete**
> instrumentidentifiersTokenIdDelete($profileId, $tokenId)

Delete an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.

try {
    $api_instance->instrumentidentifiersTokenIdDelete($profileId, $tokenId);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->instrumentidentifiersTokenIdDelete: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **instrumentidentifiersTokenIdGet**
> \CyberSource\Model\InlineResponse2007 instrumentidentifiersTokenIdGet($profileId, $tokenId)

Retrieve an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.

try {
    $result = $api_instance->instrumentidentifiersTokenIdGet($profileId, $tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->instrumentidentifiersTokenIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |

### Return type

[**\CyberSource\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **instrumentidentifiersTokenIdPatch**
> \CyberSource\Model\InlineResponse2007 instrumentidentifiersTokenIdPatch($profileId, $tokenId, $body)

Update a Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier
$body = new \CyberSource\Model\Body1(); // \CyberSource\Model\Body1 | Please specify the previous transaction Id to update.

try {
    $result = $api_instance->instrumentidentifiersTokenIdPatch($profileId, $tokenId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->instrumentidentifiersTokenIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier |
 **body** | [**\CyberSource\Model\Body1**](../Model/Body1.md)| Please specify the previous transaction Id to update. |

### Return type

[**\CyberSource\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **instrumentidentifiersTokenIdPaymentinstrumentsGet**
> \CyberSource\Model\InlineResponse2008 instrumentidentifiersTokenIdPaymentinstrumentsGet($profileId, $tokenId, $offset, $limit)

Retrieve all Payment Instruments associated with an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.
$offset = "offset_example"; // string | Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0.
$limit = "20"; // string | The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100.

try {
    $result = $api_instance->instrumentidentifiersTokenIdPaymentinstrumentsGet($profileId, $tokenId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->instrumentidentifiersTokenIdPaymentinstrumentsGet: ', $e->getMessage(), PHP_EOL;
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

[**\CyberSource\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

