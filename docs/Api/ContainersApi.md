# NodeumSDK\Client\ContainersApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContainer**](ContainersApi.md#createContainer) | **POST** /containers | Creates a new container.
[**createContainerPrivilege**](ContainersApi.md#createContainerPrivilege) | **POST** /containers/{container_id}/container_privileges | Creates a new privilege on the container.
[**destroyContainer**](ContainersApi.md#destroyContainer) | **DELETE** /containers/{container_id} | Destroys a specific container.
[**destroyContainerPrivilege**](ContainersApi.md#destroyContainerPrivilege) | **DELETE** /containers/{container_id}/container_privileges/{container_privilege_id} | Destroys a specific privilege.
[**indexContainerPrivileges**](ContainersApi.md#indexContainerPrivileges) | **GET** /containers/{container_id}/container_privileges | Lists all privilege on the container.
[**indexContainers**](ContainersApi.md#indexContainers) | **GET** /containers | Lists all containers.
[**showContainer**](ContainersApi.md#showContainer) | **GET** /containers/{container_id} | Displays a specific container.
[**showContainerPrivilege**](ContainersApi.md#showContainerPrivilege) | **GET** /containers/{container_id}/container_privileges/{container_privilege_id} | Displays a specific privilege.
[**updateContainer**](ContainersApi.md#updateContainer) | **PUT** /containers/{container_id} | Updates a specific container.
[**updateContainerPrivilege**](ContainersApi.md#updateContainerPrivilege) | **PUT** /containers/{container_id}/container_privileges/{container_privilege_id} | Updates a specific privilege.



## createContainer

> \NodeumSDK\Client\Model\Container createContainer($container_body)

Creates a new container.

It **does not** yet create the file structure and configure the samba connection. Use API v1 instead.  **API Key Scope**: containers / create

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_body = new \NodeumSDK\Client\Model\Container(); // \NodeumSDK\Client\Model\Container | 

try {
    $result = $apiInstance->createContainer($container_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->createContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_body** | [**\NodeumSDK\Client\Model\Container**](../Model/Container.md)|  |

### Return type

[**\NodeumSDK\Client\Model\Container**](../Model/Container.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContainerPrivilege

> \NodeumSDK\Client\Model\ContainerPrivilege createContainerPrivilege($container_id, $container_privilege_body)

Creates a new privilege on the container.

**API Key Scope**: container_privileges / create

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$container_privilege_body = new \NodeumSDK\Client\Model\ContainerPrivilege(); // \NodeumSDK\Client\Model\ContainerPrivilege | 

try {
    $result = $apiInstance->createContainerPrivilege($container_id, $container_privilege_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->createContainerPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **container_privilege_body** | [**\NodeumSDK\Client\Model\ContainerPrivilege**](../Model/ContainerPrivilege.md)|  |

### Return type

[**\NodeumSDK\Client\Model\ContainerPrivilege**](../Model/ContainerPrivilege.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyContainer

> destroyContainer($container_id)

Destroys a specific container.

**API Key Scope**: containers / destroy

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.

try {
    $apiInstance->destroyContainer($container_id);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->destroyContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |

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


## destroyContainerPrivilege

> destroyContainerPrivilege($container_id, $container_privilege_id)

Destroys a specific privilege.

**API Key Scope**: container_privileges / destroy

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$container_privilege_id = 56; // int | Numeric ID of container privilege.

try {
    $apiInstance->destroyContainerPrivilege($container_id, $container_privilege_id);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->destroyContainerPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **container_privilege_id** | **int**| Numeric ID of container privilege. |

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


## indexContainerPrivileges

> \NodeumSDK\Client\Model\ContainerPrivilegeCollection indexContainerPrivileges($container_id, $limit, $offset, $sort_by, $id, $name, $privilege, $type)

Lists all privilege on the container.

**API Key Scope**: container_privileges / index

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$name = 'name_example'; // string | Filter on name
$privilege = 'privilege_example'; // string | Filter on privilege
$type = 'type_example'; // string | Filter on type

try {
    $result = $apiInstance->indexContainerPrivileges($container_id, $limit, $offset, $sort_by, $id, $name, $privilege, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->indexContainerPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **name** | **string**| Filter on name | [optional]
 **privilege** | **string**| Filter on privilege | [optional]
 **type** | **string**| Filter on type | [optional]

### Return type

[**\NodeumSDK\Client\Model\ContainerPrivilegeCollection**](../Model/ContainerPrivilegeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexContainers

> \NodeumSDK\Client\Model\ContainerCollection indexContainers($limit, $offset, $sort_by, $id, $name, $comment, $quota_total_size, $quota_on_cache, $stat_total_files, $stat_total_size, $stat_size_on_cache, $guest_right, $last_update)

Lists all containers.

**API Key Scope**: containers / index

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
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
$quota_total_size = 'quota_total_size_example'; // string | Filter on quota total size
$quota_on_cache = 'quota_on_cache_example'; // string | Filter on quota on cache
$stat_total_files = 'stat_total_files_example'; // string | Filter on stat total files
$stat_total_size = 'stat_total_size_example'; // string | Filter on stat total size
$stat_size_on_cache = 'stat_size_on_cache_example'; // string | Filter on stat size on cache
$guest_right = 'guest_right_example'; // string | Filter on guest right
$last_update = 'last_update_example'; // string | Filter on last update

try {
    $result = $apiInstance->indexContainers($limit, $offset, $sort_by, $id, $name, $comment, $quota_total_size, $quota_on_cache, $stat_total_files, $stat_total_size, $stat_size_on_cache, $guest_right, $last_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->indexContainers: ', $e->getMessage(), PHP_EOL;
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
 **quota_total_size** | **string**| Filter on quota total size | [optional]
 **quota_on_cache** | **string**| Filter on quota on cache | [optional]
 **stat_total_files** | **string**| Filter on stat total files | [optional]
 **stat_total_size** | **string**| Filter on stat total size | [optional]
 **stat_size_on_cache** | **string**| Filter on stat size on cache | [optional]
 **guest_right** | **string**| Filter on guest right | [optional]
 **last_update** | **string**| Filter on last update | [optional]

### Return type

[**\NodeumSDK\Client\Model\ContainerCollection**](../Model/ContainerCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showContainer

> \NodeumSDK\Client\Model\Container showContainer($container_id)

Displays a specific container.

**API Key Scope**: containers / show

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.

try {
    $result = $apiInstance->showContainer($container_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->showContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |

### Return type

[**\NodeumSDK\Client\Model\Container**](../Model/Container.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showContainerPrivilege

> \NodeumSDK\Client\Model\ContainerPrivilege showContainerPrivilege($container_id, $container_privilege_id)

Displays a specific privilege.

**API Key Scope**: container_privileges / show

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$container_privilege_id = 56; // int | Numeric ID of container privilege.

try {
    $result = $apiInstance->showContainerPrivilege($container_id, $container_privilege_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->showContainerPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **container_privilege_id** | **int**| Numeric ID of container privilege. |

### Return type

[**\NodeumSDK\Client\Model\ContainerPrivilege**](../Model/ContainerPrivilege.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateContainer

> \NodeumSDK\Client\Model\Container updateContainer($container_id, $container_body)

Updates a specific container.

It **does not** yet create the file structure and configure the samba connection. Use API v1 instead.  **API Key Scope**: containers / update

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$container_body = new \NodeumSDK\Client\Model\Container(); // \NodeumSDK\Client\Model\Container | 

try {
    $result = $apiInstance->updateContainer($container_id, $container_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->updateContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **container_body** | [**\NodeumSDK\Client\Model\Container**](../Model/Container.md)|  |

### Return type

[**\NodeumSDK\Client\Model\Container**](../Model/Container.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateContainerPrivilege

> \NodeumSDK\Client\Model\ContainerPrivilege updateContainerPrivilege($container_id, $container_privilege_id, $container_privilege_body)

Updates a specific privilege.

**API Key Scope**: container_privileges / update

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


$apiInstance = new NodeumSDK\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | Numeric ID or name of container.
$container_privilege_id = 56; // int | Numeric ID of container privilege.
$container_privilege_body = new \NodeumSDK\Client\Model\ContainerPrivilege(); // \NodeumSDK\Client\Model\ContainerPrivilege | 

try {
    $result = $apiInstance->updateContainerPrivilege($container_id, $container_privilege_id, $container_privilege_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->updateContainerPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **container_id** | **string**| Numeric ID or name of container. |
 **container_privilege_id** | **int**| Numeric ID of container privilege. |
 **container_privilege_body** | [**\NodeumSDK\Client\Model\ContainerPrivilege**](../Model/ContainerPrivilege.md)|  |

### Return type

[**\NodeumSDK\Client\Model\ContainerPrivilege**](../Model/ContainerPrivilege.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

