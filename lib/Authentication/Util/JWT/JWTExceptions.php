<?php
/**
 * JWT Exception Classes
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource\Authentication\Util\JWT
 * @author   CyberSource
 * @link     https://developer.cybersource.com/
 */

namespace CyberSource\Authentication\Util\JWT;

use Exception;

/**
 * Base JWT Exception Class
 *
 * Provides enhanced exception handling for JWT-related operations with support
 * for error chaining and detailed stack trace information.
 *
 * @category Class
 * @package  CyberSource\Authentication\Util\JWT
 * @author   CyberSource
 */
abstract class JWTException extends Exception
{
    /**
     * The underlying cause of this exception
     *
     * @var Exception|null
     */
    protected $cause;

    /**
     * Constructor
     *
     * @param string         $message  Error message describing the exception
     * @param Exception|null $cause    Optional underlying cause of the error
     * @param int           $code     Optional error code (default: 0)
     */
    public function __construct($message = "", ?Exception $cause = null, $code = 0)
    {
        // Use the cause as the previous exception for PHP's built-in chaining
        parent::__construct($message, $code, $cause);
        $this->cause = $cause;
    }

    /**
     * Get the underlying cause of this exception
     *
     * @return Exception|null The cause exception, or null if no cause was set
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Check if this exception has an underlying cause
     *
     * @return bool True if a cause exception exists, false otherwise
     */
    public function hasCause()
    {
        return $this->cause !== null;
    }

    /**
     * Get enhanced string representation of the exception with cause chain
     *
     * @return string Formatted exception string with cause information
     */
    public function __toString()
    {
        $result = parent::__toString();
        
        if ($this->hasCause()) {
            $result .= "\nCaused by: " . $this->cause->__toString();
        }
        
        return $result;
    }

    /**
     * Get the full exception chain as an array
     *
     * @return Exception[] Array of exceptions in the chain, starting with this exception
     */
    public function getExceptionChain()
    {
        $chain = [$this];
        $current = $this->getPrevious();
        
        while ($current !== null) {
            $chain[] = $current;
            $current = $current->getPrevious();
        }
        
        return $chain;
    }

    /**
     * Get a detailed error message including the full exception chain
     *
     * @return string Detailed error message with all causes
     */
    public function getDetailedMessage()
    {
        $messages = [];
        $chain = $this->getExceptionChain();
        
        foreach ($chain as $index => $exception) {
            $prefix = $index === 0 ? '' : 'Caused by: ';
            $messages[] = $prefix . get_class($exception) . ': ' . $exception->getMessage();
        }
        
        return implode("\n", $messages);
    }
}

/**
 * Invalid JWK Exception
 *
 * Thrown when a JSON Web Key (JWK) is invalid or malformed.
 * This can occur during key parsing, validation, or when required
 * JWK parameters are missing or incorrect.
 *
 * @category Class
 * @package  CyberSource\Authentication\Util\JWT
 * @author   CyberSource
 */
class InvalidJwkException extends JWTException
{
    /**
     * Constructor
     *
     * @param string         $message Error message describing the invalid JWK
     * @param Exception|null $cause   Optional underlying cause of the error
     * @param int           $code    Optional error code (default: 0)
     */
    public function __construct($message = "Invalid JSON Web Key (JWK)", ?Exception $cause = null, $code = 0)
    {
        parent::__construct($message, $cause, $code);
    }
}

/**
 * Invalid JWT Exception
 *
 * Thrown when a JWT token is invalid, malformed, or cannot be processed.
 * This includes issues with token structure, encoding, claims, or format.
 *
 * @category Class
 * @package  CyberSource\Authentication\Util\JWT
 * @author   CyberSource
 */
class InvalidJwtException extends JWTException
{
    /**
     * Constructor
     *
     * @param string         $message Error message describing the invalid JWT token
     * @param Exception|null $cause   Optional underlying cause of the error
     * @param int           $code    Optional error code (default: 0)
     */
    public function __construct($message = "Invalid JWT token", ?Exception $cause = null, $code = 0)
    {
        parent::__construct($message, $cause, $code);
    }
}

/**
 * JWT Signature Validation Exception
 *
 * Thrown when JWT signature validation fails. This occurs when the token's
 * signature cannot be verified against the expected signing key or algorithm,
 * indicating potential token tampering or key mismatch.
 *
 * @category Class
 * @package  CyberSource\Authentication\Util\JWT
 * @author   CyberSource
 */
class JwtSignatureValidationException extends JWTException
{
    /**
     * Constructor
     *
     * @param string         $message Error message describing the signature validation failure
     * @param Exception|null $cause   Optional underlying cause of the error
     * @param int           $code    Optional error code (default: 0)
     */
    public function __construct($message = "JWT signature validation failed", ?Exception $cause = null, $code = 0)
    {
        parent::__construct($message, $cause, $code);
    }
}
