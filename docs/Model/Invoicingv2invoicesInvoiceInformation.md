# Invoicingv2invoicesInvoiceInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoiceNumber** | **string** | Invoice Number. | [optional] 
**description** | **string** | The description included in the invoice. | 
**dueDate** | [**\DateTime**](\DateTime.md) | The invoice due date. This field is required for creating an invoice. Format: &#x60;YYYY-MM-DD&#x60;, where &#x60;YYYY&#x60; &#x3D; year, &#x60;MM&#x60; &#x3D; month, and &#x60;DD&#x60; &#x3D; day | 
**expirationDate** | [**\DateTime**](\DateTime.md) | Define an expiration date for the link.  Format: &#x60;YYYY-MM-DD&#x60;, where &#x60;YYYY&#x60; &#x3D; year, &#x60;MM&#x60; &#x3D; month, and &#x60;DD&#x60; &#x3D; day | [optional] 
**sendImmediately** | **bool** | If set to &#x60;true&#x60;, we send the invoice immediately. If set to &#x60;false&#x60;, the invoice remains in draft mode. | [optional] [default to false]
**allowPartialPayments** | **bool** | If set to &#x60;true&#x60;, the payer can make a partial invoice payment. | [optional] [default to false]
**deliveryMode** | **string** | If this field is set to &#39;None&#39;, an invoice will be generated with the status &#39;CREATED&#39;, but no email will be dispatched.    Possible values:        - &#x60;None&#x60;   - &#x60;Email&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


