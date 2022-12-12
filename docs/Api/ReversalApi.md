# CyberSource\ReversalApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authReversal**](ReversalApi.md#authReversal) | **POST** /pts/v2/payments/{id}/reversals | Process an Authorization Reversal
[**mitReversal**](ReversalApi.md#mitReversal) | **POST** /pts/v2/reversals | Timeout Reversal


# **authReversal**
> \CyberSource\Model\PtsV2PaymentsReversalsPost201Response authReversal($id, $authReversalRequest)

Process an Authorization Reversal

Include the payment ID in the POST request to reverse the payment amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReversalApi();
$id = "id_example"; // string | The payment ID returned from a previous payment request.
$authReversalRequest = new \CyberSource\Model\AuthReversalRequest(); // \CyberSource\Model\AuthReversalRequest | 

try {
    $result = $api_instance->authReversal($id, $authReversalRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReversalApi->authReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The payment ID returned from a previous payment request. |
 **authReversalRequest** | [**\CyberSource\Model\AuthReversalRequest**](../Model/AuthReversalRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2PaymentsReversalsPost201Response**](../Model/PtsV2PaymentsReversalsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mitReversal**
> \CyberSource\Model\PtsV2PaymentsReversalsPost201Response mitReversal($mitReversalRequest)

Timeout Reversal

This is to reverse a previous payment that merchant does not receive a reply(Mostly due to Timeout). To use this feature/API, make sure to pass unique value to field - clientReferenceInformation -> transactionId in [/pts/v2/payments](https://developer.cybersource.com/api-reference-assets/index.html#payments_payments) API call and use same transactionId in this API request payload to reverse the payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReversalApi();
$mitReversalRequest = new \CyberSource\Model\MitReversalRequest(); // \CyberSource\Model\MitReversalRequest | 

try {
    $result = $api_instance->mitReversal($mitReversalRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReversalApi->mitReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mitReversalRequest** | [**\CyberSource\Model\MitReversalRequest**](../Model/MitReversalRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2PaymentsReversalsPost201Response**](../Model/PtsV2PaymentsReversalsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

