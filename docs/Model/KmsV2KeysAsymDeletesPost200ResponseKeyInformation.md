# KmsV2KeysAsymDeletesPost200ResponseKeyInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | Merchant Id | [optional] 
**referenceNumber** | **string** | Reference number is a unique identifier provided by the client along with the organization Id. This is an optional field provided solely for the client’s convenience. If client specifies value for this field in the request, it is expected to be available in the response. | [optional] 
**keyId** | **string** | Key Serial Number | [optional] 
**status** | **string** | The status of the key.  Possible values:  - FAILED  - ACTIVE  - INACTIVE  - EXPIRED | [optional] 
**message** | **string** | message in case of failed key | [optional] 
**errorInformation** | [**\CyberSource\Model\KmsV2KeysSymPost201ResponseErrorInformation**](KmsV2KeysSymPost201ResponseErrorInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


