# PatchCustomerPaymentInstrumentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentLinks**](Tmsv2customersEmbeddedDefaultPaymentInstrumentLinks.md) |  | [optional] 
**id** | **string** | The id of the Payment Instrument Token. | [optional] 
**object** | **string** | The type of token.  Valid values: - paymentInstrument | [optional] 
**default** | **bool** | Flag that indicates whether customer payment instrument is the dafault. Valid values:  - &#x60;true&#x60;: Payment instrument is customer&#39;s default.  - &#x60;false&#x60;: Payment instrument is not customer&#39;s default. | [optional] 
**state** | **string** | Issuers state for the card number. Valid values: - ACTIVE - CLOSED : The account has been closed. | [optional] 
**bankAccount** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBankAccount**](Tmsv2customersEmbeddedDefaultPaymentInstrumentBankAccount.md) |  | [optional] 
**card** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentCard**](Tmsv2customersEmbeddedDefaultPaymentInstrumentCard.md) |  | [optional] 
**buyerInformation** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBuyerInformation**](Tmsv2customersEmbeddedDefaultPaymentInstrumentBuyerInformation.md) |  | [optional] 
**billTo** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo**](Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo.md) |  | [optional] 
**processingInformation** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentProcessingInformation**](Tmsv2customersEmbeddedDefaultPaymentInstrumentProcessingInformation.md) |  | [optional] 
**merchantInformation** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMerchantInformation**](Tmsv2customersEmbeddedDefaultPaymentInstrumentMerchantInformation.md) |  | [optional] 
**instrumentIdentifier** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentInstrumentIdentifier**](Tmsv2customersEmbeddedDefaultPaymentInstrumentInstrumentIdentifier.md) |  | [optional] 
**metadata** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMetadata**](Tmsv2customersEmbeddedDefaultPaymentInstrumentMetadata.md) |  | [optional] 
**embedded** | [**\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbedded**](Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbedded.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


