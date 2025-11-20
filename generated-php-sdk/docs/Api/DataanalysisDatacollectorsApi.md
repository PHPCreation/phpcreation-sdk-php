# OpenAPI\Client\DataanalysisDatacollectorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDataanalysisDatacollectorsGetCollection()**](DataanalysisDatacollectorsApi.md#apiDataanalysisDatacollectorsGetCollection) | **GET** /open-api/v3/dataanalysis_datacollectors | Retrieves the collection of dataanalysis_datacollectors resources. |
| [**apiDataanalysisDatacollectorsIdDelete()**](DataanalysisDatacollectorsApi.md#apiDataanalysisDatacollectorsIdDelete) | **DELETE** /open-api/v3/dataanalysis_datacollectors/{id} | Removes the dataanalysis_datacollectors resource. |
| [**apiDataanalysisDatacollectorsIdGet()**](DataanalysisDatacollectorsApi.md#apiDataanalysisDatacollectorsIdGet) | **GET** /open-api/v3/dataanalysis_datacollectors/{id} | Retrieves a dataanalysis_datacollectors resource. |
| [**apiDataanalysisDatacollectorsIdPut()**](DataanalysisDatacollectorsApi.md#apiDataanalysisDatacollectorsIdPut) | **PUT** /open-api/v3/dataanalysis_datacollectors/{id} | Replaces the dataanalysis_datacollectors resource. |
| [**apiDataanalysisDatacollectorsPost()**](DataanalysisDatacollectorsApi.md#apiDataanalysisDatacollectorsPost) | **POST** /open-api/v3/dataanalysis_datacollectors | Creates a dataanalysis_datacollectors resource. |
| [**dataAnalysisDataCollectorMetadata()**](DataanalysisDatacollectorsApi.md#dataAnalysisDataCollectorMetadata) | **GET** /open-api/v3/dataanalysis_datacollectors/metadata/{id} | Retrieves a dataanalysis_datacollectors resource. |
| [**dataanalysisDataCollectorApiFileUpload()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorApiFileUpload) | **POST** /open-api/v3/dataanalysis_datacollectors/{id}/file/upload | Creates a dataanalysis_datacollectors resource. |
| [**dataanalysisDataCollectorDropDown()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorDropDown) | **GET** /open-api/v3/dataanalysis_datacollectors/dropdown/get | Retrieves the collection of dataanalysis_datacollectors resources. |
| [**dataanalysisDataCollectorDuplicate()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorDuplicate) | **GET** /open-api/v3/dataanalysis_datacollectors/duplicate/{id} | Retrieves a dataanalysis_datacollectors resource. |
| [**dataanalysisDataCollectorExecute()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorExecute) | **GET** /open-api/v3/dataanalysis_datacollectors/{id}/execute | Retrieves a dataanalysis_datacollectors resource. |
| [**dataanalysisDataCollectorFetchFiles()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorFetchFiles) | **GET** /open-api/v3/dataanalysis_datacollectors/fetch_files/{id} | Retrieves a dataanalysis_datacollectors resource. |
| [**dataanalysisDataCollectorGetBySlug()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorGetBySlug) | **GET** /open-api/v3/dataanalysis_datacollectors/by_slug/{slug} | Retrieves a dataanalysis_datacollectors resource. |
| [**dataanalysisDataCollectorGetDeleteRelations()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorGetDeleteRelations) | **GET** /open-api/v3/dataanalysis_datacollectors/get_delete_relations/{id} | Retrieves a dataanalysis_datacollectors resource. |
| [**dataanalysisDataCollectorGetQuery()**](DataanalysisDatacollectorsApi.md#dataanalysisDataCollectorGetQuery) | **GET** /open-api/v3/dataanalysis_datacollectors/{id}/get_query | Retrieves a dataanalysis_datacollectors resource. |


## `apiDataanalysisDatacollectorsGetCollection()`

```php
apiDataanalysisDatacollectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $description, $description2, $serialization_groups, $serialization_groups2, $role, $role2, $type, $type2, $data_processors_processor, $data_processors_processor2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_serialization_groups, $exists_description, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_type, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $directive_partial, $directive_start_with, $directive_end_with, $serialization_groups_partial, $serialization_groups_start_with, $serialization_groups_end_with, $role_partial, $role_start_with, $role_end_with): \OpenAPI\Client\Model\ApiDataanalysisDatacollectorsGetCollection200Response
```

Retrieves the collection of dataanalysis_datacollectors resources.

Retrieves the collection of dataanalysis_datacollectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
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
$description = 'description_example'; // string | 
$description2 = array('description_example'); // string[] | 
$serialization_groups = 'serialization_groups_example'; // string | 
$serialization_groups2 = array('serialization_groups_example'); // string[] | 
$role = 'role_example'; // string | 
$role2 = array('role_example'); // string[] | 
$type = 56; // int | 
$type2 = array(56); // int[] | 
$data_processors_processor = 'data_processors_processor_example'; // string | 
$data_processors_processor2 = array('data_processors_processor_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_serialization_groups = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_title = 'order_title_example'; // string | 
$order_type = 'order_type_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | dataanalysis_datacollectors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_datacollectors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_datacollectors slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_datacollectors id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_datacollectors id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_datacollectors id_end_with
$title_partial = 'title_partial_example'; // string | dataanalysis_datacollectors title_partial
$title_start_with = 'title_start_with_example'; // string | dataanalysis_datacollectors title_start_with
$title_end_with = 'title_end_with_example'; // string | dataanalysis_datacollectors title_end_with
$directive_partial = 'directive_partial_example'; // string | dataanalysis_datacollectors directive_partial
$directive_start_with = 'directive_start_with_example'; // string | dataanalysis_datacollectors directive_start_with
$directive_end_with = 'directive_end_with_example'; // string | dataanalysis_datacollectors directive_end_with
$serialization_groups_partial = 'serialization_groups_partial_example'; // string | dataanalysis_datacollectors serializationGroups_partial
$serialization_groups_start_with = 'serialization_groups_start_with_example'; // string | dataanalysis_datacollectors serializationGroups_start_with
$serialization_groups_end_with = 'serialization_groups_end_with_example'; // string | dataanalysis_datacollectors serializationGroups_end_with
$role_partial = 'role_partial_example'; // string | dataanalysis_datacollectors role_partial
$role_start_with = 'role_start_with_example'; // string | dataanalysis_datacollectors role_start_with
$role_end_with = 'role_end_with_example'; // string | dataanalysis_datacollectors role_end_with

try {
    $result = $apiInstance->apiDataanalysisDatacollectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $description, $description2, $serialization_groups, $serialization_groups2, $role, $role2, $type, $type2, $data_processors_processor, $data_processors_processor2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_serialization_groups, $exists_description, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_type, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $directive_partial, $directive_start_with, $directive_end_with, $serialization_groups_partial, $serialization_groups_start_with, $serialization_groups_end_with, $role_partial, $role_start_with, $role_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->apiDataanalysisDatacollectorsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **description** | **string**|  | [optional] |
| **description2** | [**string[]**](../Model/string.md)|  | [optional] |
| **serialization_groups** | **string**|  | [optional] |
| **serialization_groups2** | [**string[]**](../Model/string.md)|  | [optional] |
| **role** | **string**|  | [optional] |
| **role2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **int**|  | [optional] |
| **type2** | [**int[]**](../Model/int.md)|  | [optional] |
| **data_processors_processor** | **string**|  | [optional] |
| **data_processors_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_serialization_groups** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_title** | **string**|  | [optional] |
| **order_type** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| dataanalysis_datacollectors slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_datacollectors slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_datacollectors slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_datacollectors id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_datacollectors id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_datacollectors id_end_with | [optional] |
| **title_partial** | **string**| dataanalysis_datacollectors title_partial | [optional] |
| **title_start_with** | **string**| dataanalysis_datacollectors title_start_with | [optional] |
| **title_end_with** | **string**| dataanalysis_datacollectors title_end_with | [optional] |
| **directive_partial** | **string**| dataanalysis_datacollectors directive_partial | [optional] |
| **directive_start_with** | **string**| dataanalysis_datacollectors directive_start_with | [optional] |
| **directive_end_with** | **string**| dataanalysis_datacollectors directive_end_with | [optional] |
| **serialization_groups_partial** | **string**| dataanalysis_datacollectors serializationGroups_partial | [optional] |
| **serialization_groups_start_with** | **string**| dataanalysis_datacollectors serializationGroups_start_with | [optional] |
| **serialization_groups_end_with** | **string**| dataanalysis_datacollectors serializationGroups_end_with | [optional] |
| **role_partial** | **string**| dataanalysis_datacollectors role_partial | [optional] |
| **role_start_with** | **string**| dataanalysis_datacollectors role_start_with | [optional] |
| **role_end_with** | **string**| dataanalysis_datacollectors role_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDataanalysisDatacollectorsGetCollection200Response**](../Model/ApiDataanalysisDatacollectorsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorsIdDelete()`

```php
apiDataanalysisDatacollectorsIdDelete($id)
```

Removes the dataanalysis_datacollectors resource.

Removes the dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $apiInstance->apiDataanalysisDatacollectorsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->apiDataanalysisDatacollectorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

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

## `apiDataanalysisDatacollectorsIdGet()`

```php
apiDataanalysisDatacollectorsIdGet($id): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListCustomPropertyStandardShow
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->apiDataanalysisDatacollectorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->apiDataanalysisDatacollectorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListCustomPropertyStandardShow**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListCustomPropertyStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorsIdPut()`

```php
apiDataanalysisDatacollectorsIdPut($id, $dataanalysis_datacollectors_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListCustomPropertyStandardShow
```

Replaces the dataanalysis_datacollectors resource.

Replaces the dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier
$dataanalysis_datacollectors_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldAddPost | The updated dataanalysis_datacollectors resource

try {
    $result = $apiInstance->apiDataanalysisDatacollectorsIdPut($id, $dataanalysis_datacollectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->apiDataanalysisDatacollectorsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |
| **dataanalysis_datacollectors_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldAddPost**](../Model/DataanalysisDatacollectorsJsonldAddPost.md)| The updated dataanalysis_datacollectors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListCustomPropertyStandardShow**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListCustomPropertyStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataanalysisDatacollectorsPost()`

```php
apiDataanalysisDatacollectorsPost($dataanalysis_datacollectors_jsonld_add_post): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_datacollectors resource.

Creates a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataanalysis_datacollectors_jsonld_add_post = new \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldAddPost(); // \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldAddPost | The new dataanalysis_datacollectors resource

try {
    $result = $apiInstance->apiDataanalysisDatacollectorsPost($dataanalysis_datacollectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->apiDataanalysisDatacollectorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dataanalysis_datacollectors_jsonld_add_post** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldAddPost**](../Model/DataanalysisDatacollectorsJsonldAddPost.md)| The new dataanalysis_datacollectors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataAnalysisDataCollectorMetadata()`

```php
dataAnalysisDataCollectorMetadata($id): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldIdStandardMetadataDataAnalysisDataCollectorMetadataTagTaggingListDataAnalysisDataCollectorRelationsTimestampable
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->dataAnalysisDataCollectorMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataAnalysisDataCollectorMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldIdStandardMetadataDataAnalysisDataCollectorMetadataTagTaggingListDataAnalysisDataCollectorRelationsTimestampable**](../Model/DataanalysisDatacollectorsJsonldIdStandardMetadataDataAnalysisDataCollectorMetadataTagTaggingListDataAnalysisDataCollectorRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorApiFileUpload()`

```php
dataanalysisDataCollectorApiFileUpload($id, $dataanalysis_datacollectors_jsonld): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a dataanalysis_datacollectors resource.

Creates a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier
$dataanalysis_datacollectors_jsonld = new \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonld(); // \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonld | The new dataanalysis_datacollectors resource

try {
    $result = $apiInstance->dataanalysisDataCollectorApiFileUpload($id, $dataanalysis_datacollectors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |
| **dataanalysis_datacollectors_jsonld** | [**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonld**](../Model/DataanalysisDatacollectorsJsonld.md)| The new dataanalysis_datacollectors resource | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListStandardShow**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorDropDown()`

```php
dataanalysisDataCollectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $description, $description2, $serialization_groups, $serialization_groups2, $role, $role2, $type, $type2, $data_processors_processor, $data_processors_processor2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_serialization_groups, $exists_description, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_type, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $directive_partial, $directive_start_with, $directive_end_with, $serialization_groups_partial, $serialization_groups_start_with, $serialization_groups_end_with, $role_partial, $role_start_with, $role_end_with): \OpenAPI\Client\Model\DataanalysisDataCollectorDropDown200Response
```

Retrieves the collection of dataanalysis_datacollectors resources.

Retrieves the collection of dataanalysis_datacollectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
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
$description = 'description_example'; // string | 
$description2 = array('description_example'); // string[] | 
$serialization_groups = 'serialization_groups_example'; // string | 
$serialization_groups2 = array('serialization_groups_example'); // string[] | 
$role = 'role_example'; // string | 
$role2 = array('role_example'); // string[] | 
$type = 56; // int | 
$type2 = array(56); // int[] | 
$data_processors_processor = 'data_processors_processor_example'; // string | 
$data_processors_processor2 = array('data_processors_processor_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_serialization_groups = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_title = 'order_title_example'; // string | 
$order_type = 'order_type_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | dataanalysis_datacollectors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | dataanalysis_datacollectors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | dataanalysis_datacollectors slug_end_with
$id_partial = 'id_partial_example'; // string | dataanalysis_datacollectors id_partial
$id_start_with = 'id_start_with_example'; // string | dataanalysis_datacollectors id_start_with
$id_end_with = 'id_end_with_example'; // string | dataanalysis_datacollectors id_end_with
$title_partial = 'title_partial_example'; // string | dataanalysis_datacollectors title_partial
$title_start_with = 'title_start_with_example'; // string | dataanalysis_datacollectors title_start_with
$title_end_with = 'title_end_with_example'; // string | dataanalysis_datacollectors title_end_with
$directive_partial = 'directive_partial_example'; // string | dataanalysis_datacollectors directive_partial
$directive_start_with = 'directive_start_with_example'; // string | dataanalysis_datacollectors directive_start_with
$directive_end_with = 'directive_end_with_example'; // string | dataanalysis_datacollectors directive_end_with
$serialization_groups_partial = 'serialization_groups_partial_example'; // string | dataanalysis_datacollectors serializationGroups_partial
$serialization_groups_start_with = 'serialization_groups_start_with_example'; // string | dataanalysis_datacollectors serializationGroups_start_with
$serialization_groups_end_with = 'serialization_groups_end_with_example'; // string | dataanalysis_datacollectors serializationGroups_end_with
$role_partial = 'role_partial_example'; // string | dataanalysis_datacollectors role_partial
$role_start_with = 'role_start_with_example'; // string | dataanalysis_datacollectors role_start_with
$role_end_with = 'role_end_with_example'; // string | dataanalysis_datacollectors role_end_with

try {
    $result = $apiInstance->dataanalysisDataCollectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $title2, $description, $description2, $serialization_groups, $serialization_groups2, $role, $role2, $type, $type2, $data_processors_processor, $data_processors_processor2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_serialization_groups, $exists_description, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_type, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $directive_partial, $directive_start_with, $directive_end_with, $serialization_groups_partial, $serialization_groups_start_with, $serialization_groups_end_with, $role_partial, $role_start_with, $role_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorDropDown: ', $e->getMessage(), PHP_EOL;
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
| **description** | **string**|  | [optional] |
| **description2** | [**string[]**](../Model/string.md)|  | [optional] |
| **serialization_groups** | **string**|  | [optional] |
| **serialization_groups2** | [**string[]**](../Model/string.md)|  | [optional] |
| **role** | **string**|  | [optional] |
| **role2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **int**|  | [optional] |
| **type2** | [**int[]**](../Model/int.md)|  | [optional] |
| **data_processors_processor** | **string**|  | [optional] |
| **data_processors_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_serialization_groups** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_title** | **string**|  | [optional] |
| **order_type** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| dataanalysis_datacollectors slug_partial | [optional] |
| **slug_start_with** | **string**| dataanalysis_datacollectors slug_start_with | [optional] |
| **slug_end_with** | **string**| dataanalysis_datacollectors slug_end_with | [optional] |
| **id_partial** | **string**| dataanalysis_datacollectors id_partial | [optional] |
| **id_start_with** | **string**| dataanalysis_datacollectors id_start_with | [optional] |
| **id_end_with** | **string**| dataanalysis_datacollectors id_end_with | [optional] |
| **title_partial** | **string**| dataanalysis_datacollectors title_partial | [optional] |
| **title_start_with** | **string**| dataanalysis_datacollectors title_start_with | [optional] |
| **title_end_with** | **string**| dataanalysis_datacollectors title_end_with | [optional] |
| **directive_partial** | **string**| dataanalysis_datacollectors directive_partial | [optional] |
| **directive_start_with** | **string**| dataanalysis_datacollectors directive_start_with | [optional] |
| **directive_end_with** | **string**| dataanalysis_datacollectors directive_end_with | [optional] |
| **serialization_groups_partial** | **string**| dataanalysis_datacollectors serializationGroups_partial | [optional] |
| **serialization_groups_start_with** | **string**| dataanalysis_datacollectors serializationGroups_start_with | [optional] |
| **serialization_groups_end_with** | **string**| dataanalysis_datacollectors serializationGroups_end_with | [optional] |
| **role_partial** | **string**| dataanalysis_datacollectors role_partial | [optional] |
| **role_start_with** | **string**| dataanalysis_datacollectors role_start_with | [optional] |
| **role_end_with** | **string**| dataanalysis_datacollectors role_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDataCollectorDropDown200Response**](../Model/DataanalysisDataCollectorDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorDuplicate()`

```php
dataanalysisDataCollectorDuplicate($id): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorExecute()`

```php
dataanalysisDataCollectorExecute($id): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorExecute($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorExecute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorFetchFiles()`

```php
dataanalysisDataCollectorFetchFiles($id): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonld
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonld**](../Model/DataanalysisDatacollectorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorGetBySlug()`

```php
dataanalysisDataCollectorGetBySlug($slug): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdCustomPropertyCustomPropertyTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdCustomPropertyCustomPropertyTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdCustomPropertyCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorGetDeleteRelations()`

```php
dataanalysisDataCollectorGetDeleteRelations($id): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorRelations
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorRelations**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataanalysisDataCollectorGetQuery()`

```php
dataanalysisDataCollectorGetQuery($id): \OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList
```

Retrieves a dataanalysis_datacollectors resource.

Retrieves a dataanalysis_datacollectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataanalysisDatacollectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | dataanalysis_datacollectors identifier

try {
    $result = $apiInstance->dataanalysisDataCollectorGetQuery($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataanalysisDatacollectorsApi->dataanalysisDataCollectorGetQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| dataanalysis_datacollectors identifier | |

### Return type

[**\OpenAPI\Client\Model\DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList**](../Model/DataanalysisDatacollectorsJsonldDataAnalysisDataCollectorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
