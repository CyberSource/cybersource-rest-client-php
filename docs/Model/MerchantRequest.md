# MerchantRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantName** | **string** | Doing business as (DBA) name | 
**merchantUrl** | **string** | Base URL of the merchant&#39;s domain. Must use HTTPS and be unique across all registrations. | 
**vmid** | **string** | Visa Merchant ID (VMID). Must be unique — raises 409 if already in use. | [optional] 
**indicator** | **string** | Transaction processing indicator:  - ***TAP*** — Trusted Agent Protocol  - ***ACG*** — Agentic Checkout Gateway  - ***BOTH*** — supports both TAP and ACG   Possible values: - TAP - ACG - BOTH | 
**cryptogramType** | **string** | Authentication cryptogram type used for payment credential generation. Defaults to ***DAVV*** if not provided.  Possible values: - TAVV - DAVV | [optional] 
**paymentPayloadType** | **string** | Credential delivery format. Set to ***ENCRYPTED*** to enable JWE-encrypted payload delivery — requires an &#x60;encryptionKey&#x60;. Defaults to ***UNENCRYPTED***.  Possible values: - ENCRYPTED - UNENCRYPTED | [optional] 
**encryptionKey** | [**\CyberSource\Model\Iccv1merchantsEncryptionKey**](Iccv1merchantsEncryptionKey.md) |  | [optional] 
**acceptanceRelationships** | **string[]** | List of payment network acceptance relationships (e.g., \&quot;Visa\&quot;). | [optional] 
**protocolInteractions** | [**\CyberSource\Model\Iccv1merchantsProtocolInteractions[]**](Iccv1merchantsProtocolInteractions.md) | List of protocol interaction configurations defining the merchant&#39;s endpoint for each supported protocol (ucp, acp, x402). | [optional] 
**webIntegrations** | [**\CyberSource\Model\Iccv1merchantsWebIntegrations**](Iccv1merchantsWebIntegrations.md) |  | [optional] 
**apiIntegrations** | [**\CyberSource\Model\Iccv1merchantsApiIntegrations**](Iccv1merchantsApiIntegrations.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


