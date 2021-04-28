# CyberSource\InstrumentIdentifierApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteInstrumentIdentifier**](InstrumentIdentifierApi.md#deleteInstrumentIdentifier) | **DELETE** /tms/v1/instrumentidentifiers/{instrumentIdentifierTokenId} | Delete an Instrument Identifier
[**getInstrumentIdentifier**](InstrumentIdentifierApi.md#getInstrumentIdentifier) | **GET** /tms/v1/instrumentidentifiers/{instrumentIdentifierTokenId} | Retrieve an Instrument Identifier
[**getInstrumentIdentifierPaymentInstrumentsList**](InstrumentIdentifierApi.md#getInstrumentIdentifierPaymentInstrumentsList) | **GET** /tms/v1/instrumentidentifiers/{instrumentIdentifierTokenId}/paymentinstruments | List Payment Instruments for an Instrument Identifier
[**patchInstrumentIdentifier**](InstrumentIdentifierApi.md#patchInstrumentIdentifier) | **PATCH** /tms/v1/instrumentidentifiers/{instrumentIdentifierTokenId} | Update an Instrument Identifier
[**postInstrumentIdentifier**](InstrumentIdentifierApi.md#postInstrumentIdentifier) | **POST** /tms/v1/instrumentidentifiers | Create an Instrument Identifier
[**postInstrumentIdentifierEnrollment**](InstrumentIdentifierApi.md#postInstrumentIdentifierEnrollment) | **POST** /tms/v1/instrumentidentifiers/{instrumentIdentifierTokenId}/enrollment | Enroll an Instrument Identifier for Network Tokenization


# **deleteInstrumentIdentifier**
> deleteInstrumentIdentifier($instrumentIdentifierTokenId, $profileId)

Delete an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$instrumentIdentifierTokenId = "instrumentIdentifierTokenId_example"; // string | The TokenId of a Instrument Identifier.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $api_instance->deleteInstrumentIdentifier($instrumentIdentifierTokenId, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->deleteInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrumentIdentifierTokenId** | **string**| The TokenId of a Instrument Identifier. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstrumentIdentifier**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier getInstrumentIdentifier($instrumentIdentifierTokenId, $profileId)

Retrieve an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$instrumentIdentifierTokenId = "instrumentIdentifierTokenId_example"; // string | The TokenId of a Instrument Identifier.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getInstrumentIdentifier($instrumentIdentifierTokenId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->getInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrumentIdentifierTokenId** | **string**| The TokenId of a Instrument Identifier. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstrumentIdentifierPaymentInstrumentsList**
> \CyberSource\Model\PaymentInstrumentList getInstrumentIdentifierPaymentInstrumentsList($instrumentIdentifierTokenId, $profileId, $offset, $limit)

List Payment Instruments for an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$instrumentIdentifierTokenId = "instrumentIdentifierTokenId_example"; // string | The TokenId of a Instrument Identifier.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$offset = 0; // int | Starting record in zero-based dataset that should be returned as the first object in the array. Default is 0.
$limit = 20; // int | The maximum number that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100.

try {
    $result = $api_instance->getInstrumentIdentifierPaymentInstrumentsList($instrumentIdentifierTokenId, $profileId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->getInstrumentIdentifierPaymentInstrumentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrumentIdentifierTokenId** | **string**| The TokenId of a Instrument Identifier. |
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

# **patchInstrumentIdentifier**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier patchInstrumentIdentifier($instrumentIdentifierTokenId, $patchInstrumentIdentifierRequest, $profileId, $ifMatch)

Update an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$instrumentIdentifierTokenId = "instrumentIdentifierTokenId_example"; // string | The TokenId of a Instrument Identifier.
$patchInstrumentIdentifierRequest = new \CyberSource\Model\PatchInstrumentIdentifierRequest(); // \CyberSource\Model\PatchInstrumentIdentifierRequest | Specify the previous transaction ID to update.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$ifMatch = "ifMatch_example"; // string | Contains an ETag value from a GET request to make the request conditional.

try {
    $result = $api_instance->patchInstrumentIdentifier($instrumentIdentifierTokenId, $patchInstrumentIdentifierRequest, $profileId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->patchInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrumentIdentifierTokenId** | **string**| The TokenId of a Instrument Identifier. |
 **patchInstrumentIdentifierRequest** | [**\CyberSource\Model\PatchInstrumentIdentifierRequest**](../Model/PatchInstrumentIdentifierRequest.md)| Specify the previous transaction ID to update. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]
 **ifMatch** | **string**| Contains an ETag value from a GET request to make the request conditional. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInstrumentIdentifier**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier postInstrumentIdentifier($postInstrumentIdentifierRequest, $profileId)

Create an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$postInstrumentIdentifierRequest = new \CyberSource\Model\PostInstrumentIdentifierRequest(); // \CyberSource\Model\PostInstrumentIdentifierRequest | Specify either a Card, Bank Account or Enrollable Card
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postInstrumentIdentifier($postInstrumentIdentifierRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->postInstrumentIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postInstrumentIdentifierRequest** | [**\CyberSource\Model\PostInstrumentIdentifierRequest**](../Model/PostInstrumentIdentifierRequest.md)| Specify either a Card, Bank Account or Enrollable Card |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInstrumentIdentifierEnrollment**
> postInstrumentIdentifierEnrollment($instrumentIdentifierTokenId, $postInstrumentIdentifierEnrollmentRequest, $profileId)

Enroll an Instrument Identifier for Network Tokenization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifierApi();
$instrumentIdentifierTokenId = "instrumentIdentifierTokenId_example"; // string | The TokenId of a Instrument Identifier.
$postInstrumentIdentifierEnrollmentRequest = new \CyberSource\Model\PostInstrumentIdentifierEnrollmentRequest(); // \CyberSource\Model\PostInstrumentIdentifierEnrollmentRequest | Specify Enrollable Card details
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $api_instance->postInstrumentIdentifierEnrollment($instrumentIdentifierTokenId, $postInstrumentIdentifierEnrollmentRequest, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifierApi->postInstrumentIdentifierEnrollment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrumentIdentifierTokenId** | **string**| The TokenId of a Instrument Identifier. |
 **postInstrumentIdentifierEnrollmentRequest** | [**\CyberSource\Model\PostInstrumentIdentifierEnrollmentRequest**](../Model/PostInstrumentIdentifierEnrollmentRequest.md)| Specify Enrollable Card details |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

