# OpenAPI\Client\PayrollPaymenttypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPayrollPaymenttypesGetCollection()**](PayrollPaymenttypesApi.md#apiPayrollPaymenttypesGetCollection) | **GET** /open-api/v3/payroll_paymenttypes | Retrieves the collection of payroll_paymenttypes resources. |
| [**apiPayrollPaymenttypesIdDelete()**](PayrollPaymenttypesApi.md#apiPayrollPaymenttypesIdDelete) | **DELETE** /open-api/v3/payroll_paymenttypes/{id} | Removes the payroll_paymenttypes resource. |
| [**apiPayrollPaymenttypesIdGet()**](PayrollPaymenttypesApi.md#apiPayrollPaymenttypesIdGet) | **GET** /open-api/v3/payroll_paymenttypes/{id} | Retrieves a payroll_paymenttypes resource. |
| [**apiPayrollPaymenttypesIdPut()**](PayrollPaymenttypesApi.md#apiPayrollPaymenttypesIdPut) | **PUT** /open-api/v3/payroll_paymenttypes/{id} | Replaces the payroll_paymenttypes resource. |
| [**apiPayrollPaymenttypesPost()**](PayrollPaymenttypesApi.md#apiPayrollPaymenttypesPost) | **POST** /open-api/v3/payroll_paymenttypes | Creates a payroll_paymenttypes resource. |
| [**payrollPaymentTypeApiFileUpload()**](PayrollPaymenttypesApi.md#payrollPaymentTypeApiFileUpload) | **POST** /open-api/v3/payroll_paymenttypes/{id}/file/upload | Creates a payroll_paymenttypes resource. |
| [**payrollPaymentTypeDropDown()**](PayrollPaymenttypesApi.md#payrollPaymentTypeDropDown) | **GET** /open-api/v3/payroll_paymenttypes/dropdown/get | Retrieves the collection of payroll_paymenttypes resources. |
| [**payrollPaymentTypeDuplicate()**](PayrollPaymenttypesApi.md#payrollPaymentTypeDuplicate) | **GET** /open-api/v3/payroll_paymenttypes/duplicate/{id} | Retrieves a payroll_paymenttypes resource. |
| [**payrollPaymentTypeFetchFiles()**](PayrollPaymenttypesApi.md#payrollPaymentTypeFetchFiles) | **GET** /open-api/v3/payroll_paymenttypes/fetch_files/{id} | Retrieves a payroll_paymenttypes resource. |
| [**payrollPaymentTypeGetBySlug()**](PayrollPaymenttypesApi.md#payrollPaymentTypeGetBySlug) | **GET** /open-api/v3/payroll_paymenttypes/by_slug/{slug} | Retrieves a payroll_paymenttypes resource. |
| [**payrollPaymentTypeGetDeleteRelations()**](PayrollPaymenttypesApi.md#payrollPaymentTypeGetDeleteRelations) | **GET** /open-api/v3/payroll_paymenttypes/get_delete_relations/{id} | Retrieves a payroll_paymenttypes resource. |
| [**payrollPaymentTypeMetadata()**](PayrollPaymenttypesApi.md#payrollPaymentTypeMetadata) | **GET** /open-api/v3/payroll_paymenttypes/metadata/{id} | Retrieves a payroll_paymenttypes resource. |


## `apiPayrollPaymenttypesGetCollection()`

```php
apiPayrollPaymenttypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPayrollPaymenttypesGetCollection200Response
```

Retrieves the collection of payroll_paymenttypes resources.

Retrieves the collection of payroll_paymenttypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
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
$slug_partial = 'slug_partial_example'; // string | payroll_paymenttypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_paymenttypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_paymenttypes slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_paymenttypes id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_paymenttypes id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_paymenttypes id_end_with
$number_partial = 'number_partial_example'; // string | payroll_paymenttypes number_partial
$number_start_with = 'number_start_with_example'; // string | payroll_paymenttypes number_start_with
$number_end_with = 'number_end_with_example'; // string | payroll_paymenttypes number_end_with
$color_partial = 'color_partial_example'; // string | payroll_paymenttypes color_partial
$color_start_with = 'color_start_with_example'; // string | payroll_paymenttypes color_start_with
$color_end_with = 'color_end_with_example'; // string | payroll_paymenttypes color_end_with
$icon_partial = 'icon_partial_example'; // string | payroll_paymenttypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | payroll_paymenttypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | payroll_paymenttypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | payroll_paymenttypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | payroll_paymenttypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | payroll_paymenttypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | payroll_paymenttypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | payroll_paymenttypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | payroll_paymenttypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | payroll_paymenttypes priority_range

try {
    $result = $apiInstance->apiPayrollPaymenttypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->apiPayrollPaymenttypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| payroll_paymenttypes slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_paymenttypes slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_paymenttypes slug_end_with | [optional] |
| **id_partial** | **string**| payroll_paymenttypes id_partial | [optional] |
| **id_start_with** | **string**| payroll_paymenttypes id_start_with | [optional] |
| **id_end_with** | **string**| payroll_paymenttypes id_end_with | [optional] |
| **number_partial** | **string**| payroll_paymenttypes number_partial | [optional] |
| **number_start_with** | **string**| payroll_paymenttypes number_start_with | [optional] |
| **number_end_with** | **string**| payroll_paymenttypes number_end_with | [optional] |
| **color_partial** | **string**| payroll_paymenttypes color_partial | [optional] |
| **color_start_with** | **string**| payroll_paymenttypes color_start_with | [optional] |
| **color_end_with** | **string**| payroll_paymenttypes color_end_with | [optional] |
| **icon_partial** | **string**| payroll_paymenttypes icon_partial | [optional] |
| **icon_start_with** | **string**| payroll_paymenttypes icon_start_with | [optional] |
| **icon_end_with** | **string**| payroll_paymenttypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| payroll_paymenttypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| payroll_paymenttypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| payroll_paymenttypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| payroll_paymenttypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| payroll_paymenttypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| payroll_paymenttypes translations.description_end_with | [optional] |
| **priority_range** | **string**| payroll_paymenttypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPayrollPaymenttypesGetCollection200Response**](../Model/ApiPayrollPaymenttypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollPaymenttypesIdDelete()`

```php
apiPayrollPaymenttypesIdDelete($id)
```

Removes the payroll_paymenttypes resource.

Removes the payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier

try {
    $apiInstance->apiPayrollPaymenttypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->apiPayrollPaymenttypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |

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

## `apiPayrollPaymenttypesIdGet()`

```php
apiPayrollPaymenttypesIdGet($id): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_paymenttypes resource.

Retrieves a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier

try {
    $result = $apiInstance->apiPayrollPaymenttypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->apiPayrollPaymenttypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollPaymenttypesIdPut()`

```php
apiPayrollPaymenttypesIdPut($id, $payroll_paymenttypes_jsonld_post): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the payroll_paymenttypes resource.

Replaces the payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier
$payroll_paymenttypes_jsonld_post = new \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPost(); // \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPost | The updated payroll_paymenttypes resource

try {
    $result = $apiInstance->apiPayrollPaymenttypesIdPut($id, $payroll_paymenttypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->apiPayrollPaymenttypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |
| **payroll_paymenttypes_jsonld_post** | [**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPost**](../Model/PayrollPaymenttypesJsonldPost.md)| The updated payroll_paymenttypes resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollPaymenttypesPost()`

```php
apiPayrollPaymenttypesPost($payroll_paymenttypes_jsonld_add_post): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_paymenttypes resource.

Creates a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_paymenttypes_jsonld_add_post = new \OpenAPI\Client\Model\PayrollPaymenttypesJsonldAddPost(); // \OpenAPI\Client\Model\PayrollPaymenttypesJsonldAddPost | The new payroll_paymenttypes resource

try {
    $result = $apiInstance->apiPayrollPaymenttypesPost($payroll_paymenttypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->apiPayrollPaymenttypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_paymenttypes_jsonld_add_post** | [**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldAddPost**](../Model/PayrollPaymenttypesJsonldAddPost.md)| The new payroll_paymenttypes resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollPaymentTypeApiFileUpload()`

```php
payrollPaymentTypeApiFileUpload($id, $payroll_paymenttypes_jsonld): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_paymenttypes resource.

Creates a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier
$payroll_paymenttypes_jsonld = new \OpenAPI\Client\Model\PayrollPaymenttypesJsonld(); // \OpenAPI\Client\Model\PayrollPaymenttypesJsonld | The new payroll_paymenttypes resource

try {
    $result = $apiInstance->payrollPaymentTypeApiFileUpload($id, $payroll_paymenttypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->payrollPaymentTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |
| **payroll_paymenttypes_jsonld** | [**\OpenAPI\Client\Model\PayrollPaymenttypesJsonld**](../Model/PayrollPaymenttypesJsonld.md)| The new payroll_paymenttypes resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollPaymentTypeDropDown()`

```php
payrollPaymentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\PayrollPaymentTypeDropDown200Response
```

Retrieves the collection of payroll_paymenttypes resources.

Retrieves the collection of payroll_paymenttypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
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
$slug_partial = 'slug_partial_example'; // string | payroll_paymenttypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_paymenttypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_paymenttypes slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_paymenttypes id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_paymenttypes id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_paymenttypes id_end_with
$number_partial = 'number_partial_example'; // string | payroll_paymenttypes number_partial
$number_start_with = 'number_start_with_example'; // string | payroll_paymenttypes number_start_with
$number_end_with = 'number_end_with_example'; // string | payroll_paymenttypes number_end_with
$color_partial = 'color_partial_example'; // string | payroll_paymenttypes color_partial
$color_start_with = 'color_start_with_example'; // string | payroll_paymenttypes color_start_with
$color_end_with = 'color_end_with_example'; // string | payroll_paymenttypes color_end_with
$icon_partial = 'icon_partial_example'; // string | payroll_paymenttypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | payroll_paymenttypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | payroll_paymenttypes icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | payroll_paymenttypes translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | payroll_paymenttypes translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | payroll_paymenttypes translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | payroll_paymenttypes translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | payroll_paymenttypes translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | payroll_paymenttypes translations.description_end_with
$priority_range = 'priority_range_example'; // string | payroll_paymenttypes priority_range

try {
    $result = $apiInstance->payrollPaymentTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->payrollPaymentTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| payroll_paymenttypes slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_paymenttypes slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_paymenttypes slug_end_with | [optional] |
| **id_partial** | **string**| payroll_paymenttypes id_partial | [optional] |
| **id_start_with** | **string**| payroll_paymenttypes id_start_with | [optional] |
| **id_end_with** | **string**| payroll_paymenttypes id_end_with | [optional] |
| **number_partial** | **string**| payroll_paymenttypes number_partial | [optional] |
| **number_start_with** | **string**| payroll_paymenttypes number_start_with | [optional] |
| **number_end_with** | **string**| payroll_paymenttypes number_end_with | [optional] |
| **color_partial** | **string**| payroll_paymenttypes color_partial | [optional] |
| **color_start_with** | **string**| payroll_paymenttypes color_start_with | [optional] |
| **color_end_with** | **string**| payroll_paymenttypes color_end_with | [optional] |
| **icon_partial** | **string**| payroll_paymenttypes icon_partial | [optional] |
| **icon_start_with** | **string**| payroll_paymenttypes icon_start_with | [optional] |
| **icon_end_with** | **string**| payroll_paymenttypes icon_end_with | [optional] |
| **translations_title_partial** | **string**| payroll_paymenttypes translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| payroll_paymenttypes translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| payroll_paymenttypes translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| payroll_paymenttypes translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| payroll_paymenttypes translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| payroll_paymenttypes translations.description_end_with | [optional] |
| **priority_range** | **string**| payroll_paymenttypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymentTypeDropDown200Response**](../Model/PayrollPaymentTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollPaymentTypeDuplicate()`

```php
payrollPaymentTypeDuplicate($id): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_paymenttypes resource.

Retrieves a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier

try {
    $result = $apiInstance->payrollPaymentTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->payrollPaymentTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollPaymentTypeFetchFiles()`

```php
payrollPaymentTypeFetchFiles($id): \OpenAPI\Client\Model\PayrollPaymenttypesJsonld
```

Retrieves a payroll_paymenttypes resource.

Retrieves a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier

try {
    $result = $apiInstance->payrollPaymentTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->payrollPaymentTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonld**](../Model/PayrollPaymenttypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollPaymentTypeGetBySlug()`

```php
payrollPaymentTypeGetBySlug($slug): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_paymenttypes resource.

Retrieves a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | payroll_paymenttypes identifier

try {
    $result = $apiInstance->payrollPaymentTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->payrollPaymentTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| payroll_paymenttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollPaymenttypesJsonldPayrollPaymentTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollPaymentTypeGetDeleteRelations()`

```php
payrollPaymentTypeGetDeleteRelations($id): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeRelations
```

Retrieves a payroll_paymenttypes resource.

Retrieves a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier

try {
    $result = $apiInstance->payrollPaymentTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->payrollPaymentTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldPayrollPaymentTypeRelations**](../Model/PayrollPaymenttypesJsonldPayrollPaymentTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollPaymentTypeMetadata()`

```php
payrollPaymentTypeMetadata($id): \OpenAPI\Client\Model\PayrollPaymenttypesJsonldIdStandardMetadataPayrollPaymentTypeMetadataTagTaggingListPayrollPaymentTypeRelationsTimestampable
```

Retrieves a payroll_paymenttypes resource.

Retrieves a payroll_paymenttypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollPaymenttypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_paymenttypes identifier

try {
    $result = $apiInstance->payrollPaymentTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPaymenttypesApi->payrollPaymentTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_paymenttypes identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollPaymenttypesJsonldIdStandardMetadataPayrollPaymentTypeMetadataTagTaggingListPayrollPaymentTypeRelationsTimestampable**](../Model/PayrollPaymenttypesJsonldIdStandardMetadataPayrollPaymentTypeMetadataTagTaggingListPayrollPaymentTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
