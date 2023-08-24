# CyberSource\BillingAgreementsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingAgreementsDeRegistration**](BillingAgreementsApi.md#billingAgreementsDeRegistration) | **PATCH** /pts/v2/billing-agreements/{id} | Standing Instruction Cancellation or Modification
[**billingAgreementsIntimation**](BillingAgreementsApi.md#billingAgreementsIntimation) | **POST** /pts/v2/billing-agreements/{id}/intimations | Standing Instruction intimation
[**billingAgreementsRegistration**](BillingAgreementsApi.md#billingAgreementsRegistration) | **POST** /pts/v2/billing-agreements | Standing Instruction completion registration


# **billingAgreementsDeRegistration**
> \CyberSource\Model\PtsV2CreditsPost201Response1 billingAgreementsDeRegistration($modifyBillingAgreement, $id)

Standing Instruction Cancellation or Modification

Standing Instruction with or without Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BillingAgreementsApi();
$modifyBillingAgreement = new \CyberSource\Model\ModifyBillingAgreement(); // \CyberSource\Model\ModifyBillingAgreement | 
$id = "id_example"; // string | ID for de-registration or cancellation of Billing Agreement

try {
    $result = $api_instance->billingAgreementsDeRegistration($modifyBillingAgreement, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAgreementsApi->billingAgreementsDeRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modifyBillingAgreement** | [**\CyberSource\Model\ModifyBillingAgreement**](../Model/ModifyBillingAgreement.md)|  |
 **id** | **string**| ID for de-registration or cancellation of Billing Agreement |

### Return type

[**\CyberSource\Model\PtsV2CreditsPost201Response1**](../Model/PtsV2CreditsPost201Response1.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingAgreementsIntimation**
> \CyberSource\Model\PtsV2CreditsPost201Response1 billingAgreementsIntimation($intimateBillingAgreement, $id)

Standing Instruction intimation

Standing Instruction with or without Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BillingAgreementsApi();
$intimateBillingAgreement = new \CyberSource\Model\IntimateBillingAgreement(); // \CyberSource\Model\IntimateBillingAgreement | 
$id = "id_example"; // string | ID for intimation of Billing Agreement

try {
    $result = $api_instance->billingAgreementsIntimation($intimateBillingAgreement, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAgreementsApi->billingAgreementsIntimation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **intimateBillingAgreement** | [**\CyberSource\Model\IntimateBillingAgreement**](../Model/IntimateBillingAgreement.md)|  |
 **id** | **string**| ID for intimation of Billing Agreement |

### Return type

[**\CyberSource\Model\PtsV2CreditsPost201Response1**](../Model/PtsV2CreditsPost201Response1.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingAgreementsRegistration**
> \CyberSource\Model\PtsV2CreditsPost201Response1 billingAgreementsRegistration($createBillingAgreement)

Standing Instruction completion registration

Standing Instruction with or without Token. Transaction amount in case First payment is coming along with registration. Only 2 decimal places allowed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\BillingAgreementsApi();
$createBillingAgreement = new \CyberSource\Model\CreateBillingAgreement(); // \CyberSource\Model\CreateBillingAgreement | 

try {
    $result = $api_instance->billingAgreementsRegistration($createBillingAgreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAgreementsApi->billingAgreementsRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createBillingAgreement** | [**\CyberSource\Model\CreateBillingAgreement**](../Model/CreateBillingAgreement.md)|  |

### Return type

[**\CyberSource\Model\PtsV2CreditsPost201Response1**](../Model/PtsV2CreditsPost201Response1.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

