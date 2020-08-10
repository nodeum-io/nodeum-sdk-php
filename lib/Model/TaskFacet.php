<?php
/**
 * TaskFacet
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
use \NodeumSDK\Client\ObjectSerializer;

/**
 * TaskFacet Class Doc Comment
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaskFacet extends DefaultFacet 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'task_facet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to_process_size_sum' => 'int',
        'processed_size_sum' => 'int',
        'to_process_files_sum' => 'int',
        'processed_files_sum' => 'int',
        'finalized_files_sum' => 'int',
        'bandwidth_avg' => 'int',
        'bandwidth_count' => 'int',
        'tasks_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'to_process_size_sum' => null,
        'processed_size_sum' => null,
        'to_process_files_sum' => null,
        'processed_files_sum' => null,
        'finalized_files_sum' => null,
        'bandwidth_avg' => null,
        'bandwidth_count' => null,
        'tasks_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'to_process_size_sum' => 'to_process_size_sum',
        'processed_size_sum' => 'processed_size_sum',
        'to_process_files_sum' => 'to_process_files_sum',
        'processed_files_sum' => 'processed_files_sum',
        'finalized_files_sum' => 'finalized_files_sum',
        'bandwidth_avg' => 'bandwidth_avg',
        'bandwidth_count' => 'bandwidth_count',
        'tasks_count' => 'tasks_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to_process_size_sum' => 'setToProcessSizeSum',
        'processed_size_sum' => 'setProcessedSizeSum',
        'to_process_files_sum' => 'setToProcessFilesSum',
        'processed_files_sum' => 'setProcessedFilesSum',
        'finalized_files_sum' => 'setFinalizedFilesSum',
        'bandwidth_avg' => 'setBandwidthAvg',
        'bandwidth_count' => 'setBandwidthCount',
        'tasks_count' => 'setTasksCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to_process_size_sum' => 'getToProcessSizeSum',
        'processed_size_sum' => 'getProcessedSizeSum',
        'to_process_files_sum' => 'getToProcessFilesSum',
        'processed_files_sum' => 'getProcessedFilesSum',
        'finalized_files_sum' => 'getFinalizedFilesSum',
        'bandwidth_avg' => 'getBandwidthAvg',
        'bandwidth_count' => 'getBandwidthCount',
        'tasks_count' => 'getTasksCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['to_process_size_sum'] = isset($data['to_process_size_sum']) ? $data['to_process_size_sum'] : null;
        $this->container['processed_size_sum'] = isset($data['processed_size_sum']) ? $data['processed_size_sum'] : null;
        $this->container['to_process_files_sum'] = isset($data['to_process_files_sum']) ? $data['to_process_files_sum'] : null;
        $this->container['processed_files_sum'] = isset($data['processed_files_sum']) ? $data['processed_files_sum'] : null;
        $this->container['finalized_files_sum'] = isset($data['finalized_files_sum']) ? $data['finalized_files_sum'] : null;
        $this->container['bandwidth_avg'] = isset($data['bandwidth_avg']) ? $data['bandwidth_avg'] : null;
        $this->container['bandwidth_count'] = isset($data['bandwidth_count']) ? $data['bandwidth_count'] : null;
        $this->container['tasks_count'] = isset($data['tasks_count']) ? $data['tasks_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets to_process_size_sum
     *
     * @return int|null
     */
    public function getToProcessSizeSum()
    {
        return $this->container['to_process_size_sum'];
    }

    /**
     * Sets to_process_size_sum
     *
     * @param int|null $to_process_size_sum to_process_size_sum
     *
     * @return $this
     */
    public function setToProcessSizeSum($to_process_size_sum)
    {
        $this->container['to_process_size_sum'] = $to_process_size_sum;

        return $this;
    }

    /**
     * Gets processed_size_sum
     *
     * @return int|null
     */
    public function getProcessedSizeSum()
    {
        return $this->container['processed_size_sum'];
    }

    /**
     * Sets processed_size_sum
     *
     * @param int|null $processed_size_sum processed_size_sum
     *
     * @return $this
     */
    public function setProcessedSizeSum($processed_size_sum)
    {
        $this->container['processed_size_sum'] = $processed_size_sum;

        return $this;
    }

    /**
     * Gets to_process_files_sum
     *
     * @return int|null
     */
    public function getToProcessFilesSum()
    {
        return $this->container['to_process_files_sum'];
    }

    /**
     * Sets to_process_files_sum
     *
     * @param int|null $to_process_files_sum to_process_files_sum
     *
     * @return $this
     */
    public function setToProcessFilesSum($to_process_files_sum)
    {
        $this->container['to_process_files_sum'] = $to_process_files_sum;

        return $this;
    }

    /**
     * Gets processed_files_sum
     *
     * @return int|null
     */
    public function getProcessedFilesSum()
    {
        return $this->container['processed_files_sum'];
    }

    /**
     * Sets processed_files_sum
     *
     * @param int|null $processed_files_sum processed_files_sum
     *
     * @return $this
     */
    public function setProcessedFilesSum($processed_files_sum)
    {
        $this->container['processed_files_sum'] = $processed_files_sum;

        return $this;
    }

    /**
     * Gets finalized_files_sum
     *
     * @return int|null
     */
    public function getFinalizedFilesSum()
    {
        return $this->container['finalized_files_sum'];
    }

    /**
     * Sets finalized_files_sum
     *
     * @param int|null $finalized_files_sum finalized_files_sum
     *
     * @return $this
     */
    public function setFinalizedFilesSum($finalized_files_sum)
    {
        $this->container['finalized_files_sum'] = $finalized_files_sum;

        return $this;
    }

    /**
     * Gets bandwidth_avg
     *
     * @return int|null
     */
    public function getBandwidthAvg()
    {
        return $this->container['bandwidth_avg'];
    }

    /**
     * Sets bandwidth_avg
     *
     * @param int|null $bandwidth_avg bandwidth_avg
     *
     * @return $this
     */
    public function setBandwidthAvg($bandwidth_avg)
    {
        $this->container['bandwidth_avg'] = $bandwidth_avg;

        return $this;
    }

    /**
     * Gets bandwidth_count
     *
     * @return int|null
     */
    public function getBandwidthCount()
    {
        return $this->container['bandwidth_count'];
    }

    /**
     * Sets bandwidth_count
     *
     * @param int|null $bandwidth_count bandwidth_count
     *
     * @return $this
     */
    public function setBandwidthCount($bandwidth_count)
    {
        $this->container['bandwidth_count'] = $bandwidth_count;

        return $this;
    }

    /**
     * Gets tasks_count
     *
     * @return int|null
     */
    public function getTasksCount()
    {
        return $this->container['tasks_count'];
    }

    /**
     * Sets tasks_count
     *
     * @param int|null $tasks_count tasks_count
     *
     * @return $this
     */
    public function setTasksCount($tasks_count)
    {
        $this->container['tasks_count'] = $tasks_count;

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


