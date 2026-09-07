# VpriTransactionInsightsAdditionalDataCardBinData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**issuerBin** | **string** | The BIN submitted for lookup, consisting of the first 6 or 8 digits of the card number, identifying the issuing institution. | [optional] 
**issuerBinCountry** | **string** | ISO 3166-1 alpha-2 country code of the card-issuing institution. Useful for detecting geographic mismatches between issuer and transaction origin. | [optional] 
**issuerName** | **string** | Full name of the card-issuing bank or financial institution. | [optional] 
**cardBin** | **string** | Resolved card BIN returned by the lookup service, which may differ from issuerBin in certain co-branded or affiliated card scenarios. | [optional] 
**cardFundingSource** | **string** | Funding source type of the card indicating how transactions are funded (e.g., CREDIT, DEBIT, PREPAID). Used for risk segmentation by payment method. | [optional] 
**cardFundingSourceSubType** | **string** | Sub-classification of the funding source (e.g., business, consumer). Enables more granular risk profiling within a funding source category. | [optional] 
**cardBrand** | **string** | Card network brand code (e.g., 001 for Visa, 002 for Mastercard). Used for brand-specific fraud rule application. | [optional] 
**cardProductID** | **string** | Product identifier for the card product issued. May be an alphanumeric code or a product name depending on the issuer. | [optional] 
**cardProductDescription** | **string** | Human-readable description of the card product. Useful for client-facing displays or product-level fraud analysis. | [optional] 
**status** | **string** | Result status of the BIN lookup. Indicates whether the BIN was successfully matched in the lookup service.  Possible values: - matched - no_match - error | [optional] 
**warnings** | [**\CyberSource\Model\UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsightsInsightsWarnings[]**](UnifiedRiskPost201ResponseResultsRISKINSIGHTSPackagesTransactionInsightsInsightsWarnings.md) | BIN-lookup-specific warnings. An empty array indicates a clean lookup. Warning codes include BIN_NO_MATCH, BIN_INPUT_MISSING, BIN_LOOKUP_ERROR, BIN_AMBIGUOUS, BIN_LOOKUP_INPUT_ERROR. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


