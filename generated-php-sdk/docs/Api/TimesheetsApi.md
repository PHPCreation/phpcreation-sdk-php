# OpenAPI\Client\TimesheetsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTimesheetsGetCollection()**](TimesheetsApi.md#apiTimesheetsGetCollection) | **GET** /open-api/v3/timesheets | Retrieves the collection of timesheets resources. |
| [**apiTimesheetsIdDelete()**](TimesheetsApi.md#apiTimesheetsIdDelete) | **DELETE** /open-api/v3/timesheets/{id} | Removes the timesheets resource. |
| [**apiTimesheetsIdGet()**](TimesheetsApi.md#apiTimesheetsIdGet) | **GET** /open-api/v3/timesheets/{id} | Retrieves a timesheets resource. |
| [**apiTimesheetsIdPut()**](TimesheetsApi.md#apiTimesheetsIdPut) | **PUT** /open-api/v3/timesheets/{id} | Replaces the timesheets resource. |
| [**apiTimesheetsPost()**](TimesheetsApi.md#apiTimesheetsPost) | **POST** /open-api/v3/timesheets | Creates a timesheets resource. |
| [**timesheetApiCorporationAdd()**](TimesheetsApi.md#timesheetApiCorporationAdd) | **POST** /open-api/v3/timesheets/{id}/corporation/add | Creates a timesheets resource. |
| [**timesheetApiCorporationRemove()**](TimesheetsApi.md#timesheetApiCorporationRemove) | **POST** /open-api/v3/timesheets/{id}/corporation/remove | Creates a timesheets resource. |
| [**timesheetApiFileUpload()**](TimesheetsApi.md#timesheetApiFileUpload) | **POST** /open-api/v3/timesheets/{id}/file/upload | Creates a timesheets resource. |
| [**timesheetDropDown()**](TimesheetsApi.md#timesheetDropDown) | **GET** /open-api/v3/timesheets/dropdown/get | Retrieves the collection of timesheets resources. |
| [**timesheetDuplicate()**](TimesheetsApi.md#timesheetDuplicate) | **GET** /open-api/v3/timesheets/duplicate/{id} | Retrieves a timesheets resource. |
| [**timesheetFetchFiles()**](TimesheetsApi.md#timesheetFetchFiles) | **GET** /open-api/v3/timesheets/fetch_files/{id} | Retrieves a timesheets resource. |
| [**timesheetGetBySlug()**](TimesheetsApi.md#timesheetGetBySlug) | **GET** /open-api/v3/timesheets/by_slug/{slug} | Retrieves a timesheets resource. |
| [**timesheetGetDeleteRelations()**](TimesheetsApi.md#timesheetGetDeleteRelations) | **GET** /open-api/v3/timesheets/get_delete_relations/{id} | Retrieves a timesheets resource. |
| [**timesheetMetadata()**](TimesheetsApi.md#timesheetMetadata) | **GET** /open-api/v3/timesheets/metadata/{id} | Retrieves a timesheets resource. |


## `apiTimesheetsGetCollection()`

```php
apiTimesheetsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $datetime_start_before, $datetime_start_strictly_before, $datetime_start_after, $datetime_start_strictly_after, $datetime_end_before, $datetime_end_strictly_before, $datetime_end_after, $datetime_end_strictly_after, $id, $id2, $entry_mode, $entry_mode2, $employee, $employee2, $task, $task2, $status, $status2, $type, $type2, $payrolls, $payrolls2, $search, $ratio, $ratio2, $ratio_between, $ratio_gt, $ratio_gte, $ratio_lt, $ratio_lte, $chargeable, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_chargeable, $order_datetime_start, $order_datetime_end, $order_ratio, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_datetime_end, $exists_description, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiTimesheetsGetCollection200Response
```

Retrieves the collection of timesheets resources.

Retrieves the collection of timesheets resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
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
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$datetime_start_before = 'datetime_start_before_example'; // string | 
$datetime_start_strictly_before = 'datetime_start_strictly_before_example'; // string | 
$datetime_start_after = 'datetime_start_after_example'; // string | 
$datetime_start_strictly_after = 'datetime_start_strictly_after_example'; // string | 
$datetime_end_before = 'datetime_end_before_example'; // string | 
$datetime_end_strictly_before = 'datetime_end_strictly_before_example'; // string | 
$datetime_end_after = 'datetime_end_after_example'; // string | 
$datetime_end_strictly_after = 'datetime_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$entry_mode = 'entry_mode_example'; // string | 
$entry_mode2 = array('entry_mode_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$payrolls = 'payrolls_example'; // string | 
$payrolls2 = array('payrolls_example'); // string[] | 
$search = 'search_example'; // string | 
$ratio = 'ratio_example'; // string | 
$ratio2 = array('ratio_example'); // string[] | 
$ratio_between = 'ratio_between_example'; // string | 
$ratio_gt = 'ratio_gt_example'; // string | 
$ratio_gte = 'ratio_gte_example'; // string | 
$ratio_lt = 'ratio_lt_example'; // string | 
$ratio_lte = 'ratio_lte_example'; // string | 
$chargeable = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_timestamp = 'order_timestamp_example'; // string | 
$order_chargeable = 'order_chargeable_example'; // string | 
$order_datetime_start = 'order_datetime_start_example'; // string | 
$order_datetime_end = 'order_datetime_end_example'; // string | 
$order_ratio = 'order_ratio_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_datetime_end = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | timesheets slug_partial
$slug_start_with = 'slug_start_with_example'; // string | timesheets slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | timesheets slug_end_with
$id_partial = 'id_partial_example'; // string | timesheets id_partial
$id_start_with = 'id_start_with_example'; // string | timesheets id_start_with
$id_end_with = 'id_end_with_example'; // string | timesheets id_end_with

try {
    $result = $apiInstance->apiTimesheetsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $datetime_start_before, $datetime_start_strictly_before, $datetime_start_after, $datetime_start_strictly_after, $datetime_end_before, $datetime_end_strictly_before, $datetime_end_after, $datetime_end_strictly_after, $id, $id2, $entry_mode, $entry_mode2, $employee, $employee2, $task, $task2, $status, $status2, $type, $type2, $payrolls, $payrolls2, $search, $ratio, $ratio2, $ratio_between, $ratio_gt, $ratio_gte, $ratio_lt, $ratio_lte, $chargeable, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_chargeable, $order_datetime_start, $order_datetime_end, $order_ratio, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_datetime_end, $exists_description, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->apiTimesheetsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **datetime_start_before** | **string**|  | [optional] |
| **datetime_start_strictly_before** | **string**|  | [optional] |
| **datetime_start_after** | **string**|  | [optional] |
| **datetime_start_strictly_after** | **string**|  | [optional] |
| **datetime_end_before** | **string**|  | [optional] |
| **datetime_end_strictly_before** | **string**|  | [optional] |
| **datetime_end_after** | **string**|  | [optional] |
| **datetime_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **entry_mode** | **string**|  | [optional] |
| **entry_mode2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payrolls** | **string**|  | [optional] |
| **payrolls2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **ratio** | **string**|  | [optional] |
| **ratio2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ratio_between** | **string**|  | [optional] |
| **ratio_gt** | **string**|  | [optional] |
| **ratio_gte** | **string**|  | [optional] |
| **ratio_lt** | **string**|  | [optional] |
| **ratio_lte** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_timestamp** | **string**|  | [optional] |
| **order_chargeable** | **string**|  | [optional] |
| **order_datetime_start** | **string**|  | [optional] |
| **order_datetime_end** | **string**|  | [optional] |
| **order_ratio** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_datetime_end** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| timesheets slug_partial | [optional] |
| **slug_start_with** | **string**| timesheets slug_start_with | [optional] |
| **slug_end_with** | **string**| timesheets slug_end_with | [optional] |
| **id_partial** | **string**| timesheets id_partial | [optional] |
| **id_start_with** | **string**| timesheets id_start_with | [optional] |
| **id_end_with** | **string**| timesheets id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTimesheetsGetCollection200Response**](../Model/ApiTimesheetsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdDelete()`

```php
apiTimesheetsIdDelete($id)
```

Removes the timesheets resource.

Removes the timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier

try {
    $apiInstance->apiTimesheetsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->apiTimesheetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |

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

## `apiTimesheetsIdGet()`

```php
apiTimesheetsIdGet($id): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a timesheets resource.

Retrieves a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier

try {
    $result = $apiInstance->apiTimesheetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->apiTimesheetsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdPut()`

```php
apiTimesheetsIdPut($id, $timesheets_jsonld_add_post): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the timesheets resource.

Replaces the timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier
$timesheets_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetsJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetsJsonldAddPost | The updated timesheets resource

try {
    $result = $apiInstance->apiTimesheetsIdPut($id, $timesheets_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->apiTimesheetsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |
| **timesheets_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetsJsonldAddPost**](../Model/TimesheetsJsonldAddPost.md)| The updated timesheets resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/TimesheetsJsonldTimesheetShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsPost()`

```php
apiTimesheetsPost($timesheets_jsonld_add_post): \OpenAPI\Client\Model\TimesheetsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a timesheets resource.

Creates a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timesheets_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetsJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetsJsonldAddPost | The new timesheets resource

try {
    $result = $apiInstance->apiTimesheetsPost($timesheets_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->apiTimesheetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timesheets_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetsJsonldAddPost**](../Model/TimesheetsJsonldAddPost.md)| The new timesheets resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/TimesheetsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetApiCorporationAdd()`

```php
timesheetApiCorporationAdd($id, $timesheets_jsonld): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheets resource.

Creates a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier
$timesheets_jsonld = new \OpenAPI\Client\Model\TimesheetsJsonld(); // \OpenAPI\Client\Model\TimesheetsJsonld | The new timesheets resource

try {
    $result = $apiInstance->timesheetApiCorporationAdd($id, $timesheets_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |
| **timesheets_jsonld** | [**\OpenAPI\Client\Model\TimesheetsJsonld**](../Model/TimesheetsJsonld.md)| The new timesheets resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetApiCorporationRemove()`

```php
timesheetApiCorporationRemove($id, $timesheets_jsonld): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheets resource.

Creates a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier
$timesheets_jsonld = new \OpenAPI\Client\Model\TimesheetsJsonld(); // \OpenAPI\Client\Model\TimesheetsJsonld | The new timesheets resource

try {
    $result = $apiInstance->timesheetApiCorporationRemove($id, $timesheets_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |
| **timesheets_jsonld** | [**\OpenAPI\Client\Model\TimesheetsJsonld**](../Model/TimesheetsJsonld.md)| The new timesheets resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetApiFileUpload()`

```php
timesheetApiFileUpload($id, $timesheets_jsonld): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheets resource.

Creates a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier
$timesheets_jsonld = new \OpenAPI\Client\Model\TimesheetsJsonld(); // \OpenAPI\Client\Model\TimesheetsJsonld | The new timesheets resource

try {
    $result = $apiInstance->timesheetApiFileUpload($id, $timesheets_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |
| **timesheets_jsonld** | [**\OpenAPI\Client\Model\TimesheetsJsonld**](../Model/TimesheetsJsonld.md)| The new timesheets resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetDropDown()`

```php
timesheetDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $datetime_start_before, $datetime_start_strictly_before, $datetime_start_after, $datetime_start_strictly_after, $datetime_end_before, $datetime_end_strictly_before, $datetime_end_after, $datetime_end_strictly_after, $id, $id2, $entry_mode, $entry_mode2, $employee, $employee2, $task, $task2, $status, $status2, $type, $type2, $payrolls, $payrolls2, $search, $ratio, $ratio2, $ratio_between, $ratio_gt, $ratio_gte, $ratio_lt, $ratio_lte, $chargeable, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_chargeable, $order_datetime_start, $order_datetime_end, $order_ratio, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_datetime_end, $exists_description, $properties, $enabled, $tag): \OpenAPI\Client\Model\TimesheetDropDown200Response
```

Retrieves the collection of timesheets resources.

Retrieves the collection of timesheets resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
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
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$datetime_start_before = 'datetime_start_before_example'; // string | 
$datetime_start_strictly_before = 'datetime_start_strictly_before_example'; // string | 
$datetime_start_after = 'datetime_start_after_example'; // string | 
$datetime_start_strictly_after = 'datetime_start_strictly_after_example'; // string | 
$datetime_end_before = 'datetime_end_before_example'; // string | 
$datetime_end_strictly_before = 'datetime_end_strictly_before_example'; // string | 
$datetime_end_after = 'datetime_end_after_example'; // string | 
$datetime_end_strictly_after = 'datetime_end_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$entry_mode = 'entry_mode_example'; // string | 
$entry_mode2 = array('entry_mode_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$payrolls = 'payrolls_example'; // string | 
$payrolls2 = array('payrolls_example'); // string[] | 
$search = 'search_example'; // string | 
$ratio = 'ratio_example'; // string | 
$ratio2 = array('ratio_example'); // string[] | 
$ratio_between = 'ratio_between_example'; // string | 
$ratio_gt = 'ratio_gt_example'; // string | 
$ratio_gte = 'ratio_gte_example'; // string | 
$ratio_lt = 'ratio_lt_example'; // string | 
$ratio_lte = 'ratio_lte_example'; // string | 
$chargeable = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_timestamp = 'order_timestamp_example'; // string | 
$order_chargeable = 'order_chargeable_example'; // string | 
$order_datetime_start = 'order_datetime_start_example'; // string | 
$order_datetime_end = 'order_datetime_end_example'; // string | 
$order_ratio = 'order_ratio_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_datetime_end = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->timesheetDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $datetime_start_before, $datetime_start_strictly_before, $datetime_start_after, $datetime_start_strictly_after, $datetime_end_before, $datetime_end_strictly_before, $datetime_end_after, $datetime_end_strictly_after, $id, $id2, $entry_mode, $entry_mode2, $employee, $employee2, $task, $task2, $status, $status2, $type, $type2, $payrolls, $payrolls2, $search, $ratio, $ratio2, $ratio_between, $ratio_gt, $ratio_gte, $ratio_lt, $ratio_lte, $chargeable, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_chargeable, $order_datetime_start, $order_datetime_end, $order_ratio, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_datetime_end, $exists_description, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetDropDown: ', $e->getMessage(), PHP_EOL;
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
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **datetime_start_before** | **string**|  | [optional] |
| **datetime_start_strictly_before** | **string**|  | [optional] |
| **datetime_start_after** | **string**|  | [optional] |
| **datetime_start_strictly_after** | **string**|  | [optional] |
| **datetime_end_before** | **string**|  | [optional] |
| **datetime_end_strictly_before** | **string**|  | [optional] |
| **datetime_end_after** | **string**|  | [optional] |
| **datetime_end_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **entry_mode** | **string**|  | [optional] |
| **entry_mode2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payrolls** | **string**|  | [optional] |
| **payrolls2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **ratio** | **string**|  | [optional] |
| **ratio2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ratio_between** | **string**|  | [optional] |
| **ratio_gt** | **string**|  | [optional] |
| **ratio_gte** | **string**|  | [optional] |
| **ratio_lt** | **string**|  | [optional] |
| **ratio_lte** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_timestamp** | **string**|  | [optional] |
| **order_chargeable** | **string**|  | [optional] |
| **order_datetime_start** | **string**|  | [optional] |
| **order_datetime_end** | **string**|  | [optional] |
| **order_ratio** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_datetime_end** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TimesheetDropDown200Response**](../Model/TimesheetDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetDuplicate()`

```php
timesheetDuplicate($id): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingList
```

Retrieves a timesheets resource.

Retrieves a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier

try {
    $result = $apiInstance->timesheetDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingList**](../Model/TimesheetsJsonldTimesheetShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetFetchFiles()`

```php
timesheetFetchFiles($id): \OpenAPI\Client\Model\TimesheetsJsonld
```

Retrieves a timesheets resource.

Retrieves a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier

try {
    $result = $apiInstance->timesheetFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonld**](../Model/TimesheetsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetGetBySlug()`

```php
timesheetGetBySlug($slug): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a timesheets resource.

Retrieves a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | timesheets identifier

try {
    $result = $apiInstance->timesheetGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| timesheets identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetShowIdCustomPropertyTimestampableTagTaggingList**](../Model/TimesheetsJsonldTimesheetShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetGetDeleteRelations()`

```php
timesheetGetDeleteRelations($id): \OpenAPI\Client\Model\TimesheetsJsonldTimesheetRelations
```

Retrieves a timesheets resource.

Retrieves a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier

try {
    $result = $apiInstance->timesheetGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldTimesheetRelations**](../Model/TimesheetsJsonldTimesheetRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetMetadata()`

```php
timesheetMetadata($id): \OpenAPI\Client\Model\TimesheetsJsonldIdStandardMetadataTimesheetMetadataTagTaggingListTimesheetRelationsTimestampable
```

Retrieves a timesheets resource.

Retrieves a timesheets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheets identifier

try {
    $result = $apiInstance->timesheetMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheets identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetsJsonldIdStandardMetadataTimesheetMetadataTagTaggingListTimesheetRelationsTimestampable**](../Model/TimesheetsJsonldIdStandardMetadataTimesheetMetadataTagTaggingListTimesheetRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
