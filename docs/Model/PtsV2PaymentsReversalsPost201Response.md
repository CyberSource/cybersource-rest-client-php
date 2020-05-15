# PtsV2PaymentsReversalsPost201Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\PtsV2IncrementalAuthorizationPatch201ResponseLinks**](PtsV2IncrementalAuthorizationPatch201ResponseLinks.md) |  | [optional] 
**id** | **string** | An unique identification number assigned by CyberSource to identify the submitted request. It is also appended to the endpoint of the resource.  On incremental authorizations, this value with be the same as the identification number returned in the original authorization response. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; Example &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by authorization service. | [optional] 
**status** | **string** | The status of the submitted transaction.  Possible values:  - REVERSED | [optional] 
**reconciliationId** | **string** | Reference number for the transaction. This value is not returned for all processors.  Returned by authorization service.  #### Atos Positive string (6)  #### All other processors String (60) | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation**](PtsV2PaymentsPost201ResponseClientReferenceInformation.md) |  | [optional] 
**reversalAmountDetails** | [**\CyberSource\Model\PtsV2PaymentsReversalsPost201ResponseReversalAmountDetails**](PtsV2PaymentsReversalsPost201ResponseReversalAmountDetails.md) |  | [optional] 
**processorInformation** | [**\CyberSource\Model\PtsV2PaymentsReversalsPost201ResponseProcessorInformation**](PtsV2PaymentsReversalsPost201ResponseProcessorInformation.md) |  | [optional] 
**issuerInformation** | [**\CyberSource\Model\PtsV2PaymentsReversalsPost201ResponseIssuerInformation**](PtsV2PaymentsReversalsPost201ResponseIssuerInformation.md) |  | [optional] 
**authorizationInformation** | [**\CyberSource\Model\PtsV2PaymentsReversalsPost201ResponseAuthorizationInformation**](PtsV2PaymentsReversalsPost201ResponseAuthorizationInformation.md) |  | [optional] 
**pointOfSaleInformation** | [**\CyberSource\Model\Ptsv2paymentsidreversalsPointOfSaleInformation**](Ptsv2paymentsidreversalsPointOfSaleInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


