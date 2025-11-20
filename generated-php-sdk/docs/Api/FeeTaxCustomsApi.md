# OpenAPI\Client\FeeTaxCustomsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiFeeTaxCustomsGetCollection()**](FeeTaxCustomsApi.md#apiFeeTaxCustomsGetCollection) | **GET** /open-api/v3/fee_tax_customs | Retrieves the collection of fee_tax_customs resources. |
| [**apiFeeTaxCustomsIdDelete()**](FeeTaxCustomsApi.md#apiFeeTaxCustomsIdDelete) | **DELETE** /open-api/v3/fee_tax_customs/{id} | Removes the fee_tax_customs resource. |
| [**apiFeeTaxCustomsIdGet()**](FeeTaxCustomsApi.md#apiFeeTaxCustomsIdGet) | **GET** /open-api/v3/fee_tax_customs/{id} | Retrieves a fee_tax_customs resource. |
| [**apiFeeTaxCustomsIdPut()**](FeeTaxCustomsApi.md#apiFeeTaxCustomsIdPut) | **PUT** /open-api/v3/fee_tax_customs/{id} | Replaces the fee_tax_customs resource. |
| [**apiFeeTaxCustomsPost()**](FeeTaxCustomsApi.md#apiFeeTaxCustomsPost) | **POST** /open-api/v3/fee_tax_customs | Creates a fee_tax_customs resource. |
| [**feeTaxCustomApiFileUpload()**](FeeTaxCustomsApi.md#feeTaxCustomApiFileUpload) | **POST** /open-api/v3/fee_tax_customs/{id}/file/upload | Creates a fee_tax_customs resource. |
| [**feeTaxCustomDropDown()**](FeeTaxCustomsApi.md#feeTaxCustomDropDown) | **GET** /open-api/v3/fee_tax_customs/dropdown/get | Retrieves the collection of fee_tax_customs resources. |
| [**feeTaxCustomDuplicate()**](FeeTaxCustomsApi.md#feeTaxCustomDuplicate) | **GET** /open-api/v3/fee_tax_customs/duplicate/{id} | Retrieves a fee_tax_customs resource. |
| [**feeTaxCustomFetchFiles()**](FeeTaxCustomsApi.md#feeTaxCustomFetchFiles) | **GET** /open-api/v3/fee_tax_customs/fetch_files/{id} | Retrieves a fee_tax_customs resource. |
| [**feeTaxCustomGetBySlug()**](FeeTaxCustomsApi.md#feeTaxCustomGetBySlug) | **GET** /open-api/v3/fee_tax_customs/by_slug/{slug} | Retrieves a fee_tax_customs resource. |
| [**feeTaxCustomGetDeleteRelations()**](FeeTaxCustomsApi.md#feeTaxCustomGetDeleteRelations) | **GET** /open-api/v3/fee_tax_customs/get_delete_relations/{id} | Retrieves a fee_tax_customs resource. |


## `apiFeeTaxCustomsGetCollection()`

```php
apiFeeTaxCustomsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $type, $type2, $search, $rate, $rate2, $order_id, $order_created_at, $order_updated_at, $order_slug, $order_rate, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiFeeTaxCustomsGetCollection200Response
```

Retrieves the collection of fee_tax_customs resources.

Retrieves the collection of fee_tax_customs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
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
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$rate = 'rate_example'; // string | 
$rate2 = array('rate_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_rate = 'order_rate_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | fee_tax_customs slug_partial
$slug_start_with = 'slug_start_with_example'; // string | fee_tax_customs slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | fee_tax_customs slug_end_with
$id_partial = 'id_partial_example'; // string | fee_tax_customs id_partial
$id_start_with = 'id_start_with_example'; // string | fee_tax_customs id_start_with
$id_end_with = 'id_end_with_example'; // string | fee_tax_customs id_end_with

try {
    $result = $apiInstance->apiFeeTaxCustomsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $type, $type2, $search, $rate, $rate2, $order_id, $order_created_at, $order_updated_at, $order_slug, $order_rate, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->apiFeeTaxCustomsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **rate** | **string**|  | [optional] |
| **rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_rate** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| fee_tax_customs slug_partial | [optional] |
| **slug_start_with** | **string**| fee_tax_customs slug_start_with | [optional] |
| **slug_end_with** | **string**| fee_tax_customs slug_end_with | [optional] |
| **id_partial** | **string**| fee_tax_customs id_partial | [optional] |
| **id_start_with** | **string**| fee_tax_customs id_start_with | [optional] |
| **id_end_with** | **string**| fee_tax_customs id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiFeeTaxCustomsGetCollection200Response**](../Model/ApiFeeTaxCustomsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeTaxCustomsIdDelete()`

```php
apiFeeTaxCustomsIdDelete($id)
```

Removes the fee_tax_customs resource.

Removes the fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_customs identifier

try {
    $apiInstance->apiFeeTaxCustomsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->apiFeeTaxCustomsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_customs identifier | |

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

## `apiFeeTaxCustomsIdGet()`

```php
apiFeeTaxCustomsIdGet($id): \OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a fee_tax_customs resource.

Retrieves a fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_customs identifier

try {
    $result = $apiInstance->apiFeeTaxCustomsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->apiFeeTaxCustomsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_customs identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingListStandardShow**](../Model/FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeTaxCustomsIdPut()`

```php
apiFeeTaxCustomsIdPut($id, $fee_tax_customs_jsonld_add_post): \OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the fee_tax_customs resource.

Replaces the fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_customs identifier
$fee_tax_customs_jsonld_add_post = new \OpenAPI\Client\Model\FeeTaxCustomsJsonldAddPost(); // \OpenAPI\Client\Model\FeeTaxCustomsJsonldAddPost | The updated fee_tax_customs resource

try {
    $result = $apiInstance->apiFeeTaxCustomsIdPut($id, $fee_tax_customs_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->apiFeeTaxCustomsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_customs identifier | |
| **fee_tax_customs_jsonld_add_post** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonldAddPost**](../Model/FeeTaxCustomsJsonldAddPost.md)| The updated fee_tax_customs resource | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/FeeTaxCustomsJsonldFeeTaxCustomShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFeeTaxCustomsPost()`

```php
apiFeeTaxCustomsPost($fee_tax_customs_jsonld_add_post): \OpenAPI\Client\Model\FeeTaxCustomsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a fee_tax_customs resource.

Creates a fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_tax_customs_jsonld_add_post = new \OpenAPI\Client\Model\FeeTaxCustomsJsonldAddPost(); // \OpenAPI\Client\Model\FeeTaxCustomsJsonldAddPost | The new fee_tax_customs resource

try {
    $result = $apiInstance->apiFeeTaxCustomsPost($fee_tax_customs_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->apiFeeTaxCustomsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee_tax_customs_jsonld_add_post** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonldAddPost**](../Model/FeeTaxCustomsJsonldAddPost.md)| The new fee_tax_customs resource | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/FeeTaxCustomsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomApiFileUpload()`

```php
feeTaxCustomApiFileUpload($id, $fee_tax_customs_jsonld): \OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingListStandardShow
```

Creates a fee_tax_customs resource.

Creates a fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_customs identifier
$fee_tax_customs_jsonld = new \OpenAPI\Client\Model\FeeTaxCustomsJsonld(); // \OpenAPI\Client\Model\FeeTaxCustomsJsonld | The new fee_tax_customs resource

try {
    $result = $apiInstance->feeTaxCustomApiFileUpload($id, $fee_tax_customs_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->feeTaxCustomApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_customs identifier | |
| **fee_tax_customs_jsonld** | [**\OpenAPI\Client\Model\FeeTaxCustomsJsonld**](../Model/FeeTaxCustomsJsonld.md)| The new fee_tax_customs resource | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingListStandardShow**](../Model/FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomDropDown()`

```php
feeTaxCustomDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $type, $type2, $search, $rate, $rate2, $order_id, $order_created_at, $order_updated_at, $order_slug, $order_rate, $properties, $enabled, $tag): \OpenAPI\Client\Model\FeeTaxCustomDropDown200Response
```

Retrieves the collection of fee_tax_customs resources.

Retrieves the collection of fee_tax_customs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
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
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$search = 'search_example'; // string | 
$rate = 'rate_example'; // string | 
$rate2 = array('rate_example'); // string[] | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_rate = 'order_rate_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->feeTaxCustomDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $type, $type2, $search, $rate, $rate2, $order_id, $order_created_at, $order_updated_at, $order_slug, $order_rate, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->feeTaxCustomDropDown: ', $e->getMessage(), PHP_EOL;
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
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **rate** | **string**|  | [optional] |
| **rate2** | [**string[]**](../Model/string.md)|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_rate** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomDropDown200Response**](../Model/FeeTaxCustomDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomDuplicate()`

```php
feeTaxCustomDuplicate($id): \OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingList
```

Retrieves a fee_tax_customs resource.

Retrieves a fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_customs identifier

try {
    $result = $apiInstance->feeTaxCustomDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->feeTaxCustomDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_customs identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingList**](../Model/FeeTaxCustomsJsonldFeeTaxCustomShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomFetchFiles()`

```php
feeTaxCustomFetchFiles($id): \OpenAPI\Client\Model\FeeTaxCustomsJsonld
```

Retrieves a fee_tax_customs resource.

Retrieves a fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_customs identifier

try {
    $result = $apiInstance->feeTaxCustomFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->feeTaxCustomFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_customs identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonld**](../Model/FeeTaxCustomsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomGetBySlug()`

```php
feeTaxCustomGetBySlug($slug): \OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a fee_tax_customs resource.

Retrieves a fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | fee_tax_customs identifier

try {
    $result = $apiInstance->feeTaxCustomGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->feeTaxCustomGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| fee_tax_customs identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomShowIdCustomPropertyTimestampableTagTaggingList**](../Model/FeeTaxCustomsJsonldFeeTaxCustomShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxCustomGetDeleteRelations()`

```php
feeTaxCustomGetDeleteRelations($id): \OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomRelations
```

Retrieves a fee_tax_customs resource.

Retrieves a fee_tax_customs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeTaxCustomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | fee_tax_customs identifier

try {
    $result = $apiInstance->feeTaxCustomGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeTaxCustomsApi->feeTaxCustomGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| fee_tax_customs identifier | |

### Return type

[**\OpenAPI\Client\Model\FeeTaxCustomsJsonldFeeTaxCustomRelations**](../Model/FeeTaxCustomsJsonldFeeTaxCustomRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
