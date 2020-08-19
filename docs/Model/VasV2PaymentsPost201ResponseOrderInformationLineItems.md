# VasV2PaymentsPost201ResponseOrderInformationLineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taxDetails** | [**\CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationTaxDetails[]**](VasV2PaymentsPost201ResponseOrderInformationTaxDetails.md) |  | [optional] 
**jurisdiction** | [**\CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationJurisdiction[]**](VasV2PaymentsPost201ResponseOrderInformationJurisdiction.md) |  | [optional] 
**exemptAmount** | **string** | Exempt amount for the lineItem. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**taxableAmount** | **string** | Portion of the item amount that is taxable. | [optional] 
**taxAmount** | **string** | Total tax for the item. This value is the sum of all taxes applied to the item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


