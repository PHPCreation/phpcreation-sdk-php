# OpenAPI\Client\InvoiceLineTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInvoiceLineTypesGetCollection()**](InvoiceLineTypesApi.md#apiInvoiceLineTypesGetCollection) | **GET** /open-api/v3/invoice_line_types | Retrieves the collection of invoice_line_types resources. |
| [**apiInvoiceLineTypesIdDelete()**](InvoiceLineTypesApi.md#apiInvoiceLineTypesIdDelete) | **DELETE** /open-api/v3/invoice_line_types/{id} | Removes the invoice_line_types resource. |
| [**apiInvoiceLineTypesIdGet()**](InvoiceLineTypesApi.md#apiInvoiceLineTypesIdGet) | **GET** /open-api/v3/invoice_line_types/{id} | Retrieves a invoice_line_types resource. |
| [**apiInvoiceLineTypesIdPut()**](InvoiceLineTypesApi.md#apiInvoiceLineTypesIdPut) | **PUT** /open-api/v3/invoice_line_types/{id} | Replaces the invoice_line_types resource. |
| [**apiInvoiceLineTypesPost()**](InvoiceLineTypesApi.md#apiInvoiceLineTypesPost) | **POST** /open-api/v3/invoice_line_types | Creates a invoice_line_types resource. |
| [**invoiceLineTypeApiFileUpload()**](InvoiceLineTypesApi.md#invoiceLineTypeApiFileUpload) | **POST** /open-api/v3/invoice_line_types/{id}/file/upload | Creates a invoice_line_types resource. |
| [**invoiceLineTypeDropDown()**](InvoiceLineTypesApi.md#invoiceLineTypeDropDown) | **GET** /open-api/v3/invoice_line_types/dropdown/get | Retrieves the collection of invoice_line_types resources. |
| [**invoiceLineTypeDuplicate()**](InvoiceLineTypesApi.md#invoiceLineTypeDuplicate) | **GET** /open-api/v3/invoice_line_types/duplicate/{id} | Retrieves a invoice_line_types resource. |
| [**invoiceLineTypeFetchFiles()**](InvoiceLineTypesApi.md#invoiceLineTypeFetchFiles) | **GET** /open-api/v3/invoice_line_types/fetch_files/{id} | Retrieves a invoice_line_types resource. |
| [**invoiceLineTypeGetBySlug()**](InvoiceLineTypesApi.md#invoiceLineTypeGetBySlug) | **GET** /open-api/v3/invoice_line_types/by_slug/{slug} | Retrieves a invoice_line_types resource. |
| [**invoiceLineTypeGetDeleteRelations()**](InvoiceLineTypesApi.md#invoiceLineTypeGetDeleteRelations) | **GET** /open-api/v3/invoice_line_types/get_delete_relations/{id} | Retrieves a invoice_line_types resource. |
| [**invoiceLineTypeMetadata()**](InvoiceLineTypesApi.md#invoiceLineTypeMetadata) | **GET** /open-api/v3/invoice_line_types/metadata/{id} | Retrieves a invoice_line_types resource. |


## `apiInvoiceLineTypesGetCollection()`

```php
apiInvoiceLineTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $invoice_goal, $invoice_goal2, $search, $priority, $priority2, $invoice_goal_between, $invoice_goal_gt, $invoice_goal_gte, $invoice_goal_lt, $invoice_goal_lte, $properties, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiInvoiceLineTypesGetCollection200Response
```

Retrieves the collection of invoice_line_types resources.

Retrieves the collection of invoice_line_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
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
$invoice_goal = 'invoice_goal_example'; // string | 
$invoice_goal2 = array('invoice_goal_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$invoice_goal_between = 'invoice_goal_between_example'; // string | 
$invoice_goal_gt = 'invoice_goal_gt_example'; // string | 
$invoice_goal_gte = 'invoice_goal_gte_example'; // string | 
$invoice_goal_lt = 'invoice_goal_lt_example'; // string | 
$invoice_goal_lte = 'invoice_goal_lte_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | invoice_line_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | invoice_line_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | invoice_line_types slug_end_with
$id_partial = 'id_partial_example'; // string | invoice_line_types id_partial
$id_start_with = 'id_start_with_example'; // string | invoice_line_types id_start_with
$id_end_with = 'id_end_with_example'; // string | invoice_line_types id_end_with
$icon_partial = 'icon_partial_example'; // string | invoice_line_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | invoice_line_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | invoice_line_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | invoice_line_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | invoice_line_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | invoice_line_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | invoice_line_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | invoice_line_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | invoice_line_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | invoice_line_types priority_range

try {
    $result = $apiInstance->apiInvoiceLineTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $invoice_goal, $invoice_goal2, $search, $priority, $priority2, $invoice_goal_between, $invoice_goal_gt, $invoice_goal_gte, $invoice_goal_lt, $invoice_goal_lte, $properties, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->apiInvoiceLineTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **invoice_goal** | **string**|  | [optional] |
| **invoice_goal2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **invoice_goal_between** | **string**|  | [optional] |
| **invoice_goal_gt** | **string**|  | [optional] |
| **invoice_goal_gte** | **string**|  | [optional] |
| **invoice_goal_lt** | **string**|  | [optional] |
| **invoice_goal_lte** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| invoice_line_types slug_partial | [optional] |
| **slug_start_with** | **string**| invoice_line_types slug_start_with | [optional] |
| **slug_end_with** | **string**| invoice_line_types slug_end_with | [optional] |
| **id_partial** | **string**| invoice_line_types id_partial | [optional] |
| **id_start_with** | **string**| invoice_line_types id_start_with | [optional] |
| **id_end_with** | **string**| invoice_line_types id_end_with | [optional] |
| **icon_partial** | **string**| invoice_line_types icon_partial | [optional] |
| **icon_start_with** | **string**| invoice_line_types icon_start_with | [optional] |
| **icon_end_with** | **string**| invoice_line_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| invoice_line_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| invoice_line_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| invoice_line_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| invoice_line_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| invoice_line_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| invoice_line_types translations.description_end_with | [optional] |
| **priority_range** | **string**| invoice_line_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiInvoiceLineTypesGetCollection200Response**](../Model/ApiInvoiceLineTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceLineTypesIdDelete()`

```php
apiInvoiceLineTypesIdDelete($id)
```

Removes the invoice_line_types resource.

Removes the invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier

try {
    $apiInstance->apiInvoiceLineTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->apiInvoiceLineTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |

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

## `apiInvoiceLineTypesIdGet()`

```php
apiInvoiceLineTypesIdGet($id): \OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a invoice_line_types resource.

Retrieves a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier

try {
    $result = $apiInstance->apiInvoiceLineTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->apiInvoiceLineTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceLineTypesIdPut()`

```php
apiInvoiceLineTypesIdPut($id, $invoice_line_types_jsonld_post): \OpenAPI\Client\Model\InvoiceLineTypesJsonldStandardShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the invoice_line_types resource.

Replaces the invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier
$invoice_line_types_jsonld_post = new \OpenAPI\Client\Model\InvoiceLineTypesJsonldPost(); // \OpenAPI\Client\Model\InvoiceLineTypesJsonldPost | The updated invoice_line_types resource

try {
    $result = $apiInstance->apiInvoiceLineTypesIdPut($id, $invoice_line_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->apiInvoiceLineTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |
| **invoice_line_types_jsonld_post** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonldPost**](../Model/InvoiceLineTypesJsonldPost.md)| The updated invoice_line_types resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonldStandardShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/InvoiceLineTypesJsonldStandardShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvoiceLineTypesPost()`

```php
apiInvoiceLineTypesPost($invoice_line_types_jsonld_add_post): \OpenAPI\Client\Model\InvoiceLineTypesJsonld
```

Creates a invoice_line_types resource.

Creates a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_line_types_jsonld_add_post = new \OpenAPI\Client\Model\InvoiceLineTypesJsonldAddPost(); // \OpenAPI\Client\Model\InvoiceLineTypesJsonldAddPost | The new invoice_line_types resource

try {
    $result = $apiInstance->apiInvoiceLineTypesPost($invoice_line_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->apiInvoiceLineTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_line_types_jsonld_add_post** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonldAddPost**](../Model/InvoiceLineTypesJsonldAddPost.md)| The new invoice_line_types resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonld**](../Model/InvoiceLineTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineTypeApiFileUpload()`

```php
invoiceLineTypeApiFileUpload($id, $invoice_line_types_jsonld): \OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a invoice_line_types resource.

Creates a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier
$invoice_line_types_jsonld = new \OpenAPI\Client\Model\InvoiceLineTypesJsonld(); // \OpenAPI\Client\Model\InvoiceLineTypesJsonld | The new invoice_line_types resource

try {
    $result = $apiInstance->invoiceLineTypeApiFileUpload($id, $invoice_line_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->invoiceLineTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |
| **invoice_line_types_jsonld** | [**\OpenAPI\Client\Model\InvoiceLineTypesJsonld**](../Model/InvoiceLineTypesJsonld.md)| The new invoice_line_types resource | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineTypeDropDown()`

```php
invoiceLineTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $invoice_goal, $invoice_goal2, $search, $priority, $priority2, $invoice_goal_between, $invoice_goal_gt, $invoice_goal_gte, $invoice_goal_lt, $invoice_goal_lte, $properties, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\InvoiceLineTypeDropDown200Response
```

Retrieves the collection of invoice_line_types resources.

Retrieves the collection of invoice_line_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
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
$invoice_goal = 'invoice_goal_example'; // string | 
$invoice_goal2 = array('invoice_goal_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$invoice_goal_between = 'invoice_goal_between_example'; // string | 
$invoice_goal_gt = 'invoice_goal_gt_example'; // string | 
$invoice_goal_gte = 'invoice_goal_gte_example'; // string | 
$invoice_goal_lt = 'invoice_goal_lt_example'; // string | 
$invoice_goal_lte = 'invoice_goal_lte_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
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
    $result = $apiInstance->invoiceLineTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $invoice_goal, $invoice_goal2, $search, $priority, $priority2, $invoice_goal_between, $invoice_goal_gt, $invoice_goal_gte, $invoice_goal_lt, $invoice_goal_lte, $properties, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->invoiceLineTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **invoice_goal** | **string**|  | [optional] |
| **invoice_goal2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **invoice_goal_between** | **string**|  | [optional] |
| **invoice_goal_gt** | **string**|  | [optional] |
| **invoice_goal_gte** | **string**|  | [optional] |
| **invoice_goal_lt** | **string**|  | [optional] |
| **invoice_goal_lte** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
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

[**\OpenAPI\Client\Model\InvoiceLineTypeDropDown200Response**](../Model/InvoiceLineTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineTypeDuplicate()`

```php
invoiceLineTypeDuplicate($id): \OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingList
```

Retrieves a invoice_line_types resource.

Retrieves a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier

try {
    $result = $apiInstance->invoiceLineTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->invoiceLineTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingList**](../Model/InvoiceLineTypesJsonldInvoiceLineTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineTypeFetchFiles()`

```php
invoiceLineTypeFetchFiles($id): \OpenAPI\Client\Model\InvoiceLineTypesJsonld
```

Retrieves a invoice_line_types resource.

Retrieves a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier

try {
    $result = $apiInstance->invoiceLineTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->invoiceLineTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonld**](../Model/InvoiceLineTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineTypeGetBySlug()`

```php
invoiceLineTypeGetBySlug($slug): \OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a invoice_line_types resource.

Retrieves a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | invoice_line_types identifier

try {
    $result = $apiInstance->invoiceLineTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->invoiceLineTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| invoice_line_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/InvoiceLineTypesJsonldInvoiceLineTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineTypeGetDeleteRelations()`

```php
invoiceLineTypeGetDeleteRelations($id): \OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeRelations
```

Retrieves a invoice_line_types resource.

Retrieves a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier

try {
    $result = $apiInstance->invoiceLineTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->invoiceLineTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonldInvoiceLineTypeRelations**](../Model/InvoiceLineTypesJsonldInvoiceLineTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceLineTypeMetadata()`

```php
invoiceLineTypeMetadata($id): \OpenAPI\Client\Model\InvoiceLineTypesJsonldIdStandardMetadataInvoiceLineTypeMetadataTagTaggingListInvoiceLineTypeRelationsTimestampable
```

Retrieves a invoice_line_types resource.

Retrieves a invoice_line_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoiceLineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice_line_types identifier

try {
    $result = $apiInstance->invoiceLineTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLineTypesApi->invoiceLineTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice_line_types identifier | |

### Return type

[**\OpenAPI\Client\Model\InvoiceLineTypesJsonldIdStandardMetadataInvoiceLineTypeMetadataTagTaggingListInvoiceLineTypeRelationsTimestampable**](../Model/InvoiceLineTypesJsonldIdStandardMetadataInvoiceLineTypeMetadataTagTaggingListInvoiceLineTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
