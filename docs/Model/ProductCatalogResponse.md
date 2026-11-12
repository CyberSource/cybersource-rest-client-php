# ProductCatalogResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalCount** | **int** | Total number of products across all pages. | [optional] 
**merchantId** | **string** | Merchant whose catalog is returned, or \&quot;all\&quot; if no filter applied. | [optional] 
**products** | [**\CyberSource\Model\ProductCatalogResponseProducts[]**](ProductCatalogResponseProducts.md) | List of product records for the current page. | [optional] 
**page** | **int** | Current page number (0-based). | [optional] 
**size** | **int** | Page size used in this response. | [optional] 
**totalPages** | **int** | Total number of pages available. | [optional] 
**hasNext** | **bool** | Whether more pages exist after the current page. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


