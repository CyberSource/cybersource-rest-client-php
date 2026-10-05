# CyberSource\ACPCheckoutApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelCheckout**](ACPCheckoutApi.md#cancelCheckout) | **POST** /icc/v1/checkout_sessions/{session_id}/cancel | Cancel Checkout ACP
[**completeCheckout**](ACPCheckoutApi.md#completeCheckout) | **POST** /icc/v1/checkout_sessions/{session_id}/complete | Complete Checkout ACP
[**createCheckoutSession**](ACPCheckoutApi.md#createCheckoutSession) | **POST** /icc/v1/checkout_sessions | Create Checkout Session ACP
[**getCheckoutSession**](ACPCheckoutApi.md#getCheckoutSession) | **GET** /icc/v1/checkout_sessions/{session_id} | Get Checkout Session ACP
[**updateCheckoutSession**](ACPCheckoutApi.md#updateCheckoutSession) | **POST** /icc/v1/checkout_sessions/{session_id} | Update Checkout Session ACP


# **cancelCheckout**
> \CyberSource\Model\InlineResponse20018 cancelCheckout($sessionId, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion)

Cancel Checkout ACP

Cancels an active ACP checkout session. No charge is made to the buyer.  This call is safe to make multiple times — cancelling an already-cancelled session returns a successful response without error.  Sessions also expire automatically after 30 minutes of inactivity, so explicit cancellation is optional but recommended to release any reserved inventory immediately.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ACPCheckoutApi();
$sessionId = "sessionId_example"; // string | The unique identifier of the ACP checkout session to cancel. Obtained from the `id` field in the Create Session response.
$idempotencyKey = "idempotencyKey_example"; // string | Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned.
$acceptLanguage = "acceptLanguage_example"; // string | Preferred language for the response (e.g. `en-US`, `fr-FR`). Passed to the merchant backend for localized content.
$userAgent = "userAgent_example"; // string | Client user agent string identifying the AI agent platform and version.
$requestId = "requestId_example"; // string | Unique request identifier for distributed tracing and debugging. Echoed back in the response headers.
$signature = "signature_example"; // string | Request signature for payload integrity verification.
$timestamp = "timestamp_example"; // string | ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection.
$aPIVersion = "aPIVersion_example"; // string | ACP specification version the client is targeting (e.g. `2024-01-01`). When omitted, the latest supported version is assumed.

try {
    $result = $api_instance->cancelCheckout($sessionId, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACPCheckoutApi->cancelCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the ACP checkout session to cancel. Obtained from the &#x60;id&#x60; field in the Create Session response. |
 **idempotencyKey** | **string**| Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned. | [optional]
 **acceptLanguage** | **string**| Preferred language for the response (e.g. &#x60;en-US&#x60;, &#x60;fr-FR&#x60;). Passed to the merchant backend for localized content. | [optional]
 **userAgent** | **string**| Client user agent string identifying the AI agent platform and version. | [optional]
 **requestId** | **string**| Unique request identifier for distributed tracing and debugging. Echoed back in the response headers. | [optional]
 **signature** | **string**| Request signature for payload integrity verification. | [optional]
 **timestamp** | **string**| ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection. | [optional]
 **aPIVersion** | **string**| ACP specification version the client is targeting (e.g. &#x60;2024-01-01&#x60;). When omitted, the latest supported version is assumed. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **completeCheckout**
> \CyberSource\Model\InlineResponse20017 completeCheckout($sessionId, $acpCompleteCheckoutRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion)

Complete Checkout ACP

**Final step of the ACP checkout flow.**  Submits payment and buyer information to place the order with the merchant. On success, the session transitions to `completed` and an `order_id` is returned confirming the merchant accepted the order.  Once completed, the session is immutable — it cannot be updated or cancelled.  **Payment token:** The `payment.token` must be a valid token from the payment provider configured for the merchant (e.g. a tokenized card from Stripe or Braintree). ACG forwards the token to the merchant's payment processor — it is never stored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ACPCheckoutApi();
$sessionId = "sessionId_example"; // string | The unique identifier of the ACP checkout session to complete.
$acpCompleteCheckoutRequest = new \CyberSource\Model\AcpCompleteCheckoutRequest(); // \CyberSource\Model\AcpCompleteCheckoutRequest | Final buyer and payment details needed to place the order. Both `buyer` and `payment` may have been provided in earlier Create/Update calls; if so, they can be omitted here. At least a valid payment token is required to process the transaction.
$idempotencyKey = "idempotencyKey_example"; // string | Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned.
$acceptLanguage = "acceptLanguage_example"; // string | Preferred language for the response (e.g. `en-US`, `fr-FR`). Passed to the merchant backend for localized content.
$userAgent = "userAgent_example"; // string | Client user agent string identifying the AI agent platform and version.
$requestId = "requestId_example"; // string | Unique request identifier for distributed tracing and debugging. Echoed back in the response headers.
$signature = "signature_example"; // string | Request signature for payload integrity verification.
$timestamp = "timestamp_example"; // string | ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection.
$aPIVersion = "aPIVersion_example"; // string | ACP specification version the client is targeting (e.g. `2024-01-01`). When omitted, the latest supported version is assumed.

try {
    $result = $api_instance->completeCheckout($sessionId, $acpCompleteCheckoutRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACPCheckoutApi->completeCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the ACP checkout session to complete. |
 **acpCompleteCheckoutRequest** | [**\CyberSource\Model\AcpCompleteCheckoutRequest**](../Model/AcpCompleteCheckoutRequest.md)| Final buyer and payment details needed to place the order. Both &#x60;buyer&#x60; and &#x60;payment&#x60; may have been provided in earlier Create/Update calls; if so, they can be omitted here. At least a valid payment token is required to process the transaction. |
 **idempotencyKey** | **string**| Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned. | [optional]
 **acceptLanguage** | **string**| Preferred language for the response (e.g. &#x60;en-US&#x60;, &#x60;fr-FR&#x60;). Passed to the merchant backend for localized content. | [optional]
 **userAgent** | **string**| Client user agent string identifying the AI agent platform and version. | [optional]
 **requestId** | **string**| Unique request identifier for distributed tracing and debugging. Echoed back in the response headers. | [optional]
 **signature** | **string**| Request signature for payload integrity verification. | [optional]
 **timestamp** | **string**| ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection. | [optional]
 **aPIVersion** | **string**| ACP specification version the client is targeting (e.g. &#x60;2024-01-01&#x60;). When omitted, the latest supported version is assumed. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCheckoutSession**
> \CyberSource\Model\InlineResponse20112 createCheckoutSession($acpCreateCheckoutSessionRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion)

Create Checkout Session ACP

**Step 1 of the ACP checkout flow.**  Initiates a new ACP checkout session with the buyer's cart. ACG validates item availability against the merchant's catalog, calculates initial pricing and tax, and returns a session object with a unique `id`.  **Store the `id`** — every subsequent call in this checkout flow (update, complete, cancel) requires it.  The session remains active for 30 minutes. A new session must be created after expiry.  **Idempotency:** Supply an `Idempotency-Key` header to safely retry this call without creating duplicate sessions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ACPCheckoutApi();
$acpCreateCheckoutSessionRequest = new \CyberSource\Model\AcpCreateCheckoutSessionRequest(); // \CyberSource\Model\AcpCreateCheckoutSessionRequest | The cart contents and buyer context for this checkout session. `items` is required. `buyer` and `fulfillment_address` are optional on creation and can be provided via Update Session before completing checkout.
$idempotencyKey = "idempotencyKey_example"; // string | Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned.
$acceptLanguage = "acceptLanguage_example"; // string | Preferred language for the response (e.g. `en-US`, `fr-FR`). Passed to the merchant backend for localized content.
$userAgent = "userAgent_example"; // string | Client user agent string identifying the AI agent platform and version.
$requestId = "requestId_example"; // string | Unique request identifier for distributed tracing and debugging. Echoed back in the response headers.
$signature = "signature_example"; // string | Request signature for payload integrity verification.
$timestamp = "timestamp_example"; // string | ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection.
$aPIVersion = "aPIVersion_example"; // string | ACP specification version the client is targeting (e.g. `2024-01-01`). When omitted, the latest supported version is assumed.

try {
    $result = $api_instance->createCheckoutSession($acpCreateCheckoutSessionRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACPCheckoutApi->createCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acpCreateCheckoutSessionRequest** | [**\CyberSource\Model\AcpCreateCheckoutSessionRequest**](../Model/AcpCreateCheckoutSessionRequest.md)| The cart contents and buyer context for this checkout session. &#x60;items&#x60; is required. &#x60;buyer&#x60; and &#x60;fulfillment_address&#x60; are optional on creation and can be provided via Update Session before completing checkout. |
 **idempotencyKey** | **string**| Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned. | [optional]
 **acceptLanguage** | **string**| Preferred language for the response (e.g. &#x60;en-US&#x60;, &#x60;fr-FR&#x60;). Passed to the merchant backend for localized content. | [optional]
 **userAgent** | **string**| Client user agent string identifying the AI agent platform and version. | [optional]
 **requestId** | **string**| Unique request identifier for distributed tracing and debugging. Echoed back in the response headers. | [optional]
 **signature** | **string**| Request signature for payload integrity verification. | [optional]
 **timestamp** | **string**| ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection. | [optional]
 **aPIVersion** | **string**| ACP specification version the client is targeting (e.g. &#x60;2024-01-01&#x60;). When omitted, the latest supported version is assumed. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20112**](../Model/InlineResponse20112.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutSession**
> \CyberSource\Model\InlineResponse20112 getCheckoutSession($sessionId, $acpGetCheckoutSessionRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion)

Get Checkout Session ACP

Retrieves the current state of an ACP checkout session, including line items, buyer information,  and current totals.  Use this to: - Verify session status before presenting a checkout summary to the buyer - Resume an interrupted checkout flow - Poll for status after an async operation - Confirm a session has not expired before submitting payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ACPCheckoutApi();
$sessionId = "sessionId_example"; // string | The unique identifier of the ACP checkout session to retrieve. Obtained from the `id` field in the Create Session response.
$acpGetCheckoutSessionRequest = new \stdClass; // object | Empty request body.
$idempotencyKey = "idempotencyKey_example"; // string | Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned.
$acceptLanguage = "acceptLanguage_example"; // string | Preferred language for the response (e.g. `en-US`, `fr-FR`). Passed to the merchant backend for localized content.
$userAgent = "userAgent_example"; // string | Client user agent string identifying the AI agent platform and version.
$requestId = "requestId_example"; // string | Unique request identifier for distributed tracing and debugging. Echoed back in the response headers.
$signature = "signature_example"; // string | Request signature for payload integrity verification.
$timestamp = "timestamp_example"; // string | ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection.
$aPIVersion = "aPIVersion_example"; // string | ACP specification version the client is targeting (e.g. `2024-01-01`). When omitted, the latest supported version is assumed.

try {
    $result = $api_instance->getCheckoutSession($sessionId, $acpGetCheckoutSessionRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACPCheckoutApi->getCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the ACP checkout session to retrieve. Obtained from the &#x60;id&#x60; field in the Create Session response. |
 **acpGetCheckoutSessionRequest** | **object**| Empty request body. |
 **idempotencyKey** | **string**| Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned. | [optional]
 **acceptLanguage** | **string**| Preferred language for the response (e.g. &#x60;en-US&#x60;, &#x60;fr-FR&#x60;). Passed to the merchant backend for localized content. | [optional]
 **userAgent** | **string**| Client user agent string identifying the AI agent platform and version. | [optional]
 **requestId** | **string**| Unique request identifier for distributed tracing and debugging. Echoed back in the response headers. | [optional]
 **signature** | **string**| Request signature for payload integrity verification. | [optional]
 **timestamp** | **string**| ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection. | [optional]
 **aPIVersion** | **string**| ACP specification version the client is targeting (e.g. &#x60;2024-01-01&#x60;). When omitted, the latest supported version is assumed. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20112**](../Model/InlineResponse20112.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCheckoutSession**
> \CyberSource\Model\InlineResponse20112 updateCheckoutSession($sessionId, $acpUpdateCheckoutSessionRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion)

Update Checkout Session ACP

Modifies an active ACP checkout session and returns the updated session state with recalculated totals.  Use this to: - Add, remove, or change quantities of cart items - Apply or remove discount codes - Update the buyer's shipping address or contact details - Trigger re-calculation of shipping costs and tax  Only fields included in the request body are updated — omitted fields retain their current values.  **Idempotency:** Supply an `Idempotency-Key` to safely retry updates without applying them twice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ACPCheckoutApi();
$sessionId = "sessionId_example"; // string | The unique identifier of the ACP checkout session to update. Obtained from the `id` field in the Create Session response.
$acpUpdateCheckoutSessionRequest = new \CyberSource\Model\AcpUpdateCheckoutSessionRequest(); // \CyberSource\Model\AcpUpdateCheckoutSessionRequest | Fields to update. All fields are optional — only included fields are changed. To replace the cart entirely, provide the full `items` array.
$idempotencyKey = "idempotencyKey_example"; // string | Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned.
$acceptLanguage = "acceptLanguage_example"; // string | Preferred language for the response (e.g. `en-US`, `fr-FR`). Passed to the merchant backend for localized content.
$userAgent = "userAgent_example"; // string | Client user agent string identifying the AI agent platform and version.
$requestId = "requestId_example"; // string | Unique request identifier for distributed tracing and debugging. Echoed back in the response headers.
$signature = "signature_example"; // string | Request signature for payload integrity verification.
$timestamp = "timestamp_example"; // string | ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection.
$aPIVersion = "aPIVersion_example"; // string | ACP specification version the client is targeting (e.g. `2024-01-01`). When omitted, the latest supported version is assumed.

try {
    $result = $api_instance->updateCheckoutSession($sessionId, $acpUpdateCheckoutSessionRequest, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACPCheckoutApi->updateCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| The unique identifier of the ACP checkout session to update. Obtained from the &#x60;id&#x60; field in the Create Session response. |
 **acpUpdateCheckoutSessionRequest** | [**\CyberSource\Model\AcpUpdateCheckoutSessionRequest**](../Model/AcpUpdateCheckoutSessionRequest.md)| Fields to update. All fields are optional — only included fields are changed. To replace the cart entirely, provide the full &#x60;items&#x60; array. |
 **idempotencyKey** | **string**| Client-generated unique key to ensure this request is processed exactly once. If a request with the same key was already processed, the original response is returned. | [optional]
 **acceptLanguage** | **string**| Preferred language for the response (e.g. &#x60;en-US&#x60;, &#x60;fr-FR&#x60;). Passed to the merchant backend for localized content. | [optional]
 **userAgent** | **string**| Client user agent string identifying the AI agent platform and version. | [optional]
 **requestId** | **string**| Unique request identifier for distributed tracing and debugging. Echoed back in the response headers. | [optional]
 **signature** | **string**| Request signature for payload integrity verification. | [optional]
 **timestamp** | **string**| ISO 8601 timestamp of when the request was generated. Used in conjunction with Signature for replay protection. | [optional]
 **aPIVersion** | **string**| ACP specification version the client is targeting (e.g. &#x60;2024-01-01&#x60;). When omitted, the latest supported version is assumed. | [optional]

### Return type

[**\CyberSource\Model\InlineResponse20112**](../Model/InlineResponse20112.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

