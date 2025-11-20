# OpenAPI\Client\BillLinesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillLinesGetCollection()**](BillLinesApi.md#apiBillLinesGetCollection) | **GET** /open-api/v3/bill_lines | Retrieves the collection of bill_lines resources. |
| [**apiBillLinesIdDelete()**](BillLinesApi.md#apiBillLinesIdDelete) | **DELETE** /open-api/v3/bill_lines/{id} | Removes the bill_lines resource. |
| [**apiBillLinesIdGet()**](BillLinesApi.md#apiBillLinesIdGet) | **GET** /open-api/v3/bill_lines/{id} | Retrieves a bill_lines resource. |
| [**apiBillLinesIdPut()**](BillLinesApi.md#apiBillLinesIdPut) | **PUT** /open-api/v3/bill_lines/{id} | Replaces the bill_lines resource. |
| [**apiBillLinesPost()**](BillLinesApi.md#apiBillLinesPost) | **POST** /open-api/v3/bill_lines | Creates a bill_lines resource. |
| [**billLineApiApplyDiscount()**](BillLinesApi.md#billLineApiApplyDiscount) | **POST** /open-api/v3/bill_lines/{id}/apply_discount | Creates a bill_lines resource. |
| [**billLineApiCorporationAdd()**](BillLinesApi.md#billLineApiCorporationAdd) | **POST** /open-api/v3/bill_lines/{id}/corporation/add | Creates a bill_lines resource. |
| [**billLineApiCorporationRemove()**](BillLinesApi.md#billLineApiCorporationRemove) | **POST** /open-api/v3/bill_lines/{id}/corporation/remove | Creates a bill_lines resource. |
| [**billLineApiFileUpload()**](BillLinesApi.md#billLineApiFileUpload) | **POST** /open-api/v3/bill_lines/{id}/file/upload | Creates a bill_lines resource. |
| [**billLineDropDown()**](BillLinesApi.md#billLineDropDown) | **GET** /open-api/v3/bill_lines/dropdown/get | Retrieves the collection of bill_lines resources. |
| [**billLineDuplicate()**](BillLinesApi.md#billLineDuplicate) | **GET** /open-api/v3/bill_lines/duplicate/{id} | Retrieves a bill_lines resource. |
| [**billLineFetchFiles()**](BillLinesApi.md#billLineFetchFiles) | **GET** /open-api/v3/bill_lines/fetch_files/{id} | Retrieves a bill_lines resource. |
| [**billLineGetBySlug()**](BillLinesApi.md#billLineGetBySlug) | **GET** /open-api/v3/bill_lines/by_slug/{slug} | Retrieves a bill_lines resource. |
| [**billLineGetDeleteRelations()**](BillLinesApi.md#billLineGetDeleteRelations) | **GET** /open-api/v3/bill_lines/get_delete_relations/{id} | Retrieves a bill_lines resource. |
| [**billLineMetadata()**](BillLinesApi.md#billLineMetadata) | **GET** /open-api/v3/bill_lines/metadata/{id} | Retrieves a bill_lines resource. |


## `apiBillLinesGetCollection()`

```php
apiBillLinesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $bill, $bill2, $product, $product2, $search, $price, $price2, $number, $number2, $chargeable_amount, $chargeable_amount2, $discount_price, $discount_price2, $priority, $priority2, $discountable, $chargeable, $taxes, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $scan_partial, $scan_start_with, $scan_end_with, $description_partial, $description_start_with, $description_end_with, $notes_partial, $notes_start_with, $notes_end_with, $price_range, $number_range, $chargeable_amount_range, $discount_price_range, $priority_range): \OpenAPI\Client\Model\ApiBillLinesGetCollection200Response
```

Retrieves the collection of bill_lines resources.

Retrieves the collection of bill_lines resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$scan = 'scan_example'; // string | 
$scan2 = array('scan_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$chargeable_amount = 'chargeable_amount_example'; // string | 
$chargeable_amount2 = array('chargeable_amount_example'); // string[] | 
$discount_price = 'discount_price_example'; // string | 
$discount_price2 = array('discount_price_example'); // string[] | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$discountable = True; // bool | 
$chargeable = True; // bool | 
$taxes = True; // bool | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_code = True; // bool | 
$exists_scan = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_number = 'order_number_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_lines slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_lines slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_lines slug_end_with
$id_partial = 'id_partial_example'; // string | bill_lines id_partial
$id_start_with = 'id_start_with_example'; // string | bill_lines id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_lines id_end_with
$code_partial = 'code_partial_example'; // string | bill_lines code_partial
$code_start_with = 'code_start_with_example'; // string | bill_lines code_start_with
$code_end_with = 'code_end_with_example'; // string | bill_lines code_end_with
$scan_partial = 'scan_partial_example'; // string | bill_lines scan_partial
$scan_start_with = 'scan_start_with_example'; // string | bill_lines scan_start_with
$scan_end_with = 'scan_end_with_example'; // string | bill_lines scan_end_with
$description_partial = 'description_partial_example'; // string | bill_lines description_partial
$description_start_with = 'description_start_with_example'; // string | bill_lines description_start_with
$description_end_with = 'description_end_with_example'; // string | bill_lines description_end_with
$notes_partial = 'notes_partial_example'; // string | bill_lines notes_partial
$notes_start_with = 'notes_start_with_example'; // string | bill_lines notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | bill_lines notes_end_with
$price_range = 'price_range_example'; // string | bill_lines price_range
$number_range = 'number_range_example'; // string | bill_lines number_range
$chargeable_amount_range = 'chargeable_amount_range_example'; // string | bill_lines chargeableAmount_range
$discount_price_range = 'discount_price_range_example'; // string | bill_lines discountPrice_range
$priority_range = 'priority_range_example'; // string | bill_lines priority_range

try {
    $result = $apiInstance->apiBillLinesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $bill, $bill2, $product, $product2, $search, $price, $price2, $number, $number2, $chargeable_amount, $chargeable_amount2, $discount_price, $discount_price2, $priority, $priority2, $discountable, $chargeable, $taxes, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $scan_partial, $scan_start_with, $scan_end_with, $description_partial, $description_start_with, $description_end_with, $notes_partial, $notes_start_with, $notes_end_with, $price_range, $number_range, $chargeable_amount_range, $discount_price_range, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->apiBillLinesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scan** | **string**|  | [optional] |
| **scan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **chargeable_amount** | **string**|  | [optional] |
| **chargeable_amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **discount_price** | **string**|  | [optional] |
| **discount_price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **discountable** | **bool**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **taxes** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_scan** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_number** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_lines slug_partial | [optional] |
| **slug_start_with** | **string**| bill_lines slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_lines slug_end_with | [optional] |
| **id_partial** | **string**| bill_lines id_partial | [optional] |
| **id_start_with** | **string**| bill_lines id_start_with | [optional] |
| **id_end_with** | **string**| bill_lines id_end_with | [optional] |
| **code_partial** | **string**| bill_lines code_partial | [optional] |
| **code_start_with** | **string**| bill_lines code_start_with | [optional] |
| **code_end_with** | **string**| bill_lines code_end_with | [optional] |
| **scan_partial** | **string**| bill_lines scan_partial | [optional] |
| **scan_start_with** | **string**| bill_lines scan_start_with | [optional] |
| **scan_end_with** | **string**| bill_lines scan_end_with | [optional] |
| **description_partial** | **string**| bill_lines description_partial | [optional] |
| **description_start_with** | **string**| bill_lines description_start_with | [optional] |
| **description_end_with** | **string**| bill_lines description_end_with | [optional] |
| **notes_partial** | **string**| bill_lines notes_partial | [optional] |
| **notes_start_with** | **string**| bill_lines notes_start_with | [optional] |
| **notes_end_with** | **string**| bill_lines notes_end_with | [optional] |
| **price_range** | **string**| bill_lines price_range | [optional] |
| **number_range** | **string**| bill_lines number_range | [optional] |
| **chargeable_amount_range** | **string**| bill_lines chargeableAmount_range | [optional] |
| **discount_price_range** | **string**| bill_lines discountPrice_range | [optional] |
| **priority_range** | **string**| bill_lines priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillLinesGetCollection200Response**](../Model/ApiBillLinesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillLinesIdDelete()`

```php
apiBillLinesIdDelete($id)
```

Removes the bill_lines resource.

Removes the bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier

try {
    $apiInstance->apiBillLinesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->apiBillLinesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |

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

## `apiBillLinesIdGet()`

```php
apiBillLinesIdGet($id): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a bill_lines resource.

Retrieves a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier

try {
    $result = $apiInstance->apiBillLinesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->apiBillLinesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillLinesIdPut()`

```php
apiBillLinesIdPut($id, $bill_lines_jsonld_add_post): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingList
```

Replaces the bill_lines resource.

Replaces the bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier
$bill_lines_jsonld_add_post = new \OpenAPI\Client\Model\BillLinesJsonldAddPost(); // \OpenAPI\Client\Model\BillLinesJsonldAddPost | The updated bill_lines resource

try {
    $result = $apiInstance->apiBillLinesIdPut($id, $bill_lines_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->apiBillLinesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |
| **bill_lines_jsonld_add_post** | [**\OpenAPI\Client\Model\BillLinesJsonldAddPost**](../Model/BillLinesJsonldAddPost.md)| The updated bill_lines resource | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingList**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillLinesPost()`

```php
apiBillLinesPost($bill_lines_jsonld_add_post): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_lines resource.

Creates a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_lines_jsonld_add_post = new \OpenAPI\Client\Model\BillLinesJsonldAddPost(); // \OpenAPI\Client\Model\BillLinesJsonldAddPost | The new bill_lines resource

try {
    $result = $apiInstance->apiBillLinesPost($bill_lines_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->apiBillLinesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_lines_jsonld_add_post** | [**\OpenAPI\Client\Model\BillLinesJsonldAddPost**](../Model/BillLinesJsonldAddPost.md)| The new bill_lines resource | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineApiApplyDiscount()`

```php
billLineApiApplyDiscount($id, $bill_lines_jsonld_discount): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_lines resource.

Creates a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier
$bill_lines_jsonld_discount = new \OpenAPI\Client\Model\BillLinesJsonldDiscount(); // \OpenAPI\Client\Model\BillLinesJsonldDiscount | The new bill_lines resource

try {
    $result = $apiInstance->billLineApiApplyDiscount($id, $bill_lines_jsonld_discount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineApiApplyDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |
| **bill_lines_jsonld_discount** | [**\OpenAPI\Client\Model\BillLinesJsonldDiscount**](../Model/BillLinesJsonldDiscount.md)| The new bill_lines resource | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineApiCorporationAdd()`

```php
billLineApiCorporationAdd($id, $bill_lines_jsonld): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_lines resource.

Creates a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier
$bill_lines_jsonld = new \OpenAPI\Client\Model\BillLinesJsonld(); // \OpenAPI\Client\Model\BillLinesJsonld | The new bill_lines resource

try {
    $result = $apiInstance->billLineApiCorporationAdd($id, $bill_lines_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |
| **bill_lines_jsonld** | [**\OpenAPI\Client\Model\BillLinesJsonld**](../Model/BillLinesJsonld.md)| The new bill_lines resource | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineApiCorporationRemove()`

```php
billLineApiCorporationRemove($id, $bill_lines_jsonld): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_lines resource.

Creates a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier
$bill_lines_jsonld = new \OpenAPI\Client\Model\BillLinesJsonld(); // \OpenAPI\Client\Model\BillLinesJsonld | The new bill_lines resource

try {
    $result = $apiInstance->billLineApiCorporationRemove($id, $bill_lines_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |
| **bill_lines_jsonld** | [**\OpenAPI\Client\Model\BillLinesJsonld**](../Model/BillLinesJsonld.md)| The new bill_lines resource | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineApiFileUpload()`

```php
billLineApiFileUpload($id, $bill_lines_jsonld): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_lines resource.

Creates a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier
$bill_lines_jsonld = new \OpenAPI\Client\Model\BillLinesJsonld(); // \OpenAPI\Client\Model\BillLinesJsonld | The new bill_lines resource

try {
    $result = $apiInstance->billLineApiFileUpload($id, $bill_lines_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |
| **bill_lines_jsonld** | [**\OpenAPI\Client\Model\BillLinesJsonld**](../Model/BillLinesJsonld.md)| The new bill_lines resource | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineDropDown()`

```php
billLineDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $bill, $bill2, $product, $product2, $search, $price, $price2, $number, $number2, $chargeable_amount, $chargeable_amount2, $discount_price, $discount_price2, $priority, $priority2, $discountable, $chargeable, $taxes, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $scan_partial, $scan_start_with, $scan_end_with, $description_partial, $description_start_with, $description_end_with, $notes_partial, $notes_start_with, $notes_end_with, $price_range, $number_range, $chargeable_amount_range, $discount_price_range, $priority_range): \OpenAPI\Client\Model\BillLineDropDown200Response
```

Retrieves the collection of bill_lines resources.

Retrieves the collection of bill_lines resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$scan = 'scan_example'; // string | 
$scan2 = array('scan_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$search = 'search_example'; // string | 
$price = 'price_example'; // string | 
$price2 = array('price_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$chargeable_amount = 'chargeable_amount_example'; // string | 
$chargeable_amount2 = array('chargeable_amount_example'); // string[] | 
$discount_price = 'discount_price_example'; // string | 
$discount_price2 = array('discount_price_example'); // string[] | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$discountable = True; // bool | 
$chargeable = True; // bool | 
$taxes = True; // bool | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_code = True; // bool | 
$exists_scan = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_number = 'order_number_example'; // string | 
$order_price = 'order_price_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_lines slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_lines slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_lines slug_end_with
$id_partial = 'id_partial_example'; // string | bill_lines id_partial
$id_start_with = 'id_start_with_example'; // string | bill_lines id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_lines id_end_with
$code_partial = 'code_partial_example'; // string | bill_lines code_partial
$code_start_with = 'code_start_with_example'; // string | bill_lines code_start_with
$code_end_with = 'code_end_with_example'; // string | bill_lines code_end_with
$scan_partial = 'scan_partial_example'; // string | bill_lines scan_partial
$scan_start_with = 'scan_start_with_example'; // string | bill_lines scan_start_with
$scan_end_with = 'scan_end_with_example'; // string | bill_lines scan_end_with
$description_partial = 'description_partial_example'; // string | bill_lines description_partial
$description_start_with = 'description_start_with_example'; // string | bill_lines description_start_with
$description_end_with = 'description_end_with_example'; // string | bill_lines description_end_with
$notes_partial = 'notes_partial_example'; // string | bill_lines notes_partial
$notes_start_with = 'notes_start_with_example'; // string | bill_lines notes_start_with
$notes_end_with = 'notes_end_with_example'; // string | bill_lines notes_end_with
$price_range = 'price_range_example'; // string | bill_lines price_range
$number_range = 'number_range_example'; // string | bill_lines number_range
$chargeable_amount_range = 'chargeable_amount_range_example'; // string | bill_lines chargeableAmount_range
$discount_price_range = 'discount_price_range_example'; // string | bill_lines discountPrice_range
$priority_range = 'priority_range_example'; // string | bill_lines priority_range

try {
    $result = $apiInstance->billLineDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $scan, $scan2, $type, $type2, $bill, $bill2, $product, $product2, $search, $price, $price2, $number, $number2, $chargeable_amount, $chargeable_amount2, $discount_price, $discount_price2, $priority, $priority2, $discountable, $chargeable, $taxes, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_code, $exists_scan, $properties, $enabled, $tag, $order_id, $order_priority, $order_code, $order_number, $order_price, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $scan_partial, $scan_start_with, $scan_end_with, $description_partial, $description_start_with, $description_end_with, $notes_partial, $notes_start_with, $notes_end_with, $price_range, $number_range, $chargeable_amount_range, $discount_price_range, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineDropDown: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **scan** | **string**|  | [optional] |
| **scan2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **price** | **string**|  | [optional] |
| **price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **chargeable_amount** | **string**|  | [optional] |
| **chargeable_amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **discount_price** | **string**|  | [optional] |
| **discount_price2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **discountable** | **bool**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **taxes** | **bool**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_scan** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_number** | **string**|  | [optional] |
| **order_price** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_lines slug_partial | [optional] |
| **slug_start_with** | **string**| bill_lines slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_lines slug_end_with | [optional] |
| **id_partial** | **string**| bill_lines id_partial | [optional] |
| **id_start_with** | **string**| bill_lines id_start_with | [optional] |
| **id_end_with** | **string**| bill_lines id_end_with | [optional] |
| **code_partial** | **string**| bill_lines code_partial | [optional] |
| **code_start_with** | **string**| bill_lines code_start_with | [optional] |
| **code_end_with** | **string**| bill_lines code_end_with | [optional] |
| **scan_partial** | **string**| bill_lines scan_partial | [optional] |
| **scan_start_with** | **string**| bill_lines scan_start_with | [optional] |
| **scan_end_with** | **string**| bill_lines scan_end_with | [optional] |
| **description_partial** | **string**| bill_lines description_partial | [optional] |
| **description_start_with** | **string**| bill_lines description_start_with | [optional] |
| **description_end_with** | **string**| bill_lines description_end_with | [optional] |
| **notes_partial** | **string**| bill_lines notes_partial | [optional] |
| **notes_start_with** | **string**| bill_lines notes_start_with | [optional] |
| **notes_end_with** | **string**| bill_lines notes_end_with | [optional] |
| **price_range** | **string**| bill_lines price_range | [optional] |
| **number_range** | **string**| bill_lines number_range | [optional] |
| **chargeable_amount_range** | **string**| bill_lines chargeableAmount_range | [optional] |
| **discount_price_range** | **string**| bill_lines discountPrice_range | [optional] |
| **priority_range** | **string**| bill_lines priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillLineDropDown200Response**](../Model/BillLineDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineDuplicate()`

```php
billLineDuplicate($id): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingList
```

Retrieves a bill_lines resource.

Retrieves a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier

try {
    $result = $apiInstance->billLineDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowIdTimestampableTagTaggingList**](../Model/BillLinesJsonldBillLineShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineFetchFiles()`

```php
billLineFetchFiles($id): \OpenAPI\Client\Model\BillLinesJsonld
```

Retrieves a bill_lines resource.

Retrieves a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier

try {
    $result = $apiInstance->billLineFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonld**](../Model/BillLinesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineGetBySlug()`

```php
billLineGetBySlug($slug): \OpenAPI\Client\Model\BillLinesJsonldBillLineShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bill_lines resource.

Retrieves a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bill_lines identifier

try {
    $result = $apiInstance->billLineGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bill_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillLinesJsonldBillLineShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineGetDeleteRelations()`

```php
billLineGetDeleteRelations($id): \OpenAPI\Client\Model\BillLinesJsonldBillLineRelations
```

Retrieves a bill_lines resource.

Retrieves a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier

try {
    $result = $apiInstance->billLineGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldBillLineRelations**](../Model/BillLinesJsonldBillLineRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billLineMetadata()`

```php
billLineMetadata($id): \OpenAPI\Client\Model\BillLinesJsonldIdStandardMetadataBillLineMetadataTagTaggingListBillLineRelationsTimestampable
```

Retrieves a bill_lines resource.

Retrieves a bill_lines resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_lines identifier

try {
    $result = $apiInstance->billLineMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillLinesApi->billLineMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_lines identifier | |

### Return type

[**\OpenAPI\Client\Model\BillLinesJsonldIdStandardMetadataBillLineMetadataTagTaggingListBillLineRelationsTimestampable**](../Model/BillLinesJsonldIdStandardMetadataBillLineMetadataTagTaggingListBillLineRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
