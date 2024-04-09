<?php
/**
 * Ptsv2paymentreferencesPaymentInformation
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
 * Ptsv2paymentreferencesPaymentInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentreferencesPaymentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentreferences_paymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card' => '\CyberSource\Model\Ptsv2paymentreferencesPaymentInformationCard',
        'bank' => '\CyberSource\Model\Ptsv2paymentreferencesPaymentInformationBank',
        'eWallet' => '\CyberSource\Model\Ptsv2paymentreferencesPaymentInformationEWallet',
        'options' => '\CyberSource\Model\Ptsv2paymentreferencesPaymentInformationOptions',
        'paymentType' => '\CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card' => null,
        'bank' => null,
        'eWallet' => null,
        'options' => null,
        'paymentType' => null
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
        'card' => 'card',
        'bank' => 'bank',
        'eWallet' => 'eWallet',
        'options' => 'options',
        'paymentType' => 'paymentType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'card' => 'setCard',
        'bank' => 'setBank',
        'eWallet' => 'setEWallet',
        'options' => 'setOptions',
        'paymentType' => 'setPaymentType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'card' => 'getCard',
        'bank' => 'getBank',
        'eWallet' => 'getEWallet',
        'options' => 'getOptions',
        'paymentType' => 'getPaymentType'
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
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['eWallet'] = isset($data['eWallet']) ? $data['eWallet'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
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
     * Gets card
     * @return \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets bank
     * @return \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationBank
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     * @param \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationBank $bank
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets eWallet
     * @return \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationEWallet
     */
    public function getEWallet()
    {
        return $this->container['eWallet'];
    }

    /**
     * Sets eWallet
     * @param \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationEWallet $eWallet
     * @return $this
     */
    public function setEWallet($eWallet)
    {
        $this->container['eWallet'] = $eWallet;

        return $this;
    }

    /**
     * Gets options
     * @return \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationOptions
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \CyberSource\Model\Ptsv2paymentreferencesPaymentInformationOptions $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets paymentType
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentType
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentType $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->container['paymentType'] = $paymentType;

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

