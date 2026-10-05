# KeyUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keyName** | **string** | Unique  name for this key within the agent. Must be unique per agent. | [optional] 
**publicKey** | **string** | Base64-encoded public key. Supported formats are PEM (PKCS#8 or PKCS#1) and JWK. Must be provided together with &#x60;algorithm&#x60;. | [optional] 
**algorithm** | **string** | HTTP Signature signing algorithm (RFC 9421 §3.3 registry). Must be provided together with &#x60;publicKey&#x60;:  - ***rsa-pss-sha256*** — RSA-PSS with SHA-256  - ***rsa-pss-sha512*** — RSA-PSS with SHA-512  - ***ecdsa-p256-sha256*** — ECDSA on P-256 curve with SHA-256  - ***ecdsa-p384-sha384*** — ECDSA on P-384 curve with SHA-384  - ***ed25519*** — EdDSA on Curve25519   Possible values: - rsa-pss-sha256 - rsa-pss-sha512 - ecdsa-p256-sha256 - ecdsa-p384-sha384 - ed25519 | [optional] 
**expirationDate** | [**\DateTime**](\DateTime.md) | Key expiration date-time in UTC. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


