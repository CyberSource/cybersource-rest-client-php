# AgentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Display name for the agent | 
**domain** | **string** | Fully-qualified HTTPS URL of the agent&#39;s home domain. Must be unique — registration raises 409 if it already exists. | 
**description** | **string** | Description of the agent&#39;s purpose or capabilities | 
**contactEmail** | **string** | Contact email for the team or individual responsible for this agent | 
**tokenRequestorId** | **string** | Token Requestor ID (TRID) assigned by Visa | 
**agentMetadata** | **object** | Free-form metadata object for agent context (e.g., AI framework, language, runtime). Max 10KB. | [optional] 
**keys** | [**\CyberSource\Model\Iccv1agentsKeys[]**](Iccv1agentsKeys.md) | Optional array of public keys to register alongside the agent. Keys are created in ***deactivated*** state and must be activated separately via POST /agents/{agentId}/keys/{keyId}/activate. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


