<?php
/**
 * CreateAccessTokenRequest
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
 * CreateAccessTokenRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 */
class CreateAccessTokenRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createAccessTokenRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'refreshToken' => 'string',
        'grantType' => 'string',
        'code' => 'string',
        'clientId' => 'string',
        'clientSecret' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'refreshToken' => null,
        'grantType' => null,
        'code' => null,
        'clientId' => null,
        'clientSecret' => null
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
        'grantType' => 'grant_type',
        'code' => 'code',
        'clientId' => 'client_id',
        'clientSecret' => 'client_secret'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'refreshToken' => 'setRefreshToken',
        'grantType' => 'setGrantType',
        'code' => 'setCode',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'refreshToken' => 'getRefreshToken',
        'grantType' => 'getGrantType',
        'code' => 'getCode',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret'
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
        $this->container['grantType'] = isset($data['grantType']) ? $data['grantType'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
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
     * Gets grantType
     * @return string
     */
    public function getGrantType()
    {
        return $this->container['grantType'];
    }

    /**
     * Sets grantType
     * @return $this
     */
    public function setGrantType($grantType)
    {
        $this->container['grantType'] = $grantType;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets clientId
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets clientSecret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

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


