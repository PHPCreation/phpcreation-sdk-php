# OpenAPI\Client\DashboardReportwidgetsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDashboardReportwidgetsGetCollection()**](DashboardReportwidgetsApi.md#apiDashboardReportwidgetsGetCollection) | **GET** /open-api/v3/dashboard_reportwidgets | Retrieves the collection of dashboard_reportwidgets resources. |
| [**apiDashboardReportwidgetsIdDelete()**](DashboardReportwidgetsApi.md#apiDashboardReportwidgetsIdDelete) | **DELETE** /open-api/v3/dashboard_reportwidgets/{id} | Removes the dashboard_reportwidgets resource. |
| [**apiDashboardReportwidgetsIdGet()**](DashboardReportwidgetsApi.md#apiDashboardReportwidgetsIdGet) | **GET** /open-api/v3/dashboard_reportwidgets/{id} | Retrieves a dashboard_reportwidgets resource. |
| [**apiDashboardReportwidgetsIdPut()**](DashboardReportwidgetsApi.md#apiDashboardReportwidgetsIdPut) | **PUT** /open-api/v3/dashboard_reportwidgets/{id} | Replaces the dashboard_reportwidgets resource. |
| [**apiDashboardReportwidgetsPost()**](DashboardReportwidgetsApi.md#apiDashboardReportwidgetsPost) | **POST** /open-api/v3/dashboard_reportwidgets | Creates a dashboard_reportwidgets resource. |
| [**dashboardReportWidgetApiFileUpload()**](DashboardReportwidgetsApi.md#dashboardReportWidgetApiFileUpload) | **POST** /open-api/v3/dashboard_reportwidgets/{id}/file/upload | Creates a dashboard_reportwidgets resource. |
| [**dashboardReportWidgetDropDown()**](DashboardReportwidgetsApi.md#dashboardReportWidgetDropDown) | **GET** /open-api/v3/dashboard_reportwidgets/dropdown/get | Retrieves the collection of dashboard_reportwidgets resources. |
| [**dashboardReportWidgetDuplicate()**](DashboardReportwidgetsApi.md#dashboardReportWidgetDuplicate) | **GET** /open-api/v3/dashboard_reportwidgets/duplicate/{id} | Retrieves a dashboard_reportwidgets resource. |
| [**dashboardReportWidgetFetchFiles()**](DashboardReportwidgetsApi.md#dashboardReportWidgetFetchFiles) | **GET** /open-api/v3/dashboard_reportwidgets/fetch_files/{id} | Retrieves a dashboard_reportwidgets resource. |
| [**dashboardReportWidgetGetBySlug()**](DashboardReportwidgetsApi.md#dashboardReportWidgetGetBySlug) | **GET** /open-api/v3/dashboard_reportwidgets/by_slug/{slug} | Retrieves a dashboard_reportwidgets resource. |
| [**dashboardReportWidgetGetDeleteRelations()**](DashboardReportwidgetsApi.md#dashboardReportWidgetGetDeleteRelations) | **GET** /open-api/v3/dashboard_reportwidgets/get_delete_relations/{id} | Retrieves a dashboard_reportwidgets resource. |
| [**dashboardReportWidgetMetadata()**](DashboardReportwidgetsApi.md#dashboardReportWidgetMetadata) | **GET** /open-api/v3/dashboard_reportwidgets/metadata/{id} | Retrieves a dashboard_reportwidgets resource. |


## `apiDashboardReportwidgetsGetCollection()`

```php
apiDashboardReportwidgetsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $report, $report2, $widget, $widget2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiDashboardReportwidgetsGetCollection200Response
```

Retrieves the collection of dashboard_reportwidgets resources.

Retrieves the collection of dashboard_reportwidgets resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
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
$id = 56; // int | 
$id2 = array(56); // int[] | 
$report = 'report_example'; // string | 
$report2 = array('report_example'); // string[] | 
$widget = 'widget_example'; // string | 
$widget2 = array('widget_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dashboard_reportwidgets slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dashboard_reportwidgets slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dashboard_reportwidgets slug_end_with
$id_partial = 'id_partial_example'; // string | dashboard_reportwidgets id_partial
$id_start_with = 'id_start_with_example'; // string | dashboard_reportwidgets id_start_with
$id_end_with = 'id_end_with_example'; // string | dashboard_reportwidgets id_end_with

try {
    $result = $apiInstance->apiDashboardReportwidgetsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $report, $report2, $widget, $widget2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->apiDashboardReportwidgetsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **report** | **string**|  | [optional] |
| **report2** | [**string[]**](../Model/string.md)|  | [optional] |
| **widget** | **string**|  | [optional] |
| **widget2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dashboard_reportwidgets slug_partial | [optional] |
| **slug_start_with** | **string**| dashboard_reportwidgets slug_start_with | [optional] |
| **slug_end_with** | **string**| dashboard_reportwidgets slug_end_with | [optional] |
| **id_partial** | **string**| dashboard_reportwidgets id_partial | [optional] |
| **id_start_with** | **string**| dashboard_reportwidgets id_start_with | [optional] |
| **id_end_with** | **string**| dashboard_reportwidgets id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDashboardReportwidgetsGetCollection200Response**](../Model/ApiDashboardReportwidgetsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReportwidgetsIdDelete()`

```php
apiDashboardReportwidgetsIdDelete($id)
```

Removes the dashboard_reportwidgets resource.

Removes the dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier

try {
    $apiInstance->apiDashboardReportwidgetsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->apiDashboardReportwidgetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |

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

## `apiDashboardReportwidgetsIdGet()`

```php
apiDashboardReportwidgetsIdGet($id): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a dashboard_reportwidgets resource.

Retrieves a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier

try {
    $result = $apiInstance->apiDashboardReportwidgetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->apiDashboardReportwidgetsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReportwidgetsIdPut()`

```php
apiDashboardReportwidgetsIdPut($id, $dashboard_reportwidgets_jsonld_add_post): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingList
```

Replaces the dashboard_reportwidgets resource.

Replaces the dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier
$dashboard_reportwidgets_jsonld_add_post = new \OpenAPI\Client\Model\DashboardReportwidgetsJsonldAddPost(); // \OpenAPI\Client\Model\DashboardReportwidgetsJsonldAddPost | The updated dashboard_reportwidgets resource

try {
    $result = $apiInstance->apiDashboardReportwidgetsIdPut($id, $dashboard_reportwidgets_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->apiDashboardReportwidgetsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |
| **dashboard_reportwidgets_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldAddPost**](../Model/DashboardReportwidgetsJsonldAddPost.md)| The updated dashboard_reportwidgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingList**](../Model/DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReportwidgetsPost()`

```php
apiDashboardReportwidgetsPost($dashboard_reportwidgets_jsonld_add_post): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_reportwidgets resource.

Creates a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_reportwidgets_jsonld_add_post = new \OpenAPI\Client\Model\DashboardReportwidgetsJsonldAddPost(); // \OpenAPI\Client\Model\DashboardReportwidgetsJsonldAddPost | The new dashboard_reportwidgets resource

try {
    $result = $apiInstance->apiDashboardReportwidgetsPost($dashboard_reportwidgets_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->apiDashboardReportwidgetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_reportwidgets_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldAddPost**](../Model/DashboardReportwidgetsJsonldAddPost.md)| The new dashboard_reportwidgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportWidgetApiFileUpload()`

```php
dashboardReportWidgetApiFileUpload($id, $dashboard_reportwidgets_jsonld): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_reportwidgets resource.

Creates a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier
$dashboard_reportwidgets_jsonld = new \OpenAPI\Client\Model\DashboardReportwidgetsJsonld(); // \OpenAPI\Client\Model\DashboardReportwidgetsJsonld | The new dashboard_reportwidgets resource

try {
    $result = $apiInstance->dashboardReportWidgetApiFileUpload($id, $dashboard_reportwidgets_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->dashboardReportWidgetApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |
| **dashboard_reportwidgets_jsonld** | [**\OpenAPI\Client\Model\DashboardReportwidgetsJsonld**](../Model/DashboardReportwidgetsJsonld.md)| The new dashboard_reportwidgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportWidgetDropDown()`

```php
dashboardReportWidgetDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $report, $report2, $widget, $widget2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\DashboardReportWidgetDropDown200Response
```

Retrieves the collection of dashboard_reportwidgets resources.

Retrieves the collection of dashboard_reportwidgets resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
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
$id = 56; // int | 
$id2 = array(56); // int[] | 
$report = 'report_example'; // string | 
$report2 = array('report_example'); // string[] | 
$widget = 'widget_example'; // string | 
$widget2 = array('widget_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->dashboardReportWidgetDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $report, $report2, $widget, $widget2, $search, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->dashboardReportWidgetDropDown: ', $e->getMessage(), PHP_EOL;
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
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **report** | **string**|  | [optional] |
| **report2** | [**string[]**](../Model/string.md)|  | [optional] |
| **widget** | **string**|  | [optional] |
| **widget2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DashboardReportWidgetDropDown200Response**](../Model/DashboardReportWidgetDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportWidgetDuplicate()`

```php
dashboardReportWidgetDuplicate($id): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingList
```

Retrieves a dashboard_reportwidgets resource.

Retrieves a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier

try {
    $result = $apiInstance->dashboardReportWidgetDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->dashboardReportWidgetDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingList**](../Model/DashboardReportwidgetsJsonldDashboardReportWidgetShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportWidgetFetchFiles()`

```php
dashboardReportWidgetFetchFiles($id): \OpenAPI\Client\Model\DashboardReportwidgetsJsonld
```

Retrieves a dashboard_reportwidgets resource.

Retrieves a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier

try {
    $result = $apiInstance->dashboardReportWidgetFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->dashboardReportWidgetFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonld**](../Model/DashboardReportwidgetsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportWidgetGetBySlug()`

```php
dashboardReportWidgetGetBySlug($slug): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dashboard_reportwidgets resource.

Retrieves a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dashboard_reportwidgets identifier

try {
    $result = $apiInstance->dashboardReportWidgetGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->dashboardReportWidgetGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dashboard_reportwidgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DashboardReportwidgetsJsonldDashboardReportWidgetShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportWidgetGetDeleteRelations()`

```php
dashboardReportWidgetGetDeleteRelations($id): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetRelations
```

Retrieves a dashboard_reportwidgets resource.

Retrieves a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier

try {
    $result = $apiInstance->dashboardReportWidgetGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->dashboardReportWidgetGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldDashboardReportWidgetRelations**](../Model/DashboardReportwidgetsJsonldDashboardReportWidgetRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportWidgetMetadata()`

```php
dashboardReportWidgetMetadata($id): \OpenAPI\Client\Model\DashboardReportwidgetsJsonldIdStandardMetadataDashboardReportWidgetMetadataTagTaggingListDashboardReportWidgetRelationsTimestampable
```

Retrieves a dashboard_reportwidgets resource.

Retrieves a dashboard_reportwidgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportwidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reportwidgets identifier

try {
    $result = $apiInstance->dashboardReportWidgetMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportwidgetsApi->dashboardReportWidgetMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reportwidgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportwidgetsJsonldIdStandardMetadataDashboardReportWidgetMetadataTagTaggingListDashboardReportWidgetRelationsTimestampable**](../Model/DashboardReportwidgetsJsonldIdStandardMetadataDashboardReportWidgetMetadataTagTaggingListDashboardReportWidgetRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
