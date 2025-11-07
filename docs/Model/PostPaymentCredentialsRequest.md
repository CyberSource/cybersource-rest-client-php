# PostPaymentCredentialsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentCredentialType** | **string** | The type of payment credentials to be returned. By default, payment credentials include network token and cryptogram or dynamic CVV. If \&quot;NETWORK_TOKEN\&quot; is supplied then only network token card number will be returned and no cryptogram or dynamic CVV will be requested. If \&quot;SECURITY_CODE\&quot; is supplied then dynamic CVV will be requested and returned with the network token card number. Dynamic CVV is only supported for Amex and SCOF. If \&quot;CRYPTOGRAM\&quot; is supplied then cryptogram will be requested and returned with the network token card number. Cryptogram is NOT supported for Amex.  Possible Values:   - NETWORK_TOKEN   - SECURITY_CODE   - CRYPTOGRAM | [optional] 
**transactionType** | **string** | Specifies the type of transaction for which the network token credentials are required. Possible Values:   - ECOM: Ecommerce transaction. If transactionType is not provided, ECOM is set as the default.   - AFT: Account Funding Transaction. This is only supported for VISA and paymentCredentialType of CRYPTOGRAM. | [optional] 
**clientCorrelationId** | **string** | Used to correlate authentication and payment credential requests. | [optional] 
**orderInformation** | [**\CyberSource\Model\Tmsv2tokenstokenIdpaymentcredentialsOrderInformation**](Tmsv2tokenstokenIdpaymentcredentialsOrderInformation.md) |  | [optional] 
**merchantInformation** | [**\CyberSource\Model\Tmsv2tokenstokenIdpaymentcredentialsMerchantInformation**](Tmsv2tokenstokenIdpaymentcredentialsMerchantInformation.md) |  | [optional] 
**deviceInformation** | [**\CyberSource\Model\Tmsv2tokenstokenIdpaymentcredentialsDeviceInformation**](Tmsv2tokenstokenIdpaymentcredentialsDeviceInformation.md) |  | [optional] 
**authenticatedIdentities** | [**\CyberSource\Model\Tmsv2tokenstokenIdpaymentcredentialsAuthenticatedIdentities[]**](Tmsv2tokenstokenIdpaymentcredentialsAuthenticatedIdentities.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


