# PblPaymentLinksAllGet200ResponseOrderInformationLineItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productName** | **string** | For an authorization or capture transaction (&#x60;processingOptions.capture&#x60; is &#x60;true&#x60; or &#x60;false&#x60;), this field is required when &#x60;orderInformation.lineItems[].productCode&#x60; is not &#x60;default&#x60; or one of the other values that are related to shipping and/or handling.  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes. | [optional] 
**unitPrice** | **string** | Per-item price of the product. This value for this field cannot be negative.  You must include either this field or the request-level field &#x60;orderInformation.amountDetails.totalAmount&#x60; in your request.  You can include a decimal point (.), but you cannot include any other special characters. The value is truncated to the correct number of decimal places.  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either the 1st line item in the order and this field, or the request-level field &#x60;orderInformation.amountDetails.totalAmount&#x60; in your request.  #### Tax Calculation Required field for U.S., Canadian, international and value added taxes.  #### Zero Amount Authorizations If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen.  #### Maximum Field Lengths For GPN and JCN Gateway: Decimal (10) All other processors: Decimal (15) | [optional] 
**productDescription** | **string** | Brief description of item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


