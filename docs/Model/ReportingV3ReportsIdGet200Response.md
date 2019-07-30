# ReportingV3ReportsIdGet200Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | CyberSource merchant id | [optional] 
**reportId** | **string** | Report ID Value | [optional] 
**reportDefinitionId** | **string** | Report definition Id | [optional] 
**reportName** | **string** | Report Name | [optional] 
**reportMimeType** | **string** | Report Format  Valid values: - application/xml - text/csv | [optional] 
**reportFrequency** | **string** | Report Frequency Value  Valid values: - DAILY - WEEKLY - MONTHLY - ADHOC | [optional] 
**reportFields** | **string[]** | List of Integer Values | [optional] 
**reportStatus** | **string** | Report Status Value  Valid values: - COMPLETED - PENDING - QUEUED - RUNNING - ERROR - NO_DATA - RERUN | [optional] 
**reportStartTime** | [**\DateTime**](\DateTime.md) | Report Start Time Value | [optional] 
**reportEndTime** | [**\DateTime**](\DateTime.md) | Report End Time Value | [optional] 
**timezone** | **string** | Time Zone Value | [optional] 
**reportFilters** | [**map[string,string[]]**](array.md) | List of filters to apply | [optional] 
**reportPreferences** | [**\CyberSource\Model\Reportingv3reportsReportPreferences**](Reportingv3reportsReportPreferences.md) |  | [optional] 
**groupId** | **string** | Id for selected group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


