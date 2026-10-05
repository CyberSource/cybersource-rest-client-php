# CyberSource\MerchantRegistrationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateMerchantKey**](MerchantRegistrationApi.md#activateMerchantKey) | **POST** /icc/v1/merchants/{merchantId}/keys/{keyId}/activate | Activate a merchant key
[**addMerchantKey**](MerchantRegistrationApi.md#addMerchantKey) | **POST** /icc/v1/merchants/{merchantId}/keys | Add a key to a merchant
[**getMerchant**](MerchantRegistrationApi.md#getMerchant) | **GET** /icc/v1/merchants/{merchantId} | Get a merchant
[**getMerchantKey**](MerchantRegistrationApi.md#getMerchantKey) | **GET** /icc/v1/merchants/{merchantId}/keys/{keyId} | Get a key by merchant and key ID
[**listMerchantKeys**](MerchantRegistrationApi.md#listMerchantKeys) | **GET** /icc/v1/merchants/{merchantId}/keys | List keys for a merchant
[**registerMerchant**](MerchantRegistrationApi.md#registerMerchant) | **POST** /icc/v1/merchants | Register a merchant
[**updateMerchant**](MerchantRegistrationApi.md#updateMerchant) | **PUT** /icc/v1/merchants/{merchantId} | Update a merchant
[**updateMerchantKey**](MerchantRegistrationApi.md#updateMerchantKey) | **PUT** /icc/v1/merchants/{merchantId}/keys/{keyId} | Update a merchant key


# **activateMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 activateMerchantKey($merchantId, $keyId)

Activate a merchant key

**Activate a Merchant Key**<br>Activates a deactivated encryption key for the specified merchant.<br><br> **Note:** Expired keys must be renewed via `PUT /merchants/{merchantId}/keys/{keyId}` before they can be activated.<br> Returns **403** if the merchant is deactivated or the key is expired, **404** if the merchant or key is not found, **409** if the key is already active.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyId = "keyId_example"; // string | Unique key identifier (UUID)

try {
    $result = $api_instance->activateMerchantKey($merchantId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->activateMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyId** | **string**| Unique key identifier (UUID) |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 addMerchantKey($merchantId, $keyRequest)

Add a key to a merchant

**Add a Key to a Merchant**<br>Adds a new encryption key for the specified merchant. The new key is created as ***active*** immediately.<br><br> **Note:** Adding a new key automatically deactivates all previously active keys for this merchant (single-active key invariant).<br> Returns **403** if the merchant is deactivated, **404** if the merchant is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyRequest = new \CyberSource\Model\KeyRequest1(); // \CyberSource\Model\KeyRequest1 | Key creation request

try {
    $result = $api_instance->addMerchantKey($merchantId, $keyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->addMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyRequest** | [**\CyberSource\Model\KeyRequest1**](../Model/KeyRequest1.md)| Key creation request |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchant**
> \CyberSource\Model\MerchantRegistrationResponse201 getMerchant($merchantId)

Get a merchant

**Get a Merchant**<br>Retrieves a single merchant by its unique identifier, including all associated encryption keys.<br><br> Returns **404** if the merchant is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)

try {
    $result = $api_instance->getMerchant($merchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->getMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |

### Return type

[**\CyberSource\Model\MerchantRegistrationResponse201**](../Model/MerchantRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 getMerchantKey($merchantId, $keyId)

Get a key by merchant and key ID

**Get a Merchant Key**<br>Retrieves a specific encryption key by merchant ID and key ID.<br><br> Returns **404** if the merchant or key is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyId = "keyId_example"; // string | Unique key identifier (UUID)

try {
    $result = $api_instance->getMerchantKey($merchantId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->getMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyId** | **string**| Unique key identifier (UUID) |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMerchantKeys**
> \CyberSource\Model\ListMerchantKeysResponse200 listMerchantKeys($merchantId, $status)

List keys for a merchant

**List Keys for a Merchant**<br>Returns all encryption keys associated with the specified merchant, with optional filtering by key status.<br><br> Returns **404** if the merchant is not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$status = "status_example"; // string | Filter by key status: 'active', 'deactivated', or 'expired'. Omit to return all keys.

try {
    $result = $api_instance->listMerchantKeys($merchantId, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->listMerchantKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **status** | **string**| Filter by key status: &#39;active&#39;, &#39;deactivated&#39;, or &#39;expired&#39;. Omit to return all keys. | [optional]

### Return type

[**\CyberSource\Model\ListMerchantKeysResponse200**](../Model/ListMerchantKeysResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerMerchant**
> \CyberSource\Model\MerchantRegistrationResponse201 registerMerchant($merchantRequest)

Register a merchant

**Register a Merchant**<br>Onboards a new merchant into the Visa Merchant Registry Service (VMRS). The merchant declares how payment credentials should be delivered: cryptogram type (TAVV or DAVV), transaction indicator (TAP — Trusted Agent Protocol, ACG — Agentic Checkout Gateway, or BOTH), and whether credentials should be encrypted.<br><br> If `paymentPayloadType` is set to ***ENCRYPTED***, an `encryptionKey` must be provided.<br> Returns **409** if a merchant with the same `merchantUrl` or `vmid` already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantRequest = new \CyberSource\Model\MerchantRequest(); // \CyberSource\Model\MerchantRequest | Merchant registration request

try {
    $result = $api_instance->registerMerchant($merchantRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->registerMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantRequest** | [**\CyberSource\Model\MerchantRequest**](../Model/MerchantRequest.md)| Merchant registration request |

### Return type

[**\CyberSource\Model\MerchantRegistrationResponse201**](../Model/MerchantRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchant**
> \CyberSource\Model\MerchantRegistrationResponse201 updateMerchant($merchantId, $merchantUpdate)

Update a merchant

**Update a Merchant**<br>Updates merchant configuration. The following fields can be modified: `merchantName`, `merchantUrl`, `cryptogramType`, `paymentPayloadType`, `acceptanceRelationships`, `protocolInteractions`, `webIntegrations`, and `apiIntegrations`.<br><br> Partial updates are supported — only provided fields are changed. The `vmid` and `indicator` fields cannot be updated via this endpoint.<br> Returns **400** if switching to ***ENCRYPTED*** without an active encryption key, **403** if the merchant is deactivated, **404** if not found, **409** if the new `merchantUrl` already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$merchantUpdate = new \CyberSource\Model\MerchantUpdate(); // \CyberSource\Model\MerchantUpdate | Merchant update request

try {
    $result = $api_instance->updateMerchant($merchantId, $merchantUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->updateMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **merchantUpdate** | [**\CyberSource\Model\MerchantUpdate**](../Model/MerchantUpdate.md)| Merchant update request |

### Return type

[**\CyberSource\Model\MerchantRegistrationResponse201**](../Model/MerchantRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 updateMerchantKey($merchantId, $keyId, $keyUpdate)

Update a merchant key

**Update a Merchant Key**<br>Updates encryption key information. The following fields can be modified: `keyName`, `encryptionKey`, `algorithm`, `encryptionType`, and `expirationDate`.<br><br> Returns **403** if the merchant is deactivated, key is deactivated, or key is expired, **404** if the merchant or key is not found, **409** if the new `keyName` already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantRegistrationApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyId = "keyId_example"; // string | Unique key identifier (UUID)
$keyUpdate = new \CyberSource\Model\KeyUpdate1(); // \CyberSource\Model\KeyUpdate1 | Key update request

try {
    $result = $api_instance->updateMerchantKey($merchantId, $keyId, $keyUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantRegistrationApi->updateMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyId** | **string**| Unique key identifier (UUID) |
 **keyUpdate** | [**\CyberSource\Model\KeyUpdate1**](../Model/KeyUpdate1.md)| Key update request |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

