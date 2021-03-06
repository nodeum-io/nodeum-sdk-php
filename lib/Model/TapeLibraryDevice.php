<?php
/**
 * TapeLibraryDevice
 *
 * PHP version 5
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Nodeum API
 *
 * The Nodeum API makes it easy to tap into the digital data mesh that runs across your organisation. Make requests to our API endpoints and we’ll give you everything you need to interconnect your business workflows with your storage.  All production API requests are made to:  http://nodeumhostname/api/  The current production version of the API is v1.   **REST** The Nodeum API is a RESTful API. This means that the API is designed to allow you to get, create, update, & delete objects with the HTTP verbs GET, POST, PUT, PATCH, & DELETE.  **JSON** The Nodeum API speaks exclusively in JSON. This means that you should always set the Content-Type header to application/json to ensure that your requests are properly accepted and processed by the API.  **Authentication** All API calls require user-password authentication.   **Cross-Origin Resource Sharing** The Nodeum API supports CORS for communicating from Javascript for these endpoints. You will need to specify an Origin URI when creating your application to allow for CORS to be whitelisted for your domain.   **Pagination** Some endpoints such as File Listing return a potentially lengthy array of objects. In order to keep the response sizes manageable the API will take advantage of pagination. Pagination is a mechanism for returning a subset of the results for a request and allowing for subsequent requests to “page” through the rest of the results until the end is reached. Paginated endpoints follow a standard interface that accepts two query parameters, limit and offset, and return a payload that follows a standard form. These parameters names and their behavior are borrowed from SQL LIMIT and OFFSET keywords.  **Versioning** The Nodeum API is constantly being worked on to add features, make improvements, and fix bugs. This means that you should expect changes to be introduced and documented.   However, there are some changes or additions that are considered backwards-compatible and your applications should be flexible enough to handle them. These include:  - Adding new endpoints to the API - Adding new attributes to the response of an existing endpoint - Changing the order of attributes of responses (JSON by definition is an object of unordered key/value pairs)  **Filter parameters** When browsing a list of items, multiple filter parameters may be applied. Some operators can be added to the value as a prefix:  - `=` value is equal. Default operator, may be omitted  - `!=` value is different  - `>` greater than  - `>=` greater than or equal  - `<` lower than  - `>=` lower than or equal  - `><` included in list, items should be separated by `|`  - `!><` not included in list, items should be separated by `|`  - `~` pattern matching, may include `%` (any characters) and `_` (one character)  - `!~` pattern not matching, may include `%` (any characters) and `_` (one character)
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: info@nodeum.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NodeumSDK\Client\Model;

use \ArrayAccess;
use \NodeumSDK\Client\ObjectSerializer;

/**
 * TapeLibraryDevice Class Doc Comment
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TapeLibraryDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tape_library_device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'serial' => 'string',
        'protocol' => 'string',
        'vendor' => 'string',
        'product' => 'string',
        'firmware' => 'string',
        'device' => 'string',
        'acs' => 'int',
        'storage_slots' => 'int',
        'storage_slots_address' => 'int',
        'io_slots' => 'int',
        'io_slots_address' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'serial' => null,
        'protocol' => null,
        'vendor' => null,
        'product' => null,
        'firmware' => null,
        'device' => null,
        'acs' => null,
        'storage_slots' => null,
        'storage_slots_address' => null,
        'io_slots' => null,
        'io_slots_address' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'serial' => 'serial',
        'protocol' => 'protocol',
        'vendor' => 'vendor',
        'product' => 'product',
        'firmware' => 'firmware',
        'device' => 'device',
        'acs' => 'acs',
        'storage_slots' => 'storage_slots',
        'storage_slots_address' => 'storage_slots_address',
        'io_slots' => 'io_slots',
        'io_slots_address' => 'io_slots_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serial' => 'setSerial',
        'protocol' => 'setProtocol',
        'vendor' => 'setVendor',
        'product' => 'setProduct',
        'firmware' => 'setFirmware',
        'device' => 'setDevice',
        'acs' => 'setAcs',
        'storage_slots' => 'setStorageSlots',
        'storage_slots_address' => 'setStorageSlotsAddress',
        'io_slots' => 'setIoSlots',
        'io_slots_address' => 'setIoSlotsAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serial' => 'getSerial',
        'protocol' => 'getProtocol',
        'vendor' => 'getVendor',
        'product' => 'getProduct',
        'firmware' => 'getFirmware',
        'device' => 'getDevice',
        'acs' => 'getAcs',
        'storage_slots' => 'getStorageSlots',
        'storage_slots_address' => 'getStorageSlotsAddress',
        'io_slots' => 'getIoSlots',
        'io_slots_address' => 'getIoSlotsAddress'
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
        return self::$openAPIModelName;
    }

    const PROTOCOL_SCSI = 'scsi';
    const PROTOCOL_ACSLS = 'acsls';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_SCSI,
            self::PROTOCOL_ACSLS,
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
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['firmware'] = isset($data['firmware']) ? $data['firmware'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['acs'] = isset($data['acs']) ? $data['acs'] : null;
        $this->container['storage_slots'] = isset($data['storage_slots']) ? $data['storage_slots'] : null;
        $this->container['storage_slots_address'] = isset($data['storage_slots_address']) ? $data['storage_slots_address'] : null;
        $this->container['io_slots'] = isset($data['io_slots']) ? $data['io_slots'] : null;
        $this->container['io_slots_address'] = isset($data['io_slots_address']) ? $data['io_slots_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets serial
     *
     * @return string|null
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param string|null $serial serial
     *
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string|null $protocol protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($protocol) && !in_array($protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'protocol', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string|null
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string|null $vendor vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string|null $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets firmware
     *
     * @return string|null
     */
    public function getFirmware()
    {
        return $this->container['firmware'];
    }

    /**
     * Sets firmware
     *
     * @param string|null $firmware firmware
     *
     * @return $this
     */
    public function setFirmware($firmware)
    {
        $this->container['firmware'] = $firmware;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device device
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets acs
     *
     * @return int|null
     */
    public function getAcs()
    {
        return $this->container['acs'];
    }

    /**
     * Sets acs
     *
     * @param int|null $acs acs
     *
     * @return $this
     */
    public function setAcs($acs)
    {
        $this->container['acs'] = $acs;

        return $this;
    }

    /**
     * Gets storage_slots
     *
     * @return int|null
     */
    public function getStorageSlots()
    {
        return $this->container['storage_slots'];
    }

    /**
     * Sets storage_slots
     *
     * @param int|null $storage_slots storage_slots
     *
     * @return $this
     */
    public function setStorageSlots($storage_slots)
    {
        $this->container['storage_slots'] = $storage_slots;

        return $this;
    }

    /**
     * Gets storage_slots_address
     *
     * @return int|null
     */
    public function getStorageSlotsAddress()
    {
        return $this->container['storage_slots_address'];
    }

    /**
     * Sets storage_slots_address
     *
     * @param int|null $storage_slots_address storage_slots_address
     *
     * @return $this
     */
    public function setStorageSlotsAddress($storage_slots_address)
    {
        $this->container['storage_slots_address'] = $storage_slots_address;

        return $this;
    }

    /**
     * Gets io_slots
     *
     * @return int|null
     */
    public function getIoSlots()
    {
        return $this->container['io_slots'];
    }

    /**
     * Sets io_slots
     *
     * @param int|null $io_slots io_slots
     *
     * @return $this
     */
    public function setIoSlots($io_slots)
    {
        $this->container['io_slots'] = $io_slots;

        return $this;
    }

    /**
     * Gets io_slots_address
     *
     * @return int|null
     */
    public function getIoSlotsAddress()
    {
        return $this->container['io_slots_address'];
    }

    /**
     * Sets io_slots_address
     *
     * @param int|null $io_slots_address io_slots_address
     *
     * @return $this
     */
    public function setIoSlotsAddress($io_slots_address)
    {
        $this->container['io_slots_address'] = $io_slots_address;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


