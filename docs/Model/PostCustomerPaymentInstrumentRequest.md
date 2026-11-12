# PostCustomerPaymentInstrumentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\DefaultPaymentInstrumentLinks**](DefaultPaymentInstrumentLinks.md) |  | [optional] 
**id** | **string** | The Id of the Payment Instrument Token. | [optional] 
**object** | **string** | The type.  Possible Values: - paymentInstrument | [optional] 
**default** | **bool** | Flag that indicates whether customer payment instrument is the dafault. Possible Values:  - &#x60;true&#x60;: Payment instrument is customer&#39;s default.  - &#x60;false&#x60;: Payment instrument is not customer&#39;s default. | [optional] 
**state** | **string** | Issuers state for the card number. Possible Values: - ACTIVE - CLOSED : The account has been closed. | [optional] 
**type** | **string** | The type of Payment Instrument. Possible Values: - cardHash | [optional] 
**bankAccount** | [**\CyberSource\Model\DefaultPaymentInstrumentBankAccount**](DefaultPaymentInstrumentBankAccount.md) |  | [optional] 
**card** | [**\CyberSource\Model\DefaultPaymentInstrumentCard**](DefaultPaymentInstrumentCard.md) |  | [optional] 
**buyerInformation** | [**\CyberSource\Model\DefaultPaymentInstrumentBuyerInformation**](DefaultPaymentInstrumentBuyerInformation.md) |  | [optional] 
**billTo** | [**\CyberSource\Model\DefaultPaymentInstrumentBillTo**](DefaultPaymentInstrumentBillTo.md) |  | [optional] 
**processingInformation** | [**\CyberSource\Model\TmsPaymentInstrumentProcessingInfo**](TmsPaymentInstrumentProcessingInfo.md) |  | [optional] 
**merchantInformation** | [**\CyberSource\Model\TmsMerchantInformation**](TmsMerchantInformation.md) |  | [optional] 
**instrumentIdentifier** | [**\CyberSource\Model\DefaultPaymentInstrumentInstrumentIdentifier**](DefaultPaymentInstrumentInstrumentIdentifier.md) |  | [optional] 
**metadata** | [**\CyberSource\Model\DefaultPaymentInstrumentMetadata**](DefaultPaymentInstrumentMetadata.md) |  | [optional] 
**embedded** | [**\CyberSource\Model\PaymentInstrumentEmbedded2**](PaymentInstrumentEmbedded2.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


