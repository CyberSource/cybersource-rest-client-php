# CyberSource\ProductFeedApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllProducts**](ProductFeedApi.md#getAllProducts) | **GET** /icc/v1/products | Get All Products
[**getFeedJobStatus**](ProductFeedApi.md#getFeedJobStatus) | **GET** /icc/v1/products/feed/bulk/{jobId} | Get Feed Job Status
[**getProduct**](ProductFeedApi.md#getProduct) | **GET** /icc/v1/products/{product_id} | Get Product by ID
[**submitProductFeedJson**](ProductFeedApi.md#submitProductFeedJson) | **POST** /icc/v1/products/feed | Ingest Product Feed


# **getAllProducts**
> \CyberSource\Model\InlineResponse20020 getAllProducts($getAllProductsRequest, $page, $size)

Get All Products

Returns the full product catalog stored in ACG.  **Note:** This endpoint is intended for catalog verification and merchant tooling. It is not a real-time product discovery API for end buyers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ProductFeedApi();
$getAllProductsRequest = new \stdClass; // object | Empty request body.
$page = 0; // int | Page number to retrieve (0-based). Defaults to 0.
$size = 300; // int | Number of products per page. Defaults to 300. Server enforces a maximum of 1000; values above 1000 are capped.

try {
    $result = $api_instance->getAllProducts($getAllProductsRequest, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFeedApi->getAllProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getAllProductsRequest** | **object**| Empty request body. |
 **page** | **int**| Page number to retrieve (0-based). Defaults to 0. | [optional] [default to 0]
 **size** | **int**| Number of products per page. Defaults to 300. Server enforces a maximum of 1000; values above 1000 are capped. | [optional] [default to 300]

### Return type

[**\CyberSource\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedJobStatus**
> \CyberSource\Model\InlineResponse20019 getFeedJobStatus($jobId, $getFeedJobStatusRequest)

Get Feed Job Status

Returns the processing and syndication status of a previously submitted product feed job.  Use this to poll the `jobId` returned by the Ingest Product Feed endpoint until processing and syndication complete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ProductFeedApi();
$jobId = "550e8400-e29b-41d4-a716-446655440000"; // string | Unique identifier of the feed submission job, returned by the Ingest Product Feed endpoint.
$getFeedJobStatusRequest = new \stdClass; // object | Empty request body.

try {
    $result = $api_instance->getFeedJobStatus($jobId, $getFeedJobStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFeedApi->getFeedJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | [**string**](../Model/.md)| Unique identifier of the feed submission job, returned by the Ingest Product Feed endpoint. |
 **getFeedJobStatusRequest** | **object**| Empty request body. |

### Return type

[**\CyberSource\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \CyberSource\Model\InlineResponse20021 getProduct($productId, $getProductRequest)

Get Product by ID

Retrieves a single product from the ACG catalog by its unique product identifier (SKU).  Use this to verify that a product was ingested correctly, inspect its current field values, or check its syndication-eligibility flags (`is_eligible_search`, `is_eligible_checkout`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ProductFeedApi();
$productId = "productId_example"; // string | The unique product identifier (SKU) assigned by the merchant and provided during feed ingestion. Example: `SKU-1001`.
$getProductRequest = new \stdClass; // object | Empty request body.

try {
    $result = $api_instance->getProduct($productId, $getProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFeedApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **string**| The unique product identifier (SKU) assigned by the merchant and provided during feed ingestion. Example: &#x60;SKU-1001&#x60;. |
 **getProductRequest** | **object**| Empty request body. |

### Return type

[**\CyberSource\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitProductFeedJson**
> \CyberSource\Model\InlineResponse2021 submitProductFeedJson($productFeedRequest)

Ingest Product Feed

Submits a merchant product catalog to ACG for asynchronous processing and syndication to all configured protocol backends (e.g. Google Merchant Center).  **Processing pipeline:** 1. The request is accepted immediately and a `jobId` is returned — validation, ingestion,    and syndication all happen asynchronously in the background. 2. Each product is validated against UCP/ACP schema requirements (required fields, format rules) 3. Valid products are saved to the ACG catalog 4. An async syndication job is triggered to push the catalog to configured backends  **Supported content types:** `application/json` (this endpoint). CSV and JSONL uploads are also supported via file upload endpoints.  **Note:** This endpoint no longer returns per-product validation results or syndication outcomes synchronously — only the `jobId` acknowledgement shown below. Use that `jobId` to track processing and syndication status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\ProductFeedApi();
$productFeedRequest = new \CyberSource\Model\ProductFeedRequest(); // \CyberSource\Model\ProductFeedRequest | Product feed payload. The `products` array is required and must contain at least one product. See `ProductInput` for the full list of required fields.

try {
    $result = $api_instance->submitProductFeedJson($productFeedRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductFeedApi->submitProductFeedJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productFeedRequest** | [**\CyberSource\Model\ProductFeedRequest**](../Model/ProductFeedRequest.md)| Product feed payload. The &#x60;products&#x60; array is required and must contain at least one product. See &#x60;ProductInput&#x60; for the full list of required fields. |

### Return type

[**\CyberSource\Model\InlineResponse2021**](../Model/InlineResponse2021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

