# InlineResponse20019

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobId** | **string** | Unique identifier of the feed submission job. | [optional] 
**status** | **string** | Overall status of the feed job.  Possible values: - PENDING - PROCESSING - COMPLETED - FAILED | [optional] 
**processing** | [**\CyberSource\Model\InlineResponse20019Processing**](InlineResponse20019Processing.md) |  | [optional] 
**syndication** | [**map[string,\CyberSource\Model\InlineResponse20019Syndication]**](InlineResponse20019Syndication.md) | Per-protocol syndication status, keyed by lowercase protocol name (e.g. &#x60;acp&#x60;, &#x60;ucp&#x60;). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


