# CardProcessingConfigCommonAcquirers

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**institutionId** | **string** | Identifier of the acquirer. This number is usually assigned by Visa. | [optional] 
**interbankCardAssociationId** | **string** | Number assigned by MasterCard to banks to identify the member in transactions. | [optional] 
**discoverInstitutionId** | **string** | Assigned by Discover to identify the acquirer. | [optional] 
**countryCode** | **string** | ISO 4217 format. | [optional] 
**fileDestinationBin** | **string** | The BIN to which this capturefile is sent. This field must contain a valid BIN. | [optional] 
**merchantVerificationValue** | **string** | Identify merchants that participate in Select Merchant Fee (SMF) programs. Unique to the merchant. | [optional] 
**merchantId** | **string** | Merchant ID assigned by an acquirer or a processor. Should not be overriden by any other party. | [optional] 
**terminalId** | **string** | The &#39;Terminal Id&#39; aka TID, is an identifier used for with your payments processor. Depending on the processor and payment acceptance type this may also be the default Terminal ID used for Card Present and Virtual Terminal transactions. | [optional] 
**allowMultipleBills** | **bool** | Allows multiple captures for a single authorization transaction. | [optional] 
**enableTransactionReferenceNumber** | **bool** | To enable merchant to send in transaction reference number (unique reconciliation ID). | [optional] 
**paymentTypes** | [**map[string,\CyberSource\Model\CardProcessingConfigCommonPaymentTypes]**](CardProcessingConfigCommonPaymentTypes.md) | Valid values are: * VISA * MASTERCARD * AMERICAN_EXPRESS * CUP * EFTPOS * DINERS_CLUB * DISCOVER * JCB | [optional] 
**currencies** | [**map[string,\CyberSource\Model\CardProcessingConfigCommonCurrencies]**](CardProcessingConfigCommonCurrencies.md) | Three-character [ISO 4217 ALPHA-3 Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


