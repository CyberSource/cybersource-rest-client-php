# UnifiedriskAcquirerMerchantAccountSecurityAmount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**baseCurrency** | **string** | The primary reference currency used for security deposit or holdback amounts, expressed as an ISO 4217 3-letter currency code (e.g., USD, EUR, GBP) | [optional] 
**baseValue** | **int** | The monetary value of the security deposit or holdback amount expressed in the base currency, typically in minor units (e.g., cents) | [optional] 
**currency** | **string** | The transaction currency in which the security amount is collected or held, expressed as an ISO 4217 3-letter currency code | [optional] 
**merchantCurrency** | **string** | The merchant&#39;s local or preferred currency for expressing the security amount, expressed as an ISO 4217 3-letter currency code | [optional] 
**merchantValue** | **int** | The security deposit or holdback amount expressed in the merchant&#39;s local currency, in minor units | [optional] 
**value** | **int** | The security deposit or holdback amount in the transaction currency, in minor units (e.g., cents) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


