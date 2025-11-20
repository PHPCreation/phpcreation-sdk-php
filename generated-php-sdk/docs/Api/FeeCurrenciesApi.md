# OpenAPI\Client\FeeCurrenciesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiFeeCurrenciesGetCollection()**](FeeCurrenciesApi.md#apiFeeCurrenciesGetCollection) | **GET** /open-api/v3/fee_currencies | Retrieves the collection of fee_currencies resources. |
| [**apiFeeCurrenciesIdDelete()**](FeeCurrenciesApi.md#apiFeeCurrenciesIdDelete) | **DELETE** /open-api/v3/fee_currencies/{id} | Removes the fee_currencies resource. |
| [**apiFeeCurrenciesIdGet()**](FeeCurrenciesApi.md#apiFeeCurrenciesIdGet) | **GET** /open-api/v3/fee_currencies/{id} | Retrieves a fee_currencies resource. |
| [**apiFeeCurrenciesIdPut()**](FeeCurrenciesApi.md#apiFeeCurrenciesIdPut) | **PUT** /open-api/v3/fee_currencies/{id} | Replaces the fee_currencies resource. |
| [**apiFeeCurrenciesPost()**](FeeCurrenciesApi.md#apiFeeCurrenciesPost) | **POST** /open-api/v3/fee_currencies | Creates a fee_currencies resource. |
| [**feeCurrencyApiFileUpload()**](FeeCurrenciesApi.md#feeCurrencyApiFileUpload) | **POST** /open-api/v3/fee_currencies/{id}/file/upload | Creates a fee_currencies resource. |
| [**feeCurrencyDropDown()**](FeeCurrenciesApi.md#feeCurrencyDropDown) | **GET** /open-api/v3/fee_currencies/dropdown/get | Retrieves the collection of fee_currencies resources. |
| [**feeCurrencyDuplicate()**](FeeCurrenciesApi.md#feeCurrencyDuplicate) | **GET** /open-api/v3/fee_currencies/duplicate/{id} | Retrieves a fee_currencies resource. |
| [**feeCurrencyFetchFiles()**](FeeCurrenciesApi.md#feeCurrencyFetchFiles) | **GET** /open-api/v3/fee_currencies/fetch_files/{id} | Retrieves a fee_currencies resource. |
| [**feeCurrencyGetBySlug()**](FeeCurrenciesApi.md#feeCurrencyGetBySlug) | **GET** /open-api/v3/fee_currencies/by_slug/{slug} | Retrieves a fee_currencies resource. |
| [**feeCurrencyGetDeleteRelations()**](FeeCurrenciesApi.md#feeCurrencyGetDeleteRelations) | **GET** /open-api/v3/fee_currencies/get_delete_relations/{id} | Retrieves a fee_currencies resource. |
| [**feeCurrencyMetadata()**](FeeCurrenciesApi.md#feeCurrencyMetadata) | **GET** /open-api/v3/fee_currencies/metadata/{id} | Retrieves a fee_currencies resource. |


## `apiFeeCurrenciesGetCollection()`

```php
apiFeeCurrenciesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $symbol, $symbol2, $search, $priority, $priority2, $digits_number, $digits_number2, $position_left, $order_id, $order_created_at, $order_updated_at, $order_digits_number, $order_position_left, $order_code, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiFeeCurrenciesGetCollection200Response
```

Retrieves the collection of fee_currencies resources.

Retrieves the collection of fee_currencies resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
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
$symbol = 'symbol_example'; // string | 
$symbol2 = array('symbol_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$digits_number = 56; // int | 
$digits_number2 = array(56); // int[] | 
$position_left = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_digits_number = 'order_digits_number_example'; // string | 
$order_position_left = 'order_position_left_example'; // string | 
$order_code = 'order_code_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | fee_currencies slug_partial
$slug_start_with = 'slug_start_with_example'; // string | fee_currencies slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | fee_currencies slug_end_with
$id_partial = 'id_partial_example'; // string | fee_currencies id_partial
$id_start_with = 'id_start_with_example'; // string | fee_currencies id_start_with
$id_end_with = 'id_end_with_example'; // string | fee_currencies id_end_with
$icon_partial = 'icon_partial_example'; // string | fee_currencies icon_partial
$icon_start_with = 'icon_start_with_example'; // string | fee_currencies icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | fee_currencies icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | fee_currencies translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | fee_currencies translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | fee_currencies translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | fee_currencies translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | fee_currencies translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | fee_currencies translations.description_end_with
$priority_range = 'priority_range_example'; // string | fee_currencies priority_range

try {
    $result = $apiInstance->apiFeeCurrenciesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $symbol, $symbol2, $search, $priority, $priority2, $digits_number, $digits_number2, $position_left, $order_id, $order_created_at, $order_updated_at, $order_digits_number, $order_position_left, $order_code, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->apiFeeCurrenciesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **symbol** | **string**|  | [optional] |
| **symbol2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **digits_number** | **int**|  | [optional] |
| **digits_number2** | [**int[]**](../Model/int.md)|  | [optional] |
| **position_left** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_digits_number** | **string**|  | [optional] |
| **order_position_left** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| fee_currencies slug_partial | [optional] |
| **slug_start_with** | **string**| fee_currencies slug_start_with | [optional] |
| **slug_end_with** | **string**| fee_currencies slug_end_with | [optional] |
| **id_partial** | **string**| fee_currencies id_partial | [optional] |
| **id_start_with** | **string**| fee_currencies id_start_with | [optional] |
| **id_end_with** | **string**| fee_currencies id_end_with | [optional] |
| **icon_partial** | **string**| fee_currencies icon_partial | [optional] |
| **icon_start_with** | **string**| fee_currencies icon_start_with | [optional] |
| **icon_end_with** | **string**| fee_currencies icon_end_with | [optional] |
| **translations_title_partial** | **string**| fee_currencies translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| fee_currencies translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| fee_currencies translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| fee_currencies translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| fee_currencies translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| fee_currencies translations.description_end_with | [optional] |
| **priority_range** | **string**| fee_currencies priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiFeeCurrenciesGetCollection200Response**](../Model/ApiFeeCurrenciesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeCurrenciesIdDelete()`

```php
apiFeeCurrenciesIdDelete($id)
```

Removes the fee_currencies resource.

Removes the fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier

try {
    $apiInstance->apiFeeCurrenciesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->apiFeeCurrenciesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |

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

## `apiFeeCurrenciesIdGet()`

```php
apiFeeCurrenciesIdGet($id): \OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a fee_currencies resource.

Retrieves a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier

try {
    $result = $apiInstance->apiFeeCurrenciesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->apiFeeCurrenciesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/FeeCurrenciesJsonldFeeCurrencyShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeCurrenciesIdPut()`

```php
apiFeeCurrenciesIdPut($id, $fee_currencies_jsonld_post): \OpenAPI\Client\Model\FeeCurrenciesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the fee_currencies resource.

Replaces the fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier
$fee_currencies_jsonld_post = new \OpenAPI\Client\Model\FeeCurrenciesJsonldPost(); // \OpenAPI\Client\Model\FeeCurrenciesJsonldPost | The updated fee_currencies resource

try {
    $result = $apiInstance->apiFeeCurrenciesIdPut($id, $fee_currencies_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->apiFeeCurrenciesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |
| **fee_currencies_jsonld_post** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldPost**](../Model/FeeCurrenciesJsonldPost.md)| The updated fee_currencies resource | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/FeeCurrenciesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeCurrenciesPost()`

```php
apiFeeCurrenciesPost($fee_currencies_jsonld_add_post): \OpenAPI\Client\Model\FeeCurrenciesJsonld
```

Creates a fee_currencies resource.

Creates a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_currencies_jsonld_add_post = new \OpenAPI\Client\Model\FeeCurrenciesJsonldAddPost(); // \OpenAPI\Client\Model\FeeCurrenciesJsonldAddPost | The new fee_currencies resource

try {
    $result = $apiInstance->apiFeeCurrenciesPost($fee_currencies_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->apiFeeCurrenciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee_currencies_jsonld_add_post** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonldAddPost**](../Model/FeeCurrenciesJsonldAddPost.md)| The new fee_currencies resource | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonld**](../Model/FeeCurrenciesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCurrencyApiFileUpload()`

```php
feeCurrencyApiFileUpload($id, $fee_currencies_jsonld): \OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowIdTimestampableTagTaggingListStandardShow
```

Creates a fee_currencies resource.

Creates a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier
$fee_currencies_jsonld = new \OpenAPI\Client\Model\FeeCurrenciesJsonld(); // \OpenAPI\Client\Model\FeeCurrenciesJsonld | The new fee_currencies resource

try {
    $result = $apiInstance->feeCurrencyApiFileUpload($id, $fee_currencies_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->feeCurrencyApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |
| **fee_currencies_jsonld** | [**\OpenAPI\Client\Model\FeeCurrenciesJsonld**](../Model/FeeCurrenciesJsonld.md)| The new fee_currencies resource | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowIdTimestampableTagTaggingListStandardShow**](../Model/FeeCurrenciesJsonldFeeCurrencyShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCurrencyDropDown()`

```php
feeCurrencyDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $symbol, $symbol2, $search, $priority, $priority2, $digits_number, $digits_number2, $position_left, $order_id, $order_created_at, $order_updated_at, $order_digits_number, $order_position_left, $order_code, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag): \OpenAPI\Client\Model\FeeCurrencyDropDown200Response
```

Retrieves the collection of fee_currencies resources.

Retrieves the collection of fee_currencies resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
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
$symbol = 'symbol_example'; // string | 
$symbol2 = array('symbol_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$digits_number = 56; // int | 
$digits_number2 = array(56); // int[] | 
$position_left = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_digits_number = 'order_digits_number_example'; // string | 
$order_position_left = 'order_position_left_example'; // string | 
$order_code = 'order_code_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->feeCurrencyDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $symbol, $symbol2, $search, $priority, $priority2, $digits_number, $digits_number2, $position_left, $order_id, $order_created_at, $order_updated_at, $order_digits_number, $order_position_left, $order_code, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->feeCurrencyDropDown: ', $e->getMessage(), PHP_EOL;
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
| **symbol** | **string**|  | [optional] |
| **symbol2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **digits_number** | **int**|  | [optional] |
| **digits_number2** | [**int[]**](../Model/int.md)|  | [optional] |
| **position_left** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_digits_number** | **string**|  | [optional] |
| **order_position_left** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeeCurrencyDropDown200Response**](../Model/FeeCurrencyDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCurrencyDuplicate()`

```php
feeCurrencyDuplicate($id): \OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowIdTimestampableTagTaggingList
```

Retrieves a fee_currencies resource.

Retrieves a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier

try {
    $result = $apiInstance->feeCurrencyDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->feeCurrencyDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowIdTimestampableTagTaggingList**](../Model/FeeCurrenciesJsonldFeeCurrencyShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCurrencyFetchFiles()`

```php
feeCurrencyFetchFiles($id): \OpenAPI\Client\Model\FeeCurrenciesJsonld
```

Retrieves a fee_currencies resource.

Retrieves a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier

try {
    $result = $apiInstance->feeCurrencyFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->feeCurrencyFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonld**](../Model/FeeCurrenciesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCurrencyGetBySlug()`

```php
feeCurrencyGetBySlug($slug): \OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a fee_currencies resource.

Retrieves a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | fee_currencies identifier

try {
    $result = $apiInstance->feeCurrencyGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->feeCurrencyGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| fee_currencies identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyShowIdCustomPropertyTimestampableTagTaggingList**](../Model/FeeCurrenciesJsonldFeeCurrencyShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCurrencyGetDeleteRelations()`

```php
feeCurrencyGetDeleteRelations($id): \OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyRelations
```

Retrieves a fee_currencies resource.

Retrieves a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier

try {
    $result = $apiInstance->feeCurrencyGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->feeCurrencyGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonldFeeCurrencyRelations**](../Model/FeeCurrenciesJsonldFeeCurrencyRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCurrencyMetadata()`

```php
feeCurrencyMetadata($id): \OpenAPI\Client\Model\FeeCurrenciesJsonldIdStandardMetadataFeeCurrencyMetadataTagTaggingListFeeCurrencyRelationsTimestampable
```

Retrieves a fee_currencies resource.

Retrieves a fee_currencies resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeCurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_currencies identifier

try {
    $result = $apiInstance->feeCurrencyMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeCurrenciesApi->feeCurrencyMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_currencies identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeCurrenciesJsonldIdStandardMetadataFeeCurrencyMetadataTagTaggingListFeeCurrencyRelationsTimestampable**](../Model/FeeCurrenciesJsonldIdStandardMetadataFeeCurrencyMetadataTagTaggingListFeeCurrencyRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
