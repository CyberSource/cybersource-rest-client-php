# Nrtfv1webhookswebhookIdreplaysByDeliveryStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the webhook. Options are FAILED or RETRY | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | The start time in yyyy-mm-dd hh:mm:ss.ms format. Maximum value is 1 month prior to todays system time.  The difference between Start Time and End Time cannot exceed a 24 hour window within the last month. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | The end time in yyyy-mm-dd hh:mm:ss.ms format.  The difference between Start Time and End Time cannot exceed a 24 hour window within the last month. | [optional] 
**hoursBack** | **int** | Alternative parameter to startTime/endTime.  It evaluates the startTime using the current system time (endTime) and the hoursBack value (default &#x3D; 24hrs). | [optional] 
**productId** | **string** |  | [optional] 
**eventType** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


