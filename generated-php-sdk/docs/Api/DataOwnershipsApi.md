# OpenAPI\Client\DataOwnershipsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiDataOwnershipsGetCollection()**](DataOwnershipsApi.md#apiDataOwnershipsGetCollection) | **GET** /open-api/v3/data_ownerships | Retrieves the collection of data_ownerships resources. |
| [**apiDataOwnershipsIdDelete()**](DataOwnershipsApi.md#apiDataOwnershipsIdDelete) | **DELETE** /open-api/v3/data_ownerships/{id} | Removes the data_ownerships resource. |
| [**apiDataOwnershipsIdGet()**](DataOwnershipsApi.md#apiDataOwnershipsIdGet) | **GET** /open-api/v3/data_ownerships/{id} | Retrieves a data_ownerships resource. |
| [**apiDataOwnershipsIdPut()**](DataOwnershipsApi.md#apiDataOwnershipsIdPut) | **PUT** /open-api/v3/data_ownerships/{id} | Replaces the data_ownerships resource. |
| [**apiDataOwnershipsPost()**](DataOwnershipsApi.md#apiDataOwnershipsPost) | **POST** /open-api/v3/data_ownerships | Creates a data_ownerships resource. |
| [**dataCorporationsMetadata()**](DataOwnershipsApi.md#dataCorporationsMetadata) | **GET** /open-api/v3/data_ownerships/metadata/{id} | Retrieves a data_ownerships resource. |
| [**dataOwnershipDropDown()**](DataOwnershipsApi.md#dataOwnershipDropDown) | **GET** /open-api/v3/data_ownerships/dropdown/get | Retrieves the collection of data_ownerships resources. |


## `apiDataOwnershipsGetCollection()`

```php
apiDataOwnershipsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref_table, $ref_table2, $row_id, $row_id2, $corporations_id, $corporations_id2, $search, $exists_custom_properties, $exists_row_id, $properties, $enabled, $tag, $order_id, $order_slug, $order_row_id, $order_ref_table, $order_corporations_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $corporations_id_partial, $corporations_id_start_with, $corporations_id_end_with): \OpenAPI\Client\Model\ApiDataOwnershipsGetCollection200Response
```

Retrieves the collection of data_ownerships resources.

Retrieves the collection of data_ownerships resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataOwnershipsApi(
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
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$corporations_id = 56; // int | 
$corporations_id2 = array(56); // int[] | 
$search = 'search_example'; // string | 
$exists_custom_properties = True; // bool | 
$exists_row_id = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_row_id = 'order_row_id_example'; // string | 
$order_ref_table = 'order_ref_table_example'; // string | 
$order_corporations_id = 'order_corporations_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | data_ownerships slug_partial
$slug_start_with = 'slug_start_with_example'; // string | data_ownerships slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | data_ownerships slug_end_with
$id_partial = 'id_partial_example'; // string | data_ownerships id_partial
$id_start_with = 'id_start_with_example'; // string | data_ownerships id_start_with
$id_end_with = 'id_end_with_example'; // string | data_ownerships id_end_with
$ref_table_partial = 'ref_table_partial_example'; // string | data_ownerships refTable_partial
$ref_table_start_with = 'ref_table_start_with_example'; // string | data_ownerships refTable_start_with
$ref_table_end_with = 'ref_table_end_with_example'; // string | data_ownerships refTable_end_with
$row_id_partial = 'row_id_partial_example'; // string | data_ownerships rowId_partial
$row_id_start_with = 'row_id_start_with_example'; // string | data_ownerships rowId_start_with
$row_id_end_with = 'row_id_end_with_example'; // string | data_ownerships rowId_end_with
$corporations_id_partial = 'corporations_id_partial_example'; // string | data_ownerships corporationsId_partial
$corporations_id_start_with = 'corporations_id_start_with_example'; // string | data_ownerships corporationsId_start_with
$corporations_id_end_with = 'corporations_id_end_with_example'; // string | data_ownerships corporationsId_end_with

try {
    $result = $apiInstance->apiDataOwnershipsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref_table, $ref_table2, $row_id, $row_id2, $corporations_id, $corporations_id2, $search, $exists_custom_properties, $exists_row_id, $properties, $enabled, $tag, $order_id, $order_slug, $order_row_id, $order_ref_table, $order_corporations_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $corporations_id_partial, $corporations_id_start_with, $corporations_id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataOwnershipsApi->apiDataOwnershipsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **corporations_id** | **int**|  | [optional] |
| **corporations_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_row_id** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_row_id** | **string**|  | [optional] |
| **order_ref_table** | **string**|  | [optional] |
| **order_corporations_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| data_ownerships slug_partial | [optional] |
| **slug_start_with** | **string**| data_ownerships slug_start_with | [optional] |
| **slug_end_with** | **string**| data_ownerships slug_end_with | [optional] |
| **id_partial** | **string**| data_ownerships id_partial | [optional] |
| **id_start_with** | **string**| data_ownerships id_start_with | [optional] |
| **id_end_with** | **string**| data_ownerships id_end_with | [optional] |
| **ref_table_partial** | **string**| data_ownerships refTable_partial | [optional] |
| **ref_table_start_with** | **string**| data_ownerships refTable_start_with | [optional] |
| **ref_table_end_with** | **string**| data_ownerships refTable_end_with | [optional] |
| **row_id_partial** | **string**| data_ownerships rowId_partial | [optional] |
| **row_id_start_with** | **string**| data_ownerships rowId_start_with | [optional] |
| **row_id_end_with** | **string**| data_ownerships rowId_end_with | [optional] |
| **corporations_id_partial** | **string**| data_ownerships corporationsId_partial | [optional] |
| **corporations_id_start_with** | **string**| data_ownerships corporationsId_start_with | [optional] |
| **corporations_id_end_with** | **string**| data_ownerships corporationsId_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiDataOwnershipsGetCollection200Response**](../Model/ApiDataOwnershipsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataOwnershipsIdDelete()`

```php
apiDataOwnershipsIdDelete($id)
```

Removes the data_ownerships resource.

Removes the data_ownerships resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataOwnershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data_ownerships identifier

try {
    $apiInstance->apiDataOwnershipsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataOwnershipsApi->apiDataOwnershipsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data_ownerships identifier | |

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

## `apiDataOwnershipsIdGet()`

```php
apiDataOwnershipsIdGet($id): \OpenAPI\Client\Model\DataOwnershipsJsonldDataCorporationsShowIdTimestampableTagTaggingList
```

Retrieves a data_ownerships resource.

Retrieves a data_ownerships resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataOwnershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data_ownerships identifier

try {
    $result = $apiInstance->apiDataOwnershipsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataOwnershipsApi->apiDataOwnershipsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data_ownerships identifier | |

### Return type

[**\OpenAPI\Client\Model\DataOwnershipsJsonldDataCorporationsShowIdTimestampableTagTaggingList**](../Model/DataOwnershipsJsonldDataCorporationsShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataOwnershipsIdPut()`

```php
apiDataOwnershipsIdPut($id, $data_ownerships_jsonld_add_post): \OpenAPI\Client\Model\DataOwnershipsJsonldDataCorporationsShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the data_ownerships resource.

Replaces the data_ownerships resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataOwnershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data_ownerships identifier
$data_ownerships_jsonld_add_post = new \OpenAPI\Client\Model\DataOwnershipsJsonldAddPost(); // \OpenAPI\Client\Model\DataOwnershipsJsonldAddPost | The updated data_ownerships resource

try {
    $result = $apiInstance->apiDataOwnershipsIdPut($id, $data_ownerships_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataOwnershipsApi->apiDataOwnershipsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data_ownerships identifier | |
| **data_ownerships_jsonld_add_post** | [**\OpenAPI\Client\Model\DataOwnershipsJsonldAddPost**](../Model/DataOwnershipsJsonldAddPost.md)| The updated data_ownerships resource | |

### Return type

[**\OpenAPI\Client\Model\DataOwnershipsJsonldDataCorporationsShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/DataOwnershipsJsonldDataCorporationsShowStandardShowNoteShowIdCustomPropertyTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiDataOwnershipsPost()`

```php
apiDataOwnershipsPost($data_ownerships_jsonld_add_post): \OpenAPI\Client\Model\DataOwnershipsJsonldDataCorporationsShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a data_ownerships resource.

Creates a data_ownerships resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataOwnershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_ownerships_jsonld_add_post = new \OpenAPI\Client\Model\DataOwnershipsJsonldAddPost(); // \OpenAPI\Client\Model\DataOwnershipsJsonldAddPost | The new data_ownerships resource

try {
    $result = $apiInstance->apiDataOwnershipsPost($data_ownerships_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataOwnershipsApi->apiDataOwnershipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_ownerships_jsonld_add_post** | [**\OpenAPI\Client\Model\DataOwnershipsJsonldAddPost**](../Model/DataOwnershipsJsonldAddPost.md)| The new data_ownerships resource | |

### Return type

[**\OpenAPI\Client\Model\DataOwnershipsJsonldDataCorporationsShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/DataOwnershipsJsonldDataCorporationsShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCorporationsMetadata()`

```php
dataCorporationsMetadata($id): \OpenAPI\Client\Model\DataOwnershipsJsonldIdStandardMetadataDataCorporationsMetadataTagTaggingListDataCorporationsRelationsTimestampable
```

Retrieves a data_ownerships resource.

Retrieves a data_ownerships resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataOwnershipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data_ownerships identifier

try {
    $result = $apiInstance->dataCorporationsMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataOwnershipsApi->dataCorporationsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data_ownerships identifier | |

### Return type

[**\OpenAPI\Client\Model\DataOwnershipsJsonldIdStandardMetadataDataCorporationsMetadataTagTaggingListDataCorporationsRelationsTimestampable**](../Model/DataOwnershipsJsonldIdStandardMetadataDataCorporationsMetadataTagTaggingListDataCorporationsRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataOwnershipDropDown()`

```php
dataOwnershipDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref_table, $ref_table2, $row_id, $row_id2, $corporations_id, $corporations_id2, $search, $exists_custom_properties, $exists_row_id, $properties, $enabled, $tag, $order_id, $order_slug, $order_row_id, $order_ref_table, $order_corporations_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $corporations_id_partial, $corporations_id_start_with, $corporations_id_end_with): \OpenAPI\Client\Model\DataOwnershipDropDown200Response
```

Retrieves the collection of data_ownerships resources.

Retrieves the collection of data_ownerships resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataOwnershipsApi(
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
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$corporations_id = 56; // int | 
$corporations_id2 = array(56); // int[] | 
$search = 'search_example'; // string | 
$exists_custom_properties = True; // bool | 
$exists_row_id = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_row_id = 'order_row_id_example'; // string | 
$order_ref_table = 'order_ref_table_example'; // string | 
$order_corporations_id = 'order_corporations_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | data_ownerships slug_partial
$slug_start_with = 'slug_start_with_example'; // string | data_ownerships slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | data_ownerships slug_end_with
$id_partial = 'id_partial_example'; // string | data_ownerships id_partial
$id_start_with = 'id_start_with_example'; // string | data_ownerships id_start_with
$id_end_with = 'id_end_with_example'; // string | data_ownerships id_end_with
$ref_table_partial = 'ref_table_partial_example'; // string | data_ownerships refTable_partial
$ref_table_start_with = 'ref_table_start_with_example'; // string | data_ownerships refTable_start_with
$ref_table_end_with = 'ref_table_end_with_example'; // string | data_ownerships refTable_end_with
$row_id_partial = 'row_id_partial_example'; // string | data_ownerships rowId_partial
$row_id_start_with = 'row_id_start_with_example'; // string | data_ownerships rowId_start_with
$row_id_end_with = 'row_id_end_with_example'; // string | data_ownerships rowId_end_with
$corporations_id_partial = 'corporations_id_partial_example'; // string | data_ownerships corporationsId_partial
$corporations_id_start_with = 'corporations_id_start_with_example'; // string | data_ownerships corporationsId_start_with
$corporations_id_end_with = 'corporations_id_end_with_example'; // string | data_ownerships corporationsId_end_with

try {
    $result = $apiInstance->dataOwnershipDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref_table, $ref_table2, $row_id, $row_id2, $corporations_id, $corporations_id2, $search, $exists_custom_properties, $exists_row_id, $properties, $enabled, $tag, $order_id, $order_slug, $order_row_id, $order_ref_table, $order_corporations_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_table_partial, $ref_table_start_with, $ref_table_end_with, $row_id_partial, $row_id_start_with, $row_id_end_with, $corporations_id_partial, $corporations_id_start_with, $corporations_id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataOwnershipsApi->dataOwnershipDropDown: ', $e->getMessage(), PHP_EOL;
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
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **corporations_id** | **int**|  | [optional] |
| **corporations_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_row_id** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_row_id** | **string**|  | [optional] |
| **order_ref_table** | **string**|  | [optional] |
| **order_corporations_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| data_ownerships slug_partial | [optional] |
| **slug_start_with** | **string**| data_ownerships slug_start_with | [optional] |
| **slug_end_with** | **string**| data_ownerships slug_end_with | [optional] |
| **id_partial** | **string**| data_ownerships id_partial | [optional] |
| **id_start_with** | **string**| data_ownerships id_start_with | [optional] |
| **id_end_with** | **string**| data_ownerships id_end_with | [optional] |
| **ref_table_partial** | **string**| data_ownerships refTable_partial | [optional] |
| **ref_table_start_with** | **string**| data_ownerships refTable_start_with | [optional] |
| **ref_table_end_with** | **string**| data_ownerships refTable_end_with | [optional] |
| **row_id_partial** | **string**| data_ownerships rowId_partial | [optional] |
| **row_id_start_with** | **string**| data_ownerships rowId_start_with | [optional] |
| **row_id_end_with** | **string**| data_ownerships rowId_end_with | [optional] |
| **corporations_id_partial** | **string**| data_ownerships corporationsId_partial | [optional] |
| **corporations_id_start_with** | **string**| data_ownerships corporationsId_start_with | [optional] |
| **corporations_id_end_with** | **string**| data_ownerships corporationsId_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataOwnershipDropDown200Response**](../Model/DataOwnershipDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
