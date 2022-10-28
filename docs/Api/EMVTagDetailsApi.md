# CyberSource\EMVTagDetailsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEmvTags**](EMVTagDetailsApi.md#getEmvTags) | **GET** /tss/v2/transactions/emvTagDetails | Retrieve the EMV Dictionary
[**parseEmvTags**](EMVTagDetailsApi.md#parseEmvTags) | **POST** /tss/v2/transactions/emvTagDetails | Parse an EMV String


# **getEmvTags**
> \CyberSource\Model\TssV2GetEmvTags200Response getEmvTags()

Retrieve the EMV Dictionary

Returns the entire EMV tag dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\EMVTagDetailsApi();

try {
    $result = $api_instance->getEmvTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EMVTagDetailsApi->getEmvTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CyberSource\Model\TssV2GetEmvTags200Response**](../Model/TssV2GetEmvTags200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseEmvTags**
> \CyberSource\Model\TssV2PostEmvTags200Response parseEmvTags($body)

Parse an EMV String

Pass an EMV Tag-Length-Value (TLV) string for parsing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\EMVTagDetailsApi();
$body = new \CyberSource\Model\Body(); // \CyberSource\Model\Body | 

try {
    $result = $api_instance->parseEmvTags($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EMVTagDetailsApi->parseEmvTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CyberSource\Model\Body**](../Model/Body.md)|  |

### Return type

[**\CyberSource\Model\TssV2PostEmvTags200Response**](../Model/TssV2PostEmvTags200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

