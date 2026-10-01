# ActivateMerchantKeyResponse200

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique key identifier (UUID). Generated from VMRS. | 
**merchantId** | **string** | Merchant identifier (UUID) | 
**merchantName** | **string** | Merchant name | 
**keyName** | **string** | Unique name for the key | 
**encryptionKey** | **string** | Base64-encoded public key | 
**algorithm** | **string** | JWE key wrap algorithm  Possible values: - RSA-OAEP - RSA-OAEP-256 - RSA-OAEP-384 - RSA-OAEP-512 | 
**encryptionType** | **string** | JWE content encryption algorithm  Possible values: - A256GCM - A128GCM - C20P - A256CBC_HS512 - A128CBC_HS256 - A256CCM - A128CCM | 
**expirationDate** | [**\DateTime**](\DateTime.md) | Key expiration date in UTC | 
**status** | **string** | Key lifecycle status  Possible values: - active - deactivated - expired | 
**createdAt** | [**\DateTime**](\DateTime.md) | Creation timestamp | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Last update timestamp | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


