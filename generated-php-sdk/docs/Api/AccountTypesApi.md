# OpenAPI\Client\AccountTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountingAccountTypeApiFileUpload()**](AccountTypesApi.md#accountingAccountTypeApiFileUpload) | **POST** /open-api/v3/account_types/{id}/file/upload | Creates a account_types resource. |
| [**accountingAccountTypeDropDown()**](AccountTypesApi.md#accountingAccountTypeDropDown) | **GET** /open-api/v3/account_types/dropdown/get | Retrieves the collection of account_types resources. |
| [**accountingAccountTypeDuplicate()**](AccountTypesApi.md#accountingAccountTypeDuplicate) | **GET** /open-api/v3/account_types/duplicate/{id} | Retrieves a account_types resource. |
| [**accountingAccountTypeFetchFiles()**](AccountTypesApi.md#accountingAccountTypeFetchFiles) | **GET** /open-api/v3/account_types/fetch_files/{id} | Retrieves a account_types resource. |
| [**accountingAccountTypeGetBySlug()**](AccountTypesApi.md#accountingAccountTypeGetBySlug) | **GET** /open-api/v3/account_types/by_slug/{slug} | Retrieves a account_types resource. |
| [**accountingAccountTypeGetDeleteRelations()**](AccountTypesApi.md#accountingAccountTypeGetDeleteRelations) | **GET** /open-api/v3/account_types/get_delete_relations/{id} | Retrieves a account_types resource. |
| [**apiAccountTypesGetCollection()**](AccountTypesApi.md#apiAccountTypesGetCollection) | **GET** /open-api/v3/account_types | Retrieves the collection of account_types resources. |
| [**apiAccountTypesIdGet()**](AccountTypesApi.md#apiAccountTypesIdGet) | **GET** /open-api/v3/account_types/{id} | Retrieves a account_types resource. |


## `accountingAccountTypeApiFileUpload()`

```php
accountingAccountTypeApiFileUpload($id, $account_types_jsonld): \OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a account_types resource.

Creates a account_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | account_types identifier
$account_types_jsonld = new \OpenAPI\Client\Model\AccountTypesJsonld(); // \OpenAPI\Client\Model\AccountTypesJsonld | The new account_types resource

try {
    $result = $apiInstance->accountingAccountTypeApiFileUpload($id, $account_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountingAccountTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| account_types identifier | |
| **account_types_jsonld** | [**\OpenAPI\Client\Model\AccountTypesJsonld**](../Model/AccountTypesJsonld.md)| The new account_types resource | |

### Return type

[**\OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/AccountTypesJsonldAccountingAccountTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountTypeDropDown()`

```php
accountingAccountTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $value, $value2, $search, $modifier, $modifier2, $properties, $enabled, $tag, $order_id, $order_name, $order_value, $order_modifier, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $value_partial, $value_start_with, $value_end_with, $modifier_range): \OpenAPI\Client\Model\AccountingAccountTypeDropDown200Response
```

Retrieves the collection of account_types resources.

Retrieves the collection of account_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$value = 'value_example'; // string | 
$value2 = array('value_example'); // string[] | 
$search = 'search_example'; // string | 
$modifier = 56; // int | 
$modifier2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_value = 'order_value_example'; // string | 
$order_modifier = 'order_modifier_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | account_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | account_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | account_types slug_end_with
$id_partial = 'id_partial_example'; // string | account_types id_partial
$id_start_with = 'id_start_with_example'; // string | account_types id_start_with
$id_end_with = 'id_end_with_example'; // string | account_types id_end_with
$name_partial = 'name_partial_example'; // string | account_types name_partial
$name_start_with = 'name_start_with_example'; // string | account_types name_start_with
$name_end_with = 'name_end_with_example'; // string | account_types name_end_with
$value_partial = 'value_partial_example'; // string | account_types value_partial
$value_start_with = 'value_start_with_example'; // string | account_types value_start_with
$value_end_with = 'value_end_with_example'; // string | account_types value_end_with
$modifier_range = 'modifier_range_example'; // string | account_types modifier_range

try {
    $result = $apiInstance->accountingAccountTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $value, $value2, $search, $modifier, $modifier2, $properties, $enabled, $tag, $order_id, $order_name, $order_value, $order_modifier, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $value_partial, $value_start_with, $value_end_with, $modifier_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountingAccountTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **value** | **string**|  | [optional] |
| **value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **modifier** | **int**|  | [optional] |
| **modifier2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_value** | **string**|  | [optional] |
| **order_modifier** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| account_types slug_partial | [optional] |
| **slug_start_with** | **string**| account_types slug_start_with | [optional] |
| **slug_end_with** | **string**| account_types slug_end_with | [optional] |
| **id_partial** | **string**| account_types id_partial | [optional] |
| **id_start_with** | **string**| account_types id_start_with | [optional] |
| **id_end_with** | **string**| account_types id_end_with | [optional] |
| **name_partial** | **string**| account_types name_partial | [optional] |
| **name_start_with** | **string**| account_types name_start_with | [optional] |
| **name_end_with** | **string**| account_types name_end_with | [optional] |
| **value_partial** | **string**| account_types value_partial | [optional] |
| **value_start_with** | **string**| account_types value_start_with | [optional] |
| **value_end_with** | **string**| account_types value_end_with | [optional] |
| **modifier_range** | **string**| account_types modifier_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountingAccountTypeDropDown200Response**](../Model/AccountingAccountTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountTypeDuplicate()`

```php
accountingAccountTypeDuplicate($id): \OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeShowIdTimestampableTagTaggingList
```

Retrieves a account_types resource.

Retrieves a account_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | account_types identifier

try {
    $result = $apiInstance->accountingAccountTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountingAccountTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| account_types identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeShowIdTimestampableTagTaggingList**](../Model/AccountTypesJsonldAccountingAccountTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountTypeFetchFiles()`

```php
accountingAccountTypeFetchFiles($id): \OpenAPI\Client\Model\AccountTypesJsonld
```

Retrieves a account_types resource.

Retrieves a account_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | account_types identifier

try {
    $result = $apiInstance->accountingAccountTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountingAccountTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| account_types identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountTypesJsonld**](../Model/AccountTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountTypeGetBySlug()`

```php
accountingAccountTypeGetBySlug($slug): \OpenAPI\Client\Model\AccountTypesJsonldStandardShowAccountingAccountTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a account_types resource.

Retrieves a account_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | account_types identifier

try {
    $result = $apiInstance->accountingAccountTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountingAccountTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| account_types identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountTypesJsonldStandardShowAccountingAccountTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/AccountTypesJsonldStandardShowAccountingAccountTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountingAccountTypeGetDeleteRelations()`

```php
accountingAccountTypeGetDeleteRelations($id): \OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeRelations
```

Retrieves a account_types resource.

Retrieves a account_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | account_types identifier

try {
    $result = $apiInstance->accountingAccountTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountingAccountTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| account_types identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeRelations**](../Model/AccountTypesJsonldAccountingAccountTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountTypesGetCollection()`

```php
apiAccountTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $value, $value2, $search, $modifier, $modifier2, $properties, $enabled, $tag, $order_id, $order_name, $order_value, $order_modifier, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $value_partial, $value_start_with, $value_end_with, $modifier_range): \OpenAPI\Client\Model\ApiAccountTypesGetCollection200Response
```

Retrieves the collection of account_types resources.

Retrieves the collection of account_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$value = 'value_example'; // string | 
$value2 = array('value_example'); // string[] | 
$search = 'search_example'; // string | 
$modifier = 56; // int | 
$modifier2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_value = 'order_value_example'; // string | 
$order_modifier = 'order_modifier_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | account_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | account_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | account_types slug_end_with
$id_partial = 'id_partial_example'; // string | account_types id_partial
$id_start_with = 'id_start_with_example'; // string | account_types id_start_with
$id_end_with = 'id_end_with_example'; // string | account_types id_end_with
$name_partial = 'name_partial_example'; // string | account_types name_partial
$name_start_with = 'name_start_with_example'; // string | account_types name_start_with
$name_end_with = 'name_end_with_example'; // string | account_types name_end_with
$value_partial = 'value_partial_example'; // string | account_types value_partial
$value_start_with = 'value_start_with_example'; // string | account_types value_start_with
$value_end_with = 'value_end_with_example'; // string | account_types value_end_with
$modifier_range = 'modifier_range_example'; // string | account_types modifier_range

try {
    $result = $apiInstance->apiAccountTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $value, $value2, $search, $modifier, $modifier2, $properties, $enabled, $tag, $order_id, $order_name, $order_value, $order_modifier, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $value_partial, $value_start_with, $value_end_with, $modifier_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->apiAccountTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **value** | **string**|  | [optional] |
| **value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **modifier** | **int**|  | [optional] |
| **modifier2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_value** | **string**|  | [optional] |
| **order_modifier** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| account_types slug_partial | [optional] |
| **slug_start_with** | **string**| account_types slug_start_with | [optional] |
| **slug_end_with** | **string**| account_types slug_end_with | [optional] |
| **id_partial** | **string**| account_types id_partial | [optional] |
| **id_start_with** | **string**| account_types id_start_with | [optional] |
| **id_end_with** | **string**| account_types id_end_with | [optional] |
| **name_partial** | **string**| account_types name_partial | [optional] |
| **name_start_with** | **string**| account_types name_start_with | [optional] |
| **name_end_with** | **string**| account_types name_end_with | [optional] |
| **value_partial** | **string**| account_types value_partial | [optional] |
| **value_start_with** | **string**| account_types value_start_with | [optional] |
| **value_end_with** | **string**| account_types value_end_with | [optional] |
| **modifier_range** | **string**| account_types modifier_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiAccountTypesGetCollection200Response**](../Model/ApiAccountTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiAccountTypesIdGet()`

```php
apiAccountTypesIdGet($id): \OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a account_types resource.

Retrieves a account_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | account_types identifier

try {
    $result = $apiInstance->apiAccountTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->apiAccountTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| account_types identifier | |

### Return type

[**\OpenAPI\Client\Model\AccountTypesJsonldAccountingAccountTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/AccountTypesJsonldAccountingAccountTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
