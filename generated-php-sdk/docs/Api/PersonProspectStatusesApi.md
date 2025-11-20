# OpenAPI\Client\PersonProspectStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonProspectStatusesGetCollection()**](PersonProspectStatusesApi.md#apiPersonProspectStatusesGetCollection) | **GET** /open-api/v3/person_prospect_statuses | Retrieves the collection of person_prospect_statuses resources. |
| [**apiPersonProspectStatusesIdDelete()**](PersonProspectStatusesApi.md#apiPersonProspectStatusesIdDelete) | **DELETE** /open-api/v3/person_prospect_statuses/{id} | Removes the person_prospect_statuses resource. |
| [**apiPersonProspectStatusesIdGet()**](PersonProspectStatusesApi.md#apiPersonProspectStatusesIdGet) | **GET** /open-api/v3/person_prospect_statuses/{id} | Retrieves a person_prospect_statuses resource. |
| [**apiPersonProspectStatusesIdPut()**](PersonProspectStatusesApi.md#apiPersonProspectStatusesIdPut) | **PUT** /open-api/v3/person_prospect_statuses/{id} | Replaces the person_prospect_statuses resource. |
| [**apiPersonProspectStatusesPost()**](PersonProspectStatusesApi.md#apiPersonProspectStatusesPost) | **POST** /open-api/v3/person_prospect_statuses | Creates a person_prospect_statuses resource. |
| [**personProspectStatusApiFileUpload()**](PersonProspectStatusesApi.md#personProspectStatusApiFileUpload) | **POST** /open-api/v3/person_prospect_statuses/{id}/file/upload | Creates a person_prospect_statuses resource. |
| [**personProspectStatusDropDown()**](PersonProspectStatusesApi.md#personProspectStatusDropDown) | **GET** /open-api/v3/person_prospect_statuses/dropdown/get | Retrieves the collection of person_prospect_statuses resources. |
| [**personProspectStatusDuplicate()**](PersonProspectStatusesApi.md#personProspectStatusDuplicate) | **GET** /open-api/v3/person_prospect_statuses/duplicate/{id} | Retrieves a person_prospect_statuses resource. |
| [**personProspectStatusFetchFiles()**](PersonProspectStatusesApi.md#personProspectStatusFetchFiles) | **GET** /open-api/v3/person_prospect_statuses/fetch_files/{id} | Retrieves a person_prospect_statuses resource. |
| [**personProspectStatusGetBySlug()**](PersonProspectStatusesApi.md#personProspectStatusGetBySlug) | **GET** /open-api/v3/person_prospect_statuses/by_slug/{slug} | Retrieves a person_prospect_statuses resource. |
| [**personProspectStatusGetDeleteRelations()**](PersonProspectStatusesApi.md#personProspectStatusGetDeleteRelations) | **GET** /open-api/v3/person_prospect_statuses/get_delete_relations/{id} | Retrieves a person_prospect_statuses resource. |
| [**personProspectStatusMetadata()**](PersonProspectStatusesApi.md#personProspectStatusMetadata) | **GET** /open-api/v3/person_prospect_statuses/metadata/{id} | Retrieves a person_prospect_statuses resource. |


## `apiPersonProspectStatusesGetCollection()`

```php
apiPersonProspectStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonProspectStatusesGetCollection200Response
```

Retrieves the collection of person_prospect_statuses resources.

Retrieves the collection of person_prospect_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
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
$slug_partial = 'slug_partial_example'; // string | person_prospect_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_prospect_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_prospect_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | person_prospect_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | person_prospect_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | person_prospect_statuses id_end_with
$icon_partial = 'icon_partial_example'; // string | person_prospect_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_prospect_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_prospect_statuses icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_prospect_statuses translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_prospect_statuses translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_prospect_statuses translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_prospect_statuses translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_prospect_statuses translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_prospect_statuses translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_prospect_statuses priority_range

try {
    $result = $apiInstance->apiPersonProspectStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->apiPersonProspectStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| person_prospect_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| person_prospect_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| person_prospect_statuses slug_end_with | [optional] |
| **id_partial** | **string**| person_prospect_statuses id_partial | [optional] |
| **id_start_with** | **string**| person_prospect_statuses id_start_with | [optional] |
| **id_end_with** | **string**| person_prospect_statuses id_end_with | [optional] |
| **icon_partial** | **string**| person_prospect_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| person_prospect_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| person_prospect_statuses icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_prospect_statuses translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_prospect_statuses translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_prospect_statuses translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_prospect_statuses translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_prospect_statuses translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_prospect_statuses translations.description_end_with | [optional] |
| **priority_range** | **string**| person_prospect_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonProspectStatusesGetCollection200Response**](../Model/ApiPersonProspectStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectStatusesIdDelete()`

```php
apiPersonProspectStatusesIdDelete($id)
```

Removes the person_prospect_statuses resource.

Removes the person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier

try {
    $apiInstance->apiPersonProspectStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->apiPersonProspectStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |

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

## `apiPersonProspectStatusesIdGet()`

```php
apiPersonProspectStatusesIdGet($id): \OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_prospect_statuses resource.

Retrieves a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier

try {
    $result = $apiInstance->apiPersonProspectStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->apiPersonProspectStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectStatusesIdPut()`

```php
apiPersonProspectStatusesIdPut($id, $person_prospect_statuses_jsonld_post): \OpenAPI\Client\Model\PersonProspectStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the person_prospect_statuses resource.

Replaces the person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier
$person_prospect_statuses_jsonld_post = new \OpenAPI\Client\Model\PersonProspectStatusesJsonldPost(); // \OpenAPI\Client\Model\PersonProspectStatusesJsonldPost | The updated person_prospect_statuses resource

try {
    $result = $apiInstance->apiPersonProspectStatusesIdPut($id, $person_prospect_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->apiPersonProspectStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |
| **person_prospect_statuses_jsonld_post** | [**\OpenAPI\Client\Model\PersonProspectStatusesJsonldPost**](../Model/PersonProspectStatusesJsonldPost.md)| The updated person_prospect_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonProspectStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectStatusesPost()`

```php
apiPersonProspectStatusesPost($person_prospect_statuses_jsonld_add_post): \OpenAPI\Client\Model\PersonProspectStatusesJsonld
```

Creates a person_prospect_statuses resource.

Creates a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_prospect_statuses_jsonld_add_post = new \OpenAPI\Client\Model\PersonProspectStatusesJsonldAddPost(); // \OpenAPI\Client\Model\PersonProspectStatusesJsonldAddPost | The new person_prospect_statuses resource

try {
    $result = $apiInstance->apiPersonProspectStatusesPost($person_prospect_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->apiPersonProspectStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_prospect_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonProspectStatusesJsonldAddPost**](../Model/PersonProspectStatusesJsonldAddPost.md)| The new person_prospect_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonld**](../Model/PersonProspectStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectStatusApiFileUpload()`

```php
personProspectStatusApiFileUpload($id, $person_prospect_statuses_jsonld): \OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_prospect_statuses resource.

Creates a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier
$person_prospect_statuses_jsonld = new \OpenAPI\Client\Model\PersonProspectStatusesJsonld(); // \OpenAPI\Client\Model\PersonProspectStatusesJsonld | The new person_prospect_statuses resource

try {
    $result = $apiInstance->personProspectStatusApiFileUpload($id, $person_prospect_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->personProspectStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |
| **person_prospect_statuses_jsonld** | [**\OpenAPI\Client\Model\PersonProspectStatusesJsonld**](../Model/PersonProspectStatusesJsonld.md)| The new person_prospect_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectStatusDropDown()`

```php
personProspectStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\PersonProspectStatusDropDown200Response
```

Retrieves the collection of person_prospect_statuses resources.

Retrieves the collection of person_prospect_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
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
    $result = $apiInstance->personProspectStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->personProspectStatusDropDown: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\PersonProspectStatusDropDown200Response**](../Model/PersonProspectStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectStatusDuplicate()`

```php
personProspectStatusDuplicate($id): \OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingList
```

Retrieves a person_prospect_statuses resource.

Retrieves a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier

try {
    $result = $apiInstance->personProspectStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->personProspectStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingList**](../Model/PersonProspectStatusesJsonldPersonProspectStatusShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectStatusFetchFiles()`

```php
personProspectStatusFetchFiles($id): \OpenAPI\Client\Model\PersonProspectStatusesJsonld
```

Retrieves a person_prospect_statuses resource.

Retrieves a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier

try {
    $result = $apiInstance->personProspectStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->personProspectStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonld**](../Model/PersonProspectStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectStatusGetBySlug()`

```php
personProspectStatusGetBySlug($slug): \OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_prospect_statuses resource.

Retrieves a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_prospect_statuses identifier

try {
    $result = $apiInstance->personProspectStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->personProspectStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_prospect_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonProspectStatusesJsonldPersonProspectStatusShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectStatusGetDeleteRelations()`

```php
personProspectStatusGetDeleteRelations($id): \OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusRelations
```

Retrieves a person_prospect_statuses resource.

Retrieves a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier

try {
    $result = $apiInstance->personProspectStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->personProspectStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonldPersonProspectStatusRelations**](../Model/PersonProspectStatusesJsonldPersonProspectStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectStatusMetadata()`

```php
personProspectStatusMetadata($id): \OpenAPI\Client\Model\PersonProspectStatusesJsonldIdStandardMetadataPersonProspectStatusMetadataTagTaggingListPersonProspectStatusRelationsTimestampable
```

Retrieves a person_prospect_statuses resource.

Retrieves a person_prospect_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_statuses identifier

try {
    $result = $apiInstance->personProspectStatusMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectStatusesApi->personProspectStatusMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectStatusesJsonldIdStandardMetadataPersonProspectStatusMetadataTagTaggingListPersonProspectStatusRelationsTimestampable**](../Model/PersonProspectStatusesJsonldIdStandardMetadataPersonProspectStatusMetadataTagTaggingListPersonProspectStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
