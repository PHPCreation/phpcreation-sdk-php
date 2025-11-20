# OpenAPI\Client\InvoiceLinesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInvoiceLinesGetCollection()**](InvoiceLinesApi.md#apiInvoiceLinesGetCollection) | **GET** /open-api/v3/invoice_lines | Retrieves the collection of invoice_lines resources. |
| [**apiInvoiceLinesIdDelete()**](InvoiceLinesApi.md#apiInvoiceLinesIdDelete) | **DELETE** /open-api/v3/invoice_lines/{id} | Removes the invoice_lines resource. |
| [**apiInvoiceLinesIdGet()**](InvoiceLinesApi.md#apiInvoiceLinesIdGet) | **GET** /open-api/v3/invoice_lines/{id} | Retrieves a invoice_lines resource. |
| [**apiInvoiceLinesIdPut()**](InvoiceLinesApi.md#apiInvoiceLinesIdPut) | **PUT** /open-api/v3/invoice_lines/{id} | Replaces the invoice_lines resource. |
| [**apiInvoiceLinesPost()**](InvoiceLinesApi.md#apiInvoiceLinesPost) | **POST** /open-api/v3/invoice_lines | Creates a invoice_lines resource. |
| [**invoiceLineApiApplyDiscount()**](InvoiceLinesApi.md#invoiceLineApiApplyDiscount) | **POST** /open-api/v3/invoice_lines/{id}/apply_discount | Creates a invoice_lines resource. |
| [**invoiceLineApiCorporationAdd()**](InvoiceLinesApi.md#invoiceLineApiCorporationAdd) | **POST** /open-api/v3/invoice_lines/{id}/corporation/add | Creates a invoice_lines resource. |
| [**invoiceLineApiCorporationRemove()**](InvoiceLinesApi.md#invoiceLineApiCorporationRemove) | **POST** /open-api/v3/invoice_lines/{id}/corporation/remove | Creates a invoice_lines resource. |
| [**invoiceLineApiFileUpload()**](InvoiceLinesApi.md#invoiceLineApiFileUpload) | **POST** /open-api/v3/invoice_lines/{id}/file/upload | Creates a invoice_lines resource. |
| [**invoiceLineDropDown()**](InvoiceLinesApi.md#invoiceLineDropDown) | **GET** /open-api/v3/invoice_lines/dropdown/get | Retrieves the collection of invoice_lines resources. |
| [**invoiceLineDuplicate()**](InvoiceLinesApi.md#invoiceLineDuplicate) | **GET** /open-api/v3/invoice_lines/duplicate/{id} | Retrieves a invoice_lines resource. |
| [**invoiceLineFetchFiles()**](InvoiceLinesApi.md#invoiceLineFetchFiles) | **GET** /open-api/v3/invoice_lines/fetch_files/{id} | Retrieves a invoice_lines resource. |
| [**invoiceLineGetBySlug()**](InvoiceLinesApi.md#invoiceLineGetBySlug) | **GET** /open-api/v3/invoice_lines/by_slug/{slug} | Retrieves a invoice_lines resource. |
| [**invoiceLineGetDeleteRelations()**](InvoiceLinesApi.md#invoiceLineGetDeleteRelations) | **GET** /open-api/v3/invoice_lines/get_delete_relations/{id} | Retrieves a invoice_lines resource. |
| [**invoiceLineMetadata()**](InvoiceLinesApi.md#invoiceLineMetadata) | **GET** /open-api/v3/invoice_lines/metadata/{id} | Retrieves a invoice_lines resource. |


## `apiInvoiceLinesGetCollection()`

```php
apiInvoiceLinesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $invoice, $invoice2, $product, $product2, $search, $price, $price2, $number, $number2, $discount_price, $discount_price2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range): \OpenAPI\Client\Model\ApiInvoiceLinesGetCollection200Response
```

Retrieves the collection of invoice_lines resources.

Retrieves the collection of invoice_lines resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$scan = 'scan_example'; // string | 
$scan2 = array('scan_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$discount_price = 'discount_price_example'; // string | 
$discount_price2 = array('discount_price_example'); // string[] | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_code = True; // bool | 
$exists_scan = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_number = 'order_number_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoice_lines slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_lines slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_lines slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_lines id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_lines id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_lines id_end_with
$client_ref_partial = 'client_ref_partial_example'; // string | invoice_lines clientRef_partial
$client_ref_start_with = 'client_ref_start_with_example'; // string | invoice_lines clientRef_start_with
$client_ref_end_with = 'client_ref_end_with_example'; // string | invoice_lines clientRef_end_with
$number_partial = 'number_partial_example'; // string | invoice_lines number_partial
$number_start_with = 'number_start_with_example'; // string | invoice_lines number_start_with
$number_end_with = 'number_end_with_example'; // string | invoice_lines number_end_with
$notes_partial = 'notes_partial_example'; // string | invoice_lines notes_partial
$notes_start_with = 'notes_start_with_example'; // string | invoice_lines notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | invoice_lines notes_end_with
$conditions_partial = 'conditions_partial_example'; // string | invoice_lines conditions_partial
$conditions_start_with = 'conditions_start_with_example'; // string | invoice_lines conditions_start_with
$conditions_end_with = 'conditions_end_with_example'; // string | invoice_lines conditions_end_with
$conversion_rate_range = 'conversion_rate_range_example'; // string | invoice_lines conversionRate_range

try {
    $result = $apiInstance->apiInvoiceLinesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $invoice, $invoice2, $product, $product2, $search, $price, $price2, $number, $number2, $discount_price, $discount_price2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->apiInvoiceLinesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scan** | **string**|  | [optional] |
| **scan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **discount_price** | **string**|  | [optional] |
| **discount_price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_scan** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_number** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoice_lines slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_lines slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_lines slug_end_with | [optional] |
| **id_partial** | **string**| invoice_lines id_partial | [optional] |
| **id_start_with** | **string**| invoice_lines id_start_with | [optional] |
| **id_end_with** | **string**| invoice_lines id_end_with | [optional] |
| **client_ref_partial** | **string**| invoice_lines clientRef_partial | [optional] |
| **client_ref_start_with** | **string**| invoice_lines clientRef_start_with | [optional] |
| **client_ref_end_with** | **string**| invoice_lines clientRef_end_with | [optional] |
| **number_partial** | **string**| invoice_lines number_partial | [optional] |
| **number_start_with** | **string**| invoice_lines number_start_with | [optional] |
| **number_end_with** | **string**| invoice_lines number_end_with | [optional] |
| **notes_partial** | **string**| invoice_lines notes_partial | [optional] |
| **notes_start_with** | **string**| invoice_lines notes_start_with | [optional] |
| **notes_end_with** | **string**| invoice_lines notes_end_with | [optional] |
| **conditions_partial** | **string**| invoice_lines conditions_partial | [optional] |
| **conditions_start_with** | **string**| invoice_lines conditions_start_with | [optional] |
| **conditions_end_with** | **string**| invoice_lines conditions_end_with | [optional] |
| **conversion_rate_range** | **string**| invoice_lines conversionRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInvoiceLinesGetCollection200Response**](../Model/ApiInvoiceLinesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceLinesIdDelete()`

```php
apiInvoiceLinesIdDelete($id)
```

Removes the invoice_lines resource.

Removes the invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier

try {
    $apiInstance->apiInvoiceLinesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->apiInvoiceLinesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |

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

## `apiInvoiceLinesIdGet()`

```php
apiInvoiceLinesIdGet($id): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_lines resource.

Retrieves a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier

try {
    $result = $apiInstance->apiInvoiceLinesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->apiInvoiceLinesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceLinesIdPut()`

```php
apiInvoiceLinesIdPut($id, $invoice_lines_jsonld_add_post): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the invoice_lines resource.

Replaces the invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier
$invoice_lines_jsonld_add_post = new \OpenAPI\Client\Model\InvoiceLinesJsonldAddPost(); // \OpenAPI\Client\Model\InvoiceLinesJsonldAddPost | The updated invoice_lines resource

try {
    $result = $apiInstance->apiInvoiceLinesIdPut($id, $invoice_lines_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->apiInvoiceLinesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |
| **invoice_lines_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoiceLinesJsonldAddPost**](../Model/InvoiceLinesJsonldAddPost.md)| The updated invoice_lines resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceLinesPost()`

```php
apiInvoiceLinesPost($invoice_lines_jsonld_add_post): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_lines resource.

Creates a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_lines_jsonld_add_post = new \OpenAPI\Client\Model\InvoiceLinesJsonldAddPost(); // \OpenAPI\Client\Model\InvoiceLinesJsonldAddPost | The new invoice_lines resource

try {
    $result = $apiInstance->apiInvoiceLinesPost($invoice_lines_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->apiInvoiceLinesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_lines_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoiceLinesJsonldAddPost**](../Model/InvoiceLinesJsonldAddPost.md)| The new invoice_lines resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineApiApplyDiscount()`

```php
invoiceLineApiApplyDiscount($id, $invoice_lines_jsonld_discount): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_lines resource.

Creates a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier
$invoice_lines_jsonld_discount = new \OpenAPI\Client\Model\InvoiceLinesJsonldDiscount(); // \OpenAPI\Client\Model\InvoiceLinesJsonldDiscount | The new invoice_lines resource

try {
    $result = $apiInstance->invoiceLineApiApplyDiscount($id, $invoice_lines_jsonld_discount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineApiApplyDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |
| **invoice_lines_jsonld_discount** | [**\OpenAPI\Client\Model\InvoiceLinesJsonldDiscount**](../Model/InvoiceLinesJsonldDiscount.md)| The new invoice_lines resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineApiCorporationAdd()`

```php
invoiceLineApiCorporationAdd($id, $invoice_lines_jsonld): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_lines resource.

Creates a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier
$invoice_lines_jsonld = new \OpenAPI\Client\Model\InvoiceLinesJsonld(); // \OpenAPI\Client\Model\InvoiceLinesJsonld | The new invoice_lines resource

try {
    $result = $apiInstance->invoiceLineApiCorporationAdd($id, $invoice_lines_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |
| **invoice_lines_jsonld** | [**\OpenAPI\Client\Model\InvoiceLinesJsonld**](../Model/InvoiceLinesJsonld.md)| The new invoice_lines resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineApiCorporationRemove()`

```php
invoiceLineApiCorporationRemove($id, $invoice_lines_jsonld): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_lines resource.

Creates a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier
$invoice_lines_jsonld = new \OpenAPI\Client\Model\InvoiceLinesJsonld(); // \OpenAPI\Client\Model\InvoiceLinesJsonld | The new invoice_lines resource

try {
    $result = $apiInstance->invoiceLineApiCorporationRemove($id, $invoice_lines_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |
| **invoice_lines_jsonld** | [**\OpenAPI\Client\Model\InvoiceLinesJsonld**](../Model/InvoiceLinesJsonld.md)| The new invoice_lines resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineApiFileUpload()`

```php
invoiceLineApiFileUpload($id, $invoice_lines_jsonld): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_lines resource.

Creates a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier
$invoice_lines_jsonld = new \OpenAPI\Client\Model\InvoiceLinesJsonld(); // \OpenAPI\Client\Model\InvoiceLinesJsonld | The new invoice_lines resource

try {
    $result = $apiInstance->invoiceLineApiFileUpload($id, $invoice_lines_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |
| **invoice_lines_jsonld** | [**\OpenAPI\Client\Model\InvoiceLinesJsonld**](../Model/InvoiceLinesJsonld.md)| The new invoice_lines resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineDropDown()`

```php
invoiceLineDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $invoice, $invoice2, $product, $product2, $search, $price, $price2, $number, $number2, $discount_price, $discount_price2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range): \OpenAPI\Client\Model\InvoiceLineDropDown200Response
```

Retrieves the collection of invoice_lines resources.

Retrieves the collection of invoice_lines resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$scan = 'scan_example'; // string | 
$scan2 = array('scan_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$discount_price = 'discount_price_example'; // string | 
$discount_price2 = array('discount_price_example'); // string[] | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_code = True; // bool | 
$exists_scan = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_number = 'order_number_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoice_lines slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_lines slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_lines slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_lines id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_lines id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_lines id_end_with
$client_ref_partial = 'client_ref_partial_example'; // string | invoice_lines clientRef_partial
$client_ref_start_with = 'client_ref_start_with_example'; // string | invoice_lines clientRef_start_with
$client_ref_end_with = 'client_ref_end_with_example'; // string | invoice_lines clientRef_end_with
$number_partial = 'number_partial_example'; // string | invoice_lines number_partial
$number_start_with = 'number_start_with_example'; // string | invoice_lines number_start_with
$number_end_with = 'number_end_with_example'; // string | invoice_lines number_end_with
$notes_partial = 'notes_partial_example'; // string | invoice_lines notes_partial
$notes_start_with = 'notes_start_with_example'; // string | invoice_lines notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | invoice_lines notes_end_with
$conditions_partial = 'conditions_partial_example'; // string | invoice_lines conditions_partial
$conditions_start_with = 'conditions_start_with_example'; // string | invoice_lines conditions_start_with
$conditions_end_with = 'conditions_end_with_example'; // string | invoice_lines conditions_end_with
$conversion_rate_range = 'conversion_rate_range_example'; // string | invoice_lines conversionRate_range

try {
    $result = $apiInstance->invoiceLineDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $invoice, $invoice2, $product, $product2, $search, $price, $price2, $number, $number2, $discount_price, $discount_price2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineDropDown: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scan** | **string**|  | [optional] |
| **scan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **discount_price** | **string**|  | [optional] |
| **discount_price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_scan** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_number** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoice_lines slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_lines slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_lines slug_end_with | [optional] |
| **id_partial** | **string**| invoice_lines id_partial | [optional] |
| **id_start_with** | **string**| invoice_lines id_start_with | [optional] |
| **id_end_with** | **string**| invoice_lines id_end_with | [optional] |
| **client_ref_partial** | **string**| invoice_lines clientRef_partial | [optional] |
| **client_ref_start_with** | **string**| invoice_lines clientRef_start_with | [optional] |
| **client_ref_end_with** | **string**| invoice_lines clientRef_end_with | [optional] |
| **number_partial** | **string**| invoice_lines number_partial | [optional] |
| **number_start_with** | **string**| invoice_lines number_start_with | [optional] |
| **number_end_with** | **string**| invoice_lines number_end_with | [optional] |
| **notes_partial** | **string**| invoice_lines notes_partial | [optional] |
| **notes_start_with** | **string**| invoice_lines notes_start_with | [optional] |
| **notes_end_with** | **string**| invoice_lines notes_end_with | [optional] |
| **conditions_partial** | **string**| invoice_lines conditions_partial | [optional] |
| **conditions_start_with** | **string**| invoice_lines conditions_start_with | [optional] |
| **conditions_end_with** | **string**| invoice_lines conditions_end_with | [optional] |
| **conversion_rate_range** | **string**| invoice_lines conversionRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineDropDown200Response**](../Model/InvoiceLineDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineDuplicate()`

```php
invoiceLineDuplicate($id): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_lines resource.

Retrieves a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier

try {
    $result = $apiInstance->invoiceLineDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineFetchFiles()`

```php
invoiceLineFetchFiles($id): \OpenAPI\Client\Model\InvoiceLinesJsonld
```

Retrieves a invoice_lines resource.

Retrieves a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier

try {
    $result = $apiInstance->invoiceLineFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonld**](../Model/InvoiceLinesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineGetBySlug()`

```php
invoiceLineGetBySlug($slug): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_lines resource.

Retrieves a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | invoice_lines identifier

try {
    $result = $apiInstance->invoiceLineGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| invoice_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceLinesJsonldInvoiceLineShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineGetDeleteRelations()`

```php
invoiceLineGetDeleteRelations($id): \OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineRelations
```

Retrieves a invoice_lines resource.

Retrieves a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier

try {
    $result = $apiInstance->invoiceLineGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldInvoiceLineRelations**](../Model/InvoiceLinesJsonldInvoiceLineRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineMetadata()`

```php
invoiceLineMetadata($id): \OpenAPI\Client\Model\InvoiceLinesJsonldIdStandardMetadataInvoiceLineMetadataTagTaggingListInvoiceLineRelationsTimestampable
```

Retrieves a invoice_lines resource.

Retrieves a invoice_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_lines identifier

try {
    $result = $apiInstance->invoiceLineMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLinesApi->invoiceLineMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLinesJsonldIdStandardMetadataInvoiceLineMetadataTagTaggingListInvoiceLineRelationsTimestampable**](../Model/InvoiceLinesJsonldIdStandardMetadataInvoiceLineMetadataTagTaggingListInvoiceLineRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
