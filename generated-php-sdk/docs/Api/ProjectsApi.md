# OpenAPI\Client\ProjectsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProjectsGetCollection()**](ProjectsApi.md#apiProjectsGetCollection) | **GET** /open-api/v3/projects | Retrieves the collection of projects resources. |
| [**apiProjectsIdDelete()**](ProjectsApi.md#apiProjectsIdDelete) | **DELETE** /open-api/v3/projects/{id} | Removes the projects resource. |
| [**apiProjectsIdGet()**](ProjectsApi.md#apiProjectsIdGet) | **GET** /open-api/v3/projects/{id} | Retrieves a projects resource. |
| [**apiProjectsIdPut()**](ProjectsApi.md#apiProjectsIdPut) | **PUT** /open-api/v3/projects/{id} | Replaces the projects resource. |
| [**apiProjectsPost()**](ProjectsApi.md#apiProjectsPost) | **POST** /open-api/v3/projects | Creates a projects resource. |
| [**projectApiCorporationAdd()**](ProjectsApi.md#projectApiCorporationAdd) | **POST** /open-api/v3/projects/{id}/corporation/add | Creates a projects resource. |
| [**projectApiCorporationRemove()**](ProjectsApi.md#projectApiCorporationRemove) | **POST** /open-api/v3/projects/{id}/corporation/remove | Creates a projects resource. |
| [**projectApiFileUpload()**](ProjectsApi.md#projectApiFileUpload) | **POST** /open-api/v3/projects/{id}/file/upload | Creates a projects resource. |
| [**projectDropDown()**](ProjectsApi.md#projectDropDown) | **GET** /open-api/v3/projects/dropdown/get | Retrieves the collection of projects resources. |
| [**projectDuplicate()**](ProjectsApi.md#projectDuplicate) | **GET** /open-api/v3/projects/duplicate/{id} | Retrieves a projects resource. |
| [**projectFetchFiles()**](ProjectsApi.md#projectFetchFiles) | **GET** /open-api/v3/projects/fetch_files/{id} | Retrieves a projects resource. |
| [**projectGetBySlug()**](ProjectsApi.md#projectGetBySlug) | **GET** /open-api/v3/projects/by_slug/{slug} | Retrieves a projects resource. |
| [**projectGetDeleteRelations()**](ProjectsApi.md#projectGetDeleteRelations) | **GET** /open-api/v3/projects/get_delete_relations/{id} | Retrieves a projects resource. |
| [**projectMetadata()**](ProjectsApi.md#projectMetadata) | **GET** /open-api/v3/projects/metadata/{id} | Retrieves a projects resource. |


## `apiProjectsGetCollection()`

```php
apiProjectsGetCollection($page, $items_per_page, $id, $id2, $slug, $slug2, $code, $code2, $priority, $priority2, $status, $status2, $type, $type2, $client, $client2, $salesman, $salesman2, $incharge_employee, $incharge_employee2, $charged_bill_lines, $charged_bill_lines2, $charged_timesheets, $charged_timesheets2, $charged_allowances, $charged_allowances2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_request_before, $date_request_strictly_before, $date_request_after, $date_request_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $review_date_before, $review_date_strictly_before, $review_date_after, $review_date_strictly_after, $search, $estimated_admin, $estimated_admin2, $material_price, $material_price2, $value, $value2, $estimated_admin_between, $estimated_admin_gt, $estimated_admin_gte, $estimated_admin_lt, $estimated_admin_lte, $material_price_between, $material_price_gt, $material_price_gte, $material_price_lt, $material_price_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_projects_website, $exists_code, $exists_deadline, $exists_date_end, $exists_review_date, $properties, $enabled, $tag, $order_id, $order_slug, $order_code, $order_date_request, $order_date_start, $order_date_end, $order_deadline, $order_review_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with): \OpenAPI\Client\Model\ApiProjectsGetCollection200Response
```

Retrieves the collection of projects resources.

Retrieves the collection of projects resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$priority = 'priority_example'; // string | 
$priority2 = array('priority_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$salesman = 'salesman_example'; // string | 
$salesman2 = array('salesman_example'); // string[] | 
$incharge_employee = 'incharge_employee_example'; // string | 
$incharge_employee2 = array('incharge_employee_example'); // string[] | 
$charged_bill_lines = 'charged_bill_lines_example'; // string | 
$charged_bill_lines2 = array('charged_bill_lines_example'); // string[] | 
$charged_timesheets = 'charged_timesheets_example'; // string | 
$charged_timesheets2 = array('charged_timesheets_example'); // string[] | 
$charged_allowances = 'charged_allowances_example'; // string | 
$charged_allowances2 = array('charged_allowances_example'); // string[] | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$date_request_before = 'date_request_before_example'; // string | 
$date_request_strictly_before = 'date_request_strictly_before_example'; // string | 
$date_request_after = 'date_request_after_example'; // string | 
$date_request_strictly_after = 'date_request_strictly_after_example'; // string | 
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$deadline_before = 'deadline_before_example'; // string | 
$deadline_strictly_before = 'deadline_strictly_before_example'; // string | 
$deadline_after = 'deadline_after_example'; // string | 
$deadline_strictly_after = 'deadline_strictly_after_example'; // string | 
$review_date_before = 'review_date_before_example'; // string | 
$review_date_strictly_before = 'review_date_strictly_before_example'; // string | 
$review_date_after = 'review_date_after_example'; // string | 
$review_date_strictly_after = 'review_date_strictly_after_example'; // string | 
$search = 'search_example'; // string | 
$estimated_admin = 'estimated_admin_example'; // string | 
$estimated_admin2 = array('estimated_admin_example'); // string[] | 
$material_price = 'material_price_example'; // string | 
$material_price2 = array('material_price_example'); // string[] | 
$value = 'value_example'; // string | 
$value2 = array('value_example'); // string[] | 
$estimated_admin_between = 'estimated_admin_between_example'; // string | 
$estimated_admin_gt = 'estimated_admin_gt_example'; // string | 
$estimated_admin_gte = 'estimated_admin_gte_example'; // string | 
$estimated_admin_lt = 'estimated_admin_lt_example'; // string | 
$estimated_admin_lte = 'estimated_admin_lte_example'; // string | 
$material_price_between = 'material_price_between_example'; // string | 
$material_price_gt = 'material_price_gt_example'; // string | 
$material_price_gte = 'material_price_gte_example'; // string | 
$material_price_lt = 'material_price_lt_example'; // string | 
$material_price_lte = 'material_price_lte_example'; // string | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_projects_website = True; // bool | 
$exists_code = True; // bool | 
$exists_deadline = True; // bool | 
$exists_date_end = True; // bool | 
$exists_review_date = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_date_request = 'order_date_request_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_deadline = 'order_deadline_example'; // string | 
$order_review_date = 'order_review_date_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | projects slug_partial
$slug_start_with = 'slug_start_with_example'; // string | projects slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | projects slug_end_with
$id_partial = 'id_partial_example'; // string | projects id_partial
$id_start_with = 'id_start_with_example'; // string | projects id_start_with
$id_end_with = 'id_end_with_example'; // string | projects id_end_with
$code_partial = 'code_partial_example'; // string | projects code_partial
$code_start_with = 'code_start_with_example'; // string | projects code_start_with
$code_end_with = 'code_end_with_example'; // string | projects code_end_with

try {
    $result = $apiInstance->apiProjectsGetCollection($page, $items_per_page, $id, $id2, $slug, $slug2, $code, $code2, $priority, $priority2, $status, $status2, $type, $type2, $client, $client2, $salesman, $salesman2, $incharge_employee, $incharge_employee2, $charged_bill_lines, $charged_bill_lines2, $charged_timesheets, $charged_timesheets2, $charged_allowances, $charged_allowances2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_request_before, $date_request_strictly_before, $date_request_after, $date_request_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $review_date_before, $review_date_strictly_before, $review_date_after, $review_date_strictly_after, $search, $estimated_admin, $estimated_admin2, $material_price, $material_price2, $value, $value2, $estimated_admin_between, $estimated_admin_gt, $estimated_admin_gte, $estimated_admin_lt, $estimated_admin_lte, $material_price_between, $material_price_gt, $material_price_gte, $material_price_lt, $material_price_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_projects_website, $exists_code, $exists_deadline, $exists_date_end, $exists_review_date, $properties, $enabled, $tag, $order_id, $order_slug, $order_code, $order_date_request, $order_date_start, $order_date_end, $order_deadline, $order_review_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->apiProjectsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **string**|  | [optional] |
| **priority2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **salesman** | **string**|  | [optional] |
| **salesman2** | [**string[]**](../Model/string.md)|  | [optional] |
| **incharge_employee** | **string**|  | [optional] |
| **incharge_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_bill_lines** | **string**|  | [optional] |
| **charged_bill_lines2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_timesheets** | **string**|  | [optional] |
| **charged_timesheets2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_allowances** | **string**|  | [optional] |
| **charged_allowances2** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **date_request_before** | **string**|  | [optional] |
| **date_request_strictly_before** | **string**|  | [optional] |
| **date_request_after** | **string**|  | [optional] |
| **date_request_strictly_after** | **string**|  | [optional] |
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **deadline_before** | **string**|  | [optional] |
| **deadline_strictly_before** | **string**|  | [optional] |
| **deadline_after** | **string**|  | [optional] |
| **deadline_strictly_after** | **string**|  | [optional] |
| **review_date_before** | **string**|  | [optional] |
| **review_date_strictly_before** | **string**|  | [optional] |
| **review_date_after** | **string**|  | [optional] |
| **review_date_strictly_after** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **estimated_admin** | **string**|  | [optional] |
| **estimated_admin2** | [**string[]**](../Model/string.md)|  | [optional] |
| **material_price** | **string**|  | [optional] |
| **material_price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **value** | **string**|  | [optional] |
| **value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **estimated_admin_between** | **string**|  | [optional] |
| **estimated_admin_gt** | **string**|  | [optional] |
| **estimated_admin_gte** | **string**|  | [optional] |
| **estimated_admin_lt** | **string**|  | [optional] |
| **estimated_admin_lte** | **string**|  | [optional] |
| **material_price_between** | **string**|  | [optional] |
| **material_price_gt** | **string**|  | [optional] |
| **material_price_gte** | **string**|  | [optional] |
| **material_price_lt** | **string**|  | [optional] |
| **material_price_lte** | **string**|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_projects_website** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_deadline** | **bool**|  | [optional] |
| **exists_date_end** | **bool**|  | [optional] |
| **exists_review_date** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_date_request** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_deadline** | **string**|  | [optional] |
| **order_review_date** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| projects slug_partial | [optional] |
| **slug_start_with** | **string**| projects slug_start_with | [optional] |
| **slug_end_with** | **string**| projects slug_end_with | [optional] |
| **id_partial** | **string**| projects id_partial | [optional] |
| **id_start_with** | **string**| projects id_start_with | [optional] |
| **id_end_with** | **string**| projects id_end_with | [optional] |
| **code_partial** | **string**| projects code_partial | [optional] |
| **code_start_with** | **string**| projects code_start_with | [optional] |
| **code_end_with** | **string**| projects code_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProjectsGetCollection200Response**](../Model/ApiProjectsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdDelete()`

```php
apiProjectsIdDelete($id)
```

Removes the projects resource.

Removes the projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier

try {
    $apiInstance->apiProjectsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->apiProjectsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |

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

## `apiProjectsIdGet()`

```php
apiProjectsIdGet($id): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a projects resource.

Retrieves a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier

try {
    $result = $apiInstance->apiProjectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->apiProjectsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdPut()`

```php
apiProjectsIdPut($id, $projects_jsonld_add_post): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the projects resource.

Replaces the projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier
$projects_jsonld_add_post = new \OpenAPI\Client\Model\ProjectsJsonldAddPost(); // \OpenAPI\Client\Model\ProjectsJsonldAddPost | The updated projects resource

try {
    $result = $apiInstance->apiProjectsIdPut($id, $projects_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->apiProjectsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |
| **projects_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost**](../Model/ProjectsJsonldAddPost.md)| The updated projects resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsPost()`

```php
apiProjectsPost($projects_jsonld_add_post): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a projects resource.

Creates a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projects_jsonld_add_post = new \OpenAPI\Client\Model\ProjectsJsonldAddPost(); // \OpenAPI\Client\Model\ProjectsJsonldAddPost | The new projects resource

try {
    $result = $apiInstance->apiProjectsPost($projects_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->apiProjectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projects_jsonld_add_post** | [**\OpenAPI\Client\Model\ProjectsJsonldAddPost**](../Model/ProjectsJsonldAddPost.md)| The new projects resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectApiCorporationAdd()`

```php
projectApiCorporationAdd($id, $projects_jsonld): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a projects resource.

Creates a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier
$projects_jsonld = new \OpenAPI\Client\Model\ProjectsJsonld(); // \OpenAPI\Client\Model\ProjectsJsonld | The new projects resource

try {
    $result = $apiInstance->projectApiCorporationAdd($id, $projects_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |
| **projects_jsonld** | [**\OpenAPI\Client\Model\ProjectsJsonld**](../Model/ProjectsJsonld.md)| The new projects resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectApiCorporationRemove()`

```php
projectApiCorporationRemove($id, $projects_jsonld): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a projects resource.

Creates a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier
$projects_jsonld = new \OpenAPI\Client\Model\ProjectsJsonld(); // \OpenAPI\Client\Model\ProjectsJsonld | The new projects resource

try {
    $result = $apiInstance->projectApiCorporationRemove($id, $projects_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |
| **projects_jsonld** | [**\OpenAPI\Client\Model\ProjectsJsonld**](../Model/ProjectsJsonld.md)| The new projects resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectApiFileUpload()`

```php
projectApiFileUpload($id, $projects_jsonld): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a projects resource.

Creates a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier
$projects_jsonld = new \OpenAPI\Client\Model\ProjectsJsonld(); // \OpenAPI\Client\Model\ProjectsJsonld | The new projects resource

try {
    $result = $apiInstance->projectApiFileUpload($id, $projects_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |
| **projects_jsonld** | [**\OpenAPI\Client\Model\ProjectsJsonld**](../Model/ProjectsJsonld.md)| The new projects resource | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectDropDown()`

```php
projectDropDown($page, $items_per_page, $id, $id2, $slug, $slug2, $code, $code2, $priority, $priority2, $status, $status2, $type, $type2, $client, $client2, $salesman, $salesman2, $incharge_employee, $incharge_employee2, $charged_bill_lines, $charged_bill_lines2, $charged_timesheets, $charged_timesheets2, $charged_allowances, $charged_allowances2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_request_before, $date_request_strictly_before, $date_request_after, $date_request_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $review_date_before, $review_date_strictly_before, $review_date_after, $review_date_strictly_after, $search, $estimated_admin, $estimated_admin2, $material_price, $material_price2, $value, $value2, $estimated_admin_between, $estimated_admin_gt, $estimated_admin_gte, $estimated_admin_lt, $estimated_admin_lte, $material_price_between, $material_price_gt, $material_price_gte, $material_price_lt, $material_price_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_projects_website, $exists_code, $exists_deadline, $exists_date_end, $exists_review_date, $properties, $enabled, $tag, $order_id, $order_slug, $order_code, $order_date_request, $order_date_start, $order_date_end, $order_deadline, $order_review_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with): \OpenAPI\Client\Model\ProjectDropDown200Response
```

Retrieves the collection of projects resources.

Retrieves the collection of projects resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$priority = 'priority_example'; // string | 
$priority2 = array('priority_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$salesman = 'salesman_example'; // string | 
$salesman2 = array('salesman_example'); // string[] | 
$incharge_employee = 'incharge_employee_example'; // string | 
$incharge_employee2 = array('incharge_employee_example'); // string[] | 
$charged_bill_lines = 'charged_bill_lines_example'; // string | 
$charged_bill_lines2 = array('charged_bill_lines_example'); // string[] | 
$charged_timesheets = 'charged_timesheets_example'; // string | 
$charged_timesheets2 = array('charged_timesheets_example'); // string[] | 
$charged_allowances = 'charged_allowances_example'; // string | 
$charged_allowances2 = array('charged_allowances_example'); // string[] | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$date_request_before = 'date_request_before_example'; // string | 
$date_request_strictly_before = 'date_request_strictly_before_example'; // string | 
$date_request_after = 'date_request_after_example'; // string | 
$date_request_strictly_after = 'date_request_strictly_after_example'; // string | 
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$deadline_before = 'deadline_before_example'; // string | 
$deadline_strictly_before = 'deadline_strictly_before_example'; // string | 
$deadline_after = 'deadline_after_example'; // string | 
$deadline_strictly_after = 'deadline_strictly_after_example'; // string | 
$review_date_before = 'review_date_before_example'; // string | 
$review_date_strictly_before = 'review_date_strictly_before_example'; // string | 
$review_date_after = 'review_date_after_example'; // string | 
$review_date_strictly_after = 'review_date_strictly_after_example'; // string | 
$search = 'search_example'; // string | 
$estimated_admin = 'estimated_admin_example'; // string | 
$estimated_admin2 = array('estimated_admin_example'); // string[] | 
$material_price = 'material_price_example'; // string | 
$material_price2 = array('material_price_example'); // string[] | 
$value = 'value_example'; // string | 
$value2 = array('value_example'); // string[] | 
$estimated_admin_between = 'estimated_admin_between_example'; // string | 
$estimated_admin_gt = 'estimated_admin_gt_example'; // string | 
$estimated_admin_gte = 'estimated_admin_gte_example'; // string | 
$estimated_admin_lt = 'estimated_admin_lt_example'; // string | 
$estimated_admin_lte = 'estimated_admin_lte_example'; // string | 
$material_price_between = 'material_price_between_example'; // string | 
$material_price_gt = 'material_price_gt_example'; // string | 
$material_price_gte = 'material_price_gte_example'; // string | 
$material_price_lt = 'material_price_lt_example'; // string | 
$material_price_lte = 'material_price_lte_example'; // string | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_projects_website = True; // bool | 
$exists_code = True; // bool | 
$exists_deadline = True; // bool | 
$exists_date_end = True; // bool | 
$exists_review_date = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_date_request = 'order_date_request_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_deadline = 'order_deadline_example'; // string | 
$order_review_date = 'order_review_date_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | projects slug_partial
$slug_start_with = 'slug_start_with_example'; // string | projects slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | projects slug_end_with
$id_partial = 'id_partial_example'; // string | projects id_partial
$id_start_with = 'id_start_with_example'; // string | projects id_start_with
$id_end_with = 'id_end_with_example'; // string | projects id_end_with
$code_partial = 'code_partial_example'; // string | projects code_partial
$code_start_with = 'code_start_with_example'; // string | projects code_start_with
$code_end_with = 'code_end_with_example'; // string | projects code_end_with

try {
    $result = $apiInstance->projectDropDown($page, $items_per_page, $id, $id2, $slug, $slug2, $code, $code2, $priority, $priority2, $status, $status2, $type, $type2, $client, $client2, $salesman, $salesman2, $incharge_employee, $incharge_employee2, $charged_bill_lines, $charged_bill_lines2, $charged_timesheets, $charged_timesheets2, $charged_allowances, $charged_allowances2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_request_before, $date_request_strictly_before, $date_request_after, $date_request_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $deadline_before, $deadline_strictly_before, $deadline_after, $deadline_strictly_after, $review_date_before, $review_date_strictly_before, $review_date_after, $review_date_strictly_after, $search, $estimated_admin, $estimated_admin2, $material_price, $material_price2, $value, $value2, $estimated_admin_between, $estimated_admin_gt, $estimated_admin_gte, $estimated_admin_lt, $estimated_admin_lte, $material_price_between, $material_price_gt, $material_price_gte, $material_price_lt, $material_price_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_projects_website, $exists_code, $exists_deadline, $exists_date_end, $exists_review_date, $properties, $enabled, $tag, $order_id, $order_slug, $order_code, $order_date_request, $order_date_start, $order_date_end, $order_deadline, $order_review_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **string**|  | [optional] |
| **priority2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **salesman** | **string**|  | [optional] |
| **salesman2** | [**string[]**](../Model/string.md)|  | [optional] |
| **incharge_employee** | **string**|  | [optional] |
| **incharge_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_bill_lines** | **string**|  | [optional] |
| **charged_bill_lines2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_timesheets** | **string**|  | [optional] |
| **charged_timesheets2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_allowances** | **string**|  | [optional] |
| **charged_allowances2** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **date_request_before** | **string**|  | [optional] |
| **date_request_strictly_before** | **string**|  | [optional] |
| **date_request_after** | **string**|  | [optional] |
| **date_request_strictly_after** | **string**|  | [optional] |
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **deadline_before** | **string**|  | [optional] |
| **deadline_strictly_before** | **string**|  | [optional] |
| **deadline_after** | **string**|  | [optional] |
| **deadline_strictly_after** | **string**|  | [optional] |
| **review_date_before** | **string**|  | [optional] |
| **review_date_strictly_before** | **string**|  | [optional] |
| **review_date_after** | **string**|  | [optional] |
| **review_date_strictly_after** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **estimated_admin** | **string**|  | [optional] |
| **estimated_admin2** | [**string[]**](../Model/string.md)|  | [optional] |
| **material_price** | **string**|  | [optional] |
| **material_price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **value** | **string**|  | [optional] |
| **value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **estimated_admin_between** | **string**|  | [optional] |
| **estimated_admin_gt** | **string**|  | [optional] |
| **estimated_admin_gte** | **string**|  | [optional] |
| **estimated_admin_lt** | **string**|  | [optional] |
| **estimated_admin_lte** | **string**|  | [optional] |
| **material_price_between** | **string**|  | [optional] |
| **material_price_gt** | **string**|  | [optional] |
| **material_price_gte** | **string**|  | [optional] |
| **material_price_lt** | **string**|  | [optional] |
| **material_price_lte** | **string**|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_projects_website** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_deadline** | **bool**|  | [optional] |
| **exists_date_end** | **bool**|  | [optional] |
| **exists_review_date** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_date_request** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_deadline** | **string**|  | [optional] |
| **order_review_date** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| projects slug_partial | [optional] |
| **slug_start_with** | **string**| projects slug_start_with | [optional] |
| **slug_end_with** | **string**| projects slug_end_with | [optional] |
| **id_partial** | **string**| projects id_partial | [optional] |
| **id_start_with** | **string**| projects id_start_with | [optional] |
| **id_end_with** | **string**| projects id_end_with | [optional] |
| **code_partial** | **string**| projects code_partial | [optional] |
| **code_start_with** | **string**| projects code_start_with | [optional] |
| **code_end_with** | **string**| projects code_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectDropDown200Response**](../Model/ProjectDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectDuplicate()`

```php
projectDuplicate($id): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a projects resource.

Retrieves a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier

try {
    $result = $apiInstance->projectDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectFetchFiles()`

```php
projectFetchFiles($id): \OpenAPI\Client\Model\ProjectsJsonld
```

Retrieves a projects resource.

Retrieves a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier

try {
    $result = $apiInstance->projectFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonld**](../Model/ProjectsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectGetBySlug()`

```php
projectGetBySlug($slug): \OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a projects resource.

Retrieves a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | projects identifier

try {
    $result = $apiInstance->projectGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| projects identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProjectsJsonldProjectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectGetDeleteRelations()`

```php
projectGetDeleteRelations($id): \OpenAPI\Client\Model\ProjectsJsonldProjectRelations
```

Retrieves a projects resource.

Retrieves a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier

try {
    $result = $apiInstance->projectGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldProjectRelations**](../Model/ProjectsJsonldProjectRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectMetadata()`

```php
projectMetadata($id): \OpenAPI\Client\Model\ProjectsJsonldIdStandardMetadataProjectMetadataTagTaggingListProjectRelationsTimestampable
```

Retrieves a projects resource.

Retrieves a projects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | projects identifier

try {
    $result = $apiInstance->projectMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| projects identifier | |

### Return type

[**\OpenAPI\Client\Model\ProjectsJsonldIdStandardMetadataProjectMetadataTagTaggingListProjectRelationsTimestampable**](../Model/ProjectsJsonldIdStandardMetadataProjectMetadataTagTaggingListProjectRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
