# PostDeviceSearchRequestV3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | The Search Query to retrieve the Terminals.(Example :- serialNumber:456345234 AND readerId:509353f0-86ca-4af4-a1c9-c2702bfd7431  AND terminalId:7854922 AND status:Inactive AND statusChangeReason:Other AND organizationId:London Store) | [optional] 
**sort** | **string** | terminalCreationDate:desc (default) or serialNumber or terminalUpdationDate | [optional] 
**offset** | **int** | The offset or page number. | [optional] 
**limit** | **int** | Number of devices to retrieve in one request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


