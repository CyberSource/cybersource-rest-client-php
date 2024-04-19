# PtsV2PaymentsPost201ResponseMerchantInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantName** | **string** | Use this field only if you are requesting payment with Payer Authentication serice together.  Your company&#39;s name as you want it to appear to the customer in the issuing bank&#39;s authentication form. This value overrides the value specified by your merchant bank. | [optional] 
**merchantDescriptor** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseMerchantInformationMerchantDescriptor**](PtsV2PaymentsPost201ResponseMerchantInformationMerchantDescriptor.md) |  | [optional] 
**returnUrl** | **string** | URL for displaying payment results to the consumer (notifications) after the transaction is processed. Usually this URL belongs to merchant and its behavior is defined by merchant | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


