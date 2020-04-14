# NodeumSDK\Client\NasSharesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNasShareByNas**](NasSharesApi.md#createNasShareByNas) | **POST** /nas/{nas_id}/nas_shares | Creates a new NAS share.
[**destroyNasShare**](NasSharesApi.md#destroyNasShare) | **DELETE** /nas_shares/{nas_share_id} | Destroys a specific NAS share.
[**destroyNasShareByNas**](NasSharesApi.md#destroyNasShareByNas) | **DELETE** /nas/{nas_id}/nas_shares/{nas_share_id} | Destroys a specific NAS share.
[**destroyNasShareByPool**](NasSharesApi.md#destroyNasShareByPool) | **DELETE** /pools/{pool_id}/nas_shares/{nas_share_id} | Destroys a specific NAS share.
[**indexNasShares**](NasSharesApi.md#indexNasShares) | **GET** /nas_shares | Lists all NAS shares.
[**indexNasSharesByNas**](NasSharesApi.md#indexNasSharesByNas) | **GET** /nas/{nas_id}/nas_shares | Lists all NAS shares.
[**indexNasSharesByPool**](NasSharesApi.md#indexNasSharesByPool) | **GET** /pools/{pool_id}/nas_shares | Lists all NAS shares from pool.
[**mountStatusNasShare**](NasSharesApi.md#mountStatusNasShare) | **GET** /nas_shares/{nas_share_id}/mount | Get mount status of NAS Share.
[**mountStatusNasShareByNas**](NasSharesApi.md#mountStatusNasShareByNas) | **GET** /nas/{nas_id}/nas_shares/{nas_share_id}/mount | Get mount status of NAS Share.
[**mountStatusNasShareByPool**](NasSharesApi.md#mountStatusNasShareByPool) | **GET** /pools/{pool_id}/nas_shares/{nas_share_id}/mount | Get mount status of NAS Share.
[**showNasShare**](NasSharesApi.md#showNasShare) | **GET** /nas_shares/{nas_share_id} | Displays a specific NAS share.
[**showNasShareByNas**](NasSharesApi.md#showNasShareByNas) | **GET** /nas/{nas_id}/nas_shares/{nas_share_id} | Displays a specific NAS share.
[**showNasShareByPool**](NasSharesApi.md#showNasShareByPool) | **GET** /pools/{pool_id}/nas_shares/{nas_share_id} | Displays a specific NAS share.
[**testNasShare**](NasSharesApi.md#testNasShare) | **PUT** /nas/{nas_id}/nas_shares/-/test | Test an unsaved NAS Share.
[**testResultNasShare**](NasSharesApi.md#testResultNasShare) | **GET** /nas/{nas_id}/nas_shares/-/test | Check result of a NAS Share test job.
[**updateNasShare**](NasSharesApi.md#updateNasShare) | **PUT** /nas_shares/{nas_share_id} | Updates a specific NAS share.
[**updateNasShareByNas**](NasSharesApi.md#updateNasShareByNas) | **PUT** /nas/{nas_id}/nas_shares/{nas_share_id} | Updates a specific NAS share.
[**updateNasShareByPool**](NasSharesApi.md#updateNasShareByPool) | **PUT** /pools/{pool_id}/nas_shares/{nas_share_id} | Updates a specific NAS share.



## createNasShareByNas

> \NodeumSDK\Client\Model\NasShare createNasShareByNas($nas_id, $nas_share_body)

Creates a new NAS share.

**API Key Scope**: nas_shares / create

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$nas_share_body = new \NodeumSDK\Client\Model\NasShare(); // \NodeumSDK\Client\Model\NasShare | 

try {
    $result = $apiInstance->createNasShareByNas($nas_id, $nas_share_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->createNasShareByNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **nas_share_body** | [**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)|  |

### Return type

[**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyNasShare

> destroyNasShare($nas_share_id)

Destroys a specific NAS share.

**API Key Scope**: nas_shares / destroy

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $apiInstance->destroyNasShare($nas_share_id);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->destroyNasShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

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


## destroyNasShareByNas

> destroyNasShareByNas($nas_id, $nas_share_id)

Destroys a specific NAS share.

**API Key Scope**: nas_shares / destroy

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $apiInstance->destroyNasShareByNas($nas_id, $nas_share_id);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->destroyNasShareByNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

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


## destroyNasShareByPool

> destroyNasShareByPool($pool_id, $nas_share_id)

Destroys a specific NAS share.

**API Key Scope**: nas_shares / destroy

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $apiInstance->destroyNasShareByPool($pool_id, $nas_share_id);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->destroyNasShareByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

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


## indexNasShares

> \NodeumSDK\Client\Model\NasShareCollection indexNasShares($limit, $offset, $sort_by, $id, $name, $path, $options, $username, $nas_id, $pool_id)

Lists all NAS shares.

**API Key Scope**: nas_shares / index   Optional API Key Explicit Scope: nas_shares / get_password

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
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
$path = 'path_example'; // string | Filter on path
$options = 'options_example'; // string | Filter on options
$username = 'username_example'; // string | Filter on username
$nas_id = 'nas_id_example'; // string | Filter on NAS id
$pool_id = 'pool_id_example'; // string | Filter on a pool id

try {
    $result = $apiInstance->indexNasShares($limit, $offset, $sort_by, $id, $name, $path, $options, $username, $nas_id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->indexNasShares: ', $e->getMessage(), PHP_EOL;
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
 **path** | **string**| Filter on path | [optional]
 **options** | **string**| Filter on options | [optional]
 **username** | **string**| Filter on username | [optional]
 **nas_id** | **string**| Filter on NAS id | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]

### Return type

[**\NodeumSDK\Client\Model\NasShareCollection**](../Model/NasShareCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexNasSharesByNas

> \NodeumSDK\Client\Model\NasShareCollection indexNasSharesByNas($nas_id, $limit, $offset, $sort_by, $id, $name, $path, $options, $username, $pool_id)

Lists all NAS shares.

**API Key Scope**: nas_shares / index   Optional API Key Explicit Scope: nas_shares / get_password

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$name = 'name_example'; // string | Filter on name
$path = 'path_example'; // string | Filter on path
$options = 'options_example'; // string | Filter on options
$username = 'username_example'; // string | Filter on username
$pool_id = 'pool_id_example'; // string | Filter on a pool id

try {
    $result = $apiInstance->indexNasSharesByNas($nas_id, $limit, $offset, $sort_by, $id, $name, $path, $options, $username, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->indexNasSharesByNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **name** | **string**| Filter on name | [optional]
 **path** | **string**| Filter on path | [optional]
 **options** | **string**| Filter on options | [optional]
 **username** | **string**| Filter on username | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]

### Return type

[**\NodeumSDK\Client\Model\NasShareCollection**](../Model/NasShareCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexNasSharesByPool

> \NodeumSDK\Client\Model\NasShareCollection indexNasSharesByPool($pool_id, $limit, $offset, $sort_by, $id, $name, $path, $options, $username, $nas_id)

Lists all NAS shares from pool.

**API Key Scope**: nas_shares / index   Optional API Key Explicit Scope: nas_shares / get_password

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$name = 'name_example'; // string | Filter on name
$path = 'path_example'; // string | Filter on path
$options = 'options_example'; // string | Filter on options
$username = 'username_example'; // string | Filter on username
$nas_id = 'nas_id_example'; // string | Filter on NAS id

try {
    $result = $apiInstance->indexNasSharesByPool($pool_id, $limit, $offset, $sort_by, $id, $name, $path, $options, $username, $nas_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->indexNasSharesByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **name** | **string**| Filter on name | [optional]
 **path** | **string**| Filter on path | [optional]
 **options** | **string**| Filter on options | [optional]
 **username** | **string**| Filter on username | [optional]
 **nas_id** | **string**| Filter on NAS id | [optional]

### Return type

[**\NodeumSDK\Client\Model\NasShareCollection**](../Model/NasShareCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mountStatusNasShare

> \NodeumSDK\Client\Model\MountStatus mountStatusNasShare($nas_share_id)

Get mount status of NAS Share.

**API Key Scope**: nas_shares / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $result = $apiInstance->mountStatusNasShare($nas_share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->mountStatusNasShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

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


## mountStatusNasShareByNas

> \NodeumSDK\Client\Model\MountStatus mountStatusNasShareByNas($nas_id, $nas_share_id)

Get mount status of NAS Share.

**API Key Scope**: nas_shares / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $result = $apiInstance->mountStatusNasShareByNas($nas_id, $nas_share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->mountStatusNasShareByNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

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


## mountStatusNasShareByPool

> \NodeumSDK\Client\Model\MountStatus mountStatusNasShareByPool($pool_id, $nas_share_id)

Get mount status of NAS Share.

**API Key Scope**: nas_shares / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $result = $apiInstance->mountStatusNasShareByPool($pool_id, $nas_share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->mountStatusNasShareByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

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


## showNasShare

> \NodeumSDK\Client\Model\NasShare showNasShare($nas_share_id)

Displays a specific NAS share.

**API Key Scope**: nas_shares / show   Optional API Key Explicit Scope: nas_shares / get_password

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $result = $apiInstance->showNasShare($nas_share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->showNasShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

### Return type

[**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showNasShareByNas

> \NodeumSDK\Client\Model\NasShare showNasShareByNas($nas_id, $nas_share_id)

Displays a specific NAS share.

**API Key Scope**: nas_shares / show   Optional API Key Explicit Scope: nas_shares / get_password

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $result = $apiInstance->showNasShareByNas($nas_id, $nas_share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->showNasShareByNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

### Return type

[**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showNasShareByPool

> \NodeumSDK\Client\Model\NasShare showNasShareByPool($pool_id, $nas_share_id)

Displays a specific NAS share.

**API Key Scope**: nas_shares / show   Optional API Key Explicit Scope: nas_shares / get_password

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.

try {
    $result = $apiInstance->showNasShareByPool($pool_id, $nas_share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->showNasShareByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |

### Return type

[**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## testNasShare

> \NodeumSDK\Client\Model\ActiveJobStatus testNasShare($nas_id, $nas_share_body)

Test an unsaved NAS Share.

**API Key Scope**: nas_shares / test

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$nas_share_body = new \NodeumSDK\Client\Model\NasShare(); // \NodeumSDK\Client\Model\NasShare | 

try {
    $result = $apiInstance->testNasShare($nas_id, $nas_share_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->testNasShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **nas_share_body** | [**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)|  |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## testResultNasShare

> \NodeumSDK\Client\Model\ActiveJobStatus testResultNasShare($nas_id, $job_id)

Check result of a NAS Share test job.

**API Key Scope**: nas_shares / test

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->testResultNasShare($nas_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->testResultNasShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\ActiveJobStatus**](../Model/ActiveJobStatus.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateNasShare

> \NodeumSDK\Client\Model\NasShare updateNasShare($nas_share_id, $nas_share_body)

Updates a specific NAS share.

**API Key Scope**: nas_shares / update

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.
$nas_share_body = new \NodeumSDK\Client\Model\NasShare(); // \NodeumSDK\Client\Model\NasShare | 

try {
    $result = $apiInstance->updateNasShare($nas_share_id, $nas_share_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->updateNasShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |
 **nas_share_body** | [**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)|  |

### Return type

[**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateNasShareByNas

> \NodeumSDK\Client\Model\NasShare updateNasShareByNas($nas_id, $nas_share_id, $nas_share_body)

Updates a specific NAS share.

**API Key Scope**: nas_shares / update

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nas_id = 'nas_id_example'; // string | Numeric ID or name of NAS.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.
$nas_share_body = new \NodeumSDK\Client\Model\NasShare(); // \NodeumSDK\Client\Model\NasShare | 

try {
    $result = $apiInstance->updateNasShareByNas($nas_id, $nas_share_id, $nas_share_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->updateNasShareByNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nas_id** | **string**| Numeric ID or name of NAS. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |
 **nas_share_body** | [**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)|  |

### Return type

[**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateNasShareByPool

> \NodeumSDK\Client\Model\NasShare updateNasShareByPool($pool_id, $nas_share_id, $nas_share_body)

Updates a specific NAS share.

**API Key Scope**: nas_shares / update

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


$apiInstance = new NodeumSDK\Client\Api\NasSharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$nas_share_id = 'nas_share_id_example'; // string | Numeric ID or name of NAS share.
$nas_share_body = new \NodeumSDK\Client\Model\NasShare(); // \NodeumSDK\Client\Model\NasShare | 

try {
    $result = $apiInstance->updateNasShareByPool($pool_id, $nas_share_id, $nas_share_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NasSharesApi->updateNasShareByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **nas_share_id** | **string**| Numeric ID or name of NAS share. |
 **nas_share_body** | [**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)|  |

### Return type

[**\NodeumSDK\Client\Model\NasShare**](../Model/NasShare.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

