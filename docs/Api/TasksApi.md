# NodeumSDK\Client\TasksApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTask**](TasksApi.md#createTask) | **POST** /tasks | Creates a new task.
[**destroyTask**](TasksApi.md#destroyTask) | **DELETE** /tasks/{task_id} | Destroys a specific task.
[**indexTasks**](TasksApi.md#indexTasks) | **GET** /tasks | Lists all tasks.
[**pauseTask**](TasksApi.md#pauseTask) | **PUT** /tasks/{task_id}/action/pause | Pause a task.
[**pauseTaskResult**](TasksApi.md#pauseTaskResult) | **GET** /tasks/{task_id}/action/pause | Check result of a task pause request.
[**resumeTask**](TasksApi.md#resumeTask) | **PUT** /tasks/{task_id}/action/resume | Resume a task.
[**resumeTaskResult**](TasksApi.md#resumeTaskResult) | **GET** /tasks/{task_id}/action/resume | Check result of a task resume request.
[**runTask**](TasksApi.md#runTask) | **PUT** /tasks/{task_id}/action/run | Run a task.
[**runTaskResult**](TasksApi.md#runTaskResult) | **GET** /tasks/{task_id}/action/run | Check result of a task run request.
[**showTask**](TasksApi.md#showTask) | **GET** /tasks/{task_id} | Displays a specific task.
[**stopTask**](TasksApi.md#stopTask) | **PUT** /tasks/{task_id}/action/stop | Stop a task.
[**stopTaskResult**](TasksApi.md#stopTaskResult) | **GET** /tasks/{task_id}/action/stop | Check result of a task stop request.
[**updateTask**](TasksApi.md#updateTask) | **PUT** /tasks/{task_id} | Updates a specific task.



## createTask

> \NodeumSDK\Client\Model\Task createTask($task_body)

Creates a new task.

**API Key Scope**: tasks / create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_body = new \NodeumSDK\Client\Model\Task(); // \NodeumSDK\Client\Model\Task | 

try {
    $result = $apiInstance->createTask($task_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->createTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_body** | [**\NodeumSDK\Client\Model\Task**](../Model/Task.md)|  |

### Return type

[**\NodeumSDK\Client\Model\Task**](../Model/Task.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTask

> destroyTask($task_id)

Destroys a specific task.

**API Key Scope**: tasks / destroy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $apiInstance->destroyTask($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->destroyTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTasks

> \NodeumSDK\Client\Model\TaskCollection indexTasks($limit, $offset, $sort_by, $id, $name, $comment, $workflow_type, $workflow_action, $source_type, $destination_type, $priority, $conflict_resolution, $action, $activate, $creation_date, $creation_username, $modification_date, $modification_username, $job_started, $job_finished, $status, $processed_size, $to_process_size, $source_pool_id, $source_pool_name, $source_tape_id, $source_tape_barcode, $destination_pool_id, $destination_pool_name, $destination_tape_id, $destination_tape_barcode)

Lists all tasks.

**API Key Scope**: tasks / index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$name = 'name_example'; // string | Filter on name
$comment = 'comment_example'; // string | Filter on comment
$workflow_type = 'workflow_type_example'; // string | Filter on task workflow type
$workflow_action = 'workflow_action_example'; // string | Filter on task workflow action
$source_type = 'source_type_example'; // string | Filter on task source type
$destination_type = 'destination_type_example'; // string | Filter on task destination type
$priority = 'priority_example'; // string | Filter on priority
$conflict_resolution = 'conflict_resolution_example'; // string | Filter on conflict resolution
$action = 'action_example'; // string | Filter on action
$activate = 'activate_example'; // string | Filter on activate
$creation_date = 'creation_date_example'; // string | Filter on creation date
$creation_username = 'creation_username_example'; // string | Filter on creation username
$modification_date = 'modification_date_example'; // string | Filter on modification date
$modification_username = 'modification_username_example'; // string | Filter on modification username
$job_started = 'job_started_example'; // string | Filter on job started
$job_finished = 'job_finished_example'; // string | Filter on job finished
$status = 'status_example'; // string | Filter on status
$processed_size = 'processed_size_example'; // string | Filter on processed size
$to_process_size = 'to_process_size_example'; // string | Filter on to process size
$source_pool_id = 'source_pool_id_example'; // string | Filter on task source pool id
$source_pool_name = 'source_pool_name_example'; // string | Filter on task source pool name
$source_tape_id = 'source_tape_id_example'; // string | Filter on task source tape id
$source_tape_barcode = 'source_tape_barcode_example'; // string | Filter on task source tape barcode
$destination_pool_id = 'destination_pool_id_example'; // string | Filter on task destination pool id
$destination_pool_name = 'destination_pool_name_example'; // string | Filter on task destination pool name
$destination_tape_id = 'destination_tape_id_example'; // string | Filter on task destination tape id
$destination_tape_barcode = 'destination_tape_barcode_example'; // string | Filter on task destination tape barcode

try {
    $result = $apiInstance->indexTasks($limit, $offset, $sort_by, $id, $name, $comment, $workflow_type, $workflow_action, $source_type, $destination_type, $priority, $conflict_resolution, $action, $activate, $creation_date, $creation_username, $modification_date, $modification_username, $job_started, $job_finished, $status, $processed_size, $to_process_size, $source_pool_id, $source_pool_name, $source_tape_id, $source_tape_barcode, $destination_pool_id, $destination_pool_name, $destination_tape_id, $destination_tape_barcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->indexTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **name** | **string**| Filter on name | [optional]
 **comment** | **string**| Filter on comment | [optional]
 **workflow_type** | **string**| Filter on task workflow type | [optional]
 **workflow_action** | **string**| Filter on task workflow action | [optional]
 **source_type** | **string**| Filter on task source type | [optional]
 **destination_type** | **string**| Filter on task destination type | [optional]
 **priority** | **string**| Filter on priority | [optional]
 **conflict_resolution** | **string**| Filter on conflict resolution | [optional]
 **action** | **string**| Filter on action | [optional]
 **activate** | **string**| Filter on activate | [optional]
 **creation_date** | **string**| Filter on creation date | [optional]
 **creation_username** | **string**| Filter on creation username | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **modification_username** | **string**| Filter on modification username | [optional]
 **job_started** | **string**| Filter on job started | [optional]
 **job_finished** | **string**| Filter on job finished | [optional]
 **status** | **string**| Filter on status | [optional]
 **processed_size** | **string**| Filter on processed size | [optional]
 **to_process_size** | **string**| Filter on to process size | [optional]
 **source_pool_id** | **string**| Filter on task source pool id | [optional]
 **source_pool_name** | **string**| Filter on task source pool name | [optional]
 **source_tape_id** | **string**| Filter on task source tape id | [optional]
 **source_tape_barcode** | **string**| Filter on task source tape barcode | [optional]
 **destination_pool_id** | **string**| Filter on task destination pool id | [optional]
 **destination_pool_name** | **string**| Filter on task destination pool name | [optional]
 **destination_tape_id** | **string**| Filter on task destination tape id | [optional]
 **destination_tape_barcode** | **string**| Filter on task destination tape barcode | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskCollection**](../Model/TaskCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pauseTask

> \NodeumSDK\Client\Model\ActiveJobStatus pauseTask($task_id)

Pause a task.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $result = $apiInstance->pauseTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->pauseTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pauseTaskResult

> \NodeumSDK\Client\Model\ActiveJobStatus pauseTaskResult($task_id, $job_id)

Check result of a task pause request.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->pauseTaskResult($task_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->pauseTaskResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resumeTask

> \NodeumSDK\Client\Model\ActiveJobStatus resumeTask($task_id)

Resume a task.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $result = $apiInstance->resumeTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->resumeTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resumeTaskResult

> \NodeumSDK\Client\Model\ActiveJobStatus resumeTaskResult($task_id, $job_id)

Check result of a task resume request.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->resumeTaskResult($task_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->resumeTaskResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## runTask

> \NodeumSDK\Client\Model\ActiveJobStatus runTask($task_id)

Run a task.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $result = $apiInstance->runTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->runTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## runTaskResult

> \NodeumSDK\Client\Model\ActiveJobStatus runTaskResult($task_id, $job_id)

Check result of a task run request.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->runTaskResult($task_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->runTaskResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTask

> \NodeumSDK\Client\Model\Task showTask($task_id)

Displays a specific task.

**API Key Scope**: tasks / show

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $result = $apiInstance->showTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->showTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |

### Return type

[**\NodeumSDK\Client\Model\Task**](../Model/Task.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stopTask

> \NodeumSDK\Client\Model\ActiveJobStatus stopTask($task_id)

Stop a task.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $result = $apiInstance->stopTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->stopTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stopTaskResult

> \NodeumSDK\Client\Model\ActiveJobStatus stopTaskResult($task_id, $job_id)

Check result of a task stop request.

**API Key Scope**: tasks / action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->stopTaskResult($task_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->stopTaskResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTask

> \NodeumSDK\Client\Model\Task updateTask($task_id, $task_body)

Updates a specific task.

**API Key Scope**: tasks / update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: BearerAuth
$config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NodeumSDK\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NodeumSDK\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_body = new \NodeumSDK\Client\Model\Task(); // \NodeumSDK\Client\Model\Task | 

try {
    $result = $apiInstance->updateTask($task_id, $task_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_body** | [**\NodeumSDK\Client\Model\Task**](../Model/Task.md)|  |

### Return type

[**\NodeumSDK\Client\Model\Task**](../Model/Task.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

