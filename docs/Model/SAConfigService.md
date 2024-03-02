# SAConfigService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**decisionManagerVerboseEnabled** | **bool** | Toggles whether verbose Decision Manager results should be present in the Secure Acceptance response. As this response passes through the browser, it is recommended to set this to \&quot;false\&quot; outside of debugging. | [optional] 
**declinedRetryLimit** | **float** | Defines the number of retries a payer is presented with on payment declines on Hosted Checkout. Valid values are between 0 and 5. | [optional] 
**decisionManagerEnabled** | **bool** | Toggles whether Decision Manager is enabled or not for Secure Acceptance transactions. Requires the transacting MID to be enabled and configured for Decicion Manager. | [optional] 
**tokenizationEnabled** | **bool** | Toggles whether Tokenization is enabled or not for Secure Acceptance transactions. Requires the transacting MID to be enabled and configured for Tokenization. | [optional] 
**reverseAuthOnAddressVerificationSystemFailure** | **bool** | Toggles whether or not an approved Authorization that fails AVS should be automatically reversed. | [optional] 
**deviceFingerprintEnabled** | **bool** | Toggles whether or not fraud Device Fingerprinting is enabled on the Hosted Checkout. This simplifies enablement for Decision Manager. | [optional] 
**reverseAuthOnCardVerificationNumberFailure** | **bool** | Toggles whether or not an approved Authorization that fails CVN check that should be automatically reversed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


