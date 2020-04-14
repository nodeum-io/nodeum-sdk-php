# NodeumSDK\Client\TaskMetadataApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaskMetadatum**](TaskMetadataApi.md#createTaskMetadatum) | **POST** /tasks/{task_id}/task_metadata | Creates a new task metadatum.
[**destroyTaskMetadatum**](TaskMetadataApi.md#destroyTaskMetadatum) | **DELETE** /tasks/{task_id}/task_metadata/{task_metadatum_id} | Destroys a specific task metadatum.
[**indexTaskMetadata**](TaskMetadataApi.md#indexTaskMetadata) | **GET** /tasks/{task_id}/task_metadata | Lists all task metadata.
[**showTaskMetadatum**](TaskMetadataApi.md#showTaskMetadatum) | **GET** /tasks/{task_id}/task_metadata/{task_metadatum_id} | Displays a specific task metadatum.
[**updateTaskMetadatum**](TaskMetadataApi.md#updateTaskMetadatum) | **PUT** /tasks/{task_id}/task_metadata/{task_metadatum_id} | Updates a specific task metadatum.



## createTaskMetadatum

> \NodeumSDK\Client\Model\TaskMetadatum createTaskMetadatum($task_id, $task_metadatum_body)

Creates a new task metadatum.

**API Key Scope**: task_metadata / create

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


$apiInstance = new NodeumSDK\Client\Api\TaskMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_metadatum_body = new \NodeumSDK\Client\Model\TaskMetadatum(); // \NodeumSDK\Client\Model\TaskMetadatum | 

try {
    $result = $apiInstance->createTaskMetadatum($task_id, $task_metadatum_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskMetadataApi->createTaskMetadatum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_metadatum_body** | [**\NodeumSDK\Client\Model\TaskMetadatum**](../Model/TaskMetadatum.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskMetadatum**](../Model/TaskMetadatum.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTaskMetadatum

> destroyTaskMetadatum($task_id, $task_metadatum_id)

Destroys a specific task metadatum.

**API Key Scope**: task_metadata / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TaskMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_metadatum_id = 56; // int | Numeric ID of task metadatum.

try {
    $apiInstance->destroyTaskMetadatum($task_id, $task_metadatum_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskMetadataApi->destroyTaskMetadatum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_metadatum_id** | **int**| Numeric ID of task metadatum. |

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


## indexTaskMetadata

> \NodeumSDK\Client\Model\TaskMetadatumCollection indexTaskMetadata($task_id, $limit, $offset, $sort_by, $id, $key, $value)

Lists all task metadata.

**API Key Scope**: task_metadata / index

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


$apiInstance = new NodeumSDK\Client\Api\TaskMetadataApi(
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
$key = 'key_example'; // string | Filter on key
$value = 'value_example'; // string | Filter on value

try {
    $result = $apiInstance->indexTaskMetadata($task_id, $limit, $offset, $sort_by, $id, $key, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskMetadataApi->indexTaskMetadata: ', $e->getMessage(), PHP_EOL;
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
 **key** | **string**| Filter on key | [optional]
 **value** | **string**| Filter on value | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskMetadatumCollection**](../Model/TaskMetadatumCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskMetadatum

> \NodeumSDK\Client\Model\TaskMetadatum showTaskMetadatum($task_id, $task_metadatum_id)

Displays a specific task metadatum.

**API Key Scope**: task_metadata / show

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


$apiInstance = new NodeumSDK\Client\Api\TaskMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_metadatum_id = 56; // int | Numeric ID of task metadatum.

try {
    $result = $apiInstance->showTaskMetadatum($task_id, $task_metadatum_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskMetadataApi->showTaskMetadatum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_metadatum_id** | **int**| Numeric ID of task metadatum. |

### Return type

[**\NodeumSDK\Client\Model\TaskMetadatum**](../Model/TaskMetadatum.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTaskMetadatum

> \NodeumSDK\Client\Model\TaskMetadatum updateTaskMetadatum($task_id, $task_metadatum_id, $task_metadatum_body)

Updates a specific task metadatum.

**API Key Scope**: task_metadata / update

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


$apiInstance = new NodeumSDK\Client\Api\TaskMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_metadatum_id = 56; // int | Numeric ID of task metadatum.
$task_metadatum_body = new \NodeumSDK\Client\Model\TaskMetadatum(); // \NodeumSDK\Client\Model\TaskMetadatum | 

try {
    $result = $apiInstance->updateTaskMetadatum($task_id, $task_metadatum_id, $task_metadatum_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskMetadataApi->updateTaskMetadatum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_metadatum_id** | **int**| Numeric ID of task metadatum. |
 **task_metadatum_body** | [**\NodeumSDK\Client\Model\TaskMetadatum**](../Model/TaskMetadatum.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TaskMetadatum**](../Model/TaskMetadatum.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

