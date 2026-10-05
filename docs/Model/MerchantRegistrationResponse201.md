# MerchantRegistrationResponse201

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique merchant identifier (UUID) | 
**merchantName** | **string** | Doing business as (DBA) name | 
**merchantUrl** | **string** | Fully-qualified HTTPS URL of the merchant&#39;s domain | 
**vmid** | **string** | Visa Merchant ID (VMID) — unique identifier assigned by Visa | [optional] 
**cryptogramType** | **string** | Authentication cryptogram type used for payment credential generation: &#39;TAVV&#39; (Token Authentication Verification Value) or &#39;DAVV&#39; (Device Authentication Verification Value)  Possible values: - TAVV - DAVV | [optional] 
**paymentPayloadType** | **string** | Credential delivery format: &#39;ENCRYPTED&#39; (JWE-wrapped, requires an active encryption key) or &#39;UNENCRYPTED&#39;  Possible values: - ENCRYPTED - UNENCRYPTED | [optional] 
**indicator** | **string** | Transaction processing indicator: &#39;TAP&#39; (Trusted Agent Protocol), &#39;ACG&#39; (Agentic Checkout Gateway), or &#39;BOTH&#39;  Possible values: - TAP - ACG - BOTH | 
**merchantMetadata** | **object** | Free-form metadata object for additional merchant context | [optional] 
**acceptanceRelationships** | **string[]** | List of payment network acceptance relationships (e.g., \&quot;Visa\&quot;) | [optional] 
**protocolInteractions** | [**\CyberSource\Model\Iccv1merchantsProtocolInteractions[]**](Iccv1merchantsProtocolInteractions.md) | List of protocol endpoint configurations defining how agents interact with this merchant (ucp, acp, x402) | [optional] 
**webIntegrations** | [**\CyberSource\Model\MerchantRegistrationResponse201WebIntegrations**](MerchantRegistrationResponse201WebIntegrations.md) |  | [optional] 
**apiIntegrations** | [**\CyberSource\Model\MerchantRegistrationResponse201ApiIntegrations**](MerchantRegistrationResponse201ApiIntegrations.md) |  | [optional] 
**isActive** | **bool** | Whether the merchant is active | 
**createdAt** | [**\DateTime**](\DateTime.md) | Creation timestamp | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Last update timestamp | 
**keys** | [**\CyberSource\Model\MerchantRegistrationResponse201Keys[]**](MerchantRegistrationResponse201Keys.md) | List of encryption keys associated with the merchant | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


