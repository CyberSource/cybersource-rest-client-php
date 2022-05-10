# CreateAdhocReportRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | Valid CyberSource Organization Id | [optional] 
**reportDefinitionName** | **string** |  | [optional] 
**reportFields** | **string[]** | List of fields which needs to get included in a report | [optional] 
**reportMimeType** | **string** | &#39;Format of the report&#39;                  Valid values: - application/xml - text/csv | [optional] 
**reportName** | **string** | Name of the report | [optional] 
**timezone** | **string** | Timezone of the report | [optional] 
**reportStartTime** | [**\DateTime**](\DateTime.md) | Start time of the report | [optional] 
**reportEndTime** | [**\DateTime**](\DateTime.md) | End time of the report | [optional] 
**reportFilters** | [**\CyberSource\Model\Reportingv3reportsReportFilters**](Reportingv3reportsReportFilters.md) |  | [optional] 
**reportPreferences** | [**\CyberSource\Model\Reportingv3reportsReportPreferences**](Reportingv3reportsReportPreferences.md) |  | [optional] 
**groupName** | **string** | Specifies the group name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


