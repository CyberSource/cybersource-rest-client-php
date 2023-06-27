# PtsV2PaymentsPost201ResponseEmbeddedActionsCAPTURE

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the submitted transaction.  Possible values:  - PENDING | [optional] 
**reason** | **string** | The reason of the status.  Possible values:  - MISSING_FIELD  - INVALID_DATA  - DUPLICATE_REQUEST  - INVALID_MERCHANT_CONFIGURATION  - EXCEEDS_AUTH_AMOUNT  - AUTH_ALREADY_REVERSED  - TRANSACTION_ALREADY_SETTLED  - INVALID_AMOUNT  - MISSING_AUTH  - TRANSACTION_ALREADY_REVERSED_OR_SETTLED  - NOT_SUPPORTED | [optional] 
**message** | **string** | The detail message related to the status and reason listed above. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


