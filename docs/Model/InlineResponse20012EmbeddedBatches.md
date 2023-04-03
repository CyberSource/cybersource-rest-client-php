# InlineResponse20012EmbeddedBatches

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\InlineResponse20012EmbeddedLinks**](InlineResponse20012EmbeddedLinks.md) |  | [optional] 
**batchId** | **string** | Unique identification number assigned to the submitted request. | [optional] 
**batchCreatedDate** | **string** | ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ | [optional] 
**batchModifiedDate** | **string** | ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ | [optional] 
**batchSource** | **string** | Valid Values:   * SCHEDULER   * TOKEN_API   * CREDIT_CARD_FILE_UPLOAD   * AMEX_REGSITRY   * AMEX_REGISTRY_API   * AMEX_REGISTRY_API_SYNC   * AMEX_MAINTENANCE | [optional] 
**tokenSource** | **string** | Valid Values:   * SECURE_STORAGE   * TMS   * CYBERSOURCE | [optional] 
**merchantReference** | **string** | Reference used by merchant to identify batch. | [optional] 
**batchCaEndpoints** | **string[]** | Valid Values:   * VISA   * MASTERCARD   * AMEX | [optional] 
**status** | **string** | Valid Values:   * REJECTED   * RECEIVED   * VALIDATED   * DECLINED   * PROCESSING   * COMPLETE | [optional] 
**totals** | [**\CyberSource\Model\InlineResponse20012EmbeddedTotals**](InlineResponse20012EmbeddedTotals.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


