# UnifiedriskPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | Payment method: CARD, BANK_ACCOUNT, WALLET | [optional] 
**customerId** | **string** | Payment customer token ID | [optional] 
**customerIdLegacy** | **string** | Legacy customer ID for payment tokenization | [optional] 
**card** | [**\CyberSource\Model\UnifiedriskPaymentCard**](UnifiedriskPaymentCard.md) |  | [optional] 
**verification** | [**\CyberSource\Model\UnifiedriskPaymentVerification**](UnifiedriskPaymentVerification.md) |  | [optional] 
**wallet** | [**\CyberSource\Model\UnifiedriskPaymentWallet**](UnifiedriskPaymentWallet.md) |  | [optional] 
**bankAccount** | [**\CyberSource\Model\UnifiedriskPaymentBankAccount**](UnifiedriskPaymentBankAccount.md) |  | [optional] 
**counterparty** | [**\CyberSource\Model\UnifiedriskPaymentCounterparty**](UnifiedriskPaymentCounterparty.md) |  | [optional] 
**approvals** | [**\CyberSource\Model\UnifiedriskPaymentApprovals**](UnifiedriskPaymentApprovals.md) |  | [optional] 
**bank** | **object** | Container for additional bank-specific information related to the payment, including routing codes, clearing house details, and bank-specific metadata | [optional] 
**token** | [**\CyberSource\Model\UnifiedriskPaymentToken**](UnifiedriskPaymentToken.md) |  | [optional] 
**batch** | [**\CyberSource\Model\UnifiedriskPaymentBatch**](UnifiedriskPaymentBatch.md) |  | [optional] 
**subMethod** | **string** | The specific sub-type of the payment method used (e.g., SEPA_CREDIT_TRANSFER, FASTER_PAYMENTS, ACH_NEXT_DAY). Provides granular detail within the broader payment method | [optional] 
**purpose** | **string** | The business or regulatory purpose code for the payment (e.g., SUPP for supplier payment, SALA for salary, CHAR for charity). Used for AML monitoring and regulatory reporting | [optional] 
**clearingSpeed** | **string** | Indicates the speed at which the payment will be cleared and settled (e.g., REAL_TIME, SAME_DAY, NEXT_DAY, STANDARD). Faster clearing speeds on large amounts may indicate fraud | [optional] 
**executionTimestamp** | **string** | The date and time when the payment execution was initiated or scheduled by the payer or payment system, in ISO 8601 format | [optional] 
**groupId** | **string** | An identifier linking multiple related payments into a logical group (e.g., bulk payroll run ID, campaign payment group). Used for aggregated risk monitoring | [optional] 
**check** | [**\CyberSource\Model\UnifiedriskPaymentCheck**](UnifiedriskPaymentCheck.md) |  | [optional] 
**wire** | [**\CyberSource\Model\UnifiedriskPaymentWire**](UnifiedriskPaymentWire.md) |  | [optional] 
**type** | **string** | Specifies the underlying payment instrument type for this transaction (e.g., CARD, BANK_TRANSFER, CHECK, WIRE, ACH). Used for routing to the appropriate risk model and clearing network | [optional] 
**sdk** | [**\CyberSource\Model\UnifiedriskPaymentSdk**](UnifiedriskPaymentSdk.md) |  | [optional] 
**locationId** | **string** | Physical location (branch or ATM) in which the activity took place (if that&#39;s a physical branch). Identifier for staff location, site, or service centre. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


