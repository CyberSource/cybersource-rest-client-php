# CyberSource\VerificationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateExportCompliance**](VerificationApi.md#validateExportCompliance) | **POST** /risk/v1/export-compliance-inquiries | Validate export compliance
[**verifyCustomerAddress**](VerificationApi.md#verifyCustomerAddress) | **POST** /risk/v1/address-verifications | Verify customer address


# **validateExportCompliance**
> \CyberSource\Model\RiskV1ExportComplianceInquiriesPost201Response validateExportCompliance($validateExportComplianceRequest)

Validate export compliance

This call checks customer data against specified watch lists to ensure export compliance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\VerificationApi();
$validateExportComplianceRequest = new \CyberSource\Model\ValidateExportComplianceRequest(); // \CyberSource\Model\ValidateExportComplianceRequest | 

try {
    $result = $api_instance->validateExportCompliance($validateExportComplianceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationApi->validateExportCompliance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validateExportComplianceRequest** | [**\CyberSource\Model\ValidateExportComplianceRequest**](../Model/ValidateExportComplianceRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1ExportComplianceInquiriesPost201Response**](../Model/RiskV1ExportComplianceInquiriesPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyCustomerAddress**
> \CyberSource\Model\RiskV1AddressVerificationsPost201Response verifyCustomerAddress($verifyCustomerAddressRequest)

Verify customer address

This call verifies that the customer address submitted is valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\VerificationApi();
$verifyCustomerAddressRequest = new \CyberSource\Model\VerifyCustomerAddressRequest(); // \CyberSource\Model\VerifyCustomerAddressRequest | 

try {
    $result = $api_instance->verifyCustomerAddress($verifyCustomerAddressRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationApi->verifyCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verifyCustomerAddressRequest** | [**\CyberSource\Model\VerifyCustomerAddressRequest**](../Model/VerifyCustomerAddressRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1AddressVerificationsPost201Response**](../Model/RiskV1AddressVerificationsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

