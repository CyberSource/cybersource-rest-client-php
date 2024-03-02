# Ptsv2creditsSenderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name of the sender of the funds. For Gaming Payment of Winnings transactions these are the merchant details. * Required for Mastercard Payment of Winnings (POW) transactions. * Must not be all numeric. * Must contain only ASCII characters in range 32-122. * Must not be greater than 35 characters including spaces. * Required for POW on Barclays. | [optional] 
**lastName** | **string** | Last name of the sender of the funds. For Gaming Payment of Winnings transactions these are the merchant details. * Optional for Mastercard Payment of Winnings (POW) transactions. * Must not be all numeric. * Must contain only ASCII characters in range 32-122. * Must not be greater than 35 characters including spaces. * Optional for POW on Barclays. | [optional] 
**address1** | **string** | Street address of the sender of the funds. For Gaming Payment of Winnings transactions these are the merchant details. * Required for Mastercard Payment of Winnings (POW) transactions. * Must not be all numeric. * Must contain only ASCII characters in range 32-122. * Must not be greater than 50 characters including spaces. * Required for POW on Barclays. | [optional] 
**locality** | **string** | City of the sender of the funds. For Gaming Payment of Winnings transactions these are the merchant details. * Required for Mastercard Payment of Winnings (POW) transactions. * Must not be all numeric. * Must contain only ASCII characters in range 32-122. * Must not be greater than 25 characters including spaces. * Required for POW on Barclays. | [optional] 
**countryCode** | **string** | Country of the sender of the funds. For Gaming Payment of Winnings transactions these are the merchant details. * Required for Mastercard Payment of Winnings (POW) transactions. * Must be a valid three character ISO country code as defined by ISO 3166. * Must not be greater than 3 characters. * Required for POW on Barclays. | [optional] 
**account** | [**\CyberSource\Model\Ptsv2creditsSenderInformationAccount**](Ptsv2creditsSenderInformationAccount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


