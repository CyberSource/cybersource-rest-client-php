# InlineResponse20112LineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ACG-assigned line item identifier. | [optional] 
**item** | [**\CyberSource\Model\InlineResponse20112Item**](InlineResponse20112Item.md) |  | [optional] 
**baseAmount** | **int** | Unit price × quantity before discounts, in minor units. | [optional] 
**discount** | **int** | Discount amount for this line item, in minor units. | [optional] 
**subtotal** | **int** | base_amount minus discount, in minor units. | [optional] 
**tax** | **int** | Tax on this line item, in minor units. | [optional] 
**total** | **int** | subtotal plus tax, in minor units. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


