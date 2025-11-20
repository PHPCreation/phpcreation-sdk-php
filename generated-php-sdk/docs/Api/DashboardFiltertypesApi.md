# OpenAPI\Client\DashboardFiltertypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDashboardFiltertypesGetCollection()**](DashboardFiltertypesApi.md#apiDashboardFiltertypesGetCollection) | **GET** /open-api/v3/dashboard_filtertypes | Retrieves the collection of dashboard_filtertypes resources. |
| [**apiDashboardFiltertypesIdDelete()**](DashboardFiltertypesApi.md#apiDashboardFiltertypesIdDelete) | **DELETE** /open-api/v3/dashboard_filtertypes/{id} | Removes the dashboard_filtertypes resource. |
| [**apiDashboardFiltertypesIdGet()**](DashboardFiltertypesApi.md#apiDashboardFiltertypesIdGet) | **GET** /open-api/v3/dashboard_filtertypes/{id} | Retrieves a dashboard_filtertypes resource. |
| [**apiDashboardFiltertypesIdPut()**](DashboardFiltertypesApi.md#apiDashboardFiltertypesIdPut) | **PUT** /open-api/v3/dashboard_filtertypes/{id} | Replaces the dashboard_filtertypes resource. |
| [**apiDashboardFiltertypesPost()**](DashboardFiltertypesApi.md#apiDashboardFiltertypesPost) | **POST** /open-api/v3/dashboard_filtertypes | Creates a dashboard_filtertypes resource. |
| [**dashboardFilterTypeApiFileUpload()**](DashboardFiltertypesApi.md#dashboardFilterTypeApiFileUpload) | **POST** /open-api/v3/dashboard_filtertypes/{id}/file/upload | Creates a dashboard_filtertypes resource. |
| [**dashboardFilterTypeDropDown()**](DashboardFiltertypesApi.md#dashboardFilterTypeDropDown) | **GET** /open-api/v3/dashboard_filtertypes/dropdown/get | Retrieves the collection of dashboard_filtertypes resources. |
| [**dashboardFilterTypeDuplicate()**](DashboardFiltertypesApi.md#dashboardFilterTypeDuplicate) | **GET** /open-api/v3/dashboard_filtertypes/duplicate/{id} | Retrieves a dashboard_filtertypes resource. |
| [**dashboardFilterTypeFetchFiles()**](DashboardFiltertypesApi.md#dashboardFilterTypeFetchFiles) | **GET** /open-api/v3/dashboard_filtertypes/fetch_files/{id} | Retrieves a dashboard_filtertypes resource. |
| [**dashboardFilterTypeGetBySlug()**](DashboardFiltertypesApi.md#dashboardFilterTypeGetBySlug) | **GET** /open-api/v3/dashboard_filtertypes/by_slug/{slug} | Retrieves a dashboard_filtertypes resource. |
| [**dashboardFilterTypeGetDeleteRelations()**](DashboardFiltertypesApi.md#dashboardFilterTypeGetDeleteRelations) | **GET** /open-api/v3/dashboard_filtertypes/get_delete_relations/{id} | Retrieves a dashboard_filtertypes resource. |
| [**dashboardFilterTypeMetadata()**](DashboardFiltertypesApi.md#dashboardFilterTypeMetadata) | **GET** /open-api/v3/dashboard_filtertypes/metadata/{id} | Retrieves a dashboard_filtertypes resource. |


## `apiDashboardFiltertypesGetCollection()`

```php
apiDashboardFiltertypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiDashboardFiltertypesGetCollection200Response
```

Retrieves the collection of dashboard_filtertypes resources.

Retrieves the collection of dashboard_filtertypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
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
$slug_partial = 'slug_partial_example'; // string | dashboard_filtertypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dashboard_filtertypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dashboard_filtertypes slug_end_with
$id_partial = 'id_partial_example'; // string | dashboard_filtertypes id_partial
$id_start_with = 'id_start_with_example'; // string | dashboard_filtertypes id_start_with
$id_end_with = 'id_end_with_example'; // string | dashboard_filtertypes id_end_with
$number_partial = 'number_partial_example'; // string | dashboard_filtertypes number_partial
$number_start_with = 'number_start_with_example'; // string | dashboard_filtertypes number_start_with
$number_end_with = 'number_end_with_example'; // string | dashboard_filtertypes number_end_with
$icon_partial = 'icon_partial_example'; // string | dashboard_filtertypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | dashboard_filtertypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | dashboard_filtertypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | dashboard_filtertypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | dashboard_filtertypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | dashboard_filtertypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | dashboard_filtertypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | dashboard_filtertypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | dashboard_filtertypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | dashboard_filtertypes priority_range

try {
    $result = $apiInstance->apiDashboardFiltertypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->apiDashboardFiltertypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **slug_partial** | **string**| dashboard_filtertypes slug_partial | [optional] |
| **slug_start_with** | **string**| dashboard_filtertypes slug_start_with | [optional] |
| **slug_end_with** | **string**| dashboard_filtertypes slug_end_with | [optional] |
| **id_partial** | **string**| dashboard_filtertypes id_partial | [optional] |
| **id_start_with** | **string**| dashboard_filtertypes id_start_with | [optional] |
| **id_end_with** | **string**| dashboard_filtertypes id_end_with | [optional] |
| **number_partial** | **string**| dashboard_filtertypes number_partial | [optional] |
| **number_start_with** | **string**| dashboard_filtertypes number_start_with | [optional] |
| **number_end_with** | **string**| dashboard_filtertypes number_end_with | [optional] |
| **icon_partial** | **string**| dashboard_filtertypes icon_partial | [optional] |
| **icon_start_with** | **string**| dashboard_filtertypes icon_start_with | [optional] |
| **icon_end_with** | **string**| dashboard_filtertypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| dashboard_filtertypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| dashboard_filtertypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| dashboard_filtertypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| dashboard_filtertypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| dashboard_filtertypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| dashboard_filtertypes translations.description_end_with | [optional] |
| **priority_range** | **string**| dashboard_filtertypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDashboardFiltertypesGetCollection200Response**](../Model/ApiDashboardFiltertypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardFiltertypesIdDelete()`

```php
apiDashboardFiltertypesIdDelete($id)
```

Removes the dashboard_filtertypes resource.

Removes the dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier

try {
    $apiInstance->apiDashboardFiltertypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->apiDashboardFiltertypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |

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

## `apiDashboardFiltertypesIdGet()`

```php
apiDashboardFiltertypesIdGet($id): \OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a dashboard_filtertypes resource.

Retrieves a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier

try {
    $result = $apiInstance->apiDashboardFiltertypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->apiDashboardFiltertypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardFiltertypesIdPut()`

```php
apiDashboardFiltertypesIdPut($id, $dashboard_filtertypes_jsonld_post): \OpenAPI\Client\Model\DashboardFiltertypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the dashboard_filtertypes resource.

Replaces the dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier
$dashboard_filtertypes_jsonld_post = new \OpenAPI\Client\Model\DashboardFiltertypesJsonldPost(); // \OpenAPI\Client\Model\DashboardFiltertypesJsonldPost | The updated dashboard_filtertypes resource

try {
    $result = $apiInstance->apiDashboardFiltertypesIdPut($id, $dashboard_filtertypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->apiDashboardFiltertypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |
| **dashboard_filtertypes_jsonld_post** | [**\OpenAPI\Client\Model\DashboardFiltertypesJsonldPost**](../Model/DashboardFiltertypesJsonldPost.md)| The updated dashboard_filtertypes resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/DashboardFiltertypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDashboardFiltertypesPost()`

```php
apiDashboardFiltertypesPost($dashboard_filtertypes_jsonld_add_post): \OpenAPI\Client\Model\DashboardFiltertypesJsonld
```

Creates a dashboard_filtertypes resource.

Creates a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_filtertypes_jsonld_add_post = new \OpenAPI\Client\Model\DashboardFiltertypesJsonldAddPost(); // \OpenAPI\Client\Model\DashboardFiltertypesJsonldAddPost | The new dashboard_filtertypes resource

try {
    $result = $apiInstance->apiDashboardFiltertypesPost($dashboard_filtertypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->apiDashboardFiltertypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_filtertypes_jsonld_add_post** | [**\OpenAPI\Client\Model\DashboardFiltertypesJsonldAddPost**](../Model/DashboardFiltertypesJsonldAddPost.md)| The new dashboard_filtertypes resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonld**](../Model/DashboardFiltertypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterTypeApiFileUpload()`

```php
dashboardFilterTypeApiFileUpload($id, $dashboard_filtertypes_jsonld): \OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a dashboard_filtertypes resource.

Creates a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier
$dashboard_filtertypes_jsonld = new \OpenAPI\Client\Model\DashboardFiltertypesJsonld(); // \OpenAPI\Client\Model\DashboardFiltertypesJsonld | The new dashboard_filtertypes resource

try {
    $result = $apiInstance->dashboardFilterTypeApiFileUpload($id, $dashboard_filtertypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->dashboardFilterTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |
| **dashboard_filtertypes_jsonld** | [**\OpenAPI\Client\Model\DashboardFiltertypesJsonld**](../Model/DashboardFiltertypesJsonld.md)| The new dashboard_filtertypes resource | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterTypeDropDown()`

```php
dashboardFilterTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\DashboardFilterTypeDropDown200Response
```

Retrieves the collection of dashboard_filtertypes resources.

Retrieves the collection of dashboard_filtertypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
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
    $result = $apiInstance->dashboardFilterTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->dashboardFilterTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
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

[**\OpenAPI\Client\Model\DashboardFilterTypeDropDown200Response**](../Model/DashboardFilterTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterTypeDuplicate()`

```php
dashboardFilterTypeDuplicate($id): \OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingList
```

Retrieves a dashboard_filtertypes resource.

Retrieves a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier

try {
    $result = $apiInstance->dashboardFilterTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->dashboardFilterTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingList**](../Model/DashboardFiltertypesJsonldDashboardFilterTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterTypeFetchFiles()`

```php
dashboardFilterTypeFetchFiles($id): \OpenAPI\Client\Model\DashboardFiltertypesJsonld
```

Retrieves a dashboard_filtertypes resource.

Retrieves a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier

try {
    $result = $apiInstance->dashboardFilterTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->dashboardFilterTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonld**](../Model/DashboardFiltertypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterTypeGetBySlug()`

```php
dashboardFilterTypeGetBySlug($slug): \OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dashboard_filtertypes resource.

Retrieves a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dashboard_filtertypes identifier

try {
    $result = $apiInstance->dashboardFilterTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->dashboardFilterTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dashboard_filtertypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DashboardFiltertypesJsonldDashboardFilterTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterTypeGetDeleteRelations()`

```php
dashboardFilterTypeGetDeleteRelations($id): \OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeRelations
```

Retrieves a dashboard_filtertypes resource.

Retrieves a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier

try {
    $result = $apiInstance->dashboardFilterTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->dashboardFilterTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonldDashboardFilterTypeRelations**](../Model/DashboardFiltertypesJsonldDashboardFilterTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dashboardFilterTypeMetadata()`

```php
dashboardFilterTypeMetadata($id): \OpenAPI\Client\Model\DashboardFiltertypesJsonldIdStandardMetadataDashboardFilterTypeMetadataTagTaggingListDashboardFilterTypeRelationsTimestampable
```

Retrieves a dashboard_filtertypes resource.

Retrieves a dashboard_filtertypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DashboardFiltertypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dashboard_filtertypes identifier

try {
    $result = $apiInstance->dashboardFilterTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardFiltertypesApi->dashboardFilterTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dashboard_filtertypes identifier | |

### Return type

[**\OpenAPI\Client\Model\DashboardFiltertypesJsonldIdStandardMetadataDashboardFilterTypeMetadataTagTaggingListDashboardFilterTypeRelationsTimestampable**](../Model/DashboardFiltertypesJsonldIdStandardMetadataDashboardFilterTypeMetadataTagTaggingListDashboardFilterTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
