# PtsV2PaymentsReversalsPost201ResponseAuthorizationInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approvalCode** | **string** | The authorization code returned by the processor. | [optional] 
**reasonCode** | **string** | Reply flag for the original transaction. | [optional] 
**reversalSubmitted** | **string** | Flag indicating whether a full authorization reversal was successfully submitted.  Possible values: - Y: The authorization reversal was successfully submitted. - N: The authorization reversal was not successfully submitted. You must send a credit request for a refund.  This field is supported only for **FDC Nashville Global**. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


