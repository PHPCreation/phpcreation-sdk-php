# OpenAPI\Client\PersonWorkingtypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonWorkingtypesGetCollection()**](PersonWorkingtypesApi.md#apiPersonWorkingtypesGetCollection) | **GET** /open-api/v3/person_workingtypes | Retrieves the collection of person_workingtypes resources. |
| [**apiPersonWorkingtypesIdDelete()**](PersonWorkingtypesApi.md#apiPersonWorkingtypesIdDelete) | **DELETE** /open-api/v3/person_workingtypes/{id} | Removes the person_workingtypes resource. |
| [**apiPersonWorkingtypesIdGet()**](PersonWorkingtypesApi.md#apiPersonWorkingtypesIdGet) | **GET** /open-api/v3/person_workingtypes/{id} | Retrieves a person_workingtypes resource. |
| [**apiPersonWorkingtypesIdPut()**](PersonWorkingtypesApi.md#apiPersonWorkingtypesIdPut) | **PUT** /open-api/v3/person_workingtypes/{id} | Replaces the person_workingtypes resource. |
| [**apiPersonWorkingtypesPost()**](PersonWorkingtypesApi.md#apiPersonWorkingtypesPost) | **POST** /open-api/v3/person_workingtypes | Creates a person_workingtypes resource. |
| [**personWorkingTypeApiFileUpload()**](PersonWorkingtypesApi.md#personWorkingTypeApiFileUpload) | **POST** /open-api/v3/person_workingtypes/{id}/file/upload | Creates a person_workingtypes resource. |
| [**personWorkingTypeDropDown()**](PersonWorkingtypesApi.md#personWorkingTypeDropDown) | **GET** /open-api/v3/person_workingtypes/dropdown/get | Retrieves the collection of person_workingtypes resources. |
| [**personWorkingTypeDuplicate()**](PersonWorkingtypesApi.md#personWorkingTypeDuplicate) | **GET** /open-api/v3/person_workingtypes/duplicate/{id} | Retrieves a person_workingtypes resource. |
| [**personWorkingTypeFetchFiles()**](PersonWorkingtypesApi.md#personWorkingTypeFetchFiles) | **GET** /open-api/v3/person_workingtypes/fetch_files/{id} | Retrieves a person_workingtypes resource. |
| [**personWorkingTypeGetBySlug()**](PersonWorkingtypesApi.md#personWorkingTypeGetBySlug) | **GET** /open-api/v3/person_workingtypes/by_slug/{slug} | Retrieves a person_workingtypes resource. |
| [**personWorkingTypeGetDeleteRelations()**](PersonWorkingtypesApi.md#personWorkingTypeGetDeleteRelations) | **GET** /open-api/v3/person_workingtypes/get_delete_relations/{id} | Retrieves a person_workingtypes resource. |
| [**personWorkingTypeMetadata()**](PersonWorkingtypesApi.md#personWorkingTypeMetadata) | **GET** /open-api/v3/person_workingtypes/metadata/{id} | Retrieves a person_workingtypes resource. |


## `apiPersonWorkingtypesGetCollection()`

```php
apiPersonWorkingtypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonWorkingtypesGetCollection200Response
```

Retrieves the collection of person_workingtypes resources.

Retrieves the collection of person_workingtypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
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
$slug_partial = 'slug_partial_example'; // string | person_workingtypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_workingtypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_workingtypes slug_end_with
$id_partial = 'id_partial_example'; // string | person_workingtypes id_partial
$id_start_with = 'id_start_with_example'; // string | person_workingtypes id_start_with
$id_end_with = 'id_end_with_example'; // string | person_workingtypes id_end_with
$icon_partial = 'icon_partial_example'; // string | person_workingtypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_workingtypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_workingtypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_workingtypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_workingtypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_workingtypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_workingtypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_workingtypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_workingtypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_workingtypes priority_range

try {
    $result = $apiInstance->apiPersonWorkingtypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->apiPersonWorkingtypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **slug_partial** | **string**| person_workingtypes slug_partial | [optional] |
| **slug_start_with** | **string**| person_workingtypes slug_start_with | [optional] |
| **slug_end_with** | **string**| person_workingtypes slug_end_with | [optional] |
| **id_partial** | **string**| person_workingtypes id_partial | [optional] |
| **id_start_with** | **string**| person_workingtypes id_start_with | [optional] |
| **id_end_with** | **string**| person_workingtypes id_end_with | [optional] |
| **icon_partial** | **string**| person_workingtypes icon_partial | [optional] |
| **icon_start_with** | **string**| person_workingtypes icon_start_with | [optional] |
| **icon_end_with** | **string**| person_workingtypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_workingtypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_workingtypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_workingtypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_workingtypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_workingtypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_workingtypes translations.description_end_with | [optional] |
| **priority_range** | **string**| person_workingtypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonWorkingtypesGetCollection200Response**](../Model/ApiPersonWorkingtypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonWorkingtypesIdDelete()`

```php
apiPersonWorkingtypesIdDelete($id)
```

Removes the person_workingtypes resource.

Removes the person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier

try {
    $apiInstance->apiPersonWorkingtypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->apiPersonWorkingtypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |

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

## `apiPersonWorkingtypesIdGet()`

```php
apiPersonWorkingtypesIdGet($id): \OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_workingtypes resource.

Retrieves a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier

try {
    $result = $apiInstance->apiPersonWorkingtypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->apiPersonWorkingtypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonWorkingtypesIdPut()`

```php
apiPersonWorkingtypesIdPut($id, $person_workingtypes_jsonld_post): \OpenAPI\Client\Model\PersonWorkingtypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the person_workingtypes resource.

Replaces the person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier
$person_workingtypes_jsonld_post = new \OpenAPI\Client\Model\PersonWorkingtypesJsonldPost(); // \OpenAPI\Client\Model\PersonWorkingtypesJsonldPost | The updated person_workingtypes resource

try {
    $result = $apiInstance->apiPersonWorkingtypesIdPut($id, $person_workingtypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->apiPersonWorkingtypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |
| **person_workingtypes_jsonld_post** | [**\OpenAPI\Client\Model\PersonWorkingtypesJsonldPost**](../Model/PersonWorkingtypesJsonldPost.md)| The updated person_workingtypes resource | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonWorkingtypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonWorkingtypesPost()`

```php
apiPersonWorkingtypesPost($person_workingtypes_jsonld_add_post): \OpenAPI\Client\Model\PersonWorkingtypesJsonld
```

Creates a person_workingtypes resource.

Creates a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_workingtypes_jsonld_add_post = new \OpenAPI\Client\Model\PersonWorkingtypesJsonldAddPost(); // \OpenAPI\Client\Model\PersonWorkingtypesJsonldAddPost | The new person_workingtypes resource

try {
    $result = $apiInstance->apiPersonWorkingtypesPost($person_workingtypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->apiPersonWorkingtypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_workingtypes_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonWorkingtypesJsonldAddPost**](../Model/PersonWorkingtypesJsonldAddPost.md)| The new person_workingtypes resource | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonld**](../Model/PersonWorkingtypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personWorkingTypeApiFileUpload()`

```php
personWorkingTypeApiFileUpload($id, $person_workingtypes_jsonld): \OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_workingtypes resource.

Creates a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier
$person_workingtypes_jsonld = new \OpenAPI\Client\Model\PersonWorkingtypesJsonld(); // \OpenAPI\Client\Model\PersonWorkingtypesJsonld | The new person_workingtypes resource

try {
    $result = $apiInstance->personWorkingTypeApiFileUpload($id, $person_workingtypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->personWorkingTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |
| **person_workingtypes_jsonld** | [**\OpenAPI\Client\Model\PersonWorkingtypesJsonld**](../Model/PersonWorkingtypesJsonld.md)| The new person_workingtypes resource | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personWorkingTypeDropDown()`

```php
personWorkingTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\PersonWorkingTypeDropDown200Response
```

Retrieves the collection of person_workingtypes resources.

Retrieves the collection of person_workingtypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
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
    $result = $apiInstance->personWorkingTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->personWorkingTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
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

[**\OpenAPI\Client\Model\PersonWorkingTypeDropDown200Response**](../Model/PersonWorkingTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personWorkingTypeDuplicate()`

```php
personWorkingTypeDuplicate($id): \OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingList
```

Retrieves a person_workingtypes resource.

Retrieves a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier

try {
    $result = $apiInstance->personWorkingTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->personWorkingTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingList**](../Model/PersonWorkingtypesJsonldPersonWorkingTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personWorkingTypeFetchFiles()`

```php
personWorkingTypeFetchFiles($id): \OpenAPI\Client\Model\PersonWorkingtypesJsonld
```

Retrieves a person_workingtypes resource.

Retrieves a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier

try {
    $result = $apiInstance->personWorkingTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->personWorkingTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonld**](../Model/PersonWorkingtypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personWorkingTypeGetBySlug()`

```php
personWorkingTypeGetBySlug($slug): \OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_workingtypes resource.

Retrieves a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_workingtypes identifier

try {
    $result = $apiInstance->personWorkingTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->personWorkingTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_workingtypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonWorkingtypesJsonldPersonWorkingTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personWorkingTypeGetDeleteRelations()`

```php
personWorkingTypeGetDeleteRelations($id): \OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeRelations
```

Retrieves a person_workingtypes resource.

Retrieves a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier

try {
    $result = $apiInstance->personWorkingTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->personWorkingTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonldPersonWorkingTypeRelations**](../Model/PersonWorkingtypesJsonldPersonWorkingTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personWorkingTypeMetadata()`

```php
personWorkingTypeMetadata($id): \OpenAPI\Client\Model\PersonWorkingtypesJsonldIdStandardMetadataPersonWorkingTypeMetadataTagTaggingListPersonWorkingTypeRelationsTimestampable
```

Retrieves a person_workingtypes resource.

Retrieves a person_workingtypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonWorkingtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_workingtypes identifier

try {
    $result = $apiInstance->personWorkingTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonWorkingtypesApi->personWorkingTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_workingtypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonWorkingtypesJsonldIdStandardMetadataPersonWorkingTypeMetadataTagTaggingListPersonWorkingTypeRelationsTimestampable**](../Model/PersonWorkingtypesJsonldIdStandardMetadataPersonWorkingTypeMetadataTagTaggingListPersonWorkingTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
