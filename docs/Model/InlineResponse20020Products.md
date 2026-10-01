# InlineResponse20020Products

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemId** | **string** | Unique product identifier / SKU. | [optional] 
**isEligibleSearch** | **bool** | When &#x60;true&#x60;, product appears in AI agent discovery results. | [optional] 
**isEligibleCheckout** | **bool** | When &#x60;true&#x60;, product can be added to a checkout session. | [optional] 
**title** | **string** | Product display name. | [optional] 
**description** | **string** | Product description. | [optional] 
**url** | **string** | URL to the product page on the merchant&#39;s storefront. | [optional] 
**imageUrl** | **string** | URL to the primary product image. | [optional] 
**productCategory** | **string** | Product category hierarchy (e.g. &#x60;Electronics &gt; Audio &gt; Headphones&#x60;). | [optional] 
**brand** | **string** | Product brand or manufacturer. | [optional] 
**material** | **string** | Primary material (relevant for apparel, furniture, etc.). | [optional] 
**weight** | **string** | Product weight including unit. | [optional] 
**price** | **float** | Product price as a decimal number. | [optional] 
**currency** | **string** | ISO 4217 currency code. | [optional] 
**availability** | **string** | Current stock status.  Possible values: - in_stock - out_of_stock - preorder - pre_order - backorder - unknown | [optional] 
**color** | **string** | Primary product color. | [optional] 
**gender** | **string** | Target gender (e.g. \&quot;male\&quot;, \&quot;female\&quot;, \&quot;unisex\&quot;). | [optional] 
**ageGroup** | **string** | Target age group (e.g. \&quot;adult\&quot;, \&quot;kids\&quot;, \&quot;infant\&quot;). | [optional] 
**shippingPrice** | **string** | Shipping cost string as provided by the merchant. | [optional] 
**groupId** | **string** | Product variant group identifier. | [optional] 
**listingHasVariations** | **bool** | Whether this listing has product variations (e.g. different sizes or colors). | [optional] 
**sellerName** | **string** | Merchant or seller display name. | [optional] 
**sellerUrl** | **string** | URL to the seller&#39;s storefront. | [optional] 
**returnPolicy** | **string** | Merchant return policy text. | [optional] 
**targetCountries** | **string[]** | Country codes where this product is available. | [optional] 
**storeCountry** | **string** | ISO 3166-1 alpha-2 country code of the merchant&#39;s store. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when this product was first ingested. | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp of the most recent update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


