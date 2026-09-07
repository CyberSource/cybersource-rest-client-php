# InlineResponse20018

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The checkout session identifier. | [optional] 
**status** | **string** | Will always be &#x60;canceled&#x60; on a successful response.  Possible values: - canceled | [optional] 
**currency** | **string** | ISO 4217 lowercase currency code. | [optional] 
**buyer** | [**\CyberSource\Model\AcpCheckoutSessionResponseBuyer**](AcpCheckoutSessionResponseBuyer.md) |  | [optional] 
**lineItems** | [**\CyberSource\Model\InlineResponse20112LineItems[]**](InlineResponse20112LineItems.md) | Line items with merchant-confirmed pricing. | [optional] 
**fulfillmentAddress** | [**\CyberSource\Model\InlineResponse20017FulfillmentAddress**](InlineResponse20017FulfillmentAddress.md) |  | [optional] 
**fulfillmentOptions** | [**\CyberSource\Model\InlineResponse20112FulfillmentOptions[]**](InlineResponse20112FulfillmentOptions.md) | Available fulfillment methods with pricing. | [optional] 
**fulfillmentOptionId** | **string** | ID of the currently selected fulfillment option. | [optional] 
**totals** | [**\CyberSource\Model\InlineResponse20112Totals[]**](InlineResponse20112Totals.md) | Order cost breakdown as typed total lines. All amounts in minor units (cents). | [optional] 
**messages** | [**\CyberSource\Model\InlineResponse20112Messages[]**](InlineResponse20112Messages.md) | Informational or error messages from the merchant backend. | [optional] 
**links** | [**\CyberSource\Model\InlineResponse20112Links[]**](InlineResponse20112Links.md) | Related resource links from the merchant (e.g. terms of use, privacy policy). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


