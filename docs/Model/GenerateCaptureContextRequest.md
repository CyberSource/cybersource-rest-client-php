# GenerateCaptureContextRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientVersion** | **string** | Specify the version of Microform that you want to use. | [optional] 
**targetOrigins** | **string[]** | The [target origin](https://developer.mozilla.org/en-US/docs/Glossary/Origin) of the website on which you will be launching Microform is defined by the scheme (protocol), hostname (domain) and port number (if used).    You must use https://hostname (unless you use http://localhost) Wildcards are NOT supported.  Ensure that subdomains are included. Any valid top-level domain is supported (e.g. .com, .co.uk, .gov.br etc)  Examples:   - https://example.com   - https://subdomain.example.com   - https://example.com:8080&lt;br&gt;&lt;br&gt;  If you are embedding within multiple nested iframes you need to specify the origins of all the browser contexts used, for example:    targetOrigins: [     \&quot;https://example.com\&quot;,     \&quot;https://basket.example.com\&quot;,     \&quot;https://ecom.example.com\&quot;   ] | [optional] 
**allowedCardNetworks** | **string[]** | The list of card networks you want to use for this Microform transaction.  Microform currently supports the following card networks: - VISA - MASTERCARD - AMEX - CARNET - CARTESBANCAIRES - CUP - DINERSCLUB - DISCOVER - EFTPOS - ELO - JCB - JCREW - MADA - MAESTRO - MEEZA  **Important:**    - When integrating Microform (Card) at least one card network should be specified in the allowedCardNetworks field in the capture context request.   - When integrating Microform (ACH/Echeck) the allowedCardNetworks field is not required in the capture context request.   - When integrating both Microform (Card) and Microform (ACH/Echeck) at least one card network should be specified in the allowedCardNetworks field in the capture context request. | [optional] 
**allowedPaymentTypes** | **string[]** | The payment types that are allowed for the merchant.    Possible values when launching Microform: - CARD - CHECK &lt;br&gt;&lt;br&gt; | [optional] 
**transientTokenResponseOptions** | [**\CyberSource\Model\Microformv2sessionsTransientTokenResponseOptions**](Microformv2sessionsTransientTokenResponseOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


