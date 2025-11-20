# OpenAPI\Client\PersonIndustrysectorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonIndustrysectorsGetCollection()**](PersonIndustrysectorsApi.md#apiPersonIndustrysectorsGetCollection) | **GET** /open-api/v3/person_industrysectors | Retrieves the collection of person_industrysectors resources. |
| [**apiPersonIndustrysectorsIdDelete()**](PersonIndustrysectorsApi.md#apiPersonIndustrysectorsIdDelete) | **DELETE** /open-api/v3/person_industrysectors/{id} | Removes the person_industrysectors resource. |
| [**apiPersonIndustrysectorsIdGet()**](PersonIndustrysectorsApi.md#apiPersonIndustrysectorsIdGet) | **GET** /open-api/v3/person_industrysectors/{id} | Retrieves a person_industrysectors resource. |
| [**apiPersonIndustrysectorsIdPut()**](PersonIndustrysectorsApi.md#apiPersonIndustrysectorsIdPut) | **PUT** /open-api/v3/person_industrysectors/{id} | Replaces the person_industrysectors resource. |
| [**apiPersonIndustrysectorsPost()**](PersonIndustrysectorsApi.md#apiPersonIndustrysectorsPost) | **POST** /open-api/v3/person_industrysectors | Creates a person_industrysectors resource. |
| [**personIndustrySectorGetBySlug()**](PersonIndustrysectorsApi.md#personIndustrySectorGetBySlug) | **GET** /open-api/v3/person_industrysectors/by_slug/{slug} | Retrieves a person_industrysectors resource. |
| [**personIndustrySectorMetadata()**](PersonIndustrysectorsApi.md#personIndustrySectorMetadata) | **GET** /open-api/v3/person_industrysectors/metadata/{id} | Retrieves a person_industrysectors resource. |
| [**personindustrySectorApiFileUpload()**](PersonIndustrysectorsApi.md#personindustrySectorApiFileUpload) | **POST** /open-api/v3/person_industrysectors/{id}/file/upload | Creates a person_industrysectors resource. |
| [**personindustrySectorDropDown()**](PersonIndustrysectorsApi.md#personindustrySectorDropDown) | **GET** /open-api/v3/person_industrysectors/dropdown/get | Retrieves the collection of person_industrysectors resources. |
| [**personindustrySectorDuplicate()**](PersonIndustrysectorsApi.md#personindustrySectorDuplicate) | **GET** /open-api/v3/person_industrysectors/duplicate/{id} | Retrieves a person_industrysectors resource. |
| [**personindustrySectorFetchFiles()**](PersonIndustrysectorsApi.md#personindustrySectorFetchFiles) | **GET** /open-api/v3/person_industrysectors/fetch_files/{id} | Retrieves a person_industrysectors resource. |
| [**personindustrySectorGetDeleteRelations()**](PersonIndustrysectorsApi.md#personindustrySectorGetDeleteRelations) | **GET** /open-api/v3/person_industrysectors/get_delete_relations/{id} | Retrieves a person_industrysectors resource. |


## `apiPersonIndustrysectorsGetCollection()`

```php
apiPersonIndustrysectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_value, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonIndustrysectorsGetCollection200Response
```

Retrieves the collection of person_industrysectors resources.

Retrieves the collection of person_industrysectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
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
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_value = 'order_value_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_industrysectors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_industrysectors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_industrysectors slug_end_with
$id_partial = 'id_partial_example'; // string | person_industrysectors id_partial
$id_start_with = 'id_start_with_example'; // string | person_industrysectors id_start_with
$id_end_with = 'id_end_with_example'; // string | person_industrysectors id_end_with
$icon_partial = 'icon_partial_example'; // string | person_industrysectors icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_industrysectors icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_industrysectors icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_industrysectors translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_industrysectors translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_industrysectors translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_industrysectors translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_industrysectors translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_industrysectors translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_industrysectors priority_range

try {
    $result = $apiInstance->apiPersonIndustrysectorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_value, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->apiPersonIndustrysectorsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_value** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_industrysectors slug_partial | [optional] |
| **slug_start_with** | **string**| person_industrysectors slug_start_with | [optional] |
| **slug_end_with** | **string**| person_industrysectors slug_end_with | [optional] |
| **id_partial** | **string**| person_industrysectors id_partial | [optional] |
| **id_start_with** | **string**| person_industrysectors id_start_with | [optional] |
| **id_end_with** | **string**| person_industrysectors id_end_with | [optional] |
| **icon_partial** | **string**| person_industrysectors icon_partial | [optional] |
| **icon_start_with** | **string**| person_industrysectors icon_start_with | [optional] |
| **icon_end_with** | **string**| person_industrysectors icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_industrysectors translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_industrysectors translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_industrysectors translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_industrysectors translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_industrysectors translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_industrysectors translations.description_end_with | [optional] |
| **priority_range** | **string**| person_industrysectors priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonIndustrysectorsGetCollection200Response**](../Model/ApiPersonIndustrysectorsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonIndustrysectorsIdDelete()`

```php
apiPersonIndustrysectorsIdDelete($id)
```

Removes the person_industrysectors resource.

Removes the person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier

try {
    $apiInstance->apiPersonIndustrysectorsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->apiPersonIndustrysectorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |

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

## `apiPersonIndustrysectorsIdGet()`

```php
apiPersonIndustrysectorsIdGet($id): \OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonIndustrySectorShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_industrysectors resource.

Retrieves a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier

try {
    $result = $apiInstance->apiPersonIndustrysectorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->apiPersonIndustrysectorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonIndustrySectorShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonIndustrysectorsJsonldPersonIndustrySectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonIndustrysectorsIdPut()`

```php
apiPersonIndustrysectorsIdPut($id, $person_industrysectors_jsonld_post): \OpenAPI\Client\Model\PersonIndustrysectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the person_industrysectors resource.

Replaces the person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier
$person_industrysectors_jsonld_post = new \OpenAPI\Client\Model\PersonIndustrysectorsJsonldPost(); // \OpenAPI\Client\Model\PersonIndustrysectorsJsonldPost | The updated person_industrysectors resource

try {
    $result = $apiInstance->apiPersonIndustrysectorsIdPut($id, $person_industrysectors_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->apiPersonIndustrysectorsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |
| **person_industrysectors_jsonld_post** | [**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldPost**](../Model/PersonIndustrysectorsJsonldPost.md)| The updated person_industrysectors resource | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonIndustrysectorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonIndustrysectorsPost()`

```php
apiPersonIndustrysectorsPost($person_industrysectors_jsonld_add_post): \OpenAPI\Client\Model\PersonIndustrysectorsJsonld
```

Creates a person_industrysectors resource.

Creates a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_industrysectors_jsonld_add_post = new \OpenAPI\Client\Model\PersonIndustrysectorsJsonldAddPost(); // \OpenAPI\Client\Model\PersonIndustrysectorsJsonldAddPost | The new person_industrysectors resource

try {
    $result = $apiInstance->apiPersonIndustrysectorsPost($person_industrysectors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->apiPersonIndustrysectorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_industrysectors_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldAddPost**](../Model/PersonIndustrysectorsJsonldAddPost.md)| The new person_industrysectors resource | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonld**](../Model/PersonIndustrysectorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustrySectorGetBySlug()`

```php
personIndustrySectorGetBySlug($slug): \OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonIndustrySectorShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_industrysectors resource.

Retrieves a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_industrysectors identifier

try {
    $result = $apiInstance->personIndustrySectorGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->personIndustrySectorGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_industrysectors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonIndustrySectorShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonIndustrysectorsJsonldPersonIndustrySectorShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personIndustrySectorMetadata()`

```php
personIndustrySectorMetadata($id): \OpenAPI\Client\Model\PersonIndustrysectorsJsonldIdStandardMetadataPersonIndustrySectorMetadataTagTaggingListPersonIndustrySectorRelationsTimestampable
```

Retrieves a person_industrysectors resource.

Retrieves a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier

try {
    $result = $apiInstance->personIndustrySectorMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->personIndustrySectorMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldIdStandardMetadataPersonIndustrySectorMetadataTagTaggingListPersonIndustrySectorRelationsTimestampable**](../Model/PersonIndustrysectorsJsonldIdStandardMetadataPersonIndustrySectorMetadataTagTaggingListPersonIndustrySectorRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personindustrySectorApiFileUpload()`

```php
personindustrySectorApiFileUpload($id, $person_industrysectors_jsonld): \OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonindustrySectorShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_industrysectors resource.

Creates a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier
$person_industrysectors_jsonld = new \OpenAPI\Client\Model\PersonIndustrysectorsJsonld(); // \OpenAPI\Client\Model\PersonIndustrysectorsJsonld | The new person_industrysectors resource

try {
    $result = $apiInstance->personindustrySectorApiFileUpload($id, $person_industrysectors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->personindustrySectorApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |
| **person_industrysectors_jsonld** | [**\OpenAPI\Client\Model\PersonIndustrysectorsJsonld**](../Model/PersonIndustrysectorsJsonld.md)| The new person_industrysectors resource | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonindustrySectorShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonIndustrysectorsJsonldPersonindustrySectorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personindustrySectorDropDown()`

```php
personindustrySectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_value, $properties, $enabled, $tag): \OpenAPI\Client\Model\PersonindustrySectorDropDown200Response
```

Retrieves the collection of person_industrysectors resources.

Retrieves the collection of person_industrysectors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
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
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_value = 'order_value_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->personindustrySectorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $value, $value2, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_value, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->personindustrySectorDropDown: ', $e->getMessage(), PHP_EOL;
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
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_value** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonindustrySectorDropDown200Response**](../Model/PersonindustrySectorDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personindustrySectorDuplicate()`

```php
personindustrySectorDuplicate($id): \OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonindustrySectorShowIdTimestampableTagTaggingList
```

Retrieves a person_industrysectors resource.

Retrieves a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier

try {
    $result = $apiInstance->personindustrySectorDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->personindustrySectorDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonindustrySectorShowIdTimestampableTagTaggingList**](../Model/PersonIndustrysectorsJsonldPersonindustrySectorShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personindustrySectorFetchFiles()`

```php
personindustrySectorFetchFiles($id): \OpenAPI\Client\Model\PersonIndustrysectorsJsonld
```

Retrieves a person_industrysectors resource.

Retrieves a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier

try {
    $result = $apiInstance->personindustrySectorFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->personindustrySectorFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonld**](../Model/PersonIndustrysectorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personindustrySectorGetDeleteRelations()`

```php
personindustrySectorGetDeleteRelations($id): \OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonindustrySectorRelations
```

Retrieves a person_industrysectors resource.

Retrieves a person_industrysectors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonIndustrysectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_industrysectors identifier

try {
    $result = $apiInstance->personindustrySectorGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonIndustrysectorsApi->personindustrySectorGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_industrysectors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonIndustrysectorsJsonldPersonindustrySectorRelations**](../Model/PersonIndustrysectorsJsonldPersonindustrySectorRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
