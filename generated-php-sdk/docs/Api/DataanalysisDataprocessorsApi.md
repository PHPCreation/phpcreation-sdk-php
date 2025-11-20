# OpenAPI\Client\DataanalysisDataprocessorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDataanalysisDataprocessorsGetCollection()**](DataanalysisDataprocessorsApi.md#apiDataanalysisDataprocessorsGetCollection) | **GET** /open-api/v3/dataanalysis_dataprocessors | Retrieves the collection of dataanalysis_dataprocessors resources. |
| [**apiDataanalysisDataprocessorsIdDelete()**](DataanalysisDataprocessorsApi.md#apiDataanalysisDataprocessorsIdDelete) | **DELETE** /open-api/v3/dataanalysis_dataprocessors/{id} | Removes the dataanalysis_dataprocessors resource. |
| [**apiDataanalysisDataprocessorsIdGet()**](DataanalysisDataprocessorsApi.md#apiDataanalysisDataprocessorsIdGet) | **GET** /open-api/v3/dataanalysis_dataprocessors/{id} | Retrieves a dataanalysis_dataprocessors resource. |
| [**apiDataanalysisDataprocessorsIdPut()**](DataanalysisDataprocessorsApi.md#apiDataanalysisDataprocessorsIdPut) | **PUT** /open-api/v3/dataanalysis_dataprocessors/{id} | Replaces the dataanalysis_dataprocessors resource. |
| [**apiDataanalysisDataprocessorsPost()**](DataanalysisDataprocessorsApi.md#apiDataanalysisDataprocessorsPost) | **POST** /open-api/v3/dataanalysis_dataprocessors | Creates a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorApiFileUpload()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorApiFileUpload) | **POST** /open-api/v3/dataanalysis_dataprocessors/{id}/file/upload | Creates a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorApiProcess()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorApiProcess) | **GET** /open-api/v3/dataanalysis_dataprocessors/{id}/process | Retrieves a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorApiProcessMetadata()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorApiProcessMetadata) | **GET** /open-api/v3/dataanalysis_dataprocessors/{id}/metadata | Retrieves a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorDropDown()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorDropDown) | **GET** /open-api/v3/dataanalysis_dataprocessors/dropdown/get | Retrieves the collection of dataanalysis_dataprocessors resources. |
| [**dataanalysisDataProcessorDuplicate()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorDuplicate) | **GET** /open-api/v3/dataanalysis_dataprocessors/duplicate/{id} | Retrieves a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorFetchFiles()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorFetchFiles) | **GET** /open-api/v3/dataanalysis_dataprocessors/fetch_files/{id} | Retrieves a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorGetBySlug()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorGetBySlug) | **GET** /open-api/v3/dataanalysis_dataprocessors/by_slug/{slug} | Retrieves a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorGetDeleteRelations()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorGetDeleteRelations) | **GET** /open-api/v3/dataanalysis_dataprocessors/get_delete_relations/{id} | Retrieves a dataanalysis_dataprocessors resource. |
| [**dataanalysisDataProcessorMetadata()**](DataanalysisDataprocessorsApi.md#dataanalysisDataProcessorMetadata) | **GET** /open-api/v3/dataanalysis_dataprocessors/metadata/{id} | Retrieves a dataanalysis_dataprocessors resource. |


## `apiDataanalysisDataprocessorsGetCollection()`

```php
apiDataanalysisDataprocessorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $manager_name, $manager_name2, $series_names, $series_names2, $graph_type, $graph_type2, $data_collectors_collector, $data_collectors_collector2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_series_names, $exists_graph_type, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $manager_name_partial, $manager_name_start_with, $manager_name_end_with, $series_names_partial, $series_names_start_with, $series_names_end_with, $graph_type_partial, $graph_type_start_with, $graph_type_end_with): \OpenAPI\Client\Model\ApiDataanalysisDataprocessorsGetCollection200Response
```

Retrieves the collection of dataanalysis_dataprocessors resources.

Retrieves the collection of dataanalysis_dataprocessors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
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
$title = 'title_example'; // string | 
$title2 = array('title_example'); // string[] | 
$manager_name = 'manager_name_example'; // string | 
$manager_name2 = array('manager_name_example'); // string[] | 
$series_names = 'series_names_example'; // string | 
$series_names2 = array('series_names_example'); // string[] | 
$graph_type = 'graph_type_example'; // string | 
$graph_type2 = array('graph_type_example'); // string[] | 
$data_collectors_collector = 'data_collectors_collector_example'; // string | 
$data_collectors_collector2 = array('data_collectors_collector_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_series_names = True; // bool | 
$exists_graph_type = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_title = 'order_title_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | dataanalysis_dataprocessors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_dataprocessors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_dataprocessors slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_dataprocessors id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_dataprocessors id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_dataprocessors id_end_with
$title_partial = 'title_partial_example'; // string | dataanalysis_dataprocessors title_partial
$title_start_with = 'title_start_with_example'; // string | dataanalysis_dataprocessors title_start_with
$title_end_with = 'title_end_with_example'; // string | dataanalysis_dataprocessors title_end_with
$manager_name_partial = 'manager_name_partial_example'; // string | dataanalysis_dataprocessors managerName_partial
$manager_name_start_with = 'manager_name_start_with_example'; // string | dataanalysis_dataprocessors managerName_start_with
$manager_name_end_with = 'manager_name_end_with_example'; // string | dataanalysis_dataprocessors managerName_end_with
$series_names_partial = 'series_names_partial_example'; // string | dataanalysis_dataprocessors seriesNames_partial
$series_names_start_with = 'series_names_start_with_example'; // string | dataanalysis_dataprocessors seriesNames_start_with
$series_names_end_with = 'series_names_end_with_example'; // string | dataanalysis_dataprocessors seriesNames_end_with
$graph_type_partial = 'graph_type_partial_example'; // string | dataanalysis_dataprocessors graphType_partial
$graph_type_start_with = 'graph_type_start_with_example'; // string | dataanalysis_dataprocessors graphType_start_with
$graph_type_end_with = 'graph_type_end_with_example'; // string | dataanalysis_dataprocessors graphType_end_with

try {
    $result = $apiInstance->apiDataanalysisDataprocessorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $manager_name, $manager_name2, $series_names, $series_names2, $graph_type, $graph_type2, $data_collectors_collector, $data_collectors_collector2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_series_names, $exists_graph_type, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $manager_name_partial, $manager_name_start_with, $manager_name_end_with, $series_names_partial, $series_names_start_with, $series_names_end_with, $graph_type_partial, $graph_type_start_with, $graph_type_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->apiDataanalysisDataprocessorsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **title** | **string**|  | [optional] |
| **title2** | [**string[]**](../Model/string.md)|  | [optional] |
| **manager_name** | **string**|  | [optional] |
| **manager_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **series_names** | **string**|  | [optional] |
| **series_names2** | [**string[]**](../Model/string.md)|  | [optional] |
| **graph_type** | **string**|  | [optional] |
| **graph_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_collectors_collector** | **string**|  | [optional] |
| **data_collectors_collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_series_names** | **bool**|  | [optional] |
| **exists_graph_type** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_title** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| dataanalysis_dataprocessors slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_dataprocessors slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_dataprocessors slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_dataprocessors id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_dataprocessors id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_dataprocessors id_end_with | [optional] |
| **title_partial** | **string**| dataanalysis_dataprocessors title_partial | [optional] |
| **title_start_with** | **string**| dataanalysis_dataprocessors title_start_with | [optional] |
| **title_end_with** | **string**| dataanalysis_dataprocessors title_end_with | [optional] |
| **manager_name_partial** | **string**| dataanalysis_dataprocessors managerName_partial | [optional] |
| **manager_name_start_with** | **string**| dataanalysis_dataprocessors managerName_start_with | [optional] |
| **manager_name_end_with** | **string**| dataanalysis_dataprocessors managerName_end_with | [optional] |
| **series_names_partial** | **string**| dataanalysis_dataprocessors seriesNames_partial | [optional] |
| **series_names_start_with** | **string**| dataanalysis_dataprocessors seriesNames_start_with | [optional] |
| **series_names_end_with** | **string**| dataanalysis_dataprocessors seriesNames_end_with | [optional] |
| **graph_type_partial** | **string**| dataanalysis_dataprocessors graphType_partial | [optional] |
| **graph_type_start_with** | **string**| dataanalysis_dataprocessors graphType_start_with | [optional] |
| **graph_type_end_with** | **string**| dataanalysis_dataprocessors graphType_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDataanalysisDataprocessorsGetCollection200Response**](../Model/ApiDataanalysisDataprocessorsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorsIdDelete()`

```php
apiDataanalysisDataprocessorsIdDelete($id)
```

Removes the dataanalysis_dataprocessors resource.

Removes the dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $apiInstance->apiDataanalysisDataprocessorsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->apiDataanalysisDataprocessorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

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

## `apiDataanalysisDataprocessorsIdGet()`

```php
apiDataanalysisDataprocessorsIdGet($id): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->apiDataanalysisDataprocessorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->apiDataanalysisDataprocessorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorsIdPut()`

```php
apiDataanalysisDataprocessorsIdPut($id, $dataanalysis_dataprocessors_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Replaces the dataanalysis_dataprocessors resource.

Replaces the dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier
$dataanalysis_dataprocessors_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldAddPost | The updated dataanalysis_dataprocessors resource

try {
    $result = $apiInstance->apiDataanalysisDataprocessorsIdPut($id, $dataanalysis_dataprocessors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->apiDataanalysisDataprocessorsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |
| **dataanalysis_dataprocessors_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldAddPost**](../Model/DataanalysisDataprocessorsJsonldAddPost.md)| The updated dataanalysis_dataprocessors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorsPost()`

```php
apiDataanalysisDataprocessorsPost($dataanalysis_dataprocessors_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_dataprocessors resource.

Creates a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataanalysis_dataprocessors_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldAddPost | The new dataanalysis_dataprocessors resource

try {
    $result = $apiInstance->apiDataanalysisDataprocessorsPost($dataanalysis_dataprocessors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->apiDataanalysisDataprocessorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dataanalysis_dataprocessors_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldAddPost**](../Model/DataanalysisDataprocessorsJsonldAddPost.md)| The new dataanalysis_dataprocessors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorApiFileUpload()`

```php
dataanalysisDataProcessorApiFileUpload($id, $dataanalysis_dataprocessors_jsonld): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_dataprocessors resource.

Creates a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier
$dataanalysis_dataprocessors_jsonld = new \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonld(); // \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonld | The new dataanalysis_dataprocessors resource

try {
    $result = $apiInstance->dataanalysisDataProcessorApiFileUpload($id, $dataanalysis_dataprocessors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |
| **dataanalysis_dataprocessors_jsonld** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonld**](../Model/DataanalysisDataprocessorsJsonld.md)| The new dataanalysis_dataprocessors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorApiProcess()`

```php
dataanalysisDataProcessorApiProcess($id): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorApiProcess($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorApiProcess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorApiProcessMetadata()`

```php
dataanalysisDataProcessorApiProcessMetadata($id): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorApiProcessMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorApiProcessMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorDropDown()`

```php
dataanalysisDataProcessorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $manager_name, $manager_name2, $series_names, $series_names2, $graph_type, $graph_type2, $data_collectors_collector, $data_collectors_collector2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_series_names, $exists_graph_type, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\DataanalysisDataProcessorDropDown200Response
```

Retrieves the collection of dataanalysis_dataprocessors resources.

Retrieves the collection of dataanalysis_dataprocessors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
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
$title = 'title_example'; // string | 
$title2 = array('title_example'); // string[] | 
$manager_name = 'manager_name_example'; // string | 
$manager_name2 = array('manager_name_example'); // string[] | 
$series_names = 'series_names_example'; // string | 
$series_names2 = array('series_names_example'); // string[] | 
$graph_type = 'graph_type_example'; // string | 
$graph_type2 = array('graph_type_example'); // string[] | 
$data_collectors_collector = 'data_collectors_collector_example'; // string | 
$data_collectors_collector2 = array('data_collectors_collector_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_series_names = True; // bool | 
$exists_graph_type = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_title = 'order_title_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->dataanalysisDataProcessorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $manager_name, $manager_name2, $series_names, $series_names2, $graph_type, $graph_type2, $data_collectors_collector, $data_collectors_collector2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_series_names, $exists_graph_type, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorDropDown: ', $e->getMessage(), PHP_EOL;
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
| **title** | **string**|  | [optional] |
| **title2** | [**string[]**](../Model/string.md)|  | [optional] |
| **manager_name** | **string**|  | [optional] |
| **manager_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **series_names** | **string**|  | [optional] |
| **series_names2** | [**string[]**](../Model/string.md)|  | [optional] |
| **graph_type** | **string**|  | [optional] |
| **graph_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_collectors_collector** | **string**|  | [optional] |
| **data_collectors_collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_series_names** | **bool**|  | [optional] |
| **exists_graph_type** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_title** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataProcessorDropDown200Response**](../Model/DataanalysisDataProcessorDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorDuplicate()`

```php
dataanalysisDataProcessorDuplicate($id): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorFetchFiles()`

```php
dataanalysisDataProcessorFetchFiles($id): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonld
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonld**](../Model/DataanalysisDataprocessorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorGetBySlug()`

```php
dataanalysisDataProcessorGetBySlug($slug): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorGetDeleteRelations()`

```php
dataanalysisDataProcessorGetDeleteRelations($id): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorRelations
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldDataanalysisDataProcessorRelations**](../Model/DataanalysisDataprocessorsJsonldDataanalysisDataProcessorRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorMetadata()`

```php
dataanalysisDataProcessorMetadata($id): \OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldIdStandardMetadataDataanalysisDataProcessorMetadataTagTaggingListDataanalysisDataProcessorRelationsTimestampable
```

Retrieves a dataanalysis_dataprocessors resource.

Retrieves a dataanalysis_dataprocessors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorsApi->dataanalysisDataProcessorMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorsJsonldIdStandardMetadataDataanalysisDataProcessorMetadataTagTaggingListDataanalysisDataProcessorRelationsTimestampable**](../Model/DataanalysisDataprocessorsJsonldIdStandardMetadataDataanalysisDataProcessorMetadataTagTaggingListDataanalysisDataProcessorRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
