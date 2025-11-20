# OpenAPI\Client\DashboardWidgetsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDashboardWidgetsGetCollection()**](DashboardWidgetsApi.md#apiDashboardWidgetsGetCollection) | **GET** /open-api/v3/dashboard_widgets | Retrieves the collection of dashboard_widgets resources. |
| [**apiDashboardWidgetsIdDelete()**](DashboardWidgetsApi.md#apiDashboardWidgetsIdDelete) | **DELETE** /open-api/v3/dashboard_widgets/{id} | Removes the dashboard_widgets resource. |
| [**apiDashboardWidgetsIdGet()**](DashboardWidgetsApi.md#apiDashboardWidgetsIdGet) | **GET** /open-api/v3/dashboard_widgets/{id} | Retrieves a dashboard_widgets resource. |
| [**apiDashboardWidgetsIdPut()**](DashboardWidgetsApi.md#apiDashboardWidgetsIdPut) | **PUT** /open-api/v3/dashboard_widgets/{id} | Replaces the dashboard_widgets resource. |
| [**apiDashboardWidgetsPost()**](DashboardWidgetsApi.md#apiDashboardWidgetsPost) | **POST** /open-api/v3/dashboard_widgets | Creates a dashboard_widgets resource. |
| [**dashboardWidgetApiCorporationAdd()**](DashboardWidgetsApi.md#dashboardWidgetApiCorporationAdd) | **POST** /open-api/v3/dashboard_widgets/{id}/corporation/add | Creates a dashboard_widgets resource. |
| [**dashboardWidgetApiCorporationRemove()**](DashboardWidgetsApi.md#dashboardWidgetApiCorporationRemove) | **POST** /open-api/v3/dashboard_widgets/{id}/corporation/remove | Creates a dashboard_widgets resource. |
| [**dashboardWidgetApiFileUpload()**](DashboardWidgetsApi.md#dashboardWidgetApiFileUpload) | **POST** /open-api/v3/dashboard_widgets/{id}/file/upload | Creates a dashboard_widgets resource. |
| [**dashboardWidgetApiPopulate()**](DashboardWidgetsApi.md#dashboardWidgetApiPopulate) | **GET** /open-api/v3/dashboard_widgets/{id}/populate | Retrieves a dashboard_widgets resource. |
| [**dashboardWidgetDropDown()**](DashboardWidgetsApi.md#dashboardWidgetDropDown) | **GET** /open-api/v3/dashboard_widgets/dropdown/get | Retrieves the collection of dashboard_widgets resources. |
| [**dashboardWidgetDuplicate()**](DashboardWidgetsApi.md#dashboardWidgetDuplicate) | **GET** /open-api/v3/dashboard_widgets/duplicate/{id} | Retrieves a dashboard_widgets resource. |
| [**dashboardWidgetFetchFiles()**](DashboardWidgetsApi.md#dashboardWidgetFetchFiles) | **GET** /open-api/v3/dashboard_widgets/fetch_files/{id} | Retrieves a dashboard_widgets resource. |
| [**dashboardWidgetGetBySlug()**](DashboardWidgetsApi.md#dashboardWidgetGetBySlug) | **GET** /open-api/v3/dashboard_widgets/by_slug/{slug} | Retrieves a dashboard_widgets resource. |
| [**dashboardWidgetGetDeleteRelations()**](DashboardWidgetsApi.md#dashboardWidgetGetDeleteRelations) | **GET** /open-api/v3/dashboard_widgets/get_delete_relations/{id} | Retrieves a dashboard_widgets resource. |
| [**dashboardWidgetMetadata()**](DashboardWidgetsApi.md#dashboardWidgetMetadata) | **GET** /open-api/v3/dashboard_widgets/metadata/{id} | Retrieves a dashboard_widgets resource. |


## `apiDashboardWidgetsGetCollection()`

```php
apiDashboardWidgetsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $reports_report, $reports_report2, $data_processor, $data_processor2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $view_name_partial, $view_name_start_with, $view_name_end_with): \OpenAPI\Client\Model\ApiDashboardWidgetsGetCollection200Response
```

Retrieves the collection of dashboard_widgets resources.

Retrieves the collection of dashboard_widgets resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$reports_report = 'reports_report_example'; // string | 
$reports_report2 = array('reports_report_example'); // string[] | 
$data_processor = 'data_processor_example'; // string | 
$data_processor2 = array('data_processor_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_title = True; // bool | 
$exists_description = True; // bool | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dashboard_widgets slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dashboard_widgets slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dashboard_widgets slug_end_with
$id_partial = 'id_partial_example'; // string | dashboard_widgets id_partial
$id_start_with = 'id_start_with_example'; // string | dashboard_widgets id_start_with
$id_end_with = 'id_end_with_example'; // string | dashboard_widgets id_end_with
$title_partial = 'title_partial_example'; // string | dashboard_widgets title_partial
$title_start_with = 'title_start_with_example'; // string | dashboard_widgets title_start_with
$title_end_with = 'title_end_with_example'; // string | dashboard_widgets title_end_with
$view_name_partial = 'view_name_partial_example'; // string | dashboard_widgets viewName_partial
$view_name_start_with = 'view_name_start_with_example'; // string | dashboard_widgets viewName_start_with
$view_name_end_with = 'view_name_end_with_example'; // string | dashboard_widgets viewName_end_with

try {
    $result = $apiInstance->apiDashboardWidgetsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $reports_report, $reports_report2, $data_processor, $data_processor2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $view_name_partial, $view_name_start_with, $view_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->apiDashboardWidgetsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **reports_report** | **string**|  | [optional] |
| **reports_report2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_processor** | **string**|  | [optional] |
| **data_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_title** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dashboard_widgets slug_partial | [optional] |
| **slug_start_with** | **string**| dashboard_widgets slug_start_with | [optional] |
| **slug_end_with** | **string**| dashboard_widgets slug_end_with | [optional] |
| **id_partial** | **string**| dashboard_widgets id_partial | [optional] |
| **id_start_with** | **string**| dashboard_widgets id_start_with | [optional] |
| **id_end_with** | **string**| dashboard_widgets id_end_with | [optional] |
| **title_partial** | **string**| dashboard_widgets title_partial | [optional] |
| **title_start_with** | **string**| dashboard_widgets title_start_with | [optional] |
| **title_end_with** | **string**| dashboard_widgets title_end_with | [optional] |
| **view_name_partial** | **string**| dashboard_widgets viewName_partial | [optional] |
| **view_name_start_with** | **string**| dashboard_widgets viewName_start_with | [optional] |
| **view_name_end_with** | **string**| dashboard_widgets viewName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDashboardWidgetsGetCollection200Response**](../Model/ApiDashboardWidgetsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardWidgetsIdDelete()`

```php
apiDashboardWidgetsIdDelete($id)
```

Removes the dashboard_widgets resource.

Removes the dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier

try {
    $apiInstance->apiDashboardWidgetsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->apiDashboardWidgetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |

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

## `apiDashboardWidgetsIdGet()`

```php
apiDashboardWidgetsIdGet($id): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a dashboard_widgets resource.

Retrieves a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier

try {
    $result = $apiInstance->apiDashboardWidgetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->apiDashboardWidgetsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardWidgetsIdPut()`

```php
apiDashboardWidgetsIdPut($id, $dashboard_widgets_jsonld_add_post): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList
```

Replaces the dashboard_widgets resource.

Replaces the dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier
$dashboard_widgets_jsonld_add_post = new \OpenAPI\Client\Model\DashboardWidgetsJsonldAddPost(); // \OpenAPI\Client\Model\DashboardWidgetsJsonldAddPost | The updated dashboard_widgets resource

try {
    $result = $apiInstance->apiDashboardWidgetsIdPut($id, $dashboard_widgets_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->apiDashboardWidgetsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |
| **dashboard_widgets_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardWidgetsJsonldAddPost**](../Model/DashboardWidgetsJsonldAddPost.md)| The updated dashboard_widgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardWidgetsPost()`

```php
apiDashboardWidgetsPost($dashboard_widgets_jsonld_add_post): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_widgets resource.

Creates a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_widgets_jsonld_add_post = new \OpenAPI\Client\Model\DashboardWidgetsJsonldAddPost(); // \OpenAPI\Client\Model\DashboardWidgetsJsonldAddPost | The new dashboard_widgets resource

try {
    $result = $apiInstance->apiDashboardWidgetsPost($dashboard_widgets_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->apiDashboardWidgetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_widgets_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardWidgetsJsonldAddPost**](../Model/DashboardWidgetsJsonldAddPost.md)| The new dashboard_widgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetApiCorporationAdd()`

```php
dashboardWidgetApiCorporationAdd($id, $dashboard_widgets_jsonld): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_widgets resource.

Creates a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier
$dashboard_widgets_jsonld = new \OpenAPI\Client\Model\DashboardWidgetsJsonld(); // \OpenAPI\Client\Model\DashboardWidgetsJsonld | The new dashboard_widgets resource

try {
    $result = $apiInstance->dashboardWidgetApiCorporationAdd($id, $dashboard_widgets_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |
| **dashboard_widgets_jsonld** | [**\OpenAPI\Client\Model\DashboardWidgetsJsonld**](../Model/DashboardWidgetsJsonld.md)| The new dashboard_widgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetApiCorporationRemove()`

```php
dashboardWidgetApiCorporationRemove($id, $dashboard_widgets_jsonld): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_widgets resource.

Creates a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier
$dashboard_widgets_jsonld = new \OpenAPI\Client\Model\DashboardWidgetsJsonld(); // \OpenAPI\Client\Model\DashboardWidgetsJsonld | The new dashboard_widgets resource

try {
    $result = $apiInstance->dashboardWidgetApiCorporationRemove($id, $dashboard_widgets_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |
| **dashboard_widgets_jsonld** | [**\OpenAPI\Client\Model\DashboardWidgetsJsonld**](../Model/DashboardWidgetsJsonld.md)| The new dashboard_widgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetApiFileUpload()`

```php
dashboardWidgetApiFileUpload($id, $dashboard_widgets_jsonld): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_widgets resource.

Creates a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier
$dashboard_widgets_jsonld = new \OpenAPI\Client\Model\DashboardWidgetsJsonld(); // \OpenAPI\Client\Model\DashboardWidgetsJsonld | The new dashboard_widgets resource

try {
    $result = $apiInstance->dashboardWidgetApiFileUpload($id, $dashboard_widgets_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |
| **dashboard_widgets_jsonld** | [**\OpenAPI\Client\Model\DashboardWidgetsJsonld**](../Model/DashboardWidgetsJsonld.md)| The new dashboard_widgets resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetApiPopulate()`

```php
dashboardWidgetApiPopulate($id): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList
```

Retrieves a dashboard_widgets resource.

Retrieves a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier

try {
    $result = $apiInstance->dashboardWidgetApiPopulate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetApiPopulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetDropDown()`

```php
dashboardWidgetDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $reports_report, $reports_report2, $data_processor, $data_processor2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\DashboardWidgetDropDown200Response
```

Retrieves the collection of dashboard_widgets resources.

Retrieves the collection of dashboard_widgets resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$reports_report = 'reports_report_example'; // string | 
$reports_report2 = array('reports_report_example'); // string[] | 
$data_processor = 'data_processor_example'; // string | 
$data_processor2 = array('data_processor_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_title = True; // bool | 
$exists_description = True; // bool | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->dashboardWidgetDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $reports_report, $reports_report2, $data_processor, $data_processor2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **reports_report** | **string**|  | [optional] |
| **reports_report2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_processor** | **string**|  | [optional] |
| **data_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_title** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetDropDown200Response**](../Model/DashboardWidgetDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetDuplicate()`

```php
dashboardWidgetDuplicate($id): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList
```

Retrieves a dashboard_widgets resource.

Retrieves a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier

try {
    $result = $apiInstance->dashboardWidgetDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetFetchFiles()`

```php
dashboardWidgetFetchFiles($id): \OpenAPI\Client\Model\DashboardWidgetsJsonld
```

Retrieves a dashboard_widgets resource.

Retrieves a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier

try {
    $result = $apiInstance->dashboardWidgetFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonld**](../Model/DashboardWidgetsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetGetBySlug()`

```php
dashboardWidgetGetBySlug($slug): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dashboard_widgets resource.

Retrieves a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dashboard_widgets identifier

try {
    $result = $apiInstance->dashboardWidgetGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dashboard_widgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DashboardWidgetsJsonldDashboardWidgetShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetGetDeleteRelations()`

```php
dashboardWidgetGetDeleteRelations($id): \OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetRelations
```

Retrieves a dashboard_widgets resource.

Retrieves a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier

try {
    $result = $apiInstance->dashboardWidgetGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldDashboardWidgetRelations**](../Model/DashboardWidgetsJsonldDashboardWidgetRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardWidgetMetadata()`

```php
dashboardWidgetMetadata($id): \OpenAPI\Client\Model\DashboardWidgetsJsonldIdStandardMetadataDashboardWidgetMetadataTagTaggingListDashboardWidgetRelationsTimestampable
```

Retrieves a dashboard_widgets resource.

Retrieves a dashboard_widgets resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardWidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_widgets identifier

try {
    $result = $apiInstance->dashboardWidgetMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardWidgetsApi->dashboardWidgetMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_widgets identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardWidgetsJsonldIdStandardMetadataDashboardWidgetMetadataTagTaggingListDashboardWidgetRelationsTimestampable**](../Model/DashboardWidgetsJsonldIdStandardMetadataDashboardWidgetMetadataTagTaggingListDashboardWidgetRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
