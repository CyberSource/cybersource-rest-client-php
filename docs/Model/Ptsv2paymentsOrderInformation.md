# Ptsv2paymentsOrderInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amountDetails** | [**\CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetails**](Ptsv2paymentsOrderInformationAmountDetails.md) |  | [optional] 
**billTo** | [**\CyberSource\Model\Ptsv2paymentsOrderInformationBillTo**](Ptsv2paymentsOrderInformationBillTo.md) |  | [optional] 
**shipTo** | [**\CyberSource\Model\Ptsv2paymentsOrderInformationShipTo**](Ptsv2paymentsOrderInformationShipTo.md) |  | [optional] 
**lineItems** | [**\CyberSource\Model\Ptsv2paymentsOrderInformationLineItems[]**](Ptsv2paymentsOrderInformationLineItems.md) |  | [optional] 
**invoiceDetails** | [**\CyberSource\Model\Ptsv2paymentsOrderInformationInvoiceDetails**](Ptsv2paymentsOrderInformationInvoiceDetails.md) |  | [optional] 
**shippingDetails** | [**\CyberSource\Model\Ptsv2paymentsOrderInformationShippingDetails**](Ptsv2paymentsOrderInformationShippingDetails.md) |  | [optional] 
**returnsAccepted** | **bool** | This is only needed when you are requesting both payment and DM service at same time.  Boolean that indicates whether returns are accepted for this order. This field can contain one of the following values: - true: Returns are accepted for this order. - false: Returns are not accepted for this order. | [optional] 
**isCryptocurrencyPurchase** | **string** | #### Visa Platform Connect : This API will contain the Flag that specifies whether the payment is for the purchase of cryptocurrency. Additional values to add : This API will contain the Flag that specifies whether the payment is for the purchase of cryptocurrency. valid values are - Y/y, true - N/n, false | [optional] 
**cutoffDateTime** | **string** | Starting date and time for an event or a journey that is independent of which transportation mechanism, in UTC. The cutoffDateTime will supersede travelInformation.transit.airline.legs[].departureDate and travelInformation.transit.airline.legs[].departureTime if these fields are supplied in the request. Format: YYYY-MM-DDThh:mm:ssZ. Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC. | [optional] 
**preOrder** | **string** | Indicates whether cardholder is placing an order with a future availability or release date. This field can contain one of these values: - MERCHANDISE_AVAILABLE: Merchandise available - FUTURE_AVAILABILITY: Future availability | [optional] 
**preOrderDate** | **string** | Expected date that a pre-ordered purchase will be available. Format: YYYYMMDD | [optional] 
**reordered** | **bool** | Indicates whether the cardholder is reordering previously purchased merchandise. This field can contain one of these values: - false: First time ordered - true: Reordered | [optional] 
**totalOffersCount** | **string** | Total number of articles/items in the order as a numeric decimal count. Possible values: 00 - 99 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


