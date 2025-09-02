# InvoicingV2InvoicesPost201ResponseInvoiceInformationCustomLabels

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The invoice field key. Possible values:   - billTo   - invoiceNumber   - customerId   - companyName   - description   - shipping   - partialPayment   - discount   - tax | [optional] 
**value** | **string** | The new (overridden) field name | [optional] 
**hidden** | **bool** | Hides the specified field. This field is applicable for keys:   - customerId   - companyName   - description   - shipping   - partialPayment | [optional] [default to false]
**hiddenForInvoice** | **bool** | Hides the field at invoice level. This field is applicable for keys:   - discount   - tax | [optional] [default to false]
**hiddenForItem** | **bool** | Hides the field at invoice item level. This field is applicable for keys:   - discount   - tax | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


