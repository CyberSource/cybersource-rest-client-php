# ReportingV3ReportsGet200ResponseReportSearchResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link** | [**\CyberSource\Model\ReportingV3ReportsGet200ResponseLink**](ReportingV3ReportsGet200ResponseLink.md) |  | [optional] 
**reportDefinitionId** | **string** | Unique Report Identifier of each report type | [optional] 
**reportName** | **string** | Name of the report specified by merchant while creating the report | [optional] 
**reportMimeType** | **string** | Format of the report to get generated Valid Values: - application/xml - text/csv | [optional] 
**reportFrequency** | **string** | Frequency of the report to get generated Valid Values: - DAILY - WEEKLY - MONTHLY - ADHOC | [optional] 
**status** | **string** | Status of the report Valid Values: - COMPLETED - PENDING - QUEUED - RUNNING - ERROR - NO_DATA | [optional] 
**reportStartTime** | [**\DateTime**](\DateTime.md) | Specifies the report start time in ISO 8601 format | [optional] 
**reportEndTime** | [**\DateTime**](\DateTime.md) | Specifies the report end time in ISO 8601 format | [optional] 
**timezone** | **string** | Time Zone | [optional] 
**reportId** | **string** | Unique identifier generated for every reports | [optional] 
**organizationId** | **string** | CyberSource Merchant Id | [optional] 
**queuedTime** | [**\DateTime**](\DateTime.md) | Specifies the time of the report in queued  in ISO 8601 format | [optional] 
**reportGeneratingTime** | [**\DateTime**](\DateTime.md) | Specifies the time of the report started to generate  in ISO 8601 format | [optional] 
**reportCompletedTime** | [**\DateTime**](\DateTime.md) | Specifies the time of the report completed the generation  in ISO 8601 format | [optional] 
**subscriptionType** | **string** | Specifies whether the subscription created is either Custom, Standard or Classic | [optional] 
**groupId** | **string** | Id for selected group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


