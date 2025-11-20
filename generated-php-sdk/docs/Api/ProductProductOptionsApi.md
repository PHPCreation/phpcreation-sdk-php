# OpenAPI\Client\ProductProductOptionsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductProductOptionsGetCollection()**](ProductProductOptionsApi.md#apiProductProductOptionsGetCollection) | **GET** /open-api/v3/product_product_options | Retrieves the collection of product_product_options resources. |
| [**apiProductProductOptionsIdDelete()**](ProductProductOptionsApi.md#apiProductProductOptionsIdDelete) | **DELETE** /open-api/v3/product_product_options/{id} | Removes the product_product_options resource. |
| [**apiProductProductOptionsIdGet()**](ProductProductOptionsApi.md#apiProductProductOptionsIdGet) | **GET** /open-api/v3/product_product_options/{id} | Retrieves a product_product_options resource. |
| [**apiProductProductOptionsIdPut()**](ProductProductOptionsApi.md#apiProductProductOptionsIdPut) | **PUT** /open-api/v3/product_product_options/{id} | Replaces the product_product_options resource. |
| [**apiProductProductOptionsPost()**](ProductProductOptionsApi.md#apiProductProductOptionsPost) | **POST** /open-api/v3/product_product_options | Creates a product_product_options resource. |
| [**productProductOptionApiFileUpload()**](ProductProductOptionsApi.md#productProductOptionApiFileUpload) | **POST** /open-api/v3/product_product_options/{id}/file/upload | Creates a product_product_options resource. |
| [**productProductOptionDropDown()**](ProductProductOptionsApi.md#productProductOptionDropDown) | **GET** /open-api/v3/product_product_options/dropdown/get | Retrieves the collection of product_product_options resources. |
| [**productProductOptionDuplicate()**](ProductProductOptionsApi.md#productProductOptionDuplicate) | **GET** /open-api/v3/product_product_options/duplicate/{id} | Retrieves a product_product_options resource. |
| [**productProductOptionFetchFiles()**](ProductProductOptionsApi.md#productProductOptionFetchFiles) | **GET** /open-api/v3/product_product_options/fetch_files/{id} | Retrieves a product_product_options resource. |
| [**productProductOptionGetBySlug()**](ProductProductOptionsApi.md#productProductOptionGetBySlug) | **GET** /open-api/v3/product_product_options/by_slug/{slug} | Retrieves a product_product_options resource. |
| [**productProductOptionGetDeleteRelations()**](ProductProductOptionsApi.md#productProductOptionGetDeleteRelations) | **GET** /open-api/v3/product_product_options/get_delete_relations/{id} | Retrieves a product_product_options resource. |
| [**productProductOptionMetadata()**](ProductProductOptionsApi.md#productProductOptionMetadata) | **GET** /open-api/v3/product_product_options/metadata/{id} | Retrieves a product_product_options resource. |


## `apiProductProductOptionsGetCollection()`

```php
apiProductProductOptionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $product, $product2, $sub_product, $sub_product2, $option, $option2, $search, $fees, $fees2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range): \OpenAPI\Client\Model\ApiProductProductOptionsGetCollection200Response
```

Retrieves the collection of product_product_options resources.

Retrieves the collection of product_product_options resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
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
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$sub_product = 'sub_product_example'; // string | 
$sub_product2 = array('sub_product_example'); // string[] | 
$option = 'option_example'; // string | 
$option2 = array('option_example'); // string[] | 
$search = 'search_example'; // string | 
$fees = 'fees_example'; // string | 
$fees2 = array('fees_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_product_options slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_product_options slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_product_options slug_end_with
$id_partial = 'id_partial_example'; // string | product_product_options id_partial
$id_start_with = 'id_start_with_example'; // string | product_product_options id_start_with
$id_end_with = 'id_end_with_example'; // string | product_product_options id_end_with
$number_partial = 'number_partial_example'; // string | product_product_options number_partial
$number_start_with = 'number_start_with_example'; // string | product_product_options number_start_with
$number_end_with = 'number_end_with_example'; // string | product_product_options number_end_with
$color_partial = 'color_partial_example'; // string | product_product_options color_partial
$color_start_with = 'color_start_with_example'; // string | product_product_options color_start_with
$color_end_with = 'color_end_with_example'; // string | product_product_options color_end_with
$icon_partial = 'icon_partial_example'; // string | product_product_options icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_product_options icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_product_options icon_end_with
$fee_range = 'fee_range_example'; // string | product_product_options fee_range
$priority_range = 'priority_range_example'; // string | product_product_options priority_range

try {
    $result = $apiInstance->apiProductProductOptionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $product, $product2, $sub_product, $sub_product2, $option, $option2, $search, $fees, $fees2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->apiProductProductOptionsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sub_product** | **string**|  | [optional] |
| **sub_product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **option** | **string**|  | [optional] |
| **option2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **fees** | **string**|  | [optional] |
| **fees2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_product_options slug_partial | [optional] |
| **slug_start_with** | **string**| product_product_options slug_start_with | [optional] |
| **slug_end_with** | **string**| product_product_options slug_end_with | [optional] |
| **id_partial** | **string**| product_product_options id_partial | [optional] |
| **id_start_with** | **string**| product_product_options id_start_with | [optional] |
| **id_end_with** | **string**| product_product_options id_end_with | [optional] |
| **number_partial** | **string**| product_product_options number_partial | [optional] |
| **number_start_with** | **string**| product_product_options number_start_with | [optional] |
| **number_end_with** | **string**| product_product_options number_end_with | [optional] |
| **color_partial** | **string**| product_product_options color_partial | [optional] |
| **color_start_with** | **string**| product_product_options color_start_with | [optional] |
| **color_end_with** | **string**| product_product_options color_end_with | [optional] |
| **icon_partial** | **string**| product_product_options icon_partial | [optional] |
| **icon_start_with** | **string**| product_product_options icon_start_with | [optional] |
| **icon_end_with** | **string**| product_product_options icon_end_with | [optional] |
| **fee_range** | **string**| product_product_options fee_range | [optional] |
| **priority_range** | **string**| product_product_options priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductProductOptionsGetCollection200Response**](../Model/ApiProductProductOptionsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductOptionsIdDelete()`

```php
apiProductProductOptionsIdDelete($id)
```

Removes the product_product_options resource.

Removes the product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier

try {
    $apiInstance->apiProductProductOptionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->apiProductProductOptionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |

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

## `apiProductProductOptionsIdGet()`

```php
apiProductProductOptionsIdGet($id): \OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_product_options resource.

Retrieves a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier

try {
    $result = $apiInstance->apiProductProductOptionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->apiProductProductOptionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductOptionsIdPut()`

```php
apiProductProductOptionsIdPut($id, $product_product_options_jsonld_post): \OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the product_product_options resource.

Replaces the product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier
$product_product_options_jsonld_post = new \OpenAPI\Client\Model\ProductProductOptionsJsonldPost(); // \OpenAPI\Client\Model\ProductProductOptionsJsonldPost | The updated product_product_options resource

try {
    $result = $apiInstance->apiProductProductOptionsIdPut($id, $product_product_options_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->apiProductProductOptionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |
| **product_product_options_jsonld_post** | [**\OpenAPI\Client\Model\ProductProductOptionsJsonldPost**](../Model/ProductProductOptionsJsonldPost.md)| The updated product_product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductProductOptionsPost()`

```php
apiProductProductOptionsPost($product_product_options_jsonld_add_post): \OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a product_product_options resource.

Creates a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_product_options_jsonld_add_post = new \OpenAPI\Client\Model\ProductProductOptionsJsonldAddPost(); // \OpenAPI\Client\Model\ProductProductOptionsJsonldAddPost | The new product_product_options resource

try {
    $result = $apiInstance->apiProductProductOptionsPost($product_product_options_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->apiProductProductOptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_product_options_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductProductOptionsJsonldAddPost**](../Model/ProductProductOptionsJsonldAddPost.md)| The new product_product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductOptionApiFileUpload()`

```php
productProductOptionApiFileUpload($id, $product_product_options_jsonld): \OpenAPI\Client\Model\ProductProductOptionsJsonldProductProductOptionShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_product_options resource.

Creates a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier
$product_product_options_jsonld = new \OpenAPI\Client\Model\ProductProductOptionsJsonld(); // \OpenAPI\Client\Model\ProductProductOptionsJsonld | The new product_product_options resource

try {
    $result = $apiInstance->productProductOptionApiFileUpload($id, $product_product_options_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->productProductOptionApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |
| **product_product_options_jsonld** | [**\OpenAPI\Client\Model\ProductProductOptionsJsonld**](../Model/ProductProductOptionsJsonld.md)| The new product_product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldProductProductOptionShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductProductOptionsJsonldProductProductOptionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductOptionDropDown()`

```php
productProductOptionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $product, $product2, $sub_product, $sub_product2, $option, $option2, $search, $fees, $fees2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range): \OpenAPI\Client\Model\ProductProductOptionDropDown200Response
```

Retrieves the collection of product_product_options resources.

Retrieves the collection of product_product_options resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
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
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$sub_product = 'sub_product_example'; // string | 
$sub_product2 = array('sub_product_example'); // string[] | 
$option = 'option_example'; // string | 
$option2 = array('option_example'); // string[] | 
$search = 'search_example'; // string | 
$fees = 'fees_example'; // string | 
$fees2 = array('fees_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_product_options slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_product_options slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_product_options slug_end_with
$id_partial = 'id_partial_example'; // string | product_product_options id_partial
$id_start_with = 'id_start_with_example'; // string | product_product_options id_start_with
$id_end_with = 'id_end_with_example'; // string | product_product_options id_end_with
$number_partial = 'number_partial_example'; // string | product_product_options number_partial
$number_start_with = 'number_start_with_example'; // string | product_product_options number_start_with
$number_end_with = 'number_end_with_example'; // string | product_product_options number_end_with
$color_partial = 'color_partial_example'; // string | product_product_options color_partial
$color_start_with = 'color_start_with_example'; // string | product_product_options color_start_with
$color_end_with = 'color_end_with_example'; // string | product_product_options color_end_with
$icon_partial = 'icon_partial_example'; // string | product_product_options icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_product_options icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_product_options icon_end_with
$fee_range = 'fee_range_example'; // string | product_product_options fee_range
$priority_range = 'priority_range_example'; // string | product_product_options priority_range

try {
    $result = $apiInstance->productProductOptionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $product, $product2, $sub_product, $sub_product2, $option, $option2, $search, $fees, $fees2, $exists_notes, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $fee_range, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->productProductOptionDropDown: ', $e->getMessage(), PHP_EOL;
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
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **sub_product** | **string**|  | [optional] |
| **sub_product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **option** | **string**|  | [optional] |
| **option2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **fees** | **string**|  | [optional] |
| **fees2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_product_options slug_partial | [optional] |
| **slug_start_with** | **string**| product_product_options slug_start_with | [optional] |
| **slug_end_with** | **string**| product_product_options slug_end_with | [optional] |
| **id_partial** | **string**| product_product_options id_partial | [optional] |
| **id_start_with** | **string**| product_product_options id_start_with | [optional] |
| **id_end_with** | **string**| product_product_options id_end_with | [optional] |
| **number_partial** | **string**| product_product_options number_partial | [optional] |
| **number_start_with** | **string**| product_product_options number_start_with | [optional] |
| **number_end_with** | **string**| product_product_options number_end_with | [optional] |
| **color_partial** | **string**| product_product_options color_partial | [optional] |
| **color_start_with** | **string**| product_product_options color_start_with | [optional] |
| **color_end_with** | **string**| product_product_options color_end_with | [optional] |
| **icon_partial** | **string**| product_product_options icon_partial | [optional] |
| **icon_start_with** | **string**| product_product_options icon_start_with | [optional] |
| **icon_end_with** | **string**| product_product_options icon_end_with | [optional] |
| **fee_range** | **string**| product_product_options fee_range | [optional] |
| **priority_range** | **string**| product_product_options priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionDropDown200Response**](../Model/ProductProductOptionDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductOptionDuplicate()`

```php
productProductOptionDuplicate($id): \OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_product_options resource.

Retrieves a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier

try {
    $result = $apiInstance->productProductOptionDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->productProductOptionDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductProductOptionsJsonldStandardShowProductProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductOptionFetchFiles()`

```php
productProductOptionFetchFiles($id): \OpenAPI\Client\Model\ProductProductOptionsJsonld
```

Retrieves a product_product_options resource.

Retrieves a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier

try {
    $result = $apiInstance->productProductOptionFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->productProductOptionFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonld**](../Model/ProductProductOptionsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductOptionGetBySlug()`

```php
productProductOptionGetBySlug($slug): \OpenAPI\Client\Model\ProductProductOptionsJsonldProductProductOptionShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a product_product_options resource.

Retrieves a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_product_options identifier

try {
    $result = $apiInstance->productProductOptionGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->productProductOptionGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldProductProductOptionShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ProductProductOptionsJsonldProductProductOptionShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductOptionGetDeleteRelations()`

```php
productProductOptionGetDeleteRelations($id): \OpenAPI\Client\Model\ProductProductOptionsJsonldProductProductOptionRelations
```

Retrieves a product_product_options resource.

Retrieves a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier

try {
    $result = $apiInstance->productProductOptionGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->productProductOptionGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldProductProductOptionRelations**](../Model/ProductProductOptionsJsonldProductProductOptionRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productProductOptionMetadata()`

```php
productProductOptionMetadata($id): \OpenAPI\Client\Model\ProductProductOptionsJsonldIdStandardMetadataProductProductOptionMetadataTagTaggingListProductProductOptionRelationsTimestampable
```

Retrieves a product_product_options resource.

Retrieves a product_product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_product_options identifier

try {
    $result = $apiInstance->productProductOptionMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductProductOptionsApi->productProductOptionMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductProductOptionsJsonldIdStandardMetadataProductProductOptionMetadataTagTaggingListProductProductOptionRelationsTimestampable**](../Model/ProductProductOptionsJsonldIdStandardMetadataProductProductOptionMetadataTagTaggingListProductProductOptionRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
