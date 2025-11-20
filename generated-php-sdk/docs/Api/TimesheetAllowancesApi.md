# OpenAPI\Client\TimesheetAllowancesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTimesheetAllowancesGetCollection()**](TimesheetAllowancesApi.md#apiTimesheetAllowancesGetCollection) | **GET** /open-api/v3/timesheet_allowances | Retrieves the collection of timesheet_allowances resources. |
| [**apiTimesheetAllowancesIdDelete()**](TimesheetAllowancesApi.md#apiTimesheetAllowancesIdDelete) | **DELETE** /open-api/v3/timesheet_allowances/{id} | Removes the timesheet_allowances resource. |
| [**apiTimesheetAllowancesIdGet()**](TimesheetAllowancesApi.md#apiTimesheetAllowancesIdGet) | **GET** /open-api/v3/timesheet_allowances/{id} | Retrieves a timesheet_allowances resource. |
| [**apiTimesheetAllowancesIdPut()**](TimesheetAllowancesApi.md#apiTimesheetAllowancesIdPut) | **PUT** /open-api/v3/timesheet_allowances/{id} | Replaces the timesheet_allowances resource. |
| [**apiTimesheetAllowancesPost()**](TimesheetAllowancesApi.md#apiTimesheetAllowancesPost) | **POST** /open-api/v3/timesheet_allowances | Creates a timesheet_allowances resource. |
| [**timesheetAllowanceApiCorporationAdd()**](TimesheetAllowancesApi.md#timesheetAllowanceApiCorporationAdd) | **POST** /open-api/v3/timesheet_allowances/{id}/corporation/add | Creates a timesheet_allowances resource. |
| [**timesheetAllowanceApiCorporationRemove()**](TimesheetAllowancesApi.md#timesheetAllowanceApiCorporationRemove) | **POST** /open-api/v3/timesheet_allowances/{id}/corporation/remove | Creates a timesheet_allowances resource. |
| [**timesheetAllowanceApiFileUpload()**](TimesheetAllowancesApi.md#timesheetAllowanceApiFileUpload) | **POST** /open-api/v3/timesheet_allowances/{id}/file/upload | Creates a timesheet_allowances resource. |
| [**timesheetAllowanceDropDown()**](TimesheetAllowancesApi.md#timesheetAllowanceDropDown) | **GET** /open-api/v3/timesheet_allowances/dropdown/get | Retrieves the collection of timesheet_allowances resources. |
| [**timesheetAllowanceDuplicate()**](TimesheetAllowancesApi.md#timesheetAllowanceDuplicate) | **GET** /open-api/v3/timesheet_allowances/duplicate/{id} | Retrieves a timesheet_allowances resource. |
| [**timesheetAllowanceFetchFiles()**](TimesheetAllowancesApi.md#timesheetAllowanceFetchFiles) | **GET** /open-api/v3/timesheet_allowances/fetch_files/{id} | Retrieves a timesheet_allowances resource. |
| [**timesheetAllowanceGetBySlug()**](TimesheetAllowancesApi.md#timesheetAllowanceGetBySlug) | **GET** /open-api/v3/timesheet_allowances/by_slug/{slug} | Retrieves a timesheet_allowances resource. |
| [**timesheetAllowanceGetDeleteRelations()**](TimesheetAllowancesApi.md#timesheetAllowanceGetDeleteRelations) | **GET** /open-api/v3/timesheet_allowances/get_delete_relations/{id} | Retrieves a timesheet_allowances resource. |
| [**timesheetAllowanceMetadata()**](TimesheetAllowancesApi.md#timesheetAllowanceMetadata) | **GET** /open-api/v3/timesheet_allowances/metadata/{id} | Retrieves a timesheet_allowances resource. |


## `apiTimesheetAllowancesGetCollection()`

```php
apiTimesheetAllowancesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $employee, $employee2, $status, $status2, $type, $type2, $search, $donor_employe_user_id, $donor_employe_user_id2, $amount, $amount2, $amount_between, $amount_gt, $amount_gte, $amount_lt, $amount_lte, $chargeable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_justification, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_donor_employe_user_id, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiTimesheetAllowancesGetCollection200Response
```

Retrieves the collection of timesheet_allowances resources.

Retrieves the collection of timesheet_allowances resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
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
$id = 56; // int | 
$id2 = array(56); // int[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$donor_employe_user_id = 56; // int | 
$donor_employe_user_id2 = array(56); // int[] | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$amount_between = 'amount_between_example'; // string | 
$amount_gt = 'amount_gt_example'; // string | 
$amount_gte = 'amount_gte_example'; // string | 
$amount_lt = 'amount_lt_example'; // string | 
$amount_lte = 'amount_lte_example'; // string | 
$chargeable = True; // bool | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_justification = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_timestamp = 'order_timestamp_example'; // string | 
$order_donor_employe_user_id = 'order_donor_employe_user_id_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | timesheet_allowances slug_partial
$slug_start_with = 'slug_start_with_example'; // string | timesheet_allowances slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | timesheet_allowances slug_end_with
$id_partial = 'id_partial_example'; // string | timesheet_allowances id_partial
$id_start_with = 'id_start_with_example'; // string | timesheet_allowances id_start_with
$id_end_with = 'id_end_with_example'; // string | timesheet_allowances id_end_with

try {
    $result = $apiInstance->apiTimesheetAllowancesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $employee, $employee2, $status, $status2, $type, $type2, $search, $donor_employe_user_id, $donor_employe_user_id2, $amount, $amount2, $amount_between, $amount_gt, $amount_gte, $amount_lt, $amount_lte, $chargeable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_justification, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_donor_employe_user_id, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->apiTimesheetAllowancesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **donor_employe_user_id** | **int**|  | [optional] |
| **donor_employe_user_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **amount_between** | **string**|  | [optional] |
| **amount_gt** | **string**|  | [optional] |
| **amount_gte** | **string**|  | [optional] |
| **amount_lt** | **string**|  | [optional] |
| **amount_lte** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_justification** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_timestamp** | **string**|  | [optional] |
| **order_donor_employe_user_id** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| timesheet_allowances slug_partial | [optional] |
| **slug_start_with** | **string**| timesheet_allowances slug_start_with | [optional] |
| **slug_end_with** | **string**| timesheet_allowances slug_end_with | [optional] |
| **id_partial** | **string**| timesheet_allowances id_partial | [optional] |
| **id_start_with** | **string**| timesheet_allowances id_start_with | [optional] |
| **id_end_with** | **string**| timesheet_allowances id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTimesheetAllowancesGetCollection200Response**](../Model/ApiTimesheetAllowancesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetAllowancesIdDelete()`

```php
apiTimesheetAllowancesIdDelete($id)
```

Removes the timesheet_allowances resource.

Removes the timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier

try {
    $apiInstance->apiTimesheetAllowancesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->apiTimesheetAllowancesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |

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

## `apiTimesheetAllowancesIdGet()`

```php
apiTimesheetAllowancesIdGet($id): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a timesheet_allowances resource.

Retrieves a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier

try {
    $result = $apiInstance->apiTimesheetAllowancesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->apiTimesheetAllowancesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetAllowancesIdPut()`

```php
apiTimesheetAllowancesIdPut($id, $timesheet_allowances_jsonld_add_post): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingList
```

Replaces the timesheet_allowances resource.

Replaces the timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier
$timesheet_allowances_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetAllowancesJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetAllowancesJsonldAddPost | The updated timesheet_allowances resource

try {
    $result = $apiInstance->apiTimesheetAllowancesIdPut($id, $timesheet_allowances_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->apiTimesheetAllowancesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |
| **timesheet_allowances_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetAllowancesJsonldAddPost**](../Model/TimesheetAllowancesJsonldAddPost.md)| The updated timesheet_allowances resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingList**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetAllowancesPost()`

```php
apiTimesheetAllowancesPost($timesheet_allowances_jsonld_add_post): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_allowances resource.

Creates a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timesheet_allowances_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetAllowancesJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetAllowancesJsonldAddPost | The new timesheet_allowances resource

try {
    $result = $apiInstance->apiTimesheetAllowancesPost($timesheet_allowances_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->apiTimesheetAllowancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timesheet_allowances_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetAllowancesJsonldAddPost**](../Model/TimesheetAllowancesJsonldAddPost.md)| The new timesheet_allowances resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceApiCorporationAdd()`

```php
timesheetAllowanceApiCorporationAdd($id, $timesheet_allowances_jsonld): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_allowances resource.

Creates a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier
$timesheet_allowances_jsonld = new \OpenAPI\Client\Model\TimesheetAllowancesJsonld(); // \OpenAPI\Client\Model\TimesheetAllowancesJsonld | The new timesheet_allowances resource

try {
    $result = $apiInstance->timesheetAllowanceApiCorporationAdd($id, $timesheet_allowances_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |
| **timesheet_allowances_jsonld** | [**\OpenAPI\Client\Model\TimesheetAllowancesJsonld**](../Model/TimesheetAllowancesJsonld.md)| The new timesheet_allowances resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceApiCorporationRemove()`

```php
timesheetAllowanceApiCorporationRemove($id, $timesheet_allowances_jsonld): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_allowances resource.

Creates a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier
$timesheet_allowances_jsonld = new \OpenAPI\Client\Model\TimesheetAllowancesJsonld(); // \OpenAPI\Client\Model\TimesheetAllowancesJsonld | The new timesheet_allowances resource

try {
    $result = $apiInstance->timesheetAllowanceApiCorporationRemove($id, $timesheet_allowances_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |
| **timesheet_allowances_jsonld** | [**\OpenAPI\Client\Model\TimesheetAllowancesJsonld**](../Model/TimesheetAllowancesJsonld.md)| The new timesheet_allowances resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceApiFileUpload()`

```php
timesheetAllowanceApiFileUpload($id, $timesheet_allowances_jsonld): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_allowances resource.

Creates a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier
$timesheet_allowances_jsonld = new \OpenAPI\Client\Model\TimesheetAllowancesJsonld(); // \OpenAPI\Client\Model\TimesheetAllowancesJsonld | The new timesheet_allowances resource

try {
    $result = $apiInstance->timesheetAllowanceApiFileUpload($id, $timesheet_allowances_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |
| **timesheet_allowances_jsonld** | [**\OpenAPI\Client\Model\TimesheetAllowancesJsonld**](../Model/TimesheetAllowancesJsonld.md)| The new timesheet_allowances resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceDropDown()`

```php
timesheetAllowanceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $employee, $employee2, $status, $status2, $type, $type2, $search, $donor_employe_user_id, $donor_employe_user_id2, $amount, $amount2, $amount_between, $amount_gt, $amount_gte, $amount_lt, $amount_lte, $chargeable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_justification, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_donor_employe_user_id, $properties, $enabled, $tag): \OpenAPI\Client\Model\TimesheetAllowanceDropDown200Response
```

Retrieves the collection of timesheet_allowances resources.

Retrieves the collection of timesheet_allowances resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
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
$id = 56; // int | 
$id2 = array(56); // int[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$donor_employe_user_id = 56; // int | 
$donor_employe_user_id2 = array(56); // int[] | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$amount_between = 'amount_between_example'; // string | 
$amount_gt = 'amount_gt_example'; // string | 
$amount_gte = 'amount_gte_example'; // string | 
$amount_lt = 'amount_lt_example'; // string | 
$amount_lte = 'amount_lte_example'; // string | 
$chargeable = True; // bool | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_justification = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_timestamp = 'order_timestamp_example'; // string | 
$order_donor_employe_user_id = 'order_donor_employe_user_id_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->timesheetAllowanceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $employee, $employee2, $status, $status2, $type, $type2, $search, $donor_employe_user_id, $donor_employe_user_id2, $amount, $amount2, $amount_between, $amount_gt, $amount_gte, $amount_lt, $amount_lte, $chargeable, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_justification, $order_id, $order_created_at, $order_updated_at, $order_timestamp, $order_donor_employe_user_id, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceDropDown: ', $e->getMessage(), PHP_EOL;
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
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **donor_employe_user_id** | **int**|  | [optional] |
| **donor_employe_user_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **amount_between** | **string**|  | [optional] |
| **amount_gt** | **string**|  | [optional] |
| **amount_gte** | **string**|  | [optional] |
| **amount_lt** | **string**|  | [optional] |
| **amount_lte** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_justification** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_timestamp** | **string**|  | [optional] |
| **order_donor_employe_user_id** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceDropDown200Response**](../Model/TimesheetAllowanceDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceDuplicate()`

```php
timesheetAllowanceDuplicate($id): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingList
```

Retrieves a timesheet_allowances resource.

Retrieves a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier

try {
    $result = $apiInstance->timesheetAllowanceDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingList**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceFetchFiles()`

```php
timesheetAllowanceFetchFiles($id): \OpenAPI\Client\Model\TimesheetAllowancesJsonld
```

Retrieves a timesheet_allowances resource.

Retrieves a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier

try {
    $result = $apiInstance->timesheetAllowanceFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonld**](../Model/TimesheetAllowancesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceGetBySlug()`

```php
timesheetAllowanceGetBySlug($slug): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a timesheet_allowances resource.

Retrieves a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | timesheet_allowances identifier

try {
    $result = $apiInstance->timesheetAllowanceGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| timesheet_allowances identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceGetDeleteRelations()`

```php
timesheetAllowanceGetDeleteRelations($id): \OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceRelations
```

Retrieves a timesheet_allowances resource.

Retrieves a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier

try {
    $result = $apiInstance->timesheetAllowanceGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldTimesheetAllowanceRelations**](../Model/TimesheetAllowancesJsonldTimesheetAllowanceRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceMetadata()`

```php
timesheetAllowanceMetadata($id): \OpenAPI\Client\Model\TimesheetAllowancesJsonldIdStandardMetadataTimesheetAllowanceMetadataTagTaggingListTimesheetAllowanceRelationsTimestampable
```

Retrieves a timesheet_allowances resource.

Retrieves a timesheet_allowances resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowances identifier

try {
    $result = $apiInstance->timesheetAllowanceMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowancesApi->timesheetAllowanceMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowances identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowancesJsonldIdStandardMetadataTimesheetAllowanceMetadataTagTaggingListTimesheetAllowanceRelationsTimestampable**](../Model/TimesheetAllowancesJsonldIdStandardMetadataTimesheetAllowanceMetadataTagTaggingListTimesheetAllowanceRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
