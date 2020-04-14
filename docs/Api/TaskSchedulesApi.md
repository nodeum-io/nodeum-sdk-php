# NodeumSDK\Client\TaskSchedulesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaskSchedule**](TaskSchedulesApi.md#createTaskSchedule) | **POST** /tasks/{task_id}/task_schedule | Creates a new task schedule. Only one should be created.
[**destroyTaskSchedule**](TaskSchedulesApi.md#destroyTaskSchedule) | **DELETE** /tasks/{task_id}/task_schedule | Destroys the task schedule.
[**indexTaskSchedules**](TaskSchedulesApi.md#indexTaskSchedules) | **GET** /task_schedules | Lists all task schedules.
[**showTaskSchedule**](TaskSchedulesApi.md#showTaskSchedule) | **GET** /tasks/{task_id}/task_schedule | Displays the task schedule.
[**updateTaskSchedule**](TaskSchedulesApi.md#updateTaskSchedule) | **PUT** /tasks/{task_id}/task_schedule | Updates the existing task schedule.



## createTaskSchedule

> \NodeumSDK\Client\Model\TaskSchedule createTaskSchedule($task_id, $task_schedule_body)

Creates a new task schedule. Only one should be created.

**API Key Scope**: task_schedules / create

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


$apiInstance = new NodeumSDK\Client\Api\TaskSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_schedule_body = new \NodeumSDK\Client\Model\TaskSchedule(); // \NodeumSDK\Client\Model\TaskSchedule | 

try {
    $result = $apiInstance->createTaskSchedule($task_id, $task_schedule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulesApi->createTaskSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_schedule_body** | [**\NodeumSDK\Client\Model\TaskSchedule**](../Model/TaskSchedule.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskSchedule**](../Model/TaskSchedule.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTaskSchedule

> destroyTaskSchedule($task_id)

Destroys the task schedule.

**API Key Scope**: task_schedules / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TaskSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $apiInstance->destroyTaskSchedule($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulesApi->destroyTaskSchedule: ', $e->getMessage(), PHP_EOL;
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


## indexTaskSchedules

> \NodeumSDK\Client\Model\TaskScheduleCollection indexTaskSchedules($with_next, $limit, $offset, $sort_by, $id, $rrule, $done, $task_id)

Lists all task schedules.

**API Key Scope**: task_schedules / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with_next = true; // bool | Display the next scheduled date, and information about missing executions.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$rrule = 'rrule_example'; // string | Filter on RRule of schedule
$done = 'done_example'; // string | Filter on done schedule
$task_id = 'task_id_example'; // string | Filter on task id

try {
    $result = $apiInstance->indexTaskSchedules($with_next, $limit, $offset, $sort_by, $id, $rrule, $done, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulesApi->indexTaskSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_next** | **bool**| Display the next scheduled date, and information about missing executions. | [optional] [default to true]
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **rrule** | **string**| Filter on RRule of schedule | [optional]
 **done** | **string**| Filter on done schedule | [optional]
 **task_id** | **string**| Filter on task id | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskScheduleCollection**](../Model/TaskScheduleCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskSchedule

> \NodeumSDK\Client\Model\TaskSchedule showTaskSchedule($task_id)

Displays the task schedule.

**API Key Scope**: task_schedules / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.

try {
    $result = $apiInstance->showTaskSchedule($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulesApi->showTaskSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |

### Return type

[**\NodeumSDK\Client\Model\TaskSchedule**](../Model/TaskSchedule.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTaskSchedule

> \NodeumSDK\Client\Model\TaskSchedule updateTaskSchedule($task_id, $task_schedule_body)

Updates the existing task schedule.

**API Key Scope**: task_schedules / update

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


$apiInstance = new NodeumSDK\Client\Api\TaskSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_schedule_body = new \NodeumSDK\Client\Model\TaskSchedule(); // \NodeumSDK\Client\Model\TaskSchedule | 

try {
    $result = $apiInstance->updateTaskSchedule($task_id, $task_schedule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulesApi->updateTaskSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_schedule_body** | [**\NodeumSDK\Client\Model\TaskSchedule**](../Model/TaskSchedule.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskSchedule**](../Model/TaskSchedule.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

