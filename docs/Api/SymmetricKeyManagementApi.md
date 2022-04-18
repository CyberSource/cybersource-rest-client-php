# CyberSource\SymmetricKeyManagementApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createV2SharedSecretKeys**](SymmetricKeyManagementApi.md#createV2SharedSecretKeys) | **POST** /kms/v2/keys-sym | Create Shared-Secret Keys
[**createV2SharedSecretKeysVerifi**](SymmetricKeyManagementApi.md#createV2SharedSecretKeysVerifi) | **POST** /kms/v2/keys-sym/verifi | Create Shared-Secret Keys as per verifi spec
[**deleteBulkSymmetricKeys**](SymmetricKeyManagementApi.md#deleteBulkSymmetricKeys) | **POST** /kms/v2/keys-sym/deletes | Delete one or more Symmetric keys
[**getKeyDetails**](SymmetricKeyManagementApi.md#getKeyDetails) | **GET** /kms/v2/keys-sym/{keyId} | Retrieves shared secret key details


# **createV2SharedSecretKeys**
> \CyberSource\Model\KmsV2KeysSymPost201Response createV2SharedSecretKeys($createSharedSecretKeysRequest)

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

[**\CyberSource\Model\KmsV2KeysSymPost201Response**](../Model/KmsV2KeysSymPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createV2SharedSecretKeysVerifi**
> \CyberSource\Model\KmsV2KeysSymPost201Response createV2SharedSecretKeysVerifi($vIcDomain, $createSharedSecretKeysVerifiRequest)

Create Shared-Secret Keys as per verifi spec

Create one or more Shared-Secret Keys as per Verifi spec with 32 chars, store digest algo during key generation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SymmetricKeyManagementApi();
$vIcDomain = "vIcDomain_example"; // string | domain
$createSharedSecretKeysVerifiRequest = new \CyberSource\Model\CreateSharedSecretKeysVerifiRequest(); // \CyberSource\Model\CreateSharedSecretKeysVerifiRequest | 

try {
    $result = $api_instance->createV2SharedSecretKeysVerifi($vIcDomain, $createSharedSecretKeysVerifiRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymmetricKeyManagementApi->createV2SharedSecretKeysVerifi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vIcDomain** | **string**| domain |
 **createSharedSecretKeysVerifiRequest** | [**\CyberSource\Model\CreateSharedSecretKeysVerifiRequest**](../Model/CreateSharedSecretKeysVerifiRequest.md)|  |

### Return type

[**\CyberSource\Model\KmsV2KeysSymPost201Response**](../Model/KmsV2KeysSymPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBulkSymmetricKeys**
> \CyberSource\Model\KmsV2KeysSymDeletesPost200Response deleteBulkSymmetricKeys($deleteBulkSymmetricKeysRequest)

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

[**\CyberSource\Model\KmsV2KeysSymDeletesPost200Response**](../Model/KmsV2KeysSymDeletesPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeyDetails**
> \CyberSource\Model\KmsV2KeysSymGet200Response getKeyDetails($keyId)

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

[**\CyberSource\Model\KmsV2KeysSymGet200Response**](../Model/KmsV2KeysSymGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

