# InlineResponse2004

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** |  | [optional] 
**reportCreatedDate** | **string** | ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ | [optional] 
**batchId** | **string** | Unique identification number assigned to the submitted request. | [optional] 
**batchSource** | **string** | Valid Values:   * SCHEDULER   * TOKEN_API   * CREDIT_CARD_FILE_UPLOAD   * AMEX_REGSITRY   * AMEX_REGISTRY_API   * AMEX_MAINTENANCE | [optional] 
**batchCaEndpoints** | **string** |  | [optional] 
**batchCreatedDate** | **string** | ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ | [optional] 
**merchantReference** | **string** | Reference used by merchant to identify batch. | [optional] 
**totals** | [**\CyberSource\Model\InlineResponse2002EmbeddedTotals**](InlineResponse2002EmbeddedTotals.md) |  | [optional] 
**billing** | [**\CyberSource\Model\InlineResponse2003Billing**](InlineResponse2003Billing.md) |  | [optional] 
**records** | [**\CyberSource\Model\InlineResponse2004Records[]**](InlineResponse2004Records.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


