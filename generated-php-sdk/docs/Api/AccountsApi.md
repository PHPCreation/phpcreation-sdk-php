# OpenAPI\Client\AccountsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingAccountApiFileUpload()**](AccountsApi.md#accountingAccountApiFileUpload) | **POST** /open-api/v3/accounts/{id}/file/upload | Creates a accounts resource. |
| [**accountingAccountDropDown()**](AccountsApi.md#accountingAccountDropDown) | **GET** /open-api/v3/accounts/dropdown/get | Retrieves the collection of accounts resources. |
| [**accountingAccountDuplicate()**](AccountsApi.md#accountingAccountDuplicate) | **GET** /open-api/v3/accounts/duplicate/{id} | Retrieves a accounts resource. |
| [**accountingAccountFetchFiles()**](AccountsApi.md#accountingAccountFetchFiles) | **GET** /open-api/v3/accounts/fetch_files/{id} | Retrieves a accounts resource. |
| [**accountingAccountGetBySlug()**](AccountsApi.md#accountingAccountGetBySlug) | **GET** /open-api/v3/accounts/by_slug/{slug} | Retrieves a accounts resource. |
| [**accountingAccountGetDeleteRelations()**](AccountsApi.md#accountingAccountGetDeleteRelations) | **GET** /open-api/v3/accounts/get_delete_relations/{id} | Retrieves a accounts resource. |
| [**apiAccountsGetCollection()**](AccountsApi.md#apiAccountsGetCollection) | **GET** /open-api/v3/accounts | Retrieves the collection of accounts resources. |
| [**apiAccountsIdDelete()**](AccountsApi.md#apiAccountsIdDelete) | **DELETE** /open-api/v3/accounts/{id} | Removes the accounts resource. |
| [**apiAccountsIdGet()**](AccountsApi.md#apiAccountsIdGet) | **GET** /open-api/v3/accounts/{id} | Retrieves a accounts resource. |
| [**apiAccountsIdPut()**](AccountsApi.md#apiAccountsIdPut) | **PUT** /open-api/v3/accounts/{id} | Replaces the accounts resource. |
| [**apiAccountsPost()**](AccountsApi.md#apiAccountsPost) | **POST** /open-api/v3/accounts | Creates a accounts resource. |


## `accountingAccountApiFileUpload()`

```php
accountingAccountApiFileUpload($id, $accounts_jsonld_file_upload): \OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow
```

Creates a accounts resource.

Creates a accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounts identifier
$accounts_jsonld_file_upload = new \OpenAPI\Client\Model\AccountsJsonldFileUpload(); // \OpenAPI\Client\Model\AccountsJsonldFileUpload | The new accounts resource

try {
    $result = $apiInstance->accountingAccountApiFileUpload($id, $accounts_jsonld_file_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountingAccountApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounts identifier | |
| **accounts_jsonld_file_upload** | [**\OpenAPI\Client\Model\AccountsJsonldFileUpload**](../Model/AccountsJsonldFileUpload.md)| The new accounts resource | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountDropDown()`

```php
accountingAccountDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref, $ref2, $igrf, $igrf2, $type, $type2, $parent, $parent2, $children, $children2, $search, $budget, $budget2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_root, $exists_ref, $exists_igrf, $exists_metadata, $properties, $enabled, $is_repertoire, $accepts_transactions, $tag, $order_id, $order_ref, $order_igrf, $order_created_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $igrf_partial, $igrf_start_with, $igrf_end_with, $budget_range): \OpenAPI\Client\Model\AccountingAccountDropDown200Response
```

Retrieves the collection of accounts resources.

Retrieves the collection of accounts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
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
$ref = 'ref_example'; // string | 
$ref2 = array('ref_example'); // string[] | 
$igrf = 'igrf_example'; // string | 
$igrf2 = array('igrf_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$children = 'children_example'; // string | 
$children2 = array('children_example'); // string[] | 
$search = 'search_example'; // string | 
$budget = 'budget_example'; // string | 
$budget2 = array('budget_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_root = True; // bool | 
$exists_ref = True; // bool | 
$exists_igrf = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$is_repertoire = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$accepts_transactions = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_ref = 'order_ref_example'; // string | 
$order_igrf = 'order_igrf_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounts slug_end_with
$id_partial = 'id_partial_example'; // string | accounts id_partial
$id_start_with = 'id_start_with_example'; // string | accounts id_start_with
$id_end_with = 'id_end_with_example'; // string | accounts id_end_with
$ref_partial = 'ref_partial_example'; // string | accounts ref_partial
$ref_start_with = 'ref_start_with_example'; // string | accounts ref_start_with
$ref_end_with = 'ref_end_with_example'; // string | accounts ref_end_with
$igrf_partial = 'igrf_partial_example'; // string | accounts igrf_partial
$igrf_start_with = 'igrf_start_with_example'; // string | accounts igrf_start_with
$igrf_end_with = 'igrf_end_with_example'; // string | accounts igrf_end_with
$budget_range = 'budget_range_example'; // string | accounts budget_range

try {
    $result = $apiInstance->accountingAccountDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref, $ref2, $igrf, $igrf2, $type, $type2, $parent, $parent2, $children, $children2, $search, $budget, $budget2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_root, $exists_ref, $exists_igrf, $exists_metadata, $properties, $enabled, $is_repertoire, $accepts_transactions, $tag, $order_id, $order_ref, $order_igrf, $order_created_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $igrf_partial, $igrf_start_with, $igrf_end_with, $budget_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountingAccountDropDown: ', $e->getMessage(), PHP_EOL;
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
| **ref** | **string**|  | [optional] |
| **ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **igrf** | **string**|  | [optional] |
| **igrf2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **children** | **string**|  | [optional] |
| **children2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **budget** | **string**|  | [optional] |
| **budget2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_root** | **bool**|  | [optional] |
| **exists_ref** | **bool**|  | [optional] |
| **exists_igrf** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **is_repertoire** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **accepts_transactions** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_ref** | **string**|  | [optional] |
| **order_igrf** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **slug_partial** | **string**| accounts slug_partial | [optional] |
| **slug_start_with** | **string**| accounts slug_start_with | [optional] |
| **slug_end_with** | **string**| accounts slug_end_with | [optional] |
| **id_partial** | **string**| accounts id_partial | [optional] |
| **id_start_with** | **string**| accounts id_start_with | [optional] |
| **id_end_with** | **string**| accounts id_end_with | [optional] |
| **ref_partial** | **string**| accounts ref_partial | [optional] |
| **ref_start_with** | **string**| accounts ref_start_with | [optional] |
| **ref_end_with** | **string**| accounts ref_end_with | [optional] |
| **igrf_partial** | **string**| accounts igrf_partial | [optional] |
| **igrf_start_with** | **string**| accounts igrf_start_with | [optional] |
| **igrf_end_with** | **string**| accounts igrf_end_with | [optional] |
| **budget_range** | **string**| accounts budget_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingAccountDropDown200Response**](../Model/AccountingAccountDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountDuplicate()`

```php
accountingAccountDuplicate($id): \OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList
```

Retrieves a accounts resource.

Retrieves a accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounts identifier

try {
    $result = $apiInstance->accountingAccountDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountingAccountDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounts identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList**](../Model/AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountFetchFiles()`

```php
accountingAccountFetchFiles($id): \OpenAPI\Client\Model\AccountsJsonld
```

Retrieves a accounts resource.

Retrieves a accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounts identifier

try {
    $result = $apiInstance->accountingAccountFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountingAccountFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounts identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonld**](../Model/AccountsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountGetBySlug()`

```php
accountingAccountGetBySlug($slug): \OpenAPI\Client\Model\AccountsJsonldStandardShowAccountingAccountShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a accounts resource.

Retrieves a accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | accounts identifier

try {
    $result = $apiInstance->accountingAccountGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountingAccountGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| accounts identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonldStandardShowAccountingAccountShowIdCustomPropertyTimestampableTagTaggingList**](../Model/AccountsJsonldStandardShowAccountingAccountShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountGetDeleteRelations()`

```php
accountingAccountGetDeleteRelations($id): \OpenAPI\Client\Model\AccountsJsonldAccountingAccountRelations
```

Retrieves a accounts resource.

Retrieves a accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounts identifier

try {
    $result = $apiInstance->accountingAccountGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountingAccountGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounts identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountRelations**](../Model/AccountsJsonldAccountingAccountRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountsGetCollection()`

```php
apiAccountsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref, $ref2, $igrf, $igrf2, $type, $type2, $parent, $parent2, $children, $children2, $search, $budget, $budget2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_root, $exists_ref, $exists_igrf, $exists_metadata, $properties, $enabled, $is_repertoire, $accepts_transactions, $tag, $order_id, $order_ref, $order_igrf, $order_created_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $igrf_partial, $igrf_start_with, $igrf_end_with, $budget_range): \OpenAPI\Client\Model\ApiAccountsGetCollection200Response
```

Retrieves the collection of accounts resources.

Retrieves the collection of accounts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
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
$ref = 'ref_example'; // string | 
$ref2 = array('ref_example'); // string[] | 
$igrf = 'igrf_example'; // string | 
$igrf2 = array('igrf_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$children = 'children_example'; // string | 
$children2 = array('children_example'); // string[] | 
$search = 'search_example'; // string | 
$budget = 'budget_example'; // string | 
$budget2 = array('budget_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_root = True; // bool | 
$exists_ref = True; // bool | 
$exists_igrf = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$is_repertoire = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$accepts_transactions = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_ref = 'order_ref_example'; // string | 
$order_igrf = 'order_igrf_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounts slug_end_with
$id_partial = 'id_partial_example'; // string | accounts id_partial
$id_start_with = 'id_start_with_example'; // string | accounts id_start_with
$id_end_with = 'id_end_with_example'; // string | accounts id_end_with
$ref_partial = 'ref_partial_example'; // string | accounts ref_partial
$ref_start_with = 'ref_start_with_example'; // string | accounts ref_start_with
$ref_end_with = 'ref_end_with_example'; // string | accounts ref_end_with
$igrf_partial = 'igrf_partial_example'; // string | accounts igrf_partial
$igrf_start_with = 'igrf_start_with_example'; // string | accounts igrf_start_with
$igrf_end_with = 'igrf_end_with_example'; // string | accounts igrf_end_with
$budget_range = 'budget_range_example'; // string | accounts budget_range

try {
    $result = $apiInstance->apiAccountsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $ref, $ref2, $igrf, $igrf2, $type, $type2, $parent, $parent2, $children, $children2, $search, $budget, $budget2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_root, $exists_ref, $exists_igrf, $exists_metadata, $properties, $enabled, $is_repertoire, $accepts_transactions, $tag, $order_id, $order_ref, $order_igrf, $order_created_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $igrf_partial, $igrf_start_with, $igrf_end_with, $budget_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->apiAccountsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **ref** | **string**|  | [optional] |
| **ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **igrf** | **string**|  | [optional] |
| **igrf2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **children** | **string**|  | [optional] |
| **children2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **budget** | **string**|  | [optional] |
| **budget2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_root** | **bool**|  | [optional] |
| **exists_ref** | **bool**|  | [optional] |
| **exists_igrf** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **is_repertoire** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **accepts_transactions** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_ref** | **string**|  | [optional] |
| **order_igrf** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **slug_partial** | **string**| accounts slug_partial | [optional] |
| **slug_start_with** | **string**| accounts slug_start_with | [optional] |
| **slug_end_with** | **string**| accounts slug_end_with | [optional] |
| **id_partial** | **string**| accounts id_partial | [optional] |
| **id_start_with** | **string**| accounts id_start_with | [optional] |
| **id_end_with** | **string**| accounts id_end_with | [optional] |
| **ref_partial** | **string**| accounts ref_partial | [optional] |
| **ref_start_with** | **string**| accounts ref_start_with | [optional] |
| **ref_end_with** | **string**| accounts ref_end_with | [optional] |
| **igrf_partial** | **string**| accounts igrf_partial | [optional] |
| **igrf_start_with** | **string**| accounts igrf_start_with | [optional] |
| **igrf_end_with** | **string**| accounts igrf_end_with | [optional] |
| **budget_range** | **string**| accounts budget_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiAccountsGetCollection200Response**](../Model/ApiAccountsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountsIdDelete()`

```php
apiAccountsIdDelete($id)
```

Removes the accounts resource.

Removes the accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounts identifier

try {
    $apiInstance->apiAccountsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->apiAccountsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounts identifier | |

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

## `apiAccountsIdGet()`

```php
apiAccountsIdGet($id): \OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Retrieves a accounts resource.

Retrieves a accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounts identifier

try {
    $result = $apiInstance->apiAccountsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->apiAccountsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounts identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/AccountsJsonldAccountingAccountShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountsIdPut()`

```php
apiAccountsIdPut($id, $accounts_jsonld_post): \OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow
```

Replaces the accounts resource.

Replaces the accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounts identifier
$accounts_jsonld_post = new \OpenAPI\Client\Model\AccountsJsonldPost(); // \OpenAPI\Client\Model\AccountsJsonldPost | The updated accounts resource

try {
    $result = $apiInstance->apiAccountsIdPut($id, $accounts_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->apiAccountsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounts identifier | |
| **accounts_jsonld_post** | [**\OpenAPI\Client\Model\AccountsJsonldPost**](../Model/AccountsJsonldPost.md)| The updated accounts resource | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountsPost()`

```php
apiAccountsPost($accounts_jsonld_add_post): \OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow
```

Creates a accounts resource.

Creates a accounts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounts_jsonld_add_post = new \OpenAPI\Client\Model\AccountsJsonldAddPost(); // \OpenAPI\Client\Model\AccountsJsonldAddPost | The new accounts resource

try {
    $result = $apiInstance->apiAccountsPost($accounts_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->apiAccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounts_jsonld_add_post** | [**\OpenAPI\Client\Model\AccountsJsonldAddPost**](../Model/AccountsJsonldAddPost.md)| The new accounts resource | |

### Return type

[**\OpenAPI\Client\Model\AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountsJsonldAccountingAccountShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
