# OpenAPI\Client\ImportJobsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiImportJobsGetCollection()**](ImportJobsApi.md#apiImportJobsGetCollection) | **GET** /open-api/v3/import_jobs | Retrieves the collection of import_jobs resources. |
| [**apiImportJobsIdDelete()**](ImportJobsApi.md#apiImportJobsIdDelete) | **DELETE** /open-api/v3/import_jobs/{id} | Removes the import_jobs resource. |
| [**apiImportJobsIdGet()**](ImportJobsApi.md#apiImportJobsIdGet) | **GET** /open-api/v3/import_jobs/{id} | Retrieves a import_jobs resource. |
| [**apiImportJobsIdPut()**](ImportJobsApi.md#apiImportJobsIdPut) | **PUT** /open-api/v3/import_jobs/{id} | Replaces the import_jobs resource. |
| [**apiImportJobsPost()**](ImportJobsApi.md#apiImportJobsPost) | **POST** /open-api/v3/import_jobs | Creates a import_jobs resource. |
| [**importJobApiEntitySave()**](ImportJobsApi.md#importJobApiEntitySave) | **POST** /open-api/v3/import_jobs/entity/{module}/{objectName}/save | Creates a import_jobs resource. |
| [**importJobApiExecute()**](ImportJobsApi.md#importJobApiExecute) | **POST** /open-api/v3/import_jobs/{id}/execute | Creates a import_jobs resource. |
| [**importJobApiFileUpload()**](ImportJobsApi.md#importJobApiFileUpload) | **POST** /open-api/v3/import_jobs/{id}/file/upload | Creates a import_jobs resource. |
| [**importJobDropDown()**](ImportJobsApi.md#importJobDropDown) | **GET** /open-api/v3/import_jobs/dropdown/get | Retrieves the collection of import_jobs resources. |
| [**importJobDuplicate()**](ImportJobsApi.md#importJobDuplicate) | **GET** /open-api/v3/import_jobs/duplicate/{id} | Retrieves a import_jobs resource. |
| [**importJobFetchFiles()**](ImportJobsApi.md#importJobFetchFiles) | **GET** /open-api/v3/import_jobs/fetch_files/{id} | Retrieves a import_jobs resource. |
| [**importJobGetBySlug()**](ImportJobsApi.md#importJobGetBySlug) | **GET** /open-api/v3/import_jobs/by_slug/{slug} | Retrieves a import_jobs resource. |
| [**importJobGetDeleteRelations()**](ImportJobsApi.md#importJobGetDeleteRelations) | **GET** /open-api/v3/import_jobs/get_delete_relations/{id} | Retrieves a import_jobs resource. |
| [**importJobMetadata()**](ImportJobsApi.md#importJobMetadata) | **GET** /open-api/v3/import_jobs/metadata/{id} | Retrieves a import_jobs resource. |


## `apiImportJobsGetCollection()`

```php
apiImportJobsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $job_start_date_before, $job_start_date_strictly_before, $job_start_date_after, $job_start_date_strictly_after, $job_end_date_before, $job_end_date_strictly_before, $job_end_date_after, $job_end_date_strictly_after, $id, $id2, $original_file_name, $file_name, $file_path, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $order_job_start_date, $order_job_end_date, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiImportJobsGetCollection200Response
```

Retrieves the collection of import_jobs resources.

Retrieves the collection of import_jobs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
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
$job_start_date_before = 'job_start_date_before_example'; // string | 
$job_start_date_strictly_before = 'job_start_date_strictly_before_example'; // string | 
$job_start_date_after = 'job_start_date_after_example'; // string | 
$job_start_date_strictly_after = 'job_start_date_strictly_after_example'; // string | 
$job_end_date_before = 'job_end_date_before_example'; // string | 
$job_end_date_strictly_before = 'job_end_date_strictly_before_example'; // string | 
$job_end_date_after = 'job_end_date_after_example'; // string | 
$job_end_date_strictly_after = 'job_end_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$original_file_name = 'original_file_name_example'; // string | 
$file_name = 'file_name_example'; // string | 
$file_path = 'file_path_example'; // string | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_job_start_date = 'order_job_start_date_example'; // string | 
$order_job_end_date = 'order_job_end_date_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | import_jobs slug_partial
$slug_start_with = 'slug_start_with_example'; // string | import_jobs slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | import_jobs slug_end_with
$id_partial = 'id_partial_example'; // string | import_jobs id_partial
$id_start_with = 'id_start_with_example'; // string | import_jobs id_start_with
$id_end_with = 'id_end_with_example'; // string | import_jobs id_end_with

try {
    $result = $apiInstance->apiImportJobsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $job_start_date_before, $job_start_date_strictly_before, $job_start_date_after, $job_start_date_strictly_after, $job_end_date_before, $job_end_date_strictly_before, $job_end_date_after, $job_end_date_strictly_after, $id, $id2, $original_file_name, $file_name, $file_path, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $order_job_start_date, $order_job_end_date, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->apiImportJobsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **job_start_date_before** | **string**|  | [optional] |
| **job_start_date_strictly_before** | **string**|  | [optional] |
| **job_start_date_after** | **string**|  | [optional] |
| **job_start_date_strictly_after** | **string**|  | [optional] |
| **job_end_date_before** | **string**|  | [optional] |
| **job_end_date_strictly_before** | **string**|  | [optional] |
| **job_end_date_after** | **string**|  | [optional] |
| **job_end_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **original_file_name** | **string**|  | [optional] |
| **file_name** | **string**|  | [optional] |
| **file_path** | **string**|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_job_start_date** | **string**|  | [optional] |
| **order_job_end_date** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| import_jobs slug_partial | [optional] |
| **slug_start_with** | **string**| import_jobs slug_start_with | [optional] |
| **slug_end_with** | **string**| import_jobs slug_end_with | [optional] |
| **id_partial** | **string**| import_jobs id_partial | [optional] |
| **id_start_with** | **string**| import_jobs id_start_with | [optional] |
| **id_end_with** | **string**| import_jobs id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiImportJobsGetCollection200Response**](../Model/ApiImportJobsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiImportJobsIdDelete()`

```php
apiImportJobsIdDelete($id)
```

Removes the import_jobs resource.

Removes the import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier

try {
    $apiInstance->apiImportJobsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->apiImportJobsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |

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

## `apiImportJobsIdGet()`

```php
apiImportJobsIdGet($id): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a import_jobs resource.

Retrieves a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier

try {
    $result = $apiInstance->apiImportJobsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->apiImportJobsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiImportJobsIdPut()`

```php
apiImportJobsIdPut($id, $import_jobs_jsonld_add_post): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingList
```

Replaces the import_jobs resource.

Replaces the import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier
$import_jobs_jsonld_add_post = new \OpenAPI\Client\Model\ImportJobsJsonldAddPost(); // \OpenAPI\Client\Model\ImportJobsJsonldAddPost | The updated import_jobs resource

try {
    $result = $apiInstance->apiImportJobsIdPut($id, $import_jobs_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->apiImportJobsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |
| **import_jobs_jsonld_add_post** | [**\OpenAPI\Client\Model\ImportJobsJsonldAddPost**](../Model/ImportJobsJsonldAddPost.md)| The updated import_jobs resource | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingList**](../Model/ImportJobsJsonldImportJobShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiImportJobsPost()`

```php
apiImportJobsPost($import_jobs_jsonld_add_post): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a import_jobs resource.

Creates a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_jobs_jsonld_add_post = new \OpenAPI\Client\Model\ImportJobsJsonldAddPost(); // \OpenAPI\Client\Model\ImportJobsJsonldAddPost | The new import_jobs resource

try {
    $result = $apiInstance->apiImportJobsPost($import_jobs_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->apiImportJobsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_jobs_jsonld_add_post** | [**\OpenAPI\Client\Model\ImportJobsJsonldAddPost**](../Model/ImportJobsJsonldAddPost.md)| The new import_jobs resource | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobApiEntitySave()`

```php
importJobApiEntitySave($module, $object_name, $import_jobs_jsonld): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a import_jobs resource.

Creates a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$module = 'module_example'; // string | import_jobs identifier
$object_name = 'object_name_example'; // string | import_jobs identifier
$import_jobs_jsonld = new \OpenAPI\Client\Model\ImportJobsJsonld(); // \OpenAPI\Client\Model\ImportJobsJsonld | The new import_jobs resource

try {
    $result = $apiInstance->importJobApiEntitySave($module, $object_name, $import_jobs_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobApiEntitySave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **module** | **string**| import_jobs identifier | |
| **object_name** | **string**| import_jobs identifier | |
| **import_jobs_jsonld** | [**\OpenAPI\Client\Model\ImportJobsJsonld**](../Model/ImportJobsJsonld.md)| The new import_jobs resource | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ImportJobsJsonldImportJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobApiExecute()`

```php
importJobApiExecute($id, $import_jobs_jsonld): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingListStandardShow
```

Creates a import_jobs resource.

Creates a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier
$import_jobs_jsonld = new \OpenAPI\Client\Model\ImportJobsJsonld(); // \OpenAPI\Client\Model\ImportJobsJsonld | The new import_jobs resource

try {
    $result = $apiInstance->importJobApiExecute($id, $import_jobs_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobApiExecute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |
| **import_jobs_jsonld** | [**\OpenAPI\Client\Model\ImportJobsJsonld**](../Model/ImportJobsJsonld.md)| The new import_jobs resource | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingListStandardShow**](../Model/ImportJobsJsonldImportJobShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobApiFileUpload()`

```php
importJobApiFileUpload($id, $import_jobs_jsonld): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingListStandardShow
```

Creates a import_jobs resource.

Creates a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier
$import_jobs_jsonld = new \OpenAPI\Client\Model\ImportJobsJsonld(); // \OpenAPI\Client\Model\ImportJobsJsonld | The new import_jobs resource

try {
    $result = $apiInstance->importJobApiFileUpload($id, $import_jobs_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |
| **import_jobs_jsonld** | [**\OpenAPI\Client\Model\ImportJobsJsonld**](../Model/ImportJobsJsonld.md)| The new import_jobs resource | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingListStandardShow**](../Model/ImportJobsJsonldImportJobShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobDropDown()`

```php
importJobDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $job_start_date_before, $job_start_date_strictly_before, $job_start_date_after, $job_start_date_strictly_after, $job_end_date_before, $job_end_date_strictly_before, $job_end_date_after, $job_end_date_strictly_after, $id, $id2, $original_file_name, $file_name, $file_path, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $order_job_start_date, $order_job_end_date, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag): \OpenAPI\Client\Model\ImportJobDropDown200Response
```

Retrieves the collection of import_jobs resources.

Retrieves the collection of import_jobs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
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
$job_start_date_before = 'job_start_date_before_example'; // string | 
$job_start_date_strictly_before = 'job_start_date_strictly_before_example'; // string | 
$job_start_date_after = 'job_start_date_after_example'; // string | 
$job_start_date_strictly_after = 'job_start_date_strictly_after_example'; // string | 
$job_end_date_before = 'job_end_date_before_example'; // string | 
$job_end_date_strictly_before = 'job_end_date_strictly_before_example'; // string | 
$job_end_date_after = 'job_end_date_after_example'; // string | 
$job_end_date_strictly_after = 'job_end_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$original_file_name = 'original_file_name_example'; // string | 
$file_name = 'file_name_example'; // string | 
$file_path = 'file_path_example'; // string | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_job_start_date = 'order_job_start_date_example'; // string | 
$order_job_end_date = 'order_job_end_date_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->importJobDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $job_start_date_before, $job_start_date_strictly_before, $job_start_date_after, $job_start_date_strictly_after, $job_end_date_before, $job_end_date_strictly_before, $job_end_date_after, $job_end_date_strictly_after, $id, $id2, $original_file_name, $file_name, $file_path, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $order_job_start_date, $order_job_end_date, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobDropDown: ', $e->getMessage(), PHP_EOL;
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
| **job_start_date_before** | **string**|  | [optional] |
| **job_start_date_strictly_before** | **string**|  | [optional] |
| **job_start_date_after** | **string**|  | [optional] |
| **job_start_date_strictly_after** | **string**|  | [optional] |
| **job_end_date_before** | **string**|  | [optional] |
| **job_end_date_strictly_before** | **string**|  | [optional] |
| **job_end_date_after** | **string**|  | [optional] |
| **job_end_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **original_file_name** | **string**|  | [optional] |
| **file_name** | **string**|  | [optional] |
| **file_path** | **string**|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_job_start_date** | **string**|  | [optional] |
| **order_job_end_date** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ImportJobDropDown200Response**](../Model/ImportJobDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobDuplicate()`

```php
importJobDuplicate($id): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingList
```

Retrieves a import_jobs resource.

Retrieves a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier

try {
    $result = $apiInstance->importJobDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdTimestampableTagTaggingList**](../Model/ImportJobsJsonldImportJobShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobFetchFiles()`

```php
importJobFetchFiles($id): \OpenAPI\Client\Model\ImportJobsJsonld
```

Retrieves a import_jobs resource.

Retrieves a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier

try {
    $result = $apiInstance->importJobFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonld**](../Model/ImportJobsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobGetBySlug()`

```php
importJobGetBySlug($slug): \OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a import_jobs resource.

Retrieves a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | import_jobs identifier

try {
    $result = $apiInstance->importJobGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| import_jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ImportJobsJsonldImportJobShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobGetDeleteRelations()`

```php
importJobGetDeleteRelations($id): \OpenAPI\Client\Model\ImportJobsJsonldImportJobRelations
```

Retrieves a import_jobs resource.

Retrieves a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier

try {
    $result = $apiInstance->importJobGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldImportJobRelations**](../Model/ImportJobsJsonldImportJobRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobMetadata()`

```php
importJobMetadata($id): \OpenAPI\Client\Model\ImportJobsJsonldIdStandardMetadataImportJobMetadataTagTaggingListImportJobRelationsTimestampable
```

Retrieves a import_jobs resource.

Retrieves a import_jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImportJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | import_jobs identifier

try {
    $result = $apiInstance->importJobMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportJobsApi->importJobMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| import_jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\ImportJobsJsonldIdStandardMetadataImportJobMetadataTagTaggingListImportJobRelationsTimestampable**](../Model/ImportJobsJsonldIdStandardMetadataImportJobMetadataTagTaggingListImportJobRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
