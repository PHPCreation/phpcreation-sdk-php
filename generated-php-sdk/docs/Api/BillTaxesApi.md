# OpenAPI\Client\BillTaxesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillTaxesGetCollection()**](BillTaxesApi.md#apiBillTaxesGetCollection) | **GET** /open-api/v3/bill_taxes | Retrieves the collection of bill_taxes resources. |
| [**apiBillTaxesIdDelete()**](BillTaxesApi.md#apiBillTaxesIdDelete) | **DELETE** /open-api/v3/bill_taxes/{id} | Removes the bill_taxes resource. |
| [**apiBillTaxesIdGet()**](BillTaxesApi.md#apiBillTaxesIdGet) | **GET** /open-api/v3/bill_taxes/{id} | Retrieves a bill_taxes resource. |
| [**apiBillTaxesIdPut()**](BillTaxesApi.md#apiBillTaxesIdPut) | **PUT** /open-api/v3/bill_taxes/{id} | Replaces the bill_taxes resource. |
| [**apiBillTaxesPost()**](BillTaxesApi.md#apiBillTaxesPost) | **POST** /open-api/v3/bill_taxes | Creates a bill_taxes resource. |
| [**billTaxApiCorporationAdd()**](BillTaxesApi.md#billTaxApiCorporationAdd) | **POST** /open-api/v3/bill_taxes/{id}/corporation/add | Creates a bill_taxes resource. |
| [**billTaxApiCorporationRemove()**](BillTaxesApi.md#billTaxApiCorporationRemove) | **POST** /open-api/v3/bill_taxes/{id}/corporation/remove | Creates a bill_taxes resource. |
| [**billTaxApiFileUpload()**](BillTaxesApi.md#billTaxApiFileUpload) | **POST** /open-api/v3/bill_taxes/{id}/file/upload | Creates a bill_taxes resource. |
| [**billTaxDropDown()**](BillTaxesApi.md#billTaxDropDown) | **GET** /open-api/v3/bill_taxes/dropdown/get | Retrieves the collection of bill_taxes resources. |
| [**billTaxDuplicate()**](BillTaxesApi.md#billTaxDuplicate) | **GET** /open-api/v3/bill_taxes/duplicate/{id} | Retrieves a bill_taxes resource. |
| [**billTaxFetchFiles()**](BillTaxesApi.md#billTaxFetchFiles) | **GET** /open-api/v3/bill_taxes/fetch_files/{id} | Retrieves a bill_taxes resource. |
| [**billTaxGetBySlug()**](BillTaxesApi.md#billTaxGetBySlug) | **GET** /open-api/v3/bill_taxes/by_slug/{slug} | Retrieves a bill_taxes resource. |
| [**billTaxGetDeleteRelations()**](BillTaxesApi.md#billTaxGetDeleteRelations) | **GET** /open-api/v3/bill_taxes/get_delete_relations/{id} | Retrieves a bill_taxes resource. |
| [**billTaxMetadata()**](BillTaxesApi.md#billTaxMetadata) | **GET** /open-api/v3/bill_taxes/metadata/{id} | Retrieves a bill_taxes resource. |


## `apiBillTaxesGetCollection()`

```php
apiBillTaxesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $bill, $bill2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_name, $order_created_at, $order_updated_at, $order_amount, $order_rate, $order_original_rate, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiBillTaxesGetCollection200Response
```

Retrieves the collection of bill_taxes resources.

Retrieves the collection of bill_taxes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$rate = 'rate_example'; // string | 
$rate2 = array('rate_example'); // string[] | 
$original_rate = 'original_rate_example'; // string | 
$original_rate2 = array('original_rate_example'); // string[] | 
$auto_update = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_amount = 'order_amount_example'; // string | 
$order_rate = 'order_rate_example'; // string | 
$order_original_rate = 'order_original_rate_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_taxes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_taxes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_taxes slug_end_with
$id_partial = 'id_partial_example'; // string | bill_taxes id_partial
$id_start_with = 'id_start_with_example'; // string | bill_taxes id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_taxes id_end_with

try {
    $result = $apiInstance->apiBillTaxesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $bill, $bill2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_name, $order_created_at, $order_updated_at, $order_amount, $order_rate, $order_original_rate, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->apiBillTaxesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **rate** | **string**|  | [optional] |
| **rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **original_rate** | **string**|  | [optional] |
| **original_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **auto_update** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_amount** | **string**|  | [optional] |
| **order_rate** | **string**|  | [optional] |
| **order_original_rate** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_taxes slug_partial | [optional] |
| **slug_start_with** | **string**| bill_taxes slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_taxes slug_end_with | [optional] |
| **id_partial** | **string**| bill_taxes id_partial | [optional] |
| **id_start_with** | **string**| bill_taxes id_start_with | [optional] |
| **id_end_with** | **string**| bill_taxes id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillTaxesGetCollection200Response**](../Model/ApiBillTaxesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillTaxesIdDelete()`

```php
apiBillTaxesIdDelete($id)
```

Removes the bill_taxes resource.

Removes the bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier

try {
    $apiInstance->apiBillTaxesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->apiBillTaxesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |

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

## `apiBillTaxesIdGet()`

```php
apiBillTaxesIdGet($id): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a bill_taxes resource.

Retrieves a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier

try {
    $result = $apiInstance->apiBillTaxesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->apiBillTaxesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillTaxesIdPut()`

```php
apiBillTaxesIdPut($id, $bill_taxes_jsonld_add_post): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow
```

Replaces the bill_taxes resource.

Replaces the bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier
$bill_taxes_jsonld_add_post = new \OpenAPI\Client\Model\BillTaxesJsonldAddPost(); // \OpenAPI\Client\Model\BillTaxesJsonldAddPost | The updated bill_taxes resource

try {
    $result = $apiInstance->apiBillTaxesIdPut($id, $bill_taxes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->apiBillTaxesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |
| **bill_taxes_jsonld_add_post** | [**\OpenAPI\Client\Model\BillTaxesJsonldAddPost**](../Model/BillTaxesJsonldAddPost.md)| The updated bill_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillTaxesPost()`

```php
apiBillTaxesPost($bill_taxes_jsonld_add_post): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_taxes resource.

Creates a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_taxes_jsonld_add_post = new \OpenAPI\Client\Model\BillTaxesJsonldAddPost(); // \OpenAPI\Client\Model\BillTaxesJsonldAddPost | The new bill_taxes resource

try {
    $result = $apiInstance->apiBillTaxesPost($bill_taxes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->apiBillTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_taxes_jsonld_add_post** | [**\OpenAPI\Client\Model\BillTaxesJsonldAddPost**](../Model/BillTaxesJsonldAddPost.md)| The new bill_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxApiCorporationAdd()`

```php
billTaxApiCorporationAdd($id, $bill_taxes_jsonld): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_taxes resource.

Creates a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier
$bill_taxes_jsonld = new \OpenAPI\Client\Model\BillTaxesJsonld(); // \OpenAPI\Client\Model\BillTaxesJsonld | The new bill_taxes resource

try {
    $result = $apiInstance->billTaxApiCorporationAdd($id, $bill_taxes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |
| **bill_taxes_jsonld** | [**\OpenAPI\Client\Model\BillTaxesJsonld**](../Model/BillTaxesJsonld.md)| The new bill_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxApiCorporationRemove()`

```php
billTaxApiCorporationRemove($id, $bill_taxes_jsonld): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_taxes resource.

Creates a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier
$bill_taxes_jsonld = new \OpenAPI\Client\Model\BillTaxesJsonld(); // \OpenAPI\Client\Model\BillTaxesJsonld | The new bill_taxes resource

try {
    $result = $apiInstance->billTaxApiCorporationRemove($id, $bill_taxes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |
| **bill_taxes_jsonld** | [**\OpenAPI\Client\Model\BillTaxesJsonld**](../Model/BillTaxesJsonld.md)| The new bill_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxApiFileUpload()`

```php
billTaxApiFileUpload($id, $bill_taxes_jsonld): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_taxes resource.

Creates a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier
$bill_taxes_jsonld = new \OpenAPI\Client\Model\BillTaxesJsonld(); // \OpenAPI\Client\Model\BillTaxesJsonld | The new bill_taxes resource

try {
    $result = $apiInstance->billTaxApiFileUpload($id, $bill_taxes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |
| **bill_taxes_jsonld** | [**\OpenAPI\Client\Model\BillTaxesJsonld**](../Model/BillTaxesJsonld.md)| The new bill_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxDropDown()`

```php
billTaxDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $bill, $bill2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_name, $order_created_at, $order_updated_at, $order_amount, $order_rate, $order_original_rate, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $amount_range, $rate_range, $original_rate_range): \OpenAPI\Client\Model\BillTaxDropDown200Response
```

Retrieves the collection of bill_taxes resources.

Retrieves the collection of bill_taxes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$rate = 'rate_example'; // string | 
$rate2 = array('rate_example'); // string[] | 
$original_rate = 'original_rate_example'; // string | 
$original_rate2 = array('original_rate_example'); // string[] | 
$auto_update = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_amount = 'order_amount_example'; // string | 
$order_rate = 'order_rate_example'; // string | 
$order_original_rate = 'order_original_rate_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_taxes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_taxes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_taxes slug_end_with
$id_partial = 'id_partial_example'; // string | bill_taxes id_partial
$id_start_with = 'id_start_with_example'; // string | bill_taxes id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_taxes id_end_with
$name_partial = 'name_partial_example'; // string | bill_taxes name_partial
$name_start_with = 'name_start_with_example'; // string | bill_taxes name_start_with
$name_end_with = 'name_end_with_example'; // string | bill_taxes name_end_with
$amount_range = 'amount_range_example'; // string | bill_taxes amount_range
$rate_range = 'rate_range_example'; // string | bill_taxes rate_range
$original_rate_range = 'original_rate_range_example'; // string | bill_taxes originalRate_range

try {
    $result = $apiInstance->billTaxDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $bill, $bill2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_name, $order_created_at, $order_updated_at, $order_amount, $order_rate, $order_original_rate, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $amount_range, $rate_range, $original_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxDropDown: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **rate** | **string**|  | [optional] |
| **rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **original_rate** | **string**|  | [optional] |
| **original_rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **auto_update** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_amount** | **string**|  | [optional] |
| **order_rate** | **string**|  | [optional] |
| **order_original_rate** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_taxes slug_partial | [optional] |
| **slug_start_with** | **string**| bill_taxes slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_taxes slug_end_with | [optional] |
| **id_partial** | **string**| bill_taxes id_partial | [optional] |
| **id_start_with** | **string**| bill_taxes id_start_with | [optional] |
| **id_end_with** | **string**| bill_taxes id_end_with | [optional] |
| **name_partial** | **string**| bill_taxes name_partial | [optional] |
| **name_start_with** | **string**| bill_taxes name_start_with | [optional] |
| **name_end_with** | **string**| bill_taxes name_end_with | [optional] |
| **amount_range** | **string**| bill_taxes amount_range | [optional] |
| **rate_range** | **string**| bill_taxes rate_range | [optional] |
| **original_rate_range** | **string**| bill_taxes originalRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillTaxDropDown200Response**](../Model/BillTaxDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxDuplicate()`

```php
billTaxDuplicate($id): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingList
```

Retrieves a bill_taxes resource.

Retrieves a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier

try {
    $result = $apiInstance->billTaxDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingList**](../Model/BillTaxesJsonldBillTaxShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxFetchFiles()`

```php
billTaxFetchFiles($id): \OpenAPI\Client\Model\BillTaxesJsonld
```

Retrieves a bill_taxes resource.

Retrieves a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier

try {
    $result = $apiInstance->billTaxFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonld**](../Model/BillTaxesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxGetBySlug()`

```php
billTaxGetBySlug($slug): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bill_taxes resource.

Retrieves a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bill_taxes identifier

try {
    $result = $apiInstance->billTaxGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bill_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillTaxesJsonldBillTaxShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxGetDeleteRelations()`

```php
billTaxGetDeleteRelations($id): \OpenAPI\Client\Model\BillTaxesJsonldBillTaxRelations
```

Retrieves a bill_taxes resource.

Retrieves a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier

try {
    $result = $apiInstance->billTaxGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldBillTaxRelations**](../Model/BillTaxesJsonldBillTaxRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTaxMetadata()`

```php
billTaxMetadata($id): \OpenAPI\Client\Model\BillTaxesJsonldIdStandardMetadataBillTaxMetadataTagTaggingListBillTaxRelationsTimestampable
```

Retrieves a bill_taxes resource.

Retrieves a bill_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_taxes identifier

try {
    $result = $apiInstance->billTaxMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTaxesApi->billTaxMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTaxesJsonldIdStandardMetadataBillTaxMetadataTagTaggingListBillTaxRelationsTimestampable**](../Model/BillTaxesJsonldIdStandardMetadataBillTaxMetadataTagTaggingListBillTaxRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
