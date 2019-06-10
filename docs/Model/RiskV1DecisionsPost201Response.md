# RiskV1DecisionsPost201Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseLinks**](PtsV2PaymentsPost201ResponseLinks.md) |  | [optional] 
**id** | **string** | An unique identification number assigned by CyberSource to identify the submitted request. It is also appended to the endpoint of the resource. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; Example &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC. | [optional] 
**submitTimeLocal** | **string** | Time that the transaction was submitted in local time. | [optional] 
**status** | **string** | The status of the submitted transaction.  Possible values:   - &#x60;ACCEPTED&#x60;   - &#x60;REJECTED&#x60;   - &#x60;PENDING_REVIEW&#x60; | [optional] 
**riskInformation** | [**\CyberSource\Model\RiskV1DecisionsPost201ResponseRiskInformation**](RiskV1DecisionsPost201ResponseRiskInformation.md) |  | [optional] 
**paymentInformation** | [**\CyberSource\Model\RiskV1DecisionsPost201ResponsePaymentInformation**](RiskV1DecisionsPost201ResponsePaymentInformation.md) |  | [optional] 
**errorInformation** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation**](PtsV2PaymentsPost201ResponseErrorInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


