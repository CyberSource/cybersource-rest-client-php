# UnifiedriskTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionId** | **string** | Unique identifier for the transaction being assessed | [optional] 
**status** | **string** | Transaction status: NEW, APPROVED, DECLINED, REVERSED, FRAUD | [optional] 
**statusReason** | **string** | Reason code for the transaction status | [optional] 
**messageType** | **string** | Message type: AUTHORIZATION, INQUIRY, ADVICE, REVERSAL | [optional] 
**type** | **string** | The type of transaction being processed | [optional] 
**attribute** | **string** | Transaction attribute: AGGREGATION, CARDLESS_ATM, etc | [optional] 
**initiator** | **string** | Who initiated transaction: MERCHANT, CUSTOMER | [optional] 
**channel** | **string** | Channel used: ONLINE, MOBILE, ATM, BRANCH, etc | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Local transaction timestamp without timezone | [optional] 
**cutoffDateTime** | [**\DateTime**](\DateTime.md) | Cutoff date/time for event or journey | [optional] 
**isRecurring** | **bool** | Indicates if this is a recurring transaction | [optional] 
**preOrder** | **bool** | Indicates if this is a pre-order | [optional] 
**preOrderDate** | [**\DateTime**](\DateTime.md) | Expected availability date for pre-order | [optional] 
**reordered** | **bool** | Indicates if customer is reordering | [optional] 
**destinationCountry** | **string** | Destination country for funds | [optional] 
**declinePhase** | **string** | Phase where transaction was declined | [optional] 
**trustedMerchant** | **bool** | Indicates if merchant is on trusted list | [optional] 
**additionalFees** | [**\CyberSource\Model\UnifiedriskTransactionAdditionalFees**](UnifiedriskTransactionAdditionalFees.md) |  | [optional] 
**amount** | [**\CyberSource\Model\UnifiedriskTransactionAmount**](UnifiedriskTransactionAmount.md) |  | [optional] 
**recurringDetails** | [**\CyberSource\Model\UnifiedriskTransactionRecurringDetails**](UnifiedriskTransactionRecurringDetails.md) |  | [optional] 
**direction** | **string** | Direction of the transaction flow relative to the customer&#39;s account (e.g., CREDIT for incoming funds, DEBIT for outgoing funds). Determines risk model orientation and velocity tracking | [optional] 
**isChargeback** | **bool** | Indicates whether this transaction represents a chargeback or dispute reversal. True signals a disputed transaction requiring fraud investigation and issuer liability assessment | [optional] 
**fraudLiability** | **string** | Indicates which party bears fraud liability for this transaction (e.g., ISSUER, MERCHANT, ACQUIRER). Liability shifts apply in 3DS-authenticated or EMV chip transactions | [optional] 
**onUsFlag** | **bool** | Indicates whether the transaction is an on-us transaction where the issuing and acquiring institutions are the same entity. On-us transactions may follow different risk rules and processing paths | [optional] 
**numberOfTransactions** | **int** | Total count of transactions associated with this batch, order, or session. Used for velocity-based risk rules and aggregated fraud monitoring | [optional] 
**batchDetails** | [**\CyberSource\Model\UnifiedriskTransactionBatchDetails**](UnifiedriskTransactionBatchDetails.md) |  | [optional] 
**checkDetails** | [**\CyberSource\Model\UnifiedriskTransactionCheckDetails**](UnifiedriskTransactionCheckDetails.md) |  | [optional] 
**purpose** | **string** | Business purpose or reason code for this transaction (e.g., PURCH for purchase, SALA for salary, REFND for refund). Used for transaction classification and AML monitoring | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


