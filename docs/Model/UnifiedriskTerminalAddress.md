# UnifiedriskTerminalAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addressLine1** | **string** | First line of the terminal&#39;s physical address (street number and name), used for geographic risk analysis and terminal location verification | [optional] 
**addressLine2** | **string** | Second line of the terminal&#39;s address for additional location details (building name, floor, suite) | [optional] 
**addressLine3** | **string** | Third line of the terminal&#39;s address for further location details | [optional] 
**addressType** | **string** | Type classification of the terminal address (e.g., BRANCH, ATM_INDOOR, ATM_OUTDOOR, KIOSK). Used for terminal risk profiling | [optional] 
**country** | **string** | ISO 3166-1 alpha-3 country code for the terminal&#39;s physical location (e.g., GBR, USA, AUS) | [optional] 
**administrativeArea** | **string** | State, province, or region of the terminal&#39;s physical location, used for regional fraud pattern analysis | [optional] 
**latitude** | **float** | Geographic latitude coordinate of the terminal&#39;s physical location in decimal degrees, used for proximity and geolocation risk signals | [optional] 
**longitude** | **float** | Geographic longitude coordinate of the terminal&#39;s physical location in decimal degrees, used for proximity and geolocation risk signals | [optional] 
**postalCode** | **string** | Postal code of the terminal&#39;s physical location, used for geographic risk clustering and distance-to-home fraud signals | [optional] 
**locality** | **string** | City or town of the terminal&#39;s physical location, used for regional risk analysis and cardholder distance calculation | [optional] 
**fullAddress** | **string** | Complete concatenated address of the terminal as a single string, including all lines, locality, postcode, and country | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


