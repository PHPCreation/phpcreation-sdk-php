# OpenAPI\Client\InvoicePaymentTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInvoicePaymentTypesGetCollection()**](InvoicePaymentTypesApi.md#apiInvoicePaymentTypesGetCollection) | **GET** /open-api/v3/invoice_payment_types | Retrieves the collection of invoice_payment_types resources. |
| [**apiInvoicePaymentTypesIdDelete()**](InvoicePaymentTypesApi.md#apiInvoicePaymentTypesIdDelete) | **DELETE** /open-api/v3/invoice_payment_types/{id} | Removes the invoice_payment_types resource. |
| [**apiInvoicePaymentTypesIdGet()**](InvoicePaymentTypesApi.md#apiInvoicePaymentTypesIdGet) | **GET** /open-api/v3/invoice_payment_types/{id} | Retrieves a invoice_payment_types resource. |
| [**apiInvoicePaymentTypesIdPut()**](InvoicePaymentTypesApi.md#apiInvoicePaymentTypesIdPut) | **PUT** /open-api/v3/invoice_payment_types/{id} | Replaces the invoice_payment_types resource. |
| [**apiInvoicePaymentTypesPost()**](InvoicePaymentTypesApi.md#apiInvoicePaymentTypesPost) | **POST** /open-api/v3/invoice_payment_types | Creates a invoice_payment_types resource. |
| [**invoicePaymentTypeApiFileUpload()**](InvoicePaymentTypesApi.md#invoicePaymentTypeApiFileUpload) | **POST** /open-api/v3/invoice_payment_types/{id}/file/upload | Creates a invoice_payment_types resource. |
| [**invoicePaymentTypeDropDown()**](InvoicePaymentTypesApi.md#invoicePaymentTypeDropDown) | **GET** /open-api/v3/invoice_payment_types/dropdown/get | Retrieves the collection of invoice_payment_types resources. |
| [**invoicePaymentTypeDuplicate()**](InvoicePaymentTypesApi.md#invoicePaymentTypeDuplicate) | **GET** /open-api/v3/invoice_payment_types/duplicate/{id} | Retrieves a invoice_payment_types resource. |
| [**invoicePaymentTypeFetchFiles()**](InvoicePaymentTypesApi.md#invoicePaymentTypeFetchFiles) | **GET** /open-api/v3/invoice_payment_types/fetch_files/{id} | Retrieves a invoice_payment_types resource. |
| [**invoicePaymentTypeGetBySlug()**](InvoicePaymentTypesApi.md#invoicePaymentTypeGetBySlug) | **GET** /open-api/v3/invoice_payment_types/by_slug/{slug} | Retrieves a invoice_payment_types resource. |
| [**invoicePaymentTypeGetDeleteRelations()**](InvoicePaymentTypesApi.md#invoicePaymentTypeGetDeleteRelations) | **GET** /open-api/v3/invoice_payment_types/get_delete_relations/{id} | Retrieves a invoice_payment_types resource. |
| [**invoicePaymentTypeMetadata()**](InvoicePaymentTypesApi.md#invoicePaymentTypeMetadata) | **GET** /open-api/v3/invoice_payment_types/metadata/{id} | Retrieves a invoice_payment_types resource. |


## `apiInvoicePaymentTypesGetCollection()`

```php
apiInvoicePaymentTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiInvoicePaymentTypesGetCollection200Response
```

Retrieves the collection of invoice_payment_types resources.

Retrieves the collection of invoice_payment_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | invoice_payment_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_payment_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_payment_types slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_payment_types id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_payment_types id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_payment_types id_end_with
$number_partial = 'number_partial_example'; // string | invoice_payment_types number_partial
$number_start_with = 'number_start_with_example'; // string | invoice_payment_types number_start_with
$number_end_with = 'number_end_with_example'; // string | invoice_payment_types number_end_with
$color_partial = 'color_partial_example'; // string | invoice_payment_types color_partial
$color_start_with = 'color_start_with_example'; // string | invoice_payment_types color_start_with
$color_end_with = 'color_end_with_example'; // string | invoice_payment_types color_end_with
$icon_partial = 'icon_partial_example'; // string | invoice_payment_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | invoice_payment_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | invoice_payment_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | invoice_payment_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | invoice_payment_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | invoice_payment_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | invoice_payment_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | invoice_payment_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | invoice_payment_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | invoice_payment_types priority_range

try {
    $result = $apiInstance->apiInvoicePaymentTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->apiInvoicePaymentTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| invoice_payment_types slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_payment_types slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_payment_types slug_end_with | [optional] |
| **id_partial** | **string**| invoice_payment_types id_partial | [optional] |
| **id_start_with** | **string**| invoice_payment_types id_start_with | [optional] |
| **id_end_with** | **string**| invoice_payment_types id_end_with | [optional] |
| **number_partial** | **string**| invoice_payment_types number_partial | [optional] |
| **number_start_with** | **string**| invoice_payment_types number_start_with | [optional] |
| **number_end_with** | **string**| invoice_payment_types number_end_with | [optional] |
| **color_partial** | **string**| invoice_payment_types color_partial | [optional] |
| **color_start_with** | **string**| invoice_payment_types color_start_with | [optional] |
| **color_end_with** | **string**| invoice_payment_types color_end_with | [optional] |
| **icon_partial** | **string**| invoice_payment_types icon_partial | [optional] |
| **icon_start_with** | **string**| invoice_payment_types icon_start_with | [optional] |
| **icon_end_with** | **string**| invoice_payment_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| invoice_payment_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| invoice_payment_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| invoice_payment_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| invoice_payment_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| invoice_payment_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| invoice_payment_types translations.description_end_with | [optional] |
| **priority_range** | **string**| invoice_payment_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInvoicePaymentTypesGetCollection200Response**](../Model/ApiInvoicePaymentTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicePaymentTypesIdDelete()`

```php
apiInvoicePaymentTypesIdDelete($id)
```

Removes the invoice_payment_types resource.

Removes the invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier

try {
    $apiInstance->apiInvoicePaymentTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->apiInvoicePaymentTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |

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

## `apiInvoicePaymentTypesIdGet()`

```php
apiInvoicePaymentTypesIdGet($id): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_payment_types resource.

Retrieves a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier

try {
    $result = $apiInstance->apiInvoicePaymentTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->apiInvoicePaymentTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicePaymentTypesIdPut()`

```php
apiInvoicePaymentTypesIdPut($id, $invoice_payment_types_jsonld_post): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the invoice_payment_types resource.

Replaces the invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier
$invoice_payment_types_jsonld_post = new \OpenAPI\Client\Model\InvoicePaymentTypesJsonldPost(); // \OpenAPI\Client\Model\InvoicePaymentTypesJsonldPost | The updated invoice_payment_types resource

try {
    $result = $apiInstance->apiInvoicePaymentTypesIdPut($id, $invoice_payment_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->apiInvoicePaymentTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |
| **invoice_payment_types_jsonld_post** | [**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldPost**](../Model/InvoicePaymentTypesJsonldPost.md)| The updated invoice_payment_types resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoicePaymentTypesPost()`

```php
apiInvoicePaymentTypesPost($invoice_payment_types_jsonld_add_post): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_payment_types resource.

Creates a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_payment_types_jsonld_add_post = new \OpenAPI\Client\Model\InvoicePaymentTypesJsonldAddPost(); // \OpenAPI\Client\Model\InvoicePaymentTypesJsonldAddPost | The new invoice_payment_types resource

try {
    $result = $apiInstance->apiInvoicePaymentTypesPost($invoice_payment_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->apiInvoicePaymentTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_payment_types_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldAddPost**](../Model/InvoicePaymentTypesJsonldAddPost.md)| The new invoice_payment_types resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentTypeApiFileUpload()`

```php
invoicePaymentTypeApiFileUpload($id, $invoice_payment_types_jsonld): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_payment_types resource.

Creates a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier
$invoice_payment_types_jsonld = new \OpenAPI\Client\Model\InvoicePaymentTypesJsonld(); // \OpenAPI\Client\Model\InvoicePaymentTypesJsonld | The new invoice_payment_types resource

try {
    $result = $apiInstance->invoicePaymentTypeApiFileUpload($id, $invoice_payment_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->invoicePaymentTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |
| **invoice_payment_types_jsonld** | [**\OpenAPI\Client\Model\InvoicePaymentTypesJsonld**](../Model/InvoicePaymentTypesJsonld.md)| The new invoice_payment_types resource | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentTypeDropDown()`

```php
invoicePaymentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\InvoicePaymentTypeDropDown200Response
```

Retrieves the collection of invoice_payment_types resources.

Retrieves the collection of invoice_payment_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | invoice_payment_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_payment_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_payment_types slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_payment_types id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_payment_types id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_payment_types id_end_with
$number_partial = 'number_partial_example'; // string | invoice_payment_types number_partial
$number_start_with = 'number_start_with_example'; // string | invoice_payment_types number_start_with
$number_end_with = 'number_end_with_example'; // string | invoice_payment_types number_end_with
$color_partial = 'color_partial_example'; // string | invoice_payment_types color_partial
$color_start_with = 'color_start_with_example'; // string | invoice_payment_types color_start_with
$color_end_with = 'color_end_with_example'; // string | invoice_payment_types color_end_with
$icon_partial = 'icon_partial_example'; // string | invoice_payment_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | invoice_payment_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | invoice_payment_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | invoice_payment_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | invoice_payment_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | invoice_payment_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | invoice_payment_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | invoice_payment_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | invoice_payment_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | invoice_payment_types priority_range

try {
    $result = $apiInstance->invoicePaymentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->invoicePaymentTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| invoice_payment_types slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_payment_types slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_payment_types slug_end_with | [optional] |
| **id_partial** | **string**| invoice_payment_types id_partial | [optional] |
| **id_start_with** | **string**| invoice_payment_types id_start_with | [optional] |
| **id_end_with** | **string**| invoice_payment_types id_end_with | [optional] |
| **number_partial** | **string**| invoice_payment_types number_partial | [optional] |
| **number_start_with** | **string**| invoice_payment_types number_start_with | [optional] |
| **number_end_with** | **string**| invoice_payment_types number_end_with | [optional] |
| **color_partial** | **string**| invoice_payment_types color_partial | [optional] |
| **color_start_with** | **string**| invoice_payment_types color_start_with | [optional] |
| **color_end_with** | **string**| invoice_payment_types color_end_with | [optional] |
| **icon_partial** | **string**| invoice_payment_types icon_partial | [optional] |
| **icon_start_with** | **string**| invoice_payment_types icon_start_with | [optional] |
| **icon_end_with** | **string**| invoice_payment_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| invoice_payment_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| invoice_payment_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| invoice_payment_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| invoice_payment_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| invoice_payment_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| invoice_payment_types translations.description_end_with | [optional] |
| **priority_range** | **string**| invoice_payment_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypeDropDown200Response**](../Model/InvoicePaymentTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentTypeDuplicate()`

```php
invoicePaymentTypeDuplicate($id): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_payment_types resource.

Retrieves a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier

try {
    $result = $apiInstance->invoicePaymentTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->invoicePaymentTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentTypeFetchFiles()`

```php
invoicePaymentTypeFetchFiles($id): \OpenAPI\Client\Model\InvoicePaymentTypesJsonld
```

Retrieves a invoice_payment_types resource.

Retrieves a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier

try {
    $result = $apiInstance->invoicePaymentTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->invoicePaymentTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonld**](../Model/InvoicePaymentTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentTypeGetBySlug()`

```php
invoicePaymentTypeGetBySlug($slug): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_payment_types resource.

Retrieves a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | invoice_payment_types identifier

try {
    $result = $apiInstance->invoicePaymentTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->invoicePaymentTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| invoice_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoicePaymentTypesJsonldInvoicePaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentTypeGetDeleteRelations()`

```php
invoicePaymentTypeGetDeleteRelations($id): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeRelations
```

Retrieves a invoice_payment_types resource.

Retrieves a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier

try {
    $result = $apiInstance->invoicePaymentTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->invoicePaymentTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldInvoicePaymentTypeRelations**](../Model/InvoicePaymentTypesJsonldInvoicePaymentTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentTypeMetadata()`

```php
invoicePaymentTypeMetadata($id): \OpenAPI\Client\Model\InvoicePaymentTypesJsonldIdStandardMetadataInvoicePaymentTypeMetadataTagTaggingListInvoicePaymentTypeRelationsTimestampable
```

Retrieves a invoice_payment_types resource.

Retrieves a invoice_payment_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicePaymentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_payment_types identifier

try {
    $result = $apiInstance->invoicePaymentTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentTypesApi->invoicePaymentTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_payment_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoicePaymentTypesJsonldIdStandardMetadataInvoicePaymentTypeMetadataTagTaggingListInvoicePaymentTypeRelationsTimestampable**](../Model/InvoicePaymentTypesJsonldIdStandardMetadataInvoicePaymentTypeMetadataTagTaggingListInvoicePaymentTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
