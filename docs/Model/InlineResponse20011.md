# InlineResponse20011

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\InlineResponse20011Links**](InlineResponse20011Links.md) |  | [optional] 
**batchId** | **string** | Unique identification number assigned to the submitted request. | [optional] 
**batchCreatedDate** | **string** | ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ | [optional] 
**batchSource** | **string** | Valid Values:   * SCHEDULER   * TOKEN_API   * CREDIT_CARD_FILE_UPLOAD   * AMEX_REGSITRY   * AMEX_REGISTRY_API   * AMEX_MAINTENANCE | [optional] 
**merchantReference** | **string** | Reference used by merchant to identify batch. | [optional] 
**batchCaEndpoints** | **string** |  | [optional] 
**status** | **string** | Valid Values:   * REJECTED   * RECEIVED   * VALIDATED   * DECLINED   * PROCESSING   * COMPLETED | [optional] 
**totals** | [**\CyberSource\Model\InlineResponse20010EmbeddedTotals**](InlineResponse20010EmbeddedTotals.md) |  | [optional] 
**billing** | [**\CyberSource\Model\InlineResponse20011Billing**](InlineResponse20011Billing.md) |  | [optional] 
**description** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


