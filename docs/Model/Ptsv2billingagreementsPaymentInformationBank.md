# Ptsv2billingagreementsPaymentInformationBank

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\CyberSource\Model\Ptsv2billingagreementsPaymentInformationBankAccount**](Ptsv2billingagreementsPaymentInformationBankAccount.md) |  | [optional] 
**iban** | **string** | International Bank Account Number (IBAN). #### SEPA Required for mandates services | [optional] 
**swiftCode** | **string** | Bank&#39;s SWIFT code. You can use this field only when scoring a direct debit transaction. #### BACS Required for mandates services | [optional] 
**scheme** | **string** | The scheme that sets the rules for the direct debit process. Possible values:   - SEPA   - BACS #### SEPA/BACS Required for mandates services | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


