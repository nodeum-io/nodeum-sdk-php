# NodeumSDK\Client\FilesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesChildren**](FilesApi.md#filesChildren) | **GET** /files/{file_parent_id}/children | Lists files under a specific folder.
[**filesChildrenByContainer**](FilesApi.md#filesChildrenByContainer) | **GET** /containers/{container_id}/files/{file_parent_id}/children | Lists files under a specific folder.
[**filesChildrenByPool**](FilesApi.md#filesChildrenByPool) | **GET** /pools/{pool_id}/files/{file_parent_id}/children | Lists files under a specific folder.
[**filesChildrenByTask**](FilesApi.md#filesChildrenByTask) | **GET** /tasks/{task_id}/files/{file_parent_id}/children | Lists files under a specific folder.
[**filesChildrenByTaskExecution**](FilesApi.md#filesChildrenByTaskExecution) | **GET** /task_executions/{task_execution_id}/files/{file_parent_id}/children | Lists files under a specific folder.
[**filesChildrenByTaskExecutionByTask**](FilesApi.md#filesChildrenByTaskExecutionByTask) | **GET** /tasks/{task_id}/task_executions/{task_execution_id}/files/{file_parent_id}/children | Lists files under a specific folder.
[**importFilesChildrenByPool**](FilesApi.md#importFilesChildrenByPool) | **GET** /pools/{pool_id}/import_files/{file_parent_id}/children | Lists files under a specific folder on tape of pools, specific for Data Exchange.
[**indexFiles**](FilesApi.md#indexFiles) | **GET** /files | Lists files on root.
[**indexFilesByContainer**](FilesApi.md#indexFilesByContainer) | **GET** /containers/{container_id}/files | Lists files on root.
[**indexFilesByPool**](FilesApi.md#indexFilesByPool) | **GET** /pools/{pool_id}/files | Lists files on root.
[**indexFilesByTask**](FilesApi.md#indexFilesByTask) | **GET** /tasks/{task_id}/files | Lists files on root.
[**indexFilesByTaskExecution**](FilesApi.md#indexFilesByTaskExecution) | **GET** /task_executions/{task_execution_id}/files | Lists files on root.
[**indexFilesByTaskExecutionByTask**](FilesApi.md#indexFilesByTaskExecutionByTask) | **GET** /tasks/{task_id}/task_executions/{task_execution_id}/files | Lists files on root.
[**indexImportFilesByPool**](FilesApi.md#indexImportFilesByPool) | **GET** /pools/{pool_id}/import_files | Lists files on root of tape of pools, specific for Data Exchange.
[**indexOnTapesFilesByPool**](FilesApi.md#indexOnTapesFilesByPool) | **GET** /pools/{pool_id}/on_tapes_files | Lists files on root of tape of pools, specific for Active and Offline.
[**indexTapesByFileByPool**](FilesApi.md#indexTapesByFileByPool) | **GET** /pools/{pool_id}/files/{file_id}/tapes | Displays tapes containing specific file, related to the specific pool.
[**indexTapesByFileByTask**](FilesApi.md#indexTapesByFileByTask) | **GET** /tasks/{task_id}/files/{file_id}/tapes | Displays tapes containing specific file, related to the specific task.
[**indexTapesByFileByTaskExecution**](FilesApi.md#indexTapesByFileByTaskExecution) | **GET** /task_executions/{task_execution_id}/files/{file_id}/tapes | Displays tapes containing specific file, related to the specific task.
[**indexTapesByFileByTaskExecutionByTask**](FilesApi.md#indexTapesByFileByTaskExecutionByTask) | **GET** /tasks/{task_id}/task_executions/{task_execution_id}/files/{file_id}/tapes | Displays tapes containing specific file, related to the specific task.
[**onTapesFilesChildrenByPool**](FilesApi.md#onTapesFilesChildrenByPool) | **GET** /pools/{pool_id}/on_tapes_files/{file_parent_id}/children | Lists files under a specific folder on tape of pools, specific for Active and Offline.
[**showFile**](FilesApi.md#showFile) | **GET** /files/{file_id} | Displays a specific file.
[**showFileByContainer**](FilesApi.md#showFileByContainer) | **GET** /containers/{container_id}/files/{file_id} | Displays a specific file.
[**showFileByPool**](FilesApi.md#showFileByPool) | **GET** /pools/{pool_id}/files/{file_id} | Displays a specific file.
[**showFileByTask**](FilesApi.md#showFileByTask) | **GET** /tasks/{task_id}/files/{file_id} | Displays a specific file.
[**showFileByTaskExecution**](FilesApi.md#showFileByTaskExecution) | **GET** /task_executions/{task_execution_id}/files/{file_id} | Displays a specific file.
[**showFileByTaskExecutionByTask**](FilesApi.md#showFileByTaskExecutionByTask) | **GET** /tasks/{task_id}/task_executions/{task_execution_id}/files/{file_id} | Displays a specific file.
[**showImportFileByPool**](FilesApi.md#showImportFileByPool) | **GET** /pools/{pool_id}/import_files/{file_id} | Displays a specific file on tape of pools, specific for Data Exchange.
[**showOnTapeFileByPool**](FilesApi.md#showOnTapeFileByPool) | **GET** /pools/{pool_id}/on_tapes_files/{file_id} | Displays a specific file on tape of pools, specific for Active and Offline.



## filesChildren

> \NodeumSDK\Client\Model\NodeumFileCollection filesChildren($file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files under a specific folder.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->filesChildren($file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## filesChildrenByContainer

> \NodeumSDK\Client\Model\NodeumFileCollection filesChildrenByContainer($container_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files under a specific folder.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->filesChildrenByContainer($container_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesChildrenByContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## filesChildrenByPool

> \NodeumSDK\Client\Model\NodeumFileCollection filesChildrenByPool($pool_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files under a specific folder.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->filesChildrenByPool($pool_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesChildrenByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## filesChildrenByTask

> \NodeumSDK\Client\Model\NodeumFileCollection filesChildrenByTask($task_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files under a specific folder.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->filesChildrenByTask($task_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesChildrenByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## filesChildrenByTaskExecution

> \NodeumSDK\Client\Model\NodeumFileCollection filesChildrenByTaskExecution($task_execution_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files under a specific folder.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->filesChildrenByTaskExecution($task_execution_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesChildrenByTaskExecution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## filesChildrenByTaskExecutionByTask

> \NodeumSDK\Client\Model\NodeumFileCollection filesChildrenByTaskExecutionByTask($task_id, $task_execution_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files under a specific folder.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->filesChildrenByTaskExecutionByTask($task_id, $task_execution_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesChildrenByTaskExecutionByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## importFilesChildrenByPool

> \NodeumSDK\Client\Model\ImportFileCollection importFilesChildrenByPool($pool_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files under a specific folder on tape of pools, specific for Data Exchange.

**API Key Scope**: import_files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->importFilesChildrenByPool($pool_id, $file_parent_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->importFilesChildrenByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\ImportFileCollection**](../Model/ImportFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexFiles

> \NodeumSDK\Client\Model\NodeumFileCollection indexFiles($limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files on root.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->indexFiles($limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexFilesByContainer

> \NodeumSDK\Client\Model\NodeumFileCollection indexFilesByContainer($container_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files on root.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->indexFilesByContainer($container_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexFilesByContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexFilesByPool

> \NodeumSDK\Client\Model\NodeumFileCollection indexFilesByPool($pool_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files on root.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->indexFilesByPool($pool_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexFilesByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexFilesByTask

> \NodeumSDK\Client\Model\NodeumFileCollection indexFilesByTask($task_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files on root.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->indexFilesByTask($task_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexFilesByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexFilesByTaskExecution

> \NodeumSDK\Client\Model\NodeumFileCollection indexFilesByTaskExecution($task_execution_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files on root.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->indexFilesByTaskExecution($task_execution_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexFilesByTaskExecution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexFilesByTaskExecutionByTask

> \NodeumSDK\Client\Model\NodeumFileCollection indexFilesByTaskExecutionByTask($task_id, $task_execution_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files on root.

**API Key Scope**: files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->indexFilesByTaskExecutionByTask($task_id, $task_execution_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexFilesByTaskExecutionByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\NodeumFileCollection**](../Model/NodeumFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexImportFilesByPool

> \NodeumSDK\Client\Model\ImportFileCollection indexImportFilesByPool($pool_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid)

Lists files on root of tape of pools, specific for Data Exchange.

**API Key Scope**: import_files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$file_id = 'file_id_example'; // string | Filter on file id
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$permission = 'permission_example'; // string | Filter on permission
$size = 'size_example'; // string | Filter on size
$change_date = 'change_date_example'; // string | Filter on change date
$modification_date = 'modification_date_example'; // string | Filter on modification date
$access_date = 'access_date_example'; // string | Filter on access date
$gid = 'gid_example'; // string | Filter on gid
$uid = 'uid_example'; // string | Filter on uid

try {
    $result = $apiInstance->indexImportFilesByPool($pool_id, $limit, $offset, $file_id, $name, $type, $permission, $size, $change_date, $modification_date, $access_date, $gid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexImportFilesByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **file_id** | **string**| Filter on file id | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **permission** | **string**| Filter on permission | [optional]
 **size** | **string**| Filter on size | [optional]
 **change_date** | **string**| Filter on change date | [optional]
 **modification_date** | **string**| Filter on modification date | [optional]
 **access_date** | **string**| Filter on access date | [optional]
 **gid** | **string**| Filter on gid | [optional]
 **uid** | **string**| Filter on uid | [optional]

### Return type

[**\NodeumSDK\Client\Model\ImportFileCollection**](../Model/ImportFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexOnTapesFilesByPool

> \NodeumSDK\Client\Model\OnTapesFileCollection indexOnTapesFilesByPool($pool_id, $limit, $offset, $name, $type, $size)

Lists files on root of tape of pools, specific for Active and Offline.

**API Key Scope**: on_tapes_files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$size = 'size_example'; // string | Filter on size

try {
    $result = $apiInstance->indexOnTapesFilesByPool($pool_id, $limit, $offset, $name, $type, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexOnTapesFilesByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **size** | **string**| Filter on size | [optional]

### Return type

[**\NodeumSDK\Client\Model\OnTapesFileCollection**](../Model/OnTapesFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapesByFileByPool

> \NodeumSDK\Client\Model\TapeCollection indexTapesByFileByPool($pool_id, $file_id)

Displays tapes containing specific file, related to the specific pool.

**API Key Scope**: files / tapes

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->indexTapesByFileByPool($pool_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexTapesByFileByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\TapeCollection**](../Model/TapeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapesByFileByTask

> \NodeumSDK\Client\Model\TapeCollection indexTapesByFileByTask($task_id, $file_id)

Displays tapes containing specific file, related to the specific task.

**API Key Scope**: files / tapes

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->indexTapesByFileByTask($task_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexTapesByFileByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\TapeCollection**](../Model/TapeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapesByFileByTaskExecution

> \NodeumSDK\Client\Model\TapeCollection indexTapesByFileByTaskExecution($task_execution_id, $file_id)

Displays tapes containing specific file, related to the specific task.

**API Key Scope**: files / tapes

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->indexTapesByFileByTaskExecution($task_execution_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexTapesByFileByTaskExecution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\TapeCollection**](../Model/TapeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapesByFileByTaskExecutionByTask

> \NodeumSDK\Client\Model\TapeCollection indexTapesByFileByTaskExecutionByTask($task_id, $task_execution_id, $file_id)

Displays tapes containing specific file, related to the specific task.

**API Key Scope**: files / tapes

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->indexTapesByFileByTaskExecutionByTask($task_id, $task_execution_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->indexTapesByFileByTaskExecutionByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\TapeCollection**](../Model/TapeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## onTapesFilesChildrenByPool

> \NodeumSDK\Client\Model\OnTapesFileCollection onTapesFilesChildrenByPool($pool_id, $file_parent_id, $limit, $offset, $name, $type, $size)

Lists files under a specific folder on tape of pools, specific for Active and Offline.

**API Key Scope**: on_tapes_files / index

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$file_parent_id = 56; // int | Numeric ID of parent folder.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$name = 'name_example'; // string | Filter on name
$type = 'type_example'; // string | Filter on type
$size = 'size_example'; // string | Filter on size

try {
    $result = $apiInstance->onTapesFilesChildrenByPool($pool_id, $file_parent_id, $limit, $offset, $name, $type, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->onTapesFilesChildrenByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **file_parent_id** | **int**| Numeric ID of parent folder. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **name** | **string**| Filter on name | [optional]
 **type** | **string**| Filter on type | [optional]
 **size** | **string**| Filter on size | [optional]

### Return type

[**\NodeumSDK\Client\Model\OnTapesFileCollection**](../Model/OnTapesFileCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showFile

> \NodeumSDK\Client\Model\NodeumFileWithPath showFile($file_id)

Displays a specific file.

**API Key Scope**: files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\NodeumFileWithPath**](../Model/NodeumFileWithPath.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showFileByContainer

> \NodeumSDK\Client\Model\NodeumFileWithPath showFileByContainer($container_id, $file_id)

Displays a specific file.

**API Key Scope**: files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showFileByContainer($container_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showFileByContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\NodeumFileWithPath**](../Model/NodeumFileWithPath.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showFileByPool

> \NodeumSDK\Client\Model\NodeumFileWithPath showFileByPool($pool_id, $file_id)

Displays a specific file.

**API Key Scope**: files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showFileByPool($pool_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showFileByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\NodeumFileWithPath**](../Model/NodeumFileWithPath.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showFileByTask

> \NodeumSDK\Client\Model\NodeumFileWithPath showFileByTask($task_id, $file_id)

Displays a specific file.

**API Key Scope**: files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showFileByTask($task_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showFileByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\NodeumFileWithPath**](../Model/NodeumFileWithPath.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showFileByTaskExecution

> \NodeumSDK\Client\Model\NodeumFileWithPath showFileByTaskExecution($task_execution_id, $file_id)

Displays a specific file.

**API Key Scope**: files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showFileByTaskExecution($task_execution_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showFileByTaskExecution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\NodeumFileWithPath**](../Model/NodeumFileWithPath.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showFileByTaskExecutionByTask

> \NodeumSDK\Client\Model\NodeumFileWithPath showFileByTaskExecutionByTask($task_id, $task_execution_id, $file_id)

Displays a specific file.

**API Key Scope**: files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Numeric ID or name of task. Task names are not unique, it's recommanded to use numeric ID.
$task_execution_id = 'task_execution_id_example'; // string | Numeric ID of task execution.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showFileByTaskExecutionByTask($task_id, $task_execution_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showFileByTaskExecutionByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Numeric ID or name of task. Task names are not unique, it&#39;s recommanded to use numeric ID. |
 **task_execution_id** | **string**| Numeric ID of task execution. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\NodeumFileWithPath**](../Model/NodeumFileWithPath.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showImportFileByPool

> \NodeumSDK\Client\Model\ImportFileWithPath showImportFileByPool($pool_id, $file_id)

Displays a specific file on tape of pools, specific for Data Exchange.

**API Key Scope**: import_files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showImportFileByPool($pool_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showImportFileByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\ImportFileWithPath**](../Model/ImportFileWithPath.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showOnTapeFileByPool

> \NodeumSDK\Client\Model\OnTapesFile showOnTapeFileByPool($pool_id, $file_id)

Displays a specific file on tape of pools, specific for Active and Offline.

**API Key Scope**: on_tapes_files / show

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


$apiInstance = new NodeumSDK\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$file_id = 56; // int | Numeric ID of file.

try {
    $result = $apiInstance->showOnTapeFileByPool($pool_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->showOnTapeFileByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **file_id** | **int**| Numeric ID of file. |

### Return type

[**\NodeumSDK\Client\Model\OnTapesFile**](../Model/OnTapesFile.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

