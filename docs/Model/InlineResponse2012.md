# InlineResponse2012

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**submitTimeUtc** | [**\DateTime**](\DateTime.md) | Time of request in UTC. &#x60;Format: YYYY-MM-DDThh:mm:ssZ&#x60;  Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC. | [optional] 
**status** | **string** | The status of Registration request Possible Values:   - &#39;INITIALIZED&#39;   - &#39;RECEIVED&#39;   - &#39;PROCESSING&#39;   - &#39;SUCCESS&#39;   - &#39;FAILURE&#39;   - &#39;PARTIAL&#39; | [optional] 
**registrationInformation** | [**\CyberSource\Model\InlineResponse2012RegistrationInformation**](InlineResponse2012RegistrationInformation.md) |  | [optional] 
**integrationInformation** | [**\CyberSource\Model\InlineResponse2012IntegrationInformation**](InlineResponse2012IntegrationInformation.md) |  | [optional] 
**organizationInformation** | [**\CyberSource\Model\InlineResponse2012OrganizationInformation**](InlineResponse2012OrganizationInformation.md) |  | [optional] 
**productInformationSetups** | [**\CyberSource\Model\InlineResponse2012ProductInformationSetups[]**](InlineResponse2012ProductInformationSetups.md) |  | [optional] 
**message** | **string** |  | [optional] 
**details** | [**map[string,object[]]**](array.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


