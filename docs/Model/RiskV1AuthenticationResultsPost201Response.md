# RiskV1AuthenticationResultsPost201Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\PtsV2PaymentsReversalsPost201ResponseLinks**](PtsV2PaymentsReversalsPost201ResponseLinks.md) |  | [optional] 
**id** | **string** | An unique identification number assigned by CyberSource to identify the submitted request. It is also appended to the endpoint of the resource. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; Example &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC. | [optional] 
**submitTimeLocal** | **string** | Time that the transaction was submitted in local time. | [optional] 
**status** | **string** | The status for payerAuthentication 201 enroll and validate calls. Possible values are: - AUTHENTICATION_SUCCESSFUL - PENDING_AUTHENTICATION | [optional] 
**reason** | **string** | The reason of the status. Possible values are: - Authentication_Completed_Or_Skipped_Sucessfully - Pending_Authentication | [optional] 
**message** | **string** | The message describing the reason of the status. Value is: - The cardholder is enrolled in Payer Authentication. Please authenticate the cardholder before continuing with the transaction. | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\Ptsv2payoutsClientReferenceInformation**](Ptsv2payoutsClientReferenceInformation.md) |  | [optional] 
**consumerAuthenticationInformation** | [**\CyberSource\Model\RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation**](RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation.md) |  | [optional] 
**errorInformation** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation**](PtsV2PaymentsPost201ResponseErrorInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


