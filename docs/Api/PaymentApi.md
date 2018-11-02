# CyberSource\PaymentApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayment**](PaymentApi.md#createPayment) | **POST** /v2/payments/ | Process a Payment
[**getPayment**](PaymentApi.md#getPayment) | **GET** /v2/payments/{id} | Retrieve a Payment


# **createPayment**
> \CyberSource\Model\InlineResponse201 createPayment($createPaymentRequest)

Process a Payment

Authorize the payment for the transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentApi();
$createPaymentRequest = new \CyberSource\Model\CreatePaymentRequest(); // \CyberSource\Model\CreatePaymentRequest | 

try {
    $result = $api_instance->createPayment($createPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPaymentRequest** | [**\CyberSource\Model\CreatePaymentRequest**](../Model/CreatePaymentRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayment**
> \CyberSource\Model\InlineResponse2002 getPayment($id)

Retrieve a Payment

Include the payment ID in the GET request to retrieve the payment details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentApi();
$id = "id_example"; // string | The payment ID returned from a previous payment request.

try {
    $result = $api_instance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The payment ID returned from a previous payment request. |

### Return type

[**\CyberSource\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

