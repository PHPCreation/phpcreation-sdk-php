# OpenAPI\Client\PersonContactsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonContactsGetCollection()**](PersonContactsApi.md#apiPersonContactsGetCollection) | **GET** /open-api/v3/person_contacts | Retrieves the collection of person_contacts resources. |
| [**apiPersonContactsIdDelete()**](PersonContactsApi.md#apiPersonContactsIdDelete) | **DELETE** /open-api/v3/person_contacts/{id} | Removes the person_contacts resource. |
| [**apiPersonContactsIdGet()**](PersonContactsApi.md#apiPersonContactsIdGet) | **GET** /open-api/v3/person_contacts/{id} | Retrieves a person_contacts resource. |
| [**apiPersonContactsIdPut()**](PersonContactsApi.md#apiPersonContactsIdPut) | **PUT** /open-api/v3/person_contacts/{id} | Replaces the person_contacts resource. |
| [**apiPersonContactsPost()**](PersonContactsApi.md#apiPersonContactsPost) | **POST** /open-api/v3/person_contacts | Creates a person_contacts resource. |
| [**personContactApiFileUpload()**](PersonContactsApi.md#personContactApiFileUpload) | **POST** /open-api/v3/person_contacts/{id}/file/upload | Creates a person_contacts resource. |
| [**personContactDropDown()**](PersonContactsApi.md#personContactDropDown) | **GET** /open-api/v3/person_contacts/dropdown/get | Retrieves the collection of person_contacts resources. |
| [**personContactDuplicate()**](PersonContactsApi.md#personContactDuplicate) | **GET** /open-api/v3/person_contacts/duplicate/{id} | Retrieves a person_contacts resource. |
| [**personContactFetchFiles()**](PersonContactsApi.md#personContactFetchFiles) | **GET** /open-api/v3/person_contacts/fetch_files/{id} | Retrieves a person_contacts resource. |
| [**personContactGetBySlug()**](PersonContactsApi.md#personContactGetBySlug) | **GET** /open-api/v3/person_contacts/by_slug/{slug} | Retrieves a person_contacts resource. |
| [**personContactGetDeleteRelations()**](PersonContactsApi.md#personContactGetDeleteRelations) | **GET** /open-api/v3/person_contacts/get_delete_relations/{id} | Retrieves a person_contacts resource. |
| [**personContactMetadata()**](PersonContactsApi.md#personContactMetadata) | **GET** /open-api/v3/person_contacts/metadata/{id} | Retrieves a person_contacts resource. |


## `apiPersonContactsGetCollection()`

```php
apiPersonContactsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with): \OpenAPI\Client\Model\ApiPersonContactsGetCollection200Response
```

Retrieves the collection of person_contacts resources.

Retrieves the collection of person_contacts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
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
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_contacts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_contacts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_contacts slug_end_with
$id_partial = 'id_partial_example'; // string | person_contacts id_partial
$id_start_with = 'id_start_with_example'; // string | person_contacts id_start_with
$id_end_with = 'id_end_with_example'; // string | person_contacts id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_contacts firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_contacts firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_contacts firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_contacts lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_contacts lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_contacts lastName_end_with

try {
    $result = $apiInstance->apiPersonContactsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->apiPersonContactsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_contacts slug_partial | [optional] |
| **slug_start_with** | **string**| person_contacts slug_start_with | [optional] |
| **slug_end_with** | **string**| person_contacts slug_end_with | [optional] |
| **id_partial** | **string**| person_contacts id_partial | [optional] |
| **id_start_with** | **string**| person_contacts id_start_with | [optional] |
| **id_end_with** | **string**| person_contacts id_end_with | [optional] |
| **first_name_partial** | **string**| person_contacts firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_contacts firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_contacts firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_contacts lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_contacts lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_contacts lastName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonContactsGetCollection200Response**](../Model/ApiPersonContactsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonContactsIdDelete()`

```php
apiPersonContactsIdDelete($id)
```

Removes the person_contacts resource.

Removes the person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier

try {
    $apiInstance->apiPersonContactsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->apiPersonContactsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |

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

## `apiPersonContactsIdGet()`

```php
apiPersonContactsIdGet($id): \OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_contacts resource.

Retrieves a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier

try {
    $result = $apiInstance->apiPersonContactsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->apiPersonContactsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonContactsIdPut()`

```php
apiPersonContactsIdPut($id, $person_contacts_jsonld_add_post): \OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_contacts resource.

Replaces the person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier
$person_contacts_jsonld_add_post = new \OpenAPI\Client\Model\PersonContactsJsonldAddPost(); // \OpenAPI\Client\Model\PersonContactsJsonldAddPost | The updated person_contacts resource

try {
    $result = $apiInstance->apiPersonContactsIdPut($id, $person_contacts_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->apiPersonContactsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |
| **person_contacts_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonContactsJsonldAddPost**](../Model/PersonContactsJsonldAddPost.md)| The updated person_contacts resource | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonContactsPost()`

```php
apiPersonContactsPost($person_contacts_jsonld_add_post): \OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_contacts resource.

Creates a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_contacts_jsonld_add_post = new \OpenAPI\Client\Model\PersonContactsJsonldAddPost(); // \OpenAPI\Client\Model\PersonContactsJsonldAddPost | The new person_contacts resource

try {
    $result = $apiInstance->apiPersonContactsPost($person_contacts_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->apiPersonContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_contacts_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonContactsJsonldAddPost**](../Model/PersonContactsJsonldAddPost.md)| The new person_contacts resource | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personContactApiFileUpload()`

```php
personContactApiFileUpload($id, $person_contacts_jsonld): \OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_contacts resource.

Creates a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier
$person_contacts_jsonld = new \OpenAPI\Client\Model\PersonContactsJsonld(); // \OpenAPI\Client\Model\PersonContactsJsonld | The new person_contacts resource

try {
    $result = $apiInstance->personContactApiFileUpload($id, $person_contacts_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->personContactApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |
| **person_contacts_jsonld** | [**\OpenAPI\Client\Model\PersonContactsJsonld**](../Model/PersonContactsJsonld.md)| The new person_contacts resource | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonContactsJsonldPersonContactShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personContactDropDown()`

```php
personContactDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with): \OpenAPI\Client\Model\PersonContactDropDown200Response
```

Retrieves the collection of person_contacts resources.

Retrieves the collection of person_contacts resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
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
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_contacts slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_contacts slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_contacts slug_end_with
$id_partial = 'id_partial_example'; // string | person_contacts id_partial
$id_start_with = 'id_start_with_example'; // string | person_contacts id_start_with
$id_end_with = 'id_end_with_example'; // string | person_contacts id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_contacts firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_contacts firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_contacts firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_contacts lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_contacts lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_contacts lastName_end_with

try {
    $result = $apiInstance->personContactDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->personContactDropDown: ', $e->getMessage(), PHP_EOL;
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
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_contacts slug_partial | [optional] |
| **slug_start_with** | **string**| person_contacts slug_start_with | [optional] |
| **slug_end_with** | **string**| person_contacts slug_end_with | [optional] |
| **id_partial** | **string**| person_contacts id_partial | [optional] |
| **id_start_with** | **string**| person_contacts id_start_with | [optional] |
| **id_end_with** | **string**| person_contacts id_end_with | [optional] |
| **first_name_partial** | **string**| person_contacts firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_contacts firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_contacts firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_contacts lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_contacts lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_contacts lastName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonContactDropDown200Response**](../Model/PersonContactDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personContactDuplicate()`

```php
personContactDuplicate($id): \OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_contacts resource.

Retrieves a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier

try {
    $result = $apiInstance->personContactDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->personContactDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personContactFetchFiles()`

```php
personContactFetchFiles($id): \OpenAPI\Client\Model\PersonContactsJsonld
```

Retrieves a person_contacts resource.

Retrieves a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier

try {
    $result = $apiInstance->personContactFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->personContactFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonld**](../Model/PersonContactsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personContactGetBySlug()`

```php
personContactGetBySlug($slug): \OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_contacts resource.

Retrieves a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_contacts identifier

try {
    $result = $apiInstance->personContactGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->personContactGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_contacts identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonContactsJsonldPersonContactShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personContactGetDeleteRelations()`

```php
personContactGetDeleteRelations($id): \OpenAPI\Client\Model\PersonContactsJsonldPersonContactRelations
```

Retrieves a person_contacts resource.

Retrieves a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier

try {
    $result = $apiInstance->personContactGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->personContactGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldPersonContactRelations**](../Model/PersonContactsJsonldPersonContactRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personContactMetadata()`

```php
personContactMetadata($id): \OpenAPI\Client\Model\PersonContactsJsonldIdStandardMetadataPersonContactMetadataTagTaggingListPersonContactRelationsTimestampable
```

Retrieves a person_contacts resource.

Retrieves a person_contacts resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_contacts identifier

try {
    $result = $apiInstance->personContactMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonContactsApi->personContactMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_contacts identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonContactsJsonldIdStandardMetadataPersonContactMetadataTagTaggingListPersonContactRelationsTimestampable**](../Model/PersonContactsJsonldIdStandardMetadataPersonContactMetadataTagTaggingListPersonContactRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
