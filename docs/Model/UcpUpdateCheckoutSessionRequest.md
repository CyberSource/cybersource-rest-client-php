# UcpUpdateCheckoutSessionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The session ID being updated. | [optional] 
**lineItems** | [**\CyberSource\Model\Iccv1checkoutsessionsLineItems[]**](Iccv1checkoutsessionsLineItems.md) | Replacement line item list. When provided, replaces the entire cart. | [optional] 
**buyer** | [**\CyberSource\Model\UcpUpdateCheckoutSessionBuyer**](UcpUpdateCheckoutSessionBuyer.md) |  | [optional] 
**currency** | **string** | ISO 4217 currency code for the session (e.g. &#x60;USD&#x60;, &#x60;EUR&#x60;). | [optional] 
**payment** | [**\CyberSource\Model\Iccv1UpdateCheckoutsessionsPayment**](Iccv1UpdateCheckoutsessionsPayment.md) |  | [optional] 
**fulfillment** | [**\CyberSource\Model\Iccv1UpdateCheckoutSessionsFulfillment**](Iccv1UpdateCheckoutSessionsFulfillment.md) |  | [optional] 
**discounts** | [**\CyberSource\Model\Iccv1UpdateCheckoutSessionsDiscounts**](Iccv1UpdateCheckoutSessionsDiscounts.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


