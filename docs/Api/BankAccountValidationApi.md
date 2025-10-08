# CyberSource\BankAccountValidationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountValidationRequest**](BankAccountValidationApi.md#bankAccountValidationRequest) | **POST** /bavs/v1/account-validations | Visa Bank Account Validation Service


# **bankAccountValidationRequest**
> \CyberSource\Model\InlineResponse20013 bankAccountValidationRequest($accountValidationsRequest)

Visa Bank Account Validation Service

The Visa Bank Account Validation Service is a new standalone product designed to validate customer's routing and bank account number combination for ACH transactions. Merchant's can use this standalone product to validate their customer's account prior to processing an ACH transaction against the customer's account to comply with Nacha's account validation mandate for Web-debit transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BankAccountValidationApi();
$accountValidationsRequest = new \CyberSource\Model\AccountValidationsRequest(); // \CyberSource\Model\AccountValidationsRequest | 

try {
    $result = $api_instance->bankAccountValidationRequest($accountValidationsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountValidationApi->bankAccountValidationRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountValidationsRequest** | [**\CyberSource\Model\AccountValidationsRequest**](../Model/AccountValidationsRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

