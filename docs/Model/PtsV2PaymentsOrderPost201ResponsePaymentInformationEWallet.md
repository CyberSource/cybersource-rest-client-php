# PtsV2PaymentsOrderPost201ResponsePaymentInformationEWallet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | The ID of the customer, passed in the return_url field by PayPal after customer approval. | [optional] 
**fundingSource** | **string** | Payment mode for the authorization or order transaction.  INSTANT_TRANSFER  MANUAL_BANK_TRANSFER  DELAYED_TRANSFER  ECHECK  UNRESTRICTED (default)—this value is available only when configured by PayPal for the merchant. INSTANT | [optional] 
**fundingSourceSale** | **string** | Payment method for the unit purchase. Possible values: - &#x60;UNRESTRICTED (default)—this value is only available if configured by PayPal for the merchant.&#x60; - &#x60;INSTANT&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


