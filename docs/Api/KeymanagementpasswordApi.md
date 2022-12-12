# CyberSource\KeymanagementpasswordApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updatePassword**](KeymanagementpasswordApi.md#updatePassword) | **PATCH** /kms/v2/keys-password/{keyId} | Activate or De-activate Password


# **updatePassword**
> object updatePassword($keyId, $updatePasswordKeysRequest)

Activate or De-activate Password

Activate or De-activate key of type password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\KeymanagementpasswordApi();
$keyId = "keyId_example"; // string | Key ID.
$updatePasswordKeysRequest = new \CyberSource\Model\UpdatePasswordKeysRequest(); // \CyberSource\Model\UpdatePasswordKeysRequest | 

try {
    $result = $api_instance->updatePassword($keyId, $updatePasswordKeysRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeymanagementpasswordApi->updatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyId** | **string**| Key ID. |
 **updatePasswordKeysRequest** | [**\CyberSource\Model\UpdatePasswordKeysRequest**](../Model/UpdatePasswordKeysRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

