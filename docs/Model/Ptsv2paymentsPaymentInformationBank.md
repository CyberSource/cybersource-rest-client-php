# Ptsv2paymentsPaymentInformationBank

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationBankAccount**](Ptsv2paymentsPaymentInformationBankAccount.md) |  | [optional] 
**routingNumber** | **string** | Bank routing number. This is also called the _transit number_. | [optional] 
**iban** | **string** | International Bank Account Number (IBAN) for the bank account. For some countries you can provide this number instead of the traditional bank account information. You can use this field only when scoring a direct debit transaction. | [optional] 
**swiftCode** | **string** | Bank&#39;s SWIFT code. You can use this field only when scoring a direct debit transaction. Required only for crossborder transactions. | [optional] 
**code** | **string** | Bank code of the consumer&#39;s account | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


