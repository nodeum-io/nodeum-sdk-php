# NodeumSDK\Client\TaskCallbacksApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaskCallback**](TaskCallbacksApi.md#createTaskCallback) | **POST** /tasks/{task_id}/task_callbacks | Creates a new task callback.
[**destroyTaskCallback**](TaskCallbacksApi.md#destroyTaskCallback) | **DELETE** /tasks/{task_id}/task_callbacks/{task_callback_id} | Destroys a specific task callback.
[**indexTaskCallbacks**](TaskCallbacksApi.md#indexTaskCallbacks) | **GET** /tasks/{task_id}/task_callbacks | Lists all task callbacks.
[**showTaskCallback**](TaskCallbacksApi.md#showTaskCallback) | **GET** /tasks/{task_id}/task_callbacks/{task_callback_id} | Displays a specific task callback.
[**updateTaskCallback**](TaskCallbacksApi.md#updateTaskCallback) | **PUT** /tasks/{task_id}/task_callbacks/{task_callback_id} | Updates a specific task callback.



## createTaskCallback

> \NodeumSDK\Client\Model\TaskCallback createTaskCallback($task_id, $task_callback_body)

Creates a new task callback.

**API Key Scope**: task_callbacks / create

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


$apiInstance = new NodeumSDK\Client\Api\TaskCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_callback_body = new \NodeumSDK\Client\Model\TaskCallback(); // \NodeumSDK\Client\Model\TaskCallback | 

try {
    $result = $apiInstance->createTaskCallback($task_id, $task_callback_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCallbacksApi->createTaskCallback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_callback_body** | [**\NodeumSDK\Client\Model\TaskCallback**](../Model/TaskCallback.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskCallback**](../Model/TaskCallback.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTaskCallback

> destroyTaskCallback($task_id, $task_callback_id)

Destroys a specific task callback.

**API Key Scope**: task_callbacks / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TaskCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_callback_id = 56; // int | Numeric ID of task callback.

try {
    $apiInstance->destroyTaskCallback($task_id, $task_callback_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskCallbacksApi->destroyTaskCallback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_callback_id** | **int**| Numeric ID of task callback. |

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


## indexTaskCallbacks

> \NodeumSDK\Client\Model\TaskCallbackCollection indexTaskCallbacks($task_id, $limit, $offset, $sort_by, $id, $type, $script)

Lists all task callbacks.

**API Key Scope**: task_callbacks / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$type = 'type_example'; // string | Filter on type
$script = 'script_example'; // string | Filter on task callback script

try {
    $result = $apiInstance->indexTaskCallbacks($task_id, $limit, $offset, $sort_by, $id, $type, $script);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCallbacksApi->indexTaskCallbacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **type** | **string**| Filter on type | [optional]
 **script** | **string**| Filter on task callback script | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskCallbackCollection**](../Model/TaskCallbackCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskCallback

> \NodeumSDK\Client\Model\TaskCallback showTaskCallback($task_id, $task_callback_id)

Displays a specific task callback.

**API Key Scope**: task_callbacks / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_callback_id = 56; // int | Numeric ID of task callback.

try {
    $result = $apiInstance->showTaskCallback($task_id, $task_callback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCallbacksApi->showTaskCallback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_callback_id** | **int**| Numeric ID of task callback. |

### Return type

[**\NodeumSDK\Client\Model\TaskCallback**](../Model/TaskCallback.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTaskCallback

> \NodeumSDK\Client\Model\TaskCallback updateTaskCallback($task_id, $task_callback_id, $task_callback_body)

Updates a specific task callback.

**API Key Scope**: task_callbacks / update

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


$apiInstance = new NodeumSDK\Client\Api\TaskCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_callback_id = 56; // int | Numeric ID of task callback.
$task_callback_body = new \NodeumSDK\Client\Model\TaskCallback(); // \NodeumSDK\Client\Model\TaskCallback | 

try {
    $result = $apiInstance->updateTaskCallback($task_id, $task_callback_id, $task_callback_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCallbacksApi->updateTaskCallback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_callback_id** | **int**| Numeric ID of task callback. |
 **task_callback_body** | [**\NodeumSDK\Client\Model\TaskCallback**](../Model/TaskCallback.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskCallback**](../Model/TaskCallback.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

