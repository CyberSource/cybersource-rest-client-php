# UnifiedriskPaymentCounterparty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | Counterparty account identifier | [optional] 
**accountFormat** | **string** | Counterparty account format | [optional] 
**branchId** | **string** | Counterparty branch identifier | [optional] 
**name** | **string** | Full legal name of the counterparty (individual or business) used for identity matching, beneficiary validation, and fraud screening | [optional] 
**type** | **string** | Classification of the counterparty entity type (e.g., INDIVIDUAL, BUSINESS, FINANCIAL_INSTITUTION). Used for AML screening and beneficiary risk assessment | [optional] 
**agentId** | **string** | Unique identifier for the financial agent or correspondent bank through which the counterparty payment is being routed | [optional] 
**agentName** | **string** | Name of the financial agent or correspondent institution facilitating the payment to the counterparty | [optional] 
**branchAddress** | [**\CyberSource\Model\UnifiedriskPaymentCounterpartyBranchAddress**](UnifiedriskPaymentCounterpartyBranchAddress.md) |  | [optional] 
**address** | [**\CyberSource\Model\UnifiedriskPaymentCounterpartyAddress**](UnifiedriskPaymentCounterpartyAddress.md) |  | [optional] 
**creationTime** | **string** | Timestamp when the counterparty record was created in the system, expressed in ISO 8601 format. Used for new payee fraud detection | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


