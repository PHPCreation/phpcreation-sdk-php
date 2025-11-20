# OpenAPI\Client\ProjectPrioritiesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProjectPrioritiesGetCollection()**](ProjectPrioritiesApi.md#apiProjectPrioritiesGetCollection) | **GET** /open-api/v3/project_priorities | Retrieves the collection of project_priorities resources. |
| [**apiProjectPrioritiesIdDelete()**](ProjectPrioritiesApi.md#apiProjectPrioritiesIdDelete) | **DELETE** /open-api/v3/project_priorities/{id} | Removes the project_priorities resource. |
| [**apiProjectPrioritiesIdGet()**](ProjectPrioritiesApi.md#apiProjectPrioritiesIdGet) | **GET** /open-api/v3/project_priorities/{id} | Retrieves a project_priorities resource. |
| [**apiProjectPrioritiesIdPut()**](ProjectPrioritiesApi.md#apiProjectPrioritiesIdPut) | **PUT** /open-api/v3/project_priorities/{id} | Replaces the project_priorities resource. |
| [**apiProjectPrioritiesPost()**](ProjectPrioritiesApi.md#apiProjectPrioritiesPost) | **POST** /open-api/v3/project_priorities | Creates a project_priorities resource. |
| [**projectPriorityApiFileUpload()**](ProjectPrioritiesApi.md#projectPriorityApiFileUpload) | **POST** /open-api/v3/project_priorities/{id}/file/upload | Creates a project_priorities resource. |
| [**projectPriorityDropDown()**](ProjectPrioritiesApi.md#projectPriorityDropDown) | **GET** /open-api/v3/project_priorities/dropdown/get | Retrieves the collection of project_priorities resources. |
| [**projectPriorityDuplicate()**](ProjectPrioritiesApi.md#projectPriorityDuplicate) | **GET** /open-api/v3/project_priorities/duplicate/{id} | Retrieves a project_priorities resource. |
| [**projectPriorityFetchFiles()**](ProjectPrioritiesApi.md#projectPriorityFetchFiles) | **GET** /open-api/v3/project_priorities/fetch_files/{id} | Retrieves a project_priorities resource. |
| [**projectPriorityGetBySlug()**](ProjectPrioritiesApi.md#projectPriorityGetBySlug) | **GET** /open-api/v3/project_priorities/by_slug/{slug} | Retrieves a project_priorities resource. |
| [**projectPriorityGetDeleteRelations()**](ProjectPrioritiesApi.md#projectPriorityGetDeleteRelations) | **GET** /open-api/v3/project_priorities/get_delete_relations/{id} | Retrieves a project_priorities resource. |
| [**projectPriorityMetadata()**](ProjectPrioritiesApi.md#projectPriorityMetadata) | **GET** /open-api/v3/project_priorities/metadata/{id} | Retrieves a project_priorities resource. |


## `apiProjectPrioritiesGetCollection()`

```php
apiProjectPrioritiesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiProjectPrioritiesGetCollection200Response
```

Retrieves the collection of project_priorities resources.

Retrieves the collection of project_priorities resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
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
$slug_partial = 'slug_partial_example'; // string | project_priorities slug_partial
$slug_start_with = 'slug_start_with_example'; // string | project_priorities slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | project_priorities slug_end_with
$id_partial = 'id_partial_example'; // string | project_priorities id_partial
$id_start_with = 'id_start_with_example'; // string | project_priorities id_start_with
$id_end_with = 'id_end_with_example'; // string | project_priorities id_end_with
$icon_partial = 'icon_partial_example'; // string | project_priorities icon_partial
$icon_start_with = 'icon_start_with_example'; // string | project_priorities icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | project_priorities icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | project_priorities translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | project_priorities translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | project_priorities translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | project_priorities translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | project_priorities translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | project_priorities translations.description_end_with
$priority_range = 'priority_range_example'; // string | project_priorities priority_range

try {
    $result = $apiInstance->apiProjectPrioritiesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->apiProjectPrioritiesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| project_priorities slug_partial | [optional] |
| **slug_start_with** | **string**| project_priorities slug_start_with | [optional] |
| **slug_end_with** | **string**| project_priorities slug_end_with | [optional] |
| **id_partial** | **string**| project_priorities id_partial | [optional] |
| **id_start_with** | **string**| project_priorities id_start_with | [optional] |
| **id_end_with** | **string**| project_priorities id_end_with | [optional] |
| **icon_partial** | **string**| project_priorities icon_partial | [optional] |
| **icon_start_with** | **string**| project_priorities icon_start_with | [optional] |
| **icon_end_with** | **string**| project_priorities icon_end_with | [optional] |
| **translations_title_partial** | **string**| project_priorities translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| project_priorities translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| project_priorities translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| project_priorities translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| project_priorities translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| project_priorities translations.description_end_with | [optional] |
| **priority_range** | **string**| project_priorities priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProjectPrioritiesGetCollection200Response**](../Model/ApiProjectPrioritiesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectPrioritiesIdDelete()`

```php
apiProjectPrioritiesIdDelete($id)
```

Removes the project_priorities resource.

Removes the project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier

try {
    $apiInstance->apiProjectPrioritiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->apiProjectPrioritiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |

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

## `apiProjectPrioritiesIdGet()`

```php
apiProjectPrioritiesIdGet($id): \OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a project_priorities resource.

Retrieves a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier

try {
    $result = $apiInstance->apiProjectPrioritiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->apiProjectPrioritiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectPrioritiesIdPut()`

```php
apiProjectPrioritiesIdPut($id, $project_priorities_jsonld_post): \OpenAPI\Client\Model\ProjectPrioritiesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the project_priorities resource.

Replaces the project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier
$project_priorities_jsonld_post = new \OpenAPI\Client\Model\ProjectPrioritiesJsonldPost(); // \OpenAPI\Client\Model\ProjectPrioritiesJsonldPost | The updated project_priorities resource

try {
    $result = $apiInstance->apiProjectPrioritiesIdPut($id, $project_priorities_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->apiProjectPrioritiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |
| **project_priorities_jsonld_post** | [**\OpenAPI\Client\Model\ProjectPrioritiesJsonldPost**](../Model/ProjectPrioritiesJsonldPost.md)| The updated project_priorities resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ProjectPrioritiesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectPrioritiesPost()`

```php
apiProjectPrioritiesPost($project_priorities_jsonld_add_post): \OpenAPI\Client\Model\ProjectPrioritiesJsonld
```

Creates a project_priorities resource.

Creates a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_priorities_jsonld_add_post = new \OpenAPI\Client\Model\ProjectPrioritiesJsonldAddPost(); // \OpenAPI\Client\Model\ProjectPrioritiesJsonldAddPost | The new project_priorities resource

try {
    $result = $apiInstance->apiProjectPrioritiesPost($project_priorities_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->apiProjectPrioritiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_priorities_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectPrioritiesJsonldAddPost**](../Model/ProjectPrioritiesJsonldAddPost.md)| The new project_priorities resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonld**](../Model/ProjectPrioritiesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectPriorityApiFileUpload()`

```php
projectPriorityApiFileUpload($id, $project_priorities_jsonld): \OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingListStandardShow
```

Creates a project_priorities resource.

Creates a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier
$project_priorities_jsonld = new \OpenAPI\Client\Model\ProjectPrioritiesJsonld(); // \OpenAPI\Client\Model\ProjectPrioritiesJsonld | The new project_priorities resource

try {
    $result = $apiInstance->projectPriorityApiFileUpload($id, $project_priorities_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->projectPriorityApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |
| **project_priorities_jsonld** | [**\OpenAPI\Client\Model\ProjectPrioritiesJsonld**](../Model/ProjectPrioritiesJsonld.md)| The new project_priorities resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectPriorityDropDown()`

```php
projectPriorityDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\ProjectPriorityDropDown200Response
```

Retrieves the collection of project_priorities resources.

Retrieves the collection of project_priorities resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
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
    $result = $apiInstance->projectPriorityDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->projectPriorityDropDown: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ProjectPriorityDropDown200Response**](../Model/ProjectPriorityDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectPriorityDuplicate()`

```php
projectPriorityDuplicate($id): \OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingList
```

Retrieves a project_priorities resource.

Retrieves a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier

try {
    $result = $apiInstance->projectPriorityDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->projectPriorityDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingList**](../Model/ProjectPrioritiesJsonldProjectPriorityShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectPriorityFetchFiles()`

```php
projectPriorityFetchFiles($id): \OpenAPI\Client\Model\ProjectPrioritiesJsonld
```

Retrieves a project_priorities resource.

Retrieves a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier

try {
    $result = $apiInstance->projectPriorityFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->projectPriorityFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonld**](../Model/ProjectPrioritiesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectPriorityGetBySlug()`

```php
projectPriorityGetBySlug($slug): \OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a project_priorities resource.

Retrieves a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | project_priorities identifier

try {
    $result = $apiInstance->projectPriorityGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->projectPriorityGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| project_priorities identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ProjectPrioritiesJsonldProjectPriorityShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectPriorityGetDeleteRelations()`

```php
projectPriorityGetDeleteRelations($id): \OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityRelations
```

Retrieves a project_priorities resource.

Retrieves a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier

try {
    $result = $apiInstance->projectPriorityGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->projectPriorityGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonldProjectPriorityRelations**](../Model/ProjectPrioritiesJsonldProjectPriorityRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectPriorityMetadata()`

```php
projectPriorityMetadata($id): \OpenAPI\Client\Model\ProjectPrioritiesJsonldIdStandardMetadataProjectPriorityMetadataTagTaggingListProjectPriorityRelationsTimestampable
```

Retrieves a project_priorities resource.

Retrieves a project_priorities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_priorities identifier

try {
    $result = $apiInstance->projectPriorityMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectPrioritiesApi->projectPriorityMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_priorities identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectPrioritiesJsonldIdStandardMetadataProjectPriorityMetadataTagTaggingListProjectPriorityRelationsTimestampable**](../Model/ProjectPrioritiesJsonldIdStandardMetadataProjectPriorityMetadataTagTaggingListProjectPriorityRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
