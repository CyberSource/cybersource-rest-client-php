# SAConfigNotificationsCustomerNotifications

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customReceiptPageEnabled** | **bool** | Toggles the custom receipt page, where merchants can receive the results of the transaction and display appropriate messaging. Usually set by web developers integrating to Secure Acceptance. | [optional] 
**receiptEmailAddress** | **string** | Email address where a copy of the payer&#39;s receipt email is sent, when notificationReceiptEmailEnabled is true. | [optional] 
**customerReceiptEmailEnabled** | **bool** | Toggles an email receipt sent to the payer&#39;s email address on payment success. | [optional] 
**customCancelPage** | **string** | URL to which transaction results are POSTed when the payer clicks &#39;Cancel&#39; on the Hosted Checkout. Triggered when customCancelPageEnabled is true. Usually set by web developers integrating to Secure Acceptance. | [optional] 
**customReceiptPage** | **string** | URL to which transaction results are POSTed when the payer requests a payment on the Hosted Checkout. Triggered when customCancelPageEnabled is true. Usually set by web developers integrating to Secure Acceptance. | [optional] 
**customCancelPageEnabled** | **bool** | Toggles the custom cancel page, where merchants can receive notice that the payer has canceled, and display appropriate messaging and direction. Usually set by web developers integrating to Secure Acceptance. | [optional] 
**notificationReceiptEmailEnabled** | **bool** | Toggles whether merchant receives a copy of the payer&#39;s receipt email. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


