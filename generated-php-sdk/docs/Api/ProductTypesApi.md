# OpenAPI\Client\ProductTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductTypesGetCollection()**](ProductTypesApi.md#apiProductTypesGetCollection) | **GET** /open-api/v3/product_types | Retrieves the collection of product_types resources. |
| [**apiProductTypesIdDelete()**](ProductTypesApi.md#apiProductTypesIdDelete) | **DELETE** /open-api/v3/product_types/{id} | Removes the product_types resource. |
| [**apiProductTypesIdGet()**](ProductTypesApi.md#apiProductTypesIdGet) | **GET** /open-api/v3/product_types/{id} | Retrieves a product_types resource. |
| [**apiProductTypesIdPut()**](ProductTypesApi.md#apiProductTypesIdPut) | **PUT** /open-api/v3/product_types/{id} | Replaces the product_types resource. |
| [**apiProductTypesPost()**](ProductTypesApi.md#apiProductTypesPost) | **POST** /open-api/v3/product_types | Creates a product_types resource. |
| [**productTypeApiFileUpload()**](ProductTypesApi.md#productTypeApiFileUpload) | **POST** /open-api/v3/product_types/{id}/file/upload | Creates a product_types resource. |
| [**productTypeDropDown()**](ProductTypesApi.md#productTypeDropDown) | **GET** /open-api/v3/product_types/dropdown/get | Retrieves the collection of product_types resources. |
| [**productTypeDuplicate()**](ProductTypesApi.md#productTypeDuplicate) | **GET** /open-api/v3/product_types/duplicate/{id} | Retrieves a product_types resource. |
| [**productTypeFetchFiles()**](ProductTypesApi.md#productTypeFetchFiles) | **GET** /open-api/v3/product_types/fetch_files/{id} | Retrieves a product_types resource. |
| [**productTypeGetBySlug()**](ProductTypesApi.md#productTypeGetBySlug) | **GET** /open-api/v3/product_types/by_slug/{slug} | Retrieves a product_types resource. |
| [**productTypeGetDeleteRelations()**](ProductTypesApi.md#productTypeGetDeleteRelations) | **GET** /open-api/v3/product_types/get_delete_relations/{id} | Retrieves a product_types resource. |
| [**productTypeMetadata()**](ProductTypesApi.md#productTypeMetadata) | **GET** /open-api/v3/product_types/metadata/{id} | Retrieves a product_types resource. |


## `apiProductTypesGetCollection()`

```php
apiProductTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $discount, $discount2, $target_profitability, $target_profitability2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $target_profitability_between, $target_profitability_gt, $target_profitability_gte, $target_profitability_lt, $target_profitability_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $visible_status, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range): \OpenAPI\Client\Model\ApiProductTypesGetCollection200Response
```

Retrieves the collection of product_types resources.

Retrieves the collection of product_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$discount = 'discount_example'; // string | 
$discount2 = array('discount_example'); // string[] | 
$target_profitability = 'target_profitability_example'; // string | 
$target_profitability2 = array('target_profitability_example'); // string[] | 
$lvl = 56; // int | 
$lvl2 = array(56); // int[] | 
$lft = 56; // int | 
$lft2 = array(56); // int[] | 
$rgt = 56; // int | 
$rgt2 = array(56); // int[] | 
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$discount_between = 'discount_between_example'; // string | 
$discount_gt = 'discount_gt_example'; // string | 
$discount_gte = 'discount_gte_example'; // string | 
$discount_lt = 'discount_lt_example'; // string | 
$discount_lte = 'discount_lte_example'; // string | 
$target_profitability_between = 'target_profitability_between_example'; // string | 
$target_profitability_gt = 'target_profitability_gt_example'; // string | 
$target_profitability_gte = 'target_profitability_gte_example'; // string | 
$target_profitability_lt = 'target_profitability_lt_example'; // string | 
$target_profitability_lte = 'target_profitability_lte_example'; // string | 
$lvl_between = 'lvl_between_example'; // string | 
$lvl_gt = 'lvl_gt_example'; // string | 
$lvl_gte = 'lvl_gte_example'; // string | 
$lvl_lt = 'lvl_lt_example'; // string | 
$lvl_lte = 'lvl_lte_example'; // string | 
$lft_between = 'lft_between_example'; // string | 
$lft_gt = 'lft_gt_example'; // string | 
$lft_gte = 'lft_gte_example'; // string | 
$lft_lt = 'lft_lt_example'; // string | 
$lft_lte = 'lft_lte_example'; // string | 
$rgt_between = 'rgt_between_example'; // string | 
$rgt_gt = 'rgt_gt_example'; // string | 
$rgt_gte = 'rgt_gte_example'; // string | 
$rgt_lt = 'rgt_lt_example'; // string | 
$rgt_lte = 'rgt_lte_example'; // string | 
$visible_status = True; // bool | 
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
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_types slug_end_with
$id_partial = 'id_partial_example'; // string | product_types id_partial
$id_start_with = 'id_start_with_example'; // string | product_types id_start_with
$id_end_with = 'id_end_with_example'; // string | product_types id_end_with
$icon_partial = 'icon_partial_example'; // string | product_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | product_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | product_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | product_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | product_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | product_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | product_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | product_types priority_range
$lvl_range = 'lvl_range_example'; // string | product_types lvl_range
$rgt_range = 'rgt_range_example'; // string | product_types rgt_range
$lft_range = 'lft_range_example'; // string | product_types lft_range

try {
    $result = $apiInstance->apiProductTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $discount, $discount2, $target_profitability, $target_profitability2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $target_profitability_between, $target_profitability_gt, $target_profitability_gte, $target_profitability_lt, $target_profitability_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $visible_status, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->apiProductTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **discount** | **string**|  | [optional] |
| **discount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **target_profitability** | **string**|  | [optional] |
| **target_profitability2** | [**string[]**](../Model/string.md)|  | [optional] |
| **lvl** | **int**|  | [optional] |
| **lvl2** | [**int[]**](../Model/int.md)|  | [optional] |
| **lft** | **int**|  | [optional] |
| **lft2** | [**int[]**](../Model/int.md)|  | [optional] |
| **rgt** | **int**|  | [optional] |
| **rgt2** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **discount_between** | **string**|  | [optional] |
| **discount_gt** | **string**|  | [optional] |
| **discount_gte** | **string**|  | [optional] |
| **discount_lt** | **string**|  | [optional] |
| **discount_lte** | **string**|  | [optional] |
| **target_profitability_between** | **string**|  | [optional] |
| **target_profitability_gt** | **string**|  | [optional] |
| **target_profitability_gte** | **string**|  | [optional] |
| **target_profitability_lt** | **string**|  | [optional] |
| **target_profitability_lte** | **string**|  | [optional] |
| **lvl_between** | **string**|  | [optional] |
| **lvl_gt** | **string**|  | [optional] |
| **lvl_gte** | **string**|  | [optional] |
| **lvl_lt** | **string**|  | [optional] |
| **lvl_lte** | **string**|  | [optional] |
| **lft_between** | **string**|  | [optional] |
| **lft_gt** | **string**|  | [optional] |
| **lft_gte** | **string**|  | [optional] |
| **lft_lt** | **string**|  | [optional] |
| **lft_lte** | **string**|  | [optional] |
| **rgt_between** | **string**|  | [optional] |
| **rgt_gt** | **string**|  | [optional] |
| **rgt_gte** | **string**|  | [optional] |
| **rgt_lt** | **string**|  | [optional] |
| **rgt_lte** | **string**|  | [optional] |
| **visible_status** | **bool**|  | [optional] |
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
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_types slug_partial | [optional] |
| **slug_start_with** | **string**| product_types slug_start_with | [optional] |
| **slug_end_with** | **string**| product_types slug_end_with | [optional] |
| **id_partial** | **string**| product_types id_partial | [optional] |
| **id_start_with** | **string**| product_types id_start_with | [optional] |
| **id_end_with** | **string**| product_types id_end_with | [optional] |
| **icon_partial** | **string**| product_types icon_partial | [optional] |
| **icon_start_with** | **string**| product_types icon_start_with | [optional] |
| **icon_end_with** | **string**| product_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| product_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| product_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| product_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| product_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| product_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| product_types translations.description_end_with | [optional] |
| **priority_range** | **string**| product_types priority_range | [optional] |
| **lvl_range** | **string**| product_types lvl_range | [optional] |
| **rgt_range** | **string**| product_types rgt_range | [optional] |
| **lft_range** | **string**| product_types lft_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductTypesGetCollection200Response**](../Model/ApiProductTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductTypesIdDelete()`

```php
apiProductTypesIdDelete($id)
```

Removes the product_types resource.

Removes the product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier

try {
    $apiInstance->apiProductTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->apiProductTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |

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

## `apiProductTypesIdGet()`

```php
apiProductTypesIdGet($id): \OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a product_types resource.

Retrieves a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier

try {
    $result = $apiInstance->apiProductTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->apiProductTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductTypesIdPut()`

```php
apiProductTypesIdPut($id, $product_types_jsonld_post): \OpenAPI\Client\Model\ProductTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the product_types resource.

Replaces the product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier
$product_types_jsonld_post = new \OpenAPI\Client\Model\ProductTypesJsonldPost(); // \OpenAPI\Client\Model\ProductTypesJsonldPost | The updated product_types resource

try {
    $result = $apiInstance->apiProductTypesIdPut($id, $product_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->apiProductTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |
| **product_types_jsonld_post** | [**\OpenAPI\Client\Model\ProductTypesJsonldPost**](../Model/ProductTypesJsonldPost.md)| The updated product_types resource | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ProductTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductTypesPost()`

```php
apiProductTypesPost($product_types_jsonld_add_post): \OpenAPI\Client\Model\ProductTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a product_types resource.

Creates a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_types_jsonld_add_post = new \OpenAPI\Client\Model\ProductTypesJsonldAddPost(); // \OpenAPI\Client\Model\ProductTypesJsonldAddPost | The new product_types resource

try {
    $result = $apiInstance->apiProductTypesPost($product_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->apiProductTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_types_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductTypesJsonldAddPost**](../Model/ProductTypesJsonldAddPost.md)| The new product_types resource | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ProductTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productTypeApiFileUpload()`

```php
productTypeApiFileUpload($id, $product_types_jsonld): \OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a product_types resource.

Creates a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier
$product_types_jsonld = new \OpenAPI\Client\Model\ProductTypesJsonld(); // \OpenAPI\Client\Model\ProductTypesJsonld | The new product_types resource

try {
    $result = $apiInstance->productTypeApiFileUpload($id, $product_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->productTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |
| **product_types_jsonld** | [**\OpenAPI\Client\Model\ProductTypesJsonld**](../Model/ProductTypesJsonld.md)| The new product_types resource | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productTypeDropDown()`

```php
productTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $discount, $discount2, $target_profitability, $target_profitability2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $target_profitability_between, $target_profitability_gt, $target_profitability_gte, $target_profitability_lt, $target_profitability_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $visible_status, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range): \OpenAPI\Client\Model\ProductTypeDropDown200Response
```

Retrieves the collection of product_types resources.

Retrieves the collection of product_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$discount = 'discount_example'; // string | 
$discount2 = array('discount_example'); // string[] | 
$target_profitability = 'target_profitability_example'; // string | 
$target_profitability2 = array('target_profitability_example'); // string[] | 
$lvl = 56; // int | 
$lvl2 = array(56); // int[] | 
$lft = 56; // int | 
$lft2 = array(56); // int[] | 
$rgt = 56; // int | 
$rgt2 = array(56); // int[] | 
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$discount_between = 'discount_between_example'; // string | 
$discount_gt = 'discount_gt_example'; // string | 
$discount_gte = 'discount_gte_example'; // string | 
$discount_lt = 'discount_lt_example'; // string | 
$discount_lte = 'discount_lte_example'; // string | 
$target_profitability_between = 'target_profitability_between_example'; // string | 
$target_profitability_gt = 'target_profitability_gt_example'; // string | 
$target_profitability_gte = 'target_profitability_gte_example'; // string | 
$target_profitability_lt = 'target_profitability_lt_example'; // string | 
$target_profitability_lte = 'target_profitability_lte_example'; // string | 
$lvl_between = 'lvl_between_example'; // string | 
$lvl_gt = 'lvl_gt_example'; // string | 
$lvl_gte = 'lvl_gte_example'; // string | 
$lvl_lt = 'lvl_lt_example'; // string | 
$lvl_lte = 'lvl_lte_example'; // string | 
$lft_between = 'lft_between_example'; // string | 
$lft_gt = 'lft_gt_example'; // string | 
$lft_gte = 'lft_gte_example'; // string | 
$lft_lt = 'lft_lt_example'; // string | 
$lft_lte = 'lft_lte_example'; // string | 
$rgt_between = 'rgt_between_example'; // string | 
$rgt_gt = 'rgt_gt_example'; // string | 
$rgt_gte = 'rgt_gte_example'; // string | 
$rgt_lt = 'rgt_lt_example'; // string | 
$rgt_lte = 'rgt_lte_example'; // string | 
$visible_status = True; // bool | 
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
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | product_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | product_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | product_types slug_end_with
$id_partial = 'id_partial_example'; // string | product_types id_partial
$id_start_with = 'id_start_with_example'; // string | product_types id_start_with
$id_end_with = 'id_end_with_example'; // string | product_types id_end_with
$icon_partial = 'icon_partial_example'; // string | product_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | product_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | product_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | product_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | product_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | product_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | product_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | product_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | product_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | product_types priority_range
$lvl_range = 'lvl_range_example'; // string | product_types lvl_range
$rgt_range = 'rgt_range_example'; // string | product_types rgt_range
$lft_range = 'lft_range_example'; // string | product_types lft_range

try {
    $result = $apiInstance->productTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $discount, $discount2, $target_profitability, $target_profitability2, $lvl, $lvl2, $lft, $lft2, $rgt, $rgt2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $target_profitability_between, $target_profitability_gt, $target_profitability_gte, $target_profitability_lt, $target_profitability_lte, $lvl_between, $lvl_gt, $lvl_gte, $lvl_lt, $lvl_lte, $lft_between, $lft_gt, $lft_gte, $lft_lt, $lft_lte, $rgt_between, $rgt_gt, $rgt_gte, $rgt_lt, $rgt_lte, $visible_status, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range, $lvl_range, $rgt_range, $lft_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->productTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **discount** | **string**|  | [optional] |
| **discount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **target_profitability** | **string**|  | [optional] |
| **target_profitability2** | [**string[]**](../Model/string.md)|  | [optional] |
| **lvl** | **int**|  | [optional] |
| **lvl2** | [**int[]**](../Model/int.md)|  | [optional] |
| **lft** | **int**|  | [optional] |
| **lft2** | [**int[]**](../Model/int.md)|  | [optional] |
| **rgt** | **int**|  | [optional] |
| **rgt2** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **discount_between** | **string**|  | [optional] |
| **discount_gt** | **string**|  | [optional] |
| **discount_gte** | **string**|  | [optional] |
| **discount_lt** | **string**|  | [optional] |
| **discount_lte** | **string**|  | [optional] |
| **target_profitability_between** | **string**|  | [optional] |
| **target_profitability_gt** | **string**|  | [optional] |
| **target_profitability_gte** | **string**|  | [optional] |
| **target_profitability_lt** | **string**|  | [optional] |
| **target_profitability_lte** | **string**|  | [optional] |
| **lvl_between** | **string**|  | [optional] |
| **lvl_gt** | **string**|  | [optional] |
| **lvl_gte** | **string**|  | [optional] |
| **lvl_lt** | **string**|  | [optional] |
| **lvl_lte** | **string**|  | [optional] |
| **lft_between** | **string**|  | [optional] |
| **lft_gt** | **string**|  | [optional] |
| **lft_gte** | **string**|  | [optional] |
| **lft_lt** | **string**|  | [optional] |
| **lft_lte** | **string**|  | [optional] |
| **rgt_between** | **string**|  | [optional] |
| **rgt_gt** | **string**|  | [optional] |
| **rgt_gte** | **string**|  | [optional] |
| **rgt_lt** | **string**|  | [optional] |
| **rgt_lte** | **string**|  | [optional] |
| **visible_status** | **bool**|  | [optional] |
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
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| product_types slug_partial | [optional] |
| **slug_start_with** | **string**| product_types slug_start_with | [optional] |
| **slug_end_with** | **string**| product_types slug_end_with | [optional] |
| **id_partial** | **string**| product_types id_partial | [optional] |
| **id_start_with** | **string**| product_types id_start_with | [optional] |
| **id_end_with** | **string**| product_types id_end_with | [optional] |
| **icon_partial** | **string**| product_types icon_partial | [optional] |
| **icon_start_with** | **string**| product_types icon_start_with | [optional] |
| **icon_end_with** | **string**| product_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| product_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| product_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| product_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| product_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| product_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| product_types translations.description_end_with | [optional] |
| **priority_range** | **string**| product_types priority_range | [optional] |
| **lvl_range** | **string**| product_types lvl_range | [optional] |
| **rgt_range** | **string**| product_types rgt_range | [optional] |
| **lft_range** | **string**| product_types lft_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductTypeDropDown200Response**](../Model/ProductTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productTypeDuplicate()`

```php
productTypeDuplicate($id): \OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingList
```

Retrieves a product_types resource.

Retrieves a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier

try {
    $result = $apiInstance->productTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->productTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingList**](../Model/ProductTypesJsonldProductTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productTypeFetchFiles()`

```php
productTypeFetchFiles($id): \OpenAPI\Client\Model\ProductTypesJsonld
```

Retrieves a product_types resource.

Retrieves a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier

try {
    $result = $apiInstance->productTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->productTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonld**](../Model/ProductTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productTypeGetBySlug()`

```php
productTypeGetBySlug($slug): \OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a product_types resource.

Retrieves a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | product_types identifier

try {
    $result = $apiInstance->productTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->productTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| product_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldProductTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ProductTypesJsonldProductTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productTypeGetDeleteRelations()`

```php
productTypeGetDeleteRelations($id): \OpenAPI\Client\Model\ProductTypesJsonldProductTypeRelations
```

Retrieves a product_types resource.

Retrieves a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier

try {
    $result = $apiInstance->productTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->productTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldProductTypeRelations**](../Model/ProductTypesJsonldProductTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productTypeMetadata()`

```php
productTypeMetadata($id): \OpenAPI\Client\Model\ProductTypesJsonldIdStandardMetadataProductTypeMetadataTagTaggingListProductTypeRelationsTimestampable
```

Retrieves a product_types resource.

Retrieves a product_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | product_types identifier

try {
    $result = $apiInstance->productTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypesApi->productTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| product_types identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductTypesJsonldIdStandardMetadataProductTypeMetadataTagTaggingListProductTypeRelationsTimestampable**](../Model/ProductTypesJsonldIdStandardMetadataProductTypeMetadataTagTaggingListProductTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
