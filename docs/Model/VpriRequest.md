# VpriRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actions** | **string[]** | Actions to perform. For VPRI, specify VISA_PROTECT_RISK_INSIGHTS. Multiple actions may be included in a single request to invoke additional services simultaneously. | 
**events** | **string[]** | The events to be performed under specific actions. For VISA_PROTECT_RISK_INSIGHTS, supported values are LABELS and INSIGHTS. | 
**transaction** | [**\CyberSource\Model\UnifiedriskTransaction**](UnifiedriskTransaction.md) |  | 
**requestId** | **string** | Unique identifier for the risk assessment request | [optional] 
**eventTime** | [**\DateTime**](\DateTime.md) | The time that the real-world event occurred. | 
**context** | **string** | The context in which the request is made. | [optional] 
**mode** | **string** | Indicates whether the request is live or a test. | [optional] 
**requestComments** | **string** | Brief description or comments about the request | [optional] 
**schemaVersion** | **int** | Version of the request schema | [optional] 
**partner** | [**\CyberSource\Model\UnifiedriskPartner**](UnifiedriskPartner.md) |  | [optional] 
**payment** | [**\CyberSource\Model\UnifiedriskPayment**](UnifiedriskPayment.md) |  | [optional] 
**order** | [**\CyberSource\Model\UnifiedriskOrder**](UnifiedriskOrder.md) |  | [optional] 
**customer** | [**\CyberSource\Model\UnifiedriskCustomer**](UnifiedriskCustomer.md) |  | [optional] 
**riskAssessment** | [**\CyberSource\Model\UnifiedriskRiskAssessment**](UnifiedriskRiskAssessment.md) |  | [optional] 
**travel** | [**\CyberSource\Model\UnifiedriskTravel**](UnifiedriskTravel.md) |  | [optional] 
**merchant** | [**\CyberSource\Model\UnifiedriskMerchant**](UnifiedriskMerchant.md) |  | [optional] 
**acquirer** | [**\CyberSource\Model\UnifiedriskAcquirer**](UnifiedriskAcquirer.md) |  | [optional] 
**device** | [**\CyberSource\Model\UnifiedriskDevice**](UnifiedriskDevice.md) |  | [optional] 
**session** | [**\CyberSource\Model\UnifiedriskSession**](UnifiedriskSession.md) |  | [optional] 
**supplementaryData** | **string** | Free-form field for information not catered for by other components. Must not contain cardholder data or sensitive auth data. | [optional] 
**labels** | [**\CyberSource\Model\UnifiedriskLabels**](UnifiedriskLabels.md) |  | [optional] 
**account** | [**\CyberSource\Model\UnifiedriskAccount**](UnifiedriskAccount.md) |  | [optional] 
**authentication** | [**\CyberSource\Model\UnifiedriskAuthentication**](UnifiedriskAuthentication.md) |  | [optional] 
**authorization** | [**\CyberSource\Model\UnifiedriskAuthorization**](UnifiedriskAuthorization.md) |  | [optional] 
**browser** | [**\CyberSource\Model\UnifiedriskBrowser**](UnifiedriskBrowser.md) |  | [optional] 
**initiatingParty** | [**\CyberSource\Model\UnifiedriskInitiatingParty**](UnifiedriskInitiatingParty.md) |  | [optional] 
**terminal** | [**\CyberSource\Model\UnifiedriskTerminal**](UnifiedriskTerminal.md) |  | [optional] 
**thirdPartyRisk** | [**\CyberSource\Model\UnifiedriskThirdPartyRisk**](UnifiedriskThirdPartyRisk.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


