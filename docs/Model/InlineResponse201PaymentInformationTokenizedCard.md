# InlineResponse201PaymentInformationTokenizedCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prefix** | **string** | First six digits of token. CyberSource includes this field in the reply message when it decrypts the payment blob for the tokenized transaction. | [optional] 
**suffix** | **string** | Last four digits of token. CyberSource includes this field in the reply message when it decrypts the payment blob for the tokenized transaction. | [optional] 
**type** | **string** | Type of card to authorize. - 001 Visa - 002 Mastercard - 003 Amex - 004 Discover | [optional] 
**assuranceLevel** | **string** | Confidence level of the tokenization. This value is assigned by the token service provider.  &#x60;Note&#x60; This field is supported only for **CyberSource through VisaNet** and **FDC Nashville Global**. | [optional] 
**expirationMonth** | **string** | Two-digit month in which the payment network token expires. &#x60;Format: MM&#x60;. Possible values: 01 through 12. | [optional] 
**expirationYear** | **string** | Four-digit year in which the payment network token expires. &#x60;Format: YYYY&#x60;. | [optional] 
**requestorId** | **string** | Value that identifies your business and indicates that the cardholderâ€™s account number is tokenized. This value is assigned by the token service provider and is unique within the token service providerâ€™s database.  &#x60;Note&#x60; This field is supported only for **CyberSource through VisaNet** and **FDC Nashville Global**. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


