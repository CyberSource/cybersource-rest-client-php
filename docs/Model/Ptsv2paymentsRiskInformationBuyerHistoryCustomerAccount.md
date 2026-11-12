# Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lastChangeDate** | **string** | Date the cardholder&#39;s account was last changed. This includes changes to the billing or shipping address, new payment accounts or new users added. Recommended for Discover ProtectBuy. | [optional] 
**creationHistory** | **string** | The values from the enum can be: - GUEST - NEW_ACCOUNT - EXISTING_ACCOUNT | [optional] 
**modificationHistory** | **string** | This field is applicable only in case of EXISTING_ACCOUNT in creationHistory. Possible values: - ACCOUNT_UPDATED_NOW - ACCOUNT_UPDATED_PAST | [optional] 
**passwordHistory** | **string** | This only applies for EXISTING_ACCOUNT in creationHistory. The values from the enum can be: - PASSWORD_CHANGED_NOW - PASSWORD_CHANGED_PAST - PASSWORD_NEVER_CHANGED | [optional] 
**createDate** | **string** | Date the cardholder opened the account. Recommended for Discover ProtectBuy. This only applies for EXISTING_ACCOUNT in creationHistory. | [optional] 
**passwordChangeDate** | **string** | Date the cardholder last changed or reset password on account. Recommended for Discover ProtectBuy. This only applies for PASSWORD_CHANGED_PAST in passwordHistory. | [optional] 
**previousLogin** | [**\CyberSource\Model\Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccountPreviousLogin**](Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccountPreviousLogin.md) |  | [optional] 
**previousOrder** | [**\CyberSource\Model\Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccountPreviousOrder**](Ptsv2paymentsRiskInformationBuyerHistoryCustomerAccountPreviousOrder.md) |  | [optional] 
**paymentMethodsCount** | **float** | Number of Payment methods (all types) created on customer account | [optional] 
**totalOrdersCount** | **float** | Number of total orders made by this customer account | [optional] 
**proofOfIdReceived** | **bool** | True if the customer provided a proof of any id | [optional] 
**lastEmailChangeDate** | **string** | Date of last email change. Format: &#39;YYYYMMDD&#39; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


