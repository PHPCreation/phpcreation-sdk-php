# OpenAPI\Client\LangsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLangsGetCollection()**](LangsApi.md#apiLangsGetCollection) | **GET** /open-api/v3/langs | Retrieves the collection of langs resources. |
| [**apiLangsIdDelete()**](LangsApi.md#apiLangsIdDelete) | **DELETE** /open-api/v3/langs/{id} | Removes the langs resource. |
| [**apiLangsIdGet()**](LangsApi.md#apiLangsIdGet) | **GET** /open-api/v3/langs/{id} | Retrieves a langs resource. |
| [**apiLangsIdPut()**](LangsApi.md#apiLangsIdPut) | **PUT** /open-api/v3/langs/{id} | Replaces the langs resource. |
| [**apiLangsPost()**](LangsApi.md#apiLangsPost) | **POST** /open-api/v3/langs | Creates a langs resource. |
| [**langApiFileUpload()**](LangsApi.md#langApiFileUpload) | **POST** /open-api/v3/langs/{id}/file/upload | Creates a langs resource. |
| [**langDropDown()**](LangsApi.md#langDropDown) | **GET** /open-api/v3/langs/dropdown/get | Retrieves the collection of langs resources. |
| [**langDuplicate()**](LangsApi.md#langDuplicate) | **GET** /open-api/v3/langs/duplicate/{id} | Retrieves a langs resource. |
| [**langFetchFiles()**](LangsApi.md#langFetchFiles) | **GET** /open-api/v3/langs/fetch_files/{id} | Retrieves a langs resource. |
| [**langGetBySlug()**](LangsApi.md#langGetBySlug) | **GET** /open-api/v3/langs/by_slug/{slug} | Retrieves a langs resource. |
| [**langGetDeleteRelations()**](LangsApi.md#langGetDeleteRelations) | **GET** /open-api/v3/langs/get_delete_relations/{id} | Retrieves a langs resource. |
| [**langMetadata()**](LangsApi.md#langMetadata) | **GET** /open-api/v3/langs/metadata/{id} | Retrieves a langs resource. |


## `apiLangsGetCollection()`

```php
apiLangsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $text, $text2, $language, $language2, $tag, $tag2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $order_id, $order_slug, $order_text, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $text_partial, $text_start_with, $text_end_with, $language_partial, $language_start_with, $language_end_with, $tag_partial, $tag_start_with, $tag_end_with): \OpenAPI\Client\Model\ApiLangsGetCollection200Response
```

Retrieves the collection of langs resources.

Retrieves the collection of langs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
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
$text = 'text_example'; // string | 
$text2 = array('text_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$tag = 'tag_example'; // string | 
$tag2 = array('tag_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_text = 'order_text_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | langs slug_partial
$slug_start_with = 'slug_start_with_example'; // string | langs slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | langs slug_end_with
$id_partial = 'id_partial_example'; // string | langs id_partial
$id_start_with = 'id_start_with_example'; // string | langs id_start_with
$id_end_with = 'id_end_with_example'; // string | langs id_end_with
$text_partial = 'text_partial_example'; // string | langs text_partial
$text_start_with = 'text_start_with_example'; // string | langs text_start_with
$text_end_with = 'text_end_with_example'; // string | langs text_end_with
$language_partial = 'language_partial_example'; // string | langs language_partial
$language_start_with = 'language_start_with_example'; // string | langs language_start_with
$language_end_with = 'language_end_with_example'; // string | langs language_end_with
$tag_partial = 'tag_partial_example'; // string | langs tag_partial
$tag_start_with = 'tag_start_with_example'; // string | langs tag_start_with
$tag_end_with = 'tag_end_with_example'; // string | langs tag_end_with

try {
    $result = $apiInstance->apiLangsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $text, $text2, $language, $language2, $tag, $tag2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $order_id, $order_slug, $order_text, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $text_partial, $text_start_with, $text_end_with, $language_partial, $language_start_with, $language_end_with, $tag_partial, $tag_start_with, $tag_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->apiLangsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **text** | **string**|  | [optional] |
| **text2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | **string**|  | [optional] |
| **tag2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_text** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| langs slug_partial | [optional] |
| **slug_start_with** | **string**| langs slug_start_with | [optional] |
| **slug_end_with** | **string**| langs slug_end_with | [optional] |
| **id_partial** | **string**| langs id_partial | [optional] |
| **id_start_with** | **string**| langs id_start_with | [optional] |
| **id_end_with** | **string**| langs id_end_with | [optional] |
| **text_partial** | **string**| langs text_partial | [optional] |
| **text_start_with** | **string**| langs text_start_with | [optional] |
| **text_end_with** | **string**| langs text_end_with | [optional] |
| **language_partial** | **string**| langs language_partial | [optional] |
| **language_start_with** | **string**| langs language_start_with | [optional] |
| **language_end_with** | **string**| langs language_end_with | [optional] |
| **tag_partial** | **string**| langs tag_partial | [optional] |
| **tag_start_with** | **string**| langs tag_start_with | [optional] |
| **tag_end_with** | **string**| langs tag_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiLangsGetCollection200Response**](../Model/ApiLangsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangsIdDelete()`

```php
apiLangsIdDelete($id)
```

Removes the langs resource.

Removes the langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier

try {
    $apiInstance->apiLangsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->apiLangsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |

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

## `apiLangsIdGet()`

```php
apiLangsIdGet($id): \OpenAPI\Client\Model\LangsJsonldLangShowStandardShowCustomPropertyIdTimestampableTagTaggingList
```

Retrieves a langs resource.

Retrieves a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier

try {
    $result = $apiInstance->apiLangsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->apiLangsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldLangShowStandardShowCustomPropertyIdTimestampableTagTaggingList**](../Model/LangsJsonldLangShowStandardShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangsIdPut()`

```php
apiLangsIdPut($id, $langs_jsonld_post): \OpenAPI\Client\Model\LangsJsonldLangShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Replaces the langs resource.

Replaces the langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier
$langs_jsonld_post = new \OpenAPI\Client\Model\LangsJsonldPost(); // \OpenAPI\Client\Model\LangsJsonldPost | The updated langs resource

try {
    $result = $apiInstance->apiLangsIdPut($id, $langs_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->apiLangsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |
| **langs_jsonld_post** | [**\OpenAPI\Client\Model\LangsJsonldPost**](../Model/LangsJsonldPost.md)| The updated langs resource | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldLangShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/LangsJsonldLangShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangsPost()`

```php
apiLangsPost($langs_jsonld_add_post): \OpenAPI\Client\Model\LangsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a langs resource.

Creates a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$langs_jsonld_add_post = new \OpenAPI\Client\Model\LangsJsonldAddPost(); // \OpenAPI\Client\Model\LangsJsonldAddPost | The new langs resource

try {
    $result = $apiInstance->apiLangsPost($langs_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->apiLangsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **langs_jsonld_add_post** | [**\OpenAPI\Client\Model\LangsJsonldAddPost**](../Model/LangsJsonldAddPost.md)| The new langs resource | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/LangsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langApiFileUpload()`

```php
langApiFileUpload($id, $langs_jsonld): \OpenAPI\Client\Model\LangsJsonldLangShowIdTimestampableTagTaggingListStandardShow
```

Creates a langs resource.

Creates a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier
$langs_jsonld = new \OpenAPI\Client\Model\LangsJsonld(); // \OpenAPI\Client\Model\LangsJsonld | The new langs resource

try {
    $result = $apiInstance->langApiFileUpload($id, $langs_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->langApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |
| **langs_jsonld** | [**\OpenAPI\Client\Model\LangsJsonld**](../Model/LangsJsonld.md)| The new langs resource | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldLangShowIdTimestampableTagTaggingListStandardShow**](../Model/LangsJsonldLangShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langDropDown()`

```php
langDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $text, $text2, $language, $language2, $tag, $tag2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $order_id, $order_slug, $order_text, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $text_partial, $text_start_with, $text_end_with, $language_partial, $language_start_with, $language_end_with, $tag_partial, $tag_start_with, $tag_end_with): \OpenAPI\Client\Model\LangDropDown200Response
```

Retrieves the collection of langs resources.

Retrieves the collection of langs resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
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
$text = 'text_example'; // string | 
$text2 = array('text_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$tag = 'tag_example'; // string | 
$tag2 = array('tag_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_text = 'order_text_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | langs slug_partial
$slug_start_with = 'slug_start_with_example'; // string | langs slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | langs slug_end_with
$id_partial = 'id_partial_example'; // string | langs id_partial
$id_start_with = 'id_start_with_example'; // string | langs id_start_with
$id_end_with = 'id_end_with_example'; // string | langs id_end_with
$text_partial = 'text_partial_example'; // string | langs text_partial
$text_start_with = 'text_start_with_example'; // string | langs text_start_with
$text_end_with = 'text_end_with_example'; // string | langs text_end_with
$language_partial = 'language_partial_example'; // string | langs language_partial
$language_start_with = 'language_start_with_example'; // string | langs language_start_with
$language_end_with = 'language_end_with_example'; // string | langs language_end_with
$tag_partial = 'tag_partial_example'; // string | langs tag_partial
$tag_start_with = 'tag_start_with_example'; // string | langs tag_start_with
$tag_end_with = 'tag_end_with_example'; // string | langs tag_end_with

try {
    $result = $apiInstance->langDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $text, $text2, $language, $language2, $tag, $tag2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $order_id, $order_slug, $order_text, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $text_partial, $text_start_with, $text_end_with, $language_partial, $language_start_with, $language_end_with, $tag_partial, $tag_start_with, $tag_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->langDropDown: ', $e->getMessage(), PHP_EOL;
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
| **text** | **string**|  | [optional] |
| **text2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | **string**|  | [optional] |
| **tag2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_text** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| langs slug_partial | [optional] |
| **slug_start_with** | **string**| langs slug_start_with | [optional] |
| **slug_end_with** | **string**| langs slug_end_with | [optional] |
| **id_partial** | **string**| langs id_partial | [optional] |
| **id_start_with** | **string**| langs id_start_with | [optional] |
| **id_end_with** | **string**| langs id_end_with | [optional] |
| **text_partial** | **string**| langs text_partial | [optional] |
| **text_start_with** | **string**| langs text_start_with | [optional] |
| **text_end_with** | **string**| langs text_end_with | [optional] |
| **language_partial** | **string**| langs language_partial | [optional] |
| **language_start_with** | **string**| langs language_start_with | [optional] |
| **language_end_with** | **string**| langs language_end_with | [optional] |
| **tag_partial** | **string**| langs tag_partial | [optional] |
| **tag_start_with** | **string**| langs tag_start_with | [optional] |
| **tag_end_with** | **string**| langs tag_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\LangDropDown200Response**](../Model/LangDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langDuplicate()`

```php
langDuplicate($id): \OpenAPI\Client\Model\LangsJsonldLangShowIdTimestampableTagTaggingList
```

Retrieves a langs resource.

Retrieves a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier

try {
    $result = $apiInstance->langDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->langDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldLangShowIdTimestampableTagTaggingList**](../Model/LangsJsonldLangShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langFetchFiles()`

```php
langFetchFiles($id): \OpenAPI\Client\Model\LangsJsonld
```

Retrieves a langs resource.

Retrieves a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier

try {
    $result = $apiInstance->langFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->langFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonld**](../Model/LangsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langGetBySlug()`

```php
langGetBySlug($slug): \OpenAPI\Client\Model\LangsJsonldLangShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a langs resource.

Retrieves a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | langs identifier

try {
    $result = $apiInstance->langGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->langGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| langs identifier | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldLangShowIdCustomPropertyTimestampableTagTaggingList**](../Model/LangsJsonldLangShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langGetDeleteRelations()`

```php
langGetDeleteRelations($id): \OpenAPI\Client\Model\LangsJsonldLangRelations
```

Retrieves a langs resource.

Retrieves a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier

try {
    $result = $apiInstance->langGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->langGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldLangRelations**](../Model/LangsJsonldLangRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langMetadata()`

```php
langMetadata($id): \OpenAPI\Client\Model\LangsJsonldIdStandardMetadataLangMetadataTagTaggingListLangRelationsTimestampable
```

Retrieves a langs resource.

Retrieves a langs resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | langs identifier

try {
    $result = $apiInstance->langMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangsApi->langMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| langs identifier | |

### Return type

[**\OpenAPI\Client\Model\LangsJsonldIdStandardMetadataLangMetadataTagTaggingListLangRelationsTimestampable**](../Model/LangsJsonldIdStandardMetadataLangMetadataTagTaggingListLangRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
