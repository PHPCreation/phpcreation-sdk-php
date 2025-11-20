# OpenAPI\Client\BillPaymentTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillPaymentTypesGetCollection()**](BillPaymentTypesApi.md#apiBillPaymentTypesGetCollection) | **GET** /open-api/v3/bill_payment_types | Retrieves the collection of bill_payment_types resources. |
| [**apiBillPaymentTypesIdDelete()**](BillPaymentTypesApi.md#apiBillPaymentTypesIdDelete) | **DELETE** /open-api/v3/bill_payment_types/{id} | Removes the bill_payment_types resource. |
| [**apiBillPaymentTypesIdGet()**](BillPaymentTypesApi.md#apiBillPaymentTypesIdGet) | **GET** /open-api/v3/bill_payment_types/{id} | Retrieves a bill_payment_types resource. |
| [**apiBillPaymentTypesIdPut()**](BillPaymentTypesApi.md#apiBillPaymentTypesIdPut) | **PUT** /open-api/v3/bill_payment_types/{id} | Replaces the bill_payment_types resource. |
| [**apiBillPaymentTypesPost()**](BillPaymentTypesApi.md#apiBillPaymentTypesPost) | **POST** /open-api/v3/bill_payment_types | Creates a bill_payment_types resource. |
| [**billPaymentTypeApiFileUpload()**](BillPaymentTypesApi.md#billPaymentTypeApiFileUpload) | **POST** /open-api/v3/bill_payment_types/{id}/file/upload | Creates a bill_payment_types resource. |
| [**billPaymentTypeDropDown()**](BillPaymentTypesApi.md#billPaymentTypeDropDown) | **GET** /open-api/v3/bill_payment_types/dropdown/get | Retrieves the collection of bill_payment_types resources. |
| [**billPaymentTypeDuplicate()**](BillPaymentTypesApi.md#billPaymentTypeDuplicate) | **GET** /open-api/v3/bill_payment_types/duplicate/{id} | Retrieves a bill_payment_types resource. |
| [**billPaymentTypeFetchFiles()**](BillPaymentTypesApi.md#billPaymentTypeFetchFiles) | **GET** /open-api/v3/bill_payment_types/fetch_files/{id} | Retrieves a bill_payment_types resource. |
| [**billPaymentTypeGetBySlug()**](BillPaymentTypesApi.md#billPaymentTypeGetBySlug) | **GET** /open-api/v3/bill_payment_types/by_slug/{slug} | Retrieves a bill_payment_types resource. |
| [**billPaymentTypeGetDeleteRelations()**](BillPaymentTypesApi.md#billPaymentTypeGetDeleteRelations) | **GET** /open-api/v3/bill_payment_types/get_delete_relations/{id} | Retrieves a bill_payment_types resource. |
| [**billPaymentTypeMetadata()**](BillPaymentTypesApi.md#billPaymentTypeMetadata) | **GET** /open-api/v3/bill_payment_types/metadata/{id} | Retrieves a bill_payment_types resource. |


## `apiBillPaymentTypesGetCollection()`

```php
apiBillPaymentTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiBillPaymentTypesGetCollection200Response
```

Retrieves the collection of bill_payment_types resources.

Retrieves the collection of bill_payment_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | bill_payment_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_payment_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_payment_types slug_end_with
$id_partial = 'id_partial_example'; // string | bill_payment_types id_partial
$id_start_with = 'id_start_with_example'; // string | bill_payment_types id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_payment_types id_end_with
$number_partial = 'number_partial_example'; // string | bill_payment_types number_partial
$number_start_with = 'number_start_with_example'; // string | bill_payment_types number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_payment_types number_end_with
$color_partial = 'color_partial_example'; // string | bill_payment_types color_partial
$color_start_with = 'color_start_with_example'; // string | bill_payment_types color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_payment_types color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_payment_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_payment_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_payment_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | bill_payment_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | bill_payment_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | bill_payment_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | bill_payment_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | bill_payment_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | bill_payment_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | bill_payment_types priority_range

try {
    $result = $apiInstance->apiBillPaymentTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->apiBillPaymentTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| bill_payment_types slug_partial | [optional] |
| **slug_start_with** | **string**| bill_payment_types slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_payment_types slug_end_with | [optional] |
| **id_partial** | **string**| bill_payment_types id_partial | [optional] |
| **id_start_with** | **string**| bill_payment_types id_start_with | [optional] |
| **id_end_with** | **string**| bill_payment_types id_end_with | [optional] |
| **number_partial** | **string**| bill_payment_types number_partial | [optional] |
| **number_start_with** | **string**| bill_payment_types number_start_with | [optional] |
| **number_end_with** | **string**| bill_payment_types number_end_with | [optional] |
| **color_partial** | **string**| bill_payment_types color_partial | [optional] |
| **color_start_with** | **string**| bill_payment_types color_start_with | [optional] |
| **color_end_with** | **string**| bill_payment_types color_end_with | [optional] |
| **icon_partial** | **string**| bill_payment_types icon_partial | [optional] |
| **icon_start_with** | **string**| bill_payment_types icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_payment_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| bill_payment_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| bill_payment_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| bill_payment_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| bill_payment_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| bill_payment_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| bill_payment_types translations.description_end_with | [optional] |
| **priority_range** | **string**| bill_payment_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillPaymentTypesGetCollection200Response**](../Model/ApiBillPaymentTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillPaymentTypesIdDelete()`

```php
apiBillPaymentTypesIdDelete($id)
```

Removes the bill_payment_types resource.

Removes the bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier

try {
    $apiInstance->apiBillPaymentTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->apiBillPaymentTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |

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

## `apiBillPaymentTypesIdGet()`

```php
apiBillPaymentTypesIdGet($id): \OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a bill_payment_types resource.

Retrieves a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier

try {
    $result = $apiInstance->apiBillPaymentTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->apiBillPaymentTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillPaymentTypesIdPut()`

```php
apiBillPaymentTypesIdPut($id, $bill_payment_types_jsonld_post): \OpenAPI\Client\Model\BillPaymentTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the bill_payment_types resource.

Replaces the bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier
$bill_payment_types_jsonld_post = new \OpenAPI\Client\Model\BillPaymentTypesJsonldPost(); // \OpenAPI\Client\Model\BillPaymentTypesJsonldPost | The updated bill_payment_types resource

try {
    $result = $apiInstance->apiBillPaymentTypesIdPut($id, $bill_payment_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->apiBillPaymentTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |
| **bill_payment_types_jsonld_post** | [**\OpenAPI\Client\Model\BillPaymentTypesJsonldPost**](../Model/BillPaymentTypesJsonldPost.md)| The updated bill_payment_types resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/BillPaymentTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillPaymentTypesPost()`

```php
apiBillPaymentTypesPost($bill_payment_types_jsonld_add_post): \OpenAPI\Client\Model\BillPaymentTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a bill_payment_types resource.

Creates a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_payment_types_jsonld_add_post = new \OpenAPI\Client\Model\BillPaymentTypesJsonldAddPost(); // \OpenAPI\Client\Model\BillPaymentTypesJsonldAddPost | The new bill_payment_types resource

try {
    $result = $apiInstance->apiBillPaymentTypesPost($bill_payment_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->apiBillPaymentTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_payment_types_jsonld_add_post** | [**\OpenAPI\Client\Model\BillPaymentTypesJsonldAddPost**](../Model/BillPaymentTypesJsonldAddPost.md)| The new bill_payment_types resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/BillPaymentTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentTypeApiFileUpload()`

```php
billPaymentTypeApiFileUpload($id, $bill_payment_types_jsonld): \OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_payment_types resource.

Creates a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier
$bill_payment_types_jsonld = new \OpenAPI\Client\Model\BillPaymentTypesJsonld(); // \OpenAPI\Client\Model\BillPaymentTypesJsonld | The new bill_payment_types resource

try {
    $result = $apiInstance->billPaymentTypeApiFileUpload($id, $bill_payment_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->billPaymentTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |
| **bill_payment_types_jsonld** | [**\OpenAPI\Client\Model\BillPaymentTypesJsonld**](../Model/BillPaymentTypesJsonld.md)| The new bill_payment_types resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentTypeDropDown()`

```php
billPaymentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\BillPaymentTypeDropDown200Response
```

Retrieves the collection of bill_payment_types resources.

Retrieves the collection of bill_payment_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | bill_payment_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_payment_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_payment_types slug_end_with
$id_partial = 'id_partial_example'; // string | bill_payment_types id_partial
$id_start_with = 'id_start_with_example'; // string | bill_payment_types id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_payment_types id_end_with
$number_partial = 'number_partial_example'; // string | bill_payment_types number_partial
$number_start_with = 'number_start_with_example'; // string | bill_payment_types number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_payment_types number_end_with
$color_partial = 'color_partial_example'; // string | bill_payment_types color_partial
$color_start_with = 'color_start_with_example'; // string | bill_payment_types color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_payment_types color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_payment_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_payment_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_payment_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | bill_payment_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | bill_payment_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | bill_payment_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | bill_payment_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | bill_payment_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | bill_payment_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | bill_payment_types priority_range

try {
    $result = $apiInstance->billPaymentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->billPaymentTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| bill_payment_types slug_partial | [optional] |
| **slug_start_with** | **string**| bill_payment_types slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_payment_types slug_end_with | [optional] |
| **id_partial** | **string**| bill_payment_types id_partial | [optional] |
| **id_start_with** | **string**| bill_payment_types id_start_with | [optional] |
| **id_end_with** | **string**| bill_payment_types id_end_with | [optional] |
| **number_partial** | **string**| bill_payment_types number_partial | [optional] |
| **number_start_with** | **string**| bill_payment_types number_start_with | [optional] |
| **number_end_with** | **string**| bill_payment_types number_end_with | [optional] |
| **color_partial** | **string**| bill_payment_types color_partial | [optional] |
| **color_start_with** | **string**| bill_payment_types color_start_with | [optional] |
| **color_end_with** | **string**| bill_payment_types color_end_with | [optional] |
| **icon_partial** | **string**| bill_payment_types icon_partial | [optional] |
| **icon_start_with** | **string**| bill_payment_types icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_payment_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| bill_payment_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| bill_payment_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| bill_payment_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| bill_payment_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| bill_payment_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| bill_payment_types translations.description_end_with | [optional] |
| **priority_range** | **string**| bill_payment_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypeDropDown200Response**](../Model/BillPaymentTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentTypeDuplicate()`

```php
billPaymentTypeDuplicate($id): \OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingList
```

Retrieves a bill_payment_types resource.

Retrieves a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier

try {
    $result = $apiInstance->billPaymentTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->billPaymentTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingList**](../Model/BillPaymentTypesJsonldBillPaymentTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentTypeFetchFiles()`

```php
billPaymentTypeFetchFiles($id): \OpenAPI\Client\Model\BillPaymentTypesJsonld
```

Retrieves a bill_payment_types resource.

Retrieves a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier

try {
    $result = $apiInstance->billPaymentTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->billPaymentTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonld**](../Model/BillPaymentTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentTypeGetBySlug()`

```php
billPaymentTypeGetBySlug($slug): \OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bill_payment_types resource.

Retrieves a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bill_payment_types identifier

try {
    $result = $apiInstance->billPaymentTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->billPaymentTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bill_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillPaymentTypesJsonldBillPaymentTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentTypeGetDeleteRelations()`

```php
billPaymentTypeGetDeleteRelations($id): \OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeRelations
```

Retrieves a bill_payment_types resource.

Retrieves a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier

try {
    $result = $apiInstance->billPaymentTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->billPaymentTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldBillPaymentTypeRelations**](../Model/BillPaymentTypesJsonldBillPaymentTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentTypeMetadata()`

```php
billPaymentTypeMetadata($id): \OpenAPI\Client\Model\BillPaymentTypesJsonldIdStandardMetadataBillPaymentTypeMetadataTagTaggingListBillPaymentTypeRelationsTimestampable
```

Retrieves a bill_payment_types resource.

Retrieves a bill_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payment_types identifier

try {
    $result = $apiInstance->billPaymentTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentTypesApi->billPaymentTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentTypesJsonldIdStandardMetadataBillPaymentTypeMetadataTagTaggingListBillPaymentTypeRelationsTimestampable**](../Model/BillPaymentTypesJsonldIdStandardMetadataBillPaymentTypeMetadataTagTaggingListBillPaymentTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
