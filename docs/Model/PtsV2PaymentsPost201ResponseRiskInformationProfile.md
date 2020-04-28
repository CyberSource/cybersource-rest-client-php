# PtsV2PaymentsPost201ResponseRiskInformationProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the active profile chosen by the profile selector. If no profile selector exists, the default active profile is chosen.  **Note** By default, your default profile is the active profile, or the Profile Selector chooses the active profile. Use this field only if you want to specify the name of a different profile. The passed-in profile will then become the active profile. | [optional] 
**desinationQueue** | **string** | Name of the queue where orders that are not automatically accepted are sent. | [optional] 
**selectorRule** | **string** | Name of the profile selector rule that chooses the profile to use for the transaction. If no profile selector exists, the value is Default Active Profile. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


