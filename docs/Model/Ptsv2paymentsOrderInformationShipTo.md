# Ptsv2paymentsOrderInformationShipTo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name of the recipient.  **Processor specific maximum length**  - Litle: 25 - All other processors: 60 | [optional] 
**lastName** | **string** | Last name of the recipient.  **Processor-specific maximum length**  - Litle: 25 - All other processors: 60 | [optional] 
**address1** | **string** | First line of the shipping address. | [optional] 
**address2** | **string** | Second line of the shipping address. | [optional] 
**locality** | **string** | City of the shipping address. | [optional] 
**administrativeArea** | **string** | State or province of the shipping address. Use the State, Province, and Territory Codes for the United States and Canada. | [optional] 
**postalCode** | **string** | Postal code for the shipping address. The postal code must consist of 5 to 9 digits.  When the billing country is the U.S., the 9-digit postal code must follow this format: [5 digits][dash][4 digits]  Example 12345-6789  When the billing country is Canada, the 6-digit postal code must follow this format: [alpha][numeric][alpha][space][numeric][alpha][numeric]  Example A1B 2C3  **American Express Direct**\\ Before sending the postal code to the processor, CyberSource removes all nonalphanumeric characters and, if the remaining value is longer than nine characters, truncates the value starting from the right side. | [optional] 
**country** | **string** | Country of the shipping address. Use the two-character ISO Standard Country Codes. | [optional] 
**district** | **string** | Neighborhood, community, or region within a city or municipality. | [optional] 
**buildingNumber** | **string** | Building number in the street address. For example, the building number is 187 in the following address:  Rua da Quitanda 187 | [optional] 
**phoneNumber** | **string** | Phone number associated with the shipping address. | [optional] 
**company** | **string** | Name of the customer’s company.  For processor-specific information, see the company_name field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**destinationTypes** | **string** | Shipping destination of item. Example: Commercial, Residential, Store | [optional] 
**destinationCode** | **int** | Indicates destination chosen for the transaction. Possible values: - 01- Ship to cardholder billing address - 02- Ship to another verified address on file with merchant - 03- Ship to address that is different than billing address - 04- Ship to store (store address should be populated on request) - 05- Digital goods - 06- Travel and event tickets, not shipped - 07- Other | [optional] 
**method** | **string** | Shipping method for the product. Possible values: - lowcost: Lowest-cost service - sameday: Courier or same-day service - oneday: Next-day or overnight service - twoday: Two-day service - threeday: Three-day service - pickup: Store pick-up - other: Other shipping method - none: No shipping method because product is a service or subscription Required for American Express SafeKey (U.S.). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


