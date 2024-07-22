# Ptsv2paymentsOrderInformationAmountDetailsTaxDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Indicates the type of tax data for the _taxDetails_ object.  Possible values:  - &#x60;alternate&#x60; - &#x60;local&#x60; - &#x60;national&#x60; - &#x60;vat&#x60; - &#x60;other&#x60; - &#x60;green&#x60; | [optional] 
**amount** | **string** | Indicates the amount of tax based on the &#x60;type&#x60; field as described in the table below:  | type      | type description | | ------------- |:-------------:| | &#x60;alternate&#x60; | Total amount of alternate tax for the order. | | &#x60;local&#x60;     | Sales tax for the order. | | &#x60;national&#x60;  | National tax for the order. | | &#x60;vat&#x60;       | Total amount of value added tax (VAT) included in the order. | | &#x60;other&#x60;     | Other tax. | | &#x60;green&#x60;     | Green tax amount for Korean Processing. | | [optional] 
**rate** | **string** | Rate of VAT or other tax for the order.  Example 0.040 (&#x3D;4%)  Valid range: 0.01 to 0.99 (1% to 99%, with only whole percentage values accepted; values with additional decimal places will be truncated) | [optional] 
**code** | **string** | Type of tax being applied to the item.  #### FDC Nashville Global - &#x60;alternate_tax_type_applied&#x60; - &#x60;alternate_tax_type_identifier&#x60;  #### Worldpay VAP - &#x60;alternate_tax_type_identifier&#x60;  #### RBS WorldPay Atlanta - &#x60;tax_type_applied&#x60;  #### TSYS Acquiring Solutions - &#x60;tax_type_applied&#x60; - &#x60;local_tax_indicator&#x60;  #### Chase Paymentech Solutions - &#x60;tax_type_applied&#x60;  #### Elavon Americas - &#x60;local_tax_indicator&#x60;  #### FDC Compass - &#x60;tax_type_applied&#x60;  #### OmniPay Direct - &#x60;local_tax_indicator&#x60; | [optional] 
**taxId** | **string** | Your tax ID number to use for the alternate tax amount. Required if you set alternate tax amount to any value, including zero. You may send this field without sending alternate tax amount. | [optional] 
**applied** | **bool** | Flag that indicates whether the alternate tax amount (&#x60;orderInformation.amountDetails.taxDetails[].amount&#x60;) is included in the request.  Possible values: - &#x60;false&#x60;: alternate tax amount is not included in the request. - &#x60;true&#x60;: alternate tax amount is included in the request. | [optional] 
**exemptionCode** | **string** | Status code for exemption from sales and use tax. This field is a pass-through, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


