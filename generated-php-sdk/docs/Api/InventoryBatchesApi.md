# OpenAPI\Client\InventoryBatchesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInventoryBatchesGetCollection()**](InventoryBatchesApi.md#apiInventoryBatchesGetCollection) | **GET** /open-api/v3/inventory_batches | Retrieves the collection of inventory_batches resources. |
| [**apiInventoryBatchesIdDelete()**](InventoryBatchesApi.md#apiInventoryBatchesIdDelete) | **DELETE** /open-api/v3/inventory_batches/{id} | Removes the inventory_batches resource. |
| [**apiInventoryBatchesIdGet()**](InventoryBatchesApi.md#apiInventoryBatchesIdGet) | **GET** /open-api/v3/inventory_batches/{id} | Retrieves a inventory_batches resource. |
| [**apiInventoryBatchesIdPut()**](InventoryBatchesApi.md#apiInventoryBatchesIdPut) | **PUT** /open-api/v3/inventory_batches/{id} | Replaces the inventory_batches resource. |
| [**apiInventoryBatchesPost()**](InventoryBatchesApi.md#apiInventoryBatchesPost) | **POST** /open-api/v3/inventory_batches | Creates a inventory_batches resource. |
| [**inventoryBatchApiCorporationAdd()**](InventoryBatchesApi.md#inventoryBatchApiCorporationAdd) | **POST** /open-api/v3/inventory_batches/{id}/corporation/add | Creates a inventory_batches resource. |
| [**inventoryBatchApiCorporationRemove()**](InventoryBatchesApi.md#inventoryBatchApiCorporationRemove) | **POST** /open-api/v3/inventory_batches/{id}/corporation/remove | Creates a inventory_batches resource. |
| [**inventoryBatchApiFileUpload()**](InventoryBatchesApi.md#inventoryBatchApiFileUpload) | **POST** /open-api/v3/inventory_batches/{id}/file/upload | Creates a inventory_batches resource. |
| [**inventoryBatchDropDown()**](InventoryBatchesApi.md#inventoryBatchDropDown) | **GET** /open-api/v3/inventory_batches/dropdown/get | Retrieves the collection of inventory_batches resources. |
| [**inventoryBatchDuplicate()**](InventoryBatchesApi.md#inventoryBatchDuplicate) | **GET** /open-api/v3/inventory_batches/duplicate/{id} | Retrieves a inventory_batches resource. |
| [**inventoryBatchFetchFiles()**](InventoryBatchesApi.md#inventoryBatchFetchFiles) | **GET** /open-api/v3/inventory_batches/fetch_files/{id} | Retrieves a inventory_batches resource. |
| [**inventoryBatchGetBySlug()**](InventoryBatchesApi.md#inventoryBatchGetBySlug) | **GET** /open-api/v3/inventory_batches/by_slug/{slug} | Retrieves a inventory_batches resource. |
| [**inventoryBatchGetDeleteRelations()**](InventoryBatchesApi.md#inventoryBatchGetDeleteRelations) | **GET** /open-api/v3/inventory_batches/get_delete_relations/{id} | Retrieves a inventory_batches resource. |
| [**ivnentoryBatchMetadata()**](InventoryBatchesApi.md#ivnentoryBatchMetadata) | **GET** /open-api/v3/inventory_batches/metadata/{id} | Retrieves a inventory_batches resource. |


## `apiInventoryBatchesGetCollection()`

```php
apiInventoryBatchesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $tracking_number, $tracking_number2, $shipment, $shipment2, $invoice, $invoice2, $bill, $bill2, $search, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $weight_between, $weight_gt, $weight_gte, $weight_lt, $weight_lte, $dimension_w_between, $dimension_w_gt, $dimension_w_gte, $dimension_w_lt, $dimension_w_lte, $dimension_h_between, $dimension_h_gt, $dimension_h_gte, $dimension_h_lt, $dimension_h_lte, $dimension_d_between, $dimension_d_gt, $dimension_d_gte, $dimension_d_lt, $dimension_d_lte, $exists_notes, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $order_id, $order_created_at, $order_updated_at, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $tracking_number_partial, $tracking_number_start_with, $tracking_number_end_with, $physical_identifier_partial, $physical_identifier_start_with, $physical_identifier_end_with): \OpenAPI\Client\Model\ApiInventoryBatchesGetCollection200Response
```

Retrieves the collection of inventory_batches resources.

Retrieves the collection of inventory_batches resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
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
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$tracking_number = 'tracking_number_example'; // string | 
$tracking_number2 = array('tracking_number_example'); // string[] | 
$shipment = 'shipment_example'; // string | 
$shipment2 = array('shipment_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$search = 'search_example'; // string | 
$weight = 'weight_example'; // string | 
$weight2 = array('weight_example'); // string[] | 
$dimension_w = 'dimension_w_example'; // string | 
$dimension_w2 = array('dimension_w_example'); // string[] | 
$dimension_h = 'dimension_h_example'; // string | 
$dimension_h2 = array('dimension_h_example'); // string[] | 
$dimension_d = 'dimension_d_example'; // string | 
$dimension_d2 = array('dimension_d_example'); // string[] | 
$weight_between = 'weight_between_example'; // string | 
$weight_gt = 'weight_gt_example'; // string | 
$weight_gte = 'weight_gte_example'; // string | 
$weight_lt = 'weight_lt_example'; // string | 
$weight_lte = 'weight_lte_example'; // string | 
$dimension_w_between = 'dimension_w_between_example'; // string | 
$dimension_w_gt = 'dimension_w_gt_example'; // string | 
$dimension_w_gte = 'dimension_w_gte_example'; // string | 
$dimension_w_lt = 'dimension_w_lt_example'; // string | 
$dimension_w_lte = 'dimension_w_lte_example'; // string | 
$dimension_h_between = 'dimension_h_between_example'; // string | 
$dimension_h_gt = 'dimension_h_gt_example'; // string | 
$dimension_h_gte = 'dimension_h_gte_example'; // string | 
$dimension_h_lt = 'dimension_h_lt_example'; // string | 
$dimension_h_lte = 'dimension_h_lte_example'; // string | 
$dimension_d_between = 'dimension_d_between_example'; // string | 
$dimension_d_gt = 'dimension_d_gt_example'; // string | 
$dimension_d_gte = 'dimension_d_gte_example'; // string | 
$dimension_d_lt = 'dimension_d_lt_example'; // string | 
$dimension_d_lte = 'dimension_d_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_tracking_number = True; // bool | 
$exists_physical_identifier = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_weight = 'order_weight_example'; // string | 
$order_dimension_w = 'order_dimension_w_example'; // string | 
$order_dimension_h = 'order_dimension_h_example'; // string | 
$order_dimension_d = 'order_dimension_d_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | inventory_batches slug_partial
$slug_start_with = 'slug_start_with_example'; // string | inventory_batches slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | inventory_batches slug_end_with
$id_partial = 'id_partial_example'; // string | inventory_batches id_partial
$id_start_with = 'id_start_with_example'; // string | inventory_batches id_start_with
$id_end_with = 'id_end_with_example'; // string | inventory_batches id_end_with
$tracking_number_partial = 'tracking_number_partial_example'; // string | inventory_batches trackingNumber_partial
$tracking_number_start_with = 'tracking_number_start_with_example'; // string | inventory_batches trackingNumber_start_with
$tracking_number_end_with = 'tracking_number_end_with_example'; // string | inventory_batches trackingNumber_end_with
$physical_identifier_partial = 'physical_identifier_partial_example'; // string | inventory_batches physicalIdentifier_partial
$physical_identifier_start_with = 'physical_identifier_start_with_example'; // string | inventory_batches physicalIdentifier_start_with
$physical_identifier_end_with = 'physical_identifier_end_with_example'; // string | inventory_batches physicalIdentifier_end_with

try {
    $result = $apiInstance->apiInventoryBatchesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $tracking_number, $tracking_number2, $shipment, $shipment2, $invoice, $invoice2, $bill, $bill2, $search, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $weight_between, $weight_gt, $weight_gte, $weight_lt, $weight_lte, $dimension_w_between, $dimension_w_gt, $dimension_w_gte, $dimension_w_lt, $dimension_w_lte, $dimension_h_between, $dimension_h_gt, $dimension_h_gte, $dimension_h_lt, $dimension_h_lte, $dimension_d_between, $dimension_d_gt, $dimension_d_gte, $dimension_d_lt, $dimension_d_lte, $exists_notes, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $order_id, $order_created_at, $order_updated_at, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $tracking_number_partial, $tracking_number_start_with, $tracking_number_end_with, $physical_identifier_partial, $physical_identifier_start_with, $physical_identifier_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->apiInventoryBatchesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **tracking_number** | **string**|  | [optional] |
| **tracking_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipment** | **string**|  | [optional] |
| **shipment2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **weight** | **string**|  | [optional] |
| **weight2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_w** | **string**|  | [optional] |
| **dimension_w2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_h** | **string**|  | [optional] |
| **dimension_h2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_d** | **string**|  | [optional] |
| **dimension_d2** | [**string[]**](../Model/string.md)|  | [optional] |
| **weight_between** | **string**|  | [optional] |
| **weight_gt** | **string**|  | [optional] |
| **weight_gte** | **string**|  | [optional] |
| **weight_lt** | **string**|  | [optional] |
| **weight_lte** | **string**|  | [optional] |
| **dimension_w_between** | **string**|  | [optional] |
| **dimension_w_gt** | **string**|  | [optional] |
| **dimension_w_gte** | **string**|  | [optional] |
| **dimension_w_lt** | **string**|  | [optional] |
| **dimension_w_lte** | **string**|  | [optional] |
| **dimension_h_between** | **string**|  | [optional] |
| **dimension_h_gt** | **string**|  | [optional] |
| **dimension_h_gte** | **string**|  | [optional] |
| **dimension_h_lt** | **string**|  | [optional] |
| **dimension_h_lte** | **string**|  | [optional] |
| **dimension_d_between** | **string**|  | [optional] |
| **dimension_d_gt** | **string**|  | [optional] |
| **dimension_d_gte** | **string**|  | [optional] |
| **dimension_d_lt** | **string**|  | [optional] |
| **dimension_d_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_tracking_number** | **bool**|  | [optional] |
| **exists_physical_identifier** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_weight** | **string**|  | [optional] |
| **order_dimension_w** | **string**|  | [optional] |
| **order_dimension_h** | **string**|  | [optional] |
| **order_dimension_d** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| inventory_batches slug_partial | [optional] |
| **slug_start_with** | **string**| inventory_batches slug_start_with | [optional] |
| **slug_end_with** | **string**| inventory_batches slug_end_with | [optional] |
| **id_partial** | **string**| inventory_batches id_partial | [optional] |
| **id_start_with** | **string**| inventory_batches id_start_with | [optional] |
| **id_end_with** | **string**| inventory_batches id_end_with | [optional] |
| **tracking_number_partial** | **string**| inventory_batches trackingNumber_partial | [optional] |
| **tracking_number_start_with** | **string**| inventory_batches trackingNumber_start_with | [optional] |
| **tracking_number_end_with** | **string**| inventory_batches trackingNumber_end_with | [optional] |
| **physical_identifier_partial** | **string**| inventory_batches physicalIdentifier_partial | [optional] |
| **physical_identifier_start_with** | **string**| inventory_batches physicalIdentifier_start_with | [optional] |
| **physical_identifier_end_with** | **string**| inventory_batches physicalIdentifier_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInventoryBatchesGetCollection200Response**](../Model/ApiInventoryBatchesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInventoryBatchesIdDelete()`

```php
apiInventoryBatchesIdDelete($id)
```

Removes the inventory_batches resource.

Removes the inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier

try {
    $apiInstance->apiInventoryBatchesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->apiInventoryBatchesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |

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

## `apiInventoryBatchesIdGet()`

```php
apiInventoryBatchesIdGet($id): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a inventory_batches resource.

Retrieves a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier

try {
    $result = $apiInstance->apiInventoryBatchesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->apiInventoryBatchesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](../Model/InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInventoryBatchesIdPut()`

```php
apiInventoryBatchesIdPut($id, $inventory_batches_jsonld_add_post): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the inventory_batches resource.

Replaces the inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier
$inventory_batches_jsonld_add_post = new \OpenAPI\Client\Model\InventoryBatchesJsonldAddPost(); // \OpenAPI\Client\Model\InventoryBatchesJsonldAddPost | The updated inventory_batches resource

try {
    $result = $apiInstance->apiInventoryBatchesIdPut($id, $inventory_batches_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->apiInventoryBatchesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |
| **inventory_batches_jsonld_add_post** | [**\OpenAPI\Client\Model\InventoryBatchesJsonldAddPost**](../Model/InventoryBatchesJsonldAddPost.md)| The updated inventory_batches resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryBatchesJsonldInventoryBatchShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInventoryBatchesPost()`

```php
apiInventoryBatchesPost($inventory_batches_jsonld_add_post): \OpenAPI\Client\Model\InventoryBatchesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a inventory_batches resource.

Creates a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_batches_jsonld_add_post = new \OpenAPI\Client\Model\InventoryBatchesJsonldAddPost(); // \OpenAPI\Client\Model\InventoryBatchesJsonldAddPost | The new inventory_batches resource

try {
    $result = $apiInstance->apiInventoryBatchesPost($inventory_batches_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->apiInventoryBatchesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inventory_batches_jsonld_add_post** | [**\OpenAPI\Client\Model\InventoryBatchesJsonldAddPost**](../Model/InventoryBatchesJsonldAddPost.md)| The new inventory_batches resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/InventoryBatchesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchApiCorporationAdd()`

```php
inventoryBatchApiCorporationAdd($id, $inventory_batches_jsonld): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow
```

Creates a inventory_batches resource.

Creates a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier
$inventory_batches_jsonld = new \OpenAPI\Client\Model\InventoryBatchesJsonld(); // \OpenAPI\Client\Model\InventoryBatchesJsonld | The new inventory_batches resource

try {
    $result = $apiInstance->inventoryBatchApiCorporationAdd($id, $inventory_batches_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |
| **inventory_batches_jsonld** | [**\OpenAPI\Client\Model\InventoryBatchesJsonld**](../Model/InventoryBatchesJsonld.md)| The new inventory_batches resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](../Model/InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchApiCorporationRemove()`

```php
inventoryBatchApiCorporationRemove($id, $inventory_batches_jsonld): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow
```

Creates a inventory_batches resource.

Creates a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier
$inventory_batches_jsonld = new \OpenAPI\Client\Model\InventoryBatchesJsonld(); // \OpenAPI\Client\Model\InventoryBatchesJsonld | The new inventory_batches resource

try {
    $result = $apiInstance->inventoryBatchApiCorporationRemove($id, $inventory_batches_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |
| **inventory_batches_jsonld** | [**\OpenAPI\Client\Model\InventoryBatchesJsonld**](../Model/InventoryBatchesJsonld.md)| The new inventory_batches resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](../Model/InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchApiFileUpload()`

```php
inventoryBatchApiFileUpload($id, $inventory_batches_jsonld): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow
```

Creates a inventory_batches resource.

Creates a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier
$inventory_batches_jsonld = new \OpenAPI\Client\Model\InventoryBatchesJsonld(); // \OpenAPI\Client\Model\InventoryBatchesJsonld | The new inventory_batches resource

try {
    $result = $apiInstance->inventoryBatchApiFileUpload($id, $inventory_batches_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |
| **inventory_batches_jsonld** | [**\OpenAPI\Client\Model\InventoryBatchesJsonld**](../Model/InventoryBatchesJsonld.md)| The new inventory_batches resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow**](../Model/InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchDropDown()`

```php
inventoryBatchDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $tracking_number, $tracking_number2, $shipment, $shipment2, $invoice, $invoice2, $bill, $bill2, $search, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $weight_between, $weight_gt, $weight_gte, $weight_lt, $weight_lte, $dimension_w_between, $dimension_w_gt, $dimension_w_gte, $dimension_w_lt, $dimension_w_lte, $dimension_h_between, $dimension_h_gt, $dimension_h_gte, $dimension_h_lt, $dimension_h_lte, $dimension_d_between, $dimension_d_gt, $dimension_d_gte, $dimension_d_lt, $dimension_d_lte, $exists_notes, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $order_id, $order_created_at, $order_updated_at, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $properties, $enabled, $tag): \OpenAPI\Client\Model\InventoryBatchDropDown200Response
```

Retrieves the collection of inventory_batches resources.

Retrieves the collection of inventory_batches resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
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
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$tracking_number = 'tracking_number_example'; // string | 
$tracking_number2 = array('tracking_number_example'); // string[] | 
$shipment = 'shipment_example'; // string | 
$shipment2 = array('shipment_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$search = 'search_example'; // string | 
$weight = 'weight_example'; // string | 
$weight2 = array('weight_example'); // string[] | 
$dimension_w = 'dimension_w_example'; // string | 
$dimension_w2 = array('dimension_w_example'); // string[] | 
$dimension_h = 'dimension_h_example'; // string | 
$dimension_h2 = array('dimension_h_example'); // string[] | 
$dimension_d = 'dimension_d_example'; // string | 
$dimension_d2 = array('dimension_d_example'); // string[] | 
$weight_between = 'weight_between_example'; // string | 
$weight_gt = 'weight_gt_example'; // string | 
$weight_gte = 'weight_gte_example'; // string | 
$weight_lt = 'weight_lt_example'; // string | 
$weight_lte = 'weight_lte_example'; // string | 
$dimension_w_between = 'dimension_w_between_example'; // string | 
$dimension_w_gt = 'dimension_w_gt_example'; // string | 
$dimension_w_gte = 'dimension_w_gte_example'; // string | 
$dimension_w_lt = 'dimension_w_lt_example'; // string | 
$dimension_w_lte = 'dimension_w_lte_example'; // string | 
$dimension_h_between = 'dimension_h_between_example'; // string | 
$dimension_h_gt = 'dimension_h_gt_example'; // string | 
$dimension_h_gte = 'dimension_h_gte_example'; // string | 
$dimension_h_lt = 'dimension_h_lt_example'; // string | 
$dimension_h_lte = 'dimension_h_lte_example'; // string | 
$dimension_d_between = 'dimension_d_between_example'; // string | 
$dimension_d_gt = 'dimension_d_gt_example'; // string | 
$dimension_d_gte = 'dimension_d_gte_example'; // string | 
$dimension_d_lt = 'dimension_d_lt_example'; // string | 
$dimension_d_lte = 'dimension_d_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_tracking_number = True; // bool | 
$exists_physical_identifier = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_weight = 'order_weight_example'; // string | 
$order_dimension_w = 'order_dimension_w_example'; // string | 
$order_dimension_h = 'order_dimension_h_example'; // string | 
$order_dimension_d = 'order_dimension_d_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->inventoryBatchDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $tracking_number, $tracking_number2, $shipment, $shipment2, $invoice, $invoice2, $bill, $bill2, $search, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $weight_between, $weight_gt, $weight_gte, $weight_lt, $weight_lte, $dimension_w_between, $dimension_w_gt, $dimension_w_gte, $dimension_w_lt, $dimension_w_lte, $dimension_h_between, $dimension_h_gt, $dimension_h_gte, $dimension_h_lt, $dimension_h_lte, $dimension_d_between, $dimension_d_gt, $dimension_d_gte, $dimension_d_lt, $dimension_d_lte, $exists_notes, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $order_id, $order_created_at, $order_updated_at, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchDropDown: ', $e->getMessage(), PHP_EOL;
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
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **tracking_number** | **string**|  | [optional] |
| **tracking_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipment** | **string**|  | [optional] |
| **shipment2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **weight** | **string**|  | [optional] |
| **weight2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_w** | **string**|  | [optional] |
| **dimension_w2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_h** | **string**|  | [optional] |
| **dimension_h2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_d** | **string**|  | [optional] |
| **dimension_d2** | [**string[]**](../Model/string.md)|  | [optional] |
| **weight_between** | **string**|  | [optional] |
| **weight_gt** | **string**|  | [optional] |
| **weight_gte** | **string**|  | [optional] |
| **weight_lt** | **string**|  | [optional] |
| **weight_lte** | **string**|  | [optional] |
| **dimension_w_between** | **string**|  | [optional] |
| **dimension_w_gt** | **string**|  | [optional] |
| **dimension_w_gte** | **string**|  | [optional] |
| **dimension_w_lt** | **string**|  | [optional] |
| **dimension_w_lte** | **string**|  | [optional] |
| **dimension_h_between** | **string**|  | [optional] |
| **dimension_h_gt** | **string**|  | [optional] |
| **dimension_h_gte** | **string**|  | [optional] |
| **dimension_h_lt** | **string**|  | [optional] |
| **dimension_h_lte** | **string**|  | [optional] |
| **dimension_d_between** | **string**|  | [optional] |
| **dimension_d_gt** | **string**|  | [optional] |
| **dimension_d_gte** | **string**|  | [optional] |
| **dimension_d_lt** | **string**|  | [optional] |
| **dimension_d_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_tracking_number** | **bool**|  | [optional] |
| **exists_physical_identifier** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_weight** | **string**|  | [optional] |
| **order_dimension_w** | **string**|  | [optional] |
| **order_dimension_h** | **string**|  | [optional] |
| **order_dimension_d** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchDropDown200Response**](../Model/InventoryBatchDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchDuplicate()`

```php
inventoryBatchDuplicate($id): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingList
```

Retrieves a inventory_batches resource.

Retrieves a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier

try {
    $result = $apiInstance->inventoryBatchDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingList**](../Model/InventoryBatchesJsonldInventoryBatchShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchFetchFiles()`

```php
inventoryBatchFetchFiles($id): \OpenAPI\Client\Model\InventoryBatchesJsonld
```

Retrieves a inventory_batches resource.

Retrieves a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier

try {
    $result = $apiInstance->inventoryBatchFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonld**](../Model/InventoryBatchesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchGetBySlug()`

```php
inventoryBatchGetBySlug($slug): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a inventory_batches resource.

Retrieves a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | inventory_batches identifier

try {
    $result = $apiInstance->inventoryBatchGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| inventory_batches identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchShowIdCustomPropertyTimestampableTagTaggingList**](../Model/InventoryBatchesJsonldInventoryBatchShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryBatchGetDeleteRelations()`

```php
inventoryBatchGetDeleteRelations($id): \OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchRelations
```

Retrieves a inventory_batches resource.

Retrieves a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier

try {
    $result = $apiInstance->inventoryBatchGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->inventoryBatchGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldInventoryBatchRelations**](../Model/InventoryBatchesJsonldInventoryBatchRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ivnentoryBatchMetadata()`

```php
ivnentoryBatchMetadata($id): \OpenAPI\Client\Model\InventoryBatchesJsonldIdStandardMetadataInventoryBatchMetadataTagTaggingListInventoryBatchRelationsTimestampable
```

Retrieves a inventory_batches resource.

Retrieves a inventory_batches resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_batches identifier

try {
    $result = $apiInstance->ivnentoryBatchMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchesApi->ivnentoryBatchMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_batches identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryBatchesJsonldIdStandardMetadataInventoryBatchMetadataTagTaggingListInventoryBatchRelationsTimestampable**](../Model/InventoryBatchesJsonldIdStandardMetadataInventoryBatchMetadataTagTaggingListInventoryBatchRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
