<?php
/**
 * ECheckConfigCommonProcessors
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
 * ECheckConfigCommonProcessors Class Doc Comment
 *
 * @category    Class
 * @description Payment Processing connection used to support eCheck, aka ACH, payment methods. Example - \&quot;bofaach\&quot;
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ECheckConfigCommonProcessors implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ECheckConfig_common_processors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyEntryDescription' => 'string',
        'companyId' => 'string',
        'batchGroup' => 'string',
        'enableAccuityForAvs' => 'bool',
        'accuityCheckType' => 'string',
        'setCompletedState' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyEntryDescription' => null,
        'companyId' => null,
        'batchGroup' => null,
        'enableAccuityForAvs' => null,
        'accuityCheckType' => null,
        'setCompletedState' => null
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
        'companyEntryDescription' => 'companyEntryDescription',
        'companyId' => 'companyId',
        'batchGroup' => 'batchGroup',
        'enableAccuityForAvs' => 'enableAccuityForAvs',
        'accuityCheckType' => 'accuityCheckType',
        'setCompletedState' => 'setCompletedState'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'companyEntryDescription' => 'setCompanyEntryDescription',
        'companyId' => 'setCompanyId',
        'batchGroup' => 'setBatchGroup',
        'enableAccuityForAvs' => 'setEnableAccuityForAvs',
        'accuityCheckType' => 'setAccuityCheckType',
        'setCompletedState' => 'setSetCompletedState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'companyEntryDescription' => 'getCompanyEntryDescription',
        'companyId' => 'getCompanyId',
        'batchGroup' => 'getBatchGroup',
        'enableAccuityForAvs' => 'getEnableAccuityForAvs',
        'accuityCheckType' => 'getAccuityCheckType',
        'setCompletedState' => 'getSetCompletedState'
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
        $this->container['companyEntryDescription'] = isset($data['companyEntryDescription']) ? $data['companyEntryDescription'] : null;
        $this->container['companyId'] = isset($data['companyId']) ? $data['companyId'] : null;
        $this->container['batchGroup'] = isset($data['batchGroup']) ? $data['batchGroup'] : null;
        $this->container['enableAccuityForAvs'] = isset($data['enableAccuityForAvs']) ? $data['enableAccuityForAvs'] : true;
        $this->container['accuityCheckType'] = isset($data['accuityCheckType']) ? $data['accuityCheckType'] : 'ALWAYS';
        $this->container['setCompletedState'] = isset($data['setCompletedState']) ? $data['setCompletedState'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['companyEntryDescription'] === null) {
            $invalid_properties[] = "'companyEntryDescription' can't be null";
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

        if ($this->container['companyEntryDescription'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets companyEntryDescription
     * @return string
     */
    public function getCompanyEntryDescription()
    {
        return $this->container['companyEntryDescription'];
    }

    /**
     * Sets companyEntryDescription
     * @param string $companyEntryDescription *EXISTING* Company (merchant) defined description of entry to receive.  For e.g. PAYROLL, GAS BILL, INS PREM. This field is alphanumeric
     * @return $this
     */
    public function setCompanyEntryDescription($companyEntryDescription)
    {
        $this->container['companyEntryDescription'] = $companyEntryDescription;

        return $this;
    }

    /**
     * Gets companyId
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['companyId'];
    }

    /**
     * Sets companyId
     * @param string $companyId *EXISTING* company ID assigned to merchant by Acquiring bank. This field is alphanumeric
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->container['companyId'] = $companyId;

        return $this;
    }

    /**
     * Gets batchGroup
     * @return string
     */
    public function getBatchGroup()
    {
        return $this->container['batchGroup'];
    }

    /**
     * Sets batchGroup
     * @param string $batchGroup *EXISTING* Capture requests are grouped into a batch bound for your payment processor. The batch time can be identified by reading the last 2-digits as military time. E.g., <processor>_16 = your processing cutoff is 4PM PST. Please note if you are in a different location you may then need to convert time zone as well.
     * @return $this
     */
    public function setBatchGroup($batchGroup)
    {
        $this->container['batchGroup'] = $batchGroup;

        return $this;
    }

    /**
     * Gets enableAccuityForAvs
     * @return bool
     */
    public function getEnableAccuityForAvs()
    {
        return $this->container['enableAccuityForAvs'];
    }

    /**
     * Sets enableAccuityForAvs
     * @param bool $enableAccuityForAvs *NEW* Accuity is the original validation service that checks the account/routing number for formatting issues. Used by WF and set to \"Yes\" unless told otherwise
     * @return $this
     */
    public function setEnableAccuityForAvs($enableAccuityForAvs)
    {
        $this->container['enableAccuityForAvs'] = $enableAccuityForAvs;

        return $this;
    }

    /**
     * Gets accuityCheckType
     * @return string
     */
    public function getAccuityCheckType()
    {
        return $this->container['accuityCheckType'];
    }

    /**
     * Sets accuityCheckType
     * @param string $accuityCheckType *NEW*  Possible values: - ALWAYS
     * @return $this
     */
    public function setAccuityCheckType($accuityCheckType)
    {
        $this->container['accuityCheckType'] = $accuityCheckType;

        return $this;
    }

    /**
     * Gets setCompletedState
     * @return bool
     */
    public function getSetCompletedState()
    {
        return $this->container['setCompletedState'];
    }

    /**
     * Sets setCompletedState
     * @param bool $setCompletedState *Moved* When set to Yes we will automatically update transactions to a completed status X-number of days after the transaction comes through; if no failure notification is received. When set to No means we will not update transaction status in this manner. For BAMS/Bank of America merchants, they should be set to No unless we are explicitly asked to set a merchant to YES.
     * @return $this
     */
    public function setSetCompletedState($setCompletedState)
    {
        $this->container['setCompletedState'] = $setCompletedState;

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


