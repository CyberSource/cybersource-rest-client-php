# TssV2TransactionsPost201ResponseEmbeddedOrderInformationBillTo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | Customer’s first name. This name must be the same as the name on the card.  For Payouts: This field may be sent only for FDC Compass.  For processor-specific information, see the customer_firstname field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**lastName** | **string** | Customer’s last name. This name must be the same as the name on the card.  For Payouts: This field may be sent only for FDC Compass.  For processor-specific information, see the customer_lastname field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**email** | **string** | Customer&#39;s email address, including the full domain name.  For processor-specific information, see the customer_email field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**country** | **string** | Country of the billing address. Use the two-character ISO Standard Country Codes.  For processor-specific information, see the bill_country field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**phoneNumber** | **string** | Customer’s phone number.  For Payouts: This field may be sent only for FDC Compass.  CyberSource recommends that you include the country code when the order is from outside the U.S.  For processor-specific information, see the customer_phone field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


