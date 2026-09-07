# UnifiedriskAuthentication

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticationId** | **string** | Unique identifier assigned to an authentication attempt | [optional] 
**method** | **string** | Authentication method used during the authentication/MFA process | [optional] 
**mfaSuccessful** | **bool** | Whether multi-factor authentication was completed successfully | [optional] 
**phoneNumber** | **string** | Phone number used for authentication (e.g., SMS/voice MFA) | [optional] 
**email** | **string** | Email address used for authentication (e.g., verification code delivery) | [optional] 
**other** | **string** | Additional authentication-related information not captured by other fields | [optional] 
**threeDSRequestorId** | **string** | Unique identifier assigned to the 3D Secure requestor (typically the merchant or payment service provider) by the directory server for authentication routing | [optional] 
**threeDSRequestorName** | **string** | The business or brand name of the 3D Secure requestor as registered with the card network directory server | [optional] 
**challenge** | [**\CyberSource\Model\UnifiedriskAuthenticationChallenge**](UnifiedriskAuthenticationChallenge.md) |  | [optional] 
**decoupledIndicator** | **string** | Indicates whether decoupled authentication is requested or supported, allowing the cardholder to authenticate outside the main transaction flow. Values - \&quot;Y\&quot; (supported and preferred), \&quot;N\&quot; (do not use) | [optional] 
**decoupledMaxTime** | **string** | Maximum time in minutes allowed for the cardholder to complete a decoupled authentication, after which the session expires | [optional] 
**threeRIIndicator** | **string** | Indicates the reason for the 3DS Requestor Initiated (3RI) transaction - a merchant-initiated authentication without active cardholder participation. Values defined by EMVCo 3DS specification | [optional] 
**authenticationIndicator** | **string** | Indicates the type of authentication request being made, such as payment authentication, non-payment authentication, or recurring/installment transactions | [optional] 
**authenticationDate** | **string** | The date and time when the cardholder completed authentication, used for tracking authentication timing and fraud analysis | [optional] 
**languagePreference** | **string[]** | The cardholder&#39;s preferred language for the authentication challenge interface, expressed as an IETF BCP 47 language tag (e.g., en-US, fr-FR) | [optional] 
**spcSupport** | **string** | Indicates whether the merchant&#39;s environment supports the Secure Payment Confirmation (SPC) protocol for frictionless authentication using FIDO2/WebAuthn credentials | [optional] 
**spcIncompleteIndicator** | **string** | Indicates the reason why an SPC (Secure Payment Confirmation) transaction was not completed, helping distinguish cardholder-initiated abandonment from technical failures | [optional] 
**version** | **string** | The 3D Secure protocol version used for this authentication attempt (e.g., \&quot;2.1.0\&quot;, \&quot;2.2.0\&quot;), which determines which fields and features are supported | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


