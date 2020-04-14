# NodeumSDK\Client\PoolsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPool**](PoolsApi.md#createPool) | **POST** /pools | Creates a new pool.
[**createPrimaryScan**](PoolsApi.md#createPrimaryScan) | **POST** /pools/{pool_id}/primary_scan | Set a new primary pool scan option.
[**destroyPool**](PoolsApi.md#destroyPool) | **DELETE** /pools/{pool_id} | Destroys a specific tape pool.
[**destroyPrimaryScan**](PoolsApi.md#destroyPrimaryScan) | **DELETE** /pools/{pool_id}/primary_scan | Disable the primary pool scan.
[**indexPools**](PoolsApi.md#indexPools) | **GET** /pools | Lists all pools.
[**mountPool**](PoolsApi.md#mountPool) | **PUT** /pools/{pool_id}/mount | Mount Pool.
[**mountStatusPool**](PoolsApi.md#mountStatusPool) | **GET** /pools/{pool_id}/mount | Get mount status of Pool.
[**showPool**](PoolsApi.md#showPool) | **GET** /pools/{pool_id} | Displays a specific pool.
[**showPrimaryScan**](PoolsApi.md#showPrimaryScan) | **GET** /pools/{pool_id}/primary_scan | Displays the primary pool scan status.
[**syncPrimaryPool**](PoolsApi.md#syncPrimaryPool) | **POST** /pools/{pool_id}/sync | Synchronize a primary after a scan (for internal use only).
[**unmountPool**](PoolsApi.md#unmountPool) | **DELETE** /pools/{pool_id}/mount | Unmount Pool.
[**updatePool**](PoolsApi.md#updatePool) | **PUT** /pools/{pool_id} | Updates a specific pool.
[**updatePrimaryScan**](PoolsApi.md#updatePrimaryScan) | **PUT** /pools/{pool_id}/primary_scan | Updates the existing primary pool scan option.



## createPool

> \NodeumSDK\Client\Model\Pool createPool($pool_body)

Creates a new pool.

**API Key Scope**: pools / create

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_body = new \NodeumSDK\Client\Model\PoolUp(); // \NodeumSDK\Client\Model\PoolUp | 

try {
    $result = $apiInstance->createPool($pool_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->createPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_body** | [**\NodeumSDK\Client\Model\PoolUp**](../Model/PoolUp.md)|  |

### Return type

[**\NodeumSDK\Client\Model\Pool**](../Model/Pool.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPrimaryScan

> \NodeumSDK\Client\Model\PrimaryScan createPrimaryScan($pool_id, $primary_scan_body)

Set a new primary pool scan option.

**API Key Scope**: primary_scans / create

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$primary_scan_body = new \NodeumSDK\Client\Model\PrimaryScan(); // \NodeumSDK\Client\Model\PrimaryScan | 

try {
    $result = $apiInstance->createPrimaryScan($pool_id, $primary_scan_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->createPrimaryScan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **primary_scan_body** | [**\NodeumSDK\Client\Model\PrimaryScan**](../Model/PrimaryScan.md)|  |

### Return type

[**\NodeumSDK\Client\Model\PrimaryScan**](../Model/PrimaryScan.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyPool

> destroyPool($pool_id)

Destroys a specific tape pool.

**API Key Scope**: pools / destroy

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.

try {
    $apiInstance->destroyPool($pool_id);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->destroyPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |

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


## destroyPrimaryScan

> destroyPrimaryScan($pool_id)

Disable the primary pool scan.

**API Key Scope**: primary_scans / destroy

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.

try {
    $apiInstance->destroyPrimaryScan($pool_id);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->destroyPrimaryScan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |

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


## indexPools

> \NodeumSDK\Client\Model\PoolCollection indexPools($limit, $offset, $sort_by, $id, $name, $comment, $type, $content, $primary_id)

Lists all pools.

**API Key Scope**: pools / index

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
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
$type = 'type_example'; // string | Filter on type
$content = 'content_example'; // string | Filter on content
$primary_id = 'primary_id_example'; // string | Filter on primary id

try {
    $result = $apiInstance->indexPools($limit, $offset, $sort_by, $id, $name, $comment, $type, $content, $primary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->indexPools: ', $e->getMessage(), PHP_EOL;
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
 **type** | **string**| Filter on type | [optional]
 **content** | **string**| Filter on content | [optional]
 **primary_id** | **string**| Filter on primary id | [optional]

### Return type

[**\NodeumSDK\Client\Model\PoolCollection**](../Model/PoolCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mountPool

> \NodeumSDK\Client\Model\MountStatus mountPool($pool_id)

Mount Pool.

**API Key Scope**: pools / mount

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.

try {
    $result = $apiInstance->mountPool($pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->mountPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |

### Return type

[**\NodeumSDK\Client\Model\MountStatus**](../Model/MountStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mountStatusPool

> \NodeumSDK\Client\Model\MountStatus mountStatusPool($pool_id)

Get mount status of Pool.

**API Key Scope**: pools / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.

try {
    $result = $apiInstance->mountStatusPool($pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->mountStatusPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |

### Return type

[**\NodeumSDK\Client\Model\MountStatus**](../Model/MountStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showPool

> \NodeumSDK\Client\Model\Pool showPool($pool_id)

Displays a specific pool.

**API Key Scope**: pools / show

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.

try {
    $result = $apiInstance->showPool($pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->showPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |

### Return type

[**\NodeumSDK\Client\Model\Pool**](../Model/Pool.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showPrimaryScan

> \NodeumSDK\Client\Model\PrimaryScan showPrimaryScan($pool_id)

Displays the primary pool scan status.

**API Key Scope**: primary_scans / show

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.

try {
    $result = $apiInstance->showPrimaryScan($pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->showPrimaryScan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |

### Return type

[**\NodeumSDK\Client\Model\PrimaryScan**](../Model/PrimaryScan.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## syncPrimaryPool

> syncPrimaryPool($pool_id, $tx)

Synchronize a primary after a scan (for internal use only).

**API Key Scope**: pools / sync_primary

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$tx = 56; // int | New transaction number.

try {
    $apiInstance->syncPrimaryPool($pool_id, $tx);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->syncPrimaryPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **tx** | **int**| New transaction number. |

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


## unmountPool

> \NodeumSDK\Client\Model\MountStatus unmountPool($pool_id)

Unmount Pool.

**API Key Scope**: pools / unmount

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.

try {
    $result = $apiInstance->unmountPool($pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->unmountPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |

### Return type

[**\NodeumSDK\Client\Model\MountStatus**](../Model/MountStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePool

> \NodeumSDK\Client\Model\Pool updatePool($pool_id, $pool_body)

Updates a specific pool.

**API Key Scope**: pools / update

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$pool_body = new \NodeumSDK\Client\Model\PoolUp(); // \NodeumSDK\Client\Model\PoolUp | 

try {
    $result = $apiInstance->updatePool($pool_id, $pool_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->updatePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **pool_body** | [**\NodeumSDK\Client\Model\PoolUp**](../Model/PoolUp.md)|  |

### Return type

[**\NodeumSDK\Client\Model\Pool**](../Model/Pool.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePrimaryScan

> \NodeumSDK\Client\Model\PrimaryScan updatePrimaryScan($pool_id, $primary_scan_body)

Updates the existing primary pool scan option.

**API Key Scope**: primary_scans / update

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


$apiInstance = new NodeumSDK\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$primary_scan_body = new \NodeumSDK\Client\Model\PrimaryScan(); // \NodeumSDK\Client\Model\PrimaryScan | 

try {
    $result = $apiInstance->updatePrimaryScan($pool_id, $primary_scan_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->updatePrimaryScan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **primary_scan_body** | [**\NodeumSDK\Client\Model\PrimaryScan**](../Model/PrimaryScan.md)|  |

### Return type

[**\NodeumSDK\Client\Model\PrimaryScan**](../Model/PrimaryScan.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

