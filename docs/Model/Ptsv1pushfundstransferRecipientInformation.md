# Ptsv1pushfundstransferRecipientInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentInformation** | [**\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformation**](Ptsv1pushfundstransferRecipientInformationPaymentInformation.md) |  | [optional] 
**address1** | **string** | First line of the recipient&#39;s address.  Required for Mastercard Send. This field is not supported for Visa Platform Connect. | [optional] 
**address2** | **string** | Second line of the recipient&#39;s address  Optional for Mastercard Send. This field is not supported for Visa Platform Connect. | [optional] 
**locality** | **string** | Recipient city.  Required for Mastercard Send. | [optional] 
**postalCode** | **string** | Recipient postal code.  For USA, this must be a valid value of 5 digits or 5 digits hyphen 4 digits, for example &#39;63368&#39;, &#39;63368-5555&#39;. For other regions, this can be alphanumeric, length 1-10.  Mastercard Send: Required for recipients in Canada and Canadian issued cards. | [optional] 
**administrativeArea** | **string** | The recipient&#39;s province, state or territory. Conditional, required if recipient&#39;s country is USA or CAN. Must be an ISO 3166-2 uppercase alpha 2 or 3 character country subdivision code. For example, Missouri is MO.  Required only for FDCCompass.  This field is not supported for Visa Platform Connect. | [optional] 
**country** | **string** | Recipient country code. Use the ISO Standard Alpha Country Codes.  https://developer.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf  Required for Mastercard Send. | [optional] 
**firstName** | **string** | First name of recipient.  Visa Platform Connect (14) Chase Paymentech (30) Mastercard Send (40)  This field is required for Mastercard Send. | [optional] 
**middleName** | **string** | Sender’s middle name. This field is a passthrough, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, CyberSource does not forward it to the processor. | [optional] 
**middleInitial** | **string** | Middle Initial of recipient.  This field is supported by FDC Compass. | [optional] 
**lastName** | **string** | Last name of recipient.  Visa Platform Connect (14) Paymentech (30) Mastercard Send (40)  This field is required for Mastercard Send. | [optional] 
**dateOfBirth** | **string** | Recipient date of birth in YYYYMMDD format. | [optional] 
**phoneNumber** | **string** | Recipient phone number.  This field is supported by FDC Compass.  Mastercard Send: Max length is 15 with no dashes or spaces. | [optional] 
**personalIdentification** | [**\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPersonalIdentification**](Ptsv1pushfundstransferRecipientInformationPersonalIdentification.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


