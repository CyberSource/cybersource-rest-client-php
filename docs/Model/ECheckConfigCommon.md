# ECheckConfigCommon

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processors** | [**map[string,\CyberSource\Model\ECheckConfigCommonProcessors]**](ECheckConfigCommonProcessors.md) |  | [optional] 
**internalOnly** | [**\CyberSource\Model\ECheckConfigCommonInternalOnly**](ECheckConfigCommonInternalOnly.md) |  | [optional] 
**accountHolderName** | **string** | Mandatory  Name on Merchant&#39;s Bank Account Only ASCII (Hex 20 to Hex 7E) | 
**accountType** | **string** | Mandatory  Type of account for Merchant&#39;s Bank Account Possible values: - checking - savings - corporatechecking - corporatesavings | 
**accountRoutingNumber** | **string** | Mandatory  Routing number for Merchant&#39;s Bank Account US Account Routing Number | 
**accountNumber** | **string** | Mandatory  Account number for Merchant&#39;s Bank Account | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


