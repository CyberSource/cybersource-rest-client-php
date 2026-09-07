# InlineResponse20112FulfillmentOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique fulfillment option ID. Pass as &#x60;fulfillment_option_id&#x60; to select it. | [optional] 
**type** | **string** | Fulfillment method type.  Possible values: - shipping - digital | [optional] 
**title** | **string** | Display name for this fulfillment option. | [optional] 
**subtitle** | **string** | Additional description (e.g. estimated delivery window). | [optional] 
**carrier** | **string** | Carrier name for shipping options. | [optional] 
**earliestDeliveryTime** | [**\DateTime**](\DateTime.md) | Earliest estimated delivery in RFC 3339 format. | [optional] 
**latestDeliveryTime** | [**\DateTime**](\DateTime.md) | Latest estimated delivery in RFC 3339 format. | [optional] 
**subtotal** | **int** | Shipping cost before tax, in minor units. | [optional] 
**tax** | **int** | Tax on shipping cost, in minor units. | [optional] 
**total** | **int** | Total shipping cost including tax, in minor units. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


