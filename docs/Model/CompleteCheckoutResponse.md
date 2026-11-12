# CompleteCheckoutResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The checkout session identifier. | 
**status** | **string** | Will always be &#x60;completed&#x60; on a successful response.  Possible values: - completed | 
**currency** | **string** | ISO 4217 lowercase currency code. | 
**buyer** | [**\CyberSource\Model\AcpCompleteCheckoutResponseBuyer**](AcpCompleteCheckoutResponseBuyer.md) |  | 
**lineItems** | [**\CyberSource\Model\CheckoutSessionResponseLineItems[]**](CheckoutSessionResponseLineItems.md) | Final line items with confirmed pricing. | 
**fulfillmentAddress** | [**\CyberSource\Model\CompleteCheckoutResponseFulfillmentAddress**](CompleteCheckoutResponseFulfillmentAddress.md) |  | [optional] 
**fulfillmentOptions** | [**\CyberSource\Model\CheckoutSessionResponseFulfillmentOptions[]**](CheckoutSessionResponseFulfillmentOptions.md) |  | 
**fulfillmentOptionId** | **string** | ID of the selected fulfillment option. | 
**totals** | [**\CyberSource\Model\CheckoutSessionResponseTotals[]**](CheckoutSessionResponseTotals.md) | Final order totals as typed total lines. All amounts in minor units (cents). | 
**order** | [**\CyberSource\Model\CompleteCheckoutResponseOrder**](CompleteCheckoutResponseOrder.md) |  | 
**messages** | [**\CyberSource\Model\CheckoutSessionResponseMessages[]**](CheckoutSessionResponseMessages.md) | Informational or error messages from the merchant backend. | 
**links** | [**\CyberSource\Model\CheckoutSessionResponseLinks[]**](CheckoutSessionResponseLinks.md) | Related resource links from the merchant (e.g. terms of use, privacy policy). | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


