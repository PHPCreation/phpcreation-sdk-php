# OpenAPI\Client\DashboardReporttypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDashboardReporttypesGetCollection()**](DashboardReporttypesApi.md#apiDashboardReporttypesGetCollection) | **GET** /open-api/v3/dashboard_reporttypes | Retrieves the collection of dashboard_reporttypes resources. |
| [**apiDashboardReporttypesIdDelete()**](DashboardReporttypesApi.md#apiDashboardReporttypesIdDelete) | **DELETE** /open-api/v3/dashboard_reporttypes/{id} | Removes the dashboard_reporttypes resource. |
| [**apiDashboardReporttypesIdGet()**](DashboardReporttypesApi.md#apiDashboardReporttypesIdGet) | **GET** /open-api/v3/dashboard_reporttypes/{id} | Retrieves a dashboard_reporttypes resource. |
| [**apiDashboardReporttypesIdPut()**](DashboardReporttypesApi.md#apiDashboardReporttypesIdPut) | **PUT** /open-api/v3/dashboard_reporttypes/{id} | Replaces the dashboard_reporttypes resource. |
| [**apiDashboardReporttypesPost()**](DashboardReporttypesApi.md#apiDashboardReporttypesPost) | **POST** /open-api/v3/dashboard_reporttypes | Creates a dashboard_reporttypes resource. |
| [**dashboardReportTypeApiFileUpload()**](DashboardReporttypesApi.md#dashboardReportTypeApiFileUpload) | **POST** /open-api/v3/dashboard_reporttypes/{id}/file/upload | Creates a dashboard_reporttypes resource. |
| [**dashboardReportTypeDropDown()**](DashboardReporttypesApi.md#dashboardReportTypeDropDown) | **GET** /open-api/v3/dashboard_reporttypes/dropdown/get | Retrieves the collection of dashboard_reporttypes resources. |
| [**dashboardReportTypeDuplicate()**](DashboardReporttypesApi.md#dashboardReportTypeDuplicate) | **GET** /open-api/v3/dashboard_reporttypes/duplicate/{id} | Retrieves a dashboard_reporttypes resource. |
| [**dashboardReportTypeFetchFiles()**](DashboardReporttypesApi.md#dashboardReportTypeFetchFiles) | **GET** /open-api/v3/dashboard_reporttypes/fetch_files/{id} | Retrieves a dashboard_reporttypes resource. |
| [**dashboardReportTypeGetBySlug()**](DashboardReporttypesApi.md#dashboardReportTypeGetBySlug) | **GET** /open-api/v3/dashboard_reporttypes/by_slug/{slug} | Retrieves a dashboard_reporttypes resource. |
| [**dashboardReportTypeGetDeleteRelations()**](DashboardReporttypesApi.md#dashboardReportTypeGetDeleteRelations) | **GET** /open-api/v3/dashboard_reporttypes/get_delete_relations/{id} | Retrieves a dashboard_reporttypes resource. |
| [**dashboardReportTypeMetadata()**](DashboardReporttypesApi.md#dashboardReportTypeMetadata) | **GET** /open-api/v3/dashboard_reporttypes/metadata/{id} | Retrieves a dashboard_reporttypes resource. |


## `apiDashboardReporttypesGetCollection()`

```php
apiDashboardReporttypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiDashboardReporttypesGetCollection200Response
```

Retrieves the collection of dashboard_reporttypes resources.

Retrieves the collection of dashboard_reporttypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
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
$slug_partial = 'slug_partial_example'; // string | dashboard_reporttypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dashboard_reporttypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dashboard_reporttypes slug_end_with
$id_partial = 'id_partial_example'; // string | dashboard_reporttypes id_partial
$id_start_with = 'id_start_with_example'; // string | dashboard_reporttypes id_start_with
$id_end_with = 'id_end_with_example'; // string | dashboard_reporttypes id_end_with
$number_partial = 'number_partial_example'; // string | dashboard_reporttypes number_partial
$number_start_with = 'number_start_with_example'; // string | dashboard_reporttypes number_start_with
$number_end_with = 'number_end_with_example'; // string | dashboard_reporttypes number_end_with
$icon_partial = 'icon_partial_example'; // string | dashboard_reporttypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | dashboard_reporttypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | dashboard_reporttypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | dashboard_reporttypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | dashboard_reporttypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | dashboard_reporttypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | dashboard_reporttypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | dashboard_reporttypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | dashboard_reporttypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | dashboard_reporttypes priority_range

try {
    $result = $apiInstance->apiDashboardReporttypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->apiDashboardReporttypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| dashboard_reporttypes slug_partial | [optional] |
| **slug_start_with** | **string**| dashboard_reporttypes slug_start_with | [optional] |
| **slug_end_with** | **string**| dashboard_reporttypes slug_end_with | [optional] |
| **id_partial** | **string**| dashboard_reporttypes id_partial | [optional] |
| **id_start_with** | **string**| dashboard_reporttypes id_start_with | [optional] |
| **id_end_with** | **string**| dashboard_reporttypes id_end_with | [optional] |
| **number_partial** | **string**| dashboard_reporttypes number_partial | [optional] |
| **number_start_with** | **string**| dashboard_reporttypes number_start_with | [optional] |
| **number_end_with** | **string**| dashboard_reporttypes number_end_with | [optional] |
| **icon_partial** | **string**| dashboard_reporttypes icon_partial | [optional] |
| **icon_start_with** | **string**| dashboard_reporttypes icon_start_with | [optional] |
| **icon_end_with** | **string**| dashboard_reporttypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| dashboard_reporttypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| dashboard_reporttypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| dashboard_reporttypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| dashboard_reporttypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| dashboard_reporttypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| dashboard_reporttypes translations.description_end_with | [optional] |
| **priority_range** | **string**| dashboard_reporttypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDashboardReporttypesGetCollection200Response**](../Model/ApiDashboardReporttypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReporttypesIdDelete()`

```php
apiDashboardReporttypesIdDelete($id)
```

Removes the dashboard_reporttypes resource.

Removes the dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier

try {
    $apiInstance->apiDashboardReporttypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->apiDashboardReporttypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |

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

## `apiDashboardReporttypesIdGet()`

```php
apiDashboardReporttypesIdGet($id): \OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a dashboard_reporttypes resource.

Retrieves a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier

try {
    $result = $apiInstance->apiDashboardReporttypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->apiDashboardReporttypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReporttypesIdPut()`

```php
apiDashboardReporttypesIdPut($id, $dashboard_reporttypes_jsonld_post): \OpenAPI\Client\Model\DashboardReporttypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the dashboard_reporttypes resource.

Replaces the dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier
$dashboard_reporttypes_jsonld_post = new \OpenAPI\Client\Model\DashboardReporttypesJsonldPost(); // \OpenAPI\Client\Model\DashboardReporttypesJsonldPost | The updated dashboard_reporttypes resource

try {
    $result = $apiInstance->apiDashboardReporttypesIdPut($id, $dashboard_reporttypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->apiDashboardReporttypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |
| **dashboard_reporttypes_jsonld_post** | [**\OpenAPI\Client\Model\DashboardReporttypesJsonldPost**](../Model/DashboardReporttypesJsonldPost.md)| The updated dashboard_reporttypes resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/DashboardReporttypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReporttypesPost()`

```php
apiDashboardReporttypesPost($dashboard_reporttypes_jsonld_add_post): \OpenAPI\Client\Model\DashboardReporttypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a dashboard_reporttypes resource.

Creates a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_reporttypes_jsonld_add_post = new \OpenAPI\Client\Model\DashboardReporttypesJsonldAddPost(); // \OpenAPI\Client\Model\DashboardReporttypesJsonldAddPost | The new dashboard_reporttypes resource

try {
    $result = $apiInstance->apiDashboardReporttypesPost($dashboard_reporttypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->apiDashboardReporttypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_reporttypes_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardReporttypesJsonldAddPost**](../Model/DashboardReporttypesJsonldAddPost.md)| The new dashboard_reporttypes resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/DashboardReporttypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportTypeApiFileUpload()`

```php
dashboardReportTypeApiFileUpload($id, $dashboard_reporttypes_jsonld): \OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_reporttypes resource.

Creates a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier
$dashboard_reporttypes_jsonld = new \OpenAPI\Client\Model\DashboardReporttypesJsonld(); // \OpenAPI\Client\Model\DashboardReporttypesJsonld | The new dashboard_reporttypes resource

try {
    $result = $apiInstance->dashboardReportTypeApiFileUpload($id, $dashboard_reporttypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->dashboardReportTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |
| **dashboard_reporttypes_jsonld** | [**\OpenAPI\Client\Model\DashboardReporttypesJsonld**](../Model/DashboardReporttypesJsonld.md)| The new dashboard_reporttypes resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportTypeDropDown()`

```php
dashboardReportTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\DashboardReportTypeDropDown200Response
```

Retrieves the collection of dashboard_reporttypes resources.

Retrieves the collection of dashboard_reporttypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
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
    $result = $apiInstance->dashboardReportTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->dashboardReportTypeDropDown: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\DashboardReportTypeDropDown200Response**](../Model/DashboardReportTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportTypeDuplicate()`

```php
dashboardReportTypeDuplicate($id): \OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingList
```

Retrieves a dashboard_reporttypes resource.

Retrieves a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier

try {
    $result = $apiInstance->dashboardReportTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->dashboardReportTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingList**](../Model/DashboardReporttypesJsonldDashboardReportTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportTypeFetchFiles()`

```php
dashboardReportTypeFetchFiles($id): \OpenAPI\Client\Model\DashboardReporttypesJsonld
```

Retrieves a dashboard_reporttypes resource.

Retrieves a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier

try {
    $result = $apiInstance->dashboardReportTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->dashboardReportTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonld**](../Model/DashboardReporttypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportTypeGetBySlug()`

```php
dashboardReportTypeGetBySlug($slug): \OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dashboard_reporttypes resource.

Retrieves a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dashboard_reporttypes identifier

try {
    $result = $apiInstance->dashboardReportTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->dashboardReportTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dashboard_reporttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DashboardReporttypesJsonldDashboardReportTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportTypeGetDeleteRelations()`

```php
dashboardReportTypeGetDeleteRelations($id): \OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeRelations
```

Retrieves a dashboard_reporttypes resource.

Retrieves a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier

try {
    $result = $apiInstance->dashboardReportTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->dashboardReportTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldDashboardReportTypeRelations**](../Model/DashboardReporttypesJsonldDashboardReportTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportTypeMetadata()`

```php
dashboardReportTypeMetadata($id): \OpenAPI\Client\Model\DashboardReporttypesJsonldIdStandardMetadataDashboardReportTypeMetadataTagTaggingListDashboardReportTypeRelationsTimestampable
```

Retrieves a dashboard_reporttypes resource.

Retrieves a dashboard_reporttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReporttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reporttypes identifier

try {
    $result = $apiInstance->dashboardReportTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReporttypesApi->dashboardReportTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reporttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReporttypesJsonldIdStandardMetadataDashboardReportTypeMetadataTagTaggingListDashboardReportTypeRelationsTimestampable**](../Model/DashboardReporttypesJsonldIdStandardMetadataDashboardReportTypeMetadataTagTaggingListDashboardReportTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
