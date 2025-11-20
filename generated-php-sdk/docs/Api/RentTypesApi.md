# OpenAPI\Client\RentTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiRentTypesGetCollection()**](RentTypesApi.md#apiRentTypesGetCollection) | **GET** /open-api/v3/rent_types | Retrieves the collection of rent_types resources. |
| [**apiRentTypesIdDelete()**](RentTypesApi.md#apiRentTypesIdDelete) | **DELETE** /open-api/v3/rent_types/{id} | Removes the rent_types resource. |
| [**apiRentTypesIdGet()**](RentTypesApi.md#apiRentTypesIdGet) | **GET** /open-api/v3/rent_types/{id} | Retrieves a rent_types resource. |
| [**apiRentTypesIdPut()**](RentTypesApi.md#apiRentTypesIdPut) | **PUT** /open-api/v3/rent_types/{id} | Replaces the rent_types resource. |
| [**apiRentTypesPost()**](RentTypesApi.md#apiRentTypesPost) | **POST** /open-api/v3/rent_types | Creates a rent_types resource. |
| [**rentTypeApiFileUpload()**](RentTypesApi.md#rentTypeApiFileUpload) | **POST** /open-api/v3/rent_types/{id}/file/upload | Creates a rent_types resource. |
| [**rentTypeDropDown()**](RentTypesApi.md#rentTypeDropDown) | **GET** /open-api/v3/rent_types/dropdown/get | Retrieves the collection of rent_types resources. |
| [**rentTypeDuplicate()**](RentTypesApi.md#rentTypeDuplicate) | **GET** /open-api/v3/rent_types/duplicate/{id} | Retrieves a rent_types resource. |
| [**rentTypeFetchFiles()**](RentTypesApi.md#rentTypeFetchFiles) | **GET** /open-api/v3/rent_types/fetch_files/{id} | Retrieves a rent_types resource. |
| [**rentTypeGetBySlug()**](RentTypesApi.md#rentTypeGetBySlug) | **GET** /open-api/v3/rent_types/by_slug/{slug} | Retrieves a rent_types resource. |
| [**rentTypeGetDeleteRelations()**](RentTypesApi.md#rentTypeGetDeleteRelations) | **GET** /open-api/v3/rent_types/get_delete_relations/{id} | Retrieves a rent_types resource. |
| [**rentTypeMetadata()**](RentTypesApi.md#rentTypeMetadata) | **GET** /open-api/v3/rent_types/metadata/{id} | Retrieves a rent_types resource. |


## `apiRentTypesGetCollection()`

```php
apiRentTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiRentTypesGetCollection200Response
```

Retrieves the collection of rent_types resources.

Retrieves the collection of rent_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
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
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | rent_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | rent_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | rent_types slug_end_with
$id_partial = 'id_partial_example'; // string | rent_types id_partial
$id_start_with = 'id_start_with_example'; // string | rent_types id_start_with
$id_end_with = 'id_end_with_example'; // string | rent_types id_end_with
$icon_partial = 'icon_partial_example'; // string | rent_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | rent_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | rent_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | rent_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | rent_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | rent_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | rent_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | rent_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | rent_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | rent_types priority_range

try {
    $result = $apiInstance->apiRentTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->apiRentTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| rent_types slug_partial | [optional] |
| **slug_start_with** | **string**| rent_types slug_start_with | [optional] |
| **slug_end_with** | **string**| rent_types slug_end_with | [optional] |
| **id_partial** | **string**| rent_types id_partial | [optional] |
| **id_start_with** | **string**| rent_types id_start_with | [optional] |
| **id_end_with** | **string**| rent_types id_end_with | [optional] |
| **icon_partial** | **string**| rent_types icon_partial | [optional] |
| **icon_start_with** | **string**| rent_types icon_start_with | [optional] |
| **icon_end_with** | **string**| rent_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| rent_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| rent_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| rent_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| rent_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| rent_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| rent_types translations.description_end_with | [optional] |
| **priority_range** | **string**| rent_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiRentTypesGetCollection200Response**](../Model/ApiRentTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRentTypesIdDelete()`

```php
apiRentTypesIdDelete($id)
```

Removes the rent_types resource.

Removes the rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier

try {
    $apiInstance->apiRentTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->apiRentTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |

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

## `apiRentTypesIdGet()`

```php
apiRentTypesIdGet($id): \OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rent_types resource.

Retrieves a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier

try {
    $result = $apiInstance->apiRentTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->apiRentTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRentTypesIdPut()`

```php
apiRentTypesIdPut($id, $rent_types_jsonld_post): \OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the rent_types resource.

Replaces the rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier
$rent_types_jsonld_post = new \OpenAPI\Client\Model\RentTypesJsonldPost(); // \OpenAPI\Client\Model\RentTypesJsonldPost | The updated rent_types resource

try {
    $result = $apiInstance->apiRentTypesIdPut($id, $rent_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->apiRentTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |
| **rent_types_jsonld_post** | [**\OpenAPI\Client\Model\RentTypesJsonldPost**](../Model/RentTypesJsonldPost.md)| The updated rent_types resource | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRentTypesPost()`

```php
apiRentTypesPost($rent_types_jsonld_add_post): \OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rent_types resource.

Creates a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rent_types_jsonld_add_post = new \OpenAPI\Client\Model\RentTypesJsonldAddPost(); // \OpenAPI\Client\Model\RentTypesJsonldAddPost | The new rent_types resource

try {
    $result = $apiInstance->apiRentTypesPost($rent_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->apiRentTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rent_types_jsonld_add_post** | [**\OpenAPI\Client\Model\RentTypesJsonldAddPost**](../Model/RentTypesJsonldAddPost.md)| The new rent_types resource | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentTypeApiFileUpload()`

```php
rentTypeApiFileUpload($id, $rent_types_jsonld): \OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rent_types resource.

Creates a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier
$rent_types_jsonld = new \OpenAPI\Client\Model\RentTypesJsonld(); // \OpenAPI\Client\Model\RentTypesJsonld | The new rent_types resource

try {
    $result = $apiInstance->rentTypeApiFileUpload($id, $rent_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->rentTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |
| **rent_types_jsonld** | [**\OpenAPI\Client\Model\RentTypesJsonld**](../Model/RentTypesJsonld.md)| The new rent_types resource | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentTypeDropDown()`

```php
rentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\RentTypeDropDown200Response
```

Retrieves the collection of rent_types resources.

Retrieves the collection of rent_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
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
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->rentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->rentTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RentTypeDropDown200Response**](../Model/RentTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentTypeDuplicate()`

```php
rentTypeDuplicate($id): \OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rent_types resource.

Retrieves a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier

try {
    $result = $apiInstance->rentTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->rentTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentTypeFetchFiles()`

```php
rentTypeFetchFiles($id): \OpenAPI\Client\Model\RentTypesJsonld
```

Retrieves a rent_types resource.

Retrieves a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier

try {
    $result = $apiInstance->rentTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->rentTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonld**](../Model/RentTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentTypeGetBySlug()`

```php
rentTypeGetBySlug($slug): \OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rent_types resource.

Retrieves a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | rent_types identifier

try {
    $result = $apiInstance->rentTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->rentTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| rent_types identifier | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentTypesJsonldRentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentTypeGetDeleteRelations()`

```php
rentTypeGetDeleteRelations($id): \OpenAPI\Client\Model\RentTypesJsonldRentTypeRelations
```

Retrieves a rent_types resource.

Retrieves a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier

try {
    $result = $apiInstance->rentTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->rentTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldRentTypeRelations**](../Model/RentTypesJsonldRentTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentTypeMetadata()`

```php
rentTypeMetadata($id): \OpenAPI\Client\Model\RentTypesJsonldIdStandardMetadataRentTypeMetadataTagTaggingListRentTypeRelationsTimestampable
```

Retrieves a rent_types resource.

Retrieves a rent_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rent_types identifier

try {
    $result = $apiInstance->rentTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentTypesApi->rentTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rent_types identifier | |

### Return type

[**\OpenAPI\Client\Model\RentTypesJsonldIdStandardMetadataRentTypeMetadataTagTaggingListRentTypeRelationsTimestampable**](../Model/RentTypesJsonldIdStandardMetadataRentTypeMetadataTagTaggingListRentTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
