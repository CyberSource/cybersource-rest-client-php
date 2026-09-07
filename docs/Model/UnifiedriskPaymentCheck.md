# UnifiedriskPaymentCheck

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkNumber** | **string** | Serial number printed on the physical check, used for duplicate detection, check fraud prevention, and reconciliation | [optional] 
**depositSlipId** | **string** | Unique identifier for the deposit slip associated with the check deposit, used for linking deposited checks to branch transactions | [optional] 
**depositLocation** | [**\CyberSource\Model\UnifiedriskPaymentCheckDepositLocation**](UnifiedriskPaymentCheckDepositLocation.md) |  | [optional] 
**micrAccountNumber** | **string** | Account number encoded in the MICR (Magnetic Ink Character Recognition) line at the bottom of the check, used for automated account identification | [optional] 
**routingTransitNumber** | **string** | Bank routing and transit number (RTN) encoded in the MICR line of the check, identifying the financial institution on which the check is drawn | [optional] 
**splitDepositFlag** | **bool** | Indicates whether the check deposit has been split across multiple accounts. Split deposits may indicate structuring or kiting attempts | [optional] 
**splitAccountId1** | **string** | First destination account ID in a split check deposit, used for tracking the allocation of funds across multiple accounts | [optional] 
**splitAccountId2** | **string** | Second destination account ID in a split check deposit | [optional] 
**splitAccountId3** | **string** | Third destination account ID in a split check deposit | [optional] 
**splitAccountId4** | **string** | Fourth destination account ID in a split check deposit | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


