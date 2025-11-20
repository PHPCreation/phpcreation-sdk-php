# OpenAPI\Client\PersonCorporationsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonCorporationsGetCollection()**](PersonCorporationsApi.md#apiPersonCorporationsGetCollection) | **GET** /open-api/v3/person_corporations | Retrieves the collection of person_corporations resources. |
| [**apiPersonCorporationsIdDelete()**](PersonCorporationsApi.md#apiPersonCorporationsIdDelete) | **DELETE** /open-api/v3/person_corporations/{id} | Removes the person_corporations resource. |
| [**apiPersonCorporationsIdGet()**](PersonCorporationsApi.md#apiPersonCorporationsIdGet) | **GET** /open-api/v3/person_corporations/{id} | Retrieves a person_corporations resource. |
| [**apiPersonCorporationsIdPut()**](PersonCorporationsApi.md#apiPersonCorporationsIdPut) | **PUT** /open-api/v3/person_corporations/{id} | Replaces the person_corporations resource. |
| [**apiPersonCorporationsPost()**](PersonCorporationsApi.md#apiPersonCorporationsPost) | **POST** /open-api/v3/person_corporations | Creates a person_corporations resource. |
| [**personCorporationApiFileUpload()**](PersonCorporationsApi.md#personCorporationApiFileUpload) | **POST** /open-api/v3/person_corporations/{id}/file/upload | Creates a person_corporations resource. |
| [**personCorporationDropDown()**](PersonCorporationsApi.md#personCorporationDropDown) | **GET** /open-api/v3/person_corporations/dropdown/get | Retrieves the collection of person_corporations resources. |
| [**personCorporationDuplicate()**](PersonCorporationsApi.md#personCorporationDuplicate) | **GET** /open-api/v3/person_corporations/duplicate/{id} | Retrieves a person_corporations resource. |
| [**personCorporationFetchFiles()**](PersonCorporationsApi.md#personCorporationFetchFiles) | **GET** /open-api/v3/person_corporations/fetch_files/{id} | Retrieves a person_corporations resource. |
| [**personCorporationGetBySlug()**](PersonCorporationsApi.md#personCorporationGetBySlug) | **GET** /open-api/v3/person_corporations/by_slug/{slug} | Retrieves a person_corporations resource. |
| [**personCorporationGetDeleteRelations()**](PersonCorporationsApi.md#personCorporationGetDeleteRelations) | **GET** /open-api/v3/person_corporations/get_delete_relations/{id} | Retrieves a person_corporations resource. |
| [**personCorporationMetadata()**](PersonCorporationsApi.md#personCorporationMetadata) | **GET** /open-api/v3/person_corporations/metadata/{id} | Retrieves a person_corporations resource. |


## `apiPersonCorporationsGetCollection()`

```php
apiPersonCorporationsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $year_end_date_before, $year_end_date_strictly_before, $year_end_date_after, $year_end_date_strictly_after, $first_payment_date_before, $first_payment_date_strictly_before, $first_payment_date_after, $first_payment_date_strictly_after, $id, $id2, $code, $code2, $number, $number2, $employer_number_can, $employer_number_can2, $employer_number_qc, $employer_number_qc2, $no_tps, $no_tps2, $no_tvq, $no_tvq2, $payments_terms, $person, $person2, $search, $payments_nb_days, $payments_nb_days2, $monthly_fee, $monthly_fee2, $payments_nb_days_between, $payments_nb_days_gt, $payments_nb_days_gte, $payments_nb_days_lt, $payments_nb_days_lte, $monthly_fee_between, $monthly_fee_gt, $monthly_fee_gte, $monthly_fee_lt, $monthly_fee_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiPersonCorporationsGetCollection200Response
```

Retrieves the collection of person_corporations resources.

Retrieves the collection of person_corporations resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
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
$year_end_date_before = 'year_end_date_before_example'; // string | 
$year_end_date_strictly_before = 'year_end_date_strictly_before_example'; // string | 
$year_end_date_after = 'year_end_date_after_example'; // string | 
$year_end_date_strictly_after = 'year_end_date_strictly_after_example'; // string | 
$first_payment_date_before = 'first_payment_date_before_example'; // string | 
$first_payment_date_strictly_before = 'first_payment_date_strictly_before_example'; // string | 
$first_payment_date_after = 'first_payment_date_after_example'; // string | 
$first_payment_date_strictly_after = 'first_payment_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$employer_number_can = 'employer_number_can_example'; // string | 
$employer_number_can2 = array('employer_number_can_example'); // string[] | 
$employer_number_qc = 'employer_number_qc_example'; // string | 
$employer_number_qc2 = array('employer_number_qc_example'); // string[] | 
$no_tps = 'no_tps_example'; // string | 
$no_tps2 = array('no_tps_example'); // string[] | 
$no_tvq = 'no_tvq_example'; // string | 
$no_tvq2 = array('no_tvq_example'); // string[] | 
$payments_terms = 'payments_terms_example'; // string | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$payments_nb_days = 56; // int | 
$payments_nb_days2 = array(56); // int[] | 
$monthly_fee = 'monthly_fee_example'; // string | 
$monthly_fee2 = array('monthly_fee_example'); // string[] | 
$payments_nb_days_between = 'payments_nb_days_between_example'; // string | 
$payments_nb_days_gt = 'payments_nb_days_gt_example'; // string | 
$payments_nb_days_gte = 'payments_nb_days_gte_example'; // string | 
$payments_nb_days_lt = 'payments_nb_days_lt_example'; // string | 
$payments_nb_days_lte = 'payments_nb_days_lte_example'; // string | 
$monthly_fee_between = 'monthly_fee_between_example'; // string | 
$monthly_fee_gt = 'monthly_fee_gt_example'; // string | 
$monthly_fee_gte = 'monthly_fee_gte_example'; // string | 
$monthly_fee_lt = 'monthly_fee_lt_example'; // string | 
$monthly_fee_lte = 'monthly_fee_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | person_corporations slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_corporations slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_corporations slug_end_with
$id_partial = 'id_partial_example'; // string | person_corporations id_partial
$id_start_with = 'id_start_with_example'; // string | person_corporations id_start_with
$id_end_with = 'id_end_with_example'; // string | person_corporations id_end_with

try {
    $result = $apiInstance->apiPersonCorporationsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $year_end_date_before, $year_end_date_strictly_before, $year_end_date_after, $year_end_date_strictly_after, $first_payment_date_before, $first_payment_date_strictly_before, $first_payment_date_after, $first_payment_date_strictly_after, $id, $id2, $code, $code2, $number, $number2, $employer_number_can, $employer_number_can2, $employer_number_qc, $employer_number_qc2, $no_tps, $no_tps2, $no_tvq, $no_tvq2, $payments_terms, $person, $person2, $search, $payments_nb_days, $payments_nb_days2, $monthly_fee, $monthly_fee2, $payments_nb_days_between, $payments_nb_days_gt, $payments_nb_days_gte, $payments_nb_days_lt, $payments_nb_days_lte, $monthly_fee_between, $monthly_fee_gt, $monthly_fee_gte, $monthly_fee_lt, $monthly_fee_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->apiPersonCorporationsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **year_end_date_before** | **string**|  | [optional] |
| **year_end_date_strictly_before** | **string**|  | [optional] |
| **year_end_date_after** | **string**|  | [optional] |
| **year_end_date_strictly_after** | **string**|  | [optional] |
| **first_payment_date_before** | **string**|  | [optional] |
| **first_payment_date_strictly_before** | **string**|  | [optional] |
| **first_payment_date_after** | **string**|  | [optional] |
| **first_payment_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_number_can** | **string**|  | [optional] |
| **employer_number_can2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_number_qc** | **string**|  | [optional] |
| **employer_number_qc2** | [**string[]**](../Model/string.md)|  | [optional] |
| **no_tps** | **string**|  | [optional] |
| **no_tps2** | [**string[]**](../Model/string.md)|  | [optional] |
| **no_tvq** | **string**|  | [optional] |
| **no_tvq2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payments_terms** | **string**|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **payments_nb_days** | **int**|  | [optional] |
| **payments_nb_days2** | [**int[]**](../Model/int.md)|  | [optional] |
| **monthly_fee** | **string**|  | [optional] |
| **monthly_fee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payments_nb_days_between** | **string**|  | [optional] |
| **payments_nb_days_gt** | **string**|  | [optional] |
| **payments_nb_days_gte** | **string**|  | [optional] |
| **payments_nb_days_lt** | **string**|  | [optional] |
| **payments_nb_days_lte** | **string**|  | [optional] |
| **monthly_fee_between** | **string**|  | [optional] |
| **monthly_fee_gt** | **string**|  | [optional] |
| **monthly_fee_gte** | **string**|  | [optional] |
| **monthly_fee_lt** | **string**|  | [optional] |
| **monthly_fee_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| person_corporations slug_partial | [optional] |
| **slug_start_with** | **string**| person_corporations slug_start_with | [optional] |
| **slug_end_with** | **string**| person_corporations slug_end_with | [optional] |
| **id_partial** | **string**| person_corporations id_partial | [optional] |
| **id_start_with** | **string**| person_corporations id_start_with | [optional] |
| **id_end_with** | **string**| person_corporations id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonCorporationsGetCollection200Response**](../Model/ApiPersonCorporationsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCorporationsIdDelete()`

```php
apiPersonCorporationsIdDelete($id)
```

Removes the person_corporations resource.

Removes the person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier

try {
    $apiInstance->apiPersonCorporationsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->apiPersonCorporationsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |

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

## `apiPersonCorporationsIdGet()`

```php
apiPersonCorporationsIdGet($id): \OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow
```

Retrieves a person_corporations resource.

Retrieves a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier

try {
    $result = $apiInstance->apiPersonCorporationsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->apiPersonCorporationsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow**](../Model/PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCorporationsIdPut()`

```php
apiPersonCorporationsIdPut($id, $person_corporations_jsonld_add_post): \OpenAPI\Client\Model\PersonCorporationsJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Replaces the person_corporations resource.

Replaces the person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier
$person_corporations_jsonld_add_post = new \OpenAPI\Client\Model\PersonCorporationsJsonldAddPost(); // \OpenAPI\Client\Model\PersonCorporationsJsonldAddPost | The updated person_corporations resource

try {
    $result = $apiInstance->apiPersonCorporationsIdPut($id, $person_corporations_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->apiPersonCorporationsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |
| **person_corporations_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldAddPost**](../Model/PersonCorporationsJsonldAddPost.md)| The updated person_corporations resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/PersonCorporationsJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonCorporationsPost()`

```php
apiPersonCorporationsPost($person_corporations_jsonld_add_post): \OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow
```

Creates a person_corporations resource.

Creates a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_corporations_jsonld_add_post = new \OpenAPI\Client\Model\PersonCorporationsJsonldAddPost(); // \OpenAPI\Client\Model\PersonCorporationsJsonldAddPost | The new person_corporations resource

try {
    $result = $apiInstance->apiPersonCorporationsPost($person_corporations_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->apiPersonCorporationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_corporations_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonCorporationsJsonldAddPost**](../Model/PersonCorporationsJsonldAddPost.md)| The new person_corporations resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow**](../Model/PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCorporationApiFileUpload()`

```php
personCorporationApiFileUpload($id, $person_corporations_jsonld): \OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow
```

Creates a person_corporations resource.

Creates a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier
$person_corporations_jsonld = new \OpenAPI\Client\Model\PersonCorporationsJsonld(); // \OpenAPI\Client\Model\PersonCorporationsJsonld | The new person_corporations resource

try {
    $result = $apiInstance->personCorporationApiFileUpload($id, $person_corporations_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->personCorporationApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |
| **person_corporations_jsonld** | [**\OpenAPI\Client\Model\PersonCorporationsJsonld**](../Model/PersonCorporationsJsonld.md)| The new person_corporations resource | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow**](../Model/PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCorporationDropDown()`

```php
personCorporationDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $year_end_date_before, $year_end_date_strictly_before, $year_end_date_after, $year_end_date_strictly_after, $first_payment_date_before, $first_payment_date_strictly_before, $first_payment_date_after, $first_payment_date_strictly_after, $id, $id2, $code, $code2, $number, $number2, $employer_number_can, $employer_number_can2, $employer_number_qc, $employer_number_qc2, $no_tps, $no_tps2, $no_tvq, $no_tvq2, $payments_terms, $person, $person2, $search, $payments_nb_days, $payments_nb_days2, $monthly_fee, $monthly_fee2, $payments_nb_days_between, $payments_nb_days_gt, $payments_nb_days_gte, $payments_nb_days_lt, $payments_nb_days_lte, $monthly_fee_between, $monthly_fee_gt, $monthly_fee_gte, $monthly_fee_lt, $monthly_fee_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag): \OpenAPI\Client\Model\PersonCorporationDropDown200Response
```

Retrieves the collection of person_corporations resources.

Retrieves the collection of person_corporations resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
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
$year_end_date_before = 'year_end_date_before_example'; // string | 
$year_end_date_strictly_before = 'year_end_date_strictly_before_example'; // string | 
$year_end_date_after = 'year_end_date_after_example'; // string | 
$year_end_date_strictly_after = 'year_end_date_strictly_after_example'; // string | 
$first_payment_date_before = 'first_payment_date_before_example'; // string | 
$first_payment_date_strictly_before = 'first_payment_date_strictly_before_example'; // string | 
$first_payment_date_after = 'first_payment_date_after_example'; // string | 
$first_payment_date_strictly_after = 'first_payment_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$employer_number_can = 'employer_number_can_example'; // string | 
$employer_number_can2 = array('employer_number_can_example'); // string[] | 
$employer_number_qc = 'employer_number_qc_example'; // string | 
$employer_number_qc2 = array('employer_number_qc_example'); // string[] | 
$no_tps = 'no_tps_example'; // string | 
$no_tps2 = array('no_tps_example'); // string[] | 
$no_tvq = 'no_tvq_example'; // string | 
$no_tvq2 = array('no_tvq_example'); // string[] | 
$payments_terms = 'payments_terms_example'; // string | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$search = 'search_example'; // string | 
$payments_nb_days = 56; // int | 
$payments_nb_days2 = array(56); // int[] | 
$monthly_fee = 'monthly_fee_example'; // string | 
$monthly_fee2 = array('monthly_fee_example'); // string[] | 
$payments_nb_days_between = 'payments_nb_days_between_example'; // string | 
$payments_nb_days_gt = 'payments_nb_days_gt_example'; // string | 
$payments_nb_days_gte = 'payments_nb_days_gte_example'; // string | 
$payments_nb_days_lt = 'payments_nb_days_lt_example'; // string | 
$payments_nb_days_lte = 'payments_nb_days_lte_example'; // string | 
$monthly_fee_between = 'monthly_fee_between_example'; // string | 
$monthly_fee_gt = 'monthly_fee_gt_example'; // string | 
$monthly_fee_gte = 'monthly_fee_gte_example'; // string | 
$monthly_fee_lt = 'monthly_fee_lt_example'; // string | 
$monthly_fee_lte = 'monthly_fee_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->personCorporationDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $creation_date_before, $creation_date_strictly_before, $creation_date_after, $creation_date_strictly_after, $year_end_date_before, $year_end_date_strictly_before, $year_end_date_after, $year_end_date_strictly_after, $first_payment_date_before, $first_payment_date_strictly_before, $first_payment_date_after, $first_payment_date_strictly_after, $id, $id2, $code, $code2, $number, $number2, $employer_number_can, $employer_number_can2, $employer_number_qc, $employer_number_qc2, $no_tps, $no_tps2, $no_tvq, $no_tvq2, $payments_terms, $person, $person2, $search, $payments_nb_days, $payments_nb_days2, $monthly_fee, $monthly_fee2, $payments_nb_days_between, $payments_nb_days_gt, $payments_nb_days_gte, $payments_nb_days_lt, $payments_nb_days_lte, $monthly_fee_between, $monthly_fee_gt, $monthly_fee_gte, $monthly_fee_lt, $monthly_fee_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $enabled, $order_id, $order_created_at, $order_updated_at, $properties, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->personCorporationDropDown: ', $e->getMessage(), PHP_EOL;
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
| **year_end_date_before** | **string**|  | [optional] |
| **year_end_date_strictly_before** | **string**|  | [optional] |
| **year_end_date_after** | **string**|  | [optional] |
| **year_end_date_strictly_after** | **string**|  | [optional] |
| **first_payment_date_before** | **string**|  | [optional] |
| **first_payment_date_strictly_before** | **string**|  | [optional] |
| **first_payment_date_after** | **string**|  | [optional] |
| **first_payment_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_number_can** | **string**|  | [optional] |
| **employer_number_can2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employer_number_qc** | **string**|  | [optional] |
| **employer_number_qc2** | [**string[]**](../Model/string.md)|  | [optional] |
| **no_tps** | **string**|  | [optional] |
| **no_tps2** | [**string[]**](../Model/string.md)|  | [optional] |
| **no_tvq** | **string**|  | [optional] |
| **no_tvq2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payments_terms** | **string**|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **payments_nb_days** | **int**|  | [optional] |
| **payments_nb_days2** | [**int[]**](../Model/int.md)|  | [optional] |
| **monthly_fee** | **string**|  | [optional] |
| **monthly_fee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payments_nb_days_between** | **string**|  | [optional] |
| **payments_nb_days_gt** | **string**|  | [optional] |
| **payments_nb_days_gte** | **string**|  | [optional] |
| **payments_nb_days_lt** | **string**|  | [optional] |
| **payments_nb_days_lte** | **string**|  | [optional] |
| **monthly_fee_between** | **string**|  | [optional] |
| **monthly_fee_gt** | **string**|  | [optional] |
| **monthly_fee_gte** | **string**|  | [optional] |
| **monthly_fee_lt** | **string**|  | [optional] |
| **monthly_fee_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationDropDown200Response**](../Model/PersonCorporationDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCorporationDuplicate()`

```php
personCorporationDuplicate($id): \OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow
```

Retrieves a person_corporations resource.

Retrieves a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier

try {
    $result = $apiInstance->personCorporationDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->personCorporationDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow**](../Model/PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCorporationFetchFiles()`

```php
personCorporationFetchFiles($id): \OpenAPI\Client\Model\PersonCorporationsJsonld
```

Retrieves a person_corporations resource.

Retrieves a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier

try {
    $result = $apiInstance->personCorporationFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->personCorporationFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonld**](../Model/PersonCorporationsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCorporationGetBySlug()`

```php
personCorporationGetBySlug($slug): \OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow
```

Retrieves a person_corporations resource.

Retrieves a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_corporations identifier

try {
    $result = $apiInstance->personCorporationGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->personCorporationGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_corporations identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow**](../Model/PersonCorporationsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomPropertyPersonCorporationShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCorporationGetDeleteRelations()`

```php
personCorporationGetDeleteRelations($id): \OpenAPI\Client\Model\PersonCorporationsJsonldPersonCorporationRelations
```

Retrieves a person_corporations resource.

Retrieves a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier

try {
    $result = $apiInstance->personCorporationGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->personCorporationGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldPersonCorporationRelations**](../Model/PersonCorporationsJsonldPersonCorporationRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personCorporationMetadata()`

```php
personCorporationMetadata($id): \OpenAPI\Client\Model\PersonCorporationsJsonldIdStandardMetadataPersonCorporationMetadataTagTaggingListPersonCorporationRelationsTimestampable
```

Retrieves a person_corporations resource.

Retrieves a person_corporations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonCorporationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_corporations identifier

try {
    $result = $apiInstance->personCorporationMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonCorporationsApi->personCorporationMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_corporations identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonCorporationsJsonldIdStandardMetadataPersonCorporationMetadataTagTaggingListPersonCorporationRelationsTimestampable**](../Model/PersonCorporationsJsonldIdStandardMetadataPersonCorporationMetadataTagTaggingListPersonCorporationRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
