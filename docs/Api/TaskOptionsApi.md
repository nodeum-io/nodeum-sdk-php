# NodeumSDK\Client\TaskOptionsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaskOption**](TaskOptionsApi.md#createTaskOption) | **POST** /tasks/{task_id}/task_options | Creates a new task option.
[**destroyTaskOption**](TaskOptionsApi.md#destroyTaskOption) | **DELETE** /tasks/{task_id}/task_options/{task_option_id} | Destroys a specific task option.
[**indexTaskOptions**](TaskOptionsApi.md#indexTaskOptions) | **GET** /tasks/{task_id}/task_options | Lists all task options.
[**showTaskOption**](TaskOptionsApi.md#showTaskOption) | **GET** /tasks/{task_id}/task_options/{task_option_id} | Displays a specific task option.
[**updateTaskOption**](TaskOptionsApi.md#updateTaskOption) | **PUT** /tasks/{task_id}/task_options/{task_option_id} | Updates a specific task option.



## createTaskOption

> \NodeumSDK\Client\Model\TaskOption createTaskOption($task_id, $task_option_body)

Creates a new task option.

**API Key Scope**: task_options / create

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


$apiInstance = new NodeumSDK\Client\Api\TaskOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_option_body = new \NodeumSDK\Client\Model\TaskOption(); // \NodeumSDK\Client\Model\TaskOption | 

try {
    $result = $apiInstance->createTaskOption($task_id, $task_option_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskOptionsApi->createTaskOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_option_body** | [**\NodeumSDK\Client\Model\TaskOption**](../Model/TaskOption.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskOption**](../Model/TaskOption.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTaskOption

> destroyTaskOption($task_id, $task_option_id)

Destroys a specific task option.

**API Key Scope**: task_options / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TaskOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_option_id = 56; // int | Numeric ID of task option.

try {
    $apiInstance->destroyTaskOption($task_id, $task_option_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskOptionsApi->destroyTaskOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_option_id** | **int**| Numeric ID of task option. |

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


## indexTaskOptions

> \NodeumSDK\Client\Model\TaskOptionCollection indexTaskOptions($task_id, $limit, $offset, $sort_by, $id, $type, $value)

Lists all task options.

**API Key Scope**: task_options / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskOptionsApi(
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
$value = 'value_example'; // string | Filter on value

try {
    $result = $apiInstance->indexTaskOptions($task_id, $limit, $offset, $sort_by, $id, $type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskOptionsApi->indexTaskOptions: ', $e->getMessage(), PHP_EOL;
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
 **value** | **string**| Filter on value | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskOptionCollection**](../Model/TaskOptionCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskOption

> \NodeumSDK\Client\Model\TaskOption showTaskOption($task_id, $task_option_id)

Displays a specific task option.

**API Key Scope**: task_options / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_option_id = 56; // int | Numeric ID of task option.

try {
    $result = $apiInstance->showTaskOption($task_id, $task_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskOptionsApi->showTaskOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_option_id** | **int**| Numeric ID of task option. |

### Return type

[**\NodeumSDK\Client\Model\TaskOption**](../Model/TaskOption.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTaskOption

> \NodeumSDK\Client\Model\TaskOption updateTaskOption($task_id, $task_option_id, $task_option_body)

Updates a specific task option.

**API Key Scope**: task_options / update

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


$apiInstance = new NodeumSDK\Client\Api\TaskOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_option_id = 56; // int | Numeric ID of task option.
$task_option_body = new \NodeumSDK\Client\Model\TaskOption(); // \NodeumSDK\Client\Model\TaskOption | 

try {
    $result = $apiInstance->updateTaskOption($task_id, $task_option_id, $task_option_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskOptionsApi->updateTaskOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_option_id** | **int**| Numeric ID of task option. |
 **task_option_body** | [**\NodeumSDK\Client\Model\TaskOption**](../Model/TaskOption.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskOption**](../Model/TaskOption.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

