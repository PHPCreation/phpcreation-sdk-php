# OpenAPI\Client\InvoiceStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInvoiceStatusesGetCollection()**](InvoiceStatusesApi.md#apiInvoiceStatusesGetCollection) | **GET** /open-api/v3/invoice_statuses | Retrieves the collection of invoice_statuses resources. |
| [**apiInvoiceStatusesIdDelete()**](InvoiceStatusesApi.md#apiInvoiceStatusesIdDelete) | **DELETE** /open-api/v3/invoice_statuses/{id} | Removes the invoice_statuses resource. |
| [**apiInvoiceStatusesIdGet()**](InvoiceStatusesApi.md#apiInvoiceStatusesIdGet) | **GET** /open-api/v3/invoice_statuses/{id} | Retrieves a invoice_statuses resource. |
| [**apiInvoiceStatusesIdPut()**](InvoiceStatusesApi.md#apiInvoiceStatusesIdPut) | **PUT** /open-api/v3/invoice_statuses/{id} | Replaces the invoice_statuses resource. |
| [**apiInvoiceStatusesPost()**](InvoiceStatusesApi.md#apiInvoiceStatusesPost) | **POST** /open-api/v3/invoice_statuses | Creates a invoice_statuses resource. |
| [**invoiceStatusApiFileUpload()**](InvoiceStatusesApi.md#invoiceStatusApiFileUpload) | **POST** /open-api/v3/invoice_statuses/{id}/file/upload | Creates a invoice_statuses resource. |
| [**invoiceStatusDropDown()**](InvoiceStatusesApi.md#invoiceStatusDropDown) | **GET** /open-api/v3/invoice_statuses/dropdown/get | Retrieves the collection of invoice_statuses resources. |
| [**invoiceStatusDuplicate()**](InvoiceStatusesApi.md#invoiceStatusDuplicate) | **GET** /open-api/v3/invoice_statuses/duplicate/{id} | Retrieves a invoice_statuses resource. |
| [**invoiceStatusFetchFiles()**](InvoiceStatusesApi.md#invoiceStatusFetchFiles) | **GET** /open-api/v3/invoice_statuses/fetch_files/{id} | Retrieves a invoice_statuses resource. |
| [**invoiceStatusGetBySlug()**](InvoiceStatusesApi.md#invoiceStatusGetBySlug) | **GET** /open-api/v3/invoice_statuses/by_slug/{slug} | Retrieves a invoice_statuses resource. |
| [**invoiceStatusGetDeleteRelations()**](InvoiceStatusesApi.md#invoiceStatusGetDeleteRelations) | **GET** /open-api/v3/invoice_statuses/get_delete_relations/{id} | Retrieves a invoice_statuses resource. |
| [**invoiceStatusMetadata()**](InvoiceStatusesApi.md#invoiceStatusMetadata) | **GET** /open-api/v3/invoice_statuses/metadata/{id} | Retrieves a invoice_statuses resource. |


## `apiInvoiceStatusesGetCollection()`

```php
apiInvoiceStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiInvoiceStatusesGetCollection200Response
```

Retrieves the collection of invoice_statuses resources.

Retrieves the collection of invoice_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
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
$accountable = True; // bool | 
$impacting_inventory = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | invoice_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_statuses id_end_with
$number_partial = 'number_partial_example'; // string | invoice_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | invoice_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | invoice_statuses number_end_with
$color_partial = 'color_partial_example'; // string | invoice_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | invoice_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | invoice_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | invoice_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | invoice_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | invoice_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | invoice_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | invoice_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | invoice_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | invoice_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | invoice_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | invoice_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | invoice_statuses priority_range

try {
    $result = $apiInstance->apiInvoiceStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->apiInvoiceStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **accountable** | **bool**|  | [optional] |
| **impacting_inventory** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| invoice_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_statuses slug_end_with | [optional] |
| **id_partial** | **string**| invoice_statuses id_partial | [optional] |
| **id_start_with** | **string**| invoice_statuses id_start_with | [optional] |
| **id_end_with** | **string**| invoice_statuses id_end_with | [optional] |
| **number_partial** | **string**| invoice_statuses number_partial | [optional] |
| **number_start_with** | **string**| invoice_statuses number_start_with | [optional] |
| **number_end_with** | **string**| invoice_statuses number_end_with | [optional] |
| **color_partial** | **string**| invoice_statuses color_partial | [optional] |
| **color_start_with** | **string**| invoice_statuses color_start_with | [optional] |
| **color_end_with** | **string**| invoice_statuses color_end_with | [optional] |
| **icon_partial** | **string**| invoice_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| invoice_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| invoice_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| invoice_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| invoice_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| invoice_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| invoice_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| invoice_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| invoice_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| invoice_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInvoiceStatusesGetCollection200Response**](../Model/ApiInvoiceStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceStatusesIdDelete()`

```php
apiInvoiceStatusesIdDelete($id)
```

Removes the invoice_statuses resource.

Removes the invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier

try {
    $apiInstance->apiInvoiceStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->apiInvoiceStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |

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

## `apiInvoiceStatusesIdGet()`

```php
apiInvoiceStatusesIdGet($id): \OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_statuses resource.

Retrieves a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier

try {
    $result = $apiInstance->apiInvoiceStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->apiInvoiceStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceStatusesIdPut()`

```php
apiInvoiceStatusesIdPut($id, $invoice_statuses_jsonld_post): \OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the invoice_statuses resource.

Replaces the invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier
$invoice_statuses_jsonld_post = new \OpenAPI\Client\Model\InvoiceStatusesJsonldPost(); // \OpenAPI\Client\Model\InvoiceStatusesJsonldPost | The updated invoice_statuses resource

try {
    $result = $apiInstance->apiInvoiceStatusesIdPut($id, $invoice_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->apiInvoiceStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |
| **invoice_statuses_jsonld_post** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonldPost**](../Model/InvoiceStatusesJsonldPost.md)| The updated invoice_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceStatusesPost()`

```php
apiInvoiceStatusesPost($invoice_statuses_jsonld_add_post): \OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_statuses resource.

Creates a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_statuses_jsonld_add_post = new \OpenAPI\Client\Model\InvoiceStatusesJsonldAddPost(); // \OpenAPI\Client\Model\InvoiceStatusesJsonldAddPost | The new invoice_statuses resource

try {
    $result = $apiInstance->apiInvoiceStatusesPost($invoice_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->apiInvoiceStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonldAddPost**](../Model/InvoiceStatusesJsonldAddPost.md)| The new invoice_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceStatusApiFileUpload()`

```php
invoiceStatusApiFileUpload($id, $invoice_statuses_jsonld): \OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a invoice_statuses resource.

Creates a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier
$invoice_statuses_jsonld = new \OpenAPI\Client\Model\InvoiceStatusesJsonld(); // \OpenAPI\Client\Model\InvoiceStatusesJsonld | The new invoice_statuses resource

try {
    $result = $apiInstance->invoiceStatusApiFileUpload($id, $invoice_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->invoiceStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |
| **invoice_statuses_jsonld** | [**\OpenAPI\Client\Model\InvoiceStatusesJsonld**](../Model/InvoiceStatusesJsonld.md)| The new invoice_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceStatusDropDown()`

```php
invoiceStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\InvoiceStatusDropDown200Response
```

Retrieves the collection of invoice_statuses resources.

Retrieves the collection of invoice_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
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
$accountable = True; // bool | 
$impacting_inventory = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | invoice_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_statuses id_end_with
$number_partial = 'number_partial_example'; // string | invoice_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | invoice_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | invoice_statuses number_end_with
$color_partial = 'color_partial_example'; // string | invoice_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | invoice_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | invoice_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | invoice_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | invoice_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | invoice_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | invoice_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | invoice_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | invoice_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | invoice_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | invoice_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | invoice_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | invoice_statuses priority_range

try {
    $result = $apiInstance->invoiceStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->invoiceStatusDropDown: ', $e->getMessage(), PHP_EOL;
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
| **accountable** | **bool**|  | [optional] |
| **impacting_inventory** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| invoice_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_statuses slug_end_with | [optional] |
| **id_partial** | **string**| invoice_statuses id_partial | [optional] |
| **id_start_with** | **string**| invoice_statuses id_start_with | [optional] |
| **id_end_with** | **string**| invoice_statuses id_end_with | [optional] |
| **number_partial** | **string**| invoice_statuses number_partial | [optional] |
| **number_start_with** | **string**| invoice_statuses number_start_with | [optional] |
| **number_end_with** | **string**| invoice_statuses number_end_with | [optional] |
| **color_partial** | **string**| invoice_statuses color_partial | [optional] |
| **color_start_with** | **string**| invoice_statuses color_start_with | [optional] |
| **color_end_with** | **string**| invoice_statuses color_end_with | [optional] |
| **icon_partial** | **string**| invoice_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| invoice_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| invoice_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| invoice_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| invoice_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| invoice_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| invoice_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| invoice_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| invoice_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| invoice_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusDropDown200Response**](../Model/InvoiceStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceStatusDuplicate()`

```php
invoiceStatusDuplicate($id): \OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_statuses resource.

Retrieves a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier

try {
    $result = $apiInstance->invoiceStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->invoiceStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceStatusFetchFiles()`

```php
invoiceStatusFetchFiles($id): \OpenAPI\Client\Model\InvoiceStatusesJsonld
```

Retrieves a invoice_statuses resource.

Retrieves a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier

try {
    $result = $apiInstance->invoiceStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->invoiceStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonld**](../Model/InvoiceStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceStatusGetBySlug()`

```php
invoiceStatusGetBySlug($slug): \OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a invoice_statuses resource.

Retrieves a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | invoice_statuses identifier

try {
    $result = $apiInstance->invoiceStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->invoiceStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| invoice_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/InvoiceStatusesJsonldInvoiceStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceStatusGetDeleteRelations()`

```php
invoiceStatusGetDeleteRelations($id): \OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusRelations
```

Retrieves a invoice_statuses resource.

Retrieves a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier

try {
    $result = $apiInstance->invoiceStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->invoiceStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldInvoiceStatusRelations**](../Model/InvoiceStatusesJsonldInvoiceStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceStatusMetadata()`

```php
invoiceStatusMetadata($id): \OpenAPI\Client\Model\InvoiceStatusesJsonldIdStandardMetadataInvoiceStatusMetadataTagTaggingListInvoiceStatusRelationsTimestampable
```

Retrieves a invoice_statuses resource.

Retrieves a invoice_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_statuses identifier

try {
    $result = $apiInstance->invoiceStatusMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceStatusesApi->invoiceStatusMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceStatusesJsonldIdStandardMetadataInvoiceStatusMetadataTagTaggingListInvoiceStatusRelationsTimestampable**](../Model/InvoiceStatusesJsonldIdStandardMetadataInvoiceStatusMetadataTagTaggingListInvoiceStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
