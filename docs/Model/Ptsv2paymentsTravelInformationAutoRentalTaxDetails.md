# Ptsv2paymentsTravelInformationAutoRentalTaxDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Indicates the amount of tax based on the &#x60;type&#x60; field as described in the table below: | [optional] 
**rate** | **string** | Rate of VAT or other tax for the order.  Example 0.040 (&#x3D;4%)  Valid range: 0.01 to 0.99 (1% to 99%, with only whole percentage values accepted; values with additional decimal places will be truncated) | [optional] 
**applied** | **bool** | Flag that indicates whether the tax amount (&#x60;travelInformation.autoRental.taxDetails.amount&#x60;) is included in the request.  Possible values: - &#x60;false&#x60;: tax amount is not included in the request. - &#x60;true&#x60;:  tax amount is included in the request. | [optional] 
**exemptionCode** | **string** | Status code for exemption from sales and use tax. This field is a pass-through, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. | [optional] 
**taxType** | **string** | Different taxes the rental agency applies to the rental agreement such as tourist tax, airport tax, or rental tax. | [optional] 
**taxSummary** | **string** | Summary of all tax types | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


