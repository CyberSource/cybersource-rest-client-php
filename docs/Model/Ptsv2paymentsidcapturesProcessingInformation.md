# Ptsv2paymentsidcapturesProcessingInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentSolution** | **string** | Type of digital payment solution for the transaction. Possible Values:   - **visacheckout**: Visa Checkout. This value is required for Visa Checkout transactions. See Visa Checkout Using the SCMP API.  - **005**: Masterpass. This value is required for Masterpass transactions on OmniPay Direct. See \&quot;Masterpass,\&quot; page 153. | [optional] 
**reconciliationId** | **string** | Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request. * For Payouts: max length for FDCCompass is String (22). | [optional] 
**linkId** | **string** | Value that links the current authorization request to the original authorization request. Set this value to the ID that was returned in the reply message from the original authorization request.  This value is used for:   - Partial authorizations: See \&quot;Partial Authorizations,\&quot; page 88.  - Split shipments: See \&quot;Split Shipments,\&quot; page 210. | [optional] 
**reportGroup** | **string** | Attribute that lets you define custom grouping for your processor reports. This field is supported only for **Worldpay VAP**.  See \&quot;Report Groups,\&quot; page 234. | [optional] 
**visaCheckoutId** | **string** | Identifier for the **Visa Checkout** order. Visa Checkout provides a unique order ID for every transaction in the Visa Checkout **callID** field.  For more details, see Visa Checkout Using the SCMP API. | [optional] 
**purchaseLevel** | **string** | Set this field to 3 to indicate that the request includes Level III data. | [optional] 
**issuer** | [**\CyberSource\Model\Ptsv2paymentsIssuerInformation**](Ptsv2paymentsIssuerInformation.md) |  | [optional] 
**authorizationOptions** | [**\CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationAuthorizationOptions**](Ptsv2paymentsidcapturesProcessingInformationAuthorizationOptions.md) |  | [optional] 
**captureOptions** | [**\CyberSource\Model\Ptsv2paymentsidcapturesProcessingInformationCaptureOptions**](Ptsv2paymentsidcapturesProcessingInformationCaptureOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


