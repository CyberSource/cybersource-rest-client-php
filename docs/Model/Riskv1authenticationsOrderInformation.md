# Riskv1authenticationsOrderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amountDetails** | [**\CyberSource\Model\Riskv1authenticationsOrderInformationAmountDetails**](Riskv1authenticationsOrderInformationAmountDetails.md) |  | [optional] 
**preOrder** | **string** | Indicates whether cardholder is placing an order with a future availability or release date. This field can contain one of these values: - MERCHANDISE_AVAILABLE: Merchandise available - FUTURE_AVAILABILITY: Future availability | [optional] 
**preOrderDate** | **string** | Expected date that a pre-ordered purchase will be available. Format: YYYYMMDD | [optional] 
**reordered** | **bool** | Indicates whether the cardholder is reordering previously purchased merchandise. This field can contain one of these values: - false: First time ordered - true: Reordered | [optional] 
**shipTo** | [**\CyberSource\Model\Riskv1decisionsOrderInformationShipTo**](Riskv1decisionsOrderInformationShipTo.md) |  | [optional] 
**lineItems** | [**\CyberSource\Model\Riskv1authenticationsOrderInformationLineItems[]**](Riskv1authenticationsOrderInformationLineItems.md) | This array contains detailed information about individual products in the order. | [optional] 
**billTo** | [**\CyberSource\Model\Riskv1authenticationsOrderInformationBillTo**](Riskv1authenticationsOrderInformationBillTo.md) |  | [optional] 
**totalOffersCount** | **string** | Total number of articles/items in the order as a numeric decimal count. Possible values: 00 - 99 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


