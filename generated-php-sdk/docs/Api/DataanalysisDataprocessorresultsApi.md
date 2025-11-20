# OpenAPI\Client\DataanalysisDataprocessorresultsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDataanalysisDataprocessorresultsGetCollection()**](DataanalysisDataprocessorresultsApi.md#apiDataanalysisDataprocessorresultsGetCollection) | **GET** /open-api/v3/dataanalysis_dataprocessorresults | Retrieves the collection of dataanalysis_dataprocessorresults resources. |
| [**apiDataanalysisDataprocessorresultsIdDelete()**](DataanalysisDataprocessorresultsApi.md#apiDataanalysisDataprocessorresultsIdDelete) | **DELETE** /open-api/v3/dataanalysis_dataprocessorresults/{id} | Removes the dataanalysis_dataprocessorresults resource. |
| [**apiDataanalysisDataprocessorresultsIdGet()**](DataanalysisDataprocessorresultsApi.md#apiDataanalysisDataprocessorresultsIdGet) | **GET** /open-api/v3/dataanalysis_dataprocessorresults/{id} | Retrieves a dataanalysis_dataprocessorresults resource. |
| [**apiDataanalysisDataprocessorresultsIdPut()**](DataanalysisDataprocessorresultsApi.md#apiDataanalysisDataprocessorresultsIdPut) | **PUT** /open-api/v3/dataanalysis_dataprocessorresults/{id} | Replaces the dataanalysis_dataprocessorresults resource. |
| [**apiDataanalysisDataprocessorresultsPost()**](DataanalysisDataprocessorresultsApi.md#apiDataanalysisDataprocessorresultsPost) | **POST** /open-api/v3/dataanalysis_dataprocessorresults | Creates a dataanalysis_dataprocessorresults resource. |
| [**dataanalysisDataProcessorResultApiFileUpload()**](DataanalysisDataprocessorresultsApi.md#dataanalysisDataProcessorResultApiFileUpload) | **POST** /open-api/v3/dataanalysis_dataprocessorresults/{id}/file/upload | Creates a dataanalysis_dataprocessorresults resource. |
| [**dataanalysisDataProcessorResultDropDown()**](DataanalysisDataprocessorresultsApi.md#dataanalysisDataProcessorResultDropDown) | **GET** /open-api/v3/dataanalysis_dataprocessorresults/dropdown/get | Retrieves the collection of dataanalysis_dataprocessorresults resources. |
| [**dataanalysisDataProcessorResultDuplicate()**](DataanalysisDataprocessorresultsApi.md#dataanalysisDataProcessorResultDuplicate) | **GET** /open-api/v3/dataanalysis_dataprocessorresults/duplicate/{id} | Retrieves a dataanalysis_dataprocessorresults resource. |
| [**dataanalysisDataProcessorResultFetchFiles()**](DataanalysisDataprocessorresultsApi.md#dataanalysisDataProcessorResultFetchFiles) | **GET** /open-api/v3/dataanalysis_dataprocessorresults/fetch_files/{id} | Retrieves a dataanalysis_dataprocessorresults resource. |
| [**dataanalysisDataProcessorResultGetBySlug()**](DataanalysisDataprocessorresultsApi.md#dataanalysisDataProcessorResultGetBySlug) | **GET** /open-api/v3/dataanalysis_dataprocessorresults/by_slug/{slug} | Retrieves a dataanalysis_dataprocessorresults resource. |
| [**dataanalysisDataProcessorResultGetDeleteRelations()**](DataanalysisDataprocessorresultsApi.md#dataanalysisDataProcessorResultGetDeleteRelations) | **GET** /open-api/v3/dataanalysis_dataprocessorresults/get_delete_relations/{id} | Retrieves a dataanalysis_dataprocessorresults resource. |
| [**dataanalysisDataProcessorResultMetadata()**](DataanalysisDataprocessorresultsApi.md#dataanalysisDataProcessorResultMetadata) | **GET** /open-api/v3/dataanalysis_dataprocessorresults/metadata/{id} | Retrieves a dataanalysis_dataprocessorresults resource. |


## `apiDataanalysisDataprocessorresultsGetCollection()`

```php
apiDataanalysisDataprocessorresultsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_processor, $data_processor2, $operation, $operation2, $input_name, $input_name2, $output_name, $output_name2, $search, $is_series_data, $properties, $enabled, $tag, $order_id, $order_input_name, $order_output_name, $order_operation, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $input_name_partial, $input_name_start_with, $input_name_end_with, $output_name_partial, $output_name_start_with, $output_name_end_with): \OpenAPI\Client\Model\ApiDataanalysisDataprocessorresultsGetCollection200Response
```

Retrieves the collection of dataanalysis_dataprocessorresults resources.

Retrieves the collection of dataanalysis_dataprocessorresults resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
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
$data_processor = 'data_processor_example'; // string | 
$data_processor2 = array('data_processor_example'); // string[] | 
$operation = 'operation_example'; // string | 
$operation2 = array('operation_example'); // string[] | 
$input_name = 'input_name_example'; // string | 
$input_name2 = array('input_name_example'); // string[] | 
$output_name = 'output_name_example'; // string | 
$output_name2 = array('output_name_example'); // string[] | 
$search = 'search_example'; // string | 
$is_series_data = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_input_name = 'order_input_name_example'; // string | 
$order_output_name = 'order_output_name_example'; // string | 
$order_operation = 'order_operation_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | dataanalysis_dataprocessorresults slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_dataprocessorresults slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_dataprocessorresults slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_dataprocessorresults id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_dataprocessorresults id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_dataprocessorresults id_end_with
$input_name_partial = 'input_name_partial_example'; // string | dataanalysis_dataprocessorresults inputName_partial
$input_name_start_with = 'input_name_start_with_example'; // string | dataanalysis_dataprocessorresults inputName_start_with
$input_name_end_with = 'input_name_end_with_example'; // string | dataanalysis_dataprocessorresults inputName_end_with
$output_name_partial = 'output_name_partial_example'; // string | dataanalysis_dataprocessorresults outputName_partial
$output_name_start_with = 'output_name_start_with_example'; // string | dataanalysis_dataprocessorresults outputName_start_with
$output_name_end_with = 'output_name_end_with_example'; // string | dataanalysis_dataprocessorresults outputName_end_with

try {
    $result = $apiInstance->apiDataanalysisDataprocessorresultsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_processor, $data_processor2, $operation, $operation2, $input_name, $input_name2, $output_name, $output_name2, $search, $is_series_data, $properties, $enabled, $tag, $order_id, $order_input_name, $order_output_name, $order_operation, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $input_name_partial, $input_name_start_with, $input_name_end_with, $output_name_partial, $output_name_start_with, $output_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->apiDataanalysisDataprocessorresultsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **data_processor** | **string**|  | [optional] |
| **data_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **operation** | **string**|  | [optional] |
| **operation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **input_name** | **string**|  | [optional] |
| **input_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **output_name** | **string**|  | [optional] |
| **output_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **is_series_data** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_input_name** | **string**|  | [optional] |
| **order_output_name** | **string**|  | [optional] |
| **order_operation** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| dataanalysis_dataprocessorresults slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_dataprocessorresults slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_dataprocessorresults slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_dataprocessorresults id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_dataprocessorresults id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_dataprocessorresults id_end_with | [optional] |
| **input_name_partial** | **string**| dataanalysis_dataprocessorresults inputName_partial | [optional] |
| **input_name_start_with** | **string**| dataanalysis_dataprocessorresults inputName_start_with | [optional] |
| **input_name_end_with** | **string**| dataanalysis_dataprocessorresults inputName_end_with | [optional] |
| **output_name_partial** | **string**| dataanalysis_dataprocessorresults outputName_partial | [optional] |
| **output_name_start_with** | **string**| dataanalysis_dataprocessorresults outputName_start_with | [optional] |
| **output_name_end_with** | **string**| dataanalysis_dataprocessorresults outputName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDataanalysisDataprocessorresultsGetCollection200Response**](../Model/ApiDataanalysisDataprocessorresultsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorresultsIdDelete()`

```php
apiDataanalysisDataprocessorresultsIdDelete($id)
```

Removes the dataanalysis_dataprocessorresults resource.

Removes the dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier

try {
    $apiInstance->apiDataanalysisDataprocessorresultsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->apiDataanalysisDataprocessorresultsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |

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

## `apiDataanalysisDataprocessorresultsIdGet()`

```php
apiDataanalysisDataprocessorresultsIdGet($id): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldStandardShowDataanalysisDataProcessorResultShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessorresults resource.

Retrieves a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier

try {
    $result = $apiInstance->apiDataanalysisDataprocessorresultsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->apiDataanalysisDataprocessorresultsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldStandardShowDataanalysisDataProcessorResultShowIdTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorresultsJsonldStandardShowDataanalysisDataProcessorResultShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorresultsIdPut()`

```php
apiDataanalysisDataprocessorresultsIdPut($id, $dataanalysis_dataprocessorresults_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldStandardShowDataanalysisDataProcessorResultShowIdTimestampableTagTaggingList
```

Replaces the dataanalysis_dataprocessorresults resource.

Replaces the dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier
$dataanalysis_dataprocessorresults_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldAddPost | The updated dataanalysis_dataprocessorresults resource

try {
    $result = $apiInstance->apiDataanalysisDataprocessorresultsIdPut($id, $dataanalysis_dataprocessorresults_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->apiDataanalysisDataprocessorresultsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |
| **dataanalysis_dataprocessorresults_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldAddPost**](../Model/DataanalysisDataprocessorresultsJsonldAddPost.md)| The updated dataanalysis_dataprocessorresults resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldStandardShowDataanalysisDataProcessorResultShowIdTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorresultsJsonldStandardShowDataanalysisDataProcessorResultShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorresultsPost()`

```php
apiDataanalysisDataprocessorresultsPost($dataanalysis_dataprocessorresults_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a dataanalysis_dataprocessorresults resource.

Creates a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataanalysis_dataprocessorresults_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldAddPost | The new dataanalysis_dataprocessorresults resource

try {
    $result = $apiInstance->apiDataanalysisDataprocessorresultsPost($dataanalysis_dataprocessorresults_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->apiDataanalysisDataprocessorresultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dataanalysis_dataprocessorresults_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldAddPost**](../Model/DataanalysisDataprocessorresultsJsonldAddPost.md)| The new dataanalysis_dataprocessorresults resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/DataanalysisDataprocessorresultsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorResultApiFileUpload()`

```php
dataanalysisDataProcessorResultApiFileUpload($id, $dataanalysis_dataprocessorresults_jsonld): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_dataprocessorresults resource.

Creates a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier
$dataanalysis_dataprocessorresults_jsonld = new \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonld(); // \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonld | The new dataanalysis_dataprocessorresults resource

try {
    $result = $apiInstance->dataanalysisDataProcessorResultApiFileUpload($id, $dataanalysis_dataprocessorresults_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->dataanalysisDataProcessorResultApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |
| **dataanalysis_dataprocessorresults_jsonld** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonld**](../Model/DataanalysisDataprocessorresultsJsonld.md)| The new dataanalysis_dataprocessorresults resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorResultDropDown()`

```php
dataanalysisDataProcessorResultDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_processor, $data_processor2, $operation, $operation2, $input_name, $input_name2, $output_name, $output_name2, $search, $is_series_data, $properties, $enabled, $tag, $order_id, $order_input_name, $order_output_name, $order_operation, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $input_name_partial, $input_name_start_with, $input_name_end_with, $output_name_partial, $output_name_start_with, $output_name_end_with): \OpenAPI\Client\Model\DataanalysisDataProcessorResultDropDown200Response
```

Retrieves the collection of dataanalysis_dataprocessorresults resources.

Retrieves the collection of dataanalysis_dataprocessorresults resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
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
$data_processor = 'data_processor_example'; // string | 
$data_processor2 = array('data_processor_example'); // string[] | 
$operation = 'operation_example'; // string | 
$operation2 = array('operation_example'); // string[] | 
$input_name = 'input_name_example'; // string | 
$input_name2 = array('input_name_example'); // string[] | 
$output_name = 'output_name_example'; // string | 
$output_name2 = array('output_name_example'); // string[] | 
$search = 'search_example'; // string | 
$is_series_data = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_input_name = 'order_input_name_example'; // string | 
$order_output_name = 'order_output_name_example'; // string | 
$order_operation = 'order_operation_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | dataanalysis_dataprocessorresults slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_dataprocessorresults slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_dataprocessorresults slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_dataprocessorresults id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_dataprocessorresults id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_dataprocessorresults id_end_with
$input_name_partial = 'input_name_partial_example'; // string | dataanalysis_dataprocessorresults inputName_partial
$input_name_start_with = 'input_name_start_with_example'; // string | dataanalysis_dataprocessorresults inputName_start_with
$input_name_end_with = 'input_name_end_with_example'; // string | dataanalysis_dataprocessorresults inputName_end_with
$output_name_partial = 'output_name_partial_example'; // string | dataanalysis_dataprocessorresults outputName_partial
$output_name_start_with = 'output_name_start_with_example'; // string | dataanalysis_dataprocessorresults outputName_start_with
$output_name_end_with = 'output_name_end_with_example'; // string | dataanalysis_dataprocessorresults outputName_end_with

try {
    $result = $apiInstance->dataanalysisDataProcessorResultDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_processor, $data_processor2, $operation, $operation2, $input_name, $input_name2, $output_name, $output_name2, $search, $is_series_data, $properties, $enabled, $tag, $order_id, $order_input_name, $order_output_name, $order_operation, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $input_name_partial, $input_name_start_with, $input_name_end_with, $output_name_partial, $output_name_start_with, $output_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->dataanalysisDataProcessorResultDropDown: ', $e->getMessage(), PHP_EOL;
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
| **data_processor** | **string**|  | [optional] |
| **data_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **operation** | **string**|  | [optional] |
| **operation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **input_name** | **string**|  | [optional] |
| **input_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **output_name** | **string**|  | [optional] |
| **output_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **is_series_data** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_input_name** | **string**|  | [optional] |
| **order_output_name** | **string**|  | [optional] |
| **order_operation** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| dataanalysis_dataprocessorresults slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_dataprocessorresults slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_dataprocessorresults slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_dataprocessorresults id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_dataprocessorresults id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_dataprocessorresults id_end_with | [optional] |
| **input_name_partial** | **string**| dataanalysis_dataprocessorresults inputName_partial | [optional] |
| **input_name_start_with** | **string**| dataanalysis_dataprocessorresults inputName_start_with | [optional] |
| **input_name_end_with** | **string**| dataanalysis_dataprocessorresults inputName_end_with | [optional] |
| **output_name_partial** | **string**| dataanalysis_dataprocessorresults outputName_partial | [optional] |
| **output_name_start_with** | **string**| dataanalysis_dataprocessorresults outputName_start_with | [optional] |
| **output_name_end_with** | **string**| dataanalysis_dataprocessorresults outputName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataProcessorResultDropDown200Response**](../Model/DataanalysisDataProcessorResultDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorResultDuplicate()`

```php
dataanalysisDataProcessorResultDuplicate($id): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessorresults resource.

Retrieves a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorResultDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->dataanalysisDataProcessorResultDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorResultFetchFiles()`

```php
dataanalysisDataProcessorResultFetchFiles($id): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonld
```

Retrieves a dataanalysis_dataprocessorresults resource.

Retrieves a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorResultFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->dataanalysisDataProcessorResultFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonld**](../Model/DataanalysisDataprocessorresultsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorResultGetBySlug()`

```php
dataanalysisDataProcessorResultGetBySlug($slug): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessorresults resource.

Retrieves a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dataanalysis_dataprocessorresults identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorResultGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->dataanalysisDataProcessorResultGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dataanalysis_dataprocessorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorresultsJsonldDataProcessorResultShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorResultGetDeleteRelations()`

```php
dataanalysisDataProcessorResultGetDeleteRelations($id): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultRelations
```

Retrieves a dataanalysis_dataprocessorresults resource.

Retrieves a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorResultGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->dataanalysisDataProcessorResultGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldDataProcessorResultRelations**](../Model/DataanalysisDataprocessorresultsJsonldDataProcessorResultRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorResultMetadata()`

```php
dataanalysisDataProcessorResultMetadata($id): \OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldIdStandardMetadataDataanalysisDataProcessorResultMetadataTagTaggingListDataanalysisDataProcessorResultRelationsTimestampable
```

Retrieves a dataanalysis_dataprocessorresults resource.

Retrieves a dataanalysis_dataprocessorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorresults identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorResultMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorresultsApi->dataanalysisDataProcessorResultMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorresultsJsonldIdStandardMetadataDataanalysisDataProcessorResultMetadataTagTaggingListDataanalysisDataProcessorResultRelationsTimestampable**](../Model/DataanalysisDataprocessorresultsJsonldIdStandardMetadataDataanalysisDataProcessorResultMetadataTagTaggingListDataanalysisDataProcessorResultRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
