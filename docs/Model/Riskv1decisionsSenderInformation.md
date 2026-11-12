# Riskv1decisionsSenderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Sender&#39;s full name, formatted as First Name Last Name. | [optional] 
**firstName** | **string** | First name of the sender. This field is applicable for AFT and OCT transactions.   Only alpha numeric values are supported.Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to the processor. | [optional] 
**middleName** | **string** | Middle name of the sender. This field is applicable for AFT and OCT transactions.   Only alpha numeric values are supported. Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**lastName** | **string** | Last name of the sender. This field is applicable for AFT and OCT transactions.  Only alpha numeric values are supported. Special characters not in the standard ASCII character set, are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**email** | **string** | Sender&#39;s email address, including the full domain name. | [optional] 
**postalCode** | **string** | Postal code of sender. | [optional] 
**administrativeArea** | **string** | The state or province of the sender. This field is applicable for AFT transactions when the sender country is US or CA. Else it is optional.  Must be a two character value | [optional] 
**address1** | **string** | The street address of the sender. This field is applicable for AFT transactions.     Only alpha numeric values are supported.  Special characters not in the standard ASCII character set are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**countryCode** | **string** | The country associated with the address of the sender. This field is applicable for AFT transactions.   Must be a two character ISO country code.  For example, see [ISO Country Code](https://developer.cybersource.com/docs/cybs/en-us/country-codes/reference/all/na/country-codes/country-codes.html) | [optional] 
**locality** | **string** | The city or locality of the sender. This field is applicable for AFT transactions.  Only alpha numeric values are supported.  Special characters not in the standard ASCII character set are not supported and will be stripped before being sent to sent to the processor. | [optional] 
**referenceNumber** | **string** | This field is applicable for AFT transactions.   Contains a transaction reference number provided by the Merchant. Only alpha numeric values are supported. | [optional] 
**phoneNumber** | **string** | Sender&#39;s phone number. | [optional] 
**dateOfBirth** | **string** | Sender&#39;s date of birth in YYYYMMDD format. | [optional] 
**vatRegistrationNumber** | **string** | Customer&#39;s government-assigned tax identification number. | [optional] 
**personalIdType** | **string** | #### Visa Platform Connect This tag will contain the type of sender identification. The valid values are: • BTHD (Date of birth) • CUID (Customer identification (unspecified)) • NTID (National identification) • PASN (Passport number) • DRLN (Driver license) • TXIN (Tax identification) • CPNY (Company registration number) • PRXY (Proxy identification) • SSNB (Social security number) • ARNB (Alien registration number) • LAWE (Law enforcement identification) • MILI (Military identification) • TRVL (Travel identification (non-passport)) • EMAL (Email) • PHON (Phone number) | [optional] 
**type** | **string** | #### Visa Platform Connect This tag will denote whether the tax ID is a business or individual tax ID when personal ID Type contains the value of TXIN (Tax identification). The valid values are: • B (Business) • I (Individual) | [optional] 
**identificationNumber** | **string** | #### Visa Platform Connect This tag will contain an acquirer-populated value associated with the API : senderInformation.personalIdType which will identify the personal ID type of the sender. | [optional] 
**account** | [**\CyberSource\Model\Riskv1decisionsSenderInformationAccount**](Riskv1decisionsSenderInformationAccount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


