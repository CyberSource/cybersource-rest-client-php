# PtsV2PaymentsPost201ResponseProcessingInformationBankTransferOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settlementMethod** | **string** | Method used for settlement.  Possible values: - &#x60;A&#x60;: Automated Clearing House (default for credits and for transactions using Canadian dollars) - &#x60;F&#x60;: Facsimile draft (U.S. dollars only) - &#x60;B&#x60;: Best possible (U.S. dollars only) (default if the field has not already been configured for your merchant ID) | [optional] 
**fraudScreeningLevel** | **string** | Level of fraud screening.  Possible values: - &#x60;1&#x60;: Validation — default if the field has not already been configured for your merchant ID - &#x60;2&#x60;: Verification | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


