# CyberSource\AsymmetricKeyManagementApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createP12Keys**](AsymmetricKeyManagementApi.md#createP12Keys) | **POST** /kms/v2/keys-asym | Create one or more PKCS#12 keys
[**deleteBulkP12Keys**](AsymmetricKeyManagementApi.md#deleteBulkP12Keys) | **POST** /kms/v2/keys-asym/deletes | Delete one or more PKCS#12 keys
[**getP12KeyDetails**](AsymmetricKeyManagementApi.md#getP12KeyDetails) | **GET** /kms/v2/keys-asym/{keyId} | Retrieves PKCS#12 key details


# **createP12Keys**
> \CyberSource\Model\InlineResponse2011 createP12Keys($createP12KeysRequest)

Create one or more PKCS#12 keys

'Create one or more PKCS#12 keys'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AsymmetricKeyManagementApi();
$createP12KeysRequest = new \CyberSource\Model\CreateP12KeysRequest(); // \CyberSource\Model\CreateP12KeysRequest | 

try {
    $result = $api_instance->createP12Keys($createP12KeysRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsymmetricKeyManagementApi->createP12Keys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createP12KeysRequest** | [**\CyberSource\Model\CreateP12KeysRequest**](../Model/CreateP12KeysRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBulkP12Keys**
> \CyberSource\Model\InlineResponse2003 deleteBulkP12Keys($deleteBulkP12KeysRequest)

Delete one or more PKCS#12 keys

'Delete one or more PKCS#12 keys'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AsymmetricKeyManagementApi();
$deleteBulkP12KeysRequest = new \CyberSource\Model\DeleteBulkP12KeysRequest(); // \CyberSource\Model\DeleteBulkP12KeysRequest | 

try {
    $result = $api_instance->deleteBulkP12Keys($deleteBulkP12KeysRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsymmetricKeyManagementApi->deleteBulkP12Keys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteBulkP12KeysRequest** | [**\CyberSource\Model\DeleteBulkP12KeysRequest**](../Model/DeleteBulkP12KeysRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getP12KeyDetails**
> \CyberSource\Model\InlineResponse2002 getP12KeyDetails($keyId)

Retrieves PKCS#12 key details

Retrieves keys details by providing the key id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AsymmetricKeyManagementApi();
$keyId = "keyId_example"; // string | Key ID.

try {
    $result = $api_instance->getP12KeyDetails($keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsymmetricKeyManagementApi->getP12KeyDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyId** | **string**| Key ID. |

### Return type

[**\CyberSource\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

