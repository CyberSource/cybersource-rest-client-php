# UnifiedriskPaymentBankAccountCreditLimit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **float** | Credit limit on account | [optional] 
**currency** | **string** | Currency of credit limit | [optional] 
**baseCurrency** | **string** | 3 letter ISO 4217 currency code, such as GBP, USD or EUR. A complete list of codes can be found at \&quot;https://www.iso.org/iso-4217-currency-codes.html\&quot; The baseCurrency (the currency the baseValue is ex | [optional] 
**baseValue** | **float** | Value of transaction expressed in the currency defined in the baseCurrency field. | [optional] 
**merchantCurrency** | **string** | ISO 4217 3-letter code for the merchant&#39;s local currency used to express the credit limit amount (e.g., EUR for EU merchants) | [optional] 
**merchantValue** | **float** | Credit limit amount expressed in the merchant&#39;s local currency, used for utilization ratio calculations and cross-currency risk assessment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


