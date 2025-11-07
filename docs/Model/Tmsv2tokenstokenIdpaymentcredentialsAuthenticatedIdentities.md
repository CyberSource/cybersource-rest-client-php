# Tmsv2tokenstokenIdpaymentcredentialsAuthenticatedIdentities

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id from the authenticated identity.  Base64URL encoded string (RFC4648).   The encoding is the same as Base64, but uses &#39;-&#39; characters instead of &#39;+&#39; and &#39;_&#39; characters instead of &#39;/&#39;. | [optional] 
**provider** | **string** | The provider of the authenticated identity.  Possible Values:   - VISA_PAYMENT_PASSKEY | [optional] 
**data** | **string** | The data from the authenticated identity, for FIDO this could be the Attestation. Base64URL encoded string (RFC4648).  The encoding is the same as Base64, but uses &#39;-&#39; characters instead of &#39;+&#39; and &#39;_&#39; characters instead of &#39;/&#39;. | [optional] 
**relyingPartyId** | **string** | The id of the Relying Party.  Base64URL encoded string (RFC4648).   The encoding is the same as Base64, but uses &#39;-&#39; characters instead of &#39;+&#39; and &#39;_&#39; characters instead of &#39;/&#39;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


