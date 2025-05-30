<?php
/**
 * Ptsv2paymentreferencesBuyerInformation
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
 * Ptsv2paymentreferencesBuyerInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentreferencesBuyerInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentreferences_buyerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dateOfBirth' => 'string',
        'gender' => 'string',
        'language' => 'string',
        'noteToSeller' => 'string',
        'personalIdentification' => '\CyberSource\Model\Ptsv2paymentsidcapturesBuyerInformationPersonalIdentification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dateOfBirth' => null,
        'gender' => null,
        'language' => null,
        'noteToSeller' => null,
        'personalIdentification' => null
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
        'dateOfBirth' => 'dateOfBirth',
        'gender' => 'gender',
        'language' => 'language',
        'noteToSeller' => 'noteToSeller',
        'personalIdentification' => 'personalIdentification'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'dateOfBirth' => 'setDateOfBirth',
        'gender' => 'setGender',
        'language' => 'setLanguage',
        'noteToSeller' => 'setNoteToSeller',
        'personalIdentification' => 'setPersonalIdentification'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'dateOfBirth' => 'getDateOfBirth',
        'gender' => 'getGender',
        'language' => 'getLanguage',
        'noteToSeller' => 'getNoteToSeller',
        'personalIdentification' => 'getPersonalIdentification'
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
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['noteToSeller'] = isset($data['noteToSeller']) ? $data['noteToSeller'] : null;
        $this->container['personalIdentification'] = isset($data['personalIdentification']) ? $data['personalIdentification'] : null;
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
     * Gets dateOfBirth
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     * @param string $dateOfBirth Recipient's date of birth. **Format**: `YYYYMMDD`.  This field is a `pass-through`, which means that CyberSource ensures that the value is eight numeric characters but otherwise does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, CyberSource does not forward it to the processor.
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender Customer's gender. Possible values are F (female), M (male),O (other).
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language language setting of the user.  Supports 2-character language codes (e.g., en, fr) and 5-character locale values (e.g., en-US, fr-CA).
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets noteToSeller
     * @return string
     */
    public function getNoteToSeller()
    {
        return $this->container['noteToSeller'];
    }

    /**
     * Sets noteToSeller
     * @param string $noteToSeller Note to the recipient of the funds in this transaction
     * @return $this
     */
    public function setNoteToSeller($noteToSeller)
    {
        $this->container['noteToSeller'] = $noteToSeller;

        return $this;
    }

    /**
     * Gets personalIdentification
     * @return \CyberSource\Model\Ptsv2paymentsidcapturesBuyerInformationPersonalIdentification[]
     */
    public function getPersonalIdentification()
    {
        return $this->container['personalIdentification'];
    }

    /**
     * Sets personalIdentification
     * @param \CyberSource\Model\Ptsv2paymentsidcapturesBuyerInformationPersonalIdentification[] $personalIdentification
     * @return $this
     */
    public function setPersonalIdentification($personalIdentification)
    {
        $this->container['personalIdentification'] = $personalIdentification;

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


