# CyberSource\NetworkTokensApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCardArtAsset**](NetworkTokensApi.md#getCardArtAsset) | **GET** /tms/v2/tokens/{instrumentIdentifierId}/{tokenProvider}/assets/{assetType} | Retrieve Card Art
[**getTokenizedCard**](NetworkTokensApi.md#getTokenizedCard) | **GET** /tms/v2/tokenized-cards/{tokenizedCardId} | Retrieve a Tokenized Card
[**postIssuerLifeCycleSimulation**](NetworkTokensApi.md#postIssuerLifeCycleSimulation) | **POST** /tms/v2/tokenized-cards/{tokenizedCardId}/issuer-life-cycle-event-simulations | Simulate Issuer Life Cycle Management Events
[**postTokenPaymentCredentials**](NetworkTokensApi.md#postTokenPaymentCredentials) | **POST** /tms/v2/tokens/{tokenId}/payment-credentials | Generate Payment Credentials v2
[**postTokenPaymentCredentialsV3**](NetworkTokensApi.md#postTokenPaymentCredentialsV3) | **POST** /tms/v3/tokens/{tokenId}/payment-credentials | Generate Payment Credentials Latest Version v3
[**postTokenizedCard**](NetworkTokensApi.md#postTokenizedCard) | **POST** /tms/v2/tokenized-cards | Create a Tokenized Card
[**postTokenizedCardDelete**](NetworkTokensApi.md#postTokenizedCardDelete) | **POST** /tms/v2/tokenized-cards/{tokenizedCardId}/delete | Delete a Tokenized Card


# **getCardArtAsset**
> \CyberSource\Model\CardArtAssetResponse getCardArtAsset($instrumentIdentifierId, $tokenProvider, $assetType)

Retrieve Card Art

Retrieves Card Art for a specific Instrument Identifier. The Card Art is a visual representation of the cardholder's payment card. Card Art is only available if a Network Token is successfully provisioned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetworkTokensApi();
$instrumentIdentifierId = "instrumentIdentifierId_example"; // string | The Id of an Instrument Identifier.
$tokenProvider = "tokenProvider_example"; // string | The token provider.
$assetType = "assetType_example"; // string | The type of asset.

try {
    $result = $api_instance->getCardArtAsset($instrumentIdentifierId, $tokenProvider, $assetType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkTokensApi->getCardArtAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrumentIdentifierId** | **string**| The Id of an Instrument Identifier. |
 **tokenProvider** | **string**| The token provider. |
 **assetType** | **string**| The type of asset. |

### Return type

[**\CyberSource\Model\CardArtAssetResponse**](../Model/CardArtAssetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenizedCard**
> \CyberSource\Model\GetTokenizedCardResponse getTokenizedCard($tokenizedCardId, $profileId)

Retrieve a Tokenized Card

|**Tokenized Cards**<br>A Tokenized Card represents a network token. Network tokens perform better than regular card numbers and they are not necessarily invalidated when a cardholder loses their card, or it expires. This API returns the details of a tokenized card stored in TMS. You can use this API to check the status of a tokenized card and retrieve details such as the last four digits of the underlying card, expiration date, and card type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetworkTokensApi();
$tokenizedCardId = "tokenizedCardId_example"; // string | The Id of a tokenized card.
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getTokenizedCard($tokenizedCardId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkTokensApi->getTokenizedCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenizedCardId** | **string**| The Id of a tokenized card. |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\GetTokenizedCardResponse**](../Model/GetTokenizedCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIssuerLifeCycleSimulation**
> postIssuerLifeCycleSimulation($profileId, $tokenizedCardId, $postIssuerLifeCycleSimulationRequest)

Simulate Issuer Life Cycle Management Events

**Lifecycle Management Events**<br>Simulates an issuer life cycle manegement event for updates on the tokenized card. The events that can be simulated are: - Token status changes (e.g. active, suspended, deleted) - Updates to the underlying card, including card art changes, expiration date changes, and card number suffix. **Note:** This is only available in CAS environment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetworkTokensApi();
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.
$tokenizedCardId = "tokenizedCardId_example"; // string | The Id of a tokenized card.
$postIssuerLifeCycleSimulationRequest = new \CyberSource\Model\PostIssuerLifeCycleSimulationRequest(); // \CyberSource\Model\PostIssuerLifeCycleSimulationRequest | 

try {
    $api_instance->postIssuerLifeCycleSimulation($profileId, $tokenizedCardId, $postIssuerLifeCycleSimulationRequest);
} catch (Exception $e) {
    echo 'Exception when calling NetworkTokensApi->postIssuerLifeCycleSimulation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. |
 **tokenizedCardId** | **string**| The Id of a tokenized card. |
 **postIssuerLifeCycleSimulationRequest** | [**\CyberSource\Model\PostIssuerLifeCycleSimulationRequest**](../Model/PostIssuerLifeCycleSimulationRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenPaymentCredentials**
> string postTokenPaymentCredentials($tokenId, $postPaymentCredentialsRequest, $profileId)

Generate Payment Credentials v2

**Note**: This resource will be replace by [payment credentials version 3](#/paths/~1tms~1v3~1tokens~1{tokenId}~1payment-credentials/post). The SDK will remain available for now; however, it will no longer be documented or maintain in the Developer Centre.<br> **Token**<br>A Token can represent your tokenized Customer, Payment Instrument, Instrument Identifier or Tokenized Card information.<br> **Payment Credentials**<br>Contains payment information such as the network token, generated cryptogram for Visa & MasterCard or dynamic CVV for Amex in a JSON Web Encryption (JWE) response.<br>Your system can use this API to retrieve the Payment Credentials for an existing Customer, Payment Instrument, Instrument Identifier or Tokenized Card.<br>Optionally, **authenticated identities** information from Passkey authentication can be provided to potentially achieve liability shift, which may result in the return of an e-commerce indicator of 5 if successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetworkTokensApi();
$tokenId = "tokenId_example"; // string | The Id of a token representing a Customer, Payment Instrument or Instrument Identifier.
$postPaymentCredentialsRequest = new \CyberSource\Model\PostPaymentCredentialsRequest(); // \CyberSource\Model\PostPaymentCredentialsRequest | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postTokenPaymentCredentials($tokenId, $postPaymentCredentialsRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkTokensApi->postTokenPaymentCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenId** | **string**| The Id of a token representing a Customer, Payment Instrument or Instrument Identifier. |
 **postPaymentCredentialsRequest** | [**\CyberSource\Model\PostPaymentCredentialsRequest**](../Model/PostPaymentCredentialsRequest.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jose;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenPaymentCredentialsV3**
> \CyberSource\Model\PostPaymentCredentialsResponse postTokenPaymentCredentialsV3($tokenId, $postPaymentCredentialsV3Request, $profileId)

Generate Payment Credentials Latest Version v3

**Payment Credentials**<br>Contains payment information such as the network token, generated TAVV cryptogram for Visa & MasterCard, dynamic CVV for Amex, or DTVV cryptogram for VISA. This latest version (v3) returns the Primary Account Number details, if the network token is not present. The response is provided in JSON Web Encryption (JWE) format. <br>Your system can use this API to retrieve the Payment Credentials for an existing Customer, Payment Instrument, Instrument Identifier or Tokenized Card.<br>Optionally, **authenticated identities** information from Passkey authentication can be provided to potentially achieve liability shift, which may result in the return of an e-commerce indicator of 5 if successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetworkTokensApi();
$tokenId = "tokenId_example"; // string | The Id of a token representing a Customer, Payment Instrument or Instrument Identifier.
$postPaymentCredentialsV3Request = new \CyberSource\Model\PostPaymentCredentialsV3Request(); // \CyberSource\Model\PostPaymentCredentialsV3Request | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postTokenPaymentCredentialsV3($tokenId, $postPaymentCredentialsV3Request, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkTokensApi->postTokenPaymentCredentialsV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenId** | **string**| The Id of a token representing a Customer, Payment Instrument or Instrument Identifier. |
 **postPaymentCredentialsV3Request** | [**\CyberSource\Model\PostPaymentCredentialsV3Request**](../Model/PostPaymentCredentialsV3Request.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\PostPaymentCredentialsResponse**](../Model/PostPaymentCredentialsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/jose;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenizedCard**
> \CyberSource\Model\GetTokenizedCardResponse postTokenizedCard($postTokenizedCardRequest, $profileId)

Create a Tokenized Card

**Tokenized cards**<br>A Tokenized card represents a network token. Network tokens perform better than regular card numbers and they are not necessarily invalidated when a cardholder loses their card, or it expires. This API submits a request to the card association to create a network token. If successful, a tokenized card will be created in TMS to represent the network token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetworkTokensApi();
$postTokenizedCardRequest = new \CyberSource\Model\PostTokenizedCardRequest(); // \CyberSource\Model\PostTokenizedCardRequest | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postTokenizedCard($postTokenizedCardRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkTokensApi->postTokenizedCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTokenizedCardRequest** | [**\CyberSource\Model\PostTokenizedCardRequest**](../Model/PostTokenizedCardRequest.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\GetTokenizedCardResponse**](../Model/GetTokenizedCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenizedCardDelete**
> postTokenizedCardDelete($tokenizedCardId, $profileId, $postTokenizedCardDeleteRequest)

Delete a Tokenized Card

This API attempts to delete a network token from the card association with a specified reason. | If successful, the corresponding tokenized card will be deleted. | The reason for deletion can be specified to provide context for the deletion operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\NetworkTokensApi();
$tokenizedCardId = "tokenizedCardId_example"; // string | The Id of a tokenized card.
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.
$postTokenizedCardDeleteRequest = new \CyberSource\Model\PostTokenizedCardDeleteRequest(); // \CyberSource\Model\PostTokenizedCardDeleteRequest | 

try {
    $api_instance->postTokenizedCardDelete($tokenizedCardId, $profileId, $postTokenizedCardDeleteRequest);
} catch (Exception $e) {
    echo 'Exception when calling NetworkTokensApi->postTokenizedCardDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenizedCardId** | **string**| The Id of a tokenized card. |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]
 **postTokenizedCardDeleteRequest** | [**\CyberSource\Model\PostTokenizedCardDeleteRequest**](../Model/PostTokenizedCardDeleteRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

