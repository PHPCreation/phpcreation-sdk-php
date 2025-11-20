# OpenAPI\Client\HrStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiHrStatusesGetCollection()**](HrStatusesApi.md#apiHrStatusesGetCollection) | **GET** /open-api/v3/hr_statuses | Retrieves the collection of hr_statuses resources. |
| [**apiHrStatusesIdDelete()**](HrStatusesApi.md#apiHrStatusesIdDelete) | **DELETE** /open-api/v3/hr_statuses/{id} | Removes the hr_statuses resource. |
| [**apiHrStatusesIdGet()**](HrStatusesApi.md#apiHrStatusesIdGet) | **GET** /open-api/v3/hr_statuses/{id} | Retrieves a hr_statuses resource. |
| [**apiHrStatusesIdPut()**](HrStatusesApi.md#apiHrStatusesIdPut) | **PUT** /open-api/v3/hr_statuses/{id} | Replaces the hr_statuses resource. |
| [**apiHrStatusesPost()**](HrStatusesApi.md#apiHrStatusesPost) | **POST** /open-api/v3/hr_statuses | Creates a hr_statuses resource. |
| [**hrStatusApiFileUpload()**](HrStatusesApi.md#hrStatusApiFileUpload) | **POST** /open-api/v3/hr_statuses/{id}/file/upload | Creates a hr_statuses resource. |
| [**hrStatusDropDown()**](HrStatusesApi.md#hrStatusDropDown) | **GET** /open-api/v3/hr_statuses/dropdown/get | Retrieves the collection of hr_statuses resources. |
| [**hrStatusDuplicate()**](HrStatusesApi.md#hrStatusDuplicate) | **GET** /open-api/v3/hr_statuses/duplicate/{id} | Retrieves a hr_statuses resource. |
| [**hrStatusFetchFiles()**](HrStatusesApi.md#hrStatusFetchFiles) | **GET** /open-api/v3/hr_statuses/fetch_files/{id} | Retrieves a hr_statuses resource. |
| [**hrStatusGetBySlug()**](HrStatusesApi.md#hrStatusGetBySlug) | **GET** /open-api/v3/hr_statuses/by_slug/{slug} | Retrieves a hr_statuses resource. |
| [**hrStatusGetDeleteRelations()**](HrStatusesApi.md#hrStatusGetDeleteRelations) | **GET** /open-api/v3/hr_statuses/get_delete_relations/{id} | Retrieves a hr_statuses resource. |
| [**hrStatusMetadata()**](HrStatusesApi.md#hrStatusMetadata) | **GET** /open-api/v3/hr_statuses/metadata/{id} | Retrieves a hr_statuses resource. |


## `apiHrStatusesGetCollection()`

```php
apiHrStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiHrStatusesGetCollection200Response
```

Retrieves the collection of hr_statuses resources.

Retrieves the collection of hr_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
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
$slug_partial = 'slug_partial_example'; // string | hr_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | hr_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | hr_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | hr_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | hr_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | hr_statuses id_end_with
$number_partial = 'number_partial_example'; // string | hr_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | hr_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | hr_statuses number_end_with
$color_partial = 'color_partial_example'; // string | hr_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | hr_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | hr_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | hr_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | hr_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | hr_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | hr_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | hr_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | hr_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | hr_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | hr_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | hr_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | hr_statuses priority_range

try {
    $result = $apiInstance->apiHrStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->apiHrStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| hr_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| hr_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| hr_statuses slug_end_with | [optional] |
| **id_partial** | **string**| hr_statuses id_partial | [optional] |
| **id_start_with** | **string**| hr_statuses id_start_with | [optional] |
| **id_end_with** | **string**| hr_statuses id_end_with | [optional] |
| **number_partial** | **string**| hr_statuses number_partial | [optional] |
| **number_start_with** | **string**| hr_statuses number_start_with | [optional] |
| **number_end_with** | **string**| hr_statuses number_end_with | [optional] |
| **color_partial** | **string**| hr_statuses color_partial | [optional] |
| **color_start_with** | **string**| hr_statuses color_start_with | [optional] |
| **color_end_with** | **string**| hr_statuses color_end_with | [optional] |
| **icon_partial** | **string**| hr_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| hr_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| hr_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| hr_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| hr_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| hr_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| hr_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| hr_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| hr_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| hr_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiHrStatusesGetCollection200Response**](../Model/ApiHrStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrStatusesIdDelete()`

```php
apiHrStatusesIdDelete($id)
```

Removes the hr_statuses resource.

Removes the hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier

try {
    $apiInstance->apiHrStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->apiHrStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |

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

## `apiHrStatusesIdGet()`

```php
apiHrStatusesIdGet($id): \OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_statuses resource.

Retrieves a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier

try {
    $result = $apiInstance->apiHrStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->apiHrStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrStatusesIdPut()`

```php
apiHrStatusesIdPut($id, $hr_statuses_jsonld_post): \OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the hr_statuses resource.

Replaces the hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier
$hr_statuses_jsonld_post = new \OpenAPI\Client\Model\HrStatusesJsonldPost(); // \OpenAPI\Client\Model\HrStatusesJsonldPost | The updated hr_statuses resource

try {
    $result = $apiInstance->apiHrStatusesIdPut($id, $hr_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->apiHrStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |
| **hr_statuses_jsonld_post** | [**\OpenAPI\Client\Model\HrStatusesJsonldPost**](../Model/HrStatusesJsonldPost.md)| The updated hr_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiHrStatusesPost()`

```php
apiHrStatusesPost($hr_statuses_jsonld_add_post): \OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_statuses resource.

Creates a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hr_statuses_jsonld_add_post = new \OpenAPI\Client\Model\HrStatusesJsonldAddPost(); // \OpenAPI\Client\Model\HrStatusesJsonldAddPost | The new hr_statuses resource

try {
    $result = $apiInstance->apiHrStatusesPost($hr_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->apiHrStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hr_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\HrStatusesJsonldAddPost**](../Model/HrStatusesJsonldAddPost.md)| The new hr_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrStatusApiFileUpload()`

```php
hrStatusApiFileUpload($id, $hr_statuses_jsonld): \OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a hr_statuses resource.

Creates a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier
$hr_statuses_jsonld = new \OpenAPI\Client\Model\HrStatusesJsonld(); // \OpenAPI\Client\Model\HrStatusesJsonld | The new hr_statuses resource

try {
    $result = $apiInstance->hrStatusApiFileUpload($id, $hr_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->hrStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |
| **hr_statuses_jsonld** | [**\OpenAPI\Client\Model\HrStatusesJsonld**](../Model/HrStatusesJsonld.md)| The new hr_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrStatusDropDown()`

```php
hrStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\HrStatusDropDown200Response
```

Retrieves the collection of hr_statuses resources.

Retrieves the collection of hr_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
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
$slug_partial = 'slug_partial_example'; // string | hr_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | hr_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | hr_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | hr_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | hr_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | hr_statuses id_end_with
$number_partial = 'number_partial_example'; // string | hr_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | hr_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | hr_statuses number_end_with
$color_partial = 'color_partial_example'; // string | hr_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | hr_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | hr_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | hr_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | hr_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | hr_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | hr_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | hr_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | hr_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | hr_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | hr_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | hr_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | hr_statuses priority_range

try {
    $result = $apiInstance->hrStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->hrStatusDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| hr_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| hr_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| hr_statuses slug_end_with | [optional] |
| **id_partial** | **string**| hr_statuses id_partial | [optional] |
| **id_start_with** | **string**| hr_statuses id_start_with | [optional] |
| **id_end_with** | **string**| hr_statuses id_end_with | [optional] |
| **number_partial** | **string**| hr_statuses number_partial | [optional] |
| **number_start_with** | **string**| hr_statuses number_start_with | [optional] |
| **number_end_with** | **string**| hr_statuses number_end_with | [optional] |
| **color_partial** | **string**| hr_statuses color_partial | [optional] |
| **color_start_with** | **string**| hr_statuses color_start_with | [optional] |
| **color_end_with** | **string**| hr_statuses color_end_with | [optional] |
| **icon_partial** | **string**| hr_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| hr_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| hr_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| hr_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| hr_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| hr_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| hr_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| hr_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| hr_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| hr_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\HrStatusDropDown200Response**](../Model/HrStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrStatusDuplicate()`

```php
hrStatusDuplicate($id): \OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_statuses resource.

Retrieves a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier

try {
    $result = $apiInstance->hrStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->hrStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrStatusFetchFiles()`

```php
hrStatusFetchFiles($id): \OpenAPI\Client\Model\HrStatusesJsonld
```

Retrieves a hr_statuses resource.

Retrieves a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier

try {
    $result = $apiInstance->hrStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->hrStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonld**](../Model/HrStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrStatusGetBySlug()`

```php
hrStatusGetBySlug($slug): \OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a hr_statuses resource.

Retrieves a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | hr_statuses identifier

try {
    $result = $apiInstance->hrStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->hrStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| hr_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/HrStatusesJsonldHrStatusShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrStatusGetDeleteRelations()`

```php
hrStatusGetDeleteRelations($id): \OpenAPI\Client\Model\HrStatusesJsonldHrStatusRelations
```

Retrieves a hr_statuses resource.

Retrieves a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier

try {
    $result = $apiInstance->hrStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->hrStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldHrStatusRelations**](../Model/HrStatusesJsonldHrStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hrStatusMetadata()`

```php
hrStatusMetadata($id): \OpenAPI\Client\Model\HrStatusesJsonldIdStandardMetadataHrStatusMetadataTagTaggingListHrStatusRelationsTimestampable
```

Retrieves a hr_statuses resource.

Retrieves a hr_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HrStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | hr_statuses identifier

try {
    $result = $apiInstance->hrStatusMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HrStatusesApi->hrStatusMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hr_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\HrStatusesJsonldIdStandardMetadataHrStatusMetadataTagTaggingListHrStatusRelationsTimestampable**](../Model/HrStatusesJsonldIdStandardMetadataHrStatusMetadataTagTaggingListHrStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
