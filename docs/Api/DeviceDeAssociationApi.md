# CyberSource\DeviceDeAssociationApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTerminalAssociation**](DeviceDeAssociationApi.md#deleteTerminalAssociation) | **PATCH** /dms/v2/devices/deassociate | De-associate a device from merchant or account V2
[**postDeAssociateV3Terminal**](DeviceDeAssociationApi.md#postDeAssociateV3Terminal) | **POST** /dms/v3/devices/deassociate | De-associate a device from merchant to account or reseller and from account to reseller


# **deleteTerminalAssociation**
> deleteTerminalAssociation($deAssociationRequestBody)

De-associate a device from merchant or account V2

The current association of the device will be removed and will be assigned back to parent in the hierarchy based on internal logic

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DeviceDeAssociationApi();
$deAssociationRequestBody = new \CyberSource\Model\DeAssociationRequestBody(); // \CyberSource\Model\DeAssociationRequestBody | de association of the deviceId in the request body.

try {
    $api_instance->deleteTerminalAssociation($deAssociationRequestBody);
} catch (Exception $e) {
    echo 'Exception when calling DeviceDeAssociationApi->deleteTerminalAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deAssociationRequestBody** | [**\CyberSource\Model\DeAssociationRequestBody**](../Model/DeAssociationRequestBody.md)| de association of the deviceId in the request body. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDeAssociateV3Terminal**
> \CyberSource\Model\InlineResponse2007[] postDeAssociateV3Terminal($deviceDeAssociateV3Request)

De-associate a device from merchant to account or reseller and from account to reseller

A device will be de-associated from its current organization and moved up in the hierarchy. The device's new position will be determined by a specified destination, either an account or a portfolio. If no destination is provided, the device will default to the currently logged-in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DeviceDeAssociationApi();
$deviceDeAssociateV3Request = array(new \CyberSource\Model\DeviceDeAssociateV3Request()); // \CyberSource\Model\DeviceDeAssociateV3Request[] | deviceId that has to be de-associated to the destination organizationId.

try {
    $result = $api_instance->postDeAssociateV3Terminal($deviceDeAssociateV3Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceDeAssociationApi->postDeAssociateV3Terminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceDeAssociateV3Request** | [**\CyberSource\Model\DeviceDeAssociateV3Request[]**](../Model/DeviceDeAssociateV3Request.md)| deviceId that has to be de-associated to the destination organizationId. |

### Return type

[**\CyberSource\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

