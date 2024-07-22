# Ptsv2paymentsidcapturesOrderInformationInvoiceDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchaseOrderNumber** | **string** | Value used by your customer to identify the order. This value is typically a purchase order number. CyberSource recommends that you do not populate the field with all zeros or nines. | [optional] 
**purchaseOrderDate** | **string** | Date the order was processed. &#x60;Format: YYYY-MM-DD&#x60;. | [optional] 
**purchaseContactName** | **string** | The name of the individual or the company contacted for company authorized purchases. | [optional] 
**taxable** | **bool** | Flag that indicates whether an order is taxable. This value must be true if the sum of all _lineItems[].taxAmount_ values &gt; 0.  If you do not include any &#x60;lineItems[].taxAmount&#x60; values in your request, CyberSource does not include &#x60;invoiceDetails.taxable&#x60; in the data it sends to the processor.  Possible values:  - **true**  - **false** | [optional] 
**vatInvoiceReferenceNumber** | **string** | VAT invoice number associated with the transaction. | [optional] 
**commodityCode** | **string** | International description code of the overall order&#39;s goods or services or the Categorizes purchases for VAT reporting. Contact your acquirer for a list of codes. | [optional] 
**transactionAdviceAddendum** | [**\CyberSource\Model\Ptsv2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum[]**](Ptsv2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


