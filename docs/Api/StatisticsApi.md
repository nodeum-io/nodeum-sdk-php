# NodeumSDK\Client\StatisticsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticsByFileExtension**](StatisticsApi.md#statisticsByFileExtension) | **GET** /statistics/by_file_extension | TODO
[**statisticsByGroupOwner**](StatisticsApi.md#statisticsByGroupOwner) | **GET** /statistics/by_group_owner | TODO
[**statisticsByPrimaryName**](StatisticsApi.md#statisticsByPrimaryName) | **GET** /statistics/by_primary_name | TODO
[**statisticsBySecondaryStorage**](StatisticsApi.md#statisticsBySecondaryStorage) | **GET** /statistics/by_secondary_storage | TODO
[**statisticsBySize**](StatisticsApi.md#statisticsBySize) | **GET** /statistics/by_size | TODO
[**statisticsByUserOwner**](StatisticsApi.md#statisticsByUserOwner) | **GET** /statistics/by_user_owner | TODO



## statisticsByFileExtension

> \NodeumSDK\Client\Model\ByFileExtensionFacet statisticsByFileExtension($q, $date_attr)

TODO

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
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsByFileExtension($q, $date_attr);
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
 **date_attr** | **string**| Type of date to facet on | [optional]

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

> \NodeumSDK\Client\Model\ByGroupOwnerFacet statisticsByGroupOwner($q, $date_attr)

TODO

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
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsByGroupOwner($q, $date_attr);
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
 **date_attr** | **string**| Type of date to facet on | [optional]

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


## statisticsByPrimaryName

> \NodeumSDK\Client\Model\ByPrimaryFacet statisticsByPrimaryName($q, $date_attr)

TODO

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
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsByPrimaryName($q, $date_attr);
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
 **date_attr** | **string**| Type of date to facet on | [optional]

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


## statisticsBySecondaryStorage

> \NodeumSDK\Client\Model\BySecondaryFacet statisticsBySecondaryStorage($q, $date_attr)

TODO

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
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsBySecondaryStorage($q, $date_attr);
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
 **date_attr** | **string**| Type of date to facet on | [optional]

### Return type

[**\NodeumSDK\Client\Model\BySecondaryFacet**](../Model/BySecondaryFacet.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## statisticsBySize

> \NodeumSDK\Client\Model\BySizeFacet statisticsBySize($q, $date_attr)

TODO

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
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsBySize($q, $date_attr);
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

> \NodeumSDK\Client\Model\ByUserOwnerFacet statisticsByUserOwner($q, $date_attr)

TODO

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
$date_attr = 'date_attr_example'; // string | Type of date to facet on

try {
    $result = $apiInstance->statisticsByUserOwner($q, $date_attr);
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
 **date_attr** | **string**| Type of date to facet on | [optional]

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

