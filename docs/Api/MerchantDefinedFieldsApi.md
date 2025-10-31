# CyberSource\MerchantDefinedFieldsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMerchantDefinedFieldDefinition**](MerchantDefinedFieldsApi.md#createMerchantDefinedFieldDefinition) | **POST** /invoicing/v2/{referenceType}/merchantDefinedFields | Create merchant defined field for a given reference type
[**deleteMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#deleteMerchantDefinedFieldsDefinitions) | **DELETE** /invoicing/v2/{referenceType}/merchantDefinedFields/{id} | Delete a MerchantDefinedField by ID
[**getMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#getMerchantDefinedFieldsDefinitions) | **GET** /invoicing/v2/{referenceType}/merchantDefinedFields | Get all merchant defined fields for a given reference type
[**putMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#putMerchantDefinedFieldsDefinitions) | **PUT** /invoicing/v2/{referenceType}/merchantDefinedFields/{id} | Update a MerchantDefinedField by ID


# **createMerchantDefinedFieldDefinition**
> \CyberSource\Model\InlineResponse2002[] createMerchantDefinedFieldDefinition($referenceType, $merchantDefinedFieldDefinitionRequest)

Create merchant defined field for a given reference type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | The reference type for which merchant defined fields are to be fetched. Available values are Invoice, Purchase, Donation
$merchantDefinedFieldDefinitionRequest = new \CyberSource\Model\MerchantDefinedFieldDefinitionRequest(); // \CyberSource\Model\MerchantDefinedFieldDefinitionRequest | 

try {
    $result = $api_instance->createMerchantDefinedFieldDefinition($referenceType, $merchantDefinedFieldDefinitionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->createMerchantDefinedFieldDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceType** | **string**| The reference type for which merchant defined fields are to be fetched. Available values are Invoice, Purchase, Donation |
 **merchantDefinedFieldDefinitionRequest** | [**\CyberSource\Model\MerchantDefinedFieldDefinitionRequest**](../Model/MerchantDefinedFieldDefinitionRequest.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMerchantDefinedFieldsDefinitions**
> deleteMerchantDefinedFieldsDefinitions($referenceType, $id)

Delete a MerchantDefinedField by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | 
$id = 789; // int | 

try {
    $api_instance->deleteMerchantDefinedFieldsDefinitions($referenceType, $id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->deleteMerchantDefinedFieldsDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceType** | **string**|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantDefinedFieldsDefinitions**
> \CyberSource\Model\InlineResponse2002[] getMerchantDefinedFieldsDefinitions($referenceType)

Get all merchant defined fields for a given reference type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | The reference type for which merchant defined fields are to be fetched. Available values are Invoice, Purchase, Donation

try {
    $result = $api_instance->getMerchantDefinedFieldsDefinitions($referenceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->getMerchantDefinedFieldsDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceType** | **string**| The reference type for which merchant defined fields are to be fetched. Available values are Invoice, Purchase, Donation |

### Return type

[**\CyberSource\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMerchantDefinedFieldsDefinitions**
> \CyberSource\Model\InlineResponse2002[] putMerchantDefinedFieldsDefinitions($referenceType, $id, $merchantDefinedFieldCore)

Update a MerchantDefinedField by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | 
$id = 789; // int | 
$merchantDefinedFieldCore = new \CyberSource\Model\MerchantDefinedFieldCore(); // \CyberSource\Model\MerchantDefinedFieldCore | 

try {
    $result = $api_instance->putMerchantDefinedFieldsDefinitions($referenceType, $id, $merchantDefinedFieldCore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->putMerchantDefinedFieldsDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceType** | **string**|  |
 **id** | **int**|  |
 **merchantDefinedFieldCore** | [**\CyberSource\Model\MerchantDefinedFieldCore**](../Model/MerchantDefinedFieldCore.md)|  |

### Return type

[**\CyberSource\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

