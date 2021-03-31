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
        'refresh_token' => 'string',
        'grant_type' => 'string',
        'code' => 'string',
        'client_id' => 'string',
        'client_secret' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'refresh_token' => null,
        'grant_type' => null,
        'code' => null,
        'client_id' => null,
        'client_secret' => null
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
        'refresh_token' => 'refresh_token',
        'grant_type' => 'grant_type',
        'code' => 'code',
        'client_id' => 'client_id',
        'client_secret' => 'client_secret'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'refresh_token' => 'setRefreshToken',
        'grant_type' => 'setGrantType',
        'code' => 'setCode',
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'refresh_token' => 'getRefreshToken',
        'grant_type' => 'getGrantType',
        'code' => 'getCode',
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret'
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
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
        $this->container['grant_type'] = isset($data['grant_type']) ? $data['grant_type'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
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
     * Gets refresh_token
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refresh_token'] = $refreshToken;

        return $this;
    }

    /**
     * Gets grant_type
     * @return string
     */
    public function getGrantType()
    {
        return $this->container['grant_type'];
    }

    /**
     * Sets grant_type
     * @return $this
     */
    public function setGrantType($grantType)
    {
        $this->container['grant_type'] = $grantType;

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
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['client_id'] = $clientId;

        return $this;
    }

    /**
     * Gets client_secret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['client_secret'] = $clientSecret;

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


