# OpenAPI\Client\CustomPropertiesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCustomPropertiesGetCollection()**](CustomPropertiesApi.md#apiCustomPropertiesGetCollection) | **GET** /open-api/v3/custom_properties | Retrieves the collection of custom_properties resources. |
| [**apiCustomPropertiesIdDelete()**](CustomPropertiesApi.md#apiCustomPropertiesIdDelete) | **DELETE** /open-api/v3/custom_properties/{id} | Removes the custom_properties resource. |
| [**apiCustomPropertiesIdGet()**](CustomPropertiesApi.md#apiCustomPropertiesIdGet) | **GET** /open-api/v3/custom_properties/{id} | Retrieves a custom_properties resource. |
| [**apiCustomPropertiesIdPut()**](CustomPropertiesApi.md#apiCustomPropertiesIdPut) | **PUT** /open-api/v3/custom_properties/{id} | Replaces the custom_properties resource. |
| [**apiCustomPropertiesPost()**](CustomPropertiesApi.md#apiCustomPropertiesPost) | **POST** /open-api/v3/custom_properties | Creates a custom_properties resource. |
| [**customPropertyApiFileUpload()**](CustomPropertiesApi.md#customPropertyApiFileUpload) | **POST** /open-api/v3/custom_properties/{id}/file/upload | Creates a custom_properties resource. |
| [**customPropertyDropDown()**](CustomPropertiesApi.md#customPropertyDropDown) | **GET** /open-api/v3/custom_properties/dropdown/get | Retrieves the collection of custom_properties resources. |
| [**customPropertyDuplicate()**](CustomPropertiesApi.md#customPropertyDuplicate) | **GET** /open-api/v3/custom_properties/duplicate/{id} | Retrieves a custom_properties resource. |
| [**customPropertyFetchFiles()**](CustomPropertiesApi.md#customPropertyFetchFiles) | **GET** /open-api/v3/custom_properties/fetch_files/{id} | Retrieves a custom_properties resource. |
| [**customPropertyGetBySlug()**](CustomPropertiesApi.md#customPropertyGetBySlug) | **GET** /open-api/v3/custom_properties/by_slug/{slug} | Retrieves a custom_properties resource. |
| [**customPropertyGetDeleteRelations()**](CustomPropertiesApi.md#customPropertyGetDeleteRelations) | **GET** /open-api/v3/custom_properties/get_delete_relations/{id} | Retrieves a custom_properties resource. |
| [**storageCustomPropertyMetadata()**](CustomPropertiesApi.md#storageCustomPropertyMetadata) | **GET** /open-api/v3/custom_properties/metadata/{id} | Retrieves a custom_properties resource. |


## `apiCustomPropertiesGetCollection()`

```php
apiCustomPropertiesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $property_name, $property_name2, $table_name, $table_name2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiCustomPropertiesGetCollection200Response
```

Retrieves the collection of custom_properties resources.

Retrieves the collection of custom_properties resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
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
$property_name = 'property_name_example'; // string | 
$property_name2 = array('property_name_example'); // string[] | 
$table_name = 'table_name_example'; // string | 
$table_name2 = array('table_name_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | custom_properties slug_partial
$slug_start_with = 'slug_start_with_example'; // string | custom_properties slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | custom_properties slug_end_with
$id_partial = 'id_partial_example'; // string | custom_properties id_partial
$id_start_with = 'id_start_with_example'; // string | custom_properties id_start_with
$id_end_with = 'id_end_with_example'; // string | custom_properties id_end_with

try {
    $result = $apiInstance->apiCustomPropertiesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $property_name, $property_name2, $table_name, $table_name2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->apiCustomPropertiesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **property_name** | **string**|  | [optional] |
| **property_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **table_name** | **string**|  | [optional] |
| **table_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| custom_properties slug_partial | [optional] |
| **slug_start_with** | **string**| custom_properties slug_start_with | [optional] |
| **slug_end_with** | **string**| custom_properties slug_end_with | [optional] |
| **id_partial** | **string**| custom_properties id_partial | [optional] |
| **id_start_with** | **string**| custom_properties id_start_with | [optional] |
| **id_end_with** | **string**| custom_properties id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiCustomPropertiesGetCollection200Response**](../Model/ApiCustomPropertiesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomPropertiesIdDelete()`

```php
apiCustomPropertiesIdDelete($id)
```

Removes the custom_properties resource.

Removes the custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier

try {
    $apiInstance->apiCustomPropertiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->apiCustomPropertiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |

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

## `apiCustomPropertiesIdGet()`

```php
apiCustomPropertiesIdGet($id): \OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a custom_properties resource.

Retrieves a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier

try {
    $result = $apiInstance->apiCustomPropertiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->apiCustomPropertiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow**](../Model/CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomPropertiesIdPut()`

```php
apiCustomPropertiesIdPut($id, $custom_properties_jsonld): \OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingList
```

Replaces the custom_properties resource.

Replaces the custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier
$custom_properties_jsonld = new \OpenAPI\Client\Model\CustomPropertiesJsonld(); // \OpenAPI\Client\Model\CustomPropertiesJsonld | The updated custom_properties resource

try {
    $result = $apiInstance->apiCustomPropertiesIdPut($id, $custom_properties_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->apiCustomPropertiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |
| **custom_properties_jsonld** | [**\OpenAPI\Client\Model\CustomPropertiesJsonld**](../Model/CustomPropertiesJsonld.md)| The updated custom_properties resource | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingList**](../Model/CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomPropertiesPost()`

```php
apiCustomPropertiesPost($custom_properties_jsonld_add_post): \OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow
```

Creates a custom_properties resource.

Creates a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_properties_jsonld_add_post = new \OpenAPI\Client\Model\CustomPropertiesJsonldAddPost(); // \OpenAPI\Client\Model\CustomPropertiesJsonldAddPost | The new custom_properties resource

try {
    $result = $apiInstance->apiCustomPropertiesPost($custom_properties_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->apiCustomPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_properties_jsonld_add_post** | [**\OpenAPI\Client\Model\CustomPropertiesJsonldAddPost**](../Model/CustomPropertiesJsonldAddPost.md)| The new custom_properties resource | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow**](../Model/CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customPropertyApiFileUpload()`

```php
customPropertyApiFileUpload($id, $custom_properties_jsonld): \OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow
```

Creates a custom_properties resource.

Creates a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier
$custom_properties_jsonld = new \OpenAPI\Client\Model\CustomPropertiesJsonld(); // \OpenAPI\Client\Model\CustomPropertiesJsonld | The new custom_properties resource

try {
    $result = $apiInstance->customPropertyApiFileUpload($id, $custom_properties_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->customPropertyApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |
| **custom_properties_jsonld** | [**\OpenAPI\Client\Model\CustomPropertiesJsonld**](../Model/CustomPropertiesJsonld.md)| The new custom_properties resource | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow**](../Model/CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customPropertyDropDown()`

```php
customPropertyDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $property_name, $property_name2, $table_name, $table_name2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\CustomPropertyDropDown200Response
```

Retrieves the collection of custom_properties resources.

Retrieves the collection of custom_properties resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
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
$property_name = 'property_name_example'; // string | 
$property_name2 = array('property_name_example'); // string[] | 
$table_name = 'table_name_example'; // string | 
$table_name2 = array('table_name_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->customPropertyDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $property_name, $property_name2, $table_name, $table_name2, $search, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->customPropertyDropDown: ', $e->getMessage(), PHP_EOL;
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
| **property_name** | **string**|  | [optional] |
| **property_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **table_name** | **string**|  | [optional] |
| **table_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomPropertyDropDown200Response**](../Model/CustomPropertyDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customPropertyDuplicate()`

```php
customPropertyDuplicate($id): \OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingList
```

Retrieves a custom_properties resource.

Retrieves a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier

try {
    $result = $apiInstance->customPropertyDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->customPropertyDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingList**](../Model/CustomPropertiesJsonldStorageCustomPropertyShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customPropertyFetchFiles()`

```php
customPropertyFetchFiles($id): \OpenAPI\Client\Model\CustomPropertiesJsonld
```

Retrieves a custom_properties resource.

Retrieves a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier

try {
    $result = $apiInstance->customPropertyFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->customPropertyFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonld**](../Model/CustomPropertiesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customPropertyGetBySlug()`

```php
customPropertyGetBySlug($slug): \OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a custom_properties resource.

Retrieves a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | custom_properties identifier

try {
    $result = $apiInstance->customPropertyGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->customPropertyGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| custom_properties identifier | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldStorageCustomPropertyShowIdCustomPropertyTimestampableTagTaggingList**](../Model/CustomPropertiesJsonldStorageCustomPropertyShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customPropertyGetDeleteRelations()`

```php
customPropertyGetDeleteRelations($id): \OpenAPI\Client\Model\CustomPropertiesJsonldCustomPropertyRelations
```

Retrieves a custom_properties resource.

Retrieves a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier

try {
    $result = $apiInstance->customPropertyGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->customPropertyGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldCustomPropertyRelations**](../Model/CustomPropertiesJsonldCustomPropertyRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageCustomPropertyMetadata()`

```php
storageCustomPropertyMetadata($id): \OpenAPI\Client\Model\CustomPropertiesJsonldIdStandardMetadataStorageCustomPropertyMetadataTagTaggingListStorageCustomPropertyRelationsTimestampable
```

Retrieves a custom_properties resource.

Retrieves a custom_properties resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | custom_properties identifier

try {
    $result = $apiInstance->storageCustomPropertyMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPropertiesApi->storageCustomPropertyMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| custom_properties identifier | |

### Return type

[**\OpenAPI\Client\Model\CustomPropertiesJsonldIdStandardMetadataStorageCustomPropertyMetadataTagTaggingListStorageCustomPropertyRelationsTimestampable**](../Model/CustomPropertiesJsonldIdStandardMetadataStorageCustomPropertyMetadataTagTaggingListStorageCustomPropertyRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
