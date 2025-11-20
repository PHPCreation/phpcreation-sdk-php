# OpenAPI\Client\TemplatesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTemplatesGetCollection()**](TemplatesApi.md#apiTemplatesGetCollection) | **GET** /open-api/v3/templates | Retrieves the collection of templates resources. |
| [**apiTemplatesIdDelete()**](TemplatesApi.md#apiTemplatesIdDelete) | **DELETE** /open-api/v3/templates/{id} | Removes the templates resource. |
| [**apiTemplatesIdGet()**](TemplatesApi.md#apiTemplatesIdGet) | **GET** /open-api/v3/templates/{id} | Retrieves a templates resource. |
| [**apiTemplatesIdPut()**](TemplatesApi.md#apiTemplatesIdPut) | **PUT** /open-api/v3/templates/{id} | Replaces the templates resource. |
| [**apiTemplatesPost()**](TemplatesApi.md#apiTemplatesPost) | **POST** /open-api/v3/templates | Creates a templates resource. |
| [**entityAnonymousPrintTemplateRender()**](TemplatesApi.md#entityAnonymousPrintTemplateRender) | **GET** /open-api/v3/{moduleName}/{objectName}/{id}/{anonymousToken}/{_locale}/print/anonymous/{templateId} | Retrieves a templates resource. |
| [**entityPrintTemplateRender()**](TemplatesApi.md#entityPrintTemplateRender) | **GET** /open-api/v3/{moduleName}/{objectName}/{id}/{_locale}/print/{templateId} | Retrieves a templates resource. |
| [**templateApiFileUpload()**](TemplatesApi.md#templateApiFileUpload) | **POST** /open-api/v3/templates/{id}/file/upload | Creates a templates resource. |
| [**templateDropDown()**](TemplatesApi.md#templateDropDown) | **GET** /open-api/v3/templates/dropdown/get | Retrieves the collection of templates resources. |
| [**templateDuplicate()**](TemplatesApi.md#templateDuplicate) | **GET** /open-api/v3/templates/duplicate/{id} | Retrieves a templates resource. |
| [**templateFetchFiles()**](TemplatesApi.md#templateFetchFiles) | **GET** /open-api/v3/templates/fetch_files/{id} | Retrieves a templates resource. |
| [**templateGetBySlug()**](TemplatesApi.md#templateGetBySlug) | **GET** /open-api/v3/templates/by_slug/{slug} | Retrieves a templates resource. |
| [**templateGetDeleteRelations()**](TemplatesApi.md#templateGetDeleteRelations) | **GET** /open-api/v3/templates/get_delete_relations/{id} | Retrieves a templates resource. |
| [**templateMetadata()**](TemplatesApi.md#templateMetadata) | **GET** /open-api/v3/templates/metadata/{id} | Retrieves a templates resource. |


## `apiTemplatesGetCollection()`

```php
apiTemplatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $goal, $goal2, $source, $source2, $data_processor, $data_processor2, $priority, $priority2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $order_priority, $order_goal, $order_source, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $goal_partial, $goal_start_with, $goal_end_with, $source_partial, $source_start_with, $source_end_with): \OpenAPI\Client\Model\ApiTemplatesGetCollection200Response
```

Retrieves the collection of templates resources.

Retrieves the collection of templates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$goal = 'goal_example'; // string | 
$goal2 = array('goal_example'); // string[] | 
$source = 'source_example'; // string | 
$source2 = array('source_example'); // string[] | 
$data_processor = 'data_processor_example'; // string | 
$data_processor2 = array('data_processor_example'); // string[] | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_goal = 'order_goal_example'; // string | 
$order_source = 'order_source_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | templates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | templates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | templates slug_end_with
$id_partial = 'id_partial_example'; // string | templates id_partial
$id_start_with = 'id_start_with_example'; // string | templates id_start_with
$id_end_with = 'id_end_with_example'; // string | templates id_end_with
$name_partial = 'name_partial_example'; // string | templates name_partial
$name_start_with = 'name_start_with_example'; // string | templates name_start_with
$name_end_with = 'name_end_with_example'; // string | templates name_end_with
$goal_partial = 'goal_partial_example'; // string | templates goal_partial
$goal_start_with = 'goal_start_with_example'; // string | templates goal_start_with
$goal_end_with = 'goal_end_with_example'; // string | templates goal_end_with
$source_partial = 'source_partial_example'; // string | templates source_partial
$source_start_with = 'source_start_with_example'; // string | templates source_start_with
$source_end_with = 'source_end_with_example'; // string | templates source_end_with

try {
    $result = $apiInstance->apiTemplatesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $goal, $goal2, $source, $source2, $data_processor, $data_processor2, $priority, $priority2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $order_priority, $order_goal, $order_source, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $goal_partial, $goal_start_with, $goal_end_with, $source_partial, $source_start_with, $source_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->apiTemplatesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **goal** | **string**|  | [optional] |
| **goal2** | [**string[]**](../Model/string.md)|  | [optional] |
| **source** | **string**|  | [optional] |
| **source2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_processor** | **string**|  | [optional] |
| **data_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_goal** | **string**|  | [optional] |
| **order_source** | **string**|  | [optional] |
| **slug_partial** | **string**| templates slug_partial | [optional] |
| **slug_start_with** | **string**| templates slug_start_with | [optional] |
| **slug_end_with** | **string**| templates slug_end_with | [optional] |
| **id_partial** | **string**| templates id_partial | [optional] |
| **id_start_with** | **string**| templates id_start_with | [optional] |
| **id_end_with** | **string**| templates id_end_with | [optional] |
| **name_partial** | **string**| templates name_partial | [optional] |
| **name_start_with** | **string**| templates name_start_with | [optional] |
| **name_end_with** | **string**| templates name_end_with | [optional] |
| **goal_partial** | **string**| templates goal_partial | [optional] |
| **goal_start_with** | **string**| templates goal_start_with | [optional] |
| **goal_end_with** | **string**| templates goal_end_with | [optional] |
| **source_partial** | **string**| templates source_partial | [optional] |
| **source_start_with** | **string**| templates source_start_with | [optional] |
| **source_end_with** | **string**| templates source_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiTemplatesGetCollection200Response**](../Model/ApiTemplatesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTemplatesIdDelete()`

```php
apiTemplatesIdDelete($id)
```

Removes the templates resource.

Removes the templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier

try {
    $apiInstance->apiTemplatesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->apiTemplatesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |

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

## `apiTemplatesIdGet()`

```php
apiTemplatesIdGet($id): \OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier

try {
    $result = $apiInstance->apiTemplatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->apiTemplatesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTemplatesIdPut()`

```php
apiTemplatesIdPut($id, $templates_jsonld_add_post): \OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Replaces the templates resource.

Replaces the templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier
$templates_jsonld_add_post = new \OpenAPI\Client\Model\TemplatesJsonldAddPost(); // \OpenAPI\Client\Model\TemplatesJsonldAddPost | The updated templates resource

try {
    $result = $apiInstance->apiTemplatesIdPut($id, $templates_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->apiTemplatesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |
| **templates_jsonld_add_post** | [**\OpenAPI\Client\Model\TemplatesJsonldAddPost**](../Model/TemplatesJsonldAddPost.md)| The updated templates resource | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTemplatesPost()`

```php
apiTemplatesPost($templates_jsonld): \OpenAPI\Client\Model\TemplatesJsonldTemplateShowIdTimestampableTagTaggingListStandardShow
```

Creates a templates resource.

Creates a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templates_jsonld = new \OpenAPI\Client\Model\TemplatesJsonld(); // \OpenAPI\Client\Model\TemplatesJsonld | The new templates resource

try {
    $result = $apiInstance->apiTemplatesPost($templates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->apiTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templates_jsonld** | [**\OpenAPI\Client\Model\TemplatesJsonld**](../Model/TemplatesJsonld.md)| The new templates resource | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldTemplateShowIdTimestampableTagTaggingListStandardShow**](../Model/TemplatesJsonldTemplateShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityAnonymousPrintTemplateRender()`

```php
entityAnonymousPrintTemplateRender($module_name, $object_name, $id, $anonymous_token, $_locale, $template_id): \OpenAPI\Client\Model\TemplatesJsonld
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$module_name = 'module_name_example'; // string | templates identifier
$object_name = 'object_name_example'; // string | templates identifier
$id = 'id_example'; // string | templates identifier
$anonymous_token = 'anonymous_token_example'; // string | templates identifier
$_locale = '_locale_example'; // string | templates identifier
$template_id = 'template_id_example'; // string | templates identifier

try {
    $result = $apiInstance->entityAnonymousPrintTemplateRender($module_name, $object_name, $id, $anonymous_token, $_locale, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->entityAnonymousPrintTemplateRender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **module_name** | **string**| templates identifier | |
| **object_name** | **string**| templates identifier | |
| **id** | **string**| templates identifier | |
| **anonymous_token** | **string**| templates identifier | |
| **_locale** | **string**| templates identifier | |
| **template_id** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonld**](../Model/TemplatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityPrintTemplateRender()`

```php
entityPrintTemplateRender($module_name, $object_name, $id, $_locale, $template_id): \OpenAPI\Client\Model\TemplatesJsonld
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$module_name = 'module_name_example'; // string | templates identifier
$object_name = 'object_name_example'; // string | templates identifier
$id = 'id_example'; // string | templates identifier
$_locale = '_locale_example'; // string | templates identifier
$template_id = 'template_id_example'; // string | templates identifier

try {
    $result = $apiInstance->entityPrintTemplateRender($module_name, $object_name, $id, $_locale, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->entityPrintTemplateRender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **module_name** | **string**| templates identifier | |
| **object_name** | **string**| templates identifier | |
| **id** | **string**| templates identifier | |
| **_locale** | **string**| templates identifier | |
| **template_id** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonld**](../Model/TemplatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateApiFileUpload()`

```php
templateApiFileUpload($id, $templates_jsonld): \OpenAPI\Client\Model\TemplatesJsonldTemplateShowIdTimestampableTagTaggingListStandardShow
```

Creates a templates resource.

Creates a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier
$templates_jsonld = new \OpenAPI\Client\Model\TemplatesJsonld(); // \OpenAPI\Client\Model\TemplatesJsonld | The new templates resource

try {
    $result = $apiInstance->templateApiFileUpload($id, $templates_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |
| **templates_jsonld** | [**\OpenAPI\Client\Model\TemplatesJsonld**](../Model/TemplatesJsonld.md)| The new templates resource | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldTemplateShowIdTimestampableTagTaggingListStandardShow**](../Model/TemplatesJsonldTemplateShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateDropDown()`

```php
templateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $goal, $goal2, $source, $source2, $data_processor, $data_processor2, $priority, $priority2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $order_priority, $order_goal, $order_source, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $goal_partial, $goal_start_with, $goal_end_with, $source_partial, $source_start_with, $source_end_with): \OpenAPI\Client\Model\TemplateDropDown200Response
```

Retrieves the collection of templates resources.

Retrieves the collection of templates resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
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
$name = 'name_example'; // string | 
$name2 = array('name_example'); // string[] | 
$goal = 'goal_example'; // string | 
$goal2 = array('goal_example'); // string[] | 
$source = 'source_example'; // string | 
$source2 = array('source_example'); // string[] | 
$data_processor = 'data_processor_example'; // string | 
$data_processor2 = array('data_processor_example'); // string[] | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_name = 'order_name_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_goal = 'order_goal_example'; // string | 
$order_source = 'order_source_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | templates slug_partial
$slug_start_with = 'slug_start_with_example'; // string | templates slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | templates slug_end_with
$id_partial = 'id_partial_example'; // string | templates id_partial
$id_start_with = 'id_start_with_example'; // string | templates id_start_with
$id_end_with = 'id_end_with_example'; // string | templates id_end_with
$name_partial = 'name_partial_example'; // string | templates name_partial
$name_start_with = 'name_start_with_example'; // string | templates name_start_with
$name_end_with = 'name_end_with_example'; // string | templates name_end_with
$goal_partial = 'goal_partial_example'; // string | templates goal_partial
$goal_start_with = 'goal_start_with_example'; // string | templates goal_start_with
$goal_end_with = 'goal_end_with_example'; // string | templates goal_end_with
$source_partial = 'source_partial_example'; // string | templates source_partial
$source_start_with = 'source_start_with_example'; // string | templates source_start_with
$source_end_with = 'source_end_with_example'; // string | templates source_end_with

try {
    $result = $apiInstance->templateDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $name, $name2, $goal, $goal2, $source, $source2, $data_processor, $data_processor2, $priority, $priority2, $search, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $order_id, $order_name, $order_created_at, $order_updated_at, $order_priority, $order_goal, $order_source, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $name_partial, $name_start_with, $name_end_with, $goal_partial, $goal_start_with, $goal_end_with, $source_partial, $source_start_with, $source_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateDropDown: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**|  | [optional] |
| **name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **goal** | **string**|  | [optional] |
| **goal2** | [**string[]**](../Model/string.md)|  | [optional] |
| **source** | **string**|  | [optional] |
| **source2** | [**string[]**](../Model/string.md)|  | [optional] |
| **data_processor** | **string**|  | [optional] |
| **data_processor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_name** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_goal** | **string**|  | [optional] |
| **order_source** | **string**|  | [optional] |
| **slug_partial** | **string**| templates slug_partial | [optional] |
| **slug_start_with** | **string**| templates slug_start_with | [optional] |
| **slug_end_with** | **string**| templates slug_end_with | [optional] |
| **id_partial** | **string**| templates id_partial | [optional] |
| **id_start_with** | **string**| templates id_start_with | [optional] |
| **id_end_with** | **string**| templates id_end_with | [optional] |
| **name_partial** | **string**| templates name_partial | [optional] |
| **name_start_with** | **string**| templates name_start_with | [optional] |
| **name_end_with** | **string**| templates name_end_with | [optional] |
| **goal_partial** | **string**| templates goal_partial | [optional] |
| **goal_start_with** | **string**| templates goal_start_with | [optional] |
| **goal_end_with** | **string**| templates goal_end_with | [optional] |
| **source_partial** | **string**| templates source_partial | [optional] |
| **source_start_with** | **string**| templates source_start_with | [optional] |
| **source_end_with** | **string**| templates source_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\TemplateDropDown200Response**](../Model/TemplateDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateDuplicate()`

```php
templateDuplicate($id): \OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier

try {
    $result = $apiInstance->templateDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateFetchFiles()`

```php
templateFetchFiles($id): \OpenAPI\Client\Model\TemplatesJsonld
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier

try {
    $result = $apiInstance->templateFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonld**](../Model/TemplatesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateGetBySlug()`

```php
templateGetBySlug($slug): \OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | templates identifier

try {
    $result = $apiInstance->templateGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow**](../Model/TemplatesJsonldTemplateShowCustomPropertyIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateGetDeleteRelations()`

```php
templateGetDeleteRelations($id): \OpenAPI\Client\Model\TemplatesJsonldTemplateRelations
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier

try {
    $result = $apiInstance->templateGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldTemplateRelations**](../Model/TemplatesJsonldTemplateRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateMetadata()`

```php
templateMetadata($id): \OpenAPI\Client\Model\TemplatesJsonldIdStandardMetadataTemplateMetadataTagTaggingListTemplateRelationsTimestampable
```

Retrieves a templates resource.

Retrieves a templates resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | templates identifier

try {
    $result = $apiInstance->templateMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| templates identifier | |

### Return type

[**\OpenAPI\Client\Model\TemplatesJsonldIdStandardMetadataTemplateMetadataTagTaggingListTemplateRelationsTimestampable**](../Model/TemplatesJsonldIdStandardMetadataTemplateMetadataTagTaggingListTemplateRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
