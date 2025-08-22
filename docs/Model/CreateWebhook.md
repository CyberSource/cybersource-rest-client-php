# CreateWebhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Client friendly webhook name. | [optional] 
**description** | **string** | Client friendly webhook description. | [optional] 
**organizationId** | **string** | Organization Identifier (OrgId) or Merchant Identifier (MID). | [optional] 
**products** | [**\CyberSource\Model\Notificationsubscriptionsv2webhooksProducts1[]**](Notificationsubscriptionsv2webhooksProducts1.md) | To see the valid productId and eventTypes, call the \&quot;Create and Manage Webhooks - Retrieve a list of event types\&quot; endpoint. | [optional] 
**webhookUrl** | **string** | The client&#39;s endpoint (URL) to receive webhooks. | [optional] 
**healthCheckUrl** | **string** | The client&#39;s health check endpoint (URL). If the user does not provide the health check URL, it is the user&#39;s responsibility to re-activate the webhook if it is deactivated by calling the test endpoint. | [optional] 
**retryPolicy** | [**\CyberSource\Model\Notificationsubscriptionsv2webhooksRetryPolicy**](Notificationsubscriptionsv2webhooksRetryPolicy.md) |  | [optional] 
**notificationScope** | **string** | The webhook scope. 1. SELF The Webhook is used to deliver webhooks for only this Organization (or Merchant). 2. DESCENDANTS The Webhook is used to deliver webhooks for this Organization and its children. This field is optional.    Possible values: - SELF - DESCENDANTS | [optional] [default to 'DESCENDANTS']
**securityPolicy** | [**\CyberSource\Model\Notificationsubscriptionsv2webhooksSecurityPolicy**](Notificationsubscriptionsv2webhooksSecurityPolicy.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


