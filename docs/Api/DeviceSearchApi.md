# CyberSource\DeviceSearchApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postSearchQuery**](DeviceSearchApi.md#postSearchQuery) | **POST** /dms/v2/devices/search | Retrieve List of Devices for a given search query V2
[**postSearchQueryV3**](DeviceSearchApi.md#postSearchQueryV3) | **POST** /dms/v3/devices/search | Retrieve List of Devices for a given search query


# **postSearchQuery**
> \CyberSource\Model\InlineResponse2007 postSearchQuery($postDeviceSearchRequest)

Retrieve List of Devices for a given search query V2

Retrieves list of terminals in paginated format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DeviceSearchApi();
$postDeviceSearchRequest = new \CyberSource\Model\PostDeviceSearchRequest(); // \CyberSource\Model\PostDeviceSearchRequest | 

try {
    $result = $api_instance->postSearchQuery($postDeviceSearchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceSearchApi->postSearchQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postDeviceSearchRequest** | [**\CyberSource\Model\PostDeviceSearchRequest**](../Model/PostDeviceSearchRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSearchQueryV3**
> \CyberSource\Model\InlineResponse2009 postSearchQueryV3($postDeviceSearchRequestV3)

Retrieve List of Devices for a given search query

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

[**\CyberSource\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

