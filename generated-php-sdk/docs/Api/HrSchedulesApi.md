# OpenAPI\Client\HrSchedulesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiHrSchedulesGetCollection()**](HrSchedulesApi.md#apiHrSchedulesGetCollection) | **GET** /open-api/v3/hr_schedules | Retrieves the collection of hr_schedules resources. |
| [**apiHrSchedulesIdDelete()**](HrSchedulesApi.md#apiHrSchedulesIdDelete) | **DELETE** /open-api/v3/hr_schedules/{id} | Removes the hr_schedules resource. |
| [**apiHrSchedulesIdGet()**](HrSchedulesApi.md#apiHrSchedulesIdGet) | **GET** /open-api/v3/hr_schedules/{id} | Retrieves a hr_schedules resource. |
| [**apiHrSchedulesIdPut()**](HrSchedulesApi.md#apiHrSchedulesIdPut) | **PUT** /open-api/v3/hr_schedules/{id} | Replaces the hr_schedules resource. |
| [**apiHrSchedulesPost()**](HrSchedulesApi.md#apiHrSchedulesPost) | **POST** /open-api/v3/hr_schedules | Creates a hr_schedules resource. |
| [**hrScheduleApiCorporationAdd()**](HrSchedulesApi.md#hrScheduleApiCorporationAdd) | **POST** /open-api/v3/hr_schedules/{id}/corporation/add | Creates a hr_schedules resource. |
| [**hrScheduleApiCorporationRemove()**](HrSchedulesApi.md#hrScheduleApiCorporationRemove) | **POST** /open-api/v3/hr_schedules/{id}/corporation/remove | Creates a hr_schedules resource. |
| [**hrScheduleApiFileUpload()**](HrSchedulesApi.md#hrScheduleApiFileUpload) | **POST** /open-api/v3/hr_schedules/{id}/file/upload | Creates a hr_schedules resource. |
| [**hrScheduleDropDown()**](HrSchedulesApi.md#hrScheduleDropDown) | **GET** /open-api/v3/hr_schedules/dropdown/get | Retrieves the collection of hr_schedules resources. |
| [**hrScheduleDuplicate()**](HrSchedulesApi.md#hrScheduleDuplicate) | **GET** /open-api/v3/hr_schedules/duplicate/{id} | Retrieves a hr_schedules resource. |
| [**hrScheduleFetchFiles()**](HrSchedulesApi.md#hrScheduleFetchFiles) | **GET** /open-api/v3/hr_schedules/fetch_files/{id} | Retrieves a hr_schedules resource. |
| [**hrScheduleGetBySlug()**](HrSchedulesApi.md#hrScheduleGetBySlug) | **GET** /open-api/v3/hr_schedules/by_slug/{slug} | Retrieves a hr_schedules resource. |
| [**hrScheduleGetDeleteRelations()**](HrSchedulesApi.md#hrScheduleGetDeleteRelations) | **GET** /open-api/v3/hr_schedules/get_delete_relations/{id} | Retrieves a hr_schedules resource. |
| [**hrScheduleMetadata()**](HrSchedulesApi.md#hrScheduleMetadata) | **GET** /open-api/v3/hr_schedules/metadata/{id} | Retrieves a hr_schedules resource. |


## `apiHrSchedulesGetCollection()`

```php
apiHrSchedulesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $availability_type, $availability_type2, $scheduled_employee, $scheduled_employee2, $scheduler, $scheduler2, $project, $project2, $task, $task2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiHrSchedulesGetCollection200Response
```

Retrieves the collection of hr_schedules resources.

Retrieves the collection of hr_schedules resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$availability_type = 'availability_type_example'; // string | 
$availability_type2 = array('availability_type_example'); // string[] | 
$scheduled_employee = 'scheduled_employee_example'; // string | 
$scheduled_employee2 = array('scheduled_employee_example'); // string[] | 
$scheduler = 'scheduler_example'; // string | 
$scheduler2 = array('scheduler_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | hr_schedules slug_partial
$slug_start_with = 'slug_start_with_example'; // string | hr_schedules slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | hr_schedules slug_end_with
$id_partial = 'id_partial_example'; // string | hr_schedules id_partial
$id_start_with = 'id_start_with_example'; // string | hr_schedules id_start_with
$id_end_with = 'id_end_with_example'; // string | hr_schedules id_end_with

try {
    $result = $apiInstance->apiHrSchedulesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $availability_type, $availability_type2, $scheduled_employee, $scheduled_employee2, $scheduler, $scheduler2, $project, $project2, $task, $task2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->apiHrSchedulesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **availability_type** | **string**|  | [optional] |
| **availability_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scheduled_employee** | **string**|  | [optional] |
| **scheduled_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scheduler** | **string**|  | [optional] |
| **scheduler2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **slug_partial** | **string**| hr_schedules slug_partial | [optional] |
| **slug_start_with** | **string**| hr_schedules slug_start_with | [optional] |
| **slug_end_with** | **string**| hr_schedules slug_end_with | [optional] |
| **id_partial** | **string**| hr_schedules id_partial | [optional] |
| **id_start_with** | **string**| hr_schedules id_start_with | [optional] |
| **id_end_with** | **string**| hr_schedules id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiHrSchedulesGetCollection200Response**](../Model/ApiHrSchedulesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrSchedulesIdDelete()`

```php
apiHrSchedulesIdDelete($id)
```

Removes the hr_schedules resource.

Removes the hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier

try {
    $apiInstance->apiHrSchedulesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->apiHrSchedulesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |

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

## `apiHrSchedulesIdGet()`

```php
apiHrSchedulesIdGet($id): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_schedules resource.

Retrieves a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier

try {
    $result = $apiInstance->apiHrSchedulesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->apiHrSchedulesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrSchedulesIdPut()`

```php
apiHrSchedulesIdPut($id, $hr_schedules_jsonld_add_post): \OpenAPI\Client\Model\HrSchedulesJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Replaces the hr_schedules resource.

Replaces the hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier
$hr_schedules_jsonld_add_post = new \OpenAPI\Client\Model\HrSchedulesJsonldAddPost(); // \OpenAPI\Client\Model\HrSchedulesJsonldAddPost | The updated hr_schedules resource

try {
    $result = $apiInstance->apiHrSchedulesIdPut($id, $hr_schedules_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->apiHrSchedulesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |
| **hr_schedules_jsonld_add_post** | [**\OpenAPI\Client\Model\HrSchedulesJsonldAddPost**](../Model/HrSchedulesJsonldAddPost.md)| The updated hr_schedules resource | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/HrSchedulesJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrSchedulesPost()`

```php
apiHrSchedulesPost($hr_schedules_jsonld_add_post): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_schedules resource.

Creates a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hr_schedules_jsonld_add_post = new \OpenAPI\Client\Model\HrSchedulesJsonldAddPost(); // \OpenAPI\Client\Model\HrSchedulesJsonldAddPost | The new hr_schedules resource

try {
    $result = $apiInstance->apiHrSchedulesPost($hr_schedules_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->apiHrSchedulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hr_schedules_jsonld_add_post** | [**\OpenAPI\Client\Model\HrSchedulesJsonldAddPost**](../Model/HrSchedulesJsonldAddPost.md)| The new hr_schedules resource | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleApiCorporationAdd()`

```php
hrScheduleApiCorporationAdd($id, $hr_schedules_jsonld): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_schedules resource.

Creates a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier
$hr_schedules_jsonld = new \OpenAPI\Client\Model\HrSchedulesJsonld(); // \OpenAPI\Client\Model\HrSchedulesJsonld | The new hr_schedules resource

try {
    $result = $apiInstance->hrScheduleApiCorporationAdd($id, $hr_schedules_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |
| **hr_schedules_jsonld** | [**\OpenAPI\Client\Model\HrSchedulesJsonld**](../Model/HrSchedulesJsonld.md)| The new hr_schedules resource | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleApiCorporationRemove()`

```php
hrScheduleApiCorporationRemove($id, $hr_schedules_jsonld): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_schedules resource.

Creates a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier
$hr_schedules_jsonld = new \OpenAPI\Client\Model\HrSchedulesJsonld(); // \OpenAPI\Client\Model\HrSchedulesJsonld | The new hr_schedules resource

try {
    $result = $apiInstance->hrScheduleApiCorporationRemove($id, $hr_schedules_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |
| **hr_schedules_jsonld** | [**\OpenAPI\Client\Model\HrSchedulesJsonld**](../Model/HrSchedulesJsonld.md)| The new hr_schedules resource | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleApiFileUpload()`

```php
hrScheduleApiFileUpload($id, $hr_schedules_jsonld): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_schedules resource.

Creates a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier
$hr_schedules_jsonld = new \OpenAPI\Client\Model\HrSchedulesJsonld(); // \OpenAPI\Client\Model\HrSchedulesJsonld | The new hr_schedules resource

try {
    $result = $apiInstance->hrScheduleApiFileUpload($id, $hr_schedules_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |
| **hr_schedules_jsonld** | [**\OpenAPI\Client\Model\HrSchedulesJsonld**](../Model/HrSchedulesJsonld.md)| The new hr_schedules resource | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleDropDown()`

```php
hrScheduleDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $availability_type, $availability_type2, $scheduled_employee, $scheduled_employee2, $scheduler, $scheduler2, $project, $project2, $task, $task2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\HrScheduleDropDown200Response
```

Retrieves the collection of hr_schedules resources.

Retrieves the collection of hr_schedules resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$availability_type = 'availability_type_example'; // string | 
$availability_type2 = array('availability_type_example'); // string[] | 
$scheduled_employee = 'scheduled_employee_example'; // string | 
$scheduled_employee2 = array('scheduled_employee_example'); // string[] | 
$scheduler = 'scheduler_example'; // string | 
$scheduler2 = array('scheduler_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | hr_schedules slug_partial
$slug_start_with = 'slug_start_with_example'; // string | hr_schedules slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | hr_schedules slug_end_with
$id_partial = 'id_partial_example'; // string | hr_schedules id_partial
$id_start_with = 'id_start_with_example'; // string | hr_schedules id_start_with
$id_end_with = 'id_end_with_example'; // string | hr_schedules id_end_with

try {
    $result = $apiInstance->hrScheduleDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $id, $id2, $slug, $slug2, $availability_type, $availability_type2, $scheduled_employee, $scheduled_employee2, $scheduler, $scheduler2, $project, $project2, $task, $task2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **availability_type** | **string**|  | [optional] |
| **availability_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scheduled_employee** | **string**|  | [optional] |
| **scheduled_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scheduler** | **string**|  | [optional] |
| **scheduler2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **slug_partial** | **string**| hr_schedules slug_partial | [optional] |
| **slug_start_with** | **string**| hr_schedules slug_start_with | [optional] |
| **slug_end_with** | **string**| hr_schedules slug_end_with | [optional] |
| **id_partial** | **string**| hr_schedules id_partial | [optional] |
| **id_start_with** | **string**| hr_schedules id_start_with | [optional] |
| **id_end_with** | **string**| hr_schedules id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\HrScheduleDropDown200Response**](../Model/HrScheduleDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleDuplicate()`

```php
hrScheduleDuplicate($id): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_schedules resource.

Retrieves a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier

try {
    $result = $apiInstance->hrScheduleDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleFetchFiles()`

```php
hrScheduleFetchFiles($id): \OpenAPI\Client\Model\HrSchedulesJsonld
```

Retrieves a hr_schedules resource.

Retrieves a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier

try {
    $result = $apiInstance->hrScheduleFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonld**](../Model/HrSchedulesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleGetBySlug()`

```php
hrScheduleGetBySlug($slug): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_schedules resource.

Retrieves a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | hr_schedules identifier

try {
    $result = $apiInstance->hrScheduleGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| hr_schedules identifier | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrSchedulesJsonldHrScheduleShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleGetDeleteRelations()`

```php
hrScheduleGetDeleteRelations($id): \OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleRelations
```

Retrieves a hr_schedules resource.

Retrieves a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier

try {
    $result = $apiInstance->hrScheduleGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldHrScheduleRelations**](../Model/HrSchedulesJsonldHrScheduleRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrScheduleMetadata()`

```php
hrScheduleMetadata($id): \OpenAPI\Client\Model\HrSchedulesJsonldIdStandardMetadataHrScheduleMetadataTagTaggingListHrScheduleRelationsTimestampable
```

Retrieves a hr_schedules resource.

Retrieves a hr_schedules resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_schedules identifier

try {
    $result = $apiInstance->hrScheduleMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrSchedulesApi->hrScheduleMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_schedules identifier | |

### Return type

[**\OpenAPI\Client\Model\HrSchedulesJsonldIdStandardMetadataHrScheduleMetadataTagTaggingListHrScheduleRelationsTimestampable**](../Model/HrSchedulesJsonldIdStandardMetadataHrScheduleMetadataTagTaggingListHrScheduleRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
