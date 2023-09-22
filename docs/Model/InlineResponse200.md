# InlineResponse200

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID uniquely generated for this comments. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by Cybersource for all services. | [optional] 
**status** | **string** | The status of the submitted transaction. Possible values are: - &#x60;ACCEPTED&#x60; - &#x60;REJECTED&#x60; | [optional] 
**embedded** | [**\CyberSource\Model\InlineResponse200Embedded**](InlineResponse200Embedded.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


