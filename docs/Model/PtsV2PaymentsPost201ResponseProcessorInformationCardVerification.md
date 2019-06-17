# PtsV2PaymentsPost201ResponseProcessorInformationCardVerification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resultCode** | **string** | CVN result code.  For details, see the &#x60;auth_cv_result&#x60; field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) For a description of the card verification check, see \&quot;Card Verification Numbers (CVNs)\&quot; in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) For a list of possible values, see \&quot;CVN Codes\&quot; in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) | [optional] 
**resultCodeRaw** | **string** | CVN result code sent directly from the processor. Returned only when the processor returns this value.  **Important** Do not use this field to evaluate the result of card verification. Use for debugging purposes only. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


