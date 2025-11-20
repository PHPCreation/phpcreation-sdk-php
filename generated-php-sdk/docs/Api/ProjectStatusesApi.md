# OpenAPI\Client\ProjectStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProjectStatusesGetCollection()**](ProjectStatusesApi.md#apiProjectStatusesGetCollection) | **GET** /open-api/v3/project_statuses | Retrieves the collection of project_statuses resources. |
| [**apiProjectStatusesIdDelete()**](ProjectStatusesApi.md#apiProjectStatusesIdDelete) | **DELETE** /open-api/v3/project_statuses/{id} | Removes the project_statuses resource. |
| [**apiProjectStatusesIdGet()**](ProjectStatusesApi.md#apiProjectStatusesIdGet) | **GET** /open-api/v3/project_statuses/{id} | Retrieves a project_statuses resource. |
| [**apiProjectStatusesIdPut()**](ProjectStatusesApi.md#apiProjectStatusesIdPut) | **PUT** /open-api/v3/project_statuses/{id} | Replaces the project_statuses resource. |
| [**apiProjectStatusesPost()**](ProjectStatusesApi.md#apiProjectStatusesPost) | **POST** /open-api/v3/project_statuses | Creates a project_statuses resource. |
| [**projectStatusApiFileUpload()**](ProjectStatusesApi.md#projectStatusApiFileUpload) | **POST** /open-api/v3/project_statuses/{id}/file/upload | Creates a project_statuses resource. |
| [**projectStatusDropDown()**](ProjectStatusesApi.md#projectStatusDropDown) | **GET** /open-api/v3/project_statuses/dropdown/get | Retrieves the collection of project_statuses resources. |
| [**projectStatusDuplicate()**](ProjectStatusesApi.md#projectStatusDuplicate) | **GET** /open-api/v3/project_statuses/duplicate/{id} | Retrieves a project_statuses resource. |
| [**projectStatusFetchFiles()**](ProjectStatusesApi.md#projectStatusFetchFiles) | **GET** /open-api/v3/project_statuses/fetch_files/{id} | Retrieves a project_statuses resource. |
| [**projectStatusGetBySlug()**](ProjectStatusesApi.md#projectStatusGetBySlug) | **GET** /open-api/v3/project_statuses/by_slug/{slug} | Retrieves a project_statuses resource. |
| [**projectStatusGetDeleteRelations()**](ProjectStatusesApi.md#projectStatusGetDeleteRelations) | **GET** /open-api/v3/project_statuses/get_delete_relations/{id} | Retrieves a project_statuses resource. |
| [**projectStatusMetadata()**](ProjectStatusesApi.md#projectStatusMetadata) | **GET** /open-api/v3/project_statuses/metadata/{id} | Retrieves a project_statuses resource. |


## `apiProjectStatusesGetCollection()`

```php
apiProjectStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiProjectStatusesGetCollection200Response
```

Retrieves the collection of project_statuses resources.

Retrieves the collection of project_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
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
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | project_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | project_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | project_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | project_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | project_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | project_statuses id_end_with
$number_partial = 'number_partial_example'; // string | project_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | project_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | project_statuses number_end_with
$color_partial = 'color_partial_example'; // string | project_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | project_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | project_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | project_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | project_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | project_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | project_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | project_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | project_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | project_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | project_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | project_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | project_statuses priority_range

try {
    $result = $apiInstance->apiProjectStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->apiProjectStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| project_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| project_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| project_statuses slug_end_with | [optional] |
| **id_partial** | **string**| project_statuses id_partial | [optional] |
| **id_start_with** | **string**| project_statuses id_start_with | [optional] |
| **id_end_with** | **string**| project_statuses id_end_with | [optional] |
| **number_partial** | **string**| project_statuses number_partial | [optional] |
| **number_start_with** | **string**| project_statuses number_start_with | [optional] |
| **number_end_with** | **string**| project_statuses number_end_with | [optional] |
| **color_partial** | **string**| project_statuses color_partial | [optional] |
| **color_start_with** | **string**| project_statuses color_start_with | [optional] |
| **color_end_with** | **string**| project_statuses color_end_with | [optional] |
| **icon_partial** | **string**| project_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| project_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| project_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| project_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| project_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| project_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| project_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| project_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| project_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| project_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProjectStatusesGetCollection200Response**](../Model/ApiProjectStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectStatusesIdDelete()`

```php
apiProjectStatusesIdDelete($id)
```

Removes the project_statuses resource.

Removes the project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier

try {
    $apiInstance->apiProjectStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->apiProjectStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |

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

## `apiProjectStatusesIdGet()`

```php
apiProjectStatusesIdGet($id): \OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a project_statuses resource.

Retrieves a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier

try {
    $result = $apiInstance->apiProjectStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->apiProjectStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectStatusesIdPut()`

```php
apiProjectStatusesIdPut($id, $project_statuses_jsonld_post): \OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the project_statuses resource.

Replaces the project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier
$project_statuses_jsonld_post = new \OpenAPI\Client\Model\ProjectStatusesJsonldPost(); // \OpenAPI\Client\Model\ProjectStatusesJsonldPost | The updated project_statuses resource

try {
    $result = $apiInstance->apiProjectStatusesIdPut($id, $project_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->apiProjectStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |
| **project_statuses_jsonld_post** | [**\OpenAPI\Client\Model\ProjectStatusesJsonldPost**](../Model/ProjectStatusesJsonldPost.md)| The updated project_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectStatusesPost()`

```php
apiProjectStatusesPost($project_statuses_jsonld_add_post): \OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a project_statuses resource.

Creates a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_statuses_jsonld_add_post = new \OpenAPI\Client\Model\ProjectStatusesJsonldAddPost(); // \OpenAPI\Client\Model\ProjectStatusesJsonldAddPost | The new project_statuses resource

try {
    $result = $apiInstance->apiProjectStatusesPost($project_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->apiProjectStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectStatusesJsonldAddPost**](../Model/ProjectStatusesJsonldAddPost.md)| The new project_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectStatusApiFileUpload()`

```php
projectStatusApiFileUpload($id, $project_statuses_jsonld): \OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a project_statuses resource.

Creates a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier
$project_statuses_jsonld = new \OpenAPI\Client\Model\ProjectStatusesJsonld(); // \OpenAPI\Client\Model\ProjectStatusesJsonld | The new project_statuses resource

try {
    $result = $apiInstance->projectStatusApiFileUpload($id, $project_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->projectStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |
| **project_statuses_jsonld** | [**\OpenAPI\Client\Model\ProjectStatusesJsonld**](../Model/ProjectStatusesJsonld.md)| The new project_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectStatusDropDown()`

```php
projectStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ProjectStatusDropDown200Response
```

Retrieves the collection of project_statuses resources.

Retrieves the collection of project_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
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
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | project_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | project_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | project_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | project_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | project_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | project_statuses id_end_with
$number_partial = 'number_partial_example'; // string | project_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | project_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | project_statuses number_end_with
$color_partial = 'color_partial_example'; // string | project_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | project_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | project_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | project_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | project_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | project_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | project_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | project_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | project_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | project_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | project_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | project_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | project_statuses priority_range

try {
    $result = $apiInstance->projectStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->projectStatusDropDown: ', $e->getMessage(), PHP_EOL;
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
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| project_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| project_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| project_statuses slug_end_with | [optional] |
| **id_partial** | **string**| project_statuses id_partial | [optional] |
| **id_start_with** | **string**| project_statuses id_start_with | [optional] |
| **id_end_with** | **string**| project_statuses id_end_with | [optional] |
| **number_partial** | **string**| project_statuses number_partial | [optional] |
| **number_start_with** | **string**| project_statuses number_start_with | [optional] |
| **number_end_with** | **string**| project_statuses number_end_with | [optional] |
| **color_partial** | **string**| project_statuses color_partial | [optional] |
| **color_start_with** | **string**| project_statuses color_start_with | [optional] |
| **color_end_with** | **string**| project_statuses color_end_with | [optional] |
| **icon_partial** | **string**| project_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| project_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| project_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| project_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| project_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| project_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| project_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| project_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| project_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| project_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusDropDown200Response**](../Model/ProjectStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectStatusDuplicate()`

```php
projectStatusDuplicate($id): \OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a project_statuses resource.

Retrieves a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier

try {
    $result = $apiInstance->projectStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->projectStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectStatusFetchFiles()`

```php
projectStatusFetchFiles($id): \OpenAPI\Client\Model\ProjectStatusesJsonld
```

Retrieves a project_statuses resource.

Retrieves a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier

try {
    $result = $apiInstance->projectStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->projectStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonld**](../Model/ProjectStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectStatusGetBySlug()`

```php
projectStatusGetBySlug($slug): \OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a project_statuses resource.

Retrieves a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | project_statuses identifier

try {
    $result = $apiInstance->projectStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->projectStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| project_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectStatusesJsonldProjectStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectStatusGetDeleteRelations()`

```php
projectStatusGetDeleteRelations($id): \OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusRelations
```

Retrieves a project_statuses resource.

Retrieves a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier

try {
    $result = $apiInstance->projectStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->projectStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldProjectStatusRelations**](../Model/ProjectStatusesJsonldProjectStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectStatusMetadata()`

```php
projectStatusMetadata($id): \OpenAPI\Client\Model\ProjectStatusesJsonldIdStandardMetadataProjectStatusMetadataTagTaggingListProjectStatusRelationsTimestampable
```

Retrieves a project_statuses resource.

Retrieves a project_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_statuses identifier

try {
    $result = $apiInstance->projectStatusMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectStatusesApi->projectStatusMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectStatusesJsonldIdStandardMetadataProjectStatusMetadataTagTaggingListProjectStatusRelationsTimestampable**](../Model/ProjectStatusesJsonldIdStandardMetadataProjectStatusMetadataTagTaggingListProjectStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
