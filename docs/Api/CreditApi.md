# CyberSource\CreditApi

All URIs are relative to *https://api.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCredit**](CreditApi.md#createCredit) | **POST** /v2/credits/ | Process a Credit
[**getCredit**](CreditApi.md#getCredit) | **GET** /v2/credits/{id} | Retrieve a Credit


# **createCredit**
> \CyberSource\Model\InlineResponse2014 createCredit($createCreditRequest)

Process a Credit

POST to the credit resource to credit funds to a specified credit card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CreditApi();
$createCreditRequest = new \CyberSource\Model\CreateCreditRequest(); // \CyberSource\Model\CreateCreditRequest | 

try {
    $result = $api_instance->createCredit($createCreditRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditApi->createCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createCreditRequest** | [**\CyberSource\Model\CreateCreditRequest**](../Model/CreateCreditRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCredit**
> \CyberSource\Model\InlineResponse2006 getCredit($id)

Retrieve a Credit

Include the credit ID in the GET request to return details of the credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CreditApi();
$id = "id_example"; // string | The credit ID returned from a previous stand-alone credit request.

try {
    $result = $api_instance->getCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditApi->getCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The credit ID returned from a previous stand-alone credit request. |

### Return type

[**\CyberSource\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

