# OpenAPI\Client\BillDistributiontypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillDistributiontypesGetCollection()**](BillDistributiontypesApi.md#apiBillDistributiontypesGetCollection) | **GET** /open-api/v3/bill_distributiontypes | Retrieves the collection of bill_distributiontypes resources. |
| [**apiBillDistributiontypesIdDelete()**](BillDistributiontypesApi.md#apiBillDistributiontypesIdDelete) | **DELETE** /open-api/v3/bill_distributiontypes/{id} | Removes the bill_distributiontypes resource. |
| [**apiBillDistributiontypesIdGet()**](BillDistributiontypesApi.md#apiBillDistributiontypesIdGet) | **GET** /open-api/v3/bill_distributiontypes/{id} | Retrieves a bill_distributiontypes resource. |
| [**apiBillDistributiontypesIdPut()**](BillDistributiontypesApi.md#apiBillDistributiontypesIdPut) | **PUT** /open-api/v3/bill_distributiontypes/{id} | Replaces the bill_distributiontypes resource. |
| [**apiBillDistributiontypesPost()**](BillDistributiontypesApi.md#apiBillDistributiontypesPost) | **POST** /open-api/v3/bill_distributiontypes | Creates a bill_distributiontypes resource. |
| [**billDistributionTypeApiFileUpload()**](BillDistributiontypesApi.md#billDistributionTypeApiFileUpload) | **POST** /open-api/v3/bill_distributiontypes/{id}/file/upload | Creates a bill_distributiontypes resource. |
| [**billDistributionTypeDropDown()**](BillDistributiontypesApi.md#billDistributionTypeDropDown) | **GET** /open-api/v3/bill_distributiontypes/dropdown/get | Retrieves the collection of bill_distributiontypes resources. |
| [**billDistributionTypeDuplicate()**](BillDistributiontypesApi.md#billDistributionTypeDuplicate) | **GET** /open-api/v3/bill_distributiontypes/duplicate/{id} | Retrieves a bill_distributiontypes resource. |
| [**billDistributionTypeFetchFiles()**](BillDistributiontypesApi.md#billDistributionTypeFetchFiles) | **GET** /open-api/v3/bill_distributiontypes/fetch_files/{id} | Retrieves a bill_distributiontypes resource. |
| [**billDistributionTypeGetBySlug()**](BillDistributiontypesApi.md#billDistributionTypeGetBySlug) | **GET** /open-api/v3/bill_distributiontypes/by_slug/{slug} | Retrieves a bill_distributiontypes resource. |
| [**billDistributionTypeGetDeleteRelations()**](BillDistributiontypesApi.md#billDistributionTypeGetDeleteRelations) | **GET** /open-api/v3/bill_distributiontypes/get_delete_relations/{id} | Retrieves a bill_distributiontypes resource. |
| [**billDistributionTypeMetadata()**](BillDistributiontypesApi.md#billDistributionTypeMetadata) | **GET** /open-api/v3/bill_distributiontypes/metadata/{id} | Retrieves a bill_distributiontypes resource. |


## `apiBillDistributiontypesGetCollection()`

```php
apiBillDistributiontypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ApiBillDistributiontypesGetCollection200Response
```

Retrieves the collection of bill_distributiontypes resources.

Retrieves the collection of bill_distributiontypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$slug_partial = 'slug_partial_example'; // string | bill_distributiontypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_distributiontypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_distributiontypes slug_end_with
$id_partial = 'id_partial_example'; // string | bill_distributiontypes id_partial
$id_start_with = 'id_start_with_example'; // string | bill_distributiontypes id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_distributiontypes id_end_with
$number_partial = 'number_partial_example'; // string | bill_distributiontypes number_partial
$number_start_with = 'number_start_with_example'; // string | bill_distributiontypes number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_distributiontypes number_end_with
$color_partial = 'color_partial_example'; // string | bill_distributiontypes color_partial
$color_start_with = 'color_start_with_example'; // string | bill_distributiontypes color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_distributiontypes color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_distributiontypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_distributiontypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_distributiontypes icon_end_with
$priority_range = 'priority_range_example'; // string | bill_distributiontypes priority_range

try {
    $result = $apiInstance->apiBillDistributiontypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->apiBillDistributiontypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **slug_partial** | **string**| bill_distributiontypes slug_partial | [optional] |
| **slug_start_with** | **string**| bill_distributiontypes slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_distributiontypes slug_end_with | [optional] |
| **id_partial** | **string**| bill_distributiontypes id_partial | [optional] |
| **id_start_with** | **string**| bill_distributiontypes id_start_with | [optional] |
| **id_end_with** | **string**| bill_distributiontypes id_end_with | [optional] |
| **number_partial** | **string**| bill_distributiontypes number_partial | [optional] |
| **number_start_with** | **string**| bill_distributiontypes number_start_with | [optional] |
| **number_end_with** | **string**| bill_distributiontypes number_end_with | [optional] |
| **color_partial** | **string**| bill_distributiontypes color_partial | [optional] |
| **color_start_with** | **string**| bill_distributiontypes color_start_with | [optional] |
| **color_end_with** | **string**| bill_distributiontypes color_end_with | [optional] |
| **icon_partial** | **string**| bill_distributiontypes icon_partial | [optional] |
| **icon_start_with** | **string**| bill_distributiontypes icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_distributiontypes icon_end_with | [optional] |
| **priority_range** | **string**| bill_distributiontypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillDistributiontypesGetCollection200Response**](../Model/ApiBillDistributiontypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillDistributiontypesIdDelete()`

```php
apiBillDistributiontypesIdDelete($id)
```

Removes the bill_distributiontypes resource.

Removes the bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier

try {
    $apiInstance->apiBillDistributiontypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->apiBillDistributiontypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |

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

## `apiBillDistributiontypesIdGet()`

```php
apiBillDistributiontypesIdGet($id): \OpenAPI\Client\Model\BillDistributiontypesJsonldStandardShowBillDistributionTypeShowIdTimestampableTagTaggingList
```

Retrieves a bill_distributiontypes resource.

Retrieves a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier

try {
    $result = $apiInstance->apiBillDistributiontypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->apiBillDistributiontypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldStandardShowBillDistributionTypeShowIdTimestampableTagTaggingList**](../Model/BillDistributiontypesJsonldStandardShowBillDistributionTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillDistributiontypesIdPut()`

```php
apiBillDistributiontypesIdPut($id, $bill_distributiontypes_jsonld_post): \OpenAPI\Client\Model\BillDistributiontypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the bill_distributiontypes resource.

Replaces the bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier
$bill_distributiontypes_jsonld_post = new \OpenAPI\Client\Model\BillDistributiontypesJsonldPost(); // \OpenAPI\Client\Model\BillDistributiontypesJsonldPost | The updated bill_distributiontypes resource

try {
    $result = $apiInstance->apiBillDistributiontypesIdPut($id, $bill_distributiontypes_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->apiBillDistributiontypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |
| **bill_distributiontypes_jsonld_post** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonldPost**](../Model/BillDistributiontypesJsonldPost.md)| The updated bill_distributiontypes resource | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/BillDistributiontypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillDistributiontypesPost()`

```php
apiBillDistributiontypesPost($bill_distributiontypes_jsonld_add_post): \OpenAPI\Client\Model\BillDistributiontypesJsonldStandardShowBillDistributionTypeShowIdTimestampableTagTaggingList
```

Creates a bill_distributiontypes resource.

Creates a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_distributiontypes_jsonld_add_post = new \OpenAPI\Client\Model\BillDistributiontypesJsonldAddPost(); // \OpenAPI\Client\Model\BillDistributiontypesJsonldAddPost | The new bill_distributiontypes resource

try {
    $result = $apiInstance->apiBillDistributiontypesPost($bill_distributiontypes_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->apiBillDistributiontypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_distributiontypes_jsonld_add_post** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonldAddPost**](../Model/BillDistributiontypesJsonldAddPost.md)| The new bill_distributiontypes resource | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldStandardShowBillDistributionTypeShowIdTimestampableTagTaggingList**](../Model/BillDistributiontypesJsonldStandardShowBillDistributionTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDistributionTypeApiFileUpload()`

```php
billDistributionTypeApiFileUpload($id, $bill_distributiontypes_jsonld): \OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_distributiontypes resource.

Creates a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier
$bill_distributiontypes_jsonld = new \OpenAPI\Client\Model\BillDistributiontypesJsonld(); // \OpenAPI\Client\Model\BillDistributiontypesJsonld | The new bill_distributiontypes resource

try {
    $result = $apiInstance->billDistributionTypeApiFileUpload($id, $bill_distributiontypes_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->billDistributionTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |
| **bill_distributiontypes_jsonld** | [**\OpenAPI\Client\Model\BillDistributiontypesJsonld**](../Model/BillDistributiontypesJsonld.md)| The new bill_distributiontypes resource | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/BillDistributiontypesJsonldBillDistributionTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDistributionTypeDropDown()`

```php
billDistributionTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\BillDistributionTypeDropDown200Response
```

Retrieves the collection of bill_distributiontypes resources.

Retrieves the collection of bill_distributiontypes resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
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
$number = 'number_example'; // string | 
$number2 = array('number_example'); // string[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_disabled_at = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$slug_partial = 'slug_partial_example'; // string | bill_distributiontypes slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_distributiontypes slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_distributiontypes slug_end_with
$id_partial = 'id_partial_example'; // string | bill_distributiontypes id_partial
$id_start_with = 'id_start_with_example'; // string | bill_distributiontypes id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_distributiontypes id_end_with
$number_partial = 'number_partial_example'; // string | bill_distributiontypes number_partial
$number_start_with = 'number_start_with_example'; // string | bill_distributiontypes number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_distributiontypes number_end_with
$color_partial = 'color_partial_example'; // string | bill_distributiontypes color_partial
$color_start_with = 'color_start_with_example'; // string | bill_distributiontypes color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_distributiontypes color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_distributiontypes icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_distributiontypes icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_distributiontypes icon_end_with
$priority_range = 'priority_range_example'; // string | bill_distributiontypes priority_range

try {
    $result = $apiInstance->billDistributionTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->billDistributionTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **number** | **string**|  | [optional] |
| **number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_disabled_at** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **slug_partial** | **string**| bill_distributiontypes slug_partial | [optional] |
| **slug_start_with** | **string**| bill_distributiontypes slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_distributiontypes slug_end_with | [optional] |
| **id_partial** | **string**| bill_distributiontypes id_partial | [optional] |
| **id_start_with** | **string**| bill_distributiontypes id_start_with | [optional] |
| **id_end_with** | **string**| bill_distributiontypes id_end_with | [optional] |
| **number_partial** | **string**| bill_distributiontypes number_partial | [optional] |
| **number_start_with** | **string**| bill_distributiontypes number_start_with | [optional] |
| **number_end_with** | **string**| bill_distributiontypes number_end_with | [optional] |
| **color_partial** | **string**| bill_distributiontypes color_partial | [optional] |
| **color_start_with** | **string**| bill_distributiontypes color_start_with | [optional] |
| **color_end_with** | **string**| bill_distributiontypes color_end_with | [optional] |
| **icon_partial** | **string**| bill_distributiontypes icon_partial | [optional] |
| **icon_start_with** | **string**| bill_distributiontypes icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_distributiontypes icon_end_with | [optional] |
| **priority_range** | **string**| bill_distributiontypes priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillDistributionTypeDropDown200Response**](../Model/BillDistributionTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDistributionTypeDuplicate()`

```php
billDistributionTypeDuplicate($id): \OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeShowIdTimestampableTagTaggingList
```

Retrieves a bill_distributiontypes resource.

Retrieves a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier

try {
    $result = $apiInstance->billDistributionTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->billDistributionTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeShowIdTimestampableTagTaggingList**](../Model/BillDistributiontypesJsonldBillDistributionTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDistributionTypeFetchFiles()`

```php
billDistributionTypeFetchFiles($id): \OpenAPI\Client\Model\BillDistributiontypesJsonld
```

Retrieves a bill_distributiontypes resource.

Retrieves a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier

try {
    $result = $apiInstance->billDistributionTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->billDistributionTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonld**](../Model/BillDistributiontypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDistributionTypeGetBySlug()`

```php
billDistributionTypeGetBySlug($slug): \OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bill_distributiontypes resource.

Retrieves a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bill_distributiontypes identifier

try {
    $result = $apiInstance->billDistributionTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->billDistributionTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bill_distributiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillDistributiontypesJsonldBillDistributionTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDistributionTypeGetDeleteRelations()`

```php
billDistributionTypeGetDeleteRelations($id): \OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeRelations
```

Retrieves a bill_distributiontypes resource.

Retrieves a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier

try {
    $result = $apiInstance->billDistributionTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->billDistributionTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldBillDistributionTypeRelations**](../Model/BillDistributiontypesJsonldBillDistributionTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billDistributionTypeMetadata()`

```php
billDistributionTypeMetadata($id): \OpenAPI\Client\Model\BillDistributiontypesJsonldIdStandardMetadataBillDistributionTypeMetadataTagTaggingListBillDistributionTypeRelationsTimestampable
```

Retrieves a bill_distributiontypes resource.

Retrieves a bill_distributiontypes resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillDistributiontypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_distributiontypes identifier

try {
    $result = $apiInstance->billDistributionTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillDistributiontypesApi->billDistributionTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_distributiontypes identifier | |

### Return type

[**\OpenAPI\Client\Model\BillDistributiontypesJsonldIdStandardMetadataBillDistributionTypeMetadataTagTaggingListBillDistributionTypeRelationsTimestampable**](../Model/BillDistributiontypesJsonldIdStandardMetadataBillDistributionTypeMetadataTagTaggingListBillDistributionTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
