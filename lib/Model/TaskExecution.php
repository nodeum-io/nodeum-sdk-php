<?php
/**
 * TaskExecution
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
 * TaskExecution Class Doc Comment
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaskExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'task_execution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'task_id' => 'int',
        'name' => 'string',
        'workflow_type' => 'string',
        'workflow_action' => 'string',
        'source_type' => 'string',
        'destination_type' => 'string',
        'status' => 'string',
        'log_time' => 'string',
        'job_started' => 'string',
        'job_finished' => 'string',
        'to_process_size' => 'int',
        'processed_size' => 'int',
        'to_process_files' => 'int',
        'processed_files' => 'int',
        'finalized_files' => 'int',
        'estimation_time' => 'int',
        'bandwidth' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'task_id' => null,
        'name' => null,
        'workflow_type' => null,
        'workflow_action' => null,
        'source_type' => null,
        'destination_type' => null,
        'status' => null,
        'log_time' => null,
        'job_started' => null,
        'job_finished' => null,
        'to_process_size' => null,
        'processed_size' => null,
        'to_process_files' => null,
        'processed_files' => null,
        'finalized_files' => null,
        'estimation_time' => null,
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
        'task_id' => 'task_id',
        'name' => 'name',
        'workflow_type' => 'workflow_type',
        'workflow_action' => 'workflow_action',
        'source_type' => 'source_type',
        'destination_type' => 'destination_type',
        'status' => 'status',
        'log_time' => 'log_time',
        'job_started' => 'job_started',
        'job_finished' => 'job_finished',
        'to_process_size' => 'to_process_size',
        'processed_size' => 'processed_size',
        'to_process_files' => 'to_process_files',
        'processed_files' => 'processed_files',
        'finalized_files' => 'finalized_files',
        'estimation_time' => 'estimation_time',
        'bandwidth' => 'bandwidth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'task_id' => 'setTaskId',
        'name' => 'setName',
        'workflow_type' => 'setWorkflowType',
        'workflow_action' => 'setWorkflowAction',
        'source_type' => 'setSourceType',
        'destination_type' => 'setDestinationType',
        'status' => 'setStatus',
        'log_time' => 'setLogTime',
        'job_started' => 'setJobStarted',
        'job_finished' => 'setJobFinished',
        'to_process_size' => 'setToProcessSize',
        'processed_size' => 'setProcessedSize',
        'to_process_files' => 'setToProcessFiles',
        'processed_files' => 'setProcessedFiles',
        'finalized_files' => 'setFinalizedFiles',
        'estimation_time' => 'setEstimationTime',
        'bandwidth' => 'setBandwidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'task_id' => 'getTaskId',
        'name' => 'getName',
        'workflow_type' => 'getWorkflowType',
        'workflow_action' => 'getWorkflowAction',
        'source_type' => 'getSourceType',
        'destination_type' => 'getDestinationType',
        'status' => 'getStatus',
        'log_time' => 'getLogTime',
        'job_started' => 'getJobStarted',
        'job_finished' => 'getJobFinished',
        'to_process_size' => 'getToProcessSize',
        'processed_size' => 'getProcessedSize',
        'to_process_files' => 'getToProcessFiles',
        'processed_files' => 'getProcessedFiles',
        'finalized_files' => 'getFinalizedFiles',
        'estimation_time' => 'getEstimationTime',
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

    const WORKFLOW_TYPE_ACTIVE_ARCHIVE = 'active_archive';
    const WORKFLOW_TYPE_OFFLINE_ARCHIVE = 'offline_archive';
    const WORKFLOW_TYPE_DATA_EXCHANGE = 'data_exchange';
    const WORKFLOW_TYPE_DATA_MIGRATION = 'data_migration';
    const WORKFLOW_TYPE_MAINTENANCE = 'maintenance';
    const WORKFLOW_TYPE_DATA_ENRICHMENT = 'data_enrichment';
    const WORKFLOW_ACTION_COPY = 'copy';
    const WORKFLOW_ACTION_MOVE = 'move';
    const WORKFLOW_ACTION_ERASE = 'erase';
    const WORKFLOW_ACTION_SCAN = 'scan';
    const WORKFLOW_ACTION_REHYDRATATION = 'rehydratation';
    const WORKFLOW_ACTION_FORMAT = 'format';
    const WORKFLOW_ACTION_CHECK_CONSISTENCY = 'check_consistency';
    const WORKFLOW_ACTION_DUPLICATION = 'duplication';
    const WORKFLOW_ACTION_CACHE_CLEANING = 'cache_cleaning';
    const WORKFLOW_ACTION_EJECTION = 'ejection';
    const WORKFLOW_ACTION_GET_INDEX = 'get_index';
    const WORKFLOW_ACTION_FULL_BACKUP = 'full_backup';
    const WORKFLOW_ACTION_INCREMENTAL_BACKUP = 'incremental_backup';
    const SOURCE_TYPE_CONTAINER = 'container';
    const SOURCE_TYPE_PRIMARY_NAS = 'primary_nas';
    const SOURCE_TYPE_SECONDARY_NAS = 'secondary_nas';
    const SOURCE_TYPE_PRIMARY_CLOUD = 'primary_cloud';
    const SOURCE_TYPE_SECONDARY_CLOUD = 'secondary_cloud';
    const SOURCE_TYPE_SECONDARY_TAPE = 'secondary_tape';
    const DESTINATION_TYPE_CONTAINER = 'container';
    const DESTINATION_TYPE_PRIMARY_NAS = 'primary_nas';
    const DESTINATION_TYPE_SECONDARY_NAS = 'secondary_nas';
    const DESTINATION_TYPE_PRIMARY_CLOUD = 'primary_cloud';
    const DESTINATION_TYPE_SECONDARY_CLOUD = 'secondary_cloud';
    const DESTINATION_TYPE_SECONDARY_TAPE = 'secondary_tape';
    const STATUS_NOT_ACTIVATED = 'not_activated';
    const STATUS_DONE = 'done';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_ERROR = 'error';
    const STATUS_PAUSED = 'paused';
    const STATUS_STOPPED_BY_SYSTEM = 'stopped_by_system';
    const STATUS_IN_QUEUE = 'in_queue';
    const STATUS_FINISHED_WITH_WARNINGS = 'finished_with_warnings';
    const STATUS_CALCULATING = 'calculating';
    const STATUS_STOPPED_BY_USER = 'stopped_by_user';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkflowTypeAllowableValues()
    {
        return [
            self::WORKFLOW_TYPE_ACTIVE_ARCHIVE,
            self::WORKFLOW_TYPE_OFFLINE_ARCHIVE,
            self::WORKFLOW_TYPE_DATA_EXCHANGE,
            self::WORKFLOW_TYPE_DATA_MIGRATION,
            self::WORKFLOW_TYPE_MAINTENANCE,
            self::WORKFLOW_TYPE_DATA_ENRICHMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkflowActionAllowableValues()
    {
        return [
            self::WORKFLOW_ACTION_COPY,
            self::WORKFLOW_ACTION_MOVE,
            self::WORKFLOW_ACTION_ERASE,
            self::WORKFLOW_ACTION_SCAN,
            self::WORKFLOW_ACTION_REHYDRATATION,
            self::WORKFLOW_ACTION_FORMAT,
            self::WORKFLOW_ACTION_CHECK_CONSISTENCY,
            self::WORKFLOW_ACTION_DUPLICATION,
            self::WORKFLOW_ACTION_CACHE_CLEANING,
            self::WORKFLOW_ACTION_EJECTION,
            self::WORKFLOW_ACTION_GET_INDEX,
            self::WORKFLOW_ACTION_FULL_BACKUP,
            self::WORKFLOW_ACTION_INCREMENTAL_BACKUP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_CONTAINER,
            self::SOURCE_TYPE_PRIMARY_NAS,
            self::SOURCE_TYPE_SECONDARY_NAS,
            self::SOURCE_TYPE_PRIMARY_CLOUD,
            self::SOURCE_TYPE_SECONDARY_CLOUD,
            self::SOURCE_TYPE_SECONDARY_TAPE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationTypeAllowableValues()
    {
        return [
            self::DESTINATION_TYPE_CONTAINER,
            self::DESTINATION_TYPE_PRIMARY_NAS,
            self::DESTINATION_TYPE_SECONDARY_NAS,
            self::DESTINATION_TYPE_PRIMARY_CLOUD,
            self::DESTINATION_TYPE_SECONDARY_CLOUD,
            self::DESTINATION_TYPE_SECONDARY_TAPE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_ACTIVATED,
            self::STATUS_DONE,
            self::STATUS_IN_PROGRESS,
            self::STATUS_ERROR,
            self::STATUS_PAUSED,
            self::STATUS_STOPPED_BY_SYSTEM,
            self::STATUS_IN_QUEUE,
            self::STATUS_FINISHED_WITH_WARNINGS,
            self::STATUS_CALCULATING,
            self::STATUS_STOPPED_BY_USER,
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
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['workflow_type'] = isset($data['workflow_type']) ? $data['workflow_type'] : null;
        $this->container['workflow_action'] = isset($data['workflow_action']) ? $data['workflow_action'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['destination_type'] = isset($data['destination_type']) ? $data['destination_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['log_time'] = isset($data['log_time']) ? $data['log_time'] : null;
        $this->container['job_started'] = isset($data['job_started']) ? $data['job_started'] : null;
        $this->container['job_finished'] = isset($data['job_finished']) ? $data['job_finished'] : null;
        $this->container['to_process_size'] = isset($data['to_process_size']) ? $data['to_process_size'] : null;
        $this->container['processed_size'] = isset($data['processed_size']) ? $data['processed_size'] : null;
        $this->container['to_process_files'] = isset($data['to_process_files']) ? $data['to_process_files'] : null;
        $this->container['processed_files'] = isset($data['processed_files']) ? $data['processed_files'] : null;
        $this->container['finalized_files'] = isset($data['finalized_files']) ? $data['finalized_files'] : null;
        $this->container['estimation_time'] = isset($data['estimation_time']) ? $data['estimation_time'] : null;
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

        $allowedValues = $this->getWorkflowTypeAllowableValues();
        if (!is_null($this->container['workflow_type']) && !in_array($this->container['workflow_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'workflow_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWorkflowActionAllowableValues();
        if (!is_null($this->container['workflow_action']) && !in_array($this->container['workflow_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'workflow_action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($this->container['source_type']) && !in_array($this->container['source_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDestinationTypeAllowableValues();
        if (!is_null($this->container['destination_type']) && !in_array($this->container['destination_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets workflow_type
     *
     * @return string|null
     */
    public function getWorkflowType()
    {
        return $this->container['workflow_type'];
    }

    /**
     * Sets workflow_type
     *
     * @param string|null $workflow_type workflow_type
     *
     * @return $this
     */
    public function setWorkflowType($workflow_type)
    {
        $allowedValues = $this->getWorkflowTypeAllowableValues();
        if (!is_null($workflow_type) && !in_array($workflow_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'workflow_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['workflow_type'] = $workflow_type;

        return $this;
    }

    /**
     * Gets workflow_action
     *
     * @return string|null
     */
    public function getWorkflowAction()
    {
        return $this->container['workflow_action'];
    }

    /**
     * Sets workflow_action
     *
     * @param string|null $workflow_action workflow_action
     *
     * @return $this
     */
    public function setWorkflowAction($workflow_action)
    {
        $allowedValues = $this->getWorkflowActionAllowableValues();
        if (!is_null($workflow_action) && !in_array($workflow_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'workflow_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['workflow_action'] = $workflow_action;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string|null $source_type source_type
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($source_type) && !in_array($source_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets destination_type
     *
     * @return string|null
     */
    public function getDestinationType()
    {
        return $this->container['destination_type'];
    }

    /**
     * Sets destination_type
     *
     * @param string|null $destination_type destination_type
     *
     * @return $this
     */
    public function setDestinationType($destination_type)
    {
        $allowedValues = $this->getDestinationTypeAllowableValues();
        if (!is_null($destination_type) && !in_array($destination_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_type'] = $destination_type;

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
     * Gets log_time
     *
     * @return string|null
     */
    public function getLogTime()
    {
        return $this->container['log_time'];
    }

    /**
     * Sets log_time
     *
     * @param string|null $log_time log_time
     *
     * @return $this
     */
    public function setLogTime($log_time)
    {
        $this->container['log_time'] = $log_time;

        return $this;
    }

    /**
     * Gets job_started
     *
     * @return string|null
     */
    public function getJobStarted()
    {
        return $this->container['job_started'];
    }

    /**
     * Sets job_started
     *
     * @param string|null $job_started job_started
     *
     * @return $this
     */
    public function setJobStarted($job_started)
    {
        $this->container['job_started'] = $job_started;

        return $this;
    }

    /**
     * Gets job_finished
     *
     * @return string|null
     */
    public function getJobFinished()
    {
        return $this->container['job_finished'];
    }

    /**
     * Sets job_finished
     *
     * @param string|null $job_finished job_finished
     *
     * @return $this
     */
    public function setJobFinished($job_finished)
    {
        $this->container['job_finished'] = $job_finished;

        return $this;
    }

    /**
     * Gets to_process_size
     *
     * @return int|null
     */
    public function getToProcessSize()
    {
        return $this->container['to_process_size'];
    }

    /**
     * Sets to_process_size
     *
     * @param int|null $to_process_size to_process_size
     *
     * @return $this
     */
    public function setToProcessSize($to_process_size)
    {
        $this->container['to_process_size'] = $to_process_size;

        return $this;
    }

    /**
     * Gets processed_size
     *
     * @return int|null
     */
    public function getProcessedSize()
    {
        return $this->container['processed_size'];
    }

    /**
     * Sets processed_size
     *
     * @param int|null $processed_size processed_size
     *
     * @return $this
     */
    public function setProcessedSize($processed_size)
    {
        $this->container['processed_size'] = $processed_size;

        return $this;
    }

    /**
     * Gets to_process_files
     *
     * @return int|null
     */
    public function getToProcessFiles()
    {
        return $this->container['to_process_files'];
    }

    /**
     * Sets to_process_files
     *
     * @param int|null $to_process_files to_process_files
     *
     * @return $this
     */
    public function setToProcessFiles($to_process_files)
    {
        $this->container['to_process_files'] = $to_process_files;

        return $this;
    }

    /**
     * Gets processed_files
     *
     * @return int|null
     */
    public function getProcessedFiles()
    {
        return $this->container['processed_files'];
    }

    /**
     * Sets processed_files
     *
     * @param int|null $processed_files processed_files
     *
     * @return $this
     */
    public function setProcessedFiles($processed_files)
    {
        $this->container['processed_files'] = $processed_files;

        return $this;
    }

    /**
     * Gets finalized_files
     *
     * @return int|null
     */
    public function getFinalizedFiles()
    {
        return $this->container['finalized_files'];
    }

    /**
     * Sets finalized_files
     *
     * @param int|null $finalized_files finalized_files
     *
     * @return $this
     */
    public function setFinalizedFiles($finalized_files)
    {
        $this->container['finalized_files'] = $finalized_files;

        return $this;
    }

    /**
     * Gets estimation_time
     *
     * @return int|null
     */
    public function getEstimationTime()
    {
        return $this->container['estimation_time'];
    }

    /**
     * Sets estimation_time
     *
     * @param int|null $estimation_time estimation_time
     *
     * @return $this
     */
    public function setEstimationTime($estimation_time)
    {
        $this->container['estimation_time'] = $estimation_time;

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


