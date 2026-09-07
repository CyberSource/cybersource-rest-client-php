# UnifiedriskAuthorization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**indicator** | **bool** | Indicates whether the transaction has passed authorization rules. True means authorization was successful; false means authorization failed or was bypassed | [optional] 
**phase** | **string** | The authorizationPhase indicates which system was responsible for authorising the transaction. This is typically only available for advice messages. This field is particularly relevant when a Stand-In | [optional] 
**ruleOverride** | **bool** | Indicates that authorisation rule processing upstream of ARIC was bypassed or checks were ignored during authorisation processing: true – Authorisation Rules were bypassed  false – Authorisation Rules | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


