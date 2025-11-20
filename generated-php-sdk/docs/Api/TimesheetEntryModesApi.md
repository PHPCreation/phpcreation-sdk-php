# OpenAPI\Client\TimesheetEntryModesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTimesheetEntryModesGetCollection()**](TimesheetEntryModesApi.md#apiTimesheetEntryModesGetCollection) | **GET** /open-api/v3/timesheet_entry_modes | Retrieves the collection of timesheet_entry_modes resources. |
| [**apiTimesheetEntryModesIdDelete()**](TimesheetEntryModesApi.md#apiTimesheetEntryModesIdDelete) | **DELETE** /open-api/v3/timesheet_entry_modes/{id} | Removes the timesheet_entry_modes resource. |
| [**apiTimesheetEntryModesIdGet()**](TimesheetEntryModesApi.md#apiTimesheetEntryModesIdGet) | **GET** /open-api/v3/timesheet_entry_modes/{id} | Retrieves a timesheet_entry_modes resource. |
| [**apiTimesheetEntryModesIdPut()**](TimesheetEntryModesApi.md#apiTimesheetEntryModesIdPut) | **PUT** /open-api/v3/timesheet_entry_modes/{id} | Replaces the timesheet_entry_modes resource. |
| [**apiTimesheetEntryModesPost()**](TimesheetEntryModesApi.md#apiTimesheetEntryModesPost) | **POST** /open-api/v3/timesheet_entry_modes | Creates a timesheet_entry_modes resource. |
| [**timesheetEntryModeApiFileUpload()**](TimesheetEntryModesApi.md#timesheetEntryModeApiFileUpload) | **POST** /open-api/v3/timesheet_entry_modes/{id}/file/upload | Creates a timesheet_entry_modes resource. |
| [**timesheetEntryModeDropDown()**](TimesheetEntryModesApi.md#timesheetEntryModeDropDown) | **GET** /open-api/v3/timesheet_entry_modes/dropdown/get | Retrieves the collection of timesheet_entry_modes resources. |
| [**timesheetEntryModeDuplicate()**](TimesheetEntryModesApi.md#timesheetEntryModeDuplicate) | **GET** /open-api/v3/timesheet_entry_modes/duplicate/{id} | Retrieves a timesheet_entry_modes resource. |
| [**timesheetEntryModeFetchFiles()**](TimesheetEntryModesApi.md#timesheetEntryModeFetchFiles) | **GET** /open-api/v3/timesheet_entry_modes/fetch_files/{id} | Retrieves a timesheet_entry_modes resource. |
| [**timesheetEntryModeGetBySlug()**](TimesheetEntryModesApi.md#timesheetEntryModeGetBySlug) | **GET** /open-api/v3/timesheet_entry_modes/by_slug/{slug} | Retrieves a timesheet_entry_modes resource. |
| [**timesheetEntryModeGetDeleteRelations()**](TimesheetEntryModesApi.md#timesheetEntryModeGetDeleteRelations) | **GET** /open-api/v3/timesheet_entry_modes/get_delete_relations/{id} | Retrieves a timesheet_entry_modes resource. |
| [**timesheetEntryModeMetadata()**](TimesheetEntryModesApi.md#timesheetEntryModeMetadata) | **GET** /open-api/v3/timesheet_entry_modes/metadata/{id} | Retrieves a timesheet_entry_modes resource. |


## `apiTimesheetEntryModesGetCollection()`

```php
apiTimesheetEntryModesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiTimesheetEntryModesGetCollection200Response
```

Retrieves the collection of timesheet_entry_modes resources.

Retrieves the collection of timesheet_entry_modes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
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
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | timesheet_entry_modes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | timesheet_entry_modes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | timesheet_entry_modes slug_end_with
$id_partial = 'id_partial_example'; // string | timesheet_entry_modes id_partial
$id_start_with = 'id_start_with_example'; // string | timesheet_entry_modes id_start_with
$id_end_with = 'id_end_with_example'; // string | timesheet_entry_modes id_end_with
$icon_partial = 'icon_partial_example'; // string | timesheet_entry_modes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | timesheet_entry_modes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | timesheet_entry_modes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | timesheet_entry_modes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | timesheet_entry_modes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | timesheet_entry_modes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | timesheet_entry_modes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | timesheet_entry_modes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | timesheet_entry_modes translations.description_end_with
$priority_range = 'priority_range_example'; // string | timesheet_entry_modes priority_range

try {
    $result = $apiInstance->apiTimesheetEntryModesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->apiTimesheetEntryModesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| timesheet_entry_modes slug_partial | [optional] |
| **slug_start_with** | **string**| timesheet_entry_modes slug_start_with | [optional] |
| **slug_end_with** | **string**| timesheet_entry_modes slug_end_with | [optional] |
| **id_partial** | **string**| timesheet_entry_modes id_partial | [optional] |
| **id_start_with** | **string**| timesheet_entry_modes id_start_with | [optional] |
| **id_end_with** | **string**| timesheet_entry_modes id_end_with | [optional] |
| **icon_partial** | **string**| timesheet_entry_modes icon_partial | [optional] |
| **icon_start_with** | **string**| timesheet_entry_modes icon_start_with | [optional] |
| **icon_end_with** | **string**| timesheet_entry_modes icon_end_with | [optional] |
| **translations_title_partial** | **string**| timesheet_entry_modes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| timesheet_entry_modes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| timesheet_entry_modes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| timesheet_entry_modes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| timesheet_entry_modes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| timesheet_entry_modes translations.description_end_with | [optional] |
| **priority_range** | **string**| timesheet_entry_modes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTimesheetEntryModesGetCollection200Response**](../Model/ApiTimesheetEntryModesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetEntryModesIdDelete()`

```php
apiTimesheetEntryModesIdDelete($id)
```

Removes the timesheet_entry_modes resource.

Removes the timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier

try {
    $apiInstance->apiTimesheetEntryModesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->apiTimesheetEntryModesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |

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

## `apiTimesheetEntryModesIdGet()`

```php
apiTimesheetEntryModesIdGet($id): \OpenAPI\Client\Model\TimesheetEntryModesJsonldStandardShowTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a timesheet_entry_modes resource.

Retrieves a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier

try {
    $result = $apiInstance->apiTimesheetEntryModesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->apiTimesheetEntryModesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldStandardShowTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetEntryModesJsonldStandardShowTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetEntryModesIdPut()`

```php
apiTimesheetEntryModesIdPut($id, $timesheet_entry_modes_jsonld_post): \OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingList
```

Replaces the timesheet_entry_modes resource.

Replaces the timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier
$timesheet_entry_modes_jsonld_post = new \OpenAPI\Client\Model\TimesheetEntryModesJsonldPost(); // \OpenAPI\Client\Model\TimesheetEntryModesJsonldPost | The updated timesheet_entry_modes resource

try {
    $result = $apiInstance->apiTimesheetEntryModesIdPut($id, $timesheet_entry_modes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->apiTimesheetEntryModesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |
| **timesheet_entry_modes_jsonld_post** | [**\OpenAPI\Client\Model\TimesheetEntryModesJsonldPost**](../Model/TimesheetEntryModesJsonldPost.md)| The updated timesheet_entry_modes resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingList**](../Model/TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetEntryModesPost()`

```php
apiTimesheetEntryModesPost($timesheet_entry_modes_jsonld_add_post): \OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_entry_modes resource.

Creates a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timesheet_entry_modes_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetEntryModesJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetEntryModesJsonldAddPost | The new timesheet_entry_modes resource

try {
    $result = $apiInstance->apiTimesheetEntryModesPost($timesheet_entry_modes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->apiTimesheetEntryModesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timesheet_entry_modes_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetEntryModesJsonldAddPost**](../Model/TimesheetEntryModesJsonldAddPost.md)| The new timesheet_entry_modes resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntryModeApiFileUpload()`

```php
timesheetEntryModeApiFileUpload($id, $timesheet_entry_modes_jsonld): \OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_entry_modes resource.

Creates a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier
$timesheet_entry_modes_jsonld = new \OpenAPI\Client\Model\TimesheetEntryModesJsonld(); // \OpenAPI\Client\Model\TimesheetEntryModesJsonld | The new timesheet_entry_modes resource

try {
    $result = $apiInstance->timesheetEntryModeApiFileUpload($id, $timesheet_entry_modes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->timesheetEntryModeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |
| **timesheet_entry_modes_jsonld** | [**\OpenAPI\Client\Model\TimesheetEntryModesJsonld**](../Model/TimesheetEntryModesJsonld.md)| The new timesheet_entry_modes resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntryModeDropDown()`

```php
timesheetEntryModeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\TimesheetEntryModeDropDown200Response
```

Retrieves the collection of timesheet_entry_modes resources.

Retrieves the collection of timesheet_entry_modes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
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
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
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
    $result = $apiInstance->timesheetEntryModeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->timesheetEntryModeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
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

[**\OpenAPI\Client\Model\TimesheetEntryModeDropDown200Response**](../Model/TimesheetEntryModeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntryModeDuplicate()`

```php
timesheetEntryModeDuplicate($id): \OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingList
```

Retrieves a timesheet_entry_modes resource.

Retrieves a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier

try {
    $result = $apiInstance->timesheetEntryModeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->timesheetEntryModeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingList**](../Model/TimesheetEntryModesJsonldTimesheetEntryModeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntryModeFetchFiles()`

```php
timesheetEntryModeFetchFiles($id): \OpenAPI\Client\Model\TimesheetEntryModesJsonld
```

Retrieves a timesheet_entry_modes resource.

Retrieves a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier

try {
    $result = $apiInstance->timesheetEntryModeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->timesheetEntryModeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonld**](../Model/TimesheetEntryModesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntryModeGetBySlug()`

```php
timesheetEntryModeGetBySlug($slug): \OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a timesheet_entry_modes resource.

Retrieves a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | timesheet_entry_modes identifier

try {
    $result = $apiInstance->timesheetEntryModeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->timesheetEntryModeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| timesheet_entry_modes identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/TimesheetEntryModesJsonldTimesheetEntryModeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntryModeGetDeleteRelations()`

```php
timesheetEntryModeGetDeleteRelations($id): \OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeRelations
```

Retrieves a timesheet_entry_modes resource.

Retrieves a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier

try {
    $result = $apiInstance->timesheetEntryModeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->timesheetEntryModeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldTimesheetEntryModeRelations**](../Model/TimesheetEntryModesJsonldTimesheetEntryModeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntryModeMetadata()`

```php
timesheetEntryModeMetadata($id): \OpenAPI\Client\Model\TimesheetEntryModesJsonldIdStandardMetadataTimesheetEntryModeMetadataTagTaggingListTimesheetEntryModeRelationsTimestampable
```

Retrieves a timesheet_entry_modes resource.

Retrieves a timesheet_entry_modes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetEntryModesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_entry_modes identifier

try {
    $result = $apiInstance->timesheetEntryModeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntryModesApi->timesheetEntryModeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_entry_modes identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetEntryModesJsonldIdStandardMetadataTimesheetEntryModeMetadataTagTaggingListTimesheetEntryModeRelationsTimestampable**](../Model/TimesheetEntryModesJsonldIdStandardMetadataTimesheetEntryModeMetadataTagTaggingListTimesheetEntryModeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
