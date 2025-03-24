# Ptsv2payoutsRecipientInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name of the recipient.    This field is applicable for AFT &amp; OCT transactions.  Only alpha numeric values are supported. Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**middleName** | **string** | Middle name of the recipient.    This field is applicable for AFT &amp; OCT transactions.  Only alpha numeric values are supported. Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**lastName** | **string** | Last name of the recipient.  This field is applicable for AFT &amp; OCT transactions.  Only alpha numeric values are supported. Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**address1** | **string** | The street address of the recipient This field is applicable for AFT and OCT transactions.  Only alpha numeric values are supported. Special characters not in the standard ASCII character set are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**locality** | **string** | The city of the recipient. This field is applicable for AFT and OCT transactions.  Only alpha numeric values are supported. Special characters not in the standard ASCII character set are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**administrativeArea** | **string** | The state or province of the recipient. This field is applicable for AFT and OCT transactions when the recipient country is US or CA. Else it is optional.  Must be a two character value | [optional] 
**country** | **string** | The country associated with the address of the recipient. This field is applicable for AFT and OCT transactions.  Must be a two character ISO country code.  For example, see [ISO Country Code](https://developer.cybersource.com/docs/cybs/en-us/country-codes/reference/all/na/country-codes/country-codes.html) | [optional] 
**postalCode** | **string** | Recipient postal code. Required only for FDCCompass. | [optional] 
**phoneNumber** | **string** | Recipient phone number. Required only for FDCCompass. | [optional] 
**aliasName** | **string** | Account owner alias name. | [optional] 
**nationality** | **string** | Account Owner Nationality | [optional] 
**countryOfBirth** | **string** | Account Owner Country of Birth | [optional] 
**occupation** | **string** | Account Owner Occupation | [optional] 
**email** | **string** | Account Owner email address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


