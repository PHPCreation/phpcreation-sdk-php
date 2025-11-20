# OpenAPI\Client\DataanalysisDataprocessorcollectorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDataanalysisDataprocessorcollectorsGetCollection()**](DataanalysisDataprocessorcollectorsApi.md#apiDataanalysisDataprocessorcollectorsGetCollection) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors | Retrieves the collection of dataanalysis_dataprocessorcollectors resources. |
| [**apiDataanalysisDataprocessorcollectorsIdDelete()**](DataanalysisDataprocessorcollectorsApi.md#apiDataanalysisDataprocessorcollectorsIdDelete) | **DELETE** /open-api/v3/dataanalysis_dataprocessorcollectors/{id} | Removes the dataanalysis_dataprocessorcollectors resource. |
| [**apiDataanalysisDataprocessorcollectorsIdGet()**](DataanalysisDataprocessorcollectorsApi.md#apiDataanalysisDataprocessorcollectorsIdGet) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors/{id} | Retrieves a dataanalysis_dataprocessorcollectors resource. |
| [**apiDataanalysisDataprocessorcollectorsIdPut()**](DataanalysisDataprocessorcollectorsApi.md#apiDataanalysisDataprocessorcollectorsIdPut) | **PUT** /open-api/v3/dataanalysis_dataprocessorcollectors/{id} | Replaces the dataanalysis_dataprocessorcollectors resource. |
| [**apiDataanalysisDataprocessorcollectorsPost()**](DataanalysisDataprocessorcollectorsApi.md#apiDataanalysisDataprocessorcollectorsPost) | **POST** /open-api/v3/dataanalysis_dataprocessorcollectors | Creates a dataanalysis_dataprocessorcollectors resource. |
| [**dataanalysisDataProcessorCollectorApiFileUpload()**](DataanalysisDataprocessorcollectorsApi.md#dataanalysisDataProcessorCollectorApiFileUpload) | **POST** /open-api/v3/dataanalysis_dataprocessorcollectors/{id}/file/upload | Creates a dataanalysis_dataprocessorcollectors resource. |
| [**dataanalysisDataProcessorCollectorDropDown()**](DataanalysisDataprocessorcollectorsApi.md#dataanalysisDataProcessorCollectorDropDown) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors/dropdown/get | Retrieves the collection of dataanalysis_dataprocessorcollectors resources. |
| [**dataanalysisDataProcessorCollectorDuplicate()**](DataanalysisDataprocessorcollectorsApi.md#dataanalysisDataProcessorCollectorDuplicate) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors/duplicate/{id} | Retrieves a dataanalysis_dataprocessorcollectors resource. |
| [**dataanalysisDataProcessorCollectorFetchFiles()**](DataanalysisDataprocessorcollectorsApi.md#dataanalysisDataProcessorCollectorFetchFiles) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors/fetch_files/{id} | Retrieves a dataanalysis_dataprocessorcollectors resource. |
| [**dataanalysisDataProcessorCollectorGetBySlug()**](DataanalysisDataprocessorcollectorsApi.md#dataanalysisDataProcessorCollectorGetBySlug) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors/by_slug/{slug} | Retrieves a dataanalysis_dataprocessorcollectors resource. |
| [**dataanalysisDataProcessorCollectorGetDeleteRelations()**](DataanalysisDataprocessorcollectorsApi.md#dataanalysisDataProcessorCollectorGetDeleteRelations) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors/get_delete_relations/{id} | Retrieves a dataanalysis_dataprocessorcollectors resource. |
| [**dataanalysisDataProcessorCollectorMetadata()**](DataanalysisDataprocessorcollectorsApi.md#dataanalysisDataProcessorCollectorMetadata) | **GET** /open-api/v3/dataanalysis_dataprocessorcollectors/metadata/{id} | Retrieves a dataanalysis_dataprocessorcollectors resource. |


## `apiDataanalysisDataprocessorcollectorsGetCollection()`

```php
apiDataanalysisDataprocessorcollectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $collector, $collector2, $processor, $processor2, $search, $exists_deleted_at, $exists_custom_properties, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiDataanalysisDataprocessorcollectorsGetCollection200Response
```

Retrieves the collection of dataanalysis_dataprocessorcollectors resources.

Retrieves the collection of dataanalysis_dataprocessorcollectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
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
$collector = 'collector_example'; // string | 
$collector2 = array('collector_example'); // string[] | 
$processor = 'processor_example'; // string | 
$processor2 = array('processor_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | dataanalysis_dataprocessorcollectors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_dataprocessorcollectors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_dataprocessorcollectors slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_dataprocessorcollectors id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_dataprocessorcollectors id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_dataprocessorcollectors id_end_with

try {
    $result = $apiInstance->apiDataanalysisDataprocessorcollectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $collector, $collector2, $processor, $processor2, $search, $exists_deleted_at, $exists_custom_properties, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->apiDataanalysisDataprocessorcollectorsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **collector** | **string**|  | [optional] |
| **collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **processor** | **string**|  | [optional] |
| **processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| dataanalysis_dataprocessorcollectors slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_dataprocessorcollectors slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_dataprocessorcollectors slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_dataprocessorcollectors id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_dataprocessorcollectors id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_dataprocessorcollectors id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDataanalysisDataprocessorcollectorsGetCollection200Response**](../Model/ApiDataanalysisDataprocessorcollectorsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorcollectorsIdDelete()`

```php
apiDataanalysisDataprocessorcollectorsIdDelete($id)
```

Removes the dataanalysis_dataprocessorcollectors resource.

Removes the dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier

try {
    $apiInstance->apiDataanalysisDataprocessorcollectorsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->apiDataanalysisDataprocessorcollectorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |

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

## `apiDataanalysisDataprocessorcollectorsIdGet()`

```php
apiDataanalysisDataprocessorcollectorsIdGet($id): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a dataanalysis_dataprocessorcollectors resource.

Retrieves a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier

try {
    $result = $apiInstance->apiDataanalysisDataprocessorcollectorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->apiDataanalysisDataprocessorcollectorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorcollectorsIdPut()`

```php
apiDataanalysisDataprocessorcollectorsIdPut($id, $dataanalysis_dataprocessorcollectors_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the dataanalysis_dataprocessorcollectors resource.

Replaces the dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier
$dataanalysis_dataprocessorcollectors_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldAddPost | The updated dataanalysis_dataprocessorcollectors resource

try {
    $result = $apiInstance->apiDataanalysisDataprocessorcollectorsIdPut($id, $dataanalysis_dataprocessorcollectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->apiDataanalysisDataprocessorcollectorsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |
| **dataanalysis_dataprocessorcollectors_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldAddPost**](../Model/DataanalysisDataprocessorcollectorsJsonldAddPost.md)| The updated dataanalysis_dataprocessorcollectors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDataprocessorcollectorsPost()`

```php
apiDataanalysisDataprocessorcollectorsPost($dataanalysis_dataprocessorcollectors_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a dataanalysis_dataprocessorcollectors resource.

Creates a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataanalysis_dataprocessorcollectors_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldAddPost | The new dataanalysis_dataprocessorcollectors resource

try {
    $result = $apiInstance->apiDataanalysisDataprocessorcollectorsPost($dataanalysis_dataprocessorcollectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->apiDataanalysisDataprocessorcollectorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dataanalysis_dataprocessorcollectors_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldAddPost**](../Model/DataanalysisDataprocessorcollectorsJsonldAddPost.md)| The new dataanalysis_dataprocessorcollectors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/DataanalysisDataprocessorcollectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorCollectorApiFileUpload()`

```php
dataanalysisDataProcessorCollectorApiFileUpload($id, $dataanalysis_dataprocessorcollectors_jsonld): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_dataprocessorcollectors resource.

Creates a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier
$dataanalysis_dataprocessorcollectors_jsonld = new \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonld(); // \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonld | The new dataanalysis_dataprocessorcollectors resource

try {
    $result = $apiInstance->dataanalysisDataProcessorCollectorApiFileUpload($id, $dataanalysis_dataprocessorcollectors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->dataanalysisDataProcessorCollectorApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |
| **dataanalysis_dataprocessorcollectors_jsonld** | [**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonld**](../Model/DataanalysisDataprocessorcollectorsJsonld.md)| The new dataanalysis_dataprocessorcollectors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorCollectorDropDown()`

```php
dataanalysisDataProcessorCollectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $collector, $collector2, $processor, $processor2, $search, $exists_deleted_at, $exists_custom_properties, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\DataanalysisDataProcessorCollectorDropDown200Response
```

Retrieves the collection of dataanalysis_dataprocessorcollectors resources.

Retrieves the collection of dataanalysis_dataprocessorcollectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
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
$collector = 'collector_example'; // string | 
$collector2 = array('collector_example'); // string[] | 
$processor = 'processor_example'; // string | 
$processor2 = array('processor_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | dataanalysis_dataprocessorcollectors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_dataprocessorcollectors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_dataprocessorcollectors slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_dataprocessorcollectors id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_dataprocessorcollectors id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_dataprocessorcollectors id_end_with

try {
    $result = $apiInstance->dataanalysisDataProcessorCollectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $collector, $collector2, $processor, $processor2, $search, $exists_deleted_at, $exists_custom_properties, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->dataanalysisDataProcessorCollectorDropDown: ', $e->getMessage(), PHP_EOL;
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
| **collector** | **string**|  | [optional] |
| **collector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **processor** | **string**|  | [optional] |
| **processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| dataanalysis_dataprocessorcollectors slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_dataprocessorcollectors slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_dataprocessorcollectors slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_dataprocessorcollectors id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_dataprocessorcollectors id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_dataprocessorcollectors id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataProcessorCollectorDropDown200Response**](../Model/DataanalysisDataProcessorCollectorDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorCollectorDuplicate()`

```php
dataanalysisDataProcessorCollectorDuplicate($id): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessorcollectors resource.

Retrieves a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorCollectorDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->dataanalysisDataProcessorCollectorDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorCollectorFetchFiles()`

```php
dataanalysisDataProcessorCollectorFetchFiles($id): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonld
```

Retrieves a dataanalysis_dataprocessorcollectors resource.

Retrieves a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorCollectorFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->dataanalysisDataProcessorCollectorFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonld**](../Model/DataanalysisDataprocessorcollectorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorCollectorGetBySlug()`

```php
dataanalysisDataProcessorCollectorGetBySlug($slug): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a dataanalysis_dataprocessorcollectors resource.

Retrieves a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dataanalysis_dataprocessorcollectors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorCollectorGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->dataanalysisDataProcessorCollectorGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dataanalysis_dataprocessorcollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorCollectorGetDeleteRelations()`

```php
dataanalysisDataProcessorCollectorGetDeleteRelations($id): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorRelations
```

Retrieves a dataanalysis_dataprocessorcollectors resource.

Retrieves a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorCollectorGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->dataanalysisDataProcessorCollectorGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorRelations**](../Model/DataanalysisDataprocessorcollectorsJsonldDataanalysisDataProcessorCollectorRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataProcessorCollectorMetadata()`

```php
dataanalysisDataProcessorCollectorMetadata($id): \OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldIdStandardMetadataDataanalysisDataProcessorCollectorMetadataTagTaggingListDataanalysisDataProcessorCollectorRelationsTimestampable
```

Retrieves a dataanalysis_dataprocessorcollectors resource.

Retrieves a dataanalysis_dataprocessorcollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDataprocessorcollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_dataprocessorcollectors identifier

try {
    $result = $apiInstance->dataanalysisDataProcessorCollectorMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDataprocessorcollectorsApi->dataanalysisDataProcessorCollectorMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_dataprocessorcollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataprocessorcollectorsJsonldIdStandardMetadataDataanalysisDataProcessorCollectorMetadataTagTaggingListDataanalysisDataProcessorCollectorRelationsTimestampable**](../Model/DataanalysisDataprocessorcollectorsJsonldIdStandardMetadataDataanalysisDataProcessorCollectorMetadataTagTaggingListDataanalysisDataProcessorCollectorRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
