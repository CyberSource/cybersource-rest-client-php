# UnderwritingConfigurationOrganizationInformationBusinessInformationOwnerInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | Owner&#39;s first name | 
**middleName** | **string** | Owner&#39;s middle name | [optional] 
**lastName** | **string** | Owner&#39;s last name | 
**birthDate** | [**\DateTime**](\DateTime.md) | Owner&#39;s date of birth. Format: YYYY-MM-DD Example 2016-08-11 equals August 11, 2016 | 
**isPrimary** | **bool** | Primary Owner or Non-Primary Owner | 
**hasSignificantResponsibility** | **bool** | If not an owner, is the user a Control Person | 
**ownerDirector** | **bool** | Is the owner a Director as well? | [optional] 
**nationalId** | **string** | Identification value from ID document | 
**idCountry** | **string** | Country of the ID document. Two character country code, ISO 3166-1 alpha-2. | [optional] 
**passportNumber** | **string** | Passport Number | [optional] 
**passportCountry** | **string** | Passport Country. Two character country code, ISO 3166-1 alpha-2. | [optional] 
**jobTitle** | **string** | Owner&#39;s Job Title | [optional] 
**ownershipPercentage** | **float** | Percentage of the company that owner owns | 
**nationality** | **string** | Country of origin for the owner. Two character country code, ISO 3166-1 alpha-2. | 
**dueDiligenceRequired** | **bool** | Indicates if due diligence checks should be run for this owner | 
**phoneNumberCountryCode** | **string** | Phone number country. Two character country code, ISO 3166-1 alpha-2. | 
**phoneNumber** | **string** | Owner&#39;s phone number | 
**email** | **string** | Email address for Owner | 
**address** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationAddress1**](UnderwritingConfigurationOrganizationInformationBusinessInformationAddress1.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


