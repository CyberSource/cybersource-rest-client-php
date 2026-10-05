# CyberSource\PurchaseIntentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPurchaseIntent**](PurchaseIntentApi.md#cancelPurchaseIntent) | **PUT** /icc/v1/instructions/{instructionId}/cancel | Cancel a purchase intent
[**initiatePurchaseIntent**](PurchaseIntentApi.md#initiatePurchaseIntent) | **POST** /icc/v1/instructions | Initiate a purchase intent
[**updatePurchaseIntent**](PurchaseIntentApi.md#updatePurchaseIntent) | **PUT** /icc/v1/instructions/{instructionId} | Update a purchase intent


# **cancelPurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 cancelPurchaseIntent($instructionId, $agenticCancelPurchaseIntentRequest)

Cancel a purchase intent

Cancel an existing purchase intent (instruction) identified by its instructionId. The agent calls this endpoint when the consumer decides to abandon the purchase before payment credentials have been used. Requires device information and assurance data for identity verification. Returns status CANCELLED (HTTP 200) on success, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required before cancellation can proceed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PurchaseIntentApi();
$instructionId = "instructionId_example"; // string | 
$agenticCancelPurchaseIntentRequest = new \CyberSource\Model\AgenticCancelPurchaseIntentRequest(); // \CyberSource\Model\AgenticCancelPurchaseIntentRequest | Unique identifier for the purchase intent instruction.

try {
    $result = $api_instance->cancelPurchaseIntent($instructionId, $agenticCancelPurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseIntentApi->cancelPurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**|  |
 **agenticCancelPurchaseIntentRequest** | [**\CyberSource\Model\AgenticCancelPurchaseIntentRequest**](../Model/AgenticCancelPurchaseIntentRequest.md)| Unique identifier for the purchase intent instruction. |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiatePurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 initiatePurchaseIntent($agenticCreatePurchaseIntentRequest)

Initiate a purchase intent

Create a new purchase intent (instruction) for an agentic transaction. The agent calls this endpoint after a card has been enrolled to define what the consumer wants to buy. The request includes payment instrument references, device and assurance data, mandates (spending limits, merchant preferences, and product descriptions), and optional buyer information. Return an instructionId (HTTP 200) if the intent is created immediately, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required. The instructionId returned is used in all subsequent operations - update, cancel, retrieve credentials, and confirm transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PurchaseIntentApi();
$agenticCreatePurchaseIntentRequest = new \CyberSource\Model\AgenticCreatePurchaseIntentRequest(); // \CyberSource\Model\AgenticCreatePurchaseIntentRequest | 

try {
    $result = $api_instance->initiatePurchaseIntent($agenticCreatePurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseIntentApi->initiatePurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agenticCreatePurchaseIntentRequest** | [**\CyberSource\Model\AgenticCreatePurchaseIntentRequest**](../Model/AgenticCreatePurchaseIntentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 updatePurchaseIntent($instructionId, $agenticUpdatePurchaseIntentRequest)

Update a purchase intent

Update an existing purchase intent (instruction) identified by its instructionId. The agent calls this endpoint when the consumer modifies their order — for example, changing the quantity, updating mandates, switching payment instruments, or changing shipping details. The request body has the same structure as the initiate request. Returns the same instructionId (HTTP 200) on success, or PENDING (HTTP 202) with pendingEvents if additional cardholder authentication is required for the updated intent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PurchaseIntentApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticUpdatePurchaseIntentRequest = new \CyberSource\Model\AgenticUpdatePurchaseIntentRequest(); // \CyberSource\Model\AgenticUpdatePurchaseIntentRequest | 

try {
    $result = $api_instance->updatePurchaseIntent($instructionId, $agenticUpdatePurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseIntentApi->updatePurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticUpdatePurchaseIntentRequest** | [**\CyberSource\Model\AgenticUpdatePurchaseIntentRequest**](../Model/AgenticUpdatePurchaseIntentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

