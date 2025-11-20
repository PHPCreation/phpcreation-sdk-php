# OpenAPI\Client\PersonSkillsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonSkillsGetCollection()**](PersonSkillsApi.md#apiPersonSkillsGetCollection) | **GET** /open-api/v3/person_skills | Retrieves the collection of person_skills resources. |
| [**apiPersonSkillsIdDelete()**](PersonSkillsApi.md#apiPersonSkillsIdDelete) | **DELETE** /open-api/v3/person_skills/{id} | Removes the person_skills resource. |
| [**apiPersonSkillsIdGet()**](PersonSkillsApi.md#apiPersonSkillsIdGet) | **GET** /open-api/v3/person_skills/{id} | Retrieves a person_skills resource. |
| [**apiPersonSkillsIdPut()**](PersonSkillsApi.md#apiPersonSkillsIdPut) | **PUT** /open-api/v3/person_skills/{id} | Replaces the person_skills resource. |
| [**apiPersonSkillsPost()**](PersonSkillsApi.md#apiPersonSkillsPost) | **POST** /open-api/v3/person_skills | Creates a person_skills resource. |
| [**personSkillApiFileUpload()**](PersonSkillsApi.md#personSkillApiFileUpload) | **POST** /open-api/v3/person_skills/{id}/file/upload | Creates a person_skills resource. |
| [**personSkillDropDown()**](PersonSkillsApi.md#personSkillDropDown) | **GET** /open-api/v3/person_skills/dropdown/get | Retrieves the collection of person_skills resources. |
| [**personSkillDuplicate()**](PersonSkillsApi.md#personSkillDuplicate) | **GET** /open-api/v3/person_skills/duplicate/{id} | Retrieves a person_skills resource. |
| [**personSkillFetchFiles()**](PersonSkillsApi.md#personSkillFetchFiles) | **GET** /open-api/v3/person_skills/fetch_files/{id} | Retrieves a person_skills resource. |
| [**personSkillGetBySlug()**](PersonSkillsApi.md#personSkillGetBySlug) | **GET** /open-api/v3/person_skills/by_slug/{slug} | Retrieves a person_skills resource. |
| [**personSkillGetDeleteRelations()**](PersonSkillsApi.md#personSkillGetDeleteRelations) | **GET** /open-api/v3/person_skills/get_delete_relations/{id} | Retrieves a person_skills resource. |
| [**personSkillMetadata()**](PersonSkillsApi.md#personSkillMetadata) | **GET** /open-api/v3/person_skills/metadata/{id} | Retrieves a person_skills resource. |


## `apiPersonSkillsGetCollection()`

```php
apiPersonSkillsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_root, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonSkillsGetCollection200Response
```

Retrieves the collection of person_skills resources.

Retrieves the collection of person_skills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
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
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_root = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_skills slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_skills slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_skills slug_end_with
$id_partial = 'id_partial_example'; // string | person_skills id_partial
$id_start_with = 'id_start_with_example'; // string | person_skills id_start_with
$id_end_with = 'id_end_with_example'; // string | person_skills id_end_with
$icon_partial = 'icon_partial_example'; // string | person_skills icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_skills icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_skills icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_skills translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_skills translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_skills translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_skills translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_skills translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_skills translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_skills priority_range

try {
    $result = $apiInstance->apiPersonSkillsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_root, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->apiPersonSkillsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_root** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| person_skills slug_partial | [optional] |
| **slug_start_with** | **string**| person_skills slug_start_with | [optional] |
| **slug_end_with** | **string**| person_skills slug_end_with | [optional] |
| **id_partial** | **string**| person_skills id_partial | [optional] |
| **id_start_with** | **string**| person_skills id_start_with | [optional] |
| **id_end_with** | **string**| person_skills id_end_with | [optional] |
| **icon_partial** | **string**| person_skills icon_partial | [optional] |
| **icon_start_with** | **string**| person_skills icon_start_with | [optional] |
| **icon_end_with** | **string**| person_skills icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_skills translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_skills translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_skills translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_skills translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_skills translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_skills translations.description_end_with | [optional] |
| **priority_range** | **string**| person_skills priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonSkillsGetCollection200Response**](../Model/ApiPersonSkillsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonSkillsIdDelete()`

```php
apiPersonSkillsIdDelete($id)
```

Removes the person_skills resource.

Removes the person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier

try {
    $apiInstance->apiPersonSkillsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->apiPersonSkillsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |

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

## `apiPersonSkillsIdGet()`

```php
apiPersonSkillsIdGet($id): \OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_skills resource.

Retrieves a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier

try {
    $result = $apiInstance->apiPersonSkillsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->apiPersonSkillsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonSkillsIdPut()`

```php
apiPersonSkillsIdPut($id, $person_skills_jsonld_post): \OpenAPI\Client\Model\PersonSkillsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the person_skills resource.

Replaces the person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier
$person_skills_jsonld_post = new \OpenAPI\Client\Model\PersonSkillsJsonldPost(); // \OpenAPI\Client\Model\PersonSkillsJsonldPost | The updated person_skills resource

try {
    $result = $apiInstance->apiPersonSkillsIdPut($id, $person_skills_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->apiPersonSkillsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |
| **person_skills_jsonld_post** | [**\OpenAPI\Client\Model\PersonSkillsJsonldPost**](../Model/PersonSkillsJsonldPost.md)| The updated person_skills resource | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonSkillsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonSkillsPost()`

```php
apiPersonSkillsPost($person_skills_jsonld_add_post): \OpenAPI\Client\Model\PersonSkillsJsonld
```

Creates a person_skills resource.

Creates a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_skills_jsonld_add_post = new \OpenAPI\Client\Model\PersonSkillsJsonldAddPost(); // \OpenAPI\Client\Model\PersonSkillsJsonldAddPost | The new person_skills resource

try {
    $result = $apiInstance->apiPersonSkillsPost($person_skills_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->apiPersonSkillsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_skills_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonSkillsJsonldAddPost**](../Model/PersonSkillsJsonldAddPost.md)| The new person_skills resource | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonld**](../Model/PersonSkillsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSkillApiFileUpload()`

```php
personSkillApiFileUpload($id, $person_skills_jsonld): \OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_skills resource.

Creates a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier
$person_skills_jsonld = new \OpenAPI\Client\Model\PersonSkillsJsonld(); // \OpenAPI\Client\Model\PersonSkillsJsonld | The new person_skills resource

try {
    $result = $apiInstance->personSkillApiFileUpload($id, $person_skills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->personSkillApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |
| **person_skills_jsonld** | [**\OpenAPI\Client\Model\PersonSkillsJsonld**](../Model/PersonSkillsJsonld.md)| The new person_skills resource | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSkillDropDown()`

```php
personSkillDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_root, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\PersonSkillDropDown200Response
```

Retrieves the collection of person_skills resources.

Retrieves the collection of person_skills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
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
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_root = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->personSkillDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_root, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->personSkillDropDown: ', $e->getMessage(), PHP_EOL;
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
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_root** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonSkillDropDown200Response**](../Model/PersonSkillDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSkillDuplicate()`

```php
personSkillDuplicate($id): \OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingList
```

Retrieves a person_skills resource.

Retrieves a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier

try {
    $result = $apiInstance->personSkillDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->personSkillDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingList**](../Model/PersonSkillsJsonldPersonSkillShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSkillFetchFiles()`

```php
personSkillFetchFiles($id): \OpenAPI\Client\Model\PersonSkillsJsonld
```

Retrieves a person_skills resource.

Retrieves a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier

try {
    $result = $apiInstance->personSkillFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->personSkillFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonld**](../Model/PersonSkillsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSkillGetBySlug()`

```php
personSkillGetBySlug($slug): \OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_skills resource.

Retrieves a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_skills identifier

try {
    $result = $apiInstance->personSkillGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->personSkillGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonSkillsJsonldPersonSkillShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSkillGetDeleteRelations()`

```php
personSkillGetDeleteRelations($id): \OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillRelations
```

Retrieves a person_skills resource.

Retrieves a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier

try {
    $result = $apiInstance->personSkillGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->personSkillGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonldPersonSkillRelations**](../Model/PersonSkillsJsonldPersonSkillRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSkillMetadata()`

```php
personSkillMetadata($id): \OpenAPI\Client\Model\PersonSkillsJsonldIdStandardMetadataPersonSkillMetadataTagTaggingListPersonSkillRelationsTimestampable
```

Retrieves a person_skills resource.

Retrieves a person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_skills identifier

try {
    $result = $apiInstance->personSkillMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSkillsApi->personSkillMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSkillsJsonldIdStandardMetadataPersonSkillMetadataTagTaggingListPersonSkillRelationsTimestampable**](../Model/PersonSkillsJsonldIdStandardMetadataPersonSkillMetadataTagTaggingListPersonSkillRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
