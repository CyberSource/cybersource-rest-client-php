# TssV2TransactionsGet200ResponseOrderInformationShipTo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name of the recipient.  **Processor specific maximum length**  - Litle: 25 - All other processors: 60 | [optional] 
**lastName** | **string** | Last name of the recipient.  **Processor specific maximum length**  - Litle: 25 - All other processors: 60 | [optional] 
**address1** | **string** | First line of the shipping address. | [optional] 
**address2** | **string** | Second line of the shipping address. | [optional] 
**locality** | **string** | City of the shipping address. | [optional] 
**administrativeArea** | **string** | State or province of the shipping address. Use the State, Province, and Territory Codes for the United States and Canada. | [optional] 
**postalCode** | **string** | Postal code for the shipping address. The postal code must consist of 5 to 9 digits.  When the billing country is the U.S., the 9-digit postal code must follow this format: [5 digits][dash][4 digits]  Example 12345-6789  When the billing country is Canada, the 6-digit postal code must follow this format: [alpha][numeric][alpha][space][numeric][alpha][numeric]  Example A1B 2C3 | [optional] 
**company** | **string** | Name of the customer’s company.  For processor-specific information, see the company_name field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**country** | **string** | Country of the shipping address. Use the two character ISO Standard Country Codes. | [optional] 
**phoneNumber** | **string** | Phone number for the shipping address. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


