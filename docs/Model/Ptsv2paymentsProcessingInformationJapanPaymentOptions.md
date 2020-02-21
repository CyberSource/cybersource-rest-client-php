# Ptsv2paymentsProcessingInformationJapanPaymentOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentMethod** | **string** | This value is a 2-digit code indicating the payment method. Use Payment Method Code value that applies to the tranasction. - 10 (One-time payment) - 21, 22, 23, 24  (Bonus(one-time)payment) - 61 (Installment payment) - 31, 32, 33, 34  (Integrated (Bonus + Installment)payment) - 80 (Revolving payment) | [optional] 
**installments** | **string** | Number of Installments. | [optional] 
**terminalId** | **string** | This value is the 13-digit JCCA number. | [optional] 
**firstBillingMonth** | **string** | Billing month in MM format. | [optional] 
**businessName** | **string** | Business name in Japanese characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on CyberSource through VisaNet. | [optional] 
**businessNameKatakana** | **string** | Business name in Katakana characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on CyberSource through VisaNet. | [optional] 
**jis2TrackData** | **string** | Japanese Industrial Standard Type 2 (JIS2) track data from the front of the card. This field is supported only on JCN Gateway. | [optional] 
**businessNameAlphaNumeric** | **string** | Business name in alphanumeric characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on CyberSource through VisaNet. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


