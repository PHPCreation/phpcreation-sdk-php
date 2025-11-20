# OpenAPI\Client\StorageEntityfiletypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiStorageEntityfiletypesGetCollection()**](StorageEntityfiletypesApi.md#apiStorageEntityfiletypesGetCollection) | **GET** /open-api/v3/storage_entityfiletypes | Retrieves the collection of storage_entityfiletypes resources. |
| [**apiStorageEntityfiletypesIdDelete()**](StorageEntityfiletypesApi.md#apiStorageEntityfiletypesIdDelete) | **DELETE** /open-api/v3/storage_entityfiletypes/{id} | Removes the storage_entityfiletypes resource. |
| [**apiStorageEntityfiletypesIdGet()**](StorageEntityfiletypesApi.md#apiStorageEntityfiletypesIdGet) | **GET** /open-api/v3/storage_entityfiletypes/{id} | Retrieves a storage_entityfiletypes resource. |
| [**apiStorageEntityfiletypesIdPut()**](StorageEntityfiletypesApi.md#apiStorageEntityfiletypesIdPut) | **PUT** /open-api/v3/storage_entityfiletypes/{id} | Replaces the storage_entityfiletypes resource. |
| [**apiStorageEntityfiletypesPost()**](StorageEntityfiletypesApi.md#apiStorageEntityfiletypesPost) | **POST** /open-api/v3/storage_entityfiletypes | Creates a storage_entityfiletypes resource. |
| [**entityFileTypeApiFileUpload()**](StorageEntityfiletypesApi.md#entityFileTypeApiFileUpload) | **POST** /open-api/v3/storage_entityfiletypes/{id}/file/upload | Creates a storage_entityfiletypes resource. |
| [**entityFileTypeDropDown()**](StorageEntityfiletypesApi.md#entityFileTypeDropDown) | **GET** /open-api/v3/storage_entityfiletypes/dropdown/get | Retrieves the collection of storage_entityfiletypes resources. |
| [**entityFileTypeDuplicate()**](StorageEntityfiletypesApi.md#entityFileTypeDuplicate) | **GET** /open-api/v3/storage_entityfiletypes/duplicate/{id} | Retrieves a storage_entityfiletypes resource. |
| [**entityFileTypeFetchFiles()**](StorageEntityfiletypesApi.md#entityFileTypeFetchFiles) | **GET** /open-api/v3/storage_entityfiletypes/fetch_files/{id} | Retrieves a storage_entityfiletypes resource. |
| [**entityFileTypeGetBySlug()**](StorageEntityfiletypesApi.md#entityFileTypeGetBySlug) | **GET** /open-api/v3/storage_entityfiletypes/by_slug/{slug} | Retrieves a storage_entityfiletypes resource. |
| [**entityFileTypeGetDeleteRelations()**](StorageEntityfiletypesApi.md#entityFileTypeGetDeleteRelations) | **GET** /open-api/v3/storage_entityfiletypes/get_delete_relations/{id} | Retrieves a storage_entityfiletypes resource. |
| [**entityFileTypeMetadata()**](StorageEntityfiletypesApi.md#entityFileTypeMetadata) | **GET** /open-api/v3/storage_entityfiletypes/metadata/{id} | Retrieves a storage_entityfiletypes resource. |


## `apiStorageEntityfiletypesGetCollection()`

```php
apiStorageEntityfiletypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiStorageEntityfiletypesGetCollection200Response
```

Retrieves the collection of storage_entityfiletypes resources.

Retrieves the collection of storage_entityfiletypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
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
$slug_partial = 'slug_partial_example'; // string | storage_entityfiletypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | storage_entityfiletypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | storage_entityfiletypes slug_end_with
$id_partial = 'id_partial_example'; // string | storage_entityfiletypes id_partial
$id_start_with = 'id_start_with_example'; // string | storage_entityfiletypes id_start_with
$id_end_with = 'id_end_with_example'; // string | storage_entityfiletypes id_end_with
$icon_partial = 'icon_partial_example'; // string | storage_entityfiletypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | storage_entityfiletypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | storage_entityfiletypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | storage_entityfiletypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | storage_entityfiletypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | storage_entityfiletypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | storage_entityfiletypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | storage_entityfiletypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | storage_entityfiletypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | storage_entityfiletypes priority_range

try {
    $result = $apiInstance->apiStorageEntityfiletypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->apiStorageEntityfiletypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| storage_entityfiletypes slug_partial | [optional] |
| **slug_start_with** | **string**| storage_entityfiletypes slug_start_with | [optional] |
| **slug_end_with** | **string**| storage_entityfiletypes slug_end_with | [optional] |
| **id_partial** | **string**| storage_entityfiletypes id_partial | [optional] |
| **id_start_with** | **string**| storage_entityfiletypes id_start_with | [optional] |
| **id_end_with** | **string**| storage_entityfiletypes id_end_with | [optional] |
| **icon_partial** | **string**| storage_entityfiletypes icon_partial | [optional] |
| **icon_start_with** | **string**| storage_entityfiletypes icon_start_with | [optional] |
| **icon_end_with** | **string**| storage_entityfiletypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| storage_entityfiletypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| storage_entityfiletypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| storage_entityfiletypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| storage_entityfiletypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| storage_entityfiletypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| storage_entityfiletypes translations.description_end_with | [optional] |
| **priority_range** | **string**| storage_entityfiletypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiStorageEntityfiletypesGetCollection200Response**](../Model/ApiStorageEntityfiletypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageEntityfiletypesIdDelete()`

```php
apiStorageEntityfiletypesIdDelete($id)
```

Removes the storage_entityfiletypes resource.

Removes the storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier

try {
    $apiInstance->apiStorageEntityfiletypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->apiStorageEntityfiletypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |

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

## `apiStorageEntityfiletypesIdGet()`

```php
apiStorageEntityfiletypesIdGet($id): \OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a storage_entityfiletypes resource.

Retrieves a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier

try {
    $result = $apiInstance->apiStorageEntityfiletypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->apiStorageEntityfiletypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageEntityfiletypesIdPut()`

```php
apiStorageEntityfiletypesIdPut($id, $storage_entityfiletypes_jsonld_post): \OpenAPI\Client\Model\StorageEntityfiletypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the storage_entityfiletypes resource.

Replaces the storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier
$storage_entityfiletypes_jsonld_post = new \OpenAPI\Client\Model\StorageEntityfiletypesJsonldPost(); // \OpenAPI\Client\Model\StorageEntityfiletypesJsonldPost | The updated storage_entityfiletypes resource

try {
    $result = $apiInstance->apiStorageEntityfiletypesIdPut($id, $storage_entityfiletypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->apiStorageEntityfiletypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |
| **storage_entityfiletypes_jsonld_post** | [**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldPost**](../Model/StorageEntityfiletypesJsonldPost.md)| The updated storage_entityfiletypes resource | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/StorageEntityfiletypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiStorageEntityfiletypesPost()`

```php
apiStorageEntityfiletypesPost($storage_entityfiletypes_jsonld_add_post): \OpenAPI\Client\Model\StorageEntityfiletypesJsonld
```

Creates a storage_entityfiletypes resource.

Creates a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storage_entityfiletypes_jsonld_add_post = new \OpenAPI\Client\Model\StorageEntityfiletypesJsonldAddPost(); // \OpenAPI\Client\Model\StorageEntityfiletypesJsonldAddPost | The new storage_entityfiletypes resource

try {
    $result = $apiInstance->apiStorageEntityfiletypesPost($storage_entityfiletypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->apiStorageEntityfiletypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storage_entityfiletypes_jsonld_add_post** | [**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldAddPost**](../Model/StorageEntityfiletypesJsonldAddPost.md)| The new storage_entityfiletypes resource | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonld**](../Model/StorageEntityfiletypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityFileTypeApiFileUpload()`

```php
entityFileTypeApiFileUpload($id, $storage_entityfiletypes_jsonld): \OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a storage_entityfiletypes resource.

Creates a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier
$storage_entityfiletypes_jsonld = new \OpenAPI\Client\Model\StorageEntityfiletypesJsonld(); // \OpenAPI\Client\Model\StorageEntityfiletypesJsonld | The new storage_entityfiletypes resource

try {
    $result = $apiInstance->entityFileTypeApiFileUpload($id, $storage_entityfiletypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->entityFileTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |
| **storage_entityfiletypes_jsonld** | [**\OpenAPI\Client\Model\StorageEntityfiletypesJsonld**](../Model/StorageEntityfiletypesJsonld.md)| The new storage_entityfiletypes resource | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityFileTypeDropDown()`

```php
entityFileTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\EntityFileTypeDropDown200Response
```

Retrieves the collection of storage_entityfiletypes resources.

Retrieves the collection of storage_entityfiletypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
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
    $result = $apiInstance->entityFileTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->entityFileTypeDropDown: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\EntityFileTypeDropDown200Response**](../Model/EntityFileTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityFileTypeDuplicate()`

```php
entityFileTypeDuplicate($id): \OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingList
```

Retrieves a storage_entityfiletypes resource.

Retrieves a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier

try {
    $result = $apiInstance->entityFileTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->entityFileTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingList**](../Model/StorageEntityfiletypesJsonldEntityFileTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityFileTypeFetchFiles()`

```php
entityFileTypeFetchFiles($id): \OpenAPI\Client\Model\StorageEntityfiletypesJsonld
```

Retrieves a storage_entityfiletypes resource.

Retrieves a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier

try {
    $result = $apiInstance->entityFileTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->entityFileTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonld**](../Model/StorageEntityfiletypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityFileTypeGetBySlug()`

```php
entityFileTypeGetBySlug($slug): \OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a storage_entityfiletypes resource.

Retrieves a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | storage_entityfiletypes identifier

try {
    $result = $apiInstance->entityFileTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->entityFileTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| storage_entityfiletypes identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/StorageEntityfiletypesJsonldEntityFileTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityFileTypeGetDeleteRelations()`

```php
entityFileTypeGetDeleteRelations($id): \OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeRelations
```

Retrieves a storage_entityfiletypes resource.

Retrieves a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier

try {
    $result = $apiInstance->entityFileTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->entityFileTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldEntityFileTypeRelations**](../Model/StorageEntityfiletypesJsonldEntityFileTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityFileTypeMetadata()`

```php
entityFileTypeMetadata($id): \OpenAPI\Client\Model\StorageEntityfiletypesJsonldIdStandardMetadataEntityFileTypeMetadataTagTaggingListEntityFileTypeRelationsTimestampable
```

Retrieves a storage_entityfiletypes resource.

Retrieves a storage_entityfiletypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StorageEntityfiletypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | storage_entityfiletypes identifier

try {
    $result = $apiInstance->entityFileTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageEntityfiletypesApi->entityFileTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| storage_entityfiletypes identifier | |

### Return type

[**\OpenAPI\Client\Model\StorageEntityfiletypesJsonldIdStandardMetadataEntityFileTypeMetadataTagTaggingListEntityFileTypeRelationsTimestampable**](../Model/StorageEntityfiletypesJsonldIdStandardMetadataEntityFileTypeMetadataTagTaggingListEntityFileTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
