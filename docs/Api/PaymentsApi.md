# CyberSource\PaymentsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayment**](PaymentsApi.md#createPayment) | **POST** /pts/v2/payments | Process a Payment
[**incrementAuth**](PaymentsApi.md#incrementAuth) | **PATCH** /pts/v2/payments/{id} | Increment an Authorization


# **createPayment**
> \CyberSource\Model\PtsV2PaymentsPost201Response createPayment($createPaymentRequest)

Process a Payment

A payment authorizes the amount for the transaction. There are a number of supported payment feature, such as E-commerce and Card Present - Credit Card/Debit Card, Echeck, e-Wallets, Level II/III Data, etc..  A payment response includes the status of the request. It also includes processor-specific information when the request is successful and errors if unsuccessful. See the [Payments Developer Guides Page](https://developer.cybersource.com/api/developer-guides/dita-payments/GettingStarted.html).  Authorization can be requested with Capture, Decision Manager, Payer Authentication(3ds), and Token Creation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentsApi();
$createPaymentRequest = new \CyberSource\Model\CreatePaymentRequest(); // \CyberSource\Model\CreatePaymentRequest | 

try {
    $result = $api_instance->createPayment($createPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createPaymentRequest** | [**\CyberSource\Model\CreatePaymentRequest**](../Model/CreatePaymentRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2PaymentsPost201Response**](../Model/PtsV2PaymentsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incrementAuth**
> \CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response incrementAuth($id, $incrementAuthRequest)

Increment an Authorization

Use this service to authorize additional charges in a lodging or autorental transaction. Include the ID returned from the original authorization in the PATCH request to add additional charges to that authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentsApi();
$id = "id_example"; // string | The ID returned from the original authorization request.
$incrementAuthRequest = new \CyberSource\Model\IncrementAuthRequest(); // \CyberSource\Model\IncrementAuthRequest | 

try {
    $result = $api_instance->incrementAuth($id, $incrementAuthRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->incrementAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID returned from the original authorization request. |
 **incrementAuthRequest** | [**\CyberSource\Model\IncrementAuthRequest**](../Model/IncrementAuthRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2IncrementalAuthorizationPatch201Response**](../Model/PtsV2IncrementalAuthorizationPatch201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

