# CyberSource\MerchantDefinedFieldsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMerchantDefinedFieldDefinition**](MerchantDefinedFieldsApi.md#createMerchantDefinedFieldDefinition) | **POST** /invoicing/v2/{referenceType}/merchantDefinedFields | Create merchant defined field for a given reference type
[**createPblMerchantDefinedFieldDefinition**](MerchantDefinedFieldsApi.md#createPblMerchantDefinedFieldDefinition) | **POST** /ipl/v2/{referenceType}/merchantDefinedFields | Create a PayByLink merchant defined field for a given reference type
[**deleteMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#deleteMerchantDefinedFieldsDefinitions) | **DELETE** /invoicing/v2/{referenceType}/merchantDefinedFields/{id} | Delete a MerchantDefinedField by ID
[**deletePblMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#deletePblMerchantDefinedFieldsDefinitions) | **DELETE** /ipl/v2/{referenceType}/merchantDefinedFields/{id} | Delete a PayByLink MerchantDefinedField by ID
[**getMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#getMerchantDefinedFieldsDefinitions) | **GET** /invoicing/v2/{referenceType}/merchantDefinedFields | Get all merchant defined fields for a given reference type
[**getPblMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#getPblMerchantDefinedFieldsDefinitions) | **GET** /ipl/v2/{referenceType}/merchantDefinedFields | Get all PayByLink merchant defined fields for a given reference type
[**putMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#putMerchantDefinedFieldsDefinitions) | **PUT** /invoicing/v2/{referenceType}/merchantDefinedFields/{id} | Update a MerchantDefinedField by ID
[**putPblMerchantDefinedFieldsDefinitions**](MerchantDefinedFieldsApi.md#putPblMerchantDefinedFieldsDefinitions) | **PUT** /ipl/v2/{referenceType}/merchantDefinedFields/{id} | Update a PayByLink MerchantDefinedField by ID


# **createMerchantDefinedFieldDefinition**
> \CyberSource\Model\MerchantDefinedFieldWithIdResponse[] createMerchantDefinedFieldDefinition($referenceType, $merchantDefinedFieldDefinitionRequest)

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

[**\CyberSource\Model\MerchantDefinedFieldWithIdResponse[]**](../Model/MerchantDefinedFieldWithIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPblMerchantDefinedFieldDefinition**
> \CyberSource\Model\MerchantDefinedFieldWithIdResponse[] createPblMerchantDefinedFieldDefinition($referenceType, $pblMerchantDefinedFieldDefinitionRequest)

Create a PayByLink merchant defined field for a given reference type

Creates a merchant defined field for the given reference type (`Purchase` or `Donation`). The field type is independent of the reference type: both `Purchase` and `Donation` support both `Text` and `Select` fields. Set `fieldType` to `Text` or `Select` accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | The reference type for which the merchant defined field is to be created. Available values are Purchase and Donation
$pblMerchantDefinedFieldDefinitionRequest = new \CyberSource\Model\PblMerchantDefinedFieldDefinitionRequest(); // \CyberSource\Model\PblMerchantDefinedFieldDefinitionRequest | 

try {
    $result = $api_instance->createPblMerchantDefinedFieldDefinition($referenceType, $pblMerchantDefinedFieldDefinitionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->createPblMerchantDefinedFieldDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceType** | **string**| The reference type for which the merchant defined field is to be created. Available values are Purchase and Donation |
 **pblMerchantDefinedFieldDefinitionRequest** | [**\CyberSource\Model\PblMerchantDefinedFieldDefinitionRequest**](../Model/PblMerchantDefinedFieldDefinitionRequest.md)|  |

### Return type

[**\CyberSource\Model\MerchantDefinedFieldWithIdResponse[]**](../Model/MerchantDefinedFieldWithIdResponse.md)

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

# **deletePblMerchantDefinedFieldsDefinitions**
> deletePblMerchantDefinedFieldsDefinitions($referenceType, $id)

Delete a PayByLink MerchantDefinedField by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | 
$id = 789; // int | 

try {
    $api_instance->deletePblMerchantDefinedFieldsDefinitions($referenceType, $id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->deletePblMerchantDefinedFieldsDefinitions: ', $e->getMessage(), PHP_EOL;
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
> \CyberSource\Model\MerchantDefinedFieldWithIdResponse[] getMerchantDefinedFieldsDefinitions($referenceType)

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

[**\CyberSource\Model\MerchantDefinedFieldWithIdResponse[]**](../Model/MerchantDefinedFieldWithIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPblMerchantDefinedFieldsDefinitions**
> \CyberSource\Model\MerchantDefinedFieldWithIdResponse[] getPblMerchantDefinedFieldsDefinitions($referenceType)

Get all PayByLink merchant defined fields for a given reference type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | The reference type for which merchant defined fields are to be fetched. Available values are Purchase, Donation and PayByLink. PayByLink returns the merchant defined fields for both Purchase and Donation combined.

try {
    $result = $api_instance->getPblMerchantDefinedFieldsDefinitions($referenceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->getPblMerchantDefinedFieldsDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceType** | **string**| The reference type for which merchant defined fields are to be fetched. Available values are Purchase, Donation and PayByLink. PayByLink returns the merchant defined fields for both Purchase and Donation combined. |

### Return type

[**\CyberSource\Model\MerchantDefinedFieldWithIdResponse[]**](../Model/MerchantDefinedFieldWithIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMerchantDefinedFieldsDefinitions**
> \CyberSource\Model\MerchantDefinedFieldWithIdResponse[] putMerchantDefinedFieldsDefinitions($referenceType, $id, $updateMerchantDefinedFieldCoreByIdRequest)

Update a MerchantDefinedField by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | 
$id = 789; // int | 
$updateMerchantDefinedFieldCoreByIdRequest = new \CyberSource\Model\UpdateMerchantDefinedFieldCoreByIdRequest(); // \CyberSource\Model\UpdateMerchantDefinedFieldCoreByIdRequest | 

try {
    $result = $api_instance->putMerchantDefinedFieldsDefinitions($referenceType, $id, $updateMerchantDefinedFieldCoreByIdRequest);
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
 **updateMerchantDefinedFieldCoreByIdRequest** | [**\CyberSource\Model\UpdateMerchantDefinedFieldCoreByIdRequest**](../Model/UpdateMerchantDefinedFieldCoreByIdRequest.md)|  |

### Return type

[**\CyberSource\Model\MerchantDefinedFieldWithIdResponse[]**](../Model/MerchantDefinedFieldWithIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPblMerchantDefinedFieldsDefinitions**
> \CyberSource\Model\MerchantDefinedFieldWithIdResponse[] putPblMerchantDefinedFieldsDefinitions($referenceType, $id, $updatePblMerchantDefinedFieldCoreByIdRequest)

Update a PayByLink MerchantDefinedField by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantDefinedFieldsApi();
$referenceType = "referenceType_example"; // string | 
$id = 789; // int | 
$updatePblMerchantDefinedFieldCoreByIdRequest = new \CyberSource\Model\UpdatePblMerchantDefinedFieldCoreByIdRequest(); // \CyberSource\Model\UpdatePblMerchantDefinedFieldCoreByIdRequest | 

try {
    $result = $api_instance->putPblMerchantDefinedFieldsDefinitions($referenceType, $id, $updatePblMerchantDefinedFieldCoreByIdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDefinedFieldsApi->putPblMerchantDefinedFieldsDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceType** | **string**|  |
 **id** | **int**|  |
 **updatePblMerchantDefinedFieldCoreByIdRequest** | [**\CyberSource\Model\UpdatePblMerchantDefinedFieldCoreByIdRequest**](../Model/UpdatePblMerchantDefinedFieldCoreByIdRequest.md)|  |

### Return type

[**\CyberSource\Model\MerchantDefinedFieldWithIdResponse[]**](../Model/MerchantDefinedFieldWithIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

