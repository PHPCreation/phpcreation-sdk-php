# OpenAPI\Client\ProductProductsellpricesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductProductsellpricesGetCollection()**](ProductProductsellpricesApi.md#apiProductProductsellpricesGetCollection) | **GET** /open-api/v3/product_productsellprices | Retrieves the collection of product_productsellprices resources. |
| [**apiProductProductsellpricesIdDelete()**](ProductProductsellpricesApi.md#apiProductProductsellpricesIdDelete) | **DELETE** /open-api/v3/product_productsellprices/{id} | Removes the product_productsellprices resource. |
| [**apiProductProductsellpricesIdGet()**](ProductProductsellpricesApi.md#apiProductProductsellpricesIdGet) | **GET** /open-api/v3/product_productsellprices/{id} | Retrieves a product_productsellprices resource. |
| [**apiProductProductsellpricesIdPut()**](ProductProductsellpricesApi.md#apiProductProductsellpricesIdPut) | **PUT** /open-api/v3/product_productsellprices/{id} | Replaces the product_productsellprices resource. |
| [**apiProductProductsellpricesPost()**](ProductProductsellpricesApi.md#apiProductProductsellpricesPost) | **POST** /open-api/v3/product_productsellprices | Creates a product_productsellprices resource. |
| [**productSellPriceApiFileUpload()**](ProductProductsellpricesApi.md#productSellPriceApiFileUpload) | **POST** /open-api/v3/product_productsellprices/{id}/file/upload | Creates a product_productsellprices resource. |
| [**productSellPriceDropDown()**](ProductProductsellpricesApi.md#productSellPriceDropDown) | **GET** /open-api/v3/product_productsellprices/dropdown/get | Retrieves the collection of product_productsellprices resources. |
| [**productSellPriceDuplicate()**](ProductProductsellpricesApi.md#productSellPriceDuplicate) | **GET** /open-api/v3/product_productsellprices/duplicate/{id} | Retrieves a product_productsellprices resource. |
| [**productSellPriceFetchFiles()**](ProductProductsellpricesApi.md#productSellPriceFetchFiles) | **GET** /open-api/v3/product_productsellprices/fetch_files/{id} | Retrieves a product_productsellprices resource. |
| [**productSellPriceGetBySlug()**](ProductProductsellpricesApi.md#productSellPriceGetBySlug) | **GET** /open-api/v3/product_productsellprices/by_slug/{slug} | Retrieves a product_productsellprices resource. |
| [**productSellPriceGetDeleteRelations()**](ProductProductsellpricesApi.md#productSellPriceGetDeleteRelations) | **GET** /open-api/v3/product_productsellprices/get_delete_relations/{id} | Retrieves a product_productsellprices resource. |
| [**productSellPriceMetadata()**](ProductProductsellpricesApi.md#productSellPriceMetadata) | **GET** /open-api/v3/product_productsellprices/metadata/{id} | Retrieves a product_productsellprices resource. |


## `apiProductProductsellpricesGetCollection()`

```php
apiProductProductsellpricesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $product, $product2, $currency, $currency2, $client_code, $client_code2, $search, $price, $price2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range, $client_code_partial, $client_code_start_with, $client_code_end_with): \OpenAPI\Client\Model\ApiProductProductsellpricesGetCollection200Response
```

Retrieves the collection of product_productsellprices resources.

Retrieves the collection of product_productsellprices resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
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
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$client_code = 'client_code_example'; // string | 
$client_code2 = array('client_code_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_productsellprices slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_productsellprices slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_productsellprices slug_end_with
$id_partial = 'id_partial_example'; // string | product_productsellprices id_partial
$id_start_with = 'id_start_with_example'; // string | product_productsellprices id_start_with
$id_end_with = 'id_end_with_example'; // string | product_productsellprices id_end_with
$number_partial = 'number_partial_example'; // string | product_productsellprices number_partial
$number_start_with = 'number_start_with_example'; // string | product_productsellprices number_start_with
$number_end_with = 'number_end_with_example'; // string | product_productsellprices number_end_with
$color_partial = 'color_partial_example'; // string | product_productsellprices color_partial
$color_start_with = 'color_start_with_example'; // string | product_productsellprices color_start_with
$color_end_with = 'color_end_with_example'; // string | product_productsellprices color_end_with
$icon_partial = 'icon_partial_example'; // string | product_productsellprices icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_productsellprices icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_productsellprices icon_end_with
$fee_range = 'fee_range_example'; // string | product_productsellprices fee_range
$priority_range = 'priority_range_example'; // string | product_productsellprices priority_range
$client_code_partial = 'client_code_partial_example'; // string | product_productsellprices clientCode_partial
$client_code_start_with = 'client_code_start_with_example'; // string | product_productsellprices clientCode_start_with
$client_code_end_with = 'client_code_end_with_example'; // string | product_productsellprices clientCode_end_with

try {
    $result = $apiInstance->apiProductProductsellpricesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $product, $product2, $currency, $currency2, $client_code, $client_code2, $search, $price, $price2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range, $client_code_partial, $client_code_start_with, $client_code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->apiProductProductsellpricesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_code** | **string**|  | [optional] |
| **client_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_productsellprices slug_partial | [optional] |
| **slug_start_with** | **string**| product_productsellprices slug_start_with | [optional] |
| **slug_end_with** | **string**| product_productsellprices slug_end_with | [optional] |
| **id_partial** | **string**| product_productsellprices id_partial | [optional] |
| **id_start_with** | **string**| product_productsellprices id_start_with | [optional] |
| **id_end_with** | **string**| product_productsellprices id_end_with | [optional] |
| **number_partial** | **string**| product_productsellprices number_partial | [optional] |
| **number_start_with** | **string**| product_productsellprices number_start_with | [optional] |
| **number_end_with** | **string**| product_productsellprices number_end_with | [optional] |
| **color_partial** | **string**| product_productsellprices color_partial | [optional] |
| **color_start_with** | **string**| product_productsellprices color_start_with | [optional] |
| **color_end_with** | **string**| product_productsellprices color_end_with | [optional] |
| **icon_partial** | **string**| product_productsellprices icon_partial | [optional] |
| **icon_start_with** | **string**| product_productsellprices icon_start_with | [optional] |
| **icon_end_with** | **string**| product_productsellprices icon_end_with | [optional] |
| **fee_range** | **string**| product_productsellprices fee_range | [optional] |
| **priority_range** | **string**| product_productsellprices priority_range | [optional] |
| **client_code_partial** | **string**| product_productsellprices clientCode_partial | [optional] |
| **client_code_start_with** | **string**| product_productsellprices clientCode_start_with | [optional] |
| **client_code_end_with** | **string**| product_productsellprices clientCode_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductProductsellpricesGetCollection200Response**](../Model/ApiProductProductsellpricesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductsellpricesIdDelete()`

```php
apiProductProductsellpricesIdDelete($id)
```

Removes the product_productsellprices resource.

Removes the product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier

try {
    $apiInstance->apiProductProductsellpricesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->apiProductProductsellpricesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |

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

## `apiProductProductsellpricesIdGet()`

```php
apiProductProductsellpricesIdGet($id): \OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_productsellprices resource.

Retrieves a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier

try {
    $result = $apiInstance->apiProductProductsellpricesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->apiProductProductsellpricesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductsellpricesIdPut()`

```php
apiProductProductsellpricesIdPut($id, $product_productsellprices_jsonld_add_post): \OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the product_productsellprices resource.

Replaces the product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier
$product_productsellprices_jsonld_add_post = new \OpenAPI\Client\Model\ProductProductsellpricesJsonldAddPost(); // \OpenAPI\Client\Model\ProductProductsellpricesJsonldAddPost | The updated product_productsellprices resource

try {
    $result = $apiInstance->apiProductProductsellpricesIdPut($id, $product_productsellprices_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->apiProductProductsellpricesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |
| **product_productsellprices_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductProductsellpricesJsonldAddPost**](../Model/ProductProductsellpricesJsonldAddPost.md)| The updated product_productsellprices resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductsellpricesPost()`

```php
apiProductProductsellpricesPost($product_productsellprices_jsonld_add_post): \OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a product_productsellprices resource.

Creates a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_productsellprices_jsonld_add_post = new \OpenAPI\Client\Model\ProductProductsellpricesJsonldAddPost(); // \OpenAPI\Client\Model\ProductProductsellpricesJsonldAddPost | The new product_productsellprices resource

try {
    $result = $apiInstance->apiProductProductsellpricesPost($product_productsellprices_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->apiProductProductsellpricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_productsellprices_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductProductsellpricesJsonldAddPost**](../Model/ProductProductsellpricesJsonldAddPost.md)| The new product_productsellprices resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSellPriceApiFileUpload()`

```php
productSellPriceApiFileUpload($id, $product_productsellprices_jsonld): \OpenAPI\Client\Model\ProductProductsellpricesJsonldProductSellPriceShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_productsellprices resource.

Creates a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier
$product_productsellprices_jsonld = new \OpenAPI\Client\Model\ProductProductsellpricesJsonld(); // \OpenAPI\Client\Model\ProductProductsellpricesJsonld | The new product_productsellprices resource

try {
    $result = $apiInstance->productSellPriceApiFileUpload($id, $product_productsellprices_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->productSellPriceApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |
| **product_productsellprices_jsonld** | [**\OpenAPI\Client\Model\ProductProductsellpricesJsonld**](../Model/ProductProductsellpricesJsonld.md)| The new product_productsellprices resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldProductSellPriceShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductProductsellpricesJsonldProductSellPriceShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSellPriceDropDown()`

```php
productSellPriceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $product, $product2, $currency, $currency2, $client_code, $client_code2, $search, $price, $price2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range, $client_code_partial, $client_code_start_with, $client_code_end_with): \OpenAPI\Client\Model\ProductSellPriceDropDown200Response
```

Retrieves the collection of product_productsellprices resources.

Retrieves the collection of product_productsellprices resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
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
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$client_code = 'client_code_example'; // string | 
$client_code2 = array('client_code_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_productsellprices slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_productsellprices slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_productsellprices slug_end_with
$id_partial = 'id_partial_example'; // string | product_productsellprices id_partial
$id_start_with = 'id_start_with_example'; // string | product_productsellprices id_start_with
$id_end_with = 'id_end_with_example'; // string | product_productsellprices id_end_with
$number_partial = 'number_partial_example'; // string | product_productsellprices number_partial
$number_start_with = 'number_start_with_example'; // string | product_productsellprices number_start_with
$number_end_with = 'number_end_with_example'; // string | product_productsellprices number_end_with
$color_partial = 'color_partial_example'; // string | product_productsellprices color_partial
$color_start_with = 'color_start_with_example'; // string | product_productsellprices color_start_with
$color_end_with = 'color_end_with_example'; // string | product_productsellprices color_end_with
$icon_partial = 'icon_partial_example'; // string | product_productsellprices icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_productsellprices icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_productsellprices icon_end_with
$fee_range = 'fee_range_example'; // string | product_productsellprices fee_range
$priority_range = 'priority_range_example'; // string | product_productsellprices priority_range
$client_code_partial = 'client_code_partial_example'; // string | product_productsellprices clientCode_partial
$client_code_start_with = 'client_code_start_with_example'; // string | product_productsellprices clientCode_start_with
$client_code_end_with = 'client_code_end_with_example'; // string | product_productsellprices clientCode_end_with

try {
    $result = $apiInstance->productSellPriceDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $product, $product2, $currency, $currency2, $client_code, $client_code2, $search, $price, $price2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range, $client_code_partial, $client_code_start_with, $client_code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->productSellPriceDropDown: ', $e->getMessage(), PHP_EOL;
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
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_code** | **string**|  | [optional] |
| **client_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_productsellprices slug_partial | [optional] |
| **slug_start_with** | **string**| product_productsellprices slug_start_with | [optional] |
| **slug_end_with** | **string**| product_productsellprices slug_end_with | [optional] |
| **id_partial** | **string**| product_productsellprices id_partial | [optional] |
| **id_start_with** | **string**| product_productsellprices id_start_with | [optional] |
| **id_end_with** | **string**| product_productsellprices id_end_with | [optional] |
| **number_partial** | **string**| product_productsellprices number_partial | [optional] |
| **number_start_with** | **string**| product_productsellprices number_start_with | [optional] |
| **number_end_with** | **string**| product_productsellprices number_end_with | [optional] |
| **color_partial** | **string**| product_productsellprices color_partial | [optional] |
| **color_start_with** | **string**| product_productsellprices color_start_with | [optional] |
| **color_end_with** | **string**| product_productsellprices color_end_with | [optional] |
| **icon_partial** | **string**| product_productsellprices icon_partial | [optional] |
| **icon_start_with** | **string**| product_productsellprices icon_start_with | [optional] |
| **icon_end_with** | **string**| product_productsellprices icon_end_with | [optional] |
| **fee_range** | **string**| product_productsellprices fee_range | [optional] |
| **priority_range** | **string**| product_productsellprices priority_range | [optional] |
| **client_code_partial** | **string**| product_productsellprices clientCode_partial | [optional] |
| **client_code_start_with** | **string**| product_productsellprices clientCode_start_with | [optional] |
| **client_code_end_with** | **string**| product_productsellprices clientCode_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductSellPriceDropDown200Response**](../Model/ProductSellPriceDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSellPriceDuplicate()`

```php
productSellPriceDuplicate($id): \OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_productsellprices resource.

Retrieves a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier

try {
    $result = $apiInstance->productSellPriceDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->productSellPriceDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductsellpricesJsonldStandardShowProductSellPriceShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSellPriceFetchFiles()`

```php
productSellPriceFetchFiles($id): \OpenAPI\Client\Model\ProductProductsellpricesJsonld
```

Retrieves a product_productsellprices resource.

Retrieves a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier

try {
    $result = $apiInstance->productSellPriceFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->productSellPriceFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonld**](../Model/ProductProductsellpricesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSellPriceGetBySlug()`

```php
productSellPriceGetBySlug($slug): \OpenAPI\Client\Model\ProductProductsellpricesJsonldProductSellPriceShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a product_productsellprices resource.

Retrieves a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_productsellprices identifier

try {
    $result = $apiInstance->productSellPriceGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->productSellPriceGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_productsellprices identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldProductSellPriceShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ProductProductsellpricesJsonldProductSellPriceShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSellPriceGetDeleteRelations()`

```php
productSellPriceGetDeleteRelations($id): \OpenAPI\Client\Model\ProductProductsellpricesJsonldProductSellPriceRelations
```

Retrieves a product_productsellprices resource.

Retrieves a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier

try {
    $result = $apiInstance->productSellPriceGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->productSellPriceGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldProductSellPriceRelations**](../Model/ProductProductsellpricesJsonldProductSellPriceRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSellPriceMetadata()`

```php
productSellPriceMetadata($id): \OpenAPI\Client\Model\ProductProductsellpricesJsonldIdStandardMetadataProductSellPriceMetadataTagTaggingListProductSellPriceRelationsTimestampable
```

Retrieves a product_productsellprices resource.

Retrieves a product_productsellprices resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductsellpricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_productsellprices identifier

try {
    $result = $apiInstance->productSellPriceMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductsellpricesApi->productSellPriceMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_productsellprices identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductsellpricesJsonldIdStandardMetadataProductSellPriceMetadataTagTaggingListProductSellPriceRelationsTimestampable**](../Model/ProductProductsellpricesJsonldIdStandardMetadataProductSellPriceMetadataTagTaggingListProductSellPriceRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
