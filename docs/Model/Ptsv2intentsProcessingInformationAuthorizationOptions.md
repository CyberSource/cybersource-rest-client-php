# Ptsv2intentsProcessingInformationAuthorizationOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authType** | **string** | Authorization type. Possible values:   - &#x60;AUTOCAPTURE&#x60;: automatic capture.  - &#x60;STANDARDCAPTURE&#x60;: standard capture.  - &#x60;VERBAL&#x60;: forced capture. Include it in the payment request for a forced capture. Include it in the capture request for a verbal payment.  #### Asia, Middle East, and Africa Gateway; Cielo; Comercio Latino; and CyberSource Latin American Processing Set this field to &#x60;AUTOCAPTURE&#x60; and include it in a bundled request to indicate that you are requesting an automatic capture. If your account is configured to enable automatic captures, set this field to &#x60;STANDARDCAPTURE&#x60; and include it in a standard authorization or bundled request to indicate that you are overriding an automatic capture.  #### Forced Capture Set this field to &#x60;VERBAL&#x60; and include it in the authorization request to indicate that you are performing a forced capture; therefore, you receive the authorization code outside the CyberSource system.  #### Verbal Authorization Set this field to &#x60;VERBAL&#x60; and include it in the capture request to indicate that the request is for a verbal authorization.  #### for PayPal ptsV2CreateOrderPost400Response Set this field to &#39;AUTHORIZE&#39; or &#39;CAPTURE&#39; depending on whether you want to invoke delayed capture or sale respectively. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


