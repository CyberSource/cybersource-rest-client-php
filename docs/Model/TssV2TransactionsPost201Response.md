# TssV2TransactionsPost201Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**searchId** | **string** | An unique identification number assigned by CyberSource to identify each Search request. | [optional] 
**save** | **bool** | save or not save. | [optional] 
**name** | **string** | The description for this field is not available. | [optional] 
**timezone** | **string** | Time Zone in ISO format. | [optional] 
**query** | **string** | transaction search query string. | [optional] 
**offset** | **int** | offset. | [optional] 
**limit** | **int** | Limit on number of results. | [optional] 
**sort** | **string** | A comma separated list of the following form - fieldName1 asc or desc, fieldName2 asc or desc, etc. | [optional] 
**count** | **int** | Results for this page, this could be below the limit. | [optional] 
**totalCount** | **int** | Total number of results. | [optional] 
**status** | **string** | The status of the submitted transaction. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; Example &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC. | [optional] 
**embedded** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbedded**](TssV2TransactionsPost201ResponseEmbedded.md) |  | [optional] 
**links** | [**\CyberSource\Model\PtsV2PaymentsReversalsPost201ResponseLinks**](PtsV2PaymentsReversalsPost201ResponseLinks.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


