# OpenAPI\Client\ShippingShippersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiShippingShippersGetCollection()**](ShippingShippersApi.md#apiShippingShippersGetCollection) | **GET** /open-api/v3/shipping_shippers | Retrieves the collection of shipping_shippers resources. |
| [**apiShippingShippersIdDelete()**](ShippingShippersApi.md#apiShippingShippersIdDelete) | **DELETE** /open-api/v3/shipping_shippers/{id} | Removes the shipping_shippers resource. |
| [**apiShippingShippersIdGet()**](ShippingShippersApi.md#apiShippingShippersIdGet) | **GET** /open-api/v3/shipping_shippers/{id} | Retrieves a shipping_shippers resource. |
| [**apiShippingShippersIdPut()**](ShippingShippersApi.md#apiShippingShippersIdPut) | **PUT** /open-api/v3/shipping_shippers/{id} | Replaces the shipping_shippers resource. |
| [**apiShippingShippersPost()**](ShippingShippersApi.md#apiShippingShippersPost) | **POST** /open-api/v3/shipping_shippers | Creates a shipping_shippers resource. |
| [**shippingShipperApiCorporationAdd()**](ShippingShippersApi.md#shippingShipperApiCorporationAdd) | **POST** /open-api/v3/shipping_shippers/{id}/corporation/add | Creates a shipping_shippers resource. |
| [**shippingShipperApiCorporationRemove()**](ShippingShippersApi.md#shippingShipperApiCorporationRemove) | **POST** /open-api/v3/shipping_shippers/{id}/corporation/remove | Creates a shipping_shippers resource. |
| [**shippingShipperApiFileUpload()**](ShippingShippersApi.md#shippingShipperApiFileUpload) | **POST** /open-api/v3/shipping_shippers/{id}/file/upload | Creates a shipping_shippers resource. |
| [**shippingShipperDropDown()**](ShippingShippersApi.md#shippingShipperDropDown) | **GET** /open-api/v3/shipping_shippers/dropdown/get | Retrieves the collection of shipping_shippers resources. |
| [**shippingShipperDuplicate()**](ShippingShippersApi.md#shippingShipperDuplicate) | **GET** /open-api/v3/shipping_shippers/duplicate/{id} | Retrieves a shipping_shippers resource. |
| [**shippingShipperFetchFiles()**](ShippingShippersApi.md#shippingShipperFetchFiles) | **GET** /open-api/v3/shipping_shippers/fetch_files/{id} | Retrieves a shipping_shippers resource. |
| [**shippingShipperGetBySlug()**](ShippingShippersApi.md#shippingShipperGetBySlug) | **GET** /open-api/v3/shipping_shippers/by_slug/{slug} | Retrieves a shipping_shippers resource. |
| [**shippingShipperGetDeleteRelations()**](ShippingShippersApi.md#shippingShipperGetDeleteRelations) | **GET** /open-api/v3/shipping_shippers/get_delete_relations/{id} | Retrieves a shipping_shippers resource. |
| [**shippingShipperMetadata()**](ShippingShippersApi.md#shippingShipperMetadata) | **GET** /open-api/v3/shipping_shippers/metadata/{id} | Retrieves a shipping_shippers resource. |


## `apiShippingShippersGetCollection()`

```php
apiShippingShippersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $account_number, $account_number2, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with): \OpenAPI\Client\Model\ApiShippingShippersGetCollection200Response
```

Retrieves the collection of shipping_shippers resources.

Retrieves the collection of shipping_shippers resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$account_number = 'account_number_example'; // string | 
$account_number2 = array('account_number_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | shipping_shippers slug_partial
$slug_start_with = 'slug_start_with_example'; // string | shipping_shippers slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | shipping_shippers slug_end_with
$id_partial = 'id_partial_example'; // string | shipping_shippers id_partial
$id_start_with = 'id_start_with_example'; // string | shipping_shippers id_start_with
$id_end_with = 'id_end_with_example'; // string | shipping_shippers id_end_with
$code_partial = 'code_partial_example'; // string | shipping_shippers code_partial
$code_start_with = 'code_start_with_example'; // string | shipping_shippers code_start_with
$code_end_with = 'code_end_with_example'; // string | shipping_shippers code_end_with
$account_number_partial = 'account_number_partial_example'; // string | shipping_shippers accountNumber_partial
$account_number_start_with = 'account_number_start_with_example'; // string | shipping_shippers accountNumber_start_with
$account_number_end_with = 'account_number_end_with_example'; // string | shipping_shippers accountNumber_end_with

try {
    $result = $apiInstance->apiShippingShippersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $account_number, $account_number2, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->apiShippingShippersGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **account_number** | **string**|  | [optional] |
| **account_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| shipping_shippers slug_partial | [optional] |
| **slug_start_with** | **string**| shipping_shippers slug_start_with | [optional] |
| **slug_end_with** | **string**| shipping_shippers slug_end_with | [optional] |
| **id_partial** | **string**| shipping_shippers id_partial | [optional] |
| **id_start_with** | **string**| shipping_shippers id_start_with | [optional] |
| **id_end_with** | **string**| shipping_shippers id_end_with | [optional] |
| **code_partial** | **string**| shipping_shippers code_partial | [optional] |
| **code_start_with** | **string**| shipping_shippers code_start_with | [optional] |
| **code_end_with** | **string**| shipping_shippers code_end_with | [optional] |
| **account_number_partial** | **string**| shipping_shippers accountNumber_partial | [optional] |
| **account_number_start_with** | **string**| shipping_shippers accountNumber_start_with | [optional] |
| **account_number_end_with** | **string**| shipping_shippers accountNumber_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiShippingShippersGetCollection200Response**](../Model/ApiShippingShippersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiShippingShippersIdDelete()`

```php
apiShippingShippersIdDelete($id)
```

Removes the shipping_shippers resource.

Removes the shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier

try {
    $apiInstance->apiShippingShippersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->apiShippingShippersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |

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

## `apiShippingShippersIdGet()`

```php
apiShippingShippersIdGet($id): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a shipping_shippers resource.

Retrieves a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier

try {
    $result = $apiInstance->apiShippingShippersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->apiShippingShippersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiShippingShippersIdPut()`

```php
apiShippingShippersIdPut($id, $shipping_shippers_jsonld_add_post): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the shipping_shippers resource.

Replaces the shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier
$shipping_shippers_jsonld_add_post = new \OpenAPI\Client\Model\ShippingShippersJsonldAddPost(); // \OpenAPI\Client\Model\ShippingShippersJsonldAddPost | The updated shipping_shippers resource

try {
    $result = $apiInstance->apiShippingShippersIdPut($id, $shipping_shippers_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->apiShippingShippersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |
| **shipping_shippers_jsonld_add_post** | [**\OpenAPI\Client\Model\ShippingShippersJsonldAddPost**](../Model/ShippingShippersJsonldAddPost.md)| The updated shipping_shippers resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiShippingShippersPost()`

```php
apiShippingShippersPost($shipping_shippers_jsonld_add_post): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a shipping_shippers resource.

Creates a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_shippers_jsonld_add_post = new \OpenAPI\Client\Model\ShippingShippersJsonldAddPost(); // \OpenAPI\Client\Model\ShippingShippersJsonldAddPost | The new shipping_shippers resource

try {
    $result = $apiInstance->apiShippingShippersPost($shipping_shippers_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->apiShippingShippersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipping_shippers_jsonld_add_post** | [**\OpenAPI\Client\Model\ShippingShippersJsonldAddPost**](../Model/ShippingShippersJsonldAddPost.md)| The new shipping_shippers resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperApiCorporationAdd()`

```php
shippingShipperApiCorporationAdd($id, $shipping_shippers_jsonld): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a shipping_shippers resource.

Creates a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier
$shipping_shippers_jsonld = new \OpenAPI\Client\Model\ShippingShippersJsonld(); // \OpenAPI\Client\Model\ShippingShippersJsonld | The new shipping_shippers resource

try {
    $result = $apiInstance->shippingShipperApiCorporationAdd($id, $shipping_shippers_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |
| **shipping_shippers_jsonld** | [**\OpenAPI\Client\Model\ShippingShippersJsonld**](../Model/ShippingShippersJsonld.md)| The new shipping_shippers resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperApiCorporationRemove()`

```php
shippingShipperApiCorporationRemove($id, $shipping_shippers_jsonld): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a shipping_shippers resource.

Creates a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier
$shipping_shippers_jsonld = new \OpenAPI\Client\Model\ShippingShippersJsonld(); // \OpenAPI\Client\Model\ShippingShippersJsonld | The new shipping_shippers resource

try {
    $result = $apiInstance->shippingShipperApiCorporationRemove($id, $shipping_shippers_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |
| **shipping_shippers_jsonld** | [**\OpenAPI\Client\Model\ShippingShippersJsonld**](../Model/ShippingShippersJsonld.md)| The new shipping_shippers resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperApiFileUpload()`

```php
shippingShipperApiFileUpload($id, $shipping_shippers_jsonld): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a shipping_shippers resource.

Creates a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier
$shipping_shippers_jsonld = new \OpenAPI\Client\Model\ShippingShippersJsonld(); // \OpenAPI\Client\Model\ShippingShippersJsonld | The new shipping_shippers resource

try {
    $result = $apiInstance->shippingShipperApiFileUpload($id, $shipping_shippers_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |
| **shipping_shippers_jsonld** | [**\OpenAPI\Client\Model\ShippingShippersJsonld**](../Model/ShippingShippersJsonld.md)| The new shipping_shippers resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperDropDown()`

```php
shippingShipperDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $account_number, $account_number2, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with): \OpenAPI\Client\Model\ShippingShipperDropDown200Response
```

Retrieves the collection of shipping_shippers resources.

Retrieves the collection of shipping_shippers resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$account_number = 'account_number_example'; // string | 
$account_number2 = array('account_number_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | shipping_shippers slug_partial
$slug_start_with = 'slug_start_with_example'; // string | shipping_shippers slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | shipping_shippers slug_end_with
$id_partial = 'id_partial_example'; // string | shipping_shippers id_partial
$id_start_with = 'id_start_with_example'; // string | shipping_shippers id_start_with
$id_end_with = 'id_end_with_example'; // string | shipping_shippers id_end_with
$code_partial = 'code_partial_example'; // string | shipping_shippers code_partial
$code_start_with = 'code_start_with_example'; // string | shipping_shippers code_start_with
$code_end_with = 'code_end_with_example'; // string | shipping_shippers code_end_with
$account_number_partial = 'account_number_partial_example'; // string | shipping_shippers accountNumber_partial
$account_number_start_with = 'account_number_start_with_example'; // string | shipping_shippers accountNumber_start_with
$account_number_end_with = 'account_number_end_with_example'; // string | shipping_shippers accountNumber_end_with

try {
    $result = $apiInstance->shippingShipperDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $account_number, $account_number2, $person, $person2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperDropDown: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **account_number** | **string**|  | [optional] |
| **account_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| shipping_shippers slug_partial | [optional] |
| **slug_start_with** | **string**| shipping_shippers slug_start_with | [optional] |
| **slug_end_with** | **string**| shipping_shippers slug_end_with | [optional] |
| **id_partial** | **string**| shipping_shippers id_partial | [optional] |
| **id_start_with** | **string**| shipping_shippers id_start_with | [optional] |
| **id_end_with** | **string**| shipping_shippers id_end_with | [optional] |
| **code_partial** | **string**| shipping_shippers code_partial | [optional] |
| **code_start_with** | **string**| shipping_shippers code_start_with | [optional] |
| **code_end_with** | **string**| shipping_shippers code_end_with | [optional] |
| **account_number_partial** | **string**| shipping_shippers accountNumber_partial | [optional] |
| **account_number_start_with** | **string**| shipping_shippers accountNumber_start_with | [optional] |
| **account_number_end_with** | **string**| shipping_shippers accountNumber_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingShipperDropDown200Response**](../Model/ShippingShipperDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperDuplicate()`

```php
shippingShipperDuplicate($id): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a shipping_shippers resource.

Retrieves a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier

try {
    $result = $apiInstance->shippingShipperDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperFetchFiles()`

```php
shippingShipperFetchFiles($id): \OpenAPI\Client\Model\ShippingShippersJsonld
```

Retrieves a shipping_shippers resource.

Retrieves a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier

try {
    $result = $apiInstance->shippingShipperFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonld**](../Model/ShippingShippersJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperGetBySlug()`

```php
shippingShipperGetBySlug($slug): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a shipping_shippers resource.

Retrieves a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | shipping_shippers identifier

try {
    $result = $apiInstance->shippingShipperGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| shipping_shippers identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShippersJsonldShippingShipperShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperGetDeleteRelations()`

```php
shippingShipperGetDeleteRelations($id): \OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperRelations
```

Retrieves a shipping_shippers resource.

Retrieves a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier

try {
    $result = $apiInstance->shippingShipperGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldShippingShipperRelations**](../Model/ShippingShippersJsonldShippingShipperRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipperMetadata()`

```php
shippingShipperMetadata($id): \OpenAPI\Client\Model\ShippingShippersJsonldIdStandardMetadataShippingShipperMetadataTagTaggingListShippingShipperRelationsTimestampable
```

Retrieves a shipping_shippers resource.

Retrieves a shipping_shippers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShippersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shippers identifier

try {
    $result = $apiInstance->shippingShipperMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShippersApi->shippingShipperMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shippers identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShippersJsonldIdStandardMetadataShippingShipperMetadataTagTaggingListShippingShipperRelationsTimestampable**](../Model/ShippingShippersJsonldIdStandardMetadataShippingShipperMetadataTagTaggingListShippingShipperRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
