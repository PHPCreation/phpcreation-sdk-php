# OpenAPI\Client\ProductsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductsGetCollection()**](ProductsApi.md#apiProductsGetCollection) | **GET** /open-api/v3/products | Retrieves the collection of products resources. |
| [**apiProductsIdDelete()**](ProductsApi.md#apiProductsIdDelete) | **DELETE** /open-api/v3/products/{id} | Removes the products resource. |
| [**apiProductsIdGet()**](ProductsApi.md#apiProductsIdGet) | **GET** /open-api/v3/products/{id} | Retrieves a products resource. |
| [**apiProductsIdPut()**](ProductsApi.md#apiProductsIdPut) | **PUT** /open-api/v3/products/{id} | Replaces the products resource. |
| [**apiProductsPost()**](ProductsApi.md#apiProductsPost) | **POST** /open-api/v3/products | Creates a products resource. |
| [**productApiCorporationAdd()**](ProductsApi.md#productApiCorporationAdd) | **POST** /open-api/v3/products/{id}/corporation/add | Creates a products resource. |
| [**productApiCorporationRemove()**](ProductsApi.md#productApiCorporationRemove) | **POST** /open-api/v3/products/{id}/corporation/remove | Creates a products resource. |
| [**productApiFileUpload()**](ProductsApi.md#productApiFileUpload) | **POST** /open-api/v3/products/{id}/file/upload | Creates a products resource. |
| [**productApiStockReportSummary()**](ProductsApi.md#productApiStockReportSummary) | **GET** /open-api/v3/products/stock/report/summary | Retrieves the collection of products resources. |
| [**productApiStocksReportListing()**](ProductsApi.md#productApiStocksReportListing) | **GET** /open-api/v3/products/stock/report/listing | Retrieves the collection of products resources. |
| [**productByIdGetInventory()**](ProductsApi.md#productByIdGetInventory) | **GET** /open-api/v3/products/{id}/inventory | Retrieves a products resource. |
| [**productBySkuGetInventory()**](ProductsApi.md#productBySkuGetInventory) | **GET** /open-api/v3/products/by_sku/{sku}/inventory | Retrieves a products resource. |
| [**productDropDown()**](ProductsApi.md#productDropDown) | **GET** /open-api/v3/products/dropdown/get | Retrieves the collection of products resources. |
| [**productDuplicate()**](ProductsApi.md#productDuplicate) | **GET** /open-api/v3/products/duplicate/{id} | Retrieves a products resource. |
| [**productFetchFiles()**](ProductsApi.md#productFetchFiles) | **GET** /open-api/v3/products/fetch_files/{id} | Retrieves a products resource. |
| [**productGetBySku()**](ProductsApi.md#productGetBySku) | **GET** /open-api/v3/products/by_sku/{sku} | Retrieves a products resource. |
| [**productGetBySlug()**](ProductsApi.md#productGetBySlug) | **GET** /open-api/v3/products/by_slug/{slug} | Retrieves a products resource. |
| [**productGetDeleteRelations()**](ProductsApi.md#productGetDeleteRelations) | **GET** /open-api/v3/products/get_delete_relations/{id} | Retrieves a products resource. |
| [**productMetadata()**](ProductsApi.md#productMetadata) | **GET** /open-api/v3/products/metadata/{id} | Retrieves a products resource. |


## `apiProductsGetCollection()`

```php
apiProductsGetCollection($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $sku_partial, $sku_start_with, $sku_end_with, $client_code_partial, $client_code_start_with, $client_code_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $title_partial, $title_start_with, $title_end_with, $in_stock_range, $price_range, $price_special_range, $cost_special_range, $cost_range, $weight_range, $dimension_w_range, $dimension_h_range, $dimension_d_range, $time_range): \OpenAPI\Client\Model\ApiProductsGetCollection200Response
```

Retrieves the collection of products resources.

Retrieves the collection of products resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$exists_sku = True; // bool | 
$exists_version = True; // bool | 
$exists_country = True; // bool | 
$exists_place = True; // bool | 
$exists_place_precision = True; // bool | 
$exists_notes = True; // bool | 
$exists_notes_invoice = True; // bool | 
$exists_notes_bill = True; // bool | 
$exists_notes_rent = True; // bool | 
$exists_notes_production = True; // bool | 
$exists_notes_inventory = True; // bool | 
$exists_notes_shipping = True; // bool | 
$exists_supplier_code = True; // bool | 
$exists_client_code = True; // bool | 
$exists_sh_code = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
$sku = 'sku_example'; // string | 
$sku2 = array('sku_example'); // string[] | 
$version = 'version_example'; // string | 
$version2 = array('version_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$brand = 'brand_example'; // string | 
$brand2 = array('brand_example'); // string[] | 
$invoice_line_type = 'invoice_line_type_example'; // string | 
$invoice_line_type2 = array('invoice_line_type_example'); // string[] | 
$bill_line_type = 'bill_line_type_example'; // string | 
$bill_line_type2 = array('bill_line_type_example'); // string[] | 
$client_code = 'client_code_example'; // string | 
$client_code2 = array('client_code_example'); // string[] | 
$supplier_code = 'supplier_code_example'; // string | 
$supplier_code2 = array('supplier_code_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$price_special = 'price_special_example'; // string | 
$price_special2 = array('price_special_example'); // string[] | 
$cost_special = 'cost_special_example'; // string | 
$cost_special2 = array('cost_special_example'); // string[] | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$weight = 'weight_example'; // string | 
$weight2 = array('weight_example'); // string[] | 
$dimension_w = 'dimension_w_example'; // string | 
$dimension_w2 = array('dimension_w_example'); // string[] | 
$dimension_h = 'dimension_h_example'; // string | 
$dimension_h2 = array('dimension_h_example'); // string[] | 
$dimension_d = 'dimension_d_example'; // string | 
$dimension_d2 = array('dimension_d_example'); // string[] | 
$time = 'time_example'; // string | 
$time2 = array('time_example'); // string[] | 
$producible = True; // bool | 
$bookable = True; // bool | 
$on_website = True; // bool | 
$is_immo = True; // bool | 
$purchasable = True; // bool | 
$inventory_tracking = True; // bool | 
$salable = True; // bool | 
$counted_in_inventory = True; // bool | 
$taxable = True; // bool | 
$on_distribution = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_sku = 'order_sku_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_price_special = 'order_price_special_example'; // string | 
$order_cost_special = 'order_cost_special_example'; // string | 
$order_cost = 'order_cost_example'; // string | 
$order_weight = 'order_weight_example'; // string | 
$order_dimension_w = 'order_dimension_w_example'; // string | 
$order_dimension_h = 'order_dimension_h_example'; // string | 
$order_dimension_d = 'order_dimension_d_example'; // string | 
$order_time = 'order_time_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | products slug_partial
$slug_start_with = 'slug_start_with_example'; // string | products slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | products slug_end_with
$id_partial = 'id_partial_example'; // string | products id_partial
$id_start_with = 'id_start_with_example'; // string | products id_start_with
$id_end_with = 'id_end_with_example'; // string | products id_end_with
$sku_partial = 'sku_partial_example'; // string | products sku_partial
$sku_start_with = 'sku_start_with_example'; // string | products sku_start_with
$sku_end_with = 'sku_end_with_example'; // string | products sku_end_with
$client_code_partial = 'client_code_partial_example'; // string | products clientCode_partial
$client_code_start_with = 'client_code_start_with_example'; // string | products clientCode_start_with
$client_code_end_with = 'client_code_end_with_example'; // string | products clientCode_end_with
$supplier_code_partial = 'supplier_code_partial_example'; // string | products supplierCode_partial
$supplier_code_start_with = 'supplier_code_start_with_example'; // string | products supplierCode_start_with
$supplier_code_end_with = 'supplier_code_end_with_example'; // string | products supplierCode_end_with
$title_partial = 'title_partial_example'; // string | products title_partial
$title_start_with = 'title_start_with_example'; // string | products title_start_with
$title_end_with = 'title_end_with_example'; // string | products title_end_with
$in_stock_range = 'in_stock_range_example'; // string | products inStock_range
$price_range = 'price_range_example'; // string | products price_range
$price_special_range = 'price_special_range_example'; // string | products priceSpecial_range
$cost_special_range = 'cost_special_range_example'; // string | products costSpecial_range
$cost_range = 'cost_range_example'; // string | products cost_range
$weight_range = 'weight_range_example'; // string | products weight_range
$dimension_w_range = 'dimension_w_range_example'; // string | products dimensionW_range
$dimension_h_range = 'dimension_h_range_example'; // string | products dimensionH_range
$dimension_d_range = 'dimension_d_range_example'; // string | products dimensionD_range
$time_range = 'time_range_example'; // string | products time_range

try {
    $result = $apiInstance->apiProductsGetCollection($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $sku_partial, $sku_start_with, $sku_end_with, $client_code_partial, $client_code_start_with, $client_code_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $title_partial, $title_start_with, $title_end_with, $in_stock_range, $price_range, $price_special_range, $cost_special_range, $cost_range, $weight_range, $dimension_w_range, $dimension_h_range, $dimension_d_range, $time_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->apiProductsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **exists_sku** | **bool**|  | [optional] |
| **exists_version** | **bool**|  | [optional] |
| **exists_country** | **bool**|  | [optional] |
| **exists_place** | **bool**|  | [optional] |
| **exists_place_precision** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_notes_invoice** | **bool**|  | [optional] |
| **exists_notes_bill** | **bool**|  | [optional] |
| **exists_notes_rent** | **bool**|  | [optional] |
| **exists_notes_production** | **bool**|  | [optional] |
| **exists_notes_inventory** | **bool**|  | [optional] |
| **exists_notes_shipping** | **bool**|  | [optional] |
| **exists_supplier_code** | **bool**|  | [optional] |
| **exists_client_code** | **bool**|  | [optional] |
| **exists_sh_code** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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
| **sku** | **string**|  | [optional] |
| **sku2** | [**string[]**](../Model/string.md)|  | [optional] |
| **version** | **string**|  | [optional] |
| **version2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **brand** | **string**|  | [optional] |
| **brand2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice_line_type** | **string**|  | [optional] |
| **invoice_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill_line_type** | **string**|  | [optional] |
| **bill_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_code** | **string**|  | [optional] |
| **client_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_code** | **string**|  | [optional] |
| **supplier_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **price_special** | **string**|  | [optional] |
| **price_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost_special** | **string**|  | [optional] |
| **cost_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **weight** | **string**|  | [optional] |
| **weight2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_w** | **string**|  | [optional] |
| **dimension_w2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_h** | **string**|  | [optional] |
| **dimension_h2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_d** | **string**|  | [optional] |
| **dimension_d2** | [**string[]**](../Model/string.md)|  | [optional] |
| **time** | **string**|  | [optional] |
| **time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **producible** | **bool**|  | [optional] |
| **bookable** | **bool**|  | [optional] |
| **on_website** | **bool**|  | [optional] |
| **is_immo** | **bool**|  | [optional] |
| **purchasable** | **bool**|  | [optional] |
| **inventory_tracking** | **bool**|  | [optional] |
| **salable** | **bool**|  | [optional] |
| **counted_in_inventory** | **bool**|  | [optional] |
| **taxable** | **bool**|  | [optional] |
| **on_distribution** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_sku** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_price_special** | **string**|  | [optional] |
| **order_cost_special** | **string**|  | [optional] |
| **order_cost** | **string**|  | [optional] |
| **order_weight** | **string**|  | [optional] |
| **order_dimension_w** | **string**|  | [optional] |
| **order_dimension_h** | **string**|  | [optional] |
| **order_dimension_d** | **string**|  | [optional] |
| **order_time** | **string**|  | [optional] |
| **slug_partial** | **string**| products slug_partial | [optional] |
| **slug_start_with** | **string**| products slug_start_with | [optional] |
| **slug_end_with** | **string**| products slug_end_with | [optional] |
| **id_partial** | **string**| products id_partial | [optional] |
| **id_start_with** | **string**| products id_start_with | [optional] |
| **id_end_with** | **string**| products id_end_with | [optional] |
| **sku_partial** | **string**| products sku_partial | [optional] |
| **sku_start_with** | **string**| products sku_start_with | [optional] |
| **sku_end_with** | **string**| products sku_end_with | [optional] |
| **client_code_partial** | **string**| products clientCode_partial | [optional] |
| **client_code_start_with** | **string**| products clientCode_start_with | [optional] |
| **client_code_end_with** | **string**| products clientCode_end_with | [optional] |
| **supplier_code_partial** | **string**| products supplierCode_partial | [optional] |
| **supplier_code_start_with** | **string**| products supplierCode_start_with | [optional] |
| **supplier_code_end_with** | **string**| products supplierCode_end_with | [optional] |
| **title_partial** | **string**| products title_partial | [optional] |
| **title_start_with** | **string**| products title_start_with | [optional] |
| **title_end_with** | **string**| products title_end_with | [optional] |
| **in_stock_range** | **string**| products inStock_range | [optional] |
| **price_range** | **string**| products price_range | [optional] |
| **price_special_range** | **string**| products priceSpecial_range | [optional] |
| **cost_special_range** | **string**| products costSpecial_range | [optional] |
| **cost_range** | **string**| products cost_range | [optional] |
| **weight_range** | **string**| products weight_range | [optional] |
| **dimension_w_range** | **string**| products dimensionW_range | [optional] |
| **dimension_h_range** | **string**| products dimensionH_range | [optional] |
| **dimension_d_range** | **string**| products dimensionD_range | [optional] |
| **time_range** | **string**| products time_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiProductsGetCollection200Response**](../Model/ApiProductsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsIdDelete()`

```php
apiProductsIdDelete($id)
```

Removes the products resource.

Removes the products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier

try {
    $apiInstance->apiProductsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->apiProductsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |

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

## `apiProductsIdGet()`

```php
apiProductsIdGet($id): \OpenAPI\Client\Model\ProductsJsonldProductShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier

try {
    $result = $apiInstance->apiProductsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->apiProductsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldProductShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductsJsonldProductShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsIdPut()`

```php
apiProductsIdPut($id, $products_jsonld_post): \OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the products resource.

Replaces the products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier
$products_jsonld_post = new \OpenAPI\Client\Model\ProductsJsonldPost(); // \OpenAPI\Client\Model\ProductsJsonldPost | The updated products resource

try {
    $result = $apiInstance->apiProductsIdPut($id, $products_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->apiProductsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |
| **products_jsonld_post** | [**\OpenAPI\Client\Model\ProductsJsonldPost**](../Model/ProductsJsonldPost.md)| The updated products resource | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsPost()`

```php
apiProductsPost($products_jsonld_add_post): \OpenAPI\Client\Model\ProductsJsonldStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a products resource.

Creates a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_jsonld_add_post = new \OpenAPI\Client\Model\ProductsJsonldAddPost(); // \OpenAPI\Client\Model\ProductsJsonldAddPost | The new products resource

try {
    $result = $apiInstance->apiProductsPost($products_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->apiProductsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products_jsonld_add_post** | [**\OpenAPI\Client\Model\ProductsJsonldAddPost**](../Model/ProductsJsonldAddPost.md)| The new products resource | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductsJsonldStandardListingProductListingNoteListingIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productApiCorporationAdd()`

```php
productApiCorporationAdd($id, $products_jsonld): \OpenAPI\Client\Model\ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow
```

Creates a products resource.

Creates a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier
$products_jsonld = new \OpenAPI\Client\Model\ProductsJsonld(); // \OpenAPI\Client\Model\ProductsJsonld | The new products resource

try {
    $result = $apiInstance->productApiCorporationAdd($id, $products_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |
| **products_jsonld** | [**\OpenAPI\Client\Model\ProductsJsonld**](../Model/ProductsJsonld.md)| The new products resource | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productApiCorporationRemove()`

```php
productApiCorporationRemove($id, $products_jsonld): \OpenAPI\Client\Model\ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow
```

Creates a products resource.

Creates a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier
$products_jsonld = new \OpenAPI\Client\Model\ProductsJsonld(); // \OpenAPI\Client\Model\ProductsJsonld | The new products resource

try {
    $result = $apiInstance->productApiCorporationRemove($id, $products_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |
| **products_jsonld** | [**\OpenAPI\Client\Model\ProductsJsonld**](../Model/ProductsJsonld.md)| The new products resource | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productApiFileUpload()`

```php
productApiFileUpload($id, $products_jsonld): \OpenAPI\Client\Model\ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow
```

Creates a products resource.

Creates a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier
$products_jsonld = new \OpenAPI\Client\Model\ProductsJsonld(); // \OpenAPI\Client\Model\ProductsJsonld | The new products resource

try {
    $result = $apiInstance->productApiFileUpload($id, $products_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |
| **products_jsonld** | [**\OpenAPI\Client\Model\ProductsJsonld**](../Model/ProductsJsonld.md)| The new products resource | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow**](../Model/ProductsJsonldProductShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productApiStockReportSummary()`

```php
productApiStockReportSummary($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time): \OpenAPI\Client\Model\ProductApiStockReportSummary200Response
```

Retrieves the collection of products resources.

Retrieves the collection of products resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$exists_sku = True; // bool | 
$exists_version = True; // bool | 
$exists_country = True; // bool | 
$exists_place = True; // bool | 
$exists_place_precision = True; // bool | 
$exists_notes = True; // bool | 
$exists_notes_invoice = True; // bool | 
$exists_notes_bill = True; // bool | 
$exists_notes_rent = True; // bool | 
$exists_notes_production = True; // bool | 
$exists_notes_inventory = True; // bool | 
$exists_notes_shipping = True; // bool | 
$exists_supplier_code = True; // bool | 
$exists_client_code = True; // bool | 
$exists_sh_code = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
$sku = 'sku_example'; // string | 
$sku2 = array('sku_example'); // string[] | 
$version = 'version_example'; // string | 
$version2 = array('version_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$brand = 'brand_example'; // string | 
$brand2 = array('brand_example'); // string[] | 
$invoice_line_type = 'invoice_line_type_example'; // string | 
$invoice_line_type2 = array('invoice_line_type_example'); // string[] | 
$bill_line_type = 'bill_line_type_example'; // string | 
$bill_line_type2 = array('bill_line_type_example'); // string[] | 
$client_code = 'client_code_example'; // string | 
$client_code2 = array('client_code_example'); // string[] | 
$supplier_code = 'supplier_code_example'; // string | 
$supplier_code2 = array('supplier_code_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$price_special = 'price_special_example'; // string | 
$price_special2 = array('price_special_example'); // string[] | 
$cost_special = 'cost_special_example'; // string | 
$cost_special2 = array('cost_special_example'); // string[] | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$weight = 'weight_example'; // string | 
$weight2 = array('weight_example'); // string[] | 
$dimension_w = 'dimension_w_example'; // string | 
$dimension_w2 = array('dimension_w_example'); // string[] | 
$dimension_h = 'dimension_h_example'; // string | 
$dimension_h2 = array('dimension_h_example'); // string[] | 
$dimension_d = 'dimension_d_example'; // string | 
$dimension_d2 = array('dimension_d_example'); // string[] | 
$time = 'time_example'; // string | 
$time2 = array('time_example'); // string[] | 
$producible = True; // bool | 
$bookable = True; // bool | 
$on_website = True; // bool | 
$is_immo = True; // bool | 
$purchasable = True; // bool | 
$inventory_tracking = True; // bool | 
$salable = True; // bool | 
$counted_in_inventory = True; // bool | 
$taxable = True; // bool | 
$on_distribution = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_sku = 'order_sku_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_price_special = 'order_price_special_example'; // string | 
$order_cost_special = 'order_cost_special_example'; // string | 
$order_cost = 'order_cost_example'; // string | 
$order_weight = 'order_weight_example'; // string | 
$order_dimension_w = 'order_dimension_w_example'; // string | 
$order_dimension_h = 'order_dimension_h_example'; // string | 
$order_dimension_d = 'order_dimension_d_example'; // string | 
$order_time = 'order_time_example'; // string | 

try {
    $result = $apiInstance->productApiStockReportSummary($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productApiStockReportSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **exists_sku** | **bool**|  | [optional] |
| **exists_version** | **bool**|  | [optional] |
| **exists_country** | **bool**|  | [optional] |
| **exists_place** | **bool**|  | [optional] |
| **exists_place_precision** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_notes_invoice** | **bool**|  | [optional] |
| **exists_notes_bill** | **bool**|  | [optional] |
| **exists_notes_rent** | **bool**|  | [optional] |
| **exists_notes_production** | **bool**|  | [optional] |
| **exists_notes_inventory** | **bool**|  | [optional] |
| **exists_notes_shipping** | **bool**|  | [optional] |
| **exists_supplier_code** | **bool**|  | [optional] |
| **exists_client_code** | **bool**|  | [optional] |
| **exists_sh_code** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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
| **sku** | **string**|  | [optional] |
| **sku2** | [**string[]**](../Model/string.md)|  | [optional] |
| **version** | **string**|  | [optional] |
| **version2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **brand** | **string**|  | [optional] |
| **brand2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice_line_type** | **string**|  | [optional] |
| **invoice_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill_line_type** | **string**|  | [optional] |
| **bill_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_code** | **string**|  | [optional] |
| **client_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_code** | **string**|  | [optional] |
| **supplier_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **price_special** | **string**|  | [optional] |
| **price_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost_special** | **string**|  | [optional] |
| **cost_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **weight** | **string**|  | [optional] |
| **weight2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_w** | **string**|  | [optional] |
| **dimension_w2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_h** | **string**|  | [optional] |
| **dimension_h2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_d** | **string**|  | [optional] |
| **dimension_d2** | [**string[]**](../Model/string.md)|  | [optional] |
| **time** | **string**|  | [optional] |
| **time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **producible** | **bool**|  | [optional] |
| **bookable** | **bool**|  | [optional] |
| **on_website** | **bool**|  | [optional] |
| **is_immo** | **bool**|  | [optional] |
| **purchasable** | **bool**|  | [optional] |
| **inventory_tracking** | **bool**|  | [optional] |
| **salable** | **bool**|  | [optional] |
| **counted_in_inventory** | **bool**|  | [optional] |
| **taxable** | **bool**|  | [optional] |
| **on_distribution** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_sku** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_price_special** | **string**|  | [optional] |
| **order_cost_special** | **string**|  | [optional] |
| **order_cost** | **string**|  | [optional] |
| **order_weight** | **string**|  | [optional] |
| **order_dimension_w** | **string**|  | [optional] |
| **order_dimension_h** | **string**|  | [optional] |
| **order_dimension_d** | **string**|  | [optional] |
| **order_time** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductApiStockReportSummary200Response**](../Model/ProductApiStockReportSummary200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productApiStocksReportListing()`

```php
productApiStocksReportListing($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time): \OpenAPI\Client\Model\ProductApiStocksReportListing200Response
```

Retrieves the collection of products resources.

Retrieves the collection of products resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$exists_sku = True; // bool | 
$exists_version = True; // bool | 
$exists_country = True; // bool | 
$exists_place = True; // bool | 
$exists_place_precision = True; // bool | 
$exists_notes = True; // bool | 
$exists_notes_invoice = True; // bool | 
$exists_notes_bill = True; // bool | 
$exists_notes_rent = True; // bool | 
$exists_notes_production = True; // bool | 
$exists_notes_inventory = True; // bool | 
$exists_notes_shipping = True; // bool | 
$exists_supplier_code = True; // bool | 
$exists_client_code = True; // bool | 
$exists_sh_code = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
$sku = 'sku_example'; // string | 
$sku2 = array('sku_example'); // string[] | 
$version = 'version_example'; // string | 
$version2 = array('version_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$brand = 'brand_example'; // string | 
$brand2 = array('brand_example'); // string[] | 
$invoice_line_type = 'invoice_line_type_example'; // string | 
$invoice_line_type2 = array('invoice_line_type_example'); // string[] | 
$bill_line_type = 'bill_line_type_example'; // string | 
$bill_line_type2 = array('bill_line_type_example'); // string[] | 
$client_code = 'client_code_example'; // string | 
$client_code2 = array('client_code_example'); // string[] | 
$supplier_code = 'supplier_code_example'; // string | 
$supplier_code2 = array('supplier_code_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$price_special = 'price_special_example'; // string | 
$price_special2 = array('price_special_example'); // string[] | 
$cost_special = 'cost_special_example'; // string | 
$cost_special2 = array('cost_special_example'); // string[] | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$weight = 'weight_example'; // string | 
$weight2 = array('weight_example'); // string[] | 
$dimension_w = 'dimension_w_example'; // string | 
$dimension_w2 = array('dimension_w_example'); // string[] | 
$dimension_h = 'dimension_h_example'; // string | 
$dimension_h2 = array('dimension_h_example'); // string[] | 
$dimension_d = 'dimension_d_example'; // string | 
$dimension_d2 = array('dimension_d_example'); // string[] | 
$time = 'time_example'; // string | 
$time2 = array('time_example'); // string[] | 
$producible = True; // bool | 
$bookable = True; // bool | 
$on_website = True; // bool | 
$is_immo = True; // bool | 
$purchasable = True; // bool | 
$inventory_tracking = True; // bool | 
$salable = True; // bool | 
$counted_in_inventory = True; // bool | 
$taxable = True; // bool | 
$on_distribution = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_sku = 'order_sku_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_price_special = 'order_price_special_example'; // string | 
$order_cost_special = 'order_cost_special_example'; // string | 
$order_cost = 'order_cost_example'; // string | 
$order_weight = 'order_weight_example'; // string | 
$order_dimension_w = 'order_dimension_w_example'; // string | 
$order_dimension_h = 'order_dimension_h_example'; // string | 
$order_dimension_d = 'order_dimension_d_example'; // string | 
$order_time = 'order_time_example'; // string | 

try {
    $result = $apiInstance->productApiStocksReportListing($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productApiStocksReportListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **exists_sku** | **bool**|  | [optional] |
| **exists_version** | **bool**|  | [optional] |
| **exists_country** | **bool**|  | [optional] |
| **exists_place** | **bool**|  | [optional] |
| **exists_place_precision** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_notes_invoice** | **bool**|  | [optional] |
| **exists_notes_bill** | **bool**|  | [optional] |
| **exists_notes_rent** | **bool**|  | [optional] |
| **exists_notes_production** | **bool**|  | [optional] |
| **exists_notes_inventory** | **bool**|  | [optional] |
| **exists_notes_shipping** | **bool**|  | [optional] |
| **exists_supplier_code** | **bool**|  | [optional] |
| **exists_client_code** | **bool**|  | [optional] |
| **exists_sh_code** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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
| **sku** | **string**|  | [optional] |
| **sku2** | [**string[]**](../Model/string.md)|  | [optional] |
| **version** | **string**|  | [optional] |
| **version2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **brand** | **string**|  | [optional] |
| **brand2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice_line_type** | **string**|  | [optional] |
| **invoice_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill_line_type** | **string**|  | [optional] |
| **bill_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_code** | **string**|  | [optional] |
| **client_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_code** | **string**|  | [optional] |
| **supplier_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **price_special** | **string**|  | [optional] |
| **price_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost_special** | **string**|  | [optional] |
| **cost_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **weight** | **string**|  | [optional] |
| **weight2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_w** | **string**|  | [optional] |
| **dimension_w2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_h** | **string**|  | [optional] |
| **dimension_h2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_d** | **string**|  | [optional] |
| **dimension_d2** | [**string[]**](../Model/string.md)|  | [optional] |
| **time** | **string**|  | [optional] |
| **time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **producible** | **bool**|  | [optional] |
| **bookable** | **bool**|  | [optional] |
| **on_website** | **bool**|  | [optional] |
| **is_immo** | **bool**|  | [optional] |
| **purchasable** | **bool**|  | [optional] |
| **inventory_tracking** | **bool**|  | [optional] |
| **salable** | **bool**|  | [optional] |
| **counted_in_inventory** | **bool**|  | [optional] |
| **taxable** | **bool**|  | [optional] |
| **on_distribution** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_sku** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_price_special** | **string**|  | [optional] |
| **order_cost_special** | **string**|  | [optional] |
| **order_cost** | **string**|  | [optional] |
| **order_weight** | **string**|  | [optional] |
| **order_dimension_w** | **string**|  | [optional] |
| **order_dimension_h** | **string**|  | [optional] |
| **order_dimension_d** | **string**|  | [optional] |
| **order_time** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductApiStocksReportListing200Response**](../Model/ProductApiStocksReportListing200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productByIdGetInventory()`

```php
productByIdGetInventory($id): \OpenAPI\Client\Model\ProductsJsonldIdTimestampable
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier

try {
    $result = $apiInstance->productByIdGetInventory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productByIdGetInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldIdTimestampable**](../Model/ProductsJsonldIdTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBySkuGetInventory()`

```php
productBySkuGetInventory($sku): \OpenAPI\Client\Model\ProductsJsonldIdTimestampable
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | products identifier

try {
    $result = $apiInstance->productBySkuGetInventory($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productBySkuGetInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldIdTimestampable**](../Model/ProductsJsonldIdTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDropDown()`

```php
productDropDown($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $sku_partial, $sku_start_with, $sku_end_with, $client_code_partial, $client_code_start_with, $client_code_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $title_partial, $title_start_with, $title_end_with, $in_stock_range, $price_range, $price_special_range, $cost_special_range, $cost_range, $weight_range, $dimension_w_range, $dimension_h_range, $dimension_d_range, $time_range): \OpenAPI\Client\Model\ProductDropDown200Response
```

Retrieves the collection of products resources.

Retrieves the collection of products resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$exists_sku = True; // bool | 
$exists_version = True; // bool | 
$exists_country = True; // bool | 
$exists_place = True; // bool | 
$exists_place_precision = True; // bool | 
$exists_notes = True; // bool | 
$exists_notes_invoice = True; // bool | 
$exists_notes_bill = True; // bool | 
$exists_notes_rent = True; // bool | 
$exists_notes_production = True; // bool | 
$exists_notes_inventory = True; // bool | 
$exists_notes_shipping = True; // bool | 
$exists_supplier_code = True; // bool | 
$exists_client_code = True; // bool | 
$exists_sh_code = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
$sku = 'sku_example'; // string | 
$sku2 = array('sku_example'); // string[] | 
$version = 'version_example'; // string | 
$version2 = array('version_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$brand = 'brand_example'; // string | 
$brand2 = array('brand_example'); // string[] | 
$invoice_line_type = 'invoice_line_type_example'; // string | 
$invoice_line_type2 = array('invoice_line_type_example'); // string[] | 
$bill_line_type = 'bill_line_type_example'; // string | 
$bill_line_type2 = array('bill_line_type_example'); // string[] | 
$client_code = 'client_code_example'; // string | 
$client_code2 = array('client_code_example'); // string[] | 
$supplier_code = 'supplier_code_example'; // string | 
$supplier_code2 = array('supplier_code_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$price_special = 'price_special_example'; // string | 
$price_special2 = array('price_special_example'); // string[] | 
$cost_special = 'cost_special_example'; // string | 
$cost_special2 = array('cost_special_example'); // string[] | 
$cost = 'cost_example'; // string | 
$cost2 = array('cost_example'); // string[] | 
$weight = 'weight_example'; // string | 
$weight2 = array('weight_example'); // string[] | 
$dimension_w = 'dimension_w_example'; // string | 
$dimension_w2 = array('dimension_w_example'); // string[] | 
$dimension_h = 'dimension_h_example'; // string | 
$dimension_h2 = array('dimension_h_example'); // string[] | 
$dimension_d = 'dimension_d_example'; // string | 
$dimension_d2 = array('dimension_d_example'); // string[] | 
$time = 'time_example'; // string | 
$time2 = array('time_example'); // string[] | 
$producible = True; // bool | 
$bookable = True; // bool | 
$on_website = True; // bool | 
$is_immo = True; // bool | 
$purchasable = True; // bool | 
$inventory_tracking = True; // bool | 
$salable = True; // bool | 
$counted_in_inventory = True; // bool | 
$taxable = True; // bool | 
$on_distribution = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_sku = 'order_sku_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_price_special = 'order_price_special_example'; // string | 
$order_cost_special = 'order_cost_special_example'; // string | 
$order_cost = 'order_cost_example'; // string | 
$order_weight = 'order_weight_example'; // string | 
$order_dimension_w = 'order_dimension_w_example'; // string | 
$order_dimension_h = 'order_dimension_h_example'; // string | 
$order_dimension_d = 'order_dimension_d_example'; // string | 
$order_time = 'order_time_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | products slug_partial
$slug_start_with = 'slug_start_with_example'; // string | products slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | products slug_end_with
$id_partial = 'id_partial_example'; // string | products id_partial
$id_start_with = 'id_start_with_example'; // string | products id_start_with
$id_end_with = 'id_end_with_example'; // string | products id_end_with
$sku_partial = 'sku_partial_example'; // string | products sku_partial
$sku_start_with = 'sku_start_with_example'; // string | products sku_start_with
$sku_end_with = 'sku_end_with_example'; // string | products sku_end_with
$client_code_partial = 'client_code_partial_example'; // string | products clientCode_partial
$client_code_start_with = 'client_code_start_with_example'; // string | products clientCode_start_with
$client_code_end_with = 'client_code_end_with_example'; // string | products clientCode_end_with
$supplier_code_partial = 'supplier_code_partial_example'; // string | products supplierCode_partial
$supplier_code_start_with = 'supplier_code_start_with_example'; // string | products supplierCode_start_with
$supplier_code_end_with = 'supplier_code_end_with_example'; // string | products supplierCode_end_with
$title_partial = 'title_partial_example'; // string | products title_partial
$title_start_with = 'title_start_with_example'; // string | products title_start_with
$title_end_with = 'title_end_with_example'; // string | products title_end_with
$in_stock_range = 'in_stock_range_example'; // string | products inStock_range
$price_range = 'price_range_example'; // string | products price_range
$price_special_range = 'price_special_range_example'; // string | products priceSpecial_range
$cost_special_range = 'cost_special_range_example'; // string | products costSpecial_range
$cost_range = 'cost_range_example'; // string | products cost_range
$weight_range = 'weight_range_example'; // string | products weight_range
$dimension_w_range = 'dimension_w_range_example'; // string | products dimensionW_range
$dimension_h_range = 'dimension_h_range_example'; // string | products dimensionH_range
$dimension_d_range = 'dimension_d_range_example'; // string | products dimensionD_range
$time_range = 'time_range_example'; // string | products time_range

try {
    $result = $apiInstance->productDropDown($page, $items_per_page, $exists_sku, $exists_version, $exists_country, $exists_place, $exists_place_precision, $exists_notes, $exists_notes_invoice, $exists_notes_bill, $exists_notes_rent, $exists_notes_production, $exists_notes_inventory, $exists_notes_shipping, $exists_supplier_code, $exists_client_code, $exists_sh_code, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $sku, $sku2, $version, $version2, $supplier, $supplier2, $type, $type2, $brand, $brand2, $invoice_line_type, $invoice_line_type2, $bill_line_type, $bill_line_type2, $client_code, $client_code2, $supplier_code, $supplier_code2, $search, $price, $price2, $price_special, $price_special2, $cost_special, $cost_special2, $cost, $cost2, $weight, $weight2, $dimension_w, $dimension_w2, $dimension_h, $dimension_h2, $dimension_d, $dimension_d2, $time, $time2, $producible, $bookable, $on_website, $is_immo, $purchasable, $inventory_tracking, $salable, $counted_in_inventory, $taxable, $on_distribution, $properties, $enabled, $tag, $order_id, $order_slug, $order_sku, $order_created_at, $order_updated_at, $order_price, $order_price_special, $order_cost_special, $order_cost, $order_weight, $order_dimension_w, $order_dimension_h, $order_dimension_d, $order_time, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $sku_partial, $sku_start_with, $sku_end_with, $client_code_partial, $client_code_start_with, $client_code_end_with, $supplier_code_partial, $supplier_code_start_with, $supplier_code_end_with, $title_partial, $title_start_with, $title_end_with, $in_stock_range, $price_range, $price_special_range, $cost_special_range, $cost_range, $weight_range, $dimension_w_range, $dimension_h_range, $dimension_d_range, $time_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **exists_sku** | **bool**|  | [optional] |
| **exists_version** | **bool**|  | [optional] |
| **exists_country** | **bool**|  | [optional] |
| **exists_place** | **bool**|  | [optional] |
| **exists_place_precision** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_notes_invoice** | **bool**|  | [optional] |
| **exists_notes_bill** | **bool**|  | [optional] |
| **exists_notes_rent** | **bool**|  | [optional] |
| **exists_notes_production** | **bool**|  | [optional] |
| **exists_notes_inventory** | **bool**|  | [optional] |
| **exists_notes_shipping** | **bool**|  | [optional] |
| **exists_supplier_code** | **bool**|  | [optional] |
| **exists_client_code** | **bool**|  | [optional] |
| **exists_sh_code** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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
| **sku** | **string**|  | [optional] |
| **sku2** | [**string[]**](../Model/string.md)|  | [optional] |
| **version** | **string**|  | [optional] |
| **version2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **brand** | **string**|  | [optional] |
| **brand2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice_line_type** | **string**|  | [optional] |
| **invoice_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill_line_type** | **string**|  | [optional] |
| **bill_line_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_code** | **string**|  | [optional] |
| **client_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier_code** | **string**|  | [optional] |
| **supplier_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **price_special** | **string**|  | [optional] |
| **price_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost_special** | **string**|  | [optional] |
| **cost_special2** | [**string[]**](../Model/string.md)|  | [optional] |
| **cost** | **string**|  | [optional] |
| **cost2** | [**string[]**](../Model/string.md)|  | [optional] |
| **weight** | **string**|  | [optional] |
| **weight2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_w** | **string**|  | [optional] |
| **dimension_w2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_h** | **string**|  | [optional] |
| **dimension_h2** | [**string[]**](../Model/string.md)|  | [optional] |
| **dimension_d** | **string**|  | [optional] |
| **dimension_d2** | [**string[]**](../Model/string.md)|  | [optional] |
| **time** | **string**|  | [optional] |
| **time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **producible** | **bool**|  | [optional] |
| **bookable** | **bool**|  | [optional] |
| **on_website** | **bool**|  | [optional] |
| **is_immo** | **bool**|  | [optional] |
| **purchasable** | **bool**|  | [optional] |
| **inventory_tracking** | **bool**|  | [optional] |
| **salable** | **bool**|  | [optional] |
| **counted_in_inventory** | **bool**|  | [optional] |
| **taxable** | **bool**|  | [optional] |
| **on_distribution** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_sku** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_price_special** | **string**|  | [optional] |
| **order_cost_special** | **string**|  | [optional] |
| **order_cost** | **string**|  | [optional] |
| **order_weight** | **string**|  | [optional] |
| **order_dimension_w** | **string**|  | [optional] |
| **order_dimension_h** | **string**|  | [optional] |
| **order_dimension_d** | **string**|  | [optional] |
| **order_time** | **string**|  | [optional] |
| **slug_partial** | **string**| products slug_partial | [optional] |
| **slug_start_with** | **string**| products slug_start_with | [optional] |
| **slug_end_with** | **string**| products slug_end_with | [optional] |
| **id_partial** | **string**| products id_partial | [optional] |
| **id_start_with** | **string**| products id_start_with | [optional] |
| **id_end_with** | **string**| products id_end_with | [optional] |
| **sku_partial** | **string**| products sku_partial | [optional] |
| **sku_start_with** | **string**| products sku_start_with | [optional] |
| **sku_end_with** | **string**| products sku_end_with | [optional] |
| **client_code_partial** | **string**| products clientCode_partial | [optional] |
| **client_code_start_with** | **string**| products clientCode_start_with | [optional] |
| **client_code_end_with** | **string**| products clientCode_end_with | [optional] |
| **supplier_code_partial** | **string**| products supplierCode_partial | [optional] |
| **supplier_code_start_with** | **string**| products supplierCode_start_with | [optional] |
| **supplier_code_end_with** | **string**| products supplierCode_end_with | [optional] |
| **title_partial** | **string**| products title_partial | [optional] |
| **title_start_with** | **string**| products title_start_with | [optional] |
| **title_end_with** | **string**| products title_end_with | [optional] |
| **in_stock_range** | **string**| products inStock_range | [optional] |
| **price_range** | **string**| products price_range | [optional] |
| **price_special_range** | **string**| products priceSpecial_range | [optional] |
| **cost_special_range** | **string**| products costSpecial_range | [optional] |
| **cost_range** | **string**| products cost_range | [optional] |
| **weight_range** | **string**| products weight_range | [optional] |
| **dimension_w_range** | **string**| products dimensionW_range | [optional] |
| **dimension_h_range** | **string**| products dimensionH_range | [optional] |
| **dimension_d_range** | **string**| products dimensionD_range | [optional] |
| **time_range** | **string**| products time_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductDropDown200Response**](../Model/ProductDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDuplicate()`

```php
productDuplicate($id): \OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier

try {
    $result = $apiInstance->productDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productFetchFiles()`

```php
productFetchFiles($id): \OpenAPI\Client\Model\ProductsJsonld
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier

try {
    $result = $apiInstance->productFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonld**](../Model/ProductsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetBySku()`

```php
productGetBySku($sku): \OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | products identifier

try {
    $result = $apiInstance->productGetBySku($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productGetBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetBySlug()`

```php
productGetBySlug($slug): \OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | products identifier

try {
    $result = $apiInstance->productGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ProductsJsonldStandardShowProductShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetDeleteRelations()`

```php
productGetDeleteRelations($id): \OpenAPI\Client\Model\ProductsJsonldProductRelations
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier

try {
    $result = $apiInstance->productGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldProductRelations**](../Model/ProductsJsonldProductRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productMetadata()`

```php
productMetadata($id): \OpenAPI\Client\Model\ProductsJsonldIdStandardMetadataProductMetadataTagTaggingListProductRelationsTimestampable
```

Retrieves a products resource.

Retrieves a products resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | products identifier

try {
    $result = $apiInstance->productMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| products identifier | |

### Return type

[**\OpenAPI\Client\Model\ProductsJsonldIdStandardMetadataProductMetadataTagTaggingListProductRelationsTimestampable**](../Model/ProductsJsonldIdStandardMetadataProductMetadataTagTaggingListProductRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
