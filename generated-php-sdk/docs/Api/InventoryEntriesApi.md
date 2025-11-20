# OpenAPI\Client\InventoryEntriesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInventoryEntriesGetCollection()**](InventoryEntriesApi.md#apiInventoryEntriesGetCollection) | **GET** /open-api/v3/inventory_entries | Retrieves the collection of inventory_entries resources. |
| [**apiInventoryEntriesIdDelete()**](InventoryEntriesApi.md#apiInventoryEntriesIdDelete) | **DELETE** /open-api/v3/inventory_entries/{id} | Removes the inventory_entries resource. |
| [**apiInventoryEntriesIdGet()**](InventoryEntriesApi.md#apiInventoryEntriesIdGet) | **GET** /open-api/v3/inventory_entries/{id} | Retrieves a inventory_entries resource. |
| [**apiInventoryEntriesIdPut()**](InventoryEntriesApi.md#apiInventoryEntriesIdPut) | **PUT** /open-api/v3/inventory_entries/{id} | Replaces the inventory_entries resource. |
| [**apiInventoryEntriesPost()**](InventoryEntriesApi.md#apiInventoryEntriesPost) | **POST** /open-api/v3/inventory_entries | Creates a inventory_entries resource. |
| [**inventoryEntryApiCorporationAdd()**](InventoryEntriesApi.md#inventoryEntryApiCorporationAdd) | **POST** /open-api/v3/inventory_entries/{id}/corporation/add | Creates a inventory_entries resource. |
| [**inventoryEntryApiCorporationRemove()**](InventoryEntriesApi.md#inventoryEntryApiCorporationRemove) | **POST** /open-api/v3/inventory_entries/{id}/corporation/remove | Creates a inventory_entries resource. |
| [**inventoryEntryApiFileUpload()**](InventoryEntriesApi.md#inventoryEntryApiFileUpload) | **POST** /open-api/v3/inventory_entries/{id}/file/upload | Creates a inventory_entries resource. |
| [**inventoryEntryDropDown()**](InventoryEntriesApi.md#inventoryEntryDropDown) | **GET** /open-api/v3/inventory_entries/dropdown/get | Retrieves the collection of inventory_entries resources. |
| [**inventoryEntryDuplicate()**](InventoryEntriesApi.md#inventoryEntryDuplicate) | **GET** /open-api/v3/inventory_entries/duplicate/{id} | Retrieves a inventory_entries resource. |
| [**inventoryEntryFetchFiles()**](InventoryEntriesApi.md#inventoryEntryFetchFiles) | **GET** /open-api/v3/inventory_entries/fetch_files/{id} | Retrieves a inventory_entries resource. |
| [**inventoryEntryGetBySlug()**](InventoryEntriesApi.md#inventoryEntryGetBySlug) | **GET** /open-api/v3/inventory_entries/by_slug/{slug} | Retrieves a inventory_entries resource. |
| [**inventoryEntryGetDeleteRelations()**](InventoryEntriesApi.md#inventoryEntryGetDeleteRelations) | **GET** /open-api/v3/inventory_entries/get_delete_relations/{id} | Retrieves a inventory_entries resource. |
| [**ivnentoryEntryMetadata()**](InventoryEntriesApi.md#ivnentoryEntryMetadata) | **GET** /open-api/v3/inventory_entries/metadata/{id} | Retrieves a inventory_entries resource. |


## `apiInventoryEntriesGetCollection()`

```php
apiInventoryEntriesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $bill, $bill2, $invoice, $invoice2, $task, $task2, $person, $person2, $product, $product2, $search, $number, $number2, $properties, $enabled, $tag, $exists_notes, $exists_custom_properties, $exists_transfer_entry_id, $exists_scan, $order_id, $order_created_at, $order_updated_at, $order_number, $order_timestamp, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_range): \OpenAPI\Client\Model\ApiInventoryEntriesGetCollection200Response
```

Retrieves the collection of inventory_entries resources.

Retrieves the collection of inventory_entries resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
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
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$search = 'search_example'; // string | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_transfer_entry_id = True; // bool | 
$exists_scan = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_number = 'order_number_example'; // string | 
$order_timestamp = 'order_timestamp_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | inventory_entries slug_partial
$slug_start_with = 'slug_start_with_example'; // string | inventory_entries slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | inventory_entries slug_end_with
$id_partial = 'id_partial_example'; // string | inventory_entries id_partial
$id_start_with = 'id_start_with_example'; // string | inventory_entries id_start_with
$id_end_with = 'id_end_with_example'; // string | inventory_entries id_end_with
$number_range = 'number_range_example'; // string | inventory_entries number_range

try {
    $result = $apiInstance->apiInventoryEntriesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $bill, $bill2, $invoice, $invoice2, $task, $task2, $person, $person2, $product, $product2, $search, $number, $number2, $properties, $enabled, $tag, $exists_notes, $exists_custom_properties, $exists_transfer_entry_id, $exists_scan, $order_id, $order_created_at, $order_updated_at, $order_number, $order_timestamp, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->apiInventoryEntriesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_transfer_entry_id** | **bool**|  | [optional] |
| **exists_scan** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_number** | **string**|  | [optional] |
| **order_timestamp** | **string**|  | [optional] |
| **slug_partial** | **string**| inventory_entries slug_partial | [optional] |
| **slug_start_with** | **string**| inventory_entries slug_start_with | [optional] |
| **slug_end_with** | **string**| inventory_entries slug_end_with | [optional] |
| **id_partial** | **string**| inventory_entries id_partial | [optional] |
| **id_start_with** | **string**| inventory_entries id_start_with | [optional] |
| **id_end_with** | **string**| inventory_entries id_end_with | [optional] |
| **number_range** | **string**| inventory_entries number_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInventoryEntriesGetCollection200Response**](../Model/ApiInventoryEntriesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInventoryEntriesIdDelete()`

```php
apiInventoryEntriesIdDelete($id)
```

Removes the inventory_entries resource.

Removes the inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier

try {
    $apiInstance->apiInventoryEntriesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->apiInventoryEntriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |

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

## `apiInventoryEntriesIdGet()`

```php
apiInventoryEntriesIdGet($id): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a inventory_entries resource.

Retrieves a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier

try {
    $result = $apiInstance->apiInventoryEntriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->apiInventoryEntriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInventoryEntriesIdPut()`

```php
apiInventoryEntriesIdPut($id, $inventory_entries_jsonld_add_post): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the inventory_entries resource.

Replaces the inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier
$inventory_entries_jsonld_add_post = new \OpenAPI\Client\Model\InventoryEntriesJsonldAddPost(); // \OpenAPI\Client\Model\InventoryEntriesJsonldAddPost | The updated inventory_entries resource

try {
    $result = $apiInstance->apiInventoryEntriesIdPut($id, $inventory_entries_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->apiInventoryEntriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |
| **inventory_entries_jsonld_add_post** | [**\OpenAPI\Client\Model\InventoryEntriesJsonldAddPost**](../Model/InventoryEntriesJsonldAddPost.md)| The updated inventory_entries resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInventoryEntriesPost()`

```php
apiInventoryEntriesPost($inventory_entries_jsonld_add_post): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a inventory_entries resource.

Creates a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_entries_jsonld_add_post = new \OpenAPI\Client\Model\InventoryEntriesJsonldAddPost(); // \OpenAPI\Client\Model\InventoryEntriesJsonldAddPost | The new inventory_entries resource

try {
    $result = $apiInstance->apiInventoryEntriesPost($inventory_entries_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->apiInventoryEntriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inventory_entries_jsonld_add_post** | [**\OpenAPI\Client\Model\InventoryEntriesJsonldAddPost**](../Model/InventoryEntriesJsonldAddPost.md)| The new inventory_entries resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryApiCorporationAdd()`

```php
inventoryEntryApiCorporationAdd($id, $inventory_entries_jsonld): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowIdTimestampableTagTaggingListStandardShow
```

Creates a inventory_entries resource.

Creates a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier
$inventory_entries_jsonld = new \OpenAPI\Client\Model\InventoryEntriesJsonld(); // \OpenAPI\Client\Model\InventoryEntriesJsonld | The new inventory_entries resource

try {
    $result = $apiInstance->inventoryEntryApiCorporationAdd($id, $inventory_entries_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |
| **inventory_entries_jsonld** | [**\OpenAPI\Client\Model\InventoryEntriesJsonld**](../Model/InventoryEntriesJsonld.md)| The new inventory_entries resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowIdTimestampableTagTaggingListStandardShow**](../Model/InventoryEntriesJsonldInventoryEntryShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryApiCorporationRemove()`

```php
inventoryEntryApiCorporationRemove($id, $inventory_entries_jsonld): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a inventory_entries resource.

Creates a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier
$inventory_entries_jsonld = new \OpenAPI\Client\Model\InventoryEntriesJsonld(); // \OpenAPI\Client\Model\InventoryEntriesJsonld | The new inventory_entries resource

try {
    $result = $apiInstance->inventoryEntryApiCorporationRemove($id, $inventory_entries_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |
| **inventory_entries_jsonld** | [**\OpenAPI\Client\Model\InventoryEntriesJsonld**](../Model/InventoryEntriesJsonld.md)| The new inventory_entries resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryApiFileUpload()`

```php
inventoryEntryApiFileUpload($id, $inventory_entries_jsonld): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a inventory_entries resource.

Creates a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier
$inventory_entries_jsonld = new \OpenAPI\Client\Model\InventoryEntriesJsonld(); // \OpenAPI\Client\Model\InventoryEntriesJsonld | The new inventory_entries resource

try {
    $result = $apiInstance->inventoryEntryApiFileUpload($id, $inventory_entries_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |
| **inventory_entries_jsonld** | [**\OpenAPI\Client\Model\InventoryEntriesJsonld**](../Model/InventoryEntriesJsonld.md)| The new inventory_entries resource | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryDropDown()`

```php
inventoryEntryDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $bill, $bill2, $invoice, $invoice2, $task, $task2, $person, $person2, $product, $product2, $search, $number, $number2, $properties, $enabled, $tag, $exists_notes, $exists_custom_properties, $exists_transfer_entry_id, $exists_scan, $order_id, $order_created_at, $order_updated_at, $order_number, $order_timestamp): \OpenAPI\Client\Model\InventoryEntryDropDown200Response
```

Retrieves the collection of inventory_entries resources.

Retrieves the collection of inventory_entries resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
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
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$search = 'search_example'; // string | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_transfer_entry_id = True; // bool | 
$exists_scan = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_number = 'order_number_example'; // string | 
$order_timestamp = 'order_timestamp_example'; // string | 

try {
    $result = $apiInstance->inventoryEntryDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $bill, $bill2, $invoice, $invoice2, $task, $task2, $person, $person2, $product, $product2, $search, $number, $number2, $properties, $enabled, $tag, $exists_notes, $exists_custom_properties, $exists_transfer_entry_id, $exists_scan, $order_id, $order_created_at, $order_updated_at, $order_number, $order_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryDropDown: ', $e->getMessage(), PHP_EOL;
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
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_transfer_entry_id** | **bool**|  | [optional] |
| **exists_scan** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_number** | **string**|  | [optional] |
| **order_timestamp** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InventoryEntryDropDown200Response**](../Model/InventoryEntryDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryDuplicate()`

```php
inventoryEntryDuplicate($id): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a inventory_entries resource.

Retrieves a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier

try {
    $result = $apiInstance->inventoryEntryDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryFetchFiles()`

```php
inventoryEntryFetchFiles($id): \OpenAPI\Client\Model\InventoryEntriesJsonld
```

Retrieves a inventory_entries resource.

Retrieves a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier

try {
    $result = $apiInstance->inventoryEntryFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonld**](../Model/InventoryEntriesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryGetBySlug()`

```php
inventoryEntryGetBySlug($slug): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a inventory_entries resource.

Retrieves a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | inventory_entries identifier

try {
    $result = $apiInstance->inventoryEntryGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| inventory_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InventoryEntriesJsonldInventoryEntryShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryEntryGetDeleteRelations()`

```php
inventoryEntryGetDeleteRelations($id): \OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryRelations
```

Retrieves a inventory_entries resource.

Retrieves a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier

try {
    $result = $apiInstance->inventoryEntryGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->inventoryEntryGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldInventoryEntryRelations**](../Model/InventoryEntriesJsonldInventoryEntryRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ivnentoryEntryMetadata()`

```php
ivnentoryEntryMetadata($id): \OpenAPI\Client\Model\InventoryEntriesJsonldIdStandardMetadataInventoryEntryMetadataTagTaggingListInventoryEntryRelationsTimestampable
```

Retrieves a inventory_entries resource.

Retrieves a inventory_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | inventory_entries identifier

try {
    $result = $apiInstance->ivnentoryEntryMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryEntriesApi->ivnentoryEntryMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| inventory_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\InventoryEntriesJsonldIdStandardMetadataInventoryEntryMetadataTagTaggingListInventoryEntryRelationsTimestampable**](../Model/InventoryEntriesJsonldIdStandardMetadataInventoryEntryMetadataTagTaggingListInventoryEntryRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
