# CyberSource\SymmetricKeyManagementApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createV2SharedSecretKeys**](SymmetricKeyManagementApi.md#createV2SharedSecretKeys) | **POST** /kms/v2/keys-sym | Create Shared-Secret Keys
[**deleteBulkSymmetricKeys**](SymmetricKeyManagementApi.md#deleteBulkSymmetricKeys) | **POST** /kms/v2/keys-sym/deletes | Delete one or more Symmetric keys
[**getKeyDetails**](SymmetricKeyManagementApi.md#getKeyDetails) | **GET** /kms/v2/keys-sym/{keyId} | Retrieves shared secret key details


# **createV2SharedSecretKeys**
> \CyberSource\Model\InlineResponse201 createV2SharedSecretKeys($createSharedSecretKeysRequest)

Create Shared-Secret Keys

Create one or more Shared-Secret Keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SymmetricKeyManagementApi();
$createSharedSecretKeysRequest = new \CyberSource\Model\CreateSharedSecretKeysRequest(); // \CyberSource\Model\CreateSharedSecretKeysRequest | 

try {
    $result = $api_instance->createV2SharedSecretKeys($createSharedSecretKeysRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymmetricKeyManagementApi->createV2SharedSecretKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSharedSecretKeysRequest** | [**\CyberSource\Model\CreateSharedSecretKeysRequest**](../Model/CreateSharedSecretKeysRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBulkSymmetricKeys**
> \CyberSource\Model\InlineResponse2001 deleteBulkSymmetricKeys($deleteBulkSymmetricKeysRequest)

Delete one or more Symmetric keys

'Delete one or more Symmetric keys'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SymmetricKeyManagementApi();
$deleteBulkSymmetricKeysRequest = new \CyberSource\Model\DeleteBulkSymmetricKeysRequest(); // \CyberSource\Model\DeleteBulkSymmetricKeysRequest | 

try {
    $result = $api_instance->deleteBulkSymmetricKeys($deleteBulkSymmetricKeysRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymmetricKeyManagementApi->deleteBulkSymmetricKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteBulkSymmetricKeysRequest** | [**\CyberSource\Model\DeleteBulkSymmetricKeysRequest**](../Model/DeleteBulkSymmetricKeysRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeyDetails**
> \CyberSource\Model\InlineResponse200 getKeyDetails($keyId)

Retrieves shared secret key details

Retrieves keys details by providing the key id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SymmetricKeyManagementApi();
$keyId = "keyId_example"; // string | Key ID.

try {
    $result = $api_instance->getKeyDetails($keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymmetricKeyManagementApi->getKeyDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyId** | **string**| Key ID. |

### Return type

[**\CyberSource\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

