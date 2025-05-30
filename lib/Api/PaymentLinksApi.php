<?php
/**
 * PaymentLinksApi
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
 * PaymentLinksApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentLinksApi
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
     * @return PaymentLinksApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createPaymentLink
     *
     * Create a Payment Link
     *
     * @param \CyberSource\Model\CreatePaymentLinkRequest $createPaymentLinkRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentLink($createPaymentLinkRequest)
    {
        self::$logger->info('CALL TO METHOD createPaymentLink STARTED');
        list($response, $statusCode, $httpHeader) = $this->createPaymentLinkWithHttpInfo($createPaymentLinkRequest);
        self::$logger->info('CALL TO METHOD createPaymentLink ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createPaymentLinkWithHttpInfo
     *
     * Create a Payment Link
     *
     * @param \CyberSource\Model\CreatePaymentLinkRequest $createPaymentLinkRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentLinkWithHttpInfo($createPaymentLinkRequest)
    {
        // verify the required parameter 'createPaymentLinkRequest' is set
        if ($createPaymentLinkRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $createPaymentLinkRequest when calling createPaymentLink");
            throw new \InvalidArgumentException('Missing the required parameter $createPaymentLinkRequest when calling createPaymentLink');
        }
        // parse inputs
        $resourcePath = "/ipl/v2/payment-links";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/hal+json', 'application/json;charset=utf-8', 'application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createPaymentLinkRequest)) {
            $_tempBody = $createPaymentLinkRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CreatePaymentLinkRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment(), $this->apiClient->merchantConfig->getDefaultDeveloperId());

        // for model (json/xml)
        if (isset($_tempBody) and count($formParams) <= 0) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = MultipartHelper::build_data_files($boundary, $formParams); // for HTTP post (form)
        }

        //MLE check and mle encryption for req body
        $isMLESupportedByCybsForApi = false;
        if (MLEUtility::checkIsMLEForAPI($this->apiClient->merchantConfig, $isMLESupportedByCybsForApi, "createPaymentLink,createPaymentLinkWithHttpInfo")) {
            try {
                $httpBody = MLEUtility::encryptRequestPayload($this->apiClient->merchantConfig, $httpBody);
            } catch (Exception $e) {
                self::$logger->error("Failed to encrypt request body:  $e");
                throw new ApiException("Failed to encrypt request body : " . $e->getMessage());
            }
        }

        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody) and count($formParams) <= 0) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PblPaymentLinksPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PblPaymentLinksPost201Response',
                '/ipl/v2/payment-links'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PblPaymentLinksPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet404Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InvoicingV2InvoicesAllGet502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getAllPaymentLinks
     *
     * Get a List of Payment Links
     *
     * @param int $offset Page offset number. (required)
     * @param int $limit Maximum number of items you would like returned.   Maximum limit: 1000 (required)
     * @param string $status The status of the purchase or donation link.  Possible values:   - ACTIVE   - INACTIVE (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksAllGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentLinks($offset, $limit, $status = null)
    {
        self::$logger->info('CALL TO METHOD getAllPaymentLinks STARTED');
        list($response, $statusCode, $httpHeader) = $this->getAllPaymentLinksWithHttpInfo($offset, $limit, $status);
        self::$logger->info('CALL TO METHOD getAllPaymentLinks ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getAllPaymentLinksWithHttpInfo
     *
     * Get a List of Payment Links
     *
     * @param int $offset Page offset number. (required)
     * @param int $limit Maximum number of items you would like returned.   Maximum limit: 1000 (required)
     * @param string $status The status of the purchase or donation link.  Possible values:   - ACTIVE   - INACTIVE (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksAllGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentLinksWithHttpInfo($offset, $limit, $status = null)
    {
        // verify the required parameter 'offset' is set
        if ($offset === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $offset when calling getAllPaymentLinks");
            throw new \InvalidArgumentException('Missing the required parameter $offset when calling getAllPaymentLinks');
        }
        // verify the required parameter 'limit' is set
        if ($limit === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $limit when calling getAllPaymentLinks");
            throw new \InvalidArgumentException('Missing the required parameter $limit when calling getAllPaymentLinks');
        }
        // parse inputs
        $resourcePath = "/ipl/v2/payment-links";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/hal+json', 'application/json;charset=utf-8', 'application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
        if (MLEUtility::checkIsMLEForAPI($this->apiClient->merchantConfig, $isMLESupportedByCybsForApi, "getAllPaymentLinks,getAllPaymentLinksWithHttpInfo")) {
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

        self::$logger->debug("Return Type : \CyberSource\Model\PblPaymentLinksAllGet200Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PblPaymentLinksAllGet200Response',
                '/ipl/v2/payment-links'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PblPaymentLinksAllGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet404Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InvoicingV2InvoicesAllGet502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getPaymentLink
     *
     * Get Payment Link Details
     *
     * @param string $id The purchase number. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentLink($id)
    {
        self::$logger->info('CALL TO METHOD getPaymentLink STARTED');
        list($response, $statusCode, $httpHeader) = $this->getPaymentLinkWithHttpInfo($id);
        self::$logger->info('CALL TO METHOD getPaymentLink ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getPaymentLinkWithHttpInfo
     *
     * Get Payment Link Details
     *
     * @param string $id The purchase number. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentLinkWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling getPaymentLink");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getPaymentLink');
        }
        // parse inputs
        $resourcePath = "/ipl/v2/payment-links/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/hal+json', 'application/json;charset=utf-8', 'application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        if (MLEUtility::checkIsMLEForAPI($this->apiClient->merchantConfig, $isMLESupportedByCybsForApi, "getPaymentLink,getPaymentLinkWithHttpInfo")) {
            try {
                $httpBody = MLEUtility::encryptRequestPayload($this->apiClient->merchantConfig, $httpBody);
            } catch (Exception $e) {
                self::$logger->error("Failed to encrypt request body:  $e");
                throw new ApiException("Failed to encrypt request body : " . $e->getMessage());
            }
        }

        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        if (isset($httpBody) and count($formParams) <= 0) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PblPaymentLinksGet200Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PblPaymentLinksGet200Response',
                '/ipl/v2/payment-links/{id}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PblPaymentLinksGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet404Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InvoicingV2InvoicesAllGet502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation updatePaymentLink
     *
     * Update a Payment Link
     *
     * @param string $id The purchase number. (required)
     * @param \CyberSource\Model\UpdatePaymentLinkRequest $updatePaymentLinkRequest Updating the purchase or donation link does not resend the link automatically. You must resend the purchase or donation link separately. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePaymentLink($id, $updatePaymentLinkRequest)
    {
        self::$logger->info('CALL TO METHOD updatePaymentLink STARTED');
        list($response, $statusCode, $httpHeader) = $this->updatePaymentLinkWithHttpInfo($id, $updatePaymentLinkRequest);
        self::$logger->info('CALL TO METHOD updatePaymentLink ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation updatePaymentLinkWithHttpInfo
     *
     * Update a Payment Link
     *
     * @param string $id The purchase number. (required)
     * @param \CyberSource\Model\UpdatePaymentLinkRequest $updatePaymentLinkRequest Updating the purchase or donation link does not resend the link automatically. You must resend the purchase or donation link separately. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PblPaymentLinksPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePaymentLinkWithHttpInfo($id, $updatePaymentLinkRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling updatePaymentLink");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updatePaymentLink');
        }
        // verify the required parameter 'updatePaymentLinkRequest' is set
        if ($updatePaymentLinkRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $updatePaymentLinkRequest when calling updatePaymentLink");
            throw new \InvalidArgumentException('Missing the required parameter $updatePaymentLinkRequest when calling updatePaymentLink');
        }
        // parse inputs
        $resourcePath = "/ipl/v2/payment-links/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/hal+json', 'application/json;charset=utf-8', 'application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($updatePaymentLinkRequest)) {
            $_tempBody = $updatePaymentLinkRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\UpdatePaymentLinkRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment(), $this->apiClient->merchantConfig->getDefaultDeveloperId());

        // for model (json/xml)
        if (isset($_tempBody) and count($formParams) <= 0) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = MultipartHelper::build_data_files($boundary, $formParams); // for HTTP post (form)
        }

        //MLE check and mle encryption for req body
        $isMLESupportedByCybsForApi = false;
        if (MLEUtility::checkIsMLEForAPI($this->apiClient->merchantConfig, $isMLESupportedByCybsForApi, "updatePaymentLink,updatePaymentLinkWithHttpInfo")) {
            try {
                $httpBody = MLEUtility::encryptRequestPayload($this->apiClient->merchantConfig, $httpBody);
            } catch (Exception $e) {
                self::$logger->error("Failed to encrypt request body:  $e");
                throw new ApiException("Failed to encrypt request body : " . $e->getMessage());
            }
        }

        
        // Logging
        self::$logger->debug("Resource : PATCH $resourcePath");
        if (isset($httpBody) and count($formParams) <= 0) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PblPaymentLinksPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PblPaymentLinksPost201Response',
                '/ipl/v2/payment-links/{id}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PblPaymentLinksPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PblPaymentLinksAllGet404Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InvoicingV2InvoicesAllGet502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
