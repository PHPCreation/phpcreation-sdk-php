# OpenAPI\Client\DataanalysisDatacollectorparametersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDataanalysisDatacollectorparametersGetCollection()**](DataanalysisDatacollectorparametersApi.md#apiDataanalysisDatacollectorparametersGetCollection) | **GET** /open-api/v3/dataanalysis_datacollectorparameters | Retrieves the collection of dataanalysis_datacollectorparameters resources. |
| [**apiDataanalysisDatacollectorparametersIdDelete()**](DataanalysisDatacollectorparametersApi.md#apiDataanalysisDatacollectorparametersIdDelete) | **DELETE** /open-api/v3/dataanalysis_datacollectorparameters/{id} | Removes the dataanalysis_datacollectorparameters resource. |
| [**apiDataanalysisDatacollectorparametersIdGet()**](DataanalysisDatacollectorparametersApi.md#apiDataanalysisDatacollectorparametersIdGet) | **GET** /open-api/v3/dataanalysis_datacollectorparameters/{id} | Retrieves a dataanalysis_datacollectorparameters resource. |
| [**apiDataanalysisDatacollectorparametersIdPut()**](DataanalysisDatacollectorparametersApi.md#apiDataanalysisDatacollectorparametersIdPut) | **PUT** /open-api/v3/dataanalysis_datacollectorparameters/{id} | Replaces the dataanalysis_datacollectorparameters resource. |
| [**apiDataanalysisDatacollectorparametersPost()**](DataanalysisDatacollectorparametersApi.md#apiDataanalysisDatacollectorparametersPost) | **POST** /open-api/v3/dataanalysis_datacollectorparameters | Creates a dataanalysis_datacollectorparameters resource. |
| [**dataanalysisDataCollectorParameterApiFileUpload()**](DataanalysisDatacollectorparametersApi.md#dataanalysisDataCollectorParameterApiFileUpload) | **POST** /open-api/v3/dataanalysis_datacollectorparameters/{id}/file/upload | Creates a dataanalysis_datacollectorparameters resource. |
| [**dataanalysisDataCollectorParameterDropDown()**](DataanalysisDatacollectorparametersApi.md#dataanalysisDataCollectorParameterDropDown) | **GET** /open-api/v3/dataanalysis_datacollectorparameters/dropdown/get | Retrieves the collection of dataanalysis_datacollectorparameters resources. |
| [**dataanalysisDataCollectorParameterDuplicate()**](DataanalysisDatacollectorparametersApi.md#dataanalysisDataCollectorParameterDuplicate) | **GET** /open-api/v3/dataanalysis_datacollectorparameters/duplicate/{id} | Retrieves a dataanalysis_datacollectorparameters resource. |
| [**dataanalysisDataCollectorParameterFetchFiles()**](DataanalysisDatacollectorparametersApi.md#dataanalysisDataCollectorParameterFetchFiles) | **GET** /open-api/v3/dataanalysis_datacollectorparameters/fetch_files/{id} | Retrieves a dataanalysis_datacollectorparameters resource. |
| [**dataanalysisDataCollectorParameterGetBySlug()**](DataanalysisDatacollectorparametersApi.md#dataanalysisDataCollectorParameterGetBySlug) | **GET** /open-api/v3/dataanalysis_datacollectorparameters/by_slug/{slug} | Retrieves a dataanalysis_datacollectorparameters resource. |
| [**dataanalysisDataCollectorParameterGetDeleteRelations()**](DataanalysisDatacollectorparametersApi.md#dataanalysisDataCollectorParameterGetDeleteRelations) | **GET** /open-api/v3/dataanalysis_datacollectorparameters/get_delete_relations/{id} | Retrieves a dataanalysis_datacollectorparameters resource. |
| [**dataanalysisDataCollectorParameterMetadata()**](DataanalysisDatacollectorparametersApi.md#dataanalysisDataCollectorParameterMetadata) | **GET** /open-api/v3/dataanalysis_datacollectorparameters/metadata/{id} | Retrieves a dataanalysis_datacollectorparameters resource. |


## `apiDataanalysisDatacollectorparametersGetCollection()`

```php
apiDataanalysisDatacollectorparametersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $name, $name2, $default_value, $default_value2, $operator, $operator2, $data_collector, $data_collector2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_operator, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $default_value_partial, $default_value_start_with, $default_value_end_with): \OpenAPI\Client\Model\ApiDataanalysisDatacollectorparametersGetCollection200Response
```

Retrieves the collection of dataanalysis_datacollectorparameters resources.

Retrieves the collection of dataanalysis_datacollectorparameters resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$default_value = 'default_value_example'; // string | 
$default_value2 = array('default_value_example'); // string[] | 
$operator = 'operator_example'; // string | 
$operator2 = array('operator_example'); // string[] | 
$data_collector = 'data_collector_example'; // string | 
$data_collector2 = array('data_collector_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_operator = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dataanalysis_datacollectorparameters slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_datacollectorparameters slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_datacollectorparameters slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_datacollectorparameters id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_datacollectorparameters id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_datacollectorparameters id_end_with
$name_partial = 'name_partial_example'; // string | dataanalysis_datacollectorparameters name_partial
$name_start_with = 'name_start_with_example'; // string | dataanalysis_datacollectorparameters name_start_with
$name_end_with = 'name_end_with_example'; // string | dataanalysis_datacollectorparameters name_end_with
$default_value_partial = 'default_value_partial_example'; // string | dataanalysis_datacollectorparameters defaultValue_partial
$default_value_start_with = 'default_value_start_with_example'; // string | dataanalysis_datacollectorparameters defaultValue_start_with
$default_value_end_with = 'default_value_end_with_example'; // string | dataanalysis_datacollectorparameters defaultValue_end_with

try {
    $result = $apiInstance->apiDataanalysisDatacollectorparametersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $name, $name2, $default_value, $default_value2, $operator, $operator2, $data_collector, $data_collector2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_operator, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $default_value_partial, $default_value_start_with, $default_value_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->apiDataanalysisDatacollectorparametersGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **default_value** | **string**|  | [optional] |
| **default_value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **operator** | **string**|  | [optional] |
| **operator2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_collector** | **string**|  | [optional] |
| **data_collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_operator** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dataanalysis_datacollectorparameters slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_datacollectorparameters slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_datacollectorparameters slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_datacollectorparameters id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_datacollectorparameters id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_datacollectorparameters id_end_with | [optional] |
| **name_partial** | **string**| dataanalysis_datacollectorparameters name_partial | [optional] |
| **name_start_with** | **string**| dataanalysis_datacollectorparameters name_start_with | [optional] |
| **name_end_with** | **string**| dataanalysis_datacollectorparameters name_end_with | [optional] |
| **default_value_partial** | **string**| dataanalysis_datacollectorparameters defaultValue_partial | [optional] |
| **default_value_start_with** | **string**| dataanalysis_datacollectorparameters defaultValue_start_with | [optional] |
| **default_value_end_with** | **string**| dataanalysis_datacollectorparameters defaultValue_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDataanalysisDatacollectorparametersGetCollection200Response**](../Model/ApiDataanalysisDatacollectorparametersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorparametersIdDelete()`

```php
apiDataanalysisDatacollectorparametersIdDelete($id)
```

Removes the dataanalysis_datacollectorparameters resource.

Removes the dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier

try {
    $apiInstance->apiDataanalysisDatacollectorparametersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->apiDataanalysisDatacollectorparametersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |

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

## `apiDataanalysisDatacollectorparametersIdGet()`

```php
apiDataanalysisDatacollectorparametersIdGet($id): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldStandardShowDataanalysisDataCollectorParameterShowIdTimestampableCustomPropertyTagTaggingList
```

Retrieves a dataanalysis_datacollectorparameters resource.

Retrieves a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier

try {
    $result = $apiInstance->apiDataanalysisDatacollectorparametersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->apiDataanalysisDatacollectorparametersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldStandardShowDataanalysisDataCollectorParameterShowIdTimestampableCustomPropertyTagTaggingList**](../Model/DataanalysisDatacollectorparametersJsonldStandardShowDataanalysisDataCollectorParameterShowIdTimestampableCustomPropertyTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorparametersIdPut()`

```php
apiDataanalysisDatacollectorparametersIdPut($id, $dataanalysis_datacollectorparameters_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldStandardShowDataanalysisDataCollectorParameterShowIdTimestampableCustomPropertyTagTaggingList
```

Replaces the dataanalysis_datacollectorparameters resource.

Replaces the dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier
$dataanalysis_datacollectorparameters_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldAddPost | The updated dataanalysis_datacollectorparameters resource

try {
    $result = $apiInstance->apiDataanalysisDatacollectorparametersIdPut($id, $dataanalysis_datacollectorparameters_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->apiDataanalysisDatacollectorparametersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |
| **dataanalysis_datacollectorparameters_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldAddPost**](../Model/DataanalysisDatacollectorparametersJsonldAddPost.md)| The updated dataanalysis_datacollectorparameters resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldStandardShowDataanalysisDataCollectorParameterShowIdTimestampableCustomPropertyTagTaggingList**](../Model/DataanalysisDatacollectorparametersJsonldStandardShowDataanalysisDataCollectorParameterShowIdTimestampableCustomPropertyTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorparametersPost()`

```php
apiDataanalysisDatacollectorparametersPost($dataanalysis_datacollectorparameters_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a dataanalysis_datacollectorparameters resource.

Creates a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataanalysis_datacollectorparameters_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldAddPost | The new dataanalysis_datacollectorparameters resource

try {
    $result = $apiInstance->apiDataanalysisDatacollectorparametersPost($dataanalysis_datacollectorparameters_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->apiDataanalysisDatacollectorparametersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dataanalysis_datacollectorparameters_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldAddPost**](../Model/DataanalysisDatacollectorparametersJsonldAddPost.md)| The new dataanalysis_datacollectorparameters resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/DataanalysisDatacollectorparametersJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorParameterApiFileUpload()`

```php
dataanalysisDataCollectorParameterApiFileUpload($id, $dataanalysis_datacollectorparameters_jsonld): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_datacollectorparameters resource.

Creates a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier
$dataanalysis_datacollectorparameters_jsonld = new \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonld(); // \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonld | The new dataanalysis_datacollectorparameters resource

try {
    $result = $apiInstance->dataanalysisDataCollectorParameterApiFileUpload($id, $dataanalysis_datacollectorparameters_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->dataanalysisDataCollectorParameterApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |
| **dataanalysis_datacollectorparameters_jsonld** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonld**](../Model/DataanalysisDatacollectorparametersJsonld.md)| The new dataanalysis_datacollectorparameters resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorParameterDropDown()`

```php
dataanalysisDataCollectorParameterDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $name, $name2, $default_value, $default_value2, $operator, $operator2, $data_collector, $data_collector2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_operator, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $default_value_partial, $default_value_start_with, $default_value_end_with): \OpenAPI\Client\Model\DataanalysisDataCollectorParameterDropDown200Response
```

Retrieves the collection of dataanalysis_datacollectorparameters resources.

Retrieves the collection of dataanalysis_datacollectorparameters resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$default_value = 'default_value_example'; // string | 
$default_value2 = array('default_value_example'); // string[] | 
$operator = 'operator_example'; // string | 
$operator2 = array('operator_example'); // string[] | 
$data_collector = 'data_collector_example'; // string | 
$data_collector2 = array('data_collector_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_operator = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dataanalysis_datacollectorparameters slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_datacollectorparameters slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_datacollectorparameters slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_datacollectorparameters id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_datacollectorparameters id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_datacollectorparameters id_end_with
$name_partial = 'name_partial_example'; // string | dataanalysis_datacollectorparameters name_partial
$name_start_with = 'name_start_with_example'; // string | dataanalysis_datacollectorparameters name_start_with
$name_end_with = 'name_end_with_example'; // string | dataanalysis_datacollectorparameters name_end_with
$default_value_partial = 'default_value_partial_example'; // string | dataanalysis_datacollectorparameters defaultValue_partial
$default_value_start_with = 'default_value_start_with_example'; // string | dataanalysis_datacollectorparameters defaultValue_start_with
$default_value_end_with = 'default_value_end_with_example'; // string | dataanalysis_datacollectorparameters defaultValue_end_with

try {
    $result = $apiInstance->dataanalysisDataCollectorParameterDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $name, $name2, $default_value, $default_value2, $operator, $operator2, $data_collector, $data_collector2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_operator, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $default_value_partial, $default_value_start_with, $default_value_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->dataanalysisDataCollectorParameterDropDown: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **default_value** | **string**|  | [optional] |
| **default_value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **operator** | **string**|  | [optional] |
| **operator2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_collector** | **string**|  | [optional] |
| **data_collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_operator** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dataanalysis_datacollectorparameters slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_datacollectorparameters slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_datacollectorparameters slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_datacollectorparameters id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_datacollectorparameters id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_datacollectorparameters id_end_with | [optional] |
| **name_partial** | **string**| dataanalysis_datacollectorparameters name_partial | [optional] |
| **name_start_with** | **string**| dataanalysis_datacollectorparameters name_start_with | [optional] |
| **name_end_with** | **string**| dataanalysis_datacollectorparameters name_end_with | [optional] |
| **default_value_partial** | **string**| dataanalysis_datacollectorparameters defaultValue_partial | [optional] |
| **default_value_start_with** | **string**| dataanalysis_datacollectorparameters defaultValue_start_with | [optional] |
| **default_value_end_with** | **string**| dataanalysis_datacollectorparameters defaultValue_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataCollectorParameterDropDown200Response**](../Model/DataanalysisDataCollectorParameterDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorParameterDuplicate()`

```php
dataanalysisDataCollectorParameterDuplicate($id): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectorparameters resource.

Retrieves a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorParameterDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->dataanalysisDataCollectorParameterDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorParameterFetchFiles()`

```php
dataanalysisDataCollectorParameterFetchFiles($id): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonld
```

Retrieves a dataanalysis_datacollectorparameters resource.

Retrieves a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorParameterFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->dataanalysisDataCollectorParameterFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonld**](../Model/DataanalysisDatacollectorparametersJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorParameterGetBySlug()`

```php
dataanalysisDataCollectorParameterGetBySlug($slug): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectorparameters resource.

Retrieves a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dataanalysis_datacollectorparameters identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorParameterGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->dataanalysisDataCollectorParameterGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dataanalysis_datacollectorparameters identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorparametersJsonldDataCollectorParameterShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorParameterGetDeleteRelations()`

```php
dataanalysisDataCollectorParameterGetDeleteRelations($id): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterRelations
```

Retrieves a dataanalysis_datacollectorparameters resource.

Retrieves a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorParameterGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->dataanalysisDataCollectorParameterGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldDataCollectorParameterRelations**](../Model/DataanalysisDatacollectorparametersJsonldDataCollectorParameterRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorParameterMetadata()`

```php
dataanalysisDataCollectorParameterMetadata($id): \OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldIdStandardMetadataDataanalysisDataCollectorParameterMetadataTagTaggingListDataanalysisDataCollectorParameterRelationsTimestampable
```

Retrieves a dataanalysis_datacollectorparameters resource.

Retrieves a dataanalysis_datacollectorparameters resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorparametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorparameters identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorParameterMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorparametersApi->dataanalysisDataCollectorParameterMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorparameters identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorparametersJsonldIdStandardMetadataDataanalysisDataCollectorParameterMetadataTagTaggingListDataanalysisDataCollectorParameterRelationsTimestampable**](../Model/DataanalysisDatacollectorparametersJsonldIdStandardMetadataDataanalysisDataCollectorParameterMetadataTagTaggingListDataanalysisDataCollectorParameterRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
