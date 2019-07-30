# RequestBody1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | Valid CyberSource organizationId | [optional] 
**reportDefinitionName** | **string** | Valid Report Definition Name | 
**reportFields** | **string[]** |  | 
**reportMimeType** | **string** | Valid values: - application/xml - text/csv | 
**reportFrequency** | **string** | &#39;The frequency for which subscription is created.&#39;  Valid values: - &#39;DAILY&#39; - &#39;WEEKLY&#39; - &#39;MONTHLY&#39; - &#39;ADHOC&#39; | 
**reportName** | **string** |  | 
**timezone** | **string** |  | 
**startTime** | **string** | The hour at which the report generation should start. It should be in hhmm format. | 
**startDay** | **int** | This is the start day if the frequency is WEEKLY or MONTHLY. The value varies from 1-7 for WEEKLY and 1-31 for MONTHLY. For WEEKLY 1 means Sunday and 7 means Saturday. By default the value is 1. | [optional] 
**reportFilters** | [**map[string,string[]]**](array.md) | List of filters to apply | [optional] 
**reportPreferences** | [**\CyberSource\Model\Reportingv3reportsReportPreferences**](Reportingv3reportsReportPreferences.md) |  | [optional] 
**groupName** | **string** | Valid GroupName | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


