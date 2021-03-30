<?php
/**
 * AccessTokenResponse
 *
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


namespace CyberSource\Model;

use \ArrayAccess;

/**
 * AccessTokenResponse Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 */
class AccessTokenResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'accessTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'refreshToken' => 'string',
        'accessToken' => 'string',
        'tokenType' => 'string',
        'scope' => 'string',
        'clientStatus' => 'string',
        'expiresIn' => 'int',
        'refreshTokenExpiresIn' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'refreshToken' => null,
        'accessToken' => null,
        'tokenType' => null,
        'scope' => null,
        'clientStatus' => null,
        'expiresIn' => null,
        'refreshTokenExpiresIn' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'refreshToken' => 'refresh_token',
        'accessToken' => 'access_token',
        'tokenType' => 'token_type',
        'scope' => 'scope',
        'clientStatus' => 'client_status',
        'expiresIn' => 'expires_in',
        'refreshTokenExpiresIn' => 'refresh_token_expires_in'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'refreshToken' => 'setRefreshToken',
        'accessToken' => 'setAccessToken',
        'tokenType' => 'setTokenType',
        'scope' => 'setScope',
        'clientStatus' => 'setClientStatus',
        'expiresIn' => 'setExpiresIn',
        'refreshTokenExpiresIn' => 'setRefreshTokenExpiresIn'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'refreshToken' => 'getRefreshToken',
        'accessToken' => 'getAccessToken',
        'tokenType' => 'getTokenType',
        'scope' => 'getScope',
        'clientStatus' => 'getClientStatus',
        'expiresIn' => 'getExpiresIn',
        'refreshTokenExpiresIn' => 'getRefreshTokenExpiresIn'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['refreshToken'] = isset($data['refreshToken']) ? $data['refreshToken'] : null;
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['tokenType'] = isset($data['tokenType']) ? $data['tokenType'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['clientStatus'] = isset($data['clientStatus']) ? $data['clientStatus'] : null;
        $this->container['expiresIn'] = isset($data['expiresIn']) ? $data['expiresIn'] : null;
        $this->container['refreshTokenExpiresIn'] = isset($data['refreshTokenExpiresIn']) ? $data['refreshTokenExpiresIn'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets refreshToken
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;

        return $this;
    }

    /**
     * Gets accessToken
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets tokenType
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
     * Sets tokenType
     * @return $this
     */
    public function setTokenType($tokenType)
    {
        $this->container['tokenType'] = $tokenType;

        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets clientStatus
     * @return string
     */
    public function getClientStatus()
    {
        return $this->container['clientStatus'];
    }

    /**
     * Sets clientStatus
     * @return $this
     */
    public function setClientStatus($clientStatus)
    {
        $this->container['clientStatus'] = $clientStatus;

        return $this;
    }

    /**
     * Gets expiresIn
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     * @return $this
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;

        return $this;
    }

    /**
     * Gets refreshTokenExpiresIn
     * @return int
     */
    public function getRefreshTokenExpiresIn()
    {
        return $this->container['refreshTokenExpiresIn'];
    }

    /**
     * Sets refreshTokenExpiresIn
     * @return $this
     */
    public function setRefreshTokenExpiresIn($refreshTokenExpiresIn)
    {
        $this->container['refreshTokenExpiresIn'] = $refreshTokenExpiresIn;

        return $this;
    }

    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


