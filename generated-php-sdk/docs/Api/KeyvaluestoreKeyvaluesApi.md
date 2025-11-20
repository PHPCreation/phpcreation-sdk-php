# OpenAPI\Client\KeyvaluestoreKeyvaluesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiKeyvaluestoreKeyvaluesGetCollection()**](KeyvaluestoreKeyvaluesApi.md#apiKeyvaluestoreKeyvaluesGetCollection) | **GET** /open-api/v3/keyvaluestore_keyvalues | Retrieves the collection of keyvaluestore_keyvalues resources. |
| [**apiKeyvaluestoreKeyvaluesIdDelete()**](KeyvaluestoreKeyvaluesApi.md#apiKeyvaluestoreKeyvaluesIdDelete) | **DELETE** /open-api/v3/keyvaluestore_keyvalues/{id} | Removes the keyvaluestore_keyvalues resource. |
| [**apiKeyvaluestoreKeyvaluesIdGet()**](KeyvaluestoreKeyvaluesApi.md#apiKeyvaluestoreKeyvaluesIdGet) | **GET** /open-api/v3/keyvaluestore_keyvalues/{id} | Retrieves a keyvaluestore_keyvalues resource. |
| [**apiKeyvaluestoreKeyvaluesIdPut()**](KeyvaluestoreKeyvaluesApi.md#apiKeyvaluestoreKeyvaluesIdPut) | **PUT** /open-api/v3/keyvaluestore_keyvalues/{id} | Replaces the keyvaluestore_keyvalues resource. |
| [**apiKeyvaluestoreKeyvaluesPost()**](KeyvaluestoreKeyvaluesApi.md#apiKeyvaluestoreKeyvaluesPost) | **POST** /open-api/v3/keyvaluestore_keyvalues | Creates a keyvaluestore_keyvalues resource. |
| [**keyValueApiFileUpload()**](KeyvaluestoreKeyvaluesApi.md#keyValueApiFileUpload) | **POST** /open-api/v3/keyvaluestore_keyvalues/{id}/file/upload | Creates a keyvaluestore_keyvalues resource. |
| [**keyValueClearanceLevelListing()**](KeyvaluestoreKeyvaluesApi.md#keyValueClearanceLevelListing) | **GET** /open-api/v3/keyvaluestore_keyvalues/authorized_kvs/get | Retrieves the collection of keyvaluestore_keyvalues resources. |
| [**keyValueDropDown()**](KeyvaluestoreKeyvaluesApi.md#keyValueDropDown) | **GET** /open-api/v3/keyvaluestore_keyvalues/dropdown/get | Retrieves the collection of keyvaluestore_keyvalues resources. |
| [**keyValueDuplicate()**](KeyvaluestoreKeyvaluesApi.md#keyValueDuplicate) | **GET** /open-api/v3/keyvaluestore_keyvalues/duplicate/{id} | Retrieves a keyvaluestore_keyvalues resource. |
| [**keyValueFetchFiles()**](KeyvaluestoreKeyvaluesApi.md#keyValueFetchFiles) | **GET** /open-api/v3/keyvaluestore_keyvalues/fetch_files/{id} | Retrieves a keyvaluestore_keyvalues resource. |
| [**keyValueGetBySlug()**](KeyvaluestoreKeyvaluesApi.md#keyValueGetBySlug) | **GET** /open-api/v3/keyvaluestore_keyvalues/by_slug/{slug} | Retrieves a keyvaluestore_keyvalues resource. |
| [**keyValueGetDeleteRelations()**](KeyvaluestoreKeyvaluesApi.md#keyValueGetDeleteRelations) | **GET** /open-api/v3/keyvaluestore_keyvalues/get_delete_relations/{id} | Retrieves a keyvaluestore_keyvalues resource. |
| [**keyValueGetTransformedValue()**](KeyvaluestoreKeyvaluesApi.md#keyValueGetTransformedValue) | **GET** /open-api/v3/keyvaluestore_keyvalues/get_transformed_value/{key}/{type} | Retrieves a keyvaluestore_keyvalues resource. |
| [**keyValueGetValueByPriority()**](KeyvaluestoreKeyvaluesApi.md#keyValueGetValueByPriority) | **GET** /open-api/v3/keyvaluestore_keyvalues/get_value_by_priority/{key} | Retrieves a keyvaluestore_keyvalues resource. |
| [**keyValueMetadata()**](KeyvaluestoreKeyvaluesApi.md#keyValueMetadata) | **GET** /open-api/v3/keyvaluestore_keyvalues/metadata/{id} | Retrieves a keyvaluestore_keyvalues resource. |
| [**keyValuesManagerGet()**](KeyvaluestoreKeyvaluesApi.md#keyValuesManagerGet) | **POST** /open-api/v3/keyvaluestore_keyvalues/manager/get | Creates a keyvaluestore_keyvalues resource. |
| [**keyValuesManagerGetAll()**](KeyvaluestoreKeyvaluesApi.md#keyValuesManagerGetAll) | **POST** /open-api/v3/keyvaluestore_keyvalues/manager/get/all | Creates a keyvaluestore_keyvalues resource. |


## `apiKeyvaluestoreKeyvaluesGetCollection()`

```php
apiKeyvaluestoreKeyvaluesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $key, $key2, $clearance_level, $clearance_level2, $value, $value2, $user, $user2, $corporation, $corporation2, $search, $key_prefix, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_clearance_level, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $key_partial, $key_start_with, $key_end_with, $value_partial, $value_start_with, $value_end_with): \OpenAPI\Client\Model\ApiKeyvaluestoreKeyvaluesGetCollection200Response
```

Retrieves the collection of keyvaluestore_keyvalues resources.

Retrieves the collection of keyvaluestore_keyvalues resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
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
$key = 'key_example'; // string | 
$key2 = array('key_example'); // string[] | 
$clearance_level = 56; // int | 
$clearance_level2 = array(56); // int[] | 
$value = 'value_example'; // string | 
$value2 = array('value_example'); // string[] | 
$user = 'user_example'; // string | 
$user2 = array('user_example'); // string[] | 
$corporation = 'corporation_example'; // string | 
$corporation2 = array('corporation_example'); // string[] | 
$search = 'search_example'; // string | 
$key_prefix = 'key_prefix_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_clearance_level = 'order_clearance_level_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | keyvaluestore_keyvalues slug_partial
$slug_start_with = 'slug_start_with_example'; // string | keyvaluestore_keyvalues slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | keyvaluestore_keyvalues slug_end_with
$id_partial = 'id_partial_example'; // string | keyvaluestore_keyvalues id_partial
$id_start_with = 'id_start_with_example'; // string | keyvaluestore_keyvalues id_start_with
$id_end_with = 'id_end_with_example'; // string | keyvaluestore_keyvalues id_end_with
$key_partial = 'key_partial_example'; // string | keyvaluestore_keyvalues key_partial
$key_start_with = 'key_start_with_example'; // string | keyvaluestore_keyvalues key_start_with
$key_end_with = 'key_end_with_example'; // string | keyvaluestore_keyvalues key_end_with
$value_partial = 'value_partial_example'; // string | keyvaluestore_keyvalues value_partial
$value_start_with = 'value_start_with_example'; // string | keyvaluestore_keyvalues value_start_with
$value_end_with = 'value_end_with_example'; // string | keyvaluestore_keyvalues value_end_with

try {
    $result = $apiInstance->apiKeyvaluestoreKeyvaluesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $key, $key2, $clearance_level, $clearance_level2, $value, $value2, $user, $user2, $corporation, $corporation2, $search, $key_prefix, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_clearance_level, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $key_partial, $key_start_with, $key_end_with, $value_partial, $value_start_with, $value_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->apiKeyvaluestoreKeyvaluesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **key** | **string**|  | [optional] |
| **key2** | [**string[]**](../Model/string.md)|  | [optional] |
| **clearance_level** | **int**|  | [optional] |
| **clearance_level2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value** | **string**|  | [optional] |
| **value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **user** | **string**|  | [optional] |
| **user2** | [**string[]**](../Model/string.md)|  | [optional] |
| **corporation** | **string**|  | [optional] |
| **corporation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **key_prefix** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_clearance_level** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| keyvaluestore_keyvalues slug_partial | [optional] |
| **slug_start_with** | **string**| keyvaluestore_keyvalues slug_start_with | [optional] |
| **slug_end_with** | **string**| keyvaluestore_keyvalues slug_end_with | [optional] |
| **id_partial** | **string**| keyvaluestore_keyvalues id_partial | [optional] |
| **id_start_with** | **string**| keyvaluestore_keyvalues id_start_with | [optional] |
| **id_end_with** | **string**| keyvaluestore_keyvalues id_end_with | [optional] |
| **key_partial** | **string**| keyvaluestore_keyvalues key_partial | [optional] |
| **key_start_with** | **string**| keyvaluestore_keyvalues key_start_with | [optional] |
| **key_end_with** | **string**| keyvaluestore_keyvalues key_end_with | [optional] |
| **value_partial** | **string**| keyvaluestore_keyvalues value_partial | [optional] |
| **value_start_with** | **string**| keyvaluestore_keyvalues value_start_with | [optional] |
| **value_end_with** | **string**| keyvaluestore_keyvalues value_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiKeyvaluestoreKeyvaluesGetCollection200Response**](../Model/ApiKeyvaluestoreKeyvaluesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiKeyvaluestoreKeyvaluesIdDelete()`

```php
apiKeyvaluestoreKeyvaluesIdDelete($id)
```

Removes the keyvaluestore_keyvalues resource.

Removes the keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier

try {
    $apiInstance->apiKeyvaluestoreKeyvaluesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->apiKeyvaluestoreKeyvaluesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |

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

## `apiKeyvaluestoreKeyvaluesIdGet()`

```php
apiKeyvaluestoreKeyvaluesIdGet($id): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Retrieves a keyvaluestore_keyvalues resource.

Retrieves a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->apiKeyvaluestoreKeyvaluesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->apiKeyvaluestoreKeyvaluesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/KeyvaluestoreKeyvaluesJsonldKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiKeyvaluestoreKeyvaluesIdPut()`

```php
apiKeyvaluestoreKeyvaluesIdPut($id, $keyvaluestore_keyvalues_jsonld_post): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldStandardShowKeyValueShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the keyvaluestore_keyvalues resource.

Replaces the keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier
$keyvaluestore_keyvalues_jsonld_post = new \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldPost(); // \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldPost | The updated keyvaluestore_keyvalues resource

try {
    $result = $apiInstance->apiKeyvaluestoreKeyvaluesIdPut($id, $keyvaluestore_keyvalues_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->apiKeyvaluestoreKeyvaluesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |
| **keyvaluestore_keyvalues_jsonld_post** | [**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldPost**](../Model/KeyvaluestoreKeyvaluesJsonldPost.md)| The updated keyvaluestore_keyvalues resource | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldStandardShowKeyValueShowIdTimestampableTagTaggingListNoteRelations**](../Model/KeyvaluestoreKeyvaluesJsonldStandardShowKeyValueShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiKeyvaluestoreKeyvaluesPost()`

```php
apiKeyvaluestoreKeyvaluesPost($keyvaluestore_keyvalues_jsonld_add_post): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldStandardShowKeyValueShowIdTimestampableTagTaggingListNoteRelations
```

Creates a keyvaluestore_keyvalues resource.

Creates a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyvaluestore_keyvalues_jsonld_add_post = new \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldAddPost(); // \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldAddPost | The new keyvaluestore_keyvalues resource

try {
    $result = $apiInstance->apiKeyvaluestoreKeyvaluesPost($keyvaluestore_keyvalues_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->apiKeyvaluestoreKeyvaluesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyvaluestore_keyvalues_jsonld_add_post** | [**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldAddPost**](../Model/KeyvaluestoreKeyvaluesJsonldAddPost.md)| The new keyvaluestore_keyvalues resource | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldStandardShowKeyValueShowIdTimestampableTagTaggingListNoteRelations**](../Model/KeyvaluestoreKeyvaluesJsonldStandardShowKeyValueShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueApiFileUpload()`

```php
keyValueApiFileUpload($id, $keyvaluestore_keyvalues_jsonld): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdTimestampableTagTaggingListStandardShow
```

Creates a keyvaluestore_keyvalues resource.

Creates a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier
$keyvaluestore_keyvalues_jsonld = new \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld(); // \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld | The new keyvaluestore_keyvalues resource

try {
    $result = $apiInstance->keyValueApiFileUpload($id, $keyvaluestore_keyvalues_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |
| **keyvaluestore_keyvalues_jsonld** | [**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)| The new keyvaluestore_keyvalues resource | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdTimestampableTagTaggingListStandardShow**](../Model/KeyvaluestoreKeyvaluesJsonldKeyValueShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueClearanceLevelListing()`

```php
keyValueClearanceLevelListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $key, $key2, $clearance_level, $clearance_level2, $value, $value2, $user, $user2, $corporation, $corporation2, $search, $key_prefix, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_clearance_level, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $key_partial, $key_start_with, $key_end_with, $value_partial, $value_start_with, $value_end_with): \OpenAPI\Client\Model\KeyValueClearanceLevelListing200Response
```

Retrieves the collection of keyvaluestore_keyvalues resources.

Retrieves the collection of keyvaluestore_keyvalues resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
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
$key = 'key_example'; // string | 
$key2 = array('key_example'); // string[] | 
$clearance_level = 56; // int | 
$clearance_level2 = array(56); // int[] | 
$value = 'value_example'; // string | 
$value2 = array('value_example'); // string[] | 
$user = 'user_example'; // string | 
$user2 = array('user_example'); // string[] | 
$corporation = 'corporation_example'; // string | 
$corporation2 = array('corporation_example'); // string[] | 
$search = 'search_example'; // string | 
$key_prefix = 'key_prefix_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_clearance_level = 'order_clearance_level_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | keyvaluestore_keyvalues slug_partial
$slug_start_with = 'slug_start_with_example'; // string | keyvaluestore_keyvalues slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | keyvaluestore_keyvalues slug_end_with
$id_partial = 'id_partial_example'; // string | keyvaluestore_keyvalues id_partial
$id_start_with = 'id_start_with_example'; // string | keyvaluestore_keyvalues id_start_with
$id_end_with = 'id_end_with_example'; // string | keyvaluestore_keyvalues id_end_with
$key_partial = 'key_partial_example'; // string | keyvaluestore_keyvalues key_partial
$key_start_with = 'key_start_with_example'; // string | keyvaluestore_keyvalues key_start_with
$key_end_with = 'key_end_with_example'; // string | keyvaluestore_keyvalues key_end_with
$value_partial = 'value_partial_example'; // string | keyvaluestore_keyvalues value_partial
$value_start_with = 'value_start_with_example'; // string | keyvaluestore_keyvalues value_start_with
$value_end_with = 'value_end_with_example'; // string | keyvaluestore_keyvalues value_end_with

try {
    $result = $apiInstance->keyValueClearanceLevelListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $key, $key2, $clearance_level, $clearance_level2, $value, $value2, $user, $user2, $corporation, $corporation2, $search, $key_prefix, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_clearance_level, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $key_partial, $key_start_with, $key_end_with, $value_partial, $value_start_with, $value_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueClearanceLevelListing: ', $e->getMessage(), PHP_EOL;
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
| **key** | **string**|  | [optional] |
| **key2** | [**string[]**](../Model/string.md)|  | [optional] |
| **clearance_level** | **int**|  | [optional] |
| **clearance_level2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value** | **string**|  | [optional] |
| **value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **user** | **string**|  | [optional] |
| **user2** | [**string[]**](../Model/string.md)|  | [optional] |
| **corporation** | **string**|  | [optional] |
| **corporation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **key_prefix** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_clearance_level** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| keyvaluestore_keyvalues slug_partial | [optional] |
| **slug_start_with** | **string**| keyvaluestore_keyvalues slug_start_with | [optional] |
| **slug_end_with** | **string**| keyvaluestore_keyvalues slug_end_with | [optional] |
| **id_partial** | **string**| keyvaluestore_keyvalues id_partial | [optional] |
| **id_start_with** | **string**| keyvaluestore_keyvalues id_start_with | [optional] |
| **id_end_with** | **string**| keyvaluestore_keyvalues id_end_with | [optional] |
| **key_partial** | **string**| keyvaluestore_keyvalues key_partial | [optional] |
| **key_start_with** | **string**| keyvaluestore_keyvalues key_start_with | [optional] |
| **key_end_with** | **string**| keyvaluestore_keyvalues key_end_with | [optional] |
| **value_partial** | **string**| keyvaluestore_keyvalues value_partial | [optional] |
| **value_start_with** | **string**| keyvaluestore_keyvalues value_start_with | [optional] |
| **value_end_with** | **string**| keyvaluestore_keyvalues value_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\KeyValueClearanceLevelListing200Response**](../Model/KeyValueClearanceLevelListing200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueDropDown()`

```php
keyValueDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $key, $key2, $clearance_level, $clearance_level2, $value, $value2, $user, $user2, $corporation, $corporation2, $search, $key_prefix, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_clearance_level, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $key_partial, $key_start_with, $key_end_with, $value_partial, $value_start_with, $value_end_with): \OpenAPI\Client\Model\KeyValueDropDown200Response
```

Retrieves the collection of keyvaluestore_keyvalues resources.

Retrieves the collection of keyvaluestore_keyvalues resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
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
$key = 'key_example'; // string | 
$key2 = array('key_example'); // string[] | 
$clearance_level = 56; // int | 
$clearance_level2 = array(56); // int[] | 
$value = 'value_example'; // string | 
$value2 = array('value_example'); // string[] | 
$user = 'user_example'; // string | 
$user2 = array('user_example'); // string[] | 
$corporation = 'corporation_example'; // string | 
$corporation2 = array('corporation_example'); // string[] | 
$search = 'search_example'; // string | 
$key_prefix = 'key_prefix_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_clearance_level = 'order_clearance_level_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | keyvaluestore_keyvalues slug_partial
$slug_start_with = 'slug_start_with_example'; // string | keyvaluestore_keyvalues slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | keyvaluestore_keyvalues slug_end_with
$id_partial = 'id_partial_example'; // string | keyvaluestore_keyvalues id_partial
$id_start_with = 'id_start_with_example'; // string | keyvaluestore_keyvalues id_start_with
$id_end_with = 'id_end_with_example'; // string | keyvaluestore_keyvalues id_end_with
$key_partial = 'key_partial_example'; // string | keyvaluestore_keyvalues key_partial
$key_start_with = 'key_start_with_example'; // string | keyvaluestore_keyvalues key_start_with
$key_end_with = 'key_end_with_example'; // string | keyvaluestore_keyvalues key_end_with
$value_partial = 'value_partial_example'; // string | keyvaluestore_keyvalues value_partial
$value_start_with = 'value_start_with_example'; // string | keyvaluestore_keyvalues value_start_with
$value_end_with = 'value_end_with_example'; // string | keyvaluestore_keyvalues value_end_with

try {
    $result = $apiInstance->keyValueDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $key, $key2, $clearance_level, $clearance_level2, $value, $value2, $user, $user2, $corporation, $corporation2, $search, $key_prefix, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_clearance_level, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $key_partial, $key_start_with, $key_end_with, $value_partial, $value_start_with, $value_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueDropDown: ', $e->getMessage(), PHP_EOL;
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
| **key** | **string**|  | [optional] |
| **key2** | [**string[]**](../Model/string.md)|  | [optional] |
| **clearance_level** | **int**|  | [optional] |
| **clearance_level2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value** | **string**|  | [optional] |
| **value2** | [**string[]**](../Model/string.md)|  | [optional] |
| **user** | **string**|  | [optional] |
| **user2** | [**string[]**](../Model/string.md)|  | [optional] |
| **corporation** | **string**|  | [optional] |
| **corporation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **key_prefix** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_clearance_level** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| keyvaluestore_keyvalues slug_partial | [optional] |
| **slug_start_with** | **string**| keyvaluestore_keyvalues slug_start_with | [optional] |
| **slug_end_with** | **string**| keyvaluestore_keyvalues slug_end_with | [optional] |
| **id_partial** | **string**| keyvaluestore_keyvalues id_partial | [optional] |
| **id_start_with** | **string**| keyvaluestore_keyvalues id_start_with | [optional] |
| **id_end_with** | **string**| keyvaluestore_keyvalues id_end_with | [optional] |
| **key_partial** | **string**| keyvaluestore_keyvalues key_partial | [optional] |
| **key_start_with** | **string**| keyvaluestore_keyvalues key_start_with | [optional] |
| **key_end_with** | **string**| keyvaluestore_keyvalues key_end_with | [optional] |
| **value_partial** | **string**| keyvaluestore_keyvalues value_partial | [optional] |
| **value_start_with** | **string**| keyvaluestore_keyvalues value_start_with | [optional] |
| **value_end_with** | **string**| keyvaluestore_keyvalues value_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\KeyValueDropDown200Response**](../Model/KeyValueDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueDuplicate()`

```php
keyValueDuplicate($id): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdTimestampableTagTaggingList
```

Retrieves a keyvaluestore_keyvalues resource.

Retrieves a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->keyValueDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdTimestampableTagTaggingList**](../Model/KeyvaluestoreKeyvaluesJsonldKeyValueShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueFetchFiles()`

```php
keyValueFetchFiles($id): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld
```

Retrieves a keyvaluestore_keyvalues resource.

Retrieves a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->keyValueFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueGetBySlug()`

```php
keyValueGetBySlug($slug): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Retrieves a keyvaluestore_keyvalues resource.

Retrieves a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->keyValueGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/KeyvaluestoreKeyvaluesJsonldKeyValueShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueGetDeleteRelations()`

```php
keyValueGetDeleteRelations($id): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueRelations
```

Retrieves a keyvaluestore_keyvalues resource.

Retrieves a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->keyValueGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldKeyValueRelations**](../Model/KeyvaluestoreKeyvaluesJsonldKeyValueRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueGetTransformedValue()`

```php
keyValueGetTransformedValue($key, $type): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld
```

Retrieves a keyvaluestore_keyvalues resource.

Endpoint to get the transformed value of a KVS by Key and Type.               Default type: string (must be added for now in the path, it does not put it by default).              To obtain a contextual result, for example currentCorporation, use string as Type.              Types (as of 2024-05-12): boolean, int, string, date, datetime, time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | keyvaluestore_keyvalues identifier
$type = 'type_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->keyValueGetTransformedValue($key, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueGetTransformedValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| keyvaluestore_keyvalues identifier | |
| **type** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueGetValueByPriority()`

```php
keyValueGetValueByPriority($id): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld
```

Retrieves a keyvaluestore_keyvalues resource.

Endpoint to get the KVS value using the KVS manager. Ex: feature toggle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->keyValueGetValueByPriority($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueGetValueByPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValueMetadata()`

```php
keyValueMetadata($id): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldIdStandardMetadataKeyValueMetadataTagTaggingListKeyValueRelationsTimestampable
```

Retrieves a keyvaluestore_keyvalues resource.

Retrieves a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | keyvaluestore_keyvalues identifier

try {
    $result = $apiInstance->keyValueMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValueMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| keyvaluestore_keyvalues identifier | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonldIdStandardMetadataKeyValueMetadataTagTaggingListKeyValueRelationsTimestampable**](../Model/KeyvaluestoreKeyvaluesJsonldIdStandardMetadataKeyValueMetadataTagTaggingListKeyValueRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValuesManagerGet()`

```php
keyValuesManagerGet($keyvaluestore_keyvalues_jsonld): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld
```

Creates a keyvaluestore_keyvalues resource.

Creates a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyvaluestore_keyvalues_jsonld = new \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld(); // \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld | The new keyvaluestore_keyvalues resource

try {
    $result = $apiInstance->keyValuesManagerGet($keyvaluestore_keyvalues_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValuesManagerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyvaluestore_keyvalues_jsonld** | [**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)| The new keyvaluestore_keyvalues resource | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keyValuesManagerGetAll()`

```php
keyValuesManagerGetAll($keyvaluestore_keyvalues_jsonld): \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld
```

Creates a keyvaluestore_keyvalues resource.

Creates a keyvaluestore_keyvalues resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KeyvaluestoreKeyvaluesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyvaluestore_keyvalues_jsonld = new \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld(); // \OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld | The new keyvaluestore_keyvalues resource

try {
    $result = $apiInstance->keyValuesManagerGetAll($keyvaluestore_keyvalues_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyvaluestoreKeyvaluesApi->keyValuesManagerGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyvaluestore_keyvalues_jsonld** | [**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)| The new keyvaluestore_keyvalues resource | |

### Return type

[**\OpenAPI\Client\Model\KeyvaluestoreKeyvaluesJsonld**](../Model/KeyvaluestoreKeyvaluesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
