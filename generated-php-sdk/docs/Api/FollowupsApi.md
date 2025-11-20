# OpenAPI\Client\FollowupsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiFollowupsGetCollection()**](FollowupsApi.md#apiFollowupsGetCollection) | **GET** /open-api/v3/followups | Retrieves the collection of followups resources. |
| [**apiFollowupsIdDelete()**](FollowupsApi.md#apiFollowupsIdDelete) | **DELETE** /open-api/v3/followups/{id} | Removes the followups resource. |
| [**apiFollowupsIdGet()**](FollowupsApi.md#apiFollowupsIdGet) | **GET** /open-api/v3/followups/{id} | Retrieves a followups resource. |
| [**apiFollowupsIdPut()**](FollowupsApi.md#apiFollowupsIdPut) | **PUT** /open-api/v3/followups/{id} | Replaces the followups resource. |
| [**apiFollowupsPost()**](FollowupsApi.md#apiFollowupsPost) | **POST** /open-api/v3/followups | Creates a followups resource. |
| [**followupApiCorporationAdd()**](FollowupsApi.md#followupApiCorporationAdd) | **POST** /open-api/v3/followups/{id}/corporation/add | Creates a followups resource. |
| [**followupApiCorporationRemove()**](FollowupsApi.md#followupApiCorporationRemove) | **POST** /open-api/v3/followups/{id}/corporation/remove | Creates a followups resource. |
| [**followupApiFileUpload()**](FollowupsApi.md#followupApiFileUpload) | **POST** /open-api/v3/followups/{id}/file/upload | Creates a followups resource. |
| [**followupDropDown()**](FollowupsApi.md#followupDropDown) | **GET** /open-api/v3/followups/dropdown/get | Retrieves the collection of followups resources. |
| [**followupDuplicate()**](FollowupsApi.md#followupDuplicate) | **GET** /open-api/v3/followups/duplicate/{id} | Retrieves a followups resource. |
| [**followupFetchFiles()**](FollowupsApi.md#followupFetchFiles) | **GET** /open-api/v3/followups/fetch_files/{id} | Retrieves a followups resource. |
| [**followupGetBySlug()**](FollowupsApi.md#followupGetBySlug) | **GET** /open-api/v3/followups/by_slug/{slug} | Retrieves a followups resource. |
| [**followupGetDeleteRelations()**](FollowupsApi.md#followupGetDeleteRelations) | **GET** /open-api/v3/followups/get_delete_relations/{id} | Retrieves a followups resource. |
| [**followupMetadata()**](FollowupsApi.md#followupMetadata) | **GET** /open-api/v3/followups/metadata/{id} | Retrieves a followups resource. |


## `apiFollowupsGetCollection()`

```php
apiFollowupsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $recall_date_before, $recall_date_strictly_before, $recall_date_after, $recall_date_strictly_after, $id, $id2, $recall_why, $recall_why2, $employee, $employee2, $invoice, $invoice2, $bill, $bill2, $payroll, $payroll2, $person, $person2, $project, $project2, $ancestors, $ancestors2, $ref_followups, $ref_followups2, $recall_employee, $recall_employee2, $recall_method, $recall_method2, $search, $order_id, $order_created_at, $order_updated_at, $order_date, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiFollowupsGetCollection200Response
```

Retrieves the collection of followups resources.

Retrieves the collection of followups resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
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
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$recall_date_before = 'recall_date_before_example'; // string | 
$recall_date_strictly_before = 'recall_date_strictly_before_example'; // string | 
$recall_date_after = 'recall_date_after_example'; // string | 
$recall_date_strictly_after = 'recall_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$recall_why = 'recall_why_example'; // string | 
$recall_why2 = array('recall_why_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$payroll = 'payroll_example'; // string | 
$payroll2 = array('payroll_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$ancestors = 'ancestors_example'; // string | 
$ancestors2 = array('ancestors_example'); // string[] | 
$ref_followups = 'ref_followups_example'; // string | 
$ref_followups2 = array('ref_followups_example'); // string[] | 
$recall_employee = 'recall_employee_example'; // string | 
$recall_employee2 = array('recall_employee_example'); // string[] | 
$recall_method = 'recall_method_example'; // string | 
$recall_method2 = array('recall_method_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date = 'order_date_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | followups slug_partial
$slug_start_with = 'slug_start_with_example'; // string | followups slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | followups slug_end_with
$id_partial = 'id_partial_example'; // string | followups id_partial
$id_start_with = 'id_start_with_example'; // string | followups id_start_with
$id_end_with = 'id_end_with_example'; // string | followups id_end_with

try {
    $result = $apiInstance->apiFollowupsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $recall_date_before, $recall_date_strictly_before, $recall_date_after, $recall_date_strictly_after, $id, $id2, $recall_why, $recall_why2, $employee, $employee2, $invoice, $invoice2, $bill, $bill2, $payroll, $payroll2, $person, $person2, $project, $project2, $ancestors, $ancestors2, $ref_followups, $ref_followups2, $recall_employee, $recall_employee2, $recall_method, $recall_method2, $search, $order_id, $order_created_at, $order_updated_at, $order_date, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->apiFollowupsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **recall_date_before** | **string**|  | [optional] |
| **recall_date_strictly_before** | **string**|  | [optional] |
| **recall_date_after** | **string**|  | [optional] |
| **recall_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **recall_why** | **string**|  | [optional] |
| **recall_why2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payroll** | **string**|  | [optional] |
| **payroll2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ancestors** | **string**|  | [optional] |
| **ancestors2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ref_followups** | **string**|  | [optional] |
| **ref_followups2** | [**string[]**](../Model/string.md)|  | [optional] |
| **recall_employee** | **string**|  | [optional] |
| **recall_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **recall_method** | **string**|  | [optional] |
| **recall_method2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| followups slug_partial | [optional] |
| **slug_start_with** | **string**| followups slug_start_with | [optional] |
| **slug_end_with** | **string**| followups slug_end_with | [optional] |
| **id_partial** | **string**| followups id_partial | [optional] |
| **id_start_with** | **string**| followups id_start_with | [optional] |
| **id_end_with** | **string**| followups id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiFollowupsGetCollection200Response**](../Model/ApiFollowupsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupsIdDelete()`

```php
apiFollowupsIdDelete($id)
```

Removes the followups resource.

Removes the followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier

try {
    $apiInstance->apiFollowupsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->apiFollowupsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |

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

## `apiFollowupsIdGet()`

```php
apiFollowupsIdGet($id): \OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a followups resource.

Retrieves a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier

try {
    $result = $apiInstance->apiFollowupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->apiFollowupsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupsIdPut()`

```php
apiFollowupsIdPut($id, $followups_jsonld_add_post): \OpenAPI\Client\Model\FollowupsJsonldFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the followups resource.

Replaces the followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier
$followups_jsonld_add_post = new \OpenAPI\Client\Model\FollowupsJsonldAddPost(); // \OpenAPI\Client\Model\FollowupsJsonldAddPost | The updated followups resource

try {
    $result = $apiInstance->apiFollowupsIdPut($id, $followups_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->apiFollowupsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |
| **followups_jsonld_add_post** | [**\OpenAPI\Client\Model\FollowupsJsonldAddPost**](../Model/FollowupsJsonldAddPost.md)| The updated followups resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/FollowupsJsonldFollowupShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupsPost()`

```php
apiFollowupsPost($followups_jsonld_add_post): \OpenAPI\Client\Model\FollowupsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a followups resource.

Creates a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$followups_jsonld_add_post = new \OpenAPI\Client\Model\FollowupsJsonldAddPost(); // \OpenAPI\Client\Model\FollowupsJsonldAddPost | The new followups resource

try {
    $result = $apiInstance->apiFollowupsPost($followups_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->apiFollowupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **followups_jsonld_add_post** | [**\OpenAPI\Client\Model\FollowupsJsonldAddPost**](../Model/FollowupsJsonldAddPost.md)| The new followups resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/FollowupsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApiCorporationAdd()`

```php
followupApiCorporationAdd($id, $followups_jsonld): \OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow
```

Creates a followups resource.

Creates a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier
$followups_jsonld = new \OpenAPI\Client\Model\FollowupsJsonld(); // \OpenAPI\Client\Model\FollowupsJsonld | The new followups resource

try {
    $result = $apiInstance->followupApiCorporationAdd($id, $followups_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |
| **followups_jsonld** | [**\OpenAPI\Client\Model\FollowupsJsonld**](../Model/FollowupsJsonld.md)| The new followups resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApiCorporationRemove()`

```php
followupApiCorporationRemove($id, $followups_jsonld): \OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow
```

Creates a followups resource.

Creates a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier
$followups_jsonld = new \OpenAPI\Client\Model\FollowupsJsonld(); // \OpenAPI\Client\Model\FollowupsJsonld | The new followups resource

try {
    $result = $apiInstance->followupApiCorporationRemove($id, $followups_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |
| **followups_jsonld** | [**\OpenAPI\Client\Model\FollowupsJsonld**](../Model/FollowupsJsonld.md)| The new followups resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApiFileUpload()`

```php
followupApiFileUpload($id, $followups_jsonld): \OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow
```

Creates a followups resource.

Creates a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier
$followups_jsonld = new \OpenAPI\Client\Model\FollowupsJsonld(); // \OpenAPI\Client\Model\FollowupsJsonld | The new followups resource

try {
    $result = $apiInstance->followupApiFileUpload($id, $followups_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |
| **followups_jsonld** | [**\OpenAPI\Client\Model\FollowupsJsonld**](../Model/FollowupsJsonld.md)| The new followups resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupsJsonldFollowupShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDropDown()`

```php
followupDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $recall_date_before, $recall_date_strictly_before, $recall_date_after, $recall_date_strictly_after, $id, $id2, $recall_why, $recall_why2, $employee, $employee2, $invoice, $invoice2, $bill, $bill2, $payroll, $payroll2, $person, $person2, $project, $project2, $ancestors, $ancestors2, $ref_followups, $ref_followups2, $recall_employee, $recall_employee2, $recall_method, $recall_method2, $search, $order_id, $order_created_at, $order_updated_at, $order_date, $properties, $enabled, $tag): \OpenAPI\Client\Model\FollowupDropDown200Response
```

Retrieves the collection of followups resources.

Retrieves the collection of followups resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
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
$date_before = 'date_before_example'; // string | 
$date_strictly_before = 'date_strictly_before_example'; // string | 
$date_after = 'date_after_example'; // string | 
$date_strictly_after = 'date_strictly_after_example'; // string | 
$recall_date_before = 'recall_date_before_example'; // string | 
$recall_date_strictly_before = 'recall_date_strictly_before_example'; // string | 
$recall_date_after = 'recall_date_after_example'; // string | 
$recall_date_strictly_after = 'recall_date_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$recall_why = 'recall_why_example'; // string | 
$recall_why2 = array('recall_why_example'); // string[] | 
$employee = 'employee_example'; // string | 
$employee2 = array('employee_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$payroll = 'payroll_example'; // string | 
$payroll2 = array('payroll_example'); // string[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$ancestors = 'ancestors_example'; // string | 
$ancestors2 = array('ancestors_example'); // string[] | 
$ref_followups = 'ref_followups_example'; // string | 
$ref_followups2 = array('ref_followups_example'); // string[] | 
$recall_employee = 'recall_employee_example'; // string | 
$recall_employee2 = array('recall_employee_example'); // string[] | 
$recall_method = 'recall_method_example'; // string | 
$recall_method2 = array('recall_method_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date = 'order_date_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->followupDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_before, $date_strictly_before, $date_after, $date_strictly_after, $recall_date_before, $recall_date_strictly_before, $recall_date_after, $recall_date_strictly_after, $id, $id2, $recall_why, $recall_why2, $employee, $employee2, $invoice, $invoice2, $bill, $bill2, $payroll, $payroll2, $person, $person2, $project, $project2, $ancestors, $ancestors2, $ref_followups, $ref_followups2, $recall_employee, $recall_employee2, $recall_method, $recall_method2, $search, $order_id, $order_created_at, $order_updated_at, $order_date, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_before** | **string**|  | [optional] |
| **date_strictly_before** | **string**|  | [optional] |
| **date_after** | **string**|  | [optional] |
| **date_strictly_after** | **string**|  | [optional] |
| **recall_date_before** | **string**|  | [optional] |
| **recall_date_strictly_before** | **string**|  | [optional] |
| **recall_date_after** | **string**|  | [optional] |
| **recall_date_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **recall_why** | **string**|  | [optional] |
| **recall_why2** | [**string[]**](../Model/string.md)|  | [optional] |
| **employee** | **string**|  | [optional] |
| **employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **payroll** | **string**|  | [optional] |
| **payroll2** | [**string[]**](../Model/string.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ancestors** | **string**|  | [optional] |
| **ancestors2** | [**string[]**](../Model/string.md)|  | [optional] |
| **ref_followups** | **string**|  | [optional] |
| **ref_followups2** | [**string[]**](../Model/string.md)|  | [optional] |
| **recall_employee** | **string**|  | [optional] |
| **recall_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **recall_method** | **string**|  | [optional] |
| **recall_method2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FollowupDropDown200Response**](../Model/FollowupDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDuplicate()`

```php
followupDuplicate($id): \OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingList
```

Retrieves a followups resource.

Retrieves a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier

try {
    $result = $apiInstance->followupDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdTimestampableTagTaggingList**](../Model/FollowupsJsonldFollowupShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupFetchFiles()`

```php
followupFetchFiles($id): \OpenAPI\Client\Model\FollowupsJsonld
```

Retrieves a followups resource.

Retrieves a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier

try {
    $result = $apiInstance->followupFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonld**](../Model/FollowupsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupGetBySlug()`

```php
followupGetBySlug($slug): \OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a followups resource.

Retrieves a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | followups identifier

try {
    $result = $apiInstance->followupGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| followups identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupShowIdCustomPropertyTimestampableTagTaggingList**](../Model/FollowupsJsonldFollowupShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupGetDeleteRelations()`

```php
followupGetDeleteRelations($id): \OpenAPI\Client\Model\FollowupsJsonldFollowupRelations
```

Retrieves a followups resource.

Retrieves a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier

try {
    $result = $apiInstance->followupGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldFollowupRelations**](../Model/FollowupsJsonldFollowupRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupMetadata()`

```php
followupMetadata($id): \OpenAPI\Client\Model\FollowupsJsonldIdStandardMetadataFollowupMetadataTagTaggingListFollowupRelationsTimestampable
```

Retrieves a followups resource.

Retrieves a followups resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followups identifier

try {
    $result = $apiInstance->followupMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupsApi->followupMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followups identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupsJsonldIdStandardMetadataFollowupMetadataTagTaggingListFollowupRelationsTimestampable**](../Model/FollowupsJsonldIdStandardMetadataFollowupMetadataTagTaggingListFollowupRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
