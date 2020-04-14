# NodeumSDK\Client\SystemsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadResetVars**](SystemsApi.md#downloadResetVars) | **POST** /systems/reset/generate_vars | Creates a YAML file with selected tables and downloads it
[**resultDownloadTraces**](SystemsApi.md#resultDownloadTraces) | **GET** /systems/download_traces | Check result of a download traces job.
[**triggerDownloadTraces**](SystemsApi.md#triggerDownloadTraces) | **PUT** /systems/download_traces | Trigger a download traces request.



## downloadResetVars

> \SplFileObject downloadResetVars($reset_form)

Creates a YAML file with selected tables and downloads it

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


$apiInstance = new NodeumSDK\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reset_form = new \NodeumSDK\Client\Model\Reset(); // \NodeumSDK\Client\Model\Reset | 

try {
    $result = $apiInstance->downloadResetVars($reset_form);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->downloadResetVars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reset_form** | [**\NodeumSDK\Client\Model\Reset**](../Model/Reset.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/x-yaml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resultDownloadTraces

> \SplFileObject resultDownloadTraces($job_id)

Check result of a download traces job.

**API Key Scope**: systems / download_traces

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


$apiInstance = new NodeumSDK\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->resultDownloadTraces($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->resultDownloadTraces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| ID of active job |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/tar+gzip, queued, working, failed, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## triggerDownloadTraces

> \NodeumSDK\Client\Model\ActiveJobStatus triggerDownloadTraces($type)

Trigger a download traces request.

**API Key Scope**: systems / download_traces

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


$apiInstance = new NodeumSDK\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of traces to download

try {
    $result = $apiInstance->triggerDownloadTraces($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->triggerDownloadTraces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of traces to download |

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

