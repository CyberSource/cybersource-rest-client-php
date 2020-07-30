# InvoicingV2InvoicesPost201Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\CyberSource\Model\InvoicingV2InvoicesAllGet200ResponseLinks1**](InvoicingV2InvoicesAllGet200ResponseLinks1.md) |  | [optional] 
**id** | **string** | An unique identification number to identify the submitted request. It is also appended to the endpoint of the resource.  On incremental authorizations, this value with be the same as the identification number returned in the original authorization response.  #### PIN debit Returned for all PIN debit services. | [optional] 
**submitTimeUtc** | **string** | Time of request in UTC. Format: &#x60;YYYY-MM-DDThh:mm:ssZ&#x60; **Example** &#x60;2016-08-11T22:47:57Z&#x60; equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The &#x60;T&#x60; separates the date and the time. The &#x60;Z&#x60; indicates UTC.  Returned by authorization service.  #### PIN debit Time when the PIN debit credit, PIN debit purchase or PIN debit reversal was requested.  Returned by PIN debit credit, PIN debit purchase or PIN debit reversal. | [optional] 
**status** | **string** | The status of the invoice.  Possible values: - DRAFT - CREATED - SENT - PARTIAL - PAID - CANCELED | [optional] 
**customerInformation** | [**\CyberSource\Model\Invoicingv2invoicesCustomerInformation**](Invoicingv2invoicesCustomerInformation.md) |  | [optional] 
**invoiceInformation** | [**\CyberSource\Model\InvoicingV2InvoicesPost201ResponseInvoiceInformation**](InvoicingV2InvoicesPost201ResponseInvoiceInformation.md) |  | [optional] 
**orderInformation** | [**\CyberSource\Model\InvoicingV2InvoicesPost201ResponseOrderInformation**](InvoicingV2InvoicesPost201ResponseOrderInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


