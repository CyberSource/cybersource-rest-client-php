# InlineResponse2014OrderInformationAmountDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorizedAmount** | **string** | Amount that was authorized. | [optional] 
**currency** | **string** | Currency used for the order. Use the three-character ISO Standard Currency Codes. | [optional] 
**exchangeRate** | **string** | The rate of conversion of the currency given in the request. | [optional] 
**totalAmount** | **string** | Grand total for the order. This value cannot be negative. You can include a decimal point (.), but no other special characters. CyberSource truncates the amount to the correct number of decimal places. | [optional] 
**settlementAmount** | **string** | This is a multicurrency field. It contains the transaction amount, converted to the currency used to bill the cardholder&#39;s account. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


