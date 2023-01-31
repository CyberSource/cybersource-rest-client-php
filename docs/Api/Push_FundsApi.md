# CyberSource\Push_FundsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPushFundsTransfer**](Push_FundsApi.md#createPushFundsTransfer) | **POST** /pts/v1/push-funds-transfer | Process a Push Funds Transfer


# **createPushFundsTransfer**
> \CyberSource\Model\PushFunds201Response createPushFundsTransfer($pushFundsRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)

Process a Push Funds Transfer

Receive funds using an Original Credit Transaction (OCT).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\Push_FundsApi();
$pushFundsRequest = new \CyberSource\Model\PushFundsRequest(); // \CyberSource\Model\PushFundsRequest | 
$contentType = "contentType_example"; // string | 
$xRequestid = "xRequestid_example"; // string | 
$vCMerchantId = "vCMerchantId_example"; // string | 
$vCPermissions = "vCPermissions_example"; // string | 
$vCCorrelationId = "vCCorrelationId_example"; // string | 
$vCOrganizationId = "vCOrganizationId_example"; // string | 

try {
    $result = $api_instance->createPushFundsTransfer($pushFundsRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Push_FundsApi->createPushFundsTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pushFundsRequest** | [**\CyberSource\Model\PushFundsRequest**](../Model/PushFundsRequest.md)|  |
 **contentType** | **string**|  |
 **xRequestid** | **string**|  |
 **vCMerchantId** | **string**|  |
 **vCPermissions** | **string**|  |
 **vCCorrelationId** | **string**|  |
 **vCOrganizationId** | **string**|  |

### Return type

[**\CyberSource\Model\PushFunds201Response**](../Model/PushFunds201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

