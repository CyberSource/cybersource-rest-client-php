# CyberSource\ReplayWebhooksApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**replayPreviousWebhooks**](ReplayWebhooksApi.md#replayPreviousWebhooks) | **POST** /nrtf/v1/webhooks/{webhookId}/replays | Replay Previous Webhooks


# **replayPreviousWebhooks**
> replayPreviousWebhooks($webhookId, $replayWebhooksRequest)

Replay Previous Webhooks

Initiate a webhook replay request to replay transactions that happened in the past.  Cannot execute more than 1 replay request at a time. While one request is processing, you will not be allowed to execute another replay.  The difference between Start and End time cannot exceed a 24 hour window, and 1 month is the farthest date back that is eligible for replay.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ReplayWebhooksApi();
$webhookId = "webhookId_example"; // string | The webhook uuid identifier.
$replayWebhooksRequest = new \CyberSource\Model\ReplayWebhooksRequest(); // \CyberSource\Model\ReplayWebhooksRequest | The request query

try {
    $api_instance->replayPreviousWebhooks($webhookId, $replayWebhooksRequest);
} catch (Exception $e) {
    echo 'Exception when calling ReplayWebhooksApi->replayPreviousWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| The webhook uuid identifier. |
 **replayWebhooksRequest** | [**\CyberSource\Model\ReplayWebhooksRequest**](../Model/ReplayWebhooksRequest.md)| The request query | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

