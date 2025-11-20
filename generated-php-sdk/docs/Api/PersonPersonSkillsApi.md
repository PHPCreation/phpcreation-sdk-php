# OpenAPI\Client\PersonPersonSkillsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonPersonSkillsGetCollection()**](PersonPersonSkillsApi.md#apiPersonPersonSkillsGetCollection) | **GET** /open-api/v3/person_person_skills | Retrieves the collection of person_person_skills resources. |
| [**apiPersonPersonSkillsIdDelete()**](PersonPersonSkillsApi.md#apiPersonPersonSkillsIdDelete) | **DELETE** /open-api/v3/person_person_skills/{id} | Removes the person_person_skills resource. |
| [**apiPersonPersonSkillsIdGet()**](PersonPersonSkillsApi.md#apiPersonPersonSkillsIdGet) | **GET** /open-api/v3/person_person_skills/{id} | Retrieves a person_person_skills resource. |
| [**apiPersonPersonSkillsIdPut()**](PersonPersonSkillsApi.md#apiPersonPersonSkillsIdPut) | **PUT** /open-api/v3/person_person_skills/{id} | Replaces the person_person_skills resource. |
| [**apiPersonPersonSkillsPost()**](PersonPersonSkillsApi.md#apiPersonPersonSkillsPost) | **POST** /open-api/v3/person_person_skills | Creates a person_person_skills resource. |
| [**personPersonSkillApiFileUpload()**](PersonPersonSkillsApi.md#personPersonSkillApiFileUpload) | **POST** /open-api/v3/person_person_skills/{id}/file/upload | Creates a person_person_skills resource. |
| [**personPersonSkillDropDown()**](PersonPersonSkillsApi.md#personPersonSkillDropDown) | **GET** /open-api/v3/person_person_skills/dropdown/get | Retrieves the collection of person_person_skills resources. |
| [**personPersonSkillDuplicate()**](PersonPersonSkillsApi.md#personPersonSkillDuplicate) | **GET** /open-api/v3/person_person_skills/duplicate/{id} | Retrieves a person_person_skills resource. |
| [**personPersonSkillFetchFiles()**](PersonPersonSkillsApi.md#personPersonSkillFetchFiles) | **GET** /open-api/v3/person_person_skills/fetch_files/{id} | Retrieves a person_person_skills resource. |
| [**personPersonSkillGetBySlug()**](PersonPersonSkillsApi.md#personPersonSkillGetBySlug) | **GET** /open-api/v3/person_person_skills/by_slug/{slug} | Retrieves a person_person_skills resource. |
| [**personPersonSkillGetDeleteRelations()**](PersonPersonSkillsApi.md#personPersonSkillGetDeleteRelations) | **GET** /open-api/v3/person_person_skills/get_delete_relations/{id} | Retrieves a person_person_skills resource. |
| [**personPersonSkillMetadata()**](PersonPersonSkillsApi.md#personPersonSkillMetadata) | **GET** /open-api/v3/person_person_skills/metadata/{id} | Retrieves a person_person_skills resource. |


## `apiPersonPersonSkillsGetCollection()`

```php
apiPersonPersonSkillsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $person, $person2, $skill, $skill2, $search, $exists_notes, $exists_custom_properties, $exists_expiration_date, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiPersonPersonSkillsGetCollection200Response
```

Retrieves the collection of person_person_skills resources.

Retrieves the collection of person_person_skills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
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
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$skill = 'skill_example'; // string | 
$skill2 = array('skill_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_expiration_date = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_person_skills slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_person_skills slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_person_skills slug_end_with
$id_partial = 'id_partial_example'; // string | person_person_skills id_partial
$id_start_with = 'id_start_with_example'; // string | person_person_skills id_start_with
$id_end_with = 'id_end_with_example'; // string | person_person_skills id_end_with

try {
    $result = $apiInstance->apiPersonPersonSkillsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $person, $person2, $skill, $skill2, $search, $exists_notes, $exists_custom_properties, $exists_expiration_date, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->apiPersonPersonSkillsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **skill** | **string**|  | [optional] |
| **skill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_expiration_date** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_person_skills slug_partial | [optional] |
| **slug_start_with** | **string**| person_person_skills slug_start_with | [optional] |
| **slug_end_with** | **string**| person_person_skills slug_end_with | [optional] |
| **id_partial** | **string**| person_person_skills id_partial | [optional] |
| **id_start_with** | **string**| person_person_skills id_start_with | [optional] |
| **id_end_with** | **string**| person_person_skills id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonPersonSkillsGetCollection200Response**](../Model/ApiPersonPersonSkillsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPersonSkillsIdDelete()`

```php
apiPersonPersonSkillsIdDelete($id)
```

Removes the person_person_skills resource.

Removes the person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier

try {
    $apiInstance->apiPersonPersonSkillsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->apiPersonPersonSkillsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |

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

## `apiPersonPersonSkillsIdGet()`

```php
apiPersonPersonSkillsIdGet($id): \OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_person_skills resource.

Retrieves a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier

try {
    $result = $apiInstance->apiPersonPersonSkillsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->apiPersonPersonSkillsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPersonSkillsIdPut()`

```php
apiPersonPersonSkillsIdPut($id, $person_person_skills_jsonld_add_post): \OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_person_skills resource.

Replaces the person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier
$person_person_skills_jsonld_add_post = new \OpenAPI\Client\Model\PersonPersonSkillsJsonldAddPost(); // \OpenAPI\Client\Model\PersonPersonSkillsJsonldAddPost | The updated person_person_skills resource

try {
    $result = $apiInstance->apiPersonPersonSkillsIdPut($id, $person_person_skills_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->apiPersonPersonSkillsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |
| **person_person_skills_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonPersonSkillsJsonldAddPost**](../Model/PersonPersonSkillsJsonldAddPost.md)| The updated person_person_skills resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonPersonSkillsJsonldPersonPersonSkillShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPersonSkillsPost()`

```php
apiPersonPersonSkillsPost($person_person_skills_jsonld_add_post): \OpenAPI\Client\Model\PersonPersonSkillsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a person_person_skills resource.

Creates a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_person_skills_jsonld_add_post = new \OpenAPI\Client\Model\PersonPersonSkillsJsonldAddPost(); // \OpenAPI\Client\Model\PersonPersonSkillsJsonldAddPost | The new person_person_skills resource

try {
    $result = $apiInstance->apiPersonPersonSkillsPost($person_person_skills_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->apiPersonPersonSkillsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_person_skills_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonPersonSkillsJsonldAddPost**](../Model/PersonPersonSkillsJsonldAddPost.md)| The new person_person_skills resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonPersonSkillsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPersonSkillApiFileUpload()`

```php
personPersonSkillApiFileUpload($id, $person_person_skills_jsonld): \OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_person_skills resource.

Creates a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier
$person_person_skills_jsonld = new \OpenAPI\Client\Model\PersonPersonSkillsJsonld(); // \OpenAPI\Client\Model\PersonPersonSkillsJsonld | The new person_person_skills resource

try {
    $result = $apiInstance->personPersonSkillApiFileUpload($id, $person_person_skills_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->personPersonSkillApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |
| **person_person_skills_jsonld** | [**\OpenAPI\Client\Model\PersonPersonSkillsJsonld**](../Model/PersonPersonSkillsJsonld.md)| The new person_person_skills resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPersonSkillDropDown()`

```php
personPersonSkillDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $person, $person2, $skill, $skill2, $search, $exists_notes, $exists_custom_properties, $exists_expiration_date, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\PersonPersonSkillDropDown200Response
```

Retrieves the collection of person_person_skills resources.

Retrieves the collection of person_person_skills resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
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
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$skill = 'skill_example'; // string | 
$skill2 = array('skill_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_expiration_date = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->personPersonSkillDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $person, $person2, $skill, $skill2, $search, $exists_notes, $exists_custom_properties, $exists_expiration_date, $order_id, $order_created_at, $order_updated_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->personPersonSkillDropDown: ', $e->getMessage(), PHP_EOL;
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
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **skill** | **string**|  | [optional] |
| **skill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_expiration_date** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillDropDown200Response**](../Model/PersonPersonSkillDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPersonSkillDuplicate()`

```php
personPersonSkillDuplicate($id): \OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingList
```

Retrieves a person_person_skills resource.

Retrieves a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier

try {
    $result = $apiInstance->personPersonSkillDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->personPersonSkillDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingList**](../Model/PersonPersonSkillsJsonldPersonPersonSkillShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPersonSkillFetchFiles()`

```php
personPersonSkillFetchFiles($id): \OpenAPI\Client\Model\PersonPersonSkillsJsonld
```

Retrieves a person_person_skills resource.

Retrieves a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier

try {
    $result = $apiInstance->personPersonSkillFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->personPersonSkillFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonld**](../Model/PersonPersonSkillsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPersonSkillGetBySlug()`

```php
personPersonSkillGetBySlug($slug): \OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_person_skills resource.

Retrieves a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_person_skills identifier

try {
    $result = $apiInstance->personPersonSkillGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->personPersonSkillGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonPersonSkillsJsonldPersonPersonSkillShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPersonSkillGetDeleteRelations()`

```php
personPersonSkillGetDeleteRelations($id): \OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillRelations
```

Retrieves a person_person_skills resource.

Retrieves a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier

try {
    $result = $apiInstance->personPersonSkillGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->personPersonSkillGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldPersonPersonSkillRelations**](../Model/PersonPersonSkillsJsonldPersonPersonSkillRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPersonSkillMetadata()`

```php
personPersonSkillMetadata($id): \OpenAPI\Client\Model\PersonPersonSkillsJsonldIdStandardMetadataPersonPersonSkillMetadataTagTaggingListPersonPersonSkillRelationsTimestampable
```

Retrieves a person_person_skills resource.

Retrieves a person_person_skills resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPersonSkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_person_skills identifier

try {
    $result = $apiInstance->personPersonSkillMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPersonSkillsApi->personPersonSkillMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_person_skills identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPersonSkillsJsonldIdStandardMetadataPersonPersonSkillMetadataTagTaggingListPersonPersonSkillRelationsTimestampable**](../Model/PersonPersonSkillsJsonldIdStandardMetadataPersonPersonSkillMetadataTagTaggingListPersonPersonSkillRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
