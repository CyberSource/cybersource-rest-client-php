# UnifiedriskPaymentCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name on the card | [optional] 
**number** | **string** | Tokenized or masked card number | [optional] 
**cardNetwork** | **string** | Card network: VISA, MASTERCARD, AMEX, etc | [optional] 
**type** | **string** | Card type: CREDIT, DEBIT, PREPAID etc. | [optional] 
**subType** | **string** | Card subtype: GOLD, PLATINUM, etc | [optional] 
**bin** | **string** | Bank Identification Number (first 6 digits) | [optional] 
**expirationMonth** | **string** | Card expiration month | [optional] 
**expirationYear** | **string** | Card expiration year | [optional] 
**issueDate** | [**\DateTime**](\DateTime.md) | Date card was issued | [optional] 
**issuerCountry** | **string** | Country where card was issued | [optional] 
**brand** | **string** | Card network: VISA, MASTERCARD, AMEX, etc | [optional] 
**sequenceNumber** | **int** | Sequence number for cards with same PAN | [optional] 
**last4** | **string** | Last 4 digits of card number | [optional] 
**status** | **string** | Card status: ACTIVE, BLOCKED, CANCELLED | [optional] 
**tokenTransactionType** | **string** | Transaction type that provided the token data | [optional] 
**tokenDetails** | [**\CyberSource\Model\UnifiedriskPaymentCardTokenDetails**](UnifiedriskPaymentCardTokenDetails.md) |  | [optional] 
**addedAtCheckout** | **bool** | Whether the card was newly entered during checkout | [optional] 
**parDetails** | [**\CyberSource\Model\UnifiedriskPaymentCardParDetails**](UnifiedriskPaymentCardParDetails.md) |  | [optional] 
**expiryDate** | **string** | Card expiry date in MMYYYY or MMYY format, used for matching against the expiry date declared during enrollment and to flag expired or about-to-expire cards | [optional] 
**entityId** | **string** | Unique entity identifier for the card as assigned by the card scheme or token service provider, used for lifecycle and risk management | [optional] 
**binEntityId** | **string** | Entity identifier linked to the card&#39;s BIN, used to identify the issuing institution or program associated with the card&#39;s BIN range | [optional] 
**securityCode** | **string** | Result or presence indicator for Card Security Code (CVV2/CVC2/CID) verification. Indicates whether the security code was present, verified, or matched by the issuer | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


