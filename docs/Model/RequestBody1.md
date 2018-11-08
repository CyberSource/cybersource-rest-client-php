# RequestBody1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | Valid CyberSource Organization Id | [optional] 
**reportDefinitionName** | **string** |  | [optional] 
**reportFields** | **string[]** | List of fields which needs to get included in a report | [optional] 
**reportMimeType** | **string** | Format of the report | [optional] 
**reportName** | **string** | Name of the report | [optional] 
**timezone** | **string** | Timezone of the report | [optional] 
**reportStartTime** | [**\DateTime**](\DateTime.md) | Start time of the report | [optional] 
**reportEndTime** | [**\DateTime**](\DateTime.md) | End time of the report | [optional] 
**reportFilters** | [**map[string,string[]]**](array.md) |  | [optional] 
**reportPreferences** | [**\CyberSource\Model\ReportingV3ReportSubscriptionsGet200ResponseReportPreferences**](ReportingV3ReportSubscriptionsGet200ResponseReportPreferences.md) |  | [optional] 
**selectedMerchantGroupName** | **string** | Specifies the group name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


