<?php
/**
 * Capture Context Parser Utility Class
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource\Utilities\CaptureContext
 * @author   CyberSource
 * @link     https://developer.cybersource.com/
 */

namespace CyberSource\Utilities\CaptureContext;

use CyberSource\Authentication\Util\JWT\JWTUtility;
use CyberSource\Authentication\Util\JWT\InvalidJwtException;
use CyberSource\Authentication\Util\JWT\JwtSignatureValidationException;
use CyberSource\Authentication\Util\JWT\InvalidJwkException;
use CyberSource\Authentication\Util\Cache;
use CyberSource\Authentication\Core\MerchantConfiguration;
use Exception;

/**
 * CaptureContextParser Class
 *
 * Provides utility functions for parsing and verifying Capture Context JWT responses.
 * This class handles JWT parsing, signature verification, and public key caching.
 *
 * @category Class
 * @package  CyberSource\Utilities\CaptureContext
 * @author   CyberSource
 */
class CaptureContextParser
{
    /**
     * Parses a capture context JWT response and optionally verifies its signature
     *
     * This function parses a JWT token from a capture context response and can optionally
     * verify the JWT signature using a public key fetched from the Flex API. It implements
     * caching to avoid repeated API calls for the same public key.
     *
     * @param string                $jwtValue      The JWT token to parse
     * @param MerchantConfiguration $merchantConfig The merchant configuration object
     * @param bool                  $verifyJwt     Whether to verify the JWT signature (default: true)
     *
     * @return array The parsed JWT payload
     * @throws InvalidJwtException                If the JWT is invalid or cannot be parsed
     * @throws JwtSignatureValidationException    If JWT signature verification fails
     * @throws Exception                          If merchant config or run environment is missing
     */
    public static function parseCaptureContextResponse($jwtValue, $merchantConfig, $verifyJwt = true)
    {
        // Validate JWT value
        if (empty($jwtValue)) {
            throw new InvalidJwtException('JWT value is null or undefined');
        }
        
        // Validate merchant config
        if (!$merchantConfig instanceof MerchantConfiguration) {
            throw new Exception('merchantConfig is required and must be an instance of MerchantConfiguration');
        }
        
        // Parse the JWT
        try {
            $parsedJwt = JWTUtility::parse($jwtValue);
        } catch (Exception $parseError) {
            throw $parseError;
        }
        
        // If verification is not required, return payload immediately
        if (!$verifyJwt) {
            return $parsedJwt['payload'];
        }
        
        // Extract header and kid
        $header = $parsedJwt['header'];
        $kid = isset($header['kid']) ? $header['kid'] : null;
        
        if (empty($kid)) {
            throw new JwtSignatureValidationException('JWT header missing key ID (kid) field');
        }
        
        // Get run environment
        $runEnvironment = $merchantConfig->getRunEnvironment();
        
        // Try to get public key from cache
        $publicKey = null;
        $isPublicKeyFromCache = false;
        
        try {
            $publicKey = Cache::getPublicKeyFromCache($runEnvironment, $kid);
            $isPublicKeyFromCache = true;
        } catch (Exception $cacheError) {
            $isPublicKeyFromCache = false;
        }
        
        // If not in cache, fetch from API and verify
        if (!$isPublicKeyFromCache) {
            return self::fetchPublicKeyAndVerify($jwtValue, $parsedJwt, $kid, $runEnvironment);
        }
        
        // Try to verify with cached key
        try {
            JWTUtility::verifyJwt($jwtValue, $publicKey);
            return $parsedJwt['payload'];
        } catch (Exception $verificationError) {
            // If verification fails with cached key, fetch fresh key and try again
            return self::fetchPublicKeyAndVerify($jwtValue, $parsedJwt, $kid, $runEnvironment);
        }
    }
    
    /**
     * Fetches public key from API and performs JWT verification
     *
     * This is a helper function that fetches the public key from the Flex API,
     * caches it, and then verifies the JWT signature.
     *
     * @param string $jwtValue      The JWT token
     * @param array  $parsedJwt     The parsed JWT object (header, payload, signature)
     * @param string $kid           The key ID
     * @param string $runEnvironment The runtime environment
     *
     * @return array The parsed JWT payload
     * @throws JwtSignatureValidationException If signature verification fails
     * @throws Exception                       If public key fetch fails
     */
    private static function fetchPublicKeyAndVerify($jwtValue, $parsedJwt, $kid, $runEnvironment)
    {
        // Fetch public key from API
        try {
            $publicKey = self::fetchPublicKeyFromApi($kid, $runEnvironment);
        } catch (Exception $fetchError) {
            throw $fetchError;
        }
        
        // Verify JWT with fetched public key
        try {
            JWTUtility::verifyJwt($jwtValue, $publicKey);
            return $parsedJwt['payload'];
        } catch (Exception $verificationError) {
            throw new JwtSignatureValidationException('JWT validation failed' . $verificationError->getMessage(), $verificationError);
        }
    }
    
    /**
     * Fetches public key from API and adds it to cache
     *
     * This function fetches the public key from the Flex API using the
     * PublicKeyApiController and caches it for future use.
     *
     * @param string $kid           The key ID
     * @param string $runEnvironment The runtime environment
     *
     * @return array The public key in JWK format
     * @throws Exception                If the API call fails or returns invalid data
     * @throws InvalidJwkException      If the JWK cannot be parsed correctly
     */
    private static function fetchPublicKeyFromApi($kid, $runEnvironment)
    {
        try {
            $publicKey = PublicKeyApiController::fetchPublicKey($kid, $runEnvironment);
        } catch (Exception $error) {
            // Handle different error types
            $errorMessage = $error->getMessage();
            
            if (strpos($errorMessage, 'runEnvironment parameter is required') !== false) {
                throw new Exception('Invalid Runtime Environment in Merchant Config');
            } elseif (strpos($errorMessage, 'No response received') !== false) {
                throw new Exception('Error while trying to retrieve public key from server');
            } elseif (strpos($errorMessage, 'Failed to parse JWK') !== false) {
                throw new InvalidJwkException('JWK received from server cannot be parsed correctly', $error);
            } else {
                throw new Exception('Error while trying to retrieve public key from server');
            }
        }
        
        // Add public key to cache
        try {
            Cache::addPublicKeyToCache($runEnvironment, $kid, $publicKey);
        } catch (Exception $cacheError) {
        }
        
        return $publicKey;
    }
}
