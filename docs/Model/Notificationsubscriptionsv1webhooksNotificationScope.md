# Notificationsubscriptionsv1webhooksNotificationScope

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scope** | **string** | The webhook scope. 1. SELF The Webhook is used to deliver webhooks for only this Organization (or Merchant). 2. DESCENDANTS The Webhook is used to deliver webhooks for this Organization and its children. 3. CUSTOM The Webhook is used to deliver webhooks for the OrgIds (or MiDs) explicitly listed in scopeData field | [optional] [default to 'SELF']
**scopeData** | **string[]** | Applicable only if scope&#x3D;CUSTOM. This should contains a Set of MIDs or OrgIDs for which this subscription is applicable. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


