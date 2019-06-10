# CyberSource\DecisionManagerApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDecisionManagerCase**](DecisionManagerApi.md#createDecisionManagerCase) | **POST** /risk/v1/decisions | Create Decision Manager Case


# **createDecisionManagerCase**
> \CyberSource\Model\RiskV1DecisionsPost201Response createDecisionManagerCase($createDecisionManagerCaseRequest)

Create Decision Manager Case

This is the combined request to the Decision Manager Service for a transaction sent to Cybersource. Decision Manager will return a decision based on the request values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\DecisionManagerApi();
$createDecisionManagerCaseRequest = new \CyberSource\Model\CreateDecisionManagerCaseRequest(); // \CyberSource\Model\CreateDecisionManagerCaseRequest | 

try {
    $result = $api_instance->createDecisionManagerCase($createDecisionManagerCaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionManagerApi->createDecisionManagerCase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createDecisionManagerCaseRequest** | [**\CyberSource\Model\CreateDecisionManagerCaseRequest**](../Model/CreateDecisionManagerCaseRequest.md)|  |

### Return type

[**\CyberSource\Model\RiskV1DecisionsPost201Response**](../Model/RiskV1DecisionsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

