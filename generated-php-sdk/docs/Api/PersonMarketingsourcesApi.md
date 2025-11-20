# OpenAPI\Client\PersonMarketingsourcesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonMarketingsourcesGetCollection()**](PersonMarketingsourcesApi.md#apiPersonMarketingsourcesGetCollection) | **GET** /open-api/v3/person_marketingsources | Retrieves the collection of person_marketingsources resources. |
| [**apiPersonMarketingsourcesIdDelete()**](PersonMarketingsourcesApi.md#apiPersonMarketingsourcesIdDelete) | **DELETE** /open-api/v3/person_marketingsources/{id} | Removes the person_marketingsources resource. |
| [**apiPersonMarketingsourcesIdGet()**](PersonMarketingsourcesApi.md#apiPersonMarketingsourcesIdGet) | **GET** /open-api/v3/person_marketingsources/{id} | Retrieves a person_marketingsources resource. |
| [**apiPersonMarketingsourcesIdPut()**](PersonMarketingsourcesApi.md#apiPersonMarketingsourcesIdPut) | **PUT** /open-api/v3/person_marketingsources/{id} | Replaces the person_marketingsources resource. |
| [**apiPersonMarketingsourcesPost()**](PersonMarketingsourcesApi.md#apiPersonMarketingsourcesPost) | **POST** /open-api/v3/person_marketingsources | Creates a person_marketingsources resource. |
| [**personMarketingSourceApiFileUpload()**](PersonMarketingsourcesApi.md#personMarketingSourceApiFileUpload) | **POST** /open-api/v3/person_marketingsources/{id}/file/upload | Creates a person_marketingsources resource. |
| [**personMarketingSourceDropDown()**](PersonMarketingsourcesApi.md#personMarketingSourceDropDown) | **GET** /open-api/v3/person_marketingsources/dropdown/get | Retrieves the collection of person_marketingsources resources. |
| [**personMarketingSourceDuplicate()**](PersonMarketingsourcesApi.md#personMarketingSourceDuplicate) | **GET** /open-api/v3/person_marketingsources/duplicate/{id} | Retrieves a person_marketingsources resource. |
| [**personMarketingSourceFetchFiles()**](PersonMarketingsourcesApi.md#personMarketingSourceFetchFiles) | **GET** /open-api/v3/person_marketingsources/fetch_files/{id} | Retrieves a person_marketingsources resource. |
| [**personMarketingSourceGetBySlug()**](PersonMarketingsourcesApi.md#personMarketingSourceGetBySlug) | **GET** /open-api/v3/person_marketingsources/by_slug/{slug} | Retrieves a person_marketingsources resource. |
| [**personMarketingSourceGetDeleteRelations()**](PersonMarketingsourcesApi.md#personMarketingSourceGetDeleteRelations) | **GET** /open-api/v3/person_marketingsources/get_delete_relations/{id} | Retrieves a person_marketingsources resource. |
| [**personMarketingSourceMetadata()**](PersonMarketingsourcesApi.md#personMarketingSourceMetadata) | **GET** /open-api/v3/person_marketingsources/metadata/{id} | Retrieves a person_marketingsources resource. |


## `apiPersonMarketingsourcesGetCollection()`

```php
apiPersonMarketingsourcesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonMarketingsourcesGetCollection200Response
```

Retrieves the collection of person_marketingsources resources.

Retrieves the collection of person_marketingsources resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
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
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
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
$slug_partial = 'slug_partial_example'; // string | person_marketingsources slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_marketingsources slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_marketingsources slug_end_with
$id_partial = 'id_partial_example'; // string | person_marketingsources id_partial
$id_start_with = 'id_start_with_example'; // string | person_marketingsources id_start_with
$id_end_with = 'id_end_with_example'; // string | person_marketingsources id_end_with
$icon_partial = 'icon_partial_example'; // string | person_marketingsources icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_marketingsources icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_marketingsources icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_marketingsources translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_marketingsources translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_marketingsources translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_marketingsources translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_marketingsources translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_marketingsources translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_marketingsources priority_range

try {
    $result = $apiInstance->apiPersonMarketingsourcesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->apiPersonMarketingsourcesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
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
| **slug_partial** | **string**| person_marketingsources slug_partial | [optional] |
| **slug_start_with** | **string**| person_marketingsources slug_start_with | [optional] |
| **slug_end_with** | **string**| person_marketingsources slug_end_with | [optional] |
| **id_partial** | **string**| person_marketingsources id_partial | [optional] |
| **id_start_with** | **string**| person_marketingsources id_start_with | [optional] |
| **id_end_with** | **string**| person_marketingsources id_end_with | [optional] |
| **icon_partial** | **string**| person_marketingsources icon_partial | [optional] |
| **icon_start_with** | **string**| person_marketingsources icon_start_with | [optional] |
| **icon_end_with** | **string**| person_marketingsources icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_marketingsources translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_marketingsources translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_marketingsources translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_marketingsources translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_marketingsources translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_marketingsources translations.description_end_with | [optional] |
| **priority_range** | **string**| person_marketingsources priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonMarketingsourcesGetCollection200Response**](../Model/ApiPersonMarketingsourcesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonMarketingsourcesIdDelete()`

```php
apiPersonMarketingsourcesIdDelete($id)
```

Removes the person_marketingsources resource.

Removes the person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier

try {
    $apiInstance->apiPersonMarketingsourcesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->apiPersonMarketingsourcesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |

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

## `apiPersonMarketingsourcesIdGet()`

```php
apiPersonMarketingsourcesIdGet($id): \OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_marketingsources resource.

Retrieves a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier

try {
    $result = $apiInstance->apiPersonMarketingsourcesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->apiPersonMarketingsourcesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonMarketingsourcesIdPut()`

```php
apiPersonMarketingsourcesIdPut($id, $person_marketingsources_jsonld_post): \OpenAPI\Client\Model\PersonMarketingsourcesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the person_marketingsources resource.

Replaces the person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier
$person_marketingsources_jsonld_post = new \OpenAPI\Client\Model\PersonMarketingsourcesJsonldPost(); // \OpenAPI\Client\Model\PersonMarketingsourcesJsonldPost | The updated person_marketingsources resource

try {
    $result = $apiInstance->apiPersonMarketingsourcesIdPut($id, $person_marketingsources_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->apiPersonMarketingsourcesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |
| **person_marketingsources_jsonld_post** | [**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldPost**](../Model/PersonMarketingsourcesJsonldPost.md)| The updated person_marketingsources resource | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonMarketingsourcesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonMarketingsourcesPost()`

```php
apiPersonMarketingsourcesPost($person_marketingsources_jsonld_add_post): \OpenAPI\Client\Model\PersonMarketingsourcesJsonld
```

Creates a person_marketingsources resource.

Creates a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_marketingsources_jsonld_add_post = new \OpenAPI\Client\Model\PersonMarketingsourcesJsonldAddPost(); // \OpenAPI\Client\Model\PersonMarketingsourcesJsonldAddPost | The new person_marketingsources resource

try {
    $result = $apiInstance->apiPersonMarketingsourcesPost($person_marketingsources_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->apiPersonMarketingsourcesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_marketingsources_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldAddPost**](../Model/PersonMarketingsourcesJsonldAddPost.md)| The new person_marketingsources resource | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonld**](../Model/PersonMarketingsourcesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMarketingSourceApiFileUpload()`

```php
personMarketingSourceApiFileUpload($id, $person_marketingsources_jsonld): \OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_marketingsources resource.

Creates a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier
$person_marketingsources_jsonld = new \OpenAPI\Client\Model\PersonMarketingsourcesJsonld(); // \OpenAPI\Client\Model\PersonMarketingsourcesJsonld | The new person_marketingsources resource

try {
    $result = $apiInstance->personMarketingSourceApiFileUpload($id, $person_marketingsources_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->personMarketingSourceApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |
| **person_marketingsources_jsonld** | [**\OpenAPI\Client\Model\PersonMarketingsourcesJsonld**](../Model/PersonMarketingsourcesJsonld.md)| The new person_marketingsources resource | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMarketingSourceDropDown()`

```php
personMarketingSourceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\PersonMarketingSourceDropDown200Response
```

Retrieves the collection of person_marketingsources resources.

Retrieves the collection of person_marketingsources resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
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
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
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
    $result = $apiInstance->personMarketingSourceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->personMarketingSourceDropDown: ', $e->getMessage(), PHP_EOL;
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
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
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

[**\OpenAPI\Client\Model\PersonMarketingSourceDropDown200Response**](../Model/PersonMarketingSourceDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMarketingSourceDuplicate()`

```php
personMarketingSourceDuplicate($id): \OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingList
```

Retrieves a person_marketingsources resource.

Retrieves a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier

try {
    $result = $apiInstance->personMarketingSourceDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->personMarketingSourceDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingList**](../Model/PersonMarketingsourcesJsonldPersonMarketingSourceShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMarketingSourceFetchFiles()`

```php
personMarketingSourceFetchFiles($id): \OpenAPI\Client\Model\PersonMarketingsourcesJsonld
```

Retrieves a person_marketingsources resource.

Retrieves a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier

try {
    $result = $apiInstance->personMarketingSourceFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->personMarketingSourceFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonld**](../Model/PersonMarketingsourcesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMarketingSourceGetBySlug()`

```php
personMarketingSourceGetBySlug($slug): \OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_marketingsources resource.

Retrieves a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_marketingsources identifier

try {
    $result = $apiInstance->personMarketingSourceGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->personMarketingSourceGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_marketingsources identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonMarketingsourcesJsonldPersonMarketingSourceShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMarketingSourceGetDeleteRelations()`

```php
personMarketingSourceGetDeleteRelations($id): \OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceRelations
```

Retrieves a person_marketingsources resource.

Retrieves a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier

try {
    $result = $apiInstance->personMarketingSourceGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->personMarketingSourceGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldPersonMarketingSourceRelations**](../Model/PersonMarketingsourcesJsonldPersonMarketingSourceRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMarketingSourceMetadata()`

```php
personMarketingSourceMetadata($id): \OpenAPI\Client\Model\PersonMarketingsourcesJsonldIdStandardMetadataPersonMarketingSourceMetadataTagTaggingListPersonMarketingSourceRelationsTimestampable
```

Retrieves a person_marketingsources resource.

Retrieves a person_marketingsources resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonMarketingsourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_marketingsources identifier

try {
    $result = $apiInstance->personMarketingSourceMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonMarketingsourcesApi->personMarketingSourceMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_marketingsources identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonMarketingsourcesJsonldIdStandardMetadataPersonMarketingSourceMetadataTagTaggingListPersonMarketingSourceRelationsTimestampable**](../Model/PersonMarketingsourcesJsonldIdStandardMetadataPersonMarketingSourceMetadataTagTaggingListPersonMarketingSourceRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
