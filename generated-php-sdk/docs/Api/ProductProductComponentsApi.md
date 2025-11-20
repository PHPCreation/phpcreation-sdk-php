# OpenAPI\Client\ProductProductComponentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductProductComponentsGetCollection()**](ProductProductComponentsApi.md#apiProductProductComponentsGetCollection) | **GET** /open-api/v3/product_product_components | Retrieves the collection of product_product_components resources. |
| [**apiProductProductComponentsIdDelete()**](ProductProductComponentsApi.md#apiProductProductComponentsIdDelete) | **DELETE** /open-api/v3/product_product_components/{id} | Removes the product_product_components resource. |
| [**apiProductProductComponentsIdGet()**](ProductProductComponentsApi.md#apiProductProductComponentsIdGet) | **GET** /open-api/v3/product_product_components/{id} | Retrieves a product_product_components resource. |
| [**apiProductProductComponentsIdPut()**](ProductProductComponentsApi.md#apiProductProductComponentsIdPut) | **PUT** /open-api/v3/product_product_components/{id} | Replaces the product_product_components resource. |
| [**apiProductProductComponentsPost()**](ProductProductComponentsApi.md#apiProductProductComponentsPost) | **POST** /open-api/v3/product_product_components | Creates a product_product_components resource. |
| [**productProductComponentApiFileUpload()**](ProductProductComponentsApi.md#productProductComponentApiFileUpload) | **POST** /open-api/v3/product_product_components/{id}/file/upload | Creates a product_product_components resource. |
| [**productProductComponentDropDown()**](ProductProductComponentsApi.md#productProductComponentDropDown) | **GET** /open-api/v3/product_product_components/dropdown/get | Retrieves the collection of product_product_components resources. |
| [**productProductComponentDuplicate()**](ProductProductComponentsApi.md#productProductComponentDuplicate) | **GET** /open-api/v3/product_product_components/duplicate/{id} | Retrieves a product_product_components resource. |
| [**productProductComponentFetchFiles()**](ProductProductComponentsApi.md#productProductComponentFetchFiles) | **GET** /open-api/v3/product_product_components/fetch_files/{id} | Retrieves a product_product_components resource. |
| [**productProductComponentGetBySlug()**](ProductProductComponentsApi.md#productProductComponentGetBySlug) | **GET** /open-api/v3/product_product_components/by_slug/{slug} | Retrieves a product_product_components resource. |
| [**productProductComponentGetDeleteRelations()**](ProductProductComponentsApi.md#productProductComponentGetDeleteRelations) | **GET** /open-api/v3/product_product_components/get_delete_relations/{id} | Retrieves a product_product_components resource. |
| [**productProductComponentMetadata()**](ProductProductComponentsApi.md#productProductComponentMetadata) | **GET** /open-api/v3/product_product_components/metadata/{id} | Retrieves a product_product_components resource. |


## `apiProductProductComponentsGetCollection()`

```php
apiProductProductComponentsGetCollection($page, $items_per_page, $id, $id2, $product, $product2, $component, $component2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $qty, $qty2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_qty, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $qty_range): \OpenAPI\Client\Model\ApiProductProductComponentsGetCollection200Response
```

Retrieves the collection of product_product_components resources.

Retrieves the collection of product_product_components resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$id = 56; // int | 
$id2 = array(56); // int[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$component = 'component_example'; // string | 
$component2 = array('component_example'); // string[] | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$search = 'search_example'; // string | 
$qty = 'qty_example'; // string | 
$qty2 = array('qty_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_qty = 'order_qty_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_product_components slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_product_components slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_product_components slug_end_with
$id_partial = 'id_partial_example'; // string | product_product_components id_partial
$id_start_with = 'id_start_with_example'; // string | product_product_components id_start_with
$id_end_with = 'id_end_with_example'; // string | product_product_components id_end_with
$qty_range = 'qty_range_example'; // string | product_product_components qty_range

try {
    $result = $apiInstance->apiProductProductComponentsGetCollection($page, $items_per_page, $id, $id2, $product, $product2, $component, $component2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $qty, $qty2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_qty, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $qty_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->apiProductProductComponentsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **component** | **string**|  | [optional] |
| **component2** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **qty** | **string**|  | [optional] |
| **qty2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_qty** | **string**|  | [optional] |
| **slug_partial** | **string**| product_product_components slug_partial | [optional] |
| **slug_start_with** | **string**| product_product_components slug_start_with | [optional] |
| **slug_end_with** | **string**| product_product_components slug_end_with | [optional] |
| **id_partial** | **string**| product_product_components id_partial | [optional] |
| **id_start_with** | **string**| product_product_components id_start_with | [optional] |
| **id_end_with** | **string**| product_product_components id_end_with | [optional] |
| **qty_range** | **string**| product_product_components qty_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductProductComponentsGetCollection200Response**](../Model/ApiProductProductComponentsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductComponentsIdDelete()`

```php
apiProductProductComponentsIdDelete($id)
```

Removes the product_product_components resource.

Removes the product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier

try {
    $apiInstance->apiProductProductComponentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->apiProductProductComponentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |

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

## `apiProductProductComponentsIdGet()`

```php
apiProductProductComponentsIdGet($id): \OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_product_components resource.

Retrieves a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier

try {
    $result = $apiInstance->apiProductProductComponentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->apiProductProductComponentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductComponentsIdPut()`

```php
apiProductProductComponentsIdPut($id, $product_product_components_jsonld_post): \OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the product_product_components resource.

Replaces the product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier
$product_product_components_jsonld_post = new \OpenAPI\Client\Model\ProductProductComponentsJsonldPost(); // \OpenAPI\Client\Model\ProductProductComponentsJsonldPost | The updated product_product_components resource

try {
    $result = $apiInstance->apiProductProductComponentsIdPut($id, $product_product_components_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->apiProductProductComponentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |
| **product_product_components_jsonld_post** | [**\OpenAPI\Client\Model\ProductProductComponentsJsonldPost**](../Model/ProductProductComponentsJsonldPost.md)| The updated product_product_components resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductComponentsPost()`

```php
apiProductProductComponentsPost($product_product_components_jsonld_add_post): \OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a product_product_components resource.

Creates a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_product_components_jsonld_add_post = new \OpenAPI\Client\Model\ProductProductComponentsJsonldAddPost(); // \OpenAPI\Client\Model\ProductProductComponentsJsonldAddPost | The new product_product_components resource

try {
    $result = $apiInstance->apiProductProductComponentsPost($product_product_components_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->apiProductProductComponentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_product_components_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductProductComponentsJsonldAddPost**](../Model/ProductProductComponentsJsonldAddPost.md)| The new product_product_components resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductComponentApiFileUpload()`

```php
productProductComponentApiFileUpload($id, $product_product_components_jsonld): \OpenAPI\Client\Model\ProductProductComponentsJsonldProductProductComponentShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_product_components resource.

Creates a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier
$product_product_components_jsonld = new \OpenAPI\Client\Model\ProductProductComponentsJsonld(); // \OpenAPI\Client\Model\ProductProductComponentsJsonld | The new product_product_components resource

try {
    $result = $apiInstance->productProductComponentApiFileUpload($id, $product_product_components_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->productProductComponentApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |
| **product_product_components_jsonld** | [**\OpenAPI\Client\Model\ProductProductComponentsJsonld**](../Model/ProductProductComponentsJsonld.md)| The new product_product_components resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldProductProductComponentShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductProductComponentsJsonldProductProductComponentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductComponentDropDown()`

```php
productProductComponentDropDown($page, $items_per_page, $id, $id2, $product, $product2, $component, $component2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $qty, $qty2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_qty, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $qty_range): \OpenAPI\Client\Model\ProductProductComponentDropDown200Response
```

Retrieves the collection of product_product_components resources.

Retrieves the collection of product_product_components resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$id = 56; // int | 
$id2 = array(56); // int[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$component = 'component_example'; // string | 
$component2 = array('component_example'); // string[] | 
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$search = 'search_example'; // string | 
$qty = 'qty_example'; // string | 
$qty2 = array('qty_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_qty = 'order_qty_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_product_components slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_product_components slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_product_components slug_end_with
$id_partial = 'id_partial_example'; // string | product_product_components id_partial
$id_start_with = 'id_start_with_example'; // string | product_product_components id_start_with
$id_end_with = 'id_end_with_example'; // string | product_product_components id_end_with
$qty_range = 'qty_range_example'; // string | product_product_components qty_range

try {
    $result = $apiInstance->productProductComponentDropDown($page, $items_per_page, $id, $id2, $product, $product2, $component, $component2, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $qty, $qty2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_qty, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $qty_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->productProductComponentDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **component** | **string**|  | [optional] |
| **component2** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **qty** | **string**|  | [optional] |
| **qty2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_qty** | **string**|  | [optional] |
| **slug_partial** | **string**| product_product_components slug_partial | [optional] |
| **slug_start_with** | **string**| product_product_components slug_start_with | [optional] |
| **slug_end_with** | **string**| product_product_components slug_end_with | [optional] |
| **id_partial** | **string**| product_product_components id_partial | [optional] |
| **id_start_with** | **string**| product_product_components id_start_with | [optional] |
| **id_end_with** | **string**| product_product_components id_end_with | [optional] |
| **qty_range** | **string**| product_product_components qty_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentDropDown200Response**](../Model/ProductProductComponentDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductComponentDuplicate()`

```php
productProductComponentDuplicate($id): \OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_product_components resource.

Retrieves a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier

try {
    $result = $apiInstance->productProductComponentDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->productProductComponentDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductComponentsJsonldStandardShowProductProductComponentShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductComponentFetchFiles()`

```php
productProductComponentFetchFiles($id): \OpenAPI\Client\Model\ProductProductComponentsJsonld
```

Retrieves a product_product_components resource.

Retrieves a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier

try {
    $result = $apiInstance->productProductComponentFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->productProductComponentFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonld**](../Model/ProductProductComponentsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductComponentGetBySlug()`

```php
productProductComponentGetBySlug($slug): \OpenAPI\Client\Model\ProductProductComponentsJsonldProductProductComponentShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a product_product_components resource.

Retrieves a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_product_components identifier

try {
    $result = $apiInstance->productProductComponentGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->productProductComponentGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_product_components identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldProductProductComponentShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ProductProductComponentsJsonldProductProductComponentShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductComponentGetDeleteRelations()`

```php
productProductComponentGetDeleteRelations($id): \OpenAPI\Client\Model\ProductProductComponentsJsonldProductProductComponentRelations
```

Retrieves a product_product_components resource.

Retrieves a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier

try {
    $result = $apiInstance->productProductComponentGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->productProductComponentGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldProductProductComponentRelations**](../Model/ProductProductComponentsJsonldProductProductComponentRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductComponentMetadata()`

```php
productProductComponentMetadata($id): \OpenAPI\Client\Model\ProductProductComponentsJsonldIdStandardMetadataProductProductComponentMetadataTagTaggingListProductProductComponentRelationsTimestampable
```

Retrieves a product_product_components resource.

Retrieves a product_product_components resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_components identifier

try {
    $result = $apiInstance->productProductComponentMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductComponentsApi->productProductComponentMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_components identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductComponentsJsonldIdStandardMetadataProductProductComponentMetadataTagTaggingListProductProductComponentRelationsTimestampable**](../Model/ProductProductComponentsJsonldIdStandardMetadataProductProductComponentMetadataTagTaggingListProductProductComponentRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
