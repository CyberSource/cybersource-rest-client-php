# PostDeviceSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | The Search Query to retrieve the Terminals(Example :- terminalSerialNumber:12345678 AND readerId:66c395ca-4f20-4b40-acac-5ff4c772d5f9 AND terminalId:T9KN88RTPE). Empty Query returns everything for the given organization. | [optional] 
**sort** | **string** | The Sort Query to order the Terminals by. By Default, It is in ascending order of last update of a device. | [optional] 
**offset** | **int** | The offset or page number. | [optional] 
**limit** | **int** | Number of devices to retrieve in one request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


