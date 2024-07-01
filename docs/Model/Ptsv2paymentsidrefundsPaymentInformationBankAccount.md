# Ptsv2paymentsidrefundsPaymentInformationBankAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Account type.  Possible values:  - **C**: Checking.  - **G**: General ledger. This value is supported only on Wells Fargo ACH.  - **S**: Savings (U.S. dollars only).  - **X**: Corporate checking (U.S. dollars only). | [optional] 
**number** | **string** | Account number.  When processing encoded account numbers, use this field for the encoded account number. | [optional] 
**encoderId** | **string** | Identifier for the bank that provided the customer&#39;s encoded account number.  To obtain the bank identifier, contact your processor. | [optional] 
**checkNumber** | **string** | Check number.  Chase Paymentech Solutions - Optional. CyberSource ACH Service - Not used. RBS WorldPay Atlanta - Optional on debits. Required on credits. TeleCheck - Strongly recommended on debit requests. Optional on credits. | [optional] 
**checkImageReferenceNumber** | **string** | Image reference number associated with the check. You cannot include any special characters. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


