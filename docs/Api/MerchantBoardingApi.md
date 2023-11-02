# CyberSource\MerchantBoardingApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRegistration**](MerchantBoardingApi.md#getRegistration) | **GET** /boarding/v1/registrations/{registrationId} | Gets all the information on a boarding registration
[**postRegistration**](MerchantBoardingApi.md#postRegistration) | **POST** /boarding/v1/registrations | Create a boarding registration


# **getRegistration**
> \CyberSource\Model\InlineResponse2002 getRegistration($registrationId)

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

[**\CyberSource\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistration**
> \CyberSource\Model\InlineResponse2011 postRegistration($postRegistrationBody, $vCIdempotencyId)

Create a boarding registration

Create a registration to board merchant  If you have  Card Processing product enabled in your boarding request, select payment processor from Configuration -> Sample Request. You may unselect attributes from the Request Builder tree which you do not need in the request. For VPC, CUP and EFTPOS processors, replace the processor name from VPC or CUP or EFTPOS to the actual processor name in the sample request. e.g. replace VPC with &lt;your vpc processor&gt;

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

[**\CyberSource\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

