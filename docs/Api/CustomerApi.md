# CyberSource\CustomerApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomer**](CustomerApi.md#deleteCustomer) | **DELETE** /tms/v2/customers/{customerTokenId} | Delete a Customer
[**getCustomer**](CustomerApi.md#getCustomer) | **GET** /tms/v2/customers/{customerTokenId} | Retrieve a Customer
[**patchCustomer**](CustomerApi.md#patchCustomer) | **PATCH** /tms/v2/customers/{customerTokenId} | Update a Customer
[**postCustomer**](CustomerApi.md#postCustomer) | **POST** /tms/v2/customers | Create a Customer


# **deleteCustomer**
> deleteCustomer($customerTokenId, $profileId)

Delete a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $api_instance->deleteCustomer($customerTokenId, $profileId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \CyberSource\Model\TmsV2CustomersResponse getCustomer($customerTokenId, $profileId)

Retrieve a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->getCustomer($customerTokenId, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\TmsV2CustomersResponse**](../Model/TmsV2CustomersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCustomer**
> \CyberSource\Model\TmsV2CustomersResponse patchCustomer($customerTokenId, $patchCustomerRequest, $profileId, $ifMatch)

Update a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerApi();
$customerTokenId = "customerTokenId_example"; // string | The TokenId of a customer.
$patchCustomerRequest = new \CyberSource\Model\PatchCustomerRequest(); // \CyberSource\Model\PatchCustomerRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$ifMatch = "ifMatch_example"; // string | Contains an ETag value from a GET request to make the request conditional.

try {
    $result = $api_instance->patchCustomer($customerTokenId, $patchCustomerRequest, $profileId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->patchCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerTokenId** | **string**| The TokenId of a customer. |
 **patchCustomerRequest** | [**\CyberSource\Model\PatchCustomerRequest**](../Model/PatchCustomerRequest.md)|  |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]
 **ifMatch** | **string**| Contains an ETag value from a GET request to make the request conditional. | [optional]

### Return type

[**\CyberSource\Model\TmsV2CustomersResponse**](../Model/TmsV2CustomersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomer**
> \CyberSource\Model\TmsV2CustomersResponse postCustomer($postCustomerRequest, $profileId)

Create a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\CustomerApi();
$postCustomerRequest = new \CyberSource\Model\PostCustomerRequest(); // \CyberSource\Model\PostCustomerRequest | 
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->postCustomer($postCustomerRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->postCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postCustomerRequest** | [**\CyberSource\Model\PostCustomerRequest**](../Model/PostCustomerRequest.md)|  |
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\TmsV2CustomersResponse**](../Model/TmsV2CustomersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

