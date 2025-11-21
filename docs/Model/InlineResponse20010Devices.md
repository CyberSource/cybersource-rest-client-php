# InlineResponse20010Devices

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**readerId** | **string** |  | [optional] 
**serialNumber** | **string** |  | [optional] 
**model** | **string** |  | [optional] 
**make** | **string** |  | [optional] 
**hardwareRevision** | **string** |  | [optional] 
**status** | **string** | Status of the device. Possible Values:   - &#39;ACTIVE&#39;   - &#39;INACTIVE&#39; | [optional] 
**statusChangeReason** | **string** | Reason for change in status. | [optional] 
**merchantId** | **string** | ID of the merchant to whom this device is assigned. | [optional] 
**accountId** | **string** | ID of the account to whom the device assigned. | [optional] 
**terminalCreationDate** | [**\DateTime**](\DateTime.md) | Timestamp in which the device was created. | [optional] 
**terminalUpdationDate** | [**\DateTime**](\DateTime.md) | Timestamp in which the device was updated/modified. | [optional] 
**paymentProcessorToTerminalMap** | [**\CyberSource\Model\InlineResponse20010PaymentProcessorToTerminalMap**](InlineResponse20010PaymentProcessorToTerminalMap.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


