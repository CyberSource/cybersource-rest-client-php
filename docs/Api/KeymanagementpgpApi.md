# CyberSource\KeymanagementpgpApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updatePGP**](KeymanagementpgpApi.md#updatePGP) | **PATCH** /kms/v2/keys-pgp/{keyId} | Activate or De-activate PGP Key


# **updatePGP**
> object updatePGP($keyId, $updatePGPKeysRequest)

Activate or De-activate PGP Key

Activate or De-activate PGP Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\KeymanagementpgpApi();
$keyId = "keyId_example"; // string | Key ID.
$updatePGPKeysRequest = new \CyberSource\Model\UpdatePGPKeysRequest(); // \CyberSource\Model\UpdatePGPKeysRequest | 

try {
    $result = $api_instance->updatePGP($keyId, $updatePGPKeysRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeymanagementpgpApi->updatePGP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyId** | **string**| Key ID. |
 **updatePGPKeysRequest** | [**\CyberSource\Model\UpdatePGPKeysRequest**](../Model/UpdatePGPKeysRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

