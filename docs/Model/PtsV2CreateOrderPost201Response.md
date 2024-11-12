# PtsV2CreateOrderPost201Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by Cybersource for all services. | [optional] 
**updateTimeUtc** | **string** | The date and time when the request was last updated. **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). | [optional] 
**status** | **string** | The status of the submitted transaction. Possible values:   - CREATED   - SAVED   - APPROVED   - VOIDED   - COMPLETED   - PAYER_ACTION_REQUIRED | [optional] 
**reconciliationId** | **string** | Reference number for the transaction. Depending on how your Cybersource account is configured, this value could either be provided in the API request or generated by CyberSource. The actual value used in the request to the processor is provided back to you by Cybersource in the response. | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\PtsV2IncrementalAuthorizationPatch201ResponseClientReferenceInformation**](PtsV2IncrementalAuthorizationPatch201ResponseClientReferenceInformation.md) |  | [optional] 
**processorInformation** | [**\CyberSource\Model\PtsV2CreateOrderPost201ResponseProcessorInformation**](PtsV2CreateOrderPost201ResponseProcessorInformation.md) |  | [optional] 
**paymentInformation** | [**\CyberSource\Model\PtsV2PaymentsOrderPost201ResponsePaymentInformation**](PtsV2PaymentsOrderPost201ResponsePaymentInformation.md) |  | [optional] 
**buyerInformation** | [**\CyberSource\Model\PtsV2CreateOrderPost201ResponseBuyerInformation**](PtsV2CreateOrderPost201ResponseBuyerInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

