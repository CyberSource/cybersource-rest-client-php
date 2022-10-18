# GenerateUnifiedCheckoutCaptureContextRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**targetOrigins** | **string[]** |  | [optional] 
**clientVersion** | **string** | verson number of Unified Checkout being used | [optional] 
**allowedCardNetworks** | **string[]** |  | [optional] 
**allowedPaymentTypes** | **string[]** |  | [optional] 
**country** | **string** | Country the purchase is originating from (e.g. country of the merchant). Use the two- character ISO Standard | [optional] 
**locale** | **string** | Localization of the User experience conforming to the ISO 639-1 language standards and two-character ISO Standard Country Code | [optional] 
**captureMandate** | [**\CyberSource\Model\Upv1capturecontextsCaptureMandate**](Upv1capturecontextsCaptureMandate.md) |  | [optional] 
**orderInformation** | [**\CyberSource\Model\Upv1capturecontextsOrderInformation**](Upv1capturecontextsOrderInformation.md) |  | [optional] 
**checkoutApiInitialization** | [**\CyberSource\Model\Upv1capturecontextsCheckoutApiInitialization**](Upv1capturecontextsCheckoutApiInitialization.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


