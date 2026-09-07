# InlineResponse20112Messages

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Message severity — &#x60;info&#x60; for informational, &#x60;error&#x60; for actionable errors.  Possible values: - info - error | 
**code** | **string** | Machine-readable error code. Present only when &#x60;type&#x60; is &#x60;error&#x60;. | [optional] 
**param** | **string** | JSONPath to the request field that caused the error. Present only on validation errors. | [optional] 
**contentType** | **string** | Format of the &#x60;content&#x60; field.  Possible values: - plain - markdown | 
**content** | **string** | Human-readable message text formatted according to &#x60;content_type&#x60;. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


