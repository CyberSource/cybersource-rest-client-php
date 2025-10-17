# Ptsv2intentsPaymentInformationTokenizedPaymentMethod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the vaulted payment method shown to the buyer during checkout and in their PayPal account. | [optional] 
**usagePattern** | **string** | Indicates how the merchant will primarily use the vaulted payment method. Valid values: - \&quot;IMMEDIATE\&quot;: For on-demand, instant payments. These payments are variable in both amount and frequency and will be used to pay for goods or services before they are rendered to the buyer - \&quot;DEFERRED\&quot;: For post-pay payments; that is, payments for goods or services that have already been rendered to the buyer - \&quot;RECURRING_PREPAID\&quot;: For recurring payments before services are rendered. - \&quot;RECURRING_POSTPAID\&quot;: For recurring payments after services are rendered. - \&quot;THRESHOLD_PREPAID\&quot;: For payments when a pre-defined threshold is reached before services are rendered. - \&quot;THRESHOLD_POSTPAID\&quot;: For payments when a pre-defined threshold is reached after services are rendered. | [optional] 
**usageType** | **string** | Indicates the type of vaulting relationship. Valid values: - \&quot;MERCHANT\&quot;: Single merchant relationship. - \&quot;PLATFORM\&quot;: Platform hosting multiple merchants. | [optional] 
**allowMultipleTokens** | **string** | Create multiple payment tokens for the same payer, merchant/platform combination. This helps to identify customers distinctly even though they may share the same PayPal account. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


