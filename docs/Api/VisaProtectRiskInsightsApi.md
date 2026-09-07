# CyberSource\VisaProtectRiskInsightsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitVpri**](VisaProtectRiskInsightsApi.md#submitVpri) | **POST** /unifiedrisk | Visa Protect Risk Insights


# **submitVpri**
> \CyberSource\Model\UnifiedRiskPost201Response submitVpri($vpriRequest)

Visa Protect Risk Insights

VPRI delivers real-time, AI-driven risk scores and insights via a data-only API to enrich existing fraud strategies and improve decisioning. It integrates easily into existing workflows and provides immediate value by identifying legitimate behavior across Visa's global network—helping reduce false declines and increase acceptance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\VisaProtectRiskInsightsApi();
$vpriRequest = new \CyberSource\Model\VpriRequest(); // \CyberSource\Model\VpriRequest | VPRI request for Transaction Risk Scoring or Transaction Risk Labeling

try {
    $result = $api_instance->submitVpri($vpriRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisaProtectRiskInsightsApi->submitVpri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vpriRequest** | [**\CyberSource\Model\VpriRequest**](../Model/VpriRequest.md)| VPRI request for Transaction Risk Scoring or Transaction Risk Labeling |

### Return type

[**\CyberSource\Model\UnifiedRiskPost201Response**](../Model/UnifiedRiskPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

