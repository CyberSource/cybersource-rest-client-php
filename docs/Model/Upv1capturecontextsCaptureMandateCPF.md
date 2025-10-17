# Upv1capturecontextsCaptureMandateCPF

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**required** | **bool** | Configure Unified Checkout to display and capture the CPF number (Cadastro de Pessoas Físicas).  The CPF number is a unique 11-digit identifier issued to Brazilian citizens and residents for tax purposes.  Possible values: - True - False&lt;br&gt;&lt;br&gt;  This field is optional.   If set to true the field is required. If set to false the field is optional. If the field is not included in the capture context then it is not captured.&lt;br&gt;&lt;br&gt;  **Important:**  - If PANENTRY is specified in the allowedPaymentTypes field, the CPF number will be displayed in Unified Checkout regardless of what card number is entered.  - If CLICKTOPAY is specified in the allowedPaymentTypes field, the CPF number will be displayed in Unified Checkout only when a Visa Click To Pay card is entered. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


