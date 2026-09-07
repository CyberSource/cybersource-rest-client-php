# UnifiedriskRiskAssessmentBuyerHistoryCustomerAccountAlertnateAuthentication

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticationMethod** | **string** | Method used for alternate authentication during the current session (e.g., FRICTIONLESS, OTP, BIOMETRIC, PUSH_NOTIFICATION). Used as a risk signal in the 3DS flow | [optional] 
**authenticationDate** | **string** | Date and time of the alternate authentication event in ISO 8601 format. Recency of authentication affects risk scoring and challenge exemption decisions | [optional] 
**authenticationData** | **string** | Opaque data payload from the alternate authentication process (e.g., signed assertion, biometric template reference). Value is issuer or method specific | [optional] 
**priorAuthenticationMethod** | **string** | Authentication method used in the most recent prior authentication for this account (e.g., OTP, PASSWORD, BIOMETRIC). Provides historical authentication context | [optional] 
**priorAuthenticationDate** | **string** | Date and time of the most recent prior authentication event in ISO 8601 format, used to calculate authentication recency risk signals | [optional] 
**priorAuthenticationData** | **string** | Opaque data payload from the prior authentication event, providing additional context about the historical authentication assertion | [optional] 
**priorAuthenticationRef** | **string** | Reference identifier linking back to the prior authentication session or transaction, used for session continuity and risk correlation | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


