# PtsV2PaymentsPost201ResponsePaymentInsightsInformationResponseInsights

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | Categorization of response message from processor  Possible Values: - &#x60;ISSUER_WILL_NEVER_APPROVE&#x60; - &#x60;ISSUER_CANNOT_APPROVE_AT_THIS_TIME&#x60; - &#x60;ISSUER_CANNOT_APPROVE_WITH_THESE_DETAILS&#x60; - &#x60;GENERIC_ERROR&#x60; - &#x60;PAYMENT_INSIGHTS_INTERNAL_ERROR&#x60; - &#x60;OTHERS&#x60; - &#x60;PAYMENT_INSIGHTS_RESPONSE_CATEGORY_MATCH_NOT_FOUND&#x60; | [optional] 
**categoryCode** | **string** | Categorization Code of response message from processor  Possible Values: - &#x60;01&#x60; : ISSUER_WILL_NEVER_APPROVE - &#x60;02&#x60; : ISSUER_CANNOT_APPROVE_AT_THIS_TIME - &#x60;03&#x60; : ISSUER_CANNOT_APPROVE_WITH_THESE_DETAILS - &#x60;04&#x60; : GENERIC_ERROR - &#x60;97&#x60; : PAYMENT_INSIGHTS_INTERNAL_ERROR - &#x60;98&#x60; : OTHERS - &#x60;99&#x60; : PAYMENT_INSIGHTS_RESPONSE_CATEGORY_MATCH_NOT_FOUND | [optional] 
**processorRawName** | **string** | Raw name of the processor used for the transaction processing, especially useful during acquirer swing to see which processor transaction settled with | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


