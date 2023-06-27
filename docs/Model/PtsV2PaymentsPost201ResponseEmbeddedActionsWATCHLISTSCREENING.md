# PtsV2PaymentsPost201ResponseEmbeddedActionsWATCHLISTSCREENING

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status for the call can be: - COMPLETED - INVALID_REQUEST - DECLINED | [optional] 
**reason** | **string** | The reason of the status. Value can be   - &#x60;CUSTOMER_WATCHLIST_MATCH&#x60;   - &#x60;ADDRESS_COUNTRY_WATCHLIST_MATCH&#x60;   - &#x60;EMAIL_COUNTRY_WATCHLIST_MATCH&#x60;   - &#x60;IP_COUNTRY_WATCHLIST_MATCH&#x60;   - &#x60;INVALID_MERCHANT_CONFIGURATION&#x60; | [optional] 
**message** | **string** | The message describing the reason of the status. Value can be   - The customer matched the Denied Parties List   - The Export bill_country/ship_country  match   - Export email_country match   - Export hostname_country/ip_country match | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


