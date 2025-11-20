# OpenAPI\Client\MetaEntitiesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiMetaEntitiesGetCollection()**](MetaEntitiesApi.md#apiMetaEntitiesGetCollection) | **GET** /open-api/v3/meta_entities | Retrieves the collection of meta_entities resources. |
| [**apiMetaEntitiesIdDelete()**](MetaEntitiesApi.md#apiMetaEntitiesIdDelete) | **DELETE** /open-api/v3/meta_entities/{id} | Removes the meta_entities resource. |
| [**apiMetaEntitiesIdGet()**](MetaEntitiesApi.md#apiMetaEntitiesIdGet) | **GET** /open-api/v3/meta_entities/{id} | Retrieves a meta_entities resource. |
| [**apiMetaEntitiesIdPut()**](MetaEntitiesApi.md#apiMetaEntitiesIdPut) | **PUT** /open-api/v3/meta_entities/{id} | Replaces the meta_entities resource. |
| [**apiMetaEntitiesPost()**](MetaEntitiesApi.md#apiMetaEntitiesPost) | **POST** /open-api/v3/meta_entities | Creates a meta_entities resource. |
| [**metaEntityApiFileUpload()**](MetaEntitiesApi.md#metaEntityApiFileUpload) | **POST** /open-api/v3/meta_entities/{id}/file/upload | Creates a meta_entities resource. |
| [**metaEntityDropDown()**](MetaEntitiesApi.md#metaEntityDropDown) | **GET** /open-api/v3/meta_entities/dropdown/get | Retrieves the collection of meta_entities resources. |
| [**metaEntityDuplicate()**](MetaEntitiesApi.md#metaEntityDuplicate) | **GET** /open-api/v3/meta_entities/duplicate/{id} | Retrieves a meta_entities resource. |
| [**metaEntityFetchFiles()**](MetaEntitiesApi.md#metaEntityFetchFiles) | **GET** /open-api/v3/meta_entities/fetch_files/{id} | Retrieves a meta_entities resource. |
| [**metaEntityGetBySlug()**](MetaEntitiesApi.md#metaEntityGetBySlug) | **GET** /open-api/v3/meta_entities/by_slug/{slug} | Retrieves a meta_entities resource. |
| [**metaEntityGetDeleteRelations()**](MetaEntitiesApi.md#metaEntityGetDeleteRelations) | **GET** /open-api/v3/meta_entities/get_delete_relations/{id} | Retrieves a meta_entities resource. |
| [**metaEntityMetadata()**](MetaEntitiesApi.md#metaEntityMetadata) | **GET** /open-api/v3/meta_entities/metadata/{id} | Retrieves a meta_entities resource. |


## `apiMetaEntitiesGetCollection()`

```php
apiMetaEntitiesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $fqcn, $fqcn2, $table_name, $table_name2, $entity_api_shortname, $entity_api_shortname2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $fqcn_partial, $fqcn_start_with, $fqcn_end_with, $table_name_partial, $table_name_start_with, $table_name_end_with, $entity_api_shortname_partial, $entity_api_shortname_start_with, $entity_api_shortname_end_with): \OpenAPI\Client\Model\ApiMetaEntitiesGetCollection200Response
```

Retrieves the collection of meta_entities resources.

Retrieves the collection of meta_entities resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
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
$fqcn = 'fqcn_example'; // string | 
$fqcn2 = array('fqcn_example'); // string[] | 
$table_name = 'table_name_example'; // string | 
$table_name2 = array('table_name_example'); // string[] | 
$entity_api_shortname = 'entity_api_shortname_example'; // string | 
$entity_api_shortname2 = array('entity_api_shortname_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | meta_entities slug_partial
$slug_start_with = 'slug_start_with_example'; // string | meta_entities slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | meta_entities slug_end_with
$id_partial = 'id_partial_example'; // string | meta_entities id_partial
$id_start_with = 'id_start_with_example'; // string | meta_entities id_start_with
$id_end_with = 'id_end_with_example'; // string | meta_entities id_end_with
$fqcn_partial = 'fqcn_partial_example'; // string | meta_entities FQCN_partial
$fqcn_start_with = 'fqcn_start_with_example'; // string | meta_entities FQCN_start_with
$fqcn_end_with = 'fqcn_end_with_example'; // string | meta_entities FQCN_end_with
$table_name_partial = 'table_name_partial_example'; // string | meta_entities tableName_partial
$table_name_start_with = 'table_name_start_with_example'; // string | meta_entities tableName_start_with
$table_name_end_with = 'table_name_end_with_example'; // string | meta_entities tableName_end_with
$entity_api_shortname_partial = 'entity_api_shortname_partial_example'; // string | meta_entities entityApiShortname_partial
$entity_api_shortname_start_with = 'entity_api_shortname_start_with_example'; // string | meta_entities entityApiShortname_start_with
$entity_api_shortname_end_with = 'entity_api_shortname_end_with_example'; // string | meta_entities entityApiShortname_end_with

try {
    $result = $apiInstance->apiMetaEntitiesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $fqcn, $fqcn2, $table_name, $table_name2, $entity_api_shortname, $entity_api_shortname2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $fqcn_partial, $fqcn_start_with, $fqcn_end_with, $table_name_partial, $table_name_start_with, $table_name_end_with, $entity_api_shortname_partial, $entity_api_shortname_start_with, $entity_api_shortname_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->apiMetaEntitiesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **fqcn** | **string**|  | [optional] |
| **fqcn2** | [**string[]**](../Model/string.md)|  | [optional] |
| **table_name** | **string**|  | [optional] |
| **table_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **entity_api_shortname** | **string**|  | [optional] |
| **entity_api_shortname2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| meta_entities slug_partial | [optional] |
| **slug_start_with** | **string**| meta_entities slug_start_with | [optional] |
| **slug_end_with** | **string**| meta_entities slug_end_with | [optional] |
| **id_partial** | **string**| meta_entities id_partial | [optional] |
| **id_start_with** | **string**| meta_entities id_start_with | [optional] |
| **id_end_with** | **string**| meta_entities id_end_with | [optional] |
| **fqcn_partial** | **string**| meta_entities FQCN_partial | [optional] |
| **fqcn_start_with** | **string**| meta_entities FQCN_start_with | [optional] |
| **fqcn_end_with** | **string**| meta_entities FQCN_end_with | [optional] |
| **table_name_partial** | **string**| meta_entities tableName_partial | [optional] |
| **table_name_start_with** | **string**| meta_entities tableName_start_with | [optional] |
| **table_name_end_with** | **string**| meta_entities tableName_end_with | [optional] |
| **entity_api_shortname_partial** | **string**| meta_entities entityApiShortname_partial | [optional] |
| **entity_api_shortname_start_with** | **string**| meta_entities entityApiShortname_start_with | [optional] |
| **entity_api_shortname_end_with** | **string**| meta_entities entityApiShortname_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiMetaEntitiesGetCollection200Response**](../Model/ApiMetaEntitiesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiMetaEntitiesIdDelete()`

```php
apiMetaEntitiesIdDelete($id)
```

Removes the meta_entities resource.

Removes the meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier

try {
    $apiInstance->apiMetaEntitiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->apiMetaEntitiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |

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

## `apiMetaEntitiesIdGet()`

```php
apiMetaEntitiesIdGet($id): \OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty
```

Retrieves a meta_entities resource.

Retrieves a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier

try {
    $result = $apiInstance->apiMetaEntitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->apiMetaEntitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty**](../Model/MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiMetaEntitiesIdPut()`

```php
apiMetaEntitiesIdPut($id, $meta_entities_jsonld_add_post): \OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty
```

Replaces the meta_entities resource.

Replaces the meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier
$meta_entities_jsonld_add_post = new \OpenAPI\Client\Model\MetaEntitiesJsonldAddPost(); // \OpenAPI\Client\Model\MetaEntitiesJsonldAddPost | The updated meta_entities resource

try {
    $result = $apiInstance->apiMetaEntitiesIdPut($id, $meta_entities_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->apiMetaEntitiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |
| **meta_entities_jsonld_add_post** | [**\OpenAPI\Client\Model\MetaEntitiesJsonldAddPost**](../Model/MetaEntitiesJsonldAddPost.md)| The updated meta_entities resource | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty**](../Model/MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiMetaEntitiesPost()`

```php
apiMetaEntitiesPost($meta_entities_jsonld_post_add): \OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowCustomizedIdTimestampableTagTaggingListStandardShow
```

Creates a meta_entities resource.

Creates a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meta_entities_jsonld_post_add = new \OpenAPI\Client\Model\MetaEntitiesJsonldPostAdd(); // \OpenAPI\Client\Model\MetaEntitiesJsonldPostAdd | The new meta_entities resource

try {
    $result = $apiInstance->apiMetaEntitiesPost($meta_entities_jsonld_post_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->apiMetaEntitiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meta_entities_jsonld_post_add** | [**\OpenAPI\Client\Model\MetaEntitiesJsonldPostAdd**](../Model/MetaEntitiesJsonldPostAdd.md)| The new meta_entities resource | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowCustomizedIdTimestampableTagTaggingListStandardShow**](../Model/MetaEntitiesJsonldMetaEntityShowCustomizedIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaEntityApiFileUpload()`

```php
metaEntityApiFileUpload($id, $meta_entities_jsonld): \OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty
```

Creates a meta_entities resource.

Creates a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier
$meta_entities_jsonld = new \OpenAPI\Client\Model\MetaEntitiesJsonld(); // \OpenAPI\Client\Model\MetaEntitiesJsonld | The new meta_entities resource

try {
    $result = $apiInstance->metaEntityApiFileUpload($id, $meta_entities_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->metaEntityApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |
| **meta_entities_jsonld** | [**\OpenAPI\Client\Model\MetaEntitiesJsonld**](../Model/MetaEntitiesJsonld.md)| The new meta_entities resource | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty**](../Model/MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaEntityDropDown()`

```php
metaEntityDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $fqcn, $fqcn2, $table_name, $table_name2, $entity_api_shortname, $entity_api_shortname2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $fqcn_partial, $fqcn_start_with, $fqcn_end_with, $table_name_partial, $table_name_start_with, $table_name_end_with, $entity_api_shortname_partial, $entity_api_shortname_start_with, $entity_api_shortname_end_with): \OpenAPI\Client\Model\MetaEntityDropDown200Response
```

Retrieves the collection of meta_entities resources.

Retrieves the collection of meta_entities resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
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
$fqcn = 'fqcn_example'; // string | 
$fqcn2 = array('fqcn_example'); // string[] | 
$table_name = 'table_name_example'; // string | 
$table_name2 = array('table_name_example'); // string[] | 
$entity_api_shortname = 'entity_api_shortname_example'; // string | 
$entity_api_shortname2 = array('entity_api_shortname_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | meta_entities slug_partial
$slug_start_with = 'slug_start_with_example'; // string | meta_entities slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | meta_entities slug_end_with
$id_partial = 'id_partial_example'; // string | meta_entities id_partial
$id_start_with = 'id_start_with_example'; // string | meta_entities id_start_with
$id_end_with = 'id_end_with_example'; // string | meta_entities id_end_with
$fqcn_partial = 'fqcn_partial_example'; // string | meta_entities FQCN_partial
$fqcn_start_with = 'fqcn_start_with_example'; // string | meta_entities FQCN_start_with
$fqcn_end_with = 'fqcn_end_with_example'; // string | meta_entities FQCN_end_with
$table_name_partial = 'table_name_partial_example'; // string | meta_entities tableName_partial
$table_name_start_with = 'table_name_start_with_example'; // string | meta_entities tableName_start_with
$table_name_end_with = 'table_name_end_with_example'; // string | meta_entities tableName_end_with
$entity_api_shortname_partial = 'entity_api_shortname_partial_example'; // string | meta_entities entityApiShortname_partial
$entity_api_shortname_start_with = 'entity_api_shortname_start_with_example'; // string | meta_entities entityApiShortname_start_with
$entity_api_shortname_end_with = 'entity_api_shortname_end_with_example'; // string | meta_entities entityApiShortname_end_with

try {
    $result = $apiInstance->metaEntityDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $fqcn, $fqcn2, $table_name, $table_name2, $entity_api_shortname, $entity_api_shortname2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $fqcn_partial, $fqcn_start_with, $fqcn_end_with, $table_name_partial, $table_name_start_with, $table_name_end_with, $entity_api_shortname_partial, $entity_api_shortname_start_with, $entity_api_shortname_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->metaEntityDropDown: ', $e->getMessage(), PHP_EOL;
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
| **fqcn** | **string**|  | [optional] |
| **fqcn2** | [**string[]**](../Model/string.md)|  | [optional] |
| **table_name** | **string**|  | [optional] |
| **table_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **entity_api_shortname** | **string**|  | [optional] |
| **entity_api_shortname2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| meta_entities slug_partial | [optional] |
| **slug_start_with** | **string**| meta_entities slug_start_with | [optional] |
| **slug_end_with** | **string**| meta_entities slug_end_with | [optional] |
| **id_partial** | **string**| meta_entities id_partial | [optional] |
| **id_start_with** | **string**| meta_entities id_start_with | [optional] |
| **id_end_with** | **string**| meta_entities id_end_with | [optional] |
| **fqcn_partial** | **string**| meta_entities FQCN_partial | [optional] |
| **fqcn_start_with** | **string**| meta_entities FQCN_start_with | [optional] |
| **fqcn_end_with** | **string**| meta_entities FQCN_end_with | [optional] |
| **table_name_partial** | **string**| meta_entities tableName_partial | [optional] |
| **table_name_start_with** | **string**| meta_entities tableName_start_with | [optional] |
| **table_name_end_with** | **string**| meta_entities tableName_end_with | [optional] |
| **entity_api_shortname_partial** | **string**| meta_entities entityApiShortname_partial | [optional] |
| **entity_api_shortname_start_with** | **string**| meta_entities entityApiShortname_start_with | [optional] |
| **entity_api_shortname_end_with** | **string**| meta_entities entityApiShortname_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\MetaEntityDropDown200Response**](../Model/MetaEntityDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaEntityDuplicate()`

```php
metaEntityDuplicate($id): \OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty
```

Retrieves a meta_entities resource.

Retrieves a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier

try {
    $result = $apiInstance->metaEntityDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->metaEntityDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty**](../Model/MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaEntityFetchFiles()`

```php
metaEntityFetchFiles($id): \OpenAPI\Client\Model\MetaEntitiesJsonld
```

Retrieves a meta_entities resource.

Retrieves a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier

try {
    $result = $apiInstance->metaEntityFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->metaEntityFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonld**](../Model/MetaEntitiesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaEntityGetBySlug()`

```php
metaEntityGetBySlug($slug): \OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty
```

Retrieves a meta_entities resource.

Retrieves a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | meta_entities identifier

try {
    $result = $apiInstance->metaEntityGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->metaEntityGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| meta_entities identifier | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty**](../Model/MetaEntitiesJsonldMetaEntityShowStandardShowMetaEntityShowIdTimestampableTagTaggingListMetaEntityRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaEntityGetDeleteRelations()`

```php
metaEntityGetDeleteRelations($id): \OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityRelations
```

Retrieves a meta_entities resource.

Retrieves a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier

try {
    $result = $apiInstance->metaEntityGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->metaEntityGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldMetaEntityRelations**](../Model/MetaEntitiesJsonldMetaEntityRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaEntityMetadata()`

```php
metaEntityMetadata($id): \OpenAPI\Client\Model\MetaEntitiesJsonldIdStandardMetadataMetaEntityMetadataTagTaggingListMetaEntityRelationsTimestampable
```

Retrieves a meta_entities resource.

Retrieves a meta_entities resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MetaEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | meta_entities identifier

try {
    $result = $apiInstance->metaEntityMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaEntitiesApi->metaEntityMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| meta_entities identifier | |

### Return type

[**\OpenAPI\Client\Model\MetaEntitiesJsonldIdStandardMetadataMetaEntityMetadataTagTaggingListMetaEntityRelationsTimestampable**](../Model/MetaEntitiesJsonldIdStandardMetadataMetaEntityMetadataTagTaggingListMetaEntityRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
