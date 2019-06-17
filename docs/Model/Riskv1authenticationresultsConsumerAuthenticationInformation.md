# Riskv1authenticationresultsConsumerAuthenticationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticationTransactionId** | **string** | Payer authentication transaction identifier passed to link the check enrollment and validate authentication messages. **Note**: Required for Standard integration for enroll service. Required for Hybrid integration for validate service. | [optional] 
**signedPares** | **string** | Payer authentication result (PARes) message returned by the card-issuing bank. If you need to show proof of enrollment checking, you may need to decrypt and parse the string for the information required by the payment card company. For more information, see \&quot;Storing Payer Authentication Data,\&quot; page 160. Important The value is in base64. You must remove all carriage returns and line feeds before adding the PARes to the request. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


