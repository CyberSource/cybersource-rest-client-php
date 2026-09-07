# UnifiedriskTransactionRecurringDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**frequency** | **int** | Days between recurring payments | [optional] 
**occurrence** | **string** | Recurring frequency code: DAILY, WEEKLY, MONTHLY, etc | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | Date when recurring payments end | [optional] 
**numberOfPayments** | **int** | Total number of payments in recurring series | [optional] 
**sequenceNumber** | **int** | Current sequence number in recurring series | [optional] 
**type** | **string** | Recurring type: REGISTRATION, SUBSEQUENT, MODIFICATION, CANCELLATION | [optional] 
**validationIndicator** | **string** | Indicates if recurring payment was validated | [optional] 
**amountType** | **string** | Amount type: FIXED, VARIABLE_WITH_MAX | [optional] 
**maximumAmount** | **float** | Maximum amount for variable recurring payments | [optional] 
**originalPurchaseDate** | [**\DateTime**](\DateTime.md) | Date of original recurring purchase | [optional] 
**referenceNumber** | **string** | Reference number for recurring payment | [optional] 
**firstPaymentDate** | **string** | Date of the first payment in a recurring series, in ISO 8601 format (YYYY-MM-DD). Used to establish the anchor date for recurring payment scheduling and risk assessment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


