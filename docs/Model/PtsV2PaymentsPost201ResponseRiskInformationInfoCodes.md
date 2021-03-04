# PtsV2PaymentsPost201ResponseRiskInformationInfoCodes

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**velocity** | **string[]** | List of information codes triggered by the order. These information codes were generated when you created the order and product velocity rules and are returned so that you can associate them with the rules. | [optional] 
**address** | **string[]** | Indicates a mismatch between the customer’s billing and shipping addresses. | [optional] 
**customerList** | **string[]** | Indicates that customer information is associated with transactions that are either on the negative or the positive list. | [optional] 
**deviceBehavior** | **string[]** | Indicates the device behavior information code(s) returned from device fingerprinting. | [optional] 
**identityChange** | **string[]** | Indicates excessive identity changes. The threshold is variable depending on the identity elements being compared. | [optional] 
**internet** | **string[]** | Indicates a problem with the customer’s email address, IP address, or billing address. | [optional] 
**phone** | **string[]** | Indicates a problem with the customer’s phone number. | [optional] 
**suspicious** | **string[]** | Indicates that the customer provided potentially suspicious information. | [optional] 
**globalVelocity** | **string[]** | Indicates that the customer has a high purchase frequency. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


