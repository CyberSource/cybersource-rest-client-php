<?php
/**
 * Tmsv1paymentinstrumentsInstrumentIdentifier
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
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
 * Tmsv1paymentinstrumentsInstrumentIdentifier Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tmsv1paymentinstrumentsInstrumentIdentifier implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsv1paymentinstruments_instrumentIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\Tmsv1instrumentidentifiersLinks',
        'object' => 'string',
        'state' => 'string',
        'id' => 'string',
        'card' => '\CyberSource\Model\Tmsv1instrumentidentifiersCard',
        'bankAccount' => '\CyberSource\Model\Tmsv1instrumentidentifiersBankAccount',
        'processingInformation' => '\CyberSource\Model\Tmsv1instrumentidentifiersProcessingInformation',
        'metadata' => '\CyberSource\Model\Tmsv1instrumentidentifiersMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'object' => null,
        'state' => null,
        'id' => null,
        'card' => null,
        'bankAccount' => null,
        'processingInformation' => null,
        'metadata' => null
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
        'links' => '_links',
        'object' => 'object',
        'state' => 'state',
        'id' => 'id',
        'card' => 'card',
        'bankAccount' => 'bankAccount',
        'processingInformation' => 'processingInformation',
        'metadata' => 'metadata'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'object' => 'setObject',
        'state' => 'setState',
        'id' => 'setId',
        'card' => 'setCard',
        'bankAccount' => 'setBankAccount',
        'processingInformation' => 'setProcessingInformation',
        'metadata' => 'setMetadata'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'object' => 'getObject',
        'state' => 'getState',
        'id' => 'getId',
        'card' => 'getCard',
        'bankAccount' => 'getBankAccount',
        'processingInformation' => 'getProcessingInformation',
        'metadata' => 'getMetadata'
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

    const OBJECT_INSTRUMENT_IDENTIFIER = 'instrumentIdentifier';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_CLOSED = 'CLOSED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_INSTRUMENT_IDENTIFIER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_CLOSED,
        ];
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getObjectAllowableValues();
        if (!in_array($this->container['object'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'object', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getObjectAllowableValues();
        if (!in_array($this->container['object'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets links
     * @return \CyberSource\Model\Tmsv1instrumentidentifiersLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\Tmsv1instrumentidentifiersLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object Describes type of token. For example: customer, paymentInstrument or instrumentIdentifier.
     * @return $this
     */
    public function setObject($object)
    {
        $allowed_values = $this->getObjectAllowableValues();
        if (!is_null($object) && !in_array($object, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'object', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Current state of the token.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The id of the existing instrument identifier to be linked to the newly created payment instrument.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\Tmsv1instrumentidentifiersCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\Tmsv1instrumentidentifiersCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets bankAccount
     * @return \CyberSource\Model\Tmsv1instrumentidentifiersBankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     * @param \CyberSource\Model\Tmsv1instrumentidentifiersBankAccount $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Tmsv1instrumentidentifiersProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Tmsv1instrumentidentifiersProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets metadata
     * @return \CyberSource\Model\Tmsv1instrumentidentifiersMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \CyberSource\Model\Tmsv1instrumentidentifiersMetadata $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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

