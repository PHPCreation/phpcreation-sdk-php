# OpenAPI\Client\PersonCompanytypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonCompanytypesGetCollection()**](PersonCompanytypesApi.md#apiPersonCompanytypesGetCollection) | **GET** /open-api/v3/person_companytypes | Retrieves the collection of person_companytypes resources. |
| [**apiPersonCompanytypesIdDelete()**](PersonCompanytypesApi.md#apiPersonCompanytypesIdDelete) | **DELETE** /open-api/v3/person_companytypes/{id} | Removes the person_companytypes resource. |
| [**apiPersonCompanytypesIdGet()**](PersonCompanytypesApi.md#apiPersonCompanytypesIdGet) | **GET** /open-api/v3/person_companytypes/{id} | Retrieves a person_companytypes resource. |
| [**apiPersonCompanytypesIdPut()**](PersonCompanytypesApi.md#apiPersonCompanytypesIdPut) | **PUT** /open-api/v3/person_companytypes/{id} | Replaces the person_companytypes resource. |
| [**apiPersonCompanytypesPost()**](PersonCompanytypesApi.md#apiPersonCompanytypesPost) | **POST** /open-api/v3/person_companytypes | Creates a person_companytypes resource. |
| [**personCompanyTypeApiFileUpload()**](PersonCompanytypesApi.md#personCompanyTypeApiFileUpload) | **POST** /open-api/v3/person_companytypes/{id}/file/upload | Creates a person_companytypes resource. |
| [**personCompanyTypeDropDown()**](PersonCompanytypesApi.md#personCompanyTypeDropDown) | **GET** /open-api/v3/person_companytypes/dropdown/get | Retrieves the collection of person_companytypes resources. |
| [**personCompanyTypeDuplicate()**](PersonCompanytypesApi.md#personCompanyTypeDuplicate) | **GET** /open-api/v3/person_companytypes/duplicate/{id} | Retrieves a person_companytypes resource. |
| [**personCompanyTypeFetchFiles()**](PersonCompanytypesApi.md#personCompanyTypeFetchFiles) | **GET** /open-api/v3/person_companytypes/fetch_files/{id} | Retrieves a person_companytypes resource. |
| [**personCompanyTypeGetBySlug()**](PersonCompanytypesApi.md#personCompanyTypeGetBySlug) | **GET** /open-api/v3/person_companytypes/by_slug/{slug} | Retrieves a person_companytypes resource. |
| [**personCompanyTypeGetDeleteRelations()**](PersonCompanytypesApi.md#personCompanyTypeGetDeleteRelations) | **GET** /open-api/v3/person_companytypes/get_delete_relations/{id} | Retrieves a person_companytypes resource. |
| [**personCompanyTypeMetadata()**](PersonCompanytypesApi.md#personCompanyTypeMetadata) | **GET** /open-api/v3/person_companytypes/metadata/{id} | Retrieves a person_companytypes resource. |


## `apiPersonCompanytypesGetCollection()`

```php
apiPersonCompanytypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $value_range): \OpenAPI\Client\Model\ApiPersonCompanytypesGetCollection200Response
```

Retrieves the collection of person_companytypes resources.

Retrieves the collection of person_companytypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
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
$value = 56; // int | 
$value2 = array(56); // int[] | 
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
$slug_partial = 'slug_partial_example'; // string | person_companytypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_companytypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_companytypes slug_end_with
$id_partial = 'id_partial_example'; // string | person_companytypes id_partial
$id_start_with = 'id_start_with_example'; // string | person_companytypes id_start_with
$id_end_with = 'id_end_with_example'; // string | person_companytypes id_end_with
$number_partial = 'number_partial_example'; // string | person_companytypes number_partial
$number_start_with = 'number_start_with_example'; // string | person_companytypes number_start_with
$number_end_with = 'number_end_with_example'; // string | person_companytypes number_end_with
$color_partial = 'color_partial_example'; // string | person_companytypes color_partial
$color_start_with = 'color_start_with_example'; // string | person_companytypes color_start_with
$color_end_with = 'color_end_with_example'; // string | person_companytypes color_end_with
$icon_partial = 'icon_partial_example'; // string | person_companytypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_companytypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_companytypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_companytypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_companytypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_companytypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_companytypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_companytypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_companytypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_companytypes priority_range
$value_range = 'value_range_example'; // string | person_companytypes value_range

try {
    $result = $apiInstance->apiPersonCompanytypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $value_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->apiPersonCompanytypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **value** | **int**|  | [optional] |
| **value2** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **slug_partial** | **string**| person_companytypes slug_partial | [optional] |
| **slug_start_with** | **string**| person_companytypes slug_start_with | [optional] |
| **slug_end_with** | **string**| person_companytypes slug_end_with | [optional] |
| **id_partial** | **string**| person_companytypes id_partial | [optional] |
| **id_start_with** | **string**| person_companytypes id_start_with | [optional] |
| **id_end_with** | **string**| person_companytypes id_end_with | [optional] |
| **number_partial** | **string**| person_companytypes number_partial | [optional] |
| **number_start_with** | **string**| person_companytypes number_start_with | [optional] |
| **number_end_with** | **string**| person_companytypes number_end_with | [optional] |
| **color_partial** | **string**| person_companytypes color_partial | [optional] |
| **color_start_with** | **string**| person_companytypes color_start_with | [optional] |
| **color_end_with** | **string**| person_companytypes color_end_with | [optional] |
| **icon_partial** | **string**| person_companytypes icon_partial | [optional] |
| **icon_start_with** | **string**| person_companytypes icon_start_with | [optional] |
| **icon_end_with** | **string**| person_companytypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_companytypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_companytypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_companytypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_companytypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_companytypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_companytypes translations.description_end_with | [optional] |
| **priority_range** | **string**| person_companytypes priority_range | [optional] |
| **value_range** | **string**| person_companytypes value_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonCompanytypesGetCollection200Response**](../Model/ApiPersonCompanytypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCompanytypesIdDelete()`

```php
apiPersonCompanytypesIdDelete($id)
```

Removes the person_companytypes resource.

Removes the person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier

try {
    $apiInstance->apiPersonCompanytypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->apiPersonCompanytypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |

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

## `apiPersonCompanytypesIdGet()`

```php
apiPersonCompanytypesIdGet($id): \OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_companytypes resource.

Retrieves a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier

try {
    $result = $apiInstance->apiPersonCompanytypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->apiPersonCompanytypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCompanytypesIdPut()`

```php
apiPersonCompanytypesIdPut($id, $person_companytypes_jsonld_post): \OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_companytypes resource.

Replaces the person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier
$person_companytypes_jsonld_post = new \OpenAPI\Client\Model\PersonCompanytypesJsonldPost(); // \OpenAPI\Client\Model\PersonCompanytypesJsonldPost | The updated person_companytypes resource

try {
    $result = $apiInstance->apiPersonCompanytypesIdPut($id, $person_companytypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->apiPersonCompanytypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |
| **person_companytypes_jsonld_post** | [**\OpenAPI\Client\Model\PersonCompanytypesJsonldPost**](../Model/PersonCompanytypesJsonldPost.md)| The updated person_companytypes resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCompanytypesPost()`

```php
apiPersonCompanytypesPost($person_companytypes_jsonld_add_post): \OpenAPI\Client\Model\PersonCompanytypesJsonld
```

Creates a person_companytypes resource.

Creates a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_companytypes_jsonld_add_post = new \OpenAPI\Client\Model\PersonCompanytypesJsonldAddPost(); // \OpenAPI\Client\Model\PersonCompanytypesJsonldAddPost | The new person_companytypes resource

try {
    $result = $apiInstance->apiPersonCompanytypesPost($person_companytypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->apiPersonCompanytypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_companytypes_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonCompanytypesJsonldAddPost**](../Model/PersonCompanytypesJsonldAddPost.md)| The new person_companytypes resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonld**](../Model/PersonCompanytypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompanyTypeApiFileUpload()`

```php
personCompanyTypeApiFileUpload($id, $person_companytypes_jsonld): \OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_companytypes resource.

Creates a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier
$person_companytypes_jsonld = new \OpenAPI\Client\Model\PersonCompanytypesJsonld(); // \OpenAPI\Client\Model\PersonCompanytypesJsonld | The new person_companytypes resource

try {
    $result = $apiInstance->personCompanyTypeApiFileUpload($id, $person_companytypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->personCompanyTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |
| **person_companytypes_jsonld** | [**\OpenAPI\Client\Model\PersonCompanytypesJsonld**](../Model/PersonCompanytypesJsonld.md)| The new person_companytypes resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonCompanytypesJsonldPersonCompanyTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompanyTypeDropDown()`

```php
personCompanyTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $value_range): \OpenAPI\Client\Model\PersonCompanyTypeDropDown200Response
```

Retrieves the collection of person_companytypes resources.

Retrieves the collection of person_companytypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
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
$value = 56; // int | 
$value2 = array(56); // int[] | 
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
$slug_partial = 'slug_partial_example'; // string | person_companytypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_companytypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_companytypes slug_end_with
$id_partial = 'id_partial_example'; // string | person_companytypes id_partial
$id_start_with = 'id_start_with_example'; // string | person_companytypes id_start_with
$id_end_with = 'id_end_with_example'; // string | person_companytypes id_end_with
$number_partial = 'number_partial_example'; // string | person_companytypes number_partial
$number_start_with = 'number_start_with_example'; // string | person_companytypes number_start_with
$number_end_with = 'number_end_with_example'; // string | person_companytypes number_end_with
$color_partial = 'color_partial_example'; // string | person_companytypes color_partial
$color_start_with = 'color_start_with_example'; // string | person_companytypes color_start_with
$color_end_with = 'color_end_with_example'; // string | person_companytypes color_end_with
$icon_partial = 'icon_partial_example'; // string | person_companytypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_companytypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_companytypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_companytypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_companytypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_companytypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_companytypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_companytypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_companytypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_companytypes priority_range
$value_range = 'value_range_example'; // string | person_companytypes value_range

try {
    $result = $apiInstance->personCompanyTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $value_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->personCompanyTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **value** | **int**|  | [optional] |
| **value2** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **slug_partial** | **string**| person_companytypes slug_partial | [optional] |
| **slug_start_with** | **string**| person_companytypes slug_start_with | [optional] |
| **slug_end_with** | **string**| person_companytypes slug_end_with | [optional] |
| **id_partial** | **string**| person_companytypes id_partial | [optional] |
| **id_start_with** | **string**| person_companytypes id_start_with | [optional] |
| **id_end_with** | **string**| person_companytypes id_end_with | [optional] |
| **number_partial** | **string**| person_companytypes number_partial | [optional] |
| **number_start_with** | **string**| person_companytypes number_start_with | [optional] |
| **number_end_with** | **string**| person_companytypes number_end_with | [optional] |
| **color_partial** | **string**| person_companytypes color_partial | [optional] |
| **color_start_with** | **string**| person_companytypes color_start_with | [optional] |
| **color_end_with** | **string**| person_companytypes color_end_with | [optional] |
| **icon_partial** | **string**| person_companytypes icon_partial | [optional] |
| **icon_start_with** | **string**| person_companytypes icon_start_with | [optional] |
| **icon_end_with** | **string**| person_companytypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_companytypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_companytypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_companytypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_companytypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_companytypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_companytypes translations.description_end_with | [optional] |
| **priority_range** | **string**| person_companytypes priority_range | [optional] |
| **value_range** | **string**| person_companytypes value_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonCompanyTypeDropDown200Response**](../Model/PersonCompanyTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompanyTypeDuplicate()`

```php
personCompanyTypeDuplicate($id): \OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_companytypes resource.

Retrieves a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier

try {
    $result = $apiInstance->personCompanyTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->personCompanyTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompanyTypeFetchFiles()`

```php
personCompanyTypeFetchFiles($id): \OpenAPI\Client\Model\PersonCompanytypesJsonld
```

Retrieves a person_companytypes resource.

Retrieves a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier

try {
    $result = $apiInstance->personCompanyTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->personCompanyTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonld**](../Model/PersonCompanytypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompanyTypeGetBySlug()`

```php
personCompanyTypeGetBySlug($slug): \OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_companytypes resource.

Retrieves a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_companytypes identifier

try {
    $result = $apiInstance->personCompanyTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->personCompanyTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_companytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompanytypesJsonldPersonCompanyTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompanyTypeGetDeleteRelations()`

```php
personCompanyTypeGetDeleteRelations($id): \OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeRelations
```

Retrieves a person_companytypes resource.

Retrieves a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier

try {
    $result = $apiInstance->personCompanyTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->personCompanyTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonldPersonCompanyTypeRelations**](../Model/PersonCompanytypesJsonldPersonCompanyTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompanyTypeMetadata()`

```php
personCompanyTypeMetadata($id): \OpenAPI\Client\Model\PersonCompanytypesJsonldIdStandardMetadataPersonCompanyTypeMetadataTagTaggingListPersonCompanyTypeRelationsTimestampable
```

Retrieves a person_companytypes resource.

Retrieves a person_companytypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompanytypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_companytypes identifier

try {
    $result = $apiInstance->personCompanyTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompanytypesApi->personCompanyTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_companytypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompanytypesJsonldIdStandardMetadataPersonCompanyTypeMetadataTagTaggingListPersonCompanyTypeRelationsTimestampable**](../Model/PersonCompanytypesJsonldIdStandardMetadataPersonCompanyTypeMetadataTagTaggingListPersonCompanyTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
