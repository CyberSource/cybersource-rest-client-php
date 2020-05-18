# CyberSource\UserManagementApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsers**](UserManagementApi.md#getUsers) | **GET** /ums/v1/users | Get User Information - Deprecated


# **getUsers**
> \CyberSource\Model\UmsV1UsersGet200Response getUsers($organizationId, $userName, $permissionId, $roleId)

Get User Information - Deprecated

This endpoint is deprecated. Please use the search end point.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UserManagementApi();
$organizationId = "organizationId_example"; // string | This is the orgId of the organization which the user belongs to.
$userName = "userName_example"; // string | User ID of the user you want to get details on.
$permissionId = "permissionId_example"; // string | permission that you are trying to search user on.
$roleId = "roleId_example"; // string | role of the user you are trying to search on.

try {
    $result = $api_instance->getUsers($organizationId, $userName, $permissionId, $roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| This is the orgId of the organization which the user belongs to. | [optional]
 **userName** | **string**| User ID of the user you want to get details on. | [optional]
 **permissionId** | **string**| permission that you are trying to search user on. | [optional]
 **roleId** | **string**| role of the user you are trying to search on. | [optional]

### Return type

[**\CyberSource\Model\UmsV1UsersGet200Response**](../Model/UmsV1UsersGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

