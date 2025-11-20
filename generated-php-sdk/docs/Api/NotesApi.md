# OpenAPI\Client\NotesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiNotesGetCollection()**](NotesApi.md#apiNotesGetCollection) | **GET** /open-api/v3/notes | Retrieves the collection of notes resources. |
| [**apiNotesIdDelete()**](NotesApi.md#apiNotesIdDelete) | **DELETE** /open-api/v3/notes/{id} | Removes the notes resource. |
| [**apiNotesIdGet()**](NotesApi.md#apiNotesIdGet) | **GET** /open-api/v3/notes/{id} | Retrieves a notes resource. |
| [**apiNotesIdPut()**](NotesApi.md#apiNotesIdPut) | **PUT** /open-api/v3/notes/{id} | Replaces the notes resource. |
| [**apiNotesPost()**](NotesApi.md#apiNotesPost) | **POST** /open-api/v3/notes | Creates a notes resource. |
| [**noteApiCorporationAdd()**](NotesApi.md#noteApiCorporationAdd) | **POST** /open-api/v3/notes/{id}/corporation/add | Creates a notes resource. |
| [**noteApiCorporationRemove()**](NotesApi.md#noteApiCorporationRemove) | **POST** /open-api/v3/notes/{id}/corporation/remove | Creates a notes resource. |
| [**noteApiFileUpload()**](NotesApi.md#noteApiFileUpload) | **POST** /open-api/v3/notes/{id}/file/upload | Creates a notes resource. |
| [**noteDropDown()**](NotesApi.md#noteDropDown) | **GET** /open-api/v3/notes/dropdown/get | Retrieves the collection of notes resources. |
| [**noteDuplicate()**](NotesApi.md#noteDuplicate) | **GET** /open-api/v3/notes/duplicate/{id} | Retrieves a notes resource. |
| [**noteFetchFiles()**](NotesApi.md#noteFetchFiles) | **GET** /open-api/v3/notes/fetch_files/{id} | Retrieves a notes resource. |
| [**noteGetBySlug()**](NotesApi.md#noteGetBySlug) | **GET** /open-api/v3/notes/by_slug/{slug} | Retrieves a notes resource. |
| [**noteGetDeleteRelations()**](NotesApi.md#noteGetDeleteRelations) | **GET** /open-api/v3/notes/get_delete_relations/{id} | Retrieves a notes resource. |
| [**noteMetadata()**](NotesApi.md#noteMetadata) | **GET** /open-api/v3/notes/metadata/{id} | Retrieves a notes resource. |


## `apiNotesGetCollection()`

```php
apiNotesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $parent, $parent2, $author, $author2, $status, $status2, $type, $type2, $row_id, $row_id2, $status_slug, $status_slug2, $project, $project2, $ref_table, $ref_table2, $slug, $slug2, $search, $priority, $priority2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $root, $root2, $id_between, $id_gt, $id_gte, $id_lt, $id_lte, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $root_between, $root_gt, $root_gte, $root_lt, $root_lte, $properties, $exists_ref_table, $exists_row_id, $exists_parent, $exists_project, $exists_root, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_ref_table, $order_row_id, $order_deleted_at, $order_disabled_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range): \OpenAPI\Client\Model\ApiNotesGetCollection200Response
```

Retrieves the collection of notes resources.

Retrieves the collection of notes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
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
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$author = 'author_example'; // string | 
$author2 = array('author_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$status_slug = 'status_slug_example'; // string | 
$status_slug2 = array('status_slug_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$lvl = 56; // int | 
$lvl2 = array(56); // int[] | 
$lft = 56; // int | 
$lft2 = array(56); // int[] | 
$rgt = 56; // int | 
$rgt2 = array(56); // int[] | 
$root = 56; // int | 
$root2 = array(56); // int[] | 
$id_between = 'id_between_example'; // string | 
$id_gt = 'id_gt_example'; // string | 
$id_gte = 'id_gte_example'; // string | 
$id_lt = 'id_lt_example'; // string | 
$id_lte = 'id_lte_example'; // string | 
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$lvl_between = 'lvl_between_example'; // string | 
$lvl_gt = 'lvl_gt_example'; // string | 
$lvl_gte = 'lvl_gte_example'; // string | 
$lvl_lt = 'lvl_lt_example'; // string | 
$lvl_lte = 'lvl_lte_example'; // string | 
$lft_between = 'lft_between_example'; // string | 
$lft_gt = 'lft_gt_example'; // string | 
$lft_gte = 'lft_gte_example'; // string | 
$lft_lt = 'lft_lt_example'; // string | 
$lft_lte = 'lft_lte_example'; // string | 
$rgt_between = 'rgt_between_example'; // string | 
$rgt_gt = 'rgt_gt_example'; // string | 
$rgt_gte = 'rgt_gte_example'; // string | 
$rgt_lt = 'rgt_lt_example'; // string | 
$rgt_lte = 'rgt_lte_example'; // string | 
$root_between = 'root_between_example'; // string | 
$root_gt = 'root_gt_example'; // string | 
$root_gte = 'root_gte_example'; // string | 
$root_lt = 'root_lt_example'; // string | 
$root_lte = 'root_lte_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$exists_ref_table = True; // bool | 
$exists_row_id = True; // bool | 
$exists_parent = True; // bool | 
$exists_project = True; // bool | 
$exists_root = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_ref_table = 'order_ref_table_example'; // string | 
$order_row_id = 'order_row_id_example'; // string | 
$order_deleted_at = 'order_deleted_at_example'; // string | 
$order_disabled_at = 'order_disabled_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | notes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | notes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | notes slug_end_with
$id_partial = 'id_partial_example'; // string | notes id_partial
$id_start_with = 'id_start_with_example'; // string | notes id_start_with
$id_end_with = 'id_end_with_example'; // string | notes id_end_with
$ref_table_partial = 'ref_table_partial_example'; // string | notes refTable_partial
$ref_table_start_with = 'ref_table_start_with_example'; // string | notes refTable_start_with
$ref_table_end_with = 'ref_table_end_with_example'; // string | notes refTable_end_with
$priority_range = 'priority_range_example'; // string | notes priority_range
$lvl_range = 'lvl_range_example'; // string | notes lvl_range
$rgt_range = 'rgt_range_example'; // string | notes rgt_range
$lft_range = 'lft_range_example'; // string | notes lft_range

try {
    $result = $apiInstance->apiNotesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $parent, $parent2, $author, $author2, $status, $status2, $type, $type2, $row_id, $row_id2, $status_slug, $status_slug2, $project, $project2, $ref_table, $ref_table2, $slug, $slug2, $search, $priority, $priority2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $root, $root2, $id_between, $id_gt, $id_gte, $id_lt, $id_lte, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $root_between, $root_gt, $root_gte, $root_lt, $root_lte, $properties, $exists_ref_table, $exists_row_id, $exists_parent, $exists_project, $exists_root, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_ref_table, $order_row_id, $order_deleted_at, $order_disabled_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->apiNotesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **author** | **string**|  | [optional] |
| **author2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **status_slug** | **string**|  | [optional] |
| **status_slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **lvl** | **int**|  | [optional] |
| **lvl2** | [**int[]**](../Model/int.md)|  | [optional] |
| **lft** | **int**|  | [optional] |
| **lft2** | [**int[]**](../Model/int.md)|  | [optional] |
| **rgt** | **int**|  | [optional] |
| **rgt2** | [**int[]**](../Model/int.md)|  | [optional] |
| **root** | **int**|  | [optional] |
| **root2** | [**int[]**](../Model/int.md)|  | [optional] |
| **id_between** | **string**|  | [optional] |
| **id_gt** | **string**|  | [optional] |
| **id_gte** | **string**|  | [optional] |
| **id_lt** | **string**|  | [optional] |
| **id_lte** | **string**|  | [optional] |
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **lvl_between** | **string**|  | [optional] |
| **lvl_gt** | **string**|  | [optional] |
| **lvl_gte** | **string**|  | [optional] |
| **lvl_lt** | **string**|  | [optional] |
| **lvl_lte** | **string**|  | [optional] |
| **lft_between** | **string**|  | [optional] |
| **lft_gt** | **string**|  | [optional] |
| **lft_gte** | **string**|  | [optional] |
| **lft_lt** | **string**|  | [optional] |
| **lft_lte** | **string**|  | [optional] |
| **rgt_between** | **string**|  | [optional] |
| **rgt_gt** | **string**|  | [optional] |
| **rgt_gte** | **string**|  | [optional] |
| **rgt_lt** | **string**|  | [optional] |
| **rgt_lte** | **string**|  | [optional] |
| **root_between** | **string**|  | [optional] |
| **root_gt** | **string**|  | [optional] |
| **root_gte** | **string**|  | [optional] |
| **root_lt** | **string**|  | [optional] |
| **root_lte** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **exists_ref_table** | **bool**|  | [optional] |
| **exists_row_id** | **bool**|  | [optional] |
| **exists_parent** | **bool**|  | [optional] |
| **exists_project** | **bool**|  | [optional] |
| **exists_root** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_ref_table** | **string**|  | [optional] |
| **order_row_id** | **string**|  | [optional] |
| **order_deleted_at** | **string**|  | [optional] |
| **order_disabled_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **slug_partial** | **string**| notes slug_partial | [optional] |
| **slug_start_with** | **string**| notes slug_start_with | [optional] |
| **slug_end_with** | **string**| notes slug_end_with | [optional] |
| **id_partial** | **string**| notes id_partial | [optional] |
| **id_start_with** | **string**| notes id_start_with | [optional] |
| **id_end_with** | **string**| notes id_end_with | [optional] |
| **ref_table_partial** | **string**| notes refTable_partial | [optional] |
| **ref_table_start_with** | **string**| notes refTable_start_with | [optional] |
| **ref_table_end_with** | **string**| notes refTable_end_with | [optional] |
| **priority_range** | **string**| notes priority_range | [optional] |
| **lvl_range** | **string**| notes lvl_range | [optional] |
| **rgt_range** | **string**| notes rgt_range | [optional] |
| **lft_range** | **string**| notes lft_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiNotesGetCollection200Response**](../Model/ApiNotesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotesIdDelete()`

```php
apiNotesIdDelete($id)
```

Removes the notes resource.

Removes the notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier

try {
    $apiInstance->apiNotesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->apiNotesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |

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

## `apiNotesIdGet()`

```php
apiNotesIdGet($id): \OpenAPI\Client\Model\NotesJsonldStandardShowNoteShowIdTimestampableStandardLinksTagTaggingListNoteRelations
```

Retrieves a notes resource.

Retrieves a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier

try {
    $result = $apiInstance->apiNotesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->apiNotesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldStandardShowNoteShowIdTimestampableStandardLinksTagTaggingListNoteRelations**](../Model/NotesJsonldStandardShowNoteShowIdTimestampableStandardLinksTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotesIdPut()`

```php
apiNotesIdPut($id, $notes_jsonld_post): \OpenAPI\Client\Model\NotesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the notes resource.

Replaces the notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier
$notes_jsonld_post = new \OpenAPI\Client\Model\NotesJsonldPost(); // \OpenAPI\Client\Model\NotesJsonldPost | The updated notes resource

try {
    $result = $apiInstance->apiNotesIdPut($id, $notes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->apiNotesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |
| **notes_jsonld_post** | [**\OpenAPI\Client\Model\NotesJsonldPost**](../Model/NotesJsonldPost.md)| The updated notes resource | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/NotesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotesPost()`

```php
apiNotesPost($notes_jsonld_add_post): \OpenAPI\Client\Model\NotesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a notes resource.

Creates a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notes_jsonld_add_post = new \OpenAPI\Client\Model\NotesJsonldAddPost(); // \OpenAPI\Client\Model\NotesJsonldAddPost | The new notes resource

try {
    $result = $apiInstance->apiNotesPost($notes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->apiNotesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notes_jsonld_add_post** | [**\OpenAPI\Client\Model\NotesJsonldAddPost**](../Model/NotesJsonldAddPost.md)| The new notes resource | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/NotesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteApiCorporationAdd()`

```php
noteApiCorporationAdd($id, $notes_jsonld): \OpenAPI\Client\Model\NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow
```

Creates a notes resource.

Creates a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier
$notes_jsonld = new \OpenAPI\Client\Model\NotesJsonld(); // \OpenAPI\Client\Model\NotesJsonld | The new notes resource

try {
    $result = $apiInstance->noteApiCorporationAdd($id, $notes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |
| **notes_jsonld** | [**\OpenAPI\Client\Model\NotesJsonld**](../Model/NotesJsonld.md)| The new notes resource | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow**](../Model/NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteApiCorporationRemove()`

```php
noteApiCorporationRemove($id, $notes_jsonld): \OpenAPI\Client\Model\NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow
```

Creates a notes resource.

Creates a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier
$notes_jsonld = new \OpenAPI\Client\Model\NotesJsonld(); // \OpenAPI\Client\Model\NotesJsonld | The new notes resource

try {
    $result = $apiInstance->noteApiCorporationRemove($id, $notes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |
| **notes_jsonld** | [**\OpenAPI\Client\Model\NotesJsonld**](../Model/NotesJsonld.md)| The new notes resource | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow**](../Model/NotesJsonldNoteShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteApiFileUpload()`

```php
noteApiFileUpload($id, $notes_jsonld_file_upload): \OpenAPI\Client\Model\NotesJsonldStorageFileShowNoteShowIdTimestampableTagTaggingListStandardShow
```

Creates a notes resource.

Creates a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier
$notes_jsonld_file_upload = new \OpenAPI\Client\Model\NotesJsonldFileUpload(); // \OpenAPI\Client\Model\NotesJsonldFileUpload | The new notes resource

try {
    $result = $apiInstance->noteApiFileUpload($id, $notes_jsonld_file_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |
| **notes_jsonld_file_upload** | [**\OpenAPI\Client\Model\NotesJsonldFileUpload**](../Model/NotesJsonldFileUpload.md)| The new notes resource | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldStorageFileShowNoteShowIdTimestampableTagTaggingListStandardShow**](../Model/NotesJsonldStorageFileShowNoteShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteDropDown()`

```php
noteDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $parent, $parent2, $author, $author2, $status, $status2, $type, $type2, $row_id, $row_id2, $status_slug, $status_slug2, $project, $project2, $ref_table, $ref_table2, $slug, $slug2, $search, $priority, $priority2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $root, $root2, $id_between, $id_gt, $id_gte, $id_lt, $id_lte, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $root_between, $root_gt, $root_gte, $root_lt, $root_lte, $properties, $exists_ref_table, $exists_row_id, $exists_parent, $exists_project, $exists_root, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_ref_table, $order_row_id, $order_deleted_at, $order_disabled_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range): \OpenAPI\Client\Model\NoteDropDown200Response
```

Retrieves the collection of notes resources.

Retrieves the collection of notes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
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
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$author = 'author_example'; // string | 
$author2 = array('author_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$status_slug = 'status_slug_example'; // string | 
$status_slug2 = array('status_slug_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$lvl = 56; // int | 
$lvl2 = array(56); // int[] | 
$lft = 56; // int | 
$lft2 = array(56); // int[] | 
$rgt = 56; // int | 
$rgt2 = array(56); // int[] | 
$root = 56; // int | 
$root2 = array(56); // int[] | 
$id_between = 'id_between_example'; // string | 
$id_gt = 'id_gt_example'; // string | 
$id_gte = 'id_gte_example'; // string | 
$id_lt = 'id_lt_example'; // string | 
$id_lte = 'id_lte_example'; // string | 
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$lvl_between = 'lvl_between_example'; // string | 
$lvl_gt = 'lvl_gt_example'; // string | 
$lvl_gte = 'lvl_gte_example'; // string | 
$lvl_lt = 'lvl_lt_example'; // string | 
$lvl_lte = 'lvl_lte_example'; // string | 
$lft_between = 'lft_between_example'; // string | 
$lft_gt = 'lft_gt_example'; // string | 
$lft_gte = 'lft_gte_example'; // string | 
$lft_lt = 'lft_lt_example'; // string | 
$lft_lte = 'lft_lte_example'; // string | 
$rgt_between = 'rgt_between_example'; // string | 
$rgt_gt = 'rgt_gt_example'; // string | 
$rgt_gte = 'rgt_gte_example'; // string | 
$rgt_lt = 'rgt_lt_example'; // string | 
$rgt_lte = 'rgt_lte_example'; // string | 
$root_between = 'root_between_example'; // string | 
$root_gt = 'root_gt_example'; // string | 
$root_gte = 'root_gte_example'; // string | 
$root_lt = 'root_lt_example'; // string | 
$root_lte = 'root_lte_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$exists_ref_table = True; // bool | 
$exists_row_id = True; // bool | 
$exists_parent = True; // bool | 
$exists_project = True; // bool | 
$exists_root = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_ref_table = 'order_ref_table_example'; // string | 
$order_row_id = 'order_row_id_example'; // string | 
$order_deleted_at = 'order_deleted_at_example'; // string | 
$order_disabled_at = 'order_disabled_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | notes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | notes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | notes slug_end_with
$id_partial = 'id_partial_example'; // string | notes id_partial
$id_start_with = 'id_start_with_example'; // string | notes id_start_with
$id_end_with = 'id_end_with_example'; // string | notes id_end_with
$ref_table_partial = 'ref_table_partial_example'; // string | notes refTable_partial
$ref_table_start_with = 'ref_table_start_with_example'; // string | notes refTable_start_with
$ref_table_end_with = 'ref_table_end_with_example'; // string | notes refTable_end_with
$priority_range = 'priority_range_example'; // string | notes priority_range
$lvl_range = 'lvl_range_example'; // string | notes lvl_range
$rgt_range = 'rgt_range_example'; // string | notes rgt_range
$lft_range = 'lft_range_example'; // string | notes lft_range

try {
    $result = $apiInstance->noteDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $parent, $parent2, $author, $author2, $status, $status2, $type, $type2, $row_id, $row_id2, $status_slug, $status_slug2, $project, $project2, $ref_table, $ref_table2, $slug, $slug2, $search, $priority, $priority2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $root, $root2, $id_between, $id_gt, $id_gte, $id_lt, $id_lte, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $root_between, $root_gt, $root_gte, $root_lt, $root_lte, $properties, $exists_ref_table, $exists_row_id, $exists_parent, $exists_project, $exists_root, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_ref_table, $order_row_id, $order_deleted_at, $order_disabled_at, $order_priority, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteDropDown: ', $e->getMessage(), PHP_EOL;
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
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **author** | **string**|  | [optional] |
| **author2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **status_slug** | **string**|  | [optional] |
| **status_slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **lvl** | **int**|  | [optional] |
| **lvl2** | [**int[]**](../Model/int.md)|  | [optional] |
| **lft** | **int**|  | [optional] |
| **lft2** | [**int[]**](../Model/int.md)|  | [optional] |
| **rgt** | **int**|  | [optional] |
| **rgt2** | [**int[]**](../Model/int.md)|  | [optional] |
| **root** | **int**|  | [optional] |
| **root2** | [**int[]**](../Model/int.md)|  | [optional] |
| **id_between** | **string**|  | [optional] |
| **id_gt** | **string**|  | [optional] |
| **id_gte** | **string**|  | [optional] |
| **id_lt** | **string**|  | [optional] |
| **id_lte** | **string**|  | [optional] |
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **lvl_between** | **string**|  | [optional] |
| **lvl_gt** | **string**|  | [optional] |
| **lvl_gte** | **string**|  | [optional] |
| **lvl_lt** | **string**|  | [optional] |
| **lvl_lte** | **string**|  | [optional] |
| **lft_between** | **string**|  | [optional] |
| **lft_gt** | **string**|  | [optional] |
| **lft_gte** | **string**|  | [optional] |
| **lft_lt** | **string**|  | [optional] |
| **lft_lte** | **string**|  | [optional] |
| **rgt_between** | **string**|  | [optional] |
| **rgt_gt** | **string**|  | [optional] |
| **rgt_gte** | **string**|  | [optional] |
| **rgt_lt** | **string**|  | [optional] |
| **rgt_lte** | **string**|  | [optional] |
| **root_between** | **string**|  | [optional] |
| **root_gt** | **string**|  | [optional] |
| **root_gte** | **string**|  | [optional] |
| **root_lt** | **string**|  | [optional] |
| **root_lte** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **exists_ref_table** | **bool**|  | [optional] |
| **exists_row_id** | **bool**|  | [optional] |
| **exists_parent** | **bool**|  | [optional] |
| **exists_project** | **bool**|  | [optional] |
| **exists_root** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_ref_table** | **string**|  | [optional] |
| **order_row_id** | **string**|  | [optional] |
| **order_deleted_at** | **string**|  | [optional] |
| **order_disabled_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **slug_partial** | **string**| notes slug_partial | [optional] |
| **slug_start_with** | **string**| notes slug_start_with | [optional] |
| **slug_end_with** | **string**| notes slug_end_with | [optional] |
| **id_partial** | **string**| notes id_partial | [optional] |
| **id_start_with** | **string**| notes id_start_with | [optional] |
| **id_end_with** | **string**| notes id_end_with | [optional] |
| **ref_table_partial** | **string**| notes refTable_partial | [optional] |
| **ref_table_start_with** | **string**| notes refTable_start_with | [optional] |
| **ref_table_end_with** | **string**| notes refTable_end_with | [optional] |
| **priority_range** | **string**| notes priority_range | [optional] |
| **lvl_range** | **string**| notes lvl_range | [optional] |
| **rgt_range** | **string**| notes rgt_range | [optional] |
| **lft_range** | **string**| notes lft_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\NoteDropDown200Response**](../Model/NoteDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteDuplicate()`

```php
noteDuplicate($id): \OpenAPI\Client\Model\NotesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList
```

Retrieves a notes resource.

Retrieves a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier

try {
    $result = $apiInstance->noteDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList**](../Model/NotesJsonldIdNoteShowStandardShowPostAddTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteFetchFiles()`

```php
noteFetchFiles($id): \OpenAPI\Client\Model\NotesJsonld
```

Retrieves a notes resource.

Retrieves a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier

try {
    $result = $apiInstance->noteFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonld**](../Model/NotesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteGetBySlug()`

```php
noteGetBySlug($slug): \OpenAPI\Client\Model\NotesJsonldNoteShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a notes resource.

Retrieves a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | notes identifier

try {
    $result = $apiInstance->noteGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| notes identifier | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldNoteShowIdCustomPropertyTimestampableTagTaggingList**](../Model/NotesJsonldNoteShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteGetDeleteRelations()`

```php
noteGetDeleteRelations($id): \OpenAPI\Client\Model\NotesJsonldNoteRelations
```

Retrieves a notes resource.

Retrieves a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier

try {
    $result = $apiInstance->noteGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldNoteRelations**](../Model/NotesJsonldNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteMetadata()`

```php
noteMetadata($id): \OpenAPI\Client\Model\NotesJsonldIdStandardMetadataStandardLinksNoteMetadataTagTaggingListNoteRelationsTimestampable
```

Retrieves a notes resource.

Retrieves a notes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | notes identifier

try {
    $result = $apiInstance->noteMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->noteMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| notes identifier | |

### Return type

[**\OpenAPI\Client\Model\NotesJsonldIdStandardMetadataStandardLinksNoteMetadataTagTaggingListNoteRelationsTimestampable**](../Model/NotesJsonldIdStandardMetadataStandardLinksNoteMetadataTagTaggingListNoteRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
