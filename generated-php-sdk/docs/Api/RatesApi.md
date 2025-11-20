# OpenAPI\Client\RatesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiRatesGetCollection()**](RatesApi.md#apiRatesGetCollection) | **GET** /open-api/v3/rates | Retrieves the collection of rates resources. |
| [**apiRatesIdDelete()**](RatesApi.md#apiRatesIdDelete) | **DELETE** /open-api/v3/rates/{id} | Removes the rates resource. |
| [**apiRatesIdGet()**](RatesApi.md#apiRatesIdGet) | **GET** /open-api/v3/rates/{id} | Retrieves a rates resource. |
| [**apiRatesIdPut()**](RatesApi.md#apiRatesIdPut) | **PUT** /open-api/v3/rates/{id} | Replaces the rates resource. |
| [**apiRatesPost()**](RatesApi.md#apiRatesPost) | **POST** /open-api/v3/rates | Creates a rates resource. |
| [**rateApiFileUpload()**](RatesApi.md#rateApiFileUpload) | **POST** /open-api/v3/rates/{id}/file/upload | Creates a rates resource. |
| [**rateDropDown()**](RatesApi.md#rateDropDown) | **GET** /open-api/v3/rates/dropdown/get | Retrieves the collection of rates resources. |
| [**rateDuplicate()**](RatesApi.md#rateDuplicate) | **GET** /open-api/v3/rates/duplicate/{id} | Retrieves a rates resource. |
| [**rateFetchFiles()**](RatesApi.md#rateFetchFiles) | **GET** /open-api/v3/rates/fetch_files/{id} | Retrieves a rates resource. |
| [**rateGetBySlug()**](RatesApi.md#rateGetBySlug) | **GET** /open-api/v3/rates/by_slug/{slug} | Retrieves a rates resource. |
| [**rateGetDeleteRelations()**](RatesApi.md#rateGetDeleteRelations) | **GET** /open-api/v3/rates/get_delete_relations/{id} | Retrieves a rates resource. |
| [**rateMetadata()**](RatesApi.md#rateMetadata) | **GET** /open-api/v3/rates/metadata/{id} | Retrieves a rates resource. |


## `apiRatesGetCollection()`

```php
apiRatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $rate_range): \OpenAPI\Client\Model\ApiRatesGetCollection200Response
```

Retrieves the collection of rates resources.

Retrieves the collection of rates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | rates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | rates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | rates slug_end_with
$id_partial = 'id_partial_example'; // string | rates id_partial
$id_start_with = 'id_start_with_example'; // string | rates id_start_with
$id_end_with = 'id_end_with_example'; // string | rates id_end_with
$name_partial = 'name_partial_example'; // string | rates name_partial
$name_start_with = 'name_start_with_example'; // string | rates name_start_with
$name_end_with = 'name_end_with_example'; // string | rates name_end_with
$rate_range = 'rate_range_example'; // string | rates rate_range

try {
    $result = $apiInstance->apiRatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->apiRatesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| rates slug_partial | [optional] |
| **slug_start_with** | **string**| rates slug_start_with | [optional] |
| **slug_end_with** | **string**| rates slug_end_with | [optional] |
| **id_partial** | **string**| rates id_partial | [optional] |
| **id_start_with** | **string**| rates id_start_with | [optional] |
| **id_end_with** | **string**| rates id_end_with | [optional] |
| **name_partial** | **string**| rates name_partial | [optional] |
| **name_start_with** | **string**| rates name_start_with | [optional] |
| **name_end_with** | **string**| rates name_end_with | [optional] |
| **rate_range** | **string**| rates rate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiRatesGetCollection200Response**](../Model/ApiRatesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRatesIdDelete()`

```php
apiRatesIdDelete($id)
```

Removes the rates resource.

Removes the rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier

try {
    $apiInstance->apiRatesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->apiRatesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |

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

## `apiRatesIdGet()`

```php
apiRatesIdGet($id): \OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rates resource.

Retrieves a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier

try {
    $result = $apiInstance->apiRatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->apiRatesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRatesIdPut()`

```php
apiRatesIdPut($id, $rates_jsonld_add_post): \OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the rates resource.

Replaces the rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier
$rates_jsonld_add_post = new \OpenAPI\Client\Model\RatesJsonldAddPost(); // \OpenAPI\Client\Model\RatesJsonldAddPost | The updated rates resource

try {
    $result = $apiInstance->apiRatesIdPut($id, $rates_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->apiRatesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |
| **rates_jsonld_add_post** | [**\OpenAPI\Client\Model\RatesJsonldAddPost**](../Model/RatesJsonldAddPost.md)| The updated rates resource | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRatesPost()`

```php
apiRatesPost($rates_jsonld_add_post): \OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rates resource.

Creates a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rates_jsonld_add_post = new \OpenAPI\Client\Model\RatesJsonldAddPost(); // \OpenAPI\Client\Model\RatesJsonldAddPost | The new rates resource

try {
    $result = $apiInstance->apiRatesPost($rates_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->apiRatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rates_jsonld_add_post** | [**\OpenAPI\Client\Model\RatesJsonldAddPost**](../Model/RatesJsonldAddPost.md)| The new rates resource | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateApiFileUpload()`

```php
rateApiFileUpload($id, $rates_jsonld): \OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rates resource.

Creates a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier
$rates_jsonld = new \OpenAPI\Client\Model\RatesJsonld(); // \OpenAPI\Client\Model\RatesJsonld | The new rates resource

try {
    $result = $apiInstance->rateApiFileUpload($id, $rates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->rateApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |
| **rates_jsonld** | [**\OpenAPI\Client\Model\RatesJsonld**](../Model/RatesJsonld.md)| The new rates resource | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateDropDown()`

```php
rateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $rate_range): \OpenAPI\Client\Model\RateDropDown200Response
```

Retrieves the collection of rates resources.

Retrieves the collection of rates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | rates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | rates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | rates slug_end_with
$id_partial = 'id_partial_example'; // string | rates id_partial
$id_start_with = 'id_start_with_example'; // string | rates id_start_with
$id_end_with = 'id_end_with_example'; // string | rates id_end_with
$name_partial = 'name_partial_example'; // string | rates name_partial
$name_start_with = 'name_start_with_example'; // string | rates name_start_with
$name_end_with = 'name_end_with_example'; // string | rates name_end_with
$rate_range = 'rate_range_example'; // string | rates rate_range

try {
    $result = $apiInstance->rateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $name, $name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $rate_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->rateDropDown: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| rates slug_partial | [optional] |
| **slug_start_with** | **string**| rates slug_start_with | [optional] |
| **slug_end_with** | **string**| rates slug_end_with | [optional] |
| **id_partial** | **string**| rates id_partial | [optional] |
| **id_start_with** | **string**| rates id_start_with | [optional] |
| **id_end_with** | **string**| rates id_end_with | [optional] |
| **name_partial** | **string**| rates name_partial | [optional] |
| **name_start_with** | **string**| rates name_start_with | [optional] |
| **name_end_with** | **string**| rates name_end_with | [optional] |
| **rate_range** | **string**| rates rate_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\RateDropDown200Response**](../Model/RateDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateDuplicate()`

```php
rateDuplicate($id): \OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rates resource.

Retrieves a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier

try {
    $result = $apiInstance->rateDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->rateDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateFetchFiles()`

```php
rateFetchFiles($id): \OpenAPI\Client\Model\RatesJsonld
```

Retrieves a rates resource.

Retrieves a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier

try {
    $result = $apiInstance->rateFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->rateFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonld**](../Model/RatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateGetBySlug()`

```php
rateGetBySlug($slug): \OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rates resource.

Retrieves a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | rates identifier

try {
    $result = $apiInstance->rateGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->rateGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| rates identifier | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RatesJsonldRateShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateGetDeleteRelations()`

```php
rateGetDeleteRelations($id): \OpenAPI\Client\Model\RatesJsonldRateRelations
```

Retrieves a rates resource.

Retrieves a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier

try {
    $result = $apiInstance->rateGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->rateGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldRateRelations**](../Model/RatesJsonldRateRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateMetadata()`

```php
rateMetadata($id): \OpenAPI\Client\Model\RatesJsonldIdStandardMetadataRateMetadataTagTaggingListRateRelationsTimestampable
```

Retrieves a rates resource.

Retrieves a rates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rates identifier

try {
    $result = $apiInstance->rateMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->rateMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rates identifier | |

### Return type

[**\OpenAPI\Client\Model\RatesJsonldIdStandardMetadataRateMetadataTagTaggingListRateRelationsTimestampable**](../Model/RatesJsonldIdStandardMetadataRateMetadataTagTaggingListRateRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
