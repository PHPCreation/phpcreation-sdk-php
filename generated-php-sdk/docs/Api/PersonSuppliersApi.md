# OpenAPI\Client\PersonSuppliersApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonSuppliersGetCollection()**](PersonSuppliersApi.md#apiPersonSuppliersGetCollection) | **GET** /open-api/v3/person_suppliers | Retrieves the collection of person_suppliers resources. |
| [**apiPersonSuppliersIdDelete()**](PersonSuppliersApi.md#apiPersonSuppliersIdDelete) | **DELETE** /open-api/v3/person_suppliers/{id} | Removes the person_suppliers resource. |
| [**apiPersonSuppliersIdGet()**](PersonSuppliersApi.md#apiPersonSuppliersIdGet) | **GET** /open-api/v3/person_suppliers/{id} | Retrieves a person_suppliers resource. |
| [**apiPersonSuppliersIdPut()**](PersonSuppliersApi.md#apiPersonSuppliersIdPut) | **PUT** /open-api/v3/person_suppliers/{id} | Replaces the person_suppliers resource. |
| [**apiPersonSuppliersPost()**](PersonSuppliersApi.md#apiPersonSuppliersPost) | **POST** /open-api/v3/person_suppliers | Creates a person_suppliers resource. |
| [**personSupplierApiFileUpload()**](PersonSuppliersApi.md#personSupplierApiFileUpload) | **POST** /open-api/v3/person_suppliers/{id}/file/upload | Creates a person_suppliers resource. |
| [**personSupplierDropDown()**](PersonSuppliersApi.md#personSupplierDropDown) | **GET** /open-api/v3/person_suppliers/dropdown/get | Retrieves the collection of person_suppliers resources. |
| [**personSupplierDuplicate()**](PersonSuppliersApi.md#personSupplierDuplicate) | **GET** /open-api/v3/person_suppliers/duplicate/{id} | Retrieves a person_suppliers resource. |
| [**personSupplierFetchFiles()**](PersonSuppliersApi.md#personSupplierFetchFiles) | **GET** /open-api/v3/person_suppliers/fetch_files/{id} | Retrieves a person_suppliers resource. |
| [**personSupplierGetBySlug()**](PersonSuppliersApi.md#personSupplierGetBySlug) | **GET** /open-api/v3/person_suppliers/by_slug/{slug} | Retrieves a person_suppliers resource. |
| [**personSupplierGetDeleteRelations()**](PersonSuppliersApi.md#personSupplierGetDeleteRelations) | **GET** /open-api/v3/person_suppliers/get_delete_relations/{id} | Retrieves a person_suppliers resource. |
| [**personSupplierMetadata()**](PersonSuppliersApi.md#personSupplierMetadata) | **GET** /open-api/v3/person_suppliers/metadata/{id} | Retrieves a person_suppliers resource. |


## `apiPersonSuppliersGetCollection()`

```php
apiPersonSuppliersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $owner, $owner2, $fed_tax_number, $fed_tax_number2, $prov_tax_number, $prov_tax_number2, $account_number, $account_number2, $person, $person2, $shipper, $shipper2, $responsible, $responsible2, $search, $discount, $discount2, $payment_time, $payment_time2, $delivery_time, $delivery_time2, $delivery_frequency, $delivery_frequency2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_payment_terms, $exists_social_reason, $exists_owner, $exists_fed_tax_number, $exists_prov_tax_number, $exists_order_day, $exists_file_types, $exists_code, $exists_account_number, $exists_payment_time, $exists_delivery_frequency, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_code, $order_owner, $order_fed_tax_number, $order_prov_tax_number, $order_account_number, $order_created_at, $order_updated_at, $order_discount, $order_payment_time, $order_delivery_time, $order_delivery_frequency, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $fed_tax_number_partial, $fed_tax_number_start_with, $fed_tax_number_end_with, $prov_tax_number_partial, $prov_tax_number_start_with, $prov_tax_number_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with, $discount_range, $payment_time_range, $delivery_time_range, $delivery_frequency_range): \OpenAPI\Client\Model\ApiPersonSuppliersGetCollection200Response
```

Retrieves the collection of person_suppliers resources.

Retrieves the collection of person_suppliers resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$owner = 'owner_example'; // string | 
$owner2 = array('owner_example'); // string[] | 
$fed_tax_number = 'fed_tax_number_example'; // string | 
$fed_tax_number2 = array('fed_tax_number_example'); // string[] | 
$prov_tax_number = 'prov_tax_number_example'; // string | 
$prov_tax_number2 = array('prov_tax_number_example'); // string[] | 
$account_number = 'account_number_example'; // string | 
$account_number2 = array('account_number_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$shipper = 'shipper_example'; // string | 
$shipper2 = array('shipper_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$search = 'search_example'; // string | 
$discount = 'discount_example'; // string | 
$discount2 = array('discount_example'); // string[] | 
$payment_time = 56; // int | 
$payment_time2 = array(56); // int[] | 
$delivery_time = 56; // int | 
$delivery_time2 = array(56); // int[] | 
$delivery_frequency = 56; // int | 
$delivery_frequency2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_payment_terms = True; // bool | 
$exists_social_reason = True; // bool | 
$exists_owner = True; // bool | 
$exists_fed_tax_number = True; // bool | 
$exists_prov_tax_number = True; // bool | 
$exists_order_day = True; // bool | 
$exists_file_types = True; // bool | 
$exists_code = True; // bool | 
$exists_account_number = True; // bool | 
$exists_payment_time = True; // bool | 
$exists_delivery_frequency = True; // bool | 
$exists_order_max_amount = True; // bool | 
$exists_account_max_amount = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_owner = 'order_owner_example'; // string | 
$order_fed_tax_number = 'order_fed_tax_number_example'; // string | 
$order_prov_tax_number = 'order_prov_tax_number_example'; // string | 
$order_account_number = 'order_account_number_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_discount = 'order_discount_example'; // string | 
$order_payment_time = 'order_payment_time_example'; // string | 
$order_delivery_time = 'order_delivery_time_example'; // string | 
$order_delivery_frequency = 'order_delivery_frequency_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_suppliers slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_suppliers slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_suppliers slug_end_with
$id_partial = 'id_partial_example'; // string | person_suppliers id_partial
$id_start_with = 'id_start_with_example'; // string | person_suppliers id_start_with
$id_end_with = 'id_end_with_example'; // string | person_suppliers id_end_with
$code_partial = 'code_partial_example'; // string | person_suppliers code_partial
$code_start_with = 'code_start_with_example'; // string | person_suppliers code_start_with
$code_end_with = 'code_end_with_example'; // string | person_suppliers code_end_with
$fed_tax_number_partial = 'fed_tax_number_partial_example'; // string | person_suppliers fedTaxNumber_partial
$fed_tax_number_start_with = 'fed_tax_number_start_with_example'; // string | person_suppliers fedTaxNumber_start_with
$fed_tax_number_end_with = 'fed_tax_number_end_with_example'; // string | person_suppliers fedTaxNumber_end_with
$prov_tax_number_partial = 'prov_tax_number_partial_example'; // string | person_suppliers provTaxNumber_partial
$prov_tax_number_start_with = 'prov_tax_number_start_with_example'; // string | person_suppliers provTaxNumber_start_with
$prov_tax_number_end_with = 'prov_tax_number_end_with_example'; // string | person_suppliers provTaxNumber_end_with
$account_number_partial = 'account_number_partial_example'; // string | person_suppliers accountNumber_partial
$account_number_start_with = 'account_number_start_with_example'; // string | person_suppliers accountNumber_start_with
$account_number_end_with = 'account_number_end_with_example'; // string | person_suppliers accountNumber_end_with
$discount_range = 'discount_range_example'; // string | person_suppliers discount_range
$payment_time_range = 'payment_time_range_example'; // string | person_suppliers paymentTime_range
$delivery_time_range = 'delivery_time_range_example'; // string | person_suppliers deliveryTime_range
$delivery_frequency_range = 'delivery_frequency_range_example'; // string | person_suppliers deliveryFrequency_range

try {
    $result = $apiInstance->apiPersonSuppliersGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $owner, $owner2, $fed_tax_number, $fed_tax_number2, $prov_tax_number, $prov_tax_number2, $account_number, $account_number2, $person, $person2, $shipper, $shipper2, $responsible, $responsible2, $search, $discount, $discount2, $payment_time, $payment_time2, $delivery_time, $delivery_time2, $delivery_frequency, $delivery_frequency2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_payment_terms, $exists_social_reason, $exists_owner, $exists_fed_tax_number, $exists_prov_tax_number, $exists_order_day, $exists_file_types, $exists_code, $exists_account_number, $exists_payment_time, $exists_delivery_frequency, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_code, $order_owner, $order_fed_tax_number, $order_prov_tax_number, $order_account_number, $order_created_at, $order_updated_at, $order_discount, $order_payment_time, $order_delivery_time, $order_delivery_frequency, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $fed_tax_number_partial, $fed_tax_number_start_with, $fed_tax_number_end_with, $prov_tax_number_partial, $prov_tax_number_start_with, $prov_tax_number_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with, $discount_range, $payment_time_range, $delivery_time_range, $delivery_frequency_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->apiPersonSuppliersGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **owner** | **string**|  | [optional] |
| **owner2** | [**string[]**](../Model/string.md)|  | [optional] |
| **fed_tax_number** | **string**|  | [optional] |
| **fed_tax_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **prov_tax_number** | **string**|  | [optional] |
| **prov_tax_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **account_number** | **string**|  | [optional] |
| **account_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipper** | **string**|  | [optional] |
| **shipper2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **discount** | **string**|  | [optional] |
| **discount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payment_time** | **int**|  | [optional] |
| **payment_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **delivery_time** | **int**|  | [optional] |
| **delivery_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **delivery_frequency** | **int**|  | [optional] |
| **delivery_frequency2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_payment_terms** | **bool**|  | [optional] |
| **exists_social_reason** | **bool**|  | [optional] |
| **exists_owner** | **bool**|  | [optional] |
| **exists_fed_tax_number** | **bool**|  | [optional] |
| **exists_prov_tax_number** | **bool**|  | [optional] |
| **exists_order_day** | **bool**|  | [optional] |
| **exists_file_types** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_account_number** | **bool**|  | [optional] |
| **exists_payment_time** | **bool**|  | [optional] |
| **exists_delivery_frequency** | **bool**|  | [optional] |
| **exists_order_max_amount** | **bool**|  | [optional] |
| **exists_account_max_amount** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_owner** | **string**|  | [optional] |
| **order_fed_tax_number** | **string**|  | [optional] |
| **order_prov_tax_number** | **string**|  | [optional] |
| **order_account_number** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_discount** | **string**|  | [optional] |
| **order_payment_time** | **string**|  | [optional] |
| **order_delivery_time** | **string**|  | [optional] |
| **order_delivery_frequency** | **string**|  | [optional] |
| **slug_partial** | **string**| person_suppliers slug_partial | [optional] |
| **slug_start_with** | **string**| person_suppliers slug_start_with | [optional] |
| **slug_end_with** | **string**| person_suppliers slug_end_with | [optional] |
| **id_partial** | **string**| person_suppliers id_partial | [optional] |
| **id_start_with** | **string**| person_suppliers id_start_with | [optional] |
| **id_end_with** | **string**| person_suppliers id_end_with | [optional] |
| **code_partial** | **string**| person_suppliers code_partial | [optional] |
| **code_start_with** | **string**| person_suppliers code_start_with | [optional] |
| **code_end_with** | **string**| person_suppliers code_end_with | [optional] |
| **fed_tax_number_partial** | **string**| person_suppliers fedTaxNumber_partial | [optional] |
| **fed_tax_number_start_with** | **string**| person_suppliers fedTaxNumber_start_with | [optional] |
| **fed_tax_number_end_with** | **string**| person_suppliers fedTaxNumber_end_with | [optional] |
| **prov_tax_number_partial** | **string**| person_suppliers provTaxNumber_partial | [optional] |
| **prov_tax_number_start_with** | **string**| person_suppliers provTaxNumber_start_with | [optional] |
| **prov_tax_number_end_with** | **string**| person_suppliers provTaxNumber_end_with | [optional] |
| **account_number_partial** | **string**| person_suppliers accountNumber_partial | [optional] |
| **account_number_start_with** | **string**| person_suppliers accountNumber_start_with | [optional] |
| **account_number_end_with** | **string**| person_suppliers accountNumber_end_with | [optional] |
| **discount_range** | **string**| person_suppliers discount_range | [optional] |
| **payment_time_range** | **string**| person_suppliers paymentTime_range | [optional] |
| **delivery_time_range** | **string**| person_suppliers deliveryTime_range | [optional] |
| **delivery_frequency_range** | **string**| person_suppliers deliveryFrequency_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonSuppliersGetCollection200Response**](../Model/ApiPersonSuppliersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonSuppliersIdDelete()`

```php
apiPersonSuppliersIdDelete($id)
```

Removes the person_suppliers resource.

Removes the person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier

try {
    $apiInstance->apiPersonSuppliersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->apiPersonSuppliersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |

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

## `apiPersonSuppliersIdGet()`

```php
apiPersonSuppliersIdGet($id): \OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_suppliers resource.

Retrieves a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier

try {
    $result = $apiInstance->apiPersonSuppliersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->apiPersonSuppliersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonSuppliersIdPut()`

```php
apiPersonSuppliersIdPut($id, $person_suppliers_jsonld_add_post): \OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_suppliers resource.

Replaces the person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier
$person_suppliers_jsonld_add_post = new \OpenAPI\Client\Model\PersonSuppliersJsonldAddPost(); // \OpenAPI\Client\Model\PersonSuppliersJsonldAddPost | The updated person_suppliers resource

try {
    $result = $apiInstance->apiPersonSuppliersIdPut($id, $person_suppliers_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->apiPersonSuppliersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |
| **person_suppliers_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonSuppliersJsonldAddPost**](../Model/PersonSuppliersJsonldAddPost.md)| The updated person_suppliers resource | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonSuppliersPost()`

```php
apiPersonSuppliersPost($person_suppliers_jsonld_add_post): \OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_suppliers resource.

Creates a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_suppliers_jsonld_add_post = new \OpenAPI\Client\Model\PersonSuppliersJsonldAddPost(); // \OpenAPI\Client\Model\PersonSuppliersJsonldAddPost | The new person_suppliers resource

try {
    $result = $apiInstance->apiPersonSuppliersPost($person_suppliers_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->apiPersonSuppliersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_suppliers_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonSuppliersJsonldAddPost**](../Model/PersonSuppliersJsonldAddPost.md)| The new person_suppliers resource | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSupplierApiFileUpload()`

```php
personSupplierApiFileUpload($id, $person_suppliers_jsonld): \OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_suppliers resource.

Creates a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier
$person_suppliers_jsonld = new \OpenAPI\Client\Model\PersonSuppliersJsonld(); // \OpenAPI\Client\Model\PersonSuppliersJsonld | The new person_suppliers resource

try {
    $result = $apiInstance->personSupplierApiFileUpload($id, $person_suppliers_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->personSupplierApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |
| **person_suppliers_jsonld** | [**\OpenAPI\Client\Model\PersonSuppliersJsonld**](../Model/PersonSuppliersJsonld.md)| The new person_suppliers resource | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSupplierDropDown()`

```php
personSupplierDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $owner, $owner2, $fed_tax_number, $fed_tax_number2, $prov_tax_number, $prov_tax_number2, $account_number, $account_number2, $person, $person2, $shipper, $shipper2, $responsible, $responsible2, $search, $discount, $discount2, $payment_time, $payment_time2, $delivery_time, $delivery_time2, $delivery_frequency, $delivery_frequency2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_payment_terms, $exists_social_reason, $exists_owner, $exists_fed_tax_number, $exists_prov_tax_number, $exists_order_day, $exists_file_types, $exists_code, $exists_account_number, $exists_payment_time, $exists_delivery_frequency, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_code, $order_owner, $order_fed_tax_number, $order_prov_tax_number, $order_account_number, $order_created_at, $order_updated_at, $order_discount, $order_payment_time, $order_delivery_time, $order_delivery_frequency, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $fed_tax_number_partial, $fed_tax_number_start_with, $fed_tax_number_end_with, $prov_tax_number_partial, $prov_tax_number_start_with, $prov_tax_number_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with, $discount_range, $payment_time_range, $delivery_time_range, $delivery_frequency_range): \OpenAPI\Client\Model\PersonSupplierDropDown200Response
```

Retrieves the collection of person_suppliers resources.

Retrieves the collection of person_suppliers resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
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
$code = 'code_example'; // string | 
$code2 = array('code_example'); // string[] | 
$owner = 'owner_example'; // string | 
$owner2 = array('owner_example'); // string[] | 
$fed_tax_number = 'fed_tax_number_example'; // string | 
$fed_tax_number2 = array('fed_tax_number_example'); // string[] | 
$prov_tax_number = 'prov_tax_number_example'; // string | 
$prov_tax_number2 = array('prov_tax_number_example'); // string[] | 
$account_number = 'account_number_example'; // string | 
$account_number2 = array('account_number_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$shipper = 'shipper_example'; // string | 
$shipper2 = array('shipper_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$search = 'search_example'; // string | 
$discount = 'discount_example'; // string | 
$discount2 = array('discount_example'); // string[] | 
$payment_time = 56; // int | 
$payment_time2 = array(56); // int[] | 
$delivery_time = 56; // int | 
$delivery_time2 = array(56); // int[] | 
$delivery_frequency = 56; // int | 
$delivery_frequency2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_payment_terms = True; // bool | 
$exists_social_reason = True; // bool | 
$exists_owner = True; // bool | 
$exists_fed_tax_number = True; // bool | 
$exists_prov_tax_number = True; // bool | 
$exists_order_day = True; // bool | 
$exists_file_types = True; // bool | 
$exists_code = True; // bool | 
$exists_account_number = True; // bool | 
$exists_payment_time = True; // bool | 
$exists_delivery_frequency = True; // bool | 
$exists_order_max_amount = True; // bool | 
$exists_account_max_amount = True; // bool | 
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_code = 'order_code_example'; // string | 
$order_owner = 'order_owner_example'; // string | 
$order_fed_tax_number = 'order_fed_tax_number_example'; // string | 
$order_prov_tax_number = 'order_prov_tax_number_example'; // string | 
$order_account_number = 'order_account_number_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_discount = 'order_discount_example'; // string | 
$order_payment_time = 'order_payment_time_example'; // string | 
$order_delivery_time = 'order_delivery_time_example'; // string | 
$order_delivery_frequency = 'order_delivery_frequency_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_suppliers slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_suppliers slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_suppliers slug_end_with
$id_partial = 'id_partial_example'; // string | person_suppliers id_partial
$id_start_with = 'id_start_with_example'; // string | person_suppliers id_start_with
$id_end_with = 'id_end_with_example'; // string | person_suppliers id_end_with
$code_partial = 'code_partial_example'; // string | person_suppliers code_partial
$code_start_with = 'code_start_with_example'; // string | person_suppliers code_start_with
$code_end_with = 'code_end_with_example'; // string | person_suppliers code_end_with
$fed_tax_number_partial = 'fed_tax_number_partial_example'; // string | person_suppliers fedTaxNumber_partial
$fed_tax_number_start_with = 'fed_tax_number_start_with_example'; // string | person_suppliers fedTaxNumber_start_with
$fed_tax_number_end_with = 'fed_tax_number_end_with_example'; // string | person_suppliers fedTaxNumber_end_with
$prov_tax_number_partial = 'prov_tax_number_partial_example'; // string | person_suppliers provTaxNumber_partial
$prov_tax_number_start_with = 'prov_tax_number_start_with_example'; // string | person_suppliers provTaxNumber_start_with
$prov_tax_number_end_with = 'prov_tax_number_end_with_example'; // string | person_suppliers provTaxNumber_end_with
$account_number_partial = 'account_number_partial_example'; // string | person_suppliers accountNumber_partial
$account_number_start_with = 'account_number_start_with_example'; // string | person_suppliers accountNumber_start_with
$account_number_end_with = 'account_number_end_with_example'; // string | person_suppliers accountNumber_end_with
$discount_range = 'discount_range_example'; // string | person_suppliers discount_range
$payment_time_range = 'payment_time_range_example'; // string | person_suppliers paymentTime_range
$delivery_time_range = 'delivery_time_range_example'; // string | person_suppliers deliveryTime_range
$delivery_frequency_range = 'delivery_frequency_range_example'; // string | person_suppliers deliveryFrequency_range

try {
    $result = $apiInstance->personSupplierDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $code, $code2, $owner, $owner2, $fed_tax_number, $fed_tax_number2, $prov_tax_number, $prov_tax_number2, $account_number, $account_number2, $person, $person2, $shipper, $shipper2, $responsible, $responsible2, $search, $discount, $discount2, $payment_time, $payment_time2, $delivery_time, $delivery_time2, $delivery_frequency, $delivery_frequency2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_payment_terms, $exists_social_reason, $exists_owner, $exists_fed_tax_number, $exists_prov_tax_number, $exists_order_day, $exists_file_types, $exists_code, $exists_account_number, $exists_payment_time, $exists_delivery_frequency, $exists_order_max_amount, $exists_account_max_amount, $enabled, $properties, $tag, $order_id, $order_code, $order_owner, $order_fed_tax_number, $order_prov_tax_number, $order_account_number, $order_created_at, $order_updated_at, $order_discount, $order_payment_time, $order_delivery_time, $order_delivery_frequency, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $code_partial, $code_start_with, $code_end_with, $fed_tax_number_partial, $fed_tax_number_start_with, $fed_tax_number_end_with, $prov_tax_number_partial, $prov_tax_number_start_with, $prov_tax_number_end_with, $account_number_partial, $account_number_start_with, $account_number_end_with, $discount_range, $payment_time_range, $delivery_time_range, $delivery_frequency_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->personSupplierDropDown: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**|  | [optional] |
| **code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **owner** | **string**|  | [optional] |
| **owner2** | [**string[]**](../Model/string.md)|  | [optional] |
| **fed_tax_number** | **string**|  | [optional] |
| **fed_tax_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **prov_tax_number** | **string**|  | [optional] |
| **prov_tax_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **account_number** | **string**|  | [optional] |
| **account_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipper** | **string**|  | [optional] |
| **shipper2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **discount** | **string**|  | [optional] |
| **discount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payment_time** | **int**|  | [optional] |
| **payment_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **delivery_time** | **int**|  | [optional] |
| **delivery_time2** | [**int[]**](../Model/int.md)|  | [optional] |
| **delivery_frequency** | **int**|  | [optional] |
| **delivery_frequency2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_payment_terms** | **bool**|  | [optional] |
| **exists_social_reason** | **bool**|  | [optional] |
| **exists_owner** | **bool**|  | [optional] |
| **exists_fed_tax_number** | **bool**|  | [optional] |
| **exists_prov_tax_number** | **bool**|  | [optional] |
| **exists_order_day** | **bool**|  | [optional] |
| **exists_file_types** | **bool**|  | [optional] |
| **exists_code** | **bool**|  | [optional] |
| **exists_account_number** | **bool**|  | [optional] |
| **exists_payment_time** | **bool**|  | [optional] |
| **exists_delivery_frequency** | **bool**|  | [optional] |
| **exists_order_max_amount** | **bool**|  | [optional] |
| **exists_account_max_amount** | **bool**|  | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_code** | **string**|  | [optional] |
| **order_owner** | **string**|  | [optional] |
| **order_fed_tax_number** | **string**|  | [optional] |
| **order_prov_tax_number** | **string**|  | [optional] |
| **order_account_number** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_discount** | **string**|  | [optional] |
| **order_payment_time** | **string**|  | [optional] |
| **order_delivery_time** | **string**|  | [optional] |
| **order_delivery_frequency** | **string**|  | [optional] |
| **slug_partial** | **string**| person_suppliers slug_partial | [optional] |
| **slug_start_with** | **string**| person_suppliers slug_start_with | [optional] |
| **slug_end_with** | **string**| person_suppliers slug_end_with | [optional] |
| **id_partial** | **string**| person_suppliers id_partial | [optional] |
| **id_start_with** | **string**| person_suppliers id_start_with | [optional] |
| **id_end_with** | **string**| person_suppliers id_end_with | [optional] |
| **code_partial** | **string**| person_suppliers code_partial | [optional] |
| **code_start_with** | **string**| person_suppliers code_start_with | [optional] |
| **code_end_with** | **string**| person_suppliers code_end_with | [optional] |
| **fed_tax_number_partial** | **string**| person_suppliers fedTaxNumber_partial | [optional] |
| **fed_tax_number_start_with** | **string**| person_suppliers fedTaxNumber_start_with | [optional] |
| **fed_tax_number_end_with** | **string**| person_suppliers fedTaxNumber_end_with | [optional] |
| **prov_tax_number_partial** | **string**| person_suppliers provTaxNumber_partial | [optional] |
| **prov_tax_number_start_with** | **string**| person_suppliers provTaxNumber_start_with | [optional] |
| **prov_tax_number_end_with** | **string**| person_suppliers provTaxNumber_end_with | [optional] |
| **account_number_partial** | **string**| person_suppliers accountNumber_partial | [optional] |
| **account_number_start_with** | **string**| person_suppliers accountNumber_start_with | [optional] |
| **account_number_end_with** | **string**| person_suppliers accountNumber_end_with | [optional] |
| **discount_range** | **string**| person_suppliers discount_range | [optional] |
| **payment_time_range** | **string**| person_suppliers paymentTime_range | [optional] |
| **delivery_time_range** | **string**| person_suppliers deliveryTime_range | [optional] |
| **delivery_frequency_range** | **string**| person_suppliers deliveryFrequency_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonSupplierDropDown200Response**](../Model/PersonSupplierDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSupplierDuplicate()`

```php
personSupplierDuplicate($id): \OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_suppliers resource.

Retrieves a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier

try {
    $result = $apiInstance->personSupplierDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->personSupplierDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSupplierFetchFiles()`

```php
personSupplierFetchFiles($id): \OpenAPI\Client\Model\PersonSuppliersJsonld
```

Retrieves a person_suppliers resource.

Retrieves a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier

try {
    $result = $apiInstance->personSupplierFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->personSupplierFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonld**](../Model/PersonSuppliersJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSupplierGetBySlug()`

```php
personSupplierGetBySlug($slug): \OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_suppliers resource.

Retrieves a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_suppliers identifier

try {
    $result = $apiInstance->personSupplierGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->personSupplierGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_suppliers identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonSuppliersJsonldPersonSupplierShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSupplierGetDeleteRelations()`

```php
personSupplierGetDeleteRelations($id): \OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierRelations
```

Retrieves a person_suppliers resource.

Retrieves a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier

try {
    $result = $apiInstance->personSupplierGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->personSupplierGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldPersonSupplierRelations**](../Model/PersonSuppliersJsonldPersonSupplierRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personSupplierMetadata()`

```php
personSupplierMetadata($id): \OpenAPI\Client\Model\PersonSuppliersJsonldIdStandardMetadataPersonSupplierMetadataTagTaggingListPersonSupplierRelationsTimestampable
```

Retrieves a person_suppliers resource.

Retrieves a person_suppliers resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_suppliers identifier

try {
    $result = $apiInstance->personSupplierMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonSuppliersApi->personSupplierMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_suppliers identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonSuppliersJsonldIdStandardMetadataPersonSupplierMetadataTagTaggingListPersonSupplierRelationsTimestampable**](../Model/PersonSuppliersJsonldIdStandardMetadataPersonSupplierMetadataTagTaggingListPersonSupplierRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
