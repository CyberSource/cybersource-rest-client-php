# PushFunds201ResponseProcessorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionId** | **int** | Network transaction identifier (TID). This value can be used to identify a specific transaction when you are discussing the transaction with your processor. | [optional] 
**responseCode** | **string** | Transaction status from the processor. | [optional] 
**systemTraceAuditNumber** | **string** | This field is returned by authorization and incremental authorization services. System trace number that must be printed on the customer&#39;s receipt. | [optional] 
**retrievalReferenceNumber** | **string** | This field contains a number that is used with other data elements as a key to identify and track all messages related to a given cardholder transaction; that is, to a given transaction set.  Recommended format: ydddhhnnnnnn  Positions 1-4: The yddd equivalent of the date, where y &#x3D; 0-9 and ddd &#x3D; 001 – 366. Positions 5-12: A unique identification number generated by the merchant or assigned by Cybersource. | [optional] 
**actionCode** | **string** | The results of the transaction request  Note: The VisaNet Response Code for the transaction | [optional] 
**approvalCode** | **string** | Issuer-generated approval code for the transaction. | [optional] 
**feeProgramIndicator** | **string** | This field identifies the interchange fee program applicable to each financial transaction. Fee program indicator (FPI) values correspond to the fee descriptor and rate for each existing fee program. | [optional] 
**name** | **string** | Name of the processor. | [optional] 
**routing** | [**\CyberSource\Model\PushFunds201ResponseProcessorInformationRouting**](PushFunds201ResponseProcessorInformationRouting.md) |  | [optional] 
**settlement** | [**\CyberSource\Model\PushFunds201ResponseProcessorInformationSettlement**](PushFunds201ResponseProcessorInformationSettlement.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


