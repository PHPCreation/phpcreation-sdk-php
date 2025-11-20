# OpenAPI\Client\NoteTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiNoteTypesGetCollection()**](NoteTypesApi.md#apiNoteTypesGetCollection) | **GET** /open-api/v3/note_types | Retrieves the collection of note_types resources. |
| [**apiNoteTypesIdDelete()**](NoteTypesApi.md#apiNoteTypesIdDelete) | **DELETE** /open-api/v3/note_types/{id} | Removes the note_types resource. |
| [**apiNoteTypesIdGet()**](NoteTypesApi.md#apiNoteTypesIdGet) | **GET** /open-api/v3/note_types/{id} | Retrieves a note_types resource. |
| [**apiNoteTypesIdPut()**](NoteTypesApi.md#apiNoteTypesIdPut) | **PUT** /open-api/v3/note_types/{id} | Replaces the note_types resource. |
| [**apiNoteTypesPost()**](NoteTypesApi.md#apiNoteTypesPost) | **POST** /open-api/v3/note_types | Creates a note_types resource. |
| [**noteTypeApiFileUpload()**](NoteTypesApi.md#noteTypeApiFileUpload) | **POST** /open-api/v3/note_types/{id}/file/upload | Creates a note_types resource. |
| [**noteTypeDropDown()**](NoteTypesApi.md#noteTypeDropDown) | **GET** /open-api/v3/note_types/dropdown/get | Retrieves the collection of note_types resources. |
| [**noteTypeDuplicate()**](NoteTypesApi.md#noteTypeDuplicate) | **GET** /open-api/v3/note_types/duplicate/{id} | Retrieves a note_types resource. |
| [**noteTypeFetchFiles()**](NoteTypesApi.md#noteTypeFetchFiles) | **GET** /open-api/v3/note_types/fetch_files/{id} | Retrieves a note_types resource. |
| [**noteTypeGetBySlug()**](NoteTypesApi.md#noteTypeGetBySlug) | **GET** /open-api/v3/note_types/by_slug/{slug} | Retrieves a note_types resource. |
| [**noteTypeGetDeleteRelations()**](NoteTypesApi.md#noteTypeGetDeleteRelations) | **GET** /open-api/v3/note_types/get_delete_relations/{id} | Retrieves a note_types resource. |
| [**noteTypeMetadata()**](NoteTypesApi.md#noteTypeMetadata) | **GET** /open-api/v3/note_types/metadata/{id} | Retrieves a note_types resource. |


## `apiNoteTypesGetCollection()`

```php
apiNoteTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiNoteTypesGetCollection200Response
```

Retrieves the collection of note_types resources.

Retrieves the collection of note_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | note_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | note_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | note_types slug_end_with
$id_partial = 'id_partial_example'; // string | note_types id_partial
$id_start_with = 'id_start_with_example'; // string | note_types id_start_with
$id_end_with = 'id_end_with_example'; // string | note_types id_end_with
$icon_partial = 'icon_partial_example'; // string | note_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | note_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | note_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | note_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | note_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | note_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | note_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | note_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | note_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | note_types priority_range

try {
    $result = $apiInstance->apiNoteTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->apiNoteTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| note_types slug_partial | [optional] |
| **slug_start_with** | **string**| note_types slug_start_with | [optional] |
| **slug_end_with** | **string**| note_types slug_end_with | [optional] |
| **id_partial** | **string**| note_types id_partial | [optional] |
| **id_start_with** | **string**| note_types id_start_with | [optional] |
| **id_end_with** | **string**| note_types id_end_with | [optional] |
| **icon_partial** | **string**| note_types icon_partial | [optional] |
| **icon_start_with** | **string**| note_types icon_start_with | [optional] |
| **icon_end_with** | **string**| note_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| note_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| note_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| note_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| note_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| note_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| note_types translations.description_end_with | [optional] |
| **priority_range** | **string**| note_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiNoteTypesGetCollection200Response**](../Model/ApiNoteTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteTypesIdDelete()`

```php
apiNoteTypesIdDelete($id)
```

Removes the note_types resource.

Removes the note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier

try {
    $apiInstance->apiNoteTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->apiNoteTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |

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

## `apiNoteTypesIdGet()`

```php
apiNoteTypesIdGet($id): \OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a note_types resource.

Retrieves a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier

try {
    $result = $apiInstance->apiNoteTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->apiNoteTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteTypesIdPut()`

```php
apiNoteTypesIdPut($id, $note_types_jsonld_post): \OpenAPI\Client\Model\NoteTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the note_types resource.

Replaces the note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier
$note_types_jsonld_post = new \OpenAPI\Client\Model\NoteTypesJsonldPost(); // \OpenAPI\Client\Model\NoteTypesJsonldPost | The updated note_types resource

try {
    $result = $apiInstance->apiNoteTypesIdPut($id, $note_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->apiNoteTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |
| **note_types_jsonld_post** | [**\OpenAPI\Client\Model\NoteTypesJsonldPost**](../Model/NoteTypesJsonldPost.md)| The updated note_types resource | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/NoteTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNoteTypesPost()`

```php
apiNoteTypesPost($note_types_jsonld_add_post): \OpenAPI\Client\Model\NoteTypesJsonld
```

Creates a note_types resource.

Creates a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_types_jsonld_add_post = new \OpenAPI\Client\Model\NoteTypesJsonldAddPost(); // \OpenAPI\Client\Model\NoteTypesJsonldAddPost | The new note_types resource

try {
    $result = $apiInstance->apiNoteTypesPost($note_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->apiNoteTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_types_jsonld_add_post** | [**\OpenAPI\Client\Model\NoteTypesJsonldAddPost**](../Model/NoteTypesJsonldAddPost.md)| The new note_types resource | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonld**](../Model/NoteTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteTypeApiFileUpload()`

```php
noteTypeApiFileUpload($id, $note_types_jsonld): \OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a note_types resource.

Creates a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier
$note_types_jsonld = new \OpenAPI\Client\Model\NoteTypesJsonld(); // \OpenAPI\Client\Model\NoteTypesJsonld | The new note_types resource

try {
    $result = $apiInstance->noteTypeApiFileUpload($id, $note_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->noteTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |
| **note_types_jsonld** | [**\OpenAPI\Client\Model\NoteTypesJsonld**](../Model/NoteTypesJsonld.md)| The new note_types resource | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteTypeDropDown()`

```php
noteTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\NoteTypeDropDown200Response
```

Retrieves the collection of note_types resources.

Retrieves the collection of note_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
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
    $result = $apiInstance->noteTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->noteTypeDropDown: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\NoteTypeDropDown200Response**](../Model/NoteTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteTypeDuplicate()`

```php
noteTypeDuplicate($id): \OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingList
```

Retrieves a note_types resource.

Retrieves a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier

try {
    $result = $apiInstance->noteTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->noteTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingList**](../Model/NoteTypesJsonldNoteTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteTypeFetchFiles()`

```php
noteTypeFetchFiles($id): \OpenAPI\Client\Model\NoteTypesJsonld
```

Retrieves a note_types resource.

Retrieves a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier

try {
    $result = $apiInstance->noteTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->noteTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonld**](../Model/NoteTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteTypeGetBySlug()`

```php
noteTypeGetBySlug($slug): \OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a note_types resource.

Retrieves a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | note_types identifier

try {
    $result = $apiInstance->noteTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->noteTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| note_types identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonldNoteTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/NoteTypesJsonldNoteTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteTypeGetDeleteRelations()`

```php
noteTypeGetDeleteRelations($id): \OpenAPI\Client\Model\NoteTypesJsonldNoteTypeRelations
```

Retrieves a note_types resource.

Retrieves a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier

try {
    $result = $apiInstance->noteTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->noteTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonldNoteTypeRelations**](../Model/NoteTypesJsonldNoteTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteTypeMetadata()`

```php
noteTypeMetadata($id): \OpenAPI\Client\Model\NoteTypesJsonldIdStandardMetadataNoteTypeMetadataTagTaggingListNoteTypeRelationsTimestampable
```

Retrieves a note_types resource.

Retrieves a note_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NoteTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | note_types identifier

try {
    $result = $apiInstance->noteTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteTypesApi->noteTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| note_types identifier | |

### Return type

[**\OpenAPI\Client\Model\NoteTypesJsonldIdStandardMetadataNoteTypeMetadataTagTaggingListNoteTypeRelationsTimestampable**](../Model/NoteTypesJsonldIdStandardMetadataNoteTypeMetadataTagTaggingListNoteTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
