# CyberSource\AuthenticationExemptionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationExemptions**](AuthenticationExemptionsApi.md#authenticationExemptions) | **POST** /risk/v1/authentication-exemptions | Authentication exemptions service


# **authenticationExemptions**
> \CyberSource\Model\RiskV1AuthenticationExemptionsPost201Response authenticationExemptions($authenticationExemptionsRequest)

Authentication exemptions service

A new CYBS branded service to connect to VISA’s REST API to enable Visa Transaction Advisor (VTA) as a standalone service for merchants to support PSD2/SCA adoption and exemptions processing startegy in Europe.VTA Provides intelligent risk data to merchants as inputs to their in-house fraud management tools for fraud mitigation on Visa transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AuthenticationExemptionsApi();
$authenticationExemptionsRequest = new \CyberSource\Model\AuthenticationExemptionsRequest(); // \CyberSource\Model\AuthenticationExemptionsRequest | 

try {
    $result = $api_instance->authenticationExemptions($authenticationExemptionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationExemptionsApi->authenticationExemptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authenticationExemptionsRequest** | [**\CyberSource\Model\AuthenticationExemptionsRequest**](../Model/AuthenticationExemptionsRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1AuthenticationExemptionsPost201Response**](../Model/RiskV1AuthenticationExemptionsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

