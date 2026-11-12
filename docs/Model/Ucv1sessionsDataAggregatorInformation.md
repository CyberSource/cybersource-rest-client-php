# Ucv1sessionsDataAggregatorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregatorId** | **string** | Value that identifies you as a payment aggregator. Get this value from the processor. | [optional] 
**name** | **string** | Your payment aggregator business name.  **American Express Direct**\\ The maximum length of the aggregator name depends on the length of the sub-merchant name. The combined length for both values must not exceed 36 characters.\\ | [optional] 
**subMerchant** | [**\CyberSource\Model\Ucv1sessionsDataAggregatorInformationSubMerchant**](Ucv1sessionsDataAggregatorInformationSubMerchant.md) |  | [optional] 
**streetAddress** | **string** | Acquirer street name. | [optional] 
**city** | **string** | Acquirer city. | [optional] 
**state** | **string** | Acquirer state. | [optional] 
**postalCode** | **string** | Acquirer postal code. | [optional] 
**country** | **string** | Acquirer country used for Payment Facilitator scenarios. | [optional] 
**serviceProvidername** | **string** | Contains transfer service provider name. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


