# CyberSource\DeviceDeAssociationV3Api

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postDeAssociateV3Terminal**](DeviceDeAssociationV3Api.md#postDeAssociateV3Terminal) | **POST** /dms/v3/devices/deassociate | De-associate a device from merchant to account or reseller and from account to reseller V3


# **postDeAssociateV3Terminal**
> \CyberSource\Model\InlineResponse2005[] postDeAssociateV3Terminal($deviceDeAssociateV3Request)

De-associate a device from merchant to account or reseller and from account to reseller V3

A device will be de-associated from its current organization and moved up in the hierarchy. The device's new position will be determined by a specified destination, either an account or a portfolio. If no destination is provided, the device will default to the currently logged-in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DeviceDeAssociationV3Api();
$deviceDeAssociateV3Request = array(new \CyberSource\Model\DeviceDeAssociateV3Request()); // \CyberSource\Model\DeviceDeAssociateV3Request[] | deviceId that has to be de-associated to the destination organizationId.

try {
    $result = $api_instance->postDeAssociateV3Terminal($deviceDeAssociateV3Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceDeAssociationV3Api->postDeAssociateV3Terminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceDeAssociateV3Request** | [**\CyberSource\Model\DeviceDeAssociateV3Request[]**](../Model/DeviceDeAssociateV3Request.md)| deviceId that has to be de-associated to the destination organizationId. |

### Return type

[**\CyberSource\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

