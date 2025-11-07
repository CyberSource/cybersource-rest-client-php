<?php
/**
 * Capture Context Utility Class
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource\Utilities\CaptureContext
 * @author   CyberSource
 * @link     https://developer.cybersource.com/
 */

namespace CyberSource\Utilities\CaptureContext;

use CyberSource\Authentication\Util\JWT\JWTUtility;
use Exception;

/**
 * PublicKeyApiController Class
 *
 * Provides utility functions for working with Capture Context, including
 * fetching public keys from the Flex API for JWT verification.
 *
 * @category Class
 * @package  CyberSource\Utilities\CaptureContext
 * @author   CyberSource
 */
class PublicKeyApiController
{
    /**
     * Fetches the public key for the given key ID (kid) from the specified run environment.
     *
     * This function makes an HTTP GET request to the Flex API to retrieve the public key
     * associated with the provided key ID. The public key is returned in JWK format and
     * converted to an RSA public key array.
     *
     * @param string $kid            The key ID for which to fetch the public key.
     * @param string $runEnvironment The environment domain (e.g., 'apitest.cybersource.com').
     *
     * @return array The RSA public key array in JWK format
     * @throws Exception If the request fails or the response is invalid
     */
    public static function fetchPublicKey($kid, $runEnvironment)
    {
        // Validate kid parameter
        if (empty($kid)) {
            throw new Exception('kid parameter is required');
        }
        
        // Validate runEnvironment parameter
        if (empty($runEnvironment)) {
            throw new Exception('runEnvironment parameter is required');
        }
        
        // Construct the URL
        $url = "https://{$runEnvironment}/flex/v2/public-keys/{$kid}";
        
        // Initialize cURL
        $curl = curl_init();
        
        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json'
            ],
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2
        ]);
        
        // Execute the request
        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $curlError = curl_error($curl);
        $curlErrno = curl_errno($curl);
        
        curl_close($curl);
        
        // Handle cURL errors
        if ($curlErrno !== 0) {
            if (!empty($curlError)) {
                $error = new Exception("No response received - Failed to fetch public key for kid: {$kid}");
                $error->code = $curlErrno;
                throw $error;
            } else {
                throw new Exception("Request setup error: Failed to fetch public key for kid: {$kid}");
            }
        }
        
        // Handle HTTP errors
        if ($httpCode < 200 || $httpCode >= 300) {
            $error = new Exception("HTTP {$httpCode} - Failed to fetch public key for kid: {$kid}");
            $error->status = $httpCode;
            $error->response = $response;
            throw $error;
        }
        
        // Validate response
        if (empty($response)) {
            throw new Exception('Empty response received from public key endpoint');
        }
        
        // Parse and process the JWK response
        try {
            // Ensure we have a JSON string
            $jwkJsonString = $response;
            
            // Use JWTUtility to parse and validate the JWK
            $publicKey = JWTUtility::getRSAPublicKeyFromJwk($jwkJsonString);
            
            if (empty($publicKey)) {
                throw new Exception('Invalid public key received from JWK');
            }
            
            // Success - return the public key
            return $publicKey;
            
        } catch (Exception $parseError) {
            $error = new Exception("Failed to parse JWK response: {$parseError->getMessage()}");
            $error->originalError = $parseError;
            throw $error;
        }
    }
    
}
