# OpenAPI\Client\ProductBrandsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductBrandsGetCollection()**](ProductBrandsApi.md#apiProductBrandsGetCollection) | **GET** /open-api/v3/product_brands | Retrieves the collection of product_brands resources. |
| [**apiProductBrandsIdDelete()**](ProductBrandsApi.md#apiProductBrandsIdDelete) | **DELETE** /open-api/v3/product_brands/{id} | Removes the product_brands resource. |
| [**apiProductBrandsIdGet()**](ProductBrandsApi.md#apiProductBrandsIdGet) | **GET** /open-api/v3/product_brands/{id} | Retrieves a product_brands resource. |
| [**apiProductBrandsIdPut()**](ProductBrandsApi.md#apiProductBrandsIdPut) | **PUT** /open-api/v3/product_brands/{id} | Replaces the product_brands resource. |
| [**apiProductBrandsPost()**](ProductBrandsApi.md#apiProductBrandsPost) | **POST** /open-api/v3/product_brands | Creates a product_brands resource. |
| [**productBrandApiFileUpload()**](ProductBrandsApi.md#productBrandApiFileUpload) | **POST** /open-api/v3/product_brands/{id}/file/upload | Creates a product_brands resource. |
| [**productBrandDropDown()**](ProductBrandsApi.md#productBrandDropDown) | **GET** /open-api/v3/product_brands/dropdown/get | Retrieves the collection of product_brands resources. |
| [**productBrandDuplicate()**](ProductBrandsApi.md#productBrandDuplicate) | **GET** /open-api/v3/product_brands/duplicate/{id} | Retrieves a product_brands resource. |
| [**productBrandFetchFiles()**](ProductBrandsApi.md#productBrandFetchFiles) | **GET** /open-api/v3/product_brands/fetch_files/{id} | Retrieves a product_brands resource. |
| [**productBrandGetBySlug()**](ProductBrandsApi.md#productBrandGetBySlug) | **GET** /open-api/v3/product_brands/by_slug/{slug} | Retrieves a product_brands resource. |
| [**productBrandGetDeleteRelations()**](ProductBrandsApi.md#productBrandGetDeleteRelations) | **GET** /open-api/v3/product_brands/get_delete_relations/{id} | Retrieves a product_brands resource. |
| [**productBrandMetadata()**](ProductBrandsApi.md#productBrandMetadata) | **GET** /open-api/v3/product_brands/metadata/{id} | Retrieves a product_brands resource. |


## `apiProductBrandsGetCollection()`

```php
apiProductBrandsGetCollection($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ApiProductBrandsGetCollection200Response
```

Retrieves the collection of product_brands resources.

Retrieves the collection of product_brands resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$search = 'search_example'; // string | 
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_brands slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_brands slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_brands slug_end_with
$id_partial = 'id_partial_example'; // string | product_brands id_partial
$id_start_with = 'id_start_with_example'; // string | product_brands id_start_with
$id_end_with = 'id_end_with_example'; // string | product_brands id_end_with
$number_partial = 'number_partial_example'; // string | product_brands number_partial
$number_start_with = 'number_start_with_example'; // string | product_brands number_start_with
$number_end_with = 'number_end_with_example'; // string | product_brands number_end_with
$color_partial = 'color_partial_example'; // string | product_brands color_partial
$color_start_with = 'color_start_with_example'; // string | product_brands color_start_with
$color_end_with = 'color_end_with_example'; // string | product_brands color_end_with
$icon_partial = 'icon_partial_example'; // string | product_brands icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_brands icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_brands icon_end_with
$priority_range = 'priority_range_example'; // string | product_brands priority_range

try {
    $result = $apiInstance->apiProductBrandsGetCollection($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->apiProductBrandsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_brands slug_partial | [optional] |
| **slug_start_with** | **string**| product_brands slug_start_with | [optional] |
| **slug_end_with** | **string**| product_brands slug_end_with | [optional] |
| **id_partial** | **string**| product_brands id_partial | [optional] |
| **id_start_with** | **string**| product_brands id_start_with | [optional] |
| **id_end_with** | **string**| product_brands id_end_with | [optional] |
| **number_partial** | **string**| product_brands number_partial | [optional] |
| **number_start_with** | **string**| product_brands number_start_with | [optional] |
| **number_end_with** | **string**| product_brands number_end_with | [optional] |
| **color_partial** | **string**| product_brands color_partial | [optional] |
| **color_start_with** | **string**| product_brands color_start_with | [optional] |
| **color_end_with** | **string**| product_brands color_end_with | [optional] |
| **icon_partial** | **string**| product_brands icon_partial | [optional] |
| **icon_start_with** | **string**| product_brands icon_start_with | [optional] |
| **icon_end_with** | **string**| product_brands icon_end_with | [optional] |
| **priority_range** | **string**| product_brands priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductBrandsGetCollection200Response**](../Model/ApiProductBrandsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductBrandsIdDelete()`

```php
apiProductBrandsIdDelete($id)
```

Removes the product_brands resource.

Removes the product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier

try {
    $apiInstance->apiProductBrandsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->apiProductBrandsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |

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

## `apiProductBrandsIdGet()`

```php
apiProductBrandsIdGet($id): \OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_brands resource.

Retrieves a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier

try {
    $result = $apiInstance->apiProductBrandsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->apiProductBrandsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductBrandsIdPut()`

```php
apiProductBrandsIdPut($id, $product_brands_jsonld_post): \OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the product_brands resource.

Replaces the product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier
$product_brands_jsonld_post = new \OpenAPI\Client\Model\ProductBrandsJsonldPost(); // \OpenAPI\Client\Model\ProductBrandsJsonldPost | The updated product_brands resource

try {
    $result = $apiInstance->apiProductBrandsIdPut($id, $product_brands_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->apiProductBrandsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |
| **product_brands_jsonld_post** | [**\OpenAPI\Client\Model\ProductBrandsJsonldPost**](../Model/ProductBrandsJsonldPost.md)| The updated product_brands resource | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductBrandsPost()`

```php
apiProductBrandsPost($product_brands_jsonld_add_post): \OpenAPI\Client\Model\ProductBrandsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a product_brands resource.

Creates a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_brands_jsonld_add_post = new \OpenAPI\Client\Model\ProductBrandsJsonldAddPost(); // \OpenAPI\Client\Model\ProductBrandsJsonldAddPost | The new product_brands resource

try {
    $result = $apiInstance->apiProductBrandsPost($product_brands_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->apiProductBrandsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_brands_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductBrandsJsonldAddPost**](../Model/ProductBrandsJsonldAddPost.md)| The new product_brands resource | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ProductBrandsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandApiFileUpload()`

```php
productBrandApiFileUpload($id, $product_brands_jsonld): \OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a product_brands resource.

Creates a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier
$product_brands_jsonld = new \OpenAPI\Client\Model\ProductBrandsJsonld(); // \OpenAPI\Client\Model\ProductBrandsJsonld | The new product_brands resource

try {
    $result = $apiInstance->productBrandApiFileUpload($id, $product_brands_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->productBrandApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |
| **product_brands_jsonld** | [**\OpenAPI\Client\Model\ProductBrandsJsonld**](../Model/ProductBrandsJsonld.md)| The new product_brands resource | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandDropDown()`

```php
productBrandDropDown($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ProductBrandDropDown200Response
```

Retrieves the collection of product_brands resources.

Retrieves the collection of product_brands resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$created_at_before = 'created_at_before_example'; // string | 
$created_at_strictly_before = 'created_at_strictly_before_example'; // string | 
$created_at_after = 'created_at_after_example'; // string | 
$created_at_strictly_after = 'created_at_strictly_after_example'; // string | 
$search = 'search_example'; // string | 
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_brands slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_brands slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_brands slug_end_with
$id_partial = 'id_partial_example'; // string | product_brands id_partial
$id_start_with = 'id_start_with_example'; // string | product_brands id_start_with
$id_end_with = 'id_end_with_example'; // string | product_brands id_end_with
$number_partial = 'number_partial_example'; // string | product_brands number_partial
$number_start_with = 'number_start_with_example'; // string | product_brands number_start_with
$number_end_with = 'number_end_with_example'; // string | product_brands number_end_with
$color_partial = 'color_partial_example'; // string | product_brands color_partial
$color_start_with = 'color_start_with_example'; // string | product_brands color_start_with
$color_end_with = 'color_end_with_example'; // string | product_brands color_end_with
$icon_partial = 'icon_partial_example'; // string | product_brands icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_brands icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_brands icon_end_with
$priority_range = 'priority_range_example'; // string | product_brands priority_range

try {
    $result = $apiInstance->productBrandDropDown($page, $items_per_page, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $search, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->productBrandDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **created_at_before** | **string**|  | [optional] |
| **created_at_strictly_before** | **string**|  | [optional] |
| **created_at_after** | **string**|  | [optional] |
| **created_at_strictly_after** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_brands slug_partial | [optional] |
| **slug_start_with** | **string**| product_brands slug_start_with | [optional] |
| **slug_end_with** | **string**| product_brands slug_end_with | [optional] |
| **id_partial** | **string**| product_brands id_partial | [optional] |
| **id_start_with** | **string**| product_brands id_start_with | [optional] |
| **id_end_with** | **string**| product_brands id_end_with | [optional] |
| **number_partial** | **string**| product_brands number_partial | [optional] |
| **number_start_with** | **string**| product_brands number_start_with | [optional] |
| **number_end_with** | **string**| product_brands number_end_with | [optional] |
| **color_partial** | **string**| product_brands color_partial | [optional] |
| **color_start_with** | **string**| product_brands color_start_with | [optional] |
| **color_end_with** | **string**| product_brands color_end_with | [optional] |
| **icon_partial** | **string**| product_brands icon_partial | [optional] |
| **icon_start_with** | **string**| product_brands icon_start_with | [optional] |
| **icon_end_with** | **string**| product_brands icon_end_with | [optional] |
| **priority_range** | **string**| product_brands priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductBrandDropDown200Response**](../Model/ProductBrandDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandDuplicate()`

```php
productBrandDuplicate($id): \OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_brands resource.

Retrieves a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier

try {
    $result = $apiInstance->productBrandDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->productBrandDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandFetchFiles()`

```php
productBrandFetchFiles($id): \OpenAPI\Client\Model\ProductBrandsJsonld
```

Retrieves a product_brands resource.

Retrieves a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier

try {
    $result = $apiInstance->productBrandFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->productBrandFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonld**](../Model/ProductBrandsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandGetBySlug()`

```php
productBrandGetBySlug($slug): \OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_brands resource.

Retrieves a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_brands identifier

try {
    $result = $apiInstance->productBrandGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->productBrandGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_brands identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductBrandsJsonldStandardShowProductBrandShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandGetDeleteRelations()`

```php
productBrandGetDeleteRelations($id): \OpenAPI\Client\Model\ProductBrandsJsonldProductBrandRelations
```

Retrieves a product_brands resource.

Retrieves a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier

try {
    $result = $apiInstance->productBrandGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->productBrandGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldProductBrandRelations**](../Model/ProductBrandsJsonldProductBrandRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandMetadata()`

```php
productBrandMetadata($id): \OpenAPI\Client\Model\ProductBrandsJsonldIdStandardMetadataProductBrandMetadataTagTaggingListProductBrandRelationsTimestampable
```

Retrieves a product_brands resource.

Retrieves a product_brands resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductBrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_brands identifier

try {
    $result = $apiInstance->productBrandMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrandsApi->productBrandMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_brands identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductBrandsJsonldIdStandardMetadataProductBrandMetadataTagTaggingListProductBrandRelationsTimestampable**](../Model/ProductBrandsJsonldIdStandardMetadataProductBrandMetadataTagTaggingListProductBrandRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
