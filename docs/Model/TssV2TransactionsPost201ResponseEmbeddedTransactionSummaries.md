# TssV2TransactionsPost201ResponseEmbeddedTransactionSummaries

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An unique identification number generated by Cybersource to identify the submitted request. Returned by all services. It is also appended to the endpoint of the resource. On incremental authorizations, this value with be the same as the identification number returned in the original authorization response. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by Cybersource for all services. | [optional] 
**merchantId** | **string** | Your CyberSource merchant ID. | [optional] 
**status** | **string** | The status of the submitted transaction. Note: This field may not be returned for all transactions. | [optional] 
**applicationInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedApplicationInformation**](TssV2TransactionsPost201ResponseEmbeddedApplicationInformation.md) |  | [optional] 
**buyerInformation** | [**\CyberSource\Model\PtsV2CreateOrderPost201ResponseBuyerInformation**](PtsV2CreateOrderPost201ResponseBuyerInformation.md) |  | [optional] 
**clientReferenceInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedClientReferenceInformation**](TssV2TransactionsPost201ResponseEmbeddedClientReferenceInformation.md) |  | [optional] 
**consumerAuthenticationInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedConsumerAuthenticationInformation**](TssV2TransactionsPost201ResponseEmbeddedConsumerAuthenticationInformation.md) |  | [optional] 
**deviceInformation** | [**\CyberSource\Model\Riskv1authenticationresultsDeviceInformation**](Riskv1authenticationresultsDeviceInformation.md) |  | [optional] 
**errorInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedErrorInformation**](TssV2TransactionsPost201ResponseEmbeddedErrorInformation.md) |  | [optional] 
**fraudMarkingInformation** | [**\CyberSource\Model\TssV2TransactionsGet200ResponseFraudMarkingInformation**](TssV2TransactionsGet200ResponseFraudMarkingInformation.md) |  | [optional] 
**merchantDefinedInformation** | [**\CyberSource\Model\Ptsv2paymentsMerchantDefinedInformation[]**](Ptsv2paymentsMerchantDefinedInformation.md) | The object containing the custom data that the merchant defines. | [optional] 
**merchantInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedMerchantInformation**](TssV2TransactionsPost201ResponseEmbeddedMerchantInformation.md) |  | [optional] 
**orderInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedOrderInformation**](TssV2TransactionsPost201ResponseEmbeddedOrderInformation.md) |  | [optional] 
**paymentInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPaymentInformation**](TssV2TransactionsPost201ResponseEmbeddedPaymentInformation.md) |  | [optional] 
**processingInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedProcessingInformation**](TssV2TransactionsPost201ResponseEmbeddedProcessingInformation.md) |  | [optional] 
**processorInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedProcessorInformation**](TssV2TransactionsPost201ResponseEmbeddedProcessorInformation.md) |  | [optional] 
**pointOfSaleInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformation**](TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformation.md) |  | [optional] 
**riskInformation** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedRiskInformation**](TssV2TransactionsPost201ResponseEmbeddedRiskInformation.md) |  | [optional] 
**links** | [**\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedLinks**](TssV2TransactionsPost201ResponseEmbeddedLinks.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


