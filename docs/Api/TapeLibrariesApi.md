# NodeumSDK\Client\TapeLibrariesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTapeLibrary**](TapeLibrariesApi.md#createTapeLibrary) | **POST** /tape_libraries | Creates a new tape library.
[**destroyTapeLibrary**](TapeLibrariesApi.md#destroyTapeLibrary) | **DELETE** /tape_libraries/{tape_library_id} | Destroys a specific tape library.
[**indexTapeLibraries**](TapeLibrariesApi.md#indexTapeLibraries) | **GET** /tape_libraries | Lists all tape libraries.
[**indexTapeLibraryDevices**](TapeLibrariesApi.md#indexTapeLibraryDevices) | **GET** /tape_libraries/-/devices | Lists tape libraries devices.
[**showTapeLibrary**](TapeLibrariesApi.md#showTapeLibrary) | **GET** /tape_libraries/{tape_library_id} | Displays a specific tape library.
[**updateTapeLibrary**](TapeLibrariesApi.md#updateTapeLibrary) | **PUT** /tape_libraries/{tape_library_id} | Updates a specific tape library.



## createTapeLibrary

> \NodeumSDK\Client\Model\TapeLibrary createTapeLibrary($tape_library_body)

Creates a new tape library.

**API Key Scope**: tape_libraries / create

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


$apiInstance = new NodeumSDK\Client\Api\TapeLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_body = new \NodeumSDK\Client\Model\TapeLibrary(); // \NodeumSDK\Client\Model\TapeLibrary | 

try {
    $result = $apiInstance->createTapeLibrary($tape_library_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeLibrariesApi->createTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_body** | [**\NodeumSDK\Client\Model\TapeLibrary**](../Model/TapeLibrary.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TapeLibrary**](../Model/TapeLibrary.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTapeLibrary

> destroyTapeLibrary($tape_library_id)

Destroys a specific tape library.

**API Key Scope**: tape_libraries / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TapeLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.

try {
    $apiInstance->destroyTapeLibrary($tape_library_id);
} catch (Exception $e) {
    echo 'Exception when calling TapeLibrariesApi->destroyTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |

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


## indexTapeLibraries

> \NodeumSDK\Client\Model\TapeLibraryCollection indexTapeLibraries($limit, $offset, $sort_by, $id, $name, $serial, $comment, $protocol, $vendor, $product, $firmware, $device, $libso, $acs, $status, $storage_slots, $storage_slots_address, $io_slots, $io_slots_address, $price)

Lists all tape libraries.

**API Key Scope**: tape_libraries / index

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


$apiInstance = new NodeumSDK\Client\Api\TapeLibrariesApi(
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
$serial = 'serial_example'; // string | Filter on serial
$comment = 'comment_example'; // string | Filter on comment
$protocol = 'protocol_example'; // string | Filter on protocol
$vendor = 'vendor_example'; // string | Filter on vendor
$product = 'product_example'; // string | Filter on product
$firmware = 'firmware_example'; // string | Filter on firmware
$device = 'device_example'; // string | Filter on device
$libso = 'libso_example'; // string | Filter on libso
$acs = 'acs_example'; // string | Filter on acs
$status = 'status_example'; // string | Filter on status
$storage_slots = 'storage_slots_example'; // string | Filter on storage slots
$storage_slots_address = 'storage_slots_address_example'; // string | Filter on storage slots address
$io_slots = 'io_slots_example'; // string | Filter on io slots
$io_slots_address = 'io_slots_address_example'; // string | Filter on io slots address
$price = 'price_example'; // string | Filter on price

try {
    $result = $apiInstance->indexTapeLibraries($limit, $offset, $sort_by, $id, $name, $serial, $comment, $protocol, $vendor, $product, $firmware, $device, $libso, $acs, $status, $storage_slots, $storage_slots_address, $io_slots, $io_slots_address, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeLibrariesApi->indexTapeLibraries: ', $e->getMessage(), PHP_EOL;
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
 **serial** | **string**| Filter on serial | [optional]
 **comment** | **string**| Filter on comment | [optional]
 **protocol** | **string**| Filter on protocol | [optional]
 **vendor** | **string**| Filter on vendor | [optional]
 **product** | **string**| Filter on product | [optional]
 **firmware** | **string**| Filter on firmware | [optional]
 **device** | **string**| Filter on device | [optional]
 **libso** | **string**| Filter on libso | [optional]
 **acs** | **string**| Filter on acs | [optional]
 **status** | **string**| Filter on status | [optional]
 **storage_slots** | **string**| Filter on storage slots | [optional]
 **storage_slots_address** | **string**| Filter on storage slots address | [optional]
 **io_slots** | **string**| Filter on io slots | [optional]
 **io_slots_address** | **string**| Filter on io slots address | [optional]
 **price** | **string**| Filter on price | [optional]

### Return type

[**\NodeumSDK\Client\Model\TapeLibraryCollection**](../Model/TapeLibraryCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapeLibraryDevices

> \NodeumSDK\Client\Model\TapeLibraryDeviceCollection indexTapeLibraryDevices($job_id)

Lists tape libraries devices.

**API Key Scope**: tape_libraries / devices

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


$apiInstance = new NodeumSDK\Client\Api\TapeLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->indexTapeLibraryDevices($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeLibrariesApi->indexTapeLibraryDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\TapeLibraryDeviceCollection**](../Model/TapeLibraryDeviceCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeLibrary

> \NodeumSDK\Client\Model\TapeLibrary showTapeLibrary($tape_library_id)

Displays a specific tape library.

**API Key Scope**: tape_libraries / show

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


$apiInstance = new NodeumSDK\Client\Api\TapeLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.

try {
    $result = $apiInstance->showTapeLibrary($tape_library_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeLibrariesApi->showTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |

### Return type

[**\NodeumSDK\Client\Model\TapeLibrary**](../Model/TapeLibrary.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTapeLibrary

> \NodeumSDK\Client\Model\TapeLibrary updateTapeLibrary($tape_library_id, $tape_library_body)

Updates a specific tape library.

**API Key Scope**: tape_libraries / update

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


$apiInstance = new NodeumSDK\Client\Api\TapeLibrariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_library_body = new \NodeumSDK\Client\Model\TapeLibrary(); // \NodeumSDK\Client\Model\TapeLibrary | 

try {
    $result = $apiInstance->updateTapeLibrary($tape_library_id, $tape_library_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeLibrariesApi->updateTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_library_body** | [**\NodeumSDK\Client\Model\TapeLibrary**](../Model/TapeLibrary.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TapeLibrary**](../Model/TapeLibrary.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

