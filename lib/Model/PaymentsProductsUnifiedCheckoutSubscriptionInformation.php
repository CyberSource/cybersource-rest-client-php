<?php
/**
 * PaymentsProductsUnifiedCheckoutSubscriptionInformation
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
 * PaymentsProductsUnifiedCheckoutSubscriptionInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentsProductsUnifiedCheckoutSubscriptionInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentsProducts_unifiedCheckout_subscriptionInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'enablementStatus' => 'string',
        'selfServiceability' => 'string',
        'features' => '\CyberSource\Model\PaymentsProductsUnifiedCheckoutSubscriptionInformationFeatures'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'enablementStatus' => null,
        'selfServiceability' => null,
        'features' => null
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
        'enabled' => 'enabled',
        'enablementStatus' => 'enablementStatus',
        'selfServiceability' => 'selfServiceability',
        'features' => 'features'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'enablementStatus' => 'setEnablementStatus',
        'selfServiceability' => 'setSelfServiceability',
        'features' => 'setFeatures'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'enablementStatus' => 'getEnablementStatus',
        'selfServiceability' => 'getSelfServiceability',
        'features' => 'getFeatures'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['enablementStatus'] = isset($data['enablementStatus']) ? $data['enablementStatus'] : 'ENABLED_AND_USABLE';
        $this->container['selfServiceability'] = isset($data['selfServiceability']) ? $data['selfServiceability'] : 'NOT_SELF_SERVICEABLE';
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
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
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets enablementStatus
     * @return string
     */
    public function getEnablementStatus()
    {
        return $this->container['enablementStatus'];
    }

    /**
     * Sets enablementStatus
     * @param string $enablementStatus Possible values: - PENDING - ENABLED_AND_USABLE - ENABLED_NOT_USABLE - DISABLED
     * @return $this
     */
    public function setEnablementStatus($enablementStatus)
    {
        $this->container['enablementStatus'] = $enablementStatus;

        return $this;
    }

    /**
     * Gets selfServiceability
     * @return string
     */
    public function getSelfServiceability()
    {
        return $this->container['selfServiceability'];
    }

    /**
     * Sets selfServiceability
     * @param string $selfServiceability Indicates if the organization can enable this product using self service.  Possible values: - SELF_SERVICEABLE - NOT_SELF_SERVICEABLE - SELF_SERVICE_ONLY
     * @return $this
     */
    public function setSelfServiceability($selfServiceability)
    {
        $this->container['selfServiceability'] = $selfServiceability;

        return $this;
    }

    /**
     * Gets features
     * @return \CyberSource\Model\PaymentsProductsUnifiedCheckoutSubscriptionInformationFeatures
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     * @param \CyberSource\Model\PaymentsProductsUnifiedCheckoutSubscriptionInformationFeatures $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

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


