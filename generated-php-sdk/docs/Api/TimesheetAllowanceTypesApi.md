# OpenAPI\Client\TimesheetAllowanceTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTimesheetAllowanceTypesGetCollection()**](TimesheetAllowanceTypesApi.md#apiTimesheetAllowanceTypesGetCollection) | **GET** /open-api/v3/timesheet_allowance_types | Retrieves the collection of timesheet_allowance_types resources. |
| [**apiTimesheetAllowanceTypesIdDelete()**](TimesheetAllowanceTypesApi.md#apiTimesheetAllowanceTypesIdDelete) | **DELETE** /open-api/v3/timesheet_allowance_types/{id} | Removes the timesheet_allowance_types resource. |
| [**apiTimesheetAllowanceTypesIdGet()**](TimesheetAllowanceTypesApi.md#apiTimesheetAllowanceTypesIdGet) | **GET** /open-api/v3/timesheet_allowance_types/{id} | Retrieves a timesheet_allowance_types resource. |
| [**apiTimesheetAllowanceTypesIdPut()**](TimesheetAllowanceTypesApi.md#apiTimesheetAllowanceTypesIdPut) | **PUT** /open-api/v3/timesheet_allowance_types/{id} | Replaces the timesheet_allowance_types resource. |
| [**apiTimesheetAllowanceTypesPost()**](TimesheetAllowanceTypesApi.md#apiTimesheetAllowanceTypesPost) | **POST** /open-api/v3/timesheet_allowance_types | Creates a timesheet_allowance_types resource. |
| [**timesheetAllowanceTypeApiFileUpload()**](TimesheetAllowanceTypesApi.md#timesheetAllowanceTypeApiFileUpload) | **POST** /open-api/v3/timesheet_allowance_types/{id}/file/upload | Creates a timesheet_allowance_types resource. |
| [**timesheetAllowanceTypeDropDown()**](TimesheetAllowanceTypesApi.md#timesheetAllowanceTypeDropDown) | **GET** /open-api/v3/timesheet_allowance_types/dropdown/get | Retrieves the collection of timesheet_allowance_types resources. |
| [**timesheetAllowanceTypeDuplicate()**](TimesheetAllowanceTypesApi.md#timesheetAllowanceTypeDuplicate) | **GET** /open-api/v3/timesheet_allowance_types/duplicate/{id} | Retrieves a timesheet_allowance_types resource. |
| [**timesheetAllowanceTypeFetchFiles()**](TimesheetAllowanceTypesApi.md#timesheetAllowanceTypeFetchFiles) | **GET** /open-api/v3/timesheet_allowance_types/fetch_files/{id} | Retrieves a timesheet_allowance_types resource. |
| [**timesheetAllowanceTypeGetBySlug()**](TimesheetAllowanceTypesApi.md#timesheetAllowanceTypeGetBySlug) | **GET** /open-api/v3/timesheet_allowance_types/by_slug/{slug} | Retrieves a timesheet_allowance_types resource. |
| [**timesheetAllowanceTypeGetDeleteRelations()**](TimesheetAllowanceTypesApi.md#timesheetAllowanceTypeGetDeleteRelations) | **GET** /open-api/v3/timesheet_allowance_types/get_delete_relations/{id} | Retrieves a timesheet_allowance_types resource. |
| [**timesheetAllowanceTypeMetadata()**](TimesheetAllowanceTypesApi.md#timesheetAllowanceTypeMetadata) | **GET** /open-api/v3/timesheet_allowance_types/metadata/{id} | Retrieves a timesheet_allowance_types resource. |


## `apiTimesheetAllowanceTypesGetCollection()`

```php
apiTimesheetAllowanceTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiTimesheetAllowanceTypesGetCollection200Response
```

Retrieves the collection of timesheet_allowance_types resources.

Retrieves the collection of timesheet_allowance_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
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
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | timesheet_allowance_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | timesheet_allowance_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | timesheet_allowance_types slug_end_with
$id_partial = 'id_partial_example'; // string | timesheet_allowance_types id_partial
$id_start_with = 'id_start_with_example'; // string | timesheet_allowance_types id_start_with
$id_end_with = 'id_end_with_example'; // string | timesheet_allowance_types id_end_with
$icon_partial = 'icon_partial_example'; // string | timesheet_allowance_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | timesheet_allowance_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | timesheet_allowance_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | timesheet_allowance_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | timesheet_allowance_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | timesheet_allowance_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | timesheet_allowance_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | timesheet_allowance_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | timesheet_allowance_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | timesheet_allowance_types priority_range

try {
    $result = $apiInstance->apiTimesheetAllowanceTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->apiTimesheetAllowanceTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| timesheet_allowance_types slug_partial | [optional] |
| **slug_start_with** | **string**| timesheet_allowance_types slug_start_with | [optional] |
| **slug_end_with** | **string**| timesheet_allowance_types slug_end_with | [optional] |
| **id_partial** | **string**| timesheet_allowance_types id_partial | [optional] |
| **id_start_with** | **string**| timesheet_allowance_types id_start_with | [optional] |
| **id_end_with** | **string**| timesheet_allowance_types id_end_with | [optional] |
| **icon_partial** | **string**| timesheet_allowance_types icon_partial | [optional] |
| **icon_start_with** | **string**| timesheet_allowance_types icon_start_with | [optional] |
| **icon_end_with** | **string**| timesheet_allowance_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| timesheet_allowance_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| timesheet_allowance_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| timesheet_allowance_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| timesheet_allowance_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| timesheet_allowance_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| timesheet_allowance_types translations.description_end_with | [optional] |
| **priority_range** | **string**| timesheet_allowance_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTimesheetAllowanceTypesGetCollection200Response**](../Model/ApiTimesheetAllowanceTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetAllowanceTypesIdDelete()`

```php
apiTimesheetAllowanceTypesIdDelete($id)
```

Removes the timesheet_allowance_types resource.

Removes the timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier

try {
    $apiInstance->apiTimesheetAllowanceTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->apiTimesheetAllowanceTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |

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

## `apiTimesheetAllowanceTypesIdGet()`

```php
apiTimesheetAllowanceTypesIdGet($id): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a timesheet_allowance_types resource.

Retrieves a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier

try {
    $result = $apiInstance->apiTimesheetAllowanceTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->apiTimesheetAllowanceTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetAllowanceTypesIdPut()`

```php
apiTimesheetAllowanceTypesIdPut($id, $timesheet_allowance_types_jsonld_post): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the timesheet_allowance_types resource.

Replaces the timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier
$timesheet_allowance_types_jsonld_post = new \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldPost(); // \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldPost | The updated timesheet_allowance_types resource

try {
    $result = $apiInstance->apiTimesheetAllowanceTypesIdPut($id, $timesheet_allowance_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->apiTimesheetAllowanceTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |
| **timesheet_allowance_types_jsonld_post** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldPost**](../Model/TimesheetAllowanceTypesJsonldPost.md)| The updated timesheet_allowance_types resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/TimesheetAllowanceTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetAllowanceTypesPost()`

```php
apiTimesheetAllowanceTypesPost($timesheet_allowance_types_jsonld_add_post): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonld
```

Creates a timesheet_allowance_types resource.

Creates a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timesheet_allowance_types_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldAddPost | The new timesheet_allowance_types resource

try {
    $result = $apiInstance->apiTimesheetAllowanceTypesPost($timesheet_allowance_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->apiTimesheetAllowanceTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timesheet_allowance_types_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldAddPost**](../Model/TimesheetAllowanceTypesJsonldAddPost.md)| The new timesheet_allowance_types resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonld**](../Model/TimesheetAllowanceTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceTypeApiFileUpload()`

```php
timesheetAllowanceTypeApiFileUpload($id, $timesheet_allowance_types_jsonld): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_allowance_types resource.

Creates a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier
$timesheet_allowance_types_jsonld = new \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonld(); // \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonld | The new timesheet_allowance_types resource

try {
    $result = $apiInstance->timesheetAllowanceTypeApiFileUpload($id, $timesheet_allowance_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->timesheetAllowanceTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |
| **timesheet_allowance_types_jsonld** | [**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonld**](../Model/TimesheetAllowanceTypesJsonld.md)| The new timesheet_allowance_types resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceTypeDropDown()`

```php
timesheetAllowanceTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\TimesheetAllowanceTypeDropDown200Response
```

Retrieves the collection of timesheet_allowance_types resources.

Retrieves the collection of timesheet_allowance_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
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
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
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
    $result = $apiInstance->timesheetAllowanceTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->timesheetAllowanceTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
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

[**\OpenAPI\Client\Model\TimesheetAllowanceTypeDropDown200Response**](../Model/TimesheetAllowanceTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceTypeDuplicate()`

```php
timesheetAllowanceTypeDuplicate($id): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingList
```

Retrieves a timesheet_allowance_types resource.

Retrieves a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier

try {
    $result = $apiInstance->timesheetAllowanceTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->timesheetAllowanceTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingList**](../Model/TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceTypeFetchFiles()`

```php
timesheetAllowanceTypeFetchFiles($id): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonld
```

Retrieves a timesheet_allowance_types resource.

Retrieves a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier

try {
    $result = $apiInstance->timesheetAllowanceTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->timesheetAllowanceTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonld**](../Model/TimesheetAllowanceTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceTypeGetBySlug()`

```php
timesheetAllowanceTypeGetBySlug($slug): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a timesheet_allowance_types resource.

Retrieves a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | timesheet_allowance_types identifier

try {
    $result = $apiInstance->timesheetAllowanceTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->timesheetAllowanceTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| timesheet_allowance_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceTypeGetDeleteRelations()`

```php
timesheetAllowanceTypeGetDeleteRelations($id): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeRelations
```

Retrieves a timesheet_allowance_types resource.

Retrieves a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier

try {
    $result = $apiInstance->timesheetAllowanceTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->timesheetAllowanceTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeRelations**](../Model/TimesheetAllowanceTypesJsonldTimesheetAllowanceTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAllowanceTypeMetadata()`

```php
timesheetAllowanceTypeMetadata($id): \OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldIdStandardMetadataTimesheetAllowanceTypeMetadataTagTaggingListTimesheetAllowanceTypeRelationsTimestampable
```

Retrieves a timesheet_allowance_types resource.

Retrieves a timesheet_allowance_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetAllowanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_allowance_types identifier

try {
    $result = $apiInstance->timesheetAllowanceTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAllowanceTypesApi->timesheetAllowanceTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_allowance_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetAllowanceTypesJsonldIdStandardMetadataTimesheetAllowanceTypeMetadataTagTaggingListTimesheetAllowanceTypeRelationsTimestampable**](../Model/TimesheetAllowanceTypesJsonldIdStandardMetadataTimesheetAllowanceTypeMetadataTagTaggingListTimesheetAllowanceTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
