# NodeumSDK\Client\CloudBucketsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indexCloudBuckets**](CloudBucketsApi.md#indexCloudBuckets) | **GET** /cloud_buckets | Lists all cloud buckets.
[**indexCloudBucketsByCloudConnector**](CloudBucketsApi.md#indexCloudBucketsByCloudConnector) | **GET** /cloud_connectors/{cloud_connector_id}/cloud_buckets | Lists all cloud buckets.
[**indexCloudBucketsByPool**](CloudBucketsApi.md#indexCloudBucketsByPool) | **GET** /pools/{pool_id}/cloud_buckets | Lists all cloud buckets from pool.
[**mountStatusCloudBucket**](CloudBucketsApi.md#mountStatusCloudBucket) | **GET** /cloud_buckets/{cloud_bucket_id}/mount | Get mount status of Cloud bucket.
[**mountStatusCloudBucketByCloudConnector**](CloudBucketsApi.md#mountStatusCloudBucketByCloudConnector) | **GET** /cloud_connectors/{cloud_connector_id}/cloud_buckets/{cloud_bucket_id}/mount | Get mount status of Cloud bucket.
[**mountStatusCloudBucketByPool**](CloudBucketsApi.md#mountStatusCloudBucketByPool) | **GET** /pools/{pool_id}/cloud_buckets/{cloud_bucket_id}/mount | Get mount status of Cloud bucket.
[**showCloudBucket**](CloudBucketsApi.md#showCloudBucket) | **GET** /cloud_buckets/{cloud_bucket_id} | Displays a specific cloud bucket.
[**showCloudBucketByCloudConnector**](CloudBucketsApi.md#showCloudBucketByCloudConnector) | **GET** /cloud_connectors/{cloud_connector_id}/cloud_buckets/{cloud_bucket_id} | Displays a specific cloud bucket.
[**showCloudBucketByPool**](CloudBucketsApi.md#showCloudBucketByPool) | **GET** /pools/{pool_id}/cloud_buckets/{cloud_bucket_id} | Displays a specific cloud bucket.
[**syncCloudBuckets**](CloudBucketsApi.md#syncCloudBuckets) | **PUT** /cloud_connectors/{cloud_connector_id}/cloud_buckets/-/sync | Synchronize internal cloud buckets with their remote equivalent.
[**syncResultCloudBuckets**](CloudBucketsApi.md#syncResultCloudBuckets) | **GET** /cloud_connectors/{cloud_connector_id}/cloud_buckets/-/sync | Check result of cloud connector sync job.
[**updateCloudBucket**](CloudBucketsApi.md#updateCloudBucket) | **PUT** /cloud_buckets/{cloud_bucket_id} | Updates a specific cloud bucket.
[**updateCloudBucketByCloudConnector**](CloudBucketsApi.md#updateCloudBucketByCloudConnector) | **PUT** /cloud_connectors/{cloud_connector_id}/cloud_buckets/{cloud_bucket_id} | Updates a specific cloud bucket.
[**updateCloudBucketByPool**](CloudBucketsApi.md#updateCloudBucketByPool) | **PUT** /pools/{pool_id}/cloud_buckets/{cloud_bucket_id} | Updates a specific cloud bucket.



## indexCloudBuckets

> \NodeumSDK\Client\Model\CloudBucketCollection indexCloudBuckets($limit, $offset, $sort_by, $id, $cloud_connector_id, $pool_id, $name, $location, $price)

Lists all cloud buckets.

**API Key Scope**: cloud_buckets / index

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$cloud_connector_id = 'cloud_connector_id_example'; // string | Filter on cloud connector id
$pool_id = 'pool_id_example'; // string | Filter on a pool id
$name = 'name_example'; // string | Filter on name
$location = 'location_example'; // string | Filter on location
$price = 'price_example'; // string | Filter on price

try {
    $result = $apiInstance->indexCloudBuckets($limit, $offset, $sort_by, $id, $cloud_connector_id, $pool_id, $name, $location, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->indexCloudBuckets: ', $e->getMessage(), PHP_EOL;
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
 **cloud_connector_id** | **string**| Filter on cloud connector id | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]
 **name** | **string**| Filter on name | [optional]
 **location** | **string**| Filter on location | [optional]
 **price** | **string**| Filter on price | [optional]

### Return type

[**\NodeumSDK\Client\Model\CloudBucketCollection**](../Model/CloudBucketCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexCloudBucketsByCloudConnector

> \NodeumSDK\Client\Model\CloudBucketCollection indexCloudBucketsByCloudConnector($cloud_connector_id, $limit, $offset, $sort_by, $id, $pool_id, $name, $location, $price)

Lists all cloud buckets.

**API Key Scope**: cloud_buckets / index

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$pool_id = 'pool_id_example'; // string | Filter on a pool id
$name = 'name_example'; // string | Filter on name
$location = 'location_example'; // string | Filter on location
$price = 'price_example'; // string | Filter on price

try {
    $result = $apiInstance->indexCloudBucketsByCloudConnector($cloud_connector_id, $limit, $offset, $sort_by, $id, $pool_id, $name, $location, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->indexCloudBucketsByCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]
 **name** | **string**| Filter on name | [optional]
 **location** | **string**| Filter on location | [optional]
 **price** | **string**| Filter on price | [optional]

### Return type

[**\NodeumSDK\Client\Model\CloudBucketCollection**](../Model/CloudBucketCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexCloudBucketsByPool

> \NodeumSDK\Client\Model\CloudBucketCollection indexCloudBucketsByPool($pool_id, $limit, $offset, $sort_by, $id, $cloud_connector_id, $name, $location, $price)

Lists all cloud buckets from pool.

**API Key Scope**: cloud_buckets / index

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
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
$cloud_connector_id = 'cloud_connector_id_example'; // string | Filter on cloud connector id
$name = 'name_example'; // string | Filter on name
$location = 'location_example'; // string | Filter on location
$price = 'price_example'; // string | Filter on price

try {
    $result = $apiInstance->indexCloudBucketsByPool($pool_id, $limit, $offset, $sort_by, $id, $cloud_connector_id, $name, $location, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->indexCloudBucketsByPool: ', $e->getMessage(), PHP_EOL;
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
 **cloud_connector_id** | **string**| Filter on cloud connector id | [optional]
 **name** | **string**| Filter on name | [optional]
 **location** | **string**| Filter on location | [optional]
 **price** | **string**| Filter on price | [optional]

### Return type

[**\NodeumSDK\Client\Model\CloudBucketCollection**](../Model/CloudBucketCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mountStatusCloudBucket

> \NodeumSDK\Client\Model\MountStatus mountStatusCloudBucket($cloud_bucket_id)

Get mount status of Cloud bucket.

**API Key Scope**: cloud_buckets / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.

try {
    $result = $apiInstance->mountStatusCloudBucket($cloud_bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->mountStatusCloudBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |

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


## mountStatusCloudBucketByCloudConnector

> \NodeumSDK\Client\Model\MountStatus mountStatusCloudBucketByCloudConnector($cloud_connector_id, $cloud_bucket_id)

Get mount status of Cloud bucket.

**API Key Scope**: cloud_buckets / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.

try {
    $result = $apiInstance->mountStatusCloudBucketByCloudConnector($cloud_connector_id, $cloud_bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->mountStatusCloudBucketByCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |

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


## mountStatusCloudBucketByPool

> \NodeumSDK\Client\Model\MountStatus mountStatusCloudBucketByPool($pool_id, $cloud_bucket_id)

Get mount status of Cloud bucket.

**API Key Scope**: cloud_buckets / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.

try {
    $result = $apiInstance->mountStatusCloudBucketByPool($pool_id, $cloud_bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->mountStatusCloudBucketByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |

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


## showCloudBucket

> \NodeumSDK\Client\Model\CloudBucket showCloudBucket($cloud_bucket_id)

Displays a specific cloud bucket.

**API Key Scope**: cloud_buckets / show

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.

try {
    $result = $apiInstance->showCloudBucket($cloud_bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->showCloudBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |

### Return type

[**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showCloudBucketByCloudConnector

> \NodeumSDK\Client\Model\CloudBucket showCloudBucketByCloudConnector($cloud_connector_id, $cloud_bucket_id)

Displays a specific cloud bucket.

**API Key Scope**: cloud_buckets / show

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.

try {
    $result = $apiInstance->showCloudBucketByCloudConnector($cloud_connector_id, $cloud_bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->showCloudBucketByCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |

### Return type

[**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showCloudBucketByPool

> \NodeumSDK\Client\Model\CloudBucket showCloudBucketByPool($pool_id, $cloud_bucket_id)

Displays a specific cloud bucket.

**API Key Scope**: cloud_buckets / show

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.

try {
    $result = $apiInstance->showCloudBucketByPool($pool_id, $cloud_bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->showCloudBucketByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |

### Return type

[**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## syncCloudBuckets

> \NodeumSDK\Client\Model\ActiveJobStatus syncCloudBuckets($cloud_connector_id)

Synchronize internal cloud buckets with their remote equivalent.

**API Key Scope**: cloud_buckets / sync

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.

try {
    $result = $apiInstance->syncCloudBuckets($cloud_connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->syncCloudBuckets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |

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


## syncResultCloudBuckets

> \NodeumSDK\Client\Model\CloudBucketSimpleCollection syncResultCloudBuckets($cloud_connector_id, $job_id)

Check result of cloud connector sync job.

**API Key Scope**: cloud_buckets / sync

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->syncResultCloudBuckets($cloud_connector_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->syncResultCloudBuckets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\CloudBucketSimpleCollection**](../Model/CloudBucketSimpleCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCloudBucket

> \NodeumSDK\Client\Model\CloudBucket updateCloudBucket($cloud_bucket_id, $cloud_bucket_body)

Updates a specific cloud bucket.

**API Key Scope**: cloud_buckets / update

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.
$cloud_bucket_body = new \NodeumSDK\Client\Model\CloudBucket(); // \NodeumSDK\Client\Model\CloudBucket | 

try {
    $result = $apiInstance->updateCloudBucket($cloud_bucket_id, $cloud_bucket_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->updateCloudBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |
 **cloud_bucket_body** | [**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)|  |

### Return type

[**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCloudBucketByCloudConnector

> \NodeumSDK\Client\Model\CloudBucket updateCloudBucketByCloudConnector($cloud_connector_id, $cloud_bucket_id, $cloud_bucket_body)

Updates a specific cloud bucket.

**API Key Scope**: cloud_buckets / update

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.
$cloud_bucket_body = new \NodeumSDK\Client\Model\CloudBucket(); // \NodeumSDK\Client\Model\CloudBucket | 

try {
    $result = $apiInstance->updateCloudBucketByCloudConnector($cloud_connector_id, $cloud_bucket_id, $cloud_bucket_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->updateCloudBucketByCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |
 **cloud_bucket_body** | [**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)|  |

### Return type

[**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCloudBucketByPool

> \NodeumSDK\Client\Model\CloudBucket updateCloudBucketByPool($pool_id, $cloud_bucket_id, $cloud_bucket_body)

Updates a specific cloud bucket.

**API Key Scope**: cloud_buckets / update

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


$apiInstance = new NodeumSDK\Client\Api\CloudBucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$cloud_bucket_id = 'cloud_bucket_id_example'; // string | Numeric ID or name of cloud bucket.
$cloud_bucket_body = new \NodeumSDK\Client\Model\CloudBucket(); // \NodeumSDK\Client\Model\CloudBucket | 

try {
    $result = $apiInstance->updateCloudBucketByPool($pool_id, $cloud_bucket_id, $cloud_bucket_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudBucketsApi->updateCloudBucketByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **cloud_bucket_id** | **string**| Numeric ID or name of cloud bucket. |
 **cloud_bucket_body** | [**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)|  |

### Return type

[**\NodeumSDK\Client\Model\CloudBucket**](../Model/CloudBucket.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

