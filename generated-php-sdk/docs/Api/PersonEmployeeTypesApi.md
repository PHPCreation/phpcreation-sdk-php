# OpenAPI\Client\PersonEmployeeTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonEmployeeTypesGetCollection()**](PersonEmployeeTypesApi.md#apiPersonEmployeeTypesGetCollection) | **GET** /open-api/v3/person_employee_types | Retrieves the collection of person_employee_types resources. |
| [**apiPersonEmployeeTypesIdDelete()**](PersonEmployeeTypesApi.md#apiPersonEmployeeTypesIdDelete) | **DELETE** /open-api/v3/person_employee_types/{id} | Removes the person_employee_types resource. |
| [**apiPersonEmployeeTypesIdGet()**](PersonEmployeeTypesApi.md#apiPersonEmployeeTypesIdGet) | **GET** /open-api/v3/person_employee_types/{id} | Retrieves a person_employee_types resource. |
| [**apiPersonEmployeeTypesIdPut()**](PersonEmployeeTypesApi.md#apiPersonEmployeeTypesIdPut) | **PUT** /open-api/v3/person_employee_types/{id} | Replaces the person_employee_types resource. |
| [**apiPersonEmployeeTypesPost()**](PersonEmployeeTypesApi.md#apiPersonEmployeeTypesPost) | **POST** /open-api/v3/person_employee_types | Creates a person_employee_types resource. |
| [**personEmployeeTypeApiFileUpload()**](PersonEmployeeTypesApi.md#personEmployeeTypeApiFileUpload) | **POST** /open-api/v3/person_employee_types/{id}/file/upload | Creates a person_employee_types resource. |
| [**personEmployeeTypeDropDown()**](PersonEmployeeTypesApi.md#personEmployeeTypeDropDown) | **GET** /open-api/v3/person_employee_types/dropdown/get | Retrieves the collection of person_employee_types resources. |
| [**personEmployeeTypeDuplicate()**](PersonEmployeeTypesApi.md#personEmployeeTypeDuplicate) | **GET** /open-api/v3/person_employee_types/duplicate/{id} | Retrieves a person_employee_types resource. |
| [**personEmployeeTypeFetchFiles()**](PersonEmployeeTypesApi.md#personEmployeeTypeFetchFiles) | **GET** /open-api/v3/person_employee_types/fetch_files/{id} | Retrieves a person_employee_types resource. |
| [**personEmployeeTypeGetBySlug()**](PersonEmployeeTypesApi.md#personEmployeeTypeGetBySlug) | **GET** /open-api/v3/person_employee_types/by_slug/{slug} | Retrieves a person_employee_types resource. |
| [**personEmployeeTypeGetDeleteRelations()**](PersonEmployeeTypesApi.md#personEmployeeTypeGetDeleteRelations) | **GET** /open-api/v3/person_employee_types/get_delete_relations/{id} | Retrieves a person_employee_types resource. |
| [**personEmployeeTypeMetadata()**](PersonEmployeeTypesApi.md#personEmployeeTypeMetadata) | **GET** /open-api/v3/person_employee_types/metadata/{id} | Retrieves a person_employee_types resource. |


## `apiPersonEmployeeTypesGetCollection()`

```php
apiPersonEmployeeTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonEmployeeTypesGetCollection200Response
```

Retrieves the collection of person_employee_types resources.

Retrieves the collection of person_employee_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | person_employee_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_employee_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_employee_types slug_end_with
$id_partial = 'id_partial_example'; // string | person_employee_types id_partial
$id_start_with = 'id_start_with_example'; // string | person_employee_types id_start_with
$id_end_with = 'id_end_with_example'; // string | person_employee_types id_end_with
$number_partial = 'number_partial_example'; // string | person_employee_types number_partial
$number_start_with = 'number_start_with_example'; // string | person_employee_types number_start_with
$number_end_with = 'number_end_with_example'; // string | person_employee_types number_end_with
$color_partial = 'color_partial_example'; // string | person_employee_types color_partial
$color_start_with = 'color_start_with_example'; // string | person_employee_types color_start_with
$color_end_with = 'color_end_with_example'; // string | person_employee_types color_end_with
$icon_partial = 'icon_partial_example'; // string | person_employee_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_employee_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_employee_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_employee_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_employee_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_employee_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_employee_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_employee_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_employee_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_employee_types priority_range

try {
    $result = $apiInstance->apiPersonEmployeeTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->apiPersonEmployeeTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| person_employee_types slug_partial | [optional] |
| **slug_start_with** | **string**| person_employee_types slug_start_with | [optional] |
| **slug_end_with** | **string**| person_employee_types slug_end_with | [optional] |
| **id_partial** | **string**| person_employee_types id_partial | [optional] |
| **id_start_with** | **string**| person_employee_types id_start_with | [optional] |
| **id_end_with** | **string**| person_employee_types id_end_with | [optional] |
| **number_partial** | **string**| person_employee_types number_partial | [optional] |
| **number_start_with** | **string**| person_employee_types number_start_with | [optional] |
| **number_end_with** | **string**| person_employee_types number_end_with | [optional] |
| **color_partial** | **string**| person_employee_types color_partial | [optional] |
| **color_start_with** | **string**| person_employee_types color_start_with | [optional] |
| **color_end_with** | **string**| person_employee_types color_end_with | [optional] |
| **icon_partial** | **string**| person_employee_types icon_partial | [optional] |
| **icon_start_with** | **string**| person_employee_types icon_start_with | [optional] |
| **icon_end_with** | **string**| person_employee_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_employee_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_employee_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_employee_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_employee_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_employee_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_employee_types translations.description_end_with | [optional] |
| **priority_range** | **string**| person_employee_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonEmployeeTypesGetCollection200Response**](../Model/ApiPersonEmployeeTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonEmployeeTypesIdDelete()`

```php
apiPersonEmployeeTypesIdDelete($id)
```

Removes the person_employee_types resource.

Removes the person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier

try {
    $apiInstance->apiPersonEmployeeTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->apiPersonEmployeeTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |

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

## `apiPersonEmployeeTypesIdGet()`

```php
apiPersonEmployeeTypesIdGet($id): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_employee_types resource.

Retrieves a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier

try {
    $result = $apiInstance->apiPersonEmployeeTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->apiPersonEmployeeTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonEmployeeTypesIdPut()`

```php
apiPersonEmployeeTypesIdPut($id, $person_employee_types_jsonld_post): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_employee_types resource.

Replaces the person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier
$person_employee_types_jsonld_post = new \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPost(); // \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPost | The updated person_employee_types resource

try {
    $result = $apiInstance->apiPersonEmployeeTypesIdPut($id, $person_employee_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->apiPersonEmployeeTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |
| **person_employee_types_jsonld_post** | [**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPost**](../Model/PersonEmployeeTypesJsonldPost.md)| The updated person_employee_types resource | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonEmployeeTypesPost()`

```php
apiPersonEmployeeTypesPost($person_employee_types_jsonld_add_post): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_employee_types resource.

Creates a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_employee_types_jsonld_add_post = new \OpenAPI\Client\Model\PersonEmployeeTypesJsonldAddPost(); // \OpenAPI\Client\Model\PersonEmployeeTypesJsonldAddPost | The new person_employee_types resource

try {
    $result = $apiInstance->apiPersonEmployeeTypesPost($person_employee_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->apiPersonEmployeeTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_employee_types_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldAddPost**](../Model/PersonEmployeeTypesJsonldAddPost.md)| The new person_employee_types resource | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeTypeApiFileUpload()`

```php
personEmployeeTypeApiFileUpload($id, $person_employee_types_jsonld): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_employee_types resource.

Creates a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier
$person_employee_types_jsonld = new \OpenAPI\Client\Model\PersonEmployeeTypesJsonld(); // \OpenAPI\Client\Model\PersonEmployeeTypesJsonld | The new person_employee_types resource

try {
    $result = $apiInstance->personEmployeeTypeApiFileUpload($id, $person_employee_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->personEmployeeTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |
| **person_employee_types_jsonld** | [**\OpenAPI\Client\Model\PersonEmployeeTypesJsonld**](../Model/PersonEmployeeTypesJsonld.md)| The new person_employee_types resource | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonEmployeeTypesJsonldPersonEmployeeTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeTypeDropDown()`

```php
personEmployeeTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\PersonEmployeeTypeDropDown200Response
```

Retrieves the collection of person_employee_types resources.

Retrieves the collection of person_employee_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | person_employee_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_employee_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_employee_types slug_end_with
$id_partial = 'id_partial_example'; // string | person_employee_types id_partial
$id_start_with = 'id_start_with_example'; // string | person_employee_types id_start_with
$id_end_with = 'id_end_with_example'; // string | person_employee_types id_end_with
$number_partial = 'number_partial_example'; // string | person_employee_types number_partial
$number_start_with = 'number_start_with_example'; // string | person_employee_types number_start_with
$number_end_with = 'number_end_with_example'; // string | person_employee_types number_end_with
$color_partial = 'color_partial_example'; // string | person_employee_types color_partial
$color_start_with = 'color_start_with_example'; // string | person_employee_types color_start_with
$color_end_with = 'color_end_with_example'; // string | person_employee_types color_end_with
$icon_partial = 'icon_partial_example'; // string | person_employee_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_employee_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_employee_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_employee_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_employee_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_employee_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_employee_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_employee_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_employee_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_employee_types priority_range

try {
    $result = $apiInstance->personEmployeeTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->personEmployeeTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| person_employee_types slug_partial | [optional] |
| **slug_start_with** | **string**| person_employee_types slug_start_with | [optional] |
| **slug_end_with** | **string**| person_employee_types slug_end_with | [optional] |
| **id_partial** | **string**| person_employee_types id_partial | [optional] |
| **id_start_with** | **string**| person_employee_types id_start_with | [optional] |
| **id_end_with** | **string**| person_employee_types id_end_with | [optional] |
| **number_partial** | **string**| person_employee_types number_partial | [optional] |
| **number_start_with** | **string**| person_employee_types number_start_with | [optional] |
| **number_end_with** | **string**| person_employee_types number_end_with | [optional] |
| **color_partial** | **string**| person_employee_types color_partial | [optional] |
| **color_start_with** | **string**| person_employee_types color_start_with | [optional] |
| **color_end_with** | **string**| person_employee_types color_end_with | [optional] |
| **icon_partial** | **string**| person_employee_types icon_partial | [optional] |
| **icon_start_with** | **string**| person_employee_types icon_start_with | [optional] |
| **icon_end_with** | **string**| person_employee_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_employee_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_employee_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_employee_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_employee_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_employee_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_employee_types translations.description_end_with | [optional] |
| **priority_range** | **string**| person_employee_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypeDropDown200Response**](../Model/PersonEmployeeTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeTypeDuplicate()`

```php
personEmployeeTypeDuplicate($id): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_employee_types resource.

Retrieves a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier

try {
    $result = $apiInstance->personEmployeeTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->personEmployeeTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeTypeFetchFiles()`

```php
personEmployeeTypeFetchFiles($id): \OpenAPI\Client\Model\PersonEmployeeTypesJsonld
```

Retrieves a person_employee_types resource.

Retrieves a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier

try {
    $result = $apiInstance->personEmployeeTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->personEmployeeTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonld**](../Model/PersonEmployeeTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeTypeGetBySlug()`

```php
personEmployeeTypeGetBySlug($slug): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_employee_types resource.

Retrieves a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_employee_types identifier

try {
    $result = $apiInstance->personEmployeeTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->personEmployeeTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_employee_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonEmployeeTypesJsonldPersonEmployeeTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeTypeGetDeleteRelations()`

```php
personEmployeeTypeGetDeleteRelations($id): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeRelations
```

Retrieves a person_employee_types resource.

Retrieves a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier

try {
    $result = $apiInstance->personEmployeeTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->personEmployeeTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldPersonEmployeeTypeRelations**](../Model/PersonEmployeeTypesJsonldPersonEmployeeTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personEmployeeTypeMetadata()`

```php
personEmployeeTypeMetadata($id): \OpenAPI\Client\Model\PersonEmployeeTypesJsonldIdStandardMetadataPersonEmployeeTypeMetadataTagTaggingListPersonEmployeeTypeRelationsTimestampable
```

Retrieves a person_employee_types resource.

Retrieves a person_employee_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonEmployeeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_employee_types identifier

try {
    $result = $apiInstance->personEmployeeTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonEmployeeTypesApi->personEmployeeTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_employee_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonEmployeeTypesJsonldIdStandardMetadataPersonEmployeeTypeMetadataTagTaggingListPersonEmployeeTypeRelationsTimestampable**](../Model/PersonEmployeeTypesJsonldIdStandardMetadataPersonEmployeeTypeMetadataTagTaggingListPersonEmployeeTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
