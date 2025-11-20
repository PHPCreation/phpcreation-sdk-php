# OpenAPI\Client\FeeTaxCustomTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiFeeTaxCustomTypesGetCollection()**](FeeTaxCustomTypesApi.md#apiFeeTaxCustomTypesGetCollection) | **GET** /open-api/v3/fee_tax_custom_types | Retrieves the collection of fee_tax_custom_types resources. |
| [**apiFeeTaxCustomTypesIdDelete()**](FeeTaxCustomTypesApi.md#apiFeeTaxCustomTypesIdDelete) | **DELETE** /open-api/v3/fee_tax_custom_types/{id} | Removes the fee_tax_custom_types resource. |
| [**apiFeeTaxCustomTypesIdGet()**](FeeTaxCustomTypesApi.md#apiFeeTaxCustomTypesIdGet) | **GET** /open-api/v3/fee_tax_custom_types/{id} | Retrieves a fee_tax_custom_types resource. |
| [**apiFeeTaxCustomTypesIdPut()**](FeeTaxCustomTypesApi.md#apiFeeTaxCustomTypesIdPut) | **PUT** /open-api/v3/fee_tax_custom_types/{id} | Replaces the fee_tax_custom_types resource. |
| [**apiFeeTaxCustomTypesPost()**](FeeTaxCustomTypesApi.md#apiFeeTaxCustomTypesPost) | **POST** /open-api/v3/fee_tax_custom_types | Creates a fee_tax_custom_types resource. |
| [**feeTaxCustomTypeApiFileUpload()**](FeeTaxCustomTypesApi.md#feeTaxCustomTypeApiFileUpload) | **POST** /open-api/v3/fee_tax_custom_types/{id}/file/upload | Creates a fee_tax_custom_types resource. |
| [**feeTaxCustomTypeDropDown()**](FeeTaxCustomTypesApi.md#feeTaxCustomTypeDropDown) | **GET** /open-api/v3/fee_tax_custom_types/dropdown/get | Retrieves the collection of fee_tax_custom_types resources. |
| [**feeTaxCustomTypeDuplicate()**](FeeTaxCustomTypesApi.md#feeTaxCustomTypeDuplicate) | **GET** /open-api/v3/fee_tax_custom_types/duplicate/{id} | Retrieves a fee_tax_custom_types resource. |
| [**feeTaxCustomTypeFetchFiles()**](FeeTaxCustomTypesApi.md#feeTaxCustomTypeFetchFiles) | **GET** /open-api/v3/fee_tax_custom_types/fetch_files/{id} | Retrieves a fee_tax_custom_types resource. |
| [**feeTaxCustomTypeGetDeleteRelations()**](FeeTaxCustomTypesApi.md#feeTaxCustomTypeGetDeleteRelations) | **GET** /open-api/v3/fee_tax_custom_types/get_delete_relations/{id} | Retrieves a fee_tax_custom_types resource. |
| [**feeTypeBySlug()**](FeeTaxCustomTypesApi.md#feeTypeBySlug) | **GET** /open-api/v3/fee_tax_custom_types/by_slug/{slug} | Retrieves a fee_tax_custom_types resource. |
| [**feeTypeMetadata()**](FeeTaxCustomTypesApi.md#feeTypeMetadata) | **GET** /open-api/v3/fee_tax_custom_types/metadata/{id} | Retrieves a fee_tax_custom_types resource. |


## `apiFeeTaxCustomTypesGetCollection()`

```php
apiFeeTaxCustomTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiFeeTaxCustomTypesGetCollection200Response
```

Retrieves the collection of fee_tax_custom_types resources.

Retrieves the collection of fee_tax_custom_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | fee_tax_custom_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | fee_tax_custom_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | fee_tax_custom_types slug_end_with
$id_partial = 'id_partial_example'; // string | fee_tax_custom_types id_partial
$id_start_with = 'id_start_with_example'; // string | fee_tax_custom_types id_start_with
$id_end_with = 'id_end_with_example'; // string | fee_tax_custom_types id_end_with
$icon_partial = 'icon_partial_example'; // string | fee_tax_custom_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | fee_tax_custom_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | fee_tax_custom_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | fee_tax_custom_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | fee_tax_custom_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | fee_tax_custom_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | fee_tax_custom_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | fee_tax_custom_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | fee_tax_custom_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | fee_tax_custom_types priority_range

try {
    $result = $apiInstance->apiFeeTaxCustomTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->apiFeeTaxCustomTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| fee_tax_custom_types slug_partial | [optional] |
| **slug_start_with** | **string**| fee_tax_custom_types slug_start_with | [optional] |
| **slug_end_with** | **string**| fee_tax_custom_types slug_end_with | [optional] |
| **id_partial** | **string**| fee_tax_custom_types id_partial | [optional] |
| **id_start_with** | **string**| fee_tax_custom_types id_start_with | [optional] |
| **id_end_with** | **string**| fee_tax_custom_types id_end_with | [optional] |
| **icon_partial** | **string**| fee_tax_custom_types icon_partial | [optional] |
| **icon_start_with** | **string**| fee_tax_custom_types icon_start_with | [optional] |
| **icon_end_with** | **string**| fee_tax_custom_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| fee_tax_custom_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| fee_tax_custom_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| fee_tax_custom_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| fee_tax_custom_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| fee_tax_custom_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| fee_tax_custom_types translations.description_end_with | [optional] |
| **priority_range** | **string**| fee_tax_custom_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiFeeTaxCustomTypesGetCollection200Response**](../Model/ApiFeeTaxCustomTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeTaxCustomTypesIdDelete()`

```php
apiFeeTaxCustomTypesIdDelete($id)
```

Removes the fee_tax_custom_types resource.

Removes the fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier

try {
    $apiInstance->apiFeeTaxCustomTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->apiFeeTaxCustomTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |

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

## `apiFeeTaxCustomTypesIdGet()`

```php
apiFeeTaxCustomTypesIdGet($id): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a fee_tax_custom_types resource.

Retrieves a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier

try {
    $result = $apiInstance->apiFeeTaxCustomTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->apiFeeTaxCustomTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/FeeTaxCustomTypesJsonldFeeTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeTaxCustomTypesIdPut()`

```php
apiFeeTaxCustomTypesIdPut($id, $fee_tax_custom_types_jsonld_post): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the fee_tax_custom_types resource.

Replaces the fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier
$fee_tax_custom_types_jsonld_post = new \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldPost(); // \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldPost | The updated fee_tax_custom_types resource

try {
    $result = $apiInstance->apiFeeTaxCustomTypesIdPut($id, $fee_tax_custom_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->apiFeeTaxCustomTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |
| **fee_tax_custom_types_jsonld_post** | [**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldPost**](../Model/FeeTaxCustomTypesJsonldPost.md)| The updated fee_tax_custom_types resource | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/FeeTaxCustomTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeTaxCustomTypesPost()`

```php
apiFeeTaxCustomTypesPost($fee_tax_custom_types_jsonld_add_post): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a fee_tax_custom_types resource.

Creates a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_tax_custom_types_jsonld_add_post = new \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldAddPost(); // \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldAddPost | The new fee_tax_custom_types resource

try {
    $result = $apiInstance->apiFeeTaxCustomTypesPost($fee_tax_custom_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->apiFeeTaxCustomTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee_tax_custom_types_jsonld_add_post** | [**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldAddPost**](../Model/FeeTaxCustomTypesJsonldAddPost.md)| The new fee_tax_custom_types resource | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/FeeTaxCustomTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomTypeApiFileUpload()`

```php
feeTaxCustomTypeApiFileUpload($id, $fee_tax_custom_types_jsonld): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTaxCustomTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a fee_tax_custom_types resource.

Creates a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier
$fee_tax_custom_types_jsonld = new \OpenAPI\Client\Model\FeeTaxCustomTypesJsonld(); // \OpenAPI\Client\Model\FeeTaxCustomTypesJsonld | The new fee_tax_custom_types resource

try {
    $result = $apiInstance->feeTaxCustomTypeApiFileUpload($id, $fee_tax_custom_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->feeTaxCustomTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |
| **fee_tax_custom_types_jsonld** | [**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonld**](../Model/FeeTaxCustomTypesJsonld.md)| The new fee_tax_custom_types resource | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTaxCustomTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/FeeTaxCustomTypesJsonldFeeTaxCustomTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomTypeDropDown()`

```php
feeTaxCustomTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\FeeTaxCustomTypeDropDown200Response
```

Retrieves the collection of fee_tax_custom_types resources.

Retrieves the collection of fee_tax_custom_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
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

try {
    $result = $apiInstance->feeTaxCustomTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->feeTaxCustomTypeDropDown: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypeDropDown200Response**](../Model/FeeTaxCustomTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomTypeDuplicate()`

```php
feeTaxCustomTypeDuplicate($id): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTaxCustomTypeShowIdTimestampableTagTaggingList
```

Retrieves a fee_tax_custom_types resource.

Retrieves a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier

try {
    $result = $apiInstance->feeTaxCustomTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->feeTaxCustomTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTaxCustomTypeShowIdTimestampableTagTaggingList**](../Model/FeeTaxCustomTypesJsonldFeeTaxCustomTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomTypeFetchFiles()`

```php
feeTaxCustomTypeFetchFiles($id): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonld
```

Retrieves a fee_tax_custom_types resource.

Retrieves a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier

try {
    $result = $apiInstance->feeTaxCustomTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->feeTaxCustomTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonld**](../Model/FeeTaxCustomTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomTypeGetDeleteRelations()`

```php
feeTaxCustomTypeGetDeleteRelations($id): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTaxCustomTypeRelations
```

Retrieves a fee_tax_custom_types resource.

Retrieves a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier

try {
    $result = $apiInstance->feeTaxCustomTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->feeTaxCustomTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTaxCustomTypeRelations**](../Model/FeeTaxCustomTypesJsonldFeeTaxCustomTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTypeBySlug()`

```php
feeTypeBySlug($slug): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a fee_tax_custom_types resource.

Retrieves a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | fee_tax_custom_types identifier

try {
    $result = $apiInstance->feeTypeBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->feeTypeBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| fee_tax_custom_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldFeeTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/FeeTaxCustomTypesJsonldFeeTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTypeMetadata()`

```php
feeTypeMetadata($id): \OpenAPI\Client\Model\FeeTaxCustomTypesJsonldIdStandardMetadataFeeTypeMetadataTagTaggingListFeeTypeeRelationsTimestampable
```

Retrieves a fee_tax_custom_types resource.

Retrieves a fee_tax_custom_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_custom_types identifier

try {
    $result = $apiInstance->feeTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomTypesApi->feeTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_custom_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomTypesJsonldIdStandardMetadataFeeTypeMetadataTagTaggingListFeeTypeeRelationsTimestampable**](../Model/FeeTaxCustomTypesJsonldIdStandardMetadataFeeTypeMetadataTagTaggingListFeeTypeeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
