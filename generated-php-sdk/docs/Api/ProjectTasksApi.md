# OpenAPI\Client\ProjectTasksApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProjectTasksGetCollection()**](ProjectTasksApi.md#apiProjectTasksGetCollection) | **GET** /open-api/v3/project_tasks | Retrieves the collection of project_tasks resources. |
| [**apiProjectTasksIdDelete()**](ProjectTasksApi.md#apiProjectTasksIdDelete) | **DELETE** /open-api/v3/project_tasks/{id} | Removes the project_tasks resource. |
| [**apiProjectTasksIdGet()**](ProjectTasksApi.md#apiProjectTasksIdGet) | **GET** /open-api/v3/project_tasks/{id} | Retrieves a project_tasks resource. |
| [**apiProjectTasksIdPut()**](ProjectTasksApi.md#apiProjectTasksIdPut) | **PUT** /open-api/v3/project_tasks/{id} | Replaces the project_tasks resource. |
| [**apiProjectTasksPost()**](ProjectTasksApi.md#apiProjectTasksPost) | **POST** /open-api/v3/project_tasks | Creates a project_tasks resource. |
| [**projectTaskApiCorporationAdd()**](ProjectTasksApi.md#projectTaskApiCorporationAdd) | **POST** /open-api/v3/project_tasks/{id}/corporation/add | Creates a project_tasks resource. |
| [**projectTaskApiCorporationRemove()**](ProjectTasksApi.md#projectTaskApiCorporationRemove) | **POST** /open-api/v3/project_tasks/{id}/corporation/remove | Creates a project_tasks resource. |
| [**projectTaskApiFileUpload()**](ProjectTasksApi.md#projectTaskApiFileUpload) | **POST** /open-api/v3/project_tasks/{id}/file/upload | Creates a project_tasks resource. |
| [**projectTaskDropDown()**](ProjectTasksApi.md#projectTaskDropDown) | **GET** /open-api/v3/project_tasks/dropdown/get | Retrieves the collection of project_tasks resources. |
| [**projectTaskDuplicate()**](ProjectTasksApi.md#projectTaskDuplicate) | **GET** /open-api/v3/project_tasks/duplicate/{id} | Retrieves a project_tasks resource. |
| [**projectTaskFetchFiles()**](ProjectTasksApi.md#projectTaskFetchFiles) | **GET** /open-api/v3/project_tasks/fetch_files/{id} | Retrieves a project_tasks resource. |
| [**projectTaskGetBySlug()**](ProjectTasksApi.md#projectTaskGetBySlug) | **GET** /open-api/v3/project_tasks/by_slug/{slug} | Retrieves a project_tasks resource. |
| [**projectTaskGetDeleteRelations()**](ProjectTasksApi.md#projectTaskGetDeleteRelations) | **GET** /open-api/v3/project_tasks/get_delete_relations/{id} | Retrieves a project_tasks resource. |
| [**projectTaskManagerListing()**](ProjectTasksApi.md#projectTaskManagerListing) | **GET** /open-api/v3/project_tasks/task_manager/listing | Retrieves the collection of project_tasks resources. |
| [**projectTaskManagerPunch()**](ProjectTasksApi.md#projectTaskManagerPunch) | **POST** /open-api/v3/project_tasks/{id}/task_manager/punch | Creates a project_tasks resource. |
| [**projectTaskMetadata()**](ProjectTasksApi.md#projectTaskMetadata) | **GET** /open-api/v3/project_tasks/metadata/{id} | Retrieves a project_tasks resource. |
| [**projectTaskTimesheets()**](ProjectTasksApi.md#projectTaskTimesheets) | **GET** /open-api/v3/project_tasks/{id}/timesheets | Retrieves a project_tasks resource. |


## `apiProjectTasksGetCollection()`

```php
apiProjectTasksGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_created_before, $date_created_strictly_before, $date_created_after, $date_created_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_completed_before, $date_completed_strictly_before, $date_completed_after, $date_completed_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $status, $status2, $priority, $priority2, $product, $product2, $project, $project2, $sender, $sender2, $receiver, $receiver2, $sector, $sector2, $search, $completed_time, $completed_time2, $product_quantity, $product_quantity2, $estimated_time, $estimated_time2, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $order_date_created, $order_date_start, $order_date_completed, $order_deadline, $order_completed_time, $order_product_quantity, $order_estimated_time, $order_cost, $order_priority_priority, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $completed_time_range, $product_quantity_range, $estimated_time_range, $cost_range): \OpenAPI\Client\Model\ApiProjectTasksGetCollection200Response
```

Retrieves the collection of project_tasks resources.

Retrieves the collection of project_tasks resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
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
$date_created_before = 'date_created_before_example'; // string | 
$date_created_strictly_before = 'date_created_strictly_before_example'; // string | 
$date_created_after = 'date_created_after_example'; // string | 
$date_created_strictly_after = 'date_created_strictly_after_example'; // string | 
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_completed_before = 'date_completed_before_example'; // string | 
$date_completed_strictly_before = 'date_completed_strictly_before_example'; // string | 
$date_completed_after = 'date_completed_after_example'; // string | 
$date_completed_strictly_after = 'date_completed_strictly_after_example'; // string | 
$deadline_before = 'deadline_before_example'; // string | 
$deadline_strictly_before = 'deadline_strictly_before_example'; // string | 
$deadline_after = 'deadline_after_example'; // string | 
$deadline_strictly_after = 'deadline_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$priority = 'priority_example'; // string | 
$priority2 = array('priority_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$sender = 'sender_example'; // string | 
$sender2 = array('sender_example'); // string[] | 
$receiver = 'receiver_example'; // string | 
$receiver2 = array('receiver_example'); // string[] | 
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$search = 'search_example'; // string | 
$completed_time = 'completed_time_example'; // string | 
$completed_time2 = array('completed_time_example'); // string[] | 
$product_quantity = 56; // int | 
$product_quantity2 = array(56); // int[] | 
$estimated_time = 'estimated_time_example'; // string | 
$estimated_time2 = array('estimated_time_example'); // string[] | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_created = 'order_date_created_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_completed = 'order_date_completed_example'; // string | 
$order_deadline = 'order_deadline_example'; // string | 
$order_completed_time = 'order_completed_time_example'; // string | 
$order_product_quantity = 'order_product_quantity_example'; // string | 
$order_estimated_time = 'order_estimated_time_example'; // string | 
$order_cost = 'order_cost_example'; // string | 
$order_priority_priority = 'order_priority_priority_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | project_tasks slug_partial
$slug_start_with = 'slug_start_with_example'; // string | project_tasks slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | project_tasks slug_end_with
$id_partial = 'id_partial_example'; // string | project_tasks id_partial
$id_start_with = 'id_start_with_example'; // string | project_tasks id_start_with
$id_end_with = 'id_end_with_example'; // string | project_tasks id_end_with
$completed_time_range = 'completed_time_range_example'; // string | project_tasks completedTime_range
$product_quantity_range = 'product_quantity_range_example'; // string | project_tasks productQuantity_range
$estimated_time_range = 'estimated_time_range_example'; // string | project_tasks estimatedTime_range
$cost_range = 'cost_range_example'; // string | project_tasks cost_range

try {
    $result = $apiInstance->apiProjectTasksGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_created_before, $date_created_strictly_before, $date_created_after, $date_created_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_completed_before, $date_completed_strictly_before, $date_completed_after, $date_completed_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $status, $status2, $priority, $priority2, $product, $product2, $project, $project2, $sender, $sender2, $receiver, $receiver2, $sector, $sector2, $search, $completed_time, $completed_time2, $product_quantity, $product_quantity2, $estimated_time, $estimated_time2, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $order_date_created, $order_date_start, $order_date_completed, $order_deadline, $order_completed_time, $order_product_quantity, $order_estimated_time, $order_cost, $order_priority_priority, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $completed_time_range, $product_quantity_range, $estimated_time_range, $cost_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->apiProjectTasksGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_created_before** | **string**|  | [optional] |
| **date_created_strictly_before** | **string**|  | [optional] |
| **date_created_after** | **string**|  | [optional] |
| **date_created_strictly_after** | **string**|  | [optional] |
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_completed_before** | **string**|  | [optional] |
| **date_completed_strictly_before** | **string**|  | [optional] |
| **date_completed_after** | **string**|  | [optional] |
| **date_completed_strictly_after** | **string**|  | [optional] |
| **deadline_before** | **string**|  | [optional] |
| **deadline_strictly_before** | **string**|  | [optional] |
| **deadline_after** | **string**|  | [optional] |
| **deadline_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **string**|  | [optional] |
| **priority2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sender** | **string**|  | [optional] |
| **sender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **receiver** | **string**|  | [optional] |
| **receiver2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **completed_time** | **string**|  | [optional] |
| **completed_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product_quantity** | **int**|  | [optional] |
| **product_quantity2** | [**int[]**](../Model/int.md)|  | [optional] |
| **estimated_time** | **string**|  | [optional] |
| **estimated_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_created** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_completed** | **string**|  | [optional] |
| **order_deadline** | **string**|  | [optional] |
| **order_completed_time** | **string**|  | [optional] |
| **order_product_quantity** | **string**|  | [optional] |
| **order_estimated_time** | **string**|  | [optional] |
| **order_cost** | **string**|  | [optional] |
| **order_priority_priority** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| project_tasks slug_partial | [optional] |
| **slug_start_with** | **string**| project_tasks slug_start_with | [optional] |
| **slug_end_with** | **string**| project_tasks slug_end_with | [optional] |
| **id_partial** | **string**| project_tasks id_partial | [optional] |
| **id_start_with** | **string**| project_tasks id_start_with | [optional] |
| **id_end_with** | **string**| project_tasks id_end_with | [optional] |
| **completed_time_range** | **string**| project_tasks completedTime_range | [optional] |
| **product_quantity_range** | **string**| project_tasks productQuantity_range | [optional] |
| **estimated_time_range** | **string**| project_tasks estimatedTime_range | [optional] |
| **cost_range** | **string**| project_tasks cost_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProjectTasksGetCollection200Response**](../Model/ApiProjectTasksGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectTasksIdDelete()`

```php
apiProjectTasksIdDelete($id)
```

Removes the project_tasks resource.

Removes the project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier

try {
    $apiInstance->apiProjectTasksIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->apiProjectTasksIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |

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

## `apiProjectTasksIdGet()`

```php
apiProjectTasksIdGet($id): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a project_tasks resource.

Retrieves a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier

try {
    $result = $apiInstance->apiProjectTasksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->apiProjectTasksIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectTasksIdPut()`

```php
apiProjectTasksIdPut($id, $project_tasks_jsonld_add_post): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the project_tasks resource.

Replaces the project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier
$project_tasks_jsonld_add_post = new \OpenAPI\Client\Model\ProjectTasksJsonldAddPost(); // \OpenAPI\Client\Model\ProjectTasksJsonldAddPost | The updated project_tasks resource

try {
    $result = $apiInstance->apiProjectTasksIdPut($id, $project_tasks_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->apiProjectTasksIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |
| **project_tasks_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectTasksJsonldAddPost**](../Model/ProjectTasksJsonldAddPost.md)| The updated project_tasks resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectTasksPost()`

```php
apiProjectTasksPost($project_tasks_jsonld_add_post): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a project_tasks resource.

Creates a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_tasks_jsonld_add_post = new \OpenAPI\Client\Model\ProjectTasksJsonldAddPost(); // \OpenAPI\Client\Model\ProjectTasksJsonldAddPost | The new project_tasks resource

try {
    $result = $apiInstance->apiProjectTasksPost($project_tasks_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->apiProjectTasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_tasks_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectTasksJsonldAddPost**](../Model/ProjectTasksJsonldAddPost.md)| The new project_tasks resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskApiCorporationAdd()`

```php
projectTaskApiCorporationAdd($id, $project_tasks_jsonld): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a project_tasks resource.

Creates a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier
$project_tasks_jsonld = new \OpenAPI\Client\Model\ProjectTasksJsonld(); // \OpenAPI\Client\Model\ProjectTasksJsonld | The new project_tasks resource

try {
    $result = $apiInstance->projectTaskApiCorporationAdd($id, $project_tasks_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |
| **project_tasks_jsonld** | [**\OpenAPI\Client\Model\ProjectTasksJsonld**](../Model/ProjectTasksJsonld.md)| The new project_tasks resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskApiCorporationRemove()`

```php
projectTaskApiCorporationRemove($id, $project_tasks_jsonld): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a project_tasks resource.

Creates a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier
$project_tasks_jsonld = new \OpenAPI\Client\Model\ProjectTasksJsonld(); // \OpenAPI\Client\Model\ProjectTasksJsonld | The new project_tasks resource

try {
    $result = $apiInstance->projectTaskApiCorporationRemove($id, $project_tasks_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |
| **project_tasks_jsonld** | [**\OpenAPI\Client\Model\ProjectTasksJsonld**](../Model/ProjectTasksJsonld.md)| The new project_tasks resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskApiFileUpload()`

```php
projectTaskApiFileUpload($id, $project_tasks_jsonld): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a project_tasks resource.

Creates a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier
$project_tasks_jsonld = new \OpenAPI\Client\Model\ProjectTasksJsonld(); // \OpenAPI\Client\Model\ProjectTasksJsonld | The new project_tasks resource

try {
    $result = $apiInstance->projectTaskApiFileUpload($id, $project_tasks_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |
| **project_tasks_jsonld** | [**\OpenAPI\Client\Model\ProjectTasksJsonld**](../Model/ProjectTasksJsonld.md)| The new project_tasks resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskDropDown()`

```php
projectTaskDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_created_before, $date_created_strictly_before, $date_created_after, $date_created_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_completed_before, $date_completed_strictly_before, $date_completed_after, $date_completed_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $status, $status2, $priority, $priority2, $product, $product2, $project, $project2, $sender, $sender2, $receiver, $receiver2, $sector, $sector2, $search, $completed_time, $completed_time2, $product_quantity, $product_quantity2, $estimated_time, $estimated_time2, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $order_date_created, $order_date_start, $order_date_completed, $order_deadline, $order_completed_time, $order_product_quantity, $order_estimated_time, $order_cost, $order_priority_priority, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $completed_time_range, $product_quantity_range, $estimated_time_range, $cost_range): \OpenAPI\Client\Model\ProjectTaskDropDown200Response
```

Retrieves the collection of project_tasks resources.

Retrieves the collection of project_tasks resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
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
$date_created_before = 'date_created_before_example'; // string | 
$date_created_strictly_before = 'date_created_strictly_before_example'; // string | 
$date_created_after = 'date_created_after_example'; // string | 
$date_created_strictly_after = 'date_created_strictly_after_example'; // string | 
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_completed_before = 'date_completed_before_example'; // string | 
$date_completed_strictly_before = 'date_completed_strictly_before_example'; // string | 
$date_completed_after = 'date_completed_after_example'; // string | 
$date_completed_strictly_after = 'date_completed_strictly_after_example'; // string | 
$deadline_before = 'deadline_before_example'; // string | 
$deadline_strictly_before = 'deadline_strictly_before_example'; // string | 
$deadline_after = 'deadline_after_example'; // string | 
$deadline_strictly_after = 'deadline_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$priority = 'priority_example'; // string | 
$priority2 = array('priority_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$sender = 'sender_example'; // string | 
$sender2 = array('sender_example'); // string[] | 
$receiver = 'receiver_example'; // string | 
$receiver2 = array('receiver_example'); // string[] | 
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$search = 'search_example'; // string | 
$completed_time = 'completed_time_example'; // string | 
$completed_time2 = array('completed_time_example'); // string[] | 
$product_quantity = 56; // int | 
$product_quantity2 = array(56); // int[] | 
$estimated_time = 'estimated_time_example'; // string | 
$estimated_time2 = array('estimated_time_example'); // string[] | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_created = 'order_date_created_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_completed = 'order_date_completed_example'; // string | 
$order_deadline = 'order_deadline_example'; // string | 
$order_completed_time = 'order_completed_time_example'; // string | 
$order_product_quantity = 'order_product_quantity_example'; // string | 
$order_estimated_time = 'order_estimated_time_example'; // string | 
$order_cost = 'order_cost_example'; // string | 
$order_priority_priority = 'order_priority_priority_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | project_tasks slug_partial
$slug_start_with = 'slug_start_with_example'; // string | project_tasks slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | project_tasks slug_end_with
$id_partial = 'id_partial_example'; // string | project_tasks id_partial
$id_start_with = 'id_start_with_example'; // string | project_tasks id_start_with
$id_end_with = 'id_end_with_example'; // string | project_tasks id_end_with
$completed_time_range = 'completed_time_range_example'; // string | project_tasks completedTime_range
$product_quantity_range = 'product_quantity_range_example'; // string | project_tasks productQuantity_range
$estimated_time_range = 'estimated_time_range_example'; // string | project_tasks estimatedTime_range
$cost_range = 'cost_range_example'; // string | project_tasks cost_range

try {
    $result = $apiInstance->projectTaskDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_created_before, $date_created_strictly_before, $date_created_after, $date_created_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_completed_before, $date_completed_strictly_before, $date_completed_after, $date_completed_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $status, $status2, $priority, $priority2, $product, $product2, $project, $project2, $sender, $sender2, $receiver, $receiver2, $sector, $sector2, $search, $completed_time, $completed_time2, $product_quantity, $product_quantity2, $estimated_time, $estimated_time2, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $order_date_created, $order_date_start, $order_date_completed, $order_deadline, $order_completed_time, $order_product_quantity, $order_estimated_time, $order_cost, $order_priority_priority, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $completed_time_range, $product_quantity_range, $estimated_time_range, $cost_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_created_before** | **string**|  | [optional] |
| **date_created_strictly_before** | **string**|  | [optional] |
| **date_created_after** | **string**|  | [optional] |
| **date_created_strictly_after** | **string**|  | [optional] |
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_completed_before** | **string**|  | [optional] |
| **date_completed_strictly_before** | **string**|  | [optional] |
| **date_completed_after** | **string**|  | [optional] |
| **date_completed_strictly_after** | **string**|  | [optional] |
| **deadline_before** | **string**|  | [optional] |
| **deadline_strictly_before** | **string**|  | [optional] |
| **deadline_after** | **string**|  | [optional] |
| **deadline_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **string**|  | [optional] |
| **priority2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sender** | **string**|  | [optional] |
| **sender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **receiver** | **string**|  | [optional] |
| **receiver2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **completed_time** | **string**|  | [optional] |
| **completed_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product_quantity** | **int**|  | [optional] |
| **product_quantity2** | [**int[]**](../Model/int.md)|  | [optional] |
| **estimated_time** | **string**|  | [optional] |
| **estimated_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_created** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_completed** | **string**|  | [optional] |
| **order_deadline** | **string**|  | [optional] |
| **order_completed_time** | **string**|  | [optional] |
| **order_product_quantity** | **string**|  | [optional] |
| **order_estimated_time** | **string**|  | [optional] |
| **order_cost** | **string**|  | [optional] |
| **order_priority_priority** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| project_tasks slug_partial | [optional] |
| **slug_start_with** | **string**| project_tasks slug_start_with | [optional] |
| **slug_end_with** | **string**| project_tasks slug_end_with | [optional] |
| **id_partial** | **string**| project_tasks id_partial | [optional] |
| **id_start_with** | **string**| project_tasks id_start_with | [optional] |
| **id_end_with** | **string**| project_tasks id_end_with | [optional] |
| **completed_time_range** | **string**| project_tasks completedTime_range | [optional] |
| **product_quantity_range** | **string**| project_tasks productQuantity_range | [optional] |
| **estimated_time_range** | **string**| project_tasks estimatedTime_range | [optional] |
| **cost_range** | **string**| project_tasks cost_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTaskDropDown200Response**](../Model/ProjectTaskDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskDuplicate()`

```php
projectTaskDuplicate($id): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a project_tasks resource.

Retrieves a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier

try {
    $result = $apiInstance->projectTaskDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskFetchFiles()`

```php
projectTaskFetchFiles($id): \OpenAPI\Client\Model\ProjectTasksJsonld
```

Retrieves a project_tasks resource.

Retrieves a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier

try {
    $result = $apiInstance->projectTaskFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonld**](../Model/ProjectTasksJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskGetBySlug()`

```php
projectTaskGetBySlug($slug): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a project_tasks resource.

Retrieves a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | project_tasks identifier

try {
    $result = $apiInstance->projectTaskGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| project_tasks identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskGetDeleteRelations()`

```php
projectTaskGetDeleteRelations($id): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskRelations
```

Retrieves a project_tasks resource.

Retrieves a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier

try {
    $result = $apiInstance->projectTaskGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskRelations**](../Model/ProjectTasksJsonldProjectTaskRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskManagerListing()`

```php
projectTaskManagerListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_created_before, $date_created_strictly_before, $date_created_after, $date_created_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_completed_before, $date_completed_strictly_before, $date_completed_after, $date_completed_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $status, $status2, $priority, $priority2, $product, $product2, $project, $project2, $sender, $sender2, $receiver, $receiver2, $sector, $sector2, $search, $completed_time, $completed_time2, $product_quantity, $product_quantity2, $estimated_time, $estimated_time2, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $order_date_created, $order_date_start, $order_date_completed, $order_deadline, $order_completed_time, $order_product_quantity, $order_estimated_time, $order_cost, $order_priority_priority, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag): \OpenAPI\Client\Model\ProjectTaskManagerListing200Response
```

Retrieves the collection of project_tasks resources.

Retrieves the collection of project_tasks resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
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
$date_created_before = 'date_created_before_example'; // string | 
$date_created_strictly_before = 'date_created_strictly_before_example'; // string | 
$date_created_after = 'date_created_after_example'; // string | 
$date_created_strictly_after = 'date_created_strictly_after_example'; // string | 
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_completed_before = 'date_completed_before_example'; // string | 
$date_completed_strictly_before = 'date_completed_strictly_before_example'; // string | 
$date_completed_after = 'date_completed_after_example'; // string | 
$date_completed_strictly_after = 'date_completed_strictly_after_example'; // string | 
$deadline_before = 'deadline_before_example'; // string | 
$deadline_strictly_before = 'deadline_strictly_before_example'; // string | 
$deadline_after = 'deadline_after_example'; // string | 
$deadline_strictly_after = 'deadline_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$priority = 'priority_example'; // string | 
$priority2 = array('priority_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$sender = 'sender_example'; // string | 
$sender2 = array('sender_example'); // string[] | 
$receiver = 'receiver_example'; // string | 
$receiver2 = array('receiver_example'); // string[] | 
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$search = 'search_example'; // string | 
$completed_time = 'completed_time_example'; // string | 
$completed_time2 = array('completed_time_example'); // string[] | 
$product_quantity = 56; // int | 
$product_quantity2 = array(56); // int[] | 
$estimated_time = 'estimated_time_example'; // string | 
$estimated_time2 = array('estimated_time_example'); // string[] | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_created = 'order_date_created_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_completed = 'order_date_completed_example'; // string | 
$order_deadline = 'order_deadline_example'; // string | 
$order_completed_time = 'order_completed_time_example'; // string | 
$order_product_quantity = 'order_product_quantity_example'; // string | 
$order_estimated_time = 'order_estimated_time_example'; // string | 
$order_cost = 'order_cost_example'; // string | 
$order_priority_priority = 'order_priority_priority_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->projectTaskManagerListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_created_before, $date_created_strictly_before, $date_created_after, $date_created_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_completed_before, $date_completed_strictly_before, $date_completed_after, $date_completed_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $status, $status2, $priority, $priority2, $product, $product2, $project, $project2, $sender, $sender2, $receiver, $receiver2, $sector, $sector2, $search, $completed_time, $completed_time2, $product_quantity, $product_quantity2, $estimated_time, $estimated_time2, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $order_date_created, $order_date_start, $order_date_completed, $order_deadline, $order_completed_time, $order_product_quantity, $order_estimated_time, $order_cost, $order_priority_priority, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskManagerListing: ', $e->getMessage(), PHP_EOL;
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
| **date_created_before** | **string**|  | [optional] |
| **date_created_strictly_before** | **string**|  | [optional] |
| **date_created_after** | **string**|  | [optional] |
| **date_created_strictly_after** | **string**|  | [optional] |
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_completed_before** | **string**|  | [optional] |
| **date_completed_strictly_before** | **string**|  | [optional] |
| **date_completed_after** | **string**|  | [optional] |
| **date_completed_strictly_after** | **string**|  | [optional] |
| **deadline_before** | **string**|  | [optional] |
| **deadline_strictly_before** | **string**|  | [optional] |
| **deadline_after** | **string**|  | [optional] |
| **deadline_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **string**|  | [optional] |
| **priority2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sender** | **string**|  | [optional] |
| **sender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **receiver** | **string**|  | [optional] |
| **receiver2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **completed_time** | **string**|  | [optional] |
| **completed_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product_quantity** | **int**|  | [optional] |
| **product_quantity2** | [**int[]**](../Model/int.md)|  | [optional] |
| **estimated_time** | **string**|  | [optional] |
| **estimated_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_created** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_completed** | **string**|  | [optional] |
| **order_deadline** | **string**|  | [optional] |
| **order_completed_time** | **string**|  | [optional] |
| **order_product_quantity** | **string**|  | [optional] |
| **order_estimated_time** | **string**|  | [optional] |
| **order_cost** | **string**|  | [optional] |
| **order_priority_priority** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectTaskManagerListing200Response**](../Model/ProjectTaskManagerListing200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskManagerPunch()`

```php
projectTaskManagerPunch($id, $project_tasks_jsonld): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow
```

Creates a project_tasks resource.

Creates a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier
$project_tasks_jsonld = new \OpenAPI\Client\Model\ProjectTasksJsonld(); // \OpenAPI\Client\Model\ProjectTasksJsonld | The new project_tasks resource

try {
    $result = $apiInstance->projectTaskManagerPunch($id, $project_tasks_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskManagerPunch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |
| **project_tasks_jsonld** | [**\OpenAPI\Client\Model\ProjectTasksJsonld**](../Model/ProjectTasksJsonld.md)| The new project_tasks resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow**](../Model/ProjectTasksJsonldProjectTaskManagerListingIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskMetadata()`

```php
projectTaskMetadata($id): \OpenAPI\Client\Model\ProjectTasksJsonldIdStandardMetadataProjectTaskMetadataTagTaggingListProjectTaskRelationsTimestampable
```

Retrieves a project_tasks resource.

Retrieves a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier

try {
    $result = $apiInstance->projectTaskMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldIdStandardMetadataProjectTaskMetadataTagTaggingListProjectTaskRelationsTimestampable**](../Model/ProjectTasksJsonldIdStandardMetadataProjectTaskMetadataTagTaggingListProjectTaskRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectTaskTimesheets()`

```php
projectTaskTimesheets($id): \OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a project_tasks resource.

Retrieves a project_tasks resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | project_tasks identifier

try {
    $result = $apiInstance->projectTaskTimesheets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTasksApi->projectTaskTimesheets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| project_tasks identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectTasksJsonldProjectTaskShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
