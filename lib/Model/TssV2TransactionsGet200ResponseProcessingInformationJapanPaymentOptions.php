<?php
/**
 * TssV2TransactionsGet200ResponseProcessingInformationJapanPaymentOptions
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
 * TssV2TransactionsGet200ResponseProcessingInformationJapanPaymentOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseProcessingInformationJapanPaymentOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_processingInformation_japanPaymentOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentMethod' => 'string',
        'terminalId' => 'string',
        'businessName' => 'string',
        'businessNameKatakana' => 'string',
        'businessNameEnglish' => 'string',
        'bonuses' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationJapanPaymentOptionsBonuses[]',
        'firstBillingMonth' => 'string',
        'numberOfInstallments' => 'string',
        'preApprovalType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentMethod' => null,
        'terminalId' => null,
        'businessName' => null,
        'businessNameKatakana' => null,
        'businessNameEnglish' => null,
        'bonuses' => null,
        'firstBillingMonth' => null,
        'numberOfInstallments' => null,
        'preApprovalType' => null
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
        'paymentMethod' => 'paymentMethod',
        'terminalId' => 'terminalId',
        'businessName' => 'businessName',
        'businessNameKatakana' => 'businessNameKatakana',
        'businessNameEnglish' => 'businessNameEnglish',
        'bonuses' => 'bonuses',
        'firstBillingMonth' => 'firstBillingMonth',
        'numberOfInstallments' => 'numberOfInstallments',
        'preApprovalType' => 'preApprovalType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentMethod' => 'setPaymentMethod',
        'terminalId' => 'setTerminalId',
        'businessName' => 'setBusinessName',
        'businessNameKatakana' => 'setBusinessNameKatakana',
        'businessNameEnglish' => 'setBusinessNameEnglish',
        'bonuses' => 'setBonuses',
        'firstBillingMonth' => 'setFirstBillingMonth',
        'numberOfInstallments' => 'setNumberOfInstallments',
        'preApprovalType' => 'setPreApprovalType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentMethod' => 'getPaymentMethod',
        'terminalId' => 'getTerminalId',
        'businessName' => 'getBusinessName',
        'businessNameKatakana' => 'getBusinessNameKatakana',
        'businessNameEnglish' => 'getBusinessNameEnglish',
        'bonuses' => 'getBonuses',
        'firstBillingMonth' => 'getFirstBillingMonth',
        'numberOfInstallments' => 'getNumberOfInstallments',
        'preApprovalType' => 'getPreApprovalType'
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
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['businessName'] = isset($data['businessName']) ? $data['businessName'] : null;
        $this->container['businessNameKatakana'] = isset($data['businessNameKatakana']) ? $data['businessNameKatakana'] : null;
        $this->container['businessNameEnglish'] = isset($data['businessNameEnglish']) ? $data['businessNameEnglish'] : null;
        $this->container['bonuses'] = isset($data['bonuses']) ? $data['bonuses'] : null;
        $this->container['firstBillingMonth'] = isset($data['firstBillingMonth']) ? $data['firstBillingMonth'] : null;
        $this->container['numberOfInstallments'] = isset($data['numberOfInstallments']) ? $data['numberOfInstallments'] : null;
        $this->container['preApprovalType'] = isset($data['preApprovalType']) ? $data['preApprovalType'] : null;
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
     * Gets paymentMethod
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     * @param string $paymentMethod This value is a 2-digit code indicating the payment method. Use Payment Method Code value that applies to the tranasction. - 10 (One-time payment) - 21, 22, 23, 24  (Bonus(one-time)payment) - 61 (Installment payment) - 31, 32, 33, 34  (Integrated (Bonus + Installment)payment) - 80 (Revolving payment)
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets terminalId
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     * @param string $terminalId Unique Japan Credit Card Association (JCCA) terminal identifier.  The difference between this field and the `pointOfSaleInformation.terminalID` field is that you can define `pointOfSaleInformation.terminalID`, but `processingInformation.japanPaymentOptions.terminalId` is defined by the JCCA and is used only in Japan.  This field is supported only on CyberSource through VisaNet and JCN Gateway.  Optional field.
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets businessName
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['businessName'];
    }

    /**
     * Sets businessName
     * @param string $businessName Business name in Japanese characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on CyberSource through VisaNet.
     * @return $this
     */
    public function setBusinessName($businessName)
    {
        $this->container['businessName'] = $businessName;

        return $this;
    }

    /**
     * Gets businessNameKatakana
     * @return string
     */
    public function getBusinessNameKatakana()
    {
        return $this->container['businessNameKatakana'];
    }

    /**
     * Sets businessNameKatakana
     * @param string $businessNameKatakana Business name in Katakana characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on CyberSource through VisaNet.
     * @return $this
     */
    public function setBusinessNameKatakana($businessNameKatakana)
    {
        $this->container['businessNameKatakana'] = $businessNameKatakana;

        return $this;
    }

    /**
     * Gets businessNameEnglish
     * @return string
     */
    public function getBusinessNameEnglish()
    {
        return $this->container['businessNameEnglish'];
    }

    /**
     * Sets businessNameEnglish
     * @param string $businessNameEnglish Business name in English characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on CyberSource through VisaNet.
     * @return $this
     */
    public function setBusinessNameEnglish($businessNameEnglish)
    {
        $this->container['businessNameEnglish'] = $businessNameEnglish;

        return $this;
    }

    /**
     * Gets bonuses
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationJapanPaymentOptionsBonuses[]
     */
    public function getBonuses()
    {
        return $this->container['bonuses'];
    }

    /**
     * Sets bonuses
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationJapanPaymentOptionsBonuses[] $bonuses An array of objects, each of which contains a bonus month and bonus amount.  Length of bonuses array is equal to the number of bonuses.  Max length = 6.  In case of bonus month and amount not specified, null objects to be returned in the array. Example: bonuses : [ {\"month\": \"1\",\"amount\": \"200\"}, {\"month\": \"3\",\"amount\": \"2500\"}, null]
     * @return $this
     */
    public function setBonuses($bonuses)
    {
        $this->container['bonuses'] = $bonuses;

        return $this;
    }

    /**
     * Gets firstBillingMonth
     * @return string
     */
    public function getFirstBillingMonth()
    {
        return $this->container['firstBillingMonth'];
    }

    /**
     * Sets firstBillingMonth
     * @param string $firstBillingMonth Billing month in MM format.
     * @return $this
     */
    public function setFirstBillingMonth($firstBillingMonth)
    {
        $this->container['firstBillingMonth'] = $firstBillingMonth;

        return $this;
    }

    /**
     * Gets numberOfInstallments
     * @return string
     */
    public function getNumberOfInstallments()
    {
        return $this->container['numberOfInstallments'];
    }

    /**
     * Sets numberOfInstallments
     * @param string $numberOfInstallments Number of Installments.
     * @return $this
     */
    public function setNumberOfInstallments($numberOfInstallments)
    {
        $this->container['numberOfInstallments'] = $numberOfInstallments;

        return $this;
    }

    /**
     * Gets preApprovalType
     * @return string
     */
    public function getPreApprovalType()
    {
        return $this->container['preApprovalType'];
    }

    /**
     * Sets preApprovalType
     * @param string $preApprovalType This will contain the details of the kind of transaction that has been processe. Used only for Japan. Possible Values: - 0 = Normal (authorization with amount and clearing/settlement; data capture or paper draft) - 1 = Negative card authorization (authorization-only with 0 or 1 amount) - 2 = Reservation of authorization (authorization-only with amount) - 3 = Cancel transaction - 4 = Merchant-initiated reversal/refund transactions - 5 = Cancel reservation of authorization - 6 = Post authorization
     * @return $this
     */
    public function setPreApprovalType($preApprovalType)
    {
        $this->container['preApprovalType'] = $preApprovalType;

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


