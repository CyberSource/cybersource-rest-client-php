# Ptsv2paymentsTravelInformationTransitAirline

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bookingReferenceNumber** | **string** | Reference number for the airline booking. Required if ticket numbers are not issued. | [optional] 
**carrierName** | **string** | Name of the airline. If you do not include this field, CyberSource uses the value for your merchant name that is in the CyberSource merchant configuration database. | [optional] 
**ticketIssuer** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer**](Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer.md) |  | [optional] 
**ticketNumber** | **string** | Ticket number. Format: English characters only | [optional] 
**checkDigit** | **string** | Check digit for the ticket number. CyberSource recommends that you validate the check digit. With Discover and Diners Club, a valid ticket number has these characteristics: - The value is numeric. - The first three digits are a valid IATA2 license plate carrier code. - The last digit is a check digit or zero (0). - All remaining digits are nonzero. | [optional] 
**restrictedTicketIndicator** | **int** | Flag that indicates whether or not the ticket is restricted (nonrefundable). Possible values: - 0: No restriction (refundable) - 1: Restricted (nonrefundable) | [optional] 
**transactionType** | **int** | Type of charge. Possible values: - 01: Charge is for an airline ticket - 02: Charge is for an item that is not an airline ticket | [optional] 
**extendedPaymentCode** | **string** | The field is not currently supported. | [optional] 
**passengerName** | **string** | Name of the passenger to whom the ticket was issued. This will always be a single passenger&#39;s name. If there are more than one passengers, provide only the primary passenger&#39;s name. Do not include special characters such as commas, hyphens, or apostrophes. Only ASCII characters are supported. | [optional] 
**customerCode** | **string** | 1.Reference number or code that identifies the cardholder. 2. Code provided by the cardholder. 3. Address of the ticket issuer. The first 13 characters will appear onthe cardholder’s statement. 4. Customer reference. | [optional] 
**documentType** | **string** | Airline document type code that specifies the purpose of the transaction. For the possible values, see Appendix A, \&quot;Airline Document Type Codes\&quot;. | [optional] 
**documentNumber** | **string** | The field is not currently supported. | [optional] 
**documentNumberOfParts** | **int** | The field is not currently supported. | [optional] 
**invoiceNumber** | **string** | Invoice number for the airline transaction. | [optional] 
**invoiceDate** | **int** | Invoice date. The format is YYYYMMDD. If this value is included in the request, it is used in the creation of the invoice number. See \&quot;Invoice Number,\&quot; | [optional] 
**additionalCharges** | **string** | Description of the charge if the charge does not involve an airline ticket. For example: Excess baggage. | [optional] 
**totalFeeAmount** | **string** | Total fee for the ticket. This value cannot exceed 99999999999999999999 (twenty 9s). | [optional] 
**clearingSequence** | **string** | Total number of captures when requesting multiple partial captures for one authorization. Used along with airlineData_clearingCount to keep track of which capture is beingprocessed. For example, the second of five captures would be passed to CyberSource as airlineData_clearingSequence &#x3D; 2 and airlineData_clearingCount &#x3D; 5. | [optional] 
**clearingCount** | **string** | Total number of clearing messages associated with the authorization request. Format: English characters only. | [optional] 
**totalClearingAmount** | **string** | Total clearing amount for all transactions in the clearing count set. If this field is not set and if the total amount from the original authorization is not NULL, CyberSource sets the total clearing amount to the total amount from the original authorization. | [optional] 
**numberOfPassengers** | **int** | Number of passengers for whom the ticket was issued. If you do not include this field in your request, CyberSource uses a default value of 1. | [optional] 
**reservationSystemCode** | **string** | Code that specifies the computerized reservation system used to make the reservation and purchase the ticket. Format: English characters only | [optional] 
**processIdentifier** | **string** | Airline process identifier. This value is the airline’s three-digit IATA1 code which is used to process extended payment airline tickets. | [optional] 
**ticketIssueDate** | **string** | Date on which the transactionoccurred. Format: YYYYMMDD | [optional] 
**electronicTicketIndicator** | **bool** | Flag that indicates whether an electronic ticket was issued. Possible values: - true - false | [optional] 
**originalTicketNumber** | **string** | Original ticket number when the transaction is for a replacement ticket. | [optional] 
**purchaseType** | **string** | Type of purchase. Possible values: - EXC: Exchange ticket - MSC: Miscellaneous (not a ticket purchase and not a transaction related to an exchange ticket) - REF: Refund - TKT: Ticket Format: English characters only. | [optional] 
**creditReasonIndicator** | **string** | Reason for the credit. Possible values: - A: Cancellation of the ancillary passenger transport purchase. - B: Cancellation of the airline ticket and the passenger transport ancillary purchase. - C: Cancellation of the airline ticket. - O: Other. - P: Partial refund of the airline ticket. | [optional] 
**ticketChangeIndicator** | **string** | Type of update. Possible values: - C: Change to the existing ticket. - N: New ticket. Format: English characters only | [optional] 
**planNumber** | **string** | Plan number based on the fare. This value is provided by the airline. Format: English characters only | [optional] 
**arrivalDate** | **string** | Date of arrival for the last leg of the trip. Format: MMDDYYYY English characters only. | [optional] 
**restrictedTicketDesciption** | **string** | Text that describes the ticket limitations, such as nonrefundable. Format: English characters only. | [optional] 
**exchangeTicketAmount** | **string** | Amount of the exchanged ticket. Format: English characters only. | [optional] 
**exchangeTicketFeeAmount** | **string** | Fee for exchanging the ticket. Format: English characters only | [optional] 
**reservationType** | **string** | The field is not currently supported. | [optional] 
**boardingFeeAmount** | **string** | Boarding fee. | [optional] 
**legs** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationTransitAirlineLegs[]**](Ptsv2paymentsTravelInformationTransitAirlineLegs.md) |  | [optional] 
**ancillaryInformation** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformation**](Ptsv2paymentsTravelInformationTransitAirlineAncillaryInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


