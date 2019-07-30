# Ptsv2payoutsOrderInformationAmountDetailsSurcharge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | The surcharge amount is included in the total transaction amount but is passed in a separate field to the issuer and acquirer for tracking. The issuer can provide information about the surcharge amount to the customer.  If the amount is positive, then it is a debit for the customer.\\ If the amount is negative, then it is a credit for the customer.  **NOTE**: This field is supported only for Visa Platform Connect (VPC) for Payouts. For CtV, the maximum string length is 8.  For processor-specific information, see the surcharge_amount field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


