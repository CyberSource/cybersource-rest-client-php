# Boardingv1registrationsOrganizationInformationOwners

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** |  | 
**middleName** | **string** |  | [optional] 
**lastName** | **string** |  | 
**birthDate** | [**\DateTime**](\DateTime.md) | &#x60;Format: YYYY-MM-DD&#x60; Example 2016-08-11 equals August 11, 2016 | 
**isPrimary** | **bool** | Determines whether the owner is the Primary owner of the organization | 
**ssn** | **string** | Social Security Number | [optional] 
**passportNumber** | **string** | Passport number | [optional] 
**passportCountry** | **string** |  | [optional] 
**jobTitle** | **string** |  | 
**hasSignificantResponsability** | **bool** | Determines whether owner has significant responsibility to control, manage or direct the company | 
**ownershipPercentage** | **float** | Determines the percentage of ownership this owner has. For the primary owner the percentage can be from 0-100; for other owners the percentage can be from 25-100 and the sum of ownership accross owners cannot exceed 100 | 
**phoneNumber** | **string** |  | 
**email** | **string** |  | 
**address** | [**\CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationAddress**](Boardingv1registrationsOrganizationInformationBusinessInformationAddress.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


