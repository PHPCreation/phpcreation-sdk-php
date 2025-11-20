# OpenAPI\Client\StorageFilesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiStorageFilesGetCollection()**](StorageFilesApi.md#apiStorageFilesGetCollection) | **GET** /open-api/v3/storage_files | Retrieves the collection of storage_files resources. |
| [**apiStorageFilesIdDelete()**](StorageFilesApi.md#apiStorageFilesIdDelete) | **DELETE** /open-api/v3/storage_files/{id} | Removes the storage_files resource. |
| [**apiStorageFilesIdGet()**](StorageFilesApi.md#apiStorageFilesIdGet) | **GET** /open-api/v3/storage_files/{id} | Retrieves a storage_files resource. |
| [**apiStorageFilesIdPut()**](StorageFilesApi.md#apiStorageFilesIdPut) | **PUT** /open-api/v3/storage_files/{id} | Replaces the storage_files resource. |
| [**storageFileApiFileCreate()**](StorageFilesApi.md#storageFileApiFileCreate) | **POST** /open-api/v3/storage_files | Creates a storage_files resource. |
| [**storageFileApiFileUpload()**](StorageFilesApi.md#storageFileApiFileUpload) | **POST** /open-api/v3/storage_files/file/upload | Creates a storage_files resource. |
| [**storageFileDropDown()**](StorageFilesApi.md#storageFileDropDown) | **GET** /open-api/v3/storage_files/dropdown/get | Retrieves the collection of storage_files resources. |
| [**storageFileDuplicate()**](StorageFilesApi.md#storageFileDuplicate) | **GET** /open-api/v3/storage_files/duplicate/{id} | Retrieves a storage_files resource. |
| [**storageFileFetchFiles()**](StorageFilesApi.md#storageFileFetchFiles) | **GET** /open-api/v3/storage_files/fetch_files/{id} | Retrieves a storage_files resource. |
| [**storageFileGetBase64Response()**](StorageFilesApi.md#storageFileGetBase64Response) | **GET** /open-api/v3/storage_files/{id}/base64 | Retrieves a storage_files resource. |
| [**storageFileGetBinaryResponse()**](StorageFilesApi.md#storageFileGetBinaryResponse) | **GET** /open-api/v3/storage_files/{id}/bin | Retrieves a storage_files resource. |
| [**storageFileGetBinaryResponseFromPath()**](StorageFilesApi.md#storageFileGetBinaryResponseFromPath) | **GET** /open-api/v3/storage_files/{path}/bin_from_path/{fileName} | Retrieves a storage_files resource. |
| [**storageFileGetBySlug()**](StorageFilesApi.md#storageFileGetBySlug) | **GET** /open-api/v3/storage_files/by_slug/{slug} | Retrieves a storage_files resource. |
| [**storageFileGetDeleteRelations()**](StorageFilesApi.md#storageFileGetDeleteRelations) | **GET** /open-api/v3/storage_files/get_delete_relations/{id} | Retrieves a storage_files resource. |
| [**storageFileMetadata()**](StorageFilesApi.md#storageFileMetadata) | **GET** /open-api/v3/storage_files/metadata/{id} | Retrieves a storage_files resource. |
| [**storageFileUploadFromForm()**](StorageFilesApi.md#storageFileUploadFromForm) | **POST** /open-api/v3/storage_files/form | Creates a storage_files resource. |


## `apiStorageFilesGetCollection()`

```php
apiStorageFilesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $path, $search, $order_id, $order_path, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiStorageFilesGetCollection200Response
```

Retrieves the collection of storage_files resources.

Retrieves the collection of storage_files resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$path = 'path_example'; // string | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_path = 'order_path_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | storage_files slug_partial
$slug_start_with = 'slug_start_with_example'; // string | storage_files slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | storage_files slug_end_with
$id_partial = 'id_partial_example'; // string | storage_files id_partial
$id_start_with = 'id_start_with_example'; // string | storage_files id_start_with
$id_end_with = 'id_end_with_example'; // string | storage_files id_end_with

try {
    $result = $apiInstance->apiStorageFilesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $path, $search, $order_id, $order_path, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->apiStorageFilesGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **path** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_path** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| storage_files slug_partial | [optional] |
| **slug_start_with** | **string**| storage_files slug_start_with | [optional] |
| **slug_end_with** | **string**| storage_files slug_end_with | [optional] |
| **id_partial** | **string**| storage_files id_partial | [optional] |
| **id_start_with** | **string**| storage_files id_start_with | [optional] |
| **id_end_with** | **string**| storage_files id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiStorageFilesGetCollection200Response**](../Model/ApiStorageFilesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageFilesIdDelete()`

```php
apiStorageFilesIdDelete($id)
```

Removes the storage_files resource.

Removes the storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $apiInstance->apiStorageFilesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->apiStorageFilesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageFilesIdGet()`

```php
apiStorageFilesIdGet($id): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingList
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $result = $apiInstance->apiStorageFilesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->apiStorageFilesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingList**](../Model/StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageFilesIdPut()`

```php
apiStorageFilesIdPut($id, $storage_files_jsonld_add_post): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the storage_files resource.

Replaces the storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier
$storage_files_jsonld_add_post = new \OpenAPI\Client\Model\StorageFilesJsonldAddPost(); // \OpenAPI\Client\Model\StorageFilesJsonldAddPost | The updated storage_files resource

try {
    $result = $apiInstance->apiStorageFilesIdPut($id, $storage_files_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->apiStorageFilesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |
| **storage_files_jsonld_add_post** | [**\OpenAPI\Client\Model\StorageFilesJsonldAddPost**](../Model/StorageFilesJsonldAddPost.md)| The updated storage_files resource | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/StorageFilesJsonldStorageFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileApiFileCreate()`

```php
storageFileApiFileCreate($storage_files_jsonld): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow
```

Creates a storage_files resource.

Creates a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storage_files_jsonld = new \OpenAPI\Client\Model\StorageFilesJsonld(); // \OpenAPI\Client\Model\StorageFilesJsonld | The new storage_files resource

try {
    $result = $apiInstance->storageFileApiFileCreate($storage_files_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileApiFileCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storage_files_jsonld** | [**\OpenAPI\Client\Model\StorageFilesJsonld**](../Model/StorageFilesJsonld.md)| The new storage_files resource | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow**](../Model/StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileApiFileUpload()`

```php
storageFileApiFileUpload($storage_files_jsonld_file_upload): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow
```

Creates a storage_files resource.

Creates a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storage_files_jsonld_file_upload = new \OpenAPI\Client\Model\StorageFilesJsonldFileUpload(); // \OpenAPI\Client\Model\StorageFilesJsonldFileUpload | The new storage_files resource

try {
    $result = $apiInstance->storageFileApiFileUpload($storage_files_jsonld_file_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storage_files_jsonld_file_upload** | [**\OpenAPI\Client\Model\StorageFilesJsonldFileUpload**](../Model/StorageFilesJsonldFileUpload.md)| The new storage_files resource | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow**](../Model/StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileDropDown()`

```php
storageFileDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $path, $search, $order_id, $order_path, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\StorageFileDropDown200Response
```

Retrieves the collection of storage_files resources.

Retrieves the collection of storage_files resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$path = 'path_example'; // string | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_path = 'order_path_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->storageFileDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $path, $search, $order_id, $order_path, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **path** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_path** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\StorageFileDropDown200Response**](../Model/StorageFileDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileDuplicate()`

```php
storageFileDuplicate($id): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingList
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingList**](../Model/StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileFetchFiles()`

```php
storageFileFetchFiles($id): \OpenAPI\Client\Model\StorageFilesJsonld
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonld**](../Model/StorageFilesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileGetBase64Response()`

```php
storageFileGetBase64Response($id): \OpenAPI\Client\Model\StorageFilesJsonld
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileGetBase64Response($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileGetBase64Response: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonld**](../Model/StorageFilesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileGetBinaryResponse()`

```php
storageFileGetBinaryResponse($id): \OpenAPI\Client\Model\StorageFilesJsonld
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileGetBinaryResponse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileGetBinaryResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonld**](../Model/StorageFilesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileGetBinaryResponseFromPath()`

```php
storageFileGetBinaryResponseFromPath($path, $file_name): \OpenAPI\Client\Model\StorageFilesJsonld
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | storage_files identifier
$file_name = 'file_name_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileGetBinaryResponseFromPath($path, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileGetBinaryResponseFromPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| storage_files identifier | |
| **file_name** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonld**](../Model/StorageFilesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileGetBySlug()`

```php
storageFileGetBySlug($slug): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdCustomPropertyTimestampableTagTaggingList**](../Model/StorageFilesJsonldStorageFileShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileGetDeleteRelations()`

```php
storageFileGetDeleteRelations($id): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileRelations
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileRelations**](../Model/StorageFilesJsonldStorageFileRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileMetadata()`

```php
storageFileMetadata($id): \OpenAPI\Client\Model\StorageFilesJsonldIdStandardMetadataStorageFileMetadataTagTaggingListStorageFileRelationsTimestampable
```

Retrieves a storage_files resource.

Retrieves a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_files identifier

try {
    $result = $apiInstance->storageFileMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_files identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldIdStandardMetadataStorageFileMetadataTagTaggingListStorageFileRelationsTimestampable**](../Model/StorageFilesJsonldIdStandardMetadataStorageFileMetadataTagTaggingListStorageFileRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageFileUploadFromForm()`

```php
storageFileUploadFromForm($file, $subfolder): \OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow
```

Creates a storage_files resource.

Creates a storage_files resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject
$subfolder = 'subfolder_example'; // string

try {
    $result = $apiInstance->storageFileUploadFromForm($file, $subfolder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageFilesApi->storageFileUploadFromForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **subfolder** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow**](../Model/StorageFilesJsonldStorageFileShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
