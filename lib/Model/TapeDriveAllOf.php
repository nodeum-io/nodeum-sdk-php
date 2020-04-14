<?php
/**
 * TapeDriveAllOf
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
 * TapeDriveAllOf Class Doc Comment
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TapeDriveAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tape_drive_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'tape_library_id' => 'int',
        'name' => 'string',
        'comment' => 'string',
        'libso' => 'string',
        'acs' => 'int',
        'lsm' => 'int',
        'panel' => 'int',
        'transport' => 'int',
        'status' => 'string',
        'full' => 'int',
        'mount_count' => 'int',
        'use_to' => 'string',
        'use_by' => 'string',
        'barcode' => 'string',
        'task_id' => 'int',
        'use_file_processed_size' => 'int',
        'use_file_size_to_process' => 'int',
        'use_file_name_processed' => 'string',
        'bandwidth' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'tape_library_id' => null,
        'name' => null,
        'comment' => null,
        'libso' => null,
        'acs' => null,
        'lsm' => null,
        'panel' => null,
        'transport' => null,
        'status' => null,
        'full' => null,
        'mount_count' => null,
        'use_to' => null,
        'use_by' => null,
        'barcode' => null,
        'task_id' => null,
        'use_file_processed_size' => null,
        'use_file_size_to_process' => null,
        'use_file_name_processed' => null,
        'bandwidth' => null
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
        'tape_library_id' => 'tape_library_id',
        'name' => 'name',
        'comment' => 'comment',
        'libso' => 'libso',
        'acs' => 'acs',
        'lsm' => 'lsm',
        'panel' => 'panel',
        'transport' => 'transport',
        'status' => 'status',
        'full' => 'full',
        'mount_count' => 'mount_count',
        'use_to' => 'use_to',
        'use_by' => 'use_by',
        'barcode' => 'barcode',
        'task_id' => 'task_id',
        'use_file_processed_size' => 'use_file_processed_size',
        'use_file_size_to_process' => 'use_file_size_to_process',
        'use_file_name_processed' => 'use_file_name_processed',
        'bandwidth' => 'bandwidth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'tape_library_id' => 'setTapeLibraryId',
        'name' => 'setName',
        'comment' => 'setComment',
        'libso' => 'setLibso',
        'acs' => 'setAcs',
        'lsm' => 'setLsm',
        'panel' => 'setPanel',
        'transport' => 'setTransport',
        'status' => 'setStatus',
        'full' => 'setFull',
        'mount_count' => 'setMountCount',
        'use_to' => 'setUseTo',
        'use_by' => 'setUseBy',
        'barcode' => 'setBarcode',
        'task_id' => 'setTaskId',
        'use_file_processed_size' => 'setUseFileProcessedSize',
        'use_file_size_to_process' => 'setUseFileSizeToProcess',
        'use_file_name_processed' => 'setUseFileNameProcessed',
        'bandwidth' => 'setBandwidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'tape_library_id' => 'getTapeLibraryId',
        'name' => 'getName',
        'comment' => 'getComment',
        'libso' => 'getLibso',
        'acs' => 'getAcs',
        'lsm' => 'getLsm',
        'panel' => 'getPanel',
        'transport' => 'getTransport',
        'status' => 'getStatus',
        'full' => 'getFull',
        'mount_count' => 'getMountCount',
        'use_to' => 'getUseTo',
        'use_by' => 'getUseBy',
        'barcode' => 'getBarcode',
        'task_id' => 'getTaskId',
        'use_file_processed_size' => 'getUseFileProcessedSize',
        'use_file_size_to_process' => 'getUseFileSizeToProcess',
        'use_file_name_processed' => 'getUseFileNameProcessed',
        'bandwidth' => 'getBandwidth'
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

    const STATUS_OFFLINE = 'offline';
    const STATUS_ONLINE = 'online';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OFFLINE,
            self::STATUS_ONLINE,
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
        $this->container['tape_library_id'] = isset($data['tape_library_id']) ? $data['tape_library_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['libso'] = isset($data['libso']) ? $data['libso'] : null;
        $this->container['acs'] = isset($data['acs']) ? $data['acs'] : null;
        $this->container['lsm'] = isset($data['lsm']) ? $data['lsm'] : null;
        $this->container['panel'] = isset($data['panel']) ? $data['panel'] : null;
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['full'] = isset($data['full']) ? $data['full'] : null;
        $this->container['mount_count'] = isset($data['mount_count']) ? $data['mount_count'] : null;
        $this->container['use_to'] = isset($data['use_to']) ? $data['use_to'] : null;
        $this->container['use_by'] = isset($data['use_by']) ? $data['use_by'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['use_file_processed_size'] = isset($data['use_file_processed_size']) ? $data['use_file_processed_size'] : null;
        $this->container['use_file_size_to_process'] = isset($data['use_file_size_to_process']) ? $data['use_file_size_to_process'] : null;
        $this->container['use_file_name_processed'] = isset($data['use_file_name_processed']) ? $data['use_file_name_processed'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets libso
     *
     * @return string|null
     */
    public function getLibso()
    {
        return $this->container['libso'];
    }

    /**
     * Sets libso
     *
     * @param string|null $libso libso
     *
     * @return $this
     */
    public function setLibso($libso)
    {
        $this->container['libso'] = $libso;

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
     * Gets lsm
     *
     * @return int|null
     */
    public function getLsm()
    {
        return $this->container['lsm'];
    }

    /**
     * Sets lsm
     *
     * @param int|null $lsm lsm
     *
     * @return $this
     */
    public function setLsm($lsm)
    {
        $this->container['lsm'] = $lsm;

        return $this;
    }

    /**
     * Gets panel
     *
     * @return int|null
     */
    public function getPanel()
    {
        return $this->container['panel'];
    }

    /**
     * Sets panel
     *
     * @param int|null $panel panel
     *
     * @return $this
     */
    public function setPanel($panel)
    {
        $this->container['panel'] = $panel;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return int|null
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param int|null $transport transport
     *
     * @return $this
     */
    public function setTransport($transport)
    {
        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets full
     *
     * @return int|null
     */
    public function getFull()
    {
        return $this->container['full'];
    }

    /**
     * Sets full
     *
     * @param int|null $full full
     *
     * @return $this
     */
    public function setFull($full)
    {
        $this->container['full'] = $full;

        return $this;
    }

    /**
     * Gets mount_count
     *
     * @return int|null
     */
    public function getMountCount()
    {
        return $this->container['mount_count'];
    }

    /**
     * Sets mount_count
     *
     * @param int|null $mount_count mount_count
     *
     * @return $this
     */
    public function setMountCount($mount_count)
    {
        $this->container['mount_count'] = $mount_count;

        return $this;
    }

    /**
     * Gets use_to
     *
     * @return string|null
     */
    public function getUseTo()
    {
        return $this->container['use_to'];
    }

    /**
     * Sets use_to
     *
     * @param string|null $use_to use_to
     *
     * @return $this
     */
    public function setUseTo($use_to)
    {
        $this->container['use_to'] = $use_to;

        return $this;
    }

    /**
     * Gets use_by
     *
     * @return string|null
     */
    public function getUseBy()
    {
        return $this->container['use_by'];
    }

    /**
     * Sets use_by
     *
     * @param string|null $use_by use_by
     *
     * @return $this
     */
    public function setUseBy($use_by)
    {
        $this->container['use_by'] = $use_by;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return int|null
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param int|null $task_id task_id
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets use_file_processed_size
     *
     * @return int|null
     */
    public function getUseFileProcessedSize()
    {
        return $this->container['use_file_processed_size'];
    }

    /**
     * Sets use_file_processed_size
     *
     * @param int|null $use_file_processed_size use_file_processed_size
     *
     * @return $this
     */
    public function setUseFileProcessedSize($use_file_processed_size)
    {
        $this->container['use_file_processed_size'] = $use_file_processed_size;

        return $this;
    }

    /**
     * Gets use_file_size_to_process
     *
     * @return int|null
     */
    public function getUseFileSizeToProcess()
    {
        return $this->container['use_file_size_to_process'];
    }

    /**
     * Sets use_file_size_to_process
     *
     * @param int|null $use_file_size_to_process use_file_size_to_process
     *
     * @return $this
     */
    public function setUseFileSizeToProcess($use_file_size_to_process)
    {
        $this->container['use_file_size_to_process'] = $use_file_size_to_process;

        return $this;
    }

    /**
     * Gets use_file_name_processed
     *
     * @return string|null
     */
    public function getUseFileNameProcessed()
    {
        return $this->container['use_file_name_processed'];
    }

    /**
     * Sets use_file_name_processed
     *
     * @param string|null $use_file_name_processed use_file_name_processed
     *
     * @return $this
     */
    public function setUseFileNameProcessed($use_file_name_processed)
    {
        $this->container['use_file_name_processed'] = $use_file_name_processed;

        return $this;
    }

    /**
     * Gets bandwidth
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param int|null $bandwidth bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;

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


