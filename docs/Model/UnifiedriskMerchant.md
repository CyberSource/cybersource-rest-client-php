# UnifiedriskMerchant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categoryCode** | **string** | Merchant category code (MCC) related to the type of services or goods the merchant provides for the transaction. It is strongly recommended that this conforms to an international standard such as ISO | [optional] 
**merchantId** | **string** | Identifier of the merchant in a transaction. This should be fully unique; two different merchants should not have the same merchantId. It is also essential that this merchantId is consistent over time | [optional] 
**name** | **string** | Name of the merchant in merchantId. This should include enough information to clearly identify the merchant, whenever possible. | [optional] 
**currency** | **string** | Merchant&#39;s local currency (ISO 4217 3-letter code). Used for currency conversion calculations. | [optional] 
**merchantDescriptor** | [**\CyberSource\Model\UnifiedriskMerchantMerchantDescriptor**](UnifiedriskMerchantMerchantDescriptor.md) |  | [optional] 
**address** | [**\CyberSource\Model\UnifiedriskMerchantAddress**](UnifiedriskMerchantAddress.md) |  | [optional] 
**industryOfBusiness** | **string** | Industry sector or vertical the merchant operates in (e.g., RETAIL, HOSPITALITY, HEALTHCARE, FINANCIAL_SERVICES). Provides broader business context beyond the MCC | [optional] 
**status** | **string** | Current operational status of the merchant account (e.g., ACTIVE, SUSPENDED, TERMINATED, PENDING_REVIEW). Drives eligibility checks during transaction processing | [optional] 
**type** | **string** | Classification of the merchant&#39;s business type (e.g., SOLE_TRADER, PARTNERSHIP, LIMITED_COMPANY, NON_PROFIT). Used for regulatory and underwriting purposes | [optional] 
**tradingAddress** | [**\CyberSource\Model\UnifiedriskMerchantTradingAddress**](UnifiedriskMerchantTradingAddress.md) |  | [optional] 
**referenceNumber** | **string** | An external or internal reference number associated with the merchant, used for cross-system reconciliation (e.g., CRM ID, acquirer reference, banking platform reference) | [optional] 
**merchantDefinedData** | **string** | Free-form merchant-provided data for risk assessment, allowing supplementary information not captured by standard fields (e.g., loyalty tier, custom risk flags) | [optional] 
**merchantSellerId** | **string** | Unique identifier assigned to this merchant as a seller within a marketplace or platform (e.g., Amazon Marketplace seller ID). Used to distinguish sub-merchants in aggregator models | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


