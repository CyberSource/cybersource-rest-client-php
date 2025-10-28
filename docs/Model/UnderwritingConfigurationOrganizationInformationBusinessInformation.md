# UnderwritingConfigurationOrganizationInformationBusinessInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**businessIdentifier** | **string** | Tax ID for the business | 
**countryRegistration** | **string** | Country where the business is registered. Two character country code, ISO 3166-1 alpha-2. | 
**legalName** | **string** | The legally registered name of the business | 
**doingBusinessAs** | **string** | The DBA of the business. | 
**businessDescription** | **string** | Short description of the Business | 
**registrationNumber** | **string** | Registration ID for Enterprise Merchant | [optional] 
**stockExchange** | **string** | Which stock exchange is the company trading in? | [optional] 
**tickerSymbol** | **string** | Stock Symbol on the exchange | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | When did Business start. Format: YYYY-MM-DD Example 2016-08-11 equals August 11, 2016 | 
**merchantCategoryCode** | **string** | Industry standard Merchant Category Code (MCC) | 
**mccDescription** | **string** | MCC Description | [optional] 
**websiteURL** | **string** | Website for the Business | [optional] 
**businessType** | **string** | Business type  Possible values: - PARTNERSHIP - SOLE_PROPRIETORSHIP - CORPORATION - LLC - NON_PROFIT - TRUST | 
**localMCC** | **string[]** |  | [optional] 
**countryPhoneNumber** | **string** | Country of the Business phone number. Two character country code, ISO 3166-1 alpha-2. | 
**phoneNumber** | **string** | Business Phone Number | 
**email** | **string** | Business Email Address | 
**whatYourCompanyDoes** | **string** | What your company does and how you market your service | [optional] 
**address** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationAddress**](UnderwritingConfigurationOrganizationInformationBusinessInformationAddress.md) |  | [optional] 
**tradingAddress** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationTradingAddress**](UnderwritingConfigurationOrganizationInformationBusinessInformationTradingAddress.md) |  | [optional] 
**businessContact** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationBusinessContact**](UnderwritingConfigurationOrganizationInformationBusinessInformationBusinessContact.md) |  | [optional] 
**businessDetails** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationBusinessDetails**](UnderwritingConfigurationOrganizationInformationBusinessInformationBusinessDetails.md) |  | [optional] 
**ownerInformation** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationOwnerInformation[]**](UnderwritingConfigurationOrganizationInformationBusinessInformationOwnerInformation.md) |  | [optional] 
**directorInformation** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationDirectorInformation[]**](UnderwritingConfigurationOrganizationInformationBusinessInformationDirectorInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


