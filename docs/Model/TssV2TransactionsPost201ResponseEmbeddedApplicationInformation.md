# TssV2TransactionsPost201ResponseEmbeddedApplicationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reasonCode** | **string** | Indicates the reason why a request succeeded or failed and possible action to take if a request fails.  For details, see the appendix of reason codes in the documentation for the relevant payment method. | [optional] 
**rCode** | **string** | Indicates whether the service request was successful. Possible values:  - &#x60;-1&#x60;: An error occurred. - &#x60;0&#x60;: The request was declined. - &#x60;1&#x60;: The request was successful. | [optional] 
**rFlag** | **string** | One-word description of the result of the application. | [optional] 
**applications** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedApplicationInformationApplications[]**](TssV2TransactionsPost201ResponseEmbeddedApplicationInformationApplications.md) |  | [optional] 
**returnCode** | **int** | The description for this field is not available. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


