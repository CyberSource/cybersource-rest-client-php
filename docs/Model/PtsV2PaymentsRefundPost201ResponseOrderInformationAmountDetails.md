# PtsV2PaymentsRefundPost201ResponseOrderInformationAmountDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settlementAmount** | **string** | This is a multicurrency field. It contains the transaction amount (field 4), converted to the Currency used to bill the cardholder&#39;s account. This field is returned for OCT transactions. | [optional] 
**settlementCurrency** | **string** | This is a multicurrency-only field. It contains a 3-digit numeric code that identifies the currency used by the issuer to bill the cardholder&#39;s account. This field is returned for OCT transactions. | [optional] 
**exchangeRate** | **string** | Exchange rate returned by the DCC service. Includes a decimal point and a maximum of 4 decimal places. | [optional] 
**foreignAmount** | **string** | Set this field to the converted amount that was returned by the DCC provider. | [optional] 
**foreignCurrency** | **string** | Set this field to the converted amount that was returned by the DCC provider. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


