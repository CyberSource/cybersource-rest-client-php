# CyberSource\PayerAuthenticationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPayerAuthEnrollment**](PayerAuthenticationApi.md#checkPayerAuthEnrollment) | **POST** /risk/v1/authentications | Check Payer Auth Enrollment
[**payerAuthSetup**](PayerAuthenticationApi.md#payerAuthSetup) | **POST** /risk/v1/authentication-setups | Setup Payer Auth
[**validateAuthenticationResults**](PayerAuthenticationApi.md#validateAuthenticationResults) | **POST** /risk/v1/authentication-results | Validate Authentication Results


# **checkPayerAuthEnrollment**
> \CyberSource\Model\RiskV1AuthenticationsPost201Response checkPayerAuthEnrollment($checkPayerAuthEnrollmentRequest)

Check Payer Auth Enrollment

This call verifies that the card is enrolled in a card authentication program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PayerAuthenticationApi();
$checkPayerAuthEnrollmentRequest = new \CyberSource\Model\CheckPayerAuthEnrollmentRequest(); // \CyberSource\Model\CheckPayerAuthEnrollmentRequest | 

try {
    $result = $api_instance->checkPayerAuthEnrollment($checkPayerAuthEnrollmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayerAuthenticationApi->checkPayerAuthEnrollment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPayerAuthEnrollmentRequest** | [**\CyberSource\Model\CheckPayerAuthEnrollmentRequest**](../Model/CheckPayerAuthEnrollmentRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1AuthenticationsPost201Response**](../Model/RiskV1AuthenticationsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payerAuthSetup**
> \CyberSource\Model\RiskV1AuthenticationSetupsPost201Response payerAuthSetup($payerAuthSetupRequest)

Setup Payer Auth

A new service for Merchants to get reference_id for Digital Wallets to use in place of BIN number in Cardinal. Set up file while authenticating with Cardinal. This service should be called by Merchant when payment instrument chosen or changes. This service has to be called before enrollment check.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PayerAuthenticationApi();
$payerAuthSetupRequest = new \CyberSource\Model\PayerAuthSetupRequest(); // \CyberSource\Model\PayerAuthSetupRequest | 

try {
    $result = $api_instance->payerAuthSetup($payerAuthSetupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayerAuthenticationApi->payerAuthSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payerAuthSetupRequest** | [**\CyberSource\Model\PayerAuthSetupRequest**](../Model/PayerAuthSetupRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1AuthenticationSetupsPost201Response**](../Model/RiskV1AuthenticationSetupsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateAuthenticationResults**
> \CyberSource\Model\RiskV1AuthenticationResultsPost201Response validateAuthenticationResults($validateRequest)

Validate Authentication Results

This call retrieves and validates the authentication results from issuer and allows the merchant to proceed with processing the payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PayerAuthenticationApi();
$validateRequest = new \CyberSource\Model\ValidateRequest(); // \CyberSource\Model\ValidateRequest | 

try {
    $result = $api_instance->validateAuthenticationResults($validateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayerAuthenticationApi->validateAuthenticationResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validateRequest** | [**\CyberSource\Model\ValidateRequest**](../Model/ValidateRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1AuthenticationResultsPost201Response**](../Model/RiskV1AuthenticationResultsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

