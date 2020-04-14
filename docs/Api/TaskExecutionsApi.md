# NodeumSDK\Client\TaskExecutionsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indexTaskExecutions**](TaskExecutionsApi.md#indexTaskExecutions) | **GET** /task_executions | Lists all task executions.
[**indexTaskExecutionsByTask**](TaskExecutionsApi.md#indexTaskExecutionsByTask) | **GET** /tasks/{task_id}/task_executions | Lists all task executions.
[**showTaskExecution**](TaskExecutionsApi.md#showTaskExecution) | **GET** /task_executions/{task_execution_id} | Displays a specific task execution.
[**showTaskExecutionByTask**](TaskExecutionsApi.md#showTaskExecutionByTask) | **GET** /tasks/{task_id}/task_executions/{task_execution_id} | Displays a specific task execution.



## indexTaskExecutions

> \NodeumSDK\Client\Model\TaskExecutionCollection indexTaskExecutions($limit, $offset, $sort_by, $complete_list, $id, $task_id, $name, $workflow_type, $workflow_action, $source_type, $destination_type, $status, $log_time, $job_started, $job_finished, $creation_date, $modification_date, $to_process_size, $processed_size, $to_process_files, $processed_files, $finalized_files, $estimation_time, $bandwidth)

Lists all task executions.

**API Key Scope**: task_executions / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskExecutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$complete_list = true; // bool | If `false`, only includes the last correct execution of a task.
$id = 'id_example'; // string | Filter on id
$task_id = 'task_id_example'; // string | Filter on task id
$name = 'name_example'; // string | Filter on name
$workflow_type = 'workflow_type_example'; // string | Filter on task workflow type
$workflow_action = 'workflow_action_example'; // string | Filter on task workflow action
$source_type = 'source_type_example'; // string | Filter on task source type
$destination_type = 'destination_type_example'; // string | Filter on task destination type
$status = 'status_example'; // string | Filter on status
$log_time = 'log_time_example'; // string | Filter on log time
$job_started = 'job_started_example'; // string | Filter on job started
$job_finished = 'job_finished_example'; // string | Filter on job finished
$creation_date = 'creation_date_example'; // string | Filter on creation date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$to_process_size = 'to_process_size_example'; // string | Filter on to process size
$processed_size = 'processed_size_example'; // string | Filter on processed size
$to_process_files = 'to_process_files_example'; // string | Filter on to process files
$processed_files = 'processed_files_example'; // string | Filter on processed files
$finalized_files = 'finalized_files_example'; // string | Filter on finalized files
$estimation_time = 'estimation_time_example'; // string | Filter on estimation time
$bandwidth = 'bandwidth_example'; // string | Filter on bandwidth

try {
    $result = $apiInstance->indexTaskExecutions($limit, $offset, $sort_by, $complete_list, $id, $task_id, $name, $workflow_type, $workflow_action, $source_type, $destination_type, $status, $log_time, $job_started, $job_finished, $creation_date, $modification_date, $to_process_size, $processed_size, $to_process_files, $processed_files, $finalized_files, $estimation_time, $bandwidth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskExecutionsApi->indexTaskExecutions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **complete_list** | **bool**| If &#x60;false&#x60;, only includes the last correct execution of a task. | [optional] [default to true]
 **id** | **string**| Filter on id | [optional]
 **task_id** | **string**| Filter on task id | [optional]
 **name** | **string**| Filter on name | [optional]
 **workflow_type** | **string**| Filter on task workflow type | [optional]
 **workflow_action** | **string**| Filter on task workflow action | [optional]
 **source_type** | **string**| Filter on task source type | [optional]
 **destination_type** | **string**| Filter on task destination type | [optional]
 **status** | **string**| Filter on status | [optional]
 **log_time** | **string**| Filter on log time | [optional]
 **job_started** | **string**| Filter on job started | [optional]
 **job_finished** | **string**| Filter on job finished | [optional]
 **creation_date** | **string**| Filter on creation date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **to_process_size** | **string**| Filter on to process size | [optional]
 **processed_size** | **string**| Filter on processed size | [optional]
 **to_process_files** | **string**| Filter on to process files | [optional]
 **processed_files** | **string**| Filter on processed files | [optional]
 **finalized_files** | **string**| Filter on finalized files | [optional]
 **estimation_time** | **string**| Filter on estimation time | [optional]
 **bandwidth** | **string**| Filter on bandwidth | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskExecutionCollection**](../Model/TaskExecutionCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTaskExecutionsByTask

> \NodeumSDK\Client\Model\TaskExecutionCollection indexTaskExecutionsByTask($task_id, $limit, $offset, $sort_by, $id, $name, $workflow_type, $workflow_action, $source_type, $destination_type, $status, $log_time, $job_started, $job_finished, $to_process_size, $processed_size, $to_process_files, $processed_files, $finalized_files, $estimation_time, $bandwidth)

Lists all task executions.

**API Key Scope**: task_executions / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskExecutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Filter on task id
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$name = 'name_example'; // string | Filter on name
$workflow_type = 'workflow_type_example'; // string | Filter on task workflow type
$workflow_action = 'workflow_action_example'; // string | Filter on task workflow action
$source_type = 'source_type_example'; // string | Filter on task source type
$destination_type = 'destination_type_example'; // string | Filter on task destination type
$status = 'status_example'; // string | Filter on status
$log_time = 'log_time_example'; // string | Filter on log time
$job_started = 'job_started_example'; // string | Filter on job started
$job_finished = 'job_finished_example'; // string | Filter on job finished
$to_process_size = 'to_process_size_example'; // string | Filter on to process size
$processed_size = 'processed_size_example'; // string | Filter on processed size
$to_process_files = 'to_process_files_example'; // string | Filter on to process files
$processed_files = 'processed_files_example'; // string | Filter on processed files
$finalized_files = 'finalized_files_example'; // string | Filter on finalized files
$estimation_time = 'estimation_time_example'; // string | Filter on estimation time
$bandwidth = 'bandwidth_example'; // string | Filter on bandwidth

try {
    $result = $apiInstance->indexTaskExecutionsByTask($task_id, $limit, $offset, $sort_by, $id, $name, $workflow_type, $workflow_action, $source_type, $destination_type, $status, $log_time, $job_started, $job_finished, $to_process_size, $processed_size, $to_process_files, $processed_files, $finalized_files, $estimation_time, $bandwidth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskExecutionsApi->indexTaskExecutionsByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Filter on task id | [optional]
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **name** | **string**| Filter on name | [optional]
 **workflow_type** | **string**| Filter on task workflow type | [optional]
 **workflow_action** | **string**| Filter on task workflow action | [optional]
 **source_type** | **string**| Filter on task source type | [optional]
 **destination_type** | **string**| Filter on task destination type | [optional]
 **status** | **string**| Filter on status | [optional]
 **log_time** | **string**| Filter on log time | [optional]
 **job_started** | **string**| Filter on job started | [optional]
 **job_finished** | **string**| Filter on job finished | [optional]
 **to_process_size** | **string**| Filter on to process size | [optional]
 **processed_size** | **string**| Filter on processed size | [optional]
 **to_process_files** | **string**| Filter on to process files | [optional]
 **processed_files** | **string**| Filter on processed files | [optional]
 **finalized_files** | **string**| Filter on finalized files | [optional]
 **estimation_time** | **string**| Filter on estimation time | [optional]
 **bandwidth** | **string**| Filter on bandwidth | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskExecutionCollection**](../Model/TaskExecutionCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskExecution

> \NodeumSDK\Client\Model\TaskExecution showTaskExecution($task_execution_id)

Displays a specific task execution.

**API Key Scope**: task_executions / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskExecutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.

try {
    $result = $apiInstance->showTaskExecution($task_execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskExecutionsApi->showTaskExecution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_execution_id** | **string**| Numeric ID of task execution. |

### Return type

[**\NodeumSDK\Client\Model\TaskExecution**](../Model/TaskExecution.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskExecutionByTask

> \NodeumSDK\Client\Model\TaskExecution showTaskExecutionByTask($task_id, $task_execution_id)

Displays a specific task execution.

**API Key Scope**: task_executions / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskExecutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.

try {
    $result = $apiInstance->showTaskExecutionByTask($task_id, $task_execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskExecutionsApi->showTaskExecutionByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_execution_id** | **string**| Numeric ID of task execution. |

### Return type

[**\NodeumSDK\Client\Model\TaskExecution**](../Model/TaskExecution.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

