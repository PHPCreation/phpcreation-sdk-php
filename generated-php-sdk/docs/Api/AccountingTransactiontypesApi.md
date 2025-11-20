# OpenAPI\Client\AccountingTransactiontypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingTransactionTypeApiFileUpload()**](AccountingTransactiontypesApi.md#accountingTransactionTypeApiFileUpload) | **POST** /open-api/v3/accounting_transactiontypes/{id}/file/upload | Creates a accounting_transactiontypes resource. |
| [**accountingTransactionTypeDropDown()**](AccountingTransactiontypesApi.md#accountingTransactionTypeDropDown) | **GET** /open-api/v3/accounting_transactiontypes/dropdown/get | Retrieves the collection of accounting_transactiontypes resources. |
| [**accountingTransactionTypeDuplicate()**](AccountingTransactiontypesApi.md#accountingTransactionTypeDuplicate) | **GET** /open-api/v3/accounting_transactiontypes/duplicate/{id} | Retrieves a accounting_transactiontypes resource. |
| [**accountingTransactionTypeFetchFiles()**](AccountingTransactiontypesApi.md#accountingTransactionTypeFetchFiles) | **GET** /open-api/v3/accounting_transactiontypes/fetch_files/{id} | Retrieves a accounting_transactiontypes resource. |
| [**accountingTransactionTypeGetBySlug()**](AccountingTransactiontypesApi.md#accountingTransactionTypeGetBySlug) | **GET** /open-api/v3/accounting_transactiontypes/by_slug/{slug} | Retrieves a accounting_transactiontypes resource. |
| [**accountingTransactionTypeGetDeleteRelations()**](AccountingTransactiontypesApi.md#accountingTransactionTypeGetDeleteRelations) | **GET** /open-api/v3/accounting_transactiontypes/get_delete_relations/{id} | Retrieves a accounting_transactiontypes resource. |
| [**accountingTransactionTypeMetadata()**](AccountingTransactiontypesApi.md#accountingTransactionTypeMetadata) | **GET** /open-api/v3/accounting_transactiontypes/metadata/{id} | Retrieves a accounting_transactiontypes resource. |
| [**apiAccountingTransactiontypesGetCollection()**](AccountingTransactiontypesApi.md#apiAccountingTransactiontypesGetCollection) | **GET** /open-api/v3/accounting_transactiontypes | Retrieves the collection of accounting_transactiontypes resources. |
| [**apiAccountingTransactiontypesIdDelete()**](AccountingTransactiontypesApi.md#apiAccountingTransactiontypesIdDelete) | **DELETE** /open-api/v3/accounting_transactiontypes/{id} | Removes the accounting_transactiontypes resource. |
| [**apiAccountingTransactiontypesIdGet()**](AccountingTransactiontypesApi.md#apiAccountingTransactiontypesIdGet) | **GET** /open-api/v3/accounting_transactiontypes/{id} | Retrieves a accounting_transactiontypes resource. |
| [**apiAccountingTransactiontypesIdPut()**](AccountingTransactiontypesApi.md#apiAccountingTransactiontypesIdPut) | **PUT** /open-api/v3/accounting_transactiontypes/{id} | Replaces the accounting_transactiontypes resource. |
| [**apiAccountingTransactiontypesPost()**](AccountingTransactiontypesApi.md#apiAccountingTransactiontypesPost) | **POST** /open-api/v3/accounting_transactiontypes | Creates a accounting_transactiontypes resource. |


## `accountingTransactionTypeApiFileUpload()`

```php
accountingTransactionTypeApiFileUpload($id, $accounting_transactiontypes_jsonld): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldAccountingTransactionTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a accounting_transactiontypes resource.

Creates a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier
$accounting_transactiontypes_jsonld = new \OpenAPI\Client\Model\AccountingTransactiontypesJsonld(); // \OpenAPI\Client\Model\AccountingTransactiontypesJsonld | The new accounting_transactiontypes resource

try {
    $result = $apiInstance->accountingTransactionTypeApiFileUpload($id, $accounting_transactiontypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->accountingTransactionTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |
| **accounting_transactiontypes_jsonld** | [**\OpenAPI\Client\Model\AccountingTransactiontypesJsonld**](../Model/AccountingTransactiontypesJsonld.md)| The new accounting_transactiontypes resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldAccountingTransactionTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountingTransactiontypesJsonldAccountingTransactionTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionTypeDropDown()`

```php
accountingTransactionTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\AccountingTransactionTypeDropDown200Response
```

Retrieves the collection of accounting_transactiontypes resources.

Retrieves the collection of accounting_transactiontypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounting_transactiontypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounting_transactiontypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounting_transactiontypes slug_end_with
$id_partial = 'id_partial_example'; // string | accounting_transactiontypes id_partial
$id_start_with = 'id_start_with_example'; // string | accounting_transactiontypes id_start_with
$id_end_with = 'id_end_with_example'; // string | accounting_transactiontypes id_end_with
$icon_partial = 'icon_partial_example'; // string | accounting_transactiontypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | accounting_transactiontypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | accounting_transactiontypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | accounting_transactiontypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | accounting_transactiontypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | accounting_transactiontypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | accounting_transactiontypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | accounting_transactiontypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | accounting_transactiontypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | accounting_transactiontypes priority_range

try {
    $result = $apiInstance->accountingTransactionTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->accountingTransactionTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| accounting_transactiontypes slug_partial | [optional] |
| **slug_start_with** | **string**| accounting_transactiontypes slug_start_with | [optional] |
| **slug_end_with** | **string**| accounting_transactiontypes slug_end_with | [optional] |
| **id_partial** | **string**| accounting_transactiontypes id_partial | [optional] |
| **id_start_with** | **string**| accounting_transactiontypes id_start_with | [optional] |
| **id_end_with** | **string**| accounting_transactiontypes id_end_with | [optional] |
| **icon_partial** | **string**| accounting_transactiontypes icon_partial | [optional] |
| **icon_start_with** | **string**| accounting_transactiontypes icon_start_with | [optional] |
| **icon_end_with** | **string**| accounting_transactiontypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| accounting_transactiontypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| accounting_transactiontypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| accounting_transactiontypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| accounting_transactiontypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| accounting_transactiontypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| accounting_transactiontypes translations.description_end_with | [optional] |
| **priority_range** | **string**| accounting_transactiontypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactionTypeDropDown200Response**](../Model/AccountingTransactionTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionTypeDuplicate()`

```php
accountingTransactionTypeDuplicate($id): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldAccountingTransactionTypeShowIdTimestampableTagTaggingList
```

Retrieves a accounting_transactiontypes resource.

Retrieves a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier

try {
    $result = $apiInstance->accountingTransactionTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->accountingTransactionTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldAccountingTransactionTypeShowIdTimestampableTagTaggingList**](../Model/AccountingTransactiontypesJsonldAccountingTransactionTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionTypeFetchFiles()`

```php
accountingTransactionTypeFetchFiles($id): \OpenAPI\Client\Model\AccountingTransactiontypesJsonld
```

Retrieves a accounting_transactiontypes resource.

Retrieves a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier

try {
    $result = $apiInstance->accountingTransactionTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->accountingTransactionTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonld**](../Model/AccountingTransactiontypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionTypeGetBySlug()`

```php
accountingTransactionTypeGetBySlug($slug): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a accounting_transactiontypes resource.

Retrieves a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | accounting_transactiontypes identifier

try {
    $result = $apiInstance->accountingTransactionTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->accountingTransactionTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| accounting_transactiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionTypeGetDeleteRelations()`

```php
accountingTransactionTypeGetDeleteRelations($id): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldAccountingTransactionTypeRelations
```

Retrieves a accounting_transactiontypes resource.

Retrieves a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier

try {
    $result = $apiInstance->accountingTransactionTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->accountingTransactionTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldAccountingTransactionTypeRelations**](../Model/AccountingTransactiontypesJsonldAccountingTransactionTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingTransactionTypeMetadata()`

```php
accountingTransactionTypeMetadata($id): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldIdStandardMetadataAccountingTransactionTypeMetadataTagTaggingListAccountingTransactionTypeRelationsTimestampable
```

Retrieves a accounting_transactiontypes resource.

Retrieves a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier

try {
    $result = $apiInstance->accountingTransactionTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->accountingTransactionTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldIdStandardMetadataAccountingTransactionTypeMetadataTagTaggingListAccountingTransactionTypeRelationsTimestampable**](../Model/AccountingTransactiontypesJsonldIdStandardMetadataAccountingTransactionTypeMetadataTagTaggingListAccountingTransactionTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactiontypesGetCollection()`

```php
apiAccountingTransactiontypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiAccountingTransactiontypesGetCollection200Response
```

Retrieves the collection of accounting_transactiontypes resources.

Retrieves the collection of accounting_transactiontypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | accounting_transactiontypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | accounting_transactiontypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | accounting_transactiontypes slug_end_with
$id_partial = 'id_partial_example'; // string | accounting_transactiontypes id_partial
$id_start_with = 'id_start_with_example'; // string | accounting_transactiontypes id_start_with
$id_end_with = 'id_end_with_example'; // string | accounting_transactiontypes id_end_with
$icon_partial = 'icon_partial_example'; // string | accounting_transactiontypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | accounting_transactiontypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | accounting_transactiontypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | accounting_transactiontypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | accounting_transactiontypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | accounting_transactiontypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | accounting_transactiontypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | accounting_transactiontypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | accounting_transactiontypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | accounting_transactiontypes priority_range

try {
    $result = $apiInstance->apiAccountingTransactiontypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->apiAccountingTransactiontypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| accounting_transactiontypes slug_partial | [optional] |
| **slug_start_with** | **string**| accounting_transactiontypes slug_start_with | [optional] |
| **slug_end_with** | **string**| accounting_transactiontypes slug_end_with | [optional] |
| **id_partial** | **string**| accounting_transactiontypes id_partial | [optional] |
| **id_start_with** | **string**| accounting_transactiontypes id_start_with | [optional] |
| **id_end_with** | **string**| accounting_transactiontypes id_end_with | [optional] |
| **icon_partial** | **string**| accounting_transactiontypes icon_partial | [optional] |
| **icon_start_with** | **string**| accounting_transactiontypes icon_start_with | [optional] |
| **icon_end_with** | **string**| accounting_transactiontypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| accounting_transactiontypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| accounting_transactiontypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| accounting_transactiontypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| accounting_transactiontypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| accounting_transactiontypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| accounting_transactiontypes translations.description_end_with | [optional] |
| **priority_range** | **string**| accounting_transactiontypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiAccountingTransactiontypesGetCollection200Response**](../Model/ApiAccountingTransactiontypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactiontypesIdDelete()`

```php
apiAccountingTransactiontypesIdDelete($id)
```

Removes the accounting_transactiontypes resource.

Removes the accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier

try {
    $apiInstance->apiAccountingTransactiontypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->apiAccountingTransactiontypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |

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

## `apiAccountingTransactiontypesIdGet()`

```php
apiAccountingTransactiontypesIdGet($id): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdTimestampableCustomPropertyTagTaggingList
```

Retrieves a accounting_transactiontypes resource.

Retrieves a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier

try {
    $result = $apiInstance->apiAccountingTransactiontypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->apiAccountingTransactiontypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdTimestampableCustomPropertyTagTaggingList**](../Model/AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdTimestampableCustomPropertyTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactiontypesIdPut()`

```php
apiAccountingTransactiontypesIdPut($id, $accounting_transactiontypes_jsonld_post): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the accounting_transactiontypes resource.

Replaces the accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | accounting_transactiontypes identifier
$accounting_transactiontypes_jsonld_post = new \OpenAPI\Client\Model\AccountingTransactiontypesJsonldPost(); // \OpenAPI\Client\Model\AccountingTransactiontypesJsonldPost | The updated accounting_transactiontypes resource

try {
    $result = $apiInstance->apiAccountingTransactiontypesIdPut($id, $accounting_transactiontypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->apiAccountingTransactiontypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| accounting_transactiontypes identifier | |
| **accounting_transactiontypes_jsonld_post** | [**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldPost**](../Model/AccountingTransactiontypesJsonldPost.md)| The updated accounting_transactiontypes resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/AccountingTransactiontypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountingTransactiontypesPost()`

```php
apiAccountingTransactiontypesPost($accounting_transactiontypes_jsonld_add_post): \OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdTimestampableCustomPropertyTagTaggingList
```

Creates a accounting_transactiontypes resource.

Creates a accounting_transactiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountingTransactiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_transactiontypes_jsonld_add_post = new \OpenAPI\Client\Model\AccountingTransactiontypesJsonldAddPost(); // \OpenAPI\Client\Model\AccountingTransactiontypesJsonldAddPost | The new accounting_transactiontypes resource

try {
    $result = $apiInstance->apiAccountingTransactiontypesPost($accounting_transactiontypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactiontypesApi->apiAccountingTransactiontypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_transactiontypes_jsonld_add_post** | [**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldAddPost**](../Model/AccountingTransactiontypesJsonldAddPost.md)| The new accounting_transactiontypes resource | |

### Return type

[**\OpenAPI\Client\Model\AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdTimestampableCustomPropertyTagTaggingList**](../Model/AccountingTransactiontypesJsonldStandardShowAccountingTransactionTypeShowIdTimestampableCustomPropertyTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
