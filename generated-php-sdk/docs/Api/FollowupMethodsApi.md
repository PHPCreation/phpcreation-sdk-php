# OpenAPI\Client\FollowupMethodsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiFollowupMethodsGetCollection()**](FollowupMethodsApi.md#apiFollowupMethodsGetCollection) | **GET** /open-api/v3/followup_methods | Retrieves the collection of followup_methods resources. |
| [**apiFollowupMethodsIdDelete()**](FollowupMethodsApi.md#apiFollowupMethodsIdDelete) | **DELETE** /open-api/v3/followup_methods/{id} | Removes the followup_methods resource. |
| [**apiFollowupMethodsIdGet()**](FollowupMethodsApi.md#apiFollowupMethodsIdGet) | **GET** /open-api/v3/followup_methods/{id} | Retrieves a followup_methods resource. |
| [**apiFollowupMethodsIdPut()**](FollowupMethodsApi.md#apiFollowupMethodsIdPut) | **PUT** /open-api/v3/followup_methods/{id} | Replaces the followup_methods resource. |
| [**apiFollowupMethodsPost()**](FollowupMethodsApi.md#apiFollowupMethodsPost) | **POST** /open-api/v3/followup_methods | Creates a followup_methods resource. |
| [**followupMethodApiFileUpload()**](FollowupMethodsApi.md#followupMethodApiFileUpload) | **POST** /open-api/v3/followup_methods/{id}/file/upload | Creates a followup_methods resource. |
| [**followupMethodDropDown()**](FollowupMethodsApi.md#followupMethodDropDown) | **GET** /open-api/v3/followup_methods/dropdown/get | Retrieves the collection of followup_methods resources. |
| [**followupMethodDuplicate()**](FollowupMethodsApi.md#followupMethodDuplicate) | **GET** /open-api/v3/followup_methods/duplicate/{id} | Retrieves a followup_methods resource. |
| [**followupMethodFetchFiles()**](FollowupMethodsApi.md#followupMethodFetchFiles) | **GET** /open-api/v3/followup_methods/fetch_files/{id} | Retrieves a followup_methods resource. |
| [**followupMethodGetBySlug()**](FollowupMethodsApi.md#followupMethodGetBySlug) | **GET** /open-api/v3/followup_methods/by_slug/{slug} | Retrieves a followup_methods resource. |
| [**followupMethodGetDeleteRelations()**](FollowupMethodsApi.md#followupMethodGetDeleteRelations) | **GET** /open-api/v3/followup_methods/get_delete_relations/{id} | Retrieves a followup_methods resource. |
| [**followupMethodMetadata()**](FollowupMethodsApi.md#followupMethodMetadata) | **GET** /open-api/v3/followup_methods/metadata/{id} | Retrieves a followup_methods resource. |


## `apiFollowupMethodsGetCollection()`

```php
apiFollowupMethodsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiFollowupMethodsGetCollection200Response
```

Retrieves the collection of followup_methods resources.

Retrieves the collection of followup_methods resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | followup_methods slug_partial
$slug_start_with = 'slug_start_with_example'; // string | followup_methods slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | followup_methods slug_end_with
$id_partial = 'id_partial_example'; // string | followup_methods id_partial
$id_start_with = 'id_start_with_example'; // string | followup_methods id_start_with
$id_end_with = 'id_end_with_example'; // string | followup_methods id_end_with
$icon_partial = 'icon_partial_example'; // string | followup_methods icon_partial
$icon_start_with = 'icon_start_with_example'; // string | followup_methods icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | followup_methods icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | followup_methods translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | followup_methods translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | followup_methods translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | followup_methods translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | followup_methods translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | followup_methods translations.description_end_with
$priority_range = 'priority_range_example'; // string | followup_methods priority_range

try {
    $result = $apiInstance->apiFollowupMethodsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->apiFollowupMethodsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| followup_methods slug_partial | [optional] |
| **slug_start_with** | **string**| followup_methods slug_start_with | [optional] |
| **slug_end_with** | **string**| followup_methods slug_end_with | [optional] |
| **id_partial** | **string**| followup_methods id_partial | [optional] |
| **id_start_with** | **string**| followup_methods id_start_with | [optional] |
| **id_end_with** | **string**| followup_methods id_end_with | [optional] |
| **icon_partial** | **string**| followup_methods icon_partial | [optional] |
| **icon_start_with** | **string**| followup_methods icon_start_with | [optional] |
| **icon_end_with** | **string**| followup_methods icon_end_with | [optional] |
| **translations_title_partial** | **string**| followup_methods translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| followup_methods translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| followup_methods translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| followup_methods translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| followup_methods translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| followup_methods translations.description_end_with | [optional] |
| **priority_range** | **string**| followup_methods priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiFollowupMethodsGetCollection200Response**](../Model/ApiFollowupMethodsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupMethodsIdDelete()`

```php
apiFollowupMethodsIdDelete($id)
```

Removes the followup_methods resource.

Removes the followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier

try {
    $apiInstance->apiFollowupMethodsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->apiFollowupMethodsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |

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

## `apiFollowupMethodsIdGet()`

```php
apiFollowupMethodsIdGet($id): \OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a followup_methods resource.

Retrieves a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier

try {
    $result = $apiInstance->apiFollowupMethodsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->apiFollowupMethodsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupMethodsIdPut()`

```php
apiFollowupMethodsIdPut($id, $followup_methods_jsonld_post): \OpenAPI\Client\Model\FollowupMethodsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the followup_methods resource.

Replaces the followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier
$followup_methods_jsonld_post = new \OpenAPI\Client\Model\FollowupMethodsJsonldPost(); // \OpenAPI\Client\Model\FollowupMethodsJsonldPost | The updated followup_methods resource

try {
    $result = $apiInstance->apiFollowupMethodsIdPut($id, $followup_methods_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->apiFollowupMethodsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |
| **followup_methods_jsonld_post** | [**\OpenAPI\Client\Model\FollowupMethodsJsonldPost**](../Model/FollowupMethodsJsonldPost.md)| The updated followup_methods resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/FollowupMethodsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupMethodsPost()`

```php
apiFollowupMethodsPost($followup_methods_jsonld_add_post): \OpenAPI\Client\Model\FollowupMethodsJsonld
```

Creates a followup_methods resource.

Creates a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$followup_methods_jsonld_add_post = new \OpenAPI\Client\Model\FollowupMethodsJsonldAddPost(); // \OpenAPI\Client\Model\FollowupMethodsJsonldAddPost | The new followup_methods resource

try {
    $result = $apiInstance->apiFollowupMethodsPost($followup_methods_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->apiFollowupMethodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **followup_methods_jsonld_add_post** | [**\OpenAPI\Client\Model\FollowupMethodsJsonldAddPost**](../Model/FollowupMethodsJsonldAddPost.md)| The new followup_methods resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonld**](../Model/FollowupMethodsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMethodApiFileUpload()`

```php
followupMethodApiFileUpload($id, $followup_methods_jsonld): \OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingListStandardShow
```

Creates a followup_methods resource.

Creates a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier
$followup_methods_jsonld = new \OpenAPI\Client\Model\FollowupMethodsJsonld(); // \OpenAPI\Client\Model\FollowupMethodsJsonld | The new followup_methods resource

try {
    $result = $apiInstance->followupMethodApiFileUpload($id, $followup_methods_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->followupMethodApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |
| **followup_methods_jsonld** | [**\OpenAPI\Client\Model\FollowupMethodsJsonld**](../Model/FollowupMethodsJsonld.md)| The new followup_methods resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMethodDropDown()`

```php
followupMethodDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\FollowupMethodDropDown200Response
```

Retrieves the collection of followup_methods resources.

Retrieves the collection of followup_methods resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->followupMethodDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->followupMethodDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodDropDown200Response**](../Model/FollowupMethodDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMethodDuplicate()`

```php
followupMethodDuplicate($id): \OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingList
```

Retrieves a followup_methods resource.

Retrieves a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier

try {
    $result = $apiInstance->followupMethodDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->followupMethodDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingList**](../Model/FollowupMethodsJsonldFollowupMethodShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMethodFetchFiles()`

```php
followupMethodFetchFiles($id): \OpenAPI\Client\Model\FollowupMethodsJsonld
```

Retrieves a followup_methods resource.

Retrieves a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier

try {
    $result = $apiInstance->followupMethodFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->followupMethodFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonld**](../Model/FollowupMethodsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMethodGetBySlug()`

```php
followupMethodGetBySlug($slug): \OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a followup_methods resource.

Retrieves a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | followup_methods identifier

try {
    $result = $apiInstance->followupMethodGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->followupMethodGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| followup_methods identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodShowIdCustomPropertyTimestampableTagTaggingList**](../Model/FollowupMethodsJsonldFollowupMethodShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMethodGetDeleteRelations()`

```php
followupMethodGetDeleteRelations($id): \OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodRelations
```

Retrieves a followup_methods resource.

Retrieves a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier

try {
    $result = $apiInstance->followupMethodGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->followupMethodGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonldFollowupMethodRelations**](../Model/FollowupMethodsJsonldFollowupMethodRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMethodMetadata()`

```php
followupMethodMetadata($id): \OpenAPI\Client\Model\FollowupMethodsJsonldIdStandardMetadataFollowupMethodMetadataTagTaggingListFollowupMethodRelationsTimestampable
```

Retrieves a followup_methods resource.

Retrieves a followup_methods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_methods identifier

try {
    $result = $apiInstance->followupMethodMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupMethodsApi->followupMethodMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_methods identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupMethodsJsonldIdStandardMetadataFollowupMethodMetadataTagTaggingListFollowupMethodRelationsTimestampable**](../Model/FollowupMethodsJsonldIdStandardMetadataFollowupMethodMetadataTagTaggingListFollowupMethodRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
