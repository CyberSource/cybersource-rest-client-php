# InlineResponse2013

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\InlineResponse2013Links**](InlineResponse2013Links.md) |  | [optional] 
**id** | **string** | An unique identification number assigned by CyberSource to identify the submitted request. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. &#x60;Format: YYYY-MM-DDThh:mm:ssZ&#x60;  Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC. | [optional] 
**status** | **string** | The status of the submitted transaction. | [optional] 
**reconciliationId** | **string** | The reconciliation id for the submitted transaction. This value is not returned for all processors. | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\InlineResponse201ClientReferenceInformation**](InlineResponse201ClientReferenceInformation.md) |  | [optional] 
**refundAmountDetails** | [**\CyberSource\Model\InlineResponse2013RefundAmountDetails**](InlineResponse2013RefundAmountDetails.md) |  | [optional] 
**processorInformation** | [**\CyberSource\Model\InlineResponse2013ProcessorInformation**](InlineResponse2013ProcessorInformation.md) |  | [optional] 
**orderInformation** | [**\CyberSource\Model\InlineResponse2013OrderInformation**](InlineResponse2013OrderInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


