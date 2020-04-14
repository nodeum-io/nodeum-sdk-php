# NodeumSDK\Client\TapesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indexTapeStats**](TapesApi.md#indexTapeStats) | **GET** /tape_stats | List all tape statistics.
[**indexTapes**](TapesApi.md#indexTapes) | **GET** /tapes | Lists all tapes.
[**indexTapesByPool**](TapesApi.md#indexTapesByPool) | **GET** /pools/{pool_id}/tapes | Lists all tapes.
[**indexTapesByTapeLibrary**](TapesApi.md#indexTapesByTapeLibrary) | **GET** /tape_libraries/{tape_library_id}/tapes | Lists all tapes.
[**mountStatusTape**](TapesApi.md#mountStatusTape) | **GET** /tapes/{tape_id}/mount | Get mount status of Tape.
[**mountStatusTapeByPool**](TapesApi.md#mountStatusTapeByPool) | **GET** /pools/{pool_id}/tapes/{tape_id}/mount | Get mount status of Tape.
[**mountStatusTapeByTapeLibrary**](TapesApi.md#mountStatusTapeByTapeLibrary) | **GET** /tape_libraries/{tape_library_id}/tapes/{tape_id}/mount | Get mount status of Tape.
[**showTape**](TapesApi.md#showTape) | **GET** /tapes/{tape_id} | Displays a specific tape.
[**showTapeByPool**](TapesApi.md#showTapeByPool) | **GET** /pools/{pool_id}/tapes/{tape_id} | Displays a specific tape.
[**showTapeByTapeLibrary**](TapesApi.md#showTapeByTapeLibrary) | **GET** /tape_libraries/{tape_library_id}/tapes/{tape_id} | Displays a specific tape.
[**showTapeStat**](TapesApi.md#showTapeStat) | **GET** /tapes/{tape_id}/tape_stat | Display statistic for a specific tape.
[**showTapeStatByPool**](TapesApi.md#showTapeStatByPool) | **GET** /pools/{pool_id}/tapes/{tape_id}/tape_stat | Display statistic for a specific tape.
[**showTapeStatByTapeLibrary**](TapesApi.md#showTapeStatByTapeLibrary) | **GET** /tape_libraries/{tape_library_id}/tapes/{tape_id}/tape_stat | Display statistic for a specific tape.



## indexTapeStats

> \NodeumSDK\Client\Model\TapeStatCollection indexTapeStats($limit, $offset)

List all tape statistics.

**API Key Scope**: tape_stats / index

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.

try {
    $result = $apiInstance->indexTapeStats($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->indexTapeStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]

### Return type

[**\NodeumSDK\Client\Model\TapeStatCollection**](../Model/TapeStatCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapes

> \NodeumSDK\Client\Model\TapeCollection indexTapes($limit, $offset, $sort_by, $id, $tape_library_id, $pool_id, $barcode, $location, $type, $locked, $scratch, $cleaning, $write_protect, $mounted, $ejected, $known, $mount_count, $date_in, $date_move, $free, $max, $last_size_update, $last_maintenance, $last_repack, $repack_status, $hash, $force_import_type, $need_to_check)

Lists all tapes.

**API Key Scope**: tapes / index

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$tape_library_id = 'tape_library_id_example'; // string | Filter on tape library id
$pool_id = 'pool_id_example'; // string | Filter on a pool id
$barcode = 'barcode_example'; // string | Filter on barcode
$location = 'location_example'; // string | Filter on location
$type = 'type_example'; // string | Filter on type
$locked = 'locked_example'; // string | Filter on locked
$scratch = 'scratch_example'; // string | Filter on scratch
$cleaning = 'cleaning_example'; // string | Filter on cleaning
$write_protect = 'write_protect_example'; // string | Filter on write protect
$mounted = 'mounted_example'; // string | Filter on mounted
$ejected = 'ejected_example'; // string | Filter on ejected
$known = 'known_example'; // string | Filter on known
$mount_count = 'mount_count_example'; // string | Filter on mount count
$date_in = 'date_in_example'; // string | Filter on date in
$date_move = 'date_move_example'; // string | Filter on date move
$free = 'free_example'; // string | Filter on free
$max = 'max_example'; // string | Filter on max
$last_size_update = 'last_size_update_example'; // string | Filter on last size update
$last_maintenance = 'last_maintenance_example'; // string | Filter on last maintenance
$last_repack = 'last_repack_example'; // string | Filter on last repack
$repack_status = 'repack_status_example'; // string | Filter on repack status
$hash = 'hash_example'; // string | Filter on hash
$force_import_type = 'force_import_type_example'; // string | Filter on force import type
$need_to_check = 'need_to_check_example'; // string | Filter on need to check

try {
    $result = $apiInstance->indexTapes($limit, $offset, $sort_by, $id, $tape_library_id, $pool_id, $barcode, $location, $type, $locked, $scratch, $cleaning, $write_protect, $mounted, $ejected, $known, $mount_count, $date_in, $date_move, $free, $max, $last_size_update, $last_maintenance, $last_repack, $repack_status, $hash, $force_import_type, $need_to_check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->indexTapes: ', $e->getMessage(), PHP_EOL;
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
 **tape_library_id** | **string**| Filter on tape library id | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]
 **barcode** | **string**| Filter on barcode | [optional]
 **location** | **string**| Filter on location | [optional]
 **type** | **string**| Filter on type | [optional]
 **locked** | **string**| Filter on locked | [optional]
 **scratch** | **string**| Filter on scratch | [optional]
 **cleaning** | **string**| Filter on cleaning | [optional]
 **write_protect** | **string**| Filter on write protect | [optional]
 **mounted** | **string**| Filter on mounted | [optional]
 **ejected** | **string**| Filter on ejected | [optional]
 **known** | **string**| Filter on known | [optional]
 **mount_count** | **string**| Filter on mount count | [optional]
 **date_in** | **string**| Filter on date in | [optional]
 **date_move** | **string**| Filter on date move | [optional]
 **free** | **string**| Filter on free | [optional]
 **max** | **string**| Filter on max | [optional]
 **last_size_update** | **string**| Filter on last size update | [optional]
 **last_maintenance** | **string**| Filter on last maintenance | [optional]
 **last_repack** | **string**| Filter on last repack | [optional]
 **repack_status** | **string**| Filter on repack status | [optional]
 **hash** | **string**| Filter on hash | [optional]
 **force_import_type** | **string**| Filter on force import type | [optional]
 **need_to_check** | **string**| Filter on need to check | [optional]

### Return type

[**\NodeumSDK\Client\Model\TapeCollection**](../Model/TapeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapesByPool

> \NodeumSDK\Client\Model\TapeCollection indexTapesByPool($pool_id, $limit, $offset, $sort_by, $id, $tape_library_id, $barcode, $location, $type, $locked, $scratch, $cleaning, $write_protect, $mounted, $ejected, $known, $mount_count, $date_in, $date_move, $free, $max, $last_size_update, $last_maintenance, $last_repack, $repack_status, $hash, $force_import_type, $need_to_check)

Lists all tapes.

**API Key Scope**: tapes / index

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
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
$tape_library_id = 'tape_library_id_example'; // string | Filter on tape library id
$barcode = 'barcode_example'; // string | Filter on barcode
$location = 'location_example'; // string | Filter on location
$type = 'type_example'; // string | Filter on type
$locked = 'locked_example'; // string | Filter on locked
$scratch = 'scratch_example'; // string | Filter on scratch
$cleaning = 'cleaning_example'; // string | Filter on cleaning
$write_protect = 'write_protect_example'; // string | Filter on write protect
$mounted = 'mounted_example'; // string | Filter on mounted
$ejected = 'ejected_example'; // string | Filter on ejected
$known = 'known_example'; // string | Filter on known
$mount_count = 'mount_count_example'; // string | Filter on mount count
$date_in = 'date_in_example'; // string | Filter on date in
$date_move = 'date_move_example'; // string | Filter on date move
$free = 'free_example'; // string | Filter on free
$max = 'max_example'; // string | Filter on max
$last_size_update = 'last_size_update_example'; // string | Filter on last size update
$last_maintenance = 'last_maintenance_example'; // string | Filter on last maintenance
$last_repack = 'last_repack_example'; // string | Filter on last repack
$repack_status = 'repack_status_example'; // string | Filter on repack status
$hash = 'hash_example'; // string | Filter on hash
$force_import_type = 'force_import_type_example'; // string | Filter on force import type
$need_to_check = 'need_to_check_example'; // string | Filter on need to check

try {
    $result = $apiInstance->indexTapesByPool($pool_id, $limit, $offset, $sort_by, $id, $tape_library_id, $barcode, $location, $type, $locked, $scratch, $cleaning, $write_protect, $mounted, $ejected, $known, $mount_count, $date_in, $date_move, $free, $max, $last_size_update, $last_maintenance, $last_repack, $repack_status, $hash, $force_import_type, $need_to_check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->indexTapesByPool: ', $e->getMessage(), PHP_EOL;
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
 **tape_library_id** | **string**| Filter on tape library id | [optional]
 **barcode** | **string**| Filter on barcode | [optional]
 **location** | **string**| Filter on location | [optional]
 **type** | **string**| Filter on type | [optional]
 **locked** | **string**| Filter on locked | [optional]
 **scratch** | **string**| Filter on scratch | [optional]
 **cleaning** | **string**| Filter on cleaning | [optional]
 **write_protect** | **string**| Filter on write protect | [optional]
 **mounted** | **string**| Filter on mounted | [optional]
 **ejected** | **string**| Filter on ejected | [optional]
 **known** | **string**| Filter on known | [optional]
 **mount_count** | **string**| Filter on mount count | [optional]
 **date_in** | **string**| Filter on date in | [optional]
 **date_move** | **string**| Filter on date move | [optional]
 **free** | **string**| Filter on free | [optional]
 **max** | **string**| Filter on max | [optional]
 **last_size_update** | **string**| Filter on last size update | [optional]
 **last_maintenance** | **string**| Filter on last maintenance | [optional]
 **last_repack** | **string**| Filter on last repack | [optional]
 **repack_status** | **string**| Filter on repack status | [optional]
 **hash** | **string**| Filter on hash | [optional]
 **force_import_type** | **string**| Filter on force import type | [optional]
 **need_to_check** | **string**| Filter on need to check | [optional]

### Return type

[**\NodeumSDK\Client\Model\TapeCollection**](../Model/TapeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapesByTapeLibrary

> \NodeumSDK\Client\Model\TapeCollection indexTapesByTapeLibrary($tape_library_id, $limit, $offset, $sort_by, $id, $pool_id, $barcode, $location, $type, $locked, $scratch, $cleaning, $write_protect, $mounted, $ejected, $known, $mount_count, $date_in, $date_move, $free, $max, $last_size_update, $last_maintenance, $last_repack, $repack_status, $hash, $force_import_type, $need_to_check)

Lists all tapes.

**API Key Scope**: tapes / index

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$limit = 56; // int | The number of items to display for pagination.
$offset = 56; // int | The number of items to skip for pagination.
$sort_by = array('sort_by_example'); // string[] | Sort results by attribute.  Can sort on multiple attributes, separated by `|`. Order direction can be suffixing the attribute by either `:asc` (default) or `:desc`.
$id = 'id_example'; // string | Filter on id
$pool_id = 'pool_id_example'; // string | Filter on a pool id
$barcode = 'barcode_example'; // string | Filter on barcode
$location = 'location_example'; // string | Filter on location
$type = 'type_example'; // string | Filter on type
$locked = 'locked_example'; // string | Filter on locked
$scratch = 'scratch_example'; // string | Filter on scratch
$cleaning = 'cleaning_example'; // string | Filter on cleaning
$write_protect = 'write_protect_example'; // string | Filter on write protect
$mounted = 'mounted_example'; // string | Filter on mounted
$ejected = 'ejected_example'; // string | Filter on ejected
$known = 'known_example'; // string | Filter on known
$mount_count = 'mount_count_example'; // string | Filter on mount count
$date_in = 'date_in_example'; // string | Filter on date in
$date_move = 'date_move_example'; // string | Filter on date move
$free = 'free_example'; // string | Filter on free
$max = 'max_example'; // string | Filter on max
$last_size_update = 'last_size_update_example'; // string | Filter on last size update
$last_maintenance = 'last_maintenance_example'; // string | Filter on last maintenance
$last_repack = 'last_repack_example'; // string | Filter on last repack
$repack_status = 'repack_status_example'; // string | Filter on repack status
$hash = 'hash_example'; // string | Filter on hash
$force_import_type = 'force_import_type_example'; // string | Filter on force import type
$need_to_check = 'need_to_check_example'; // string | Filter on need to check

try {
    $result = $apiInstance->indexTapesByTapeLibrary($tape_library_id, $limit, $offset, $sort_by, $id, $pool_id, $barcode, $location, $type, $locked, $scratch, $cleaning, $write_protect, $mounted, $ejected, $known, $mount_count, $date_in, $date_move, $free, $max, $last_size_update, $last_maintenance, $last_repack, $repack_status, $hash, $force_import_type, $need_to_check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->indexTapesByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **limit** | **int**| The number of items to display for pagination. | [optional]
 **offset** | **int**| The number of items to skip for pagination. | [optional]
 **sort_by** | [**string[]**](../Model/string.md)| Sort results by attribute.  Can sort on multiple attributes, separated by &#x60;|&#x60;. Order direction can be suffixing the attribute by either &#x60;:asc&#x60; (default) or &#x60;:desc&#x60;. | [optional]
 **id** | **string**| Filter on id | [optional]
 **pool_id** | **string**| Filter on a pool id | [optional]
 **barcode** | **string**| Filter on barcode | [optional]
 **location** | **string**| Filter on location | [optional]
 **type** | **string**| Filter on type | [optional]
 **locked** | **string**| Filter on locked | [optional]
 **scratch** | **string**| Filter on scratch | [optional]
 **cleaning** | **string**| Filter on cleaning | [optional]
 **write_protect** | **string**| Filter on write protect | [optional]
 **mounted** | **string**| Filter on mounted | [optional]
 **ejected** | **string**| Filter on ejected | [optional]
 **known** | **string**| Filter on known | [optional]
 **mount_count** | **string**| Filter on mount count | [optional]
 **date_in** | **string**| Filter on date in | [optional]
 **date_move** | **string**| Filter on date move | [optional]
 **free** | **string**| Filter on free | [optional]
 **max** | **string**| Filter on max | [optional]
 **last_size_update** | **string**| Filter on last size update | [optional]
 **last_maintenance** | **string**| Filter on last maintenance | [optional]
 **last_repack** | **string**| Filter on last repack | [optional]
 **repack_status** | **string**| Filter on repack status | [optional]
 **hash** | **string**| Filter on hash | [optional]
 **force_import_type** | **string**| Filter on force import type | [optional]
 **need_to_check** | **string**| Filter on need to check | [optional]

### Return type

[**\NodeumSDK\Client\Model\TapeCollection**](../Model/TapeCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mountStatusTape

> \NodeumSDK\Client\Model\MountStatus mountStatusTape($tape_id)

Get mount status of Tape.

**API Key Scope**: tapes / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->mountStatusTape($tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->mountStatusTape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

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


## mountStatusTapeByPool

> \NodeumSDK\Client\Model\MountStatus mountStatusTapeByPool($pool_id, $tape_id)

Get mount status of Tape.

**API Key Scope**: tapes / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->mountStatusTapeByPool($pool_id, $tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->mountStatusTapeByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

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


## mountStatusTapeByTapeLibrary

> \NodeumSDK\Client\Model\MountStatus mountStatusTapeByTapeLibrary($tape_library_id, $tape_id)

Get mount status of Tape.

**API Key Scope**: tapes / mount_status

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->mountStatusTapeByTapeLibrary($tape_library_id, $tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->mountStatusTapeByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

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


## showTape

> \NodeumSDK\Client\Model\Tape showTape($tape_id)

Displays a specific tape.

**API Key Scope**: tapes / show

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->showTape($tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->showTape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

### Return type

[**\NodeumSDK\Client\Model\Tape**](../Model/Tape.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeByPool

> \NodeumSDK\Client\Model\Tape showTapeByPool($pool_id, $tape_id)

Displays a specific tape.

**API Key Scope**: tapes / show

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->showTapeByPool($pool_id, $tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->showTapeByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

### Return type

[**\NodeumSDK\Client\Model\Tape**](../Model/Tape.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeByTapeLibrary

> \NodeumSDK\Client\Model\Tape showTapeByTapeLibrary($tape_library_id, $tape_id)

Displays a specific tape.

**API Key Scope**: tapes / show

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->showTapeByTapeLibrary($tape_library_id, $tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->showTapeByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

### Return type

[**\NodeumSDK\Client\Model\Tape**](../Model/Tape.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeStat

> \NodeumSDK\Client\Model\TapeStat showTapeStat($tape_id)

Display statistic for a specific tape.

**API Key Scope**: tape_stats / show

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->showTapeStat($tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->showTapeStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

### Return type

[**\NodeumSDK\Client\Model\TapeStat**](../Model/TapeStat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeStatByPool

> \NodeumSDK\Client\Model\TapeStat showTapeStatByPool($pool_id, $tape_id)

Display statistic for a specific tape.

**API Key Scope**: tape_stats / show

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_id = 'pool_id_example'; // string | Numeric ID, or name of pool.
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->showTapeStatByPool($pool_id, $tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->showTapeStatByPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| Numeric ID, or name of pool. |
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

### Return type

[**\NodeumSDK\Client\Model\TapeStat**](../Model/TapeStat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeStatByTapeLibrary

> \NodeumSDK\Client\Model\TapeStat showTapeStatByTapeLibrary($tape_library_id, $tape_id)

Display statistic for a specific tape.

**API Key Scope**: tape_stats / show

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


$apiInstance = new NodeumSDK\Client\Api\TapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_id = 'tape_id_example'; // string | Numeric ID, or barcode of tape.

try {
    $result = $apiInstance->showTapeStatByTapeLibrary($tape_library_id, $tape_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapesApi->showTapeStatByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_id** | **string**| Numeric ID, or barcode of tape. |

### Return type

[**\NodeumSDK\Client\Model\TapeStat**](../Model/TapeStat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

