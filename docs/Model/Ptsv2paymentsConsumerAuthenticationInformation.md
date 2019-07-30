# Ptsv2paymentsConsumerAuthenticationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cavv** | **string** | Cardholder authentication verification value (CAVV). | [optional] 
**cavvAlgorithm** | **string** | Algorithm used to generate the CAVV for Visa Secure or the UCAF authentication data for Mastercard Identity Check. | [optional] 
**eciRaw** | **string** | Raw electronic commerce indicator (ECI).  For details, see &#x60;eci_raw&#x60; request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) | [optional] 
**paresStatus** | **string** | Payer authentication response status.  For details, see &#x60;pares_status&#x60; request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) | [optional] 
**veresEnrolled** | **string** | Verification response enrollment status.  For details, see &#x60;veres_enrolled&#x60; request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) | [optional] 
**xid** | **string** | Transaction identifier.  For details, see &#x60;xid&#x60; request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) | [optional] 
**ucafAuthenticationData** | **string** | Universal cardholder authentication field (UCAF) data.  For details, see &#x60;ucaf_authentication_data&#x60; request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) | [optional] 
**ucafCollectionIndicator** | **string** | Universal cardholder authentication field (UCAF) collection indicator.  For details, see &#x60;ucaf_collection_indicator&#x60; request field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  #### CyberSource through VisaNet The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR7 - Position: 5 - Field: Mastercard Electronic Commerce Indicators—UCAF Collection Indicator | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


