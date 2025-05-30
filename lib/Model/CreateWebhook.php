<?php
/**
 * CreateWebhook
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
 * CreateWebhook Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateWebhook implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'organizationId' => 'string',
        'products' => '\CyberSource\Model\Notificationsubscriptionsv2webhooksProducts1[]',
        'webhookUrl' => 'string',
        'healthCheckUrl' => 'string',
        'retryPolicy' => '\CyberSource\Model\Notificationsubscriptionsv2webhooksRetryPolicy',
        'securityPolicy' => '\CyberSource\Model\Notificationsubscriptionsv2webhooksSecurityPolicy1'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'organizationId' => null,
        'products' => null,
        'webhookUrl' => null,
        'healthCheckUrl' => null,
        'retryPolicy' => null,
        'securityPolicy' => null
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
        'name' => 'name',
        'description' => 'description',
        'organizationId' => 'organizationId',
        'products' => 'products',
        'webhookUrl' => 'webhookUrl',
        'healthCheckUrl' => 'healthCheckUrl',
        'retryPolicy' => 'retryPolicy',
        'securityPolicy' => 'securityPolicy'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'organizationId' => 'setOrganizationId',
        'products' => 'setProducts',
        'webhookUrl' => 'setWebhookUrl',
        'healthCheckUrl' => 'setHealthCheckUrl',
        'retryPolicy' => 'setRetryPolicy',
        'securityPolicy' => 'setSecurityPolicy'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'organizationId' => 'getOrganizationId',
        'products' => 'getProducts',
        'webhookUrl' => 'getWebhookUrl',
        'healthCheckUrl' => 'getHealthCheckUrl',
        'retryPolicy' => 'getRetryPolicy',
        'securityPolicy' => 'getSecurityPolicy'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['webhookUrl'] = isset($data['webhookUrl']) ? $data['webhookUrl'] : null;
        $this->container['healthCheckUrl'] = isset($data['healthCheckUrl']) ? $data['healthCheckUrl'] : null;
        $this->container['retryPolicy'] = isset($data['retryPolicy']) ? $data['retryPolicy'] : null;
        $this->container['securityPolicy'] = isset($data['securityPolicy']) ? $data['securityPolicy'] : null;
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Client friendly webhook name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Client friendly webhook description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Organization Identifier (OrgId) or Merchant Identifier (MID).
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets products
     * @return \CyberSource\Model\Notificationsubscriptionsv2webhooksProducts1[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \CyberSource\Model\Notificationsubscriptionsv2webhooksProducts1[] $products To see the valid productId and eventTypes, call the \"Create and Manage Webhooks - Retrieve a list of event types\" endpoint.
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets webhookUrl
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhookUrl'];
    }

    /**
     * Sets webhookUrl
     * @param string $webhookUrl The client's endpoint (URL) to receive webhooks.
     * @return $this
     */
    public function setWebhookUrl($webhookUrl)
    {
        $this->container['webhookUrl'] = $webhookUrl;

        return $this;
    }

    /**
     * Gets healthCheckUrl
     * @return string
     */
    public function getHealthCheckUrl()
    {
        return $this->container['healthCheckUrl'];
    }

    /**
     * Sets healthCheckUrl
     * @param string $healthCheckUrl The client's health check endpoint (URL). This should be as close as possible to the actual webhookUrl. If the user does not provide the health check URL, it is the user's responsibility to re-activate the webhook if it is deactivated by calling the test endpoint.
     * @return $this
     */
    public function setHealthCheckUrl($healthCheckUrl)
    {
        $this->container['healthCheckUrl'] = $healthCheckUrl;

        return $this;
    }

    /**
     * Gets retryPolicy
     * @return \CyberSource\Model\Notificationsubscriptionsv2webhooksRetryPolicy
     */
    public function getRetryPolicy()
    {
        return $this->container['retryPolicy'];
    }

    /**
     * Sets retryPolicy
     * @param \CyberSource\Model\Notificationsubscriptionsv2webhooksRetryPolicy $retryPolicy
     * @return $this
     */
    public function setRetryPolicy($retryPolicy)
    {
        $this->container['retryPolicy'] = $retryPolicy;

        return $this;
    }

    /**
     * Gets securityPolicy
     * @return \CyberSource\Model\Notificationsubscriptionsv2webhooksSecurityPolicy1
     */
    public function getSecurityPolicy()
    {
        return $this->container['securityPolicy'];
    }

    /**
     * Sets securityPolicy
     * @param \CyberSource\Model\Notificationsubscriptionsv2webhooksSecurityPolicy1 $securityPolicy
     * @return $this
     */
    public function setSecurityPolicy($securityPolicy)
    {
        $this->container['securityPolicy'] = $securityPolicy;

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


