# Ptsv2payoutsRecipientInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name of recipient. characters. * CTV (14) * Paymentech (30) | [optional] 
**middleName** | **string** | Recipient&#39;s middle name. This field is a _passthrough_, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, CyberSource does not forward it to the processor. | [optional] 
**lastName** | **string** | Last name of recipient. characters. * CTV (14) * Paymentech (30) | [optional] 
**address1** | **string** | Recipient address information. Required only for FDCCompass. | [optional] 
**locality** | **string** | Recipient city. Required only for FDCCompass. | [optional] 
**administrativeArea** | **string** | Recipient State. Required only for FDCCompass. | [optional] 
**country** | **string** | Recipient country code. Required only for FDCCompass. | [optional] 
**postalCode** | **string** | Recipient postal code. Required only for FDCCompass. | [optional] 
**phoneNumber** | **string** | Recipient phone number. Required only for FDCCompass. | [optional] 
**aliasName** | **string** | Account owner alias name. | [optional] 
**nationality** | **string** | Account Owner Nationality | [optional] 
**countryOfBirth** | **string** | Account Owner Country of Birth | [optional] 
**occupation** | **string** | Account Owner Occupation | [optional] 
**email** | **string** | Account Owner email address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


