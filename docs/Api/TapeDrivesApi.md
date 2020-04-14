# NodeumSDK\Client\TapeDrivesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTapeDriveByTapeLibrary**](TapeDrivesApi.md#createTapeDriveByTapeLibrary) | **POST** /tape_libraries/{tape_library_id}/tape_drives | Creates a new tape drive.
[**destroyTapeDrive**](TapeDrivesApi.md#destroyTapeDrive) | **DELETE** /tape_drives/{tape_drive_id} | Destroys a specific tape drive.
[**destroyTapeDriveByTapeLibrary**](TapeDrivesApi.md#destroyTapeDriveByTapeLibrary) | **DELETE** /tape_libraries/{tape_library_id}/tape_drives/{tape_drive_id} | Destroys a specific tape drive.
[**indexTapeDriveDevices**](TapeDrivesApi.md#indexTapeDriveDevices) | **GET** /tape_libraries/{tape_library_id}/tape_drives/-/devices | Lists tape drives devices.
[**indexTapeDrives**](TapeDrivesApi.md#indexTapeDrives) | **GET** /tape_drives | Lists all tape drives.
[**indexTapeDrivesByTapeLibrary**](TapeDrivesApi.md#indexTapeDrivesByTapeLibrary) | **GET** /tape_libraries/{tape_library_id}/tape_drives | Lists all tape drives.
[**showTapeDrive**](TapeDrivesApi.md#showTapeDrive) | **GET** /tape_drives/{tape_drive_id} | Displays a specific tape drive.
[**showTapeDriveByTapeLibrary**](TapeDrivesApi.md#showTapeDriveByTapeLibrary) | **GET** /tape_libraries/{tape_library_id}/tape_drives/{tape_drive_id} | Displays a specific tape drive.
[**updateTapeDrive**](TapeDrivesApi.md#updateTapeDrive) | **PUT** /tape_drives/{tape_drive_id} | Updates a specific tape drive.
[**updateTapeDriveByTapeLibrary**](TapeDrivesApi.md#updateTapeDriveByTapeLibrary) | **PUT** /tape_libraries/{tape_library_id}/tape_drives/{tape_drive_id} | Updates a specific tape drive.



## createTapeDriveByTapeLibrary

> \NodeumSDK\Client\Model\TapeDrive createTapeDriveByTapeLibrary($tape_library_id, $tape_drive_body)

Creates a new tape drive.

**API Key Scope**: tape_drives / create

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_drive_body = new \NodeumSDK\Client\Model\TapeDrive(); // \NodeumSDK\Client\Model\TapeDrive | 

try {
    $result = $apiInstance->createTapeDriveByTapeLibrary($tape_library_id, $tape_drive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->createTapeDriveByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_drive_body** | [**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTapeDrive

> destroyTapeDrive($tape_drive_id)

Destroys a specific tape drive.

**API Key Scope**: tape_drives / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_drive_id = 'tape_drive_id_example'; // string | Numeric ID, serial, or name of tape drive.

try {
    $apiInstance->destroyTapeDrive($tape_drive_id);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->destroyTapeDrive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_drive_id** | **string**| Numeric ID, serial, or name of tape drive. |

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


## destroyTapeDriveByTapeLibrary

> destroyTapeDriveByTapeLibrary($tape_library_id, $tape_drive_id)

Destroys a specific tape drive.

**API Key Scope**: tape_drives / destroy

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_drive_id = 'tape_drive_id_example'; // string | Numeric ID, serial, or name of tape drive.

try {
    $apiInstance->destroyTapeDriveByTapeLibrary($tape_library_id, $tape_drive_id);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->destroyTapeDriveByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_drive_id** | **string**| Numeric ID, serial, or name of tape drive. |

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


## indexTapeDriveDevices

> \NodeumSDK\Client\Model\TapeDriveDeviceCollection indexTapeDriveDevices($tape_library_id, $job_id)

Lists tape drives devices.

**API Key Scope**: tape_drives / devices

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$job_id = 'job_id_example'; // string | ID of active job

try {
    $result = $apiInstance->indexTapeDriveDevices($tape_library_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->indexTapeDriveDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **job_id** | **string**| ID of active job |

### Return type

[**\NodeumSDK\Client\Model\TapeDriveDeviceCollection**](../Model/TapeDriveDeviceCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, queued, working, failed, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapeDrives

> \NodeumSDK\Client\Model\TapeDriveCollection indexTapeDrives($limit, $offset, $sort_by, $id, $tape_library_id, $name, $serial, $comment, $scsi_address, $vendor, $product, $firmware, $device, $sgdevice, $libso, $acs, $lsm, $panel, $transport, $status, $full, $mount_count, $use_to, $use_by, $barcode, $task_id, $use_file_processed_size, $use_file_size_to_process, $use_file_name_processed, $bandwidth)

Lists all tape drives.

**API Key Scope**: tape_drives / index

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
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
$name = 'name_example'; // string | Filter on name
$serial = 'serial_example'; // string | Filter on serial
$comment = 'comment_example'; // string | Filter on comment
$scsi_address = 'scsi_address_example'; // string | Filter on scsi address
$vendor = 'vendor_example'; // string | Filter on vendor
$product = 'product_example'; // string | Filter on product
$firmware = 'firmware_example'; // string | Filter on firmware
$device = 'device_example'; // string | Filter on device
$sgdevice = 'sgdevice_example'; // string | Filter on sgdevice
$libso = 'libso_example'; // string | Filter on libso
$acs = 'acs_example'; // string | Filter on acs
$lsm = 'lsm_example'; // string | Filter on lsm
$panel = 'panel_example'; // string | Filter on panel
$transport = 'transport_example'; // string | Filter on transport
$status = 'status_example'; // string | Filter on status
$full = 'full_example'; // string | Filter on full
$mount_count = 'mount_count_example'; // string | Filter on mount count
$use_to = 'use_to_example'; // string | Filter on use to
$use_by = 'use_by_example'; // string | Filter on use by
$barcode = 'barcode_example'; // string | Filter on barcode
$task_id = 'task_id_example'; // string | Filter on task id
$use_file_processed_size = 'use_file_processed_size_example'; // string | Filter on use file processed size
$use_file_size_to_process = 'use_file_size_to_process_example'; // string | Filter on use file size to process
$use_file_name_processed = 'use_file_name_processed_example'; // string | Filter on use file name processed
$bandwidth = 'bandwidth_example'; // string | Filter on bandwidth

try {
    $result = $apiInstance->indexTapeDrives($limit, $offset, $sort_by, $id, $tape_library_id, $name, $serial, $comment, $scsi_address, $vendor, $product, $firmware, $device, $sgdevice, $libso, $acs, $lsm, $panel, $transport, $status, $full, $mount_count, $use_to, $use_by, $barcode, $task_id, $use_file_processed_size, $use_file_size_to_process, $use_file_name_processed, $bandwidth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->indexTapeDrives: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| Filter on name | [optional]
 **serial** | **string**| Filter on serial | [optional]
 **comment** | **string**| Filter on comment | [optional]
 **scsi_address** | **string**| Filter on scsi address | [optional]
 **vendor** | **string**| Filter on vendor | [optional]
 **product** | **string**| Filter on product | [optional]
 **firmware** | **string**| Filter on firmware | [optional]
 **device** | **string**| Filter on device | [optional]
 **sgdevice** | **string**| Filter on sgdevice | [optional]
 **libso** | **string**| Filter on libso | [optional]
 **acs** | **string**| Filter on acs | [optional]
 **lsm** | **string**| Filter on lsm | [optional]
 **panel** | **string**| Filter on panel | [optional]
 **transport** | **string**| Filter on transport | [optional]
 **status** | **string**| Filter on status | [optional]
 **full** | **string**| Filter on full | [optional]
 **mount_count** | **string**| Filter on mount count | [optional]
 **use_to** | **string**| Filter on use to | [optional]
 **use_by** | **string**| Filter on use by | [optional]
 **barcode** | **string**| Filter on barcode | [optional]
 **task_id** | **string**| Filter on task id | [optional]
 **use_file_processed_size** | **string**| Filter on use file processed size | [optional]
 **use_file_size_to_process** | **string**| Filter on use file size to process | [optional]
 **use_file_name_processed** | **string**| Filter on use file name processed | [optional]
 **bandwidth** | **string**| Filter on bandwidth | [optional]

### Return type

[**\NodeumSDK\Client\Model\TapeDriveCollection**](../Model/TapeDriveCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## indexTapeDrivesByTapeLibrary

> \NodeumSDK\Client\Model\TapeDriveCollection indexTapeDrivesByTapeLibrary($tape_library_id, $limit, $offset, $sort_by, $id, $name, $serial, $comment, $scsi_address, $vendor, $product, $firmware, $device, $sgdevice, $libso, $acs, $lsm, $panel, $transport, $status, $full, $mount_count, $use_to, $use_by, $barcode, $task_id, $use_file_processed_size, $use_file_size_to_process, $use_file_name_processed, $bandwidth)

Lists all tape drives.

**API Key Scope**: tape_drives / index

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
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
$name = 'name_example'; // string | Filter on name
$serial = 'serial_example'; // string | Filter on serial
$comment = 'comment_example'; // string | Filter on comment
$scsi_address = 'scsi_address_example'; // string | Filter on scsi address
$vendor = 'vendor_example'; // string | Filter on vendor
$product = 'product_example'; // string | Filter on product
$firmware = 'firmware_example'; // string | Filter on firmware
$device = 'device_example'; // string | Filter on device
$sgdevice = 'sgdevice_example'; // string | Filter on sgdevice
$libso = 'libso_example'; // string | Filter on libso
$acs = 'acs_example'; // string | Filter on acs
$lsm = 'lsm_example'; // string | Filter on lsm
$panel = 'panel_example'; // string | Filter on panel
$transport = 'transport_example'; // string | Filter on transport
$status = 'status_example'; // string | Filter on status
$full = 'full_example'; // string | Filter on full
$mount_count = 'mount_count_example'; // string | Filter on mount count
$use_to = 'use_to_example'; // string | Filter on use to
$use_by = 'use_by_example'; // string | Filter on use by
$barcode = 'barcode_example'; // string | Filter on barcode
$task_id = 'task_id_example'; // string | Filter on task id
$use_file_processed_size = 'use_file_processed_size_example'; // string | Filter on use file processed size
$use_file_size_to_process = 'use_file_size_to_process_example'; // string | Filter on use file size to process
$use_file_name_processed = 'use_file_name_processed_example'; // string | Filter on use file name processed
$bandwidth = 'bandwidth_example'; // string | Filter on bandwidth

try {
    $result = $apiInstance->indexTapeDrivesByTapeLibrary($tape_library_id, $limit, $offset, $sort_by, $id, $name, $serial, $comment, $scsi_address, $vendor, $product, $firmware, $device, $sgdevice, $libso, $acs, $lsm, $panel, $transport, $status, $full, $mount_count, $use_to, $use_by, $barcode, $task_id, $use_file_processed_size, $use_file_size_to_process, $use_file_name_processed, $bandwidth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->indexTapeDrivesByTapeLibrary: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| Filter on name | [optional]
 **serial** | **string**| Filter on serial | [optional]
 **comment** | **string**| Filter on comment | [optional]
 **scsi_address** | **string**| Filter on scsi address | [optional]
 **vendor** | **string**| Filter on vendor | [optional]
 **product** | **string**| Filter on product | [optional]
 **firmware** | **string**| Filter on firmware | [optional]
 **device** | **string**| Filter on device | [optional]
 **sgdevice** | **string**| Filter on sgdevice | [optional]
 **libso** | **string**| Filter on libso | [optional]
 **acs** | **string**| Filter on acs | [optional]
 **lsm** | **string**| Filter on lsm | [optional]
 **panel** | **string**| Filter on panel | [optional]
 **transport** | **string**| Filter on transport | [optional]
 **status** | **string**| Filter on status | [optional]
 **full** | **string**| Filter on full | [optional]
 **mount_count** | **string**| Filter on mount count | [optional]
 **use_to** | **string**| Filter on use to | [optional]
 **use_by** | **string**| Filter on use by | [optional]
 **barcode** | **string**| Filter on barcode | [optional]
 **task_id** | **string**| Filter on task id | [optional]
 **use_file_processed_size** | **string**| Filter on use file processed size | [optional]
 **use_file_size_to_process** | **string**| Filter on use file size to process | [optional]
 **use_file_name_processed** | **string**| Filter on use file name processed | [optional]
 **bandwidth** | **string**| Filter on bandwidth | [optional]

### Return type

[**\NodeumSDK\Client\Model\TapeDriveCollection**](../Model/TapeDriveCollection.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeDrive

> \NodeumSDK\Client\Model\TapeDrive showTapeDrive($tape_drive_id)

Displays a specific tape drive.

**API Key Scope**: tape_drives / show

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_drive_id = 'tape_drive_id_example'; // string | Numeric ID, serial, or name of tape drive.

try {
    $result = $apiInstance->showTapeDrive($tape_drive_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->showTapeDrive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_drive_id** | **string**| Numeric ID, serial, or name of tape drive. |

### Return type

[**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTapeDriveByTapeLibrary

> \NodeumSDK\Client\Model\TapeDrive showTapeDriveByTapeLibrary($tape_library_id, $tape_drive_id)

Displays a specific tape drive.

**API Key Scope**: tape_drives / show

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_drive_id = 'tape_drive_id_example'; // string | Numeric ID, serial, or name of tape drive.

try {
    $result = $apiInstance->showTapeDriveByTapeLibrary($tape_library_id, $tape_drive_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->showTapeDriveByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_drive_id** | **string**| Numeric ID, serial, or name of tape drive. |

### Return type

[**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTapeDrive

> \NodeumSDK\Client\Model\TapeDrive updateTapeDrive($tape_drive_id, $tape_drive_body)

Updates a specific tape drive.

**API Key Scope**: tape_drives / update

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_drive_id = 'tape_drive_id_example'; // string | Numeric ID, serial, or name of tape drive.
$tape_drive_body = new \NodeumSDK\Client\Model\TapeDrive(); // \NodeumSDK\Client\Model\TapeDrive | 

try {
    $result = $apiInstance->updateTapeDrive($tape_drive_id, $tape_drive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->updateTapeDrive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_drive_id** | **string**| Numeric ID, serial, or name of tape drive. |
 **tape_drive_body** | [**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTapeDriveByTapeLibrary

> \NodeumSDK\Client\Model\TapeDrive updateTapeDriveByTapeLibrary($tape_library_id, $tape_drive_id, $tape_drive_body)

Updates a specific tape drive.

**API Key Scope**: tape_drives / update

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


$apiInstance = new NodeumSDK\Client\Api\TapeDrivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tape_library_id = 'tape_library_id_example'; // string | Numeric ID, serial, or name of tape library.
$tape_drive_id = 'tape_drive_id_example'; // string | Numeric ID, serial, or name of tape drive.
$tape_drive_body = new \NodeumSDK\Client\Model\TapeDrive(); // \NodeumSDK\Client\Model\TapeDrive | 

try {
    $result = $apiInstance->updateTapeDriveByTapeLibrary($tape_library_id, $tape_drive_id, $tape_drive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TapeDrivesApi->updateTapeDriveByTapeLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tape_library_id** | **string**| Numeric ID, serial, or name of tape library. |
 **tape_drive_id** | **string**| Numeric ID, serial, or name of tape drive. |
 **tape_drive_body** | [**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)|  |

### Return type

[**\NodeumSDK\Client\Model\TapeDrive**](../Model/TapeDrive.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

