# Ptsv2paymentsRiskInformationBuyerHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerAccount** | [**\CyberSource\Model\Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccount**](Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccount.md) |  | [optional] 
**accountHistory** | [**\CyberSource\Model\Ptsv2paymentsRiskInformationBuyerHistoryAccountHistory**](Ptsv2paymentsRiskInformationBuyerHistoryAccountHistory.md) |  | [optional] 
**accountPurchases** | **int** | Number of purchases with this cardholder account during the previous six months. Recommended for Discover ProtectBuy. | [optional] 
**addCardAttempts** | **int** | Number of add card attempts in the last 24 hours. Recommended for Discover ProtectBuy. | [optional] 
**priorSuspiciousActivity** | **bool** | Indicates whether the merchant experienced suspicious activity (including previous fraud) on the account. Recommended for Discover ProtectBuy. | [optional] 
**paymentAccountHistory** | **string** | This only applies for NEW_ACCOUNT and EXISTING_ACCOUNT in creationHistory. Possible values are: - PAYMENT_ACCOUNT_EXISTS - PAYMENT_ACCOUNT_ADDED_NOW | [optional] 
**paymentAccountDate** | **int** | Date applicable only for PAYMENT_ACCOUNT_EXISTS in paymentAccountHistory | [optional] 
**transactionCountDay** | **int** | Number of transaction (successful or abandoned) for this cardholder account within the last 24 hours. Recommended for Discover ProtectBuy. | [optional] 
**transactionCountYear** | **int** | Number of transaction (successful or abandoned) for this cardholder account within the last year. Recommended for Discover ProtectBuy. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


