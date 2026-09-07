# UnifiedriskCustomerPersonalIdentification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dateOfBirth** | **string** | The customer&#39;s date of birth. **Format**: &#x60;YYYYMMDD&#x60;.This field is a &#x60;pass-through&#x60;, which means that CyberSource ensures that the value is eight numeric characters but otherwise does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, CyberSource does not forward it to the processor. | [optional] 
**firstName** | **string** | The customer&#39;s first name. | [optional] 
**lastName** | **string** | The customer&#39;s last name. | [optional] 
**email** | **string** | The customer&#39;s email address. | [optional] 
**phone** | **string** | The customer&#39;s phone number. | [optional] 
**phoneNumber** | **string** | The customer&#39;s mobile or primary phone number used for contact or SMS-based verification, preferably in E.164 format (e.g., +15551234567) | [optional] 
**workPhoneNumber** | **string** | The customer&#39;s work or office phone number used as an alternative contact method for identity verification purposes | [optional] 
**taxId** | **string** | The customer&#39;s government-issued tax identification number used for regulatory compliance and identity verification (e.g., SSN in the US, NIF in Spain, PAN in India) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


