# V2paymentsProcessingInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**capture** | **bool** | Flag that specifies whether to also include capture service in the submitted request or not. | [optional] [default to false]
**processorId** | **string** | Value that identifies the processor/acquirer to use for the transaction. This value is supported only for **CyberSource through VisaNet**. | [optional] 
**businessApplicationId** | **string** | TBD | [optional] 
**commerceIndicator** | **string** | Type of transaction. Some payment card companies use this information when determining discount rates. When you omit this field for **Ingenico ePayments**, the processor uses the default transaction type they have on file for you instead of the default value listed here. | [optional] 
**paymentSolution** | **string** | Type of digital payment solution that is being used for the transaction. Possible Values:   - **visacheckout**: Visa Checkout.  - **001**: Apple Pay.  - **005**: Masterpass. Required for Masterpass transactions on OmniPay Direct.  - **006**: Android Pay.  - **008**: Samsung Pay. | [optional] 
**reconciliationId** | **string** | Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request. * For Payouts: max length for FDCCompass is String (22). | [optional] 
**linkId** | **string** | Value that links the current payment request to the original request. Set this value to the ID that was returned in the reply message from the original payment request.  This value is used for:   - Partial authorizations.  - Split shipments. | [optional] 
**purchaseLevel** | **string** | Set this field to 3 to indicate that the request includes Level III data. | [optional] 
**reportGroup** | **string** | Attribute that lets you define custom grouping for your processor reports. This field is supported only for **Litle**. | [optional] 
**visaCheckoutId** | **string** | Identifier for the **Visa Checkout** order. Visa Checkout provides a unique order ID for every transaction in the Visa Checkout **callID** field. | [optional] 
**issuer** | [**\CyberSource\Model\V2paymentsProcessingInformationIssuer**](V2paymentsProcessingInformationIssuer.md) |  | [optional] 
**authorizationOptions** | [**\CyberSource\Model\V2paymentsProcessingInformationAuthorizationOptions**](V2paymentsProcessingInformationAuthorizationOptions.md) |  | [optional] 
**captureOptions** | [**\CyberSource\Model\V2paymentsProcessingInformationCaptureOptions**](V2paymentsProcessingInformationCaptureOptions.md) |  | [optional] 
**recurringOptions** | [**\CyberSource\Model\V2paymentsProcessingInformationRecurringOptions**](V2paymentsProcessingInformationRecurringOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


