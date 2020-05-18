# PtsV2PayoutsPost201ResponseProcessorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approvalCode** | **string** | Issuer-generated approval code for the transaction. | [optional] 
**responseCode** | **string** | Transaction status from the processor. | [optional] 
**transactionId** | **string** | Network transaction identifier (TID). This value can be used to identify a specific transaction when you are discussing the transaction with your processor. | [optional] 
**systemTraceAuditNumber** | **string** | This field is returned only for **American Express Direct** and **CyberSource through VisaNet**. Returned by authorization and incremental authorization services.  #### American Express Direct  System trace audit number (STAN). This value identifies the transaction and is useful when investigating a chargeback dispute.  #### CyberSource through VisaNet  System trace number that must be printed on the customer’s receipt. | [optional] 
**responseCodeSource** | **string** | Used by Visa only and contains the response source/reason code that identifies the source of the response decision. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


