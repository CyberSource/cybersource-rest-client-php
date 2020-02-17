# CreateReportSubscriptionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | Valid CyberSource organizationId | [optional] 
**reportDefinitionName** | **string** | Valid Report Definition Name | 
**reportFields** | **string[]** |  | 
**reportMimeType** | **string** | Valid values: - application/xml - text/csv | 
**reportFrequency** | **string** | &#39;The frequency for which subscription is created.&#39; **NOTE: Do not document USER_DEFINED Frequency field in developer center** Valid Values:   - &#39;DAILY&#39;   - &#39;WEEKLY&#39;   - &#39;MONTHLY&#39;   - &#39;USER_DEFINED&#39; | 
**reportInterval** | **string** | If the reportFrequency is User-defined, reportInterval should be in **ISO 8601 time format** Please refer the following link to know more about ISO 8601 format.[Rfc Time Format](https://en.wikipedia.org/wiki/ISO_8601#Durations)  **Example time format for 2 hours and 30 Mins:**   - PT2H30M **NOTE: Do not document reportInterval field in developer center** | [optional] 
**reportName** | **string** |  | 
**timezone** | **string** |  | 
**startTime** | **string** | The hour at which the report generation should start. It should be in hhmm format. | 
**startDay** | **int** | This is the start day if the frequency is WEEKLY or MONTHLY. The value varies from 1-7 for WEEKLY and 1-31 for MONTHLY. For WEEKLY 1 means Sunday and 7 means Saturday. By default the value is 1. | [optional] 
**reportFilters** | [**map[string,string[]]**](array.md) | List of filters to apply | [optional] 
**reportPreferences** | [**\CyberSource\Model\Reportingv3reportsReportPreferences**](Reportingv3reportsReportPreferences.md) |  | [optional] 
**groupName** | **string** | Valid GroupName | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


