# OpenAPI\Client\DashboardFiltersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDashboardFiltersGetCollection()**](DashboardFiltersApi.md#apiDashboardFiltersGetCollection) | **GET** /open-api/v3/dashboard_filters | Retrieves the collection of dashboard_filters resources. |
| [**apiDashboardFiltersIdDelete()**](DashboardFiltersApi.md#apiDashboardFiltersIdDelete) | **DELETE** /open-api/v3/dashboard_filters/{id} | Removes the dashboard_filters resource. |
| [**apiDashboardFiltersIdGet()**](DashboardFiltersApi.md#apiDashboardFiltersIdGet) | **GET** /open-api/v3/dashboard_filters/{id} | Retrieves a dashboard_filters resource. |
| [**apiDashboardFiltersIdPut()**](DashboardFiltersApi.md#apiDashboardFiltersIdPut) | **PUT** /open-api/v3/dashboard_filters/{id} | Replaces the dashboard_filters resource. |
| [**apiDashboardFiltersPost()**](DashboardFiltersApi.md#apiDashboardFiltersPost) | **POST** /open-api/v3/dashboard_filters | Creates a dashboard_filters resource. |
| [**dashboardFilterApiFileUpload()**](DashboardFiltersApi.md#dashboardFilterApiFileUpload) | **POST** /open-api/v3/dashboard_filters/{id}/file/upload | Creates a dashboard_filters resource. |
| [**dashboardFilterDropDown()**](DashboardFiltersApi.md#dashboardFilterDropDown) | **GET** /open-api/v3/dashboard_filters/dropdown/get | Retrieves the collection of dashboard_filters resources. |
| [**dashboardFilterDuplicate()**](DashboardFiltersApi.md#dashboardFilterDuplicate) | **GET** /open-api/v3/dashboard_filters/duplicate/{id} | Retrieves a dashboard_filters resource. |
| [**dashboardFilterFetchFiles()**](DashboardFiltersApi.md#dashboardFilterFetchFiles) | **GET** /open-api/v3/dashboard_filters/fetch_files/{id} | Retrieves a dashboard_filters resource. |
| [**dashboardFilterGetBySlug()**](DashboardFiltersApi.md#dashboardFilterGetBySlug) | **GET** /open-api/v3/dashboard_filters/by_slug/{slug} | Retrieves a dashboard_filters resource. |
| [**dashboardFilterGetDeleteRelations()**](DashboardFiltersApi.md#dashboardFilterGetDeleteRelations) | **GET** /open-api/v3/dashboard_filters/get_delete_relations/{id} | Retrieves a dashboard_filters resource. |
| [**filterMetadata()**](DashboardFiltersApi.md#filterMetadata) | **GET** /open-api/v3/dashboard_filters/metadata/{id} | Retrieves a dashboard_filters resource. |


## `apiDashboardFiltersGetCollection()`

```php
apiDashboardFiltersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $data_collector_data_processors_processor_widgets_reports_report, $data_collector_data_processors_processor_widgets_reports_report2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_parameter_name, $exists_label, $exists_entity_name, $exists_default_value, $exists_choices, $exists_source, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $parameter_name_partial, $parameter_name_start_with, $parameter_name_end_with, $label_partial, $label_start_with, $label_end_with): \OpenAPI\Client\Model\ApiDashboardFiltersGetCollection200Response
```

Retrieves the collection of dashboard_filters resources.

Retrieves the collection of dashboard_filters resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
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
$data_collector = 'data_collector_example'; // string | 
$data_collector2 = array('data_collector_example'); // string[] | 
$data_collector_data_processors_processor_widgets_reports_report = 'data_collector_data_processors_processor_widgets_reports_report_example'; // string | 
$data_collector_data_processors_processor_widgets_reports_report2 = array('data_collector_data_processors_processor_widgets_reports_report_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_parameter_name = True; // bool | 
$exists_label = True; // bool | 
$exists_entity_name = True; // bool | 
$exists_default_value = True; // bool | 
$exists_choices = True; // bool | 
$exists_source = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dashboard_filters slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dashboard_filters slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dashboard_filters slug_end_with
$id_partial = 'id_partial_example'; // string | dashboard_filters id_partial
$id_start_with = 'id_start_with_example'; // string | dashboard_filters id_start_with
$id_end_with = 'id_end_with_example'; // string | dashboard_filters id_end_with
$parameter_name_partial = 'parameter_name_partial_example'; // string | dashboard_filters parameterName_partial
$parameter_name_start_with = 'parameter_name_start_with_example'; // string | dashboard_filters parameterName_start_with
$parameter_name_end_with = 'parameter_name_end_with_example'; // string | dashboard_filters parameterName_end_with
$label_partial = 'label_partial_example'; // string | dashboard_filters label_partial
$label_start_with = 'label_start_with_example'; // string | dashboard_filters label_start_with
$label_end_with = 'label_end_with_example'; // string | dashboard_filters label_end_with

try {
    $result = $apiInstance->apiDashboardFiltersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $data_collector_data_processors_processor_widgets_reports_report, $data_collector_data_processors_processor_widgets_reports_report2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_parameter_name, $exists_label, $exists_entity_name, $exists_default_value, $exists_choices, $exists_source, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $parameter_name_partial, $parameter_name_start_with, $parameter_name_end_with, $label_partial, $label_start_with, $label_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->apiDashboardFiltersGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **data_collector** | **string**|  | [optional] |
| **data_collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_collector_data_processors_processor_widgets_reports_report** | **string**|  | [optional] |
| **data_collector_data_processors_processor_widgets_reports_report2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_parameter_name** | **bool**|  | [optional] |
| **exists_label** | **bool**|  | [optional] |
| **exists_entity_name** | **bool**|  | [optional] |
| **exists_default_value** | **bool**|  | [optional] |
| **exists_choices** | **bool**|  | [optional] |
| **exists_source** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dashboard_filters slug_partial | [optional] |
| **slug_start_with** | **string**| dashboard_filters slug_start_with | [optional] |
| **slug_end_with** | **string**| dashboard_filters slug_end_with | [optional] |
| **id_partial** | **string**| dashboard_filters id_partial | [optional] |
| **id_start_with** | **string**| dashboard_filters id_start_with | [optional] |
| **id_end_with** | **string**| dashboard_filters id_end_with | [optional] |
| **parameter_name_partial** | **string**| dashboard_filters parameterName_partial | [optional] |
| **parameter_name_start_with** | **string**| dashboard_filters parameterName_start_with | [optional] |
| **parameter_name_end_with** | **string**| dashboard_filters parameterName_end_with | [optional] |
| **label_partial** | **string**| dashboard_filters label_partial | [optional] |
| **label_start_with** | **string**| dashboard_filters label_start_with | [optional] |
| **label_end_with** | **string**| dashboard_filters label_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDashboardFiltersGetCollection200Response**](../Model/ApiDashboardFiltersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardFiltersIdDelete()`

```php
apiDashboardFiltersIdDelete($id)
```

Removes the dashboard_filters resource.

Removes the dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier

try {
    $apiInstance->apiDashboardFiltersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->apiDashboardFiltersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |

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

## `apiDashboardFiltersIdGet()`

```php
apiDashboardFiltersIdGet($id): \OpenAPI\Client\Model\DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a dashboard_filters resource.

Retrieves a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier

try {
    $result = $apiInstance->apiDashboardFiltersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->apiDashboardFiltersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardFiltersIdPut()`

```php
apiDashboardFiltersIdPut($id, $dashboard_filters_jsonld_add_post): \OpenAPI\Client\Model\DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingList
```

Replaces the dashboard_filters resource.

Replaces the dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier
$dashboard_filters_jsonld_add_post = new \OpenAPI\Client\Model\DashboardFiltersJsonldAddPost(); // \OpenAPI\Client\Model\DashboardFiltersJsonldAddPost | The updated dashboard_filters resource

try {
    $result = $apiInstance->apiDashboardFiltersIdPut($id, $dashboard_filters_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->apiDashboardFiltersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |
| **dashboard_filters_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardFiltersJsonldAddPost**](../Model/DashboardFiltersJsonldAddPost.md)| The updated dashboard_filters resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingList**](../Model/DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardFiltersPost()`

```php
apiDashboardFiltersPost($dashboard_filters_jsonld_add_post): \OpenAPI\Client\Model\DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_filters resource.

Creates a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_filters_jsonld_add_post = new \OpenAPI\Client\Model\DashboardFiltersJsonldAddPost(); // \OpenAPI\Client\Model\DashboardFiltersJsonldAddPost | The new dashboard_filters resource

try {
    $result = $apiInstance->apiDashboardFiltersPost($dashboard_filters_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->apiDashboardFiltersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_filters_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardFiltersJsonldAddPost**](../Model/DashboardFiltersJsonldAddPost.md)| The new dashboard_filters resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardFiltersJsonldFilterShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterApiFileUpload()`

```php
dashboardFilterApiFileUpload($id, $dashboard_filters_jsonld): \OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_filters resource.

Creates a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier
$dashboard_filters_jsonld = new \OpenAPI\Client\Model\DashboardFiltersJsonld(); // \OpenAPI\Client\Model\DashboardFiltersJsonld | The new dashboard_filters resource

try {
    $result = $apiInstance->dashboardFilterApiFileUpload($id, $dashboard_filters_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->dashboardFilterApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |
| **dashboard_filters_jsonld** | [**\OpenAPI\Client\Model\DashboardFiltersJsonld**](../Model/DashboardFiltersJsonld.md)| The new dashboard_filters resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardFiltersJsonldDashboardFilterShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterDropDown()`

```php
dashboardFilterDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $data_collector_data_processors_processor_widgets_reports_report, $data_collector_data_processors_processor_widgets_reports_report2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_parameter_name, $exists_label, $exists_entity_name, $exists_default_value, $exists_choices, $exists_source, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\DashboardFilterDropDown200Response
```

Retrieves the collection of dashboard_filters resources.

Retrieves the collection of dashboard_filters resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
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
$data_collector = 'data_collector_example'; // string | 
$data_collector2 = array('data_collector_example'); // string[] | 
$data_collector_data_processors_processor_widgets_reports_report = 'data_collector_data_processors_processor_widgets_reports_report_example'; // string | 
$data_collector_data_processors_processor_widgets_reports_report2 = array('data_collector_data_processors_processor_widgets_reports_report_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_parameter_name = True; // bool | 
$exists_label = True; // bool | 
$exists_entity_name = True; // bool | 
$exists_default_value = True; // bool | 
$exists_choices = True; // bool | 
$exists_source = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->dashboardFilterDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $data_collector_data_processors_processor_widgets_reports_report, $data_collector_data_processors_processor_widgets_reports_report2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_parameter_name, $exists_label, $exists_entity_name, $exists_default_value, $exists_choices, $exists_source, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->dashboardFilterDropDown: ', $e->getMessage(), PHP_EOL;
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
| **data_collector** | **string**|  | [optional] |
| **data_collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_collector_data_processors_processor_widgets_reports_report** | **string**|  | [optional] |
| **data_collector_data_processors_processor_widgets_reports_report2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_parameter_name** | **bool**|  | [optional] |
| **exists_label** | **bool**|  | [optional] |
| **exists_entity_name** | **bool**|  | [optional] |
| **exists_default_value** | **bool**|  | [optional] |
| **exists_choices** | **bool**|  | [optional] |
| **exists_source** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DashboardFilterDropDown200Response**](../Model/DashboardFilterDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterDuplicate()`

```php
dashboardFilterDuplicate($id): \OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterShowIdTimestampableTagTaggingList
```

Retrieves a dashboard_filters resource.

Retrieves a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier

try {
    $result = $apiInstance->dashboardFilterDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->dashboardFilterDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterShowIdTimestampableTagTaggingList**](../Model/DashboardFiltersJsonldDashboardFilterShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterFetchFiles()`

```php
dashboardFilterFetchFiles($id): \OpenAPI\Client\Model\DashboardFiltersJsonld
```

Retrieves a dashboard_filters resource.

Retrieves a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier

try {
    $result = $apiInstance->dashboardFilterFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->dashboardFilterFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonld**](../Model/DashboardFiltersJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterGetBySlug()`

```php
dashboardFilterGetBySlug($slug): \OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dashboard_filters resource.

Retrieves a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dashboard_filters identifier

try {
    $result = $apiInstance->dashboardFilterGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->dashboardFilterGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dashboard_filters identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DashboardFiltersJsonldDashboardFilterShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterGetDeleteRelations()`

```php
dashboardFilterGetDeleteRelations($id): \OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterRelations
```

Retrieves a dashboard_filters resource.

Retrieves a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier

try {
    $result = $apiInstance->dashboardFilterGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->dashboardFilterGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldDashboardFilterRelations**](../Model/DashboardFiltersJsonldDashboardFilterRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filterMetadata()`

```php
filterMetadata($id): \OpenAPI\Client\Model\DashboardFiltersJsonldIdStandardMetadataFilterMetadataTagTaggingListFilterRelationsTimestampable
```

Retrieves a dashboard_filters resource.

Retrieves a dashboard_filters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filters identifier

try {
    $result = $apiInstance->filterMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltersApi->filterMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filters identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltersJsonldIdStandardMetadataFilterMetadataTagTaggingListFilterRelationsTimestampable**](../Model/DashboardFiltersJsonldIdStandardMetadataFilterMetadataTagTaggingListFilterRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
