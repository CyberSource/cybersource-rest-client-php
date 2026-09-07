# UnifiedriskPaymentVerificationAdditional

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signature** | **string** | Paper signature verification: SUCCESS, FAILURE | [optional] 
**accountHolderAuth** | **string** | Account holder authentication value: SUCCESS, FAILURE | [optional] 
**authenticationToken** | **string** | Authentication token verification: SUCCESS, FAILURE | [optional] 
**cardholderIdData** | **string** | Cardholder ID data verification: SUCCESS, FAILURE | [optional] 
**passiveAuth** | **string** | Passive authentication: SUCCESS, FAILURE | [optional] 
**simSwap** | **string** | SIM swap check: NO_SWAP_DETECTED, SWAP_DETECTED | [optional] 
**secureCorpPaymentIndicator** | **string** | Secure Corporate Payment Indicator (SCPI) flag assigned by the issuer to indicate a trusted commercial or corporate payment credential. Impacts SCA (Strong Customer Authentication) exemption eligibility under PSD2 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


