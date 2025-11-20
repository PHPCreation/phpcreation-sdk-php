# OpenAPI\Client\TimesheetTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTimesheetTypesGetCollection()**](TimesheetTypesApi.md#apiTimesheetTypesGetCollection) | **GET** /open-api/v3/timesheet_types | Retrieves the collection of timesheet_types resources. |
| [**apiTimesheetTypesIdDelete()**](TimesheetTypesApi.md#apiTimesheetTypesIdDelete) | **DELETE** /open-api/v3/timesheet_types/{id} | Removes the timesheet_types resource. |
| [**apiTimesheetTypesIdGet()**](TimesheetTypesApi.md#apiTimesheetTypesIdGet) | **GET** /open-api/v3/timesheet_types/{id} | Retrieves a timesheet_types resource. |
| [**apiTimesheetTypesIdPut()**](TimesheetTypesApi.md#apiTimesheetTypesIdPut) | **PUT** /open-api/v3/timesheet_types/{id} | Replaces the timesheet_types resource. |
| [**apiTimesheetTypesPost()**](TimesheetTypesApi.md#apiTimesheetTypesPost) | **POST** /open-api/v3/timesheet_types | Creates a timesheet_types resource. |
| [**timesheetTypeApiFileUpload()**](TimesheetTypesApi.md#timesheetTypeApiFileUpload) | **POST** /open-api/v3/timesheet_types/{id}/file/upload | Creates a timesheet_types resource. |
| [**timesheetTypeDropDown()**](TimesheetTypesApi.md#timesheetTypeDropDown) | **GET** /open-api/v3/timesheet_types/dropdown/get | Retrieves the collection of timesheet_types resources. |
| [**timesheetTypeDuplicate()**](TimesheetTypesApi.md#timesheetTypeDuplicate) | **GET** /open-api/v3/timesheet_types/duplicate/{id} | Retrieves a timesheet_types resource. |
| [**timesheetTypeFetchFiles()**](TimesheetTypesApi.md#timesheetTypeFetchFiles) | **GET** /open-api/v3/timesheet_types/fetch_files/{id} | Retrieves a timesheet_types resource. |
| [**timesheetTypeGetBySlug()**](TimesheetTypesApi.md#timesheetTypeGetBySlug) | **GET** /open-api/v3/timesheet_types/by_slug/{slug} | Retrieves a timesheet_types resource. |
| [**timesheetTypeGetDeleteRelations()**](TimesheetTypesApi.md#timesheetTypeGetDeleteRelations) | **GET** /open-api/v3/timesheet_types/get_delete_relations/{id} | Retrieves a timesheet_types resource. |
| [**timesheetTypeMetadata()**](TimesheetTypesApi.md#timesheetTypeMetadata) | **GET** /open-api/v3/timesheet_types/metadata/{id} | Retrieves a timesheet_types resource. |


## `apiTimesheetTypesGetCollection()`

```php
apiTimesheetTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiTimesheetTypesGetCollection200Response
```

Retrieves the collection of timesheet_types resources.

Retrieves the collection of timesheet_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | timesheet_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | timesheet_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | timesheet_types slug_end_with
$id_partial = 'id_partial_example'; // string | timesheet_types id_partial
$id_start_with = 'id_start_with_example'; // string | timesheet_types id_start_with
$id_end_with = 'id_end_with_example'; // string | timesheet_types id_end_with
$icon_partial = 'icon_partial_example'; // string | timesheet_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | timesheet_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | timesheet_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | timesheet_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | timesheet_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | timesheet_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | timesheet_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | timesheet_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | timesheet_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | timesheet_types priority_range

try {
    $result = $apiInstance->apiTimesheetTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->apiTimesheetTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| timesheet_types slug_partial | [optional] |
| **slug_start_with** | **string**| timesheet_types slug_start_with | [optional] |
| **slug_end_with** | **string**| timesheet_types slug_end_with | [optional] |
| **id_partial** | **string**| timesheet_types id_partial | [optional] |
| **id_start_with** | **string**| timesheet_types id_start_with | [optional] |
| **id_end_with** | **string**| timesheet_types id_end_with | [optional] |
| **icon_partial** | **string**| timesheet_types icon_partial | [optional] |
| **icon_start_with** | **string**| timesheet_types icon_start_with | [optional] |
| **icon_end_with** | **string**| timesheet_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| timesheet_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| timesheet_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| timesheet_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| timesheet_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| timesheet_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| timesheet_types translations.description_end_with | [optional] |
| **priority_range** | **string**| timesheet_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTimesheetTypesGetCollection200Response**](../Model/ApiTimesheetTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetTypesIdDelete()`

```php
apiTimesheetTypesIdDelete($id)
```

Removes the timesheet_types resource.

Removes the timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier

try {
    $apiInstance->apiTimesheetTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->apiTimesheetTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |

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

## `apiTimesheetTypesIdGet()`

```php
apiTimesheetTypesIdGet($id): \OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a timesheet_types resource.

Retrieves a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier

try {
    $result = $apiInstance->apiTimesheetTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->apiTimesheetTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetTypesIdPut()`

```php
apiTimesheetTypesIdPut($id, $timesheet_types_jsonld_post): \OpenAPI\Client\Model\TimesheetTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the timesheet_types resource.

Replaces the timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier
$timesheet_types_jsonld_post = new \OpenAPI\Client\Model\TimesheetTypesJsonldPost(); // \OpenAPI\Client\Model\TimesheetTypesJsonldPost | The updated timesheet_types resource

try {
    $result = $apiInstance->apiTimesheetTypesIdPut($id, $timesheet_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->apiTimesheetTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |
| **timesheet_types_jsonld_post** | [**\OpenAPI\Client\Model\TimesheetTypesJsonldPost**](../Model/TimesheetTypesJsonldPost.md)| The updated timesheet_types resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/TimesheetTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetTypesPost()`

```php
apiTimesheetTypesPost($timesheet_types_jsonld_add_post): \OpenAPI\Client\Model\TimesheetTypesJsonld
```

Creates a timesheet_types resource.

Creates a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timesheet_types_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetTypesJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetTypesJsonldAddPost | The new timesheet_types resource

try {
    $result = $apiInstance->apiTimesheetTypesPost($timesheet_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->apiTimesheetTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timesheet_types_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetTypesJsonldAddPost**](../Model/TimesheetTypesJsonldAddPost.md)| The new timesheet_types resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonld**](../Model/TimesheetTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetTypeApiFileUpload()`

```php
timesheetTypeApiFileUpload($id, $timesheet_types_jsonld): \OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_types resource.

Creates a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier
$timesheet_types_jsonld = new \OpenAPI\Client\Model\TimesheetTypesJsonld(); // \OpenAPI\Client\Model\TimesheetTypesJsonld | The new timesheet_types resource

try {
    $result = $apiInstance->timesheetTypeApiFileUpload($id, $timesheet_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->timesheetTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |
| **timesheet_types_jsonld** | [**\OpenAPI\Client\Model\TimesheetTypesJsonld**](../Model/TimesheetTypesJsonld.md)| The new timesheet_types resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetTypeDropDown()`

```php
timesheetTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\TimesheetTypeDropDown200Response
```

Retrieves the collection of timesheet_types resources.

Retrieves the collection of timesheet_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
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
    $result = $apiInstance->timesheetTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->timesheetTypeDropDown: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\TimesheetTypeDropDown200Response**](../Model/TimesheetTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetTypeDuplicate()`

```php
timesheetTypeDuplicate($id): \OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingList
```

Retrieves a timesheet_types resource.

Retrieves a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier

try {
    $result = $apiInstance->timesheetTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->timesheetTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingList**](../Model/TimesheetTypesJsonldTimesheetTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetTypeFetchFiles()`

```php
timesheetTypeFetchFiles($id): \OpenAPI\Client\Model\TimesheetTypesJsonld
```

Retrieves a timesheet_types resource.

Retrieves a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier

try {
    $result = $apiInstance->timesheetTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->timesheetTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonld**](../Model/TimesheetTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetTypeGetBySlug()`

```php
timesheetTypeGetBySlug($slug): \OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a timesheet_types resource.

Retrieves a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | timesheet_types identifier

try {
    $result = $apiInstance->timesheetTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->timesheetTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| timesheet_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/TimesheetTypesJsonldTimesheetTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetTypeGetDeleteRelations()`

```php
timesheetTypeGetDeleteRelations($id): \OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeRelations
```

Retrieves a timesheet_types resource.

Retrieves a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier

try {
    $result = $apiInstance->timesheetTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->timesheetTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonldTimesheetTypeRelations**](../Model/TimesheetTypesJsonldTimesheetTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetTypeMetadata()`

```php
timesheetTypeMetadata($id): \OpenAPI\Client\Model\TimesheetTypesJsonldIdStandardMetadataTimesheetTypeMetadataTagTaggingListTimesheetTypeRelationsTimestampable
```

Retrieves a timesheet_types resource.

Retrieves a timesheet_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_types identifier

try {
    $result = $apiInstance->timesheetTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetTypesApi->timesheetTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_types identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetTypesJsonldIdStandardMetadataTimesheetTypeMetadataTagTaggingListTimesheetTypeRelationsTimestampable**](../Model/TimesheetTypesJsonldIdStandardMetadataTimesheetTypeMetadataTagTaggingListTimesheetTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
