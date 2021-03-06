<?php
/**
 * DirectEntitlementRedemptionRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Genba\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Genba Digital Distribution API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Genba\Client\Model;

use \ArrayAccess;
use \Genba\Client\ObjectSerializer;

/**
 * DirectEntitlementRedemptionRequest Class Doc Comment
 *
 * @category Class
 * @package  Genba\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DirectEntitlementRedemptionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DirectEntitlementRedemptionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_transaction_id' => 'string',
        'etailer_id' => 'string',
        'activation_id' => 'string',
        'redemption' => '\Genba\Client\Model\RedemptionData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_transaction_id' => null,
        'etailer_id' => null,
        'activation_id' => null,
        'redemption' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'client_transaction_id' => 'ClientTransactionID',
        'etailer_id' => 'EtailerID',
        'activation_id' => 'ActivationID',
        'redemption' => 'Redemption'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_transaction_id' => 'setClientTransactionId',
        'etailer_id' => 'setEtailerId',
        'activation_id' => 'setActivationId',
        'redemption' => 'setRedemption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_transaction_id' => 'getClientTransactionId',
        'etailer_id' => 'getEtailerId',
        'activation_id' => 'getActivationId',
        'redemption' => 'getRedemption'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['client_transaction_id'] = isset($data['client_transaction_id']) ? $data['client_transaction_id'] : null;
        $this->container['etailer_id'] = isset($data['etailer_id']) ? $data['etailer_id'] : null;
        $this->container['activation_id'] = isset($data['activation_id']) ? $data['activation_id'] : null;
        $this->container['redemption'] = isset($data['redemption']) ? $data['redemption'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_transaction_id'] === null) {
            $invalidProperties[] = "'client_transaction_id' can't be null";
        }
        if ($this->container['activation_id'] === null) {
            $invalidProperties[] = "'activation_id' can't be null";
        }
        if ($this->container['redemption'] === null) {
            $invalidProperties[] = "'redemption' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets client_transaction_id
     *
     * @return string
     */
    public function getClientTransactionId()
    {
        return $this->container['client_transaction_id'];
    }

    /**
     * Sets client_transaction_id
     *
     * @param string $client_transaction_id Unique identifier for this request, generated by the client
     *
     * @return $this
     */
    public function setClientTransactionId($client_transaction_id)
    {
        $this->container['client_transaction_id'] = $client_transaction_id;

        return $this;
    }

    /**
     * Gets etailer_id
     *
     * @return string
     */
    public function getEtailerId()
    {
        return $this->container['etailer_id'];
    }

    /**
     * Sets etailer_id
     *
     * @param string $etailer_id The identifier of the affiliated eTailer for which you are performing this redemption
     *
     * @return $this
     */
    public function setEtailerId($etailer_id)
    {
        $this->container['etailer_id'] = $etailer_id;

        return $this;
    }

    /**
     * Gets activation_id
     *
     * @return string
     */
    public function getActivationId()
    {
        return $this->container['activation_id'];
    }

    /**
     * Sets activation_id
     *
     * @param string $activation_id Unique ID of the activation that was performed
     *
     * @return $this
     */
    public function setActivationId($activation_id)
    {
        $this->container['activation_id'] = $activation_id;

        return $this;
    }

    /**
     * Gets redemption
     *
     * @return \Genba\Client\Model\RedemptionData
     */
    public function getRedemption()
    {
        return $this->container['redemption'];
    }

    /**
     * Sets redemption
     *
     * @param \Genba\Client\Model\RedemptionData $redemption redemption
     *
     * @return $this
     */
    public function setRedemption($redemption)
    {
        $this->container['redemption'] = $redemption;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


