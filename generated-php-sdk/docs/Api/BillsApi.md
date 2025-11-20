# OpenAPI\Client\BillsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillsGetCollection()**](BillsApi.md#apiBillsGetCollection) | **GET** /open-api/v3/bills | Retrieves the collection of bills resources. |
| [**apiBillsIdDelete()**](BillsApi.md#apiBillsIdDelete) | **DELETE** /open-api/v3/bills/{id} | Removes the bills resource. |
| [**apiBillsIdGet()**](BillsApi.md#apiBillsIdGet) | **GET** /open-api/v3/bills/{id} | Retrieves a bills resource. |
| [**apiBillsIdPut()**](BillsApi.md#apiBillsIdPut) | **PUT** /open-api/v3/bills/{id} | Replaces the bills resource. |
| [**apiBillsPost()**](BillsApi.md#apiBillsPost) | **POST** /open-api/v3/bills | Creates a bills resource. |
| [**billApiApplyDiscount()**](BillsApi.md#billApiApplyDiscount) | **POST** /open-api/v3/bills/{id}/apply_discount | Creates a bills resource. |
| [**billApiCorporationAdd()**](BillsApi.md#billApiCorporationAdd) | **POST** /open-api/v3/bills/{id}/corporation/add | Creates a bills resource. |
| [**billApiCorporationRemove()**](BillsApi.md#billApiCorporationRemove) | **POST** /open-api/v3/bills/{id}/corporation/remove | Creates a bills resource. |
| [**billApiFileUpload()**](BillsApi.md#billApiFileUpload) | **POST** /open-api/v3/bills/{id}/file/upload | Creates a bills resource. |
| [**billApiGenerateInventory()**](BillsApi.md#billApiGenerateInventory) | **POST** /open-api/v3/bills/{id}/generate_inventory | Creates a bills resource. |
| [**billApiPurchasesReportListing()**](BillsApi.md#billApiPurchasesReportListing) | **GET** /open-api/v3/bills/purchases/report/listing | Retrieves the collection of bills resources. |
| [**billApiPurchasesReportSummary()**](BillsApi.md#billApiPurchasesReportSummary) | **GET** /open-api/v3/bills/purchases/report/summary | Retrieves the collection of bills resources. |
| [**billDropDown()**](BillsApi.md#billDropDown) | **GET** /open-api/v3/bills/dropdown/get | Retrieves the collection of bills resources. |
| [**billDuplicate()**](BillsApi.md#billDuplicate) | **GET** /open-api/v3/bills/duplicate/{id} | Retrieves a bills resource. |
| [**billFetchFiles()**](BillsApi.md#billFetchFiles) | **GET** /open-api/v3/bills/fetch_files/{id} | Retrieves a bills resource. |
| [**billGetBySlug()**](BillsApi.md#billGetBySlug) | **GET** /open-api/v3/bills/by_slug/{slug} | Retrieves a bills resource. |
| [**billGetDeleteRelations()**](BillsApi.md#billGetDeleteRelations) | **GET** /open-api/v3/bills/get_delete_relations/{id} | Retrieves a bills resource. |
| [**billLinesQuickAdd()**](BillsApi.md#billLinesQuickAdd) | **POST** /open-api/v3/bills/{id}/lines/quick_add | Creates a bills resource. |
| [**billMetadata()**](BillsApi.md#billMetadata) | **GET** /open-api/v3/bills/metadata/{id} | Retrieves a bills resource. |
| [**billOrderLines()**](BillsApi.md#billOrderLines) | **POST** /open-api/v3/bills/{id}/order_lines | Creates a bills resource. |
| [**billUpdatePrices()**](BillsApi.md#billUpdatePrices) | **POST** /open-api/v3/bills/{id}/update_prices | Creates a bills resource. |


## `apiBillsGetCollection()`

```php
apiBillsGetCollection($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_ref_partial, $supplier_ref_start_with, $supplier_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range): \OpenAPI\Client\Model\ApiBillsGetCollection200Response
```

Retrieves the collection of bills resources.

Retrieves the collection of bills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$delivery_date_before = 'delivery_date_before_example'; // string | 
$delivery_date_strictly_before = 'delivery_date_strictly_before_example'; // string | 
$delivery_date_after = 'delivery_date_after_example'; // string | 
$delivery_date_strictly_after = 'delivery_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$coordinate = 'coordinate_example'; // string | 
$coordinate2 = array('coordinate_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$payer = 'payer_example'; // string | 
$payer2 = array('payer_example'); // string[] | 
$supplier_ref = 'supplier_ref_example'; // string | 
$supplier_ref2 = array('supplier_ref_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$notes = 'notes_example'; // string | 
$notes2 = array('notes_example'); // string[] | 
$conditions = 'conditions_example'; // string | 
$conditions2 = array('conditions_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_supplier_ref = 'order_supplier_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bills slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bills slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bills slug_end_with
$id_partial = 'id_partial_example'; // string | bills id_partial
$id_start_with = 'id_start_with_example'; // string | bills id_start_with
$id_end_with = 'id_end_with_example'; // string | bills id_end_with
$supplier_ref_partial = 'supplier_ref_partial_example'; // string | bills supplierRef_partial
$supplier_ref_start_with = 'supplier_ref_start_with_example'; // string | bills supplierRef_start_with
$supplier_ref_end_with = 'supplier_ref_end_with_example'; // string | bills supplierRef_end_with
$number_partial = 'number_partial_example'; // string | bills number_partial
$number_start_with = 'number_start_with_example'; // string | bills number_start_with
$number_end_with = 'number_end_with_example'; // string | bills number_end_with
$notes_partial = 'notes_partial_example'; // string | bills notes_partial
$notes_start_with = 'notes_start_with_example'; // string | bills notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | bills notes_end_with
$conditions_partial = 'conditions_partial_example'; // string | bills conditions_partial
$conditions_start_with = 'conditions_start_with_example'; // string | bills conditions_start_with
$conditions_end_with = 'conditions_end_with_example'; // string | bills conditions_end_with
$conversion_rate_range = 'conversion_rate_range_example'; // string | bills conversionRate_range

try {
    $result = $apiInstance->apiBillsGetCollection($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_ref_partial, $supplier_ref_start_with, $supplier_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->apiBillsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **delivery_date_before** | **string**|  | [optional] |
| **delivery_date_strictly_before** | **string**|  | [optional] |
| **delivery_date_after** | **string**|  | [optional] |
| **delivery_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **coordinate** | **string**|  | [optional] |
| **coordinate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payer** | **string**|  | [optional] |
| **payer2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_ref** | **string**|  | [optional] |
| **supplier_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **notes** | **string**|  | [optional] |
| **notes2** | [**string[]**](../Model/string.md)|  | [optional] |
| **conditions** | **string**|  | [optional] |
| **conditions2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_supplier_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bills slug_partial | [optional] |
| **slug_start_with** | **string**| bills slug_start_with | [optional] |
| **slug_end_with** | **string**| bills slug_end_with | [optional] |
| **id_partial** | **string**| bills id_partial | [optional] |
| **id_start_with** | **string**| bills id_start_with | [optional] |
| **id_end_with** | **string**| bills id_end_with | [optional] |
| **supplier_ref_partial** | **string**| bills supplierRef_partial | [optional] |
| **supplier_ref_start_with** | **string**| bills supplierRef_start_with | [optional] |
| **supplier_ref_end_with** | **string**| bills supplierRef_end_with | [optional] |
| **number_partial** | **string**| bills number_partial | [optional] |
| **number_start_with** | **string**| bills number_start_with | [optional] |
| **number_end_with** | **string**| bills number_end_with | [optional] |
| **notes_partial** | **string**| bills notes_partial | [optional] |
| **notes_start_with** | **string**| bills notes_start_with | [optional] |
| **notes_end_with** | **string**| bills notes_end_with | [optional] |
| **conditions_partial** | **string**| bills conditions_partial | [optional] |
| **conditions_start_with** | **string**| bills conditions_start_with | [optional] |
| **conditions_end_with** | **string**| bills conditions_end_with | [optional] |
| **conversion_rate_range** | **string**| bills conversionRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillsGetCollection200Response**](../Model/ApiBillsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillsIdDelete()`

```php
apiBillsIdDelete($id)
```

Removes the bills resource.

Removes the bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier

try {
    $apiInstance->apiBillsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->apiBillsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |

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

## `apiBillsIdGet()`

```php
apiBillsIdGet($id): \OpenAPI\Client\Model\BillsJsonldBillShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a bills resource.

Retrieves a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier

try {
    $result = $apiInstance->apiBillsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->apiBillsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/BillsJsonldBillShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillsIdPut()`

```php
apiBillsIdPut($id, $bills_jsonld_add_post): \OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingList
```

Replaces the bills resource.

Replaces the bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld_add_post = new \OpenAPI\Client\Model\BillsJsonldAddPost(); // \OpenAPI\Client\Model\BillsJsonldAddPost | The updated bills resource

try {
    $result = $apiInstance->apiBillsIdPut($id, $bills_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->apiBillsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld_add_post** | [**\OpenAPI\Client\Model\BillsJsonldAddPost**](../Model/BillsJsonldAddPost.md)| The updated bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingList**](../Model/BillsJsonldBillShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillsPost()`

```php
apiBillsPost($bills_jsonld_add_post): \OpenAPI\Client\Model\BillsJsonldIdTimestampableTagTaggingListStandardShowBillShow
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bills_jsonld_add_post = new \OpenAPI\Client\Model\BillsJsonldAddPost(); // \OpenAPI\Client\Model\BillsJsonldAddPost | The new bills resource

try {
    $result = $apiInstance->apiBillsPost($bills_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->apiBillsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bills_jsonld_add_post** | [**\OpenAPI\Client\Model\BillsJsonldAddPost**](../Model/BillsJsonldAddPost.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldIdTimestampableTagTaggingListStandardShowBillShow**](../Model/BillsJsonldIdTimestampableTagTaggingListStandardShowBillShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billApiApplyDiscount()`

```php
billApiApplyDiscount($id, $bills_jsonld_discount): \OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld_discount = new \OpenAPI\Client\Model\BillsJsonldDiscount(); // \OpenAPI\Client\Model\BillsJsonldDiscount | The new bills resource

try {
    $result = $apiInstance->billApiApplyDiscount($id, $bills_jsonld_discount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billApiApplyDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld_discount** | [**\OpenAPI\Client\Model\BillsJsonldDiscount**](../Model/BillsJsonldDiscount.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow**](../Model/BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billApiCorporationAdd()`

```php
billApiCorporationAdd($id, $bills_jsonld): \OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld = new \OpenAPI\Client\Model\BillsJsonld(); // \OpenAPI\Client\Model\BillsJsonld | The new bills resource

try {
    $result = $apiInstance->billApiCorporationAdd($id, $bills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld** | [**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow**](../Model/BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billApiCorporationRemove()`

```php
billApiCorporationRemove($id, $bills_jsonld): \OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld = new \OpenAPI\Client\Model\BillsJsonld(); // \OpenAPI\Client\Model\BillsJsonld | The new bills resource

try {
    $result = $apiInstance->billApiCorporationRemove($id, $bills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld** | [**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow**](../Model/BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billApiFileUpload()`

```php
billApiFileUpload($id, $bills_jsonld_file_upload): \OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld_file_upload = new \OpenAPI\Client\Model\BillsJsonldFileUpload(); // \OpenAPI\Client\Model\BillsJsonldFileUpload | The new bills resource

try {
    $result = $apiInstance->billApiFileUpload($id, $bills_jsonld_file_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld_file_upload** | [**\OpenAPI\Client\Model\BillsJsonldFileUpload**](../Model/BillsJsonldFileUpload.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow**](../Model/BillsJsonldBillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billApiGenerateInventory()`

```php
billApiGenerateInventory($id, $bills_jsonld): \OpenAPI\Client\Model\BillsJsonldInventoryEntryListingIdTimestampableTagTaggingListStandardShow
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld = new \OpenAPI\Client\Model\BillsJsonld(); // \OpenAPI\Client\Model\BillsJsonld | The new bills resource

try {
    $result = $apiInstance->billApiGenerateInventory($id, $bills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billApiGenerateInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld** | [**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldInventoryEntryListingIdTimestampableTagTaggingListStandardShow**](../Model/BillsJsonldInventoryEntryListingIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billApiPurchasesReportListing()`

```php
billApiPurchasesReportListing($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\BillApiPurchasesReportListing200Response
```

Retrieves the collection of bills resources.

Retrieves the collection of bills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$delivery_date_before = 'delivery_date_before_example'; // string | 
$delivery_date_strictly_before = 'delivery_date_strictly_before_example'; // string | 
$delivery_date_after = 'delivery_date_after_example'; // string | 
$delivery_date_strictly_after = 'delivery_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$coordinate = 'coordinate_example'; // string | 
$coordinate2 = array('coordinate_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$payer = 'payer_example'; // string | 
$payer2 = array('payer_example'); // string[] | 
$supplier_ref = 'supplier_ref_example'; // string | 
$supplier_ref2 = array('supplier_ref_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$notes = 'notes_example'; // string | 
$notes2 = array('notes_example'); // string[] | 
$conditions = 'conditions_example'; // string | 
$conditions2 = array('conditions_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_supplier_ref = 'order_supplier_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->billApiPurchasesReportListing($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billApiPurchasesReportListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **delivery_date_before** | **string**|  | [optional] |
| **delivery_date_strictly_before** | **string**|  | [optional] |
| **delivery_date_after** | **string**|  | [optional] |
| **delivery_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **coordinate** | **string**|  | [optional] |
| **coordinate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payer** | **string**|  | [optional] |
| **payer2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_ref** | **string**|  | [optional] |
| **supplier_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **notes** | **string**|  | [optional] |
| **notes2** | [**string[]**](../Model/string.md)|  | [optional] |
| **conditions** | **string**|  | [optional] |
| **conditions2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_supplier_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillApiPurchasesReportListing200Response**](../Model/BillApiPurchasesReportListing200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billApiPurchasesReportSummary()`

```php
billApiPurchasesReportSummary($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\BillApiPurchasesReportSummary200Response
```

Retrieves the collection of bills resources.

Retrieves the collection of bills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$delivery_date_before = 'delivery_date_before_example'; // string | 
$delivery_date_strictly_before = 'delivery_date_strictly_before_example'; // string | 
$delivery_date_after = 'delivery_date_after_example'; // string | 
$delivery_date_strictly_after = 'delivery_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$coordinate = 'coordinate_example'; // string | 
$coordinate2 = array('coordinate_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$payer = 'payer_example'; // string | 
$payer2 = array('payer_example'); // string[] | 
$supplier_ref = 'supplier_ref_example'; // string | 
$supplier_ref2 = array('supplier_ref_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$notes = 'notes_example'; // string | 
$notes2 = array('notes_example'); // string[] | 
$conditions = 'conditions_example'; // string | 
$conditions2 = array('conditions_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_supplier_ref = 'order_supplier_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->billApiPurchasesReportSummary($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billApiPurchasesReportSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **delivery_date_before** | **string**|  | [optional] |
| **delivery_date_strictly_before** | **string**|  | [optional] |
| **delivery_date_after** | **string**|  | [optional] |
| **delivery_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **coordinate** | **string**|  | [optional] |
| **coordinate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payer** | **string**|  | [optional] |
| **payer2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_ref** | **string**|  | [optional] |
| **supplier_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **notes** | **string**|  | [optional] |
| **notes2** | [**string[]**](../Model/string.md)|  | [optional] |
| **conditions** | **string**|  | [optional] |
| **conditions2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_supplier_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillApiPurchasesReportSummary200Response**](../Model/BillApiPurchasesReportSummary200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDropDown()`

```php
billDropDown($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_ref_partial, $supplier_ref_start_with, $supplier_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $tags_partial, $tags_start_with, $tags_end_with): \OpenAPI\Client\Model\BillDropDown200Response
```

Retrieves the collection of bills resources.

Retrieves the collection of bills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$delivery_date_before = 'delivery_date_before_example'; // string | 
$delivery_date_strictly_before = 'delivery_date_strictly_before_example'; // string | 
$delivery_date_after = 'delivery_date_after_example'; // string | 
$delivery_date_strictly_after = 'delivery_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$coordinate = 'coordinate_example'; // string | 
$coordinate2 = array('coordinate_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$payer = 'payer_example'; // string | 
$payer2 = array('payer_example'); // string[] | 
$supplier_ref = 'supplier_ref_example'; // string | 
$supplier_ref2 = array('supplier_ref_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$notes = 'notes_example'; // string | 
$notes2 = array('notes_example'); // string[] | 
$conditions = 'conditions_example'; // string | 
$conditions2 = array('conditions_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_supplier_ref = 'order_supplier_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bills slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bills slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bills slug_end_with
$id_partial = 'id_partial_example'; // string | bills id_partial
$id_start_with = 'id_start_with_example'; // string | bills id_start_with
$id_end_with = 'id_end_with_example'; // string | bills id_end_with
$supplier_ref_partial = 'supplier_ref_partial_example'; // string | bills supplierRef_partial
$supplier_ref_start_with = 'supplier_ref_start_with_example'; // string | bills supplierRef_start_with
$supplier_ref_end_with = 'supplier_ref_end_with_example'; // string | bills supplierRef_end_with
$number_partial = 'number_partial_example'; // string | bills number_partial
$number_start_with = 'number_start_with_example'; // string | bills number_start_with
$number_end_with = 'number_end_with_example'; // string | bills number_end_with
$notes_partial = 'notes_partial_example'; // string | bills notes_partial
$notes_start_with = 'notes_start_with_example'; // string | bills notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | bills notes_end_with
$conditions_partial = 'conditions_partial_example'; // string | bills conditions_partial
$conditions_start_with = 'conditions_start_with_example'; // string | bills conditions_start_with
$conditions_end_with = 'conditions_end_with_example'; // string | bills conditions_end_with
$tags_partial = 'tags_partial_example'; // string | bills tags_partial
$tags_start_with = 'tags_start_with_example'; // string | bills tags_start_with
$tags_end_with = 'tags_end_with_example'; // string | bills tags_end_with

try {
    $result = $apiInstance->billDropDown($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $slug, $slug2, $supplier, $supplier2, $coordinate, $coordinate2, $employee, $employee2, $type, $type2, $status, $status2, $project, $project2, $distribution_type, $distribution_type2, $currency, $currency2, $payer, $payer2, $supplier_ref, $supplier_ref2, $number, $number2, $notes, $notes2, $conditions, $conditions2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_supplier_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_ref_partial, $supplier_ref_start_with, $supplier_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $tags_partial, $tags_start_with, $tags_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **delivery_date_before** | **string**|  | [optional] |
| **delivery_date_strictly_before** | **string**|  | [optional] |
| **delivery_date_after** | **string**|  | [optional] |
| **delivery_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **coordinate** | **string**|  | [optional] |
| **coordinate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payer** | **string**|  | [optional] |
| **payer2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_ref** | **string**|  | [optional] |
| **supplier_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **notes** | **string**|  | [optional] |
| **notes2** | [**string[]**](../Model/string.md)|  | [optional] |
| **conditions** | **string**|  | [optional] |
| **conditions2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_supplier_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bills slug_partial | [optional] |
| **slug_start_with** | **string**| bills slug_start_with | [optional] |
| **slug_end_with** | **string**| bills slug_end_with | [optional] |
| **id_partial** | **string**| bills id_partial | [optional] |
| **id_start_with** | **string**| bills id_start_with | [optional] |
| **id_end_with** | **string**| bills id_end_with | [optional] |
| **supplier_ref_partial** | **string**| bills supplierRef_partial | [optional] |
| **supplier_ref_start_with** | **string**| bills supplierRef_start_with | [optional] |
| **supplier_ref_end_with** | **string**| bills supplierRef_end_with | [optional] |
| **number_partial** | **string**| bills number_partial | [optional] |
| **number_start_with** | **string**| bills number_start_with | [optional] |
| **number_end_with** | **string**| bills number_end_with | [optional] |
| **notes_partial** | **string**| bills notes_partial | [optional] |
| **notes_start_with** | **string**| bills notes_start_with | [optional] |
| **notes_end_with** | **string**| bills notes_end_with | [optional] |
| **conditions_partial** | **string**| bills conditions_partial | [optional] |
| **conditions_start_with** | **string**| bills conditions_start_with | [optional] |
| **conditions_end_with** | **string**| bills conditions_end_with | [optional] |
| **tags_partial** | **string**| bills tags_partial | [optional] |
| **tags_start_with** | **string**| bills tags_start_with | [optional] |
| **tags_end_with** | **string**| bills tags_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillDropDown200Response**](../Model/BillDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDuplicate()`

```php
billDuplicate($id): \OpenAPI\Client\Model\BillsJsonldStandardShowBillShowIdTimestampableTagTaggingList
```

Retrieves a bills resource.

Retrieves a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier

try {
    $result = $apiInstance->billDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldStandardShowBillShowIdTimestampableTagTaggingList**](../Model/BillsJsonldStandardShowBillShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billFetchFiles()`

```php
billFetchFiles($id): \OpenAPI\Client\Model\BillsJsonld
```

Retrieves a bills resource.

Retrieves a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier

try {
    $result = $apiInstance->billFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billGetBySlug()`

```php
billGetBySlug($slug): \OpenAPI\Client\Model\BillsJsonldBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bills resource.

Retrieves a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bills identifier

try {
    $result = $apiInstance->billGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bills identifier | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillsJsonldBillShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billGetDeleteRelations()`

```php
billGetDeleteRelations($id): \OpenAPI\Client\Model\BillsJsonldBillRelations
```

Retrieves a bills resource.

Retrieves a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier

try {
    $result = $apiInstance->billGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillRelations**](../Model/BillsJsonldBillRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLinesQuickAdd()`

```php
billLinesQuickAdd($id, $bills_jsonld): \OpenAPI\Client\Model\BillsJsonld
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld = new \OpenAPI\Client\Model\BillsJsonld(); // \OpenAPI\Client\Model\BillsJsonld | The new bills resource

try {
    $result = $apiInstance->billLinesQuickAdd($id, $bills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billLinesQuickAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld** | [**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billMetadata()`

```php
billMetadata($id): \OpenAPI\Client\Model\BillsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable
```

Retrieves a bills resource.

Retrieves a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier

try {
    $result = $apiInstance->billMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable**](../Model/BillsJsonldIdStandardMetadataBillMetadataTagTaggingListBillRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billOrderLines()`

```php
billOrderLines($id, $bills_jsonld): \OpenAPI\Client\Model\BillsJsonldBillListingIdTimestampableTagTaggingListStandardListing
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld = new \OpenAPI\Client\Model\BillsJsonld(); // \OpenAPI\Client\Model\BillsJsonld | The new bills resource

try {
    $result = $apiInstance->billOrderLines($id, $bills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld** | [**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillListingIdTimestampableTagTaggingListStandardListing**](../Model/BillsJsonldBillListingIdTimestampableTagTaggingListStandardListing.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billUpdatePrices()`

```php
billUpdatePrices($id, $bills_jsonld): \OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingList
```

Creates a bills resource.

Creates a bills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bills identifier
$bills_jsonld = new \OpenAPI\Client\Model\BillsJsonld(); // \OpenAPI\Client\Model\BillsJsonld | The new bills resource

try {
    $result = $apiInstance->billUpdatePrices($id, $bills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billUpdatePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bills identifier | |
| **bills_jsonld** | [**\OpenAPI\Client\Model\BillsJsonld**](../Model/BillsJsonld.md)| The new bills resource | |

### Return type

[**\OpenAPI\Client\Model\BillsJsonldBillShowIdTimestampableTagTaggingList**](../Model/BillsJsonldBillShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
