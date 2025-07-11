<?php
/**
 * InlineResponse20010ResponseRecord
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
 * InlineResponse20010ResponseRecord Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20010ResponseRecord implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_10_responseRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response' => 'string',
        'reason' => 'string',
        'token' => 'string',
        'instrumentIdentifierId' => 'string',
        'instrumentIdentifierCreated' => 'string',
        'cardNumber' => 'string',
        'cardExpiryMonth' => 'string',
        'cardExpiryYear' => 'string',
        'cardType' => 'string',
        'additionalUpdates' => '\CyberSource\Model\InlineResponse20010ResponseRecordAdditionalUpdates[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response' => null,
        'reason' => null,
        'token' => null,
        'instrumentIdentifierId' => null,
        'instrumentIdentifierCreated' => null,
        'cardNumber' => null,
        'cardExpiryMonth' => null,
        'cardExpiryYear' => null,
        'cardType' => null,
        'additionalUpdates' => null
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
        'response' => 'response',
        'reason' => 'reason',
        'token' => 'token',
        'instrumentIdentifierId' => 'instrumentIdentifierId',
        'instrumentIdentifierCreated' => 'instrumentIdentifierCreated',
        'cardNumber' => 'cardNumber',
        'cardExpiryMonth' => 'cardExpiryMonth',
        'cardExpiryYear' => 'cardExpiryYear',
        'cardType' => 'cardType',
        'additionalUpdates' => 'additionalUpdates'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'response' => 'setResponse',
        'reason' => 'setReason',
        'token' => 'setToken',
        'instrumentIdentifierId' => 'setInstrumentIdentifierId',
        'instrumentIdentifierCreated' => 'setInstrumentIdentifierCreated',
        'cardNumber' => 'setCardNumber',
        'cardExpiryMonth' => 'setCardExpiryMonth',
        'cardExpiryYear' => 'setCardExpiryYear',
        'cardType' => 'setCardType',
        'additionalUpdates' => 'setAdditionalUpdates'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'response' => 'getResponse',
        'reason' => 'getReason',
        'token' => 'getToken',
        'instrumentIdentifierId' => 'getInstrumentIdentifierId',
        'instrumentIdentifierCreated' => 'getInstrumentIdentifierCreated',
        'cardNumber' => 'getCardNumber',
        'cardExpiryMonth' => 'getCardExpiryMonth',
        'cardExpiryYear' => 'getCardExpiryYear',
        'cardType' => 'getCardType',
        'additionalUpdates' => 'getAdditionalUpdates'
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
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['instrumentIdentifierId'] = isset($data['instrumentIdentifierId']) ? $data['instrumentIdentifierId'] : null;
        $this->container['instrumentIdentifierCreated'] = isset($data['instrumentIdentifierCreated']) ? $data['instrumentIdentifierCreated'] : null;
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['cardExpiryMonth'] = isset($data['cardExpiryMonth']) ? $data['cardExpiryMonth'] : null;
        $this->container['cardExpiryYear'] = isset($data['cardExpiryYear']) ? $data['cardExpiryYear'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
        $this->container['additionalUpdates'] = isset($data['additionalUpdates']) ? $data['additionalUpdates'] : null;
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
     * Gets response
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     * @param string $response Valid Values:   * NAN   * NED   * ACL   * CCH   * CUR   * NUP   * UNA   * ERR   * DEC
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets instrumentIdentifierId
     * @return string
     */
    public function getInstrumentIdentifierId()
    {
        return $this->container['instrumentIdentifierId'];
    }

    /**
     * Sets instrumentIdentifierId
     * @param string $instrumentIdentifierId
     * @return $this
     */
    public function setInstrumentIdentifierId($instrumentIdentifierId)
    {
        $this->container['instrumentIdentifierId'] = $instrumentIdentifierId;

        return $this;
    }

    /**
     * Gets instrumentIdentifierCreated
     * @return string
     */
    public function getInstrumentIdentifierCreated()
    {
        return $this->container['instrumentIdentifierCreated'];
    }

    /**
     * Sets instrumentIdentifierCreated
     * @param string $instrumentIdentifierCreated Valid Values:   * true   * false
     * @return $this
     */
    public function setInstrumentIdentifierCreated($instrumentIdentifierCreated)
    {
        $this->container['instrumentIdentifierCreated'] = $instrumentIdentifierCreated;

        return $this;
    }

    /**
     * Gets cardNumber
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
     * Sets cardNumber
     * @param string $cardNumber
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;

        return $this;
    }

    /**
     * Gets cardExpiryMonth
     * @return string
     */
    public function getCardExpiryMonth()
    {
        return $this->container['cardExpiryMonth'];
    }

    /**
     * Sets cardExpiryMonth
     * @param string $cardExpiryMonth
     * @return $this
     */
    public function setCardExpiryMonth($cardExpiryMonth)
    {
        $this->container['cardExpiryMonth'] = $cardExpiryMonth;

        return $this;
    }

    /**
     * Gets cardExpiryYear
     * @return string
     */
    public function getCardExpiryYear()
    {
        return $this->container['cardExpiryYear'];
    }

    /**
     * Sets cardExpiryYear
     * @param string $cardExpiryYear
     * @return $this
     */
    public function setCardExpiryYear($cardExpiryYear)
    {
        $this->container['cardExpiryYear'] = $cardExpiryYear;

        return $this;
    }

    /**
     * Gets cardType
     * @return string
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     * @param string $cardType
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

        return $this;
    }

    /**
     * Gets additionalUpdates
     * @return \CyberSource\Model\InlineResponse20010ResponseRecordAdditionalUpdates[]
     */
    public function getAdditionalUpdates()
    {
        return $this->container['additionalUpdates'];
    }

    /**
     * Sets additionalUpdates
     * @param \CyberSource\Model\InlineResponse20010ResponseRecordAdditionalUpdates[] $additionalUpdates
     * @return $this
     */
    public function setAdditionalUpdates($additionalUpdates)
    {
        $this->container['additionalUpdates'] = $additionalUpdates;

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


