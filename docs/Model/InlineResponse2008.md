# InlineResponse2008

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\InlineResponse2008Links**](InlineResponse2008Links.md) |  | [optional] 
**batchId** | **string** | Unique identification number assigned to the submitted request. | [optional] 
**batchCreatedDate** | **string** | ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ | [optional] 
**batchSource** | **string** | Valid Values:   * SCHEDULER   * TOKEN_API   * CREDIT_CARD_FILE_UPLOAD   * AMEX_REGSITRY   * AMEX_REGISTRY_API   * AMEX_MAINTENANCE | [optional] 
**merchantReference** | **string** | Reference used by merchant to identify batch. | [optional] 
**batchCaEndpoints** | **string** |  | [optional] 
**status** | **string** | Valid Values:   * REJECTED   * RECEIVED   * VALIDATED   * DECLINED   * PROCESSING   * COMPLETED | [optional] 
**totals** | [**\CyberSource\Model\InlineResponse2007EmbeddedTotals**](InlineResponse2007EmbeddedTotals.md) |  | [optional] 
**billing** | [**\CyberSource\Model\InlineResponse2008Billing**](InlineResponse2008Billing.md) |  | [optional] 
**description** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


