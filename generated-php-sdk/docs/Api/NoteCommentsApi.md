# OpenAPI\Client\NoteCommentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiNoteCommentsGetCollection()**](NoteCommentsApi.md#apiNoteCommentsGetCollection) | **GET** /open-api/v3/note_comments | Retrieves the collection of note_comments resources. |
| [**apiNoteCommentsIdDelete()**](NoteCommentsApi.md#apiNoteCommentsIdDelete) | **DELETE** /open-api/v3/note_comments/{id} | Removes the note_comments resource. |
| [**apiNoteCommentsIdGet()**](NoteCommentsApi.md#apiNoteCommentsIdGet) | **GET** /open-api/v3/note_comments/{id} | Retrieves a note_comments resource. |
| [**apiNoteCommentsIdPut()**](NoteCommentsApi.md#apiNoteCommentsIdPut) | **PUT** /open-api/v3/note_comments/{id} | Replaces the note_comments resource. |
| [**apiNoteCommentsPost()**](NoteCommentsApi.md#apiNoteCommentsPost) | **POST** /open-api/v3/note_comments | Creates a note_comments resource. |
| [**noteCommentApiCorporationAdd()**](NoteCommentsApi.md#noteCommentApiCorporationAdd) | **POST** /open-api/v3/note_comments/{id}/corporation/add | Creates a note_comments resource. |
| [**noteCommentApiCorporationRemove()**](NoteCommentsApi.md#noteCommentApiCorporationRemove) | **POST** /open-api/v3/note_comments/{id}/corporation/remove | Creates a note_comments resource. |
| [**noteCommentApiFileUpload()**](NoteCommentsApi.md#noteCommentApiFileUpload) | **POST** /open-api/v3/note_comments/{id}/file/upload | Creates a note_comments resource. |
| [**noteCommentDropDown()**](NoteCommentsApi.md#noteCommentDropDown) | **GET** /open-api/v3/note_comments/dropdown/get | Retrieves the collection of note_comments resources. |
| [**noteCommentDuplicate()**](NoteCommentsApi.md#noteCommentDuplicate) | **GET** /open-api/v3/note_comments/duplicate/{id} | Retrieves a note_comments resource. |
| [**noteCommentFetchFiles()**](NoteCommentsApi.md#noteCommentFetchFiles) | **GET** /open-api/v3/note_comments/fetch_files/{id} | Retrieves a note_comments resource. |
| [**noteCommentGetBySlug()**](NoteCommentsApi.md#noteCommentGetBySlug) | **GET** /open-api/v3/note_comments/by_slug/{slug} | Retrieves a note_comments resource. |
| [**noteCommentGetDeleteRelations()**](NoteCommentsApi.md#noteCommentGetDeleteRelations) | **GET** /open-api/v3/note_comments/get_delete_relations/{id} | Retrieves a note_comments resource. |
| [**noteCommentsMetadata()**](NoteCommentsApi.md#noteCommentsMetadata) | **GET** /open-api/v3/note_comments/metadata/{id} | Retrieves a note_comments resource. |


## `apiNoteCommentsGetCollection()`

```php
apiNoteCommentsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $author, $author2, $note, $note2, $parent, $parent2, $search, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiNoteCommentsGetCollection200Response
```

Retrieves the collection of note_comments resources.

Retrieves the collection of note_comments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
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
$author = 'author_example'; // string | 
$author2 = array('author_example'); // string[] | 
$note = 'note_example'; // string | 
$note2 = array('note_example'); // string[] | 
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | note_comments slug_partial
$slug_start_with = 'slug_start_with_example'; // string | note_comments slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | note_comments slug_end_with
$id_partial = 'id_partial_example'; // string | note_comments id_partial
$id_start_with = 'id_start_with_example'; // string | note_comments id_start_with
$id_end_with = 'id_end_with_example'; // string | note_comments id_end_with

try {
    $result = $apiInstance->apiNoteCommentsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $author, $author2, $note, $note2, $parent, $parent2, $search, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->apiNoteCommentsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **author** | **string**|  | [optional] |
| **author2** | [**string[]**](../Model/string.md)|  | [optional] |
| **note** | **string**|  | [optional] |
| **note2** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| note_comments slug_partial | [optional] |
| **slug_start_with** | **string**| note_comments slug_start_with | [optional] |
| **slug_end_with** | **string**| note_comments slug_end_with | [optional] |
| **id_partial** | **string**| note_comments id_partial | [optional] |
| **id_start_with** | **string**| note_comments id_start_with | [optional] |
| **id_end_with** | **string**| note_comments id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiNoteCommentsGetCollection200Response**](../Model/ApiNoteCommentsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteCommentsIdDelete()`

```php
apiNoteCommentsIdDelete($id)
```

Removes the note_comments resource.

Removes the note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier

try {
    $apiInstance->apiNoteCommentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->apiNoteCommentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |

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

## `apiNoteCommentsIdGet()`

```php
apiNoteCommentsIdGet($id): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShowNoteCommentRelations
```

Retrieves a note_comments resource.

Retrieves a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier

try {
    $result = $apiInstance->apiNoteCommentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->apiNoteCommentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShowNoteCommentRelations**](../Model/NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShowNoteCommentRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteCommentsIdPut()`

```php
apiNoteCommentsIdPut($id, $note_comments_jsonld_add_post): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the note_comments resource.

Replaces the note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier
$note_comments_jsonld_add_post = new \OpenAPI\Client\Model\NoteCommentsJsonldAddPost(); // \OpenAPI\Client\Model\NoteCommentsJsonldAddPost | The updated note_comments resource

try {
    $result = $apiInstance->apiNoteCommentsIdPut($id, $note_comments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->apiNoteCommentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |
| **note_comments_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteCommentsJsonldAddPost**](../Model/NoteCommentsJsonldAddPost.md)| The updated note_comments resource | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/NoteCommentsJsonldNoteCommentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteCommentsPost()`

```php
apiNoteCommentsPost($note_comments_jsonld_add_post): \OpenAPI\Client\Model\NoteCommentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a note_comments resource.

Creates a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_comments_jsonld_add_post = new \OpenAPI\Client\Model\NoteCommentsJsonldAddPost(); // \OpenAPI\Client\Model\NoteCommentsJsonldAddPost | The new note_comments resource

try {
    $result = $apiInstance->apiNoteCommentsPost($note_comments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->apiNoteCommentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_comments_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteCommentsJsonldAddPost**](../Model/NoteCommentsJsonldAddPost.md)| The new note_comments resource | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/NoteCommentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentApiCorporationAdd()`

```php
noteCommentApiCorporationAdd($id, $note_comments_jsonld): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow
```

Creates a note_comments resource.

Creates a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier
$note_comments_jsonld = new \OpenAPI\Client\Model\NoteCommentsJsonld(); // \OpenAPI\Client\Model\NoteCommentsJsonld | The new note_comments resource

try {
    $result = $apiInstance->noteCommentApiCorporationAdd($id, $note_comments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |
| **note_comments_jsonld** | [**\OpenAPI\Client\Model\NoteCommentsJsonld**](../Model/NoteCommentsJsonld.md)| The new note_comments resource | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentApiCorporationRemove()`

```php
noteCommentApiCorporationRemove($id, $note_comments_jsonld): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow
```

Creates a note_comments resource.

Creates a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier
$note_comments_jsonld = new \OpenAPI\Client\Model\NoteCommentsJsonld(); // \OpenAPI\Client\Model\NoteCommentsJsonld | The new note_comments resource

try {
    $result = $apiInstance->noteCommentApiCorporationRemove($id, $note_comments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |
| **note_comments_jsonld** | [**\OpenAPI\Client\Model\NoteCommentsJsonld**](../Model/NoteCommentsJsonld.md)| The new note_comments resource | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentApiFileUpload()`

```php
noteCommentApiFileUpload($id, $note_comments_jsonld): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow
```

Creates a note_comments resource.

Creates a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier
$note_comments_jsonld = new \OpenAPI\Client\Model\NoteCommentsJsonld(); // \OpenAPI\Client\Model\NoteCommentsJsonld | The new note_comments resource

try {
    $result = $apiInstance->noteCommentApiFileUpload($id, $note_comments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |
| **note_comments_jsonld** | [**\OpenAPI\Client\Model\NoteCommentsJsonld**](../Model/NoteCommentsJsonld.md)| The new note_comments resource | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentDropDown()`

```php
noteCommentDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $author, $author2, $note, $note2, $parent, $parent2, $search, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\NoteCommentDropDown200Response
```

Retrieves the collection of note_comments resources.

Retrieves the collection of note_comments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
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
$author = 'author_example'; // string | 
$author2 = array('author_example'); // string[] | 
$note = 'note_example'; // string | 
$note2 = array('note_example'); // string[] | 
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->noteCommentDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $author, $author2, $note, $note2, $parent, $parent2, $search, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentDropDown: ', $e->getMessage(), PHP_EOL;
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
| **author** | **string**|  | [optional] |
| **author2** | [**string[]**](../Model/string.md)|  | [optional] |
| **note** | **string**|  | [optional] |
| **note2** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NoteCommentDropDown200Response**](../Model/NoteCommentDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentDuplicate()`

```php
noteCommentDuplicate($id): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingList
```

Retrieves a note_comments resource.

Retrieves a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier

try {
    $result = $apiInstance->noteCommentDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingList**](../Model/NoteCommentsJsonldNoteCommentShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentFetchFiles()`

```php
noteCommentFetchFiles($id): \OpenAPI\Client\Model\NoteCommentsJsonld
```

Retrieves a note_comments resource.

Retrieves a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier

try {
    $result = $apiInstance->noteCommentFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonld**](../Model/NoteCommentsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentGetBySlug()`

```php
noteCommentGetBySlug($slug): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a note_comments resource.

Retrieves a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | note_comments identifier

try {
    $result = $apiInstance->noteCommentGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| note_comments identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentShowIdCustomPropertyTimestampableTagTaggingList**](../Model/NoteCommentsJsonldNoteCommentShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentGetDeleteRelations()`

```php
noteCommentGetDeleteRelations($id): \OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentRelations
```

Retrieves a note_comments resource.

Retrieves a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier

try {
    $result = $apiInstance->noteCommentGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldNoteCommentRelations**](../Model/NoteCommentsJsonldNoteCommentRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteCommentsMetadata()`

```php
noteCommentsMetadata($id): \OpenAPI\Client\Model\NoteCommentsJsonldIdStandardMetadataNoteCommentMetadataTagTaggingListNoteCommentRelationsTimestampable
```

Retrieves a note_comments resource.

Retrieves a note_comments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_comments identifier

try {
    $result = $apiInstance->noteCommentsMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteCommentsApi->noteCommentsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_comments identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteCommentsJsonldIdStandardMetadataNoteCommentMetadataTagTaggingListNoteCommentRelationsTimestampable**](../Model/NoteCommentsJsonldIdStandardMetadataNoteCommentMetadataTagTaggingListNoteCommentRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
