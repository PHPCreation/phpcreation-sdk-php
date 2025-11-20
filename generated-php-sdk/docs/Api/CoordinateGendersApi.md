# OpenAPI\Client\CoordinateGendersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCoordinateGendersGetCollection()**](CoordinateGendersApi.md#apiCoordinateGendersGetCollection) | **GET** /open-api/v3/coordinate_genders | Retrieves the collection of coordinate_genders resources. |
| [**apiCoordinateGendersIdDelete()**](CoordinateGendersApi.md#apiCoordinateGendersIdDelete) | **DELETE** /open-api/v3/coordinate_genders/{id} | Removes the coordinate_genders resource. |
| [**apiCoordinateGendersIdGet()**](CoordinateGendersApi.md#apiCoordinateGendersIdGet) | **GET** /open-api/v3/coordinate_genders/{id} | Retrieves a coordinate_genders resource. |
| [**apiCoordinateGendersIdPut()**](CoordinateGendersApi.md#apiCoordinateGendersIdPut) | **PUT** /open-api/v3/coordinate_genders/{id} | Replaces the coordinate_genders resource. |
| [**apiCoordinateGendersPost()**](CoordinateGendersApi.md#apiCoordinateGendersPost) | **POST** /open-api/v3/coordinate_genders | Creates a coordinate_genders resource. |
| [**coordinateGenderApiFileUpload()**](CoordinateGendersApi.md#coordinateGenderApiFileUpload) | **POST** /open-api/v3/coordinate_genders/{id}/file/upload | Creates a coordinate_genders resource. |
| [**coordinateGenderDropDown()**](CoordinateGendersApi.md#coordinateGenderDropDown) | **GET** /open-api/v3/coordinate_genders/dropdown/get | Retrieves the collection of coordinate_genders resources. |
| [**coordinateGenderDuplicate()**](CoordinateGendersApi.md#coordinateGenderDuplicate) | **GET** /open-api/v3/coordinate_genders/duplicate/{id} | Retrieves a coordinate_genders resource. |
| [**coordinateGenderFetchFiles()**](CoordinateGendersApi.md#coordinateGenderFetchFiles) | **GET** /open-api/v3/coordinate_genders/fetch_files/{id} | Retrieves a coordinate_genders resource. |
| [**coordinateGenderGetBySlug()**](CoordinateGendersApi.md#coordinateGenderGetBySlug) | **GET** /open-api/v3/coordinate_genders/by_slug/{slug} | Retrieves a coordinate_genders resource. |
| [**coordinateGenderGetDeleteRelations()**](CoordinateGendersApi.md#coordinateGenderGetDeleteRelations) | **GET** /open-api/v3/coordinate_genders/get_delete_relations/{id} | Retrieves a coordinate_genders resource. |
| [**coordinateGenderMetadata()**](CoordinateGendersApi.md#coordinateGenderMetadata) | **GET** /open-api/v3/coordinate_genders/metadata/{id} | Retrieves a coordinate_genders resource. |


## `apiCoordinateGendersGetCollection()`

```php
apiCoordinateGendersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_number, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiCoordinateGendersGetCollection200Response
```

Retrieves the collection of coordinate_genders resources.

Retrieves the collection of coordinate_genders resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
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
$order_number = 'order_number_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | coordinate_genders slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinate_genders slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinate_genders slug_end_with
$id_partial = 'id_partial_example'; // string | coordinate_genders id_partial
$id_start_with = 'id_start_with_example'; // string | coordinate_genders id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinate_genders id_end_with
$number_partial = 'number_partial_example'; // string | coordinate_genders number_partial
$number_start_with = 'number_start_with_example'; // string | coordinate_genders number_start_with
$number_end_with = 'number_end_with_example'; // string | coordinate_genders number_end_with
$color_partial = 'color_partial_example'; // string | coordinate_genders color_partial
$color_start_with = 'color_start_with_example'; // string | coordinate_genders color_start_with
$color_end_with = 'color_end_with_example'; // string | coordinate_genders color_end_with
$icon_partial = 'icon_partial_example'; // string | coordinate_genders icon_partial
$icon_start_with = 'icon_start_with_example'; // string | coordinate_genders icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | coordinate_genders icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | coordinate_genders translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | coordinate_genders translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | coordinate_genders translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | coordinate_genders translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | coordinate_genders translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | coordinate_genders translations.description_end_with
$priority_range = 'priority_range_example'; // string | coordinate_genders priority_range

try {
    $result = $apiInstance->apiCoordinateGendersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_number, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->apiCoordinateGendersGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **order_number** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| coordinate_genders slug_partial | [optional] |
| **slug_start_with** | **string**| coordinate_genders slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinate_genders slug_end_with | [optional] |
| **id_partial** | **string**| coordinate_genders id_partial | [optional] |
| **id_start_with** | **string**| coordinate_genders id_start_with | [optional] |
| **id_end_with** | **string**| coordinate_genders id_end_with | [optional] |
| **number_partial** | **string**| coordinate_genders number_partial | [optional] |
| **number_start_with** | **string**| coordinate_genders number_start_with | [optional] |
| **number_end_with** | **string**| coordinate_genders number_end_with | [optional] |
| **color_partial** | **string**| coordinate_genders color_partial | [optional] |
| **color_start_with** | **string**| coordinate_genders color_start_with | [optional] |
| **color_end_with** | **string**| coordinate_genders color_end_with | [optional] |
| **icon_partial** | **string**| coordinate_genders icon_partial | [optional] |
| **icon_start_with** | **string**| coordinate_genders icon_start_with | [optional] |
| **icon_end_with** | **string**| coordinate_genders icon_end_with | [optional] |
| **translations_title_partial** | **string**| coordinate_genders translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| coordinate_genders translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| coordinate_genders translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| coordinate_genders translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| coordinate_genders translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| coordinate_genders translations.description_end_with | [optional] |
| **priority_range** | **string**| coordinate_genders priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiCoordinateGendersGetCollection200Response**](../Model/ApiCoordinateGendersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateGendersIdDelete()`

```php
apiCoordinateGendersIdDelete($id)
```

Removes the coordinate_genders resource.

Removes the coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier

try {
    $apiInstance->apiCoordinateGendersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->apiCoordinateGendersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |

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

## `apiCoordinateGendersIdGet()`

```php
apiCoordinateGendersIdGet($id): \OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinate_genders resource.

Retrieves a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier

try {
    $result = $apiInstance->apiCoordinateGendersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->apiCoordinateGendersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateGendersIdPut()`

```php
apiCoordinateGendersIdPut($id, $coordinate_genders_jsonld_post): \OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the coordinate_genders resource.

Replaces the coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier
$coordinate_genders_jsonld_post = new \OpenAPI\Client\Model\CoordinateGendersJsonldPost(); // \OpenAPI\Client\Model\CoordinateGendersJsonldPost | The updated coordinate_genders resource

try {
    $result = $apiInstance->apiCoordinateGendersIdPut($id, $coordinate_genders_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->apiCoordinateGendersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |
| **coordinate_genders_jsonld_post** | [**\OpenAPI\Client\Model\CoordinateGendersJsonldPost**](../Model/CoordinateGendersJsonldPost.md)| The updated coordinate_genders resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateGendersPost()`

```php
apiCoordinateGendersPost($coordinate_genders_jsonld_add_post): \OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a coordinate_genders resource.

Creates a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coordinate_genders_jsonld_add_post = new \OpenAPI\Client\Model\CoordinateGendersJsonldAddPost(); // \OpenAPI\Client\Model\CoordinateGendersJsonldAddPost | The new coordinate_genders resource

try {
    $result = $apiInstance->apiCoordinateGendersPost($coordinate_genders_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->apiCoordinateGendersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coordinate_genders_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinateGendersJsonldAddPost**](../Model/CoordinateGendersJsonldAddPost.md)| The new coordinate_genders resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGenderApiFileUpload()`

```php
coordinateGenderApiFileUpload($id, $coordinate_genders_jsonld): \OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a coordinate_genders resource.

Creates a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier
$coordinate_genders_jsonld = new \OpenAPI\Client\Model\CoordinateGendersJsonld(); // \OpenAPI\Client\Model\CoordinateGendersJsonld | The new coordinate_genders resource

try {
    $result = $apiInstance->coordinateGenderApiFileUpload($id, $coordinate_genders_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->coordinateGenderApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |
| **coordinate_genders_jsonld** | [**\OpenAPI\Client\Model\CoordinateGendersJsonld**](../Model/CoordinateGendersJsonld.md)| The new coordinate_genders resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGenderDropDown()`

```php
coordinateGenderDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_number, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\CoordinateGenderDropDown200Response
```

Retrieves the collection of coordinate_genders resources.

Retrieves the collection of coordinate_genders resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
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
$order_number = 'order_number_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | coordinate_genders slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinate_genders slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinate_genders slug_end_with
$id_partial = 'id_partial_example'; // string | coordinate_genders id_partial
$id_start_with = 'id_start_with_example'; // string | coordinate_genders id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinate_genders id_end_with
$number_partial = 'number_partial_example'; // string | coordinate_genders number_partial
$number_start_with = 'number_start_with_example'; // string | coordinate_genders number_start_with
$number_end_with = 'number_end_with_example'; // string | coordinate_genders number_end_with
$color_partial = 'color_partial_example'; // string | coordinate_genders color_partial
$color_start_with = 'color_start_with_example'; // string | coordinate_genders color_start_with
$color_end_with = 'color_end_with_example'; // string | coordinate_genders color_end_with
$icon_partial = 'icon_partial_example'; // string | coordinate_genders icon_partial
$icon_start_with = 'icon_start_with_example'; // string | coordinate_genders icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | coordinate_genders icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | coordinate_genders translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | coordinate_genders translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | coordinate_genders translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | coordinate_genders translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | coordinate_genders translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | coordinate_genders translations.description_end_with
$priority_range = 'priority_range_example'; // string | coordinate_genders priority_range

try {
    $result = $apiInstance->coordinateGenderDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_number, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->coordinateGenderDropDown: ', $e->getMessage(), PHP_EOL;
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
| **order_number** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| coordinate_genders slug_partial | [optional] |
| **slug_start_with** | **string**| coordinate_genders slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinate_genders slug_end_with | [optional] |
| **id_partial** | **string**| coordinate_genders id_partial | [optional] |
| **id_start_with** | **string**| coordinate_genders id_start_with | [optional] |
| **id_end_with** | **string**| coordinate_genders id_end_with | [optional] |
| **number_partial** | **string**| coordinate_genders number_partial | [optional] |
| **number_start_with** | **string**| coordinate_genders number_start_with | [optional] |
| **number_end_with** | **string**| coordinate_genders number_end_with | [optional] |
| **color_partial** | **string**| coordinate_genders color_partial | [optional] |
| **color_start_with** | **string**| coordinate_genders color_start_with | [optional] |
| **color_end_with** | **string**| coordinate_genders color_end_with | [optional] |
| **icon_partial** | **string**| coordinate_genders icon_partial | [optional] |
| **icon_start_with** | **string**| coordinate_genders icon_start_with | [optional] |
| **icon_end_with** | **string**| coordinate_genders icon_end_with | [optional] |
| **translations_title_partial** | **string**| coordinate_genders translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| coordinate_genders translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| coordinate_genders translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| coordinate_genders translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| coordinate_genders translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| coordinate_genders translations.description_end_with | [optional] |
| **priority_range** | **string**| coordinate_genders priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\CoordinateGenderDropDown200Response**](../Model/CoordinateGenderDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGenderDuplicate()`

```php
coordinateGenderDuplicate($id): \OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinate_genders resource.

Retrieves a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier

try {
    $result = $apiInstance->coordinateGenderDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->coordinateGenderDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGenderFetchFiles()`

```php
coordinateGenderFetchFiles($id): \OpenAPI\Client\Model\CoordinateGendersJsonld
```

Retrieves a coordinate_genders resource.

Retrieves a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier

try {
    $result = $apiInstance->coordinateGenderFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->coordinateGenderFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonld**](../Model/CoordinateGendersJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGenderGetBySlug()`

```php
coordinateGenderGetBySlug($slug): \OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinate_genders resource.

Retrieves a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | coordinate_genders identifier

try {
    $result = $apiInstance->coordinateGenderGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->coordinateGenderGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| coordinate_genders identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateGendersJsonldCoordinateGenderShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGenderGetDeleteRelations()`

```php
coordinateGenderGetDeleteRelations($id): \OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderRelations
```

Retrieves a coordinate_genders resource.

Retrieves a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier

try {
    $result = $apiInstance->coordinateGenderGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->coordinateGenderGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldCoordinateGenderRelations**](../Model/CoordinateGendersJsonldCoordinateGenderRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateGenderMetadata()`

```php
coordinateGenderMetadata($id): \OpenAPI\Client\Model\CoordinateGendersJsonldIdCoordinateGenderMetadataNoteTypeMetadataTagTaggingListCoordinateGenderRelationsTimestampable
```

Retrieves a coordinate_genders resource.

Retrieves a coordinate_genders resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateGendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_genders identifier

try {
    $result = $apiInstance->coordinateGenderMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateGendersApi->coordinateGenderMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_genders identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateGendersJsonldIdCoordinateGenderMetadataNoteTypeMetadataTagTaggingListCoordinateGenderRelationsTimestampable**](../Model/CoordinateGendersJsonldIdCoordinateGenderMetadataNoteTypeMetadataTagTaggingListCoordinateGenderRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
