<?php
/**
 * PtsV2PaymentsRefundPost201ResponseProcessorInformation
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
 * PtsV2PaymentsRefundPost201ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsRefundPost201ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsRefundPost201Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approvalCode' => 'string',
        'transactionId' => 'string',
        'forwardedAcquirerCode' => 'string',
        'merchantNumber' => 'string',
        'responseCode' => 'string',
        'achVerification' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAchVerification',
        'networkTransactionId' => 'string',
        'settlementDate' => 'string',
        'updateTimeUtc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approvalCode' => null,
        'transactionId' => null,
        'forwardedAcquirerCode' => null,
        'merchantNumber' => null,
        'responseCode' => null,
        'achVerification' => null,
        'networkTransactionId' => null,
        'settlementDate' => null,
        'updateTimeUtc' => null
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
        'approvalCode' => 'approvalCode',
        'transactionId' => 'transactionId',
        'forwardedAcquirerCode' => 'forwardedAcquirerCode',
        'merchantNumber' => 'merchantNumber',
        'responseCode' => 'responseCode',
        'achVerification' => 'achVerification',
        'networkTransactionId' => 'networkTransactionId',
        'settlementDate' => 'settlementDate',
        'updateTimeUtc' => 'updateTimeUtc'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'approvalCode' => 'setApprovalCode',
        'transactionId' => 'setTransactionId',
        'forwardedAcquirerCode' => 'setForwardedAcquirerCode',
        'merchantNumber' => 'setMerchantNumber',
        'responseCode' => 'setResponseCode',
        'achVerification' => 'setAchVerification',
        'networkTransactionId' => 'setNetworkTransactionId',
        'settlementDate' => 'setSettlementDate',
        'updateTimeUtc' => 'setUpdateTimeUtc'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'approvalCode' => 'getApprovalCode',
        'transactionId' => 'getTransactionId',
        'forwardedAcquirerCode' => 'getForwardedAcquirerCode',
        'merchantNumber' => 'getMerchantNumber',
        'responseCode' => 'getResponseCode',
        'achVerification' => 'getAchVerification',
        'networkTransactionId' => 'getNetworkTransactionId',
        'settlementDate' => 'getSettlementDate',
        'updateTimeUtc' => 'getUpdateTimeUtc'
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
        $this->container['approvalCode'] = isset($data['approvalCode']) ? $data['approvalCode'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['forwardedAcquirerCode'] = isset($data['forwardedAcquirerCode']) ? $data['forwardedAcquirerCode'] : null;
        $this->container['merchantNumber'] = isset($data['merchantNumber']) ? $data['merchantNumber'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['achVerification'] = isset($data['achVerification']) ? $data['achVerification'] : null;
        $this->container['networkTransactionId'] = isset($data['networkTransactionId']) ? $data['networkTransactionId'] : null;
        $this->container['settlementDate'] = isset($data['settlementDate']) ? $data['settlementDate'] : null;
        $this->container['updateTimeUtc'] = isset($data['updateTimeUtc']) ? $data['updateTimeUtc'] : null;
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
     * Gets approvalCode
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->container['approvalCode'];
    }

    /**
     * Sets approvalCode
     * @param string $approvalCode Authorization code. Returned only when the processor returns this value.  The length of this value depends on your processor.  Returned by authorization service.  #### PIN debit Authorization code that is returned by the processor.  Returned by PIN debit credit.  #### Elavon Encrypted Account Number Program The returned value is OFFLINE.  #### TSYS Acquiring Solutions The returned value for a successful zero amount authorization is 000000.
     * @return $this
     */
    public function setApprovalCode($approvalCode)
    {
        $this->container['approvalCode'] = $approvalCode;

        return $this;
    }

    /**
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Processor transaction ID.  This value identifies the transaction on a host system. This value is supported only for Moneris. It contains this information:   - Terminal used to process the transaction  - Shift during which the transaction took place  - Batch number  - Transaction number within the batch  You must store this value. If you give the customer a receipt, display this value on the receipt.  Example For the value 66012345001069003:   - Terminal ID = 66012345  - Shift number = 001  - Batch number = 069  - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets forwardedAcquirerCode
     * @return string
     */
    public function getForwardedAcquirerCode()
    {
        return $this->container['forwardedAcquirerCode'];
    }

    /**
     * Sets forwardedAcquirerCode
     * @param string $forwardedAcquirerCode Name of the Japanese acquirer that processed the transaction. Returned only for JCN Gateway. Please contact the CyberSource Japan Support Group for more information.
     * @return $this
     */
    public function setForwardedAcquirerCode($forwardedAcquirerCode)
    {
        $this->container['forwardedAcquirerCode'] = $forwardedAcquirerCode;

        return $this;
    }

    /**
     * Gets merchantNumber
     * @return string
     */
    public function getMerchantNumber()
    {
        return $this->container['merchantNumber'];
    }

    /**
     * Sets merchantNumber
     * @param string $merchantNumber Identifier that was assigned to you by your acquirer. This value must be printed on the receipt.  #### Returned by Authorizations and Credits.  This reply field is only supported by merchants who have installed client software on their POS terminals and use these processors: - American Express Direct - Credit Mutuel-CIC - FDC Nashville Global - OmniPay Direct - SIX
     * @return $this
     */
    public function setMerchantNumber($merchantNumber)
    {
        $this->container['merchantNumber'] = $merchantNumber;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode For most processors, this is the error message sent directly from the bank. Returned only when the processor returns this value.  **Important** Do not use this field to evaluate the result of the authorization.  #### PIN debit Response value that is returned by the processor or bank. **Important** Do not use this field to evaluate the results of the transaction request.  Returned by PIN debit credit, PIN debit purchase, and PIN debit reversal.  #### AIBMS If this value is `08`, you can accept the transaction if the customer provides you with identification.  #### Atos This value is the response code sent from Atos and it might also include the response code from the bank. Format: `aa,bb` with the two values separated by a comma and where: - `aa` is the two-digit error message from Atos. - `bb` is the optional two-digit error message from the bank.  #### Comercio Latino This value is the status code and the error or response code received from the processor separated by a colon. Format: [status code]:E[error code] or [status code]:R[response code] Example `2:R06`  #### JCN Gateway Processor-defined detail error code. The associated response category code is in the `processorInformation.responseCategoryCode` field. String (3)  #### paypalgateway Processor generated ID for the itemized detail.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets achVerification
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAchVerification
     */
    public function getAchVerification()
    {
        return $this->container['achVerification'];
    }

    /**
     * Sets achVerification
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAchVerification $achVerification
     * @return $this
     */
    public function setAchVerification($achVerification)
    {
        $this->container['achVerification'] = $achVerification;

        return $this;
    }

    /**
     * Gets networkTransactionId
     * @return string
     */
    public function getNetworkTransactionId()
    {
        return $this->container['networkTransactionId'];
    }

    /**
     * Sets networkTransactionId
     * @param string $networkTransactionId Same value as `processorInformation.transactionId`
     * @return $this
     */
    public function setNetworkTransactionId($networkTransactionId)
    {
        $this->container['networkTransactionId'] = $networkTransactionId;

        return $this;
    }

    /**
     * Gets settlementDate
     * @return string
     */
    public function getSettlementDate()
    {
        return $this->container['settlementDate'];
    }

    /**
     * Sets settlementDate
     * @param string $settlementDate Field contains a settlement date. The date is in mmdd format, where: mm = month and dd = day.
     * @return $this
     */
    public function setSettlementDate($settlementDate)
    {
        $this->container['settlementDate'] = $settlementDate;

        return $this;
    }

    /**
     * Gets updateTimeUtc
     * @return string
     */
    public function getUpdateTimeUtc()
    {
        return $this->container['updateTimeUtc'];
    }

    /**
     * Sets updateTimeUtc
     * @param string $updateTimeUtc The date and time when the transaction was last updated, in Internet date and time format.
     * @return $this
     */
    public function setUpdateTimeUtc($updateTimeUtc)
    {
        $this->container['updateTimeUtc'] = $updateTimeUtc;

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


