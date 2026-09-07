# Ucv1sessionsDataConsumerAuthenticationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**challengeCode** | **string** | The challenge code&lt;br&gt;&lt;br&gt;  Optional field: This field cannot be configured through the Merchant Experience screens in the Business Center, but if required should be provided on a per‑transaction basis in the uc/v1/sessions API request. | [optional] 
**messageCategory** | **string** | The message category&lt;br&gt;&lt;br&gt;  Optional field: This field cannot be configured through the Merchant Experience screens in the Business Center, but if required should be provided on a per‑transaction basis in the uc/v1/sessions API request. | [optional] 
**acsWindowSize** | **string** | The acs window size&lt;br&gt;&lt;br&gt;  Optional field: This field cannot be configured through the Merchant Experience screens in the Business Center, but if required should be provided on a per‑transaction basis in the uc/v1/sessions API request. | [optional] 
**productCode** | **string** | Specifies the product code, which designates the type of transaction.&lt;br&gt;&lt;br&gt;  Specify one of the following values for this field:  - AIR: Airline purchase  Important Required for American Express SafeKey (U.S.).  - ACC: Accommodation Rental  - ACF: Account funding  - CHA: Check acceptance  - DIG: Digital Goods  - DSP: Cash Dispensing  - GAS: Fuel  - GEN: General Retail  - LUX: Luxury Retail  - PAL: Prepaid activation and load  - PHY: Goods or services purchase  - QCT: Quasi-cash transaction  - REN: Car Rental  - RES: Restaurant  - SVC: Services  - TBD: Other  - TRA: Travel&lt;br&gt;  **Important** Required for Visa Secure transactions in Brazil. Do not use this request field for any other types of transactions. | [optional] 
**languagePreference** | **string** | Preferred language to be used for cardholder authentication and challenge experiences (subject to issuer/ACS support). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


