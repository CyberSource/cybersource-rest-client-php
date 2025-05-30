<?php
/**
 * Notificationsubscriptionsv2webhooksSecurityPolicy1ConfigAdditionalConfig
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
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

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Notificationsubscriptionsv2webhooksSecurityPolicy1ConfigAdditionalConfig Class Doc Comment
 *
 * @category    Class
 * @description Additional, free form configuration data.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Notificationsubscriptionsv2webhooksSecurityPolicy1ConfigAdditionalConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'notificationsubscriptionsv2webhooks_securityPolicy_1_config_additionalConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aud' => 'string',
        'clientId' => 'string',
        'keyId' => 'string',
        'scope' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aud' => null,
        'clientId' => null,
        'keyId' => null,
        'scope' => null
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
        'aud' => 'aud',
        'clientId' => 'client_id',
        'keyId' => 'keyId',
        'scope' => 'scope'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'aud' => 'setAud',
        'clientId' => 'setClientId',
        'keyId' => 'setKeyId',
        'scope' => 'setScope'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'aud' => 'getAud',
        'clientId' => 'getClientId',
        'keyId' => 'getKeyId',
        'scope' => 'getScope'
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
        $this->container['aud'] = isset($data['aud']) ? $data['aud'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
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
     * Gets aud
     * @return string
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     * @param string $aud
     * @return $this
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

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
     * @param string $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets keyId
     * @return string
     */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
     * Sets keyId
     * @param string $keyId
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;

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
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


