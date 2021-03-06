<?php
/**
 * Container
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
 * Container Class Doc Comment
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Container implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'container';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'comment' => 'string',
        'quota_total_size' => 'int',
        'quota_on_cache' => 'int',
        'stat_total_files' => 'int',
        'only_on_cache_file_count' => 'int',
        'stat_total_size' => 'int',
        'stat_size_on_cache' => 'int',
        'only_on_cache_file_size_sum' => 'int',
        'guest_right' => 'string',
        'last_update' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'comment' => null,
        'quota_total_size' => null,
        'quota_on_cache' => null,
        'stat_total_files' => null,
        'only_on_cache_file_count' => null,
        'stat_total_size' => null,
        'stat_size_on_cache' => null,
        'only_on_cache_file_size_sum' => null,
        'guest_right' => null,
        'last_update' => null
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
        'name' => 'name',
        'comment' => 'comment',
        'quota_total_size' => 'quota_total_size',
        'quota_on_cache' => 'quota_on_cache',
        'stat_total_files' => 'stat_total_files',
        'only_on_cache_file_count' => 'only_on_cache_file_count',
        'stat_total_size' => 'stat_total_size',
        'stat_size_on_cache' => 'stat_size_on_cache',
        'only_on_cache_file_size_sum' => 'only_on_cache_file_size_sum',
        'guest_right' => 'guest_right',
        'last_update' => 'last_update'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'comment' => 'setComment',
        'quota_total_size' => 'setQuotaTotalSize',
        'quota_on_cache' => 'setQuotaOnCache',
        'stat_total_files' => 'setStatTotalFiles',
        'only_on_cache_file_count' => 'setOnlyOnCacheFileCount',
        'stat_total_size' => 'setStatTotalSize',
        'stat_size_on_cache' => 'setStatSizeOnCache',
        'only_on_cache_file_size_sum' => 'setOnlyOnCacheFileSizeSum',
        'guest_right' => 'setGuestRight',
        'last_update' => 'setLastUpdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'comment' => 'getComment',
        'quota_total_size' => 'getQuotaTotalSize',
        'quota_on_cache' => 'getQuotaOnCache',
        'stat_total_files' => 'getStatTotalFiles',
        'only_on_cache_file_count' => 'getOnlyOnCacheFileCount',
        'stat_total_size' => 'getStatTotalSize',
        'stat_size_on_cache' => 'getStatSizeOnCache',
        'only_on_cache_file_size_sum' => 'getOnlyOnCacheFileSizeSum',
        'guest_right' => 'getGuestRight',
        'last_update' => 'getLastUpdate'
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

    const GUEST_RIGHT_NONE = 'none';
    const GUEST_RIGHT_READ = 'read';
    const GUEST_RIGHT_READ_WRITE = 'read_write';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGuestRightAllowableValues()
    {
        return [
            self::GUEST_RIGHT_NONE,
            self::GUEST_RIGHT_READ,
            self::GUEST_RIGHT_READ_WRITE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['quota_total_size'] = isset($data['quota_total_size']) ? $data['quota_total_size'] : null;
        $this->container['quota_on_cache'] = isset($data['quota_on_cache']) ? $data['quota_on_cache'] : null;
        $this->container['stat_total_files'] = isset($data['stat_total_files']) ? $data['stat_total_files'] : null;
        $this->container['only_on_cache_file_count'] = isset($data['only_on_cache_file_count']) ? $data['only_on_cache_file_count'] : null;
        $this->container['stat_total_size'] = isset($data['stat_total_size']) ? $data['stat_total_size'] : null;
        $this->container['stat_size_on_cache'] = isset($data['stat_size_on_cache']) ? $data['stat_size_on_cache'] : null;
        $this->container['only_on_cache_file_size_sum'] = isset($data['only_on_cache_file_size_sum']) ? $data['only_on_cache_file_size_sum'] : null;
        $this->container['guest_right'] = isset($data['guest_right']) ? $data['guest_right'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGuestRightAllowableValues();
        if (!is_null($this->container['guest_right']) && !in_array($this->container['guest_right'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'guest_right', must be one of '%s'",
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets quota_total_size
     *
     * @return int|null
     */
    public function getQuotaTotalSize()
    {
        return $this->container['quota_total_size'];
    }

    /**
     * Sets quota_total_size
     *
     * @param int|null $quota_total_size quota_total_size
     *
     * @return $this
     */
    public function setQuotaTotalSize($quota_total_size)
    {
        $this->container['quota_total_size'] = $quota_total_size;

        return $this;
    }

    /**
     * Gets quota_on_cache
     *
     * @return int|null
     */
    public function getQuotaOnCache()
    {
        return $this->container['quota_on_cache'];
    }

    /**
     * Sets quota_on_cache
     *
     * @param int|null $quota_on_cache quota_on_cache
     *
     * @return $this
     */
    public function setQuotaOnCache($quota_on_cache)
    {
        $this->container['quota_on_cache'] = $quota_on_cache;

        return $this;
    }

    /**
     * Gets stat_total_files
     *
     * @return int|null
     */
    public function getStatTotalFiles()
    {
        return $this->container['stat_total_files'];
    }

    /**
     * Sets stat_total_files
     *
     * @param int|null $stat_total_files stat_total_files
     *
     * @return $this
     */
    public function setStatTotalFiles($stat_total_files)
    {
        $this->container['stat_total_files'] = $stat_total_files;

        return $this;
    }

    /**
     * Gets only_on_cache_file_count
     *
     * @return int|null
     */
    public function getOnlyOnCacheFileCount()
    {
        return $this->container['only_on_cache_file_count'];
    }

    /**
     * Sets only_on_cache_file_count
     *
     * @param int|null $only_on_cache_file_count only_on_cache_file_count
     *
     * @return $this
     */
    public function setOnlyOnCacheFileCount($only_on_cache_file_count)
    {
        $this->container['only_on_cache_file_count'] = $only_on_cache_file_count;

        return $this;
    }

    /**
     * Gets stat_total_size
     *
     * @return int|null
     */
    public function getStatTotalSize()
    {
        return $this->container['stat_total_size'];
    }

    /**
     * Sets stat_total_size
     *
     * @param int|null $stat_total_size stat_total_size
     *
     * @return $this
     */
    public function setStatTotalSize($stat_total_size)
    {
        $this->container['stat_total_size'] = $stat_total_size;

        return $this;
    }

    /**
     * Gets stat_size_on_cache
     *
     * @return int|null
     */
    public function getStatSizeOnCache()
    {
        return $this->container['stat_size_on_cache'];
    }

    /**
     * Sets stat_size_on_cache
     *
     * @param int|null $stat_size_on_cache stat_size_on_cache
     *
     * @return $this
     */
    public function setStatSizeOnCache($stat_size_on_cache)
    {
        $this->container['stat_size_on_cache'] = $stat_size_on_cache;

        return $this;
    }

    /**
     * Gets only_on_cache_file_size_sum
     *
     * @return int|null
     */
    public function getOnlyOnCacheFileSizeSum()
    {
        return $this->container['only_on_cache_file_size_sum'];
    }

    /**
     * Sets only_on_cache_file_size_sum
     *
     * @param int|null $only_on_cache_file_size_sum only_on_cache_file_size_sum
     *
     * @return $this
     */
    public function setOnlyOnCacheFileSizeSum($only_on_cache_file_size_sum)
    {
        $this->container['only_on_cache_file_size_sum'] = $only_on_cache_file_size_sum;

        return $this;
    }

    /**
     * Gets guest_right
     *
     * @return string|null
     */
    public function getGuestRight()
    {
        return $this->container['guest_right'];
    }

    /**
     * Sets guest_right
     *
     * @param string|null $guest_right guest_right
     *
     * @return $this
     */
    public function setGuestRight($guest_right)
    {
        $allowedValues = $this->getGuestRightAllowableValues();
        if (!is_null($guest_right) && !in_array($guest_right, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'guest_right', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['guest_right'] = $guest_right;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return string|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param string|null $last_update last_update
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

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


