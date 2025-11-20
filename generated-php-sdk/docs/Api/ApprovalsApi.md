# OpenAPI\Client\ApprovalsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiApprovalsGetCollection()**](ApprovalsApi.md#apiApprovalsGetCollection) | **GET** /open-api/v3/approvals | Retrieves the collection of approvals resources. |
| [**apiApprovalsIdDelete()**](ApprovalsApi.md#apiApprovalsIdDelete) | **DELETE** /open-api/v3/approvals/{id} | Removes the approvals resource. |
| [**apiApprovalsIdGet()**](ApprovalsApi.md#apiApprovalsIdGet) | **GET** /open-api/v3/approvals/{id} | Retrieves a approvals resource. |
| [**apiApprovalsIdPut()**](ApprovalsApi.md#apiApprovalsIdPut) | **PUT** /open-api/v3/approvals/{id} | Replaces the approvals resource. |
| [**apiApprovalsPost()**](ApprovalsApi.md#apiApprovalsPost) | **POST** /open-api/v3/approvals | Creates a approvals resource. |
| [**followupApprovalApiCorporationAdd()**](ApprovalsApi.md#followupApprovalApiCorporationAdd) | **POST** /open-api/v3/approvals/{id}/corporation/add | Creates a approvals resource. |
| [**followupApprovalApiCorporationRemove()**](ApprovalsApi.md#followupApprovalApiCorporationRemove) | **POST** /open-api/v3/approvals/{id}/corporation/remove | Creates a approvals resource. |
| [**followupApprovalApiFileUpload()**](ApprovalsApi.md#followupApprovalApiFileUpload) | **POST** /open-api/v3/approvals/{id}/file/upload | Creates a approvals resource. |
| [**followupApprovalDropDown()**](ApprovalsApi.md#followupApprovalDropDown) | **GET** /open-api/v3/approvals/dropdown/get | Retrieves the collection of approvals resources. |
| [**followupApprovalDuplicate()**](ApprovalsApi.md#followupApprovalDuplicate) | **GET** /open-api/v3/approvals/duplicate/{id} | Retrieves a approvals resource. |
| [**followupApprovalFetchFiles()**](ApprovalsApi.md#followupApprovalFetchFiles) | **GET** /open-api/v3/approvals/fetch_files/{id} | Retrieves a approvals resource. |
| [**followupApprovalGetBySlug()**](ApprovalsApi.md#followupApprovalGetBySlug) | **GET** /open-api/v3/approvals/by_slug/{slug} | Retrieves a approvals resource. |
| [**followupApprovalGetDeleteRelations()**](ApprovalsApi.md#followupApprovalGetDeleteRelations) | **GET** /open-api/v3/approvals/get_delete_relations/{id} | Retrieves a approvals resource. |
| [**followupApprovalMetadata()**](ApprovalsApi.md#followupApprovalMetadata) | **GET** /open-api/v3/approvals/metadata/{id} | Retrieves a approvals resource. |


## `apiApprovalsGetCollection()`

```php
apiApprovalsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $person, $person2, $row_id, $row_id2, $ref_table, $ref_table2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $search, $properties, $enabled, $tag, $approved, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiApprovalsGetCollection200Response
```

Retrieves the collection of approvals resources.

Retrieves the collection of approvals resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
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
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$approved = True; // bool | 
$slug_partial = 'slug_partial_example'; // string | approvals slug_partial
$slug_start_with = 'slug_start_with_example'; // string | approvals slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | approvals slug_end_with
$id_partial = 'id_partial_example'; // string | approvals id_partial
$id_start_with = 'id_start_with_example'; // string | approvals id_start_with
$id_end_with = 'id_end_with_example'; // string | approvals id_end_with

try {
    $result = $apiInstance->apiApprovalsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $person, $person2, $row_id, $row_id2, $ref_table, $ref_table2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $search, $properties, $enabled, $tag, $approved, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->apiApprovalsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **approved** | **bool**|  | [optional] |
| **slug_partial** | **string**| approvals slug_partial | [optional] |
| **slug_start_with** | **string**| approvals slug_start_with | [optional] |
| **slug_end_with** | **string**| approvals slug_end_with | [optional] |
| **id_partial** | **string**| approvals id_partial | [optional] |
| **id_start_with** | **string**| approvals id_start_with | [optional] |
| **id_end_with** | **string**| approvals id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiApprovalsGetCollection200Response**](../Model/ApiApprovalsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApprovalsIdDelete()`

```php
apiApprovalsIdDelete($id)
```

Removes the approvals resource.

Removes the approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier

try {
    $apiInstance->apiApprovalsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->apiApprovalsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |

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

## `apiApprovalsIdGet()`

```php
apiApprovalsIdGet($id): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a approvals resource.

Retrieves a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier

try {
    $result = $apiInstance->apiApprovalsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->apiApprovalsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow**](../Model/ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApprovalsIdPut()`

```php
apiApprovalsIdPut($id, $approvals_jsonld_add_post): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList
```

Replaces the approvals resource.

Replaces the approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier
$approvals_jsonld_add_post = new \OpenAPI\Client\Model\ApprovalsJsonldAddPost(); // \OpenAPI\Client\Model\ApprovalsJsonldAddPost | The updated approvals resource

try {
    $result = $apiInstance->apiApprovalsIdPut($id, $approvals_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->apiApprovalsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |
| **approvals_jsonld_add_post** | [**\OpenAPI\Client\Model\ApprovalsJsonldAddPost**](../Model/ApprovalsJsonldAddPost.md)| The updated approvals resource | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList**](../Model/ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApprovalsPost()`

```php
apiApprovalsPost($approvals_jsonld_add_post): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow
```

Creates a approvals resource.

Creates a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$approvals_jsonld_add_post = new \OpenAPI\Client\Model\ApprovalsJsonldAddPost(); // \OpenAPI\Client\Model\ApprovalsJsonldAddPost | The new approvals resource

try {
    $result = $apiInstance->apiApprovalsPost($approvals_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->apiApprovalsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **approvals_jsonld_add_post** | [**\OpenAPI\Client\Model\ApprovalsJsonldAddPost**](../Model/ApprovalsJsonldAddPost.md)| The new approvals resource | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow**](../Model/ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalApiCorporationAdd()`

```php
followupApprovalApiCorporationAdd($id, $approvals_jsonld): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow
```

Creates a approvals resource.

Creates a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier
$approvals_jsonld = new \OpenAPI\Client\Model\ApprovalsJsonld(); // \OpenAPI\Client\Model\ApprovalsJsonld | The new approvals resource

try {
    $result = $apiInstance->followupApprovalApiCorporationAdd($id, $approvals_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |
| **approvals_jsonld** | [**\OpenAPI\Client\Model\ApprovalsJsonld**](../Model/ApprovalsJsonld.md)| The new approvals resource | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow**](../Model/ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalApiCorporationRemove()`

```php
followupApprovalApiCorporationRemove($id, $approvals_jsonld): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList
```

Creates a approvals resource.

Creates a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier
$approvals_jsonld = new \OpenAPI\Client\Model\ApprovalsJsonld(); // \OpenAPI\Client\Model\ApprovalsJsonld | The new approvals resource

try {
    $result = $apiInstance->followupApprovalApiCorporationRemove($id, $approvals_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |
| **approvals_jsonld** | [**\OpenAPI\Client\Model\ApprovalsJsonld**](../Model/ApprovalsJsonld.md)| The new approvals resource | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList**](../Model/ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalApiFileUpload()`

```php
followupApprovalApiFileUpload($id, $approvals_jsonld): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow
```

Creates a approvals resource.

Creates a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier
$approvals_jsonld = new \OpenAPI\Client\Model\ApprovalsJsonld(); // \OpenAPI\Client\Model\ApprovalsJsonld | The new approvals resource

try {
    $result = $apiInstance->followupApprovalApiFileUpload($id, $approvals_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |
| **approvals_jsonld** | [**\OpenAPI\Client\Model\ApprovalsJsonld**](../Model/ApprovalsJsonld.md)| The new approvals resource | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow**](../Model/ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalDropDown()`

```php
followupApprovalDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $person, $person2, $row_id, $row_id2, $ref_table, $ref_table2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $search, $properties, $enabled, $tag, $approved): \OpenAPI\Client\Model\FollowupApprovalDropDown200Response
```

Retrieves the collection of approvals resources.

Retrieves the collection of approvals resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
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
$timestamp_before = 'timestamp_before_example'; // string | 
$timestamp_strictly_before = 'timestamp_strictly_before_example'; // string | 
$timestamp_after = 'timestamp_after_example'; // string | 
$timestamp_strictly_after = 'timestamp_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$person = 'person_example'; // string | 
$person2 = array('person_example'); // string[] | 
$row_id = 56; // int | 
$row_id2 = array(56); // int[] | 
$ref_table = 'ref_table_example'; // string | 
$ref_table2 = array('ref_table_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$approved = True; // bool | 

try {
    $result = $apiInstance->followupApprovalDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $timestamp_before, $timestamp_strictly_before, $timestamp_after, $timestamp_strictly_after, $id, $id2, $person, $person2, $row_id, $row_id2, $ref_table, $ref_table2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $search, $properties, $enabled, $tag, $approved);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalDropDown: ', $e->getMessage(), PHP_EOL;
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
| **timestamp_before** | **string**|  | [optional] |
| **timestamp_strictly_before** | **string**|  | [optional] |
| **timestamp_after** | **string**|  | [optional] |
| **timestamp_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **person** | **string**|  | [optional] |
| **person2** | [**string[]**](../Model/string.md)|  | [optional] |
| **row_id** | **int**|  | [optional] |
| **row_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **ref_table** | **string**|  | [optional] |
| **ref_table2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **approved** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FollowupApprovalDropDown200Response**](../Model/FollowupApprovalDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalDuplicate()`

```php
followupApprovalDuplicate($id): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList
```

Retrieves a approvals resource.

Retrieves a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier

try {
    $result = $apiInstance->followupApprovalDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList**](../Model/ApprovalsJsonldFollowupApprovalShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalFetchFiles()`

```php
followupApprovalFetchFiles($id): \OpenAPI\Client\Model\ApprovalsJsonld
```

Retrieves a approvals resource.

Retrieves a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier

try {
    $result = $apiInstance->followupApprovalFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonld**](../Model/ApprovalsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalGetBySlug()`

```php
followupApprovalGetBySlug($slug): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a approvals resource.

Retrieves a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | approvals identifier

try {
    $result = $apiInstance->followupApprovalGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| approvals identifier | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ApprovalsJsonldFollowupApprovalShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalGetDeleteRelations()`

```php
followupApprovalGetDeleteRelations($id): \OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalRelations
```

Retrieves a approvals resource.

Retrieves a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier

try {
    $result = $apiInstance->followupApprovalGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldFollowupApprovalRelations**](../Model/ApprovalsJsonldFollowupApprovalRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupApprovalMetadata()`

```php
followupApprovalMetadata($id): \OpenAPI\Client\Model\ApprovalsJsonldIdStandardMetadataFollowupApprovalMetadataTagTaggingListFollowupApprovalRelationsTimestampable
```

Retrieves a approvals resource.

Retrieves a approvals resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | approvals identifier

try {
    $result = $apiInstance->followupApprovalMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->followupApprovalMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| approvals identifier | |

### Return type

[**\OpenAPI\Client\Model\ApprovalsJsonldIdStandardMetadataFollowupApprovalMetadataTagTaggingListFollowupApprovalRelationsTimestampable**](../Model/ApprovalsJsonldIdStandardMetadataFollowupApprovalMetadataTagTaggingListFollowupApprovalRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
