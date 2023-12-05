# UpdateWebhookRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Client friendly webhook name. | [optional] 
**description** | **string** | Client friendly webhook description.\\ | [optional] 
**organizationId** | **string** | Organization Id. | [optional] 
**productId** | **string** | The product you are receiving a webhook for. | [optional] 
**eventTypes** | **string[]** | Array of the different events for a given product id. | [optional] 
**webhookUrl** | **string** | The client&#39;s endpoint (URL) to receive webhooks. | [optional] 
**healthCheckUrl** | **string** | The client&#39;s health check endpoint (URL). This should be as close as possible to the actual webhookUrl. | [optional] 
**status** | **string** | Webhook status. | [optional] [default to 'INACTIVE']
**notificationScope** | [**\CyberSource\Model\Notificationsubscriptionsv1webhooksNotificationScope**](Notificationsubscriptionsv1webhooksNotificationScope.md) |  | [optional] 
**retryPolicy** | [**\CyberSource\Model\Notificationsubscriptionsv1webhooksRetryPolicy**](Notificationsubscriptionsv1webhooksRetryPolicy.md) |  | [optional] 
**securityPolicy** | [**\CyberSource\Model\Notificationsubscriptionsv1webhooksSecurityPolicy**](Notificationsubscriptionsv1webhooksSecurityPolicy.md) |  | [optional] 
**additionalAttributes** | [**map[string,string][]**](map.md) | Additional, free form configuration data. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


