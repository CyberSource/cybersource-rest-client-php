# PostInstrumentIdentifierRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierLinks**](TmsEmbeddedInstrumentIdentifierLinks.md) |  | [optional] 
**id** | **string** | The Id of the Instrument Identifier Token. | [optional] 
**object** | **string** | The type.  Possible Values: - instrumentIdentifier | [optional] 
**state** | **string** | Issuers state for the card number. Possible Values: - ACTIVE - CLOSED : The account has been closed. | [optional] 
**type** | **string** | The type of Instrument Identifier. Possible Values: - enrollable card - enrollable token | [optional] 
**tokenProvisioningInformation** | [**\CyberSource\Model\Ptsv2paymentsTokenInformationTokenProvisioningInformation**](Ptsv2paymentsTokenInformationTokenProvisioningInformation.md) |  | [optional] 
**card** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierCard**](TmsEmbeddedInstrumentIdentifierCard.md) |  | [optional] 
**bankAccount** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierBankAccount**](TmsEmbeddedInstrumentIdentifierBankAccount.md) |  | [optional] 
**tokenizedCard** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierTokenizedCard**](TmsEmbeddedInstrumentIdentifierTokenizedCard.md) |  | [optional] 
**issuer** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierIssuer**](TmsEmbeddedInstrumentIdentifierIssuer.md) |  | [optional] 
**processingInformation** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierProcessingInformation**](TmsEmbeddedInstrumentIdentifierProcessingInformation.md) |  | [optional] 
**billTo** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierBillTo**](TmsEmbeddedInstrumentIdentifierBillTo.md) |  | [optional] 
**metadata** | [**\CyberSource\Model\TmsEmbeddedInstrumentIdentifierMetadata**](TmsEmbeddedInstrumentIdentifierMetadata.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


