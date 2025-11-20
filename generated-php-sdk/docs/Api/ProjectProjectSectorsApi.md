# OpenAPI\Client\ProjectProjectSectorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProjectProjectSectorsGetCollection()**](ProjectProjectSectorsApi.md#apiProjectProjectSectorsGetCollection) | **GET** /open-api/v3/project_project_sectors | Retrieves the collection of project_project_sectors resources. |
| [**apiProjectProjectSectorsIdDelete()**](ProjectProjectSectorsApi.md#apiProjectProjectSectorsIdDelete) | **DELETE** /open-api/v3/project_project_sectors/{id} | Removes the project_project_sectors resource. |
| [**apiProjectProjectSectorsIdGet()**](ProjectProjectSectorsApi.md#apiProjectProjectSectorsIdGet) | **GET** /open-api/v3/project_project_sectors/{id} | Retrieves a project_project_sectors resource. |
| [**apiProjectProjectSectorsIdPut()**](ProjectProjectSectorsApi.md#apiProjectProjectSectorsIdPut) | **PUT** /open-api/v3/project_project_sectors/{id} | Replaces the project_project_sectors resource. |
| [**apiProjectProjectSectorsPost()**](ProjectProjectSectorsApi.md#apiProjectProjectSectorsPost) | **POST** /open-api/v3/project_project_sectors | Creates a project_project_sectors resource. |
| [**projectProjectSectorApiFileUpload()**](ProjectProjectSectorsApi.md#projectProjectSectorApiFileUpload) | **POST** /open-api/v3/project_project_sectors/{id}/file/upload | Creates a project_project_sectors resource. |
| [**projectProjectSectorDropDown()**](ProjectProjectSectorsApi.md#projectProjectSectorDropDown) | **GET** /open-api/v3/project_project_sectors/dropdown/get | Retrieves the collection of project_project_sectors resources. |
| [**projectProjectSectorDuplicate()**](ProjectProjectSectorsApi.md#projectProjectSectorDuplicate) | **GET** /open-api/v3/project_project_sectors/duplicate/{id} | Retrieves a project_project_sectors resource. |
| [**projectProjectSectorFetchFiles()**](ProjectProjectSectorsApi.md#projectProjectSectorFetchFiles) | **GET** /open-api/v3/project_project_sectors/fetch_files/{id} | Retrieves a project_project_sectors resource. |
| [**projectProjectSectorGetBySlug()**](ProjectProjectSectorsApi.md#projectProjectSectorGetBySlug) | **GET** /open-api/v3/project_project_sectors/by_slug/{slug} | Retrieves a project_project_sectors resource. |
| [**projectProjectSectorGetDeleteRelations()**](ProjectProjectSectorsApi.md#projectProjectSectorGetDeleteRelations) | **GET** /open-api/v3/project_project_sectors/get_delete_relations/{id} | Retrieves a project_project_sectors resource. |
| [**projectProjectSectorMetadata()**](ProjectProjectSectorsApi.md#projectProjectSectorMetadata) | **GET** /open-api/v3/project_project_sectors/metadata/{id} | Retrieves a project_project_sectors resource. |


## `apiProjectProjectSectorsGetCollection()`

```php
apiProjectProjectSectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $project, $project2, $sector, $sector2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiProjectProjectSectorsGetCollection200Response
```

Retrieves the collection of project_project_sectors resources.

Retrieves the collection of project_project_sectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
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
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_hours = 'nb_hours_example'; // string | 
$nb_hours2 = array('nb_hours_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | project_project_sectors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | project_project_sectors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | project_project_sectors slug_end_with
$id_partial = 'id_partial_example'; // string | project_project_sectors id_partial
$id_start_with = 'id_start_with_example'; // string | project_project_sectors id_start_with
$id_end_with = 'id_end_with_example'; // string | project_project_sectors id_end_with

try {
    $result = $apiInstance->apiProjectProjectSectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $project, $project2, $sector, $sector2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->apiProjectProjectSectorsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_hours** | **string**|  | [optional] |
| **nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| project_project_sectors slug_partial | [optional] |
| **slug_start_with** | **string**| project_project_sectors slug_start_with | [optional] |
| **slug_end_with** | **string**| project_project_sectors slug_end_with | [optional] |
| **id_partial** | **string**| project_project_sectors id_partial | [optional] |
| **id_start_with** | **string**| project_project_sectors id_start_with | [optional] |
| **id_end_with** | **string**| project_project_sectors id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProjectProjectSectorsGetCollection200Response**](../Model/ApiProjectProjectSectorsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectProjectSectorsIdDelete()`

```php
apiProjectProjectSectorsIdDelete($id)
```

Removes the project_project_sectors resource.

Removes the project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier

try {
    $apiInstance->apiProjectProjectSectorsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->apiProjectProjectSectorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |

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

## `apiProjectProjectSectorsIdGet()`

```php
apiProjectProjectSectorsIdGet($id): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a project_project_sectors resource.

Retrieves a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier

try {
    $result = $apiInstance->apiProjectProjectSectorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->apiProjectProjectSectorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectProjectSectorsIdPut()`

```php
apiProjectProjectSectorsIdPut($id, $project_project_sectors_jsonld_add_post): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow
```

Replaces the project_project_sectors resource.

Replaces the project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier
$project_project_sectors_jsonld_add_post = new \OpenAPI\Client\Model\ProjectProjectSectorsJsonldAddPost(); // \OpenAPI\Client\Model\ProjectProjectSectorsJsonldAddPost | The updated project_project_sectors resource

try {
    $result = $apiInstance->apiProjectProjectSectorsIdPut($id, $project_project_sectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->apiProjectProjectSectorsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |
| **project_project_sectors_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldAddPost**](../Model/ProjectProjectSectorsJsonldAddPost.md)| The updated project_project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectProjectSectorsPost()`

```php
apiProjectProjectSectorsPost($project_project_sectors_jsonld_add_post): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a project_project_sectors resource.

Creates a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_project_sectors_jsonld_add_post = new \OpenAPI\Client\Model\ProjectProjectSectorsJsonldAddPost(); // \OpenAPI\Client\Model\ProjectProjectSectorsJsonldAddPost | The new project_project_sectors resource

try {
    $result = $apiInstance->apiProjectProjectSectorsPost($project_project_sectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->apiProjectProjectSectorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_project_sectors_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldAddPost**](../Model/ProjectProjectSectorsJsonldAddPost.md)| The new project_project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ProjectProjectSectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectSectorApiFileUpload()`

```php
projectProjectSectorApiFileUpload($id, $project_project_sectors_jsonld): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a project_project_sectors resource.

Creates a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier
$project_project_sectors_jsonld = new \OpenAPI\Client\Model\ProjectProjectSectorsJsonld(); // \OpenAPI\Client\Model\ProjectProjectSectorsJsonld | The new project_project_sectors resource

try {
    $result = $apiInstance->projectProjectSectorApiFileUpload($id, $project_project_sectors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->projectProjectSectorApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |
| **project_project_sectors_jsonld** | [**\OpenAPI\Client\Model\ProjectProjectSectorsJsonld**](../Model/ProjectProjectSectorsJsonld.md)| The new project_project_sectors resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow**](../Model/ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectSectorDropDown()`

```php
projectProjectSectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $project, $project2, $sector, $sector2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\ProjectProjectSectorDropDown200Response
```

Retrieves the collection of project_project_sectors resources.

Retrieves the collection of project_project_sectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
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
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_hours = 'nb_hours_example'; // string | 
$nb_hours2 = array('nb_hours_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->projectProjectSectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $project, $project2, $sector, $sector2, $employee, $employee2, $search, $nb_hours, $nb_hours2, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->projectProjectSectorDropDown: ', $e->getMessage(), PHP_EOL;
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
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_hours** | **string**|  | [optional] |
| **nb_hours2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorDropDown200Response**](../Model/ProjectProjectSectorDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectSectorDuplicate()`

```php
projectProjectSectorDuplicate($id): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingList
```

Retrieves a project_project_sectors resource.

Retrieves a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier

try {
    $result = $apiInstance->projectProjectSectorDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->projectProjectSectorDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingList**](../Model/ProjectProjectSectorsJsonldProjectProjectSectorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectSectorFetchFiles()`

```php
projectProjectSectorFetchFiles($id): \OpenAPI\Client\Model\ProjectProjectSectorsJsonld
```

Retrieves a project_project_sectors resource.

Retrieves a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier

try {
    $result = $apiInstance->projectProjectSectorFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->projectProjectSectorFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonld**](../Model/ProjectProjectSectorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectSectorGetBySlug()`

```php
projectProjectSectorGetBySlug($slug): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a project_project_sectors resource.

Retrieves a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | project_project_sectors identifier

try {
    $result = $apiInstance->projectProjectSectorGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->projectProjectSectorGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| project_project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ProjectProjectSectorsJsonldProjectProjectSectorShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectSectorGetDeleteRelations()`

```php
projectProjectSectorGetDeleteRelations($id): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorRelations
```

Retrieves a project_project_sectors resource.

Retrieves a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier

try {
    $result = $apiInstance->projectProjectSectorGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->projectProjectSectorGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldProjectProjectSectorRelations**](../Model/ProjectProjectSectorsJsonldProjectProjectSectorRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectProjectSectorMetadata()`

```php
projectProjectSectorMetadata($id): \OpenAPI\Client\Model\ProjectProjectSectorsJsonldIdStandardMetadataFeeTaxCustomprojectProjectSectorMetadataTagTaggingListProjectProjectSectorRelationsTimestampable
```

Retrieves a project_project_sectors resource.

Retrieves a project_project_sectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectProjectSectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_project_sectors identifier

try {
    $result = $apiInstance->projectProjectSectorMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProjectSectorsApi->projectProjectSectorMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_project_sectors identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectProjectSectorsJsonldIdStandardMetadataFeeTaxCustomprojectProjectSectorMetadataTagTaggingListProjectProjectSectorRelationsTimestampable**](../Model/ProjectProjectSectorsJsonldIdStandardMetadataFeeTaxCustomprojectProjectSectorMetadataTagTaggingListProjectProjectSectorRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
