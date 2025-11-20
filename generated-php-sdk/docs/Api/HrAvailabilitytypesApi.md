# OpenAPI\Client\HrAvailabilitytypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiHrAvailabilitytypesGetCollection()**](HrAvailabilitytypesApi.md#apiHrAvailabilitytypesGetCollection) | **GET** /open-api/v3/hr_availabilitytypes | Retrieves the collection of hr_availabilitytypes resources. |
| [**apiHrAvailabilitytypesIdDelete()**](HrAvailabilitytypesApi.md#apiHrAvailabilitytypesIdDelete) | **DELETE** /open-api/v3/hr_availabilitytypes/{id} | Removes the hr_availabilitytypes resource. |
| [**apiHrAvailabilitytypesIdGet()**](HrAvailabilitytypesApi.md#apiHrAvailabilitytypesIdGet) | **GET** /open-api/v3/hr_availabilitytypes/{id} | Retrieves a hr_availabilitytypes resource. |
| [**apiHrAvailabilitytypesIdPut()**](HrAvailabilitytypesApi.md#apiHrAvailabilitytypesIdPut) | **PUT** /open-api/v3/hr_availabilitytypes/{id} | Replaces the hr_availabilitytypes resource. |
| [**apiHrAvailabilitytypesPost()**](HrAvailabilitytypesApi.md#apiHrAvailabilitytypesPost) | **POST** /open-api/v3/hr_availabilitytypes | Creates a hr_availabilitytypes resource. |
| [**hrAvailabilityTypeApiFileUpload()**](HrAvailabilitytypesApi.md#hrAvailabilityTypeApiFileUpload) | **POST** /open-api/v3/hr_availabilitytypes/{id}/file/upload | Creates a hr_availabilitytypes resource. |
| [**hrAvailabilityTypeDropDown()**](HrAvailabilitytypesApi.md#hrAvailabilityTypeDropDown) | **GET** /open-api/v3/hr_availabilitytypes/dropdown/get | Retrieves the collection of hr_availabilitytypes resources. |
| [**hrAvailabilityTypeDuplicate()**](HrAvailabilitytypesApi.md#hrAvailabilityTypeDuplicate) | **GET** /open-api/v3/hr_availabilitytypes/duplicate/{id} | Retrieves a hr_availabilitytypes resource. |
| [**hrAvailabilityTypeFetchFiles()**](HrAvailabilitytypesApi.md#hrAvailabilityTypeFetchFiles) | **GET** /open-api/v3/hr_availabilitytypes/fetch_files/{id} | Retrieves a hr_availabilitytypes resource. |
| [**hrAvailabilityTypeGetBySlug()**](HrAvailabilitytypesApi.md#hrAvailabilityTypeGetBySlug) | **GET** /open-api/v3/hr_availabilitytypes/by_slug/{slug} | Retrieves a hr_availabilitytypes resource. |
| [**hrAvailabilityTypeGetDeleteRelations()**](HrAvailabilitytypesApi.md#hrAvailabilityTypeGetDeleteRelations) | **GET** /open-api/v3/hr_availabilitytypes/get_delete_relations/{id} | Retrieves a hr_availabilitytypes resource. |
| [**hrAvailabilityTypeMetadata()**](HrAvailabilitytypesApi.md#hrAvailabilityTypeMetadata) | **GET** /open-api/v3/hr_availabilitytypes/metadata/{id} | Retrieves a hr_availabilitytypes resource. |


## `apiHrAvailabilitytypesGetCollection()`

```php
apiHrAvailabilitytypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiHrAvailabilitytypesGetCollection200Response
```

Retrieves the collection of hr_availabilitytypes resources.

Retrieves the collection of hr_availabilitytypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
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
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | hr_availabilitytypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | hr_availabilitytypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | hr_availabilitytypes slug_end_with
$id_partial = 'id_partial_example'; // string | hr_availabilitytypes id_partial
$id_start_with = 'id_start_with_example'; // string | hr_availabilitytypes id_start_with
$id_end_with = 'id_end_with_example'; // string | hr_availabilitytypes id_end_with
$number_partial = 'number_partial_example'; // string | hr_availabilitytypes number_partial
$number_start_with = 'number_start_with_example'; // string | hr_availabilitytypes number_start_with
$number_end_with = 'number_end_with_example'; // string | hr_availabilitytypes number_end_with
$color_partial = 'color_partial_example'; // string | hr_availabilitytypes color_partial
$color_start_with = 'color_start_with_example'; // string | hr_availabilitytypes color_start_with
$color_end_with = 'color_end_with_example'; // string | hr_availabilitytypes color_end_with
$icon_partial = 'icon_partial_example'; // string | hr_availabilitytypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | hr_availabilitytypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | hr_availabilitytypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | hr_availabilitytypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | hr_availabilitytypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | hr_availabilitytypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | hr_availabilitytypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | hr_availabilitytypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | hr_availabilitytypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | hr_availabilitytypes priority_range

try {
    $result = $apiInstance->apiHrAvailabilitytypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->apiHrAvailabilitytypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| hr_availabilitytypes slug_partial | [optional] |
| **slug_start_with** | **string**| hr_availabilitytypes slug_start_with | [optional] |
| **slug_end_with** | **string**| hr_availabilitytypes slug_end_with | [optional] |
| **id_partial** | **string**| hr_availabilitytypes id_partial | [optional] |
| **id_start_with** | **string**| hr_availabilitytypes id_start_with | [optional] |
| **id_end_with** | **string**| hr_availabilitytypes id_end_with | [optional] |
| **number_partial** | **string**| hr_availabilitytypes number_partial | [optional] |
| **number_start_with** | **string**| hr_availabilitytypes number_start_with | [optional] |
| **number_end_with** | **string**| hr_availabilitytypes number_end_with | [optional] |
| **color_partial** | **string**| hr_availabilitytypes color_partial | [optional] |
| **color_start_with** | **string**| hr_availabilitytypes color_start_with | [optional] |
| **color_end_with** | **string**| hr_availabilitytypes color_end_with | [optional] |
| **icon_partial** | **string**| hr_availabilitytypes icon_partial | [optional] |
| **icon_start_with** | **string**| hr_availabilitytypes icon_start_with | [optional] |
| **icon_end_with** | **string**| hr_availabilitytypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| hr_availabilitytypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| hr_availabilitytypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| hr_availabilitytypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| hr_availabilitytypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| hr_availabilitytypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| hr_availabilitytypes translations.description_end_with | [optional] |
| **priority_range** | **string**| hr_availabilitytypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiHrAvailabilitytypesGetCollection200Response**](../Model/ApiHrAvailabilitytypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrAvailabilitytypesIdDelete()`

```php
apiHrAvailabilitytypesIdDelete($id)
```

Removes the hr_availabilitytypes resource.

Removes the hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier

try {
    $apiInstance->apiHrAvailabilitytypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->apiHrAvailabilitytypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |

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

## `apiHrAvailabilitytypesIdGet()`

```php
apiHrAvailabilitytypesIdGet($id): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_availabilitytypes resource.

Retrieves a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier

try {
    $result = $apiInstance->apiHrAvailabilitytypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->apiHrAvailabilitytypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrAvailabilitytypesIdPut()`

```php
apiHrAvailabilitytypesIdPut($id, $hr_availabilitytypes_jsonld_post): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the hr_availabilitytypes resource.

Replaces the hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier
$hr_availabilitytypes_jsonld_post = new \OpenAPI\Client\Model\HrAvailabilitytypesJsonldPost(); // \OpenAPI\Client\Model\HrAvailabilitytypesJsonldPost | The updated hr_availabilitytypes resource

try {
    $result = $apiInstance->apiHrAvailabilitytypesIdPut($id, $hr_availabilitytypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->apiHrAvailabilitytypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |
| **hr_availabilitytypes_jsonld_post** | [**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldPost**](../Model/HrAvailabilitytypesJsonldPost.md)| The updated hr_availabilitytypes resource | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrAvailabilitytypesPost()`

```php
apiHrAvailabilitytypesPost($hr_availabilitytypes_jsonld_add_post): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_availabilitytypes resource.

Creates a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hr_availabilitytypes_jsonld_add_post = new \OpenAPI\Client\Model\HrAvailabilitytypesJsonldAddPost(); // \OpenAPI\Client\Model\HrAvailabilitytypesJsonldAddPost | The new hr_availabilitytypes resource

try {
    $result = $apiInstance->apiHrAvailabilitytypesPost($hr_availabilitytypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->apiHrAvailabilitytypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hr_availabilitytypes_jsonld_add_post** | [**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldAddPost**](../Model/HrAvailabilitytypesJsonldAddPost.md)| The new hr_availabilitytypes resource | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrAvailabilityTypeApiFileUpload()`

```php
hrAvailabilityTypeApiFileUpload($id, $hr_availabilitytypes_jsonld): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_availabilitytypes resource.

Creates a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier
$hr_availabilitytypes_jsonld = new \OpenAPI\Client\Model\HrAvailabilitytypesJsonld(); // \OpenAPI\Client\Model\HrAvailabilitytypesJsonld | The new hr_availabilitytypes resource

try {
    $result = $apiInstance->hrAvailabilityTypeApiFileUpload($id, $hr_availabilitytypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->hrAvailabilityTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |
| **hr_availabilitytypes_jsonld** | [**\OpenAPI\Client\Model\HrAvailabilitytypesJsonld**](../Model/HrAvailabilitytypesJsonld.md)| The new hr_availabilitytypes resource | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrAvailabilityTypeDropDown()`

```php
hrAvailabilityTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\HrAvailabilityTypeDropDown200Response
```

Retrieves the collection of hr_availabilitytypes resources.

Retrieves the collection of hr_availabilitytypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
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
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | hr_availabilitytypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | hr_availabilitytypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | hr_availabilitytypes slug_end_with
$id_partial = 'id_partial_example'; // string | hr_availabilitytypes id_partial
$id_start_with = 'id_start_with_example'; // string | hr_availabilitytypes id_start_with
$id_end_with = 'id_end_with_example'; // string | hr_availabilitytypes id_end_with
$number_partial = 'number_partial_example'; // string | hr_availabilitytypes number_partial
$number_start_with = 'number_start_with_example'; // string | hr_availabilitytypes number_start_with
$number_end_with = 'number_end_with_example'; // string | hr_availabilitytypes number_end_with
$color_partial = 'color_partial_example'; // string | hr_availabilitytypes color_partial
$color_start_with = 'color_start_with_example'; // string | hr_availabilitytypes color_start_with
$color_end_with = 'color_end_with_example'; // string | hr_availabilitytypes color_end_with
$icon_partial = 'icon_partial_example'; // string | hr_availabilitytypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | hr_availabilitytypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | hr_availabilitytypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | hr_availabilitytypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | hr_availabilitytypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | hr_availabilitytypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | hr_availabilitytypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | hr_availabilitytypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | hr_availabilitytypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | hr_availabilitytypes priority_range

try {
    $result = $apiInstance->hrAvailabilityTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->hrAvailabilityTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| hr_availabilitytypes slug_partial | [optional] |
| **slug_start_with** | **string**| hr_availabilitytypes slug_start_with | [optional] |
| **slug_end_with** | **string**| hr_availabilitytypes slug_end_with | [optional] |
| **id_partial** | **string**| hr_availabilitytypes id_partial | [optional] |
| **id_start_with** | **string**| hr_availabilitytypes id_start_with | [optional] |
| **id_end_with** | **string**| hr_availabilitytypes id_end_with | [optional] |
| **number_partial** | **string**| hr_availabilitytypes number_partial | [optional] |
| **number_start_with** | **string**| hr_availabilitytypes number_start_with | [optional] |
| **number_end_with** | **string**| hr_availabilitytypes number_end_with | [optional] |
| **color_partial** | **string**| hr_availabilitytypes color_partial | [optional] |
| **color_start_with** | **string**| hr_availabilitytypes color_start_with | [optional] |
| **color_end_with** | **string**| hr_availabilitytypes color_end_with | [optional] |
| **icon_partial** | **string**| hr_availabilitytypes icon_partial | [optional] |
| **icon_start_with** | **string**| hr_availabilitytypes icon_start_with | [optional] |
| **icon_end_with** | **string**| hr_availabilitytypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| hr_availabilitytypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| hr_availabilitytypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| hr_availabilitytypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| hr_availabilitytypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| hr_availabilitytypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| hr_availabilitytypes translations.description_end_with | [optional] |
| **priority_range** | **string**| hr_availabilitytypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilityTypeDropDown200Response**](../Model/HrAvailabilityTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrAvailabilityTypeDuplicate()`

```php
hrAvailabilityTypeDuplicate($id): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_availabilitytypes resource.

Retrieves a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier

try {
    $result = $apiInstance->hrAvailabilityTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->hrAvailabilityTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrAvailabilityTypeFetchFiles()`

```php
hrAvailabilityTypeFetchFiles($id): \OpenAPI\Client\Model\HrAvailabilitytypesJsonld
```

Retrieves a hr_availabilitytypes resource.

Retrieves a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier

try {
    $result = $apiInstance->hrAvailabilityTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->hrAvailabilityTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonld**](../Model/HrAvailabilitytypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrAvailabilityTypeGetBySlug()`

```php
hrAvailabilityTypeGetBySlug($slug): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_availabilitytypes resource.

Retrieves a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | hr_availabilitytypes identifier

try {
    $result = $apiInstance->hrAvailabilityTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->hrAvailabilityTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| hr_availabilitytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrAvailabilitytypesJsonldHrAvailabilityTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrAvailabilityTypeGetDeleteRelations()`

```php
hrAvailabilityTypeGetDeleteRelations($id): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeRelations
```

Retrieves a hr_availabilitytypes resource.

Retrieves a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier

try {
    $result = $apiInstance->hrAvailabilityTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->hrAvailabilityTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldHrAvailabilityTypeRelations**](../Model/HrAvailabilitytypesJsonldHrAvailabilityTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrAvailabilityTypeMetadata()`

```php
hrAvailabilityTypeMetadata($id): \OpenAPI\Client\Model\HrAvailabilitytypesJsonldIdStandardMetadataHrAvailabilityTypeMetadataTagTaggingListHrAvailabilityTypeRelationsTimestampable
```

Retrieves a hr_availabilitytypes resource.

Retrieves a hr_availabilitytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrAvailabilitytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_availabilitytypes identifier

try {
    $result = $apiInstance->hrAvailabilityTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrAvailabilitytypesApi->hrAvailabilityTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_availabilitytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\HrAvailabilitytypesJsonldIdStandardMetadataHrAvailabilityTypeMetadataTagTaggingListHrAvailabilityTypeRelationsTimestampable**](../Model/HrAvailabilitytypesJsonldIdStandardMetadataHrAvailabilityTypeMetadataTagTaggingListHrAvailabilityTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
