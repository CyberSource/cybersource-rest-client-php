# CyberSource\UCPCheckoutApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ucpCancelCheckout**](UCPCheckoutApi.md#ucpCancelCheckout) | **POST** /icc/v1/checkout-sessions/{session_id}/cancel | Cancel Checkout UCP
[**ucpCompleteCheckout**](UCPCheckoutApi.md#ucpCompleteCheckout) | **POST** /icc/v1/checkout-sessions/{session_id}/complete | Complete Checkout UCP
[**ucpCreateCheckoutSession**](UCPCheckoutApi.md#ucpCreateCheckoutSession) | **POST** /icc/v1/checkout-sessions | Create Checkout Session UCP
[**ucpGetCheckoutSession**](UCPCheckoutApi.md#ucpGetCheckoutSession) | **GET** /icc/v1/checkout-sessions/{session_id} | Get Checkout Session UCP
[**ucpUpdateCheckoutSession**](UCPCheckoutApi.md#ucpUpdateCheckoutSession) | **PUT** /icc/v1/checkout-sessions/{session_id} | Update Checkout Session UCP


# **ucpCancelCheckout**
> \CyberSource\Model\InlineResponse20113 ucpCancelCheckout($sessionId)

Cancel Checkout UCP

Cancels an active UCP checkout session. No charge is made.  This operation is idempotent — cancelling an already-cancelled session returns a successful response. Sessions also expire automatically after 30 minutes of inactivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UCPCheckoutApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to cancel.

try {
    $result = $api_instance->ucpCancelCheckout($sessionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UCPCheckoutApi->ucpCancelCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the UCP checkout session to cancel. |

### Return type

[**\CyberSource\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpCompleteCheckout**
> \CyberSource\Model\InlineResponse20113 ucpCompleteCheckout($sessionId, $idempotencyKey, $ucpCompleteCheckoutRequest)

Complete Checkout UCP

**Final step of the UCP checkout flow.**  Finalizes the session and places the order with the merchant. ACG translates the UCP completion request to the merchant's checkout API.  On success, the session transitions to `completed`. An `order_id` is not returned in the UCP response — use the ACP Complete endpoint if you need order confirmation details.  **Always use an `idempotency-key`** to prevent duplicate orders on network retries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UCPCheckoutApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to complete.
$idempotencyKey = "a1b2c3d4-e5f6-7890-abcd-ef1234567890"; // string | **Strongly recommended.** A unique key that ensures this order is placed exactly once on retries. Lowercase per UCP spec.
$ucpCompleteCheckoutRequest = new \CyberSource\Model\UcpCompleteCheckoutRequest(); // \CyberSource\Model\UcpCompleteCheckoutRequest | UCP completion payload containing payment instrument and optional risk signals. If payment context was already provided in the Create or Update call, the body can be omitted. Risk signals are logged for fraud analysis and are not forwarded to the merchant.

try {
    $result = $api_instance->ucpCompleteCheckout($sessionId, $idempotencyKey, $ucpCompleteCheckoutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UCPCheckoutApi->ucpCompleteCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the UCP checkout session to complete. |
 **idempotencyKey** | **string**| **Strongly recommended.** A unique key that ensures this order is placed exactly once on retries. Lowercase per UCP spec. | [optional]
 **ucpCompleteCheckoutRequest** | [**\CyberSource\Model\UcpCompleteCheckoutRequest**](../Model/UcpCompleteCheckoutRequest.md)| UCP completion payload containing payment instrument and optional risk signals. If payment context was already provided in the Create or Update call, the body can be omitted. Risk signals are logged for fraud analysis and are not forwarded to the merchant. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpCreateCheckoutSession**
> \CyberSource\Model\InlineResponse20113 ucpCreateCheckoutSession($ucpCreateCheckoutSessionRequest, $idempotencyKey)

Create Checkout Session UCP

**Step 1 of the UCP checkout flow.**  Creates a new UCP checkout session using Google's Universal Commerce Protocol format. ACG translates the UCP request into the internal ACP format, applies merchant pricing, and returns a UCP-format session response with a session `id`.  UCP uses `line_items` (instead of `items`) and lowercase header names (`idempotency-key`) per the UCP specification.  **Store the `id`** from the response — it is required for all subsequent UCP calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UCPCheckoutApi();
$ucpCreateCheckoutSessionRequest = new \CyberSource\Model\UcpCreateCheckoutSessionRequest(); // \CyberSource\Model\UcpCreateCheckoutSessionRequest | UCP checkout session creation payload containing line items, buyer details, currency, and optional payment, fulfillment, and discount information.
$idempotencyKey = "fc23729f-dc9b-4619-8742-2cf9d7bfdf1b"; // string | Client-generated unique key (UUID recommended) to ensure this request is processed exactly once. Lowercase per UCP specification.

try {
    $result = $api_instance->ucpCreateCheckoutSession($ucpCreateCheckoutSessionRequest, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UCPCheckoutApi->ucpCreateCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ucpCreateCheckoutSessionRequest** | [**\CyberSource\Model\UcpCreateCheckoutSessionRequest**](../Model/UcpCreateCheckoutSessionRequest.md)| UCP checkout session creation payload containing line items, buyer details, currency, and optional payment, fulfillment, and discount information. |
 **idempotencyKey** | **string**| Client-generated unique key (UUID recommended) to ensure this request is processed exactly once. Lowercase per UCP specification. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpGetCheckoutSession**
> \CyberSource\Model\InlineResponse20113 ucpGetCheckoutSession($sessionId, $ucpGetCheckoutSessionRequest)

Get Checkout Session UCP

Retrieves the current state of a UCP checkout session.  Use this to verify session status, retrieve updated totals after a fulfillment change, or resume a session after an interruption.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UCPCheckoutApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to retrieve. Obtained from the `id` field in the Create Session response.
$ucpGetCheckoutSessionRequest = new \stdClass; // object | Empty request body.

try {
    $result = $api_instance->ucpGetCheckoutSession($sessionId, $ucpGetCheckoutSessionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UCPCheckoutApi->ucpGetCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the UCP checkout session to retrieve. Obtained from the &#x60;id&#x60; field in the Create Session response. |
 **ucpGetCheckoutSessionRequest** | **object**| Empty request body. |

### Return type

[**\CyberSource\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpUpdateCheckoutSession**
> \CyberSource\Model\InlineResponse20113 ucpUpdateCheckoutSession($sessionId, $ucpUpdateCheckoutSessionRequest, $idempotencyKey)

Update Checkout Session UCP

Modifies an active UCP checkout session and returns the updated session state.  Use this to change line item quantities, update fulfillment address or method, or apply discount codes. Totals are recalculated and returned in the response.  Only the fields you include in the request body are updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\UCPCheckoutApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to update.
$ucpUpdateCheckoutSessionRequest = new \CyberSource\Model\UcpUpdateCheckoutSessionRequest(); // \CyberSource\Model\UcpUpdateCheckoutSessionRequest | UCP session update payload. All fields are optional — only fields you include will be applied.
$idempotencyKey = "a1b2c3d4-e5f6-7890-abcd-ef1234567890"; // string | Client-generated unique key for idempotency. Lowercase per UCP spec.

try {
    $result = $api_instance->ucpUpdateCheckoutSession($sessionId, $ucpUpdateCheckoutSessionRequest, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UCPCheckoutApi->ucpUpdateCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the UCP checkout session to update. |
 **ucpUpdateCheckoutSessionRequest** | [**\CyberSource\Model\UcpUpdateCheckoutSessionRequest**](../Model/UcpUpdateCheckoutSessionRequest.md)| UCP session update payload. All fields are optional — only fields you include will be applied. |
 **idempotencyKey** | **string**| Client-generated unique key for idempotency. Lowercase per UCP spec. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

