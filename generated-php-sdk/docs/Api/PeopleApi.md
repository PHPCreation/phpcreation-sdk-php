# OpenAPI\Client\PeopleApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPeopleGetCollection()**](PeopleApi.md#apiPeopleGetCollection) | **GET** /open-api/v3/people | Retrieves the collection of people resources. |
| [**apiPeopleIdDelete()**](PeopleApi.md#apiPeopleIdDelete) | **DELETE** /open-api/v3/people/{id} | Removes the people resource. |
| [**apiPeopleIdGet()**](PeopleApi.md#apiPeopleIdGet) | **GET** /open-api/v3/people/{id} | Retrieves a people resource. |
| [**apiPeopleIdPut()**](PeopleApi.md#apiPeopleIdPut) | **PUT** /open-api/v3/people/{id} | Replaces the people resource. |
| [**apiPeoplePost()**](PeopleApi.md#apiPeoplePost) | **POST** /open-api/v3/people | Creates a people resource. |
| [**personApiFileUpload()**](PeopleApi.md#personApiFileUpload) | **POST** /open-api/v3/people/{id}/file/upload | Creates a people resource. |
| [**personDropDown()**](PeopleApi.md#personDropDown) | **GET** /open-api/v3/people/dropdown/get | Retrieves the collection of people resources. |
| [**personDuplicate()**](PeopleApi.md#personDuplicate) | **GET** /open-api/v3/people/duplicate/{id} | Retrieves a people resource. |
| [**personFetchFiles()**](PeopleApi.md#personFetchFiles) | **GET** /open-api/v3/people/fetch_files/{id} | Retrieves a people resource. |
| [**personGetBySlug()**](PeopleApi.md#personGetBySlug) | **GET** /open-api/v3/people/by_slug/{slug} | Retrieves a people resource. |
| [**personGetDeleteRelations()**](PeopleApi.md#personGetDeleteRelations) | **GET** /open-api/v3/people/get_delete_relations/{id} | Retrieves a people resource. |
| [**personMetadata()**](PeopleApi.md#personMetadata) | **GET** /open-api/v3/persons/metadata/{id} | Retrieves a people resource. |


## `apiPeopleGetCollection()`

```php
apiPeopleGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $first_name, $first_name2, $last_name, $last_name2, $corporation, $corporation2, $company_type, $company_type2, $user, $user2, $coordinates, $coordinates2, $currency, $currency2, $person_skills, $person_skills2, $client, $client2, $employee, $employee2, $applicant, $applicant2, $competitor, $competitor2, $supplier, $supplier2, $partner, $partner2, $contact, $contact2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_first_name, $exists_last_name, $enabled, $properties, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_first_name, $order_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with): \OpenAPI\Client\Model\ApiPeopleGetCollection200Response
```

Retrieves the collection of people resources.

Retrieves the collection of people resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
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
$first_name = 'first_name_example'; // string | 
$first_name2 = array('first_name_example'); // string[] | 
$last_name = 'last_name_example'; // string | 
$last_name2 = array('last_name_example'); // string[] | 
$corporation = 'corporation_example'; // string | 
$corporation2 = array('corporation_example'); // string[] | 
$company_type = 'company_type_example'; // string | 
$company_type2 = array('company_type_example'); // string[] | 
$user = 'user_example'; // string | 
$user2 = array('user_example'); // string[] | 
$coordinates = 'coordinates_example'; // string | 
$coordinates2 = array('coordinates_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$person_skills = 'person_skills_example'; // string | 
$person_skills2 = array('person_skills_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$applicant = 'applicant_example'; // string | 
$applicant2 = array('applicant_example'); // string[] | 
$competitor = 'competitor_example'; // string | 
$competitor2 = array('competitor_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$partner = 'partner_example'; // string | 
$partner2 = array('partner_example'); // string[] | 
$contact = 'contact_example'; // string | 
$contact2 = array('contact_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_first_name = True; // bool | 
$exists_last_name = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_first_name = 'order_first_name_example'; // string | 
$order_last_name = 'order_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | people slug_partial
$slug_start_with = 'slug_start_with_example'; // string | people slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | people slug_end_with
$id_partial = 'id_partial_example'; // string | people id_partial
$id_start_with = 'id_start_with_example'; // string | people id_start_with
$id_end_with = 'id_end_with_example'; // string | people id_end_with
$first_name_partial = 'first_name_partial_example'; // string | people firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | people firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | people firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | people lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | people lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | people lastName_end_with

try {
    $result = $apiInstance->apiPeopleGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $first_name, $first_name2, $last_name, $last_name2, $corporation, $corporation2, $company_type, $company_type2, $user, $user2, $coordinates, $coordinates2, $currency, $currency2, $person_skills, $person_skills2, $client, $client2, $employee, $employee2, $applicant, $applicant2, $competitor, $competitor2, $supplier, $supplier2, $partner, $partner2, $contact, $contact2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_first_name, $exists_last_name, $enabled, $properties, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_first_name, $order_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->apiPeopleGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **first_name** | **string**|  | [optional] |
| **first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **corporation** | **string**|  | [optional] |
| **corporation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **company_type** | **string**|  | [optional] |
| **company_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **user** | **string**|  | [optional] |
| **user2** | [**string[]**](../Model/string.md)|  | [optional] |
| **coordinates** | **string**|  | [optional] |
| **coordinates2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_skills** | **string**|  | [optional] |
| **person_skills2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **applicant** | **string**|  | [optional] |
| **applicant2** | [**string[]**](../Model/string.md)|  | [optional] |
| **competitor** | **string**|  | [optional] |
| **competitor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **partner** | **string**|  | [optional] |
| **partner2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contact** | **string**|  | [optional] |
| **contact2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_first_name** | **bool**|  | [optional] |
| **exists_last_name** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_first_name** | **string**|  | [optional] |
| **order_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| people slug_partial | [optional] |
| **slug_start_with** | **string**| people slug_start_with | [optional] |
| **slug_end_with** | **string**| people slug_end_with | [optional] |
| **id_partial** | **string**| people id_partial | [optional] |
| **id_start_with** | **string**| people id_start_with | [optional] |
| **id_end_with** | **string**| people id_end_with | [optional] |
| **first_name_partial** | **string**| people firstName_partial | [optional] |
| **first_name_start_with** | **string**| people firstName_start_with | [optional] |
| **first_name_end_with** | **string**| people firstName_end_with | [optional] |
| **last_name_partial** | **string**| people lastName_partial | [optional] |
| **last_name_start_with** | **string**| people lastName_start_with | [optional] |
| **last_name_end_with** | **string**| people lastName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPeopleGetCollection200Response**](../Model/ApiPeopleGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPeopleIdDelete()`

```php
apiPeopleIdDelete($id)
```

Removes the people resource.

Removes the people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier

try {
    $apiInstance->apiPeopleIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->apiPeopleIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |

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

## `apiPeopleIdGet()`

```php
apiPeopleIdGet($id): \OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a people resource.

Retrieves a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier

try {
    $result = $apiInstance->apiPeopleIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->apiPeopleIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPeopleIdPut()`

```php
apiPeopleIdPut($id, $people_jsonld_add_post): \OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the people resource.

Replaces the people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier
$people_jsonld_add_post = new \OpenAPI\Client\Model\PeopleJsonldAddPost(); // \OpenAPI\Client\Model\PeopleJsonldAddPost | The updated people resource

try {
    $result = $apiInstance->apiPeopleIdPut($id, $people_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->apiPeopleIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |
| **people_jsonld_add_post** | [**\OpenAPI\Client\Model\PeopleJsonldAddPost**](../Model/PeopleJsonldAddPost.md)| The updated people resource | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPeoplePost()`

```php
apiPeoplePost($people_jsonld_add_post): \OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a people resource.

Creates a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$people_jsonld_add_post = new \OpenAPI\Client\Model\PeopleJsonldAddPost(); // \OpenAPI\Client\Model\PeopleJsonldAddPost | The new people resource

try {
    $result = $apiInstance->apiPeoplePost($people_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->apiPeoplePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **people_jsonld_add_post** | [**\OpenAPI\Client\Model\PeopleJsonldAddPost**](../Model/PeopleJsonldAddPost.md)| The new people resource | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApiFileUpload()`

```php
personApiFileUpload($id, $people_jsonld): \OpenAPI\Client\Model\PeopleJsonldPersonShowIdTimestampableTagTaggingListStandardShow
```

Creates a people resource.

Creates a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier
$people_jsonld = new \OpenAPI\Client\Model\PeopleJsonld(); // \OpenAPI\Client\Model\PeopleJsonld | The new people resource

try {
    $result = $apiInstance->personApiFileUpload($id, $people_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->personApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |
| **people_jsonld** | [**\OpenAPI\Client\Model\PeopleJsonld**](../Model/PeopleJsonld.md)| The new people resource | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldPersonShowIdTimestampableTagTaggingListStandardShow**](../Model/PeopleJsonldPersonShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personDropDown()`

```php
personDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $first_name, $first_name2, $last_name, $last_name2, $corporation, $corporation2, $company_type, $company_type2, $user, $user2, $coordinates, $coordinates2, $currency, $currency2, $person_skills, $person_skills2, $client, $client2, $employee, $employee2, $applicant, $applicant2, $competitor, $competitor2, $supplier, $supplier2, $partner, $partner2, $contact, $contact2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_first_name, $exists_last_name, $enabled, $properties, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_first_name, $order_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with): \OpenAPI\Client\Model\PersonDropDown200Response
```

Retrieves the collection of people resources.

Retrieves the collection of people resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
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
$first_name = 'first_name_example'; // string | 
$first_name2 = array('first_name_example'); // string[] | 
$last_name = 'last_name_example'; // string | 
$last_name2 = array('last_name_example'); // string[] | 
$corporation = 'corporation_example'; // string | 
$corporation2 = array('corporation_example'); // string[] | 
$company_type = 'company_type_example'; // string | 
$company_type2 = array('company_type_example'); // string[] | 
$user = 'user_example'; // string | 
$user2 = array('user_example'); // string[] | 
$coordinates = 'coordinates_example'; // string | 
$coordinates2 = array('coordinates_example'); // string[] | 
$currency = 'currency_example'; // string | 
$currency2 = array('currency_example'); // string[] | 
$person_skills = 'person_skills_example'; // string | 
$person_skills2 = array('person_skills_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$applicant = 'applicant_example'; // string | 
$applicant2 = array('applicant_example'); // string[] | 
$competitor = 'competitor_example'; // string | 
$competitor2 = array('competitor_example'); // string[] | 
$supplier = 'supplier_example'; // string | 
$supplier2 = array('supplier_example'); // string[] | 
$partner = 'partner_example'; // string | 
$partner2 = array('partner_example'); // string[] | 
$contact = 'contact_example'; // string | 
$contact2 = array('contact_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_first_name = True; // bool | 
$exists_last_name = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_first_name = 'order_first_name_example'; // string | 
$order_last_name = 'order_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | people slug_partial
$slug_start_with = 'slug_start_with_example'; // string | people slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | people slug_end_with
$id_partial = 'id_partial_example'; // string | people id_partial
$id_start_with = 'id_start_with_example'; // string | people id_start_with
$id_end_with = 'id_end_with_example'; // string | people id_end_with
$first_name_partial = 'first_name_partial_example'; // string | people firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | people firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | people firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | people lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | people lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | people lastName_end_with

try {
    $result = $apiInstance->personDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $first_name, $first_name2, $last_name, $last_name2, $corporation, $corporation2, $company_type, $company_type2, $user, $user2, $coordinates, $coordinates2, $currency, $currency2, $person_skills, $person_skills2, $client, $client2, $employee, $employee2, $applicant, $applicant2, $competitor, $competitor2, $supplier, $supplier2, $partner, $partner2, $contact, $contact2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_first_name, $exists_last_name, $enabled, $properties, $tag, $order_id, $order_slug, $order_created_at, $order_updated_at, $order_first_name, $order_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->personDropDown: ', $e->getMessage(), PHP_EOL;
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
| **first_name** | **string**|  | [optional] |
| **first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **corporation** | **string**|  | [optional] |
| **corporation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **company_type** | **string**|  | [optional] |
| **company_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **user** | **string**|  | [optional] |
| **user2** | [**string[]**](../Model/string.md)|  | [optional] |
| **coordinates** | **string**|  | [optional] |
| **coordinates2** | [**string[]**](../Model/string.md)|  | [optional] |
| **currency** | **string**|  | [optional] |
| **currency2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_skills** | **string**|  | [optional] |
| **person_skills2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **applicant** | **string**|  | [optional] |
| **applicant2** | [**string[]**](../Model/string.md)|  | [optional] |
| **competitor** | **string**|  | [optional] |
| **competitor2** | [**string[]**](../Model/string.md)|  | [optional] |
| **supplier** | **string**|  | [optional] |
| **supplier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **partner** | **string**|  | [optional] |
| **partner2** | [**string[]**](../Model/string.md)|  | [optional] |
| **contact** | **string**|  | [optional] |
| **contact2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_first_name** | **bool**|  | [optional] |
| **exists_last_name** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_first_name** | **string**|  | [optional] |
| **order_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| people slug_partial | [optional] |
| **slug_start_with** | **string**| people slug_start_with | [optional] |
| **slug_end_with** | **string**| people slug_end_with | [optional] |
| **id_partial** | **string**| people id_partial | [optional] |
| **id_start_with** | **string**| people id_start_with | [optional] |
| **id_end_with** | **string**| people id_end_with | [optional] |
| **first_name_partial** | **string**| people firstName_partial | [optional] |
| **first_name_start_with** | **string**| people firstName_start_with | [optional] |
| **first_name_end_with** | **string**| people firstName_end_with | [optional] |
| **last_name_partial** | **string**| people lastName_partial | [optional] |
| **last_name_start_with** | **string**| people lastName_start_with | [optional] |
| **last_name_end_with** | **string**| people lastName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonDropDown200Response**](../Model/PersonDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personDuplicate()`

```php
personDuplicate($id): \OpenAPI\Client\Model\PeopleJsonldPersonShowIdTimestampableTagTaggingList
```

Retrieves a people resource.

Retrieves a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier

try {
    $result = $apiInstance->personDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->personDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldPersonShowIdTimestampableTagTaggingList**](../Model/PeopleJsonldPersonShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personFetchFiles()`

```php
personFetchFiles($id): \OpenAPI\Client\Model\PeopleJsonld
```

Retrieves a people resource.

Retrieves a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier

try {
    $result = $apiInstance->personFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->personFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonld**](../Model/PeopleJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personGetBySlug()`

```php
personGetBySlug($slug): \OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a people resource.

Retrieves a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | people identifier

try {
    $result = $apiInstance->personGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->personGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| people identifier | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PeopleJsonldStandardShowPersonShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personGetDeleteRelations()`

```php
personGetDeleteRelations($id): \OpenAPI\Client\Model\PeopleJsonldPersonRelations
```

Retrieves a people resource.

Retrieves a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier

try {
    $result = $apiInstance->personGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->personGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldPersonRelations**](../Model/PeopleJsonldPersonRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personMetadata()`

```php
personMetadata($id): \OpenAPI\Client\Model\PeopleJsonldIdStandardMetadataPersonMetadataTagTaggingListPersonRelationsTimestampable
```

Retrieves a people resource.

Retrieves a people resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | people identifier

try {
    $result = $apiInstance->personMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->personMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| people identifier | |

### Return type

[**\OpenAPI\Client\Model\PeopleJsonldIdStandardMetadataPersonMetadataTagTaggingListPersonRelationsTimestampable**](../Model/PeopleJsonldIdStandardMetadataPersonMetadataTagTaggingListPersonRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
