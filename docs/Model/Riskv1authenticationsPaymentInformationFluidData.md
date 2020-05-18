# Riskv1authenticationsPaymentInformationFluidData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | Represents the encrypted payment data BLOB. The entry for this field is dependent on the payment solution a merchant uses.  #### Used by **Authorization and Standalone Credits** Required for authorizations and standalone credits that use Bluefin PCI P2PE.  #### Card Present processing This field represents the encrypted Bluefin PCI P2PE payment data. Obtain the encrypted payment data from a Bluefin-supported device. | 
**keySerialNumber** | **string** | The encoded or encrypted value that a payment solution returns for an authorization request. For details about the valid values for a key, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html) | [optional] 
**descriptor** | **string** | The identifier for a payment solution, which is sending the encrypted payment data for decryption. Valid values: - Samsung Pay: &#x60;RklEPUNPTU1PTi5TQU1TVU5HLklOQVBQLlBBWU1FTlQ&#x3D;&#x60;  **Note**: For other payment solutions, the value may be specific to the customer&#39;s mobile device. For example, the descriptor for a Bluefin payment encryption would be a device-generated descriptor.  #### Used by **Authorization and Standalone Credits** Required for authorizations and standalone credits that use Bluefin PCI P2PE.  #### Card Present processing Format of the encrypted payment data. The value for Bluefin PCI P2PE is &#x60;Ymx1ZWZpbg&#x3D;&#x3D;&#x60;. | [optional] 
**encoding** | **string** | Encoding method used to encrypt the payment data.  Valid value: Base64 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


