# RiskV1AuthenticationsPost400Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by Cybersource for all services. | [optional] 
**status** | **string** | The status for payerAuthentication 400 setup calls. Possible values are: - INVALID_REQUEST | [optional] 
**reason** | **string** | The reason of the status. | [optional] 
**message** | **string** | The message describing the reason of the status. Value is: - Encountered a Payer Authentication problem. Payer could not be setup. | [optional] 
**details** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformationDetails[]**](PtsV2PaymentsPost201ResponseErrorInformationDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


