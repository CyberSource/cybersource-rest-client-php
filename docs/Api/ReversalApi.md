# CyberSource\ReversalApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authReversal**](ReversalApi.md#authReversal) | **POST** /v2/payments/{id}/reversals | Process an Authorization Reversal
[**getAuthReversal**](ReversalApi.md#getAuthReversal) | **GET** /v2/reversals/{id} | Retrieve an Authorization Reversal


# **authReversal**
> \CyberSource\Model\InlineResponse2011 authReversal($id, $authReversalRequest)

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

[**\CyberSource\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthReversal**
> \CyberSource\Model\InlineResponse2003 getAuthReversal($id)

Retrieve an Authorization Reversal

Include the authorization reversal ID in the GET request to retrieve the authorization reversal details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReversalApi();
$id = "id_example"; // string | The authorization reversal ID returned from a previous authorization reversal request.

try {
    $result = $api_instance->getAuthReversal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReversalApi->getAuthReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The authorization reversal ID returned from a previous authorization reversal request. |

### Return type

[**\CyberSource\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

