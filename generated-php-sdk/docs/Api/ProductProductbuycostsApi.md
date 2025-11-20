# OpenAPI\Client\ProductProductbuycostsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductProductbuycostsGetCollection()**](ProductProductbuycostsApi.md#apiProductProductbuycostsGetCollection) | **GET** /open-api/v3/product_productbuycosts | Retrieves the collection of product_productbuycosts resources. |
| [**apiProductProductbuycostsIdDelete()**](ProductProductbuycostsApi.md#apiProductProductbuycostsIdDelete) | **DELETE** /open-api/v3/product_productbuycosts/{id} | Removes the product_productbuycosts resource. |
| [**apiProductProductbuycostsIdGet()**](ProductProductbuycostsApi.md#apiProductProductbuycostsIdGet) | **GET** /open-api/v3/product_productbuycosts/{id} | Retrieves a product_productbuycosts resource. |
| [**apiProductProductbuycostsIdPut()**](ProductProductbuycostsApi.md#apiProductProductbuycostsIdPut) | **PUT** /open-api/v3/product_productbuycosts/{id} | Replaces the product_productbuycosts resource. |
| [**apiProductProductbuycostsPost()**](ProductProductbuycostsApi.md#apiProductProductbuycostsPost) | **POST** /open-api/v3/product_productbuycosts | Creates a product_productbuycosts resource. |
| [**productBuyCostApiFileUpload()**](ProductProductbuycostsApi.md#productBuyCostApiFileUpload) | **POST** /open-api/v3/product_productbuycosts/{id}/file/upload | Creates a product_productbuycosts resource. |
| [**productBuyCostDropDown()**](ProductProductbuycostsApi.md#productBuyCostDropDown) | **GET** /open-api/v3/product_productbuycosts/dropdown/get | Retrieves the collection of product_productbuycosts resources. |
| [**productBuyCostDuplicate()**](ProductProductbuycostsApi.md#productBuyCostDuplicate) | **GET** /open-api/v3/product_productbuycosts/duplicate/{id} | Retrieves a product_productbuycosts resource. |
| [**productBuyCostFetchFiles()**](ProductProductbuycostsApi.md#productBuyCostFetchFiles) | **GET** /open-api/v3/product_productbuycosts/fetch_files/{id} | Retrieves a product_productbuycosts resource. |
| [**productBuyCostGetBySlug()**](ProductProductbuycostsApi.md#productBuyCostGetBySlug) | **GET** /open-api/v3/product_productbuycosts/by_slug/{slug} | Retrieves a product_productbuycosts resource. |
| [**productBuyCostGetDeleteRelations()**](ProductProductbuycostsApi.md#productBuyCostGetDeleteRelations) | **GET** /open-api/v3/product_productbuycosts/get_delete_relations/{id} | Retrieves a product_productbuycosts resource. |
| [**productProductBuyCostMetadata()**](ProductProductbuycostsApi.md#productProductBuyCostMetadata) | **GET** /open-api/v3/product_productbuycosts/metadata/{id} | Retrieves a product_productbuycosts resource. |


## `apiProductProductbuycostsGetCollection()`

```php
apiProductProductbuycostsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $exists_notes, $exists_deleted_at, $exists_custom_properties, $id, $id2, $slug, $slug2, $supplier_code, $supplier_code2, $product, $product2, $currency, $currency2, $search, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $cost_range_filter): \OpenAPI\Client\Model\ApiProductProductbuycostsGetCollection200Response
```

Retrieves the collection of product_productbuycosts resources.

Retrieves the collection of product_productbuycosts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
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
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$supplier_code = 'supplier_code_example'; // string | 
$supplier_code2 = array('supplier_code_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$search = 'search_example'; // string | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | product_productbuycosts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_productbuycosts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_productbuycosts slug_end_with
$id_partial = 'id_partial_example'; // string | product_productbuycosts id_partial
$id_start_with = 'id_start_with_example'; // string | product_productbuycosts id_start_with
$id_end_with = 'id_end_with_example'; // string | product_productbuycosts id_end_with
$supplier_code_partial = 'supplier_code_partial_example'; // string | product_productbuycosts supplierCode_partial
$supplier_code_start_with = 'supplier_code_start_with_example'; // string | product_productbuycosts supplierCode_start_with
$supplier_code_end_with = 'supplier_code_end_with_example'; // string | product_productbuycosts supplierCode_end_with
$cost_range_filter = 'cost_range_filter_example'; // string | product_productbuycosts cost_range_filter

try {
    $result = $apiInstance->apiProductProductbuycostsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $exists_notes, $exists_deleted_at, $exists_custom_properties, $id, $id2, $slug, $slug2, $supplier_code, $supplier_code2, $product, $product2, $currency, $currency2, $search, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $cost_range_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->apiProductProductbuycostsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_code** | **string**|  | [optional] |
| **supplier_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| product_productbuycosts slug_partial | [optional] |
| **slug_start_with** | **string**| product_productbuycosts slug_start_with | [optional] |
| **slug_end_with** | **string**| product_productbuycosts slug_end_with | [optional] |
| **id_partial** | **string**| product_productbuycosts id_partial | [optional] |
| **id_start_with** | **string**| product_productbuycosts id_start_with | [optional] |
| **id_end_with** | **string**| product_productbuycosts id_end_with | [optional] |
| **supplier_code_partial** | **string**| product_productbuycosts supplierCode_partial | [optional] |
| **supplier_code_start_with** | **string**| product_productbuycosts supplierCode_start_with | [optional] |
| **supplier_code_end_with** | **string**| product_productbuycosts supplierCode_end_with | [optional] |
| **cost_range_filter** | **string**| product_productbuycosts cost_range_filter | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductProductbuycostsGetCollection200Response**](../Model/ApiProductProductbuycostsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductbuycostsIdDelete()`

```php
apiProductProductbuycostsIdDelete($id)
```

Removes the product_productbuycosts resource.

Removes the product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier

try {
    $apiInstance->apiProductProductbuycostsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->apiProductProductbuycostsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |

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

## `apiProductProductbuycostsIdGet()`

```php
apiProductProductbuycostsIdGet($id): \OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_productbuycosts resource.

Retrieves a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier

try {
    $result = $apiInstance->apiProductProductbuycostsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->apiProductProductbuycostsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductbuycostsIdPut()`

```php
apiProductProductbuycostsIdPut($id, $product_productbuycosts_jsonld_post): \OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the product_productbuycosts resource.

Replaces the product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier
$product_productbuycosts_jsonld_post = new \OpenAPI\Client\Model\ProductProductbuycostsJsonldPost(); // \OpenAPI\Client\Model\ProductProductbuycostsJsonldPost | The updated product_productbuycosts resource

try {
    $result = $apiInstance->apiProductProductbuycostsIdPut($id, $product_productbuycosts_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->apiProductProductbuycostsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |
| **product_productbuycosts_jsonld_post** | [**\OpenAPI\Client\Model\ProductProductbuycostsJsonldPost**](../Model/ProductProductbuycostsJsonldPost.md)| The updated product_productbuycosts resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductbuycostsPost()`

```php
apiProductProductbuycostsPost($product_productbuycosts_jsonld_add_post): \OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a product_productbuycosts resource.

Creates a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_productbuycosts_jsonld_add_post = new \OpenAPI\Client\Model\ProductProductbuycostsJsonldAddPost(); // \OpenAPI\Client\Model\ProductProductbuycostsJsonldAddPost | The new product_productbuycosts resource

try {
    $result = $apiInstance->apiProductProductbuycostsPost($product_productbuycosts_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->apiProductProductbuycostsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_productbuycosts_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductProductbuycostsJsonldAddPost**](../Model/ProductProductbuycostsJsonldAddPost.md)| The new product_productbuycosts resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ProductProductbuycostsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBuyCostApiFileUpload()`

```php
productBuyCostApiFileUpload($id, $product_productbuycosts_jsonld): \OpenAPI\Client\Model\ProductProductbuycostsJsonldProductBuyCostShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_productbuycosts resource.

Creates a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier
$product_productbuycosts_jsonld = new \OpenAPI\Client\Model\ProductProductbuycostsJsonld(); // \OpenAPI\Client\Model\ProductProductbuycostsJsonld | The new product_productbuycosts resource

try {
    $result = $apiInstance->productBuyCostApiFileUpload($id, $product_productbuycosts_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->productBuyCostApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |
| **product_productbuycosts_jsonld** | [**\OpenAPI\Client\Model\ProductProductbuycostsJsonld**](../Model/ProductProductbuycostsJsonld.md)| The new product_productbuycosts resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldProductBuyCostShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductProductbuycostsJsonldProductBuyCostShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBuyCostDropDown()`

```php
productBuyCostDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $exists_notes, $exists_deleted_at, $exists_custom_properties, $id, $id2, $slug, $slug2, $supplier_code, $supplier_code2, $product, $product2, $currency, $currency2, $search, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $cost_range_filter): \OpenAPI\Client\Model\ProductBuyCostDropDown200Response
```

Retrieves the collection of product_productbuycosts resources.

Retrieves the collection of product_productbuycosts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
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
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$supplier_code = 'supplier_code_example'; // string | 
$supplier_code2 = array('supplier_code_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$search = 'search_example'; // string | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | product_productbuycosts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_productbuycosts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_productbuycosts slug_end_with
$id_partial = 'id_partial_example'; // string | product_productbuycosts id_partial
$id_start_with = 'id_start_with_example'; // string | product_productbuycosts id_start_with
$id_end_with = 'id_end_with_example'; // string | product_productbuycosts id_end_with
$supplier_code_partial = 'supplier_code_partial_example'; // string | product_productbuycosts supplierCode_partial
$supplier_code_start_with = 'supplier_code_start_with_example'; // string | product_productbuycosts supplierCode_start_with
$supplier_code_end_with = 'supplier_code_end_with_example'; // string | product_productbuycosts supplierCode_end_with
$cost_range_filter = 'cost_range_filter_example'; // string | product_productbuycosts cost_range_filter

try {
    $result = $apiInstance->productBuyCostDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $exists_notes, $exists_deleted_at, $exists_custom_properties, $id, $id2, $slug, $slug2, $supplier_code, $supplier_code2, $product, $product2, $currency, $currency2, $search, $cost, $cost2, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $cost_range_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->productBuyCostDropDown: ', $e->getMessage(), PHP_EOL;
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
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_code** | **string**|  | [optional] |
| **supplier_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| product_productbuycosts slug_partial | [optional] |
| **slug_start_with** | **string**| product_productbuycosts slug_start_with | [optional] |
| **slug_end_with** | **string**| product_productbuycosts slug_end_with | [optional] |
| **id_partial** | **string**| product_productbuycosts id_partial | [optional] |
| **id_start_with** | **string**| product_productbuycosts id_start_with | [optional] |
| **id_end_with** | **string**| product_productbuycosts id_end_with | [optional] |
| **supplier_code_partial** | **string**| product_productbuycosts supplierCode_partial | [optional] |
| **supplier_code_start_with** | **string**| product_productbuycosts supplierCode_start_with | [optional] |
| **supplier_code_end_with** | **string**| product_productbuycosts supplierCode_end_with | [optional] |
| **cost_range_filter** | **string**| product_productbuycosts cost_range_filter | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductBuyCostDropDown200Response**](../Model/ProductBuyCostDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBuyCostDuplicate()`

```php
productBuyCostDuplicate($id): \OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_productbuycosts resource.

Retrieves a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier

try {
    $result = $apiInstance->productBuyCostDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->productBuyCostDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBuyCostFetchFiles()`

```php
productBuyCostFetchFiles($id): \OpenAPI\Client\Model\ProductProductbuycostsJsonld
```

Retrieves a product_productbuycosts resource.

Retrieves a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier

try {
    $result = $apiInstance->productBuyCostFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->productBuyCostFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonld**](../Model/ProductProductbuycostsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBuyCostGetBySlug()`

```php
productBuyCostGetBySlug($slug): \OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_productbuycosts resource.

Retrieves a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_productbuycosts identifier

try {
    $result = $apiInstance->productBuyCostGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->productBuyCostGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_productbuycosts identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductbuycostsJsonldStandardShowProductBuyCostShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBuyCostGetDeleteRelations()`

```php
productBuyCostGetDeleteRelations($id): \OpenAPI\Client\Model\ProductProductbuycostsJsonldProductBuyCostRelations
```

Retrieves a product_productbuycosts resource.

Retrieves a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier

try {
    $result = $apiInstance->productBuyCostGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->productBuyCostGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldProductBuyCostRelations**](../Model/ProductProductbuycostsJsonldProductBuyCostRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductBuyCostMetadata()`

```php
productProductBuyCostMetadata($id): \OpenAPI\Client\Model\ProductProductbuycostsJsonldIdStandardMetadataProductbuycostMetadataTagTaggingListProductbuycostRelationsTimestampable
```

Retrieves a product_productbuycosts resource.

Retrieves a product_productbuycosts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductbuycostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productbuycosts identifier

try {
    $result = $apiInstance->productProductBuyCostMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductbuycostsApi->productProductBuyCostMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productbuycosts identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductbuycostsJsonldIdStandardMetadataProductbuycostMetadataTagTaggingListProductbuycostRelationsTimestampable**](../Model/ProductProductbuycostsJsonldIdStandardMetadataProductbuycostMetadataTagTaggingListProductbuycostRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
