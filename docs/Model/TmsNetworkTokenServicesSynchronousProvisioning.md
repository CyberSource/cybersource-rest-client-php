# TmsNetworkTokenServicesSynchronousProvisioning

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Indicates if network tokens are provisioned synchronously (i.e. as part of the transaction flow) or asychronously (i.e. in parallel to the payment flow)  NOTE: The synchronous provisioning feature is designed exclusively for aggregator merchants.  Direct merchants should not enable synchronous provisioning as TMS manages the asynchronous creation of network tokens for direct clients.   Activation of this feature by direct merchants will lead to latency in the authorization response. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


