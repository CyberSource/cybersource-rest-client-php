<?php
/**
 * PayerAuthenticationApi
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

/**
 * PayerAuthenticationApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayerAuthenticationApi
{
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
     * @return PayerAuthenticationApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkPayerAuthEnrollment
     *
     * Check payer auth enrollment
     *
     * @param \CyberSource\Model\CheckPayerAuthEnrollmentRequest $checkPayerAuthEnrollmentRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1AuthenticationsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkPayerAuthEnrollment($checkPayerAuthEnrollmentRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->checkPayerAuthEnrollmentWithHttpInfo($checkPayerAuthEnrollmentRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation checkPayerAuthEnrollmentWithHttpInfo
     *
     * Check payer auth enrollment
     *
     * @param \CyberSource\Model\CheckPayerAuthEnrollmentRequest $checkPayerAuthEnrollmentRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1AuthenticationsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkPayerAuthEnrollmentWithHttpInfo($checkPayerAuthEnrollmentRequest)
    {
        // verify the required parameter 'checkPayerAuthEnrollmentRequest' is set
        if ($checkPayerAuthEnrollmentRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $checkPayerAuthEnrollmentRequest when calling checkPayerAuthEnrollment');
        }
        // parse inputs
        $resourcePath = "/risk/v1/authentications";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($checkPayerAuthEnrollmentRequest)) {
            $_tempBody = $checkPayerAuthEnrollmentRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\RiskV1AuthenticationsPost201Response',
                '/risk/v1/authentications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RiskV1AuthenticationsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1AuthenticationsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1AuthenticationsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation validateAuthenticationResults
     *
     * Validate authentication results
     *
     * @param \CyberSource\Model\Request $request  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1AuthenticationResultsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateAuthenticationResults($request)
    {
        list($response, $statusCode, $httpHeader) = $this->validateAuthenticationResultsWithHttpInfo($request);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation validateAuthenticationResultsWithHttpInfo
     *
     * Validate authentication results
     *
     * @param \CyberSource\Model\Request $request  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\RiskV1AuthenticationResultsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateAuthenticationResultsWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling validateAuthenticationResults');
        }
        // parse inputs
        $resourcePath = "/risk/v1/authentication-results";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\RiskV1AuthenticationResultsPost201Response',
                '/risk/v1/authentication-results'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\RiskV1AuthenticationResultsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1AuthenticationResultsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\RiskV1AuthenticationsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}