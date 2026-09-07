# CyberSource\AgentCapabilitiesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateAgentKey**](AgentCapabilitiesApi.md#activateAgentKey) | **POST** /icc/v1/agents/{agentId}/keys/{keyId}/activate | Activate a key
[**addAgentKey**](AgentCapabilitiesApi.md#addAgentKey) | **POST** /icc/v1/agents/{agentId}/keys | Add a key to an agent
[**cancelCheckout**](AgentCapabilitiesApi.md#cancelCheckout) | **POST** /icc/v1/checkout_sessions/{session_id}/cancel | Cancel Checkout ACP
[**cancelPurchaseIntent**](AgentCapabilitiesApi.md#cancelPurchaseIntent) | **PUT** /icc/v1/instructions/{instructionId}/cancel | Cancel a purchase intent
[**completeCheckout**](AgentCapabilitiesApi.md#completeCheckout) | **POST** /icc/v1/checkout_sessions/{session_id}/complete | Complete Checkout ACP
[**confirmTransactionEvents**](AgentCapabilitiesApi.md#confirmTransactionEvents) | **POST** /icc/v1/instructions/{instructionId}/confirmations | Confirm transaction events
[**createCheckoutSession**](AgentCapabilitiesApi.md#createCheckoutSession) | **POST** /icc/v1/checkout_sessions | Create Checkout Session ACP
[**deactivateAgentKey**](AgentCapabilitiesApi.md#deactivateAgentKey) | **DELETE** /icc/v1/agents/{agentId}/keys/{keyId} | Deactivate a key
[**enrollCard**](AgentCapabilitiesApi.md#enrollCard) | **POST** /icc/v1/tokens | Enroll a card
[**getAgent**](AgentCapabilitiesApi.md#getAgent) | **GET** /icc/v1/agents/{agentId} | Get an agent
[**getAgentKey**](AgentCapabilitiesApi.md#getAgentKey) | **GET** /icc/v1/agents/{agentId}/keys/{keyId} | Get a key by agent and key ID
[**getCheckoutSession**](AgentCapabilitiesApi.md#getCheckoutSession) | **GET** /icc/v1/checkout_sessions/{session_id} | Get Checkout Session ACP
[**initiatePurchaseIntent**](AgentCapabilitiesApi.md#initiatePurchaseIntent) | **POST** /icc/v1/instructions | Initiate a purchase intent
[**listAgentKeys**](AgentCapabilitiesApi.md#listAgentKeys) | **GET** /icc/v1/agents/{agentId}/keys | List keys for an agent
[**registerAgent**](AgentCapabilitiesApi.md#registerAgent) | **POST** /icc/v1/agents | Register an agent
[**retrievePaymentCredentials**](AgentCapabilitiesApi.md#retrievePaymentCredentials) | **POST** /icc/v1/instructions/{instructionId}/credentials | Retrieve payment credentials
[**ucpCancelCheckout**](AgentCapabilitiesApi.md#ucpCancelCheckout) | **POST** /icc/v1/checkout-sessions/{session_id}/cancel | Cancel Checkout UCP
[**ucpCompleteCheckout**](AgentCapabilitiesApi.md#ucpCompleteCheckout) | **POST** /icc/v1/checkout-sessions/{session_id}/complete | Complete Checkout UCP
[**ucpCreateCheckoutSession**](AgentCapabilitiesApi.md#ucpCreateCheckoutSession) | **POST** /icc/v1/checkout-sessions | Create Checkout Session UCP
[**ucpGetCheckoutSession**](AgentCapabilitiesApi.md#ucpGetCheckoutSession) | **GET** /icc/v1/checkout-sessions/{session_id} | Get Checkout Session UCP
[**ucpUpdateCheckoutSession**](AgentCapabilitiesApi.md#ucpUpdateCheckoutSession) | **PUT** /icc/v1/checkout-sessions/{session_id} | Update Checkout Session UCP
[**updateAgent**](AgentCapabilitiesApi.md#updateAgent) | **PUT** /icc/v1/agents/{agentId} | Update an agent
[**updateAgentKey**](AgentCapabilitiesApi.md#updateAgentKey) | **PUT** /icc/v1/agents/{agentId}/keys/{keyId} | Update a key
[**updateCheckoutSession**](AgentCapabilitiesApi.md#updateCheckoutSession) | **POST** /icc/v1/checkout_sessions/{session_id} | Update Checkout Session ACP
[**updatePurchaseIntent**](AgentCapabilitiesApi.md#updatePurchaseIntent) | **PUT** /icc/v1/instructions/{instructionId} | Update a purchase intent


# **activateAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 activateAgentKey($agentId, $keyId)

Activate a key

Activate a deactivated key. Raises 404 if agent or key not found, 403 if agent is deactivated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyId = "keyId_example"; // string | Unique key identifier

try {
    $result = $api_instance->activateAgentKey($agentId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->activateAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyId** | **string**| Unique key identifier |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 addAgentKey($agentId, $keyRequest)

Add a key to an agent

[category 1 — Agent_Capabilities] Upload a Base64-encoded public key for an agent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyRequest = new \CyberSource\Model\KeyRequest(); // \CyberSource\Model\KeyRequest | Key creation request

try {
    $result = $api_instance->addAgentKey($agentId, $keyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->addAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyRequest** | [**\CyberSource\Model\KeyRequest**](../Model/KeyRequest.md)| Key creation request |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelCheckout**
> \CyberSource\Model\InlineResponse20018 cancelCheckout($sessionId, $idempotencyKey, $acceptLanguage, $userAgent, $requestId, $signature, $timestamp, $aPIVersion)

Cancel Checkout ACP

Cancels an active ACP checkout session. No charge is made to the buyer.  This call is safe to make multiple times — cancelling an already-cancelled session returns a successful response without error.  Sessions also expire automatically after 30 minutes of inactivity, so explicit cancellation is optional but recommended to release any reserved inventory immediately.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
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
    echo 'Exception when calling AgentCapabilitiesApi->cancelCheckout: ', $e->getMessage(), PHP_EOL;
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

# **cancelPurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 cancelPurchaseIntent($instructionId, $agenticCancelPurchaseIntentRequest)

Cancel a purchase intent

Cancel an existing purchase intent (instruction) identified by its instructionId. The agent calls this endpoint when the consumer decides to abandon the purchase before payment credentials have been used. Requires device information and assurance data for identity verification. Returns status CANCELLED (HTTP 200) on success, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required before cancellation can proceed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$instructionId = "instructionId_example"; // string | 
$agenticCancelPurchaseIntentRequest = new \CyberSource\Model\AgenticCancelPurchaseIntentRequest(); // \CyberSource\Model\AgenticCancelPurchaseIntentRequest | Unique identifier for the purchase intent instruction.

try {
    $result = $api_instance->cancelPurchaseIntent($instructionId, $agenticCancelPurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->cancelPurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**|  |
 **agenticCancelPurchaseIntentRequest** | [**\CyberSource\Model\AgenticCancelPurchaseIntentRequest**](../Model/AgenticCancelPurchaseIntentRequest.md)| Unique identifier for the purchase intent instruction. |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
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
    echo 'Exception when calling AgentCapabilitiesApi->completeCheckout: ', $e->getMessage(), PHP_EOL;
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

# **confirmTransactionEvents**
> \CyberSource\Model\AgenticConfirmTransactionEventsResponse202 confirmTransactionEvents($instructionId, $agenticConfirmTransactionEventsRequest)

Confirm transaction events

Confirm transaction events for a completed purchase. The agent calls this endpoint after the payment has been submitted to notify the Intelligent Commerce Connect of the transaction outcome. The request includes processor information (transaction type, status, approval codes), order details (shipping, tracking, product information), and merchant information. Returns HTTP 202 acknowledging receipt of the confirmation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticConfirmTransactionEventsRequest = new \CyberSource\Model\AgenticConfirmTransactionEventsRequest(); // \CyberSource\Model\AgenticConfirmTransactionEventsRequest | 

try {
    $result = $api_instance->confirmTransactionEvents($instructionId, $agenticConfirmTransactionEventsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->confirmTransactionEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticConfirmTransactionEventsRequest** | [**\CyberSource\Model\AgenticConfirmTransactionEventsRequest**](../Model/AgenticConfirmTransactionEventsRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticConfirmTransactionEventsResponse202**](../Model/AgenticConfirmTransactionEventsResponse202.md)

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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
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
    echo 'Exception when calling AgentCapabilitiesApi->createCheckoutSession: ', $e->getMessage(), PHP_EOL;
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

# **deactivateAgentKey**
> deactivateAgentKey($agentId, $keyId)

Deactivate a key

Deactivate a key (soft delete). Raises 404 if key not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyId = "keyId_example"; // string | Unique key identifier

try {
    $api_instance->deactivateAgentKey($agentId, $keyId);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->deactivateAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyId** | **string**| Unique key identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollCard**
> \CyberSource\Model\AgenticCardEnrollmentResponse200 enrollCard($agenticCardEnrollmentRequest)

Enroll a card

Enroll a payment card for agentic or e-commerce transactions. This is typically the first step in the Intelligent Commerce payment lifecycle — the agent calls this endpoint to register a consumer's card, creating a tokenized reference that can be used in subsequent purchase instructions and payment credential retrieval. Requires device information, consumer identity, billing details, and payment instrument references. Returns a status of ACTIVE (HTTP 200) if enrollment completes immediately, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required. Call this endpoint when a consumer wants to add a new payment card or when setting up a card for agentic payment flows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agenticCardEnrollmentRequest = new \CyberSource\Model\AgenticCardEnrollmentRequest(); // \CyberSource\Model\AgenticCardEnrollmentRequest | 

try {
    $result = $api_instance->enrollCard($agenticCardEnrollmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->enrollCard: ', $e->getMessage(), PHP_EOL;
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

# **getAgent**
> \CyberSource\Model\AgentRegistrationResponse201 getAgent($agentId)

Get an agent

[category 1 — Agent_Capabilities] Get agent by ID with all keys. Raises 404 if agent not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier

try {
    $result = $api_instance->getAgent($agentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->getAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |

### Return type

[**\CyberSource\Model\AgentRegistrationResponse201**](../Model/AgentRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 getAgentKey($agentId, $keyId)

Get a key by agent and key ID

Get a specific key by agent ID and key ID. Raises 404 if key not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyId = "keyId_example"; // string | Unique key identifier

try {
    $result = $api_instance->getAgentKey($agentId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->getAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyId** | **string**| Unique key identifier |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
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
    echo 'Exception when calling AgentCapabilitiesApi->getCheckoutSession: ', $e->getMessage(), PHP_EOL;
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

# **initiatePurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 initiatePurchaseIntent($agenticCreatePurchaseIntentRequest)

Initiate a purchase intent

Create a new purchase intent (instruction) for an agentic transaction. The agent calls this endpoint after a card has been enrolled to define what the consumer wants to buy. The request includes payment instrument references, device and assurance data, mandates (spending limits, merchant preferences, and product descriptions), and optional buyer information. Return an instructionId (HTTP 200) if the intent is created immediately, or PENDING (HTTP 202) with pendingEvents if cardholder authentication is required. The instructionId returned is used in all subsequent operations - update, cancel, retrieve credentials, and confirm transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agenticCreatePurchaseIntentRequest = new \CyberSource\Model\AgenticCreatePurchaseIntentRequest(); // \CyberSource\Model\AgenticCreatePurchaseIntentRequest | 

try {
    $result = $api_instance->initiatePurchaseIntent($agenticCreatePurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->initiatePurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agenticCreatePurchaseIntentRequest** | [**\CyberSource\Model\AgenticCreatePurchaseIntentRequest**](../Model/AgenticCreatePurchaseIntentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAgentKeys**
> \CyberSource\Model\ListAgentKeysResponse200 listAgentKeys($agentId, $page, $pageSize)

List keys for an agent

[category 1 — Agent_Capabilities] List all keys for a specific agent with pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$page = 1; // int | Page number (1-indexed)
$pageSize = 30; // int | Items per page (max 100)

try {
    $result = $api_instance->listAgentKeys($agentId, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->listAgentKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **page** | **int**| Page number (1-indexed) | [optional] [default to 1]
 **pageSize** | **int**| Items per page (max 100) | [optional] [default to 30]

### Return type

[**\CyberSource\Model\ListAgentKeysResponse200**](../Model/ListAgentKeysResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerAgent**
> \CyberSource\Model\AgentRegistrationResponse201 registerAgent($agentRequest)

Register an agent

Register a new AI agent in the VARS. Once registered, the agent can upload public keys that merchants and Visa services use to verify request signatures. Raises 409 if domain, contactEmail, or tokenRequestorId already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentRequest = new \CyberSource\Model\AgentRequest(); // \CyberSource\Model\AgentRequest | Agent registration request

try {
    $result = $api_instance->registerAgent($agentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->registerAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentRequest** | [**\CyberSource\Model\AgentRequest**](../Model/AgentRequest.md)| Agent registration request |

### Return type

[**\CyberSource\Model\AgentRegistrationResponse201**](../Model/AgentRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePaymentCredentials**
> \CyberSource\Model\AgenticRetrievePaymentCredentialsResponse200 retrievePaymentCredentials($instructionId, $agenticRetrievePaymentCredentialsRequest)

Retrieve payment credentials

Retrieve tokenized payment credentials for a purchase intent to complete the transaction at a merchant. The agent calls this endpoint after a purchase intent has been created and approved, providing transaction-level details including order information, merchant details, payment options, and production information. Returns COMPLETED (HTTP 200) with a signed payload containing encrypted payment credentials (authorization token and JWS-signed payload), or PENDING (HTTP 202) with pendingEvents if additional cardholder authentication is required. The signed payload is used by the merchant's payment processor to complete the transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticRetrievePaymentCredentialsRequest = new \CyberSource\Model\AgenticRetrievePaymentCredentialsRequest(); // \CyberSource\Model\AgenticRetrievePaymentCredentialsRequest | 

try {
    $result = $api_instance->retrievePaymentCredentials($instructionId, $agenticRetrievePaymentCredentialsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->retrievePaymentCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticRetrievePaymentCredentialsRequest** | [**\CyberSource\Model\AgenticRetrievePaymentCredentialsRequest**](../Model/AgenticRetrievePaymentCredentialsRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticRetrievePaymentCredentialsResponse200**](../Model/AgenticRetrievePaymentCredentialsResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ucpCancelCheckout**
> \CyberSource\Model\InlineResponse20113 ucpCancelCheckout($sessionId)

Cancel Checkout UCP

Cancels an active UCP checkout session. No charge is made.  This operation is idempotent — cancelling an already-cancelled session returns a successful response. Sessions also expire automatically after 30 minutes of inactivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to cancel.

try {
    $result = $api_instance->ucpCancelCheckout($sessionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->ucpCancelCheckout: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to complete.
$idempotencyKey = "a1b2c3d4-e5f6-7890-abcd-ef1234567890"; // string | **Strongly recommended.** A unique key that ensures this order is placed exactly once on retries. Lowercase per UCP spec.
$ucpCompleteCheckoutRequest = new \CyberSource\Model\UcpCompleteCheckoutRequest(); // \CyberSource\Model\UcpCompleteCheckoutRequest | UCP completion payload containing payment instrument and optional risk signals. If payment context was already provided in the Create or Update call, the body can be omitted. Risk signals are logged for fraud analysis and are not forwarded to the merchant.

try {
    $result = $api_instance->ucpCompleteCheckout($sessionId, $idempotencyKey, $ucpCompleteCheckoutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->ucpCompleteCheckout: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$ucpCreateCheckoutSessionRequest = new \CyberSource\Model\UcpCreateCheckoutSessionRequest(); // \CyberSource\Model\UcpCreateCheckoutSessionRequest | UCP checkout session creation payload containing line items, buyer details, currency, and optional payment, fulfillment, and discount information.
$idempotencyKey = "fc23729f-dc9b-4619-8742-2cf9d7bfdf1b"; // string | Client-generated unique key (UUID recommended) to ensure this request is processed exactly once. Lowercase per UCP specification.

try {
    $result = $api_instance->ucpCreateCheckoutSession($ucpCreateCheckoutSessionRequest, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->ucpCreateCheckoutSession: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to retrieve. Obtained from the `id` field in the Create Session response.
$ucpGetCheckoutSessionRequest = new \stdClass; // object | Empty request body.

try {
    $result = $api_instance->ucpGetCheckoutSession($sessionId, $ucpGetCheckoutSessionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->ucpGetCheckoutSession: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$sessionId = "sess_abc123"; // string | The unique identifier of the UCP checkout session to update.
$ucpUpdateCheckoutSessionRequest = new \CyberSource\Model\UcpUpdateCheckoutSessionRequest(); // \CyberSource\Model\UcpUpdateCheckoutSessionRequest | UCP session update payload. All fields are optional — only fields you include will be applied.
$idempotencyKey = "a1b2c3d4-e5f6-7890-abcd-ef1234567890"; // string | Client-generated unique key for idempotency. Lowercase per UCP spec.

try {
    $result = $api_instance->ucpUpdateCheckoutSession($sessionId, $ucpUpdateCheckoutSessionRequest, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->ucpUpdateCheckoutSession: ', $e->getMessage(), PHP_EOL;
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

# **updateAgent**
> \CyberSource\Model\AgentRegistrationResponse201 updateAgent($agentId, $agentUpdate)

Update an agent

[category 1 — Agent_Capabilities] Update agent information. Updatable fields are name, domain, description, contactEmail, and agentMetadata. Extra fields (e.g. tokenRequestorId, keys) will return 422 Validation Error. Raises 404 if agent not found, 403 if agent is deactivated, 409 if new domain or contactEmail already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$agentUpdate = new \CyberSource\Model\AgentUpdate(); // \CyberSource\Model\AgentUpdate | Agent update request

try {
    $result = $api_instance->updateAgent($agentId, $agentUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->updateAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **agentUpdate** | [**\CyberSource\Model\AgentUpdate**](../Model/AgentUpdate.md)| Agent update request |

### Return type

[**\CyberSource\Model\AgentRegistrationResponse201**](../Model/AgentRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgentKey**
> \CyberSource\Model\AddAgentKeyResponse201 updateAgentKey($agentId, $keyId, $keyUpdate)

Update a key

Update key information. Updatable fields are keyName, publicKey, algorithm, and expirationDate. Raises 404 if agent or key not found, 403 if agent or key is deactivated, 409 if new keyName already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$agentId = "agentId_example"; // string | Unique agent identifier
$keyId = "keyId_example"; // string | Unique key identifier
$keyUpdate = new \CyberSource\Model\KeyUpdate(); // \CyberSource\Model\KeyUpdate | Key update request

try {
    $result = $api_instance->updateAgentKey($agentId, $keyId, $keyUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->updateAgentKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| Unique agent identifier |
 **keyId** | **string**| Unique key identifier |
 **keyUpdate** | [**\CyberSource\Model\KeyUpdate**](../Model/KeyUpdate.md)| Key update request |

### Return type

[**\CyberSource\Model\AddAgentKeyResponse201**](../Model/AddAgentKeyResponse201.md)

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

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
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
    echo 'Exception when calling AgentCapabilitiesApi->updateCheckoutSession: ', $e->getMessage(), PHP_EOL;
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

# **updatePurchaseIntent**
> \CyberSource\Model\AgenticCreatePurchaseIntentResponse200 updatePurchaseIntent($instructionId, $agenticUpdatePurchaseIntentRequest)

Update a purchase intent

Update an existing purchase intent (instruction) identified by its instructionId. The agent calls this endpoint when the consumer modifies their order — for example, changing the quantity, updating mandates, switching payment instruments, or changing shipping details. The request body has the same structure as the initiate request. Returns the same instructionId (HTTP 200) on success, or PENDING (HTTP 202) with pendingEvents if additional cardholder authentication is required for the updated intent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\AgentCapabilitiesApi();
$instructionId = "instructionId_example"; // string | Unique identifier for the purchase intent instruction.
$agenticUpdatePurchaseIntentRequest = new \CyberSource\Model\AgenticUpdatePurchaseIntentRequest(); // \CyberSource\Model\AgenticUpdatePurchaseIntentRequest | 

try {
    $result = $api_instance->updatePurchaseIntent($instructionId, $agenticUpdatePurchaseIntentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentCapabilitiesApi->updatePurchaseIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructionId** | **string**| Unique identifier for the purchase intent instruction. |
 **agenticUpdatePurchaseIntentRequest** | [**\CyberSource\Model\AgenticUpdatePurchaseIntentRequest**](../Model/AgenticUpdatePurchaseIntentRequest.md)|  |

### Return type

[**\CyberSource\Model\AgenticCreatePurchaseIntentResponse200**](../Model/AgenticCreatePurchaseIntentResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

