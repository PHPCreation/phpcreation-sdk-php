# OpenAPI\Client\LangAlertsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLangAlertsGetCollection()**](LangAlertsApi.md#apiLangAlertsGetCollection) | **GET** /open-api/v3/lang_alerts | Retrieves the collection of lang_alerts resources. |
| [**apiLangAlertsIdDelete()**](LangAlertsApi.md#apiLangAlertsIdDelete) | **DELETE** /open-api/v3/lang_alerts/{id} | Removes the lang_alerts resource. |
| [**apiLangAlertsIdGet()**](LangAlertsApi.md#apiLangAlertsIdGet) | **GET** /open-api/v3/lang_alerts/{id} | Retrieves a lang_alerts resource. |
| [**apiLangAlertsIdPut()**](LangAlertsApi.md#apiLangAlertsIdPut) | **PUT** /open-api/v3/lang_alerts/{id} | Replaces the lang_alerts resource. |
| [**apiLangAlertsPost()**](LangAlertsApi.md#apiLangAlertsPost) | **POST** /open-api/v3/lang_alerts | Creates a lang_alerts resource. |
| [**langAlertApiFileUpload()**](LangAlertsApi.md#langAlertApiFileUpload) | **POST** /open-api/v3/lang_alerts/{id}/file/upload | Creates a lang_alerts resource. |
| [**langAlertDropDown()**](LangAlertsApi.md#langAlertDropDown) | **GET** /open-api/v3/lang_alerts/dropdown/get | Retrieves the collection of lang_alerts resources. |
| [**langAlertDuplicate()**](LangAlertsApi.md#langAlertDuplicate) | **GET** /open-api/v3/lang_alerts/duplicate/{id} | Retrieves a lang_alerts resource. |
| [**langAlertFetchFiles()**](LangAlertsApi.md#langAlertFetchFiles) | **GET** /open-api/v3/lang_alerts/fetch_files/{id} | Retrieves a lang_alerts resource. |
| [**langAlertGetBySlug()**](LangAlertsApi.md#langAlertGetBySlug) | **GET** /open-api/v3/lang_alerts/by_slug/{slug} | Retrieves a lang_alerts resource. |
| [**langAlertGetDeleteRelations()**](LangAlertsApi.md#langAlertGetDeleteRelations) | **GET** /open-api/v3/lang_alerts/get_delete_relations/{id} | Retrieves a lang_alerts resource. |
| [**langAlertMetadata()**](LangAlertsApi.md#langAlertMetadata) | **GET** /open-api/v3/lang_alerts/metadata/{id} | Retrieves a lang_alerts resource. |


## `apiLangAlertsGetCollection()`

```php
apiLangAlertsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $module, $module2, $language, $language2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $module_partial, $module_start_with, $module_end_with, $language_partial, $language_start_with, $language_end_with): \OpenAPI\Client\Model\ApiLangAlertsGetCollection200Response
```

Retrieves the collection of lang_alerts resources.

Retrieves the collection of lang_alerts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
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
$module = 'module_example'; // string | 
$module2 = array('module_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | lang_alerts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | lang_alerts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | lang_alerts slug_end_with
$id_partial = 'id_partial_example'; // string | lang_alerts id_partial
$id_start_with = 'id_start_with_example'; // string | lang_alerts id_start_with
$id_end_with = 'id_end_with_example'; // string | lang_alerts id_end_with
$module_partial = 'module_partial_example'; // string | lang_alerts module_partial
$module_start_with = 'module_start_with_example'; // string | lang_alerts module_start_with
$module_end_with = 'module_end_with_example'; // string | lang_alerts module_end_with
$language_partial = 'language_partial_example'; // string | lang_alerts language_partial
$language_start_with = 'language_start_with_example'; // string | lang_alerts language_start_with
$language_end_with = 'language_end_with_example'; // string | lang_alerts language_end_with

try {
    $result = $apiInstance->apiLangAlertsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $module, $module2, $language, $language2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $module_partial, $module_start_with, $module_end_with, $language_partial, $language_start_with, $language_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->apiLangAlertsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **module** | **string**|  | [optional] |
| **module2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| lang_alerts slug_partial | [optional] |
| **slug_start_with** | **string**| lang_alerts slug_start_with | [optional] |
| **slug_end_with** | **string**| lang_alerts slug_end_with | [optional] |
| **id_partial** | **string**| lang_alerts id_partial | [optional] |
| **id_start_with** | **string**| lang_alerts id_start_with | [optional] |
| **id_end_with** | **string**| lang_alerts id_end_with | [optional] |
| **module_partial** | **string**| lang_alerts module_partial | [optional] |
| **module_start_with** | **string**| lang_alerts module_start_with | [optional] |
| **module_end_with** | **string**| lang_alerts module_end_with | [optional] |
| **language_partial** | **string**| lang_alerts language_partial | [optional] |
| **language_start_with** | **string**| lang_alerts language_start_with | [optional] |
| **language_end_with** | **string**| lang_alerts language_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiLangAlertsGetCollection200Response**](../Model/ApiLangAlertsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangAlertsIdDelete()`

```php
apiLangAlertsIdDelete($id)
```

Removes the lang_alerts resource.

Removes the lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier

try {
    $apiInstance->apiLangAlertsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->apiLangAlertsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |

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

## `apiLangAlertsIdGet()`

```php
apiLangAlertsIdGet($id): \OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Retrieves a lang_alerts resource.

Retrieves a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier

try {
    $result = $apiInstance->apiLangAlertsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->apiLangAlertsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/LangAlertsJsonldLangAlertShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangAlertsIdPut()`

```php
apiLangAlertsIdPut($id, $lang_alerts_jsonld_post): \OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Replaces the lang_alerts resource.

Replaces the lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier
$lang_alerts_jsonld_post = new \OpenAPI\Client\Model\LangAlertsJsonldPost(); // \OpenAPI\Client\Model\LangAlertsJsonldPost | The updated lang_alerts resource

try {
    $result = $apiInstance->apiLangAlertsIdPut($id, $lang_alerts_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->apiLangAlertsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |
| **lang_alerts_jsonld_post** | [**\OpenAPI\Client\Model\LangAlertsJsonldPost**](../Model/LangAlertsJsonldPost.md)| The updated lang_alerts resource | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/LangAlertsJsonldLangAlertShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLangAlertsPost()`

```php
apiLangAlertsPost($lang_alerts_jsonld_add_post): \OpenAPI\Client\Model\LangAlertsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a lang_alerts resource.

Creates a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang_alerts_jsonld_add_post = new \OpenAPI\Client\Model\LangAlertsJsonldAddPost(); // \OpenAPI\Client\Model\LangAlertsJsonldAddPost | The new lang_alerts resource

try {
    $result = $apiInstance->apiLangAlertsPost($lang_alerts_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->apiLangAlertsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lang_alerts_jsonld_add_post** | [**\OpenAPI\Client\Model\LangAlertsJsonldAddPost**](../Model/LangAlertsJsonldAddPost.md)| The new lang_alerts resource | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/LangAlertsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langAlertApiFileUpload()`

```php
langAlertApiFileUpload($id, $lang_alerts_jsonld): \OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowIdTimestampableTagTaggingListStandardShow
```

Creates a lang_alerts resource.

Creates a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier
$lang_alerts_jsonld = new \OpenAPI\Client\Model\LangAlertsJsonld(); // \OpenAPI\Client\Model\LangAlertsJsonld | The new lang_alerts resource

try {
    $result = $apiInstance->langAlertApiFileUpload($id, $lang_alerts_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->langAlertApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |
| **lang_alerts_jsonld** | [**\OpenAPI\Client\Model\LangAlertsJsonld**](../Model/LangAlertsJsonld.md)| The new lang_alerts resource | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowIdTimestampableTagTaggingListStandardShow**](../Model/LangAlertsJsonldLangAlertShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langAlertDropDown()`

```php
langAlertDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $module, $module2, $language, $language2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $module_partial, $module_start_with, $module_end_with, $language_partial, $language_start_with, $language_end_with): \OpenAPI\Client\Model\LangAlertDropDown200Response
```

Retrieves the collection of lang_alerts resources.

Retrieves the collection of lang_alerts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
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
$module = 'module_example'; // string | 
$module2 = array('module_example'); // string[] | 
$language = 'language_example'; // string | 
$language2 = array('language_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | lang_alerts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | lang_alerts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | lang_alerts slug_end_with
$id_partial = 'id_partial_example'; // string | lang_alerts id_partial
$id_start_with = 'id_start_with_example'; // string | lang_alerts id_start_with
$id_end_with = 'id_end_with_example'; // string | lang_alerts id_end_with
$module_partial = 'module_partial_example'; // string | lang_alerts module_partial
$module_start_with = 'module_start_with_example'; // string | lang_alerts module_start_with
$module_end_with = 'module_end_with_example'; // string | lang_alerts module_end_with
$language_partial = 'language_partial_example'; // string | lang_alerts language_partial
$language_start_with = 'language_start_with_example'; // string | lang_alerts language_start_with
$language_end_with = 'language_end_with_example'; // string | lang_alerts language_end_with

try {
    $result = $apiInstance->langAlertDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $module, $module2, $language, $language2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $module_partial, $module_start_with, $module_end_with, $language_partial, $language_start_with, $language_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->langAlertDropDown: ', $e->getMessage(), PHP_EOL;
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
| **module** | **string**|  | [optional] |
| **module2** | [**string[]**](../Model/string.md)|  | [optional] |
| **language** | **string**|  | [optional] |
| **language2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| lang_alerts slug_partial | [optional] |
| **slug_start_with** | **string**| lang_alerts slug_start_with | [optional] |
| **slug_end_with** | **string**| lang_alerts slug_end_with | [optional] |
| **id_partial** | **string**| lang_alerts id_partial | [optional] |
| **id_start_with** | **string**| lang_alerts id_start_with | [optional] |
| **id_end_with** | **string**| lang_alerts id_end_with | [optional] |
| **module_partial** | **string**| lang_alerts module_partial | [optional] |
| **module_start_with** | **string**| lang_alerts module_start_with | [optional] |
| **module_end_with** | **string**| lang_alerts module_end_with | [optional] |
| **language_partial** | **string**| lang_alerts language_partial | [optional] |
| **language_start_with** | **string**| lang_alerts language_start_with | [optional] |
| **language_end_with** | **string**| lang_alerts language_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\LangAlertDropDown200Response**](../Model/LangAlertDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langAlertDuplicate()`

```php
langAlertDuplicate($id): \OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowIdTimestampableTagTaggingList
```

Retrieves a lang_alerts resource.

Retrieves a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier

try {
    $result = $apiInstance->langAlertDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->langAlertDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowIdTimestampableTagTaggingList**](../Model/LangAlertsJsonldLangAlertShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langAlertFetchFiles()`

```php
langAlertFetchFiles($id): \OpenAPI\Client\Model\LangAlertsJsonld
```

Retrieves a lang_alerts resource.

Retrieves a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier

try {
    $result = $apiInstance->langAlertFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->langAlertFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonld**](../Model/LangAlertsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langAlertGetBySlug()`

```php
langAlertGetBySlug($slug): \OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a lang_alerts resource.

Retrieves a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | lang_alerts identifier

try {
    $result = $apiInstance->langAlertGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->langAlertGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| lang_alerts identifier | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldLangAlertShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/LangAlertsJsonldLangAlertShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langAlertGetDeleteRelations()`

```php
langAlertGetDeleteRelations($id): \OpenAPI\Client\Model\LangAlertsJsonldLangAlertRelations
```

Retrieves a lang_alerts resource.

Retrieves a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier

try {
    $result = $apiInstance->langAlertGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->langAlertGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldLangAlertRelations**](../Model/LangAlertsJsonldLangAlertRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `langAlertMetadata()`

```php
langAlertMetadata($id): \OpenAPI\Client\Model\LangAlertsJsonldIdStandardMetadataLangAlertMetadataTagTaggingListLangAlertRelationsTimestampable
```

Retrieves a lang_alerts resource.

Retrieves a lang_alerts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LangAlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lang_alerts identifier

try {
    $result = $apiInstance->langAlertMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LangAlertsApi->langAlertMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| lang_alerts identifier | |

### Return type

[**\OpenAPI\Client\Model\LangAlertsJsonldIdStandardMetadataLangAlertMetadataTagTaggingListLangAlertRelationsTimestampable**](../Model/LangAlertsJsonldIdStandardMetadataLangAlertMetadataTagTaggingListLangAlertRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
