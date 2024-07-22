# Invoicingv2invoicesOrderInformationAmountDetailsTaxDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Indicates the type of tax data for the _taxDetails_ object.  Possible values:  - &#x60;alternate&#x60; - &#x60;local&#x60; - &#x60;national&#x60; - &#x60;vat&#x60; - &#x60;other&#x60; - &#x60;green&#x60; | [optional] 
**amount** | **string** | Indicates the amount of tax based on the &#x60;type&#x60; field as described in the table below:  | type      | type description | | ------------- |:-------------:| | &#x60;alternate&#x60; | Total amount of alternate tax for the order. | | &#x60;local&#x60;     | Sales tax for the order. | | &#x60;national&#x60;  | National tax for the order. | | &#x60;vat&#x60;       | Total amount of value added tax (VAT) included in the order. | | &#x60;other&#x60;     | Other tax. | | &#x60;green&#x60;     | Green tax amount for Korean Processing. | | [optional] 
**rate** | **string** | Rate of VAT or other tax for the order.  Example 0.040 (&#x3D;4%)  Valid range: 0.01 to 0.99 (1% to 99%, with only whole percentage values accepted; values with additional decimal places will be truncated) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


