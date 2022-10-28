# Upv1capturecontextsOrderInformationBillTo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address1** | **string** | Payment card billing street address as it appears on the credit card issuer’s records. | [optional] 
**address2** | **string** | Used for additional address information. For example: _Attention: Accounts Payable_ Optional field. | [optional] 
**address3** | **string** | Additional address information (third line of the billing address) | [optional] 
**address4** | **string** | Additional address information (fourth line of the billing address) | [optional] 
**administrativeArea** | **string** | State or province of the billing address. Use the [State, Province, and Territory Codes for the United States and Canada](https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf). | [optional] 
**buildingNumber** | **string** | Building number in the street address. | [optional] 
**country** | **string** | Payment card billing country. Use the two-character [ISO Standard Country Codes](http://apps.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf). | [optional] 
**district** | **string** | Customer’s neighborhood, community, or region (a barrio in Brazil) within the city or municipality | [optional] 
**locality** | **string** | Payment card billing city. | [optional] 
**postalCode** | **string** | Postal code for the billing address. The postal code must consist of 5 to 9 digits. | [optional] 
**company** | [**\CyberSource\Model\Upv1capturecontextsOrderInformationBillToCompany**](Upv1capturecontextsOrderInformationBillToCompany.md) |  | [optional] 
**email** | **string** | Customer&#39;s email address, including the full domain name. | [optional] 
**firstName** | **string** | Customer’s first name. This name must be the same as the name on the card | [optional] 
**lastName** | **string** | Customer’s last name. This name must be the same as the name on the card. | [optional] 
**middleName** | **string** | Customer’s middle name. | [optional] 
**nameSuffix** | **string** | Customer’s name suffix. | [optional] 
**title** | **string** | Title. | [optional] 
**phoneNumber** | **string** | Customer’s phone number. | [optional] 
**phoneType** | **string** | Customer&#39;s phone number type.  #### For Payouts: This field may be sent only for FDC Compass.  Possible Values: * day * home * night * work | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


