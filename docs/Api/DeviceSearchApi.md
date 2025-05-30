# CyberSource\DeviceSearchApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postSearchQueryV3**](DeviceSearchApi.md#postSearchQueryV3) | **POST** /dms/v3/devices/search | Retrieve List of Devices for a given search query V3


# **postSearchQueryV3**
> \CyberSource\Model\InlineResponse2006 postSearchQueryV3($postDeviceSearchRequestV3)

Retrieve List of Devices for a given search query V3

Search for devices matching a given search query.  The search query supports serialNumber, readerId, terminalId, status, statusChangeReason or organizationId  Matching results are paginated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DeviceSearchApi();
$postDeviceSearchRequestV3 = new \CyberSource\Model\PostDeviceSearchRequestV3(); // \CyberSource\Model\PostDeviceSearchRequestV3 | 

try {
    $result = $api_instance->postSearchQueryV3($postDeviceSearchRequestV3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceSearchApi->postSearchQueryV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postDeviceSearchRequestV3** | [**\CyberSource\Model\PostDeviceSearchRequestV3**](../Model/PostDeviceSearchRequestV3.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

