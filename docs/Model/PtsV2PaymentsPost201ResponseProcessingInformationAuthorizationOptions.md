# PtsV2PaymentsPost201ResponseProcessingInformationAuthorizationOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceType** | **string** | Field is used for back-to-back funding transaction and can be defined as a payment flow that automatically transfers funds through a real-time  funding or a live-load. This type of transaction can also be connected to a purchase.  In back-to-back funding of general purpose card that is used to make a purchase, two separate accounts are involved:  - account one is used to make the purchase - account two is used to automatically fund or reimburse account one  Possible values: - 0B &#x3D; back to back funding transaction - 00 &#x3D; normal transaction - 01 &#x3D; originator hold - 02 &#x3D; Visa deferred OCT hold, default interval - 03 &#x3D; Visa deferred OCT hold, user-defined interval - 09 &#x3D; Cancel pending deferred OCT request - 0I &#x3D; Visa Direct custom program 1 - 0Q &#x3D; uery the status of the deferred OCT - A0 &#x3D; Alias Directory 2 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


