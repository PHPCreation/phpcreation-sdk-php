# OpenAPI\Client\TimesheetStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTimesheetStatusesGetCollection()**](TimesheetStatusesApi.md#apiTimesheetStatusesGetCollection) | **GET** /open-api/v3/timesheet_statuses | Retrieves the collection of timesheet_statuses resources. |
| [**apiTimesheetStatusesIdDelete()**](TimesheetStatusesApi.md#apiTimesheetStatusesIdDelete) | **DELETE** /open-api/v3/timesheet_statuses/{id} | Removes the timesheet_statuses resource. |
| [**apiTimesheetStatusesIdGet()**](TimesheetStatusesApi.md#apiTimesheetStatusesIdGet) | **GET** /open-api/v3/timesheet_statuses/{id} | Retrieves a timesheet_statuses resource. |
| [**apiTimesheetStatusesIdPut()**](TimesheetStatusesApi.md#apiTimesheetStatusesIdPut) | **PUT** /open-api/v3/timesheet_statuses/{id} | Replaces the timesheet_statuses resource. |
| [**apiTimesheetStatusesPost()**](TimesheetStatusesApi.md#apiTimesheetStatusesPost) | **POST** /open-api/v3/timesheet_statuses | Creates a timesheet_statuses resource. |
| [**timesheetStatusApiFileUpload()**](TimesheetStatusesApi.md#timesheetStatusApiFileUpload) | **POST** /open-api/v3/timesheet_statuses/{id}/file/upload | Creates a timesheet_statuses resource. |
| [**timesheetStatusDropDown()**](TimesheetStatusesApi.md#timesheetStatusDropDown) | **GET** /open-api/v3/timesheet_statuses/dropdown/get | Retrieves the collection of timesheet_statuses resources. |
| [**timesheetStatusDuplicate()**](TimesheetStatusesApi.md#timesheetStatusDuplicate) | **GET** /open-api/v3/timesheet_statuses/duplicate/{id} | Retrieves a timesheet_statuses resource. |
| [**timesheetStatusFetchFiles()**](TimesheetStatusesApi.md#timesheetStatusFetchFiles) | **GET** /open-api/v3/timesheet_statuses/fetch_files/{id} | Retrieves a timesheet_statuses resource. |
| [**timesheetStatusGetBySlug()**](TimesheetStatusesApi.md#timesheetStatusGetBySlug) | **GET** /open-api/v3/timesheet_statuses/by_slug/{slug} | Retrieves a timesheet_statuses resource. |
| [**timesheetStatusGetDeleteRelations()**](TimesheetStatusesApi.md#timesheetStatusGetDeleteRelations) | **GET** /open-api/v3/timesheet_statuses/get_delete_relations/{id} | Retrieves a timesheet_statuses resource. |
| [**timesheetStatusMetadata()**](TimesheetStatusesApi.md#timesheetStatusMetadata) | **GET** /open-api/v3/timesheet_statuses/metadata/{id} | Retrieves a timesheet_statuses resource. |


## `apiTimesheetStatusesGetCollection()`

```php
apiTimesheetStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiTimesheetStatusesGetCollection200Response
```

Retrieves the collection of timesheet_statuses resources.

Retrieves the collection of timesheet_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
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
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | timesheet_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | timesheet_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | timesheet_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | timesheet_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | timesheet_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | timesheet_statuses id_end_with
$icon_partial = 'icon_partial_example'; // string | timesheet_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | timesheet_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | timesheet_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | timesheet_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | timesheet_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | timesheet_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | timesheet_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | timesheet_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | timesheet_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | timesheet_statuses priority_range

try {
    $result = $apiInstance->apiTimesheetStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->apiTimesheetStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| timesheet_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| timesheet_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| timesheet_statuses slug_end_with | [optional] |
| **id_partial** | **string**| timesheet_statuses id_partial | [optional] |
| **id_start_with** | **string**| timesheet_statuses id_start_with | [optional] |
| **id_end_with** | **string**| timesheet_statuses id_end_with | [optional] |
| **icon_partial** | **string**| timesheet_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| timesheet_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| timesheet_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| timesheet_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| timesheet_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| timesheet_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| timesheet_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| timesheet_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| timesheet_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| timesheet_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTimesheetStatusesGetCollection200Response**](../Model/ApiTimesheetStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetStatusesIdDelete()`

```php
apiTimesheetStatusesIdDelete($id)
```

Removes the timesheet_statuses resource.

Removes the timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier

try {
    $apiInstance->apiTimesheetStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->apiTimesheetStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |

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

## `apiTimesheetStatusesIdGet()`

```php
apiTimesheetStatusesIdGet($id): \OpenAPI\Client\Model\TimesheetStatusesJsonldShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a timesheet_statuses resource.

Retrieves a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier

try {
    $result = $apiInstance->apiTimesheetStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->apiTimesheetStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetStatusesJsonldShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetStatusesIdPut()`

```php
apiTimesheetStatusesIdPut($id, $timesheet_statuses_jsonld_post): \OpenAPI\Client\Model\TimesheetStatusesJsonldShowIdTimestampableTagTaggingListStandardShow
```

Replaces the timesheet_statuses resource.

Replaces the timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier
$timesheet_statuses_jsonld_post = new \OpenAPI\Client\Model\TimesheetStatusesJsonldPost(); // \OpenAPI\Client\Model\TimesheetStatusesJsonldPost | The updated timesheet_statuses resource

try {
    $result = $apiInstance->apiTimesheetStatusesIdPut($id, $timesheet_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->apiTimesheetStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |
| **timesheet_statuses_jsonld_post** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonldPost**](../Model/TimesheetStatusesJsonldPost.md)| The updated timesheet_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetStatusesJsonldShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetStatusesPost()`

```php
apiTimesheetStatusesPost($timesheet_statuses_jsonld_add_post): \OpenAPI\Client\Model\TimesheetStatusesJsonldAdd
```

Creates a timesheet_statuses resource.

Creates a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timesheet_statuses_jsonld_add_post = new \OpenAPI\Client\Model\TimesheetStatusesJsonldAddPost(); // \OpenAPI\Client\Model\TimesheetStatusesJsonldAddPost | The new timesheet_statuses resource

try {
    $result = $apiInstance->apiTimesheetStatusesPost($timesheet_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->apiTimesheetStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timesheet_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonldAddPost**](../Model/TimesheetStatusesJsonldAddPost.md)| The new timesheet_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldAdd**](../Model/TimesheetStatusesJsonldAdd.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetStatusApiFileUpload()`

```php
timesheetStatusApiFileUpload($id, $timesheet_statuses_jsonld): \OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusShowIdTimestampableTagTaggingListStandardShow
```

Creates a timesheet_statuses resource.

Creates a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier
$timesheet_statuses_jsonld = new \OpenAPI\Client\Model\TimesheetStatusesJsonld(); // \OpenAPI\Client\Model\TimesheetStatusesJsonld | The new timesheet_statuses resource

try {
    $result = $apiInstance->timesheetStatusApiFileUpload($id, $timesheet_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->timesheetStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |
| **timesheet_statuses_jsonld** | [**\OpenAPI\Client\Model\TimesheetStatusesJsonld**](../Model/TimesheetStatusesJsonld.md)| The new timesheet_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusShowIdTimestampableTagTaggingListStandardShow**](../Model/TimesheetStatusesJsonldTimesheetStatusShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetStatusDropDown()`

```php
timesheetStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\TimesheetStatusDropDown200Response
```

Retrieves the collection of timesheet_statuses resources.

Retrieves the collection of timesheet_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
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
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
    $result = $apiInstance->timesheetStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->timesheetStatusDropDown: ', $e->getMessage(), PHP_EOL;
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
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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

[**\OpenAPI\Client\Model\TimesheetStatusDropDown200Response**](../Model/TimesheetStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetStatusDuplicate()`

```php
timesheetStatusDuplicate($id): \OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusShowIdTimestampableTagTaggingList
```

Retrieves a timesheet_statuses resource.

Retrieves a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier

try {
    $result = $apiInstance->timesheetStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->timesheetStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusShowIdTimestampableTagTaggingList**](../Model/TimesheetStatusesJsonldTimesheetStatusShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetStatusFetchFiles()`

```php
timesheetStatusFetchFiles($id): \OpenAPI\Client\Model\TimesheetStatusesJsonld
```

Retrieves a timesheet_statuses resource.

Retrieves a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier

try {
    $result = $apiInstance->timesheetStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->timesheetStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonld**](../Model/TimesheetStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetStatusGetBySlug()`

```php
timesheetStatusGetBySlug($slug): \OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a timesheet_statuses resource.

Retrieves a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | timesheet_statuses identifier

try {
    $result = $apiInstance->timesheetStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->timesheetStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| timesheet_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusShowIdCustomPropertyTimestampableTagTaggingList**](../Model/TimesheetStatusesJsonldTimesheetStatusShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetStatusGetDeleteRelations()`

```php
timesheetStatusGetDeleteRelations($id): \OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusRelations
```

Retrieves a timesheet_statuses resource.

Retrieves a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier

try {
    $result = $apiInstance->timesheetStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->timesheetStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldTimesheetStatusRelations**](../Model/TimesheetStatusesJsonldTimesheetStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetStatusMetadata()`

```php
timesheetStatusMetadata($id): \OpenAPI\Client\Model\TimesheetStatusesJsonldIdStandardMetadataTimesheetStatusMetadataTagTaggingListTimesheetStatusRelationsTimestampable
```

Retrieves a timesheet_statuses resource.

Retrieves a timesheet_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TimesheetStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | timesheet_statuses identifier

try {
    $result = $apiInstance->timesheetStatusMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetStatusesApi->timesheetStatusMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| timesheet_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\TimesheetStatusesJsonldIdStandardMetadataTimesheetStatusMetadataTagTaggingListTimesheetStatusRelationsTimestampable**](../Model/TimesheetStatusesJsonldIdStandardMetadataTimesheetStatusMetadataTagTaggingListTimesheetStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
