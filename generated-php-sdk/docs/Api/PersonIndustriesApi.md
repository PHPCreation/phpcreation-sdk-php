# OpenAPI\Client\PersonIndustriesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonIndustriesGetCollection()**](PersonIndustriesApi.md#apiPersonIndustriesGetCollection) | **GET** /open-api/v3/person_industries | Retrieves the collection of person_industries resources. |
| [**apiPersonIndustriesIdDelete()**](PersonIndustriesApi.md#apiPersonIndustriesIdDelete) | **DELETE** /open-api/v3/person_industries/{id} | Removes the person_industries resource. |
| [**apiPersonIndustriesIdGet()**](PersonIndustriesApi.md#apiPersonIndustriesIdGet) | **GET** /open-api/v3/person_industries/{id} | Retrieves a person_industries resource. |
| [**apiPersonIndustriesIdPut()**](PersonIndustriesApi.md#apiPersonIndustriesIdPut) | **PUT** /open-api/v3/person_industries/{id} | Replaces the person_industries resource. |
| [**apiPersonIndustriesPost()**](PersonIndustriesApi.md#apiPersonIndustriesPost) | **POST** /open-api/v3/person_industries | Creates a person_industries resource. |
| [**personIndustryApiFileUpload()**](PersonIndustriesApi.md#personIndustryApiFileUpload) | **POST** /open-api/v3/person_industries/{id}/file/upload | Creates a person_industries resource. |
| [**personIndustryDropDown()**](PersonIndustriesApi.md#personIndustryDropDown) | **GET** /open-api/v3/person_industries/dropdown/get | Retrieves the collection of person_industries resources. |
| [**personIndustryDuplicate()**](PersonIndustriesApi.md#personIndustryDuplicate) | **GET** /open-api/v3/person_industries/duplicate/{id} | Retrieves a person_industries resource. |
| [**personIndustryFetchFiles()**](PersonIndustriesApi.md#personIndustryFetchFiles) | **GET** /open-api/v3/person_industries/fetch_files/{id} | Retrieves a person_industries resource. |
| [**personIndustryGetBySlug()**](PersonIndustriesApi.md#personIndustryGetBySlug) | **GET** /open-api/v3/person_industries/by_slug/{slug} | Retrieves a person_industries resource. |
| [**personIndustryGetDeleteRelations()**](PersonIndustriesApi.md#personIndustryGetDeleteRelations) | **GET** /open-api/v3/person_industries/get_delete_relations/{id} | Retrieves a person_industries resource. |
| [**personIndustryMetadata()**](PersonIndustriesApi.md#personIndustryMetadata) | **GET** /open-api/v3/person_industries/metadata/{id} | Retrieves a person_industries resource. |


## `apiPersonIndustriesGetCollection()`

```php
apiPersonIndustriesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $sector, $sector2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonIndustriesGetCollection200Response
```

Retrieves the collection of person_industries resources.

Retrieves the collection of person_industries resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
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
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$value = 56; // int | 
$value2 = array(56); // int[] | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
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
$slug_partial = 'slug_partial_example'; // string | person_industries slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_industries slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_industries slug_end_with
$id_partial = 'id_partial_example'; // string | person_industries id_partial
$id_start_with = 'id_start_with_example'; // string | person_industries id_start_with
$id_end_with = 'id_end_with_example'; // string | person_industries id_end_with
$icon_partial = 'icon_partial_example'; // string | person_industries icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_industries icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_industries icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_industries translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_industries translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_industries translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_industries translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_industries translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_industries translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_industries priority_range

try {
    $result = $apiInstance->apiPersonIndustriesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $sector, $sector2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->apiPersonIndustriesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value** | **int**|  | [optional] |
| **value2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
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
| **slug_partial** | **string**| person_industries slug_partial | [optional] |
| **slug_start_with** | **string**| person_industries slug_start_with | [optional] |
| **slug_end_with** | **string**| person_industries slug_end_with | [optional] |
| **id_partial** | **string**| person_industries id_partial | [optional] |
| **id_start_with** | **string**| person_industries id_start_with | [optional] |
| **id_end_with** | **string**| person_industries id_end_with | [optional] |
| **icon_partial** | **string**| person_industries icon_partial | [optional] |
| **icon_start_with** | **string**| person_industries icon_start_with | [optional] |
| **icon_end_with** | **string**| person_industries icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_industries translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_industries translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_industries translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_industries translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_industries translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_industries translations.description_end_with | [optional] |
| **priority_range** | **string**| person_industries priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonIndustriesGetCollection200Response**](../Model/ApiPersonIndustriesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonIndustriesIdDelete()`

```php
apiPersonIndustriesIdDelete($id)
```

Removes the person_industries resource.

Removes the person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier

try {
    $apiInstance->apiPersonIndustriesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->apiPersonIndustriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |

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

## `apiPersonIndustriesIdGet()`

```php
apiPersonIndustriesIdGet($id): \OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_industries resource.

Retrieves a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier

try {
    $result = $apiInstance->apiPersonIndustriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->apiPersonIndustriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonIndustriesIdPut()`

```php
apiPersonIndustriesIdPut($id, $person_industries_jsonld_post): \OpenAPI\Client\Model\PersonIndustriesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the person_industries resource.

Replaces the person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier
$person_industries_jsonld_post = new \OpenAPI\Client\Model\PersonIndustriesJsonldPost(); // \OpenAPI\Client\Model\PersonIndustriesJsonldPost | The updated person_industries resource

try {
    $result = $apiInstance->apiPersonIndustriesIdPut($id, $person_industries_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->apiPersonIndustriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |
| **person_industries_jsonld_post** | [**\OpenAPI\Client\Model\PersonIndustriesJsonldPost**](../Model/PersonIndustriesJsonldPost.md)| The updated person_industries resource | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonIndustriesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonIndustriesPost()`

```php
apiPersonIndustriesPost($person_industries_jsonld_add_post): \OpenAPI\Client\Model\PersonIndustriesJsonld
```

Creates a person_industries resource.

Creates a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_industries_jsonld_add_post = new \OpenAPI\Client\Model\PersonIndustriesJsonldAddPost(); // \OpenAPI\Client\Model\PersonIndustriesJsonldAddPost | The new person_industries resource

try {
    $result = $apiInstance->apiPersonIndustriesPost($person_industries_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->apiPersonIndustriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_industries_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonIndustriesJsonldAddPost**](../Model/PersonIndustriesJsonldAddPost.md)| The new person_industries resource | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonld**](../Model/PersonIndustriesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustryApiFileUpload()`

```php
personIndustryApiFileUpload($id, $person_industries_jsonld): \OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_industries resource.

Creates a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier
$person_industries_jsonld = new \OpenAPI\Client\Model\PersonIndustriesJsonld(); // \OpenAPI\Client\Model\PersonIndustriesJsonld | The new person_industries resource

try {
    $result = $apiInstance->personIndustryApiFileUpload($id, $person_industries_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->personIndustryApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |
| **person_industries_jsonld** | [**\OpenAPI\Client\Model\PersonIndustriesJsonld**](../Model/PersonIndustriesJsonld.md)| The new person_industries resource | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustryDropDown()`

```php
personIndustryDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $sector, $sector2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\PersonIndustryDropDown200Response
```

Retrieves the collection of person_industries resources.

Retrieves the collection of person_industries resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
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
$sector = 'sector_example'; // string | 
$sector2 = array('sector_example'); // string[] | 
$search = 'search_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$value = 56; // int | 
$value2 = array(56); // int[] | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
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
    $result = $apiInstance->personIndustryDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $sector, $sector2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->personIndustryDropDown: ', $e->getMessage(), PHP_EOL;
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
| **sector** | **string**|  | [optional] |
| **sector2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value** | **int**|  | [optional] |
| **value2** | [**int[]**](../Model/int.md)|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
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

[**\OpenAPI\Client\Model\PersonIndustryDropDown200Response**](../Model/PersonIndustryDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustryDuplicate()`

```php
personIndustryDuplicate($id): \OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingList
```

Retrieves a person_industries resource.

Retrieves a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier

try {
    $result = $apiInstance->personIndustryDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->personIndustryDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingList**](../Model/PersonIndustriesJsonldPersonIndustryShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustryFetchFiles()`

```php
personIndustryFetchFiles($id): \OpenAPI\Client\Model\PersonIndustriesJsonld
```

Retrieves a person_industries resource.

Retrieves a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier

try {
    $result = $apiInstance->personIndustryFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->personIndustryFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonld**](../Model/PersonIndustriesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustryGetBySlug()`

```php
personIndustryGetBySlug($slug): \OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_industries resource.

Retrieves a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_industries identifier

try {
    $result = $apiInstance->personIndustryGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->personIndustryGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_industries identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonIndustriesJsonldPersonIndustryShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustryGetDeleteRelations()`

```php
personIndustryGetDeleteRelations($id): \OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryRelations
```

Retrieves a person_industries resource.

Retrieves a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier

try {
    $result = $apiInstance->personIndustryGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->personIndustryGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonldPersonIndustryRelations**](../Model/PersonIndustriesJsonldPersonIndustryRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustryMetadata()`

```php
personIndustryMetadata($id): \OpenAPI\Client\Model\PersonIndustriesJsonldIdStandardMetadataPersonIndustryMetadataTagTaggingListPersonIndustryRelationsTimestampable
```

Retrieves a person_industries resource.

Retrieves a person_industries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industries identifier

try {
    $result = $apiInstance->personIndustryMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustriesApi->personIndustryMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industries identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustriesJsonldIdStandardMetadataPersonIndustryMetadataTagTaggingListPersonIndustryRelationsTimestampable**](../Model/PersonIndustriesJsonldIdStandardMetadataPersonIndustryMetadataTagTaggingListPersonIndustryRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
