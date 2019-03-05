# Ptsv2paymentsPaymentInformationFluidData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The name of the merchant-defined data field. The range of this field starts at 1 and terminiates at 100. | [optional] 
**descriptor** | **string** | The specific string for identifying the payment solution that is sending the encrypted payment data to CyberSource. Valid values: - &#x60;Apple Pay&#x60; - &#x60;Samsung Pay&#x60; **NOTE**: For other payment solutions, the value may be specific to the customer&#39;s mobile device. For example, the descriptor for a Bluefin payment encryption would be a device-generated descriptor. Merchant needs to pass in this value. | [optional] 
**value** | **string** | Represents the encrypted payment data BLOB. The entry for this field is dependent on the payment solution a merchant uses.  Valid values: - Apple Pay: &#x60;RklEPUNPTU1PTi5BUFBMRS5JTkFQUC5QQVlNRU5U&#x60; - Samsung Pay: &#x60;RklEPUNPTU1PTi5TQU1TVU5HLklOQVBQLlBBWU1FTlQ&#x3D;&#x60; **NOTE**: For other payment solutions, the value of the descriptor may be specific to the customer&#39;s mobile device. For example, the descriptor for a Bluefin payment encryption would be a device-generated descriptor. Merchant needs to pass in this value. | [optional] 
**encoding** | **string** | Encoding method used to encrypt the payment data.  Valid value: Base64 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


