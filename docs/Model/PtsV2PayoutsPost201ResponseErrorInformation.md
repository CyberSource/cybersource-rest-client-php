# PtsV2PayoutsPost201ResponseErrorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | The reason of the status.  Possible values:  - EXPIRED_CARD  - PROCESSOR_DECLINED  - STOLEN_LOST_CARD  - UNAUTHORIZED_CARD  - CVN_NOT_MATCH  - INVALID_CVN  - BLACKLISTED_CUSTOMER  - INVALID_ACCOUNT  - GENERAL_DECLINE  - RISK_CONTROL_DECLINE  - PROCESSOR_RISK_CONTROL_DECLINE  - ALLOWABLE_PIN_RETRIES_EXCEEDED  - PROCESSOR_ERROR | [optional] 
**message** | **string** | The detail message related to the status and reason listed above. | [optional] 
**details** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformationDetails[]**](PtsV2PaymentsPost201ResponseErrorInformationDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


