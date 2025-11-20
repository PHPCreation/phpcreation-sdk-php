# OpenAPI\Client\PersonProspectsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonProspectsGetCollection()**](PersonProspectsApi.md#apiPersonProspectsGetCollection) | **GET** /open-api/v3/person_prospects | Retrieves the collection of person_prospects resources. |
| [**apiPersonProspectsIdDelete()**](PersonProspectsApi.md#apiPersonProspectsIdDelete) | **DELETE** /open-api/v3/person_prospects/{id} | Removes the person_prospects resource. |
| [**apiPersonProspectsIdGet()**](PersonProspectsApi.md#apiPersonProspectsIdGet) | **GET** /open-api/v3/person_prospects/{id} | Retrieves a person_prospects resource. |
| [**apiPersonProspectsIdPut()**](PersonProspectsApi.md#apiPersonProspectsIdPut) | **PUT** /open-api/v3/person_prospects/{id} | Replaces the person_prospects resource. |
| [**apiPersonProspectsPost()**](PersonProspectsApi.md#apiPersonProspectsPost) | **POST** /open-api/v3/person_prospects | Creates a person_prospects resource. |
| [**personProspectApiFileUpload()**](PersonProspectsApi.md#personProspectApiFileUpload) | **POST** /open-api/v3/person_prospects/{id}/file/upload | Creates a person_prospects resource. |
| [**personProspectDropDown()**](PersonProspectsApi.md#personProspectDropDown) | **GET** /open-api/v3/person_prospects/dropdown/get | Retrieves the collection of person_prospects resources. |
| [**personProspectDuplicate()**](PersonProspectsApi.md#personProspectDuplicate) | **GET** /open-api/v3/person_prospects/duplicate/{id} | Retrieves a person_prospects resource. |
| [**personProspectFetchFiles()**](PersonProspectsApi.md#personProspectFetchFiles) | **GET** /open-api/v3/person_prospects/fetch_files/{id} | Retrieves a person_prospects resource. |
| [**personProspectGetBySlug()**](PersonProspectsApi.md#personProspectGetBySlug) | **GET** /open-api/v3/person_prospects/by_slug/{slug} | Retrieves a person_prospects resource. |
| [**personProspectGetDeleteRelations()**](PersonProspectsApi.md#personProspectGetDeleteRelations) | **GET** /open-api/v3/person_prospects/get_delete_relations/{id} | Retrieves a person_prospects resource. |
| [**personProspectMetadata()**](PersonProspectsApi.md#personProspectMetadata) | **GET** /open-api/v3/person_prospects/metadata/{id} | Retrieves a person_prospects resource. |


## `apiPersonProspectsGetCollection()`

```php
apiPersonProspectsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $id, $id2, $slug, $slug2, $referenced_by, $referenced_by2, $internalabbreviation, $internalabbreviation2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $expertise, $status, $status2, $project_type, $project_type2, $employee, $employee2, $type, $type2, $person, $person2, $industry, $industry2, $search, $turnover, $turnover2, $distance, $distance2, $budget, $budget2, $potential, $potential2, $neq, $neq2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_referenced_by, $exists_expertise, $exists_neq, $exists_icriq, $exists_competitor, $enabled, $order_id, $order_created_at, $order_updated_at, $order_expertise, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $referenced_by_partial, $referenced_by_start_with, $referenced_by_end_with, $internalabbreviation_partial, $internalabbreviation_start_with, $internalabbreviation_end_with, $person_first_name_partial, $person_first_name_start_with, $person_first_name_end_with, $person_last_name_partial, $person_last_name_start_with, $person_last_name_end_with, $nb_employee_range, $turnover_range, $distance_range, $budget_range, $potential_range, $neq_range, $i_criq_range): \OpenAPI\Client\Model\ApiPersonProspectsGetCollection200Response
```

Retrieves the collection of person_prospects resources.

Retrieves the collection of person_prospects resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
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
$creation_date_before = 'creation_date_before_example'; // string | 
$creation_date_strictly_before = 'creation_date_strictly_before_example'; // string | 
$creation_date_after = 'creation_date_after_example'; // string | 
$creation_date_strictly_after = 'creation_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$referenced_by = 'referenced_by_example'; // string | 
$referenced_by2 = array('referenced_by_example'); // string[] | 
$internalabbreviation = 'internalabbreviation_example'; // string | 
$internalabbreviation2 = array('internalabbreviation_example'); // string[] | 
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$expertise = 'expertise_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project_type = 'project_type_example'; // string | 
$project_type2 = array('project_type_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$industry = 'industry_example'; // string | 
$industry2 = array('industry_example'); // string[] | 
$search = 'search_example'; // string | 
$turnover = 'turnover_example'; // string | 
$turnover2 = array('turnover_example'); // string[] | 
$distance = 'distance_example'; // string | 
$distance2 = array('distance_example'); // string[] | 
$budget = 'budget_example'; // string | 
$budget2 = array('budget_example'); // string[] | 
$potential = 'potential_example'; // string | 
$potential2 = array('potential_example'); // string[] | 
$neq = 56; // int | 
$neq2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_referenced_by = True; // bool | 
$exists_expertise = True; // bool | 
$exists_neq = True; // bool | 
$exists_icriq = True; // bool | 
$exists_competitor = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_expertise = 'order_expertise_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_prospects slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_prospects slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_prospects slug_end_with
$id_partial = 'id_partial_example'; // string | person_prospects id_partial
$id_start_with = 'id_start_with_example'; // string | person_prospects id_start_with
$id_end_with = 'id_end_with_example'; // string | person_prospects id_end_with
$referenced_by_partial = 'referenced_by_partial_example'; // string | person_prospects referencedBy_partial
$referenced_by_start_with = 'referenced_by_start_with_example'; // string | person_prospects referencedBy_start_with
$referenced_by_end_with = 'referenced_by_end_with_example'; // string | person_prospects referencedBy_end_with
$internalabbreviation_partial = 'internalabbreviation_partial_example'; // string | person_prospects internalabbreviation_partial
$internalabbreviation_start_with = 'internalabbreviation_start_with_example'; // string | person_prospects internalabbreviation_start_with
$internalabbreviation_end_with = 'internalabbreviation_end_with_example'; // string | person_prospects internalabbreviation_end_with
$person_first_name_partial = 'person_first_name_partial_example'; // string | person_prospects person.firstName_partial
$person_first_name_start_with = 'person_first_name_start_with_example'; // string | person_prospects person.firstName_start_with
$person_first_name_end_with = 'person_first_name_end_with_example'; // string | person_prospects person.firstName_end_with
$person_last_name_partial = 'person_last_name_partial_example'; // string | person_prospects person.lastName_partial
$person_last_name_start_with = 'person_last_name_start_with_example'; // string | person_prospects person.lastName_start_with
$person_last_name_end_with = 'person_last_name_end_with_example'; // string | person_prospects person.lastName_end_with
$nb_employee_range = 'nb_employee_range_example'; // string | person_prospects nbEmployee_range
$turnover_range = 'turnover_range_example'; // string | person_prospects turnover_range
$distance_range = 'distance_range_example'; // string | person_prospects distance_range
$budget_range = 'budget_range_example'; // string | person_prospects budget_range
$potential_range = 'potential_range_example'; // string | person_prospects potential_range
$neq_range = 'neq_range_example'; // string | person_prospects neq_range
$i_criq_range = 'i_criq_range_example'; // string | person_prospects iCriq_range

try {
    $result = $apiInstance->apiPersonProspectsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $id, $id2, $slug, $slug2, $referenced_by, $referenced_by2, $internalabbreviation, $internalabbreviation2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $expertise, $status, $status2, $project_type, $project_type2, $employee, $employee2, $type, $type2, $person, $person2, $industry, $industry2, $search, $turnover, $turnover2, $distance, $distance2, $budget, $budget2, $potential, $potential2, $neq, $neq2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_referenced_by, $exists_expertise, $exists_neq, $exists_icriq, $exists_competitor, $enabled, $order_id, $order_created_at, $order_updated_at, $order_expertise, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $referenced_by_partial, $referenced_by_start_with, $referenced_by_end_with, $internalabbreviation_partial, $internalabbreviation_start_with, $internalabbreviation_end_with, $person_first_name_partial, $person_first_name_start_with, $person_first_name_end_with, $person_last_name_partial, $person_last_name_start_with, $person_last_name_end_with, $nb_employee_range, $turnover_range, $distance_range, $budget_range, $potential_range, $neq_range, $i_criq_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->apiPersonProspectsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **creation_date_before** | **string**|  | [optional] |
| **creation_date_strictly_before** | **string**|  | [optional] |
| **creation_date_after** | **string**|  | [optional] |
| **creation_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **referenced_by** | **string**|  | [optional] |
| **referenced_by2** | [**string[]**](../Model/string.md)|  | [optional] |
| **internalabbreviation** | **string**|  | [optional] |
| **internalabbreviation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **expertise** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project_type** | **string**|  | [optional] |
| **project_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **industry** | **string**|  | [optional] |
| **industry2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **turnover** | **string**|  | [optional] |
| **turnover2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distance** | **string**|  | [optional] |
| **distance2** | [**string[]**](../Model/string.md)|  | [optional] |
| **budget** | **string**|  | [optional] |
| **budget2** | [**string[]**](../Model/string.md)|  | [optional] |
| **potential** | **string**|  | [optional] |
| **potential2** | [**string[]**](../Model/string.md)|  | [optional] |
| **neq** | **int**|  | [optional] |
| **neq2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_referenced_by** | **bool**|  | [optional] |
| **exists_expertise** | **bool**|  | [optional] |
| **exists_neq** | **bool**|  | [optional] |
| **exists_icriq** | **bool**|  | [optional] |
| **exists_competitor** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_expertise** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_prospects slug_partial | [optional] |
| **slug_start_with** | **string**| person_prospects slug_start_with | [optional] |
| **slug_end_with** | **string**| person_prospects slug_end_with | [optional] |
| **id_partial** | **string**| person_prospects id_partial | [optional] |
| **id_start_with** | **string**| person_prospects id_start_with | [optional] |
| **id_end_with** | **string**| person_prospects id_end_with | [optional] |
| **referenced_by_partial** | **string**| person_prospects referencedBy_partial | [optional] |
| **referenced_by_start_with** | **string**| person_prospects referencedBy_start_with | [optional] |
| **referenced_by_end_with** | **string**| person_prospects referencedBy_end_with | [optional] |
| **internalabbreviation_partial** | **string**| person_prospects internalabbreviation_partial | [optional] |
| **internalabbreviation_start_with** | **string**| person_prospects internalabbreviation_start_with | [optional] |
| **internalabbreviation_end_with** | **string**| person_prospects internalabbreviation_end_with | [optional] |
| **person_first_name_partial** | **string**| person_prospects person.firstName_partial | [optional] |
| **person_first_name_start_with** | **string**| person_prospects person.firstName_start_with | [optional] |
| **person_first_name_end_with** | **string**| person_prospects person.firstName_end_with | [optional] |
| **person_last_name_partial** | **string**| person_prospects person.lastName_partial | [optional] |
| **person_last_name_start_with** | **string**| person_prospects person.lastName_start_with | [optional] |
| **person_last_name_end_with** | **string**| person_prospects person.lastName_end_with | [optional] |
| **nb_employee_range** | **string**| person_prospects nbEmployee_range | [optional] |
| **turnover_range** | **string**| person_prospects turnover_range | [optional] |
| **distance_range** | **string**| person_prospects distance_range | [optional] |
| **budget_range** | **string**| person_prospects budget_range | [optional] |
| **potential_range** | **string**| person_prospects potential_range | [optional] |
| **neq_range** | **string**| person_prospects neq_range | [optional] |
| **i_criq_range** | **string**| person_prospects iCriq_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonProspectsGetCollection200Response**](../Model/ApiPersonProspectsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectsIdDelete()`

```php
apiPersonProspectsIdDelete($id)
```

Removes the person_prospects resource.

Removes the person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier

try {
    $apiInstance->apiPersonProspectsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->apiPersonProspectsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |

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

## `apiPersonProspectsIdGet()`

```php
apiPersonProspectsIdGet($id): \OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_prospects resource.

Retrieves a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier

try {
    $result = $apiInstance->apiPersonProspectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->apiPersonProspectsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectsIdPut()`

```php
apiPersonProspectsIdPut($id, $person_prospects_jsonld_add_post): \OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_prospects resource.

Replaces the person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier
$person_prospects_jsonld_add_post = new \OpenAPI\Client\Model\PersonProspectsJsonldAddPost(); // \OpenAPI\Client\Model\PersonProspectsJsonldAddPost | The updated person_prospects resource

try {
    $result = $apiInstance->apiPersonProspectsIdPut($id, $person_prospects_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->apiPersonProspectsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |
| **person_prospects_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonProspectsJsonldAddPost**](../Model/PersonProspectsJsonldAddPost.md)| The updated person_prospects resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectsPost()`

```php
apiPersonProspectsPost($person_prospects_jsonld_add_post): \OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_prospects resource.

Creates a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_prospects_jsonld_add_post = new \OpenAPI\Client\Model\PersonProspectsJsonldAddPost(); // \OpenAPI\Client\Model\PersonProspectsJsonldAddPost | The new person_prospects resource

try {
    $result = $apiInstance->apiPersonProspectsPost($person_prospects_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->apiPersonProspectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_prospects_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonProspectsJsonldAddPost**](../Model/PersonProspectsJsonldAddPost.md)| The new person_prospects resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectApiFileUpload()`

```php
personProspectApiFileUpload($id, $person_prospects_jsonld): \OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_prospects resource.

Creates a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier
$person_prospects_jsonld = new \OpenAPI\Client\Model\PersonProspectsJsonld(); // \OpenAPI\Client\Model\PersonProspectsJsonld | The new person_prospects resource

try {
    $result = $apiInstance->personProspectApiFileUpload($id, $person_prospects_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->personProspectApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |
| **person_prospects_jsonld** | [**\OpenAPI\Client\Model\PersonProspectsJsonld**](../Model/PersonProspectsJsonld.md)| The new person_prospects resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectDropDown()`

```php
personProspectDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $id, $id2, $slug, $slug2, $referenced_by, $referenced_by2, $internalabbreviation, $internalabbreviation2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $expertise, $status, $status2, $project_type, $project_type2, $employee, $employee2, $type, $type2, $person, $person2, $industry, $industry2, $search, $turnover, $turnover2, $distance, $distance2, $budget, $budget2, $potential, $potential2, $neq, $neq2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_referenced_by, $exists_expertise, $exists_neq, $exists_icriq, $exists_competitor, $enabled, $order_id, $order_created_at, $order_updated_at, $order_expertise, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $referenced_by_partial, $referenced_by_start_with, $referenced_by_end_with, $internalabbreviation_partial, $internalabbreviation_start_with, $internalabbreviation_end_with, $person_first_name_partial, $person_first_name_start_with, $person_first_name_end_with, $person_last_name_partial, $person_last_name_start_with, $person_last_name_end_with, $nb_employee_range, $turnover_range, $distance_range, $budget_range, $potential_range, $neq_range, $i_criq_range): \OpenAPI\Client\Model\PersonProspectDropDown200Response
```

Retrieves the collection of person_prospects resources.

Retrieves the collection of person_prospects resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
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
$creation_date_before = 'creation_date_before_example'; // string | 
$creation_date_strictly_before = 'creation_date_strictly_before_example'; // string | 
$creation_date_after = 'creation_date_after_example'; // string | 
$creation_date_strictly_after = 'creation_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$referenced_by = 'referenced_by_example'; // string | 
$referenced_by2 = array('referenced_by_example'); // string[] | 
$internalabbreviation = 'internalabbreviation_example'; // string | 
$internalabbreviation2 = array('internalabbreviation_example'); // string[] | 
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$expertise = 'expertise_example'; // string | 
$status = 'status_example'; // string | 
$status2 = array('status_example'); // string[] | 
$project_type = 'project_type_example'; // string | 
$project_type2 = array('project_type_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$industry = 'industry_example'; // string | 
$industry2 = array('industry_example'); // string[] | 
$search = 'search_example'; // string | 
$turnover = 'turnover_example'; // string | 
$turnover2 = array('turnover_example'); // string[] | 
$distance = 'distance_example'; // string | 
$distance2 = array('distance_example'); // string[] | 
$budget = 'budget_example'; // string | 
$budget2 = array('budget_example'); // string[] | 
$potential = 'potential_example'; // string | 
$potential2 = array('potential_example'); // string[] | 
$neq = 56; // int | 
$neq2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_referenced_by = True; // bool | 
$exists_expertise = True; // bool | 
$exists_neq = True; // bool | 
$exists_icriq = True; // bool | 
$exists_competitor = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_expertise = 'order_expertise_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_prospects slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_prospects slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_prospects slug_end_with
$id_partial = 'id_partial_example'; // string | person_prospects id_partial
$id_start_with = 'id_start_with_example'; // string | person_prospects id_start_with
$id_end_with = 'id_end_with_example'; // string | person_prospects id_end_with
$referenced_by_partial = 'referenced_by_partial_example'; // string | person_prospects referencedBy_partial
$referenced_by_start_with = 'referenced_by_start_with_example'; // string | person_prospects referencedBy_start_with
$referenced_by_end_with = 'referenced_by_end_with_example'; // string | person_prospects referencedBy_end_with
$internalabbreviation_partial = 'internalabbreviation_partial_example'; // string | person_prospects internalabbreviation_partial
$internalabbreviation_start_with = 'internalabbreviation_start_with_example'; // string | person_prospects internalabbreviation_start_with
$internalabbreviation_end_with = 'internalabbreviation_end_with_example'; // string | person_prospects internalabbreviation_end_with
$person_first_name_partial = 'person_first_name_partial_example'; // string | person_prospects person.firstName_partial
$person_first_name_start_with = 'person_first_name_start_with_example'; // string | person_prospects person.firstName_start_with
$person_first_name_end_with = 'person_first_name_end_with_example'; // string | person_prospects person.firstName_end_with
$person_last_name_partial = 'person_last_name_partial_example'; // string | person_prospects person.lastName_partial
$person_last_name_start_with = 'person_last_name_start_with_example'; // string | person_prospects person.lastName_start_with
$person_last_name_end_with = 'person_last_name_end_with_example'; // string | person_prospects person.lastName_end_with
$nb_employee_range = 'nb_employee_range_example'; // string | person_prospects nbEmployee_range
$turnover_range = 'turnover_range_example'; // string | person_prospects turnover_range
$distance_range = 'distance_range_example'; // string | person_prospects distance_range
$budget_range = 'budget_range_example'; // string | person_prospects budget_range
$potential_range = 'potential_range_example'; // string | person_prospects potential_range
$neq_range = 'neq_range_example'; // string | person_prospects neq_range
$i_criq_range = 'i_criq_range_example'; // string | person_prospects iCriq_range

try {
    $result = $apiInstance->personProspectDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $id, $id2, $slug, $slug2, $referenced_by, $referenced_by2, $internalabbreviation, $internalabbreviation2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $expertise, $status, $status2, $project_type, $project_type2, $employee, $employee2, $type, $type2, $person, $person2, $industry, $industry2, $search, $turnover, $turnover2, $distance, $distance2, $budget, $budget2, $potential, $potential2, $neq, $neq2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_referenced_by, $exists_expertise, $exists_neq, $exists_icriq, $exists_competitor, $enabled, $order_id, $order_created_at, $order_updated_at, $order_expertise, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $referenced_by_partial, $referenced_by_start_with, $referenced_by_end_with, $internalabbreviation_partial, $internalabbreviation_start_with, $internalabbreviation_end_with, $person_first_name_partial, $person_first_name_start_with, $person_first_name_end_with, $person_last_name_partial, $person_last_name_start_with, $person_last_name_end_with, $nb_employee_range, $turnover_range, $distance_range, $budget_range, $potential_range, $neq_range, $i_criq_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->personProspectDropDown: ', $e->getMessage(), PHP_EOL;
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
| **creation_date_before** | **string**|  | [optional] |
| **creation_date_strictly_before** | **string**|  | [optional] |
| **creation_date_after** | **string**|  | [optional] |
| **creation_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **referenced_by** | **string**|  | [optional] |
| **referenced_by2** | [**string[]**](../Model/string.md)|  | [optional] |
| **internalabbreviation** | **string**|  | [optional] |
| **internalabbreviation2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **expertise** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **status2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project_type** | **string**|  | [optional] |
| **project_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **industry** | **string**|  | [optional] |
| **industry2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **turnover** | **string**|  | [optional] |
| **turnover2** | [**string[]**](../Model/string.md)|  | [optional] |
| **distance** | **string**|  | [optional] |
| **distance2** | [**string[]**](../Model/string.md)|  | [optional] |
| **budget** | **string**|  | [optional] |
| **budget2** | [**string[]**](../Model/string.md)|  | [optional] |
| **potential** | **string**|  | [optional] |
| **potential2** | [**string[]**](../Model/string.md)|  | [optional] |
| **neq** | **int**|  | [optional] |
| **neq2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_referenced_by** | **bool**|  | [optional] |
| **exists_expertise** | **bool**|  | [optional] |
| **exists_neq** | **bool**|  | [optional] |
| **exists_icriq** | **bool**|  | [optional] |
| **exists_competitor** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_expertise** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_prospects slug_partial | [optional] |
| **slug_start_with** | **string**| person_prospects slug_start_with | [optional] |
| **slug_end_with** | **string**| person_prospects slug_end_with | [optional] |
| **id_partial** | **string**| person_prospects id_partial | [optional] |
| **id_start_with** | **string**| person_prospects id_start_with | [optional] |
| **id_end_with** | **string**| person_prospects id_end_with | [optional] |
| **referenced_by_partial** | **string**| person_prospects referencedBy_partial | [optional] |
| **referenced_by_start_with** | **string**| person_prospects referencedBy_start_with | [optional] |
| **referenced_by_end_with** | **string**| person_prospects referencedBy_end_with | [optional] |
| **internalabbreviation_partial** | **string**| person_prospects internalabbreviation_partial | [optional] |
| **internalabbreviation_start_with** | **string**| person_prospects internalabbreviation_start_with | [optional] |
| **internalabbreviation_end_with** | **string**| person_prospects internalabbreviation_end_with | [optional] |
| **person_first_name_partial** | **string**| person_prospects person.firstName_partial | [optional] |
| **person_first_name_start_with** | **string**| person_prospects person.firstName_start_with | [optional] |
| **person_first_name_end_with** | **string**| person_prospects person.firstName_end_with | [optional] |
| **person_last_name_partial** | **string**| person_prospects person.lastName_partial | [optional] |
| **person_last_name_start_with** | **string**| person_prospects person.lastName_start_with | [optional] |
| **person_last_name_end_with** | **string**| person_prospects person.lastName_end_with | [optional] |
| **nb_employee_range** | **string**| person_prospects nbEmployee_range | [optional] |
| **turnover_range** | **string**| person_prospects turnover_range | [optional] |
| **distance_range** | **string**| person_prospects distance_range | [optional] |
| **budget_range** | **string**| person_prospects budget_range | [optional] |
| **potential_range** | **string**| person_prospects potential_range | [optional] |
| **neq_range** | **string**| person_prospects neq_range | [optional] |
| **i_criq_range** | **string**| person_prospects iCriq_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonProspectDropDown200Response**](../Model/PersonProspectDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectDuplicate()`

```php
personProspectDuplicate($id): \OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_prospects resource.

Retrieves a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier

try {
    $result = $apiInstance->personProspectDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->personProspectDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectFetchFiles()`

```php
personProspectFetchFiles($id): \OpenAPI\Client\Model\PersonProspectsJsonld
```

Retrieves a person_prospects resource.

Retrieves a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier

try {
    $result = $apiInstance->personProspectFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->personProspectFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonld**](../Model/PersonProspectsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectGetBySlug()`

```php
personProspectGetBySlug($slug): \OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_prospects resource.

Retrieves a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_prospects identifier

try {
    $result = $apiInstance->personProspectGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->personProspectGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_prospects identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectsJsonldPersonProspectShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectGetDeleteRelations()`

```php
personProspectGetDeleteRelations($id): \OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectRelations
```

Retrieves a person_prospects resource.

Retrieves a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier

try {
    $result = $apiInstance->personProspectGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->personProspectGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldPersonProspectRelations**](../Model/PersonProspectsJsonldPersonProspectRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectMetadata()`

```php
personProspectMetadata($id): \OpenAPI\Client\Model\PersonProspectsJsonldIdStandardMetadataPersonProspectMetadataTagTaggingListPersonProspectRelationsTimestampable
```

Retrieves a person_prospects resource.

Retrieves a person_prospects resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospects identifier

try {
    $result = $apiInstance->personProspectMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectsApi->personProspectMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospects identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectsJsonldIdStandardMetadataPersonProspectMetadataTagTaggingListPersonProspectRelationsTimestampable**](../Model/PersonProspectsJsonldIdStandardMetadataPersonProspectMetadataTagTaggingListPersonProspectRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
