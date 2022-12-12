# CyberSource\KeymanagementscmpApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateSCMP**](KeymanagementscmpApi.md#updateSCMP) | **PATCH** /kms/v2/keys-scmp/{keyId} | Update or Deactivate


# **updateSCMP**
> object updateSCMP($keyId, $updatePGPKeysRequest)

Update or Deactivate

Update or Deactivate scmp api Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\KeymanagementscmpApi();
$keyId = "keyId_example"; // string | Key ID.
$updatePGPKeysRequest = new \CyberSource\Model\UpdatePGPKeysRequest1(); // \CyberSource\Model\UpdatePGPKeysRequest1 | 

try {
    $result = $api_instance->updateSCMP($keyId, $updatePGPKeysRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeymanagementscmpApi->updateSCMP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyId** | **string**| Key ID. |
 **updatePGPKeysRequest** | [**\CyberSource\Model\UpdatePGPKeysRequest1**](../Model/UpdatePGPKeysRequest1.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

