# OpenAPI\Client\ProjectSectorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProjectSectorsGetCollection()**](ProjectSectorsApi.md#apiProjectSectorsGetCollection) | **GET** /open-api/v3/project_sectors | Retrieves the collection of project_sectors resources. |
| [**apiProjectSectorsIdDelete()**](ProjectSectorsApi.md#apiProjectSectorsIdDelete) | **DELETE** /open-api/v3/project_sectors/{id} | Removes the project_sectors resource. |
| [**apiProjectSectorsIdGet()**](ProjectSectorsApi.md#apiProjectSectorsIdGet) | **GET** /open-api/v3/project_sectors/{id} | Retrieves a project_sectors resource. |
| [**apiProjectSectorsIdPut()**](ProjectSectorsApi.md#apiProjectSectorsIdPut) | **PUT** /open-api/v3/project_sectors/{id} | Replaces the project_sectors resource. |
| [**apiProjectSectorsPost()**](ProjectSectorsApi.md#apiProjectSectorsPost) | **POST** /open-api/v3/project_sectors | Creates a project_sectors resource. |
| [**projectSectorApiCorporationAdd()**](ProjectSectorsApi.md#projectSectorApiCorporationAdd) | **POST** /open-api/v3/project_sectors/{id}/corporation/add | Creates a project_sectors resource. |
| [**projectSectorApiCorporationRemove()**](ProjectSectorsApi.md#projectSectorApiCorporationRemove) | **POST** /open-api/v3/project_sectors/{id}/corporation/remove | Creates a project_sectors resource. |
| [**projectSectorApiFileUpload()**](ProjectSectorsApi.md#projectSectorApiFileUpload) | **POST** /open-api/v3/project_sectors/{id}/file/upload | Creates a project_sectors resource. |
| [**projectSectorDropDown()**](ProjectSectorsApi.md#projectSectorDropDown) | **GET** /open-api/v3/project_sectors/dropdown/get | Retrieves the collection of project_sectors resources. |
| [**projectSectorDuplicate()**](ProjectSectorsApi.md#projectSectorDuplicate) | **GET** /open-api/v3/project_sectors/duplicate/{id} | Retrieves a project_sectors resource. |
| [**projectSectorFetchFiles()**](ProjectSectorsApi.md#projectSectorFetchFiles) | **GET** /open-api/v3/project_sectors/fetch_files/{id} | Retrieves a project_sectors resource. |
| [**projectSectorGetBySlug()**](ProjectSectorsApi.md#projectSectorGetBySlug) | **GET** /open-api/v3/project_sectors/by_slug/{slug} | Retrieves a project_sectors resource. |
| [**projectSectorGetDeleteRelations()**](ProjectSectorsApi.md#projectSectorGetDeleteRelations) | **GET** /open-api/v3/project_sectors/get_delete_relations/{id} | Retrieves a project_sectors resource. |
| [**projectSectorMetadata()**](ProjectSectorsApi.md#projectSectorMetadata) | **GET** /open-api/v3/project_sectors/metadata/{id} | Retrieves a project_sectors resource. |


## `apiProjectSectorsGetCollection()`

```php
apiProjectSectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiProjectSectorsGetCollection200Response
```

Retrieves the collection of project_sectors resources.

Retrieves the collection of project_sectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
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
$slug_partial = 'slug_partial_example'; // string | project_sectors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | project_sectors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | project_sectors slug_end_with
$id_partial = 'id_partial_example'; // string | project_sectors id_partial
$id_start_with = 'id_start_with_example'; // string | project_sectors id_start_with
$id_end_with = 'id_end_with_example'; // string | project_sectors id_end_with
$icon_partial = 'icon_partial_example'; // string | project_sectors icon_partial
$icon_start_with = 'icon_start_with_example'; // string | project_sectors icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | project_sectors icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | project_sectors translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | project_sectors translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | project_sectors translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | project_sectors translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | project_sectors translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | project_sectors translations.description_end_with
$priority_range = 'priority_range_example'; // string | project_sectors priority_range

try {
    $result = $apiInstance->apiProjectSectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->apiProjectSectorsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| project_sectors slug_partial | [optional] |
| **slug_start_with** | **string**| project_sectors slug_start_with | [optional] |
| **slug_end_with** | **string**| project_sectors slug_end_with | [optional] |
| **id_partial** | **string**| project_sectors id_partial | [optional] |
| **id_start_with** | **string**| project_sectors id_start_with | [optional] |
| **id_end_with** | **string**| project_sectors id_end_with | [optional] |
| **icon_partial** | **string**| project_sectors icon_partial | [optional] |
| **icon_start_with** | **string**| project_sectors icon_start_with | [optional] |
| **icon_end_with** | **string**| project_sectors icon_end_with | [optional] |
| **translations_title_partial** | **string**| project_sectors translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| project_sectors translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| project_sectors translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| project_sectors translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| project_sectors translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| project_sectors translations.description_end_with | [optional] |
| **priority_range** | **string**| project_sectors priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProjectSectorsGetCollection200Response**](../Model/ApiProjectSectorsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectSectorsIdDelete()`

```php
apiProjectSectorsIdDelete($id)
```

Removes the project_sectors resource.

Removes the project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier

try {
    $apiInstance->apiProjectSectorsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->apiProjectSectorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |

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

## `apiProjectSectorsIdGet()`

```php
apiProjectSectorsIdGet($id): \OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a project_sectors resource.

Retrieves a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier

try {
    $result = $apiInstance->apiProjectSectorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->apiProjectSectorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectSectorsIdPut()`

```php
apiProjectSectorsIdPut($id, $project_sectors_jsonld_post): \OpenAPI\Client\Model\ProjectSectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the project_sectors resource.

Replaces the project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier
$project_sectors_jsonld_post = new \OpenAPI\Client\Model\ProjectSectorsJsonldPost(); // \OpenAPI\Client\Model\ProjectSectorsJsonldPost | The updated project_sectors resource

try {
    $result = $apiInstance->apiProjectSectorsIdPut($id, $project_sectors_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->apiProjectSectorsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |
| **project_sectors_jsonld_post** | [**\OpenAPI\Client\Model\ProjectSectorsJsonldPost**](../Model/ProjectSectorsJsonldPost.md)| The updated project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ProjectSectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectSectorsPost()`

```php
apiProjectSectorsPost($project_sectors_jsonld_add_post): \OpenAPI\Client\Model\ProjectSectorsJsonld
```

Creates a project_sectors resource.

Creates a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_sectors_jsonld_add_post = new \OpenAPI\Client\Model\ProjectSectorsJsonldAddPost(); // \OpenAPI\Client\Model\ProjectSectorsJsonldAddPost | The new project_sectors resource

try {
    $result = $apiInstance->apiProjectSectorsPost($project_sectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->apiProjectSectorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_sectors_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectSectorsJsonldAddPost**](../Model/ProjectSectorsJsonldAddPost.md)| The new project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonld**](../Model/ProjectSectorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorApiCorporationAdd()`

```php
projectSectorApiCorporationAdd($id, $project_sectors_jsonld): \OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a project_sectors resource.

Creates a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier
$project_sectors_jsonld = new \OpenAPI\Client\Model\ProjectSectorsJsonld(); // \OpenAPI\Client\Model\ProjectSectorsJsonld | The new project_sectors resource

try {
    $result = $apiInstance->projectSectorApiCorporationAdd($id, $project_sectors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |
| **project_sectors_jsonld** | [**\OpenAPI\Client\Model\ProjectSectorsJsonld**](../Model/ProjectSectorsJsonld.md)| The new project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorApiCorporationRemove()`

```php
projectSectorApiCorporationRemove($id, $project_sectors_jsonld): \OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a project_sectors resource.

Creates a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier
$project_sectors_jsonld = new \OpenAPI\Client\Model\ProjectSectorsJsonld(); // \OpenAPI\Client\Model\ProjectSectorsJsonld | The new project_sectors resource

try {
    $result = $apiInstance->projectSectorApiCorporationRemove($id, $project_sectors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |
| **project_sectors_jsonld** | [**\OpenAPI\Client\Model\ProjectSectorsJsonld**](../Model/ProjectSectorsJsonld.md)| The new project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorApiFileUpload()`

```php
projectSectorApiFileUpload($id, $project_sectors_jsonld): \OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a project_sectors resource.

Creates a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier
$project_sectors_jsonld = new \OpenAPI\Client\Model\ProjectSectorsJsonld(); // \OpenAPI\Client\Model\ProjectSectorsJsonld | The new project_sectors resource

try {
    $result = $apiInstance->projectSectorApiFileUpload($id, $project_sectors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |
| **project_sectors_jsonld** | [**\OpenAPI\Client\Model\ProjectSectorsJsonld**](../Model/ProjectSectorsJsonld.md)| The new project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorDropDown()`

```php
projectSectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\ProjectSectorDropDown200Response
```

Retrieves the collection of project_sectors resources.

Retrieves the collection of project_sectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
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
    $result = $apiInstance->projectSectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorDropDown: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ProjectSectorDropDown200Response**](../Model/ProjectSectorDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorDuplicate()`

```php
projectSectorDuplicate($id): \OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingList
```

Retrieves a project_sectors resource.

Retrieves a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier

try {
    $result = $apiInstance->projectSectorDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingList**](../Model/ProjectSectorsJsonldProjectSectorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorFetchFiles()`

```php
projectSectorFetchFiles($id): \OpenAPI\Client\Model\ProjectSectorsJsonld
```

Retrieves a project_sectors resource.

Retrieves a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier

try {
    $result = $apiInstance->projectSectorFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonld**](../Model/ProjectSectorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorGetBySlug()`

```php
projectSectorGetBySlug($slug): \OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a project_sectors resource.

Retrieves a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | project_sectors identifier

try {
    $result = $apiInstance->projectSectorGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ProjectSectorsJsonldProjectSectorShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorGetDeleteRelations()`

```php
projectSectorGetDeleteRelations($id): \OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorRelations
```

Retrieves a project_sectors resource.

Retrieves a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier

try {
    $result = $apiInstance->projectSectorGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldProjectSectorRelations**](../Model/ProjectSectorsJsonldProjectSectorRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectSectorMetadata()`

```php
projectSectorMetadata($id): \OpenAPI\Client\Model\ProjectSectorsJsonldIdStandardMetadataProjectSectorMetadataTagTaggingListProjectSectorRelationsTimestampable
```

Retrieves a project_sectors resource.

Retrieves a project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_sectors identifier

try {
    $result = $apiInstance->projectSectorMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSectorsApi->projectSectorMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectSectorsJsonldIdStandardMetadataProjectSectorMetadataTagTaggingListProjectSectorRelationsTimestampable**](../Model/ProjectSectorsJsonldIdStandardMetadataProjectSectorMetadataTagTaggingListProjectSectorRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
