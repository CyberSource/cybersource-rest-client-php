# CyberSource\TokenizeApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenize**](TokenizeApi.md#tokenize) | **POST** /tms/v2/tokenize | Tokenize


# **tokenize**
> \CyberSource\Model\InlineResponse200 tokenize($postTokenizeRequest, $profileId)

Tokenize

|  |  |  |   | --- | --- | --- | |The **Tokenize API** endpoint facilitates the creation of various TMS tokens such as Customers, Payment Instruments, Shipping Addresses, and Instrument Identifiers in a single operation. The request includes a processingInformation object, which specifies **\"TOKEN_CREATE\"** and the types of tokens to be created. The **tokenInformation** section of the request includes detailed information relevant to each token type. This includes attributes for Customers, Payment Instruments, Shipping Addresses, Instrument Identifiers and Transient Token data. The payload is flexible, allowing for different combinations of tokens to be created in a single request.|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|The **API response** includes a responses array, which details the outcome of the tokenization process for each requested resource type, such as Customer, Payment Instrument, Shipping Address, and Instrument Identifier. Each entry in this array provides an HTTP status code such as **201/200 for successful creations**, and a unique identifier for the newly created token.<br>In cases where token creation encounters issues, the response includes a **non-2XX** status code and an errors array for the affected resource. Each error object in the array details the **error type and a descriptive message** providing insight into why a particular token creation was not attempted or failed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\TokenizeApi();
$postTokenizeRequest = new \CyberSource\Model\PostTokenizeRequest(); // \CyberSource\Model\PostTokenizeRequest | 
$profileId = "profileId_example"; // string | The Id of a profile containing user specific TMS configuration.

try {
    $result = $api_instance->tokenize($postTokenizeRequest, $profileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenizeApi->tokenize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postTokenizeRequest** | [**\CyberSource\Model\PostTokenizeRequest**](../Model/PostTokenizeRequest.md)|  |
 **profileId** | **string**| The Id of a profile containing user specific TMS configuration. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

