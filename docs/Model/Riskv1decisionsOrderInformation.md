# Riskv1decisionsOrderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amountDetails** | [**\CyberSource\Model\Riskv1decisionsOrderInformationAmountDetails**](Riskv1decisionsOrderInformationAmountDetails.md) |  | [optional] 
**preOrder** | **string** | Indicates whether cardholder is placing an order with a future availability or release date. This field can contain one of these values: - MERCHANDISE_AVAILABLE: Merchandise available - FUTURE_AVAILABILITY: Future availability | [optional] 
**preOrderDate** | **string** | Expected date that a pre-ordered purchase will be available. Format: YYYYMMDD | [optional] 
**reordered** | **bool** | Indicates whether the cardholder is reordering previously purchased merchandise. This field can contain one of these values: - false: First time ordered - true: Reordered | [optional] 
**shippingDetails** | [**\CyberSource\Model\Riskv1decisionsOrderInformationShippingDetails**](Riskv1decisionsOrderInformationShippingDetails.md) |  | [optional] 
**shipTo** | [**\CyberSource\Model\Riskv1decisionsOrderInformationShipTo**](Riskv1decisionsOrderInformationShipTo.md) |  | [optional] 
**returnsAccepted** | **bool** | Boolean that indicates whether returns are accepted for this order. This field can contain one of the following values: - true: Returns are accepted for this order. - false: Returns are not accepted for this order. | [optional] 
**lineItems** | [**\CyberSource\Model\Riskv1decisionsOrderInformationLineItems[]**](Riskv1decisionsOrderInformationLineItems.md) | This array contains detailed information about individual products in the order. | [optional] 
**billTo** | [**\CyberSource\Model\Riskv1decisionsOrderInformationBillTo**](Riskv1decisionsOrderInformationBillTo.md) |  | [optional] 
**totalOffersCount** | **string** | Total number of articles/items in the order as a numeric decimal count. Possible values: 00 - 99 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


