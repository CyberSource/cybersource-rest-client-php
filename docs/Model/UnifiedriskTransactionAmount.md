# UnifiedriskTransactionAmount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | Transaction amount in the specified currency | [optional] 
**currency** | **string** | ISO 4217 3-letter currency code | [optional] 
**baseCurrency** | **string** | Base currency for multi-currency transactions | [optional] 
**baseValue** | **string** | Amount in base currency | [optional] 
**merchantCurrency** | **string** | ISO 4217 3-letter code for the merchant&#39;s local currency used to express the transaction amount (e.g., EUR for EU merchants). Used for cross-currency risk analysis | [optional] 
**merchantValue** | **string** | Transaction amount expressed in the merchant&#39;s local currency, used for cross-currency comparison and risk threshold evaluation against merchant&#39;s baseline | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


