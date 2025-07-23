# Ptsv2intentsProcessingInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processingInstruction** | **string** | The instruction to process an order. - default value: &#39;NO_INSTRUCTION&#39; - &#39;ORDER_SAVED_EXPLICITLY&#39; | [optional] 
**authorizationOptions** | [**\CyberSource\Model\Ptsv2intentsProcessingInformationAuthorizationOptions**](Ptsv2intentsProcessingInformationAuthorizationOptions.md) |  | [optional] 
**actionList** | **string[]** | Array of actions (one or more) to be included in the order to invoke bundled services along with order. Possible values: - &#x60;AP_ORDER&#x60;: Use this when Alternative Payment Order service is requested. | [optional] 
**highRiskTransactionFlag** | **string** | Indicates if the transaction is flagged as high risk. | [optional] 
**transactionRetry** | **string** | Indicates if the transaction is a retry. | [optional] 
**lastOneHrTransactionCount** | **string** | The number of transactions in the last one hour. | [optional] 
**lastOneDayTransactionCount** | **string** | The number of transactions in the last one day. | [optional] 
**lastThreeMonthsTxnCount** | **string** | The number of transactions in the last three months. | [optional] 
**totalTransactionCount** | **string** | The total number of transactions. | [optional] 
**pinVerification** | **string** | Indicates if PIN verification is required. | [optional] 
**faceIdVerification** | **string** | Indicates if face ID verification is required. | [optional] 
**userPassedVerification** | **string** | Indicates if the user passed verification. | [optional] 
**ipAddress** | **string** | The IP address of the user. | [optional] 
**transactionDate** | **string** | The date of the transaction. | [optional] 
**tangible** | **string** | Indicates if the transaction involves tangible goods. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


