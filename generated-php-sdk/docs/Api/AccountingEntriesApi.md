# OpenAPI\Client\AccountingEntriesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingAccountMetadata()**](AccountingEntriesApi.md#accountingAccountMetadata) | **GET** /open-api/v3/accounting_entries/metadata/{id} | Retrieves a accounting_entries resource. |
| [**accountingEntryApiFileUpload()**](AccountingEntriesApi.md#accountingEntryApiFileUpload) | **POST** /open-api/v3/accounting_entries/{id}/file/upload | Creates a accounting_entries resource. |
| [**accountingEntryDropDown()**](AccountingEntriesApi.md#accountingEntryDropDown) | **GET** /open-api/v3/accounting_entries/dropdown/get | Retrieves the collection of accounting_entries resources. |
| [**accountingEntryDuplicate()**](AccountingEntriesApi.md#accountingEntryDuplicate) | **GET** /open-api/v3/accounting_entries/duplicate/{id} | Retrieves a accounting_entries resource. |
| [**accountingEntryFetchFiles()**](AccountingEntriesApi.md#accountingEntryFetchFiles) | **GET** /open-api/v3/accounting_entries/fetch_files/{id} | Retrieves a accounting_entries resource. |
| [**accountingEntryGetBySlug()**](AccountingEntriesApi.md#accountingEntryGetBySlug) | **GET** /open-api/v3/accounting_entries/by_slug/{slug} | Retrieves a accounting_entries resource. |
| [**accountingEntryGetDeleteRelations()**](AccountingEntriesApi.md#accountingEntryGetDeleteRelations) | **GET** /open-api/v3/accounting_entries/get_delete_relations/{id} | Retrieves a accounting_entries resource. |
| [**apiAccountingEntriesGetCollection()**](AccountingEntriesApi.md#apiAccountingEntriesGetCollection) | **GET** /open-api/v3/accounting_entries | Retrieves the collection of accounting_entries resources. |
| [**apiAccountingEntriesIdDelete()**](AccountingEntriesApi.md#apiAccountingEntriesIdDelete) | **DELETE** /open-api/v3/accounting_entries/{id} | Removes the accounting_entries resource. |
| [**apiAccountingEntriesIdGet()**](AccountingEntriesApi.md#apiAccountingEntriesIdGet) | **GET** /open-api/v3/accounting_entries/{id} | Retrieves a accounting_entries resource. |
| [**apiAccountingEntriesIdPut()**](AccountingEntriesApi.md#apiAccountingEntriesIdPut) | **PUT** /open-api/v3/accounting_entries/{id} | Replaces the accounting_entries resource. |
| [**apiAccountingEntriesPost()**](AccountingEntriesApi.md#apiAccountingEntriesPost) | **POST** /open-api/v3/accounting_entries | Creates a accounting_entries resource. |


## `accountingAccountMetadata()`

```php
accountingAccountMetadata($id): \OpenAPI\Client\Model\AccountingEntriesJsonldIdStandardMetadataAccountingEntryMetadataTagTaggingListAccountingEntryRelationsTimestampable
```

Retrieves a accounting_entries resource.

Retrieves a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier

try {
    $result = $apiInstance->accountingAccountMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingAccountMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldIdStandardMetadataAccountingEntryMetadataTagTaggingListAccountingEntryRelationsTimestampable**](../Model/AccountingEntriesJsonldIdStandardMetadataAccountingEntryMetadataTagTaggingListAccountingEntryRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryApiFileUpload()`

```php
accountingEntryApiFileUpload($id, $accounting_entries_jsonld): \OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow
```

Creates a accounting_entries resource.

Creates a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier
$accounting_entries_jsonld = new \OpenAPI\Client\Model\AccountingEntriesJsonld(); // \OpenAPI\Client\Model\AccountingEntriesJsonld | The new accounting_entries resource

try {
    $result = $apiInstance->accountingEntryApiFileUpload($id, $accounting_entries_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntryApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |
| **accounting_entries_jsonld** | [**\OpenAPI\Client\Model\AccountingEntriesJsonld**](../Model/AccountingEntriesJsonld.md)| The new accounting_entries resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryDropDown()`

```php
accountingEntryDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $transaction, $transaction2, $account, $account2, $search, $amount, $amount2, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_amount): \OpenAPI\Client\Model\AccountingEntryDropDown200Response
```

Retrieves the collection of accounting_entries resources.

Retrieves the collection of accounting_entries resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
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
$transaction = 'transaction_example'; // string | 
$transaction2 = array('transaction_example'); // string[] | 
$account = 'account_example'; // string | 
$account2 = array('account_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_amount = 'order_amount_example'; // string | 

try {
    $result = $apiInstance->accountingEntryDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $transaction, $transaction2, $account, $account2, $search, $amount, $amount2, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntryDropDown: ', $e->getMessage(), PHP_EOL;
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
| **transaction** | **string**|  | [optional] |
| **transaction2** | [**string[]**](../Model/string.md)|  | [optional] |
| **account** | **string**|  | [optional] |
| **account2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_amount** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingEntryDropDown200Response**](../Model/AccountingEntryDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryDuplicate()`

```php
accountingEntryDuplicate($id): \OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingList
```

Retrieves a accounting_entries resource.

Retrieves a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier

try {
    $result = $apiInstance->accountingEntryDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntryDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingList**](../Model/AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryFetchFiles()`

```php
accountingEntryFetchFiles($id): \OpenAPI\Client\Model\AccountingEntriesJsonld
```

Retrieves a accounting_entries resource.

Retrieves a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier

try {
    $result = $apiInstance->accountingEntryFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntryFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonld**](../Model/AccountingEntriesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryGetBySlug()`

```php
accountingEntryGetBySlug($slug): \OpenAPI\Client\Model\AccountingEntriesJsonldStandardShowAccountingEntryShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a accounting_entries resource.

Retrieves a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | accounting_entries identifier

try {
    $result = $apiInstance->accountingEntryGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntryGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| accounting_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldStandardShowAccountingEntryShowIdCustomPropertyTimestampableTagTaggingList**](../Model/AccountingEntriesJsonldStandardShowAccountingEntryShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingEntryGetDeleteRelations()`

```php
accountingEntryGetDeleteRelations($id): \OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryRelations
```

Retrieves a accounting_entries resource.

Retrieves a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier

try {
    $result = $apiInstance->accountingEntryGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->accountingEntryGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryRelations**](../Model/AccountingEntriesJsonldAccountingEntryRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingEntriesGetCollection()`

```php
apiAccountingEntriesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $transaction, $transaction2, $account, $account2, $search, $amount, $amount2, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_amount, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $comment_partial, $amount_range): \OpenAPI\Client\Model\ApiAccountingEntriesGetCollection200Response
```

Retrieves the collection of accounting_entries resources.

Retrieves the collection of accounting_entries resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
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
$transaction = 'transaction_example'; // string | 
$transaction2 = array('transaction_example'); // string[] | 
$account = 'account_example'; // string | 
$account2 = array('account_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_amount = 'order_amount_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounting_entries slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounting_entries slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounting_entries slug_end_with
$id_partial = 'id_partial_example'; // string | accounting_entries id_partial
$id_start_with = 'id_start_with_example'; // string | accounting_entries id_start_with
$id_end_with = 'id_end_with_example'; // string | accounting_entries id_end_with
$comment_partial = 'comment_partial_example'; // string | accounting_entries comment_partial
$amount_range = 'amount_range_example'; // string | accounting_entries amount_range

try {
    $result = $apiInstance->apiAccountingEntriesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $transaction, $transaction2, $account, $account2, $search, $amount, $amount2, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_amount, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $comment_partial, $amount_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->apiAccountingEntriesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **transaction** | **string**|  | [optional] |
| **transaction2** | [**string[]**](../Model/string.md)|  | [optional] |
| **account** | **string**|  | [optional] |
| **account2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_amount** | **string**|  | [optional] |
| **slug_partial** | **string**| accounting_entries slug_partial | [optional] |
| **slug_start_with** | **string**| accounting_entries slug_start_with | [optional] |
| **slug_end_with** | **string**| accounting_entries slug_end_with | [optional] |
| **id_partial** | **string**| accounting_entries id_partial | [optional] |
| **id_start_with** | **string**| accounting_entries id_start_with | [optional] |
| **id_end_with** | **string**| accounting_entries id_end_with | [optional] |
| **comment_partial** | **string**| accounting_entries comment_partial | [optional] |
| **amount_range** | **string**| accounting_entries amount_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiAccountingEntriesGetCollection200Response**](../Model/ApiAccountingEntriesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingEntriesIdDelete()`

```php
apiAccountingEntriesIdDelete($id)
```

Removes the accounting_entries resource.

Removes the accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier

try {
    $apiInstance->apiAccountingEntriesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->apiAccountingEntriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |

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

## `apiAccountingEntriesIdGet()`

```php
apiAccountingEntriesIdGet($id): \OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a accounting_entries resource.

Retrieves a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier

try {
    $result = $apiInstance->apiAccountingEntriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->apiAccountingEntriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingEntriesIdPut()`

```php
apiAccountingEntriesIdPut($id, $accounting_entries_jsonld_post): \OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow
```

Replaces the accounting_entries resource.

Replaces the accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_entries identifier
$accounting_entries_jsonld_post = new \OpenAPI\Client\Model\AccountingEntriesJsonldPost(); // \OpenAPI\Client\Model\AccountingEntriesJsonldPost | The updated accounting_entries resource

try {
    $result = $apiInstance->apiAccountingEntriesIdPut($id, $accounting_entries_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->apiAccountingEntriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_entries identifier | |
| **accounting_entries_jsonld_post** | [**\OpenAPI\Client\Model\AccountingEntriesJsonldPost**](../Model/AccountingEntriesJsonldPost.md)| The updated accounting_entries resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingEntriesJsonldAccountingEntryShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingEntriesPost()`

```php
apiAccountingEntriesPost($accounting_entries_jsonld_add_post): \OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Creates a accounting_entries resource.

Creates a accounting_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_entries_jsonld_add_post = new \OpenAPI\Client\Model\AccountingEntriesJsonldAddPost(); // \OpenAPI\Client\Model\AccountingEntriesJsonldAddPost | The new accounting_entries resource

try {
    $result = $apiInstance->apiAccountingEntriesPost($accounting_entries_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingEntriesApi->apiAccountingEntriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_entries_jsonld_add_post** | [**\OpenAPI\Client\Model\AccountingEntriesJsonldAddPost**](../Model/AccountingEntriesJsonldAddPost.md)| The new accounting_entries resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingEntriesJsonldAccountingEntryShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/AccountingEntriesJsonldAccountingEntryShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
