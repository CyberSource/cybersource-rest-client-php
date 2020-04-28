# Ptsv2paymentsRecurringPaymentInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endDate** | **string** | The date after which no further recurring authorizations should be performed. Format: &#x60;YYYY-MM-DD&#x60; **Note** This field is required for recurring transactions. | [optional] 
**frequency** | **int** | Integer value indicating the minimum number of days between recurring authorizations. A frequency of monthly is indicated by the value 28. Multiple of 28 days will be used to indicate months.  Example: 6 months &#x3D; 168  Example values accepted (31 days): - 31 - 031 - 0031  **Note** This field is required for recurring transactions. | [optional] 
**originalPurchaseDate** | **string** | Date of original purchase. Required for recurring transactions. Format: &#x60;YYYY-MM-DDTHH:MM:SSZ&#x60; **Note**: If this field is empty, the current date is used. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


