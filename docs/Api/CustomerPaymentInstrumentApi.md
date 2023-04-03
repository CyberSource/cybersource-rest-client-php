# CyberSource\CustomerPaymentInstrumentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomerPaymentInstrument**](CustomerPaymentInstrumentApi.md#deleteCustomerPaymentInstrument) | **DELETE** /tms/v2/customers/{customerId}/payment-instruments/{paymentInstrumentId} | Delete a Customer Payment Instrument
[**getCustomerPaymentInstrument**](CustomerPaymentInstrumentApi.md#getCustomerPaymentInstrument) | **GET** /tms/v2/customers/{customerId}/payment-instruments/{paymentInstrumentId} | Retrieve a Customer Payment Instrument
[**getCustomerPaymentInstrumentsList**](CustomerPaymentInstrumentApi.md#getCustomerPaymentInstrumentsList) | **GET** /tms/v2/customers/{customerId}/payment-instruments | List Payment Instruments for a Customer
[**patchCustomersPaymentInstrument**](CustomerPaymentInstrumentApi.md#patchCustomersPaymentInstrument) | **PATCH** /tms/v2/customers/{customerId}/payment-instruments/{paymentInstrumentId} | Update a Customer Payment Instrument
[**postCustomerPaymentInstrument**](CustomerPaymentInstrumentApi.md#postCustomerPaymentInstrument) | **POST** /tms/v2/customers/{customerId}/payment-instruments | Create a Customer Payment Instrument


# **deleteCustomerPaymentInstrument**
> deleteCustomerPaymentInstrument($customerId, $paymentInstrumentId, $profileId)

Delete a Customer Payment Instrument

|  |  |  | | --- | --- | --- | |**Customer Payment Instrument**<br>A Customer Payment Instrument represents tokenized customer payment information such as expiration date, billing address & card type.<br>A [Customer](#token-management_customer_create-a-customer) can have [one or more Payment Instruments](#token-management_customer-payment-instrument_retrieve-a-customer-payment-instrument), with one allocated as the Customers default for use in payments.<br>A Payment Instrument token does not store the card number. A Payment Instrument is associated with an [Instrument Identifier](#token-management_instrument-identifier_create-an-instrument-identifier) that represents either a payment card number, or in the case of an ACH bank account, the routing and account number.<br>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|**Deleting a Customers Payment Instrument**<br>Your system can use this API to delete an existing Payment Instrument for a Customer.<br>Any Instrument Identifiers representing the card number will also be deleted if they are not associated with any other Payment Instruments.<br>If a customer has more than one Payment Instrument then the default Payment Instrument cannot be deleted without first selecting a [new default Payment Instrument](#token-management_customer-payment-instrument_update-a-customer-payment-instrument_samplerequests-dropdown_make-customer-payment-instrument-the-default_liveconsole-tab-request-body).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerId = "customerId_example"; // string | The Id of a Customer.
$paymentInstrumentId = "paymentInstrumentId_example"; // string | The Id of a payment instrument.
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $api_instance->deleteCustomerPaymentInstrument($customerId, $paymentInstrumentId, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->deleteCustomerPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| The Id of a Customer. |
 **paymentInstrumentId** | **string**| The Id of a payment instrument. |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument getCustomerPaymentInstrument($customerId, $paymentInstrumentId, $profileId)

Retrieve a Customer Payment Instrument

|  |  |  | | --- | --- | --- | |**Customer Payment Instrument**<br>A Customer Payment Instrument represents tokenized customer payment information such as expiration date, billing address & card type.<br>A [Customer](#token-management_customer_create-a-customer) can have [one or more Payment Instruments](#token-management_customer-payment-instrument_retrieve-a-customer-payment-instrument), with one allocated as the Customers default for use in payments.<br>A Payment Instrument token does not store the card number. A Payment Instrument is associated with an [Instrument Identifier](#token-management_instrument-identifier_create-an-instrument-identifier) that represents either a payment card number, or in the case of an ACH bank account, the routing and account number.<br>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|**Retrieving a Customer Payment Instrument**<br>Your system can use this API to retrieve an existing Payment Instrument for a Customer.<br>To perform a payment with a particular Payment Instrument simply specify the [Payment Instrument Id in the payments request](#payments_payments_process-a-payment_samplerequests-dropdown_authorization-using-tokens_authorization-with-customer-payment-instrument-and-shipping-address-token-id_liveconsole-tab-request-body).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerId = "customerId_example"; // string | The Id of a Customer.
$paymentInstrumentId = "paymentInstrumentId_example"; // string | The Id of a payment instrument.
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getCustomerPaymentInstrument($customerId, $paymentInstrumentId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->getCustomerPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| The Id of a Customer. |
 **paymentInstrumentId** | **string**| The Id of a payment instrument. |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentInstrumentsList**
> \CyberSource\Model\PaymentInstrumentList getCustomerPaymentInstrumentsList($customerId, $profileId, $offset, $limit)

List Payment Instruments for a Customer

|  |  |  | | --- | --- | --- | |**Customer Payment Instrument**<br>A Customer Payment Instrument represents tokenized customer payment information such as expiration date, billing address & card type.<br>A [Customer](#token-management_customer_create-a-customer) can have [one or more Payment Instruments](#token-management_customer-payment-instrument_retrieve-a-customer-payment-instrument), with one allocated as the Customers default for use in payments.<br>A Payment Instrument token does not store the card number. A Payment Instrument is associated with an [Instrument Identifier](#token-management_instrument-identifier_create-an-instrument-identifier) that represents either a payment card number, or in the case of an ACH bank account, the routing and account number.<br>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|**Retrieving all Customer Payment Instruments**<br>Your system can use this API to retrieve all existing Payment Instruments for a Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerId = "customerId_example"; // string | The Id of a Customer.
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.
$offset = 0; // int | Starting record in zero-based dataset that should be returned as the first object in the array. Default is 0.
$limit = 20; // int | The maximum number that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100.

try {
    $result = $api_instance->getCustomerPaymentInstrumentsList($customerId, $profileId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->getCustomerPaymentInstrumentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| The Id of a Customer. |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]
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

# **patchCustomersPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument patchCustomersPaymentInstrument($customerId, $paymentInstrumentId, $patchCustomerPaymentInstrumentRequest, $profileId, $ifMatch)

Update a Customer Payment Instrument

|  |  |  | | --- | --- | --- | |**Customer Payment Instrument**<br>A Customer Payment Instrument represents tokenized customer payment information such as expiration date, billing address & card type.<br>A [Customer](#token-management_customer_create-a-customer) can have [one or more Payment Instruments](#token-management_customer-payment-instrument_retrieve-a-customer-payment-instrument), with one allocated as the Customers default for use in payments.<br>A Payment Instrument token does not store the card number. A Payment Instrument is associated with an [Instrument Identifier](#token-management_instrument-identifier_create-an-instrument-identifier) that represents either a payment card number, or in the case of an ACH bank account, the routing and account number.<br>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|**Updating a Customers Payment Instrument**<br>Your system can use this API to update an existing Payment Instrument for a Customer, including selecting a [default Payment Instrument](#token-management_customer-payment-instrument_update-a-customer-payment-instrument_samplerequests-dropdown_make-customer-payment-instrument-the-default_liveconsole-tab-request-body) for use in payments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerId = "customerId_example"; // string | The Id of a Customer.
$paymentInstrumentId = "paymentInstrumentId_example"; // string | The Id of a payment instrument.
$patchCustomerPaymentInstrumentRequest = new \CyberSource\Model\PatchCustomerPaymentInstrumentRequest(); // \CyberSource\Model\PatchCustomerPaymentInstrumentRequest | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.
$ifMatch = "ifMatch_example"; // string | Contains an ETag value from a GET request to make the request conditional.

try {
    $result = $api_instance->patchCustomersPaymentInstrument($customerId, $paymentInstrumentId, $patchCustomerPaymentInstrumentRequest, $profileId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->patchCustomersPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| The Id of a Customer. |
 **paymentInstrumentId** | **string**| The Id of a payment instrument. |
 **patchCustomerPaymentInstrumentRequest** | [**\CyberSource\Model\PatchCustomerPaymentInstrumentRequest**](../Model/PatchCustomerPaymentInstrumentRequest.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]
 **ifMatch** | **string**| Contains an ETag value from a GET request to make the request conditional. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerPaymentInstrument**
> \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument postCustomerPaymentInstrument($customerId, $postCustomerPaymentInstrumentRequest, $profileId)

Create a Customer Payment Instrument

|  |  |  | | --- | --- | --- | |**Customer Payment Instrument**<br>A Customer Payment Instrument represents tokenized customer payment information such as expiration date, billing address & card type.<br>A [Customer](#token-management_customer_create-a-customer) can have [one or more Payment Instruments](#token-management_customer-payment-instrument_retrieve-a-customer-payment-instrument), with one allocated as the Customers default for use in payments.<br>A Payment Instrument token does not store the card number. A Payment Instrument is associated with an [Instrument Identifier](#token-management_instrument-identifier_create-an-instrument-identifier) that represents either a payment card number, or in the case of an ACH bank account, the routing and account number.<br><br>**Creating a Customer Payment Instrument**<br>It is recommended you [create a Customer Payment Instrument via a Payment Authorization](#payments_payments_process-a-payment_samplerequests-dropdown_authorization-with-token-create_authorization-create-default-payment-instrument-shipping-address-for-existing-customer_liveconsole-tab-request-body), this can be for a zero amount.<br>In Europe: You should perform Payer Authentication alongside the Authorization.|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|**Payment Network Tokens**<br>Network tokens perform better than regular card numbers and they are not necessarily invalidated when a cardholder loses their card, or it expires.<br>A Payment Network Token will be automatically created and used in future payments if you are enabled for the service.<br>A Payment Network Token can also be [provisioned for an existing Instrument Identifier](#token-management_instrument-identifier_enroll-an-instrument-identifier-for-payment-network-token).<br>For more information about Payment Network Tokens see the Developer Guide.<br><br>**Payments with Customers Payment Instrument**<br>To perform a payment with a particular Payment Instrument or Shipping Address specify the [Payment Instrument in the payment request](#payments_payments_process-a-payment_samplerequests-dropdown_authorization-using-tokens_authorization-with-customer-payment-instrument-and-shipping-address-token-id_liveconsole-tab-request-body).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerPaymentInstrumentApi();
$customerId = "customerId_example"; // string | The Id of a Customer.
$postCustomerPaymentInstrumentRequest = new \CyberSource\Model\PostCustomerPaymentInstrumentRequest(); // \CyberSource\Model\PostCustomerPaymentInstrumentRequest | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postCustomerPaymentInstrument($customerId, $postCustomerPaymentInstrumentRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerPaymentInstrumentApi->postCustomerPaymentInstrument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| The Id of a Customer. |
 **postCustomerPaymentInstrumentRequest** | [**\CyberSource\Model\PostCustomerPaymentInstrumentRequest**](../Model/PostCustomerPaymentInstrumentRequest.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrument**](../Model/Tmsv2customersEmbeddedDefaultPaymentInstrument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

