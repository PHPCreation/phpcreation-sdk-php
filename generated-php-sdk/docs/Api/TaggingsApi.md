# OpenAPI\Client\TaggingsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTaggingsGetCollection()**](TaggingsApi.md#apiTaggingsGetCollection) | **GET** /open-api/v3/taggings | Retrieves the collection of taggings resources. |
| [**apiTaggingsIdDelete()**](TaggingsApi.md#apiTaggingsIdDelete) | **DELETE** /open-api/v3/taggings/{id} | Removes the taggings resource. |
| [**apiTaggingsIdGet()**](TaggingsApi.md#apiTaggingsIdGet) | **GET** /open-api/v3/taggings/{id} | Retrieves a taggings resource. |
| [**apiTaggingsIdPut()**](TaggingsApi.md#apiTaggingsIdPut) | **PUT** /open-api/v3/taggings/{id} | Replaces the taggings resource. |
| [**apiTaggingsPost()**](TaggingsApi.md#apiTaggingsPost) | **POST** /open-api/v3/taggings | Creates a taggings resource. |
| [**tagTaggingApiFileUpload()**](TaggingsApi.md#tagTaggingApiFileUpload) | **POST** /open-api/v3/taggings/{id}/file/upload | Creates a taggings resource. |
| [**tagTaggingDropDown()**](TaggingsApi.md#tagTaggingDropDown) | **GET** /open-api/v3/taggings/dropdown/get | Retrieves the collection of taggings resources. |
| [**tagTaggingFetchFiles()**](TaggingsApi.md#tagTaggingFetchFiles) | **GET** /open-api/v3/taggings/fetch_files/{id} | Retrieves a taggings resource. |
| [**tagTaggingGetBySlug()**](TaggingsApi.md#tagTaggingGetBySlug) | **GET** /open-api/v3/taggings/by_slug/{slug} | Retrieves a taggings resource. |
| [**tagTaggingGetDeleteRelations()**](TaggingsApi.md#tagTaggingGetDeleteRelations) | **GET** /open-api/v3/taggings/get_delete_relations/{id} | Retrieves a taggings resource. |
| [**tagTaggingMetadata()**](TaggingsApi.md#tagTaggingMetadata) | **GET** /open-api/v3/taggings/metadata/{id} | Retrieves a taggings resource. |


## `apiTaggingsGetCollection()`

```php
apiTaggingsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $tag, $tag2, $resource_type, $resource_type2, $resource_id, $resource_id2, $search, $properties, $enabled, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $resource_type_partial, $resource_type_start_with, $resource_type_end_with, $resource_id_partial, $resource_id_start_with, $resource_id_end_with): \OpenAPI\Client\Model\ApiTaggingsGetCollection200Response
```

Retrieves the collection of taggings resources.

Retrieves the collection of taggings resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
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
$tag = 'tag_example'; // string | 
$tag2 = array('tag_example'); // string[] | 
$resource_type = 'resource_type_example'; // string | 
$resource_type2 = array('resource_type_example'); // string[] | 
$resource_id = 'resource_id_example'; // string | 
$resource_id2 = array('resource_id_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | taggings slug_partial
$slug_start_with = 'slug_start_with_example'; // string | taggings slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | taggings slug_end_with
$id_partial = 'id_partial_example'; // string | taggings id_partial
$id_start_with = 'id_start_with_example'; // string | taggings id_start_with
$id_end_with = 'id_end_with_example'; // string | taggings id_end_with
$resource_type_partial = 'resource_type_partial_example'; // string | taggings resourceType_partial
$resource_type_start_with = 'resource_type_start_with_example'; // string | taggings resourceType_start_with
$resource_type_end_with = 'resource_type_end_with_example'; // string | taggings resourceType_end_with
$resource_id_partial = 'resource_id_partial_example'; // string | taggings resourceId_partial
$resource_id_start_with = 'resource_id_start_with_example'; // string | taggings resourceId_start_with
$resource_id_end_with = 'resource_id_end_with_example'; // string | taggings resourceId_end_with

try {
    $result = $apiInstance->apiTaggingsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $tag, $tag2, $resource_type, $resource_type2, $resource_id, $resource_id2, $search, $properties, $enabled, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $resource_type_partial, $resource_type_start_with, $resource_type_end_with, $resource_id_partial, $resource_id_start_with, $resource_id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->apiTaggingsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **tag** | **string**|  | [optional] |
| **tag2** | [**string[]**](../Model/string.md)|  | [optional] |
| **resource_type** | **string**|  | [optional] |
| **resource_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **resource_id** | **string**|  | [optional] |
| **resource_id2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| taggings slug_partial | [optional] |
| **slug_start_with** | **string**| taggings slug_start_with | [optional] |
| **slug_end_with** | **string**| taggings slug_end_with | [optional] |
| **id_partial** | **string**| taggings id_partial | [optional] |
| **id_start_with** | **string**| taggings id_start_with | [optional] |
| **id_end_with** | **string**| taggings id_end_with | [optional] |
| **resource_type_partial** | **string**| taggings resourceType_partial | [optional] |
| **resource_type_start_with** | **string**| taggings resourceType_start_with | [optional] |
| **resource_type_end_with** | **string**| taggings resourceType_end_with | [optional] |
| **resource_id_partial** | **string**| taggings resourceId_partial | [optional] |
| **resource_id_start_with** | **string**| taggings resourceId_start_with | [optional] |
| **resource_id_end_with** | **string**| taggings resourceId_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTaggingsGetCollection200Response**](../Model/ApiTaggingsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTaggingsIdDelete()`

```php
apiTaggingsIdDelete($id)
```

Removes the taggings resource.

Removes the taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | taggings identifier

try {
    $apiInstance->apiTaggingsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->apiTaggingsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| taggings identifier | |

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

## `apiTaggingsIdGet()`

```php
apiTaggingsIdGet($id): \OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a taggings resource.

Retrieves a taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | taggings identifier

try {
    $result = $apiInstance->apiTaggingsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->apiTaggingsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| taggings identifier | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTaggingsIdPut()`

```php
apiTaggingsIdPut($id, $taggings_jsonld_add_post): \OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the taggings resource.

Replaces the taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | taggings identifier
$taggings_jsonld_add_post = new \OpenAPI\Client\Model\TaggingsJsonldAddPost(); // \OpenAPI\Client\Model\TaggingsJsonldAddPost | The updated taggings resource

try {
    $result = $apiInstance->apiTaggingsIdPut($id, $taggings_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->apiTaggingsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| taggings identifier | |
| **taggings_jsonld_add_post** | [**\OpenAPI\Client\Model\TaggingsJsonldAddPost**](../Model/TaggingsJsonldAddPost.md)| The updated taggings resource | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTaggingsPost()`

```php
apiTaggingsPost($taggings_jsonld_add_post): \OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a taggings resource.

Creates a taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taggings_jsonld_add_post = new \OpenAPI\Client\Model\TaggingsJsonldAddPost(); // \OpenAPI\Client\Model\TaggingsJsonldAddPost | The new taggings resource

try {
    $result = $apiInstance->apiTaggingsPost($taggings_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->apiTaggingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taggings_jsonld_add_post** | [**\OpenAPI\Client\Model\TaggingsJsonldAddPost**](../Model/TaggingsJsonldAddPost.md)| The new taggings resource | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagTaggingApiFileUpload()`

```php
tagTaggingApiFileUpload($id, $taggings_jsonld): \OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a taggings resource.

Creates a taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | taggings identifier
$taggings_jsonld = new \OpenAPI\Client\Model\TaggingsJsonld(); // \OpenAPI\Client\Model\TaggingsJsonld | The new taggings resource

try {
    $result = $apiInstance->tagTaggingApiFileUpload($id, $taggings_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->tagTaggingApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| taggings identifier | |
| **taggings_jsonld** | [**\OpenAPI\Client\Model\TaggingsJsonld**](../Model/TaggingsJsonld.md)| The new taggings resource | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagTaggingDropDown()`

```php
tagTaggingDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $tag, $tag2, $resource_type, $resource_type2, $resource_id, $resource_id2, $search, $properties, $enabled, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $resource_type_partial, $resource_type_start_with, $resource_type_end_with, $resource_id_partial, $resource_id_start_with, $resource_id_end_with): \OpenAPI\Client\Model\TagTaggingDropDown200Response
```

Retrieves the collection of taggings resources.

Retrieves the collection of taggings resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
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
$tag = 'tag_example'; // string | 
$tag2 = array('tag_example'); // string[] | 
$resource_type = 'resource_type_example'; // string | 
$resource_type2 = array('resource_type_example'); // string[] | 
$resource_id = 'resource_id_example'; // string | 
$resource_id2 = array('resource_id_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | taggings slug_partial
$slug_start_with = 'slug_start_with_example'; // string | taggings slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | taggings slug_end_with
$id_partial = 'id_partial_example'; // string | taggings id_partial
$id_start_with = 'id_start_with_example'; // string | taggings id_start_with
$id_end_with = 'id_end_with_example'; // string | taggings id_end_with
$resource_type_partial = 'resource_type_partial_example'; // string | taggings resourceType_partial
$resource_type_start_with = 'resource_type_start_with_example'; // string | taggings resourceType_start_with
$resource_type_end_with = 'resource_type_end_with_example'; // string | taggings resourceType_end_with
$resource_id_partial = 'resource_id_partial_example'; // string | taggings resourceId_partial
$resource_id_start_with = 'resource_id_start_with_example'; // string | taggings resourceId_start_with
$resource_id_end_with = 'resource_id_end_with_example'; // string | taggings resourceId_end_with

try {
    $result = $apiInstance->tagTaggingDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $tag, $tag2, $resource_type, $resource_type2, $resource_id, $resource_id2, $search, $properties, $enabled, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $resource_type_partial, $resource_type_start_with, $resource_type_end_with, $resource_id_partial, $resource_id_start_with, $resource_id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->tagTaggingDropDown: ', $e->getMessage(), PHP_EOL;
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
| **tag** | **string**|  | [optional] |
| **tag2** | [**string[]**](../Model/string.md)|  | [optional] |
| **resource_type** | **string**|  | [optional] |
| **resource_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **resource_id** | **string**|  | [optional] |
| **resource_id2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| taggings slug_partial | [optional] |
| **slug_start_with** | **string**| taggings slug_start_with | [optional] |
| **slug_end_with** | **string**| taggings slug_end_with | [optional] |
| **id_partial** | **string**| taggings id_partial | [optional] |
| **id_start_with** | **string**| taggings id_start_with | [optional] |
| **id_end_with** | **string**| taggings id_end_with | [optional] |
| **resource_type_partial** | **string**| taggings resourceType_partial | [optional] |
| **resource_type_start_with** | **string**| taggings resourceType_start_with | [optional] |
| **resource_type_end_with** | **string**| taggings resourceType_end_with | [optional] |
| **resource_id_partial** | **string**| taggings resourceId_partial | [optional] |
| **resource_id_start_with** | **string**| taggings resourceId_start_with | [optional] |
| **resource_id_end_with** | **string**| taggings resourceId_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\TagTaggingDropDown200Response**](../Model/TagTaggingDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagTaggingFetchFiles()`

```php
tagTaggingFetchFiles($id): \OpenAPI\Client\Model\TaggingsJsonld
```

Retrieves a taggings resource.

Retrieves a taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | taggings identifier

try {
    $result = $apiInstance->tagTaggingFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->tagTaggingFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| taggings identifier | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonld**](../Model/TaggingsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagTaggingGetBySlug()`

```php
tagTaggingGetBySlug($slug): \OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a taggings resource.

Retrieves a taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | taggings identifier

try {
    $result = $apiInstance->tagTaggingGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->tagTaggingGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| taggings identifier | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/TaggingsJsonldTagTaggingShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagTaggingGetDeleteRelations()`

```php
tagTaggingGetDeleteRelations($id): \OpenAPI\Client\Model\TaggingsJsonldTagTaggingRelations
```

Retrieves a taggings resource.

Retrieves a taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | taggings identifier

try {
    $result = $apiInstance->tagTaggingGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->tagTaggingGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| taggings identifier | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonldTagTaggingRelations**](../Model/TaggingsJsonldTagTaggingRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagTaggingMetadata()`

```php
tagTaggingMetadata($id): \OpenAPI\Client\Model\TaggingsJsonldIdStandardMetadataTagTaggingMetadataTagTaggingListTagTaggingRelationsTimestampable
```

Retrieves a taggings resource.

Retrieves a taggings resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaggingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | taggings identifier

try {
    $result = $apiInstance->tagTaggingMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaggingsApi->tagTaggingMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| taggings identifier | |

### Return type

[**\OpenAPI\Client\Model\TaggingsJsonldIdStandardMetadataTagTaggingMetadataTagTaggingListTagTaggingRelationsTimestampable**](../Model/TaggingsJsonldIdStandardMetadataTagTaggingMetadataTagTaggingListTagTaggingRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
