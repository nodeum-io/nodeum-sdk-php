# NodeumSDK\Client\TaskDestinationsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaskDestination**](TaskDestinationsApi.md#createTaskDestination) | **POST** /tasks/{task_id}/task_destinations | Creates a new task destination.
[**destroyTaskDestination**](TaskDestinationsApi.md#destroyTaskDestination) | **DELETE** /tasks/{task_id}/task_destinations/{task_destination_id} | Destroys a specific task destination.
[**indexTaskDestinations**](TaskDestinationsApi.md#indexTaskDestinations) | **GET** /tasks/{task_id}/task_destinations | Lists all task destinations.
[**showTaskDestination**](TaskDestinationsApi.md#showTaskDestination) | **GET** /tasks/{task_id}/task_destinations/{task_destination_id} | Displays a specific task destination.
[**updateTaskDestination**](TaskDestinationsApi.md#updateTaskDestination) | **PUT** /tasks/{task_id}/task_destinations/{task_destination_id} | Updates a specific task destination.



## createTaskDestination

> \NodeumSDK\Client\Model\TaskDestinationDown createTaskDestination($task_id, $task_destination_body)

Creates a new task destination.

**API Key Scope**: task_destinations / create

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


$apiInstance = new NodeumSDK\Client\Api\TaskDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_destination_body = new \NodeumSDK\Client\Model\TaskDestinationUp(); // \NodeumSDK\Client\Model\TaskDestinationUp | 

try {
    $result = $apiInstance->createTaskDestination($task_id, $task_destination_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskDestinationsApi->createTaskDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_destination_body** | [**\NodeumSDK\Client\Model\TaskDestinationUp**](../Model/TaskDestinationUp.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskDestinationDown**](../Model/TaskDestinationDown.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTaskDestination

> destroyTaskDestination($task_id, $task_destination_id)

Destroys a specific task destination.

**API Key Scope**: task_destinations / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TaskDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_destination_id = 56; // int | Numeric ID of task destination.

try {
    $apiInstance->destroyTaskDestination($task_id, $task_destination_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskDestinationsApi->destroyTaskDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_destination_id** | **int**| Numeric ID of task destination. |

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


## indexTaskDestinations

> \NodeumSDK\Client\Model\TaskDestinationCollection indexTaskDestinations($task_id, $limit, $offset, $sort_by, $id, $folder_id, $tape_id, $pool_id)

Lists all task destinations.

**API Key Scope**: task_destinations / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskDestinationsApi(
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
$folder_id = 'folder_id_example'; // string | Filter on folder id
$tape_id = 'tape_id_example'; // string | Filter on tape id
$pool_id = 'pool_id_example'; // string | Filter on a pool id

try {
    $result = $apiInstance->indexTaskDestinations($task_id, $limit, $offset, $sort_by, $id, $folder_id, $tape_id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskDestinationsApi->indexTaskDestinations: ', $e->getMessage(), PHP_EOL;
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
 **folder_id** | **string**| Filter on folder id | [optional]
 **tape_id** | **string**| Filter on tape id | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskDestinationCollection**](../Model/TaskDestinationCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskDestination

> \NodeumSDK\Client\Model\TaskDestinationDown showTaskDestination($task_id, $task_destination_id)

Displays a specific task destination.

**API Key Scope**: task_destinations / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_destination_id = 56; // int | Numeric ID of task destination.

try {
    $result = $apiInstance->showTaskDestination($task_id, $task_destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskDestinationsApi->showTaskDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_destination_id** | **int**| Numeric ID of task destination. |

### Return type

[**\NodeumSDK\Client\Model\TaskDestinationDown**](../Model/TaskDestinationDown.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTaskDestination

> \NodeumSDK\Client\Model\TaskDestinationDown updateTaskDestination($task_id, $task_destination_id, $task_destination_body)

Updates a specific task destination.

**API Key Scope**: task_destinations / update

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


$apiInstance = new NodeumSDK\Client\Api\TaskDestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_destination_id = 56; // int | Numeric ID of task destination.
$task_destination_body = new \NodeumSDK\Client\Model\TaskDestinationUp(); // \NodeumSDK\Client\Model\TaskDestinationUp | 

try {
    $result = $apiInstance->updateTaskDestination($task_id, $task_destination_id, $task_destination_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskDestinationsApi->updateTaskDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_destination_id** | **int**| Numeric ID of task destination. |
 **task_destination_body** | [**\NodeumSDK\Client\Model\TaskDestinationUp**](../Model/TaskDestinationUp.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskDestinationDown**](../Model/TaskDestinationDown.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

