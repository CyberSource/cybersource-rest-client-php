# UnifiedriskRiskAssessment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thirdPartyIndicators** | **string** | Any risk indicators provided by a third party provider that is integrated with ARIC. This is a free text field, and if there are multiple risk indicators, they should each be separated by a comma. | [optional] 
**thirdPartyScore** | **float** | Risk Score provided by a third party that is integrated with ARIC. | [optional] 
**thirdPartyScores** | **object** |  | [optional] 
**buyerHistory** | [**\CyberSource\Model\UnifiedriskRiskAssessmentBuyerHistory**](UnifiedriskRiskAssessmentBuyerHistory.md) |  | [optional] 
**auxiliaryData** | **object** |  | [optional] 
**vital4** | [**\CyberSource\Model\UnifiedriskRiskAssessmentVital4**](UnifiedriskRiskAssessmentVital4.md) |  | [optional] 
**isConfirmedRisk** | **bool** | Indicates whether this transaction has been confirmed as fraudulent or high-risk through post-transaction investigation. True flags the transaction for model feedback and alert closure | [optional] 
**reportedBy** | **string** | Identifier or name of the entity (customer, merchant, or internal team) that reported this transaction as fraudulent or suspicious | [optional] 
**merchantScore** | **string** | Risk score specific to the merchant&#39;s fraud exposure level, derived from the merchant&#39;s historical fraud rates, chargeback ratio, and industry risk profile | [optional] 
**merchantFraudRate** | **string** | The merchant&#39;s fraud rate expressed as a percentage or basis points, representing the ratio of confirmed fraudulent transactions to total transactions over a rolling period | [optional] 
**trustlistStatus** | **string** | Indicates whether the payer or payee appears on a trust list, reducing friction for known-good entities. Values - TRUSTED, UNTRUSTED, UNKNOWN | [optional] 
**trustlistSource** | **string** | The source system or registry that determined the trustlist status (e.g., MERCHANT_WHITELIST, NETWORK_WHITELIST, INTERNAL_TRUSTLIST) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


