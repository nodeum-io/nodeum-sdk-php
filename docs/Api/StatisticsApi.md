# NodeumSDK\Client\StatisticsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticsByDate**](StatisticsApi.md#statisticsByDate) | **GET** /statistics/by_date | Get statistics about files, grouped by date
[**statisticsByFileExtension**](StatisticsApi.md#statisticsByFileExtension) | **GET** /statistics/by_file_extension | Get statistics about files, grouped by file extension
[**statisticsByGroupOwner**](StatisticsApi.md#statisticsByGroupOwner) | **GET** /statistics/by_group_owner | Get statistics about files, grouped by owner (group)
[**statisticsByPrimaryCloud**](StatisticsApi.md#statisticsByPrimaryCloud) | **GET** /statistics/by_primary_cloud | Get statistics about files, grouped by primary Cloud
[**statisticsByPrimaryName**](StatisticsApi.md#statisticsByPrimaryName) | **GET** /statistics/by_primary_name | Get statistics about files, grouped by primary storages
[**statisticsByPrimaryNas**](StatisticsApi.md#statisticsByPrimaryNas) | **GET** /statistics/by_primary_nas | Get statistics about files, grouped by primary NAS
[**statisticsByPrimaryStorage**](StatisticsApi.md#statisticsByPrimaryStorage) | **GET** /statistics/by_primary_storage | Get statistics about files, grouped by primary storage
[**statisticsBySecondaryCloud**](StatisticsApi.md#statisticsBySecondaryCloud) | **GET** /statistics/by_secondary_cloud | Get statistics about files, grouped by secondary Cloud
[**statisticsBySecondaryNas**](StatisticsApi.md#statisticsBySecondaryNas) | **GET** /statistics/by_secondary_nas | Get statistics about files, grouped by secondary NAS
[**statisticsBySecondaryStorage**](StatisticsApi.md#statisticsBySecondaryStorage) | **GET** /statistics/by_secondary_storage | Get statistics about files, grouped by secondary storage
[**statisticsBySecondaryTape**](StatisticsApi.md#statisticsBySecondaryTape) | **GET** /statistics/by_secondary_tape | Get statistics about files, grouped by secondary Tape
[**statisticsBySize**](StatisticsApi.md#statisticsBySize) | **GET** /statistics/by_size | Get statistics about files, grouped by size
[**statisticsByUserOwner**](StatisticsApi.md#statisticsByUserOwner) | **GET** /statistics/by_user_owner | Get statistics about files, grouped by owner (user)
[**statisticsStorage**](StatisticsApi.md#statisticsStorage) | **GET** /statistics/storage | Get statistics about storages, grouped by types
[**statisticsTaskByStatus**](StatisticsApi.md#statisticsTaskByStatus) | **GET** /statistics/task_by_status | Get statistics about tasks executions, grouped by status
[**statisticsTaskByStorage**](StatisticsApi.md#statisticsTaskByStorage) | **GET** /statistics/task_by_storage | Get statistics about tasks executions, grouped by source and destination
[**statisticsTaskByWorkflow**](StatisticsApi.md#statisticsTaskByWorkflow) | **GET** /statistics/task_by_workflow | Get statistics about tasks executions, grouped by workflow



## statisticsByDate

> \NodeumSDK\Client\Model\ByDateFacet statisticsByDate($q, $fq, $date_attr)

Get statistics about files, grouped by date

**API Key Scope**: statistics / by_date

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsByDate($q, $fq, $date_attr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]

### Return type

[**\NodeumSDK\Client\Model\ByDateFacet**](../Model/ByDateFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsByFileExtension

> \NodeumSDK\Client\Model\ByFileExtensionFacet statisticsByFileExtension($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by file extension

**API Key Scope**: statistics / by_file_extension

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsByFileExtension($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByFileExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\ByFileExtensionFacet**](../Model/ByFileExtensionFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsByGroupOwner

> \NodeumSDK\Client\Model\ByGroupOwnerFacet statisticsByGroupOwner($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by owner (group)

**API Key Scope**: statistics / by_group_owner

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsByGroupOwner($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByGroupOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\ByGroupOwnerFacet**](../Model/ByGroupOwnerFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsByPrimaryCloud

> \NodeumSDK\Client\Model\ByPrimaryCloudFacet statisticsByPrimaryCloud($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by primary Cloud

**API Key Scope**: statistics / by_primary_cloud

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsByPrimaryCloud($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByPrimaryCloud: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\ByPrimaryCloudFacet**](../Model/ByPrimaryCloudFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsByPrimaryName

> \NodeumSDK\Client\Model\ByPrimaryFacet statisticsByPrimaryName($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by primary storages

**API Key Scope**: statistics / by_primary_name

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsByPrimaryName($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByPrimaryName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\ByPrimaryFacet**](../Model/ByPrimaryFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsByPrimaryNas

> \NodeumSDK\Client\Model\ByPrimaryNasFacet statisticsByPrimaryNas($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by primary NAS

**API Key Scope**: statistics / by_primary_nas

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsByPrimaryNas($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByPrimaryNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\ByPrimaryNasFacet**](../Model/ByPrimaryNasFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsByPrimaryStorage

> \NodeumSDK\Client\Model\ByPrimaryStorageFacet statisticsByPrimaryStorage($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by primary storage

**API Key Scope**: statistics / by_primary_storage

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsByPrimaryStorage($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByPrimaryStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\ByPrimaryStorageFacet**](../Model/ByPrimaryStorageFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsBySecondaryCloud

> \NodeumSDK\Client\Model\BySecondaryCloudFacet statisticsBySecondaryCloud($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by secondary Cloud

**API Key Scope**: statistics / by_secondary_cloud

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsBySecondaryCloud($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsBySecondaryCloud: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\BySecondaryCloudFacet**](../Model/BySecondaryCloudFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsBySecondaryNas

> \NodeumSDK\Client\Model\BySecondaryNasFacet statisticsBySecondaryNas($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by secondary NAS

**API Key Scope**: statistics / by_secondary_nas

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsBySecondaryNas($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsBySecondaryNas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\BySecondaryNasFacet**](../Model/BySecondaryNasFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsBySecondaryStorage

> \NodeumSDK\Client\Model\BySecondaryStorageFacet statisticsBySecondaryStorage($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by secondary storage

**API Key Scope**: statistics / by_secondary_storage

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsBySecondaryStorage($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsBySecondaryStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\BySecondaryStorageFacet**](../Model/BySecondaryStorageFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsBySecondaryTape

> \NodeumSDK\Client\Model\BySecondaryTapeFacet statisticsBySecondaryTape($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by secondary Tape

**API Key Scope**: statistics / by_secondary_tape

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsBySecondaryTape($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsBySecondaryTape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\BySecondaryTapeFacet**](../Model/BySecondaryTapeFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsBySize

> \NodeumSDK\Client\Model\BySizeFacet statisticsBySize($q, $fq, $date_attr)

Get statistics about files, grouped by size

**API Key Scope**: statistics / by_size

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsBySize($q, $fq, $date_attr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsBySize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]

### Return type

[**\NodeumSDK\Client\Model\BySizeFacet**](../Model/BySizeFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsByUserOwner

> \NodeumSDK\Client\Model\ByUserOwnerFacet statisticsByUserOwner($q, $fq, $date_attr, $sort, $limit)

Get statistics about files, grouped by owner (user)

**API Key Scope**: statistics / by_user_owner

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.
$date_attr = 'date_attr_example'; // string | Type of date to facet on
$sort = 'count'; // string | Sort results of facet
$limit = 10; // int | Limit results of facet

try {
    $result = $apiInstance->statisticsByUserOwner($q, $fq, $date_attr, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsByUserOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]
 **date_attr** | **string**| Type of date to facet on | [optional]
 **sort** | **string**| Sort results of facet | [optional] [default to &#39;count&#39;]
 **limit** | **int**| Limit results of facet | [optional] [default to 10]

### Return type

[**\NodeumSDK\Client\Model\ByUserOwnerFacet**](../Model/ByUserOwnerFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsStorage

> \NodeumSDK\Client\Model\StorageFacet statisticsStorage($q, $fq)

Get statistics about storages, grouped by types

**API Key Scope**: statistics / storages

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.

try {
    $result = $apiInstance->statisticsStorage($q, $fq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]

### Return type

[**\NodeumSDK\Client\Model\StorageFacet**](../Model/StorageFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsTaskByStatus

> \NodeumSDK\Client\Model\ByTaskStatusFacet statisticsTaskByStatus($q, $fq)

Get statistics about tasks executions, grouped by status

**API Key Scope**: statistics / task_by_status

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.

try {
    $result = $apiInstance->statisticsTaskByStatus($q, $fq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsTaskByStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]

### Return type

[**\NodeumSDK\Client\Model\ByTaskStatusFacet**](../Model/ByTaskStatusFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsTaskByStorage

> \NodeumSDK\Client\Model\ByTaskStorageFacet statisticsTaskByStorage($q, $fq)

Get statistics about tasks executions, grouped by source and destination

**API Key Scope**: statistics / task_by_storage

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.

try {
    $result = $apiInstance->statisticsTaskByStorage($q, $fq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsTaskByStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]

### Return type

[**\NodeumSDK\Client\Model\ByTaskStorageFacet**](../Model/ByTaskStorageFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsTaskByWorkflow

> \NodeumSDK\Client\Model\ByTaskWorkflowFacet statisticsTaskByWorkflow($q, $fq)

Get statistics about tasks executions, grouped by workflow

**API Key Scope**: statistics / task_by_workflow

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


$apiInstance = new NodeumSDK\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Solr query
$fq = array('fq_example'); // string[] | Solr filter query  Multiple query can be separated by `|`.

try {
    $result = $apiInstance->statisticsTaskByWorkflow($q, $fq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsTaskByWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Solr query | [optional]
 **fq** | [**string[]**](../Model/string.md)| Solr filter query  Multiple query can be separated by &#x60;|&#x60;. | [optional]

### Return type

[**\NodeumSDK\Client\Model\ByTaskWorkflowFacet**](../Model/ByTaskWorkflowFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

