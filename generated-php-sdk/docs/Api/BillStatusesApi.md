# OpenAPI\Client\BillStatusesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillStatusesGetCollection()**](BillStatusesApi.md#apiBillStatusesGetCollection) | **GET** /open-api/v3/bill_statuses | Retrieves the collection of bill_statuses resources. |
| [**apiBillStatusesIdDelete()**](BillStatusesApi.md#apiBillStatusesIdDelete) | **DELETE** /open-api/v3/bill_statuses/{id} | Removes the bill_statuses resource. |
| [**apiBillStatusesIdGet()**](BillStatusesApi.md#apiBillStatusesIdGet) | **GET** /open-api/v3/bill_statuses/{id} | Retrieves a bill_statuses resource. |
| [**apiBillStatusesIdPut()**](BillStatusesApi.md#apiBillStatusesIdPut) | **PUT** /open-api/v3/bill_statuses/{id} | Replaces the bill_statuses resource. |
| [**apiBillStatusesPost()**](BillStatusesApi.md#apiBillStatusesPost) | **POST** /open-api/v3/bill_statuses | Creates a bill_statuses resource. |
| [**billStatusApiFileUpload()**](BillStatusesApi.md#billStatusApiFileUpload) | **POST** /open-api/v3/bill_statuses/{id}/file/upload | Creates a bill_statuses resource. |
| [**billStatusDropDown()**](BillStatusesApi.md#billStatusDropDown) | **GET** /open-api/v3/bill_statuses/dropdown/get | Retrieves the collection of bill_statuses resources. |
| [**billStatusDuplicate()**](BillStatusesApi.md#billStatusDuplicate) | **GET** /open-api/v3/bill_statuses/duplicate/{id} | Retrieves a bill_statuses resource. |
| [**billStatusFetchFiles()**](BillStatusesApi.md#billStatusFetchFiles) | **GET** /open-api/v3/bill_statuses/fetch_files/{id} | Retrieves a bill_statuses resource. |
| [**billStatusGetBySlug()**](BillStatusesApi.md#billStatusGetBySlug) | **GET** /open-api/v3/bill_statuses/by_slug/{slug} | Retrieves a bill_statuses resource. |
| [**billStatusGetDeleteRelations()**](BillStatusesApi.md#billStatusGetDeleteRelations) | **GET** /open-api/v3/bill_statuses/get_delete_relations/{id} | Retrieves a bill_statuses resource. |
| [**billStatusMetadata()**](BillStatusesApi.md#billStatusMetadata) | **GET** /open-api/v3/bill_statuses/metadata/{id} | Retrieves a bill_statuses resource. |


## `apiBillStatusesGetCollection()`

```php
apiBillStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\ApiBillStatusesGetCollection200Response
```

Retrieves the collection of bill_statuses resources.

Retrieves the collection of bill_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
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
$accountable = True; // bool | 
$impacting_inventory = True; // bool | 
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
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | bill_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | bill_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_statuses id_end_with
$number_partial = 'number_partial_example'; // string | bill_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | bill_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_statuses number_end_with
$color_partial = 'color_partial_example'; // string | bill_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | bill_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_statuses icon_end_with
$priority_range = 'priority_range_example'; // string | bill_statuses priority_range

try {
    $result = $apiInstance->apiBillStatusesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->apiBillStatusesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **accountable** | **bool**|  | [optional] |
| **impacting_inventory** | **bool**|  | [optional] |
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
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| bill_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_statuses slug_end_with | [optional] |
| **id_partial** | **string**| bill_statuses id_partial | [optional] |
| **id_start_with** | **string**| bill_statuses id_start_with | [optional] |
| **id_end_with** | **string**| bill_statuses id_end_with | [optional] |
| **number_partial** | **string**| bill_statuses number_partial | [optional] |
| **number_start_with** | **string**| bill_statuses number_start_with | [optional] |
| **number_end_with** | **string**| bill_statuses number_end_with | [optional] |
| **color_partial** | **string**| bill_statuses color_partial | [optional] |
| **color_start_with** | **string**| bill_statuses color_start_with | [optional] |
| **color_end_with** | **string**| bill_statuses color_end_with | [optional] |
| **icon_partial** | **string**| bill_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| bill_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_statuses icon_end_with | [optional] |
| **priority_range** | **string**| bill_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillStatusesGetCollection200Response**](../Model/ApiBillStatusesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillStatusesIdDelete()`

```php
apiBillStatusesIdDelete($id)
```

Removes the bill_statuses resource.

Removes the bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier

try {
    $apiInstance->apiBillStatusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->apiBillStatusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |

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

## `apiBillStatusesIdGet()`

```php
apiBillStatusesIdGet($id): \OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a bill_statuses resource.

Retrieves a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier

try {
    $result = $apiInstance->apiBillStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->apiBillStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingListStandardShow**](../Model/BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillStatusesIdPut()`

```php
apiBillStatusesIdPut($id, $bill_statuses_jsonld_post): \OpenAPI\Client\Model\BillStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the bill_statuses resource.

Replaces the bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier
$bill_statuses_jsonld_post = new \OpenAPI\Client\Model\BillStatusesJsonldPost(); // \OpenAPI\Client\Model\BillStatusesJsonldPost | The updated bill_statuses resource

try {
    $result = $apiInstance->apiBillStatusesIdPut($id, $bill_statuses_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->apiBillStatusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |
| **bill_statuses_jsonld_post** | [**\OpenAPI\Client\Model\BillStatusesJsonldPost**](../Model/BillStatusesJsonldPost.md)| The updated bill_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/BillStatusesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillStatusesPost()`

```php
apiBillStatusesPost($bill_statuses_jsonld_add_post): \OpenAPI\Client\Model\BillStatusesJsonld
```

Creates a bill_statuses resource.

Creates a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_statuses_jsonld_add_post = new \OpenAPI\Client\Model\BillStatusesJsonldAddPost(); // \OpenAPI\Client\Model\BillStatusesJsonldAddPost | The new bill_statuses resource

try {
    $result = $apiInstance->apiBillStatusesPost($bill_statuses_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->apiBillStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_statuses_jsonld_add_post** | [**\OpenAPI\Client\Model\BillStatusesJsonldAddPost**](../Model/BillStatusesJsonldAddPost.md)| The new bill_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonld**](../Model/BillStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billStatusApiFileUpload()`

```php
billStatusApiFileUpload($id, $bill_statuses_jsonld): \OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_statuses resource.

Creates a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier
$bill_statuses_jsonld = new \OpenAPI\Client\Model\BillStatusesJsonld(); // \OpenAPI\Client\Model\BillStatusesJsonld | The new bill_statuses resource

try {
    $result = $apiInstance->billStatusApiFileUpload($id, $bill_statuses_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->billStatusApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |
| **bill_statuses_jsonld** | [**\OpenAPI\Client\Model\BillStatusesJsonld**](../Model/BillStatusesJsonld.md)| The new bill_statuses resource | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingListStandardShow**](../Model/BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billStatusDropDown()`

```php
billStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\BillStatusDropDown200Response
```

Retrieves the collection of bill_statuses resources.

Retrieves the collection of bill_statuses resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
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
$accountable = True; // bool | 
$impacting_inventory = True; // bool | 
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
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_slug = 'order_slug_example'; // string | 
$order_priority = 'order_priority_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | bill_statuses slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_statuses slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_statuses slug_end_with
$id_partial = 'id_partial_example'; // string | bill_statuses id_partial
$id_start_with = 'id_start_with_example'; // string | bill_statuses id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_statuses id_end_with
$number_partial = 'number_partial_example'; // string | bill_statuses number_partial
$number_start_with = 'number_start_with_example'; // string | bill_statuses number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_statuses number_end_with
$color_partial = 'color_partial_example'; // string | bill_statuses color_partial
$color_start_with = 'color_start_with_example'; // string | bill_statuses color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_statuses color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_statuses icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_statuses icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_statuses icon_end_with
$priority_range = 'priority_range_example'; // string | bill_statuses priority_range

try {
    $result = $apiInstance->billStatusDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_disabled_at, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->billStatusDropDown: ', $e->getMessage(), PHP_EOL;
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
| **accountable** | **bool**|  | [optional] |
| **impacting_inventory** | **bool**|  | [optional] |
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
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_slug** | **string**|  | [optional] |
| **order_priority** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| bill_statuses slug_partial | [optional] |
| **slug_start_with** | **string**| bill_statuses slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_statuses slug_end_with | [optional] |
| **id_partial** | **string**| bill_statuses id_partial | [optional] |
| **id_start_with** | **string**| bill_statuses id_start_with | [optional] |
| **id_end_with** | **string**| bill_statuses id_end_with | [optional] |
| **number_partial** | **string**| bill_statuses number_partial | [optional] |
| **number_start_with** | **string**| bill_statuses number_start_with | [optional] |
| **number_end_with** | **string**| bill_statuses number_end_with | [optional] |
| **color_partial** | **string**| bill_statuses color_partial | [optional] |
| **color_start_with** | **string**| bill_statuses color_start_with | [optional] |
| **color_end_with** | **string**| bill_statuses color_end_with | [optional] |
| **icon_partial** | **string**| bill_statuses icon_partial | [optional] |
| **icon_start_with** | **string**| bill_statuses icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_statuses icon_end_with | [optional] |
| **priority_range** | **string**| bill_statuses priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillStatusDropDown200Response**](../Model/BillStatusDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billStatusDuplicate()`

```php
billStatusDuplicate($id): \OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingList
```

Retrieves a bill_statuses resource.

Retrieves a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier

try {
    $result = $apiInstance->billStatusDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->billStatusDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingList**](../Model/BillStatusesJsonldBillStatusShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billStatusFetchFiles()`

```php
billStatusFetchFiles($id): \OpenAPI\Client\Model\BillStatusesJsonld
```

Retrieves a bill_statuses resource.

Retrieves a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier

try {
    $result = $apiInstance->billStatusFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->billStatusFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonld**](../Model/BillStatusesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billStatusGetBySlug()`

```php
billStatusGetBySlug($slug): \OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowStandardShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bill_statuses resource.

Retrieves a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bill_statuses identifier

try {
    $result = $apiInstance->billStatusGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->billStatusGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bill_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonldBillStatusShowStandardShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillStatusesJsonldBillStatusShowStandardShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billStatusGetDeleteRelations()`

```php
billStatusGetDeleteRelations($id): \OpenAPI\Client\Model\BillStatusesJsonldBillStatusRelations
```

Retrieves a bill_statuses resource.

Retrieves a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier

try {
    $result = $apiInstance->billStatusGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->billStatusGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonldBillStatusRelations**](../Model/BillStatusesJsonldBillStatusRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billStatusMetadata()`

```php
billStatusMetadata($id): \OpenAPI\Client\Model\BillStatusesJsonldIdStandardMetadataBillStatusMetadataTagTaggingListBillStatusRelationsTimestampable
```

Retrieves a bill_statuses resource.

Retrieves a bill_statuses resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_statuses identifier

try {
    $result = $apiInstance->billStatusMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillStatusesApi->billStatusMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_statuses identifier | |

### Return type

[**\OpenAPI\Client\Model\BillStatusesJsonldIdStandardMetadataBillStatusMetadataTagTaggingListBillStatusRelationsTimestampable**](../Model/BillStatusesJsonldIdStandardMetadataBillStatusMetadataTagTaggingListBillStatusRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
