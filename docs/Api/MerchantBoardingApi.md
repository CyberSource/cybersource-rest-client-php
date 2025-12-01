# CyberSource\MerchantBoardingApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRegistration**](MerchantBoardingApi.md#getRegistration) | **GET** /boarding/v1/registrations/{registrationId} | Gets all the information on a boarding registration
[**postRegistration**](MerchantBoardingApi.md#postRegistration) | **POST** /boarding/v1/registrations | Create a boarding registration


# **getRegistration**
> \CyberSource\Model\InlineResponse2004 getRegistration($registrationId)

Gets all the information on a boarding registration

This end point will get all information of a boarding registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantBoardingApi();
$registrationId = "registrationId_example"; // string | Identifies the boarding registration to be updated

try {
    $result = $api_instance->getRegistration($registrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantBoardingApi->getRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrationId** | **string**| Identifies the boarding registration to be updated |

### Return type

[**\CyberSource\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistration**
> \CyberSource\Model\InlineResponse2013 postRegistration($postRegistrationBody, $vCIdempotencyId)

Create a boarding registration

Boarding Product is specifically for resellers who onboard merchants to resell their services to merchants and help integrate REST API into their systems.  The Boarding API is designed to simplify and streamline the onboarding process of merchants by enabling administrators and developers to: 1. Enable and Configure Products: The API helps in adding new products to an existing organization and configuring them to suit specific needs. 2. Update Merchant Information: The API allows for updating an organization's information efficiently. 3. Manage Payment Integration: It provides templates for secure payment integration and management.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantBoardingApi();
$postRegistrationBody = new \CyberSource\Model\PostRegistrationBody(); // \CyberSource\Model\PostRegistrationBody | Boarding registration data
$vCIdempotencyId = "vCIdempotencyId_example"; // string | defines idempotency of the request

try {
    $result = $api_instance->postRegistration($postRegistrationBody, $vCIdempotencyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantBoardingApi->postRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postRegistrationBody** | [**\CyberSource\Model\PostRegistrationBody**](../Model/PostRegistrationBody.md)| Boarding registration data |
 **vCIdempotencyId** | **string**| defines idempotency of the request | [optional]

### Return type

[**\CyberSource\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

