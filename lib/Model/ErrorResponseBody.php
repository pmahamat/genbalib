<?php
/**
 * ErrorResponseBody
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
 * ErrorResponseBody Class Doc Comment
 *
 * @category Class
 * @description A response indicating an error occurred
 * @package  Genba\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ErrorResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ErrorResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'int',
        'details' => 'string',
        'reference' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => 'int32',
        'details' => null,
        'reference' => 'int32'
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
        'code' => 'Code',
        'details' => 'Details',
        'reference' => 'Reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'details' => 'setDetails',
        'reference' => 'setReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'details' => 'getDetails',
        'reference' => 'getReference'
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

    const CODE_1000 = 1000;
    const CODE_1001 = 1001;
    const CODE_1002 = 1002;
    const CODE_2000 = 2000;
    const CODE_2001 = 2001;
    const CODE_2002 = 2002;
    const CODE_2003 = 2003;
    const CODE_2004 = 2004;
    const CODE_2005 = 2005;
    const CODE_2006 = 2006;
    const CODE_3000 = 3000;
    const CODE_4000 = 4000;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_1000,
            self::CODE_1001,
            self::CODE_1002,
            self::CODE_2000,
            self::CODE_2001,
            self::CODE_2002,
            self::CODE_2003,
            self::CODE_2004,
            self::CODE_2005,
            self::CODE_2006,
            self::CODE_3000,
            self::CODE_4000,
        ];
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['details'] === null) {
            $invalidProperties[] = "'details' can't be null";
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
     * Gets code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int $code Possible values: 1000 = AUTH_MISSING_CREDENTIALS, Authorization failed because the credentials were missing; 1001 = AUTH_INVALID_CREDENTIALS, Authorization failed because the credentials were invalid; 1002 = AUTH_ACCOUNT_INACTIVE, Authorization failed because your account is not active; 2000 = OBJECT_NOT_FOUND, The object you are requesting does not exist or is inaccessible to your account; 2001 = PRODUCT_NOT_ALLOWED, Your account is not allowed to order or reserve this product; 2002 = ACTION_NOT_ALLOWED, The action you are trying to perform is not allowed; 2003 = RESERVATION_NOT_ALLOWED, Your account has reached its maximum amount of open reservations; 2004 = INVALID_REQUEST, The request is malformed. See the details of the response for more information; 2005 = INVALID_PARAMETER, The request is malformed. See the details of the response for more information; 2006 = ETAILER_NOT_ALLOWED, You are not allowed to act on the behalf of the eTailer you addressed in your request; 3000 = EXTERNAL_ERROR, An error occurred while contacting a third party; 4000 = INTERNAL_ERROR, An unexpected error occurred. Please contact support
     *
     * @return $this
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details Detailed explanation of the error
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return int
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param int $reference A reference number that can be used by Genba to identify your error
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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


