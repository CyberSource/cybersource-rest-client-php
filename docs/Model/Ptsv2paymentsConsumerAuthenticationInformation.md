# Ptsv2paymentsConsumerAuthenticationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cavv** | **string** | Cardholder authentication verification value (CAVV). | [optional] 
**cavvAlgorithm** | **string** | Algorithm used to generate the CAVV for Verified by Visa or the UCAF authentication data for Mastercard Identity Check. | [optional] 
**eciRaw** | **string** | Raw electronic commerce indicator (ECI). For the description and requirements, see \&quot;Payer Authentication,\&quot; page 180. | [optional] 
**paresStatus** | **string** | Payer authentication response status. For the description and requirements, see \&quot;Payer Authentication,\&quot; page 180. | [optional] 
**veresEnrolled** | **string** | Verification response enrollment status. For the description and requirements, see \&quot;Payer Authentication,\&quot; page 180. | [optional] 
**xid** | **string** | Transaction identifier. For the description and requirements, see \&quot;Payer Authentication,\&quot; page 180. | [optional] 
**ucafAuthenticationData** | **string** | Universal cardholder authentication field (UCAF) data.  For the description and requirements, see \&quot;Payer Authentication,\&quot; page 180. | [optional] 
**ucafCollectionIndicator** | **string** | Universal cardholder authentication field (UCAF) collection indicator.  For the description and requirements, see \&quot;Payer Authentication,\&quot; page 180.  **CyberSource through VisaNet**\\ The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR7 - Position: 5 - Field: Mastercard Electronic Commerce Indicators—-UCAF Collection Indicator | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


