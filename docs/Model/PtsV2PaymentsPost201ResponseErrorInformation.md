# PtsV2PaymentsPost201ResponseErrorInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | The reason of the status.  Possible values:  - AVS_FAILED  - CONTACT_PROCESSOR  - EXPIRED_CARD  - PROCESSOR_DECLINED  - INSUFFICIENT_FUND  - STOLEN_LOST_CARD  - ISSUER_UNAVAILABLE  - UNAUTHORIZED_CARD  - CVN_NOT_MATCH  - EXCEEDS_CREDIT_LIMIT  - INVALID_CVN  - BLOCKED_BY_CARDHOLDER  - DECLINED_CHECK  - BLACKLISTED_CUSTOMER  - SUSPENDED_ACCOUNT  - PAYMENT_REFUSED  - CV_FAILED  - INVALID_ACCOUNT  - GENERAL_DECLINE  - INVALID_MERCHANT_CONFIGURATION  - DECISION_PROFILE_REJECT  - SCORE_EXCEEDS_THRESHOLD  - PENDING_AUTHENTICATION  - ACH_VERIFICATION_FAILED  - DECISION_PROFILE_REVIEW  - CONSUMER_AUTHENTICATION_REQUIRED  - CONSUMER_AUTHENTICATION_FAILED  - ALLOWABLE_PIN_RETRIES_EXCEEDED  - PROCESSOR_ERROR  - CUSTOMER_WATCHLIST_MATCH  - ADDRESS_COUNTRY_WATCHLIST_MATCH  - EMAIL_COUNTRY_WATCHLIST_MATCH  - IP_COUNTRY_WATCHLIST_MATCH  - INVALID_MERCHANT_CONFIGURATION | [optional] 
**message** | **string** | The detail message related to the status and reason listed above. | [optional] 
**details** | [**\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformationDetails[]**](PtsV2PaymentsPost201ResponseErrorInformationDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


