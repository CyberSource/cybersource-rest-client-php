# UnderwritingConfigurationOrganizationInformationBusinessInformationBusinessDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerType** | **string** | Who is the business interacting with? Business to Business, Business to Consumer, Both  Possible values: - B2B - B2C - Both | [optional] 
**percentageSplitByB2B** | **float** | % Split | [optional] 
**percentageSplitByB2C** | **float** | % Split | [optional] 
**interactionTypes** | **string** | Merchant Facing: Face to Face, Card Not Present, Both  Possible values: - F2F - CNP - Both | 
**percentageSplitByF2F** | **float** | % Split | 
**percentageSplitByCNP** | **float** | % Split | 
**whenIsCustomerCharged** | **string** | When is the customer charged?  Possible values: - OneTimeBeforeServiceDelivery - OneTimeAfterServiceDelivery - Other | 
**whenIsCustomerChargedDescription** | **string** |  | [optional] 
**offerSubscriptions** | **bool** | Does Merchant Offer Subscriptions? | 
**monthlySubscriptionPercent** | **float** | % of business is monthly subscriptions | [optional] 
**quarterlySubscriptionPercent** | **float** | % of business is quarterly subscriptions | [optional] 
**semiannualSubscriptionPercent** | **float** | % of business is semi-annual subscriptions | [optional] 
**annualSubscriptionPercent** | **float** | % of business is annual subscriptions | [optional] 
**currencyType** | **string** | Processing Currency. ISO 4217, 3 characters.  Possible values: - USD - CAD - EUR - GBP - CHF | [optional] 
**estimatedMonthlySales** | **float** | Merchant&#39;s estimated monthly sales | [optional] 
**averageOrderAmount** | **float** | Merchant&#39;s average order amount | [optional] 
**largestExpectedOrderAmount** | **float** | Merchant&#39;s largest expected order amount | [optional] 
**primaryAccountUsage** | **string** | Primary purpose of account usage  Possible values: - Paying for goods / services - Repatriating overseas earnings - Intercompany transfers - Collecting funds from clients - Liquidity / FX - Payment to an individual - Investment activity - Property purchase/sale - Other | [optional] 
**sourceOfFunds** | **string** | Source of Funds  Possible values: - Business revenue - External or shareholder investment - Loan, advance or other borrowing - Donations or grants - Inter-company transfers - Proceeds of sales of assests - Other | [optional] 
**receiveMoney3rdParties** | **bool** | Will you recieve money from 3rd parties into your account? | [optional] 
**receiveTransactionFrequency** | **string** | Roughly how often do you expect to send or receive transactions?  Possible values: - One-off or infrequently - 1-20 per month - 20-50 per month - 50-100 per month - 100+ per month | [optional] 
**estimatedMonthlySpend** | **string** | What is your estimated total monthly spend?  Possible values: - &lt;$10,000 - $10,000 - $50,000 - $50,000 - $100,000 - $100,000 - $500,000 - $500,000+ | [optional] 
**countryTransactions** | **string[]** |  | [optional] 
**currenciesIn** | **string[]** |  | [optional] 
**currenciesOut** | **string[]** |  | [optional] 
**productServicesSubscription** | [**\CyberSource\Model\UnderwritingConfigurationOrganizationInformationBusinessInformationBusinessDetailsProductServicesSubscription[]**](UnderwritingConfigurationOrganizationInformationBusinessInformationBusinessDetailsProductServicesSubscription.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


