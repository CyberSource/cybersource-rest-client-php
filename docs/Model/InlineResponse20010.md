# InlineResponse20010

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalCount** | **int** | Total number of results. | [optional] 
**offset** | **int** | Controls the starting point within the collection of results, which defaults to 0. The first item in the collection is retrieved by setting a zero offset.  For example, if you have a collection of 15 items to be retrieved from a resource and you specify limit&#x3D;5, you can retrieve the entire set of results in 3 successive requests by varying the offset value like this:  &#x60;offset&#x3D;0&#x60; &#x60;offset&#x3D;5&#x60; &#x60;offset&#x3D;10&#x60;  **Note:** If an offset larger than the number of results is provided, this will result in no embedded object being returned. | [optional] 
**limit** | **int** | Controls the maximum number of items that may be returned for a single request. The default is 20, the maximum is 2500. | [optional] 
**sort** | **string** | A comma separated list of the following form:  &#x60;terminalCreationDate:desc or serialNumber or terminalUpdationDate&#x60; | [optional] 
**count** | **int** | Results for this page, this could be below the limit. | [optional] 
**devices** | [**\CyberSource\Model\InlineResponse20010Devices[]**](InlineResponse20010Devices.md) | A collection of devices | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


