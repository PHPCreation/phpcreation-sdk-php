# OpenAPI\Client\DataanalysisDatacollectorresultsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDataanalysisDatacollectorresultsGetCollection()**](DataanalysisDatacollectorresultsApi.md#apiDataanalysisDatacollectorresultsGetCollection) | **GET** /open-api/v3/dataanalysis_datacollectorresults | Retrieves the collection of dataanalysis_datacollectorresults resources. |
| [**apiDataanalysisDatacollectorresultsIdDelete()**](DataanalysisDatacollectorresultsApi.md#apiDataanalysisDatacollectorresultsIdDelete) | **DELETE** /open-api/v3/dataanalysis_datacollectorresults/{id} | Removes the dataanalysis_datacollectorresults resource. |
| [**apiDataanalysisDatacollectorresultsIdGet()**](DataanalysisDatacollectorresultsApi.md#apiDataanalysisDatacollectorresultsIdGet) | **GET** /open-api/v3/dataanalysis_datacollectorresults/{id} | Retrieves a dataanalysis_datacollectorresults resource. |
| [**apiDataanalysisDatacollectorresultsIdPut()**](DataanalysisDatacollectorresultsApi.md#apiDataanalysisDatacollectorresultsIdPut) | **PUT** /open-api/v3/dataanalysis_datacollectorresults/{id} | Replaces the dataanalysis_datacollectorresults resource. |
| [**apiDataanalysisDatacollectorresultsPost()**](DataanalysisDatacollectorresultsApi.md#apiDataanalysisDatacollectorresultsPost) | **POST** /open-api/v3/dataanalysis_datacollectorresults | Creates a dataanalysis_datacollectorresults resource. |
| [**dataanalysisDataCollectorResultApiFileUpload()**](DataanalysisDatacollectorresultsApi.md#dataanalysisDataCollectorResultApiFileUpload) | **POST** /open-api/v3/dataanalysis_datacollectorresults/{id}/file/upload | Creates a dataanalysis_datacollectorresults resource. |
| [**dataanalysisDataCollectorResultDropDown()**](DataanalysisDatacollectorresultsApi.md#dataanalysisDataCollectorResultDropDown) | **GET** /open-api/v3/dataanalysis_datacollectorresults/dropdown/get | Retrieves the collection of dataanalysis_datacollectorresults resources. |
| [**dataanalysisDataCollectorResultDuplicate()**](DataanalysisDatacollectorresultsApi.md#dataanalysisDataCollectorResultDuplicate) | **GET** /open-api/v3/dataanalysis_datacollectorresults/duplicate/{id} | Retrieves a dataanalysis_datacollectorresults resource. |
| [**dataanalysisDataCollectorResultFetchFiles()**](DataanalysisDatacollectorresultsApi.md#dataanalysisDataCollectorResultFetchFiles) | **GET** /open-api/v3/dataanalysis_datacollectorresults/fetch_files/{id} | Retrieves a dataanalysis_datacollectorresults resource. |
| [**dataanalysisDataCollectorResultGetBySlug()**](DataanalysisDatacollectorresultsApi.md#dataanalysisDataCollectorResultGetBySlug) | **GET** /open-api/v3/dataanalysis_datacollectorresults/by_slug/{slug} | Retrieves a dataanalysis_datacollectorresults resource. |
| [**dataanalysisDataCollectorResultGetDeleteRelations()**](DataanalysisDatacollectorresultsApi.md#dataanalysisDataCollectorResultGetDeleteRelations) | **GET** /open-api/v3/dataanalysis_datacollectorresults/get_delete_relations/{id} | Retrieves a dataanalysis_datacollectorresults resource. |
| [**dataanalysisDataCollectorResultMetadata()**](DataanalysisDatacollectorresultsApi.md#dataanalysisDataCollectorResultMetadata) | **GET** /open-api/v3/dataanalysis_datacollectorresults/metadata/{id} | Retrieves a dataanalysis_datacollectorresults resource. |


## `apiDataanalysisDatacollectorresultsGetCollection()`

```php
apiDataanalysisDatacollectorresultsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $name, $name2, $slug, $slug2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with): \OpenAPI\Client\Model\ApiDataanalysisDatacollectorresultsGetCollection200Response
```

Retrieves the collection of dataanalysis_datacollectorresults resources.

Retrieves the collection of dataanalysis_datacollectorresults resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dataanalysis_datacollectorresults slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_datacollectorresults slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_datacollectorresults slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_datacollectorresults id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_datacollectorresults id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_datacollectorresults id_end_with
$name_partial = 'name_partial_example'; // string | dataanalysis_datacollectorresults name_partial
$name_start_with = 'name_start_with_example'; // string | dataanalysis_datacollectorresults name_start_with
$name_end_with = 'name_end_with_example'; // string | dataanalysis_datacollectorresults name_end_with

try {
    $result = $apiInstance->apiDataanalysisDatacollectorresultsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $name, $name2, $slug, $slug2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->apiDataanalysisDatacollectorresultsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dataanalysis_datacollectorresults slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_datacollectorresults slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_datacollectorresults slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_datacollectorresults id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_datacollectorresults id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_datacollectorresults id_end_with | [optional] |
| **name_partial** | **string**| dataanalysis_datacollectorresults name_partial | [optional] |
| **name_start_with** | **string**| dataanalysis_datacollectorresults name_start_with | [optional] |
| **name_end_with** | **string**| dataanalysis_datacollectorresults name_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDataanalysisDatacollectorresultsGetCollection200Response**](../Model/ApiDataanalysisDatacollectorresultsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorresultsIdDelete()`

```php
apiDataanalysisDatacollectorresultsIdDelete($id)
```

Removes the dataanalysis_datacollectorresults resource.

Removes the dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier

try {
    $apiInstance->apiDataanalysisDatacollectorresultsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->apiDataanalysisDatacollectorresultsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |

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

## `apiDataanalysisDatacollectorresultsIdGet()`

```php
apiDataanalysisDatacollectorresultsIdGet($id): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectorresults resource.

Retrieves a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier

try {
    $result = $apiInstance->apiDataanalysisDatacollectorresultsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->apiDataanalysisDatacollectorresultsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorresultsIdPut()`

```php
apiDataanalysisDatacollectorresultsIdPut($id, $dataanalysis_datacollectorresults_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList
```

Replaces the dataanalysis_datacollectorresults resource.

Replaces the dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier
$dataanalysis_datacollectorresults_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldAddPost | The updated dataanalysis_datacollectorresults resource

try {
    $result = $apiInstance->apiDataanalysisDatacollectorresultsIdPut($id, $dataanalysis_datacollectorresults_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->apiDataanalysisDatacollectorresultsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |
| **dataanalysis_datacollectorresults_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldAddPost**](../Model/DataanalysisDatacollectorresultsJsonldAddPost.md)| The updated dataanalysis_datacollectorresults resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorresultsPost()`

```php
apiDataanalysisDatacollectorresultsPost($dataanalysis_datacollectorresults_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a dataanalysis_datacollectorresults resource.

Creates a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataanalysis_datacollectorresults_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldAddPost | The new dataanalysis_datacollectorresults resource

try {
    $result = $apiInstance->apiDataanalysisDatacollectorresultsPost($dataanalysis_datacollectorresults_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->apiDataanalysisDatacollectorresultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dataanalysis_datacollectorresults_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldAddPost**](../Model/DataanalysisDatacollectorresultsJsonldAddPost.md)| The new dataanalysis_datacollectorresults resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/DataanalysisDatacollectorresultsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorResultApiFileUpload()`

```php
dataanalysisDataCollectorResultApiFileUpload($id, $dataanalysis_datacollectorresults_jsonld): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultShowIdTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_datacollectorresults resource.

Creates a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier
$dataanalysis_datacollectorresults_jsonld = new \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonld(); // \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonld | The new dataanalysis_datacollectorresults resource

try {
    $result = $apiInstance->dataanalysisDataCollectorResultApiFileUpload($id, $dataanalysis_datacollectorresults_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->dataanalysisDataCollectorResultApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |
| **dataanalysis_datacollectorresults_jsonld** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonld**](../Model/DataanalysisDatacollectorresultsJsonld.md)| The new dataanalysis_datacollectorresults resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDatacollectorresultsJsonldDataCollectorResultShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorResultDropDown()`

```php
dataanalysisDataCollectorResultDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $name, $name2, $slug, $slug2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with): \OpenAPI\Client\Model\DataanalysisDataCollectorResultDropDown200Response
```

Retrieves the collection of dataanalysis_datacollectorresults resources.

Retrieves the collection of dataanalysis_datacollectorresults resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | dataanalysis_datacollectorresults slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_datacollectorresults slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_datacollectorresults slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_datacollectorresults id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_datacollectorresults id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_datacollectorresults id_end_with
$name_partial = 'name_partial_example'; // string | dataanalysis_datacollectorresults name_partial
$name_start_with = 'name_start_with_example'; // string | dataanalysis_datacollectorresults name_start_with
$name_end_with = 'name_end_with_example'; // string | dataanalysis_datacollectorresults name_end_with

try {
    $result = $apiInstance->dataanalysisDataCollectorResultDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $data_collector, $data_collector2, $name, $name2, $slug, $slug2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_name, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->dataanalysisDataCollectorResultDropDown: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| dataanalysis_datacollectorresults slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_datacollectorresults slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_datacollectorresults slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_datacollectorresults id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_datacollectorresults id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_datacollectorresults id_end_with | [optional] |
| **name_partial** | **string**| dataanalysis_datacollectorresults name_partial | [optional] |
| **name_start_with** | **string**| dataanalysis_datacollectorresults name_start_with | [optional] |
| **name_end_with** | **string**| dataanalysis_datacollectorresults name_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataCollectorResultDropDown200Response**](../Model/DataanalysisDataCollectorResultDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorResultDuplicate()`

```php
dataanalysisDataCollectorResultDuplicate($id): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectorresults resource.

Retrieves a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorResultDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->dataanalysisDataCollectorResultDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultShowIdTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorresultsJsonldDataCollectorResultShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorResultFetchFiles()`

```php
dataanalysisDataCollectorResultFetchFiles($id): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonld
```

Retrieves a dataanalysis_datacollectorresults resource.

Retrieves a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorResultFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->dataanalysisDataCollectorResultFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonld**](../Model/DataanalysisDatacollectorresultsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorResultGetBySlug()`

```php
dataanalysisDataCollectorResultGetBySlug($slug): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectorresults resource.

Retrieves a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dataanalysis_datacollectorresults identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorResultGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->dataanalysisDataCollectorResultGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dataanalysis_datacollectorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorresultsJsonldDataCollectorResultShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorResultGetDeleteRelations()`

```php
dataanalysisDataCollectorResultGetDeleteRelations($id): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultRelations
```

Retrieves a dataanalysis_datacollectorresults resource.

Retrieves a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorResultGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->dataanalysisDataCollectorResultGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldDataCollectorResultRelations**](../Model/DataanalysisDatacollectorresultsJsonldDataCollectorResultRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorResultMetadata()`

```php
dataanalysisDataCollectorResultMetadata($id): \OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectorresults resource.

Retrieves a dataanalysis_datacollectorresults resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorresultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectorresults identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorResultMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorresultsApi->dataanalysisDataCollectorResultMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectorresults identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorresultsJsonldStandardShowDataanalysisDataCollectorResultShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
