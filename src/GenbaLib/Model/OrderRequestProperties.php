<?php
/**
 * OrderRequestProperties
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
 * OrderRequestProperties Class Doc Comment
 *
 * @category Class
 * @package  Genba\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderRequestProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderRequestProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string',
        'buying_price' => '\Genba\Client\Model\BuyingPrice',
        'selling_price' => '\Genba\Client\Model\SellingPrice',
        'consumer_ip' => 'string',
        'country_code' => 'string',
        'etailer_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku' => null,
        'buying_price' => null,
        'selling_price' => null,
        'consumer_ip' => null,
        'country_code' => null,
        'etailer_id' => null
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
        'sku' => 'Sku',
        'buying_price' => 'BuyingPrice',
        'selling_price' => 'SellingPrice',
        'consumer_ip' => 'ConsumerIP',
        'country_code' => 'CountryCode',
        'etailer_id' => 'EtailerID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'buying_price' => 'setBuyingPrice',
        'selling_price' => 'setSellingPrice',
        'consumer_ip' => 'setConsumerIp',
        'country_code' => 'setCountryCode',
        'etailer_id' => 'setEtailerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'buying_price' => 'getBuyingPrice',
        'selling_price' => 'getSellingPrice',
        'consumer_ip' => 'getConsumerIp',
        'country_code' => 'getCountryCode',
        'etailer_id' => 'getEtailerId'
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['buying_price'] = isset($data['buying_price']) ? $data['buying_price'] : null;
        $this->container['selling_price'] = isset($data['selling_price']) ? $data['selling_price'] : null;
        $this->container['consumer_ip'] = isset($data['consumer_ip']) ? $data['consumer_ip'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['etailer_id'] = isset($data['etailer_id']) ? $data['etailer_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['buying_price'] === null) {
            $invalidProperties[] = "'buying_price' can't be null";
        }
        if ($this->container['selling_price'] === null) {
            $invalidProperties[] = "'selling_price' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku SKU of the product you wish to order or reserve a key for
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets buying_price
     *
     * @return \Genba\Client\Model\BuyingPrice
     */
    public function getBuyingPrice()
    {
        return $this->container['buying_price'];
    }

    /**
     * Sets buying_price
     *
     * @param \Genba\Client\Model\BuyingPrice $buying_price buying_price
     *
     * @return $this
     */
    public function setBuyingPrice($buying_price)
    {
        $this->container['buying_price'] = $buying_price;

        return $this;
    }

    /**
     * Gets selling_price
     *
     * @return \Genba\Client\Model\SellingPrice
     */
    public function getSellingPrice()
    {
        return $this->container['selling_price'];
    }

    /**
     * Sets selling_price
     *
     * @param \Genba\Client\Model\SellingPrice $selling_price selling_price
     *
     * @return $this
     */
    public function setSellingPrice($selling_price)
    {
        $this->container['selling_price'] = $selling_price;

        return $this;
    }

    /**
     * Gets consumer_ip
     *
     * @return string
     */
    public function getConsumerIp()
    {
        return $this->container['consumer_ip'];
    }

    /**
     * Sets consumer_ip
     *
     * @param string $consumer_ip IP address of the end user
     *
     * @return $this
     */
    public function setConsumerIp($consumer_ip)
    {
        $this->container['consumer_ip'] = $consumer_ip;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code ISO 3166-1 alpha-2 code of the country where the product is sold
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

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
     * @param string $etailer_id The identifier of the affiliated eTailer for which you are placing this order or reservation
     *
     * @return $this
     */
    public function setEtailerId($etailer_id)
    {
        $this->container['etailer_id'] = $etailer_id;

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


