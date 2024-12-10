# CommerceSolutionsProductsTokenManagementConfigurationInformationConfigurationsVault

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**defaultTokenType** | **string** | Default token type to be used. Possible Values:   - &#39;CUSTOMER&#39;  - &#39;PAYMENT_INSTRUMENT&#39;  - &#39;INSTRUMENT_IDENTIFIER&#39; | [optional] 
**location** | **string** | Location where the vault will be stored.  Use &#39;IDC&#39; (the Indian Data Centre) when merchant is storing token data in India  or &#39;GDC&#39; (the Global Data Centre) for all other cases.  Possible Values:    - &#39;IDC&#39;   - &#39;GDC&#39; | [optional] 
**tokenFormats** | [**\CyberSource\Model\TmsTokenFormats**](TmsTokenFormats.md) |  | [optional] 
**tokenPermissions** | [**\CyberSource\Model\TokenPermissions**](TokenPermissions.md) |  | [optional] 
**sensitivePrivileges** | [**\CyberSource\Model\TmsSensitivePrivileges**](TmsSensitivePrivileges.md) |  | [optional] 
**nullify** | [**\CyberSource\Model\TmsNullify**](TmsNullify.md) |  | [optional] 
**networkTokenServices** | [**\CyberSource\Model\TmsNetworkTokenServices**](TmsNetworkTokenServices.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


