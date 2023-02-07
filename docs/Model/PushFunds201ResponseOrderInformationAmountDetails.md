# PushFunds201ResponseOrderInformationAmountDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalAmount** | **string** | Grand total for the order. This value cannot be negative. You can include a decimal point (.), but no other special characters. CyberSource truncates the amount to the correct number of decimal places.  Note For Visa Platform Conenct, FDC Compass, and Chase Paymentech processors, the maximum length for this field is 12 numbers.  Processor Amount Ranges: Visa Platform Connect: .01-9999999999.99  Mastercard Send: 1-9999999999.99  FDC Compass: .01- 9999999999.994  Chase Paymentech: .01-9999999999.99 | [optional] 
**currency** | **string** | Currency used for the order. Use the three-character ISO Standard Currency Codes | 
**settlementAmount** | **string** | This is a multicurrency field. It contains the transaction amount (field 4), converted to the Currency used to bill the cardholder’s account. This field is returned for OCT transactions. | [optional] 
**settlementCurrency** | **string** | This is a multicurrency-only field. It contains a 3-digit numeric code that identifies the currency used by the issuer to bill the cardholder&#39;s account. This field is returned for OCT transactions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


