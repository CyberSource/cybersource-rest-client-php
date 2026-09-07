# UnifiedriskMerchantMerchantDescriptor

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Your merchant name.**Note** For Paymentech processor using Cybersource Payouts, the maximum data length is 22.#### PIN debit Your business name. This name is displayed on the cardholder&#39;s statement. When you include more than one consecutive space, extra spaces are removed.When you do not include this value in your PIN debit request, the merchant name from your account is used. **Important** This value must consist of English characters.Optional field for PIN debit credit or PIN debit pu | [optional] 
**url** | **string** | Address of company&#39;s website provided by merchant | [optional] 
**email** | **string** | Primary contact email address of the merchant, used for notifications, dispute communications, and merchant verification purposes | [optional] 
**phoneNumber** | **string** | Primary phone number of the merchant in E.164 format (e.g., +14155552671), used for contact and identity verification | [optional] 
**riskProfile** | **string** | Risk classification or category assigned to the merchant based on their industry, transaction patterns, and historical fraud rates (e.g., HIGH, MEDIUM, LOW) | [optional] 
**authorizedSignatories** | **string** | Names or identifiers of individuals authorized to sign agreements and take financial actions on behalf of the merchant entity | [optional] 
**closeDate** | **string** | The date the merchant account was or is scheduled to be closed, in ISO 8601 format (YYYY-MM-DD). Used for tracking merchant lifecycle events | [optional] 
**countryIncorporated** | **string** | The ISO 3166-1 alpha-3 country code where the merchant business is legally incorporated (e.g., GBR, USA, IND) | [optional] 
**creditScore** | **int** | The merchant&#39;s score as assessed by the acquirer or a credit bureau, used for underwriting and risk decisions during merchant onboarding | [optional] 
**dateOfEstablishment** | **string** | The date the merchant&#39;s business was formally established or incorporated, in ISO 8601 format (YYYY-MM-DD). Used for business tenure risk assessment | [optional] 
**dateofOwnershipChange** | **string** | The date of the most recent ownership change for the merchant entity, in ISO 8601 format. Ownership changes can indicate elevated risk and require re-underwriting | [optional] 
**ecommerceSupport** | **string** | Indicates whether the merchant supports e-commerce transactions and the level of online payment capability (e.g., FULL, PARTIAL, NONE) | [optional] 
**expectedAverageTicketSize** | [**\CyberSource\Model\UnifiedriskMerchantMerchantDescriptorExpectedAverageTicketSize**](UnifiedriskMerchantMerchantDescriptorExpectedAverageTicketSize.md) |  | [optional] 
**expectedAnnualSales** | [**\CyberSource\Model\UnifiedriskMerchantMerchantDescriptorExpectedAnnualSales**](UnifiedriskMerchantMerchantDescriptorExpectedAnnualSales.md) |  | [optional] 
**expectedMonthlySales** | [**\CyberSource\Model\UnifiedriskMerchantMerchantDescriptorExpectedMonthlySales**](UnifiedriskMerchantMerchantDescriptorExpectedMonthlySales.md) |  | [optional] 
**limitType** | **string** | Defines the type of financial limit applied to the merchant (e.g., SINGLE_TRANSACTION, DAILY, MONTHLY, ANNUAL). Used to enforce risk controls during payment processing | [optional] 
**limitValue** | [**\CyberSource\Model\UnifiedriskMerchantMerchantDescriptorLimitValue**](UnifiedriskMerchantMerchantDescriptorLimitValue.md) |  | [optional] 
**hierarchy** | [**\CyberSource\Model\UnifiedriskMerchantMerchantDescriptorHierarchy**](UnifiedriskMerchantMerchantDescriptorHierarchy.md) |  | [optional] 
**primaryGoods** | **string** | The primary category of goods or services sold by the merchant (e.g., Electronics, Clothing, Travel Services). Used alongside MCC for granular risk profiling | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


