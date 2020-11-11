# RiskV1AuthenticationSetupsPost201ResponseConsumerAuthenticationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessToken** | **string** | JSON Web Token (JWT) used to authenticate the consumer with the authentication provider, such as, CardinalCommerce or Rupay. Note - Max Length of this field is 2048 characters. | [optional] 
**referenceId** | **string** | This identifier represents cardinal has started device data collection session and this must be passed in Authentication JWT to Cardinal when invoking the deviceDataCollectionUrl. | [optional] 
**deviceDataCollectionUrl** | **string** | The deviceDataCollectionUrl is the location to send the Authentication JWT when invoking the Device Data collection process. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


