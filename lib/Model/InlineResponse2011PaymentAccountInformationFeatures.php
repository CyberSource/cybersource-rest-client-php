<?php
/**
 * InlineResponse2011PaymentAccountInformationFeatures
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
 * InlineResponse2011PaymentAccountInformationFeatures Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2011PaymentAccountInformationFeatures implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_1_paymentAccountInformation_features';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountFundingSource' => 'string',
        'accountFundingSourceSubType' => 'string',
        'cardProduct' => 'string',
        'messageType' => 'string',
        'acceptanceLevel' => 'string',
        'cardPlatform' => 'string',
        'comboCard' => 'string',
        'corporatePurchase' => 'bool',
        'healthCard' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountFundingSource' => null,
        'accountFundingSourceSubType' => null,
        'cardProduct' => null,
        'messageType' => null,
        'acceptanceLevel' => null,
        'cardPlatform' => null,
        'comboCard' => null,
        'corporatePurchase' => null,
        'healthCard' => null
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
        'accountFundingSource' => 'accountFundingSource',
        'accountFundingSourceSubType' => 'accountFundingSourceSubType',
        'cardProduct' => 'cardProduct',
        'messageType' => 'messageType',
        'acceptanceLevel' => 'acceptanceLevel',
        'cardPlatform' => 'cardPlatform',
        'comboCard' => 'comboCard',
        'corporatePurchase' => 'corporatePurchase',
        'healthCard' => 'healthCard'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accountFundingSource' => 'setAccountFundingSource',
        'accountFundingSourceSubType' => 'setAccountFundingSourceSubType',
        'cardProduct' => 'setCardProduct',
        'messageType' => 'setMessageType',
        'acceptanceLevel' => 'setAcceptanceLevel',
        'cardPlatform' => 'setCardPlatform',
        'comboCard' => 'setComboCard',
        'corporatePurchase' => 'setCorporatePurchase',
        'healthCard' => 'setHealthCard'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accountFundingSource' => 'getAccountFundingSource',
        'accountFundingSourceSubType' => 'getAccountFundingSourceSubType',
        'cardProduct' => 'getCardProduct',
        'messageType' => 'getMessageType',
        'acceptanceLevel' => 'getAcceptanceLevel',
        'cardPlatform' => 'getCardPlatform',
        'comboCard' => 'getComboCard',
        'corporatePurchase' => 'getCorporatePurchase',
        'healthCard' => 'getHealthCard'
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
        $this->container['accountFundingSource'] = isset($data['accountFundingSource']) ? $data['accountFundingSource'] : null;
        $this->container['accountFundingSourceSubType'] = isset($data['accountFundingSourceSubType']) ? $data['accountFundingSourceSubType'] : null;
        $this->container['cardProduct'] = isset($data['cardProduct']) ? $data['cardProduct'] : null;
        $this->container['messageType'] = isset($data['messageType']) ? $data['messageType'] : null;
        $this->container['acceptanceLevel'] = isset($data['acceptanceLevel']) ? $data['acceptanceLevel'] : null;
        $this->container['cardPlatform'] = isset($data['cardPlatform']) ? $data['cardPlatform'] : null;
        $this->container['comboCard'] = isset($data['comboCard']) ? $data['comboCard'] : null;
        $this->container['corporatePurchase'] = isset($data['corporatePurchase']) ? $data['corporatePurchase'] : null;
        $this->container['healthCard'] = isset($data['healthCard']) ? $data['healthCard'] : null;
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
     * Gets accountFundingSource
     * @return string
     */
    public function getAccountFundingSource()
    {
        return $this->container['accountFundingSource'];
    }

    /**
     * Sets accountFundingSource
     * @param string $accountFundingSource This field contains the account funding source. Possible values:   - `CREDIT`   - `DEBIT`   - `PREPAID`   - `DEFERRED DEBIT`   - `CHARGE`
     * @return $this
     */
    public function setAccountFundingSource($accountFundingSource)
    {
        $this->container['accountFundingSource'] = $accountFundingSource;

        return $this;
    }

    /**
     * Gets accountFundingSourceSubType
     * @return string
     */
    public function getAccountFundingSourceSubType()
    {
        return $this->container['accountFundingSourceSubType'];
    }

    /**
     * Sets accountFundingSourceSubType
     * @param string $accountFundingSourceSubType This field contains the type of prepaid card. Possible values:   - `Reloadable`   - `Non-reloadable`
     * @return $this
     */
    public function setAccountFundingSourceSubType($accountFundingSourceSubType)
    {
        $this->container['accountFundingSourceSubType'] = $accountFundingSourceSubType;

        return $this;
    }

    /**
     * Gets cardProduct
     * @return string
     */
    public function getCardProduct()
    {
        return $this->container['cardProduct'];
    }

    /**
     * Sets cardProduct
     * @param string $cardProduct This field contains the type of issuer product. Example values:   - Visa Classic   - Visa Signature   - Visa Infinite
     * @return $this
     */
    public function setCardProduct($cardProduct)
    {
        $this->container['cardProduct'] = $cardProduct;

        return $this;
    }

    /**
     * Gets messageType
     * @return string
     */
    public function getMessageType()
    {
        return $this->container['messageType'];
    }

    /**
     * Sets messageType
     * @param string $messageType This field contains the type of BIN based authentication. Possible values:   - `S`: Single Message   - `D`: Dual Message
     * @return $this
     */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;

        return $this;
    }

    /**
     * Gets acceptanceLevel
     * @return string
     */
    public function getAcceptanceLevel()
    {
        return $this->container['acceptanceLevel'];
    }

    /**
     * Sets acceptanceLevel
     * @param string $acceptanceLevel This field contains the acceptance level of the PAN. Possible values:   - `0` : Normal   - `1` : Monitor   - `2` : Refuse   - `3` : Not Allowed   - `4` : Private   - `5` : Test
     * @return $this
     */
    public function setAcceptanceLevel($acceptanceLevel)
    {
        $this->container['acceptanceLevel'] = $acceptanceLevel;

        return $this;
    }

    /**
     * Gets cardPlatform
     * @return string
     */
    public function getCardPlatform()
    {
        return $this->container['cardPlatform'];
    }

    /**
     * Sets cardPlatform
     * @param string $cardPlatform This field contains the type of card platform. Possible values:   - `BUSINESS`   - `CONSUMER`   - `COMMERCIAL`   - `GOVERNMENT`
     * @return $this
     */
    public function setCardPlatform($cardPlatform)
    {
        $this->container['cardPlatform'] = $cardPlatform;

        return $this;
    }

    /**
     * Gets comboCard
     * @return string
     */
    public function getComboCard()
    {
        return $this->container['comboCard'];
    }

    /**
     * Sets comboCard
     * @param string $comboCard This field indicates the type of combo card. Possible values:   - 0 (Not a combo card)   - 1 (Credit and Prepaid Combo card)   - 2 (Credit and Debit Combo card)
     * @return $this
     */
    public function setComboCard($comboCard)
    {
        $this->container['comboCard'] = $comboCard;

        return $this;
    }

    /**
     * Gets corporatePurchase
     * @return bool
     */
    public function getCorporatePurchase()
    {
        return $this->container['corporatePurchase'];
    }

    /**
     * Sets corporatePurchase
     * @param bool $corporatePurchase This field indicates whether the card can be used for corporate purchasing. This field is only applicable for American Express cards. Possible values:   - `true`   - `false`
     * @return $this
     */
    public function setCorporatePurchase($corporatePurchase)
    {
        $this->container['corporatePurchase'] = $corporatePurchase;

        return $this;
    }

    /**
     * Gets healthCard
     * @return bool
     */
    public function getHealthCard()
    {
        return $this->container['healthCard'];
    }

    /**
     * Sets healthCard
     * @param bool $healthCard This field indicates if the entered card is a healthcare BIN. Currently, this field is only supported for Visa BINs. Possible values:     - `true`     - `false`
     * @return $this
     */
    public function setHealthCard($healthCard)
    {
        $this->container['healthCard'] = $healthCard;

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

