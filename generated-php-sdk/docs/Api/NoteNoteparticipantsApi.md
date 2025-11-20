# OpenAPI\Client\NoteNoteparticipantsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiNoteNoteparticipantsGetCollection()**](NoteNoteparticipantsApi.md#apiNoteNoteparticipantsGetCollection) | **GET** /open-api/v3/note_noteparticipants | Retrieves the collection of note_noteparticipants resources. |
| [**apiNoteNoteparticipantsIdDelete()**](NoteNoteparticipantsApi.md#apiNoteNoteparticipantsIdDelete) | **DELETE** /open-api/v3/note_noteparticipants/{id} | Removes the note_noteparticipants resource. |
| [**apiNoteNoteparticipantsIdGet()**](NoteNoteparticipantsApi.md#apiNoteNoteparticipantsIdGet) | **GET** /open-api/v3/note_noteparticipants/{id} | Retrieves a note_noteparticipants resource. |
| [**apiNoteNoteparticipantsIdPut()**](NoteNoteparticipantsApi.md#apiNoteNoteparticipantsIdPut) | **PUT** /open-api/v3/note_noteparticipants/{id} | Replaces the note_noteparticipants resource. |
| [**apiNoteNoteparticipantsPost()**](NoteNoteparticipantsApi.md#apiNoteNoteparticipantsPost) | **POST** /open-api/v3/note_noteparticipants | Creates a note_noteparticipants resource. |
| [**noteParticipantApiFileUpload()**](NoteNoteparticipantsApi.md#noteParticipantApiFileUpload) | **POST** /open-api/v3/note_noteparticipants/{id}/file/upload | Creates a note_noteparticipants resource. |
| [**noteParticipantDropDown()**](NoteNoteparticipantsApi.md#noteParticipantDropDown) | **GET** /open-api/v3/note_noteparticipants/dropdown/get | Retrieves the collection of note_noteparticipants resources. |
| [**noteParticipantDuplicate()**](NoteNoteparticipantsApi.md#noteParticipantDuplicate) | **GET** /open-api/v3/note_noteparticipants/duplicate/{id} | Retrieves a note_noteparticipants resource. |
| [**noteParticipantFetchFiles()**](NoteNoteparticipantsApi.md#noteParticipantFetchFiles) | **GET** /open-api/v3/note_noteparticipants/fetch_files/{id} | Retrieves a note_noteparticipants resource. |
| [**noteParticipantGetBySlug()**](NoteNoteparticipantsApi.md#noteParticipantGetBySlug) | **GET** /open-api/v3/note_participants/by_slug/{slug} | Retrieves a note_noteparticipants resource. |
| [**noteParticipantGetDeleteRelations()**](NoteNoteparticipantsApi.md#noteParticipantGetDeleteRelations) | **GET** /open-api/v3/note_participants/get_delete_relations/{id} | Retrieves a note_noteparticipants resource. |
| [**noteParticipantsMetadata()**](NoteNoteparticipantsApi.md#noteParticipantsMetadata) | **GET** /open-api/v3/note_participants/metadata/{id} | Retrieves a note_noteparticipants resource. |


## `apiNoteNoteparticipantsGetCollection()`

```php
apiNoteNoteparticipantsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $participant, $participant2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiNoteNoteparticipantsGetCollection200Response
```

Retrieves the collection of note_noteparticipants resources.

Retrieves the collection of note_noteparticipants resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
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
$participant = 'participant_example'; // string | 
$participant2 = array('participant_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | note_noteparticipants slug_partial
$slug_start_with = 'slug_start_with_example'; // string | note_noteparticipants slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | note_noteparticipants slug_end_with
$id_partial = 'id_partial_example'; // string | note_noteparticipants id_partial
$id_start_with = 'id_start_with_example'; // string | note_noteparticipants id_start_with
$id_end_with = 'id_end_with_example'; // string | note_noteparticipants id_end_with

try {
    $result = $apiInstance->apiNoteNoteparticipantsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $participant, $participant2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->apiNoteNoteparticipantsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **participant** | **string**|  | [optional] |
| **participant2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| note_noteparticipants slug_partial | [optional] |
| **slug_start_with** | **string**| note_noteparticipants slug_start_with | [optional] |
| **slug_end_with** | **string**| note_noteparticipants slug_end_with | [optional] |
| **id_partial** | **string**| note_noteparticipants id_partial | [optional] |
| **id_start_with** | **string**| note_noteparticipants id_start_with | [optional] |
| **id_end_with** | **string**| note_noteparticipants id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiNoteNoteparticipantsGetCollection200Response**](../Model/ApiNoteNoteparticipantsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteNoteparticipantsIdDelete()`

```php
apiNoteNoteparticipantsIdDelete($id)
```

Removes the note_noteparticipants resource.

Removes the note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier

try {
    $apiInstance->apiNoteNoteparticipantsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->apiNoteNoteparticipantsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |

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

## `apiNoteNoteparticipantsIdGet()`

```php
apiNoteNoteparticipantsIdGet($id): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingListStandardShowNoteParticipantRelations
```

Retrieves a note_noteparticipants resource.

Retrieves a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier

try {
    $result = $apiInstance->apiNoteNoteparticipantsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->apiNoteNoteparticipantsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingListStandardShowNoteParticipantRelations**](../Model/NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingListStandardShowNoteParticipantRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteNoteparticipantsIdPut()`

```php
apiNoteNoteparticipantsIdPut($id, $note_noteparticipants_jsonld_add_post): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the note_noteparticipants resource.

Replaces the note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier
$note_noteparticipants_jsonld_add_post = new \OpenAPI\Client\Model\NoteNoteparticipantsJsonldAddPost(); // \OpenAPI\Client\Model\NoteNoteparticipantsJsonldAddPost | The updated note_noteparticipants resource

try {
    $result = $apiInstance->apiNoteNoteparticipantsIdPut($id, $note_noteparticipants_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->apiNoteNoteparticipantsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |
| **note_noteparticipants_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldAddPost**](../Model/NoteNoteparticipantsJsonldAddPost.md)| The updated note_noteparticipants resource | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/NoteNoteparticipantsJsonldNoteParticipantShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteNoteparticipantsPost()`

```php
apiNoteNoteparticipantsPost($note_noteparticipants_jsonld_add_post): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a note_noteparticipants resource.

Creates a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_noteparticipants_jsonld_add_post = new \OpenAPI\Client\Model\NoteNoteparticipantsJsonldAddPost(); // \OpenAPI\Client\Model\NoteNoteparticipantsJsonldAddPost | The new note_noteparticipants resource

try {
    $result = $apiInstance->apiNoteNoteparticipantsPost($note_noteparticipants_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->apiNoteNoteparticipantsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_noteparticipants_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldAddPost**](../Model/NoteNoteparticipantsJsonldAddPost.md)| The new note_noteparticipants resource | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/NoteNoteparticipantsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteParticipantApiFileUpload()`

```php
noteParticipantApiFileUpload($id, $note_noteparticipants_jsonld): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingListStandardShow
```

Creates a note_noteparticipants resource.

Creates a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier
$note_noteparticipants_jsonld = new \OpenAPI\Client\Model\NoteNoteparticipantsJsonld(); // \OpenAPI\Client\Model\NoteNoteparticipantsJsonld | The new note_noteparticipants resource

try {
    $result = $apiInstance->noteParticipantApiFileUpload($id, $note_noteparticipants_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->noteParticipantApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |
| **note_noteparticipants_jsonld** | [**\OpenAPI\Client\Model\NoteNoteparticipantsJsonld**](../Model/NoteNoteparticipantsJsonld.md)| The new note_noteparticipants resource | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteParticipantDropDown()`

```php
noteParticipantDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $participant, $participant2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\NoteParticipantDropDown200Response
```

Retrieves the collection of note_noteparticipants resources.

Retrieves the collection of note_noteparticipants resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
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
$participant = 'participant_example'; // string | 
$participant2 = array('participant_example'); // string[] | 
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
    $result = $apiInstance->noteParticipantDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $note, $note2, $participant, $participant2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->noteParticipantDropDown: ', $e->getMessage(), PHP_EOL;
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
| **participant** | **string**|  | [optional] |
| **participant2** | [**string[]**](../Model/string.md)|  | [optional] |
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

[**\OpenAPI\Client\Model\NoteParticipantDropDown200Response**](../Model/NoteParticipantDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteParticipantDuplicate()`

```php
noteParticipantDuplicate($id): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingList
```

Retrieves a note_noteparticipants resource.

Retrieves a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier

try {
    $result = $apiInstance->noteParticipantDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->noteParticipantDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingList**](../Model/NoteNoteparticipantsJsonldNoteParticipantShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteParticipantFetchFiles()`

```php
noteParticipantFetchFiles($id): \OpenAPI\Client\Model\NoteNoteparticipantsJsonld
```

Retrieves a note_noteparticipants resource.

Retrieves a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier

try {
    $result = $apiInstance->noteParticipantFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->noteParticipantFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonld**](../Model/NoteNoteparticipantsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteParticipantGetBySlug()`

```php
noteParticipantGetBySlug($slug): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a note_noteparticipants resource.

Retrieves a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | note_noteparticipants identifier

try {
    $result = $apiInstance->noteParticipantGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->noteParticipantGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| note_noteparticipants identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantShowIdCustomPropertyTimestampableTagTaggingList**](../Model/NoteNoteparticipantsJsonldNoteParticipantShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteParticipantGetDeleteRelations()`

```php
noteParticipantGetDeleteRelations($id): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantRelations
```

Retrieves a note_noteparticipants resource.

Retrieves a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier

try {
    $result = $apiInstance->noteParticipantGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->noteParticipantGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldNoteParticipantRelations**](../Model/NoteNoteparticipantsJsonldNoteParticipantRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteParticipantsMetadata()`

```php
noteParticipantsMetadata($id): \OpenAPI\Client\Model\NoteNoteparticipantsJsonldIdStandardMetadataNoteParticipantMetadataTagTaggingListNoteParticipantRelationsTimestampable
```

Retrieves a note_noteparticipants resource.

Retrieves a note_noteparticipants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteNoteparticipantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_noteparticipants identifier

try {
    $result = $apiInstance->noteParticipantsMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteNoteparticipantsApi->noteParticipantsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_noteparticipants identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteNoteparticipantsJsonldIdStandardMetadataNoteParticipantMetadataTagTaggingListNoteParticipantRelationsTimestampable**](../Model/NoteNoteparticipantsJsonldIdStandardMetadataNoteParticipantMetadataTagTaggingListNoteParticipantRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
