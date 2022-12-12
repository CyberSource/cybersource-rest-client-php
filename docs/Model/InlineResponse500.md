# InlineResponse500

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by Cybersource for all services. | [optional] 
**status** | **string** | The status of the submitted request.  Possible values:  - SERVER_ERROR | [optional] 
**reason** | **string** | The reason of the status.  Possible values:  - SYSTEM_ERROR  - SERVER_TIMEOUT  - SERVICE_TIMEOUT | [optional] 
**message** | **string** | The detail message related to the status and reason listed above. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


