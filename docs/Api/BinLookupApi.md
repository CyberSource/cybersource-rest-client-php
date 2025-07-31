# CyberSource\BinLookupApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountInfo**](BinLookupApi.md#getAccountInfo) | **POST** /bin/v1/binlookup | BIN Lookup API


# **getAccountInfo**
> \CyberSource\Model\InlineResponse2012 getAccountInfo($createBinLookupRequest)

BIN Lookup API

The BIN Lookup Service is a versatile business tool that provides card network agnostic solution designed to ensure frictionless transaction experience by utilizing up-to-date Bank Identification Number (BIN) attributes sourced from multiple global and regional data sources. This service helps to improve authorization rates by helping to route transactions to the best-suited card network, minimizes fraud through card detail verification and aids in regulatory compliance by identifying card properties. The service is flexible and provides businesses with a flexible choice of inputs such as primary account number (PAN), network token from major networks (such as Visa, American Express, Discover and several regional networks) which includes device PAN (DPAN), and all types of tokens generated via CyberSource Token Management Service (TMS). Currently, the range of available credentials is contingent on the networks enabled for the business entity. Therefore, the network information specified in this documentation is illustrative and subject to personalized offerings for each reseller or merchant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BinLookupApi();
$createBinLookupRequest = new \CyberSource\Model\CreateBinLookupRequest(); // \CyberSource\Model\CreateBinLookupRequest | 

try {
    $result = $api_instance->getAccountInfo($createBinLookupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinLookupApi->getAccountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createBinLookupRequest** | [**\CyberSource\Model\CreateBinLookupRequest**](../Model/CreateBinLookupRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

