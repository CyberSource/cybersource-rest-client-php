# TssV2TransactionsGet200ResponsePaymentInformationPaymentType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of a payment method. This is required for non-credit card payment.  Examples: &#x60;SEARS&#x60;, &#x60;JCREW&#x60;, &#x60;PAYPAL&#x60;, &#x60;IDEAL&#x60;, &#x60;EPS&#x60; ...etc.  Please contact CyberSource Customer Support to enable the payment method of your choice and the value you should send in your payment request for this field. | [optional] 
**type** | **string** | The type of payment method. This is required for non-credit card payment.  Possible values:  - BANK_TRANSFER  - CARD (Default)  - EWALLET  - DIGITAL  - DIRECT_DEBIT  - INVOICE  - PUSH_PAYMENT  - CARRIER_BILLING  - CASH  - CHECK  - CRYPTOGRAPHIC  Please contact CyberSource Customer Support to enable the payment method of your choice and the value you should send in your payment request for this field. | [optional] 
**method** | **string** | This is an optional field.  Please contact CyberSource Customer Support to enable the payment method of your choice and the value you should send in your payment request for this field. | [optional] 
**fundingSource** | **string** | The description for this field is not available. | [optional] 
**fundingSourceAffiliation** | **string** | The description for this field is not available. | [optional] 
**credential** | **string** | The description for this field is not available. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


