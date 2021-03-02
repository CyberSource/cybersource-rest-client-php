# RiskV1DecisionsPost201ResponseErrorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | The reason of the status.  Possible values:  - &#x60;EXPIRED_CARD&#x60;  - &#x60;SCORE_EXCEEDS_THRESHOLD&#x60;  - &#x60;DECISION_PROFILE_REVIEW&#x60;  - &#x60;DECISION_PROFILE_REJECT&#x60;  - &#x60;CONSUMER_AUTHENTICATION_REQUIRED&#x60;  - &#x60;INVALID_MERCHANT_CONFIGURATION&#x60;  - &#x60;CONSUMER_AUTHENTICATION_FAILED&#x60;  - &#x60;DECISION_PROFILE_CHALLENGE&#x60; | [optional] 
**message** | **string** | The detail message related to the status and reason listed above. | [optional] 
**details** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformationDetails[]**](PtsV2PaymentsPost201ResponseErrorInformationDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


