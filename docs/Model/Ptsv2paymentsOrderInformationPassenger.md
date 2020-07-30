# Ptsv2paymentsOrderInformationPassenger

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Passenger classification associated with the price of the ticket. You can use one of the following values: - &#x60;ADT&#x60;: Adult - &#x60;CNN&#x60;: Child - &#x60;INF&#x60;: Infant - &#x60;YTH&#x60;: Youth - &#x60;STU&#x60;: Student - &#x60;SCR&#x60;: Senior Citizen - &#x60;MIL&#x60;: Military | [optional] 
**status** | **string** | Your company&#39;s passenger classification, such as with a frequent flyer program. In this case, you might use values such as &#x60;standard&#x60;, &#x60;gold&#x60;, or &#x60;platinum&#x60;. | [optional] 
**phone** | **string** | Passenger&#39;s phone number. If the order is from outside the U.S., CyberSource recommends that you include the [ISO Standard Country Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf). | [optional] 
**firstName** | **string** | Passenger&#39;s first name. | [optional] 
**lastName** | **string** | Passenger&#39;s last name. | [optional] 
**id** | **string** | ID of the passenger to whom the ticket was issued. For example, you can use this field for the frequent flyer number. | [optional] 
**email** | **string** | Passenger&#39;s email address, including the full domain name, such as jdoe@example.com. | [optional] 
**nationality** | **string** | Passenger&#39;s nationality country. Use the two character [ISO Standard Country Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


