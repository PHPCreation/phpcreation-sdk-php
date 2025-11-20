# OpenAPI\Client\InvoiceTaxesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInvoiceTaxesGetCollection()**](InvoiceTaxesApi.md#apiInvoiceTaxesGetCollection) | **GET** /open-api/v3/invoice_taxes | Retrieves the collection of invoice_taxes resources. |
| [**apiInvoiceTaxesIdDelete()**](InvoiceTaxesApi.md#apiInvoiceTaxesIdDelete) | **DELETE** /open-api/v3/invoice_taxes/{id} | Removes the invoice_taxes resource. |
| [**apiInvoiceTaxesIdGet()**](InvoiceTaxesApi.md#apiInvoiceTaxesIdGet) | **GET** /open-api/v3/invoice_taxes/{id} | Retrieves a invoice_taxes resource. |
| [**apiInvoiceTaxesIdPut()**](InvoiceTaxesApi.md#apiInvoiceTaxesIdPut) | **PUT** /open-api/v3/invoice_taxes/{id} | Replaces the invoice_taxes resource. |
| [**apiInvoiceTaxesPost()**](InvoiceTaxesApi.md#apiInvoiceTaxesPost) | **POST** /open-api/v3/invoice_taxes | Creates a invoice_taxes resource. |
| [**invoiceTaxApiCorporationAdd()**](InvoiceTaxesApi.md#invoiceTaxApiCorporationAdd) | **POST** /open-api/v3/invoice_taxes/{id}/corporation/add | Creates a invoice_taxes resource. |
| [**invoiceTaxApiCorporationRemove()**](InvoiceTaxesApi.md#invoiceTaxApiCorporationRemove) | **POST** /open-api/v3/invoice_taxes/{id}/corporation/remove | Creates a invoice_taxes resource. |
| [**invoiceTaxApiFileUpload()**](InvoiceTaxesApi.md#invoiceTaxApiFileUpload) | **POST** /open-api/v3/invoice_taxes/{id}/file/upload | Creates a invoice_taxes resource. |
| [**invoiceTaxDropDown()**](InvoiceTaxesApi.md#invoiceTaxDropDown) | **GET** /open-api/v3/invoice_taxes/dropdown/get | Retrieves the collection of invoice_taxes resources. |
| [**invoiceTaxDuplicate()**](InvoiceTaxesApi.md#invoiceTaxDuplicate) | **GET** /open-api/v3/invoice_taxes/duplicate/{id} | Retrieves a invoice_taxes resource. |
| [**invoiceTaxFetchFiles()**](InvoiceTaxesApi.md#invoiceTaxFetchFiles) | **GET** /open-api/v3/invoice_taxes/fetch_files/{id} | Retrieves a invoice_taxes resource. |
| [**invoiceTaxGetBySlug()**](InvoiceTaxesApi.md#invoiceTaxGetBySlug) | **GET** /open-api/v3/invoice_taxes/by_slug/{slug} | Retrieves a invoice_taxes resource. |
| [**invoiceTaxGetDeleteRelations()**](InvoiceTaxesApi.md#invoiceTaxGetDeleteRelations) | **GET** /open-api/v3/invoice_taxes/get_delete_relations/{id} | Retrieves a invoice_taxes resource. |
| [**invoiceTaxMetadata()**](InvoiceTaxesApi.md#invoiceTaxMetadata) | **GET** /open-api/v3/invoice_taxes/metadata/{id} | Retrieves a invoice_taxes resource. |


## `apiInvoiceTaxesGetCollection()`

```php
apiInvoiceTaxesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $invoice, $invoice2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $amount_range, $rate_range, $original_rate_range): \OpenAPI\Client\Model\ApiInvoiceTaxesGetCollection200Response
```

Retrieves the collection of invoice_taxes resources.

Retrieves the collection of invoice_taxes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
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
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
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
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoice_taxes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_taxes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_taxes slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_taxes id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_taxes id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_taxes id_end_with
$name_partial = 'name_partial_example'; // string | invoice_taxes name_partial
$name_start_with = 'name_start_with_example'; // string | invoice_taxes name_start_with
$name_end_with = 'name_end_with_example'; // string | invoice_taxes name_end_with
$amount_range = 'amount_range_example'; // string | invoice_taxes amount_range
$rate_range = 'rate_range_example'; // string | invoice_taxes rate_range
$original_rate_range = 'original_rate_range_example'; // string | invoice_taxes originalRate_range

try {
    $result = $apiInstance->apiInvoiceTaxesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $invoice, $invoice2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $amount_range, $rate_range, $original_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->apiInvoiceTaxesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoice_taxes slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_taxes slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_taxes slug_end_with | [optional] |
| **id_partial** | **string**| invoice_taxes id_partial | [optional] |
| **id_start_with** | **string**| invoice_taxes id_start_with | [optional] |
| **id_end_with** | **string**| invoice_taxes id_end_with | [optional] |
| **name_partial** | **string**| invoice_taxes name_partial | [optional] |
| **name_start_with** | **string**| invoice_taxes name_start_with | [optional] |
| **name_end_with** | **string**| invoice_taxes name_end_with | [optional] |
| **amount_range** | **string**| invoice_taxes amount_range | [optional] |
| **rate_range** | **string**| invoice_taxes rate_range | [optional] |
| **original_rate_range** | **string**| invoice_taxes originalRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInvoiceTaxesGetCollection200Response**](../Model/ApiInvoiceTaxesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceTaxesIdDelete()`

```php
apiInvoiceTaxesIdDelete($id)
```

Removes the invoice_taxes resource.

Removes the invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier

try {
    $apiInstance->apiInvoiceTaxesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->apiInvoiceTaxesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |

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

## `apiInvoiceTaxesIdGet()`

```php
apiInvoiceTaxesIdGet($id): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_taxes resource.

Retrieves a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier

try {
    $result = $apiInstance->apiInvoiceTaxesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->apiInvoiceTaxesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceTaxesIdPut()`

```php
apiInvoiceTaxesIdPut($id, $invoice_taxes_jsonld_add_post): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the invoice_taxes resource.

Replaces the invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier
$invoice_taxes_jsonld_add_post = new \OpenAPI\Client\Model\InvoiceTaxesJsonldAddPost(); // \OpenAPI\Client\Model\InvoiceTaxesJsonldAddPost | The updated invoice_taxes resource

try {
    $result = $apiInstance->apiInvoiceTaxesIdPut($id, $invoice_taxes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->apiInvoiceTaxesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |
| **invoice_taxes_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonldAddPost**](../Model/InvoiceTaxesJsonldAddPost.md)| The updated invoice_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceTaxesPost()`

```php
apiInvoiceTaxesPost($invoice_taxes_jsonld_add_post): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_taxes resource.

Creates a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_taxes_jsonld_add_post = new \OpenAPI\Client\Model\InvoiceTaxesJsonldAddPost(); // \OpenAPI\Client\Model\InvoiceTaxesJsonldAddPost | The new invoice_taxes resource

try {
    $result = $apiInstance->apiInvoiceTaxesPost($invoice_taxes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->apiInvoiceTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_taxes_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonldAddPost**](../Model/InvoiceTaxesJsonldAddPost.md)| The new invoice_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxApiCorporationAdd()`

```php
invoiceTaxApiCorporationAdd($id, $invoice_taxes_jsonld): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_taxes resource.

Creates a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier
$invoice_taxes_jsonld = new \OpenAPI\Client\Model\InvoiceTaxesJsonld(); // \OpenAPI\Client\Model\InvoiceTaxesJsonld | The new invoice_taxes resource

try {
    $result = $apiInstance->invoiceTaxApiCorporationAdd($id, $invoice_taxes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |
| **invoice_taxes_jsonld** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonld**](../Model/InvoiceTaxesJsonld.md)| The new invoice_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxApiCorporationRemove()`

```php
invoiceTaxApiCorporationRemove($id, $invoice_taxes_jsonld): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_taxes resource.

Creates a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier
$invoice_taxes_jsonld = new \OpenAPI\Client\Model\InvoiceTaxesJsonld(); // \OpenAPI\Client\Model\InvoiceTaxesJsonld | The new invoice_taxes resource

try {
    $result = $apiInstance->invoiceTaxApiCorporationRemove($id, $invoice_taxes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |
| **invoice_taxes_jsonld** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonld**](../Model/InvoiceTaxesJsonld.md)| The new invoice_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxApiFileUpload()`

```php
invoiceTaxApiFileUpload($id, $invoice_taxes_jsonld): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_taxes resource.

Creates a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier
$invoice_taxes_jsonld = new \OpenAPI\Client\Model\InvoiceTaxesJsonld(); // \OpenAPI\Client\Model\InvoiceTaxesJsonld | The new invoice_taxes resource

try {
    $result = $apiInstance->invoiceTaxApiFileUpload($id, $invoice_taxes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |
| **invoice_taxes_jsonld** | [**\OpenAPI\Client\Model\InvoiceTaxesJsonld**](../Model/InvoiceTaxesJsonld.md)| The new invoice_taxes resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxDropDown()`

```php
invoiceTaxDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $invoice, $invoice2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $amount_range, $rate_range, $original_rate_range): \OpenAPI\Client\Model\InvoiceTaxDropDown200Response
```

Retrieves the collection of invoice_taxes resources.

Retrieves the collection of invoice_taxes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
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
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
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
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoice_taxes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_taxes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_taxes slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_taxes id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_taxes id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_taxes id_end_with
$name_partial = 'name_partial_example'; // string | invoice_taxes name_partial
$name_start_with = 'name_start_with_example'; // string | invoice_taxes name_start_with
$name_end_with = 'name_end_with_example'; // string | invoice_taxes name_end_with
$amount_range = 'amount_range_example'; // string | invoice_taxes amount_range
$rate_range = 'rate_range_example'; // string | invoice_taxes rate_range
$original_rate_range = 'original_rate_range_example'; // string | invoice_taxes originalRate_range

try {
    $result = $apiInstance->invoiceTaxDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $invoice, $invoice2, $search, $amount, $amount2, $rate, $rate2, $original_rate, $original_rate2, $auto_update, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $amount_range, $rate_range, $original_rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxDropDown: ', $e->getMessage(), PHP_EOL;
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
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoice_taxes slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_taxes slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_taxes slug_end_with | [optional] |
| **id_partial** | **string**| invoice_taxes id_partial | [optional] |
| **id_start_with** | **string**| invoice_taxes id_start_with | [optional] |
| **id_end_with** | **string**| invoice_taxes id_end_with | [optional] |
| **name_partial** | **string**| invoice_taxes name_partial | [optional] |
| **name_start_with** | **string**| invoice_taxes name_start_with | [optional] |
| **name_end_with** | **string**| invoice_taxes name_end_with | [optional] |
| **amount_range** | **string**| invoice_taxes amount_range | [optional] |
| **rate_range** | **string**| invoice_taxes rate_range | [optional] |
| **original_rate_range** | **string**| invoice_taxes originalRate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxDropDown200Response**](../Model/InvoiceTaxDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxDuplicate()`

```php
invoiceTaxDuplicate($id): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_taxes resource.

Retrieves a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier

try {
    $result = $apiInstance->invoiceTaxDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxFetchFiles()`

```php
invoiceTaxFetchFiles($id): \OpenAPI\Client\Model\InvoiceTaxesJsonld
```

Retrieves a invoice_taxes resource.

Retrieves a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier

try {
    $result = $apiInstance->invoiceTaxFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonld**](../Model/InvoiceTaxesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxGetBySlug()`

```php
invoiceTaxGetBySlug($slug): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_taxes resource.

Retrieves a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | invoice_taxes identifier

try {
    $result = $apiInstance->invoiceTaxGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| invoice_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceTaxesJsonldInvoiceTaxShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxGetDeleteRelations()`

```php
invoiceTaxGetDeleteRelations($id): \OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxRelations
```

Retrieves a invoice_taxes resource.

Retrieves a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier

try {
    $result = $apiInstance->invoiceTaxGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldInvoiceTaxRelations**](../Model/InvoiceTaxesJsonldInvoiceTaxRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceTaxMetadata()`

```php
invoiceTaxMetadata($id): \OpenAPI\Client\Model\InvoiceTaxesJsonldIdStandardMetadataInvoiceTaxMetadataTagTaggingListInvoiceTaxRelationsTimestampable
```

Retrieves a invoice_taxes resource.

Retrieves a invoice_taxes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_taxes identifier

try {
    $result = $apiInstance->invoiceTaxMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceTaxesApi->invoiceTaxMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_taxes identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceTaxesJsonldIdStandardMetadataInvoiceTaxMetadataTagTaggingListInvoiceTaxRelationsTimestampable**](../Model/InvoiceTaxesJsonldIdStandardMetadataInvoiceTaxMetadataTagTaggingListInvoiceTaxRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
