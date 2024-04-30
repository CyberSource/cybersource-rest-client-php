# ECheckConfigFeaturesAccountValidationServiceProcessors

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**avsAccountOwnershipService** | **bool** | *NEW* Determined in WF eTicket if account has opted into the Account Ownership Service. | [optional] 
**avsAccountStatusService** | **bool** | *NEW* Determined in WF eTicket if account has opted into the Account Status Service. | [optional] 
**avsSignedAgreement** | **bool** | *NEW* Taken from Addendum Agreement Column in boarding form. | [optional] 
**avsCalculatedResponseBehavior** | **object** | *NEW* | [optional] 
**avsAdditionalId** | **string** | *NEW* Also known as the Additional ID. Taken from the boarding form. | [optional] 
**enableAvs** | **bool** | *NEW* | [optional] [default to true]
**avsEntityId** | **string** | *NEW* Also known as the AVS Gateway Entity ID. | [optional] 
**avsResultMode** | **object** | *NEW* | [optional] 
**enableAvsTokenCreation** | **bool** | *NEW* Applicable if the merchant wants to run AVS on token creation requests only. | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


