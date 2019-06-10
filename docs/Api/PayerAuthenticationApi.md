# CyberSource\PayerAuthenticationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPayerAuthEnrollment**](PayerAuthenticationApi.md#checkPayerAuthEnrollment) | **POST** /risk/v1/authentications | Check payer auth enrollment
[**validateAuthenticationResults**](PayerAuthenticationApi.md#validateAuthenticationResults) | **POST** /risk/v1/authentication-results | Validate authentication results


# **checkPayerAuthEnrollment**
> \CyberSource\Model\RiskV1AuthenticationsPost201Response checkPayerAuthEnrollment($checkPayerAuthEnrollmentRequest)

Check payer auth enrollment

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
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateAuthenticationResults**
> \CyberSource\Model\RiskV1AuthenticationResultsPost201Response validateAuthenticationResults($request)

Validate authentication results

This call retrieves and validates the authentication results from issuer and allows the merchant to proceed with processing the payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PayerAuthenticationApi();
$request = new \CyberSource\Model\Request(); // \CyberSource\Model\Request | 

try {
    $result = $api_instance->validateAuthenticationResults($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayerAuthenticationApi->validateAuthenticationResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CyberSource\Model\Request**](../Model/Request.md)|  |

### Return type

[**\CyberSource\Model\RiskV1AuthenticationResultsPost201Response**](../Model/RiskV1AuthenticationResultsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

