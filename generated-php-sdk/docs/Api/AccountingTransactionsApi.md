# OpenAPI\Client\AccountingTransactionsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingTransactionApiFileUpload()**](AccountingTransactionsApi.md#accountingTransactionApiFileUpload) | **POST** /open-api/v3/accounting_transactions/{id}/file/upload | Creates a accounting_transactions resource. |
| [**accountingTransactionDropDown()**](AccountingTransactionsApi.md#accountingTransactionDropDown) | **GET** /open-api/v3/accounting_transactions/dropdown/get | Retrieves the collection of accounting_transactions resources. |
| [**accountingTransactionDuplicate()**](AccountingTransactionsApi.md#accountingTransactionDuplicate) | **GET** /open-api/v3/accounting_transactions/duplicate/{id} | Retrieves a accounting_transactions resource. |
| [**accountingTransactionFetchFiles()**](AccountingTransactionsApi.md#accountingTransactionFetchFiles) | **GET** /open-api/v3/accounting_transactions/fetch_files/{id} | Retrieves a accounting_transactions resource. |
| [**accountingTransactionGetBySlug()**](AccountingTransactionsApi.md#accountingTransactionGetBySlug) | **GET** /open-api/v3/accounting_transactions/by_slug/{slug} | Retrieves a accounting_transactions resource. |
| [**accountingTransactionGetDeleteRelations()**](AccountingTransactionsApi.md#accountingTransactionGetDeleteRelations) | **GET** /open-api/v3/accounting_transactions/get_delete_relations/{id} | Retrieves a accounting_transactions resource. |
| [**accountingTransactionMetadata()**](AccountingTransactionsApi.md#accountingTransactionMetadata) | **GET** /open-api/v3/accounting_transactions/metadata/{id} | Retrieves a accounting_transactions resource. |
| [**apiAccountingTransactionsGetCollection()**](AccountingTransactionsApi.md#apiAccountingTransactionsGetCollection) | **GET** /open-api/v3/accounting_transactions | Retrieves the collection of accounting_transactions resources. |
| [**apiAccountingTransactionsIdDelete()**](AccountingTransactionsApi.md#apiAccountingTransactionsIdDelete) | **DELETE** /open-api/v3/accounting_transactions/{id} | Removes the accounting_transactions resource. |
| [**apiAccountingTransactionsIdGet()**](AccountingTransactionsApi.md#apiAccountingTransactionsIdGet) | **GET** /open-api/v3/accounting_transactions/{id} | Retrieves a accounting_transactions resource. |
| [**apiAccountingTransactionsIdPut()**](AccountingTransactionsApi.md#apiAccountingTransactionsIdPut) | **PUT** /open-api/v3/accounting_transactions/{id} | Replaces the accounting_transactions resource. |
| [**apiAccountingTransactionsPost()**](AccountingTransactionsApi.md#apiAccountingTransactionsPost) | **POST** /open-api/v3/accounting_transactions | Creates a accounting_transactions resource. |


## `accountingTransactionApiFileUpload()`

```php
accountingTransactionApiFileUpload($id, $accounting_transactions_jsonld): \OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow
```

Creates a accounting_transactions resource.

Creates a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier
$accounting_transactions_jsonld = new \OpenAPI\Client\Model\AccountingTransactionsJsonld(); // \OpenAPI\Client\Model\AccountingTransactionsJsonld | The new accounting_transactions resource

try {
    $result = $apiInstance->accountingTransactionApiFileUpload($id, $accounting_transactions_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->accountingTransactionApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |
| **accounting_transactions_jsonld** | [**\OpenAPI\Client\Model\AccountingTransactionsJsonld**](../Model/AccountingTransactionsJsonld.md)| The new accounting_transactions resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionDropDown()`

```php
accountingTransactionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $origin, $origin2, $ref_table, $ref_table2, $period, $period2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_comment, $exists_system_trace, $exists_origin, $exists_ref_table, $exists_ref_row_id, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_slug, $order_origin, $order_created_at, $order_updated_at, $order_date, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $origin_partial, $origin_start_with, $origin_end_with, $system_trace_partial): \OpenAPI\Client\Model\AccountingTransactionDropDown200Response
```

Retrieves the collection of accounting_transactions resources.

Retrieves the collection of accounting_transactions resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
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
$id = 56; // int | 
$id2 = array(56); // int[] | 
$origin = 'origin_example'; // string | 
$origin2 = array('origin_example'); // string[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$period = 'period_example'; // string | 
$period2 = array('period_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_comment = True; // bool | 
$exists_system_trace = True; // bool | 
$exists_origin = True; // bool | 
$exists_ref_table = True; // bool | 
$exists_ref_row_id = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_origin = 'order_origin_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date = 'order_date_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounting_transactions slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounting_transactions slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounting_transactions slug_end_with
$id_partial = 'id_partial_example'; // string | accounting_transactions id_partial
$id_start_with = 'id_start_with_example'; // string | accounting_transactions id_start_with
$id_end_with = 'id_end_with_example'; // string | accounting_transactions id_end_with
$ref_partial = 'ref_partial_example'; // string | accounting_transactions ref_partial
$ref_start_with = 'ref_start_with_example'; // string | accounting_transactions ref_start_with
$ref_end_with = 'ref_end_with_example'; // string | accounting_transactions ref_end_with
$origin_partial = 'origin_partial_example'; // string | accounting_transactions origin_partial
$origin_start_with = 'origin_start_with_example'; // string | accounting_transactions origin_start_with
$origin_end_with = 'origin_end_with_example'; // string | accounting_transactions origin_end_with
$system_trace_partial = 'system_trace_partial_example'; // string | accounting_transactions systemTrace_partial

try {
    $result = $apiInstance->accountingTransactionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $origin, $origin2, $ref_table, $ref_table2, $period, $period2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_comment, $exists_system_trace, $exists_origin, $exists_ref_table, $exists_ref_row_id, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_slug, $order_origin, $order_created_at, $order_updated_at, $order_date, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $origin_partial, $origin_start_with, $origin_end_with, $system_trace_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->accountingTransactionDropDown: ', $e->getMessage(), PHP_EOL;
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
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **origin** | **string**|  | [optional] |
| **origin2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **period** | **string**|  | [optional] |
| **period2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_comment** | **bool**|  | [optional] |
| **exists_system_trace** | **bool**|  | [optional] |
| **exists_origin** | **bool**|  | [optional] |
| **exists_ref_table** | **bool**|  | [optional] |
| **exists_ref_row_id** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_origin** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **slug_partial** | **string**| accounting_transactions slug_partial | [optional] |
| **slug_start_with** | **string**| accounting_transactions slug_start_with | [optional] |
| **slug_end_with** | **string**| accounting_transactions slug_end_with | [optional] |
| **id_partial** | **string**| accounting_transactions id_partial | [optional] |
| **id_start_with** | **string**| accounting_transactions id_start_with | [optional] |
| **id_end_with** | **string**| accounting_transactions id_end_with | [optional] |
| **ref_partial** | **string**| accounting_transactions ref_partial | [optional] |
| **ref_start_with** | **string**| accounting_transactions ref_start_with | [optional] |
| **ref_end_with** | **string**| accounting_transactions ref_end_with | [optional] |
| **origin_partial** | **string**| accounting_transactions origin_partial | [optional] |
| **origin_start_with** | **string**| accounting_transactions origin_start_with | [optional] |
| **origin_end_with** | **string**| accounting_transactions origin_end_with | [optional] |
| **system_trace_partial** | **string**| accounting_transactions systemTrace_partial | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionDropDown200Response**](../Model/AccountingTransactionDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionDuplicate()`

```php
accountingTransactionDuplicate($id): \OpenAPI\Client\Model\AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdTimestampableTagTaggingList
```

Retrieves a accounting_transactions resource.

Retrieves a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier

try {
    $result = $apiInstance->accountingTransactionDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->accountingTransactionDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdTimestampableTagTaggingList**](../Model/AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionFetchFiles()`

```php
accountingTransactionFetchFiles($id): \OpenAPI\Client\Model\AccountingTransactionsJsonld
```

Retrieves a accounting_transactions resource.

Retrieves a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier

try {
    $result = $apiInstance->accountingTransactionFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->accountingTransactionFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonld**](../Model/AccountingTransactionsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionGetBySlug()`

```php
accountingTransactionGetBySlug($slug): \OpenAPI\Client\Model\AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a accounting_transactions resource.

Retrieves a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | accounting_transactions identifier

try {
    $result = $apiInstance->accountingTransactionGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->accountingTransactionGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| accounting_transactions identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdCustomPropertyTimestampableTagTaggingList**](../Model/AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionGetDeleteRelations()`

```php
accountingTransactionGetDeleteRelations($id): \OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionRelations
```

Retrieves a accounting_transactions resource.

Retrieves a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier

try {
    $result = $apiInstance->accountingTransactionGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->accountingTransactionGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionRelations**](../Model/AccountingTransactionsJsonldAccountingTransactionRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionMetadata()`

```php
accountingTransactionMetadata($id): \OpenAPI\Client\Model\AccountingTransactionsJsonldIdStandardMetadataAccountingTransactionMetadataTagTaggingListAccountingTransactionRelationsTimestampable
```

Retrieves a accounting_transactions resource.

Retrieves a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier

try {
    $result = $apiInstance->accountingTransactionMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->accountingTransactionMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldIdStandardMetadataAccountingTransactionMetadataTagTaggingListAccountingTransactionRelationsTimestampable**](../Model/AccountingTransactionsJsonldIdStandardMetadataAccountingTransactionMetadataTagTaggingListAccountingTransactionRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactionsGetCollection()`

```php
apiAccountingTransactionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $origin, $origin2, $ref_table, $ref_table2, $period, $period2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_comment, $exists_system_trace, $exists_origin, $exists_ref_table, $exists_ref_row_id, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_slug, $order_origin, $order_created_at, $order_updated_at, $order_date, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $origin_partial, $origin_start_with, $origin_end_with, $system_trace_partial): \OpenAPI\Client\Model\ApiAccountingTransactionsGetCollection200Response
```

Retrieves the collection of accounting_transactions resources.

Retrieves the collection of accounting_transactions resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
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
$id = 56; // int | 
$id2 = array(56); // int[] | 
$origin = 'origin_example'; // string | 
$origin2 = array('origin_example'); // string[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$period = 'period_example'; // string | 
$period2 = array('period_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_comment = True; // bool | 
$exists_system_trace = True; // bool | 
$exists_origin = True; // bool | 
$exists_ref_table = True; // bool | 
$exists_ref_row_id = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_origin = 'order_origin_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date = 'order_date_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounting_transactions slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounting_transactions slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounting_transactions slug_end_with
$id_partial = 'id_partial_example'; // string | accounting_transactions id_partial
$id_start_with = 'id_start_with_example'; // string | accounting_transactions id_start_with
$id_end_with = 'id_end_with_example'; // string | accounting_transactions id_end_with
$ref_partial = 'ref_partial_example'; // string | accounting_transactions ref_partial
$ref_start_with = 'ref_start_with_example'; // string | accounting_transactions ref_start_with
$ref_end_with = 'ref_end_with_example'; // string | accounting_transactions ref_end_with
$origin_partial = 'origin_partial_example'; // string | accounting_transactions origin_partial
$origin_start_with = 'origin_start_with_example'; // string | accounting_transactions origin_start_with
$origin_end_with = 'origin_end_with_example'; // string | accounting_transactions origin_end_with
$system_trace_partial = 'system_trace_partial_example'; // string | accounting_transactions systemTrace_partial

try {
    $result = $apiInstance->apiAccountingTransactionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $id, $id2, $origin, $origin2, $ref_table, $ref_table2, $period, $period2, $type, $type2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_comment, $exists_system_trace, $exists_origin, $exists_ref_table, $exists_ref_row_id, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_slug, $order_origin, $order_created_at, $order_updated_at, $order_date, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $origin_partial, $origin_start_with, $origin_end_with, $system_trace_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->apiAccountingTransactionsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **origin** | **string**|  | [optional] |
| **origin2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **period** | **string**|  | [optional] |
| **period2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_comment** | **bool**|  | [optional] |
| **exists_system_trace** | **bool**|  | [optional] |
| **exists_origin** | **bool**|  | [optional] |
| **exists_ref_table** | **bool**|  | [optional] |
| **exists_ref_row_id** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_origin** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **slug_partial** | **string**| accounting_transactions slug_partial | [optional] |
| **slug_start_with** | **string**| accounting_transactions slug_start_with | [optional] |
| **slug_end_with** | **string**| accounting_transactions slug_end_with | [optional] |
| **id_partial** | **string**| accounting_transactions id_partial | [optional] |
| **id_start_with** | **string**| accounting_transactions id_start_with | [optional] |
| **id_end_with** | **string**| accounting_transactions id_end_with | [optional] |
| **ref_partial** | **string**| accounting_transactions ref_partial | [optional] |
| **ref_start_with** | **string**| accounting_transactions ref_start_with | [optional] |
| **ref_end_with** | **string**| accounting_transactions ref_end_with | [optional] |
| **origin_partial** | **string**| accounting_transactions origin_partial | [optional] |
| **origin_start_with** | **string**| accounting_transactions origin_start_with | [optional] |
| **origin_end_with** | **string**| accounting_transactions origin_end_with | [optional] |
| **system_trace_partial** | **string**| accounting_transactions systemTrace_partial | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiAccountingTransactionsGetCollection200Response**](../Model/ApiAccountingTransactionsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactionsIdDelete()`

```php
apiAccountingTransactionsIdDelete($id)
```

Removes the accounting_transactions resource.

Removes the accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier

try {
    $apiInstance->apiAccountingTransactionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->apiAccountingTransactionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |

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

## `apiAccountingTransactionsIdGet()`

```php
apiAccountingTransactionsIdGet($id): \OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a accounting_transactions resource.

Retrieves a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier

try {
    $result = $apiInstance->apiAccountingTransactionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->apiAccountingTransactionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactionsIdPut()`

```php
apiAccountingTransactionsIdPut($id, $accounting_transactions_jsonld_post): \OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow
```

Replaces the accounting_transactions resource.

Replaces the accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactions identifier
$accounting_transactions_jsonld_post = new \OpenAPI\Client\Model\AccountingTransactionsJsonldPost(); // \OpenAPI\Client\Model\AccountingTransactionsJsonldPost | The updated accounting_transactions resource

try {
    $result = $apiInstance->apiAccountingTransactionsIdPut($id, $accounting_transactions_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->apiAccountingTransactionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactions identifier | |
| **accounting_transactions_jsonld_post** | [**\OpenAPI\Client\Model\AccountingTransactionsJsonldPost**](../Model/AccountingTransactionsJsonldPost.md)| The updated accounting_transactions resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingTransactionsJsonldAccountingTransactionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactionsPost()`

```php
apiAccountingTransactionsPost($accounting_transactions_jsonld_add_post): \OpenAPI\Client\Model\AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdCustomPropertyTimestampableTagTaggingListNoteRelations
```

Creates a accounting_transactions resource.

Creates a accounting_transactions resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_transactions_jsonld_add_post = new \OpenAPI\Client\Model\AccountingTransactionsJsonldAddPost(); // \OpenAPI\Client\Model\AccountingTransactionsJsonldAddPost | The new accounting_transactions resource

try {
    $result = $apiInstance->apiAccountingTransactionsPost($accounting_transactions_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionsApi->apiAccountingTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_transactions_jsonld_add_post** | [**\OpenAPI\Client\Model\AccountingTransactionsJsonldAddPost**](../Model/AccountingTransactionsJsonldAddPost.md)| The new accounting_transactions resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdCustomPropertyTimestampableTagTaggingListNoteRelations**](../Model/AccountingTransactionsJsonldStandardShowAccountingTransactionShowIdCustomPropertyTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
