# UnifiedriskPaymentBankAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Account type: CHECKING, SAVINGS, CORPORATE, etc | [optional] 
**number** | **string** | Masked or tokenized account number | [optional] 
**numberFormat** | **string** | Account number format: IBAN, BBAN, etc | [optional] 
**routingNumber** | **string** | Bank routing/transit number | [optional] 
**iban** | **string** | International Bank Account Number | [optional] 
**swiftCode** | **string** | Bank SWIFT/BIC code | [optional] 
**bankCode** | **string** | Bank code | [optional] 
**checkNumber** | **string** | Check number for check payments | [optional] 
**checkImageReference** | **string** | Check image reference number | [optional] 
**encoderId** | **string** | Bank encoder identifier for encoded account numbers | [optional] 
**branchId** | **string** | Bank branch identifier | [optional] 
**flags** | **string[]** | Account flags: VIP, COMPROMISED, etc | [optional] 
**accountHolderName** | **string** | Full name of the person or business that owns the bank account | [optional] 
**addedAtCheckout** | **bool** | Whether the bank account was newly entered during checkout | [optional] 
**financialInstitution** | [**\CyberSource\Model\UnifiedriskPaymentBankAccountFinancialInstitution**](UnifiedriskPaymentBankAccountFinancialInstitution.md) |  | [optional] 
**balanceBefore** | [**\CyberSource\Model\UnifiedriskPaymentBankAccountBalanceBefore**](UnifiedriskPaymentBankAccountBalanceBefore.md) |  | [optional] 
**creditLimit** | [**\CyberSource\Model\UnifiedriskPaymentBankAccountCreditLimit**](UnifiedriskPaymentBankAccountCreditLimit.md) |  | [optional] 
**branchAddress** | [**\CyberSource\Model\UnifiedriskPaymentBankAccountBranchAddress**](UnifiedriskPaymentBankAccountBranchAddress.md) |  | [optional] 
**subType** | **string** | Sub-category of the bank account type providing more specific classification (e.g., PERSONAL_CHECKING, BUSINESS_SAVINGS, CORPORATE_CURRENT). Used for risk segmentation within account types | [optional] 
**accountOpenDate** | **string** | Date when the bank account was originally opened, in ISO 8601 format (YYYY-MM-DD). Account tenure is a key risk factor - newer accounts carry higher fraud risk | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


