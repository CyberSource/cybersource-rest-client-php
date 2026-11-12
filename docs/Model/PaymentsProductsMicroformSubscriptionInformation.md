# PaymentsProductsMicroformSubscriptionInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  | [optional] 
**enablementStatus** | **string** | Possible values: - PENDING - ENABLED_AND_USABLE - ENABLED_NOT_USABLE - DISABLED | [optional] [default to 'ENABLED_AND_USABLE']
**selfServiceability** | **string** | Indicates if the organization can enable this product using self service.  Possible values: - SELF_SERVICEABLE - NOT_SELF_SERVICEABLE - SELF_SERVICE_ONLY | [optional] [default to 'NOT_SELF_SERVICEABLE']
**features** | [**map[string,\CyberSource\Model\CardProessingFeatureSubscriptionItem]**](CardProessingFeatureSubscriptionItem.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


