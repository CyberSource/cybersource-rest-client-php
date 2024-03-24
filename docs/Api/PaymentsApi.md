# CyberSource\PaymentsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderRequest**](PaymentsApi.md#createOrderRequest) | **POST** /pts/v2/payment-references/{id}/intents | Create a Payment Order Request
[**createPayment**](PaymentsApi.md#createPayment) | **POST** /pts/v2/payments | Process a Payment
[**createSessionRequest**](PaymentsApi.md#createSessionRequest) | **POST** /pts/v2/payment-references | Create Alternative Payments Sessions Request
[**incrementAuth**](PaymentsApi.md#incrementAuth) | **PATCH** /pts/v2/payments/{id} | Increment an Authorization
[**refreshPaymentStatus**](PaymentsApi.md#refreshPaymentStatus) | **POST** /pts/v2/refresh-payment-status/{id} | Check a Payment Status
[**updateSessionReq**](PaymentsApi.md#updateSessionReq) | **PATCH** /pts/v2/payment-references/{id} | Update Alternative Payments Sessions Request


# **createOrderRequest**
> \CyberSource\Model\PtsV2PaymentsOrderPost201Response createOrderRequest($orderPaymentRequest, $id)

Create a Payment Order Request

Create a Payment Order Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentsApi();
$orderPaymentRequest = new \CyberSource\Model\OrderPaymentRequest(); // \CyberSource\Model\OrderPaymentRequest | 
$id = "id_example"; // string | Request identifier number for the order request.

try {
    $result = $api_instance->createOrderRequest($orderPaymentRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createOrderRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderPaymentRequest** | [**\CyberSource\Model\OrderPaymentRequest**](../Model/OrderPaymentRequest.md)|  |
 **id** | **string**| Request identifier number for the order request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsOrderPost201Response**](../Model/PtsV2PaymentsOrderPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayment**
> \CyberSource\Model\PtsV2PaymentsPost201Response createPayment($createPaymentRequest)

Process a Payment

A payment authorizes the amount for the transaction. There are a number of supported payment features, such as E-commerce and Card Present - Credit Card/Debit Card, Echeck, e-Wallets, Level II/III Data, etc..  A payment response includes the status of the request. It also includes processor-specific information when the request is successful and errors if unsuccessful. See the [Payments Developer Guides Page](https://developer.cybersource.com/docs/cybs/en-us/payments/developer/ctv/rest/payments/payments-intro.html).  Authorization can be requested with Capture, Decision Manager, Payer Authentication(3ds), and Token Creation.

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

# **createSessionRequest**
> \CyberSource\Model\PtsV2PaymentsPost201Response2 createSessionRequest($createSessionReq)

Create Alternative Payments Sessions Request

Create Alternative Payments Sessions Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentsApi();
$createSessionReq = new \CyberSource\Model\CreateSessionReq(); // \CyberSource\Model\CreateSessionReq | 

try {
    $result = $api_instance->createSessionRequest($createSessionReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createSessionRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSessionReq** | [**\CyberSource\Model\CreateSessionReq**](../Model/CreateSessionReq.md)|  |

### Return type

[**\CyberSource\Model\PtsV2PaymentsPost201Response2**](../Model/PtsV2PaymentsPost201Response2.md)

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

# **refreshPaymentStatus**
> \CyberSource\Model\PtsV2PaymentsPost201Response1 refreshPaymentStatus($id, $refreshPaymentStatusRequest)

Check a Payment Status

Checks and updates the payment status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentsApi();
$id = "id_example"; // string | The payment id whose status needs to be checked and updated.
$refreshPaymentStatusRequest = new \CyberSource\Model\RefreshPaymentStatusRequest(); // \CyberSource\Model\RefreshPaymentStatusRequest | 

try {
    $result = $api_instance->refreshPaymentStatus($id, $refreshPaymentStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->refreshPaymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The payment id whose status needs to be checked and updated. |
 **refreshPaymentStatusRequest** | [**\CyberSource\Model\RefreshPaymentStatusRequest**](../Model/RefreshPaymentStatusRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2PaymentsPost201Response1**](../Model/PtsV2PaymentsPost201Response1.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSessionReq**
> \CyberSource\Model\PtsV2PaymentsPost201Response2 updateSessionReq($createSessionRequest, $id)

Update Alternative Payments Sessions Request

Update Alternative Payments Sessions Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PaymentsApi();
$createSessionRequest = new \CyberSource\Model\CreateSessionRequest(); // \CyberSource\Model\CreateSessionRequest | 
$id = "id_example"; // string | The payment ID. This ID is returned from a previous payment request.

try {
    $result = $api_instance->updateSessionReq($createSessionRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->updateSessionReq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSessionRequest** | [**\CyberSource\Model\CreateSessionRequest**](../Model/CreateSessionRequest.md)|  |
 **id** | **string**| The payment ID. This ID is returned from a previous payment request. |

### Return type

[**\CyberSource\Model\PtsV2PaymentsPost201Response2**](../Model/PtsV2PaymentsPost201Response2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

