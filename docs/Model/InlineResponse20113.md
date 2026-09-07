# InlineResponse20113

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ucp** | [**\CyberSource\Model\InlineResponse20113Ucp**](InlineResponse20113Ucp.md) |  | [optional] 
**id** | **string** | Unique UCP session identifier. Required for all subsequent UCP calls (update, complete, cancel). | [optional] 
**status** | **string** | Current lifecycle state of the session. - &#x60;active&#x60; — open and modifiable - &#x60;completed&#x60; — order placed, immutable - &#x60;cancelled&#x60; — abandoned, no charge made   Possible values: - active - completed - cancelled | [optional] 
**currency** | **string** | ISO 4217 currency code for this session (e.g. &#x60;USD&#x60;, &#x60;EUR&#x60;). | [optional] 
**buyer** | [**\CyberSource\Model\UcpCheckoutSessionResponseBuyer**](UcpCheckoutSessionResponseBuyer.md) |  | [optional] 
**lineItems** | [**\CyberSource\Model\InlineResponse20113LineItems[]**](InlineResponse20113LineItems.md) | Cart line items with merchant-confirmed pricing. | [optional] 
**totals** | [**\CyberSource\Model\Iccv1checkoutsessionsFulfillmentTotals[]**](Iccv1checkoutsessionsFulfillmentTotals.md) | Order cost breakdown. Each entry represents one total type (subtotal, tax, shipping, discount, or grand total). Amounts are in **cents** (not micros). | [optional] 
**fulfillment** | [**\CyberSource\Model\InlineResponse20113Fulfillment**](InlineResponse20113Fulfillment.md) |  | [optional] 
**payment** | [**\CyberSource\Model\InlineResponse20113Payment**](InlineResponse20113Payment.md) |  | [optional] 
**discounts** | [**\CyberSource\Model\InlineResponse20113Discounts**](InlineResponse20113Discounts.md) |  | [optional] 
**order** | [**\CyberSource\Model\InlineResponse20113Order**](InlineResponse20113Order.md) |  | [optional] 
**links** | [**\CyberSource\Model\InlineResponse20112Links[]**](InlineResponse20112Links.md) | Related resource links (e.g. terms of use, privacy policy). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


