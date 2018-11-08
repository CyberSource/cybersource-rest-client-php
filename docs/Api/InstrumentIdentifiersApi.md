# CyberSource\InstrumentIdentifiersApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tmsV1InstrumentidentifiersPost**](InstrumentIdentifiersApi.md#tmsV1InstrumentidentifiersPost) | **POST** /tms/v1/instrumentidentifiers | Create an Instrument Identifier


# **tmsV1InstrumentidentifiersPost**
> \CyberSource\Model\TmsV1InstrumentidentifiersPost200Response tmsV1InstrumentidentifiersPost($profileId, $body)

Create an Instrument Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InstrumentIdentifiersApi();
$profileId = "profileId_example"; // string | The id of a profile containing user specific TMS configuration.
$body = new \CyberSource\Model\Body(); // \CyberSource\Model\Body | Please specify either a Card or Bank Account.

try {
    $result = $api_instance->tmsV1InstrumentidentifiersPost($profileId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstrumentIdentifiersApi->tmsV1InstrumentidentifiersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileId** | **string**| The id of a profile containing user specific TMS configuration. |
 **body** | [**\CyberSource\Model\Body**](../Model/Body.md)| Please specify either a Card or Bank Account. |

### Return type

[**\CyberSource\Model\TmsV1InstrumentidentifiersPost200Response**](../Model/TmsV1InstrumentidentifiersPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

