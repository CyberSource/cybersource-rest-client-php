<?php
/**
 * Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact
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
 * Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'boardingv1registrations_organizationInformation_businessInformation_businessContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'phoneNumber' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'firstName' => null,
        'middleName' => null,
        'lastName' => null,
        'phoneNumber' => null,
        'email' => null
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
        'firstName' => 'firstName',
        'middleName' => 'middleName',
        'lastName' => 'lastName',
        'phoneNumber' => 'phoneNumber',
        'email' => 'email'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'middleName' => 'setMiddleName',
        'lastName' => 'setLastName',
        'phoneNumber' => 'setPhoneNumber',
        'email' => 'setEmail'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'middleName' => 'getMiddleName',
        'lastName' => 'getLastName',
        'phoneNumber' => 'getPhoneNumber',
        'email' => 'getEmail'
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
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['middleName'] = isset($data['middleName']) ? $data['middleName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['firstName'] === null) {
            $invalid_properties[] = "'firstName' can't be null";
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['firstName'])) {
            $invalid_properties[] = "invalid value for 'firstName', must be conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.";
        }

        if (!is_null($this->container['middleName']) && !preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['middleName'])) {
            $invalid_properties[] = "invalid value for 'middleName', must be conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.";
        }

        if ($this->container['lastName'] === null) {
            $invalid_properties[] = "'lastName' can't be null";
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['lastName'])) {
            $invalid_properties[] = "invalid value for 'lastName', must be conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.";
        }

        if ($this->container['phoneNumber'] === null) {
            $invalid_properties[] = "'phoneNumber' can't be null";
        }
        if (!preg_match("/^[0-9a-zA-Z\\\\+\\\\-]+$/", $this->container['phoneNumber'])) {
            $invalid_properties[] = "invalid value for 'phoneNumber', must be conform to the pattern /^[0-9a-zA-Z\\\\+\\\\-]+$/.";
        }

        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if (!preg_match("/^([a-zA-Z0-9_\\-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([a-zA-Z0-9\\-]+\\.)+))([a-zA-Z]{2,50}|[0-9]{1,3})(\\]?)$/", $this->container['email'])) {
            $invalid_properties[] = "invalid value for 'email', must be conform to the pattern /^([a-zA-Z0-9_\\-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([a-zA-Z0-9\\-]+\\.)+))([a-zA-Z]{2,50}|[0-9]{1,3})(\\]?)$/.";
        }

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

        if ($this->container['firstName'] === null) {
            return false;
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['firstName'])) {
            return false;
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['middleName'])) {
            return false;
        }
        if ($this->container['lastName'] === null) {
            return false;
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['lastName'])) {
            return false;
        }
        if ($this->container['phoneNumber'] === null) {
            return false;
        }
        if (!preg_match("/^[0-9a-zA-Z\\\\+\\\\-]+$/", $this->container['phoneNumber'])) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if (!preg_match("/^([a-zA-Z0-9_\\-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([a-zA-Z0-9\\-]+\\.)+))([a-zA-Z]{2,50}|[0-9]{1,3})(\\]?)$/", $this->container['email'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if ((!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $firstName))) {
            throw new \InvalidArgumentException("invalid value for $firstName when calling Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact., must conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.");
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets middleName
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        if (!is_null($middleName) && (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $middleName))) {
            throw new \InvalidArgumentException("invalid value for $middleName when calling Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact., must conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.");
        }
        $this->container['middleName'] = $middleName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        if ((!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $lastName))) {
            throw new \InvalidArgumentException("invalid value for $lastName when calling Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact., must conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.");
        }
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if ((!preg_match("/^[0-9a-zA-Z\\\\+\\\\-]+$/", $phoneNumber))) {
            throw new \InvalidArgumentException("invalid value for $phoneNumber when calling Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact., must conform to the pattern /^[0-9a-zA-Z\\\\+\\\\-]+$/.");
        }
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        if ((!preg_match("/^([a-zA-Z0-9_\\-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([a-zA-Z0-9\\-]+\\.)+))([a-zA-Z]{2,50}|[0-9]{1,3})(\\]?)$/", $email))) {
            throw new \InvalidArgumentException("invalid value for $email when calling Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact., must conform to the pattern /^([a-zA-Z0-9_\\-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([a-zA-Z0-9\\-]+\\.)+))([a-zA-Z]{2,50}|[0-9]{1,3})(\\]?)$/.");
        }
        $this->container['email'] = $email;

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

