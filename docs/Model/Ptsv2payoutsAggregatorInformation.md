# Ptsv2payoutsAggregatorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregatorId** | **string** | Value that identifies you as a payment aggregator. Get this value from the processor. | [optional] 
**name** | **string** | Your payment aggregator business name. This field is conditionally required when aggregator id is present. | [optional] 
**independentSalesOrganizationID** | **string** | Independent sales organization ID. This field is only used for Mastercard transactions submitted through PPGS. | [optional] 
**subMerchant** | [**\CyberSource\Model\Ptsv2payoutsAggregatorInformationSubMerchant**](Ptsv2payoutsAggregatorInformationSubMerchant.md) |  | [optional] 
**streetAddress** | **string** | Acquirer street name. | [optional] 
**city** | **string** | Acquirer city. | [optional] 
**state** | **string** | Acquirer state. | [optional] 
**postalCode** | **string** | Acquirer postal code. | [optional] 
**country** | **string** | Acquirer country. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


