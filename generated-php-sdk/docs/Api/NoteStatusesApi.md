# OpenAPI\Client\NoteStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiNoteStatusesGetCollection()**](NoteStatusesApi.md#apiNoteStatusesGetCollection) | **GET** /open-api/v3/note_statuses | Retrieves the collection of note_statuses resources. |
| [**apiNoteStatusesIdDelete()**](NoteStatusesApi.md#apiNoteStatusesIdDelete) | **DELETE** /open-api/v3/note_statuses/{id} | Removes the note_statuses resource. |
| [**apiNoteStatusesIdGet()**](NoteStatusesApi.md#apiNoteStatusesIdGet) | **GET** /open-api/v3/note_statuses/{id} | Retrieves a note_statuses resource. |
| [**apiNoteStatusesIdPut()**](NoteStatusesApi.md#apiNoteStatusesIdPut) | **PUT** /open-api/v3/note_statuses/{id} | Replaces the note_statuses resource. |
| [**apiNoteStatusesPost()**](NoteStatusesApi.md#apiNoteStatusesPost) | **POST** /open-api/v3/note_statuses | Creates a note_statuses resource. |
| [**noteStatusApiFileUpload()**](NoteStatusesApi.md#noteStatusApiFileUpload) | **POST** /open-api/v3/note_statuses/{id}/file/upload | Creates a note_statuses resource. |
| [**noteStatusDropDown()**](NoteStatusesApi.md#noteStatusDropDown) | **GET** /open-api/v3/note_statuses/dropdown/get | Retrieves the collection of note_statuses resources. |
| [**noteStatusDuplicate()**](NoteStatusesApi.md#noteStatusDuplicate) | **GET** /open-api/v3/note_statuses/duplicate/{id} | Retrieves a note_statuses resource. |
| [**noteStatusFetchFiles()**](NoteStatusesApi.md#noteStatusFetchFiles) | **GET** /open-api/v3/note_statuses/fetch_files/{id} | Retrieves a note_statuses resource. |
| [**noteStatusGetBySlug()**](NoteStatusesApi.md#noteStatusGetBySlug) | **GET** /open-api/v3/note_statuses/by_slug/{slug} | Retrieves a note_statuses resource. |
| [**noteStatusGetDeleteRelations()**](NoteStatusesApi.md#noteStatusGetDeleteRelations) | **GET** /open-api/v3/note_statuses/get_delete_relations/{id} | Retrieves a note_statuses resource. |
| [**noteStatusesMetadata()**](NoteStatusesApi.md#noteStatusesMetadata) | **GET** /open-api/v3/note_statuses/metadata/{id} | Retrieves a note_statuses resource. |


## `apiNoteStatusesGetCollection()`

```php
apiNoteStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiNoteStatusesGetCollection200Response
```

Retrieves the collection of note_statuses resources.

Retrieves the collection of note_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | note_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | note_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | note_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | note_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | note_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | note_statuses id_end_with
$icon_partial = 'icon_partial_example'; // string | note_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | note_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | note_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | note_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | note_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | note_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | note_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | note_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | note_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | note_statuses priority_range

try {
    $result = $apiInstance->apiNoteStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->apiNoteStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| note_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| note_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| note_statuses slug_end_with | [optional] |
| **id_partial** | **string**| note_statuses id_partial | [optional] |
| **id_start_with** | **string**| note_statuses id_start_with | [optional] |
| **id_end_with** | **string**| note_statuses id_end_with | [optional] |
| **icon_partial** | **string**| note_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| note_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| note_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| note_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| note_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| note_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| note_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| note_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| note_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| note_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiNoteStatusesGetCollection200Response**](../Model/ApiNoteStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteStatusesIdDelete()`

```php
apiNoteStatusesIdDelete($id)
```

Removes the note_statuses resource.

Removes the note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier

try {
    $apiInstance->apiNoteStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->apiNoteStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |

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

## `apiNoteStatusesIdGet()`

```php
apiNoteStatusesIdGet($id): \OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingListStandardShowNoteStatusRelations
```

Retrieves a note_statuses resource.

Retrieves a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier

try {
    $result = $apiInstance->apiNoteStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->apiNoteStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingListStandardShowNoteStatusRelations**](../Model/NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingListStandardShowNoteStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteStatusesIdPut()`

```php
apiNoteStatusesIdPut($id, $note_statuses_jsonld_post): \OpenAPI\Client\Model\NoteStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the note_statuses resource.

Replaces the note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier
$note_statuses_jsonld_post = new \OpenAPI\Client\Model\NoteStatusesJsonldPost(); // \OpenAPI\Client\Model\NoteStatusesJsonldPost | The updated note_statuses resource

try {
    $result = $apiInstance->apiNoteStatusesIdPut($id, $note_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->apiNoteStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |
| **note_statuses_jsonld_post** | [**\OpenAPI\Client\Model\NoteStatusesJsonldPost**](../Model/NoteStatusesJsonldPost.md)| The updated note_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/NoteStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteStatusesPost()`

```php
apiNoteStatusesPost($note_statuses_jsonld_add_post): \OpenAPI\Client\Model\NoteStatusesJsonld
```

Creates a note_statuses resource.

Creates a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_statuses_jsonld_add_post = new \OpenAPI\Client\Model\NoteStatusesJsonldAddPost(); // \OpenAPI\Client\Model\NoteStatusesJsonldAddPost | The new note_statuses resource

try {
    $result = $apiInstance->apiNoteStatusesPost($note_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->apiNoteStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteStatusesJsonldAddPost**](../Model/NoteStatusesJsonldAddPost.md)| The new note_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonld**](../Model/NoteStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteStatusApiFileUpload()`

```php
noteStatusApiFileUpload($id, $note_statuses_jsonld): \OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingListStandardShow
```

Creates a note_statuses resource.

Creates a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier
$note_statuses_jsonld = new \OpenAPI\Client\Model\NoteStatusesJsonld(); // \OpenAPI\Client\Model\NoteStatusesJsonld | The new note_statuses resource

try {
    $result = $apiInstance->noteStatusApiFileUpload($id, $note_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->noteStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |
| **note_statuses_jsonld** | [**\OpenAPI\Client\Model\NoteStatusesJsonld**](../Model/NoteStatusesJsonld.md)| The new note_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteStatusDropDown()`

```php
noteStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\NoteStatusDropDown200Response
```

Retrieves the collection of note_statuses resources.

Retrieves the collection of note_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->noteStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->noteStatusDropDown: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NoteStatusDropDown200Response**](../Model/NoteStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteStatusDuplicate()`

```php
noteStatusDuplicate($id): \OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingList
```

Retrieves a note_statuses resource.

Retrieves a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier

try {
    $result = $apiInstance->noteStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->noteStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingList**](../Model/NoteStatusesJsonldNoteStatusShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteStatusFetchFiles()`

```php
noteStatusFetchFiles($id): \OpenAPI\Client\Model\NoteStatusesJsonld
```

Retrieves a note_statuses resource.

Retrieves a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier

try {
    $result = $apiInstance->noteStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->noteStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonld**](../Model/NoteStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteStatusGetBySlug()`

```php
noteStatusGetBySlug($slug): \OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a note_statuses resource.

Retrieves a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | note_statuses identifier

try {
    $result = $apiInstance->noteStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->noteStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| note_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusShowIdCustomPropertyTimestampableTagTaggingList**](../Model/NoteStatusesJsonldNoteStatusShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteStatusGetDeleteRelations()`

```php
noteStatusGetDeleteRelations($id): \OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusRelations
```

Retrieves a note_statuses resource.

Retrieves a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier

try {
    $result = $apiInstance->noteStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->noteStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonldNoteStatusRelations**](../Model/NoteStatusesJsonldNoteStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteStatusesMetadata()`

```php
noteStatusesMetadata($id): \OpenAPI\Client\Model\NoteStatusesJsonldIdStandardMetadataNoteStatusMetadataTagTaggingListNoteStatusRelationsTimestampable
```

Retrieves a note_statuses resource.

Retrieves a note_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_statuses identifier

try {
    $result = $apiInstance->noteStatusesMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteStatusesApi->noteStatusesMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteStatusesJsonldIdStandardMetadataNoteStatusMetadataTagTaggingListNoteStatusRelationsTimestampable**](../Model/NoteStatusesJsonldIdStandardMetadataNoteStatusMetadataTagTaggingListNoteStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
