# AgentRegistrationResponse201

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique agent identifier (64-char SHA-256 hash of domain + email + tokenRequestorId) | 
**name** | **string** | Display name for the agent | 
**domain** | **string** | Fully-qualified HTTPS URL of the agent&#39;s home domain | 
**description** | **string** | Description of the agent&#39;s purpose or capabilities | [optional] 
**contactEmail** | **string** | Contact email for the team or individual responsible for this agent | [optional] 
**tokenRequestorId** | **string** | Token Requestor ID (TRID) assigned by Visa, shared with the parent trusted agent for OSAs | 
**agentType** | **string** | Agent classification: &#39;trusted&#39; (commercially onboarded via Visa) or &#39;known&#39; (open-source/community agent, unverified)  Possible values: - trusted - known | 
**agentMetadata** | **object** | Free-form metadata object for agent context (e.g., AI framework, language, runtime). Max 10KB. | [optional] 
**isActive** | **bool** | Whether the agent is currently active. Deactivated agents cannot add or activate keys. | 
**createdAt** | [**\DateTime**](\DateTime.md) | ISO 8601 UTC timestamp when the agent was registered | 
**updatedAt** | [**\DateTime**](\DateTime.md) | ISO 8601 UTC timestamp when the agent was last updated | 
**keys** | [**\CyberSource\Model\AgentRegistrationResponse201Keys[]**](AgentRegistrationResponse201Keys.md) | List of public keys associated with the agent (both active and deactivated) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


