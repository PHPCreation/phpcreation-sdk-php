# OpenAPI\Client\PersonApplicantsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonApplicantsGetCollection()**](PersonApplicantsApi.md#apiPersonApplicantsGetCollection) | **GET** /open-api/v3/person_applicants | Retrieves the collection of person_applicants resources. |
| [**apiPersonApplicantsIdDelete()**](PersonApplicantsApi.md#apiPersonApplicantsIdDelete) | **DELETE** /open-api/v3/person_applicants/{id} | Removes the person_applicants resource. |
| [**apiPersonApplicantsIdGet()**](PersonApplicantsApi.md#apiPersonApplicantsIdGet) | **GET** /open-api/v3/person_applicants/{id} | Retrieves a person_applicants resource. |
| [**apiPersonApplicantsIdPut()**](PersonApplicantsApi.md#apiPersonApplicantsIdPut) | **PUT** /open-api/v3/person_applicants/{id} | Replaces the person_applicants resource. |
| [**apiPersonApplicantsPost()**](PersonApplicantsApi.md#apiPersonApplicantsPost) | **POST** /open-api/v3/person_applicants | Creates a person_applicants resource. |
| [**personApplicantApiFileUpload()**](PersonApplicantsApi.md#personApplicantApiFileUpload) | **POST** /open-api/v3/person_applicants/{id}/file/upload | Creates a person_applicants resource. |
| [**personApplicantDropDown()**](PersonApplicantsApi.md#personApplicantDropDown) | **GET** /open-api/v3/person_applicants/dropdown/get | Retrieves the collection of person_applicants resources. |
| [**personApplicantDuplicate()**](PersonApplicantsApi.md#personApplicantDuplicate) | **GET** /open-api/v3/person_applicants/duplicate/{id} | Retrieves a person_applicants resource. |
| [**personApplicantFetchFiles()**](PersonApplicantsApi.md#personApplicantFetchFiles) | **GET** /open-api/v3/person_applicants/fetch_files/{id} | Retrieves a person_applicants resource. |
| [**personApplicantGetBySlug()**](PersonApplicantsApi.md#personApplicantGetBySlug) | **GET** /open-api/v3/person_applicants/by_slug/{slug} | Retrieves a person_applicants resource. |
| [**personApplicantGetDeleteRelations()**](PersonApplicantsApi.md#personApplicantGetDeleteRelations) | **GET** /open-api/v3/person_applicants/get_delete_relations/{id} | Retrieves a person_applicants resource. |
| [**personApplicantMetadata()**](PersonApplicantsApi.md#personApplicantMetadata) | **GET** /open-api/v3/person_applicants/metadata/{id} | Retrieves a person_applicants resource. |


## `apiPersonApplicantsGetCollection()`

```php
apiPersonApplicantsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_entry_before, $date_entry_strictly_before, $date_entry_after, $date_entry_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $status, $status2, $type, $type2, $working_type, $working_type2, $search, $potential, $potential2, $desired_salary, $desired_salary2, $desired_time, $desired_time2, $potential_between, $potential_gt, $potential_gte, $potential_lt, $potential_lte, $desired_salary_between, $desired_salary_gt, $desired_salary_gte, $desired_salary_lt, $desired_salary_lte, $desired_time_between, $desired_time_gt, $desired_time_gte, $desired_time_lt, $desired_time_lte, $exists_deleted_at, $exists_custom_properties, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_desired_salary, $order_desired_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with): \OpenAPI\Client\Model\ApiPersonApplicantsGetCollection200Response
```

Retrieves the collection of person_applicants resources.

Retrieves the collection of person_applicants resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
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
$date_entry_before = 'date_entry_before_example'; // string | 
$date_entry_strictly_before = 'date_entry_strictly_before_example'; // string | 
$date_entry_after = 'date_entry_after_example'; // string | 
$date_entry_strictly_after = 'date_entry_strictly_after_example'; // string | 
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
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$working_type = 'working_type_example'; // string | 
$working_type2 = array('working_type_example'); // string[] | 
$search = 'search_example'; // string | 
$potential = 'potential_example'; // string | 
$potential2 = array('potential_example'); // string[] | 
$desired_salary = 'desired_salary_example'; // string | 
$desired_salary2 = array('desired_salary_example'); // string[] | 
$desired_time = 'desired_time_example'; // string | 
$desired_time2 = array('desired_time_example'); // string[] | 
$potential_between = 'potential_between_example'; // string | 
$potential_gt = 'potential_gt_example'; // string | 
$potential_gte = 'potential_gte_example'; // string | 
$potential_lt = 'potential_lt_example'; // string | 
$potential_lte = 'potential_lte_example'; // string | 
$desired_salary_between = 'desired_salary_between_example'; // string | 
$desired_salary_gt = 'desired_salary_gt_example'; // string | 
$desired_salary_gte = 'desired_salary_gte_example'; // string | 
$desired_salary_lt = 'desired_salary_lt_example'; // string | 
$desired_salary_lte = 'desired_salary_lte_example'; // string | 
$desired_time_between = 'desired_time_between_example'; // string | 
$desired_time_gt = 'desired_time_gt_example'; // string | 
$desired_time_gte = 'desired_time_gte_example'; // string | 
$desired_time_lt = 'desired_time_lt_example'; // string | 
$desired_time_lte = 'desired_time_lte_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_potential = 'order_potential_example'; // string | 
$order_desired_salary = 'order_desired_salary_example'; // string | 
$order_desired_time = 'order_desired_time_example'; // string | 
$order_person_first_name = 'order_person_first_name_example'; // string | 
$order_person_last_name = 'order_person_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_applicants slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_applicants slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_applicants slug_end_with
$id_partial = 'id_partial_example'; // string | person_applicants id_partial
$id_start_with = 'id_start_with_example'; // string | person_applicants id_start_with
$id_end_with = 'id_end_with_example'; // string | person_applicants id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_applicants firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_applicants firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_applicants firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_applicants lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_applicants lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_applicants lastName_end_with

try {
    $result = $apiInstance->apiPersonApplicantsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_entry_before, $date_entry_strictly_before, $date_entry_after, $date_entry_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $status, $status2, $type, $type2, $working_type, $working_type2, $search, $potential, $potential2, $desired_salary, $desired_salary2, $desired_time, $desired_time2, $potential_between, $potential_gt, $potential_gte, $potential_lt, $potential_lte, $desired_salary_between, $desired_salary_gt, $desired_salary_gte, $desired_salary_lt, $desired_salary_lte, $desired_time_between, $desired_time_gt, $desired_time_gte, $desired_time_lt, $desired_time_lte, $exists_deleted_at, $exists_custom_properties, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_desired_salary, $order_desired_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->apiPersonApplicantsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_entry_before** | **string**|  | [optional] |
| **date_entry_strictly_before** | **string**|  | [optional] |
| **date_entry_after** | **string**|  | [optional] |
| **date_entry_strictly_after** | **string**|  | [optional] |
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
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **working_type** | **string**|  | [optional] |
| **working_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **potential** | **string**|  | [optional] |
| **potential2** | [**string[]**](../Model/string.md)|  | [optional] |
| **desired_salary** | **string**|  | [optional] |
| **desired_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **desired_time** | **string**|  | [optional] |
| **desired_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **potential_between** | **string**|  | [optional] |
| **potential_gt** | **string**|  | [optional] |
| **potential_gte** | **string**|  | [optional] |
| **potential_lt** | **string**|  | [optional] |
| **potential_lte** | **string**|  | [optional] |
| **desired_salary_between** | **string**|  | [optional] |
| **desired_salary_gt** | **string**|  | [optional] |
| **desired_salary_gte** | **string**|  | [optional] |
| **desired_salary_lt** | **string**|  | [optional] |
| **desired_salary_lte** | **string**|  | [optional] |
| **desired_time_between** | **string**|  | [optional] |
| **desired_time_gt** | **string**|  | [optional] |
| **desired_time_gte** | **string**|  | [optional] |
| **desired_time_lt** | **string**|  | [optional] |
| **desired_time_lte** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_potential** | **string**|  | [optional] |
| **order_desired_salary** | **string**|  | [optional] |
| **order_desired_time** | **string**|  | [optional] |
| **order_person_first_name** | **string**|  | [optional] |
| **order_person_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| person_applicants slug_partial | [optional] |
| **slug_start_with** | **string**| person_applicants slug_start_with | [optional] |
| **slug_end_with** | **string**| person_applicants slug_end_with | [optional] |
| **id_partial** | **string**| person_applicants id_partial | [optional] |
| **id_start_with** | **string**| person_applicants id_start_with | [optional] |
| **id_end_with** | **string**| person_applicants id_end_with | [optional] |
| **first_name_partial** | **string**| person_applicants firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_applicants firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_applicants firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_applicants lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_applicants lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_applicants lastName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonApplicantsGetCollection200Response**](../Model/ApiPersonApplicantsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonApplicantsIdDelete()`

```php
apiPersonApplicantsIdDelete($id)
```

Removes the person_applicants resource.

Removes the person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier

try {
    $apiInstance->apiPersonApplicantsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->apiPersonApplicantsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |

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

## `apiPersonApplicantsIdGet()`

```php
apiPersonApplicantsIdGet($id): \OpenAPI\Client\Model\PersonApplicantsJsonldStandardShowPersonApplicantShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_applicants resource.

Retrieves a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier

try {
    $result = $apiInstance->apiPersonApplicantsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->apiPersonApplicantsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldStandardShowPersonApplicantShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonApplicantsJsonldStandardShowPersonApplicantShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonApplicantsIdPut()`

```php
apiPersonApplicantsIdPut($id, $person_applicants_jsonld_add_post): \OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_applicants resource.

Replaces the person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier
$person_applicants_jsonld_add_post = new \OpenAPI\Client\Model\PersonApplicantsJsonldAddPost(); // \OpenAPI\Client\Model\PersonApplicantsJsonldAddPost | The updated person_applicants resource

try {
    $result = $apiInstance->apiPersonApplicantsIdPut($id, $person_applicants_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->apiPersonApplicantsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |
| **person_applicants_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonApplicantsJsonldAddPost**](../Model/PersonApplicantsJsonldAddPost.md)| The updated person_applicants resource | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonApplicantsPost()`

```php
apiPersonApplicantsPost($person_applicants_jsonld_add_post): \OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_applicants resource.

Creates a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_applicants_jsonld_add_post = new \OpenAPI\Client\Model\PersonApplicantsJsonldAddPost(); // \OpenAPI\Client\Model\PersonApplicantsJsonldAddPost | The new person_applicants resource

try {
    $result = $apiInstance->apiPersonApplicantsPost($person_applicants_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->apiPersonApplicantsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_applicants_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonApplicantsJsonldAddPost**](../Model/PersonApplicantsJsonldAddPost.md)| The new person_applicants resource | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApplicantApiFileUpload()`

```php
personApplicantApiFileUpload($id, $person_applicants_jsonld): \OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_applicants resource.

Creates a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier
$person_applicants_jsonld = new \OpenAPI\Client\Model\PersonApplicantsJsonld(); // \OpenAPI\Client\Model\PersonApplicantsJsonld | The new person_applicants resource

try {
    $result = $apiInstance->personApplicantApiFileUpload($id, $person_applicants_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->personApplicantApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |
| **person_applicants_jsonld** | [**\OpenAPI\Client\Model\PersonApplicantsJsonld**](../Model/PersonApplicantsJsonld.md)| The new person_applicants resource | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonApplicantsJsonldPersonApplicantShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApplicantDropDown()`

```php
personApplicantDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_entry_before, $date_entry_strictly_before, $date_entry_after, $date_entry_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $status, $status2, $type, $type2, $working_type, $working_type2, $search, $potential, $potential2, $desired_salary, $desired_salary2, $desired_time, $desired_time2, $potential_between, $potential_gt, $potential_gte, $potential_lt, $potential_lte, $desired_salary_between, $desired_salary_gt, $desired_salary_gte, $desired_salary_lt, $desired_salary_lte, $desired_time_between, $desired_time_gt, $desired_time_gte, $desired_time_lt, $desired_time_lte, $exists_deleted_at, $exists_custom_properties, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_desired_salary, $order_desired_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with): \OpenAPI\Client\Model\PersonApplicantDropDown200Response
```

Retrieves the collection of person_applicants resources.

Retrieves the collection of person_applicants resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
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
$date_entry_before = 'date_entry_before_example'; // string | 
$date_entry_strictly_before = 'date_entry_strictly_before_example'; // string | 
$date_entry_after = 'date_entry_after_example'; // string | 
$date_entry_strictly_after = 'date_entry_strictly_after_example'; // string | 
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
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$working_type = 'working_type_example'; // string | 
$working_type2 = array('working_type_example'); // string[] | 
$search = 'search_example'; // string | 
$potential = 'potential_example'; // string | 
$potential2 = array('potential_example'); // string[] | 
$desired_salary = 'desired_salary_example'; // string | 
$desired_salary2 = array('desired_salary_example'); // string[] | 
$desired_time = 'desired_time_example'; // string | 
$desired_time2 = array('desired_time_example'); // string[] | 
$potential_between = 'potential_between_example'; // string | 
$potential_gt = 'potential_gt_example'; // string | 
$potential_gte = 'potential_gte_example'; // string | 
$potential_lt = 'potential_lt_example'; // string | 
$potential_lte = 'potential_lte_example'; // string | 
$desired_salary_between = 'desired_salary_between_example'; // string | 
$desired_salary_gt = 'desired_salary_gt_example'; // string | 
$desired_salary_gte = 'desired_salary_gte_example'; // string | 
$desired_salary_lt = 'desired_salary_lt_example'; // string | 
$desired_salary_lte = 'desired_salary_lte_example'; // string | 
$desired_time_between = 'desired_time_between_example'; // string | 
$desired_time_gt = 'desired_time_gt_example'; // string | 
$desired_time_gte = 'desired_time_gte_example'; // string | 
$desired_time_lt = 'desired_time_lt_example'; // string | 
$desired_time_lte = 'desired_time_lte_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_potential = 'order_potential_example'; // string | 
$order_desired_salary = 'order_desired_salary_example'; // string | 
$order_desired_time = 'order_desired_time_example'; // string | 
$order_person_first_name = 'order_person_first_name_example'; // string | 
$order_person_last_name = 'order_person_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_applicants slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_applicants slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_applicants slug_end_with
$id_partial = 'id_partial_example'; // string | person_applicants id_partial
$id_start_with = 'id_start_with_example'; // string | person_applicants id_start_with
$id_end_with = 'id_end_with_example'; // string | person_applicants id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_applicants firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_applicants firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_applicants firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_applicants lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_applicants lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_applicants lastName_end_with

try {
    $result = $apiInstance->personApplicantDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_entry_before, $date_entry_strictly_before, $date_entry_after, $date_entry_strictly_after, $id, $id2, $slug, $slug2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $status, $status2, $type, $type2, $working_type, $working_type2, $search, $potential, $potential2, $desired_salary, $desired_salary2, $desired_time, $desired_time2, $potential_between, $potential_gt, $potential_gte, $potential_lt, $potential_lte, $desired_salary_between, $desired_salary_gt, $desired_salary_gte, $desired_salary_lt, $desired_salary_lte, $desired_time_between, $desired_time_gt, $desired_time_gte, $desired_time_lt, $desired_time_lte, $exists_deleted_at, $exists_custom_properties, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_desired_salary, $order_desired_time, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->personApplicantDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_entry_before** | **string**|  | [optional] |
| **date_entry_strictly_before** | **string**|  | [optional] |
| **date_entry_after** | **string**|  | [optional] |
| **date_entry_strictly_after** | **string**|  | [optional] |
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
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **working_type** | **string**|  | [optional] |
| **working_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **potential** | **string**|  | [optional] |
| **potential2** | [**string[]**](../Model/string.md)|  | [optional] |
| **desired_salary** | **string**|  | [optional] |
| **desired_salary2** | [**string[]**](../Model/string.md)|  | [optional] |
| **desired_time** | **string**|  | [optional] |
| **desired_time2** | [**string[]**](../Model/string.md)|  | [optional] |
| **potential_between** | **string**|  | [optional] |
| **potential_gt** | **string**|  | [optional] |
| **potential_gte** | **string**|  | [optional] |
| **potential_lt** | **string**|  | [optional] |
| **potential_lte** | **string**|  | [optional] |
| **desired_salary_between** | **string**|  | [optional] |
| **desired_salary_gt** | **string**|  | [optional] |
| **desired_salary_gte** | **string**|  | [optional] |
| **desired_salary_lt** | **string**|  | [optional] |
| **desired_salary_lte** | **string**|  | [optional] |
| **desired_time_between** | **string**|  | [optional] |
| **desired_time_gt** | **string**|  | [optional] |
| **desired_time_gte** | **string**|  | [optional] |
| **desired_time_lt** | **string**|  | [optional] |
| **desired_time_lte** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_potential** | **string**|  | [optional] |
| **order_desired_salary** | **string**|  | [optional] |
| **order_desired_time** | **string**|  | [optional] |
| **order_person_first_name** | **string**|  | [optional] |
| **order_person_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| person_applicants slug_partial | [optional] |
| **slug_start_with** | **string**| person_applicants slug_start_with | [optional] |
| **slug_end_with** | **string**| person_applicants slug_end_with | [optional] |
| **id_partial** | **string**| person_applicants id_partial | [optional] |
| **id_start_with** | **string**| person_applicants id_start_with | [optional] |
| **id_end_with** | **string**| person_applicants id_end_with | [optional] |
| **first_name_partial** | **string**| person_applicants firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_applicants firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_applicants firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_applicants lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_applicants lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_applicants lastName_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantDropDown200Response**](../Model/PersonApplicantDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApplicantDuplicate()`

```php
personApplicantDuplicate($id): \OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_applicants resource.

Retrieves a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier

try {
    $result = $apiInstance->personApplicantDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->personApplicantDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApplicantFetchFiles()`

```php
personApplicantFetchFiles($id): \OpenAPI\Client\Model\PersonApplicantsJsonld
```

Retrieves a person_applicants resource.

Retrieves a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier

try {
    $result = $apiInstance->personApplicantFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->personApplicantFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonld**](../Model/PersonApplicantsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApplicantGetBySlug()`

```php
personApplicantGetBySlug($slug): \OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_applicants resource.

Retrieves a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_applicants identifier

try {
    $result = $apiInstance->personApplicantGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->personApplicantGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_applicants identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonApplicantsJsonldPersonApplicantShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApplicantGetDeleteRelations()`

```php
personApplicantGetDeleteRelations($id): \OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantRelations
```

Retrieves a person_applicants resource.

Retrieves a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier

try {
    $result = $apiInstance->personApplicantGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->personApplicantGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldPersonApplicantRelations**](../Model/PersonApplicantsJsonldPersonApplicantRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personApplicantMetadata()`

```php
personApplicantMetadata($id): \OpenAPI\Client\Model\PersonApplicantsJsonldIdStandardMetadataPersonApplicantMetadataTagTaggingListPersonApplicantRelationsTimestampable
```

Retrieves a person_applicants resource.

Retrieves a person_applicants resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_applicants identifier

try {
    $result = $apiInstance->personApplicantMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApplicantsApi->personApplicantMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_applicants identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonApplicantsJsonldIdStandardMetadataPersonApplicantMetadataTagTaggingListPersonApplicantRelationsTimestampable**](../Model/PersonApplicantsJsonldIdStandardMetadataPersonApplicantMetadataTagTaggingListPersonApplicantRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
