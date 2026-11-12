# Ucv1sessionsPaymentConfigurationsCLICKTOPAY

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**autoCheckEnrollment** | **bool** | Where Click to Pay is the payment type selected by the customer and the customer manually enters their card, the option to enroll their card in Click to Pay will be auto-checked if this field is set to \&quot;true\&quot;. &lt;br&gt;&lt;br&gt;  This is only available where the merchant and cardholder are based in the following countries and the billing type is set to \&quot;FULL\&quot; or \&quot;PARTIAL\&quot;.   - UAE   - Argentina   - Brazil   - Chile   - Colombia   - Kuwait   - Mexico   - Peru   - Qatar   - Saudi Arabia   - Ukraine   - South Africa&lt;br&gt;&lt;br&gt;  If false, this is not present or not supported in the market.  Enrollment in Click to Pay is not checked for the customer when completing manual card entry.&lt;br&gt;&lt;br&gt; Optional field: This field can be configured through the Merchant Experience Screens in the Business Center.  The configured value may be overridden on a per transaction basis in the uc/v1/sessions API request. | [optional] 
**allowedCardNetworks** | **string[]** | allowedCardNetworks (optional): Specifies the card networks eligible for Click to Pay. When provided, only the listed networks invoke Click to Pay; when omitted, all Click to Pay–supported networks in the top-level allowedCardNetworks configuration are eligible.&lt;br&gt;&lt;br&gt;  Optional field: This field can be configured through the Merchant Experience Screens in the Business Center.  The configured value may be overridden on a per transaction basis in the uc/v1/sessions API request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


