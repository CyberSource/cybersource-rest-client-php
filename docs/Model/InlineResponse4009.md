# InlineResponse4009

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**submitTimeUtc** | **string** | Time verification was requested  Format: &#x60;YYYY-MM-DDThhmmssZ&#x60;, where: - &#x60;T&#x60;:  Separates the date and the time - &#x60;Z&#x60;:  Indicates Coordinated Universal Time (UTC), also known as Greenwich Mean Time (GMT)  Example:  &#x60;2020-01-11T224757Z&#x60; equals January 11, 2020, at 22:47:57 (10:47:57 p.m.) | [optional] 
**status** | **string** | Possible values:   - &#x60;INVALID_REQUEST&#x60; | [optional] 
**message** | **string** | The detail message related to the status and reason | [optional] 
**reason** | **string** | The reason of the status.  Possible values:   - &#x60;INVALID_REQUEST&#x60; | [optional] 
**details** | [**\CyberSource\Model\InlineResponse4009Details[]**](InlineResponse4009Details.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


