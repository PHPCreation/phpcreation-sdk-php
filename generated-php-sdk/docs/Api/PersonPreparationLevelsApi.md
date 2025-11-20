# OpenAPI\Client\PersonPreparationLevelsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonPreparationLevelsGetCollection()**](PersonPreparationLevelsApi.md#apiPersonPreparationLevelsGetCollection) | **GET** /open-api/v3/person_preparation_levels | Retrieves the collection of person_preparation_levels resources. |
| [**apiPersonPreparationLevelsIdDelete()**](PersonPreparationLevelsApi.md#apiPersonPreparationLevelsIdDelete) | **DELETE** /open-api/v3/person_preparation_levels/{id} | Removes the person_preparation_levels resource. |
| [**apiPersonPreparationLevelsIdGet()**](PersonPreparationLevelsApi.md#apiPersonPreparationLevelsIdGet) | **GET** /open-api/v3/person_preparation_levels/{id} | Retrieves a person_preparation_levels resource. |
| [**apiPersonPreparationLevelsIdPut()**](PersonPreparationLevelsApi.md#apiPersonPreparationLevelsIdPut) | **PUT** /open-api/v3/person_preparation_levels/{id} | Replaces the person_preparation_levels resource. |
| [**apiPersonPreparationLevelsPost()**](PersonPreparationLevelsApi.md#apiPersonPreparationLevelsPost) | **POST** /open-api/v3/person_preparation_levels | Creates a person_preparation_levels resource. |
| [**personPreparationLevelApiFileUpload()**](PersonPreparationLevelsApi.md#personPreparationLevelApiFileUpload) | **POST** /open-api/v3/person_preparation_levels/{id}/file/upload | Creates a person_preparation_levels resource. |
| [**personPreparationLevelDropDown()**](PersonPreparationLevelsApi.md#personPreparationLevelDropDown) | **GET** /open-api/v3/person_preparation_levels/dropdown/get | Retrieves the collection of person_preparation_levels resources. |
| [**personPreparationLevelDuplicate()**](PersonPreparationLevelsApi.md#personPreparationLevelDuplicate) | **GET** /open-api/v3/person_preparation_levels/duplicate/{id} | Retrieves a person_preparation_levels resource. |
| [**personPreparationLevelFetchFiles()**](PersonPreparationLevelsApi.md#personPreparationLevelFetchFiles) | **GET** /open-api/v3/person_preparation_levels/fetch_files/{id} | Retrieves a person_preparation_levels resource. |
| [**personPreparationLevelGetBySlug()**](PersonPreparationLevelsApi.md#personPreparationLevelGetBySlug) | **GET** /open-api/v3/person_preparation_levels/by_slug/{slug} | Retrieves a person_preparation_levels resource. |
| [**personPreparationLevelGetDeleteRelations()**](PersonPreparationLevelsApi.md#personPreparationLevelGetDeleteRelations) | **GET** /open-api/v3/person_preparation_levels/get_delete_relations/{id} | Retrieves a person_preparation_levels resource. |
| [**personPreparationLevelMetadata()**](PersonPreparationLevelsApi.md#personPreparationLevelMetadata) | **GET** /open-api/v3/person_preparation_levels/metadata/{id} | Retrieves a person_preparation_levels resource. |


## `apiPersonPreparationLevelsGetCollection()`

```php
apiPersonPreparationLevelsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonPreparationLevelsGetCollection200Response
```

Retrieves the collection of person_preparation_levels resources.

Retrieves the collection of person_preparation_levels resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
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
$value = 56; // int | 
$value2 = array(56); // int[] | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
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
$slug_partial = 'slug_partial_example'; // string | person_preparation_levels slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_preparation_levels slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_preparation_levels slug_end_with
$id_partial = 'id_partial_example'; // string | person_preparation_levels id_partial
$id_start_with = 'id_start_with_example'; // string | person_preparation_levels id_start_with
$id_end_with = 'id_end_with_example'; // string | person_preparation_levels id_end_with
$icon_partial = 'icon_partial_example'; // string | person_preparation_levels icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_preparation_levels icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_preparation_levels icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_preparation_levels translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_preparation_levels translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_preparation_levels translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_preparation_levels translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_preparation_levels translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_preparation_levels translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_preparation_levels priority_range

try {
    $result = $apiInstance->apiPersonPreparationLevelsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->apiPersonPreparationLevelsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **value** | **int**|  | [optional] |
| **value2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
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
| **slug_partial** | **string**| person_preparation_levels slug_partial | [optional] |
| **slug_start_with** | **string**| person_preparation_levels slug_start_with | [optional] |
| **slug_end_with** | **string**| person_preparation_levels slug_end_with | [optional] |
| **id_partial** | **string**| person_preparation_levels id_partial | [optional] |
| **id_start_with** | **string**| person_preparation_levels id_start_with | [optional] |
| **id_end_with** | **string**| person_preparation_levels id_end_with | [optional] |
| **icon_partial** | **string**| person_preparation_levels icon_partial | [optional] |
| **icon_start_with** | **string**| person_preparation_levels icon_start_with | [optional] |
| **icon_end_with** | **string**| person_preparation_levels icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_preparation_levels translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_preparation_levels translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_preparation_levels translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_preparation_levels translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_preparation_levels translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_preparation_levels translations.description_end_with | [optional] |
| **priority_range** | **string**| person_preparation_levels priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonPreparationLevelsGetCollection200Response**](../Model/ApiPersonPreparationLevelsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPreparationLevelsIdDelete()`

```php
apiPersonPreparationLevelsIdDelete($id)
```

Removes the person_preparation_levels resource.

Removes the person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier

try {
    $apiInstance->apiPersonPreparationLevelsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->apiPersonPreparationLevelsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |

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

## `apiPersonPreparationLevelsIdGet()`

```php
apiPersonPreparationLevelsIdGet($id): \OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_preparation_levels resource.

Retrieves a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier

try {
    $result = $apiInstance->apiPersonPreparationLevelsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->apiPersonPreparationLevelsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPreparationLevelsIdPut()`

```php
apiPersonPreparationLevelsIdPut($id, $person_preparation_levels_jsonld_post): \OpenAPI\Client\Model\PersonPreparationLevelsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the person_preparation_levels resource.

Replaces the person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier
$person_preparation_levels_jsonld_post = new \OpenAPI\Client\Model\PersonPreparationLevelsJsonldPost(); // \OpenAPI\Client\Model\PersonPreparationLevelsJsonldPost | The updated person_preparation_levels resource

try {
    $result = $apiInstance->apiPersonPreparationLevelsIdPut($id, $person_preparation_levels_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->apiPersonPreparationLevelsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |
| **person_preparation_levels_jsonld_post** | [**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldPost**](../Model/PersonPreparationLevelsJsonldPost.md)| The updated person_preparation_levels resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonPreparationLevelsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPreparationLevelsPost()`

```php
apiPersonPreparationLevelsPost($person_preparation_levels_jsonld_add_post): \OpenAPI\Client\Model\PersonPreparationLevelsJsonld
```

Creates a person_preparation_levels resource.

Creates a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_preparation_levels_jsonld_add_post = new \OpenAPI\Client\Model\PersonPreparationLevelsJsonldAddPost(); // \OpenAPI\Client\Model\PersonPreparationLevelsJsonldAddPost | The new person_preparation_levels resource

try {
    $result = $apiInstance->apiPersonPreparationLevelsPost($person_preparation_levels_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->apiPersonPreparationLevelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_preparation_levels_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldAddPost**](../Model/PersonPreparationLevelsJsonldAddPost.md)| The new person_preparation_levels resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonld**](../Model/PersonPreparationLevelsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPreparationLevelApiFileUpload()`

```php
personPreparationLevelApiFileUpload($id, $person_preparation_levels_jsonld): \OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_preparation_levels resource.

Creates a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier
$person_preparation_levels_jsonld = new \OpenAPI\Client\Model\PersonPreparationLevelsJsonld(); // \OpenAPI\Client\Model\PersonPreparationLevelsJsonld | The new person_preparation_levels resource

try {
    $result = $apiInstance->personPreparationLevelApiFileUpload($id, $person_preparation_levels_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->personPreparationLevelApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |
| **person_preparation_levels_jsonld** | [**\OpenAPI\Client\Model\PersonPreparationLevelsJsonld**](../Model/PersonPreparationLevelsJsonld.md)| The new person_preparation_levels resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPreparationLevelDropDown()`

```php
personPreparationLevelDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\PersonPreparationLevelDropDown200Response
```

Retrieves the collection of person_preparation_levels resources.

Retrieves the collection of person_preparation_levels resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
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
$value = 56; // int | 
$value2 = array(56); // int[] | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
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
    $result = $apiInstance->personPreparationLevelDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->personPreparationLevelDropDown: ', $e->getMessage(), PHP_EOL;
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
| **value** | **int**|  | [optional] |
| **value2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
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

[**\OpenAPI\Client\Model\PersonPreparationLevelDropDown200Response**](../Model/PersonPreparationLevelDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPreparationLevelDuplicate()`

```php
personPreparationLevelDuplicate($id): \OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingList
```

Retrieves a person_preparation_levels resource.

Retrieves a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier

try {
    $result = $apiInstance->personPreparationLevelDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->personPreparationLevelDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingList**](../Model/PersonPreparationLevelsJsonldPersonPreparationLevelShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPreparationLevelFetchFiles()`

```php
personPreparationLevelFetchFiles($id): \OpenAPI\Client\Model\PersonPreparationLevelsJsonld
```

Retrieves a person_preparation_levels resource.

Retrieves a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier

try {
    $result = $apiInstance->personPreparationLevelFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->personPreparationLevelFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonld**](../Model/PersonPreparationLevelsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPreparationLevelGetBySlug()`

```php
personPreparationLevelGetBySlug($slug): \OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_preparation_levels resource.

Retrieves a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_preparation_levels identifier

try {
    $result = $apiInstance->personPreparationLevelGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->personPreparationLevelGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_preparation_levels identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonPreparationLevelsJsonldPersonPreparationLevelShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPreparationLevelGetDeleteRelations()`

```php
personPreparationLevelGetDeleteRelations($id): \OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelRelations
```

Retrieves a person_preparation_levels resource.

Retrieves a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier

try {
    $result = $apiInstance->personPreparationLevelGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->personPreparationLevelGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldPersonPreparationLevelRelations**](../Model/PersonPreparationLevelsJsonldPersonPreparationLevelRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPreparationLevelMetadata()`

```php
personPreparationLevelMetadata($id): \OpenAPI\Client\Model\PersonPreparationLevelsJsonldIdStandardMetadataPersonPreparationLevelMetadataTagTaggingListPersonPreparationLevelRelationsTimestampable
```

Retrieves a person_preparation_levels resource.

Retrieves a person_preparation_levels resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPreparationLevelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_preparation_levels identifier

try {
    $result = $apiInstance->personPreparationLevelMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPreparationLevelsApi->personPreparationLevelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_preparation_levels identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPreparationLevelsJsonldIdStandardMetadataPersonPreparationLevelMetadataTagTaggingListPersonPreparationLevelRelationsTimestampable**](../Model/PersonPreparationLevelsJsonldIdStandardMetadataPersonPreparationLevelMetadataTagTaggingListPersonPreparationLevelRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
