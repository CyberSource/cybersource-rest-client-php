# UnifiedriskPaymentCardTokenDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**providerType** | **string** | Token provider type: network_token or merchant_token      Possible values: - network_token - merchant_token | [optional] 
**type** | **string** | Type of payment credential being used. Visa, MasterCard, AMEX | [optional] 
**jti** | **string** | Transient Token JWT ID | [optional] 
**number** | **string** | Token number replacing PAN | [optional] 
**expirationMonth** | **string** | Token expiration month | [optional] 
**expirationYear** | **string** | Token expiration year | [optional] 
**bin** | **string** | BIN from underlying card | [optional] 
**last4** | **string** | Last 4 digits of card | [optional] 
**expirationDate** | **string** | Combined expiration date of the network token in MMYYYY format, used when the token&#39;s lifecycle is managed separately from the underlying PAN | [optional] 
**requestorId** | **string** | Unique identifier of the token requestor (e.g., merchant or PSP) registered with the token service provider for DPAN provisioning and lifecycle management | [optional] 
**cryptogram** | **string** | A cryptographic value generated during tokenization (TAVV or CAVV) that authenticates the token for a specific transaction, preventing token replay attacks | [optional] 
**status** | **string** | Current lifecycle status of the network token (e.g., ACTIVE, SUSPENDED, DEACTIVATED). Tokens that are not ACTIVE should not be used for payment | [optional] 
**cryptograValidity** | **string** | Indicates the validity or expiry state of the cryptogram, helping detect stale or replayed token authentication attempts | [optional] 
**assuranceMethod** | **string** | Indicates the authentication assurance level of the token provisioning process (e.g., APP_VERIFIED, CARDHOLDER_VERIFIED), impacting liability shift decisions | [optional] 
**additionalData** | **string** | Supplementary data associated with the network token, such as merchant category restrictions, wallet provider metadata, or tokenization service payload extensions | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


