# CyberSource\UserManagementSearchApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchUsers**](UserManagementSearchApi.md#searchUsers) | **POST** /ums/v1/users/search | Search User Information


# **searchUsers**
> \CyberSource\Model\UmsV1UsersGet200Response searchUsers($searchRequest)

Search User Information

This endpoint is to get all the user information depending on the filter criteria passed in request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UserManagementSearchApi();
$searchRequest = new \CyberSource\Model\SearchRequest(); // \CyberSource\Model\SearchRequest | 

try {
    $result = $api_instance->searchUsers($searchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementSearchApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchRequest** | [**\CyberSource\Model\SearchRequest**](../Model/SearchRequest.md)|  |

### Return type

[**\CyberSource\Model\UmsV1UsersGet200Response**](../Model/UmsV1UsersGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

