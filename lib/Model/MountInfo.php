<?php
/**
 * MountInfo
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
 * MountInfo Class Doc Comment
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'mount_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'major_minor' => 'string',
        'target' => 'string',
        'source' => 'string',
        'options' => 'string',
        'type' => 'string',
        'pool_id' => 'int',
        'pool_name' => 'string',
        'nas_id' => 'int',
        'nas_name' => 'string',
        'nas_share_id' => 'int',
        'nas_share_name' => 'string',
        'cloud_connector_id' => 'int',
        'cloud_connector_name' => 'string',
        'cloud_bucket_id' => 'int',
        'cloud_bucket_name' => 'string',
        'tape_id' => 'int',
        'tape_barcode' => 'string',
        'tape_library_id' => 'int',
        'tape_library_name' => 'string',
        'tape_library_serial' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'major_minor' => null,
        'target' => null,
        'source' => null,
        'options' => null,
        'type' => null,
        'pool_id' => null,
        'pool_name' => null,
        'nas_id' => null,
        'nas_name' => null,
        'nas_share_id' => null,
        'nas_share_name' => null,
        'cloud_connector_id' => null,
        'cloud_connector_name' => null,
        'cloud_bucket_id' => null,
        'cloud_bucket_name' => null,
        'tape_id' => null,
        'tape_barcode' => null,
        'tape_library_id' => null,
        'tape_library_name' => null,
        'tape_library_serial' => null
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
        'id' => 'id',
        'major_minor' => 'major_minor',
        'target' => 'target',
        'source' => 'source',
        'options' => 'options',
        'type' => 'type',
        'pool_id' => 'pool_id',
        'pool_name' => 'pool_name',
        'nas_id' => 'nas_id',
        'nas_name' => 'nas_name',
        'nas_share_id' => 'nas_share_id',
        'nas_share_name' => 'nas_share_name',
        'cloud_connector_id' => 'cloud_connector_id',
        'cloud_connector_name' => 'cloud_connector_name',
        'cloud_bucket_id' => 'cloud_bucket_id',
        'cloud_bucket_name' => 'cloud_bucket_name',
        'tape_id' => 'tape_id',
        'tape_barcode' => 'tape_barcode',
        'tape_library_id' => 'tape_library_id',
        'tape_library_name' => 'tape_library_name',
        'tape_library_serial' => 'tape_library_serial'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'major_minor' => 'setMajorMinor',
        'target' => 'setTarget',
        'source' => 'setSource',
        'options' => 'setOptions',
        'type' => 'setType',
        'pool_id' => 'setPoolId',
        'pool_name' => 'setPoolName',
        'nas_id' => 'setNasId',
        'nas_name' => 'setNasName',
        'nas_share_id' => 'setNasShareId',
        'nas_share_name' => 'setNasShareName',
        'cloud_connector_id' => 'setCloudConnectorId',
        'cloud_connector_name' => 'setCloudConnectorName',
        'cloud_bucket_id' => 'setCloudBucketId',
        'cloud_bucket_name' => 'setCloudBucketName',
        'tape_id' => 'setTapeId',
        'tape_barcode' => 'setTapeBarcode',
        'tape_library_id' => 'setTapeLibraryId',
        'tape_library_name' => 'setTapeLibraryName',
        'tape_library_serial' => 'setTapeLibrarySerial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'major_minor' => 'getMajorMinor',
        'target' => 'getTarget',
        'source' => 'getSource',
        'options' => 'getOptions',
        'type' => 'getType',
        'pool_id' => 'getPoolId',
        'pool_name' => 'getPoolName',
        'nas_id' => 'getNasId',
        'nas_name' => 'getNasName',
        'nas_share_id' => 'getNasShareId',
        'nas_share_name' => 'getNasShareName',
        'cloud_connector_id' => 'getCloudConnectorId',
        'cloud_connector_name' => 'getCloudConnectorName',
        'cloud_bucket_id' => 'getCloudBucketId',
        'cloud_bucket_name' => 'getCloudBucketName',
        'tape_id' => 'getTapeId',
        'tape_barcode' => 'getTapeBarcode',
        'tape_library_id' => 'getTapeLibraryId',
        'tape_library_name' => 'getTapeLibraryName',
        'tape_library_serial' => 'getTapeLibrarySerial'
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

    const TYPE_CIFS = 'cifs';
    const TYPE_NFS = 'nfs';
    const TYPE_FUSE_S3FS = 'fuse.s3fs';
    const TYPE_FUSE_CORE_FUSE = 'fuse.core_fuse';
    const TYPE_FUSE = 'fuse';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CIFS,
            self::TYPE_NFS,
            self::TYPE_FUSE_S3FS,
            self::TYPE_FUSE_CORE_FUSE,
            self::TYPE_FUSE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['major_minor'] = isset($data['major_minor']) ? $data['major_minor'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['pool_id'] = isset($data['pool_id']) ? $data['pool_id'] : null;
        $this->container['pool_name'] = isset($data['pool_name']) ? $data['pool_name'] : null;
        $this->container['nas_id'] = isset($data['nas_id']) ? $data['nas_id'] : null;
        $this->container['nas_name'] = isset($data['nas_name']) ? $data['nas_name'] : null;
        $this->container['nas_share_id'] = isset($data['nas_share_id']) ? $data['nas_share_id'] : null;
        $this->container['nas_share_name'] = isset($data['nas_share_name']) ? $data['nas_share_name'] : null;
        $this->container['cloud_connector_id'] = isset($data['cloud_connector_id']) ? $data['cloud_connector_id'] : null;
        $this->container['cloud_connector_name'] = isset($data['cloud_connector_name']) ? $data['cloud_connector_name'] : null;
        $this->container['cloud_bucket_id'] = isset($data['cloud_bucket_id']) ? $data['cloud_bucket_id'] : null;
        $this->container['cloud_bucket_name'] = isset($data['cloud_bucket_name']) ? $data['cloud_bucket_name'] : null;
        $this->container['tape_id'] = isset($data['tape_id']) ? $data['tape_id'] : null;
        $this->container['tape_barcode'] = isset($data['tape_barcode']) ? $data['tape_barcode'] : null;
        $this->container['tape_library_id'] = isset($data['tape_library_id']) ? $data['tape_library_id'] : null;
        $this->container['tape_library_name'] = isset($data['tape_library_name']) ? $data['tape_library_name'] : null;
        $this->container['tape_library_serial'] = isset($data['tape_library_serial']) ? $data['tape_library_serial'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets major_minor
     *
     * @return string|null
     */
    public function getMajorMinor()
    {
        return $this->container['major_minor'];
    }

    /**
     * Sets major_minor
     *
     * @param string|null $major_minor major_minor
     *
     * @return $this
     */
    public function setMajorMinor($major_minor)
    {
        $this->container['major_minor'] = $major_minor;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string|null $target target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string|null $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets pool_id
     *
     * @return int|null
     */
    public function getPoolId()
    {
        return $this->container['pool_id'];
    }

    /**
     * Sets pool_id
     *
     * @param int|null $pool_id pool_id
     *
     * @return $this
     */
    public function setPoolId($pool_id)
    {
        $this->container['pool_id'] = $pool_id;

        return $this;
    }

    /**
     * Gets pool_name
     *
     * @return string|null
     */
    public function getPoolName()
    {
        return $this->container['pool_name'];
    }

    /**
     * Sets pool_name
     *
     * @param string|null $pool_name pool_name
     *
     * @return $this
     */
    public function setPoolName($pool_name)
    {
        $this->container['pool_name'] = $pool_name;

        return $this;
    }

    /**
     * Gets nas_id
     *
     * @return int|null
     */
    public function getNasId()
    {
        return $this->container['nas_id'];
    }

    /**
     * Sets nas_id
     *
     * @param int|null $nas_id nas_id
     *
     * @return $this
     */
    public function setNasId($nas_id)
    {
        $this->container['nas_id'] = $nas_id;

        return $this;
    }

    /**
     * Gets nas_name
     *
     * @return string|null
     */
    public function getNasName()
    {
        return $this->container['nas_name'];
    }

    /**
     * Sets nas_name
     *
     * @param string|null $nas_name nas_name
     *
     * @return $this
     */
    public function setNasName($nas_name)
    {
        $this->container['nas_name'] = $nas_name;

        return $this;
    }

    /**
     * Gets nas_share_id
     *
     * @return int|null
     */
    public function getNasShareId()
    {
        return $this->container['nas_share_id'];
    }

    /**
     * Sets nas_share_id
     *
     * @param int|null $nas_share_id nas_share_id
     *
     * @return $this
     */
    public function setNasShareId($nas_share_id)
    {
        $this->container['nas_share_id'] = $nas_share_id;

        return $this;
    }

    /**
     * Gets nas_share_name
     *
     * @return string|null
     */
    public function getNasShareName()
    {
        return $this->container['nas_share_name'];
    }

    /**
     * Sets nas_share_name
     *
     * @param string|null $nas_share_name nas_share_name
     *
     * @return $this
     */
    public function setNasShareName($nas_share_name)
    {
        $this->container['nas_share_name'] = $nas_share_name;

        return $this;
    }

    /**
     * Gets cloud_connector_id
     *
     * @return int|null
     */
    public function getCloudConnectorId()
    {
        return $this->container['cloud_connector_id'];
    }

    /**
     * Sets cloud_connector_id
     *
     * @param int|null $cloud_connector_id cloud_connector_id
     *
     * @return $this
     */
    public function setCloudConnectorId($cloud_connector_id)
    {
        $this->container['cloud_connector_id'] = $cloud_connector_id;

        return $this;
    }

    /**
     * Gets cloud_connector_name
     *
     * @return string|null
     */
    public function getCloudConnectorName()
    {
        return $this->container['cloud_connector_name'];
    }

    /**
     * Sets cloud_connector_name
     *
     * @param string|null $cloud_connector_name cloud_connector_name
     *
     * @return $this
     */
    public function setCloudConnectorName($cloud_connector_name)
    {
        $this->container['cloud_connector_name'] = $cloud_connector_name;

        return $this;
    }

    /**
     * Gets cloud_bucket_id
     *
     * @return int|null
     */
    public function getCloudBucketId()
    {
        return $this->container['cloud_bucket_id'];
    }

    /**
     * Sets cloud_bucket_id
     *
     * @param int|null $cloud_bucket_id cloud_bucket_id
     *
     * @return $this
     */
    public function setCloudBucketId($cloud_bucket_id)
    {
        $this->container['cloud_bucket_id'] = $cloud_bucket_id;

        return $this;
    }

    /**
     * Gets cloud_bucket_name
     *
     * @return string|null
     */
    public function getCloudBucketName()
    {
        return $this->container['cloud_bucket_name'];
    }

    /**
     * Sets cloud_bucket_name
     *
     * @param string|null $cloud_bucket_name cloud_bucket_name
     *
     * @return $this
     */
    public function setCloudBucketName($cloud_bucket_name)
    {
        $this->container['cloud_bucket_name'] = $cloud_bucket_name;

        return $this;
    }

    /**
     * Gets tape_id
     *
     * @return int|null
     */
    public function getTapeId()
    {
        return $this->container['tape_id'];
    }

    /**
     * Sets tape_id
     *
     * @param int|null $tape_id tape_id
     *
     * @return $this
     */
    public function setTapeId($tape_id)
    {
        $this->container['tape_id'] = $tape_id;

        return $this;
    }

    /**
     * Gets tape_barcode
     *
     * @return string|null
     */
    public function getTapeBarcode()
    {
        return $this->container['tape_barcode'];
    }

    /**
     * Sets tape_barcode
     *
     * @param string|null $tape_barcode tape_barcode
     *
     * @return $this
     */
    public function setTapeBarcode($tape_barcode)
    {
        $this->container['tape_barcode'] = $tape_barcode;

        return $this;
    }

    /**
     * Gets tape_library_id
     *
     * @return int|null
     */
    public function getTapeLibraryId()
    {
        return $this->container['tape_library_id'];
    }

    /**
     * Sets tape_library_id
     *
     * @param int|null $tape_library_id tape_library_id
     *
     * @return $this
     */
    public function setTapeLibraryId($tape_library_id)
    {
        $this->container['tape_library_id'] = $tape_library_id;

        return $this;
    }

    /**
     * Gets tape_library_name
     *
     * @return string|null
     */
    public function getTapeLibraryName()
    {
        return $this->container['tape_library_name'];
    }

    /**
     * Sets tape_library_name
     *
     * @param string|null $tape_library_name tape_library_name
     *
     * @return $this
     */
    public function setTapeLibraryName($tape_library_name)
    {
        $this->container['tape_library_name'] = $tape_library_name;

        return $this;
    }

    /**
     * Gets tape_library_serial
     *
     * @return string|null
     */
    public function getTapeLibrarySerial()
    {
        return $this->container['tape_library_serial'];
    }

    /**
     * Sets tape_library_serial
     *
     * @param string|null $tape_library_serial tape_library_serial
     *
     * @return $this
     */
    public function setTapeLibrarySerial($tape_library_serial)
    {
        $this->container['tape_library_serial'] = $tape_library_serial;

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


