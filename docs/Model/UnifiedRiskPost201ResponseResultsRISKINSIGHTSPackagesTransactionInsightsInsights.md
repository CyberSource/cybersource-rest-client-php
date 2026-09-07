# UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsightsInsights

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**codes** | **string[]** | Array of insight codes returned by the AIP engine, each representing a specific risk signal or behavioral pattern identified for the transaction. Codes follow the pattern {category}-{signal}-{window}-{detail} (e.g., BEH-* for behavioral history codes, RSK-* for real-time risk signals). | [optional] 
**signals** | **map[string,float]** | Key-value map of behavioral signals produced by the AIP engine. Keys represent signal identifiers and values represent their computed numeric measurements for the transaction. May be an empty object when no signals are available. | [optional] 
**warnings** | [**\CyberSource\Model\UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsightsInsightsWarnings[]**](UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsightsInsightsWarnings.md) | AIP-level warnings issued during risk evaluation. An empty array indicates no warnings. Each warning describes a limitation or anomaly encountered during AIP processing. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


