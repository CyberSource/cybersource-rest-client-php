# Ptsv2paymentreferencesTravelInformationAutoRental

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**companyName** | **string** | Merchant to send their auto rental company name | [optional] 
**affiliateName** | **string** | When merchant wants to send the affiliate name. | [optional] 
**rentalAddress** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalRentalAddress**](Ptsv2paymentsTravelInformationAutoRentalRentalAddress.md) |  | [optional] 
**returnAddress** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalReturnAddress**](Ptsv2paymentsTravelInformationAutoRentalReturnAddress.md) |  | [optional] 
**returnDateTime** | **string** | Date/time the auto was returned to the rental agency. Format: &#x60;&#x60;yyyy-MM-dd HH-mm-ss z&#x60;&#x60; This field is supported for Visa, MasterCard, and American Express. | [optional] 
**rentalDateTime** | **string** | Date/time the auto was picked up from the rental agency. Format: &#x60;yyyy-MM-dd HH-mm-ss z&#x60; This field is supported for Visa, MasterCard, and American Express. | [optional] 
**customerName** | **string** | Name of the individual making the rental agreement.  Valid data lengths by card:  |Card Specific Validation|VISA|MasterCard|Discover|AMEX| |--- |--- |--- |--- | | Filed Length| 40| 40| 29| 26| | Field Type| AN| ANS| AN| AN| | M/O/C| O| M| M| M| | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


