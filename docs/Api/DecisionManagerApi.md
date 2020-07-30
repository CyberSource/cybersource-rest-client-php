# CyberSource\DecisionManagerApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNegative**](DecisionManagerApi.md#addNegative) | **POST** /risk/v1/lists/{type}/entries | List Management
[**createBundledDecisionManagerCase**](DecisionManagerApi.md#createBundledDecisionManagerCase) | **POST** /risk/v1/decisions | Create Decision Manager
[**fraudUpdate**](DecisionManagerApi.md#fraudUpdate) | **POST** /risk/v1/decisions/{id}/marking | Fraud Marking


# **addNegative**
> \CyberSource\Model\RiskV1UpdatePost201Response addNegative($type, $addNegativeListRequest)

List Management

This call adds/deletes/converts the request information in the negative list.  Provide the list to be updated as the path parameter. This value can be 'postiive', 'negative' or 'review'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DecisionManagerApi();
$type = "type_example"; // string | The list to be updated. It can be 'positive', 'negative' or 'review'.
$addNegativeListRequest = new \CyberSource\Model\AddNegativeListRequest(); // \CyberSource\Model\AddNegativeListRequest | 

try {
    $result = $api_instance->addNegative($type, $addNegativeListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionManagerApi->addNegative: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The list to be updated. It can be &#39;positive&#39;, &#39;negative&#39; or &#39;review&#39;. |
 **addNegativeListRequest** | [**\CyberSource\Model\AddNegativeListRequest**](../Model/AddNegativeListRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1UpdatePost201Response**](../Model/RiskV1UpdatePost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBundledDecisionManagerCase**
> \CyberSource\Model\RiskV1DecisionsPost201Response createBundledDecisionManagerCase($createBundledDecisionManagerCaseRequest)

Create Decision Manager

Decision Manager can help you automate and streamline your fraud operations. Decision Manager will return a decision based on the request values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DecisionManagerApi();
$createBundledDecisionManagerCaseRequest = new \CyberSource\Model\CreateBundledDecisionManagerCaseRequest(); // \CyberSource\Model\CreateBundledDecisionManagerCaseRequest | 

try {
    $result = $api_instance->createBundledDecisionManagerCase($createBundledDecisionManagerCaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionManagerApi->createBundledDecisionManagerCase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createBundledDecisionManagerCaseRequest** | [**\CyberSource\Model\CreateBundledDecisionManagerCaseRequest**](../Model/CreateBundledDecisionManagerCaseRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1DecisionsPost201Response**](../Model/RiskV1DecisionsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fraudUpdate**
> \CyberSource\Model\RiskV1UpdatePost201Response fraudUpdate($id, $fraudMarkingActionRequest)

Fraud Marking

This can be used to - 1. Add known fraudulent data to the fraud history 2. Remove data added to history with Transaction Marking Tool or by uploading chargeback files 3. Remove chargeback data from history that was automatically added. For detailed information, contact your Cybersource representative  Place the request ID of the transaction you want to mark as suspect (or remove from history) as the path parameter in this request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DecisionManagerApi();
$id = "id_example"; // string | Request ID of the transaction that you want to mark as suspect or remove from history.
$fraudMarkingActionRequest = new \CyberSource\Model\FraudMarkingActionRequest(); // \CyberSource\Model\FraudMarkingActionRequest | 

try {
    $result = $api_instance->fraudUpdate($id, $fraudMarkingActionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionManagerApi->fraudUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Request ID of the transaction that you want to mark as suspect or remove from history. |
 **fraudMarkingActionRequest** | [**\CyberSource\Model\FraudMarkingActionRequest**](../Model/FraudMarkingActionRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1UpdatePost201Response**](../Model/RiskV1UpdatePost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

