# Ptsv1pushfundstransferAggregatorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregatorId** | **string** | Value that identifies you as a payment aggregator. Get this value from the processor.  FDC Compass This value must consist of uppercase letters.  Visa Platform Connect The value for this field corresponds to the following data in the TC 33 capture file: - &#x60;Record&#x60;: CP01 TCR6 - &#x60;Position&#x60;: 95-105 - &#x60;Field&#x60;: Market Identifier / Payment Facilitator ID | [optional] 
**name** | **string** | Your payment aggregator business name.  Visa Platform COnnect With American Express, the maximum length of the aggregator name depends on the length of the sub-merchant name. The combined length for both values must not exceed 36 characters. The value for this field does not map to the TC 33 capture file5.  FDC Compass This value must consist of uppercase characters.  For processor-specific information, see the aggregator_name field in Credit Card Services Using the SCMP API. | [optional] 
**subMerchant** | [**\CyberSource\Model\Ptsv1pushfundstransferAggregatorInformationSubMerchant**](Ptsv1pushfundstransferAggregatorInformationSubMerchant.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


