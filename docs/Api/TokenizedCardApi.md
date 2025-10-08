# CyberSource\TokenizedCardApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTokenizedCard**](TokenizedCardApi.md#deleteTokenizedCard) | **DELETE** /tms/v2/tokenized-cards/{tokenizedCardId} | Delete a Tokenized Card
[**getTokenizedCard**](TokenizedCardApi.md#getTokenizedCard) | **GET** /tms/v2/tokenized-cards/{tokenizedCardId} | Retrieve a Tokenized Card
[**postIssuerLifeCycleSimulation**](TokenizedCardApi.md#postIssuerLifeCycleSimulation) | **POST** /tms/v2/tokenized-cards/{tokenizedCardId}/issuer-life-cycle-event-simulations | Simulate Issuer Life Cycle Management Events
[**postTokenizedCard**](TokenizedCardApi.md#postTokenizedCard) | **POST** /tms/v2/tokenized-cards | Create a Tokenized Card


# **deleteTokenizedCard**
> deleteTokenizedCard($tokenizedCardId, $profileId)

Delete a Tokenized Card

|  |  |  | | --- | --- | --- | | The Network Token will attempt to be deleted from the card association and if successful the corresponding TMS Network Token will be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenizedCardApi();
$tokenizedCardId = "tokenizedCardId_example"; // string | The Id of a tokenized card.
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $api_instance->deleteTokenizedCard($tokenizedCardId, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedCardApi->deleteTokenizedCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenizedCardId** | **string**| The Id of a tokenized card. |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenizedCard**
> \CyberSource\Model\TokenizedcardRequest getTokenizedCard($tokenizedCardId, $profileId)

Retrieve a Tokenized Card

|  |  |  | | --- | --- | --- | |**Tokenized Cards**<br>A Tokenized Card represents a network token. Network tokens perform better than regular card numbers and they are not necessarily invalidated when a cardholder loses their card, or it expires.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenizedCardApi();
$tokenizedCardId = "tokenizedCardId_example"; // string | The Id of a tokenized card.
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getTokenizedCard($tokenizedCardId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedCardApi->getTokenizedCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenizedCardId** | **string**| The Id of a tokenized card. |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\TokenizedcardRequest**](../Model/TokenizedcardRequest.md)

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

$api_instance = new CyberSource\Api\TokenizedCardApi();
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.
$tokenizedCardId = "tokenizedCardId_example"; // string | The Id of a tokenized card.
$postIssuerLifeCycleSimulationRequest = new \CyberSource\Model\PostIssuerLifeCycleSimulationRequest(); // \CyberSource\Model\PostIssuerLifeCycleSimulationRequest | 

try {
    $api_instance->postIssuerLifeCycleSimulation($profileId, $tokenizedCardId, $postIssuerLifeCycleSimulationRequest);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedCardApi->postIssuerLifeCycleSimulation: ', $e->getMessage(), PHP_EOL;
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

# **postTokenizedCard**
> \CyberSource\Model\TokenizedcardRequest postTokenizedCard($tokenizedcardRequest, $profileId)

Create a Tokenized Card

|  |  |  | | --- | --- | --- | |**Tokenized cards**<br>A Tokenized card represents a network token. Network tokens perform better than regular card numbers and they are not necessarily invalidated when a cardholder loses their card, or it expires.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenizedCardApi();
$tokenizedcardRequest = new \CyberSource\Model\TokenizedcardRequest(); // \CyberSource\Model\TokenizedcardRequest | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postTokenizedCard($tokenizedcardRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizedCardApi->postTokenizedCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenizedcardRequest** | [**\CyberSource\Model\TokenizedcardRequest**](../Model/TokenizedcardRequest.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\TokenizedcardRequest**](../Model/TokenizedcardRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

