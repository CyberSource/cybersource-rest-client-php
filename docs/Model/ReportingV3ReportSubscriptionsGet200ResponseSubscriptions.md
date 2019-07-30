# ReportingV3ReportSubscriptionsGet200ResponseSubscriptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | Selected Organization Id | [optional] 
**reportDefinitionId** | **string** | Report Definition Id | [optional] 
**reportDefinitionName** | **string** | Report Definition Class | [optional] 
**reportMimeType** | **string** | Report Format                          Valid values: - application/xml - text/csv | [optional] 
**reportFrequency** | **string** | &#39;Report Frequency&#39;  Valid values: - DAILY - WEEKLY - MONTHLY - ADHOC | [optional] 
**reportName** | **string** | Report Name | [optional] 
**timezone** | **string** | Time Zone | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | Start Time | [optional] 
**startDay** | **int** | Start Day | [optional] 
**reportFields** | **string[]** | List of all fields String values | [optional] 
**reportFilters** | [**map[string,string[]]**](array.md) | List of filters to apply | [optional] 
**reportPreferences** | [**\CyberSource\Model\Reportingv3reportsReportPreferences**](Reportingv3reportsReportPreferences.md) |  | [optional] 
**groupId** | **string** | Id for the selected group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


