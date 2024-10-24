# CyberSource\OrdersApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrder**](OrdersApi.md#createOrder) | **POST** /pts/v2/intents | Create an Order
[**updateOrder**](OrdersApi.md#updateOrder) | **PATCH** /pts/v2/intents/{id} | Update an Order


# **createOrder**
> \CyberSource\Model\PtsV2CreateOrderPost201Response createOrder($createOrderRequest)

Create an Order

A create order request enables you to send the itemized details along with the order. This API can be used by merchants initiating their transactions with the create order API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\OrdersApi();
$createOrderRequest = new \CyberSource\Model\CreateOrderRequest(); // \CyberSource\Model\CreateOrderRequest | 

try {
    $result = $api_instance->createOrder($createOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createOrderRequest** | [**\CyberSource\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2CreateOrderPost201Response**](../Model/PtsV2CreateOrderPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrder**
> \CyberSource\Model\PtsV2UpdateOrderPatch201Response updateOrder($id, $updateOrderRequest)

Update an Order

This API can be used in two flavours - for updating the order as well as saving the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\OrdersApi();
$id = "id_example"; // string | The ID returned from the original create order response.
$updateOrderRequest = new \CyberSource\Model\UpdateOrderRequest(); // \CyberSource\Model\UpdateOrderRequest | 

try {
    $result = $api_instance->updateOrder($id, $updateOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID returned from the original create order response. |
 **updateOrderRequest** | [**\CyberSource\Model\UpdateOrderRequest**](../Model/UpdateOrderRequest.md)|  |

### Return type

[**\CyberSource\Model\PtsV2UpdateOrderPatch201Response**](../Model/PtsV2UpdateOrderPatch201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

