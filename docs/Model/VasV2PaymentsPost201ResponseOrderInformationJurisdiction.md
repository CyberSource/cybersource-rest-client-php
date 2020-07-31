# VasV2PaymentsPost201ResponseOrderInformationJurisdiction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of tax jurisdiction for the item. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;.  Possible values: - &#x60;city&#x60; - &#x60;county&#x60; - &#x60;state&#x60; - &#x60;country&#x60; - &#x60;special&#x60; | [optional] 
**taxName** | **string** | Name of the jurisdiction tax for the item. For example, CA State Tax. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**taxAmount** | **string** | Jurisdiction tax amount for the item. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**taxable** | **string** | Jurisdiction taxable amount for the item, not including product level exemptions. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**name** | **string** | Free-text description of the jurisdiction for the item. For example, San Mateo County. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**code** | **string** | Jurisdiction code assigned by the tax provider. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**rate** | **string** | Jurisdiction tax rate for the item. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**region** | **string** | Free-text description of the jurisdiction region for the item. For example, CA (California State) or GB (Great Britain). Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 
**country** | **string** | Tax jurisdiction country for the item. Returned only if the &#x60;taxInformation.showTaxPerLineItem&#x60; field is set to &#x60;Yes&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


