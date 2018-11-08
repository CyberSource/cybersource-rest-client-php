# FlexV1TokensPost200Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keyId** | **string** | The Key ID. | [optional] 
**token** | **string** | The generated token. The token replaces card data and is used as the Subscription ID in the CyberSource Simple Order API or SCMP API. | [optional] 
**maskedPan** | **string** | The masked card number displaying the first 6 digits and the last 4 digits. | [optional] 
**cardType** | **string** | The card type. | [optional] 
**timestamp** | **int** | The UTC date and time in milliseconds at which the signature was generated. | [optional] 
**signedFields** | **string** | Indicates which fields from the response make up the data that is used when verifying the response signature. See the [sample code] (https://github.com/CyberSource/cybersource-flex-samples/blob/master/java/spring-boot/src/main/java/com/cybersource/flex/application/CheckoutController.java) on how to verify the signature. | [optional] 
**signature** | **string** | Flex-generated digital signature. To ensure the values have not been tampered with while passing through the client, verify this server-side using the public key generated from the /keys resource. | [optional] 
**discoverableServices** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


