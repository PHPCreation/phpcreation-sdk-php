# OpenAPI\Client\InvoicesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInvoicesGetCollection()**](InvoicesApi.md#apiInvoicesGetCollection) | **GET** /open-api/v3/invoices | Retrieves the collection of invoices resources. |
| [**apiInvoicesIdDelete()**](InvoicesApi.md#apiInvoicesIdDelete) | **DELETE** /open-api/v3/invoices/{id} | Removes the invoices resource. |
| [**apiInvoicesIdGet()**](InvoicesApi.md#apiInvoicesIdGet) | **GET** /open-api/v3/invoices/{id} | Retrieves a invoices resource. |
| [**apiInvoicesIdPut()**](InvoicesApi.md#apiInvoicesIdPut) | **PUT** /open-api/v3/invoices/{id} | Replaces the invoices resource. |
| [**apiInvoicesPost()**](InvoicesApi.md#apiInvoicesPost) | **POST** /open-api/v3/invoices | Creates a invoices resource. |
| [**invoiceApiApplyDiscount()**](InvoicesApi.md#invoiceApiApplyDiscount) | **POST** /open-api/v3/invoices/{id}/apply_discount | Creates a invoices resource. |
| [**invoiceApiCorporationAdd()**](InvoicesApi.md#invoiceApiCorporationAdd) | **POST** /open-api/v3/invoices/{id}/corporation/add | Creates a invoices resource. |
| [**invoiceApiCorporationRemove()**](InvoicesApi.md#invoiceApiCorporationRemove) | **POST** /open-api/v3/invoices/{id}/corporation/remove | Creates a invoices resource. |
| [**invoiceApiFileUpload()**](InvoicesApi.md#invoiceApiFileUpload) | **POST** /open-api/v3/invoices/{id}/file/upload | Creates a invoices resource. |
| [**invoiceApiGenerateInventory()**](InvoicesApi.md#invoiceApiGenerateInventory) | **POST** /open-api/v3/invoices/{id}/generate_inventory | Creates a invoices resource. |
| [**invoiceApiSellsReportListing()**](InvoicesApi.md#invoiceApiSellsReportListing) | **GET** /open-api/v3/invoices/sells/report/listing | Retrieves the collection of invoices resources. |
| [**invoiceApiSellsReportSummary()**](InvoicesApi.md#invoiceApiSellsReportSummary) | **GET** /open-api/v3/invoices/sells/report/summary | Retrieves the collection of invoices resources. |
| [**invoiceDropDown()**](InvoicesApi.md#invoiceDropDown) | **GET** /open-api/v3/invoices/dropdown/get | Retrieves the collection of invoices resources. |
| [**invoiceDuplicate()**](InvoicesApi.md#invoiceDuplicate) | **GET** /open-api/v3/invoices/duplicate/{id} | Retrieves a invoices resource. |
| [**invoiceFetchFiles()**](InvoicesApi.md#invoiceFetchFiles) | **GET** /open-api/v3/invoices/fetch_files/{id} | Retrieves a invoices resource. |
| [**invoiceGetBySlug()**](InvoicesApi.md#invoiceGetBySlug) | **GET** /open-api/v3/invoices/by_slug/{slug} | Retrieves a invoices resource. |
| [**invoiceGetDeleteRelations()**](InvoicesApi.md#invoiceGetDeleteRelations) | **GET** /open-api/v3/invoices/get_delete_relations/{id} | Retrieves a invoices resource. |
| [**invoiceLinesQuickAdd()**](InvoicesApi.md#invoiceLinesQuickAdd) | **POST** /open-api/v3/invoices/{id}/lines/quick_add | Creates a invoices resource. |
| [**invoiceMetadata()**](InvoicesApi.md#invoiceMetadata) | **GET** /open-api/v3/invoices/metadata/{id} | Retrieves a invoices resource. |
| [**invoiceOrderLines()**](InvoicesApi.md#invoiceOrderLines) | **POST** /open-api/v3/invoices/{id}/order_lines | Creates a invoices resource. |
| [**invoiceUpdatePrices()**](InvoicesApi.md#invoiceUpdatePrices) | **POST** /open-api/v3/invoices/{id}/update_prices | Creates a invoices resource. |


## `apiInvoicesGetCollection()`

```php
apiInvoicesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range): \OpenAPI\Client\Model\ApiInvoicesGetCollection200Response
```

Retrieves the collection of invoices resources.

Retrieves the collection of invoices resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
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
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$client_ref = 'client_ref_example'; // string | 
$client_ref2 = array('client_ref_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_client_ref = 'order_client_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoices slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoices slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoices slug_end_with
$id_partial = 'id_partial_example'; // string | invoices id_partial
$id_start_with = 'id_start_with_example'; // string | invoices id_start_with
$id_end_with = 'id_end_with_example'; // string | invoices id_end_with
$client_ref_partial = 'client_ref_partial_example'; // string | invoices clientRef_partial
$client_ref_start_with = 'client_ref_start_with_example'; // string | invoices clientRef_start_with
$client_ref_end_with = 'client_ref_end_with_example'; // string | invoices clientRef_end_with
$number_partial = 'number_partial_example'; // string | invoices number_partial
$number_start_with = 'number_start_with_example'; // string | invoices number_start_with
$number_end_with = 'number_end_with_example'; // string | invoices number_end_with
$notes_partial = 'notes_partial_example'; // string | invoices notes_partial
$notes_start_with = 'notes_start_with_example'; // string | invoices notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | invoices notes_end_with
$conditions_partial = 'conditions_partial_example'; // string | invoices conditions_partial
$conditions_start_with = 'conditions_start_with_example'; // string | invoices conditions_start_with
$conditions_end_with = 'conditions_end_with_example'; // string | invoices conditions_end_with
$conversion_rate_range = 'conversion_rate_range_example'; // string | invoices conversionRate_range

try {
    $result = $apiInstance->apiInvoicesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiInvoicesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_ref** | **string**|  | [optional] |
| **client_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_client_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoices slug_partial | [optional] |
| **slug_start_with** | **string**| invoices slug_start_with | [optional] |
| **slug_end_with** | **string**| invoices slug_end_with | [optional] |
| **id_partial** | **string**| invoices id_partial | [optional] |
| **id_start_with** | **string**| invoices id_start_with | [optional] |
| **id_end_with** | **string**| invoices id_end_with | [optional] |
| **client_ref_partial** | **string**| invoices clientRef_partial | [optional] |
| **client_ref_start_with** | **string**| invoices clientRef_start_with | [optional] |
| **client_ref_end_with** | **string**| invoices clientRef_end_with | [optional] |
| **number_partial** | **string**| invoices number_partial | [optional] |
| **number_start_with** | **string**| invoices number_start_with | [optional] |
| **number_end_with** | **string**| invoices number_end_with | [optional] |
| **notes_partial** | **string**| invoices notes_partial | [optional] |
| **notes_start_with** | **string**| invoices notes_start_with | [optional] |
| **notes_end_with** | **string**| invoices notes_end_with | [optional] |
| **conditions_partial** | **string**| invoices conditions_partial | [optional] |
| **conditions_start_with** | **string**| invoices conditions_start_with | [optional] |
| **conditions_end_with** | **string**| invoices conditions_end_with | [optional] |
| **conversion_rate_range** | **string**| invoices conversionRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInvoicesGetCollection200Response**](../Model/ApiInvoicesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicesIdDelete()`

```php
apiInvoicesIdDelete($id)
```

Removes the invoices resource.

Removes the invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier

try {
    $apiInstance->apiInvoicesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiInvoicesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |

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

## `apiInvoicesIdGet()`

```php
apiInvoicesIdGet($id): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoices resource.

Retrieves a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier

try {
    $result = $apiInstance->apiInvoicesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiInvoicesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicesIdPut()`

```php
apiInvoicesIdPut($id, $invoices_jsonld_add_post): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the invoices resource.

Replaces the invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld_add_post = new \OpenAPI\Client\Model\InvoicesJsonldAddPost(); // \OpenAPI\Client\Model\InvoicesJsonldAddPost | The updated invoices resource

try {
    $result = $apiInstance->apiInvoicesIdPut($id, $invoices_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiInvoicesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoicesJsonldAddPost**](../Model/InvoicesJsonldAddPost.md)| The updated invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicesPost()`

```php
apiInvoicesPost($invoices_jsonld_post_add): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowCustomizedIdTimestampableTagTaggingListStandardShow
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoices_jsonld_post_add = new \OpenAPI\Client\Model\InvoicesJsonldPostAdd(); // \OpenAPI\Client\Model\InvoicesJsonldPostAdd | The new invoices resource

try {
    $result = $apiInstance->apiInvoicesPost($invoices_jsonld_post_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->apiInvoicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoices_jsonld_post_add** | [**\OpenAPI\Client\Model\InvoicesJsonldPostAdd**](../Model/InvoicesJsonldPostAdd.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowCustomizedIdTimestampableTagTaggingListStandardShow**](../Model/InvoicesJsonldInvoiceShowCustomizedIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceApiApplyDiscount()`

```php
invoiceApiApplyDiscount($id, $invoices_jsonld_discount): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld_discount = new \OpenAPI\Client\Model\InvoicesJsonldDiscount(); // \OpenAPI\Client\Model\InvoicesJsonldDiscount | The new invoices resource

try {
    $result = $apiInstance->invoiceApiApplyDiscount($id, $invoices_jsonld_discount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApiApplyDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld_discount** | [**\OpenAPI\Client\Model\InvoicesJsonldDiscount**](../Model/InvoicesJsonldDiscount.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceApiCorporationAdd()`

```php
invoiceApiCorporationAdd($id, $invoices_jsonld): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowIdTimestampableTagTaggingListStandardShow
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld = new \OpenAPI\Client\Model\InvoicesJsonld(); // \OpenAPI\Client\Model\InvoicesJsonld | The new invoices resource

try {
    $result = $apiInstance->invoiceApiCorporationAdd($id, $invoices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld** | [**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowIdTimestampableTagTaggingListStandardShow**](../Model/InvoicesJsonldInvoiceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceApiCorporationRemove()`

```php
invoiceApiCorporationRemove($id, $invoices_jsonld): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowIdTimestampableTagTaggingListStandardShow
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld = new \OpenAPI\Client\Model\InvoicesJsonld(); // \OpenAPI\Client\Model\InvoicesJsonld | The new invoices resource

try {
    $result = $apiInstance->invoiceApiCorporationRemove($id, $invoices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld** | [**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowIdTimestampableTagTaggingListStandardShow**](../Model/InvoicesJsonldInvoiceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceApiFileUpload()`

```php
invoiceApiFileUpload($id, $invoices_jsonld): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld = new \OpenAPI\Client\Model\InvoicesJsonld(); // \OpenAPI\Client\Model\InvoicesJsonld | The new invoices resource

try {
    $result = $apiInstance->invoiceApiFileUpload($id, $invoices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld** | [**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceApiGenerateInventory()`

```php
invoiceApiGenerateInventory($id, $invoices_jsonld): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld = new \OpenAPI\Client\Model\InvoicesJsonld(); // \OpenAPI\Client\Model\InvoicesJsonld | The new invoices resource

try {
    $result = $apiInstance->invoiceApiGenerateInventory($id, $invoices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApiGenerateInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld** | [**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceApiSellsReportListing()`

```php
invoiceApiSellsReportListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\InvoiceApiSellsReportListing200Response
```

Retrieves the collection of invoices resources.

Retrieves the collection of invoices resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
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
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$client_ref = 'client_ref_example'; // string | 
$client_ref2 = array('client_ref_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_client_ref = 'order_client_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->invoiceApiSellsReportListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApiSellsReportListing: ', $e->getMessage(), PHP_EOL;
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
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_ref** | **string**|  | [optional] |
| **client_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_client_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceApiSellsReportListing200Response**](../Model/InvoiceApiSellsReportListing200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceApiSellsReportSummary()`

```php
invoiceApiSellsReportSummary($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\InvoiceApiSellsReportSummary200Response
```

Retrieves the collection of invoices resources.

Retrieves the collection of invoices resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
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
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$client_ref = 'client_ref_example'; // string | 
$client_ref2 = array('client_ref_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_client_ref = 'order_client_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->invoiceApiSellsReportSummary($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApiSellsReportSummary: ', $e->getMessage(), PHP_EOL;
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
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_ref** | **string**|  | [optional] |
| **client_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_client_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceApiSellsReportSummary200Response**](../Model/InvoiceApiSellsReportSummary200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceDropDown()`

```php
invoiceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range): \OpenAPI\Client\Model\InvoiceDropDown200Response
```

Retrieves the collection of invoices resources.

Retrieves the collection of invoices resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
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
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$distribution_type = 'distribution_type_example'; // string | 
$distribution_type2 = array('distribution_type_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$client_ref = 'client_ref_example'; // string | 
$client_ref2 = array('client_ref_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$search = 'search_example'; // string | 
$conversion_rate = 'conversion_rate_example'; // string | 
$conversion_rate2 = array('conversion_rate_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_client_ref = 'order_client_ref_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoices slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoices slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoices slug_end_with
$id_partial = 'id_partial_example'; // string | invoices id_partial
$id_start_with = 'id_start_with_example'; // string | invoices id_start_with
$id_end_with = 'id_end_with_example'; // string | invoices id_end_with
$client_ref_partial = 'client_ref_partial_example'; // string | invoices clientRef_partial
$client_ref_start_with = 'client_ref_start_with_example'; // string | invoices clientRef_start_with
$client_ref_end_with = 'client_ref_end_with_example'; // string | invoices clientRef_end_with
$number_partial = 'number_partial_example'; // string | invoices number_partial
$number_start_with = 'number_start_with_example'; // string | invoices number_start_with
$number_end_with = 'number_end_with_example'; // string | invoices number_end_with
$notes_partial = 'notes_partial_example'; // string | invoices notes_partial
$notes_start_with = 'notes_start_with_example'; // string | invoices notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | invoices notes_end_with
$conditions_partial = 'conditions_partial_example'; // string | invoices conditions_partial
$conditions_start_with = 'conditions_start_with_example'; // string | invoices conditions_start_with
$conditions_end_with = 'conditions_end_with_example'; // string | invoices conditions_end_with
$conversion_rate_range = 'conversion_rate_range_example'; // string | invoices conversionRate_range

try {
    $result = $apiInstance->invoiceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $delivery_date_before, $delivery_date_strictly_before, $delivery_date_after, $delivery_date_strictly_after, $id, $id2, $client, $client2, $project, $project2, $employee, $employee2, $distribution_type, $distribution_type2, $type, $type2, $status, $status2, $client_ref, $client_ref2, $currency, $currency2, $search, $conversion_rate, $conversion_rate2, $properties, $enabled, $tag, $order_id, $order_date, $order_client_ref, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $client_ref_partial, $client_ref_start_with, $client_ref_end_with, $number_partial, $number_start_with, $number_end_with, $notes_partial, $notes_start_with, $notes_end_with, $conditions_partial, $conditions_start_with, $conditions_end_with, $conversion_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceDropDown: ', $e->getMessage(), PHP_EOL;
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
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distribution_type** | **string**|  | [optional] |
| **distribution_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_ref** | **string**|  | [optional] |
| **client_ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **conversion_rate** | **string**|  | [optional] |
| **conversion_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_client_ref** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoices slug_partial | [optional] |
| **slug_start_with** | **string**| invoices slug_start_with | [optional] |
| **slug_end_with** | **string**| invoices slug_end_with | [optional] |
| **id_partial** | **string**| invoices id_partial | [optional] |
| **id_start_with** | **string**| invoices id_start_with | [optional] |
| **id_end_with** | **string**| invoices id_end_with | [optional] |
| **client_ref_partial** | **string**| invoices clientRef_partial | [optional] |
| **client_ref_start_with** | **string**| invoices clientRef_start_with | [optional] |
| **client_ref_end_with** | **string**| invoices clientRef_end_with | [optional] |
| **number_partial** | **string**| invoices number_partial | [optional] |
| **number_start_with** | **string**| invoices number_start_with | [optional] |
| **number_end_with** | **string**| invoices number_end_with | [optional] |
| **notes_partial** | **string**| invoices notes_partial | [optional] |
| **notes_start_with** | **string**| invoices notes_start_with | [optional] |
| **notes_end_with** | **string**| invoices notes_end_with | [optional] |
| **conditions_partial** | **string**| invoices conditions_partial | [optional] |
| **conditions_start_with** | **string**| invoices conditions_start_with | [optional] |
| **conditions_end_with** | **string**| invoices conditions_end_with | [optional] |
| **conversion_rate_range** | **string**| invoices conversionRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceDropDown200Response**](../Model/InvoiceDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceDuplicate()`

```php
invoiceDuplicate($id): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoices resource.

Retrieves a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier

try {
    $result = $apiInstance->invoiceDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceFetchFiles()`

```php
invoiceFetchFiles($id): \OpenAPI\Client\Model\InvoicesJsonld
```

Retrieves a invoices resource.

Retrieves a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier

try {
    $result = $apiInstance->invoiceFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceGetBySlug()`

```php
invoiceGetBySlug($slug): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoices resource.

Retrieves a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | invoices identifier

try {
    $result = $apiInstance->invoiceGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| invoices identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceGetDeleteRelations()`

```php
invoiceGetDeleteRelations($id): \OpenAPI\Client\Model\InvoicesJsonldInvoiceRelations
```

Retrieves a invoices resource.

Retrieves a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier

try {
    $result = $apiInstance->invoiceGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceRelations**](../Model/InvoicesJsonldInvoiceRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLinesQuickAdd()`

```php
invoiceLinesQuickAdd($id, $invoices_jsonld): \OpenAPI\Client\Model\InvoicesJsonld
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld = new \OpenAPI\Client\Model\InvoicesJsonld(); // \OpenAPI\Client\Model\InvoicesJsonld | The new invoices resource

try {
    $result = $apiInstance->invoiceLinesQuickAdd($id, $invoices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceLinesQuickAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld** | [**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceMetadata()`

```php
invoiceMetadata($id): \OpenAPI\Client\Model\InvoicesJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable
```

Retrieves a invoices resource.

Retrieves a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier

try {
    $result = $apiInstance->invoiceMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable**](../Model/InvoicesJsonldIdStandardMetadataInvoiceMetadataTagTaggingListInvoiceRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceOrderLines()`

```php
invoiceOrderLines($id, $invoices_jsonld): \OpenAPI\Client\Model\InvoicesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld = new \OpenAPI\Client\Model\InvoicesJsonld(); // \OpenAPI\Client\Model\InvoicesJsonld | The new invoices resource

try {
    $result = $apiInstance->invoiceOrderLines($id, $invoices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld** | [**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing**](../Model/InvoicesJsonldInvoiceListingIdTimestampableTagTaggingListStandardListing.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceUpdatePrices()`

```php
invoiceUpdatePrices($id, $invoices_jsonld): \OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoices resource.

Creates a invoices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoices identifier
$invoices_jsonld = new \OpenAPI\Client\Model\InvoicesJsonld(); // \OpenAPI\Client\Model\InvoicesJsonld | The new invoices resource

try {
    $result = $apiInstance->invoiceUpdatePrices($id, $invoices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceUpdatePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoices identifier | |
| **invoices_jsonld** | [**\OpenAPI\Client\Model\InvoicesJsonld**](../Model/InvoicesJsonld.md)| The new invoices resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicesJsonldInvoiceShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
