# NodeumSDK\Client\CloudConnectorsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCloudConnector**](CloudConnectorsApi.md#createCloudConnector) | **POST** /cloud_connectors | Creates a new cloud connector.
[**destroyCloudConnector**](CloudConnectorsApi.md#destroyCloudConnector) | **DELETE** /cloud_connectors/{cloud_connector_id} | Destroys a specific cloud connector.
[**indexCloudConnectors**](CloudConnectorsApi.md#indexCloudConnectors) | **GET** /cloud_connectors | Lists all cloud connectors.
[**showCloudConnector**](CloudConnectorsApi.md#showCloudConnector) | **GET** /cloud_connectors/{cloud_connector_id} | Displays a specific cloud connector.
[**testCloudConnector**](CloudConnectorsApi.md#testCloudConnector) | **PUT** /cloud_connectors/-/test | Test an unsaved cloud connector.
[**testResultCloudConnector**](CloudConnectorsApi.md#testResultCloudConnector) | **GET** /cloud_connectors/-/test | Check result of cloud connector test job.
[**updateCloudConnector**](CloudConnectorsApi.md#updateCloudConnector) | **PUT** /cloud_connectors/{cloud_connector_id} | Updates a specific cloud connector.



## createCloudConnector

> \NodeumSDK\Client\Model\CloudConnector createCloudConnector($cloud_connector_body)

Creates a new cloud connector.

**API Key Scope**: cloud_connectors / create

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


$apiInstance = new NodeumSDK\Client\Api\CloudConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_body = new \NodeumSDK\Client\Model\CloudConnector(); // \NodeumSDK\Client\Model\CloudConnector | 

try {
    $result = $apiInstance->createCloudConnector($cloud_connector_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectorsApi->createCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_body** | [**\NodeumSDK\Client\Model\CloudConnector**](../Model/CloudConnector.md)|  |

### Return type

[**\NodeumSDK\Client\Model\CloudConnector**](../Model/CloudConnector.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyCloudConnector

> destroyCloudConnector($cloud_connector_id)

Destroys a specific cloud connector.

**API Key Scope**: cloud_connectors / destroy

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


$apiInstance = new NodeumSDK\Client\Api\CloudConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.

try {
    $apiInstance->destroyCloudConnector($cloud_connector_id);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectorsApi->destroyCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |

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


## indexCloudConnectors

> \NodeumSDK\Client\Model\CloudConnectorCollection indexCloudConnectors($limit, $offset, $sort_by, $id, $name, $url, $url_proxy, $provider, $region, $access_key)

Lists all cloud connectors.

**API Key Scope**: cloud_connectors / index   Optional API Key Explicit Scope: cloud_connectors / get_secret_key

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


$apiInstance = new NodeumSDK\Client\Api\CloudConnectorsApi(
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
$url = 'url_example'; // string | Filter on url
$url_proxy = 'url_proxy_example'; // string | Filter on url proxy
$provider = 'provider_example'; // string | Filter on provider
$region = 'region_example'; // string | Filter on region
$access_key = 'access_key_example'; // string | Filter on access key

try {
    $result = $apiInstance->indexCloudConnectors($limit, $offset, $sort_by, $id, $name, $url, $url_proxy, $provider, $region, $access_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectorsApi->indexCloudConnectors: ', $e->getMessage(), PHP_EOL;
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
 **url** | **string**| Filter on url | [optional]
 **url_proxy** | **string**| Filter on url proxy | [optional]
 **provider** | **string**| Filter on provider | [optional]
 **region** | **string**| Filter on region | [optional]
 **access_key** | **string**| Filter on access key | [optional]

### Return type

[**\NodeumSDK\Client\Model\CloudConnectorCollection**](../Model/CloudConnectorCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showCloudConnector

> \NodeumSDK\Client\Model\CloudConnector showCloudConnector($cloud_connector_id)

Displays a specific cloud connector.

**API Key Scope**: cloud_connectors / show   Optional API Key Explicit Scope: cloud_connectors / get_secret_key

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


$apiInstance = new NodeumSDK\Client\Api\CloudConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.

try {
    $result = $apiInstance->showCloudConnector($cloud_connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectorsApi->showCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |

### Return type

[**\NodeumSDK\Client\Model\CloudConnector**](../Model/CloudConnector.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## testCloudConnector

> \NodeumSDK\Client\Model\ActiveJobStatus testCloudConnector($cloud_connector_body)

Test an unsaved cloud connector.

**API Key Scope**: cloud_connectors / test

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


$apiInstance = new NodeumSDK\Client\Api\CloudConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_body = new \NodeumSDK\Client\Model\CloudConnector(); // \NodeumSDK\Client\Model\CloudConnector | 

try {
    $result = $apiInstance->testCloudConnector($cloud_connector_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectorsApi->testCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_body** | [**\NodeumSDK\Client\Model\CloudConnector**](../Model/CloudConnector.md)|  |

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


## testResultCloudConnector

> \NodeumSDK\Client\Model\CloudBucketSimpleCollection testResultCloudConnector($job_id)

Check result of cloud connector test job.

**API Key Scope**: cloud_connectors / test

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


$apiInstance = new NodeumSDK\Client\Api\CloudConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->testResultCloudConnector($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectorsApi->testResultCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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


## updateCloudConnector

> \NodeumSDK\Client\Model\CloudConnector updateCloudConnector($cloud_connector_id, $cloud_connector_body)

Updates a specific cloud connector.

**API Key Scope**: cloud_connectors / update

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


$apiInstance = new NodeumSDK\Client\Api\CloudConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_connector_id = 'cloud_connector_id_example'; // string | Numeric ID or name of cloud connector.
$cloud_connector_body = new \NodeumSDK\Client\Model\CloudConnector(); // \NodeumSDK\Client\Model\CloudConnector | 

try {
    $result = $apiInstance->updateCloudConnector($cloud_connector_id, $cloud_connector_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectorsApi->updateCloudConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_connector_id** | **string**| Numeric ID or name of cloud connector. |
 **cloud_connector_body** | [**\NodeumSDK\Client\Model\CloudConnector**](../Model/CloudConnector.md)|  |

### Return type

[**\NodeumSDK\Client\Model\CloudConnector**](../Model/CloudConnector.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

