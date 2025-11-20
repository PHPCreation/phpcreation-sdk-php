# OpenAPI\Client\PersonPartnersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonPartnersGetCollection()**](PersonPartnersApi.md#apiPersonPartnersGetCollection) | **GET** /open-api/v3/person_partners | Retrieves the collection of person_partners resources. |
| [**apiPersonPartnersIdDelete()**](PersonPartnersApi.md#apiPersonPartnersIdDelete) | **DELETE** /open-api/v3/person_partners/{id} | Removes the person_partners resource. |
| [**apiPersonPartnersIdGet()**](PersonPartnersApi.md#apiPersonPartnersIdGet) | **GET** /open-api/v3/person_partners/{id} | Retrieves a person_partners resource. |
| [**apiPersonPartnersIdPut()**](PersonPartnersApi.md#apiPersonPartnersIdPut) | **PUT** /open-api/v3/person_partners/{id} | Replaces the person_partners resource. |
| [**apiPersonPartnersPost()**](PersonPartnersApi.md#apiPersonPartnersPost) | **POST** /open-api/v3/person_partners | Creates a person_partners resource. |
| [**personPartnerApiFileUpload()**](PersonPartnersApi.md#personPartnerApiFileUpload) | **POST** /open-api/v3/person_partners/{id}/file/upload | Creates a person_partners resource. |
| [**personPartnerDropDown()**](PersonPartnersApi.md#personPartnerDropDown) | **GET** /open-api/v3/person_partners/dropdown/get | Retrieves the collection of person_partners resources. |
| [**personPartnerDuplicate()**](PersonPartnersApi.md#personPartnerDuplicate) | **GET** /open-api/v3/person_partners/duplicate/{id} | Retrieves a person_partners resource. |
| [**personPartnerFetchFiles()**](PersonPartnersApi.md#personPartnerFetchFiles) | **GET** /open-api/v3/person_partners/fetch_files/{id} | Retrieves a person_partners resource. |
| [**personPartnerGetBySlug()**](PersonPartnersApi.md#personPartnerGetBySlug) | **GET** /open-api/v3/person_partners/by_slug/{slug} | Retrieves a person_partners resource. |
| [**personPartnerGetDeleteRelations()**](PersonPartnersApi.md#personPartnerGetDeleteRelations) | **GET** /open-api/v3/person_partners/get_delete_relations/{id} | Retrieves a person_partners resource. |
| [**personPartnerMetadata()**](PersonPartnersApi.md#personPartnerMetadata) | **GET** /open-api/v3/person_partners/metadata/{id} | Retrieves a person_partners resource. |


## `apiPersonPartnersGetCollection()`

```php
apiPersonPartnersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $person, $person2, $clients, $clients2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiPersonPartnersGetCollection200Response
```

Retrieves the collection of person_partners resources.

Retrieves the collection of person_partners resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$clients = 'clients_example'; // string | 
$clients2 = array('clients_example'); // string[] | 
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
$slug_partial = 'slug_partial_example'; // string | person_partners slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_partners slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_partners slug_end_with
$id_partial = 'id_partial_example'; // string | person_partners id_partial
$id_start_with = 'id_start_with_example'; // string | person_partners id_start_with
$id_end_with = 'id_end_with_example'; // string | person_partners id_end_with

try {
    $result = $apiInstance->apiPersonPartnersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $person, $person2, $clients, $clients2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->apiPersonPartnersGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **clients** | **string**|  | [optional] |
| **clients2** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **slug_partial** | **string**| person_partners slug_partial | [optional] |
| **slug_start_with** | **string**| person_partners slug_start_with | [optional] |
| **slug_end_with** | **string**| person_partners slug_end_with | [optional] |
| **id_partial** | **string**| person_partners id_partial | [optional] |
| **id_start_with** | **string**| person_partners id_start_with | [optional] |
| **id_end_with** | **string**| person_partners id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonPartnersGetCollection200Response**](../Model/ApiPersonPartnersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPartnersIdDelete()`

```php
apiPersonPartnersIdDelete($id)
```

Removes the person_partners resource.

Removes the person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier

try {
    $apiInstance->apiPersonPartnersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->apiPersonPartnersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |

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

## `apiPersonPartnersIdGet()`

```php
apiPersonPartnersIdGet($id): \OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a person_partners resource.

Retrieves a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier

try {
    $result = $apiInstance->apiPersonPartnersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->apiPersonPartnersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPartnersIdPut()`

```php
apiPersonPartnersIdPut($id, $person_partners_jsonld_add_post): \OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_partners resource.

Replaces the person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier
$person_partners_jsonld_add_post = new \OpenAPI\Client\Model\PersonPartnersJsonldAddPost(); // \OpenAPI\Client\Model\PersonPartnersJsonldAddPost | The updated person_partners resource

try {
    $result = $apiInstance->apiPersonPartnersIdPut($id, $person_partners_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->apiPersonPartnersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |
| **person_partners_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonPartnersJsonldAddPost**](../Model/PersonPartnersJsonldAddPost.md)| The updated person_partners resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonPartnersJsonldPersonPartnerShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonPartnersPost()`

```php
apiPersonPartnersPost($person_partners_jsonld_add_post): \OpenAPI\Client\Model\PersonPartnersJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a person_partners resource.

Creates a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_partners_jsonld_add_post = new \OpenAPI\Client\Model\PersonPartnersJsonldAddPost(); // \OpenAPI\Client\Model\PersonPartnersJsonldAddPost | The new person_partners resource

try {
    $result = $apiInstance->apiPersonPartnersPost($person_partners_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->apiPersonPartnersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_partners_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonPartnersJsonldAddPost**](../Model/PersonPartnersJsonldAddPost.md)| The new person_partners resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/PersonPartnersJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPartnerApiFileUpload()`

```php
personPartnerApiFileUpload($id, $person_partners_jsonld): \OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_partners resource.

Creates a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier
$person_partners_jsonld = new \OpenAPI\Client\Model\PersonPartnersJsonld(); // \OpenAPI\Client\Model\PersonPartnersJsonld | The new person_partners resource

try {
    $result = $apiInstance->personPartnerApiFileUpload($id, $person_partners_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->personPartnerApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |
| **person_partners_jsonld** | [**\OpenAPI\Client\Model\PersonPartnersJsonld**](../Model/PersonPartnersJsonld.md)| The new person_partners resource | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPartnerDropDown()`

```php
personPartnerDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $person, $person2, $clients, $clients2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag): \OpenAPI\Client\Model\PersonPartnerDropDown200Response
```

Retrieves the collection of person_partners resources.

Retrieves the collection of person_partners resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$clients = 'clients_example'; // string | 
$clients2 = array('clients_example'); // string[] | 
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

try {
    $result = $apiInstance->personPartnerDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $code, $code2, $person, $person2, $clients, $clients2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $enabled, $properties, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->personPartnerDropDown: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **clients** | **string**|  | [optional] |
| **clients2** | [**string[]**](../Model/string.md)|  | [optional] |
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

### Return type

[**\OpenAPI\Client\Model\PersonPartnerDropDown200Response**](../Model/PersonPartnerDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPartnerDuplicate()`

```php
personPartnerDuplicate($id): \OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingList
```

Retrieves a person_partners resource.

Retrieves a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier

try {
    $result = $apiInstance->personPartnerDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->personPartnerDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingList**](../Model/PersonPartnersJsonldPersonPartnerShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPartnerFetchFiles()`

```php
personPartnerFetchFiles($id): \OpenAPI\Client\Model\PersonPartnersJsonld
```

Retrieves a person_partners resource.

Retrieves a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier

try {
    $result = $apiInstance->personPartnerFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->personPartnerFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonld**](../Model/PersonPartnersJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPartnerGetBySlug()`

```php
personPartnerGetBySlug($slug): \OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a person_partners resource.

Retrieves a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_partners identifier

try {
    $result = $apiInstance->personPartnerGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->personPartnerGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_partners identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerShowIdCustomPropertyTimestampableTagTaggingList**](../Model/PersonPartnersJsonldPersonPartnerShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPartnerGetDeleteRelations()`

```php
personPartnerGetDeleteRelations($id): \OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerRelations
```

Retrieves a person_partners resource.

Retrieves a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier

try {
    $result = $apiInstance->personPartnerGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->personPartnerGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldPersonPartnerRelations**](../Model/PersonPartnersJsonldPersonPartnerRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personPartnerMetadata()`

```php
personPartnerMetadata($id): \OpenAPI\Client\Model\PersonPartnersJsonldIdStandardMetadataPersonPartnerMetadataTagTaggingListPersonPartnerRelationsTimestampable
```

Retrieves a person_partners resource.

Retrieves a person_partners resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_partners identifier

try {
    $result = $apiInstance->personPartnerMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonPartnersApi->personPartnerMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_partners identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonPartnersJsonldIdStandardMetadataPersonPartnerMetadataTagTaggingListPersonPartnerRelationsTimestampable**](../Model/PersonPartnersJsonldIdStandardMetadataPersonPartnerMetadataTagTaggingListPersonPartnerRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
