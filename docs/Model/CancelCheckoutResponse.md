# CancelCheckoutResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The checkout session identifier. | 
**status** | **string** | Will always be &#x60;canceled&#x60; on a successful response.  Possible values: - canceled | 
**currency** | **string** | ISO 4217 lowercase currency code. | 
**buyer** | [**\CyberSource\Model\AcpCheckoutSessionResponseBuyer**](AcpCheckoutSessionResponseBuyer.md) |  | [optional] 
**lineItems** | [**\CyberSource\Model\CheckoutSessionResponseLineItems[]**](CheckoutSessionResponseLineItems.md) | Line items with merchant-confirmed pricing. | 
**fulfillmentAddress** | [**\CyberSource\Model\CheckoutSessionResponseFulfillmentAddress**](CheckoutSessionResponseFulfillmentAddress.md) |  | [optional] 
**fulfillmentOptions** | [**\CyberSource\Model\CheckoutSessionResponseFulfillmentOptions[]**](CheckoutSessionResponseFulfillmentOptions.md) | Available fulfillment methods with pricing. | 
**fulfillmentOptionId** | **string** | ID of the currently selected fulfillment option. | [optional] 
**totals** | [**\CyberSource\Model\CheckoutSessionResponseTotals[]**](CheckoutSessionResponseTotals.md) | Order cost breakdown as typed total lines. All amounts in minor units (cents). | 
**messages** | [**\CyberSource\Model\CheckoutSessionResponseMessages[]**](CheckoutSessionResponseMessages.md) | Informational or error messages from the merchant backend. | 
**links** | [**\CyberSource\Model\CheckoutSessionResponseLinks[]**](CheckoutSessionResponseLinks.md) | Related resource links from the merchant (e.g. terms of use, privacy policy). | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


