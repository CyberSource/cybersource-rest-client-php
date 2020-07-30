# TssV2TransactionsPost201ResponseEmbeddedApplicationInformationApplications

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the CyberSource transaction type (such as CC settlement or CC authorization) that the merchant wants to process in a transaction request. More than one transaction type can included in a transaction request. Each transaction type separately returns their own status, reasonCode, rCode, and rFlag messages. | [optional] 
**reasonCode** | **string** | 3-digit reason code that indicates why the customer profile payment succeeded or failed. | [optional] 
**rCode** | **string** | Indicates whether the service request was successful. Possible values:  - &#x60;-1&#x60;: An error occurred. - &#x60;0&#x60;: The request was declined. - &#x60;1&#x60;: The request was successful. | [optional] 
**rFlag** | **string** | One-word description of the result of the application. | [optional] 
**reconciliationId** | **string** | Reference number that you use to reconcile your CyberSource reports with your processor reports. | [optional] 
**rMessage** | **string** | Message that explains the reply flag for the application. | [optional] 
**returnCode** | **int** | The description for this field is not available. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


