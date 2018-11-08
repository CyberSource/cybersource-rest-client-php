# CyberSource\InstrumentIdentifierApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tmsV1InstrumentidentifiersTokenIdDelete**](InstrumentIdentifierApi.md#tmsV1InstrumentidentifiersTokenIdDelete) | **DELETE** /tms/v1/instrumentidentifiers/{tokenId} | Delete an Instrument Identifier
[**tmsV1InstrumentidentifiersTokenIdGet**](InstrumentIdentifierApi.md#tmsV1InstrumentidentifiersTokenIdGet) | **GET** /tms/v1/instrumentidentifiers/{tokenId} | Retrieve an Instrument Identifier
[**tmsV1InstrumentidentifiersTokenIdPatch**](InstrumentIdentifierApi.md#tmsV1InstrumentidentifiersTokenIdPatch) | **PATCH** /tms/v1/instrumentidentifiers/{tokenId} | Update a Instrument Identifier


# **tmsV1InstrumentidentifiersTokenIdDelete**
> tmsV1InstrumentidentifiersTokenIdDelete($profileId, $tokenId)

Delete an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.

try {
    $api_instance->tmsV1InstrumentidentifiersTokenIdDelete($profileId, $tokenId);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->tmsV1InstrumentidentifiersTokenIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **tmsV1InstrumentidentifiersTokenIdGet**
> \CyberSource\Model\TmsV1InstrumentidentifiersPost200Response tmsV1InstrumentidentifiersTokenIdGet($profileId, $tokenId)

Retrieve an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.

try {
    $result = $api_instance->tmsV1InstrumentidentifiersTokenIdGet($profileId, $tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->tmsV1InstrumentidentifiersTokenIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentidentifiersPost200Response**](../Model/TmsV1InstrumentidentifiersPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmsV1InstrumentidentifiersTokenIdPatch**
> \CyberSource\Model\TmsV1InstrumentidentifiersPost200Response tmsV1InstrumentidentifiersTokenIdPatch($profileId, $tokenId, $body)

Update a Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$tokenId = "tokenId_example"; // string | The TokenId of an Instrument Identifier.
$body = new \CyberSource\Model\Body1(); // \CyberSource\Model\Body1 | Please specify the previous transaction Id to update.

try {
    $result = $api_instance->tmsV1InstrumentidentifiersTokenIdPatch($profileId, $tokenId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->tmsV1InstrumentidentifiersTokenIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **tokenId** | **string**| The TokenId of an Instrument Identifier. |
 **body** | [**\CyberSource\Model\Body1**](../Model/Body1.md)| Please specify the previous transaction Id to update. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentidentifiersPost200Response**](../Model/TmsV1InstrumentidentifiersPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

