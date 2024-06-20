# TmsEmbeddedInstrumentIdentifierTokenizedCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The network token card association brand Possible Values: - visa - mastercard - americanexpress | [optional] 
**source** | **string** | This enumeration value indicates the origin of the payment instrument (PAN) and the technique employed to supply the payment instrument data. Possible Values: - TOKEN - ISSUER - ONFILE | [optional] 
**state** | **string** | State of the network token or network token provision Possible Values: - ACTIVE : Network token is active. - SUSPENDED : Network token is suspended. This state can change back to ACTIVE. - DELETED : This is a final state for a network token instance. - UNPROVISIONED : A previous network token provision was unsuccessful. | [optional] 
**enrollmentId** | **string** | Unique Identifier for the enrolled PAN. This Id is provided by the card association when a network token is provisioned successfully. | [optional] 
**tokenReferenceId** | **string** | Unique Identifier for the network token. This Id is provided by the card association when a network token is provisioned successfully. | [optional] 
**reason** | **string** | Issuers state for the network token Possible Values: - INVALID_REQUEST : The network token provision request contained invalid data. - CARD_VERIFICATION_FAILED : The network token provision request contained data that could not be verified. - CARD_NOT_ELIGIBLE : Card can currently not be used with issuer for tokenization. - CARD_NOT_ALLOWED : Card can currently not be used with card association for tokenization. - DECLINED : Card can currently not be used with issuer for tokenization. - SERVICE_UNAVAILABLE : The network token service was unavailable or timed out. - SYSTEM_ERROR : An unexpected error occurred with network token service, check configuration. | [optional] 
**number** | **string** | The token requestors network token | [optional] 
**expirationMonth** | **string** | Two-digit month in which the network token expires.  Format: &#x60;MM&#x60;.  Possible Values: &#x60;01&#x60; through &#x60;12&#x60;. | [optional] 
**expirationYear** | **string** | Four-digit year in which the network token expires.  Format: &#x60;YYYY&#x60;. | [optional] 
**cryptogram** | **string** | Generated value used in conjunction with the network token for making a payment. | [optional] 
**card** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierTokenizedCardCard**](TmsEmbeddedInstrumentIdentifierTokenizedCardCard.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


