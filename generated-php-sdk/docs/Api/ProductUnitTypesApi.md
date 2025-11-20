# OpenAPI\Client\ProductUnitTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductUnitTypesGetCollection()**](ProductUnitTypesApi.md#apiProductUnitTypesGetCollection) | **GET** /open-api/v3/product_unit_types | Retrieves the collection of product_unit_types resources. |
| [**apiProductUnitTypesIdDelete()**](ProductUnitTypesApi.md#apiProductUnitTypesIdDelete) | **DELETE** /open-api/v3/product_unit_types/{id} | Removes the product_unit_types resource. |
| [**apiProductUnitTypesIdGet()**](ProductUnitTypesApi.md#apiProductUnitTypesIdGet) | **GET** /open-api/v3/product_unit_types/{id} | Retrieves a product_unit_types resource. |
| [**apiProductUnitTypesIdPut()**](ProductUnitTypesApi.md#apiProductUnitTypesIdPut) | **PUT** /open-api/v3/product_unit_types/{id} | Replaces the product_unit_types resource. |
| [**apiProductUnitTypesPost()**](ProductUnitTypesApi.md#apiProductUnitTypesPost) | **POST** /open-api/v3/product_unit_types | Creates a product_unit_types resource. |
| [**productUnitTypeApiFileUpload()**](ProductUnitTypesApi.md#productUnitTypeApiFileUpload) | **POST** /open-api/v3/product_unit_types/{id}/file/upload | Creates a product_unit_types resource. |
| [**productUnitTypeDropDown()**](ProductUnitTypesApi.md#productUnitTypeDropDown) | **GET** /open-api/v3/product_unit_types/dropdown/get | Retrieves the collection of product_unit_types resources. |
| [**productUnitTypeDuplicate()**](ProductUnitTypesApi.md#productUnitTypeDuplicate) | **GET** /open-api/v3/product_unit_types/duplicate/{id} | Retrieves a product_unit_types resource. |
| [**productUnitTypeFetchFiles()**](ProductUnitTypesApi.md#productUnitTypeFetchFiles) | **GET** /open-api/v3/product_unit_types/fetch_files/{id} | Retrieves a product_unit_types resource. |
| [**productUnitTypeGetBySlug()**](ProductUnitTypesApi.md#productUnitTypeGetBySlug) | **GET** /open-api/v3/product_unit_types/by_slug/{slug} | Retrieves a product_unit_types resource. |
| [**productUnitTypeGetDeleteRelations()**](ProductUnitTypesApi.md#productUnitTypeGetDeleteRelations) | **GET** /open-api/v3/product_unit_types/get_delete_relations/{id} | Retrieves a product_unit_types resource. |
| [**productUnitTypeMetadata()**](ProductUnitTypesApi.md#productUnitTypeMetadata) | **GET** /open-api/v3/product_unit_types/metadata/{id} | Retrieves a product_unit_types resource. |


## `apiProductUnitTypesGetCollection()`

```php
apiProductUnitTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ApiProductUnitTypesGetCollection200Response
```

Retrieves the collection of product_unit_types resources.

Retrieves the collection of product_unit_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_unit_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_unit_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_unit_types slug_end_with
$id_partial = 'id_partial_example'; // string | product_unit_types id_partial
$id_start_with = 'id_start_with_example'; // string | product_unit_types id_start_with
$id_end_with = 'id_end_with_example'; // string | product_unit_types id_end_with
$number_partial = 'number_partial_example'; // string | product_unit_types number_partial
$number_start_with = 'number_start_with_example'; // string | product_unit_types number_start_with
$number_end_with = 'number_end_with_example'; // string | product_unit_types number_end_with
$color_partial = 'color_partial_example'; // string | product_unit_types color_partial
$color_start_with = 'color_start_with_example'; // string | product_unit_types color_start_with
$color_end_with = 'color_end_with_example'; // string | product_unit_types color_end_with
$icon_partial = 'icon_partial_example'; // string | product_unit_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_unit_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_unit_types icon_end_with
$priority_range = 'priority_range_example'; // string | product_unit_types priority_range

try {
    $result = $apiInstance->apiProductUnitTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->apiProductUnitTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_unit_types slug_partial | [optional] |
| **slug_start_with** | **string**| product_unit_types slug_start_with | [optional] |
| **slug_end_with** | **string**| product_unit_types slug_end_with | [optional] |
| **id_partial** | **string**| product_unit_types id_partial | [optional] |
| **id_start_with** | **string**| product_unit_types id_start_with | [optional] |
| **id_end_with** | **string**| product_unit_types id_end_with | [optional] |
| **number_partial** | **string**| product_unit_types number_partial | [optional] |
| **number_start_with** | **string**| product_unit_types number_start_with | [optional] |
| **number_end_with** | **string**| product_unit_types number_end_with | [optional] |
| **color_partial** | **string**| product_unit_types color_partial | [optional] |
| **color_start_with** | **string**| product_unit_types color_start_with | [optional] |
| **color_end_with** | **string**| product_unit_types color_end_with | [optional] |
| **icon_partial** | **string**| product_unit_types icon_partial | [optional] |
| **icon_start_with** | **string**| product_unit_types icon_start_with | [optional] |
| **icon_end_with** | **string**| product_unit_types icon_end_with | [optional] |
| **priority_range** | **string**| product_unit_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductUnitTypesGetCollection200Response**](../Model/ApiProductUnitTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductUnitTypesIdDelete()`

```php
apiProductUnitTypesIdDelete($id)
```

Removes the product_unit_types resource.

Removes the product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier

try {
    $apiInstance->apiProductUnitTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->apiProductUnitTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |

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

## `apiProductUnitTypesIdGet()`

```php
apiProductUnitTypesIdGet($id): \OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_unit_types resource.

Retrieves a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier

try {
    $result = $apiInstance->apiProductUnitTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->apiProductUnitTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductUnitTypesIdPut()`

```php
apiProductUnitTypesIdPut($id, $product_unit_types_jsonld_post): \OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the product_unit_types resource.

Replaces the product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier
$product_unit_types_jsonld_post = new \OpenAPI\Client\Model\ProductUnitTypesJsonldPost(); // \OpenAPI\Client\Model\ProductUnitTypesJsonldPost | The updated product_unit_types resource

try {
    $result = $apiInstance->apiProductUnitTypesIdPut($id, $product_unit_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->apiProductUnitTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |
| **product_unit_types_jsonld_post** | [**\OpenAPI\Client\Model\ProductUnitTypesJsonldPost**](../Model/ProductUnitTypesJsonldPost.md)| The updated product_unit_types resource | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductUnitTypesPost()`

```php
apiProductUnitTypesPost($product_unit_types_jsonld_add_post): \OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a product_unit_types resource.

Creates a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_unit_types_jsonld_add_post = new \OpenAPI\Client\Model\ProductUnitTypesJsonldAddPost(); // \OpenAPI\Client\Model\ProductUnitTypesJsonldAddPost | The new product_unit_types resource

try {
    $result = $apiInstance->apiProductUnitTypesPost($product_unit_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->apiProductUnitTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_unit_types_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductUnitTypesJsonldAddPost**](../Model/ProductUnitTypesJsonldAddPost.md)| The new product_unit_types resource | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitTypeApiFileUpload()`

```php
productUnitTypeApiFileUpload($id, $product_unit_types_jsonld): \OpenAPI\Client\Model\ProductUnitTypesJsonldProductUnitTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_unit_types resource.

Creates a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier
$product_unit_types_jsonld = new \OpenAPI\Client\Model\ProductUnitTypesJsonld(); // \OpenAPI\Client\Model\ProductUnitTypesJsonld | The new product_unit_types resource

try {
    $result = $apiInstance->productUnitTypeApiFileUpload($id, $product_unit_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->productUnitTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |
| **product_unit_types_jsonld** | [**\OpenAPI\Client\Model\ProductUnitTypesJsonld**](../Model/ProductUnitTypesJsonld.md)| The new product_unit_types resource | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldProductUnitTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductUnitTypesJsonldProductUnitTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitTypeDropDown()`

```php
productUnitTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\ProductUnitTypeDropDown200Response
```

Retrieves the collection of product_unit_types resources.

Retrieves the collection of product_unit_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->productUnitTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->productUnitTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypeDropDown200Response**](../Model/ProductUnitTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitTypeDuplicate()`

```php
productUnitTypeDuplicate($id): \OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_unit_types resource.

Retrieves a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier

try {
    $result = $apiInstance->productUnitTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->productUnitTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitTypeFetchFiles()`

```php
productUnitTypeFetchFiles($id, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ProductUnitTypesJsonld
```

Retrieves a product_unit_types resource.

Retrieves a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier
$slug_partial = 'slug_partial_example'; // string | product_unit_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_unit_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_unit_types slug_end_with
$id_partial = 'id_partial_example'; // string | product_unit_types id_partial
$id_start_with = 'id_start_with_example'; // string | product_unit_types id_start_with
$id_end_with = 'id_end_with_example'; // string | product_unit_types id_end_with
$number_partial = 'number_partial_example'; // string | product_unit_types number_partial
$number_start_with = 'number_start_with_example'; // string | product_unit_types number_start_with
$number_end_with = 'number_end_with_example'; // string | product_unit_types number_end_with
$color_partial = 'color_partial_example'; // string | product_unit_types color_partial
$color_start_with = 'color_start_with_example'; // string | product_unit_types color_start_with
$color_end_with = 'color_end_with_example'; // string | product_unit_types color_end_with
$icon_partial = 'icon_partial_example'; // string | product_unit_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_unit_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_unit_types icon_end_with
$priority_range = 'priority_range_example'; // string | product_unit_types priority_range

try {
    $result = $apiInstance->productUnitTypeFetchFiles($id, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->productUnitTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |
| **slug_partial** | **string**| product_unit_types slug_partial | [optional] |
| **slug_start_with** | **string**| product_unit_types slug_start_with | [optional] |
| **slug_end_with** | **string**| product_unit_types slug_end_with | [optional] |
| **id_partial** | **string**| product_unit_types id_partial | [optional] |
| **id_start_with** | **string**| product_unit_types id_start_with | [optional] |
| **id_end_with** | **string**| product_unit_types id_end_with | [optional] |
| **number_partial** | **string**| product_unit_types number_partial | [optional] |
| **number_start_with** | **string**| product_unit_types number_start_with | [optional] |
| **number_end_with** | **string**| product_unit_types number_end_with | [optional] |
| **color_partial** | **string**| product_unit_types color_partial | [optional] |
| **color_start_with** | **string**| product_unit_types color_start_with | [optional] |
| **color_end_with** | **string**| product_unit_types color_end_with | [optional] |
| **icon_partial** | **string**| product_unit_types icon_partial | [optional] |
| **icon_start_with** | **string**| product_unit_types icon_start_with | [optional] |
| **icon_end_with** | **string**| product_unit_types icon_end_with | [optional] |
| **priority_range** | **string**| product_unit_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonld**](../Model/ProductUnitTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitTypeGetBySlug()`

```php
productUnitTypeGetBySlug($slug): \OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_unit_types resource.

Retrieves a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_unit_types identifier

try {
    $result = $apiInstance->productUnitTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->productUnitTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_unit_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductUnitTypesJsonldStandardShowProductUnitTypeShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitTypeGetDeleteRelations()`

```php
productUnitTypeGetDeleteRelations($id): \OpenAPI\Client\Model\ProductUnitTypesJsonldProductUnitTypeRelations
```

Retrieves a product_unit_types resource.

Retrieves a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier

try {
    $result = $apiInstance->productUnitTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->productUnitTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldProductUnitTypeRelations**](../Model/ProductUnitTypesJsonldProductUnitTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUnitTypeMetadata()`

```php
productUnitTypeMetadata($id): \OpenAPI\Client\Model\ProductUnitTypesJsonldIdStandardMetadataProductUnitTypeMetadataTagTaggingListProductUnitTypeRelationsTimestampable
```

Retrieves a product_unit_types resource.

Retrieves a product_unit_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductUnitTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_unit_types identifier

try {
    $result = $apiInstance->productUnitTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductUnitTypesApi->productUnitTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_unit_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductUnitTypesJsonldIdStandardMetadataProductUnitTypeMetadataTagTaggingListProductUnitTypeRelationsTimestampable**](../Model/ProductUnitTypesJsonldIdStandardMetadataProductUnitTypeMetadataTagTaggingListProductUnitTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
