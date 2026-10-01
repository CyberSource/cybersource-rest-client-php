# InlineResponse20112

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this checkout session. Required for all subsequent calls (update, complete, cancel). | 
**status** | **string** | Current lifecycle state of the session per ACP spec: - &#x60;not_ready_for_payment&#x60; — session is open but not yet ready - &#x60;ready_for_payment&#x60; — session is ready to be completed - &#x60;completed&#x60; — order has been placed; session is immutable - &#x60;canceled&#x60; — session was abandoned; no charge was made   Possible values: - not_ready_for_payment - ready_for_payment - completed - canceled | 
**currency** | **string** | ISO 4217 lowercase currency code for this session. | 
**lineItems** | [**\CyberSource\Model\InlineResponse20112LineItems[]**](InlineResponse20112LineItems.md) | Line items with merchant-confirmed pricing. | 
**fulfillmentAddress** | [**\CyberSource\Model\InlineResponse20112FulfillmentAddress**](InlineResponse20112FulfillmentAddress.md) |  | [optional] 
**fulfillmentOptions** | [**\CyberSource\Model\InlineResponse20112FulfillmentOptions[]**](InlineResponse20112FulfillmentOptions.md) | Available fulfillment methods with pricing. | 
**fulfillmentOptionId** | **string** | ID of the currently selected fulfillment option. | [optional] 
**totals** | [**\CyberSource\Model\InlineResponse20112Totals[]**](InlineResponse20112Totals.md) | Order cost breakdown as an array of typed total lines. All amounts in minor units (cents). | 
**buyer** | [**\CyberSource\Model\AcpCheckoutSessionResponseBuyer**](AcpCheckoutSessionResponseBuyer.md) |  | [optional] 
**paymentProvider** | [**\CyberSource\Model\InlineResponse20112PaymentProvider**](InlineResponse20112PaymentProvider.md) |  | [optional] 
**messages** | [**\CyberSource\Model\InlineResponse20112Messages[]**](InlineResponse20112Messages.md) | Informational or error messages from the merchant backend. | 
**links** | [**\CyberSource\Model\InlineResponse20112Links[]**](InlineResponse20112Links.md) | Related resource links from the merchant (e.g. terms of use, privacy policy, seller shop policies). | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


