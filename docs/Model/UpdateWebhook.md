# UpdateWebhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Client friendly webhook name. | [optional] 
**organizationId** | **string** | Organization Id. | [optional] 
**description** | **string** | Client friendly webhook description. | [optional] 
**products** | [**\CyberSource\Model\Notificationsubscriptionsv2webhooksProducts[]**](Notificationsubscriptionsv2webhooksProducts.md) |  | [optional] 
**webhookUrl** | **string** | The client&#39;s endpoint (URL) to receive webhooks. | [optional] 
**healthCheckUrl** | **string** | The client&#39;s health check endpoint (URL). This should be as close as possible to the actual webhookUrl. | [optional] 
**securityPolicy** | [**\CyberSource\Model\Notificationsubscriptionsv2webhooksSecurityPolicy**](Notificationsubscriptionsv2webhooksSecurityPolicy.md) |  | [optional] 
**additionalAttributes** | [**map[string,string][]**](map.md) | Additional, free form configuration data. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


