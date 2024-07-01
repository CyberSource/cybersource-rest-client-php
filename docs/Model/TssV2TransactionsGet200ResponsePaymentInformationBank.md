# TssV2TransactionsGet200ResponsePaymentInformationBank

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**routingNumber** | **string** | Bank routing number. This is also called the transit number. | [optional] 
**branchCode** | **string** | Code used to identify the branch of the customer&#39;s bank. Required for some countries if you do not or are not allowed to provide the IBAN. Use this field only when scoring a direct debit transaction. | [optional] 
**swiftCode** | **string** | Bank&#39;s SWIFT code. You can use this field only when scoring a direct debit transaction. Required only for crossborder transactions. | [optional] 
**bankCode** | **string** | Country-specific code used to identify the customer&#39;s bank. Required for some countries if you do not or are not allowed to provide the IBAN instead. You can use this field only when scoring a direct debit transaction. | [optional] 
**iban** | **string** | International Bank Account Number (IBAN) for the bank account. For some countries you can provide this number instead of the traditional bank account information. You can use this field only when scoring a direct debit transaction. | [optional] 
**account** | [**\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBankAccount**](TssV2TransactionsGet200ResponsePaymentInformationBankAccount.md) |  | [optional] 
**mandate** | [**\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBankMandate**](TssV2TransactionsGet200ResponsePaymentInformationBankMandate.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


