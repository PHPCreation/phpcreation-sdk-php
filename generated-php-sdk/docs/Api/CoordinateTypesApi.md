# OpenAPI\Client\CoordinateTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCoordinateTypesGetCollection()**](CoordinateTypesApi.md#apiCoordinateTypesGetCollection) | **GET** /open-api/v3/coordinate_types | Retrieves the collection of coordinate_types resources. |
| [**apiCoordinateTypesIdDelete()**](CoordinateTypesApi.md#apiCoordinateTypesIdDelete) | **DELETE** /open-api/v3/coordinate_types/{id} | Removes the coordinate_types resource. |
| [**apiCoordinateTypesIdGet()**](CoordinateTypesApi.md#apiCoordinateTypesIdGet) | **GET** /open-api/v3/coordinate_types/{id} | Retrieves a coordinate_types resource. |
| [**apiCoordinateTypesIdPut()**](CoordinateTypesApi.md#apiCoordinateTypesIdPut) | **PUT** /open-api/v3/coordinate_types/{id} | Replaces the coordinate_types resource. |
| [**apiCoordinateTypesPost()**](CoordinateTypesApi.md#apiCoordinateTypesPost) | **POST** /open-api/v3/coordinate_types | Creates a coordinate_types resource. |
| [**coordinateTypeApiFileUpload()**](CoordinateTypesApi.md#coordinateTypeApiFileUpload) | **POST** /open-api/v3/coordinate_types/{id}/file/upload | Creates a coordinate_types resource. |
| [**coordinateTypeDropDown()**](CoordinateTypesApi.md#coordinateTypeDropDown) | **GET** /open-api/v3/coordinate_types/dropdown/get | Retrieves the collection of coordinate_types resources. |
| [**coordinateTypeDuplicate()**](CoordinateTypesApi.md#coordinateTypeDuplicate) | **GET** /open-api/v3/coordinate_types/duplicate/{id} | Retrieves a coordinate_types resource. |
| [**coordinateTypeFetchFiles()**](CoordinateTypesApi.md#coordinateTypeFetchFiles) | **GET** /open-api/v3/coordinate_types/fetch_files/{id} | Retrieves a coordinate_types resource. |
| [**coordinateTypeGetBySlug()**](CoordinateTypesApi.md#coordinateTypeGetBySlug) | **GET** /open-api/v3/coordinate_types/by_slug/{slug} | Retrieves a coordinate_types resource. |
| [**coordinateTypeGetDeleteRelations()**](CoordinateTypesApi.md#coordinateTypeGetDeleteRelations) | **GET** /open-api/v3/coordinate_types/get_delete_relations/{id} | Retrieves a coordinate_types resource. |
| [**coordinateTypeMetadata()**](CoordinateTypesApi.md#coordinateTypeMetadata) | **GET** /open-api/v3/coordinate_types/metadata/{id} | Retrieves a coordinate_types resource. |


## `apiCoordinateTypesGetCollection()`

```php
apiCoordinateTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiCoordinateTypesGetCollection200Response
```

Retrieves the collection of coordinate_types resources.

Retrieves the collection of coordinate_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
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
$coordinates = 'coordinates_example'; // string | 
$coordinates2 = array('coordinates_example'); // string[] | 
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
$slug_partial = 'slug_partial_example'; // string | coordinate_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinate_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinate_types slug_end_with
$id_partial = 'id_partial_example'; // string | coordinate_types id_partial
$id_start_with = 'id_start_with_example'; // string | coordinate_types id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinate_types id_end_with
$icon_partial = 'icon_partial_example'; // string | coordinate_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | coordinate_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | coordinate_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | coordinate_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | coordinate_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | coordinate_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | coordinate_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | coordinate_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | coordinate_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | coordinate_types priority_range

try {
    $result = $apiInstance->apiCoordinateTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->apiCoordinateTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **coordinates** | **string**|  | [optional] |
| **coordinates2** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **slug_partial** | **string**| coordinate_types slug_partial | [optional] |
| **slug_start_with** | **string**| coordinate_types slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinate_types slug_end_with | [optional] |
| **id_partial** | **string**| coordinate_types id_partial | [optional] |
| **id_start_with** | **string**| coordinate_types id_start_with | [optional] |
| **id_end_with** | **string**| coordinate_types id_end_with | [optional] |
| **icon_partial** | **string**| coordinate_types icon_partial | [optional] |
| **icon_start_with** | **string**| coordinate_types icon_start_with | [optional] |
| **icon_end_with** | **string**| coordinate_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| coordinate_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| coordinate_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| coordinate_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| coordinate_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| coordinate_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| coordinate_types translations.description_end_with | [optional] |
| **priority_range** | **string**| coordinate_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiCoordinateTypesGetCollection200Response**](../Model/ApiCoordinateTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateTypesIdDelete()`

```php
apiCoordinateTypesIdDelete($id)
```

Removes the coordinate_types resource.

Removes the coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier

try {
    $apiInstance->apiCoordinateTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->apiCoordinateTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |

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

## `apiCoordinateTypesIdGet()`

```php
apiCoordinateTypesIdGet($id): \OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a coordinate_types resource.

Retrieves a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier

try {
    $result = $apiInstance->apiCoordinateTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->apiCoordinateTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateTypesIdPut()`

```php
apiCoordinateTypesIdPut($id, $coordinate_types_jsonld_post): \OpenAPI\Client\Model\CoordinateTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the coordinate_types resource.

Replaces the coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier
$coordinate_types_jsonld_post = new \OpenAPI\Client\Model\CoordinateTypesJsonldPost(); // \OpenAPI\Client\Model\CoordinateTypesJsonldPost | The updated coordinate_types resource

try {
    $result = $apiInstance->apiCoordinateTypesIdPut($id, $coordinate_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->apiCoordinateTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |
| **coordinate_types_jsonld_post** | [**\OpenAPI\Client\Model\CoordinateTypesJsonldPost**](../Model/CoordinateTypesJsonldPost.md)| The updated coordinate_types resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/CoordinateTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateTypesPost()`

```php
apiCoordinateTypesPost($coordinate_types_jsonld_add_post): \OpenAPI\Client\Model\CoordinateTypesJsonld
```

Creates a coordinate_types resource.

Creates a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coordinate_types_jsonld_add_post = new \OpenAPI\Client\Model\CoordinateTypesJsonldAddPost(); // \OpenAPI\Client\Model\CoordinateTypesJsonldAddPost | The new coordinate_types resource

try {
    $result = $apiInstance->apiCoordinateTypesPost($coordinate_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->apiCoordinateTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coordinate_types_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinateTypesJsonldAddPost**](../Model/CoordinateTypesJsonldAddPost.md)| The new coordinate_types resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonld**](../Model/CoordinateTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateTypeApiFileUpload()`

```php
coordinateTypeApiFileUpload($id, $coordinate_types_jsonld): \OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a coordinate_types resource.

Creates a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier
$coordinate_types_jsonld = new \OpenAPI\Client\Model\CoordinateTypesJsonld(); // \OpenAPI\Client\Model\CoordinateTypesJsonld | The new coordinate_types resource

try {
    $result = $apiInstance->coordinateTypeApiFileUpload($id, $coordinate_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->coordinateTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |
| **coordinate_types_jsonld** | [**\OpenAPI\Client\Model\CoordinateTypesJsonld**](../Model/CoordinateTypesJsonld.md)| The new coordinate_types resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateTypeDropDown()`

```php
coordinateTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\CoordinateTypeDropDown200Response
```

Retrieves the collection of coordinate_types resources.

Retrieves the collection of coordinate_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
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
$coordinates = 'coordinates_example'; // string | 
$coordinates2 = array('coordinates_example'); // string[] | 
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
    $result = $apiInstance->coordinateTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->coordinateTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **coordinates** | **string**|  | [optional] |
| **coordinates2** | [**string[]**](../Model/string.md)|  | [optional] |
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

[**\OpenAPI\Client\Model\CoordinateTypeDropDown200Response**](../Model/CoordinateTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateTypeDuplicate()`

```php
coordinateTypeDuplicate($id): \OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingList
```

Retrieves a coordinate_types resource.

Retrieves a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier

try {
    $result = $apiInstance->coordinateTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->coordinateTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingList**](../Model/CoordinateTypesJsonldCoordinateTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateTypeFetchFiles()`

```php
coordinateTypeFetchFiles($id): \OpenAPI\Client\Model\CoordinateTypesJsonld
```

Retrieves a coordinate_types resource.

Retrieves a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier

try {
    $result = $apiInstance->coordinateTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->coordinateTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonld**](../Model/CoordinateTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateTypeGetBySlug()`

```php
coordinateTypeGetBySlug($slug): \OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a coordinate_types resource.

Retrieves a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | coordinate_types identifier

try {
    $result = $apiInstance->coordinateTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->coordinateTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| coordinate_types identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/CoordinateTypesJsonldCoordinateTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateTypeGetDeleteRelations()`

```php
coordinateTypeGetDeleteRelations($id): \OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeRelations
```

Retrieves a coordinate_types resource.

Retrieves a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier

try {
    $result = $apiInstance->coordinateTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->coordinateTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonldCoordinateTypeRelations**](../Model/CoordinateTypesJsonldCoordinateTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateTypeMetadata()`

```php
coordinateTypeMetadata($id): \OpenAPI\Client\Model\CoordinateTypesJsonldIdStandardMetadataCoordinateTypeMetadataTagTaggingListCoordinateTypeRelationsTimestampable
```

Retrieves a coordinate_types resource.

Retrieves a coordinate_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_types identifier

try {
    $result = $apiInstance->coordinateTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateTypesApi->coordinateTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_types identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateTypesJsonldIdStandardMetadataCoordinateTypeMetadataTagTaggingListCoordinateTypeRelationsTimestampable**](../Model/CoordinateTypesJsonldIdStandardMetadataCoordinateTypeMetadataTagTaggingListCoordinateTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
