# Riskv1liststypeentriesRiskInformationMarkingDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notes** | **string** | Notes or details that explain the reasons for adding the transaction to either the positive or negative list. | [optional] 
**reason** | **string** | Reason for adding the transaction to the negative list. This field can contain one of the following values: - fraud_chargeback: You have received a fraud-related chargeback for the transaction. - non_fraud_chargeback: You have received a non-fraudulent chargeback for the transaction. - suspected: You believe that you will probably receive a chargeback for the transaction. - creditback: You issued a refund to the customer to avoid a chargeback for the transaction. | [optional] 
**recordName** | **string** | Name of the customer’s record entered in the list. For the positive list, it is required if action_ code&#x3D;add_positive. If absent from the request, ics_risk_update creates the value for this field by concatenating the customer’s first and last names. For the negative and the review lists, record_name, customer_firstname, and customer_lastname are optional. | [optional] 
**action** | **string** | Indicates whether to add to or remove a customer’s identity from the negative or positive list. This field can contain one of the following values: - add: Add information to the list. - convert: moves the data. - delete: deletes the data from the list. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


