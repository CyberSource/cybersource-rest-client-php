# UnifiedriskOrderBilling

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addressLine1** | **string** | Payment card billing street address as it appears on the credit card issuer&#39;s records. | [optional] 
**addressLine2** | **string** | Used for additional address information. For example: _Attention: Accounts Payable_ Optional field. This value is used for AVS. | [optional] 
**administrativeArea** | **string** | State or province of the billing address. Use the [State, Province, and Territory Codes for the United States and Canada](https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf).For Payouts: This field may be sent only for FDC Compass.##### CyberSource through VisaNet Credit card networks cannot process transactions that contain non-ASCII characters. CyberSource through VisaNet accepts and stores non-ASCII characters correctly and displays them correctl | [optional] 
**country** | **string** | Payment card billing country. Use the two-character ISO Standard Country Codes | [optional] 
**locality** | **string** | Payment card billing city. | [optional] 
**firstName** | **string** | Customer&#39;s first name. This name must be the same as the name on the card. | [optional] 
**lastName** | **string** | Customer&#39;s last name. This name must be the same as the name on the card. | [optional] 
**phoneNumber** | **string** | Customer&#39;s phone number.It is recommended that you include the country code when the order is from outside the U.S. | [optional] 
**email** | **string** | Customer&#39;s email address, including the full domain name. | [optional] 
**postalCode** | **string** | Postal code for the billing address. The postal code must consist of 5 to 9 digits.When the billing country is the U.S., the 9-digit postal code must follow this format: [5 digits][dash][4 digits] | [optional] 
**addressLine3** | **string** | Third line of the billing address for additional information such as building name, estate, or care-of address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


