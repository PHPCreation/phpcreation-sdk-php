# OpenAPI\Client\JobsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiJobsGetCollection()**](JobsApi.md#apiJobsGetCollection) | **GET** /open-api/v3/jobs | Retrieves the collection of jobs resources. |
| [**apiJobsIdDelete()**](JobsApi.md#apiJobsIdDelete) | **DELETE** /open-api/v3/jobs/{id} | Removes the jobs resource. |
| [**apiJobsIdGet()**](JobsApi.md#apiJobsIdGet) | **GET** /open-api/v3/jobs/{id} | Retrieves a jobs resource. |
| [**apiJobsIdPut()**](JobsApi.md#apiJobsIdPut) | **PUT** /open-api/v3/jobs/{id} | Replaces the jobs resource. |
| [**apiJobsPost()**](JobsApi.md#apiJobsPost) | **POST** /open-api/v3/jobs | Creates a jobs resource. |
| [**jobApiFileUpload()**](JobsApi.md#jobApiFileUpload) | **POST** /open-api/v3/jobs/{id}/file/upload | Creates a jobs resource. |
| [**jobDropDown()**](JobsApi.md#jobDropDown) | **GET** /open-api/v3/jobs/dropdown/get | Retrieves the collection of jobs resources. |
| [**jobDuplicate()**](JobsApi.md#jobDuplicate) | **GET** /open-api/v3/jobs/duplicate/{id} | Retrieves a jobs resource. |
| [**jobFetchFiles()**](JobsApi.md#jobFetchFiles) | **GET** /open-api/v3/jobs/fetch_files/{id} | Retrieves a jobs resource. |
| [**jobGetBySlug()**](JobsApi.md#jobGetBySlug) | **GET** /open-api/v3/jobs/by_slug/{slug} | Retrieves a jobs resource. |
| [**jobGetDeleteRelations()**](JobsApi.md#jobGetDeleteRelations) | **GET** /open-api/v3/jobs/get_delete_relations/{id} | Retrieves a jobs resource. |
| [**jobMetadata()**](JobsApi.md#jobMetadata) | **GET** /open-api/v3/jobs/metadata/{id} | Retrieves a jobs resource. |


## `apiJobsGetCollection()`

```php
apiJobsGetCollection($page, $items_per_page, $finished_execution_date_before, $finished_execution_date_strictly_before, $finished_execution_date_after, $finished_execution_date_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $job_type, $job_type2, $search, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $chargeable_amount_range): \OpenAPI\Client\Model\ApiJobsGetCollection200Response
```

Retrieves the collection of jobs resources.

Retrieves the collection of jobs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$finished_execution_date_before = 'finished_execution_date_before_example'; // string | 
$finished_execution_date_strictly_before = 'finished_execution_date_strictly_before_example'; // string | 
$finished_execution_date_after = 'finished_execution_date_after_example'; // string | 
$finished_execution_date_strictly_after = 'finished_execution_date_strictly_after_example'; // string | 
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
$job_type = 'job_type_example'; // string | 
$job_type2 = array('job_type_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | jobs slug_partial
$slug_start_with = 'slug_start_with_example'; // string | jobs slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | jobs slug_end_with
$id_partial = 'id_partial_example'; // string | jobs id_partial
$id_start_with = 'id_start_with_example'; // string | jobs id_start_with
$id_end_with = 'id_end_with_example'; // string | jobs id_end_with
$chargeable_amount_range = 'chargeable_amount_range_example'; // string | jobs chargeableAmount_range

try {
    $result = $apiInstance->apiJobsGetCollection($page, $items_per_page, $finished_execution_date_before, $finished_execution_date_strictly_before, $finished_execution_date_after, $finished_execution_date_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $job_type, $job_type2, $search, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $chargeable_amount_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->apiJobsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **finished_execution_date_before** | **string**|  | [optional] |
| **finished_execution_date_strictly_before** | **string**|  | [optional] |
| **finished_execution_date_after** | **string**|  | [optional] |
| **finished_execution_date_strictly_after** | **string**|  | [optional] |
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
| **job_type** | **string**|  | [optional] |
| **job_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| jobs slug_partial | [optional] |
| **slug_start_with** | **string**| jobs slug_start_with | [optional] |
| **slug_end_with** | **string**| jobs slug_end_with | [optional] |
| **id_partial** | **string**| jobs id_partial | [optional] |
| **id_start_with** | **string**| jobs id_start_with | [optional] |
| **id_end_with** | **string**| jobs id_end_with | [optional] |
| **chargeable_amount_range** | **string**| jobs chargeableAmount_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiJobsGetCollection200Response**](../Model/ApiJobsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiJobsIdDelete()`

```php
apiJobsIdDelete($id)
```

Removes the jobs resource.

Removes the jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier

try {
    $apiInstance->apiJobsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->apiJobsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |

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

## `apiJobsIdGet()`

```php
apiJobsIdGet($id): \OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a jobs resource.

Retrieves a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier

try {
    $result = $apiInstance->apiJobsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->apiJobsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiJobsIdPut()`

```php
apiJobsIdPut($id, $jobs_jsonld_add_post): \OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the jobs resource.

Replaces the jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier
$jobs_jsonld_add_post = new \OpenAPI\Client\Model\JobsJsonldAddPost(); // \OpenAPI\Client\Model\JobsJsonldAddPost | The updated jobs resource

try {
    $result = $apiInstance->apiJobsIdPut($id, $jobs_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->apiJobsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |
| **jobs_jsonld_add_post** | [**\OpenAPI\Client\Model\JobsJsonldAddPost**](../Model/JobsJsonldAddPost.md)| The updated jobs resource | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiJobsPost()`

```php
apiJobsPost($jobs_jsonld_add_post): \OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a jobs resource.

Creates a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobs_jsonld_add_post = new \OpenAPI\Client\Model\JobsJsonldAddPost(); // \OpenAPI\Client\Model\JobsJsonldAddPost | The new jobs resource

try {
    $result = $apiInstance->apiJobsPost($jobs_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->apiJobsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobs_jsonld_add_post** | [**\OpenAPI\Client\Model\JobsJsonldAddPost**](../Model/JobsJsonldAddPost.md)| The new jobs resource | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobApiFileUpload()`

```php
jobApiFileUpload($id, $jobs_jsonld): \OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a jobs resource.

Creates a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier
$jobs_jsonld = new \OpenAPI\Client\Model\JobsJsonld(); // \OpenAPI\Client\Model\JobsJsonld | The new jobs resource

try {
    $result = $apiInstance->jobApiFileUpload($id, $jobs_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |
| **jobs_jsonld** | [**\OpenAPI\Client\Model\JobsJsonld**](../Model/JobsJsonld.md)| The new jobs resource | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobDropDown()`

```php
jobDropDown($page, $items_per_page, $finished_execution_date_before, $finished_execution_date_strictly_before, $finished_execution_date_after, $finished_execution_date_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $job_type, $job_type2, $search, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $chargeable_amount_range): \OpenAPI\Client\Model\JobDropDown200Response
```

Retrieves the collection of jobs resources.

Retrieves the collection of jobs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$finished_execution_date_before = 'finished_execution_date_before_example'; // string | 
$finished_execution_date_strictly_before = 'finished_execution_date_strictly_before_example'; // string | 
$finished_execution_date_after = 'finished_execution_date_after_example'; // string | 
$finished_execution_date_strictly_after = 'finished_execution_date_strictly_after_example'; // string | 
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
$job_type = 'job_type_example'; // string | 
$job_type2 = array('job_type_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | jobs slug_partial
$slug_start_with = 'slug_start_with_example'; // string | jobs slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | jobs slug_end_with
$id_partial = 'id_partial_example'; // string | jobs id_partial
$id_start_with = 'id_start_with_example'; // string | jobs id_start_with
$id_end_with = 'id_end_with_example'; // string | jobs id_end_with
$chargeable_amount_range = 'chargeable_amount_range_example'; // string | jobs chargeableAmount_range

try {
    $result = $apiInstance->jobDropDown($page, $items_per_page, $finished_execution_date_before, $finished_execution_date_strictly_before, $finished_execution_date_after, $finished_execution_date_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $job_type, $job_type2, $search, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $chargeable_amount_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **finished_execution_date_before** | **string**|  | [optional] |
| **finished_execution_date_strictly_before** | **string**|  | [optional] |
| **finished_execution_date_after** | **string**|  | [optional] |
| **finished_execution_date_strictly_after** | **string**|  | [optional] |
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
| **job_type** | **string**|  | [optional] |
| **job_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| jobs slug_partial | [optional] |
| **slug_start_with** | **string**| jobs slug_start_with | [optional] |
| **slug_end_with** | **string**| jobs slug_end_with | [optional] |
| **id_partial** | **string**| jobs id_partial | [optional] |
| **id_start_with** | **string**| jobs id_start_with | [optional] |
| **id_end_with** | **string**| jobs id_end_with | [optional] |
| **chargeable_amount_range** | **string**| jobs chargeableAmount_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobDropDown200Response**](../Model/JobDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobDuplicate()`

```php
jobDuplicate($id): \OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a jobs resource.

Retrieves a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier

try {
    $result = $apiInstance->jobDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobFetchFiles()`

```php
jobFetchFiles($id): \OpenAPI\Client\Model\JobsJsonld
```

Retrieves a jobs resource.

Retrieves a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier

try {
    $result = $apiInstance->jobFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonld**](../Model/JobsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobGetBySlug()`

```php
jobGetBySlug($slug): \OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a jobs resource.

Retrieves a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | jobs identifier

try {
    $result = $apiInstance->jobGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/JobsJsonldJobShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobGetDeleteRelations()`

```php
jobGetDeleteRelations($id): \OpenAPI\Client\Model\JobsJsonldJobRelations
```

Retrieves a jobs resource.

Retrieves a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier

try {
    $result = $apiInstance->jobGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldJobRelations**](../Model/JobsJsonldJobRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobMetadata()`

```php
jobMetadata($id): \OpenAPI\Client\Model\JobsJsonldIdStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a jobs resource.

Retrieves a jobs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | jobs identifier

try {
    $result = $apiInstance->jobMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| jobs identifier | |

### Return type

[**\OpenAPI\Client\Model\JobsJsonldIdStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/JobsJsonldIdStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
