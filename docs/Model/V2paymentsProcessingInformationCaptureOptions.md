# V2paymentsProcessingInformationCaptureOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**captureSequenceNumber** | **float** | Capture number when requesting multiple partial captures for one payment. Used along with _totalCaptureCount_ to track which capture is being processed.  For example, the second of five captures would be passed to CyberSource as:   - _captureSequenceNumber_ &#x3D; 2, and   - _totalCaptureCount_ &#x3D; 5 | [optional] 
**totalCaptureCount** | **float** | Total number of captures when requesting multiple partial captures for one payment. Used along with _captureSequenceNumber_ which capture is being processed.  For example, the second of five captures would be passed to CyberSource as:   - _captureSequenceNumber_ &#x3D; 2, and   - _totalCaptureCount_ &#x3D; 5 | [optional] 
**dateToCapture** | **string** | Date on which you want the capture to occur. This field is supported only for **CyberSource through VisaNet**. &#x60;Format: MMDD&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


