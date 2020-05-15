# TssV2TransactionsPost201ResponseEmbeddedProcessorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processor** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor**](TssV2TransactionsGet200ResponseProcessorInformationProcessor.md) |  | [optional] 
**approvalCode** | **string** | Authorization code. Returned only when the processor returns this value.  The length of this value depends on your processor.  Returned by authorization service.  #### Elavon Encrypted Account Number Program The returned value is OFFLINE. See \&quot;Encoded Account Numbers,\&quot; page 136.  #### TSYS Acquiring Solutions The returned value for a successful zero amount authorization is 000000. See \&quot;Zero Amount Authorizations,\&quot; page 230. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


