<?php
/**
 * JWT Utility Class
 * PHP version 8.0+
 *
 * @category Class
 * @package  CyberSource\Authentication\Util\JWT
 * @author   CyberSource
 * @link     https://developer.cybersource.com/
 */

namespace CyberSource\Authentication\Util\JWT;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\JWK;

require_once __DIR__ . '/JWTExceptions.php';

/**
 * JWT Utility Class
 *
 * Provides JWT parsing, verification, and JWK handling functionality.
 *
 * @category Class
 * @package  CyberSource\Authentication\Util\JWT
 * @author   CyberSource
 */
class JWTUtility
{
    /**
     * Supported JWT algorithms
     */
    private const SUPPORTED_ALGORITHMS = ['RS256', 'RS384', 'RS512'];

    /**
     * Maximum depth for JSON decoding
     */
    private const JSON_DECODE_DEPTH = 512;

    /**
     * Validates and parses a JWK public key
     *
     * @param string|array $publicKey The RSA public key (JWK array or JSON string)
     * 
     * @return array The validated JWK array
     * @throws InvalidJwkException If the public key is invalid
     * @throws \JsonException If JSON decoding fails
     */
    private static function validateAndParseJwk(string|array $publicKey): array
    {
        if (is_string($publicKey)) {
            try {
                $jwkKey = json_decode($publicKey, true, self::JSON_DECODE_DEPTH, JSON_THROW_ON_ERROR);
            } catch (Exception $parseErr) {
                throw new InvalidJwkException('Invalid public key JSON format', $parseErr);
            }
        } elseif (is_array($publicKey) && isset($publicKey['kty'])) {
            $jwkKey = $publicKey;
        } else {
            throw new InvalidJwkException('Invalid public key format. Expected JWK object or JSON string.');
        }

        if (!isset($jwkKey['kty']) || $jwkKey['kty'] !== 'RSA') {
            throw new InvalidJwkException('Public key must be an RSA key (kty: RSA)');
        }

        if (!isset($jwkKey['n']) || !isset($jwkKey['e'])) {
            throw new InvalidJwkException('Invalid RSA JWK: missing required parameters (n, e)');
        }

        return $jwkKey;
    }

    /**
     * Parses a JWT token and extracts its header, payload, and signature components
     *
     * @param string $jwtToken The JWT token to parse
     * 
     * @return array Array containing header, payload, signature, and raw parts
     * @throws InvalidJwtException If the JWT token is invalid or malformed
     */
    public static function parse(string $jwtToken): array
    {
        if (empty($jwtToken)) {
            throw new InvalidJwtException('JWT token is null or undefined');
        }

        $tokenParts = explode('.', $jwtToken);
        if (count($tokenParts) !== 3) {
            throw new InvalidJwtException('Invalid JWT token format: expected 3 parts separated by dots');
        }

        // Validate that all parts are non-empty
        if (empty($tokenParts[0]) || empty($tokenParts[1]) || empty($tokenParts[2])) {
            throw new InvalidJwtException('Malformed JWT : JWT provided does not conform to the proper structure for JWT');
        }

        try {
            // Use firebase/php-jwt library functions for decoding
            $header = JWT::jsonDecode(JWT::urlsafeB64Decode($tokenParts[0]));
            $payload = JWT::jsonDecode(JWT::urlsafeB64Decode($tokenParts[1]));
            $signature = $tokenParts[2];

            return [
                'header' => (array)$header,
                'payload' => (array)$payload,
                'signature' => $signature,
                // Include raw base64url parts for signature verification
                'rawHeader' => $tokenParts[0],
                'rawPayload' => $tokenParts[1]
            ];
        } catch (Exception $err) {
            throw new InvalidJwtException('Malformed JWT cannot be parsed: ' . $err->getMessage(), $err);
        }
    }

    /**
     * Verifies a JWT token using an RSA public key
     *
     * @param string       $jwtToken  The JWT token to verify
     * @param string|array $publicKey The RSA public key (JWK array or JSON string)
     * 
     * @return void
     * @throws InvalidJwtException                If JWT parsing fails
     * @throws JwtSignatureValidationException    If signature verification fails
     * @throws InvalidJwkException                If the public key is invalid
     * @throws \JsonException                     If JSON decoding fails
     */
    public static function verifyJwt(string $jwtToken, string|array $publicKey): void
    {
        // Validate inputs
        if (empty($publicKey)) {
            throw new JwtSignatureValidationException('No public key found');
        }

        if (empty($jwtToken)) {
            throw new JwtSignatureValidationException('JWT token is null or undefined');
        }

        // Parse the JWT token to validate format and extract header
        $parsedToken = self::parse($jwtToken);
        $header = $parsedToken['header'];

        // Validate algorithm
        if (!isset($header['alg'])) {
            throw new JwtSignatureValidationException('JWT header missing algorithm (alg) field');
        }

        $algorithm = $header['alg'];
        if (!in_array($algorithm, self::SUPPORTED_ALGORITHMS)) {
            $supportedAlgs = implode(', ', self::SUPPORTED_ALGORITHMS);
            throw new JwtSignatureValidationException(
                sprintf('Unsupported JWT algorithm: %s. Supported algorithms: %s', $algorithm, $supportedAlgs)
            );
        }

        // Validate and parse the JWK public key
        $jwkKey = self::validateAndParseJwk($publicKey);

        // Ensure JWK has the algorithm set (required by firebase/php-jwt)
        if (!isset($jwkKey['alg'])) {
            $jwkKey['alg'] = $algorithm;
        }

        try {
            // Use firebase/php-jwt to verify the JWT
            // parseKeySet expects an array with a 'keys' element containing an array of JWKs
            $jwkSet = ['keys' => [$jwkKey]];
            $keys = JWK::parseKeySet($jwkSet);
            
            // Decode will throw exception if signature verification fails
            JWT::decode($jwtToken, $keys);
            
        } catch (\Firebase\JWT\SignatureInvalidException $e) {
            throw new JwtSignatureValidationException('JWT signature verification failed', $e);
        } catch (\Firebase\JWT\BeforeValidException $e) {
            throw new JwtSignatureValidationException('JWT not yet valid (nbf claim)', $e);
        } catch (\Firebase\JWT\ExpiredException $e) {
            throw new JwtSignatureValidationException('JWT has expired (exp claim)', $e);
        } catch (\UnexpectedValueException $e) {
            throw new JwtSignatureValidationException('JWT verification failed: ' . $e->getMessage(), $e);
        } catch (JwtSignatureValidationException | InvalidJwtException $e) {
            throw $e;
        } catch (Exception $e) {
            throw new JwtSignatureValidationException('JWT verification failed: ' . $e->getMessage(), $e);
        }
    }

    /**
     * Extracts an RSA public key from a JWK JSON string
     *
     * @param string $jwkJsonString The JWK JSON string containing the RSA key
     * 
     * @return array The RSA public key array
     * @throws InvalidJwkException If the JWK is invalid or not an RSA key
     * @throws \JsonException If JSON decoding fails
     */
    public static function getRSAPublicKeyFromJwk(string $jwkJsonString): array
    {
        return self::validateAndParseJwk($jwkJsonString);
    }
}
