# Ptsv2paymentsSenderInformationAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | The account number of the entity funding the transaction. The value for this field can be a payment card account number or bank account number. | [optional] 
**type** | **string** | Identifies the sender&#39;s account type. This field is applicable for AFT transactions.  Valid values are:   - &#x60;00&#x60; for Other   - &#x60;01&#x60; for Routing Transit Number (RTN) + Bank Account Number (BAN)   - &#x60;02&#x60; for International Bank Account Number (IBAN)   - &#x60;03&#x60; for Card Account   - &#x60;04&#x60; for Email   - &#x60;05&#x60; for Phone Number   - &#x60;06&#x60; for Bank Account Number (BAN) + Bank Identification Code (BIC), also known as a SWIFT code   - &#x60;07&#x60; for Wallet ID   - &#x60;08&#x60; for Social Network ID | [optional] 
**fundsSource** | **string** | Source of funds. Possible Values:  - &#x60;01&#x60;: Credit.  - &#x60;02&#x60;: Debit.  - &#x60;03&#x60;: Prepaid.  - &#x60;04&#x60;: Deposit Account.  - &#x60;05&#x60;: Mobile Money Account.  - &#x60;06&#x60;: Cash.  - &#x60;07&#x60;: Other.  - &#x60;V5&#x60;: Debits / deposit access other than those linked to the cardholders&#39; scheme.  - &#x60;V6&#x60;: Credit accounts other than those linked to the cardholder&#39;s scheme. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


