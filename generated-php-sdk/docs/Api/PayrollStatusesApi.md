# OpenAPI\Client\PayrollStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPayrollStatusesGetCollection()**](PayrollStatusesApi.md#apiPayrollStatusesGetCollection) | **GET** /open-api/v3/payroll_statuses | Retrieves the collection of payroll_statuses resources. |
| [**apiPayrollStatusesIdDelete()**](PayrollStatusesApi.md#apiPayrollStatusesIdDelete) | **DELETE** /open-api/v3/payroll_statuses/{id} | Removes the payroll_statuses resource. |
| [**apiPayrollStatusesIdGet()**](PayrollStatusesApi.md#apiPayrollStatusesIdGet) | **GET** /open-api/v3/payroll_statuses/{id} | Retrieves a payroll_statuses resource. |
| [**apiPayrollStatusesIdPut()**](PayrollStatusesApi.md#apiPayrollStatusesIdPut) | **PUT** /open-api/v3/payroll_statuses/{id} | Replaces the payroll_statuses resource. |
| [**apiPayrollStatusesPost()**](PayrollStatusesApi.md#apiPayrollStatusesPost) | **POST** /open-api/v3/payroll_statuses | Creates a payroll_statuses resource. |
| [**payrollStatusApiFileUpload()**](PayrollStatusesApi.md#payrollStatusApiFileUpload) | **POST** /open-api/v3/payroll_statuses/{id}/file/upload | Creates a payroll_statuses resource. |
| [**payrollStatusDropDown()**](PayrollStatusesApi.md#payrollStatusDropDown) | **GET** /open-api/v3/payroll_statuses/dropdown/get | Retrieves the collection of payroll_statuses resources. |
| [**payrollStatusDuplicate()**](PayrollStatusesApi.md#payrollStatusDuplicate) | **GET** /open-api/v3/payroll_statuses/duplicate/{id} | Retrieves a payroll_statuses resource. |
| [**payrollStatusFetchFiles()**](PayrollStatusesApi.md#payrollStatusFetchFiles) | **GET** /open-api/v3/payroll_statuses/fetch_files/{id} | Retrieves a payroll_statuses resource. |
| [**payrollStatusGetBySlug()**](PayrollStatusesApi.md#payrollStatusGetBySlug) | **GET** /open-api/v3/payroll_statuses/by_slug/{slug} | Retrieves a payroll_statuses resource. |
| [**payrollStatusGetDeleteRelations()**](PayrollStatusesApi.md#payrollStatusGetDeleteRelations) | **GET** /open-api/v3/payroll_statuses/get_delete_relations/{id} | Retrieves a payroll_statuses resource. |
| [**payrollStatusMetadata()**](PayrollStatusesApi.md#payrollStatusMetadata) | **GET** /open-api/v3/payroll_statuses/metadata/{id} | Retrieves a payroll_statuses resource. |


## `apiPayrollStatusesGetCollection()`

```php
apiPayrollStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPayrollStatusesGetCollection200Response
```

Retrieves the collection of payroll_statuses resources.

Retrieves the collection of payroll_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
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
$accountable = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | payroll_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_statuses id_end_with
$number_partial = 'number_partial_example'; // string | payroll_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | payroll_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | payroll_statuses number_end_with
$color_partial = 'color_partial_example'; // string | payroll_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | payroll_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | payroll_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | payroll_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | payroll_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | payroll_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | payroll_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | payroll_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | payroll_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | payroll_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | payroll_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | payroll_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | payroll_statuses priority_range

try {
    $result = $apiInstance->apiPayrollStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->apiPayrollStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **accountable** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| payroll_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_statuses slug_end_with | [optional] |
| **id_partial** | **string**| payroll_statuses id_partial | [optional] |
| **id_start_with** | **string**| payroll_statuses id_start_with | [optional] |
| **id_end_with** | **string**| payroll_statuses id_end_with | [optional] |
| **number_partial** | **string**| payroll_statuses number_partial | [optional] |
| **number_start_with** | **string**| payroll_statuses number_start_with | [optional] |
| **number_end_with** | **string**| payroll_statuses number_end_with | [optional] |
| **color_partial** | **string**| payroll_statuses color_partial | [optional] |
| **color_start_with** | **string**| payroll_statuses color_start_with | [optional] |
| **color_end_with** | **string**| payroll_statuses color_end_with | [optional] |
| **icon_partial** | **string**| payroll_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| payroll_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| payroll_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| payroll_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| payroll_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| payroll_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| payroll_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| payroll_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| payroll_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| payroll_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPayrollStatusesGetCollection200Response**](../Model/ApiPayrollStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollStatusesIdDelete()`

```php
apiPayrollStatusesIdDelete($id)
```

Removes the payroll_statuses resource.

Removes the payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier

try {
    $apiInstance->apiPayrollStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->apiPayrollStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |

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

## `apiPayrollStatusesIdGet()`

```php
apiPayrollStatusesIdGet($id): \OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_statuses resource.

Retrieves a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier

try {
    $result = $apiInstance->apiPayrollStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->apiPayrollStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollStatusesIdPut()`

```php
apiPayrollStatusesIdPut($id, $payroll_statuses_jsonld_post): \OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the payroll_statuses resource.

Replaces the payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier
$payroll_statuses_jsonld_post = new \OpenAPI\Client\Model\PayrollStatusesJsonldPost(); // \OpenAPI\Client\Model\PayrollStatusesJsonldPost | The updated payroll_statuses resource

try {
    $result = $apiInstance->apiPayrollStatusesIdPut($id, $payroll_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->apiPayrollStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |
| **payroll_statuses_jsonld_post** | [**\OpenAPI\Client\Model\PayrollStatusesJsonldPost**](../Model/PayrollStatusesJsonldPost.md)| The updated payroll_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPayrollStatusesPost()`

```php
apiPayrollStatusesPost($payroll_statuses_jsonld_add_post): \OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_statuses resource.

Creates a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_statuses_jsonld_add_post = new \OpenAPI\Client\Model\PayrollStatusesJsonldAddPost(); // \OpenAPI\Client\Model\PayrollStatusesJsonldAddPost | The new payroll_statuses resource

try {
    $result = $apiInstance->apiPayrollStatusesPost($payroll_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->apiPayrollStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\PayrollStatusesJsonldAddPost**](../Model/PayrollStatusesJsonldAddPost.md)| The new payroll_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollStatusApiFileUpload()`

```php
payrollStatusApiFileUpload($id, $payroll_statuses_jsonld): \OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a payroll_statuses resource.

Creates a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier
$payroll_statuses_jsonld = new \OpenAPI\Client\Model\PayrollStatusesJsonld(); // \OpenAPI\Client\Model\PayrollStatusesJsonld | The new payroll_statuses resource

try {
    $result = $apiInstance->payrollStatusApiFileUpload($id, $payroll_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->payrollStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |
| **payroll_statuses_jsonld** | [**\OpenAPI\Client\Model\PayrollStatusesJsonld**](../Model/PayrollStatusesJsonld.md)| The new payroll_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollStatusDropDown()`

```php
payrollStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\PayrollStatusDropDown200Response
```

Retrieves the collection of payroll_statuses resources.

Retrieves the collection of payroll_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
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
$accountable = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | payroll_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | payroll_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | payroll_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | payroll_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | payroll_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | payroll_statuses id_end_with
$number_partial = 'number_partial_example'; // string | payroll_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | payroll_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | payroll_statuses number_end_with
$color_partial = 'color_partial_example'; // string | payroll_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | payroll_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | payroll_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | payroll_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | payroll_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | payroll_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | payroll_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | payroll_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | payroll_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | payroll_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | payroll_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | payroll_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | payroll_statuses priority_range

try {
    $result = $apiInstance->payrollStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->payrollStatusDropDown: ', $e->getMessage(), PHP_EOL;
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
| **accountable** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| payroll_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| payroll_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| payroll_statuses slug_end_with | [optional] |
| **id_partial** | **string**| payroll_statuses id_partial | [optional] |
| **id_start_with** | **string**| payroll_statuses id_start_with | [optional] |
| **id_end_with** | **string**| payroll_statuses id_end_with | [optional] |
| **number_partial** | **string**| payroll_statuses number_partial | [optional] |
| **number_start_with** | **string**| payroll_statuses number_start_with | [optional] |
| **number_end_with** | **string**| payroll_statuses number_end_with | [optional] |
| **color_partial** | **string**| payroll_statuses color_partial | [optional] |
| **color_start_with** | **string**| payroll_statuses color_start_with | [optional] |
| **color_end_with** | **string**| payroll_statuses color_end_with | [optional] |
| **icon_partial** | **string**| payroll_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| payroll_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| payroll_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| payroll_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| payroll_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| payroll_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| payroll_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| payroll_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| payroll_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| payroll_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusDropDown200Response**](../Model/PayrollStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollStatusDuplicate()`

```php
payrollStatusDuplicate($id): \OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_statuses resource.

Retrieves a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier

try {
    $result = $apiInstance->payrollStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->payrollStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollStatusFetchFiles()`

```php
payrollStatusFetchFiles($id): \OpenAPI\Client\Model\PayrollStatusesJsonld
```

Retrieves a payroll_statuses resource.

Retrieves a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier

try {
    $result = $apiInstance->payrollStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->payrollStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonld**](../Model/PayrollStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollStatusGetBySlug()`

```php
payrollStatusGetBySlug($slug): \OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a payroll_statuses resource.

Retrieves a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | payroll_statuses identifier

try {
    $result = $apiInstance->payrollStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->payrollStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| payroll_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PayrollStatusesJsonldPayrollStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollStatusGetDeleteRelations()`

```php
payrollStatusGetDeleteRelations($id): \OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusRelations
```

Retrieves a payroll_statuses resource.

Retrieves a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier

try {
    $result = $apiInstance->payrollStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->payrollStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldPayrollStatusRelations**](../Model/PayrollStatusesJsonldPayrollStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollStatusMetadata()`

```php
payrollStatusMetadata($id): \OpenAPI\Client\Model\PayrollStatusesJsonldIdStandardMetadataPayrollStatusMetadataTagTaggingListPayrollStatusRelationsTimestampable
```

Retrieves a payroll_statuses resource.

Retrieves a payroll_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayrollStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | payroll_statuses identifier

try {
    $result = $apiInstance->payrollStatusMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollStatusesApi->payrollStatusMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| payroll_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PayrollStatusesJsonldIdStandardMetadataPayrollStatusMetadataTagTaggingListPayrollStatusRelationsTimestampable**](../Model/PayrollStatusesJsonldIdStandardMetadataPayrollStatusMetadataTagTaggingListPayrollStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
