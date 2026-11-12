# UcpCheckoutSessionResponseLineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ACG-assigned line item identifier. | [optional] 
**item** | [**\CyberSource\Model\UcpCheckoutSessionResponseItem**](UcpCheckoutSessionResponseItem.md) |  | [optional] 
**quantity** | **int** | Number of units in this line item. Minimum 1. | [optional] 
**totals** | [**\CyberSource\Model\Iccv1checkoutsessionsFulfillmentTotals[]**](Iccv1checkoutsessionsFulfillmentTotals.md) | Per-line-item cost breakdown (subtotal, tax, etc.). Amounts in cents. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


