# MerchantUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantName** | **string** | Doing business as (DBA) name | [optional] 
**merchantUrl** | **string** | Base URL of the merchant&#39;s domain. Must use HTTPS and be unique — raises 409 if already registered. | [optional] 
**cryptogramType** | **string** | Authentication cryptogram type used for payment credential generation.  Possible values: - TAVV - DAVV | [optional] 
**paymentPayloadType** | **string** | Credential delivery format. Set to ***ENCRYPTED*** to enable JWE-encrypted payload delivery — requires an active encryption key. Returns 400 if no active key exists.  Possible values: - ENCRYPTED - UNENCRYPTED | [optional] 
**acceptanceRelationships** | **string[]** | List of payment network acceptance relationships (e.g., \&quot;Visa\&quot;). | [optional] 
**protocolInteractions** | [**\CyberSource\Model\Iccv1merchantsProtocolInteractions[]**](Iccv1merchantsProtocolInteractions.md) | List of protocol interaction configurations defining the merchant&#39;s endpoint for each supported protocol (ucp, acp, x402). | [optional] 
**webIntegrations** | [**\CyberSource\Model\MerchantRegistrationResponse201WebIntegrations**](MerchantRegistrationResponse201WebIntegrations.md) |  | [optional] 
**apiIntegrations** | [**\CyberSource\Model\MerchantRegistrationResponse201ApiIntegrations**](MerchantRegistrationResponse201ApiIntegrations.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


