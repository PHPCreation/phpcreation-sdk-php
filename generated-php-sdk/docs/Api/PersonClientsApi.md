# OpenAPI\Client\PersonClientsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonClientsGetCollection()**](PersonClientsApi.md#apiPersonClientsGetCollection) | **GET** /open-api/v3/person_clients | Retrieves the collection of person_clients resources. |
| [**apiPersonClientsIdDelete()**](PersonClientsApi.md#apiPersonClientsIdDelete) | **DELETE** /open-api/v3/person_clients/{id} | Removes the person_clients resource. |
| [**apiPersonClientsIdGet()**](PersonClientsApi.md#apiPersonClientsIdGet) | **GET** /open-api/v3/person_clients/{id} | Retrieves a person_clients resource. |
| [**apiPersonClientsIdPut()**](PersonClientsApi.md#apiPersonClientsIdPut) | **PUT** /open-api/v3/person_clients/{id} | Replaces the person_clients resource. |
| [**apiPersonClientsPost()**](PersonClientsApi.md#apiPersonClientsPost) | **POST** /open-api/v3/person_clients | Creates a person_clients resource. |
| [**personClientApiFileUpload()**](PersonClientsApi.md#personClientApiFileUpload) | **POST** /open-api/v3/person_clients/{id}/file/upload | Creates a person_clients resource. |
| [**personClientDropDown()**](PersonClientsApi.md#personClientDropDown) | **GET** /open-api/v3/person_clients/dropdown/get | Retrieves the collection of person_clients resources. |
| [**personClientDuplicate()**](PersonClientsApi.md#personClientDuplicate) | **GET** /open-api/v3/person_clients/duplicate/{id} | Retrieves a person_clients resource. |
| [**personClientFetchFiles()**](PersonClientsApi.md#personClientFetchFiles) | **GET** /open-api/v3/person_clients/fetch_files/{id} | Retrieves a person_clients resource. |
| [**personClientGetBySlug()**](PersonClientsApi.md#personClientGetBySlug) | **GET** /open-api/v3/person_clients/by_slug/{slug} | Retrieves a person_clients resource. |
| [**personClientGetDeleteRelations()**](PersonClientsApi.md#personClientGetDeleteRelations) | **GET** /open-api/v3/person_clients/get_delete_relations/{id} | Retrieves a person_clients resource. |
| [**personClientMetadata()**](PersonClientsApi.md#personClientMetadata) | **GET** /open-api/v3/person_clients/metadata/{id} | Retrieves a person_clients resource. |


## `apiPersonClientsGetCollection()`

```php
apiPersonClientsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $created_date_before, $created_date_strictly_before, $created_date_after, $created_date_strictly_after, $satisfaction_date_before, $satisfaction_date_strictly_before, $satisfaction_date_after, $satisfaction_date_strictly_after, $id, $id2, $code, $code2, $payment_time, $payment_time2, $account_number, $account_number2, $project_type, $project_type2, $shipper, $shipper2, $responsible, $responsible2, $marketing_source, $marketing_source2, $partners, $partners2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $potential, $potential2, $satisfaction, $satisfaction2, $discount, $discount2, $delivery_time, $delivery_time2, $max_credit, $max_credit2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_potential_notes, $exists_satisfaction_notes, $exists_satisfaction_date, $exists_code, $exists_account_number, $exists_payment_terms, $exists_payment_time, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_satisfaction, $order_discount, $order_delivery_time, $order_max_credit, $order_created_date, $order_satisfaction_date, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $potential_range, $satisfaction_range, $discount_range, $delivery_time_range, $max_credit_range): \OpenAPI\Client\Model\ApiPersonClientsGetCollection200Response
```

Retrieves the collection of person_clients resources.

Retrieves the collection of person_clients resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
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
$created_date_before = 'created_date_before_example'; // string | 
$created_date_strictly_before = 'created_date_strictly_before_example'; // string | 
$created_date_after = 'created_date_after_example'; // string | 
$created_date_strictly_after = 'created_date_strictly_after_example'; // string | 
$satisfaction_date_before = 'satisfaction_date_before_example'; // string | 
$satisfaction_date_strictly_before = 'satisfaction_date_strictly_before_example'; // string | 
$satisfaction_date_after = 'satisfaction_date_after_example'; // string | 
$satisfaction_date_strictly_after = 'satisfaction_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$payment_time = 56; // int | 
$payment_time2 = array(56); // int[] | 
$account_number = 'account_number_example'; // string | 
$account_number2 = array('account_number_example'); // string[] | 
$project_type = 'project_type_example'; // string | 
$project_type2 = array('project_type_example'); // string[] | 
$shipper = 'shipper_example'; // string | 
$shipper2 = array('shipper_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$marketing_source = 'marketing_source_example'; // string | 
$marketing_source2 = array('marketing_source_example'); // string[] | 
$partners = 'partners_example'; // string | 
$partners2 = array('partners_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$search = 'search_example'; // string | 
$potential = 'potential_example'; // string | 
$potential2 = array('potential_example'); // string[] | 
$satisfaction = 'satisfaction_example'; // string | 
$satisfaction2 = array('satisfaction_example'); // string[] | 
$discount = 'discount_example'; // string | 
$discount2 = array('discount_example'); // string[] | 
$delivery_time = 56; // int | 
$delivery_time2 = array(56); // int[] | 
$max_credit = 56; // int | 
$max_credit2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_potential_notes = True; // bool | 
$exists_satisfaction_notes = True; // bool | 
$exists_satisfaction_date = True; // bool | 
$exists_code = True; // bool | 
$exists_account_number = True; // bool | 
$exists_payment_terms = True; // bool | 
$exists_payment_time = True; // bool | 
$exists_order_max_amount = True; // bool | 
$exists_account_max_amount = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_potential = 'order_potential_example'; // string | 
$order_satisfaction = 'order_satisfaction_example'; // string | 
$order_discount = 'order_discount_example'; // string | 
$order_delivery_time = 'order_delivery_time_example'; // string | 
$order_max_credit = 'order_max_credit_example'; // string | 
$order_created_date = 'order_created_date_example'; // string | 
$order_satisfaction_date = 'order_satisfaction_date_example'; // string | 
$order_person_first_name = 'order_person_first_name_example'; // string | 
$order_person_last_name = 'order_person_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_clients slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_clients slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_clients slug_end_with
$id_partial = 'id_partial_example'; // string | person_clients id_partial
$id_start_with = 'id_start_with_example'; // string | person_clients id_start_with
$id_end_with = 'id_end_with_example'; // string | person_clients id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_clients firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_clients firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_clients firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_clients lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_clients lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_clients lastName_end_with
$code_partial = 'code_partial_example'; // string | person_clients code_partial
$code_start_with = 'code_start_with_example'; // string | person_clients code_start_with
$code_end_with = 'code_end_with_example'; // string | person_clients code_end_with
$potential_range = 'potential_range_example'; // string | person_clients potential_range
$satisfaction_range = 'satisfaction_range_example'; // string | person_clients satisfaction_range
$discount_range = 'discount_range_example'; // string | person_clients discount_range
$delivery_time_range = 'delivery_time_range_example'; // string | person_clients deliveryTime_range
$max_credit_range = 'max_credit_range_example'; // string | person_clients maxCredit_range

try {
    $result = $apiInstance->apiPersonClientsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $created_date_before, $created_date_strictly_before, $created_date_after, $created_date_strictly_after, $satisfaction_date_before, $satisfaction_date_strictly_before, $satisfaction_date_after, $satisfaction_date_strictly_after, $id, $id2, $code, $code2, $payment_time, $payment_time2, $account_number, $account_number2, $project_type, $project_type2, $shipper, $shipper2, $responsible, $responsible2, $marketing_source, $marketing_source2, $partners, $partners2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $potential, $potential2, $satisfaction, $satisfaction2, $discount, $discount2, $delivery_time, $delivery_time2, $max_credit, $max_credit2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_potential_notes, $exists_satisfaction_notes, $exists_satisfaction_date, $exists_code, $exists_account_number, $exists_payment_terms, $exists_payment_time, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_satisfaction, $order_discount, $order_delivery_time, $order_max_credit, $order_created_date, $order_satisfaction_date, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $potential_range, $satisfaction_range, $discount_range, $delivery_time_range, $max_credit_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->apiPersonClientsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **created_date_before** | **string**|  | [optional] |
| **created_date_strictly_before** | **string**|  | [optional] |
| **created_date_after** | **string**|  | [optional] |
| **created_date_strictly_after** | **string**|  | [optional] |
| **satisfaction_date_before** | **string**|  | [optional] |
| **satisfaction_date_strictly_before** | **string**|  | [optional] |
| **satisfaction_date_after** | **string**|  | [optional] |
| **satisfaction_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payment_time** | **int**|  | [optional] |
| **payment_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **account_number** | **string**|  | [optional] |
| **account_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project_type** | **string**|  | [optional] |
| **project_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipper** | **string**|  | [optional] |
| **shipper2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **marketing_source** | **string**|  | [optional] |
| **marketing_source2** | [**string[]**](../Model/string.md)|  | [optional] |
| **partners** | **string**|  | [optional] |
| **partners2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **potential** | **string**|  | [optional] |
| **potential2** | [**string[]**](../Model/string.md)|  | [optional] |
| **satisfaction** | **string**|  | [optional] |
| **satisfaction2** | [**string[]**](../Model/string.md)|  | [optional] |
| **discount** | **string**|  | [optional] |
| **discount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **delivery_time** | **int**|  | [optional] |
| **delivery_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_credit** | **int**|  | [optional] |
| **max_credit2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_potential_notes** | **bool**|  | [optional] |
| **exists_satisfaction_notes** | **bool**|  | [optional] |
| **exists_satisfaction_date** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_account_number** | **bool**|  | [optional] |
| **exists_payment_terms** | **bool**|  | [optional] |
| **exists_payment_time** | **bool**|  | [optional] |
| **exists_order_max_amount** | **bool**|  | [optional] |
| **exists_account_max_amount** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_potential** | **string**|  | [optional] |
| **order_satisfaction** | **string**|  | [optional] |
| **order_discount** | **string**|  | [optional] |
| **order_delivery_time** | **string**|  | [optional] |
| **order_max_credit** | **string**|  | [optional] |
| **order_created_date** | **string**|  | [optional] |
| **order_satisfaction_date** | **string**|  | [optional] |
| **order_person_first_name** | **string**|  | [optional] |
| **order_person_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| person_clients slug_partial | [optional] |
| **slug_start_with** | **string**| person_clients slug_start_with | [optional] |
| **slug_end_with** | **string**| person_clients slug_end_with | [optional] |
| **id_partial** | **string**| person_clients id_partial | [optional] |
| **id_start_with** | **string**| person_clients id_start_with | [optional] |
| **id_end_with** | **string**| person_clients id_end_with | [optional] |
| **first_name_partial** | **string**| person_clients firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_clients firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_clients firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_clients lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_clients lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_clients lastName_end_with | [optional] |
| **code_partial** | **string**| person_clients code_partial | [optional] |
| **code_start_with** | **string**| person_clients code_start_with | [optional] |
| **code_end_with** | **string**| person_clients code_end_with | [optional] |
| **potential_range** | **string**| person_clients potential_range | [optional] |
| **satisfaction_range** | **string**| person_clients satisfaction_range | [optional] |
| **discount_range** | **string**| person_clients discount_range | [optional] |
| **delivery_time_range** | **string**| person_clients deliveryTime_range | [optional] |
| **max_credit_range** | **string**| person_clients maxCredit_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonClientsGetCollection200Response**](../Model/ApiPersonClientsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonClientsIdDelete()`

```php
apiPersonClientsIdDelete($id)
```

Removes the person_clients resource.

Removes the person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier

try {
    $apiInstance->apiPersonClientsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->apiPersonClientsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |

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

## `apiPersonClientsIdGet()`

```php
apiPersonClientsIdGet($id): \OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_clients resource.

Retrieves a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier

try {
    $result = $apiInstance->apiPersonClientsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->apiPersonClientsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonClientsIdPut()`

```php
apiPersonClientsIdPut($id, $person_clients_jsonld_add_post): \OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_clients resource.

Replaces the person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier
$person_clients_jsonld_add_post = new \OpenAPI\Client\Model\PersonClientsJsonldAddPost(); // \OpenAPI\Client\Model\PersonClientsJsonldAddPost | The updated person_clients resource

try {
    $result = $apiInstance->apiPersonClientsIdPut($id, $person_clients_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->apiPersonClientsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |
| **person_clients_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonClientsJsonldAddPost**](../Model/PersonClientsJsonldAddPost.md)| The updated person_clients resource | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonClientsPost()`

```php
apiPersonClientsPost($person_clients_jsonld_add_post): \OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_clients resource.

Creates a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_clients_jsonld_add_post = new \OpenAPI\Client\Model\PersonClientsJsonldAddPost(); // \OpenAPI\Client\Model\PersonClientsJsonldAddPost | The new person_clients resource

try {
    $result = $apiInstance->apiPersonClientsPost($person_clients_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->apiPersonClientsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_clients_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonClientsJsonldAddPost**](../Model/PersonClientsJsonldAddPost.md)| The new person_clients resource | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personClientApiFileUpload()`

```php
personClientApiFileUpload($id, $person_clients_jsonld): \OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowIdTimestampableTagTaggingListStandardShow
```

Creates a person_clients resource.

Creates a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier
$person_clients_jsonld = new \OpenAPI\Client\Model\PersonClientsJsonld(); // \OpenAPI\Client\Model\PersonClientsJsonld | The new person_clients resource

try {
    $result = $apiInstance->personClientApiFileUpload($id, $person_clients_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->personClientApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |
| **person_clients_jsonld** | [**\OpenAPI\Client\Model\PersonClientsJsonld**](../Model/PersonClientsJsonld.md)| The new person_clients resource | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowIdTimestampableTagTaggingListStandardShow**](../Model/PersonClientsJsonldPersonClientShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personClientDropDown()`

```php
personClientDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $created_date_before, $created_date_strictly_before, $created_date_after, $created_date_strictly_after, $satisfaction_date_before, $satisfaction_date_strictly_before, $satisfaction_date_after, $satisfaction_date_strictly_after, $id, $id2, $code, $code2, $payment_time, $payment_time2, $account_number, $account_number2, $project_type, $project_type2, $shipper, $shipper2, $responsible, $responsible2, $marketing_source, $marketing_source2, $partners, $partners2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $potential, $potential2, $satisfaction, $satisfaction2, $discount, $discount2, $delivery_time, $delivery_time2, $max_credit, $max_credit2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_potential_notes, $exists_satisfaction_notes, $exists_satisfaction_date, $exists_code, $exists_account_number, $exists_payment_terms, $exists_payment_time, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_satisfaction, $order_discount, $order_delivery_time, $order_max_credit, $order_created_date, $order_satisfaction_date, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $potential_range, $satisfaction_range, $discount_range, $delivery_time_range, $max_credit_range): \OpenAPI\Client\Model\PersonClientDropDown200Response
```

Retrieves the collection of person_clients resources.

Retrieves the collection of person_clients resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
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
$created_date_before = 'created_date_before_example'; // string | 
$created_date_strictly_before = 'created_date_strictly_before_example'; // string | 
$created_date_after = 'created_date_after_example'; // string | 
$created_date_strictly_after = 'created_date_strictly_after_example'; // string | 
$satisfaction_date_before = 'satisfaction_date_before_example'; // string | 
$satisfaction_date_strictly_before = 'satisfaction_date_strictly_before_example'; // string | 
$satisfaction_date_after = 'satisfaction_date_after_example'; // string | 
$satisfaction_date_strictly_after = 'satisfaction_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$payment_time = 56; // int | 
$payment_time2 = array(56); // int[] | 
$account_number = 'account_number_example'; // string | 
$account_number2 = array('account_number_example'); // string[] | 
$project_type = 'project_type_example'; // string | 
$project_type2 = array('project_type_example'); // string[] | 
$shipper = 'shipper_example'; // string | 
$shipper2 = array('shipper_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$marketing_source = 'marketing_source_example'; // string | 
$marketing_source2 = array('marketing_source_example'); // string[] | 
$partners = 'partners_example'; // string | 
$partners2 = array('partners_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$person_first_name = 'person_first_name_example'; // string | 
$person_first_name2 = array('person_first_name_example'); // string[] | 
$person_last_name = 'person_last_name_example'; // string | 
$person_last_name2 = array('person_last_name_example'); // string[] | 
$search = 'search_example'; // string | 
$potential = 'potential_example'; // string | 
$potential2 = array('potential_example'); // string[] | 
$satisfaction = 'satisfaction_example'; // string | 
$satisfaction2 = array('satisfaction_example'); // string[] | 
$discount = 'discount_example'; // string | 
$discount2 = array('discount_example'); // string[] | 
$delivery_time = 56; // int | 
$delivery_time2 = array(56); // int[] | 
$max_credit = 56; // int | 
$max_credit2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_potential_notes = True; // bool | 
$exists_satisfaction_notes = True; // bool | 
$exists_satisfaction_date = True; // bool | 
$exists_code = True; // bool | 
$exists_account_number = True; // bool | 
$exists_payment_terms = True; // bool | 
$exists_payment_time = True; // bool | 
$exists_order_max_amount = True; // bool | 
$exists_account_max_amount = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_potential = 'order_potential_example'; // string | 
$order_satisfaction = 'order_satisfaction_example'; // string | 
$order_discount = 'order_discount_example'; // string | 
$order_delivery_time = 'order_delivery_time_example'; // string | 
$order_max_credit = 'order_max_credit_example'; // string | 
$order_created_date = 'order_created_date_example'; // string | 
$order_satisfaction_date = 'order_satisfaction_date_example'; // string | 
$order_person_first_name = 'order_person_first_name_example'; // string | 
$order_person_last_name = 'order_person_last_name_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_clients slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_clients slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_clients slug_end_with
$id_partial = 'id_partial_example'; // string | person_clients id_partial
$id_start_with = 'id_start_with_example'; // string | person_clients id_start_with
$id_end_with = 'id_end_with_example'; // string | person_clients id_end_with
$first_name_partial = 'first_name_partial_example'; // string | person_clients firstName_partial
$first_name_start_with = 'first_name_start_with_example'; // string | person_clients firstName_start_with
$first_name_end_with = 'first_name_end_with_example'; // string | person_clients firstName_end_with
$last_name_partial = 'last_name_partial_example'; // string | person_clients lastName_partial
$last_name_start_with = 'last_name_start_with_example'; // string | person_clients lastName_start_with
$last_name_end_with = 'last_name_end_with_example'; // string | person_clients lastName_end_with
$code_partial = 'code_partial_example'; // string | person_clients code_partial
$code_start_with = 'code_start_with_example'; // string | person_clients code_start_with
$code_end_with = 'code_end_with_example'; // string | person_clients code_end_with
$potential_range = 'potential_range_example'; // string | person_clients potential_range
$satisfaction_range = 'satisfaction_range_example'; // string | person_clients satisfaction_range
$discount_range = 'discount_range_example'; // string | person_clients discount_range
$delivery_time_range = 'delivery_time_range_example'; // string | person_clients deliveryTime_range
$max_credit_range = 'max_credit_range_example'; // string | person_clients maxCredit_range

try {
    $result = $apiInstance->personClientDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $created_date_before, $created_date_strictly_before, $created_date_after, $created_date_strictly_after, $satisfaction_date_before, $satisfaction_date_strictly_before, $satisfaction_date_after, $satisfaction_date_strictly_after, $id, $id2, $code, $code2, $payment_time, $payment_time2, $account_number, $account_number2, $project_type, $project_type2, $shipper, $shipper2, $responsible, $responsible2, $marketing_source, $marketing_source2, $partners, $partners2, $person, $person2, $person_first_name, $person_first_name2, $person_last_name, $person_last_name2, $search, $potential, $potential2, $satisfaction, $satisfaction2, $discount, $discount2, $delivery_time, $delivery_time2, $max_credit, $max_credit2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_potential_notes, $exists_satisfaction_notes, $exists_satisfaction_date, $exists_code, $exists_account_number, $exists_payment_terms, $exists_payment_time, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_created_at, $order_updated_at, $order_potential, $order_satisfaction, $order_discount, $order_delivery_time, $order_max_credit, $order_created_date, $order_satisfaction_date, $order_person_first_name, $order_person_last_name, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $first_name_partial, $first_name_start_with, $first_name_end_with, $last_name_partial, $last_name_start_with, $last_name_end_with, $code_partial, $code_start_with, $code_end_with, $potential_range, $satisfaction_range, $discount_range, $delivery_time_range, $max_credit_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->personClientDropDown: ', $e->getMessage(), PHP_EOL;
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
| **created_date_before** | **string**|  | [optional] |
| **created_date_strictly_before** | **string**|  | [optional] |
| **created_date_after** | **string**|  | [optional] |
| **created_date_strictly_after** | **string**|  | [optional] |
| **satisfaction_date_before** | **string**|  | [optional] |
| **satisfaction_date_strictly_before** | **string**|  | [optional] |
| **satisfaction_date_after** | **string**|  | [optional] |
| **satisfaction_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payment_time** | **int**|  | [optional] |
| **payment_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **account_number** | **string**|  | [optional] |
| **account_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project_type** | **string**|  | [optional] |
| **project_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipper** | **string**|  | [optional] |
| **shipper2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **marketing_source** | **string**|  | [optional] |
| **marketing_source2** | [**string[]**](../Model/string.md)|  | [optional] |
| **partners** | **string**|  | [optional] |
| **partners2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_first_name** | **string**|  | [optional] |
| **person_first_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person_last_name** | **string**|  | [optional] |
| **person_last_name2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **potential** | **string**|  | [optional] |
| **potential2** | [**string[]**](../Model/string.md)|  | [optional] |
| **satisfaction** | **string**|  | [optional] |
| **satisfaction2** | [**string[]**](../Model/string.md)|  | [optional] |
| **discount** | **string**|  | [optional] |
| **discount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **delivery_time** | **int**|  | [optional] |
| **delivery_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_credit** | **int**|  | [optional] |
| **max_credit2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_potential_notes** | **bool**|  | [optional] |
| **exists_satisfaction_notes** | **bool**|  | [optional] |
| **exists_satisfaction_date** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_account_number** | **bool**|  | [optional] |
| **exists_payment_terms** | **bool**|  | [optional] |
| **exists_payment_time** | **bool**|  | [optional] |
| **exists_order_max_amount** | **bool**|  | [optional] |
| **exists_account_max_amount** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_potential** | **string**|  | [optional] |
| **order_satisfaction** | **string**|  | [optional] |
| **order_discount** | **string**|  | [optional] |
| **order_delivery_time** | **string**|  | [optional] |
| **order_max_credit** | **string**|  | [optional] |
| **order_created_date** | **string**|  | [optional] |
| **order_satisfaction_date** | **string**|  | [optional] |
| **order_person_first_name** | **string**|  | [optional] |
| **order_person_last_name** | **string**|  | [optional] |
| **slug_partial** | **string**| person_clients slug_partial | [optional] |
| **slug_start_with** | **string**| person_clients slug_start_with | [optional] |
| **slug_end_with** | **string**| person_clients slug_end_with | [optional] |
| **id_partial** | **string**| person_clients id_partial | [optional] |
| **id_start_with** | **string**| person_clients id_start_with | [optional] |
| **id_end_with** | **string**| person_clients id_end_with | [optional] |
| **first_name_partial** | **string**| person_clients firstName_partial | [optional] |
| **first_name_start_with** | **string**| person_clients firstName_start_with | [optional] |
| **first_name_end_with** | **string**| person_clients firstName_end_with | [optional] |
| **last_name_partial** | **string**| person_clients lastName_partial | [optional] |
| **last_name_start_with** | **string**| person_clients lastName_start_with | [optional] |
| **last_name_end_with** | **string**| person_clients lastName_end_with | [optional] |
| **code_partial** | **string**| person_clients code_partial | [optional] |
| **code_start_with** | **string**| person_clients code_start_with | [optional] |
| **code_end_with** | **string**| person_clients code_end_with | [optional] |
| **potential_range** | **string**| person_clients potential_range | [optional] |
| **satisfaction_range** | **string**| person_clients satisfaction_range | [optional] |
| **discount_range** | **string**| person_clients discount_range | [optional] |
| **delivery_time_range** | **string**| person_clients deliveryTime_range | [optional] |
| **max_credit_range** | **string**| person_clients maxCredit_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonClientDropDown200Response**](../Model/PersonClientDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personClientDuplicate()`

```php
personClientDuplicate($id): \OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_clients resource.

Retrieves a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier

try {
    $result = $apiInstance->personClientDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->personClientDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personClientFetchFiles()`

```php
personClientFetchFiles($id): \OpenAPI\Client\Model\PersonClientsJsonld
```

Retrieves a person_clients resource.

Retrieves a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier

try {
    $result = $apiInstance->personClientFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->personClientFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonld**](../Model/PersonClientsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personClientGetBySlug()`

```php
personClientGetBySlug($slug): \OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_clients resource.

Retrieves a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_clients identifier

try {
    $result = $apiInstance->personClientGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->personClientGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_clients identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonClientsJsonldPersonClientShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personClientGetDeleteRelations()`

```php
personClientGetDeleteRelations($id): \OpenAPI\Client\Model\PersonClientsJsonldPersonClientRelations
```

Retrieves a person_clients resource.

Retrieves a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier

try {
    $result = $apiInstance->personClientGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->personClientGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldPersonClientRelations**](../Model/PersonClientsJsonldPersonClientRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personClientMetadata()`

```php
personClientMetadata($id): \OpenAPI\Client\Model\PersonClientsJsonldIdStandardMetadataPersonClientMetadataTagTaggingListPersonClientRelationsTimestampable
```

Retrieves a person_clients resource.

Retrieves a person_clients resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_clients identifier

try {
    $result = $apiInstance->personClientMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonClientsApi->personClientMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_clients identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonClientsJsonldIdStandardMetadataPersonClientMetadataTagTaggingListPersonClientRelationsTimestampable**](../Model/PersonClientsJsonldIdStandardMetadataPersonClientMetadataTagTaggingListPersonClientRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
