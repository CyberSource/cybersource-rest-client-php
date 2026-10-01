# BoardingPayoutsConfigurationsProcessors

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Indicates if the payment route is enabled. Allows the acquirer to enable/disable processing based on the config setting but to retain the configuration profile. | [optional] 
**acquirer** | [**\CyberSource\Model\BoardingPayoutsConfigurationsAcquirer**](BoardingPayoutsConfigurationsAcquirer.md) |  | [optional] 
**currencies** | **string[]** | List of supported [ISO 4217](https://developer.cybersource.com/docs/cybs/en-us/currency-codes/reference/all/na/currency-codes/currency-codes.html) alpha-3 currency codes. | [optional] 
**countries** | **string[]** | List of [ISO 3166-1](https://developer.cybersource.com/docs/cybs/en-us/country-codes/reference/all/na/country-codes/country-codes.html) alpha-2 country codes | [optional] 
**merchantId** | **string** | A unique identifier value assigned by Visa for each merchant included in the identification program. | [optional] 
**terminalId** | **string** | This field contains a code that identifies a terminal at the card acceptor location. This field is used in all messages related to a transaction. If sending transactions from a card not present environment, use the same value for all transactions. | [optional] 
**businessCategoryValidation** | **bool** | Default: false  Override Business Application Indicator and Merchant Category Code validations for payout transaction types. | [optional] 
**payoutsTransactionTypes** | **string[]** | The supported Payouts transaction types for the processor. | [optional] 
**merchantPseudoAbaNumber** | **string** | This is a number that uniquely identifies the merchant for PPGS transactions. | [optional] 
**binLookupEligibilityCheck** | **string[]** | List of transaction types eligible for BIN Lookup Payouts Eligibility Check.  Supports \&quot;PULL_FUNDS_TRANSFER\&quot; and \&quot;PUSH_FUNDS_TRANSFER\&quot;. | [optional] 
**feeProgramId** | **string** | This field identifies the interchange fee program applicable to each financial transaction. Fee program indicator (FPI) values correspond to the fee descriptor and rate for each existing fee program.  This field can be regarded as informational only in all authorization messages. | [optional] 
**cpsAuthorizationCharacteristicsId** | **string** | The Authorization Characteristics Indicator (ACI) is a code used by the acquirer to request CPS qualification. If applicable, Visa changes the code to reflect the results of its CPS evaluation. | [optional] 
**nationalReimbursementFee** | **string** | A client-supplied interchange amount. | [optional] 
**settlementServiceId** | **string** | This flag enables the merchant to request for a particular settlement service to be used for settling the transaction.  Note: The default value is VIP. This field is only relevant for specific countries where the acquirer has to select National Settlement in order to settle in the national net settlement service.change   Possible values: - INTERNATIONAL_SETTLEMENT - VIP_TO_DECIDE - NATIONAL_SETTLEMENT | [optional] 
**sharingGroupCode** | **string** | This U.S.-only field is optionally used by PIN Debit Gateway Service participants (merchants and acquirers) to specify the network access priority. VisaNet checks to determine if there are issuer routing preferences for a network specified by the sharing group code. If an issuer preference exists for one of the specified debit networks, VisaNet makes a routing selection based on issuer preference. If an preference exists for multiple specified debit networks, or if no issuer preference exists, VisaNet makes a selection based on acquirer routing priorities.  Possible values: - ACCEL_EXCHANGE_E - CU24_C - INTERLINK_G - MAESTRO_8 - NYCE_Y - NYCE_F - PULSE_S - PULSE_L - PULSE_H - STAR_N - STAR_W - STAR_Z - STAR_Q - STAR_M - VISA_V | [optional] 
**allowCryptoCurrencyPurchase** | **bool** | This field allows a merchant to send a flag that specifies whether the payment is for the purchase of cryptocurrency. | [optional] 
**merchantMvv** | **string** | Merchant Verification Value (MVV) is used to identify merchants that participate in a variety of programs. The MVV is unique to the merchant. | [optional] 
**electronicCommerceId** | **string** | This code identifies the level of security used in an electronic commerce transaction over an open network (for example, the Internet).  Possible values: - INTERNET - RECURRING - RECURRING_INTERNET - VBV_FAILURE - VBV_ATTEMPTED - VBV - SPA_FAILURE - SPA_ATTEMPTED - SPA | [optional] 
**merchantDescriptor** | [**\CyberSource\Model\BoardingPayoutsConfigurationsMerchantDescriptor**](BoardingPayoutsConfigurationsMerchantDescriptor.md) |  | [optional] 
**operatingEnvironment** | **string** | Initiation channel of the transfer request.     Possible values: - WEB - MOBILE - BANK - KIOSK | [optional] 
**interchangeRateDesignator** | **string** | The IRD used for clearing the transaction on the Mastercard network. | [optional] 
**partnerIdentifier** | **string** | Mastercard-assigned unique ID for registered partner. Mastercard Send Only. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


