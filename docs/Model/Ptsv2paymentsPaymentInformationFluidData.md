# Ptsv2paymentsPaymentInformationFluidData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The encoded or encrypted value that a payment solution returns for an authorization request. For details about the valid values for a key, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html) | [optional] 
**descriptor** | **string** | The identifier for a payment solution, which is sending the encrypted payment data to CyberSource for decryption. Valid values: - Samsung Pay: &#x60;RklEPUNPTU1PTi5TQU1TVU5HLklOQVBQLlBBWU1FTlQ&#x3D;&#x60; **NOTE**: For other payment solutions, the value may be specific to the customer&#39;s mobile device. For example, the descriptor for a Bluefin payment encryption would be a device-generated descriptor.  For details about the list of payment solution identifiers, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html).  For details about the encrypted payment data, see the &#x60;encrypted_payment_descriptor&#x60; field description in the [Card-Present Processing Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/Retail_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm). | [optional] 
**value** | **string** | Represents the encrypted payment data BLOB. The entry for this field is dependent on the payment solution a merchant uses.  For details, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html) for the specific payment- solution entry. | [optional] 
**encoding** | **string** | Encoding method used to encrypt the payment data.  Valid value: Base64 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


