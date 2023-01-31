# PushFunds201ResponseProcessorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionId** | **int** | Network transaction identifier (TID). This value can be used to identify a specific transaction when you are discussing the transaction with your processor. | [optional] 
**responseCode** | **string** | Transaction status from the processor. | [optional] 
**approvalCode** | **string** | Issuer-generated approval code for the transaction. | [optional] 
**systemTraceAuditNumber** | **string** | System audit number. Returned by authorization and incremental authorization services.  Visa Platform Connect  System trace number that must be printed on the customer’s receipt. | [optional] 
**responseCodeSource** | **string** | Used by Visa only and contains the response source/reason code that identifies the source of the response decision. | [optional] 
**retrievalReferenceNumber** | **string** | Unique reference number returned by the processor that identifies the transaction at the network.  Supported by Mastercard Send | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


