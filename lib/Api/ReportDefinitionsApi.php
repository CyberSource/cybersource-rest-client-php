<?php
/**
 * ReportDefinitionsApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;
use \CyberSource\Logging\LogFactory as LogFactory;
use \CyberSource\Authentication\Util\MLEUtility;
use \CyberSource\Utilities\MultipartHelpers\MultipartHelper;
use \Exception;

/**
 * ReportDefinitionsApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportDefinitionsApi
{
    private static $logger = null;
    
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $apiClient->merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return ReportDefinitionsApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getResourceInfoByReportDefinition
     *
     * Get Report Definition
     *
     * @param string $reportDefinitionName Name of the Report definition to retrieve (required)
     * @param string $subscriptionType The subscription type for which report definition is required. By default the type will be CUSTOM. Valid Values: - CLASSIC - CUSTOM - STANDARD (optional)
     * @param string $reportMimeType The format for which the report definition is required. By default the value will be CSV. Valid Values: - application/xml - text/csv (optional)
     * @param string $organizationId Valid Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceInfoByReportDefinition($reportDefinitionName, $subscriptionType = null, $reportMimeType = null, $organizationId = null)
    {
        self::$logger->info('CALL TO METHOD getResourceInfoByReportDefinition STARTED');
        list($response, $statusCode, $httpHeader) = $this->getResourceInfoByReportDefinitionWithHttpInfo($reportDefinitionName, $subscriptionType, $reportMimeType, $organizationId);
        self::$logger->info('CALL TO METHOD getResourceInfoByReportDefinition ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getResourceInfoByReportDefinitionWithHttpInfo
     *
     * Get Report Definition
     *
     * @param string $reportDefinitionName Name of the Report definition to retrieve (required)
     * @param string $subscriptionType The subscription type for which report definition is required. By default the type will be CUSTOM. Valid Values: - CLASSIC - CUSTOM - STANDARD (optional)
     * @param string $reportMimeType The format for which the report definition is required. By default the value will be CSV. Valid Values: - application/xml - text/csv (optional)
     * @param string $organizationId Valid Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceInfoByReportDefinitionWithHttpInfo($reportDefinitionName, $subscriptionType = null, $reportMimeType = null, $organizationId = null)
    {
        // verify the required parameter 'reportDefinitionName' is set
        if ($reportDefinitionName === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $reportDefinitionName when calling getResourceInfoByReportDefinition");
            throw new \InvalidArgumentException('Missing the required parameter $reportDefinitionName when calling getResourceInfoByReportDefinition');
        }
        // parse inputs
        $resourcePath = "/reporting/v3/report-definitions/{reportDefinitionName}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($subscriptionType !== null) {
            $queryParams['subscriptionType'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionType);
        }
        // query params
        if ($reportMimeType !== null) {
            $queryParams['reportMimeType'] = $this->apiClient->getSerializer()->toQueryValue($reportMimeType);
        }
        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // path params
        if ($reportDefinitionName !== null) {
            $resourcePath = str_replace(
                "{" . "reportDefinitionName" . "}",
                $this->apiClient->getSerializer()->toPathValue($reportDefinitionName),
                $resourcePath
            );
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody) and count($formParams) <= 0) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = MultipartHelper::build_data_files($boundary, $formParams); // for HTTP post (form)
        }

        //MLE check and mle encryption for req body
        $isMLESupportedByCybsForApi = false;
        if (MLEUtility::checkIsMLEForAPI($this->apiClient->merchantConfig, $isMLESupportedByCybsForApi, "getResourceInfoByReportDefinition,getResourceInfoByReportDefinitionWithHttpInfo")) {
            try {
                $httpBody = MLEUtility::encryptRequestPayload($this->apiClient->merchantConfig, $httpBody);
            } catch (Exception $e) {
                self::$logger->error("Failed to encrypt request body:  $e");
                throw new ApiException("Failed to encrypt request body : " . $e->getMessage());
            }
        }

        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        if (isset($httpBody) and count($formParams) <= 0) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response',
                '/reporting/v3/report-definitions/{reportDefinitionName}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\ReportingV3ReportDefinitionsNameGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getResourceV2Info
     *
     * Get Reporting Resource Information
     *
     * @param string $subscriptionType Valid Values: - CLASSIC - CUSTOM - STANDARD (optional)
     * @param string $organizationId Valid Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportDefinitionsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceV2Info($subscriptionType = null, $organizationId = null)
    {
        self::$logger->info('CALL TO METHOD getResourceV2Info STARTED');
        list($response, $statusCode, $httpHeader) = $this->getResourceV2InfoWithHttpInfo($subscriptionType, $organizationId);
        self::$logger->info('CALL TO METHOD getResourceV2Info ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getResourceV2InfoWithHttpInfo
     *
     * Get Reporting Resource Information
     *
     * @param string $subscriptionType Valid Values: - CLASSIC - CUSTOM - STANDARD (optional)
     * @param string $organizationId Valid Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportDefinitionsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceV2InfoWithHttpInfo($subscriptionType = null, $organizationId = null)
    {
        // parse inputs
        $resourcePath = "/reporting/v3/report-definitions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($subscriptionType !== null) {
            $queryParams['subscriptionType'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionType);
        }
        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody) and count($formParams) <= 0) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = MultipartHelper::build_data_files($boundary, $formParams); // for HTTP post (form)
        }

        //MLE check and mle encryption for req body
        $isMLESupportedByCybsForApi = false;
        if (MLEUtility::checkIsMLEForAPI($this->apiClient->merchantConfig, $isMLESupportedByCybsForApi, "getResourceV2Info,getResourceV2InfoWithHttpInfo")) {
            try {
                $httpBody = MLEUtility::encryptRequestPayload($this->apiClient->merchantConfig, $httpBody);
            } catch (Exception $e) {
                self::$logger->error("Failed to encrypt request body:  $e");
                throw new ApiException("Failed to encrypt request body : " . $e->getMessage());
            }
        }

        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        if (isset($httpBody) and count($formParams) <= 0) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\ReportingV3ReportDefinitionsGet200Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\ReportingV3ReportDefinitionsGet200Response',
                '/reporting/v3/report-definitions'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\ReportingV3ReportDefinitionsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\ReportingV3ReportDefinitionsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
