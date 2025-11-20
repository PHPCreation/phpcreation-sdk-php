# OpenAPI\Client\ProductOptionsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductOptionsGetCollection()**](ProductOptionsApi.md#apiProductOptionsGetCollection) | **GET** /open-api/v3/product_options | Retrieves the collection of product_options resources. |
| [**apiProductOptionsIdDelete()**](ProductOptionsApi.md#apiProductOptionsIdDelete) | **DELETE** /open-api/v3/product_options/{id} | Removes the product_options resource. |
| [**apiProductOptionsIdGet()**](ProductOptionsApi.md#apiProductOptionsIdGet) | **GET** /open-api/v3/product_options/{id} | Retrieves a product_options resource. |
| [**apiProductOptionsIdPut()**](ProductOptionsApi.md#apiProductOptionsIdPut) | **PUT** /open-api/v3/product_options/{id} | Replaces the product_options resource. |
| [**apiProductOptionsPost()**](ProductOptionsApi.md#apiProductOptionsPost) | **POST** /open-api/v3/product_options | Creates a product_options resource. |
| [**productOptionApiCorporationAdd()**](ProductOptionsApi.md#productOptionApiCorporationAdd) | **POST** /open-api/v3/product_options/{id}/corporation/add | Creates a product_options resource. |
| [**productOptionApiCorporationRemove()**](ProductOptionsApi.md#productOptionApiCorporationRemove) | **POST** /open-api/v3/product_options/{id}/corporation/remove | Creates a product_options resource. |
| [**productOptionApiFileUpload()**](ProductOptionsApi.md#productOptionApiFileUpload) | **POST** /open-api/v3/product_options/{id}/file/upload | Creates a product_options resource. |
| [**productOptionDropDown()**](ProductOptionsApi.md#productOptionDropDown) | **GET** /open-api/v3/product_options/dropdown/get | Retrieves the collection of product_options resources. |
| [**productOptionDuplicate()**](ProductOptionsApi.md#productOptionDuplicate) | **GET** /open-api/v3/product_options/duplicate/{id} | Retrieves a product_options resource. |
| [**productOptionFetchFiles()**](ProductOptionsApi.md#productOptionFetchFiles) | **GET** /open-api/v3/product_options/fetch_files/{id} | Retrieves a product_options resource. |
| [**productOptionGetBySlug()**](ProductOptionsApi.md#productOptionGetBySlug) | **GET** /open-api/v3/product_options/by_slug/{slug} | Retrieves a product_options resource. |
| [**productOptionGetDeleteRelations()**](ProductOptionsApi.md#productOptionGetDeleteRelations) | **GET** /open-api/v3/product_options/get_delete_relations/{id} | Retrieves a product_options resource. |


## `apiProductOptionsGetCollection()`

```php
apiProductOptionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ApiProductOptionsGetCollection200Response
```

Retrieves the collection of product_options resources.

Retrieves the collection of product_options resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
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
$slug_partial = 'slug_partial_example'; // string | product_options slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_options slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_options slug_end_with
$id_partial = 'id_partial_example'; // string | product_options id_partial
$id_start_with = 'id_start_with_example'; // string | product_options id_start_with
$id_end_with = 'id_end_with_example'; // string | product_options id_end_with
$number_partial = 'number_partial_example'; // string | product_options number_partial
$number_start_with = 'number_start_with_example'; // string | product_options number_start_with
$number_end_with = 'number_end_with_example'; // string | product_options number_end_with
$color_partial = 'color_partial_example'; // string | product_options color_partial
$color_start_with = 'color_start_with_example'; // string | product_options color_start_with
$color_end_with = 'color_end_with_example'; // string | product_options color_end_with
$icon_partial = 'icon_partial_example'; // string | product_options icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_options icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_options icon_end_with
$priority_range = 'priority_range_example'; // string | product_options priority_range

try {
    $result = $apiInstance->apiProductOptionsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->apiProductOptionsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| product_options slug_partial | [optional] |
| **slug_start_with** | **string**| product_options slug_start_with | [optional] |
| **slug_end_with** | **string**| product_options slug_end_with | [optional] |
| **id_partial** | **string**| product_options id_partial | [optional] |
| **id_start_with** | **string**| product_options id_start_with | [optional] |
| **id_end_with** | **string**| product_options id_end_with | [optional] |
| **number_partial** | **string**| product_options number_partial | [optional] |
| **number_start_with** | **string**| product_options number_start_with | [optional] |
| **number_end_with** | **string**| product_options number_end_with | [optional] |
| **color_partial** | **string**| product_options color_partial | [optional] |
| **color_start_with** | **string**| product_options color_start_with | [optional] |
| **color_end_with** | **string**| product_options color_end_with | [optional] |
| **icon_partial** | **string**| product_options icon_partial | [optional] |
| **icon_start_with** | **string**| product_options icon_start_with | [optional] |
| **icon_end_with** | **string**| product_options icon_end_with | [optional] |
| **priority_range** | **string**| product_options priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductOptionsGetCollection200Response**](../Model/ApiProductOptionsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductOptionsIdDelete()`

```php
apiProductOptionsIdDelete($id)
```

Removes the product_options resource.

Removes the product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier

try {
    $apiInstance->apiProductOptionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->apiProductOptionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |

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

## `apiProductOptionsIdGet()`

```php
apiProductOptionsIdGet($id): \OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_options resource.

Retrieves a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier

try {
    $result = $apiInstance->apiProductOptionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->apiProductOptionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductOptionsIdPut()`

```php
apiProductOptionsIdPut($id, $product_options_jsonld_post): \OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the product_options resource.

Replaces the product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier
$product_options_jsonld_post = new \OpenAPI\Client\Model\ProductOptionsJsonldPost(); // \OpenAPI\Client\Model\ProductOptionsJsonldPost | The updated product_options resource

try {
    $result = $apiInstance->apiProductOptionsIdPut($id, $product_options_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->apiProductOptionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |
| **product_options_jsonld_post** | [**\OpenAPI\Client\Model\ProductOptionsJsonldPost**](../Model/ProductOptionsJsonldPost.md)| The updated product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductOptionsPost()`

```php
apiProductOptionsPost($product_options_jsonld_add_post): \OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a product_options resource.

Creates a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_options_jsonld_add_post = new \OpenAPI\Client\Model\ProductOptionsJsonldAddPost(); // \OpenAPI\Client\Model\ProductOptionsJsonldAddPost | The new product_options resource

try {
    $result = $apiInstance->apiProductOptionsPost($product_options_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->apiProductOptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_options_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductOptionsJsonldAddPost**](../Model/ProductOptionsJsonldAddPost.md)| The new product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionApiCorporationAdd()`

```php
productOptionApiCorporationAdd($id, $product_options_jsonld): \OpenAPI\Client\Model\ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_options resource.

Creates a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier
$product_options_jsonld = new \OpenAPI\Client\Model\ProductOptionsJsonld(); // \OpenAPI\Client\Model\ProductOptionsJsonld | The new product_options resource

try {
    $result = $apiInstance->productOptionApiCorporationAdd($id, $product_options_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |
| **product_options_jsonld** | [**\OpenAPI\Client\Model\ProductOptionsJsonld**](../Model/ProductOptionsJsonld.md)| The new product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionApiCorporationRemove()`

```php
productOptionApiCorporationRemove($id, $product_options_jsonld): \OpenAPI\Client\Model\ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_options resource.

Creates a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier
$product_options_jsonld = new \OpenAPI\Client\Model\ProductOptionsJsonld(); // \OpenAPI\Client\Model\ProductOptionsJsonld | The new product_options resource

try {
    $result = $apiInstance->productOptionApiCorporationRemove($id, $product_options_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |
| **product_options_jsonld** | [**\OpenAPI\Client\Model\ProductOptionsJsonld**](../Model/ProductOptionsJsonld.md)| The new product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionApiFileUpload()`

```php
productOptionApiFileUpload($id, $product_options_jsonld): \OpenAPI\Client\Model\ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_options resource.

Creates a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier
$product_options_jsonld = new \OpenAPI\Client\Model\ProductOptionsJsonld(); // \OpenAPI\Client\Model\ProductOptionsJsonld | The new product_options resource

try {
    $result = $apiInstance->productOptionApiFileUpload($id, $product_options_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |
| **product_options_jsonld** | [**\OpenAPI\Client\Model\ProductOptionsJsonld**](../Model/ProductOptionsJsonld.md)| The new product_options resource | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductOptionsJsonldProductOptionShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionDropDown()`

```php
productOptionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ProductOptionDropDown200Response
```

Retrieves the collection of product_options resources.

Retrieves the collection of product_options resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
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
$slug_partial = 'slug_partial_example'; // string | product_options slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_options slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_options slug_end_with
$id_partial = 'id_partial_example'; // string | product_options id_partial
$id_start_with = 'id_start_with_example'; // string | product_options id_start_with
$id_end_with = 'id_end_with_example'; // string | product_options id_end_with
$number_partial = 'number_partial_example'; // string | product_options number_partial
$number_start_with = 'number_start_with_example'; // string | product_options number_start_with
$number_end_with = 'number_end_with_example'; // string | product_options number_end_with
$color_partial = 'color_partial_example'; // string | product_options color_partial
$color_start_with = 'color_start_with_example'; // string | product_options color_start_with
$color_end_with = 'color_end_with_example'; // string | product_options color_end_with
$icon_partial = 'icon_partial_example'; // string | product_options icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_options icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_options icon_end_with
$priority_range = 'priority_range_example'; // string | product_options priority_range

try {
    $result = $apiInstance->productOptionDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| product_options slug_partial | [optional] |
| **slug_start_with** | **string**| product_options slug_start_with | [optional] |
| **slug_end_with** | **string**| product_options slug_end_with | [optional] |
| **id_partial** | **string**| product_options id_partial | [optional] |
| **id_start_with** | **string**| product_options id_start_with | [optional] |
| **id_end_with** | **string**| product_options id_end_with | [optional] |
| **number_partial** | **string**| product_options number_partial | [optional] |
| **number_start_with** | **string**| product_options number_start_with | [optional] |
| **number_end_with** | **string**| product_options number_end_with | [optional] |
| **color_partial** | **string**| product_options color_partial | [optional] |
| **color_start_with** | **string**| product_options color_start_with | [optional] |
| **color_end_with** | **string**| product_options color_end_with | [optional] |
| **icon_partial** | **string**| product_options icon_partial | [optional] |
| **icon_start_with** | **string**| product_options icon_start_with | [optional] |
| **icon_end_with** | **string**| product_options icon_end_with | [optional] |
| **priority_range** | **string**| product_options priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductOptionDropDown200Response**](../Model/ProductOptionDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionDuplicate()`

```php
productOptionDuplicate($id): \OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_options resource.

Retrieves a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier

try {
    $result = $apiInstance->productOptionDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionFetchFiles()`

```php
productOptionFetchFiles($id): \OpenAPI\Client\Model\ProductOptionsJsonld
```

Retrieves a product_options resource.

Retrieves a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier

try {
    $result = $apiInstance->productOptionFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonld**](../Model/ProductOptionsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionGetBySlug()`

```php
productOptionGetBySlug($slug): \OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a product_options resource.

Retrieves a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_options identifier

try {
    $result = $apiInstance->productOptionGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductOptionsJsonldStandardShowProductOptionShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionGetDeleteRelations()`

```php
productOptionGetDeleteRelations($id): \OpenAPI\Client\Model\ProductOptionsJsonldProductOptionRelations
```

Retrieves a product_options resource.

Retrieves a product_options resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_options identifier

try {
    $result = $apiInstance->productOptionGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductOptionsApi->productOptionGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_options identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionsJsonldProductOptionRelations**](../Model/ProductOptionsJsonldProductOptionRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
