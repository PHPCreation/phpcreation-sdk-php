# OpenAPI\Client\LangLanguagesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLangLanguagesGetCollection()**](LangLanguagesApi.md#apiLangLanguagesGetCollection) | **GET** /open-api/v3/lang_languages | Retrieves the collection of lang_languages resources. |
| [**apiLangLanguagesIdDelete()**](LangLanguagesApi.md#apiLangLanguagesIdDelete) | **DELETE** /open-api/v3/lang_languages/{id} | Removes the lang_languages resource. |
| [**apiLangLanguagesIdGet()**](LangLanguagesApi.md#apiLangLanguagesIdGet) | **GET** /open-api/v3/lang_languages/{id} | Retrieves a lang_languages resource. |
| [**apiLangLanguagesIdPut()**](LangLanguagesApi.md#apiLangLanguagesIdPut) | **PUT** /open-api/v3/lang_languages/{id} | Replaces the lang_languages resource. |
| [**apiLangLanguagesPost()**](LangLanguagesApi.md#apiLangLanguagesPost) | **POST** /open-api/v3/lang_languages | Creates a lang_languages resource. |
| [**langLanguageApiFileUpload()**](LangLanguagesApi.md#langLanguageApiFileUpload) | **POST** /open-api/v3/lang_languages/{id}/file/upload | Creates a lang_languages resource. |
| [**langLanguageDropDown()**](LangLanguagesApi.md#langLanguageDropDown) | **GET** /open-api/v3/lang_languages/dropdown/get | Retrieves the collection of lang_languages resources. |
| [**langLanguageDuplicate()**](LangLanguagesApi.md#langLanguageDuplicate) | **GET** /open-api/v3/lang_languages/duplicate/{id} | Retrieves a lang_languages resource. |
| [**langLanguageFetchFiles()**](LangLanguagesApi.md#langLanguageFetchFiles) | **GET** /open-api/v3/lang_languages/fetch_files/{id} | Retrieves a lang_languages resource. |
| [**langLanguageGetBySlug()**](LangLanguagesApi.md#langLanguageGetBySlug) | **GET** /open-api/v3/lang_languages/by_slug/{slug} | Retrieves a lang_languages resource. |
| [**langLanguageGetDeleteRelations()**](LangLanguagesApi.md#langLanguageGetDeleteRelations) | **GET** /open-api/v3/lang_languages/get_delete_relations/{id} | Retrieves a lang_languages resource. |
| [**langLanguageMetadata()**](LangLanguagesApi.md#langLanguageMetadata) | **GET** /open-api/v3/lang_languages/metadata/{id} | Retrieves a lang_languages resource. |


## `apiLangLanguagesGetCollection()`

```php
apiLangLanguagesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $local_code_partial, $local_code_start_with, $local_code_end_with): \OpenAPI\Client\Model\ApiLangLanguagesGetCollection200Response
```

Retrieves the collection of lang_languages resources.

Retrieves the collection of lang_languages resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
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
$title = 'title_example'; // string | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_title = 'order_title_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | lang_languages slug_partial
$slug_start_with = 'slug_start_with_example'; // string | lang_languages slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | lang_languages slug_end_with
$id_partial = 'id_partial_example'; // string | lang_languages id_partial
$id_start_with = 'id_start_with_example'; // string | lang_languages id_start_with
$id_end_with = 'id_end_with_example'; // string | lang_languages id_end_with
$title_partial = 'title_partial_example'; // string | lang_languages title_partial
$title_start_with = 'title_start_with_example'; // string | lang_languages title_start_with
$title_end_with = 'title_end_with_example'; // string | lang_languages title_end_with
$local_code_partial = 'local_code_partial_example'; // string | lang_languages localCode_partial
$local_code_start_with = 'local_code_start_with_example'; // string | lang_languages localCode_start_with
$local_code_end_with = 'local_code_end_with_example'; // string | lang_languages localCode_end_with

try {
    $result = $apiInstance->apiLangLanguagesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $local_code_partial, $local_code_start_with, $local_code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->apiLangLanguagesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **title** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_title** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| lang_languages slug_partial | [optional] |
| **slug_start_with** | **string**| lang_languages slug_start_with | [optional] |
| **slug_end_with** | **string**| lang_languages slug_end_with | [optional] |
| **id_partial** | **string**| lang_languages id_partial | [optional] |
| **id_start_with** | **string**| lang_languages id_start_with | [optional] |
| **id_end_with** | **string**| lang_languages id_end_with | [optional] |
| **title_partial** | **string**| lang_languages title_partial | [optional] |
| **title_start_with** | **string**| lang_languages title_start_with | [optional] |
| **title_end_with** | **string**| lang_languages title_end_with | [optional] |
| **local_code_partial** | **string**| lang_languages localCode_partial | [optional] |
| **local_code_start_with** | **string**| lang_languages localCode_start_with | [optional] |
| **local_code_end_with** | **string**| lang_languages localCode_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiLangLanguagesGetCollection200Response**](../Model/ApiLangLanguagesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangLanguagesIdDelete()`

```php
apiLangLanguagesIdDelete($id)
```

Removes the lang_languages resource.

Removes the lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier

try {
    $apiInstance->apiLangLanguagesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->apiLangLanguagesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |

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

## `apiLangLanguagesIdGet()`

```php
apiLangLanguagesIdGet($id): \OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList
```

Retrieves a lang_languages resource.

Retrieves a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier

try {
    $result = $apiInstance->apiLangLanguagesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->apiLangLanguagesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList**](../Model/LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangLanguagesIdPut()`

```php
apiLangLanguagesIdPut($id, $lang_languages_jsonld_post): \OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList
```

Replaces the lang_languages resource.

Replaces the lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier
$lang_languages_jsonld_post = new \OpenAPI\Client\Model\LangLanguagesJsonldPost(); // \OpenAPI\Client\Model\LangLanguagesJsonldPost | The updated lang_languages resource

try {
    $result = $apiInstance->apiLangLanguagesIdPut($id, $lang_languages_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->apiLangLanguagesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |
| **lang_languages_jsonld_post** | [**\OpenAPI\Client\Model\LangLanguagesJsonldPost**](../Model/LangLanguagesJsonldPost.md)| The updated lang_languages resource | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList**](../Model/LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangLanguagesPost()`

```php
apiLangLanguagesPost($lang_languages_jsonld_add_post): \OpenAPI\Client\Model\LangLanguagesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a lang_languages resource.

Creates a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang_languages_jsonld_add_post = new \OpenAPI\Client\Model\LangLanguagesJsonldAddPost(); // \OpenAPI\Client\Model\LangLanguagesJsonldAddPost | The new lang_languages resource

try {
    $result = $apiInstance->apiLangLanguagesPost($lang_languages_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->apiLangLanguagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lang_languages_jsonld_add_post** | [**\OpenAPI\Client\Model\LangLanguagesJsonldAddPost**](../Model/LangLanguagesJsonldAddPost.md)| The new lang_languages resource | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/LangLanguagesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langLanguageApiFileUpload()`

```php
langLanguageApiFileUpload($id, $lang_languages_jsonld): \OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowIdTimestampableTagTaggingListStandardShow
```

Creates a lang_languages resource.

Creates a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier
$lang_languages_jsonld = new \OpenAPI\Client\Model\LangLanguagesJsonld(); // \OpenAPI\Client\Model\LangLanguagesJsonld | The new lang_languages resource

try {
    $result = $apiInstance->langLanguageApiFileUpload($id, $lang_languages_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->langLanguageApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |
| **lang_languages_jsonld** | [**\OpenAPI\Client\Model\LangLanguagesJsonld**](../Model/LangLanguagesJsonld.md)| The new lang_languages resource | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowIdTimestampableTagTaggingListStandardShow**](../Model/LangLanguagesJsonldLangLanguageShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langLanguageDropDown()`

```php
langLanguageDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $local_code_partial, $local_code_start_with, $local_code_end_with): \OpenAPI\Client\Model\LangLanguageDropDown200Response
```

Retrieves the collection of lang_languages resources.

Retrieves the collection of lang_languages resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
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
$title = 'title_example'; // string | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_title = 'order_title_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | lang_languages slug_partial
$slug_start_with = 'slug_start_with_example'; // string | lang_languages slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | lang_languages slug_end_with
$id_partial = 'id_partial_example'; // string | lang_languages id_partial
$id_start_with = 'id_start_with_example'; // string | lang_languages id_start_with
$id_end_with = 'id_end_with_example'; // string | lang_languages id_end_with
$title_partial = 'title_partial_example'; // string | lang_languages title_partial
$title_start_with = 'title_start_with_example'; // string | lang_languages title_start_with
$title_end_with = 'title_end_with_example'; // string | lang_languages title_end_with
$local_code_partial = 'local_code_partial_example'; // string | lang_languages localCode_partial
$local_code_start_with = 'local_code_start_with_example'; // string | lang_languages localCode_start_with
$local_code_end_with = 'local_code_end_with_example'; // string | lang_languages localCode_end_with

try {
    $result = $apiInstance->langLanguageDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $title, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_slug, $order_title, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $title_partial, $title_start_with, $title_end_with, $local_code_partial, $local_code_start_with, $local_code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->langLanguageDropDown: ', $e->getMessage(), PHP_EOL;
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
| **title** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_title** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| lang_languages slug_partial | [optional] |
| **slug_start_with** | **string**| lang_languages slug_start_with | [optional] |
| **slug_end_with** | **string**| lang_languages slug_end_with | [optional] |
| **id_partial** | **string**| lang_languages id_partial | [optional] |
| **id_start_with** | **string**| lang_languages id_start_with | [optional] |
| **id_end_with** | **string**| lang_languages id_end_with | [optional] |
| **title_partial** | **string**| lang_languages title_partial | [optional] |
| **title_start_with** | **string**| lang_languages title_start_with | [optional] |
| **title_end_with** | **string**| lang_languages title_end_with | [optional] |
| **local_code_partial** | **string**| lang_languages localCode_partial | [optional] |
| **local_code_start_with** | **string**| lang_languages localCode_start_with | [optional] |
| **local_code_end_with** | **string**| lang_languages localCode_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\LangLanguageDropDown200Response**](../Model/LangLanguageDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langLanguageDuplicate()`

```php
langLanguageDuplicate($id): \OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList
```

Retrieves a lang_languages resource.

Retrieves a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier

try {
    $result = $apiInstance->langLanguageDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->langLanguageDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList**](../Model/LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langLanguageFetchFiles()`

```php
langLanguageFetchFiles($id): \OpenAPI\Client\Model\LangLanguagesJsonld
```

Retrieves a lang_languages resource.

Retrieves a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier

try {
    $result = $apiInstance->langLanguageFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->langLanguageFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonld**](../Model/LangLanguagesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langLanguageGetBySlug()`

```php
langLanguageGetBySlug($slug): \OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList
```

Retrieves a lang_languages resource.

Retrieves a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | lang_languages identifier

try {
    $result = $apiInstance->langLanguageGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->langLanguageGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| lang_languages identifier | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList**](../Model/LangLanguagesJsonldLangLanguageShowStandardShowCustomPropertyIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langLanguageGetDeleteRelations()`

```php
langLanguageGetDeleteRelations($id): \OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageRelations
```

Retrieves a lang_languages resource.

Retrieves a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier

try {
    $result = $apiInstance->langLanguageGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->langLanguageGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldLangLanguageRelations**](../Model/LangLanguagesJsonldLangLanguageRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langLanguageMetadata()`

```php
langLanguageMetadata($id): \OpenAPI\Client\Model\LangLanguagesJsonldIdStandardMetadataLangLanguageMetadataTagTaggingListLangLanguageRelationsTimestampable
```

Retrieves a lang_languages resource.

Retrieves a lang_languages resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_languages identifier

try {
    $result = $apiInstance->langLanguageMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangLanguagesApi->langLanguageMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_languages identifier | |

### Return type

[**\OpenAPI\Client\Model\LangLanguagesJsonldIdStandardMetadataLangLanguageMetadataTagTaggingListLangLanguageRelationsTimestampable**](../Model/LangLanguagesJsonldIdStandardMetadataLangLanguageMetadataTagTaggingListLangLanguageRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
