# OpenAPI\Client\BillPaymentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillPaymentsGetCollection()**](BillPaymentsApi.md#apiBillPaymentsGetCollection) | **GET** /open-api/v3/bill_payments | Retrieves the collection of bill_payments resources. |
| [**apiBillPaymentsIdDelete()**](BillPaymentsApi.md#apiBillPaymentsIdDelete) | **DELETE** /open-api/v3/bill_payments/{id} | Removes the bill_payments resource. |
| [**apiBillPaymentsIdGet()**](BillPaymentsApi.md#apiBillPaymentsIdGet) | **GET** /open-api/v3/bill_payments/{id} | Retrieves a bill_payments resource. |
| [**apiBillPaymentsIdPut()**](BillPaymentsApi.md#apiBillPaymentsIdPut) | **PUT** /open-api/v3/bill_payments/{id} | Replaces the bill_payments resource. |
| [**apiBillPaymentsPost()**](BillPaymentsApi.md#apiBillPaymentsPost) | **POST** /open-api/v3/bill_payments | Creates a bill_payments resource. |
| [**billPaymentApiCorporationAdd()**](BillPaymentsApi.md#billPaymentApiCorporationAdd) | **POST** /open-api/v3/bill_payments/{id}/corporation/add | Creates a bill_payments resource. |
| [**billPaymentApiCorporationRemove()**](BillPaymentsApi.md#billPaymentApiCorporationRemove) | **POST** /open-api/v3/bill_payments/{id}/corporation/remove | Creates a bill_payments resource. |
| [**billPaymentApiFileUpload()**](BillPaymentsApi.md#billPaymentApiFileUpload) | **POST** /open-api/v3/bill_payments/{id}/file/upload | Creates a bill_payments resource. |
| [**billPaymentDropDown()**](BillPaymentsApi.md#billPaymentDropDown) | **GET** /open-api/v3/bill_payments/dropdown/get | Retrieves the collection of bill_payments resources. |
| [**billPaymentDuplicate()**](BillPaymentsApi.md#billPaymentDuplicate) | **GET** /open-api/v3/bill_payments/duplicate/{id} | Retrieves a bill_payments resource. |
| [**billPaymentFetchFiles()**](BillPaymentsApi.md#billPaymentFetchFiles) | **GET** /open-api/v3/bill_payments/fetch_files/{id} | Retrieves a bill_payments resource. |
| [**billPaymentGetBySlug()**](BillPaymentsApi.md#billPaymentGetBySlug) | **GET** /open-api/v3/bill_payments/by_slug/{slug} | Retrieves a bill_payments resource. |
| [**billPaymentGetDeleteRelations()**](BillPaymentsApi.md#billPaymentGetDeleteRelations) | **GET** /open-api/v3/bill_payments/get_delete_relations/{id} | Retrieves a bill_payments resource. |


## `apiBillPaymentsGetCollection()`

```php
apiBillPaymentsGetCollection($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $bill, $bill2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $note_partial, $note_start_with, $note_end_with): \OpenAPI\Client\Model\ApiBillPaymentsGetCollection200Response
```

Retrieves the collection of bill_payments resources.

Retrieves the collection of bill_payments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$deposit_date_before = 'deposit_date_before_example'; // string | 
$deposit_date_strictly_before = 'deposit_date_strictly_before_example'; // string | 
$deposit_date_after = 'deposit_date_after_example'; // string | 
$deposit_date_strictly_after = 'deposit_date_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$confirmed_at_before = 'confirmed_at_before_example'; // string | 
$confirmed_at_strictly_before = 'confirmed_at_strictly_before_example'; // string | 
$confirmed_at_after = 'confirmed_at_after_example'; // string | 
$confirmed_at_strictly_after = 'confirmed_at_strictly_after_example'; // string | 
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
$ref = 'ref_example'; // string | 
$ref2 = array('ref_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_payments slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_payments slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_payments slug_end_with
$id_partial = 'id_partial_example'; // string | bill_payments id_partial
$id_start_with = 'id_start_with_example'; // string | bill_payments id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_payments id_end_with
$ref_partial = 'ref_partial_example'; // string | bill_payments ref_partial
$ref_start_with = 'ref_start_with_example'; // string | bill_payments ref_start_with
$ref_end_with = 'ref_end_with_example'; // string | bill_payments ref_end_with
$note_partial = 'note_partial_example'; // string | bill_payments note_partial
$note_start_with = 'note_start_with_example'; // string | bill_payments note_start_with
$note_end_with = 'note_end_with_example'; // string | bill_payments note_end_with

try {
    $result = $apiInstance->apiBillPaymentsGetCollection($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $bill, $bill2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $note_partial, $note_start_with, $note_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->apiBillPaymentsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **deposit_date_before** | **string**|  | [optional] |
| **deposit_date_strictly_before** | **string**|  | [optional] |
| **deposit_date_after** | **string**|  | [optional] |
| **deposit_date_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **confirmed_at_before** | **string**|  | [optional] |
| **confirmed_at_strictly_before** | **string**|  | [optional] |
| **confirmed_at_after** | **string**|  | [optional] |
| **confirmed_at_strictly_after** | **string**|  | [optional] |
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
| **ref** | **string**|  | [optional] |
| **ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_payments slug_partial | [optional] |
| **slug_start_with** | **string**| bill_payments slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_payments slug_end_with | [optional] |
| **id_partial** | **string**| bill_payments id_partial | [optional] |
| **id_start_with** | **string**| bill_payments id_start_with | [optional] |
| **id_end_with** | **string**| bill_payments id_end_with | [optional] |
| **ref_partial** | **string**| bill_payments ref_partial | [optional] |
| **ref_start_with** | **string**| bill_payments ref_start_with | [optional] |
| **ref_end_with** | **string**| bill_payments ref_end_with | [optional] |
| **note_partial** | **string**| bill_payments note_partial | [optional] |
| **note_start_with** | **string**| bill_payments note_start_with | [optional] |
| **note_end_with** | **string**| bill_payments note_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillPaymentsGetCollection200Response**](../Model/ApiBillPaymentsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillPaymentsIdDelete()`

```php
apiBillPaymentsIdDelete($id)
```

Removes the bill_payments resource.

Removes the bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier

try {
    $apiInstance->apiBillPaymentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->apiBillPaymentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |

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

## `apiBillPaymentsIdGet()`

```php
apiBillPaymentsIdGet($id): \OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a bill_payments resource.

Retrieves a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier

try {
    $result = $apiInstance->apiBillPaymentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->apiBillPaymentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow**](../Model/BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillPaymentsIdPut()`

```php
apiBillPaymentsIdPut($id, $bill_payments_jsonld_add_post): \OpenAPI\Client\Model\BillPaymentsJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow
```

Replaces the bill_payments resource.

Replaces the bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier
$bill_payments_jsonld_add_post = new \OpenAPI\Client\Model\BillPaymentsJsonldAddPost(); // \OpenAPI\Client\Model\BillPaymentsJsonldAddPost | The updated bill_payments resource

try {
    $result = $apiInstance->apiBillPaymentsIdPut($id, $bill_payments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->apiBillPaymentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |
| **bill_payments_jsonld_add_post** | [**\OpenAPI\Client\Model\BillPaymentsJsonldAddPost**](../Model/BillPaymentsJsonldAddPost.md)| The updated bill_payments resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow**](../Model/BillPaymentsJsonldProductShowIdCustomPropertyTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillPaymentsPost()`

```php
apiBillPaymentsPost($bill_payments_jsonld_add_post): \OpenAPI\Client\Model\BillPaymentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a bill_payments resource.

Creates a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_payments_jsonld_add_post = new \OpenAPI\Client\Model\BillPaymentsJsonldAddPost(); // \OpenAPI\Client\Model\BillPaymentsJsonldAddPost | The new bill_payments resource

try {
    $result = $apiInstance->apiBillPaymentsPost($bill_payments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->apiBillPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_payments_jsonld_add_post** | [**\OpenAPI\Client\Model\BillPaymentsJsonldAddPost**](../Model/BillPaymentsJsonldAddPost.md)| The new bill_payments resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/BillPaymentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentApiCorporationAdd()`

```php
billPaymentApiCorporationAdd($id, $bill_payments_jsonld): \OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_payments resource.

Creates a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier
$bill_payments_jsonld = new \OpenAPI\Client\Model\BillPaymentsJsonld(); // \OpenAPI\Client\Model\BillPaymentsJsonld | The new bill_payments resource

try {
    $result = $apiInstance->billPaymentApiCorporationAdd($id, $bill_payments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |
| **bill_payments_jsonld** | [**\OpenAPI\Client\Model\BillPaymentsJsonld**](../Model/BillPaymentsJsonld.md)| The new bill_payments resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow**](../Model/BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentApiCorporationRemove()`

```php
billPaymentApiCorporationRemove($id, $bill_payments_jsonld): \OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_payments resource.

Creates a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier
$bill_payments_jsonld = new \OpenAPI\Client\Model\BillPaymentsJsonld(); // \OpenAPI\Client\Model\BillPaymentsJsonld | The new bill_payments resource

try {
    $result = $apiInstance->billPaymentApiCorporationRemove($id, $bill_payments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |
| **bill_payments_jsonld** | [**\OpenAPI\Client\Model\BillPaymentsJsonld**](../Model/BillPaymentsJsonld.md)| The new bill_payments resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow**](../Model/BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentApiFileUpload()`

```php
billPaymentApiFileUpload($id, $bill_payments_jsonld): \OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_payments resource.

Creates a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier
$bill_payments_jsonld = new \OpenAPI\Client\Model\BillPaymentsJsonld(); // \OpenAPI\Client\Model\BillPaymentsJsonld | The new bill_payments resource

try {
    $result = $apiInstance->billPaymentApiFileUpload($id, $bill_payments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |
| **bill_payments_jsonld** | [**\OpenAPI\Client\Model\BillPaymentsJsonld**](../Model/BillPaymentsJsonld.md)| The new bill_payments resource | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow**](../Model/BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentDropDown()`

```php
billPaymentDropDown($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $bill, $bill2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $note_partial, $note_start_with, $note_end_with, $amount_range): \OpenAPI\Client\Model\BillPaymentDropDown200Response
```

Retrieves the collection of bill_payments resources.

Retrieves the collection of bill_payments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$deposit_date_before = 'deposit_date_before_example'; // string | 
$deposit_date_strictly_before = 'deposit_date_strictly_before_example'; // string | 
$deposit_date_after = 'deposit_date_after_example'; // string | 
$deposit_date_strictly_after = 'deposit_date_strictly_after_example'; // string | 
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$confirmed_at_before = 'confirmed_at_before_example'; // string | 
$confirmed_at_strictly_before = 'confirmed_at_strictly_before_example'; // string | 
$confirmed_at_after = 'confirmed_at_after_example'; // string | 
$confirmed_at_strictly_after = 'confirmed_at_strictly_after_example'; // string | 
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
$ref = 'ref_example'; // string | 
$ref2 = array('ref_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$search = 'search_example'; // string | 
$amount = 'amount_example'; // string | 
$amount2 = array('amount_example'); // string[] | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_metadata = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_date = 'order_date_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_payments slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_payments slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_payments slug_end_with
$id_partial = 'id_partial_example'; // string | bill_payments id_partial
$id_start_with = 'id_start_with_example'; // string | bill_payments id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_payments id_end_with
$ref_partial = 'ref_partial_example'; // string | bill_payments ref_partial
$ref_start_with = 'ref_start_with_example'; // string | bill_payments ref_start_with
$ref_end_with = 'ref_end_with_example'; // string | bill_payments ref_end_with
$note_partial = 'note_partial_example'; // string | bill_payments note_partial
$note_start_with = 'note_start_with_example'; // string | bill_payments note_start_with
$note_end_with = 'note_end_with_example'; // string | bill_payments note_end_with
$amount_range = 'amount_range_example'; // string | bill_payments amount_range

try {
    $result = $apiInstance->billPaymentDropDown($page, $items_per_page, $deposit_date_before, $deposit_date_strictly_before, $deposit_date_after, $deposit_date_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $confirmed_at_before, $confirmed_at_strictly_before, $confirmed_at_after, $confirmed_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $ref, $ref2, $type, $type2, $bill, $bill2, $search, $amount, $amount2, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_metadata, $properties, $enabled, $tag, $order_id, $order_date, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $ref_partial, $ref_start_with, $ref_end_with, $note_partial, $note_start_with, $note_end_with, $amount_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **deposit_date_before** | **string**|  | [optional] |
| **deposit_date_strictly_before** | **string**|  | [optional] |
| **deposit_date_after** | **string**|  | [optional] |
| **deposit_date_strictly_after** | **string**|  | [optional] |
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **confirmed_at_before** | **string**|  | [optional] |
| **confirmed_at_strictly_before** | **string**|  | [optional] |
| **confirmed_at_after** | **string**|  | [optional] |
| **confirmed_at_strictly_after** | **string**|  | [optional] |
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
| **ref** | **string**|  | [optional] |
| **ref2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **amount** | **string**|  | [optional] |
| **amount2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_metadata** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_payments slug_partial | [optional] |
| **slug_start_with** | **string**| bill_payments slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_payments slug_end_with | [optional] |
| **id_partial** | **string**| bill_payments id_partial | [optional] |
| **id_start_with** | **string**| bill_payments id_start_with | [optional] |
| **id_end_with** | **string**| bill_payments id_end_with | [optional] |
| **ref_partial** | **string**| bill_payments ref_partial | [optional] |
| **ref_start_with** | **string**| bill_payments ref_start_with | [optional] |
| **ref_end_with** | **string**| bill_payments ref_end_with | [optional] |
| **note_partial** | **string**| bill_payments note_partial | [optional] |
| **note_start_with** | **string**| bill_payments note_start_with | [optional] |
| **note_end_with** | **string**| bill_payments note_end_with | [optional] |
| **amount_range** | **string**| bill_payments amount_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillPaymentDropDown200Response**](../Model/BillPaymentDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentDuplicate()`

```php
billPaymentDuplicate($id): \OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingList
```

Retrieves a bill_payments resource.

Retrieves a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier

try {
    $result = $apiInstance->billPaymentDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingList**](../Model/BillPaymentsJsonldBillPaymentShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentFetchFiles()`

```php
billPaymentFetchFiles($id): \OpenAPI\Client\Model\BillPaymentsJsonld
```

Retrieves a bill_payments resource.

Retrieves a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier

try {
    $result = $apiInstance->billPaymentFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonld**](../Model/BillPaymentsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentGetBySlug()`

```php
billPaymentGetBySlug($slug): \OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bill_payments resource.

Retrieves a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bill_payments identifier

try {
    $result = $apiInstance->billPaymentGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bill_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillPaymentsJsonldBillPaymentShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billPaymentGetDeleteRelations()`

```php
billPaymentGetDeleteRelations($id): \OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentRelations
```

Retrieves a bill_payments resource.

Retrieves a bill_payments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_payments identifier

try {
    $result = $apiInstance->billPaymentGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->billPaymentGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_payments identifier | |

### Return type

[**\OpenAPI\Client\Model\BillPaymentsJsonldBillPaymentRelations**](../Model/BillPaymentsJsonldBillPaymentRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
