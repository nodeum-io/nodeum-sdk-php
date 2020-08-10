# NodeumSDK\Client\MetadataApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indexFileMetadataDefinitions**](MetadataApi.md#indexFileMetadataDefinitions) | **GET** /file_metadata_definitions | List file metadata definitions
[**indexTaskMetadataDefinitions**](MetadataApi.md#indexTaskMetadataDefinitions) | **GET** /task_metadata_definitions | List task metadata definitions
[**showFileMetadataDefinition**](MetadataApi.md#showFileMetadataDefinition) | **GET** /file_metadata_definitions/{metadata_definition_id} | Displays a specific task metadata definition.
[**showTaskMetadataDefinition**](MetadataApi.md#showTaskMetadataDefinition) | **GET** /task_metadata_definitions/{metadata_definition_id} | Displays a specific task metadata definition.



## indexFileMetadataDefinitions

> \NodeumSDK\Client\Model\FileMetadataDefinitionCollection indexFileMetadataDefinitions($limit, $offset)

List file metadata definitions

**API Key Scope**: file_metadata_definitions / index

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


$apiInstance = new NodeumSDK\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.

try {
    $result = $apiInstance->indexFileMetadataDefinitions($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->indexFileMetadataDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]

### Return type

[**\NodeumSDK\Client\Model\FileMetadataDefinitionCollection**](../Model/FileMetadataDefinitionCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTaskMetadataDefinitions

> \NodeumSDK\Client\Model\TaskMetadataDefinitionCollection indexTaskMetadataDefinitions($limit, $offset)

List task metadata definitions

**API Key Scope**: task_metadata_definitions / index

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


$apiInstance = new NodeumSDK\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.

try {
    $result = $apiInstance->indexTaskMetadataDefinitions($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->indexTaskMetadataDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]

### Return type

[**\NodeumSDK\Client\Model\TaskMetadataDefinitionCollection**](../Model/TaskMetadataDefinitionCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showFileMetadataDefinition

> \NodeumSDK\Client\Model\FileMetadataDefinition showFileMetadataDefinition($metadata_definition_id)

Displays a specific task metadata definition.

**API Key Scope**: file_metadata_definitions / show

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


$apiInstance = new NodeumSDK\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metadata_definition_id = 'metadata_definition_id_example'; // string | Numeric ID or key of a metadata definition

try {
    $result = $apiInstance->showFileMetadataDefinition($metadata_definition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->showFileMetadataDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metadata_definition_id** | **string**| Numeric ID or key of a metadata definition |

### Return type

[**\NodeumSDK\Client\Model\FileMetadataDefinition**](../Model/FileMetadataDefinition.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTaskMetadataDefinition

> \NodeumSDK\Client\Model\TaskMetadataDefinition showTaskMetadataDefinition($metadata_definition_id)

Displays a specific task metadata definition.

**API Key Scope**: task_metadata_definitions / show

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


$apiInstance = new NodeumSDK\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metadata_definition_id = 'metadata_definition_id_example'; // string | Numeric ID or key of a metadata definition

try {
    $result = $apiInstance->showTaskMetadataDefinition($metadata_definition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->showTaskMetadataDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metadata_definition_id** | **string**| Numeric ID or key of a metadata definition |

### Return type

[**\NodeumSDK\Client\Model\TaskMetadataDefinition**](../Model/TaskMetadataDefinition.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

