# V2paymentsidrefundsProcessingInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentSolution** | **string** | Type of digital payment solution that is being used for the transaction. Possible Values:   - **visacheckout**: Visa Checkout.  - **001**: Apple Pay.  - **005**: Masterpass. Required for Masterpass transactions on OmniPay Direct.  - **006**: Android Pay.  - **008**: Samsung Pay. | [optional] 
**reconciliationId** | **string** | Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request. * For Payouts: max length for FDCCompass is String (22). | [optional] 
**linkId** | **string** | Value that links the current payment request to the original request. Set this value to the ID that was returned in the reply message from the original payment request.  This value is used for:   - Partial authorizations.  - Split shipments. | [optional] 
**reportGroup** | **string** | Attribute that lets you define custom grouping for your processor reports. This field is supported only for **Litle**. | [optional] 
**visaCheckoutId** | **string** | Identifier for the **Visa Checkout** order. Visa Checkout provides a unique order ID for every transaction in the Visa Checkout **callID** field. | [optional] 
**purchaseLevel** | **string** | Set this field to 3 to indicate that the request includes Level III data. | [optional] 
**recurringOptions** | [**\CyberSource\Model\V2paymentsidrefundsProcessingInformationRecurringOptions**](V2paymentsidrefundsProcessingInformationRecurringOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


