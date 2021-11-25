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

Create a new invoice.

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
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInvoices**
> \CyberSource\Model\InvoicingV2InvoicesAllGet200Response getAllInvoices($offset, $limit, $status)

Get a List of Invoices

Get a list of invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\InvoicesApi();
$offset = 56; // int | Page offset number.
$limit = 56; // int | Maximum number of items you would like returned.
$status = "status_example"; // string | The status of the invoice.  Possible values:   - DRAFT   - CREATED   - SENT   - PARTIAL   - PAID   - CANCELED

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
 **status** | **string**| The status of the invoice.  Possible values:   - DRAFT   - CREATED   - SENT   - PARTIAL   - PAID   - CANCELED | [optional]

### Return type

[**\CyberSource\Model\InvoicingV2InvoicesAllGet200Response**](../Model/InvoicingV2InvoicesAllGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \CyberSource\Model\InvoicingV2InvoicesGet200Response getInvoice($id)

Get Invoice Details

Get the details of a specific invoice.

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
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performCancelAction**
> \CyberSource\Model\InvoicingV2InvoicesPost201Response performCancelAction($id)

Cancel an Invoice

Cancel an invoice.

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
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performSendAction**
> \CyberSource\Model\InvoicingV2InvoicesPost201Response performSendAction($id)

Send an Invoice

Send an invoice.

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
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoice**
> \CyberSource\Model\InvoicingV2InvoicesPost201Response updateInvoice($id, $updateInvoiceRequest)

Update an Invoice

Update an invoice.

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
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

