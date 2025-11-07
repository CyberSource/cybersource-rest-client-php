# InlineResponse2018ErrorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Only required when offer cannot be made. The reason of the status.  Possible values: - &#39;INVALID_MERCHANT_CONFIGURATION&#39; - &#39;NOT_ELIGIBLE&#39; - &#39;CURRENCY_NOT_CONFIGURED&#39; - &#39;BIN_UNKNOWN&#39; - &#39;CURRENCY_MATCH&#39; - &#39;CURRENCY_NOT_ALLOWED&#39; - &#39;LOOKUP_FAILED&#39; - &#39;EXCHANGE_RATE_NOT_FOUND&#39; - &#39;CARD_TYPE_NOT_ACCEPTED&#39; - &#39;INVALID_AMOUNT&#39; - &#39;INVALID_CARD&#39; - &#39;INVALID_CURRENCY&#39; - &#39;INVALID_TERMINAL&#39; - &#39;INVALID_ACQUIRER&#39; - &#39;SERVICE_DISABLED&#39; - &#39;DUPLICATE_REQUEST&#39; - &#39;UNKNOWN&#39; - &#39;PROCESSOR_ERROR&#39; | [optional] 
**message** | **string** | Only required when the requested action cannot be performed. Descriptive message to add more detail to the status E.g. not all cards are eligible for DCC, so it is not possible for DCC to be offered. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


