# CyberSource\PaymentEventsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmTransactionEvents**](PaymentEventsApi.md#confirmTransactionEvents) | **POST** /icc/v1/instructions/{instructionId}/confirmations | Confirm transaction events
[**retrievePaymentCredentials**](PaymentEventsApi.md#retrievePaymentCredentials) | **POST** /icc/v1/instructions/{instructionId}/credentials | Retrieve payment credentials


# **confirmTransactionEvents**
> \CyberSource\Model\AgenticConfirmTransactionEventsResponse202 confirmTransactionEvents($instructionId, $agenticConfirmTransactionEventsRequest)

Confirm transaction events

Confirm transaction events for a completed purchase. The agent calls this endpoint after the payment has been submitted to notify the Intelligent Commerce Connect of the transaction outcome. The request includes processor information (transaction type, status, approval codes), order details (shipping, tracking, product information), and merchant information. Returns HTTP 202 acknowledging receipt of the confirmation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentEventsApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticConfirmTransactionEventsRequest = new \CyberSource\Model\AgenticConfirmTransactionEventsRequest(); // \CyberSource\Model\AgenticConfirmTransactionEventsRequest | 

try {
    $result = $api_instance->confirmTransactionEvents($instructionId, $agenticConfirmTransactionEventsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentEventsApi->confirmTransactionEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticConfirmTransactionEventsRequest** | [**\CyberSource\Model\AgenticConfirmTransactionEventsRequest**](../Model/AgenticConfirmTransactionEventsRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticConfirmTransactionEventsResponse202**](../Model/AgenticConfirmTransactionEventsResponse202.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePaymentCredentials**
> \CyberSource\Model\AgenticRetrievePaymentCredentialsResponse200 retrievePaymentCredentials($instructionId, $agenticRetrievePaymentCredentialsRequest)

Retrieve payment credentials

Retrieve tokenized payment credentials for a purchase intent to complete the transaction at a merchant. The agent calls this endpoint after a purchase intent has been created and approved, providing transaction-level details including order information, merchant details, payment options, and production information. Returns COMPLETED (HTTP 200) with a signed payload containing encrypted payment credentials (authorization token and JWS-signed payload), or PENDING (HTTP 202) with pendingEvents if additional cardholder authentication is required. The signed payload is used by the merchant's payment processor to complete the transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentEventsApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticRetrievePaymentCredentialsRequest = new \CyberSource\Model\AgenticRetrievePaymentCredentialsRequest(); // \CyberSource\Model\AgenticRetrievePaymentCredentialsRequest | 

try {
    $result = $api_instance->retrievePaymentCredentials($instructionId, $agenticRetrievePaymentCredentialsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentEventsApi->retrievePaymentCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticRetrievePaymentCredentialsRequest** | [**\CyberSource\Model\AgenticRetrievePaymentCredentialsRequest**](../Model/AgenticRetrievePaymentCredentialsRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticRetrievePaymentCredentialsResponse200**](../Model/AgenticRetrievePaymentCredentialsResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

