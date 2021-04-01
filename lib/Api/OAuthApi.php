<?php
/**
 * OAuthApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 */


namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * OAuthApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 */
class OAuthApi
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
     * @return OAuthApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation postAccessTokenRequest
     *
     * Post Access Token
     *
     * @param \CyberSource\Model\CreateAccessTokenRequest $createAccessTokenRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\AccessTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postAccessTokenRequest($createAccessTokenRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->postAccessTokenRequestWithHttpInfo($createAccessTokenRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation postAccessTokenRequestWithHttpInfo
     *
     * Post Access Token
     *
     * @param \CyberSource\Model\CreateAccessTokenRequest $createAccessTokenRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\AccessTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postAccessTokenRequestWithHttpInfo($createAccessTokenRequest)
    {
        // verify the required parameter 'createAccessTokenRequest' is set
        if ($createAccessTokenRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createAccessTokenRequest when calling postAccessTokenRequest');
        }
        // parse inputs
        $resourcePath = "/oauth2/v3/token";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // body params
        $_tempBody = null;
        if (isset($createAccessTokenRequest)) {
            $_tempBody = $createAccessTokenRequest;
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
                '\CyberSource\Model\AccessTokenResponse',
                '/oauth2/v3/token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\AccessTokenResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\AccessTokenResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsCapturesPost400Response', $e->getResponseHeaders());
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
