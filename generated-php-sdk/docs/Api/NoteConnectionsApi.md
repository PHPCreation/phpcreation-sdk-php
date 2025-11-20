# OpenAPI\Client\NoteConnectionsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiNoteConnectionsGetCollection()**](NoteConnectionsApi.md#apiNoteConnectionsGetCollection) | **GET** /open-api/v3/note_connections | Retrieves the collection of note_connections resources. |
| [**apiNoteConnectionsIdDelete()**](NoteConnectionsApi.md#apiNoteConnectionsIdDelete) | **DELETE** /open-api/v3/note_connections/{id} | Removes the note_connections resource. |
| [**apiNoteConnectionsIdGet()**](NoteConnectionsApi.md#apiNoteConnectionsIdGet) | **GET** /open-api/v3/note_connections/{id} | Retrieves a note_connections resource. |
| [**apiNoteConnectionsIdPut()**](NoteConnectionsApi.md#apiNoteConnectionsIdPut) | **PUT** /open-api/v3/note_connections/{id} | Replaces the note_connections resource. |
| [**apiNoteConnectionsPost()**](NoteConnectionsApi.md#apiNoteConnectionsPost) | **POST** /open-api/v3/note_connections | Creates a note_connections resource. |
| [**noteConnectionApiFileUpload()**](NoteConnectionsApi.md#noteConnectionApiFileUpload) | **POST** /open-api/v3/note_connections/{id}/file/upload | Creates a note_connections resource. |
| [**noteConnectionDropDown()**](NoteConnectionsApi.md#noteConnectionDropDown) | **GET** /open-api/v3/note_connections/dropdown/get | Retrieves the collection of note_connections resources. |
| [**noteConnectionDuplicate()**](NoteConnectionsApi.md#noteConnectionDuplicate) | **GET** /open-api/v3/note_connections/duplicate/{id} | Retrieves a note_connections resource. |
| [**noteConnectionFetchFiles()**](NoteConnectionsApi.md#noteConnectionFetchFiles) | **GET** /open-api/v3/note_connections/fetch_files/{id} | Retrieves a note_connections resource. |
| [**noteConnectionGetBySlug()**](NoteConnectionsApi.md#noteConnectionGetBySlug) | **GET** /open-api/v3/note_connections/by_slug/{slug} | Retrieves a note_connections resource. |
| [**noteConnectionGetDeleteRelations()**](NoteConnectionsApi.md#noteConnectionGetDeleteRelations) | **GET** /open-api/v3/note_connections/get_delete_relations/{id} | Retrieves a note_connections resource. |
| [**noteConnectionsMetadata()**](NoteConnectionsApi.md#noteConnectionsMetadata) | **GET** /open-api/v3/note_connections/metadata/{id} | Retrieves a note_connections resource. |


## `apiNoteConnectionsGetCollection()`

```php
apiNoteConnectionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $connection, $connection2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiNoteConnectionsGetCollection200Response
```

Retrieves the collection of note_connections resources.

Retrieves the collection of note_connections resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
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
$note = 'note_example'; // string | 
$note2 = array('note_example'); // string[] | 
$connection = 'connection_example'; // string | 
$connection2 = array('connection_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | note_connections slug_partial
$slug_start_with = 'slug_start_with_example'; // string | note_connections slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | note_connections slug_end_with
$id_partial = 'id_partial_example'; // string | note_connections id_partial
$id_start_with = 'id_start_with_example'; // string | note_connections id_start_with
$id_end_with = 'id_end_with_example'; // string | note_connections id_end_with

try {
    $result = $apiInstance->apiNoteConnectionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $connection, $connection2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->apiNoteConnectionsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **note** | **string**|  | [optional] |
| **note2** | [**string[]**](../Model/string.md)|  | [optional] |
| **connection** | **string**|  | [optional] |
| **connection2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| note_connections slug_partial | [optional] |
| **slug_start_with** | **string**| note_connections slug_start_with | [optional] |
| **slug_end_with** | **string**| note_connections slug_end_with | [optional] |
| **id_partial** | **string**| note_connections id_partial | [optional] |
| **id_start_with** | **string**| note_connections id_start_with | [optional] |
| **id_end_with** | **string**| note_connections id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiNoteConnectionsGetCollection200Response**](../Model/ApiNoteConnectionsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteConnectionsIdDelete()`

```php
apiNoteConnectionsIdDelete($id)
```

Removes the note_connections resource.

Removes the note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier

try {
    $apiInstance->apiNoteConnectionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->apiNoteConnectionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |

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

## `apiNoteConnectionsIdGet()`

```php
apiNoteConnectionsIdGet($id): \OpenAPI\Client\Model\NoteConnectionsJsonldNoteNoteConnectionShowIdTimestampableTagTaggingListStandardShowNoteConnectionRelations
```

Retrieves a note_connections resource.

Retrieves a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier

try {
    $result = $apiInstance->apiNoteConnectionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->apiNoteConnectionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldNoteNoteConnectionShowIdTimestampableTagTaggingListStandardShowNoteConnectionRelations**](../Model/NoteConnectionsJsonldNoteNoteConnectionShowIdTimestampableTagTaggingListStandardShowNoteConnectionRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteConnectionsIdPut()`

```php
apiNoteConnectionsIdPut($id, $note_connections_jsonld_add_post): \OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the note_connections resource.

Replaces the note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier
$note_connections_jsonld_add_post = new \OpenAPI\Client\Model\NoteConnectionsJsonldAddPost(); // \OpenAPI\Client\Model\NoteConnectionsJsonldAddPost | The updated note_connections resource

try {
    $result = $apiInstance->apiNoteConnectionsIdPut($id, $note_connections_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->apiNoteConnectionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |
| **note_connections_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteConnectionsJsonldAddPost**](../Model/NoteConnectionsJsonldAddPost.md)| The updated note_connections resource | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/NoteConnectionsJsonldNoteConnectionShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteConnectionsPost()`

```php
apiNoteConnectionsPost($note_connections_jsonld_add_post): \OpenAPI\Client\Model\NoteConnectionsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a note_connections resource.

Creates a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_connections_jsonld_add_post = new \OpenAPI\Client\Model\NoteConnectionsJsonldAddPost(); // \OpenAPI\Client\Model\NoteConnectionsJsonldAddPost | The new note_connections resource

try {
    $result = $apiInstance->apiNoteConnectionsPost($note_connections_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->apiNoteConnectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_connections_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteConnectionsJsonldAddPost**](../Model/NoteConnectionsJsonldAddPost.md)| The new note_connections resource | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/NoteConnectionsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteConnectionApiFileUpload()`

```php
noteConnectionApiFileUpload($id, $note_connections_jsonld): \OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowIdTimestampableTagTaggingListStandardShow
```

Creates a note_connections resource.

Creates a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier
$note_connections_jsonld = new \OpenAPI\Client\Model\NoteConnectionsJsonld(); // \OpenAPI\Client\Model\NoteConnectionsJsonld | The new note_connections resource

try {
    $result = $apiInstance->noteConnectionApiFileUpload($id, $note_connections_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->noteConnectionApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |
| **note_connections_jsonld** | [**\OpenAPI\Client\Model\NoteConnectionsJsonld**](../Model/NoteConnectionsJsonld.md)| The new note_connections resource | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteConnectionsJsonldNoteConnectionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteConnectionDropDown()`

```php
noteConnectionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $connection, $connection2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\NoteConnectionDropDown200Response
```

Retrieves the collection of note_connections resources.

Retrieves the collection of note_connections resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
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
$note = 'note_example'; // string | 
$note2 = array('note_example'); // string[] | 
$connection = 'connection_example'; // string | 
$connection2 = array('connection_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->noteConnectionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $connection, $connection2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->noteConnectionDropDown: ', $e->getMessage(), PHP_EOL;
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
| **note** | **string**|  | [optional] |
| **note2** | [**string[]**](../Model/string.md)|  | [optional] |
| **connection** | **string**|  | [optional] |
| **connection2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionDropDown200Response**](../Model/NoteConnectionDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteConnectionDuplicate()`

```php
noteConnectionDuplicate($id): \OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowIdTimestampableTagTaggingList
```

Retrieves a note_connections resource.

Retrieves a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier

try {
    $result = $apiInstance->noteConnectionDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->noteConnectionDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowIdTimestampableTagTaggingList**](../Model/NoteConnectionsJsonldNoteConnectionShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteConnectionFetchFiles()`

```php
noteConnectionFetchFiles($id): \OpenAPI\Client\Model\NoteConnectionsJsonld
```

Retrieves a note_connections resource.

Retrieves a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier

try {
    $result = $apiInstance->noteConnectionFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->noteConnectionFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonld**](../Model/NoteConnectionsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteConnectionGetBySlug()`

```php
noteConnectionGetBySlug($slug): \OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a note_connections resource.

Retrieves a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | note_connections identifier

try {
    $result = $apiInstance->noteConnectionGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->noteConnectionGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| note_connections identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionShowIdCustomPropertyTimestampableTagTaggingList**](../Model/NoteConnectionsJsonldNoteConnectionShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteConnectionGetDeleteRelations()`

```php
noteConnectionGetDeleteRelations($id): \OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionRelations
```

Retrieves a note_connections resource.

Retrieves a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier

try {
    $result = $apiInstance->noteConnectionGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->noteConnectionGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldNoteConnectionRelations**](../Model/NoteConnectionsJsonldNoteConnectionRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteConnectionsMetadata()`

```php
noteConnectionsMetadata($id): \OpenAPI\Client\Model\NoteConnectionsJsonldIdStandardMetadataNoteConnectionMetadataTagTaggingListNoteConnectionRelationsTimestampable
```

Retrieves a note_connections resource.

Retrieves a note_connections resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_connections identifier

try {
    $result = $apiInstance->noteConnectionsMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteConnectionsApi->noteConnectionsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_connections identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteConnectionsJsonldIdStandardMetadataNoteConnectionMetadataTagTaggingListNoteConnectionRelationsTimestampable**](../Model/NoteConnectionsJsonldIdStandardMetadataNoteConnectionMetadataTagTaggingListNoteConnectionRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
