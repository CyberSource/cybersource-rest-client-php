# CyberSource\ReversalApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authReversal**](ReversalApi.md#authReversal) | **POST** /pts/v2/payments/{id}/reversals | Process an Authorization Reversal


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
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

