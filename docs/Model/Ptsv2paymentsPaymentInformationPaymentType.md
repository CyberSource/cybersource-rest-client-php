# Ptsv2paymentsPaymentInformationPaymentType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A Payment Type is an agreed means for a payee to receive legal tender from a payer. The way one pays for a commercial financial transaction. Examples: Card, Bank Transfer, Digital, Direct Debit. Possible values: - &#x60;CARD&#x60; (use this for a PIN debit transaction) - &#x60;CHECK&#x60; (use this for all eCheck payment transactions - ECP Debit, ECP Follow-on Credit, ECP StandAlone Credit) - &#x60;bankTransfer&#x60; (use for Online Bank Transafer for methods such as P24, iDeal, Estonia Bank, KCP) - &#x60;localCard&#x60; (KCP Local card via Altpay) - &#x60;carrierBilling&#x60; (KCP Carrier Billing via Altpay) | [optional] 
**method** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentTypeMethod**](Ptsv2paymentsPaymentInformationPaymentTypeMethod.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


