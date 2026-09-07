# InlineResponse2014

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identification number to identify the submitted request. It is also appended to the endpoint of the resource. | [optional] 
**status** | **string** | The status of the submitted transaction.  Possible values: - &#x60;COMPLETED&#x60; - &#x60;SERVER_ERROR&#x60; - &#x60;INVALID_REQUEST&#x60; - &#x60;DECLINED&#x60; | 
**submitTimeStampUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DD&#39;T&#39;HH:mm:ssZ&#x60;  Example: &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC. | [optional] 
**links** | [**\CyberSource\Model\InlineResponse2014Links**](InlineResponse2014Links.md) |  | [optional] 
**transactions** | [**\CyberSource\Model\InlineResponse2014Transactions[]**](InlineResponse2014Transactions.md) |  | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\InlineResponse2014ClientReferenceInformation**](InlineResponse2014ClientReferenceInformation.md) |  | [optional] 
**errorInformation** | [**\CyberSource\Model\InlineResponse2014ErrorInformation**](InlineResponse2014ErrorInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


