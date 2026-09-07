# UnifiedriskCustomer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantCustomerId** | **string** | Your identifier for the customer.When a subscription or customer profile is being created, the maximum length for this field for most processors is 30. Otherwise, the maximum length is 100.#### Comercio Latino For recurring payments in Mexico, the value is the customer&#39;s contract number. Note Before you request the authorization, you must inform the issuer of the customer contract numbers that will be used for recurring transactions.#### Worldpay VAP For a follow-on credit with Worldpay VA | [optional] 
**username** | **string** | Specifies the customer account user name. | [optional] 
**hashedPassword** | **string** | The merchant&#39;s password that CyberSource hashes and stores as a hashed password. | [optional] 
**personalIdentification** | [**\CyberSource\Model\UnifiedriskCustomerPersonalIdentification**](UnifiedriskCustomerPersonalIdentification.md) |  | [optional] 
**enrollmentDate** | [**\DateTime**](\DateTime.md) | The date in which the customer signed up to use Mobile/online banking | [optional] 
**flags** | **string[]** | Field to be used for specific customer flags that may determine treatment strategies. This is an array that can include free text values.  For retail customers this may be a vulnerability or a VIP mar | [optional] 
**customerId** | **string** | A unique identifier for the customer. | A unique identifier for the customer. This field should be considered mandatory for the payments solution, but not otherwise. | [optional] 
**type** | **string** | The customer type. If the identifier in customerId represents an individual, set this attribute to \&quot;Retail\&quot;, if it represents a business, set this attribute to \&quot;Business\&quot;. | [optional] 
**agentType** | **string** | Type of agent initiating transaction: HUMAN, AI_AGENT, or HYBRID  Possible values: - HUMAN - AI_AGENT - HYBRID | [optional] 
**agentId** | **string** | Unique identifier for the AI agent acting on behalf of customer | [optional] 
**agentConfidenceScore** | **float** | Confidence score (0-1) for agent&#39;s alignment with customer preferences | [optional] 
**agentDelegationScope** | **string** | Scope of authority delegated to agent: discovery, purchase, or full  Possible values: - discovery - purchase - full | [optional] 
**agentInteractionTimestamp** | [**\DateTime**](\DateTime.md) | Timestamp of agent interaction with customer | [optional] 
**isBusiness** | **bool** | Whether customer is a business entity | [optional] 
**businessName** | **string** | Name of business if customer is a business | [optional] 
**id** | **string** | The unique id of the customer | [optional] 
**address** | [**\CyberSource\Model\UnifiedriskCustomerAddress**](UnifiedriskCustomerAddress.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


