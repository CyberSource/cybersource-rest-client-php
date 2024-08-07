<?php
/**
 * Ptsv1pushfundstransferProcessingInformation
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
 * Ptsv1pushfundstransferProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'businessApplicationId' => 'string',
        'payoutsOptions' => '\CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions',
        'enablerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'businessApplicationId' => null,
        'payoutsOptions' => null,
        'enablerId' => null
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
        'businessApplicationId' => 'businessApplicationId',
        'payoutsOptions' => 'payoutsOptions',
        'enablerId' => 'enablerId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'businessApplicationId' => 'setBusinessApplicationId',
        'payoutsOptions' => 'setPayoutsOptions',
        'enablerId' => 'setEnablerId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'businessApplicationId' => 'getBusinessApplicationId',
        'payoutsOptions' => 'getPayoutsOptions',
        'enablerId' => 'getEnablerId'
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
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['payoutsOptions'] = isset($data['payoutsOptions']) ? $data['payoutsOptions'] : null;
        $this->container['enablerId'] = isset($data['enablerId']) ? $data['enablerId'] : null;
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
     * Gets businessApplicationId
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['businessApplicationId'];
    }

    /**
     * Sets businessApplicationId
     * @param string $businessApplicationId Payouts transaction type.  Business Application ID: - `PP`: Person to person. - `FD`: Funds disbursement (general)
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {
        $this->container['businessApplicationId'] = $businessApplicationId;

        return $this;
    }

    /**
     * Gets payoutsOptions
     * @return \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions
     */
    public function getPayoutsOptions()
    {
        return $this->container['payoutsOptions'];
    }

    /**
     * Sets payoutsOptions
     * @param \CyberSource\Model\Ptsv1pushfundstransferProcessingInformationPayoutsOptions $payoutsOptions
     * @return $this
     */
    public function setPayoutsOptions($payoutsOptions)
    {
        $this->container['payoutsOptions'] = $payoutsOptions;

        return $this;
    }

    /**
     * Gets enablerId
     * @return string
     */
    public function getEnablerId()
    {
        return $this->container['enablerId'];
    }

    /**
     * Sets enablerId
     * @param string $enablerId Enablers are payment processing entities that are not acquiring members and are often the primary relationship owner with merchants and originators. Enablers own technical solutions through which the merchant or originator will access acceptance. The Enabler ID is a five-character hexadecimal identifier that will be used by Visa to identify enablers. Enabler ID assignment will be determined by Visa. Visa will communicate Enablers assignments to enablers.
     * @return $this
     */
    public function setEnablerId($enablerId)
    {
        $this->container['enablerId'] = $enablerId;

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


