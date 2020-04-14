# NodeumSDK\Client\TaskSourcesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaskSource**](TaskSourcesApi.md#createTaskSource) | **POST** /tasks/{task_id}/task_sources | Creates a new task source.
[**destroyTaskSource**](TaskSourcesApi.md#destroyTaskSource) | **DELETE** /tasks/{task_id}/task_sources/{task_source_id} | Destroys a specific task source.
[**indexTaskSources**](TaskSourcesApi.md#indexTaskSources) | **GET** /tasks/{task_id}/task_sources | Lists all task sources.
[**showTaskSource**](TaskSourcesApi.md#showTaskSource) | **GET** /tasks/{task_id}/task_sources/{task_source_id} | Displays a specific task source.
[**updateTaskSource**](TaskSourcesApi.md#updateTaskSource) | **PUT** /tasks/{task_id}/task_sources/{task_source_id} | Updates a specific task source.



## createTaskSource

> \NodeumSDK\Client\Model\TaskSourceDown createTaskSource($task_id, $task_source_body)

Creates a new task source.

**API Key Scope**: task_sources / create

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


$apiInstance = new NodeumSDK\Client\Api\TaskSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_source_body = new \NodeumSDK\Client\Model\TaskSourceUp(); // \NodeumSDK\Client\Model\TaskSourceUp | 

try {
    $result = $apiInstance->createTaskSource($task_id, $task_source_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSourcesApi->createTaskSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_source_body** | [**\NodeumSDK\Client\Model\TaskSourceUp**](../Model/TaskSourceUp.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskSourceDown**](../Model/TaskSourceDown.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTaskSource

> destroyTaskSource($task_id, $task_source_id)

Destroys a specific task source.

**API Key Scope**: task_sources / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TaskSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_source_id = 56; // int | Numeric ID of task source.

try {
    $apiInstance->destroyTaskSource($task_id, $task_source_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskSourcesApi->destroyTaskSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_source_id** | **int**| Numeric ID of task source. |

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


## indexTaskSources

> \NodeumSDK\Client\Model\TaskSourceCollection indexTaskSources($task_id, $limit, $offset, $sort_by, $id, $file_id, $import_file_id, $tape_id, $pool_id)

Lists all task sources.

**API Key Scope**: task_sources / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskSourcesApi(
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
$file_id = 'file_id_example'; // string | Filter on file id
$import_file_id = 'import_file_id_example'; // string | Filter on import file id
$tape_id = 'tape_id_example'; // string | Filter on tape id
$pool_id = 'pool_id_example'; // string | Filter on a pool id

try {
    $result = $apiInstance->indexTaskSources($task_id, $limit, $offset, $sort_by, $id, $file_id, $import_file_id, $tape_id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSourcesApi->indexTaskSources: ', $e->getMessage(), PHP_EOL;
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
 **file_id** | **string**| Filter on file id | [optional]
 **import_file_id** | **string**| Filter on import file id | [optional]
 **tape_id** | **string**| Filter on tape id | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskSourceCollection**](../Model/TaskSourceCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskSource

> \NodeumSDK\Client\Model\TaskSourceDown showTaskSource($task_id, $task_source_id)

Displays a specific task source.

**API Key Scope**: task_sources / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_source_id = 56; // int | Numeric ID of task source.

try {
    $result = $apiInstance->showTaskSource($task_id, $task_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSourcesApi->showTaskSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_source_id** | **int**| Numeric ID of task source. |

### Return type

[**\NodeumSDK\Client\Model\TaskSourceDown**](../Model/TaskSourceDown.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTaskSource

> \NodeumSDK\Client\Model\TaskSourceDown updateTaskSource($task_id, $task_source_id, $task_source_body)

Updates a specific task source.

**API Key Scope**: task_sources / update

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


$apiInstance = new NodeumSDK\Client\Api\TaskSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_source_id = 56; // int | Numeric ID of task source.
$task_source_body = new \NodeumSDK\Client\Model\TaskSourceUp(); // \NodeumSDK\Client\Model\TaskSourceUp | 

try {
    $result = $apiInstance->updateTaskSource($task_id, $task_source_id, $task_source_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSourcesApi->updateTaskSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_source_id** | **int**| Numeric ID of task source. |
 **task_source_body** | [**\NodeumSDK\Client\Model\TaskSourceUp**](../Model/TaskSourceUp.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskSourceDown**](../Model/TaskSourceDown.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

