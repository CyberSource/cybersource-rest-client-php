# InlineResponse2011

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\InlineResponse201EmbeddedCaptureLinks**](InlineResponse201EmbeddedCaptureLinks.md) |  | [optional] 
**id** | **string** | An unique identification number assigned by CyberSource to identify the submitted request. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. &#x60;Format: YYYY-MM-DDThh:mm:ssZ&#x60;  Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC. | [optional] 
**status** | **string** | The status of the submitted transaction. | [optional] 
**reconciliationId** | **string** | The reconciliation id for the submitted transaction. This value is not returned for all processors. | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\InlineResponse201ClientReferenceInformation**](InlineResponse201ClientReferenceInformation.md) |  | [optional] 
**reversalAmountDetails** | [**\CyberSource\Model\InlineResponse2011ReversalAmountDetails**](InlineResponse2011ReversalAmountDetails.md) |  | [optional] 
**processorInformation** | [**\CyberSource\Model\InlineResponse2011ProcessorInformation**](InlineResponse2011ProcessorInformation.md) |  | [optional] 
**authorizationInformation** | [**\CyberSource\Model\InlineResponse2011AuthorizationInformation**](InlineResponse2011AuthorizationInformation.md) |  | [optional] 
**pointOfSaleInformation** | [**\CyberSource\Model\V2paymentsidreversalsPointOfSaleInformation**](V2paymentsidreversalsPointOfSaleInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


