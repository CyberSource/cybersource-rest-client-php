# CyberSource\CreditApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCredit**](CreditApi.md#createCredit) | **POST** /pts/v2/credits | Process a Credit


# **createCredit**
> \CyberSource\Model\PtsV2CreditsPost201Response createCredit($createCreditRequest)

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

[**\CyberSource\Model\PtsV2CreditsPost201Response**](../Model/PtsV2CreditsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

