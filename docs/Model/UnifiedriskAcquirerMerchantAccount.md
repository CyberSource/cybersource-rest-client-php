# UnifiedriskAcquirerMerchantAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantAccountBranchId** | **string** | Unique identifier for the specific branch or location of the merchant&#39;s account within the acquiring bank&#39;s organizational structure | [optional] 
**merchantAccountId** | **string** | The primary account identifier assigned by the acquirer to the merchant for payment processing and settlement purposes | [optional] 
**merchantAccountIdFormat** | **string** | Describes the format or standard used for the merchant account identifier (e.g., ISO, Proprietary, Numeric) | [optional] 
**securityAmount** | [**\CyberSource\Model\UnifiedriskAcquirerMerchantAccountSecurityAmount**](UnifiedriskAcquirerMerchantAccountSecurityAmount.md) |  | [optional] 
**settlementFrequency** | **int** | The number of days between settlement cycles defining how often funds are transferred from the acquirer to the merchant&#39;s account (e.g., 1 for daily, 7 for weekly) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


