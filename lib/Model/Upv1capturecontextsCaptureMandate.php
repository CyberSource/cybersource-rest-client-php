<?php
/**
 * Upv1capturecontextsCaptureMandate
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
 * Upv1capturecontextsCaptureMandate Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Upv1capturecontextsCaptureMandate implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'upv1capturecontexts_captureMandate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billingType' => 'string',
        'requestEmail' => 'bool',
        'requestPhone' => 'bool',
        'requestShipping' => 'bool',
        'shipToCountries' => 'string[]',
        'showAcceptedNetworkIcons' => 'bool',
        'showConfirmationStep' => 'bool',
        'requestSaveCard' => 'bool',
        'comboCard' => 'bool',
        'cPF' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billingType' => null,
        'requestEmail' => null,
        'requestPhone' => null,
        'requestShipping' => null,
        'shipToCountries' => null,
        'showAcceptedNetworkIcons' => null,
        'showConfirmationStep' => null,
        'requestSaveCard' => null,
        'comboCard' => null,
        'cPF' => null
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
        'billingType' => 'billingType',
        'requestEmail' => 'requestEmail',
        'requestPhone' => 'requestPhone',
        'requestShipping' => 'requestShipping',
        'shipToCountries' => 'shipToCountries',
        'showAcceptedNetworkIcons' => 'showAcceptedNetworkIcons',
        'showConfirmationStep' => 'showConfirmationStep',
        'requestSaveCard' => 'requestSaveCard',
        'comboCard' => 'comboCard',
        'cPF' => 'CPF'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'billingType' => 'setBillingType',
        'requestEmail' => 'setRequestEmail',
        'requestPhone' => 'setRequestPhone',
        'requestShipping' => 'setRequestShipping',
        'shipToCountries' => 'setShipToCountries',
        'showAcceptedNetworkIcons' => 'setShowAcceptedNetworkIcons',
        'showConfirmationStep' => 'setShowConfirmationStep',
        'requestSaveCard' => 'setRequestSaveCard',
        'comboCard' => 'setComboCard',
        'cPF' => 'setCPF'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'billingType' => 'getBillingType',
        'requestEmail' => 'getRequestEmail',
        'requestPhone' => 'getRequestPhone',
        'requestShipping' => 'getRequestShipping',
        'shipToCountries' => 'getShipToCountries',
        'showAcceptedNetworkIcons' => 'getShowAcceptedNetworkIcons',
        'showConfirmationStep' => 'getShowConfirmationStep',
        'requestSaveCard' => 'getRequestSaveCard',
        'comboCard' => 'getComboCard',
        'cPF' => 'getCPF'
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
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['requestEmail'] = isset($data['requestEmail']) ? $data['requestEmail'] : null;
        $this->container['requestPhone'] = isset($data['requestPhone']) ? $data['requestPhone'] : null;
        $this->container['requestShipping'] = isset($data['requestShipping']) ? $data['requestShipping'] : null;
        $this->container['shipToCountries'] = isset($data['shipToCountries']) ? $data['shipToCountries'] : null;
        $this->container['showAcceptedNetworkIcons'] = isset($data['showAcceptedNetworkIcons']) ? $data['showAcceptedNetworkIcons'] : null;
        $this->container['showConfirmationStep'] = isset($data['showConfirmationStep']) ? $data['showConfirmationStep'] : null;
        $this->container['requestSaveCard'] = isset($data['requestSaveCard']) ? $data['requestSaveCard'] : null;
        $this->container['comboCard'] = isset($data['comboCard']) ? $data['comboCard'] : null;
        $this->container['cPF'] = isset($data['cPF']) ? $data['cPF'] : null;
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
     * Gets billingType
     * @return string
     */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
     * Sets billingType
     * @param string $billingType Configure Unified Checkout to capture billing address information.  Possible values: - FULL: Capture complete billing address information. - PARTIAL: Capture first name, last name, country and postal/zip code only. - NONE: Capture only first name and last name.
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $this->container['billingType'] = $billingType;

        return $this;
    }

    /**
     * Gets requestEmail
     * @return bool
     */
    public function getRequestEmail()
    {
        return $this->container['requestEmail'];
    }

    /**
     * Sets requestEmail
     * @param bool $requestEmail Configure Unified Checkout to capture customer email address.  Possible values:  - True  - False
     * @return $this
     */
    public function setRequestEmail($requestEmail)
    {
        $this->container['requestEmail'] = $requestEmail;

        return $this;
    }

    /**
     * Gets requestPhone
     * @return bool
     */
    public function getRequestPhone()
    {
        return $this->container['requestPhone'];
    }

    /**
     * Sets requestPhone
     * @param bool $requestPhone Configure Unified Checkout to capture customer phone number.  Possible values: - True - False
     * @return $this
     */
    public function setRequestPhone($requestPhone)
    {
        $this->container['requestPhone'] = $requestPhone;

        return $this;
    }

    /**
     * Gets requestShipping
     * @return bool
     */
    public function getRequestShipping()
    {
        return $this->container['requestShipping'];
    }

    /**
     * Sets requestShipping
     * @param bool $requestShipping Configure Unified Checkout to capture customer shipping details.  Possible values: - True - False
     * @return $this
     */
    public function setRequestShipping($requestShipping)
    {
        $this->container['requestShipping'] = $requestShipping;

        return $this;
    }

    /**
     * Gets shipToCountries
     * @return string[]
     */
    public function getShipToCountries()
    {
        return $this->container['shipToCountries'];
    }

    /**
     * Sets shipToCountries
     * @param string[] $shipToCountries List of countries available to ship to.   Use the two-character ISO Standard Country Codes.
     * @return $this
     */
    public function setShipToCountries($shipToCountries)
    {
        $this->container['shipToCountries'] = $shipToCountries;

        return $this;
    }

    /**
     * Gets showAcceptedNetworkIcons
     * @return bool
     */
    public function getShowAcceptedNetworkIcons()
    {
        return $this->container['showAcceptedNetworkIcons'];
    }

    /**
     * Sets showAcceptedNetworkIcons
     * @param bool $showAcceptedNetworkIcons Configure Unified Checkout to display the list of accepted card networks beneath the payment button  Possible values: - True - False
     * @return $this
     */
    public function setShowAcceptedNetworkIcons($showAcceptedNetworkIcons)
    {
        $this->container['showAcceptedNetworkIcons'] = $showAcceptedNetworkIcons;

        return $this;
    }

    /**
     * Gets showConfirmationStep
     * @return bool
     */
    public function getShowConfirmationStep()
    {
        return $this->container['showConfirmationStep'];
    }

    /**
     * Sets showConfirmationStep
     * @param bool $showConfirmationStep Configure Unified Checkout to display the final confirmation screen when using Click to Pay.<br> Where 'BillingType'= NONE and 'requestShipping'= FALSE and the customer is using an existing Click to Pay card as their chosen payment method, a final confirmation screen can be removed allowing the customer to check out as soon as they have selected their payment method from within their Click to Pay card tray.  Possible values: - True - False
     * @return $this
     */
    public function setShowConfirmationStep($showConfirmationStep)
    {
        $this->container['showConfirmationStep'] = $showConfirmationStep;

        return $this;
    }

    /**
     * Gets requestSaveCard
     * @return bool
     */
    public function getRequestSaveCard()
    {
        return $this->container['requestSaveCard'];
    }

    /**
     * Sets requestSaveCard
     * @param bool $requestSaveCard Configure Unified Checkout to display the \"Save card for future use\" checkbox.<br>  Configurable check box that will show in a Manual card entry flow to allow a Cardholder to give consent to store their manually entered credential with the Merchant that they are paying.<br>  Applicable when manually entering the details and not enrolling in Click to Pay.  Possible values:  - True   - False<br><br>  **Use Cases:**  **Offer consumers option to save their card in Unified Checkout:**  - Include the captureMandate.requestSaveCard field in the capture context request and set it to true. - When set to true, this will show a checkbox with the message 'Save card for future use' in Unified Checkout. - When selected this provides a response in both the Transient Token and Get Credentials API response.<br><br>  **Do not offer consumers the option to save their card in Unified Checkout:**  - Include the captureMandate.requestSaveCard field in the capture context request and set it to false OR omit the field from the capture context request. - When set to false, the save card option is not shown to consumers when manually entering card details.
     * @return $this
     */
    public function setRequestSaveCard($requestSaveCard)
    {
        $this->container['requestSaveCard'] = $requestSaveCard;

        return $this;
    }

    /**
     * Gets comboCard
     * @return bool
     */
    public function getComboCard()
    {
        return $this->container['comboCard'];
    }

    /**
     * Sets comboCard
     * @param bool $comboCard Configure Unified Checkout to display combo card at checkout.<br>  A combo debit/credit card is a single card that functions both as a Debit/Credit card.  Unified Checkout / Click to Pay Drop-in UI allows the Cardholder to choose whether they would like the transaction to be paid for using either debit or credit card. **Important:** This is applicable to Visa cards only.  Possible values: - True  - False<br><br>  **Use Cases:**  **Offer Combo Card at Checkout:**  - Include the captureMandate.comboCard field in the capture context request and set it to true. - When set to true, Combo Card selection is shown at checkout <br><br>  **Do not offer Combo Card at Checkout:**  - Include the captureMandate.comboCard field in the capture context request and set it to false OR omit the field from the capture context request. - The Combo Card selection is not shown at checkout.
     * @return $this
     */
    public function setComboCard($comboCard)
    {
        $this->container['comboCard'] = $comboCard;

        return $this;
    }

    /**
     * Gets cPF
     * @return bool
     */
    public function getCPF()
    {
        return $this->container['cPF'];
    }

    /**
     * Sets cPF
     * @param bool $cPF Configure Unified Checkout to display and capture the CPF number (Cadastro de Pessoas Físicas).  The CPF number is a unique 11-digit identifier issued to Brazilian citizens and residents for tax purposes.  Possible values: - True - False<br><br>  This field is optional.   If set to true the field is required. If set to false the field is optional. If the field is not included in the capture context then it is not captured.<br><br>  **Important:**  - If PANENTRY is specified in the allowedPaymentTypes field, the CPF number will be displayed in Unified Checkout regardless of what card number is entered.  - If CLICKTOPAY is specified in the allowedPaymentTypes field, the CPF number will be displayed in Unified Checkout only when a Visa Click To Pay card is entered.
     * @return $this
     */
    public function setCPF($cPF)
    {
        $this->container['cPF'] = $cPF;

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


