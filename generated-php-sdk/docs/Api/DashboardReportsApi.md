# OpenAPI\Client\DashboardReportsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDashboardReportsGetCollection()**](DashboardReportsApi.md#apiDashboardReportsGetCollection) | **GET** /open-api/v3/dashboard_reports | Retrieves the collection of dashboard_reports resources. |
| [**apiDashboardReportsIdDelete()**](DashboardReportsApi.md#apiDashboardReportsIdDelete) | **DELETE** /open-api/v3/dashboard_reports/{id} | Removes the dashboard_reports resource. |
| [**apiDashboardReportsIdGet()**](DashboardReportsApi.md#apiDashboardReportsIdGet) | **GET** /open-api/v3/dashboard_reports/{id} | Retrieves a dashboard_reports resource. |
| [**apiDashboardReportsIdPut()**](DashboardReportsApi.md#apiDashboardReportsIdPut) | **PUT** /open-api/v3/dashboard_reports/{id} | Replaces the dashboard_reports resource. |
| [**apiDashboardReportsPost()**](DashboardReportsApi.md#apiDashboardReportsPost) | **POST** /open-api/v3/dashboard_reports | Creates a dashboard_reports resource. |
| [**dashboardReportApiFileUpload()**](DashboardReportsApi.md#dashboardReportApiFileUpload) | **POST** /open-api/v3/dashboard_reports/{id}/file/upload | Creates a dashboard_reports resource. |
| [**dashboardReportDropDown()**](DashboardReportsApi.md#dashboardReportDropDown) | **GET** /open-api/v3/dashboard_reports/dropdown/get | Retrieves the collection of dashboard_reports resources. |
| [**dashboardReportDuplicate()**](DashboardReportsApi.md#dashboardReportDuplicate) | **GET** /open-api/v3/dashboard_reports/duplicate/{id} | Retrieves a dashboard_reports resource. |
| [**dashboardReportFetchFiles()**](DashboardReportsApi.md#dashboardReportFetchFiles) | **GET** /open-api/v3/dashboard_reports/fetch_files/{id} | Retrieves a dashboard_reports resource. |
| [**dashboardReportGetBySlug()**](DashboardReportsApi.md#dashboardReportGetBySlug) | **GET** /open-api/v3/dashboard_reports/by_slug/{slug} | Retrieves a dashboard_reports resource. |
| [**dashboardReportGetDeleteRelations()**](DashboardReportsApi.md#dashboardReportGetDeleteRelations) | **GET** /open-api/v3/dashboard_reports/get_delete_relations/{id} | Retrieves a dashboard_reports resource. |
| [**dashboardReportMetadata()**](DashboardReportsApi.md#dashboardReportMetadata) | **GET** /open-api/v3/dashboard_reports/metadata/{id} | Retrieves a dashboard_reports resource. |


## `apiDashboardReportsGetCollection()`

```php
apiDashboardReportsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $exists_entity_name, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $entity_name_partial, $entity_name_start_with, $entity_name_end_with): \OpenAPI\Client\Model\ApiDashboardReportsGetCollection200Response
```

Retrieves the collection of dashboard_reports resources.

Retrieves the collection of dashboard_reports resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
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
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_title = True; // bool | 
$exists_description = True; // bool | 
$exists_entity_name = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dashboard_reports slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dashboard_reports slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dashboard_reports slug_end_with
$id_partial = 'id_partial_example'; // string | dashboard_reports id_partial
$id_start_with = 'id_start_with_example'; // string | dashboard_reports id_start_with
$id_end_with = 'id_end_with_example'; // string | dashboard_reports id_end_with
$title_partial = 'title_partial_example'; // string | dashboard_reports title_partial
$title_start_with = 'title_start_with_example'; // string | dashboard_reports title_start_with
$title_end_with = 'title_end_with_example'; // string | dashboard_reports title_end_with
$entity_name_partial = 'entity_name_partial_example'; // string | dashboard_reports entityName_partial
$entity_name_start_with = 'entity_name_start_with_example'; // string | dashboard_reports entityName_start_with
$entity_name_end_with = 'entity_name_end_with_example'; // string | dashboard_reports entityName_end_with

try {
    $result = $apiInstance->apiDashboardReportsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $exists_entity_name, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $entity_name_partial, $entity_name_start_with, $entity_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->apiDashboardReportsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_title** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **exists_entity_name** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dashboard_reports slug_partial | [optional] |
| **slug_start_with** | **string**| dashboard_reports slug_start_with | [optional] |
| **slug_end_with** | **string**| dashboard_reports slug_end_with | [optional] |
| **id_partial** | **string**| dashboard_reports id_partial | [optional] |
| **id_start_with** | **string**| dashboard_reports id_start_with | [optional] |
| **id_end_with** | **string**| dashboard_reports id_end_with | [optional] |
| **title_partial** | **string**| dashboard_reports title_partial | [optional] |
| **title_start_with** | **string**| dashboard_reports title_start_with | [optional] |
| **title_end_with** | **string**| dashboard_reports title_end_with | [optional] |
| **entity_name_partial** | **string**| dashboard_reports entityName_partial | [optional] |
| **entity_name_start_with** | **string**| dashboard_reports entityName_start_with | [optional] |
| **entity_name_end_with** | **string**| dashboard_reports entityName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDashboardReportsGetCollection200Response**](../Model/ApiDashboardReportsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReportsIdDelete()`

```php
apiDashboardReportsIdDelete($id)
```

Removes the dashboard_reports resource.

Removes the dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier

try {
    $apiInstance->apiDashboardReportsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->apiDashboardReportsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |

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

## `apiDashboardReportsIdGet()`

```php
apiDashboardReportsIdGet($id): \OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShowDashboardReportRelations
```

Retrieves a dashboard_reports resource.

Retrieves a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier

try {
    $result = $apiInstance->apiDashboardReportsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->apiDashboardReportsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShowDashboardReportRelations**](../Model/DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShowDashboardReportRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReportsIdPut()`

```php
apiDashboardReportsIdPut($id, $dashboard_reports_jsonld_add_post): \OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingList
```

Replaces the dashboard_reports resource.

Replaces the dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier
$dashboard_reports_jsonld_add_post = new \OpenAPI\Client\Model\DashboardReportsJsonldAddPost(); // \OpenAPI\Client\Model\DashboardReportsJsonldAddPost | The updated dashboard_reports resource

try {
    $result = $apiInstance->apiDashboardReportsIdPut($id, $dashboard_reports_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->apiDashboardReportsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |
| **dashboard_reports_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardReportsJsonldAddPost**](../Model/DashboardReportsJsonldAddPost.md)| The updated dashboard_reports resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingList**](../Model/DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardReportsPost()`

```php
apiDashboardReportsPost($dashboard_reports_jsonld_add_post): \OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_reports resource.

Creates a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_reports_jsonld_add_post = new \OpenAPI\Client\Model\DashboardReportsJsonldAddPost(); // \OpenAPI\Client\Model\DashboardReportsJsonldAddPost | The new dashboard_reports resource

try {
    $result = $apiInstance->apiDashboardReportsPost($dashboard_reports_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->apiDashboardReportsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_reports_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardReportsJsonldAddPost**](../Model/DashboardReportsJsonldAddPost.md)| The new dashboard_reports resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportApiFileUpload()`

```php
dashboardReportApiFileUpload($id, $dashboard_reports_jsonld): \OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_reports resource.

Creates a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier
$dashboard_reports_jsonld = new \OpenAPI\Client\Model\DashboardReportsJsonld(); // \OpenAPI\Client\Model\DashboardReportsJsonld | The new dashboard_reports resource

try {
    $result = $apiInstance->dashboardReportApiFileUpload($id, $dashboard_reports_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->dashboardReportApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |
| **dashboard_reports_jsonld** | [**\OpenAPI\Client\Model\DashboardReportsJsonld**](../Model/DashboardReportsJsonld.md)| The new dashboard_reports resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportDropDown()`

```php
dashboardReportDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $exists_entity_name, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\DashboardReportDropDown200Response
```

Retrieves the collection of dashboard_reports resources.

Retrieves the collection of dashboard_reports resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
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
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_title = True; // bool | 
$exists_description = True; // bool | 
$exists_entity_name = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->dashboardReportDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_title, $exists_description, $exists_entity_name, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->dashboardReportDropDown: ', $e->getMessage(), PHP_EOL;
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
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_title** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **exists_entity_name** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DashboardReportDropDown200Response**](../Model/DashboardReportDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportDuplicate()`

```php
dashboardReportDuplicate($id): \OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingList
```

Retrieves a dashboard_reports resource.

Retrieves a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier

try {
    $result = $apiInstance->dashboardReportDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->dashboardReportDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingList**](../Model/DashboardReportsJsonldDashboardReportShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportFetchFiles()`

```php
dashboardReportFetchFiles($id): \OpenAPI\Client\Model\DashboardReportsJsonld
```

Retrieves a dashboard_reports resource.

Retrieves a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier

try {
    $result = $apiInstance->dashboardReportFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->dashboardReportFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonld**](../Model/DashboardReportsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportGetBySlug()`

```php
dashboardReportGetBySlug($slug): \OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dashboard_reports resource.

Retrieves a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dashboard_reports identifier

try {
    $result = $apiInstance->dashboardReportGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->dashboardReportGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dashboard_reports identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DashboardReportsJsonldDashboardReportShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportGetDeleteRelations()`

```php
dashboardReportGetDeleteRelations($id): \OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportRelations
```

Retrieves a dashboard_reports resource.

Retrieves a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier

try {
    $result = $apiInstance->dashboardReportGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->dashboardReportGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldDashboardReportRelations**](../Model/DashboardReportsJsonldDashboardReportRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardReportMetadata()`

```php
dashboardReportMetadata($id): \OpenAPI\Client\Model\DashboardReportsJsonldIdStandardMetadataDashboardReportMetadataTagTaggingListDashboardReportRelationsTimestampable
```

Retrieves a dashboard_reports resource.

Retrieves a dashboard_reports resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_reports identifier

try {
    $result = $apiInstance->dashboardReportMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardReportsApi->dashboardReportMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_reports identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardReportsJsonldIdStandardMetadataDashboardReportMetadataTagTaggingListDashboardReportRelationsTimestampable**](../Model/DashboardReportsJsonldIdStandardMetadataDashboardReportMetadataTagTaggingListDashboardReportRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
