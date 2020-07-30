# Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | IATA2 airline code. Format: English characters only. Required for Mastercard; optional for all other card types. | [optional] 
**name** | **string** | Name of the ticket issuer. If you do not include this field, CyberSource uses the value for your merchant name that is in the CyberSource merchant configuration database. | [optional] 
**address** | **string** | Address of the company issuing the ticket. | [optional] 
**locality** | **string** | City in which the transaction occurred. If the name of the city exceeds 18 characters, use meaningful abbreviations. Format: English characters only. Optional request field. | [optional] 
**administrativeArea** | **string** | State in which transaction occured. | [optional] 
**postalCode** | **string** | Zip code of the city in which transaction occured. | [optional] 
**country** | **string** | Country in which transaction occured. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


