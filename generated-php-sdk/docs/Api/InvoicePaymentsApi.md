# OpenAPI\Client\InvoicePaymentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInvoicePaymentsGetCollection()**](InvoicePaymentsApi.md#apiInvoicePaymentsGetCollection) | **GET** /open-api/v3/invoice_payments | Retrieves the collection of invoice_payments resources. |
| [**apiInvoicePaymentsIdDelete()**](InvoicePaymentsApi.md#apiInvoicePaymentsIdDelete) | **DELETE** /open-api/v3/invoice_payments/{id} | Removes the invoice_payments resource. |
| [**apiInvoicePaymentsIdGet()**](InvoicePaymentsApi.md#apiInvoicePaymentsIdGet) | **GET** /open-api/v3/invoice_payments/{id} | Retrieves a invoice_payments resource. |
| [**apiInvoicePaymentsIdPut()**](InvoicePaymentsApi.md#apiInvoicePaymentsIdPut) | **PUT** /open-api/v3/invoice_payments/{id} | Replaces the invoice_payments resource. |
| [**apiInvoicePaymentsPost()**](InvoicePaymentsApi.md#apiInvoicePaymentsPost) | **POST** /open-api/v3/invoice_payments | Creates a invoice_payments resource. |
| [**invoicePaymentApiCorporationAdd()**](InvoicePaymentsApi.md#invoicePaymentApiCorporationAdd) | **POST** /open-api/v3/invoice_payments/{id}/corporation/add | Creates a invoice_payments resource. |
| [**invoicePaymentApiCorporationRemove()**](InvoicePaymentsApi.md#invoicePaymentApiCorporationRemove) | **POST** /open-api/v3/invoice_payments/{id}/corporation/remove | Creates a invoice_payments resource. |
| [**invoicePaymentApiFileUpload()**](InvoicePaymentsApi.md#invoicePaymentApiFileUpload) | **POST** /open-api/v3/invoice_payments/{id}/file/upload | Creates a invoice_payments resource. |
| [**invoicePaymentDropDown()**](InvoicePaymentsApi.md#invoicePaymentDropDown) | **GET** /open-api/v3/invoice_payments/dropdown/get | Retrieves the collection of invoice_payments resources. |
| [**invoicePaymentDuplicate()**](InvoicePaymentsApi.md#invoicePaymentDuplicate) | **GET** /open-api/v3/invoice_payments/duplicate/{id} | Retrieves a invoice_payments resource. |
| [**invoicePaymentFetchFiles()**](InvoicePaymentsApi.md#invoicePaymentFetchFiles) | **GET** /open-api/v3/invoice_payments/fetch_files/{id} | Retrieves a invoice_payments resource. |
| [**invoicePaymentGetBySlug()**](InvoicePaymentsApi.md#invoicePaymentGetBySlug) | **GET** /open-api/v3/invoice_payments/by_slug/{slug} | Retrieves a invoice_payments resource. |
| [**invoicePaymentGetDeleteRelations()**](InvoicePaymentsApi.md#invoicePaymentGetDeleteRelations) | **GET** /open-api/v3/invoice_payments/get_delete_relations/{id} | Retrieves a invoice_payments resource. |
| [**invoicePaymentMetadata()**](InvoicePaymentsApi.md#invoicePaymentMetadata) | **GET** /open-api/v3/fee_tax_customs/metadata/{id} | Retrieves a invoice_payments resource. |


## `apiInvoicePaymentsGetCollection()`

```php
apiInvoicePaymentsGetCollection($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $invoice, $invoice2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $note_partial, $note_start_with, $note_end_with): \OpenAPI\Client\Model\ApiInvoicePaymentsGetCollection200Response
```

Retrieves the collection of invoice_payments resources.

Retrieves the collection of invoice_payments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$deposit_date_before = 'deposit_date_before_example'; // string | 
$deposit_date_strictly_before = 'deposit_date_strictly_before_example'; // string | 
$deposit_date_after = 'deposit_date_after_example'; // string | 
$deposit_date_strictly_after = 'deposit_date_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$confirmed_at_before = 'confirmed_at_before_example'; // string | 
$confirmed_at_strictly_before = 'confirmed_at_strictly_before_example'; // string | 
$confirmed_at_after = 'confirmed_at_after_example'; // string | 
$confirmed_at_strictly_after = 'confirmed_at_strictly_after_example'; // string | 
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
$ref = 'ref_example'; // string | 
$ref2 = array('ref_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoice_payments slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_payments slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_payments slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_payments id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_payments id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_payments id_end_with
$ref_partial = 'ref_partial_example'; // string | invoice_payments ref_partial
$ref_start_with = 'ref_start_with_example'; // string | invoice_payments ref_start_with
$ref_end_with = 'ref_end_with_example'; // string | invoice_payments ref_end_with
$note_partial = 'note_partial_example'; // string | invoice_payments note_partial
$note_start_with = 'note_start_with_example'; // string | invoice_payments note_start_with
$note_end_with = 'note_end_with_example'; // string | invoice_payments note_end_with

try {
    $result = $apiInstance->apiInvoicePaymentsGetCollection($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $invoice, $invoice2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $note_partial, $note_start_with, $note_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->apiInvoicePaymentsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **deposit_date_before** | **string**|  | [optional] |
| **deposit_date_strictly_before** | **string**|  | [optional] |
| **deposit_date_after** | **string**|  | [optional] |
| **deposit_date_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **confirmed_at_before** | **string**|  | [optional] |
| **confirmed_at_strictly_before** | **string**|  | [optional] |
| **confirmed_at_after** | **string**|  | [optional] |
| **confirmed_at_strictly_after** | **string**|  | [optional] |
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
| **ref** | **string**|  | [optional] |
| **ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoice_payments slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_payments slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_payments slug_end_with | [optional] |
| **id_partial** | **string**| invoice_payments id_partial | [optional] |
| **id_start_with** | **string**| invoice_payments id_start_with | [optional] |
| **id_end_with** | **string**| invoice_payments id_end_with | [optional] |
| **ref_partial** | **string**| invoice_payments ref_partial | [optional] |
| **ref_start_with** | **string**| invoice_payments ref_start_with | [optional] |
| **ref_end_with** | **string**| invoice_payments ref_end_with | [optional] |
| **note_partial** | **string**| invoice_payments note_partial | [optional] |
| **note_start_with** | **string**| invoice_payments note_start_with | [optional] |
| **note_end_with** | **string**| invoice_payments note_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInvoicePaymentsGetCollection200Response**](../Model/ApiInvoicePaymentsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicePaymentsIdDelete()`

```php
apiInvoicePaymentsIdDelete($id)
```

Removes the invoice_payments resource.

Removes the invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier

try {
    $apiInstance->apiInvoicePaymentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->apiInvoicePaymentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |

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

## `apiInvoicePaymentsIdGet()`

```php
apiInvoicePaymentsIdGet($id): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_payments resource.

Retrieves a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier

try {
    $result = $apiInstance->apiInvoicePaymentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->apiInvoicePaymentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicePaymentsIdPut()`

```php
apiInvoicePaymentsIdPut($id, $invoice_payments_jsonld_add_post): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the invoice_payments resource.

Replaces the invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier
$invoice_payments_jsonld_add_post = new \OpenAPI\Client\Model\InvoicePaymentsJsonldAddPost(); // \OpenAPI\Client\Model\InvoicePaymentsJsonldAddPost | The updated invoice_payments resource

try {
    $result = $apiInstance->apiInvoicePaymentsIdPut($id, $invoice_payments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->apiInvoicePaymentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |
| **invoice_payments_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoicePaymentsJsonldAddPost**](../Model/InvoicePaymentsJsonldAddPost.md)| The updated invoice_payments resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicePaymentsPost()`

```php
apiInvoicePaymentsPost($invoice_payments_jsonld_add_post): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_payments resource.

Creates a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_payments_jsonld_add_post = new \OpenAPI\Client\Model\InvoicePaymentsJsonldAddPost(); // \OpenAPI\Client\Model\InvoicePaymentsJsonldAddPost | The new invoice_payments resource

try {
    $result = $apiInstance->apiInvoicePaymentsPost($invoice_payments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->apiInvoicePaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_payments_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoicePaymentsJsonldAddPost**](../Model/InvoicePaymentsJsonldAddPost.md)| The new invoice_payments resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentApiCorporationAdd()`

```php
invoicePaymentApiCorporationAdd($id, $invoice_payments_jsonld): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_payments resource.

Creates a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier
$invoice_payments_jsonld = new \OpenAPI\Client\Model\InvoicePaymentsJsonld(); // \OpenAPI\Client\Model\InvoicePaymentsJsonld | The new invoice_payments resource

try {
    $result = $apiInstance->invoicePaymentApiCorporationAdd($id, $invoice_payments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |
| **invoice_payments_jsonld** | [**\OpenAPI\Client\Model\InvoicePaymentsJsonld**](../Model/InvoicePaymentsJsonld.md)| The new invoice_payments resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentApiCorporationRemove()`

```php
invoicePaymentApiCorporationRemove($id, $invoice_payments_jsonld): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_payments resource.

Creates a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier
$invoice_payments_jsonld = new \OpenAPI\Client\Model\InvoicePaymentsJsonld(); // \OpenAPI\Client\Model\InvoicePaymentsJsonld | The new invoice_payments resource

try {
    $result = $apiInstance->invoicePaymentApiCorporationRemove($id, $invoice_payments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |
| **invoice_payments_jsonld** | [**\OpenAPI\Client\Model\InvoicePaymentsJsonld**](../Model/InvoicePaymentsJsonld.md)| The new invoice_payments resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentApiFileUpload()`

```php
invoicePaymentApiFileUpload($id, $invoice_payments_jsonld): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowIdTimestampableTagTaggingListStandardShow
```

Creates a invoice_payments resource.

Creates a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier
$invoice_payments_jsonld = new \OpenAPI\Client\Model\InvoicePaymentsJsonld(); // \OpenAPI\Client\Model\InvoicePaymentsJsonld | The new invoice_payments resource

try {
    $result = $apiInstance->invoicePaymentApiFileUpload($id, $invoice_payments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |
| **invoice_payments_jsonld** | [**\OpenAPI\Client\Model\InvoicePaymentsJsonld**](../Model/InvoicePaymentsJsonld.md)| The new invoice_payments resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowIdTimestampableTagTaggingListStandardShow**](../Model/InvoicePaymentsJsonldInvoicePaymentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentDropDown()`

```php
invoicePaymentDropDown($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $invoice, $invoice2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\InvoicePaymentDropDown200Response
```

Retrieves the collection of invoice_payments resources.

Retrieves the collection of invoice_payments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$deposit_date_before = 'deposit_date_before_example'; // string | 
$deposit_date_strictly_before = 'deposit_date_strictly_before_example'; // string | 
$deposit_date_after = 'deposit_date_after_example'; // string | 
$deposit_date_strictly_after = 'deposit_date_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$confirmed_at_before = 'confirmed_at_before_example'; // string | 
$confirmed_at_strictly_before = 'confirmed_at_strictly_before_example'; // string | 
$confirmed_at_after = 'confirmed_at_after_example'; // string | 
$confirmed_at_strictly_after = 'confirmed_at_strictly_after_example'; // string | 
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
$ref = 'ref_example'; // string | 
$ref2 = array('ref_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->invoicePaymentDropDown($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $invoice, $invoice2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **deposit_date_before** | **string**|  | [optional] |
| **deposit_date_strictly_before** | **string**|  | [optional] |
| **deposit_date_after** | **string**|  | [optional] |
| **deposit_date_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **confirmed_at_before** | **string**|  | [optional] |
| **confirmed_at_strictly_before** | **string**|  | [optional] |
| **confirmed_at_after** | **string**|  | [optional] |
| **confirmed_at_strictly_after** | **string**|  | [optional] |
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
| **ref** | **string**|  | [optional] |
| **ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentDropDown200Response**](../Model/InvoicePaymentDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentDuplicate()`

```php
invoicePaymentDuplicate($id): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_payments resource.

Retrieves a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier

try {
    $result = $apiInstance->invoicePaymentDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentFetchFiles()`

```php
invoicePaymentFetchFiles($id): \OpenAPI\Client\Model\InvoicePaymentsJsonld
```

Retrieves a invoice_payments resource.

Retrieves a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier

try {
    $result = $apiInstance->invoicePaymentFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonld**](../Model/InvoicePaymentsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentGetBySlug()`

```php
invoicePaymentGetBySlug($slug): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_payments resource.

Retrieves a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | invoice_payments identifier

try {
    $result = $apiInstance->invoicePaymentGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| invoice_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentsJsonldInvoicePaymentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentGetDeleteRelations()`

```php
invoicePaymentGetDeleteRelations($id): \OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentRelations
```

Retrieves a invoice_payments resource.

Retrieves a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier

try {
    $result = $apiInstance->invoicePaymentGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldInvoicePaymentRelations**](../Model/InvoicePaymentsJsonldInvoicePaymentRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentMetadata()`

```php
invoicePaymentMetadata($id): \OpenAPI\Client\Model\InvoicePaymentsJsonldIdStandardMetadataInvoicePaymentMetadataTagTaggingListInvoicePaymentRelationsTimestampable
```

Retrieves a invoice_payments resource.

Retrieves a invoice_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payments identifier

try {
    $result = $apiInstance->invoicePaymentMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->invoicePaymentMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentsJsonldIdStandardMetadataInvoicePaymentMetadataTagTaggingListInvoicePaymentRelationsTimestampable**](../Model/InvoicePaymentsJsonldIdStandardMetadataInvoicePaymentMetadataTagTaggingListInvoicePaymentRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
