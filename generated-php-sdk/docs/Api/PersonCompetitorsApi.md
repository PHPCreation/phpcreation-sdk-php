# OpenAPI\Client\PersonCompetitorsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonCompetitorsGetCollection()**](PersonCompetitorsApi.md#apiPersonCompetitorsGetCollection) | **GET** /open-api/v3/person_competitors | Retrieves the collection of person_competitors resources. |
| [**apiPersonCompetitorsIdDelete()**](PersonCompetitorsApi.md#apiPersonCompetitorsIdDelete) | **DELETE** /open-api/v3/person_competitors/{id} | Removes the person_competitors resource. |
| [**apiPersonCompetitorsIdGet()**](PersonCompetitorsApi.md#apiPersonCompetitorsIdGet) | **GET** /open-api/v3/person_competitors/{id} | Retrieves a person_competitors resource. |
| [**apiPersonCompetitorsIdPut()**](PersonCompetitorsApi.md#apiPersonCompetitorsIdPut) | **PUT** /open-api/v3/person_competitors/{id} | Replaces the person_competitors resource. |
| [**apiPersonCompetitorsPost()**](PersonCompetitorsApi.md#apiPersonCompetitorsPost) | **POST** /open-api/v3/person_competitors | Creates a person_competitors resource. |
| [**personCompetitorApiFileUpload()**](PersonCompetitorsApi.md#personCompetitorApiFileUpload) | **POST** /open-api/v3/person_competitors/{id}/file/upload | Creates a person_competitors resource. |
| [**personCompetitorDropDown()**](PersonCompetitorsApi.md#personCompetitorDropDown) | **GET** /open-api/v3/person_competitors/dropdown/get | Retrieves the collection of person_competitors resources. |
| [**personCompetitorDuplicate()**](PersonCompetitorsApi.md#personCompetitorDuplicate) | **GET** /open-api/v3/person_competitors/duplicate/{id} | Retrieves a person_competitors resource. |
| [**personCompetitorFetchFiles()**](PersonCompetitorsApi.md#personCompetitorFetchFiles) | **GET** /open-api/v3/person_competitors/fetch_files/{id} | Retrieves a person_competitors resource. |
| [**personCompetitorGetBySlug()**](PersonCompetitorsApi.md#personCompetitorGetBySlug) | **GET** /open-api/v3/person_competitors/by_slug/{slug} | Retrieves a person_competitors resource. |
| [**personCompetitorGetDeleteRelations()**](PersonCompetitorsApi.md#personCompetitorGetDeleteRelations) | **GET** /open-api/v3/person_competitors/get_delete_relations/{id} | Retrieves a person_competitors resource. |
| [**personCompetitorMetadata()**](PersonCompetitorsApi.md#personCompetitorMetadata) | **GET** /open-api/v3/person_competitors/metadata/{id} | Retrieves a person_competitors resource. |


## `apiPersonCompetitorsGetCollection()`

```php
apiPersonCompetitorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $search, $percent_comp, $percent_comp2, $enabled, $order_id, $order_created_at, $order_updated_at, $order_percent_comp, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $percent_comp_range): \OpenAPI\Client\Model\ApiPersonCompetitorsGetCollection200Response
```

Retrieves the collection of person_competitors resources.

Retrieves the collection of person_competitors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
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
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$percent_comp = 'percent_comp_example'; // string | 
$percent_comp2 = array('percent_comp_example'); // string[] | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_percent_comp = 'order_percent_comp_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_competitors slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_competitors slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_competitors slug_end_with
$id_partial = 'id_partial_example'; // string | person_competitors id_partial
$id_start_with = 'id_start_with_example'; // string | person_competitors id_start_with
$id_end_with = 'id_end_with_example'; // string | person_competitors id_end_with
$percent_comp_range = 'percent_comp_range_example'; // string | person_competitors percentComp_range

try {
    $result = $apiInstance->apiPersonCompetitorsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $search, $percent_comp, $percent_comp2, $enabled, $order_id, $order_created_at, $order_updated_at, $order_percent_comp, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $percent_comp_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->apiPersonCompetitorsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **percent_comp** | **string**|  | [optional] |
| **percent_comp2** | [**string[]**](../Model/string.md)|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_percent_comp** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_competitors slug_partial | [optional] |
| **slug_start_with** | **string**| person_competitors slug_start_with | [optional] |
| **slug_end_with** | **string**| person_competitors slug_end_with | [optional] |
| **id_partial** | **string**| person_competitors id_partial | [optional] |
| **id_start_with** | **string**| person_competitors id_start_with | [optional] |
| **id_end_with** | **string**| person_competitors id_end_with | [optional] |
| **percent_comp_range** | **string**| person_competitors percentComp_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonCompetitorsGetCollection200Response**](../Model/ApiPersonCompetitorsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCompetitorsIdDelete()`

```php
apiPersonCompetitorsIdDelete($id)
```

Removes the person_competitors resource.

Removes the person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier

try {
    $apiInstance->apiPersonCompetitorsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->apiPersonCompetitorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |

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

## `apiPersonCompetitorsIdGet()`

```php
apiPersonCompetitorsIdGet($id): \OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_competitors resource.

Retrieves a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier

try {
    $result = $apiInstance->apiPersonCompetitorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->apiPersonCompetitorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCompetitorsIdPut()`

```php
apiPersonCompetitorsIdPut($id, $person_competitors_jsonld_add_post): \OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_competitors resource.

Replaces the person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier
$person_competitors_jsonld_add_post = new \OpenAPI\Client\Model\PersonCompetitorsJsonldAddPost(); // \OpenAPI\Client\Model\PersonCompetitorsJsonldAddPost | The updated person_competitors resource

try {
    $result = $apiInstance->apiPersonCompetitorsIdPut($id, $person_competitors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->apiPersonCompetitorsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |
| **person_competitors_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonCompetitorsJsonldAddPost**](../Model/PersonCompetitorsJsonldAddPost.md)| The updated person_competitors resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCompetitorsPost()`

```php
apiPersonCompetitorsPost($person_competitors_jsonld_add_post): \OpenAPI\Client\Model\PersonCompetitorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a person_competitors resource.

Creates a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_competitors_jsonld_add_post = new \OpenAPI\Client\Model\PersonCompetitorsJsonldAddPost(); // \OpenAPI\Client\Model\PersonCompetitorsJsonldAddPost | The new person_competitors resource

try {
    $result = $apiInstance->apiPersonCompetitorsPost($person_competitors_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->apiPersonCompetitorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_competitors_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonCompetitorsJsonldAddPost**](../Model/PersonCompetitorsJsonldAddPost.md)| The new person_competitors resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonCompetitorsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompetitorApiFileUpload()`

```php
personCompetitorApiFileUpload($id, $person_competitors_jsonld): \OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_competitors resource.

Creates a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier
$person_competitors_jsonld = new \OpenAPI\Client\Model\PersonCompetitorsJsonld(); // \OpenAPI\Client\Model\PersonCompetitorsJsonld | The new person_competitors resource

try {
    $result = $apiInstance->personCompetitorApiFileUpload($id, $person_competitors_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->personCompetitorApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |
| **person_competitors_jsonld** | [**\OpenAPI\Client\Model\PersonCompetitorsJsonld**](../Model/PersonCompetitorsJsonld.md)| The new person_competitors resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonCompetitorsJsonldPersonCompetitorShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompetitorDropDown()`

```php
personCompetitorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $search, $percent_comp, $percent_comp2, $enabled, $order_id, $order_created_at, $order_updated_at, $order_percent_comp, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $tag): \OpenAPI\Client\Model\PersonCompetitorDropDown200Response
```

Retrieves the collection of person_competitors resources.

Retrieves the collection of person_competitors resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
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
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$percent_comp = 'percent_comp_example'; // string | 
$percent_comp2 = array('percent_comp_example'); // string[] | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_percent_comp = 'order_percent_comp_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->personCompetitorDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $search, $percent_comp, $percent_comp2, $enabled, $order_id, $order_created_at, $order_updated_at, $order_percent_comp, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->personCompetitorDropDown: ', $e->getMessage(), PHP_EOL;
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
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **percent_comp** | **string**|  | [optional] |
| **percent_comp2** | [**string[]**](../Model/string.md)|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_percent_comp** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorDropDown200Response**](../Model/PersonCompetitorDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompetitorDuplicate()`

```php
personCompetitorDuplicate($id): \OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_competitors resource.

Retrieves a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier

try {
    $result = $apiInstance->personCompetitorDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->personCompetitorDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompetitorFetchFiles()`

```php
personCompetitorFetchFiles($id): \OpenAPI\Client\Model\PersonCompetitorsJsonld
```

Retrieves a person_competitors resource.

Retrieves a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier

try {
    $result = $apiInstance->personCompetitorFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->personCompetitorFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonld**](../Model/PersonCompetitorsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompetitorGetBySlug()`

```php
personCompetitorGetBySlug($slug): \OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_competitors resource.

Retrieves a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_competitors identifier

try {
    $result = $apiInstance->personCompetitorGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->personCompetitorGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_competitors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonCompetitorsJsonldPersonCompetitorShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompetitorGetDeleteRelations()`

```php
personCompetitorGetDeleteRelations($id): \OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorRelations
```

Retrieves a person_competitors resource.

Retrieves a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier

try {
    $result = $apiInstance->personCompetitorGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->personCompetitorGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldPersonCompetitorRelations**](../Model/PersonCompetitorsJsonldPersonCompetitorRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCompetitorMetadata()`

```php
personCompetitorMetadata($id): \OpenAPI\Client\Model\PersonCompetitorsJsonldIdStandardMetadataPersonCompetitorMetadataTagTaggingListPersonCompetitorRelationsTimestampable
```

Retrieves a person_competitors resource.

Retrieves a person_competitors resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCompetitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_competitors identifier

try {
    $result = $apiInstance->personCompetitorMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCompetitorsApi->personCompetitorMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_competitors identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCompetitorsJsonldIdStandardMetadataPersonCompetitorMetadataTagTaggingListPersonCompetitorRelationsTimestampable**](../Model/PersonCompetitorsJsonldIdStandardMetadataPersonCompetitorMetadataTagTaggingListPersonCompetitorRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
