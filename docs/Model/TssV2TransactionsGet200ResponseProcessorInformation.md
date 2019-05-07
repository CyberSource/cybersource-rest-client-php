# TssV2TransactionsGet200ResponseProcessorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processor** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor**](TssV2TransactionsGet200ResponseProcessorInformationProcessor.md) |  | [optional] 
**transactionId** | **string** | Network transaction identifier (TID). You can use this value to identify a specific transaction when you are discussing the transaction with your processor. Not all processors provide this value. | [optional] 
**networkTransactionId** | **string** | The description for this field is not available. | [optional] 
**responseId** | **string** | The description for this field is not available. | [optional] 
**providerTransactionId** | **string** | The description for this field is not available. | [optional] 
**approvalCode** | **string** | Authorization code. Returned only when the processor returns this value. | [optional] 
**responseCode** | **string** | For most processors, this is the error message sent directly from the bank. Returned only when the processor returns this value.  Important Do not use this field to evaluate the result of the authorization. | [optional] 
**avs** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAvs**](PtsV2PaymentsPost201ResponseProcessorInformationAvs.md) |  | [optional] 
**cardVerification** | [**\CyberSource\Model\Riskv1decisionsCardVerification**](Riskv1decisionsCardVerification.md) |  | [optional] 
**achVerification** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAchVerification**](PtsV2PaymentsPost201ResponseProcessorInformationAchVerification.md) |  | [optional] 
**electronicVerificationResults** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationElectronicVerificationResults**](TssV2TransactionsGet200ResponseProcessorInformationElectronicVerificationResults.md) |  | [optional] 
**systemTraceAuditNumber** | **string** | This field is returned only for **American Express Direct** and **CyberSource through VisaNet**.  **American Express Direct**  System trace audit number (STAN). This value identifies the transaction and is useful when investigating a chargeback dispute.  **CyberSource through VisaNet**  System trace number that must be printed on the customer’s receipt. | [optional] 
**responseCodeSource** | **string** | Used by Visa only and contains the response source/reason code that identifies the source of the response decision. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


