# CyberSource\InvoicesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvoice**](InvoicesApi.md#createInvoice) | **POST** /invoicing/v2/invoices | Create a New Invoice
[**getAllInvoices**](InvoicesApi.md#getAllInvoices) | **GET** /invoicing/v2/invoices | Get a List of Invoices
[**getInvoice**](InvoicesApi.md#getInvoice) | **GET** /invoicing/v2/invoices/{id} | Get Invoice Details
[**performCancelAction**](InvoicesApi.md#performCancelAction) | **POST** /invoicing/v2/invoices/{id}/cancelation | Cancel an Invoice
[**performSendAction**](InvoicesApi.md#performSendAction) | **POST** /invoicing/v2/invoices/{id}/delivery | Send an Invoice
[**updateInvoice**](InvoicesApi.md#updateInvoice) | **PUT** /invoicing/v2/invoices/{id} | Update an Invoice


# **createInvoice**
> \CyberSource\Model\InvoicingV2InvoicesPost201Response createInvoice($createInvoiceRequest)

Create a New Invoice

The invoicing product enables you to bill any customer with an email address and accept digital payments securely from any connected device. You can either use the system generated email or use the invoice payment link in your own communication. You can add discounts and taxes for the entire invoice or for each line item. To customize the invoice to match your brand see [Invoice Settings](https://developer.cybersource.com/api-reference-assets/index.html#invoicing_invoice-settings_update-invoice-settings). The invoice payment page uses Unified Checkout to process the payments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoicesApi();
$createInvoiceRequest = new \CyberSource\Model\CreateInvoiceRequest(); // \CyberSource\Model\CreateInvoiceRequest | 

try {
    $result = $api_instance->createInvoice($createInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createInvoiceRequest** | [**\CyberSource\Model\CreateInvoiceRequest**](../Model/CreateInvoiceRequest.md)|  |

### Return type

[**\CyberSource\Model\InvoicingV2InvoicesPost201Response**](../Model/InvoicingV2InvoicesPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInvoices**
> \CyberSource\Model\InvoicingV2InvoicesAllGet200Response getAllInvoices($offset, $limit, $status)

Get a List of Invoices

Provides a (filtered) list of invoices that have been created in your account. You can filter the list based on Invoice Status by setting the status query parameter to one of DRAFT, CREATED, SENT, PARTIAL, PAID or CANCELED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoicesApi();
$offset = 56; // int | Page offset number.
$limit = 56; // int | Maximum number of items you would like returned.
$status = "status_example"; // string | The status of the invoice.  Possible values:   - DRAFT   - CREATED   - SENT   - PARTIAL   - PAID   - CANCELED   - PENDING

try {
    $result = $api_instance->getAllInvoices($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getAllInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Page offset number. |
 **limit** | **int**| Maximum number of items you would like returned. |
 **status** | **string**| The status of the invoice.  Possible values:   - DRAFT   - CREATED   - SENT   - PARTIAL   - PAID   - CANCELED   - PENDING | [optional]

### Return type

[**\CyberSource\Model\InvoicingV2InvoicesAllGet200Response**](../Model/InvoicingV2InvoicesAllGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \CyberSource\Model\InvoicingV2InvoicesGet200Response getInvoice($id)

Get Invoice Details

You can retrieve details of a specific invoice. This can be used to check the Invoice status and get a list of invoice payments in the invoice history section of the response. For each payment transaction you can use the Transaction Details API to get more details on the payment transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoicesApi();
$id = "id_example"; // string | The invoice number.

try {
    $result = $api_instance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The invoice number. |

### Return type

[**\CyberSource\Model\InvoicingV2InvoicesGet200Response**](../Model/InvoicingV2InvoicesGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performCancelAction**
> \CyberSource\Model\InvoicingV2InvoicesPost201Response performCancelAction($id)

Cancel an Invoice

You can cancel an invoice if no payment is made to it. You cannot cancel partially or fully paid invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoicesApi();
$id = "id_example"; // string | The invoice number.

try {
    $result = $api_instance->performCancelAction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->performCancelAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The invoice number. |

### Return type

[**\CyberSource\Model\InvoicingV2InvoicesPost201Response**](../Model/InvoicingV2InvoicesPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performSendAction**
> \CyberSource\Model\InvoicingV2InvoicesPost201Response performSendAction($id)

Send an Invoice

You can send an invoice in draft or created state or resend a sent or partially paid invoice. Fully paid or canceled invoices cannot be resent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoicesApi();
$id = "id_example"; // string | The invoice number.

try {
    $result = $api_instance->performSendAction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->performSendAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The invoice number. |

### Return type

[**\CyberSource\Model\InvoicingV2InvoicesPost201Response**](../Model/InvoicingV2InvoicesPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoice**
> \CyberSource\Model\InvoicingV2InvoicesPost201Response updateInvoice($id, $updateInvoiceRequest)

Update an Invoice

You can update all information except the invoice number till any payment is received for an invoice. Invoices that are partially or fully paid or cancelled cannot be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoicesApi();
$id = "id_example"; // string | The invoice number.
$updateInvoiceRequest = new \CyberSource\Model\UpdateInvoiceRequest(); // \CyberSource\Model\UpdateInvoiceRequest | Updating the invoice does not resend the invoice automatically. You must resend the invoice separately.

try {
    $result = $api_instance->updateInvoice($id, $updateInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The invoice number. |
 **updateInvoiceRequest** | [**\CyberSource\Model\UpdateInvoiceRequest**](../Model/UpdateInvoiceRequest.md)| Updating the invoice does not resend the invoice automatically. You must resend the invoice separately. |

### Return type

[**\CyberSource\Model\InvoicingV2InvoicesPost201Response**](../Model/InvoicingV2InvoicesPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json, application/hal+json, application/json;charset=utf-8, application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

