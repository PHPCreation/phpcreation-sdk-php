# OpenAPI\Client\TimesheetBonisApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTimesheetBonisGetCollection()**](TimesheetBonisApi.md#apiTimesheetBonisGetCollection) | **GET** /open-api/v3/timesheet_bonis | Retrieves the collection of timesheet_bonis resources. |
| [**apiTimesheetBonisIdDelete()**](TimesheetBonisApi.md#apiTimesheetBonisIdDelete) | **DELETE** /open-api/v3/timesheet_bonis/{id} | Removes the timesheet_bonis resource. |
| [**apiTimesheetBonisIdGet()**](TimesheetBonisApi.md#apiTimesheetBonisIdGet) | **GET** /open-api/v3/timesheet_bonis/{id} | Retrieves a timesheet_bonis resource. |
| [**apiTimesheetBonisIdPut()**](TimesheetBonisApi.md#apiTimesheetBonisIdPut) | **PUT** /open-api/v3/timesheet_bonis/{id} | Replaces the timesheet_bonis resource. |
| [**apiTimesheetBonisPost()**](TimesheetBonisApi.md#apiTimesheetBonisPost) | **POST** /open-api/v3/timesheet_bonis | Creates a timesheet_bonis resource. |
| [**timesheetBoniApiCorporationAdd()**](TimesheetBonisApi.md#timesheetBoniApiCorporationAdd) | **POST** /open-api/v3/timesheet_bonis/{id}/corporation/add | Creates a timesheet_bonis resource. |
| [**timesheetBoniApiCorporationRemove()**](TimesheetBonisApi.md#timesheetBoniApiCorporationRemove) | **POST** /open-api/v3/timesheet_bonis/{id}/corporation/remove | Creates a timesheet_bonis resource. |
| [**timesheetBoniApiFileUpload()**](TimesheetBonisApi.md#timesheetBoniApiFileUpload) | **POST** /open-api/v3/timesheet_bonis/{id}/file/upload | Creates a timesheet_bonis resource. |
| [**timesheetBoniDropDown()**](TimesheetBonisApi.md#timesheetBoniDropDown) | **GET** /open-api/v3/timesheet_bonis/dropdown/get | Retrieves the collection of timesheet_bonis resources. |
| [**timesheetBoniDuplicate()**](TimesheetBonisApi.md#timesheetBoniDuplicate) | **GET** /open-api/v3/timesheet_bonis/duplicate/{id} | Retrieves a timesheet_bonis resource. |
| [**timesheetBoniFetchFiles()**](TimesheetBonisApi.md#timesheetBoniFetchFiles) | **GET** /open-api/v3/timesheet_bonis/fetch_files/{id} | Retrieves a timesheet_bonis resource. |
| [**timesheetBoniGetDeleteRelations()**](TimesheetBonisApi.md#timesheetBoniGetDeleteRelations) | **GET** /open-api/v3/timesheet_bonis/get_delete_relations/{id} | Retrieves a timesheet_bonis resource. |
| [**timesheetBonisGetBySlug()**](TimesheetBonisApi.md#timesheetBonisGetBySlug) | **GET** /open-api/v3/timesheet_bonis/by_slug/{slug} | Retrieves a timesheet_bonis resource. |
| [**timesheetBonisMetadata()**](TimesheetBonisApi.md#timesheetBonisMetadata) | **GET** /open-api/v3/timesheet_bonis/metadata/{id} | Retrieves a timesheet_bonis resource. |


## `apiTimesheetBonisGetCollection()`

```php
apiTimesheetBonisGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $sender, $sender2, $payroll, $payroll2, $receiver, $receiver2, $status, $status2, $project, $project2, $amount, $amount2, $search, $order_id, $order_created_at, $order_updated_at, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiTimesheetBonisGetCollection200Response
```

Retrieves the collection of timesheet_bonis resources.

Retrieves the collection of timesheet_bonis resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
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
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$sender = 'sender_example'; // string | 
$sender2 = array('sender_example'); // string[] | 
$payroll = 'payroll_example'; // string | 
$payroll2 = array('payroll_example'); // string[] | 
$receiver = 'receiver_example'; // string | 
$receiver2 = array('receiver_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | timesheet_bonis slug_partial
$slug_start_with = 'slug_start_with_example'; // string | timesheet_bonis slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | timesheet_bonis slug_end_with
$id_partial = 'id_partial_example'; // string | timesheet_bonis id_partial
$id_start_with = 'id_start_with_example'; // string | timesheet_bonis id_start_with
$id_end_with = 'id_end_with_example'; // string | timesheet_bonis id_end_with

try {
    $result = $apiInstance->apiTimesheetBonisGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $sender, $sender2, $payroll, $payroll2, $receiver, $receiver2, $status, $status2, $project, $project2, $amount, $amount2, $search, $order_id, $order_created_at, $order_updated_at, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->apiTimesheetBonisGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **sender** | **string**|  | [optional] |
| **sender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payroll** | **string**|  | [optional] |
| **payroll2** | [**string[]**](../Model/string.md)|  | [optional] |
| **receiver** | **string**|  | [optional] |
| **receiver2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| timesheet_bonis slug_partial | [optional] |
| **slug_start_with** | **string**| timesheet_bonis slug_start_with | [optional] |
| **slug_end_with** | **string**| timesheet_bonis slug_end_with | [optional] |
| **id_partial** | **string**| timesheet_bonis id_partial | [optional] |
| **id_start_with** | **string**| timesheet_bonis id_start_with | [optional] |
| **id_end_with** | **string**| timesheet_bonis id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTimesheetBonisGetCollection200Response**](../Model/ApiTimesheetBonisGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetBonisIdDelete()`

```php
apiTimesheetBonisIdDelete($id)
```

Removes the timesheet_bonis resource.

Removes the timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier

try {
    $apiInstance->apiTimesheetBonisIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->apiTimesheetBonisIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |

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

## `apiTimesheetBonisIdGet()`

```php
apiTimesheetBonisIdGet($id): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBonisShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a timesheet_bonis resource.

Retrieves a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier

try {
    $result = $apiInstance->apiTimesheetBonisIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->apiTimesheetBonisIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBonisShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetBonisJsonldTimesheetBonisShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetBonisIdPut()`

```php
apiTimesheetBonisIdPut($id, $timesheet_bonis_jsonld_add_post): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBonisShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the timesheet_bonis resource.

Replaces the timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier
$timesheet_bonis_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetBonisJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetBonisJsonldAddPost | The updated timesheet_bonis resource

try {
    $result = $apiInstance->apiTimesheetBonisIdPut($id, $timesheet_bonis_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->apiTimesheetBonisIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |
| **timesheet_bonis_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetBonisJsonldAddPost**](../Model/TimesheetBonisJsonldAddPost.md)| The updated timesheet_bonis resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBonisShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/TimesheetBonisJsonldTimesheetBonisShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetBonisPost()`

```php
apiTimesheetBonisPost($timesheet_bonis_jsonld_add_post): \OpenAPI\Client\Model\TimesheetBonisJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a timesheet_bonis resource.

Creates a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timesheet_bonis_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetBonisJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetBonisJsonldAddPost | The new timesheet_bonis resource

try {
    $result = $apiInstance->apiTimesheetBonisPost($timesheet_bonis_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->apiTimesheetBonisPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timesheet_bonis_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetBonisJsonldAddPost**](../Model/TimesheetBonisJsonldAddPost.md)| The new timesheet_bonis resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/TimesheetBonisJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBoniApiCorporationAdd()`

```php
timesheetBoniApiCorporationAdd($id, $timesheet_bonis_jsonld): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_bonis resource.

Creates a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier
$timesheet_bonis_jsonld = new \OpenAPI\Client\Model\TimesheetBonisJsonld(); // \OpenAPI\Client\Model\TimesheetBonisJsonld | The new timesheet_bonis resource

try {
    $result = $apiInstance->timesheetBoniApiCorporationAdd($id, $timesheet_bonis_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBoniApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |
| **timesheet_bonis_jsonld** | [**\OpenAPI\Client\Model\TimesheetBonisJsonld**](../Model/TimesheetBonisJsonld.md)| The new timesheet_bonis resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBoniApiCorporationRemove()`

```php
timesheetBoniApiCorporationRemove($id, $timesheet_bonis_jsonld): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_bonis resource.

Creates a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier
$timesheet_bonis_jsonld = new \OpenAPI\Client\Model\TimesheetBonisJsonld(); // \OpenAPI\Client\Model\TimesheetBonisJsonld | The new timesheet_bonis resource

try {
    $result = $apiInstance->timesheetBoniApiCorporationRemove($id, $timesheet_bonis_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBoniApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |
| **timesheet_bonis_jsonld** | [**\OpenAPI\Client\Model\TimesheetBonisJsonld**](../Model/TimesheetBonisJsonld.md)| The new timesheet_bonis resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBoniApiFileUpload()`

```php
timesheetBoniApiFileUpload($id, $timesheet_bonis_jsonld): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_bonis resource.

Creates a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier
$timesheet_bonis_jsonld = new \OpenAPI\Client\Model\TimesheetBonisJsonld(); // \OpenAPI\Client\Model\TimesheetBonisJsonld | The new timesheet_bonis resource

try {
    $result = $apiInstance->timesheetBoniApiFileUpload($id, $timesheet_bonis_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBoniApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |
| **timesheet_bonis_jsonld** | [**\OpenAPI\Client\Model\TimesheetBonisJsonld**](../Model/TimesheetBonisJsonld.md)| The new timesheet_bonis resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBoniDropDown()`

```php
timesheetBoniDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $sender, $sender2, $payroll, $payroll2, $receiver, $receiver2, $status, $status2, $project, $project2, $amount, $amount2, $search, $order_id, $order_created_at, $order_updated_at, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag): \OpenAPI\Client\Model\TimesheetBoniDropDown200Response
```

Retrieves the collection of timesheet_bonis resources.

Retrieves the collection of timesheet_bonis resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
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
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$sender = 'sender_example'; // string | 
$sender2 = array('sender_example'); // string[] | 
$payroll = 'payroll_example'; // string | 
$payroll2 = array('payroll_example'); // string[] | 
$receiver = 'receiver_example'; // string | 
$receiver2 = array('receiver_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->timesheetBoniDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $sender, $sender2, $payroll, $payroll2, $receiver, $receiver2, $status, $status2, $project, $project2, $amount, $amount2, $search, $order_id, $order_created_at, $order_updated_at, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBoniDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **sender** | **string**|  | [optional] |
| **sender2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payroll** | **string**|  | [optional] |
| **payroll2** | [**string[]**](../Model/string.md)|  | [optional] |
| **receiver** | **string**|  | [optional] |
| **receiver2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TimesheetBoniDropDown200Response**](../Model/TimesheetBoniDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBoniDuplicate()`

```php
timesheetBoniDuplicate($id): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingList
```

Retrieves a timesheet_bonis resource.

Retrieves a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier

try {
    $result = $apiInstance->timesheetBoniDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBoniDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingList**](../Model/TimesheetBonisJsonldTimesheetBoniShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBoniFetchFiles()`

```php
timesheetBoniFetchFiles($id): \OpenAPI\Client\Model\TimesheetBonisJsonld
```

Retrieves a timesheet_bonis resource.

Retrieves a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier

try {
    $result = $apiInstance->timesheetBoniFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBoniFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonld**](../Model/TimesheetBonisJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBoniGetDeleteRelations()`

```php
timesheetBoniGetDeleteRelations($id): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniRelations
```

Retrieves a timesheet_bonis resource.

Retrieves a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier

try {
    $result = $apiInstance->timesheetBoniGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBoniGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniRelations**](../Model/TimesheetBonisJsonldTimesheetBoniRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBonisGetBySlug()`

```php
timesheetBonisGetBySlug($slug): \OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a timesheet_bonis resource.

Retrieves a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | timesheet_bonis identifier

try {
    $result = $apiInstance->timesheetBonisGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBonisGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| timesheet_bonis identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldTimesheetBoniShowIdCustomPropertyTimestampableTagTaggingList**](../Model/TimesheetBonisJsonldTimesheetBoniShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetBonisMetadata()`

```php
timesheetBonisMetadata($id): \OpenAPI\Client\Model\TimesheetBonisJsonldIdStandardMetadataTimesheetBonisMetadataTagTaggingListTimesheetBonisRelationsTimestampable
```

Retrieves a timesheet_bonis resource.

Retrieves a timesheet_bonis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetBonisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_bonis identifier

try {
    $result = $apiInstance->timesheetBonisMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetBonisApi->timesheetBonisMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_bonis identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetBonisJsonldIdStandardMetadataTimesheetBonisMetadataTagTaggingListTimesheetBonisRelationsTimestampable**](../Model/TimesheetBonisJsonldIdStandardMetadataTimesheetBonisMetadataTagTaggingListTimesheetBonisRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
