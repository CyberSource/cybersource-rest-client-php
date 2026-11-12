# AcpUpdateCheckoutSessionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\CyberSource\Model\Iccv1checkoutSessionsItems[]**](Iccv1checkoutSessionsItems.md) | Replacement cart item list. When provided, the entire cart is replaced with this array. To add a single item, include all existing items plus the new one. | [optional] 
**buyer** | [**\CyberSource\Model\AcpUpdateCheckoutSessionBuyer**](AcpUpdateCheckoutSessionBuyer.md) |  | [optional] 
**fulfillmentAddress** | [**\CyberSource\Model\Iccv1UpdateCheckoutSessionsFulfillmentAddress**](Iccv1UpdateCheckoutSessionsFulfillmentAddress.md) |  | [optional] 
**fulfillmentOptionId** | **string** | Optional. ID of the selected fulfillment option from &#x60;fulfillment_options&#x60; in the session response. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


