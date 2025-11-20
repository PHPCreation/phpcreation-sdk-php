# OpenAPI\Client\AccountingPeriodsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingPeriodApiFileUpload()**](AccountingPeriodsApi.md#accountingPeriodApiFileUpload) | **POST** /open-api/v3/accounting_periods/{id}/file/upload | Creates a accounting_periods resource. |
| [**accountingPeriodDropDown()**](AccountingPeriodsApi.md#accountingPeriodDropDown) | **GET** /open-api/v3/accounting_periods/dropdown/get | Retrieves the collection of accounting_periods resources. |
| [**accountingPeriodDuplicate()**](AccountingPeriodsApi.md#accountingPeriodDuplicate) | **GET** /open-api/v3/accounting_periods/duplicate/{id} | Retrieves a accounting_periods resource. |
| [**accountingPeriodFetchFiles()**](AccountingPeriodsApi.md#accountingPeriodFetchFiles) | **GET** /open-api/v3/accounting_periods/fetch_files/{id} | Retrieves a accounting_periods resource. |
| [**accountingPeriodGetBySlug()**](AccountingPeriodsApi.md#accountingPeriodGetBySlug) | **GET** /open-api/v3/accounting_periods/by_slug/{slug} | Retrieves a accounting_periods resource. |
| [**accountingPeriodGetDeleteRelations()**](AccountingPeriodsApi.md#accountingPeriodGetDeleteRelations) | **GET** /open-api/v3/accounting_periods/get_delete_relations/{id} | Retrieves a accounting_periods resource. |
| [**accountingPeriodMetadata()**](AccountingPeriodsApi.md#accountingPeriodMetadata) | **GET** /open-api/v3/accounting_periods/metadata/{id} | Retrieves a accounting_periods resource. |
| [**apiAccountingPeriodsGetCollection()**](AccountingPeriodsApi.md#apiAccountingPeriodsGetCollection) | **GET** /open-api/v3/accounting_periods | Retrieves the collection of accounting_periods resources. |
| [**apiAccountingPeriodsIdDelete()**](AccountingPeriodsApi.md#apiAccountingPeriodsIdDelete) | **DELETE** /open-api/v3/accounting_periods/{id} | Removes the accounting_periods resource. |
| [**apiAccountingPeriodsIdGet()**](AccountingPeriodsApi.md#apiAccountingPeriodsIdGet) | **GET** /open-api/v3/accounting_periods/{id} | Retrieves a accounting_periods resource. |
| [**apiAccountingPeriodsIdPut()**](AccountingPeriodsApi.md#apiAccountingPeriodsIdPut) | **PUT** /open-api/v3/accounting_periods/{id} | Replaces the accounting_periods resource. |
| [**apiAccountingPeriodsPost()**](AccountingPeriodsApi.md#apiAccountingPeriodsPost) | **POST** /open-api/v3/accounting_periods | Creates a accounting_periods resource. |


## `accountingPeriodApiFileUpload()`

```php
accountingPeriodApiFileUpload($id, $accounting_periods_jsonld): \OpenAPI\Client\Model\AccountingPeriodsJsonldAccountingPeriodShowIdTimestampableTagTaggingListStandardShow
```

Creates a accounting_periods resource.

Creates a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier
$accounting_periods_jsonld = new \OpenAPI\Client\Model\AccountingPeriodsJsonld(); // \OpenAPI\Client\Model\AccountingPeriodsJsonld | The new accounting_periods resource

try {
    $result = $apiInstance->accountingPeriodApiFileUpload($id, $accounting_periods_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->accountingPeriodApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |
| **accounting_periods_jsonld** | [**\OpenAPI\Client\Model\AccountingPeriodsJsonld**](../Model/AccountingPeriodsJsonld.md)| The new accounting_periods resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonldAccountingPeriodShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingPeriodsJsonldAccountingPeriodShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingPeriodDropDown()`

```php
accountingPeriodDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $closed_at_before, $closed_at_strictly_before, $closed_at_after, $closed_at_strictly_after, $id, $id2, $periodicity, $periodicity2, $parent, $parent2, $child, $child2, $search, $year_end, $closing_amount, $closing_amount2, $closing_diff, $closing_diff2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_closed_at, $exists_closing_amount, $exists_closing_diff, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\AccountingPeriodDropDown200Response
```

Retrieves the collection of accounting_periods resources.

Retrieves the collection of accounting_periods resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$closed_at_before = 'closed_at_before_example'; // string | 
$closed_at_strictly_before = 'closed_at_strictly_before_example'; // string | 
$closed_at_after = 'closed_at_after_example'; // string | 
$closed_at_strictly_after = 'closed_at_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$periodicity = 'periodicity_example'; // string | 
$periodicity2 = array('periodicity_example'); // string[] | 
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$child = 'child_example'; // string | 
$child2 = array('child_example'); // string[] | 
$search = 'search_example'; // string | 
$year_end = True; // bool | 
$closing_amount = 'closing_amount_example'; // string | 
$closing_amount2 = array('closing_amount_example'); // string[] | 
$closing_diff = 'closing_diff_example'; // string | 
$closing_diff2 = array('closing_diff_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_closed_at = True; // bool | 
$exists_closing_amount = True; // bool | 
$exists_closing_diff = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounting_periods slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounting_periods slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounting_periods slug_end_with
$id_partial = 'id_partial_example'; // string | accounting_periods id_partial
$id_start_with = 'id_start_with_example'; // string | accounting_periods id_start_with
$id_end_with = 'id_end_with_example'; // string | accounting_periods id_end_with

try {
    $result = $apiInstance->accountingPeriodDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $closed_at_before, $closed_at_strictly_before, $closed_at_after, $closed_at_strictly_after, $id, $id2, $periodicity, $periodicity2, $parent, $parent2, $child, $child2, $search, $year_end, $closing_amount, $closing_amount2, $closing_diff, $closing_diff2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_closed_at, $exists_closing_amount, $exists_closing_diff, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->accountingPeriodDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **closed_at_before** | **string**|  | [optional] |
| **closed_at_strictly_before** | **string**|  | [optional] |
| **closed_at_after** | **string**|  | [optional] |
| **closed_at_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **periodicity** | **string**|  | [optional] |
| **periodicity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **child** | **string**|  | [optional] |
| **child2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **year_end** | **bool**|  | [optional] |
| **closing_amount** | **string**|  | [optional] |
| **closing_amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **closing_diff** | **string**|  | [optional] |
| **closing_diff2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_closed_at** | **bool**|  | [optional] |
| **exists_closing_amount** | **bool**|  | [optional] |
| **exists_closing_diff** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **slug_partial** | **string**| accounting_periods slug_partial | [optional] |
| **slug_start_with** | **string**| accounting_periods slug_start_with | [optional] |
| **slug_end_with** | **string**| accounting_periods slug_end_with | [optional] |
| **id_partial** | **string**| accounting_periods id_partial | [optional] |
| **id_start_with** | **string**| accounting_periods id_start_with | [optional] |
| **id_end_with** | **string**| accounting_periods id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodDropDown200Response**](../Model/AccountingPeriodDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingPeriodDuplicate()`

```php
accountingPeriodDuplicate($id): \OpenAPI\Client\Model\AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdTimestampableTagTaggingList
```

Retrieves a accounting_periods resource.

Retrieves a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier

try {
    $result = $apiInstance->accountingPeriodDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->accountingPeriodDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdTimestampableTagTaggingList**](../Model/AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingPeriodFetchFiles()`

```php
accountingPeriodFetchFiles($id): \OpenAPI\Client\Model\AccountingPeriodsJsonld
```

Retrieves a accounting_periods resource.

Retrieves a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier

try {
    $result = $apiInstance->accountingPeriodFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->accountingPeriodFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonld**](../Model/AccountingPeriodsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingPeriodGetBySlug()`

```php
accountingPeriodGetBySlug($slug): \OpenAPI\Client\Model\AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a accounting_periods resource.

Retrieves a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | accounting_periods identifier

try {
    $result = $apiInstance->accountingPeriodGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->accountingPeriodGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| accounting_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList**](../Model/AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingPeriodGetDeleteRelations()`

```php
accountingPeriodGetDeleteRelations($id): \OpenAPI\Client\Model\AccountingPeriodsJsonldAccountingPeriodRelations
```

Retrieves a accounting_periods resource.

Retrieves a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier

try {
    $result = $apiInstance->accountingPeriodGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->accountingPeriodGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonldAccountingPeriodRelations**](../Model/AccountingPeriodsJsonldAccountingPeriodRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingPeriodMetadata()`

```php
accountingPeriodMetadata($id): \OpenAPI\Client\Model\AccountingPeriodsJsonldIdStandardMetadataAccountingPeriodMetadataTagTaggingListAccountingPeriodRelationsTimestampable
```

Retrieves a accounting_periods resource.

Retrieves a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier

try {
    $result = $apiInstance->accountingPeriodMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->accountingPeriodMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonldIdStandardMetadataAccountingPeriodMetadataTagTaggingListAccountingPeriodRelationsTimestampable**](../Model/AccountingPeriodsJsonldIdStandardMetadataAccountingPeriodMetadataTagTaggingListAccountingPeriodRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingPeriodsGetCollection()`

```php
apiAccountingPeriodsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $closed_at_before, $closed_at_strictly_before, $closed_at_after, $closed_at_strictly_after, $id, $id2, $periodicity, $periodicity2, $parent, $parent2, $child, $child2, $search, $year_end, $closing_amount, $closing_amount2, $closing_diff, $closing_diff2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_closed_at, $exists_closing_amount, $exists_closing_diff, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiAccountingPeriodsGetCollection200Response
```

Retrieves the collection of accounting_periods resources.

Retrieves the collection of accounting_periods resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$closed_at_before = 'closed_at_before_example'; // string | 
$closed_at_strictly_before = 'closed_at_strictly_before_example'; // string | 
$closed_at_after = 'closed_at_after_example'; // string | 
$closed_at_strictly_after = 'closed_at_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$periodicity = 'periodicity_example'; // string | 
$periodicity2 = array('periodicity_example'); // string[] | 
$parent = 'parent_example'; // string | 
$parent2 = array('parent_example'); // string[] | 
$child = 'child_example'; // string | 
$child2 = array('child_example'); // string[] | 
$search = 'search_example'; // string | 
$year_end = True; // bool | 
$closing_amount = 'closing_amount_example'; // string | 
$closing_amount2 = array('closing_amount_example'); // string[] | 
$closing_diff = 'closing_diff_example'; // string | 
$closing_diff2 = array('closing_diff_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_closed_at = True; // bool | 
$exists_closing_amount = True; // bool | 
$exists_closing_diff = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounting_periods slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounting_periods slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounting_periods slug_end_with
$id_partial = 'id_partial_example'; // string | accounting_periods id_partial
$id_start_with = 'id_start_with_example'; // string | accounting_periods id_start_with
$id_end_with = 'id_end_with_example'; // string | accounting_periods id_end_with

try {
    $result = $apiInstance->apiAccountingPeriodsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $closed_at_before, $closed_at_strictly_before, $closed_at_after, $closed_at_strictly_after, $id, $id2, $periodicity, $periodicity2, $parent, $parent2, $child, $child2, $search, $year_end, $closing_amount, $closing_amount2, $closing_diff, $closing_diff2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_closed_at, $exists_closing_amount, $exists_closing_diff, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->apiAccountingPeriodsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **closed_at_before** | **string**|  | [optional] |
| **closed_at_strictly_before** | **string**|  | [optional] |
| **closed_at_after** | **string**|  | [optional] |
| **closed_at_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **periodicity** | **string**|  | [optional] |
| **periodicity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent** | **string**|  | [optional] |
| **parent2** | [**string[]**](../Model/string.md)|  | [optional] |
| **child** | **string**|  | [optional] |
| **child2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **year_end** | **bool**|  | [optional] |
| **closing_amount** | **string**|  | [optional] |
| **closing_amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **closing_diff** | **string**|  | [optional] |
| **closing_diff2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_closed_at** | **bool**|  | [optional] |
| **exists_closing_amount** | **bool**|  | [optional] |
| **exists_closing_diff** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **slug_partial** | **string**| accounting_periods slug_partial | [optional] |
| **slug_start_with** | **string**| accounting_periods slug_start_with | [optional] |
| **slug_end_with** | **string**| accounting_periods slug_end_with | [optional] |
| **id_partial** | **string**| accounting_periods id_partial | [optional] |
| **id_start_with** | **string**| accounting_periods id_start_with | [optional] |
| **id_end_with** | **string**| accounting_periods id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiAccountingPeriodsGetCollection200Response**](../Model/ApiAccountingPeriodsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingPeriodsIdDelete()`

```php
apiAccountingPeriodsIdDelete($id)
```

Removes the accounting_periods resource.

Removes the accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier

try {
    $apiInstance->apiAccountingPeriodsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->apiAccountingPeriodsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |

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

## `apiAccountingPeriodsIdGet()`

```php
apiAccountingPeriodsIdGet($id): \OpenAPI\Client\Model\AccountingPeriodsJsonldAccountingPeriodShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a accounting_periods resource.

Retrieves a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier

try {
    $result = $apiInstance->apiAccountingPeriodsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->apiAccountingPeriodsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonldAccountingPeriodShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingPeriodsJsonldAccountingPeriodShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingPeriodsIdPut()`

```php
apiAccountingPeriodsIdPut($id, $accounting_periods_jsonld_post): \OpenAPI\Client\Model\AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdTimestampableTagTaggingListAccountingPeriodRelations
```

Replaces the accounting_periods resource.

Replaces the accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_periods identifier
$accounting_periods_jsonld_post = new \OpenAPI\Client\Model\AccountingPeriodsJsonldPost(); // \OpenAPI\Client\Model\AccountingPeriodsJsonldPost | The updated accounting_periods resource

try {
    $result = $apiInstance->apiAccountingPeriodsIdPut($id, $accounting_periods_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->apiAccountingPeriodsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_periods identifier | |
| **accounting_periods_jsonld_post** | [**\OpenAPI\Client\Model\AccountingPeriodsJsonldPost**](../Model/AccountingPeriodsJsonldPost.md)| The updated accounting_periods resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdTimestampableTagTaggingListAccountingPeriodRelations**](../Model/AccountingPeriodsJsonldStandardShowAccountingPeriodShowIdTimestampableTagTaggingListAccountingPeriodRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingPeriodsPost()`

```php
apiAccountingPeriodsPost($accounting_periods_jsonld_add_post): \OpenAPI\Client\Model\AccountingPeriodsJsonld
```

Creates a accounting_periods resource.

Creates a accounting_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_periods_jsonld_add_post = new \OpenAPI\Client\Model\AccountingPeriodsJsonldAddPost(); // \OpenAPI\Client\Model\AccountingPeriodsJsonldAddPost | The new accounting_periods resource

try {
    $result = $apiInstance->apiAccountingPeriodsPost($accounting_periods_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingPeriodsApi->apiAccountingPeriodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_periods_jsonld_add_post** | [**\OpenAPI\Client\Model\AccountingPeriodsJsonldAddPost**](../Model/AccountingPeriodsJsonldAddPost.md)| The new accounting_periods resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingPeriodsJsonld**](../Model/AccountingPeriodsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
