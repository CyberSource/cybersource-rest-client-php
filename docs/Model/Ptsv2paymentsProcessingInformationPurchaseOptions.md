# Ptsv2paymentsProcessingInformationPurchaseOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isElectronicBenefitsTransfer** | **bool** | Flag that indicates whether this transaction is an EBT transaction. Possible values: - &#x60;true&#x60; - &#x60;false&#x60;  #### PIN debit Required field for EBT and EBT voucher transactions that use PIN debit credit or PIN debit purchase; otherwise, not used. | [optional] 
**type** | **string** | Flag that indicates an EBT voucher transaction. Possible value: - &#x60;EBT_VOUCHER&#x60;: Indicates the PIN debit transaction is an EBT voucher.  #### PIN debit Required field for EBT voucher transactions that use PIN debit purchase; otherwise, not used. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


