# Ptsv2paymentsOrderHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchasedAt** | **string** | Date and time the order was purchased. Format: YYYY-MM-DDThh:mm:ssZ. Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC. | [optional] 
**amount** | **string** | Grand total for the order. This value cannot be negative. You can include a decimal point (.), but no other special characters. | [optional] 
**status** | **string** | Status of the order. | [optional] 
**buyer** | [**\CyberSource\Model\Ptsv2paymentsBuyer**](Ptsv2paymentsBuyer.md) |  | [optional] 
**shipTo** | [**\CyberSource\Model\Ptsv2paymentsShipTo**](Ptsv2paymentsShipTo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


