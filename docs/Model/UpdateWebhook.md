# UpdateWebhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Client friendly webhook name. | [optional] 
**organizationId** | **string** | Organization Id. | [optional] 
**description** | **string** | Client friendly webhook description. | [optional] 
**products** | [**\CyberSource\Model\Notificationsubscriptionsv2webhooksProducts[]**](Notificationsubscriptionsv2webhooksProducts.md) |  | [optional] 
**webhookUrl** | **string** | The client&#39;s endpoint (URL) to receive webhooks. | [optional] 
**notificationScope** | **string** | The webhook scope. 1. SELF The Webhook is used to deliver webhooks for only this Organization (or Merchant). 2. DESCENDANTS The Webhook is used to deliver webhooks for this Organization and its children. This field is optional.    Possible values: - SELF - DESCENDANTS | [optional] [default to 'DESCENDANTS']
**healthCheckUrl** | **string** | The client&#39;s health check endpoint (URL). | [optional] 
**securityPolicy** | [**\CyberSource\Model\Notificationsubscriptionsv2webhooksSecurityPolicy**](Notificationsubscriptionsv2webhooksSecurityPolicy.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


