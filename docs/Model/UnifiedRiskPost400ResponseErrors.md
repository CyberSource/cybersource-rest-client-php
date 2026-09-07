# UnifiedRiskPost400ResponseErrors

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The action that encountered an error (e.g., DECISION, FEATURESPACE, RISK_INSIGHTS, CONSUMER_AUTHENTICATION, VEAS).  Possible values: - DECISION - FEATURESPACE - RISK_INSIGHTS - CONSUMER_AUTHENTICATION - VEAS | [optional] 
**status** | **string** | Indicates a FAILURE or PARTIAL_FAILURE. | [optional] 
**reason** | **string** | Machine-readable reason code explaining why the action failed (e.g., SYSTEM_ERROR, INVALID_REQUEST, SERVICE_UNAVAILABLE, TIMEOUT). | [optional] 
**message** | **string** | Human-readable error message providing additional context about the failure for this specific action. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


