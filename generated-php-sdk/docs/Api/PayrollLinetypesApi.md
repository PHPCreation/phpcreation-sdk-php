# OpenAPI\Client\PayrollLinetypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPayrollLinetypesGetCollection()**](PayrollLinetypesApi.md#apiPayrollLinetypesGetCollection) | **GET** /open-api/v3/payroll_linetypes | Retrieves the collection of payroll_linetypes resources. |
| [**apiPayrollLinetypesIdDelete()**](PayrollLinetypesApi.md#apiPayrollLinetypesIdDelete) | **DELETE** /open-api/v3/payroll_linetypes/{id} | Removes the payroll_linetypes resource. |
| [**apiPayrollLinetypesIdGet()**](PayrollLinetypesApi.md#apiPayrollLinetypesIdGet) | **GET** /open-api/v3/payroll_linetypes/{id} | Retrieves a payroll_linetypes resource. |
| [**apiPayrollLinetypesIdPut()**](PayrollLinetypesApi.md#apiPayrollLinetypesIdPut) | **PUT** /open-api/v3/payroll_linetypes/{id} | Replaces the payroll_linetypes resource. |
| [**apiPayrollLinetypesPost()**](PayrollLinetypesApi.md#apiPayrollLinetypesPost) | **POST** /open-api/v3/payroll_linetypes | Creates a payroll_linetypes resource. |
| [**payrollLineTypeApiFileUpload()**](PayrollLinetypesApi.md#payrollLineTypeApiFileUpload) | **POST** /open-api/v3/payroll_linetypes/{id}/file/upload | Creates a payroll_linetypes resource. |
| [**payrollLineTypeDropDown()**](PayrollLinetypesApi.md#payrollLineTypeDropDown) | **GET** /open-api/v3/payroll_linetypes/dropdown/get | Retrieves the collection of payroll_linetypes resources. |
| [**payrollLineTypeDuplicate()**](PayrollLinetypesApi.md#payrollLineTypeDuplicate) | **GET** /open-api/v3/payroll_linetypes/duplicate/{id} | Retrieves a payroll_linetypes resource. |
| [**payrollLineTypeFetchFiles()**](PayrollLinetypesApi.md#payrollLineTypeFetchFiles) | **GET** /open-api/v3/payroll_linetypes/fetch_files/{id} | Retrieves a payroll_linetypes resource. |
| [**payrollLineTypeGetBySlug()**](PayrollLinetypesApi.md#payrollLineTypeGetBySlug) | **GET** /open-api/v3/payroll_linetypes/by_slug/{slug} | Retrieves a payroll_linetypes resource. |
| [**payrollLineTypeGetDeleteRelations()**](PayrollLinetypesApi.md#payrollLineTypeGetDeleteRelations) | **GET** /open-api/v3/payroll_linetypes/get_delete_relations/{id} | Retrieves a payroll_linetypes resource. |
| [**payrollLineTypeMetadata()**](PayrollLinetypesApi.md#payrollLineTypeMetadata) | **GET** /open-api/v3/payroll_linetypes/metadata/{id} | Retrieves a payroll_linetypes resource. |


## `apiPayrollLinetypesGetCollection()`

```php
apiPayrollLinetypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPayrollLinetypesGetCollection200Response
```

Retrieves the collection of payroll_linetypes resources.

Retrieves the collection of payroll_linetypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | payroll_linetypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_linetypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_linetypes slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_linetypes id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_linetypes id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_linetypes id_end_with
$number_partial = 'number_partial_example'; // string | payroll_linetypes number_partial
$number_start_with = 'number_start_with_example'; // string | payroll_linetypes number_start_with
$number_end_with = 'number_end_with_example'; // string | payroll_linetypes number_end_with
$color_partial = 'color_partial_example'; // string | payroll_linetypes color_partial
$color_start_with = 'color_start_with_example'; // string | payroll_linetypes color_start_with
$color_end_with = 'color_end_with_example'; // string | payroll_linetypes color_end_with
$icon_partial = 'icon_partial_example'; // string | payroll_linetypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | payroll_linetypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | payroll_linetypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | payroll_linetypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | payroll_linetypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | payroll_linetypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | payroll_linetypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | payroll_linetypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | payroll_linetypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | payroll_linetypes priority_range

try {
    $result = $apiInstance->apiPayrollLinetypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->apiPayrollLinetypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| payroll_linetypes slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_linetypes slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_linetypes slug_end_with | [optional] |
| **id_partial** | **string**| payroll_linetypes id_partial | [optional] |
| **id_start_with** | **string**| payroll_linetypes id_start_with | [optional] |
| **id_end_with** | **string**| payroll_linetypes id_end_with | [optional] |
| **number_partial** | **string**| payroll_linetypes number_partial | [optional] |
| **number_start_with** | **string**| payroll_linetypes number_start_with | [optional] |
| **number_end_with** | **string**| payroll_linetypes number_end_with | [optional] |
| **color_partial** | **string**| payroll_linetypes color_partial | [optional] |
| **color_start_with** | **string**| payroll_linetypes color_start_with | [optional] |
| **color_end_with** | **string**| payroll_linetypes color_end_with | [optional] |
| **icon_partial** | **string**| payroll_linetypes icon_partial | [optional] |
| **icon_start_with** | **string**| payroll_linetypes icon_start_with | [optional] |
| **icon_end_with** | **string**| payroll_linetypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| payroll_linetypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| payroll_linetypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| payroll_linetypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| payroll_linetypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| payroll_linetypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| payroll_linetypes translations.description_end_with | [optional] |
| **priority_range** | **string**| payroll_linetypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPayrollLinetypesGetCollection200Response**](../Model/ApiPayrollLinetypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollLinetypesIdDelete()`

```php
apiPayrollLinetypesIdDelete($id)
```

Removes the payroll_linetypes resource.

Removes the payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier

try {
    $apiInstance->apiPayrollLinetypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->apiPayrollLinetypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |

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

## `apiPayrollLinetypesIdGet()`

```php
apiPayrollLinetypesIdGet($id): \OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_linetypes resource.

Retrieves a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier

try {
    $result = $apiInstance->apiPayrollLinetypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->apiPayrollLinetypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollLinetypesIdPut()`

```php
apiPayrollLinetypesIdPut($id, $payroll_linetypes_jsonld_post): \OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the payroll_linetypes resource.

Replaces the payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier
$payroll_linetypes_jsonld_post = new \OpenAPI\Client\Model\PayrollLinetypesJsonldPost(); // \OpenAPI\Client\Model\PayrollLinetypesJsonldPost | The updated payroll_linetypes resource

try {
    $result = $apiInstance->apiPayrollLinetypesIdPut($id, $payroll_linetypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->apiPayrollLinetypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |
| **payroll_linetypes_jsonld_post** | [**\OpenAPI\Client\Model\PayrollLinetypesJsonldPost**](../Model/PayrollLinetypesJsonldPost.md)| The updated payroll_linetypes resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollLinetypesPost()`

```php
apiPayrollLinetypesPost($payroll_linetypes_jsonld_add_post): \OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_linetypes resource.

Creates a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_linetypes_jsonld_add_post = new \OpenAPI\Client\Model\PayrollLinetypesJsonldAddPost(); // \OpenAPI\Client\Model\PayrollLinetypesJsonldAddPost | The new payroll_linetypes resource

try {
    $result = $apiInstance->apiPayrollLinetypesPost($payroll_linetypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->apiPayrollLinetypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_linetypes_jsonld_add_post** | [**\OpenAPI\Client\Model\PayrollLinetypesJsonldAddPost**](../Model/PayrollLinetypesJsonldAddPost.md)| The new payroll_linetypes resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollLineTypeApiFileUpload()`

```php
payrollLineTypeApiFileUpload($id, $payroll_linetypes_jsonld): \OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_linetypes resource.

Creates a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier
$payroll_linetypes_jsonld = new \OpenAPI\Client\Model\PayrollLinetypesJsonld(); // \OpenAPI\Client\Model\PayrollLinetypesJsonld | The new payroll_linetypes resource

try {
    $result = $apiInstance->payrollLineTypeApiFileUpload($id, $payroll_linetypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->payrollLineTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |
| **payroll_linetypes_jsonld** | [**\OpenAPI\Client\Model\PayrollLinetypesJsonld**](../Model/PayrollLinetypesJsonld.md)| The new payroll_linetypes resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollLineTypeDropDown()`

```php
payrollLineTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\PayrollLineTypeDropDown200Response
```

Retrieves the collection of payroll_linetypes resources.

Retrieves the collection of payroll_linetypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | payroll_linetypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_linetypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_linetypes slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_linetypes id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_linetypes id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_linetypes id_end_with
$number_partial = 'number_partial_example'; // string | payroll_linetypes number_partial
$number_start_with = 'number_start_with_example'; // string | payroll_linetypes number_start_with
$number_end_with = 'number_end_with_example'; // string | payroll_linetypes number_end_with
$color_partial = 'color_partial_example'; // string | payroll_linetypes color_partial
$color_start_with = 'color_start_with_example'; // string | payroll_linetypes color_start_with
$color_end_with = 'color_end_with_example'; // string | payroll_linetypes color_end_with
$icon_partial = 'icon_partial_example'; // string | payroll_linetypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | payroll_linetypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | payroll_linetypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | payroll_linetypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | payroll_linetypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | payroll_linetypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | payroll_linetypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | payroll_linetypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | payroll_linetypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | payroll_linetypes priority_range

try {
    $result = $apiInstance->payrollLineTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->payrollLineTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| payroll_linetypes slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_linetypes slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_linetypes slug_end_with | [optional] |
| **id_partial** | **string**| payroll_linetypes id_partial | [optional] |
| **id_start_with** | **string**| payroll_linetypes id_start_with | [optional] |
| **id_end_with** | **string**| payroll_linetypes id_end_with | [optional] |
| **number_partial** | **string**| payroll_linetypes number_partial | [optional] |
| **number_start_with** | **string**| payroll_linetypes number_start_with | [optional] |
| **number_end_with** | **string**| payroll_linetypes number_end_with | [optional] |
| **color_partial** | **string**| payroll_linetypes color_partial | [optional] |
| **color_start_with** | **string**| payroll_linetypes color_start_with | [optional] |
| **color_end_with** | **string**| payroll_linetypes color_end_with | [optional] |
| **icon_partial** | **string**| payroll_linetypes icon_partial | [optional] |
| **icon_start_with** | **string**| payroll_linetypes icon_start_with | [optional] |
| **icon_end_with** | **string**| payroll_linetypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| payroll_linetypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| payroll_linetypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| payroll_linetypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| payroll_linetypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| payroll_linetypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| payroll_linetypes translations.description_end_with | [optional] |
| **priority_range** | **string**| payroll_linetypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollLineTypeDropDown200Response**](../Model/PayrollLineTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollLineTypeDuplicate()`

```php
payrollLineTypeDuplicate($id): \OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_linetypes resource.

Retrieves a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier

try {
    $result = $apiInstance->payrollLineTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->payrollLineTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollLineTypeFetchFiles()`

```php
payrollLineTypeFetchFiles($id): \OpenAPI\Client\Model\PayrollLinetypesJsonld
```

Retrieves a payroll_linetypes resource.

Retrieves a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier

try {
    $result = $apiInstance->payrollLineTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->payrollLineTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonld**](../Model/PayrollLinetypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollLineTypeGetBySlug()`

```php
payrollLineTypeGetBySlug($slug): \OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_linetypes resource.

Retrieves a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | payroll_linetypes identifier

try {
    $result = $apiInstance->payrollLineTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->payrollLineTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| payroll_linetypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollLinetypesJsonldPayrollLineTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollLineTypeGetDeleteRelations()`

```php
payrollLineTypeGetDeleteRelations($id): \OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeRelations
```

Retrieves a payroll_linetypes resource.

Retrieves a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier

try {
    $result = $apiInstance->payrollLineTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->payrollLineTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldPayrollLineTypeRelations**](../Model/PayrollLinetypesJsonldPayrollLineTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollLineTypeMetadata()`

```php
payrollLineTypeMetadata($id): \OpenAPI\Client\Model\PayrollLinetypesJsonldIdStandardMetadataPayrollLineTypeMetadataTagTaggingListPayrollLineTypeRelationsTimestampable
```

Retrieves a payroll_linetypes resource.

Retrieves a payroll_linetypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollLinetypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_linetypes identifier

try {
    $result = $apiInstance->payrollLineTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollLinetypesApi->payrollLineTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_linetypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollLinetypesJsonldIdStandardMetadataPayrollLineTypeMetadataTagTaggingListPayrollLineTypeRelationsTimestampable**](../Model/PayrollLinetypesJsonldIdStandardMetadataPayrollLineTypeMetadataTagTaggingListPayrollLineTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
