# CyberSource\EnrollmentApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enrollCard**](EnrollmentApi.md#enrollCard) | **POST** /icc/v1/tokens | Enroll a card


# **enrollCard**
> \CyberSource\Model\AgenticCardEnrollmentResponse200 enrollCard($agenticCardEnrollmentRequest)

Enroll a card

Enroll a payment card for agentic or e-commerce transactions. This is typically the first step in the Intelligent Commerce payment lifecycle — the agent calls this endpoint to register a consumer's card, creating a tokenized reference that can be used in subsequent purchase instructions and payment credential retrieval. Requires device information, consumer identity, billing details, and payment instrument references. Returns a status of ACTIVE (HTTP 200) if enrollment completes immediately, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required. Call this endpoint when a consumer wants to add a new payment card or when setting up a card for agentic payment flows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\EnrollmentApi();
$agenticCardEnrollmentRequest = new \CyberSource\Model\AgenticCardEnrollmentRequest(); // \CyberSource\Model\AgenticCardEnrollmentRequest | 

try {
    $result = $api_instance->enrollCard($agenticCardEnrollmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agenticCardEnrollmentRequest** | [**\CyberSource\Model\AgenticCardEnrollmentRequest**](../Model/AgenticCardEnrollmentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCardEnrollmentResponse200**](../Model/AgenticCardEnrollmentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

