# UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsights

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the VPRI package. | [optional] 
**name** | **string** | Human-readable display name of the VPRI package. | [optional] 
**type** | **string** | Category of the VPRI package indicating the type of assessment performed. | [optional] 
**score** | **int** | Risk score produced by the AIP engine, ranging from 0 (lowest risk) to 100 (highest risk). Absent when the AIP service was not invoked. | [optional] 
**insights** | [**\CyberSource\Model\UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsightsInsights**](UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsightsInsights.md) |  | [optional] 
**additionalData** | [**\CyberSource\Model\VpriTransactionInsightsAdditionalData**](VpriTransactionInsightsAdditionalData.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


