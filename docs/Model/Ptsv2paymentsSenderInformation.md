# Ptsv2paymentsSenderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name of the sender. This field is applicable for AFT and OCT transactions.   Only alpha numeric values are supported.Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to the processor. | [optional] 
**middleName** | **string** | Middle name of the sender. This field is applicable for AFT and OCT transactions.   Only alpha numeric values are supported. Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**lastName** | **string** | Last name of the sender. This field is applicable for AFT and OCT transactions.  Only alpha numeric values are supported. Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**address1** | **string** | The street address of the sender. This field is applicable for AFT transactions.     Only alpha numeric values are supported.  Special characters not in the standard ASCII character set are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**locality** | **string** | The city or locality of the sender. This field is applicable for AFT transactions.  Only alpha numeric values are supported.  Special characters not in the standard ASCII character set are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**administrativeArea** | **string** | The state or province of the sender. This field is applicable for AFT transactions when the sender country is US or CA. Else it is optional.  Must be a two character value | [optional] 
**countryCode** | **string** | The country associated with the address of the sender. This field is applicable for AFT transactions.   Must be a two character ISO country code.  For example, see [ISO Country Code](https://developer.cybersource.com/docs/cybs/en-us/country-codes/reference/all/na/country-codes/country-codes.html) | [optional] 
**aliasName** | **string** | Sender&#39;s alias name. | [optional] 
**referenceNumber** | **string** | This field is applicable for AFT transactions.   Contains a transaction reference number provided by the Merchant. Only alpha numeric values are supported. | [optional] 
**account** | [**\CyberSource\Model\Ptsv2paymentsSenderInformationAccount**](Ptsv2paymentsSenderInformationAccount.md) |  | [optional] 
**postalCode** | **string** | Postal code of sender. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


