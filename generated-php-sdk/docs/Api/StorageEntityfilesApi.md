# OpenAPI\Client\StorageEntityfilesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiStorageEntityfilesGetCollection()**](StorageEntityfilesApi.md#apiStorageEntityfilesGetCollection) | **GET** /open-api/v3/storage_entityfiles | Retrieves the collection of storage_entityfiles resources. |
| [**apiStorageEntityfilesIdDelete()**](StorageEntityfilesApi.md#apiStorageEntityfilesIdDelete) | **DELETE** /open-api/v3/storage_entityfiles/{id} | Removes the storage_entityfiles resource. |
| [**apiStorageEntityfilesIdGet()**](StorageEntityfilesApi.md#apiStorageEntityfilesIdGet) | **GET** /open-api/v3/storage_entityfiles/{id} | Retrieves a storage_entityfiles resource. |
| [**apiStorageEntityfilesIdPut()**](StorageEntityfilesApi.md#apiStorageEntityfilesIdPut) | **PUT** /open-api/v3/storage_entityfiles/{id} | Replaces the storage_entityfiles resource. |
| [**apiStorageEntityfilesPost()**](StorageEntityfilesApi.md#apiStorageEntityfilesPost) | **POST** /open-api/v3/storage_entityfiles | Creates a storage_entityfiles resource. |
| [**storageEntityFileDropDown()**](StorageEntityfilesApi.md#storageEntityFileDropDown) | **GET** /open-api/v3/storage_entityfiles/dropdown/get | Retrieves the collection of storage_entityfiles resources. |
| [**storageEntityFileDuplicate()**](StorageEntityfilesApi.md#storageEntityFileDuplicate) | **GET** /open-api/v3/storage_entityfiles/duplicate/{id} | Retrieves a storage_entityfiles resource. |
| [**storageEntityFileFetchFiles()**](StorageEntityfilesApi.md#storageEntityFileFetchFiles) | **GET** /open-api/v3/storage_entityfiles/fetch_files/{id} | Retrieves a storage_entityfiles resource. |
| [**storageEntityFileGetBySlug()**](StorageEntityfilesApi.md#storageEntityFileGetBySlug) | **GET** /open-api/v3/storage_entityfiles/by_slug/{slug} | Retrieves a storage_entityfiles resource. |
| [**storageEntityFileGetDeleteRelations()**](StorageEntityfilesApi.md#storageEntityFileGetDeleteRelations) | **GET** /open-api/v3/storage_entityfiles/get_delete_relations/{id} | Retrieves a storage_entityfiles resource. |
| [**storageEntityFileMetadata()**](StorageEntityfilesApi.md#storageEntityFileMetadata) | **GET** /open-api/v3/storage_entityfiles/metadata/{id} | Retrieves a storage_entityfiles resource. |


## `apiStorageEntityfilesGetCollection()`

```php
apiStorageEntityfilesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $row_id, $row_id2, $ref_table, $ref_table2, $search, $exists_deleted_at, $exists_custom_properties, $exists_link, $properties, $enabled, $tag, $order_id, $order_row_id, $order_created_at, $order_updated_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $path_partial, $path_start_with, $path_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with): \OpenAPI\Client\Model\ApiStorageEntityfilesGetCollection200Response
```

Retrieves the collection of storage_entityfiles resources.

Retrieves the collection of storage_entityfiles resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_link = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_row_id = 'order_row_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | storage_entityfiles slug_partial
$slug_start_with = 'slug_start_with_example'; // string | storage_entityfiles slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | storage_entityfiles slug_end_with
$id_partial = 'id_partial_example'; // string | storage_entityfiles id_partial
$id_start_with = 'id_start_with_example'; // string | storage_entityfiles id_start_with
$id_end_with = 'id_end_with_example'; // string | storage_entityfiles id_end_with
$path_partial = 'path_partial_example'; // string | storage_entityfiles path_partial
$path_start_with = 'path_start_with_example'; // string | storage_entityfiles path_start_with
$path_end_with = 'path_end_with_example'; // string | storage_entityfiles path_end_with
$row_id_partial = 'row_id_partial_example'; // string | storage_entityfiles rowId_partial
$row_id_start_with = 'row_id_start_with_example'; // string | storage_entityfiles rowId_start_with
$row_id_end_with = 'row_id_end_with_example'; // string | storage_entityfiles rowId_end_with
$ref_table_partial = 'ref_table_partial_example'; // string | storage_entityfiles refTable_partial
$ref_table_start_with = 'ref_table_start_with_example'; // string | storage_entityfiles refTable_start_with
$ref_table_end_with = 'ref_table_end_with_example'; // string | storage_entityfiles refTable_end_with

try {
    $result = $apiInstance->apiStorageEntityfilesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $row_id, $row_id2, $ref_table, $ref_table2, $search, $exists_deleted_at, $exists_custom_properties, $exists_link, $properties, $enabled, $tag, $order_id, $order_row_id, $order_created_at, $order_updated_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $path_partial, $path_start_with, $path_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->apiStorageEntityfilesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_link** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_row_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **slug_partial** | **string**| storage_entityfiles slug_partial | [optional] |
| **slug_start_with** | **string**| storage_entityfiles slug_start_with | [optional] |
| **slug_end_with** | **string**| storage_entityfiles slug_end_with | [optional] |
| **id_partial** | **string**| storage_entityfiles id_partial | [optional] |
| **id_start_with** | **string**| storage_entityfiles id_start_with | [optional] |
| **id_end_with** | **string**| storage_entityfiles id_end_with | [optional] |
| **path_partial** | **string**| storage_entityfiles path_partial | [optional] |
| **path_start_with** | **string**| storage_entityfiles path_start_with | [optional] |
| **path_end_with** | **string**| storage_entityfiles path_end_with | [optional] |
| **row_id_partial** | **string**| storage_entityfiles rowId_partial | [optional] |
| **row_id_start_with** | **string**| storage_entityfiles rowId_start_with | [optional] |
| **row_id_end_with** | **string**| storage_entityfiles rowId_end_with | [optional] |
| **ref_table_partial** | **string**| storage_entityfiles refTable_partial | [optional] |
| **ref_table_start_with** | **string**| storage_entityfiles refTable_start_with | [optional] |
| **ref_table_end_with** | **string**| storage_entityfiles refTable_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiStorageEntityfilesGetCollection200Response**](../Model/ApiStorageEntityfilesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageEntityfilesIdDelete()`

```php
apiStorageEntityfilesIdDelete($id)
```

Removes the storage_entityfiles resource.

Removes the storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiles identifier

try {
    $apiInstance->apiStorageEntityfilesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->apiStorageEntityfilesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiles identifier | |

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

## `apiStorageEntityfilesIdGet()`

```php
apiStorageEntityfilesIdGet($id): \OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a storage_entityfiles resource.

Retrieves a storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiles identifier

try {
    $result = $apiInstance->apiStorageEntityfilesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->apiStorageEntityfilesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiles identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageEntityfilesIdPut()`

```php
apiStorageEntityfilesIdPut($id, $storage_entityfiles_jsonld_add_post): \OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the storage_entityfiles resource.

Replaces the storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiles identifier
$storage_entityfiles_jsonld_add_post = new \OpenAPI\Client\Model\StorageEntityfilesJsonldAddPost(); // \OpenAPI\Client\Model\StorageEntityfilesJsonldAddPost | The updated storage_entityfiles resource

try {
    $result = $apiInstance->apiStorageEntityfilesIdPut($id, $storage_entityfiles_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->apiStorageEntityfilesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiles identifier | |
| **storage_entityfiles_jsonld_add_post** | [**\OpenAPI\Client\Model\StorageEntityfilesJsonldAddPost**](../Model/StorageEntityfilesJsonldAddPost.md)| The updated storage_entityfiles resource | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageEntityfilesPost()`

```php
apiStorageEntityfilesPost($storage_entityfiles_jsonld_add_post): \OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a storage_entityfiles resource.

Creates a storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storage_entityfiles_jsonld_add_post = new \OpenAPI\Client\Model\StorageEntityfilesJsonldAddPost(); // \OpenAPI\Client\Model\StorageEntityfilesJsonldAddPost | The new storage_entityfiles resource

try {
    $result = $apiInstance->apiStorageEntityfilesPost($storage_entityfiles_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->apiStorageEntityfilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storage_entityfiles_jsonld_add_post** | [**\OpenAPI\Client\Model\StorageEntityfilesJsonldAddPost**](../Model/StorageEntityfilesJsonldAddPost.md)| The new storage_entityfiles resource | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageEntityFileDropDown()`

```php
storageEntityFileDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $row_id, $row_id2, $ref_table, $ref_table2, $search, $exists_deleted_at, $exists_custom_properties, $exists_link, $properties, $enabled, $tag, $order_id, $order_row_id, $order_created_at, $order_updated_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $path_partial, $path_start_with, $path_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with): \OpenAPI\Client\Model\StorageEntityFileDropDown200Response
```

Retrieves the collection of storage_entityfiles resources.

Retrieves the collection of storage_entityfiles resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_link = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_row_id = 'order_row_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | storage_entityfiles slug_partial
$slug_start_with = 'slug_start_with_example'; // string | storage_entityfiles slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | storage_entityfiles slug_end_with
$id_partial = 'id_partial_example'; // string | storage_entityfiles id_partial
$id_start_with = 'id_start_with_example'; // string | storage_entityfiles id_start_with
$id_end_with = 'id_end_with_example'; // string | storage_entityfiles id_end_with
$path_partial = 'path_partial_example'; // string | storage_entityfiles path_partial
$path_start_with = 'path_start_with_example'; // string | storage_entityfiles path_start_with
$path_end_with = 'path_end_with_example'; // string | storage_entityfiles path_end_with
$row_id_partial = 'row_id_partial_example'; // string | storage_entityfiles rowId_partial
$row_id_start_with = 'row_id_start_with_example'; // string | storage_entityfiles rowId_start_with
$row_id_end_with = 'row_id_end_with_example'; // string | storage_entityfiles rowId_end_with
$ref_table_partial = 'ref_table_partial_example'; // string | storage_entityfiles refTable_partial
$ref_table_start_with = 'ref_table_start_with_example'; // string | storage_entityfiles refTable_start_with
$ref_table_end_with = 'ref_table_end_with_example'; // string | storage_entityfiles refTable_end_with

try {
    $result = $apiInstance->storageEntityFileDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $row_id, $row_id2, $ref_table, $ref_table2, $search, $exists_deleted_at, $exists_custom_properties, $exists_link, $properties, $enabled, $tag, $order_id, $order_row_id, $order_created_at, $order_updated_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $path_partial, $path_start_with, $path_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->storageEntityFileDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_link** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_row_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **slug_partial** | **string**| storage_entityfiles slug_partial | [optional] |
| **slug_start_with** | **string**| storage_entityfiles slug_start_with | [optional] |
| **slug_end_with** | **string**| storage_entityfiles slug_end_with | [optional] |
| **id_partial** | **string**| storage_entityfiles id_partial | [optional] |
| **id_start_with** | **string**| storage_entityfiles id_start_with | [optional] |
| **id_end_with** | **string**| storage_entityfiles id_end_with | [optional] |
| **path_partial** | **string**| storage_entityfiles path_partial | [optional] |
| **path_start_with** | **string**| storage_entityfiles path_start_with | [optional] |
| **path_end_with** | **string**| storage_entityfiles path_end_with | [optional] |
| **row_id_partial** | **string**| storage_entityfiles rowId_partial | [optional] |
| **row_id_start_with** | **string**| storage_entityfiles rowId_start_with | [optional] |
| **row_id_end_with** | **string**| storage_entityfiles rowId_end_with | [optional] |
| **ref_table_partial** | **string**| storage_entityfiles refTable_partial | [optional] |
| **ref_table_start_with** | **string**| storage_entityfiles refTable_start_with | [optional] |
| **ref_table_end_with** | **string**| storage_entityfiles refTable_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\StorageEntityFileDropDown200Response**](../Model/StorageEntityFileDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageEntityFileDuplicate()`

```php
storageEntityFileDuplicate($id): \OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a storage_entityfiles resource.

Retrieves a storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiles identifier

try {
    $result = $apiInstance->storageEntityFileDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->storageEntityFileDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiles identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageEntityFileFetchFiles()`

```php
storageEntityFileFetchFiles($id): \OpenAPI\Client\Model\StorageEntityfilesJsonld
```

Retrieves a storage_entityfiles resource.

Retrieves a storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiles identifier

try {
    $result = $apiInstance->storageEntityFileFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->storageEntityFileFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiles identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonld**](../Model/StorageEntityfilesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageEntityFileGetBySlug()`

```php
storageEntityFileGetBySlug($slug): \OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a storage_entityfiles resource.

Retrieves a storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | storage_entityfiles identifier

try {
    $result = $apiInstance->storageEntityFileGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->storageEntityFileGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| storage_entityfiles identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/StorageEntityfilesJsonldStorageEntityFileShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageEntityFileGetDeleteRelations()`

```php
storageEntityFileGetDeleteRelations($id): \OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileRelations
```

Retrieves a storage_entityfiles resource.

Retrieves a storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiles identifier

try {
    $result = $apiInstance->storageEntityFileGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->storageEntityFileGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiles identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonldStorageEntityFileRelations**](../Model/StorageEntityfilesJsonldStorageEntityFileRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageEntityFileMetadata()`

```php
storageEntityFileMetadata($id): \OpenAPI\Client\Model\StorageEntityfilesJsonldIdStandardMetadataStorageEntityFileMetadataTagTaggingListStorageEntityFileRelationsTimestampable
```

Retrieves a storage_entityfiles resource.

Retrieves a storage_entityfiles resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiles identifier

try {
    $result = $apiInstance->storageEntityFileMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfilesApi->storageEntityFileMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiles identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfilesJsonldIdStandardMetadataStorageEntityFileMetadataTagTaggingListStorageEntityFileRelationsTimestampable**](../Model/StorageEntityfilesJsonldIdStandardMetadataStorageEntityFileMetadataTagTaggingListStorageEntityFileRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
