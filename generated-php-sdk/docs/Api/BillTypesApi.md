# OpenAPI\Client\BillTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBillTypesGetCollection()**](BillTypesApi.md#apiBillTypesGetCollection) | **GET** /open-api/v3/bill_types | Retrieves the collection of bill_types resources. |
| [**apiBillTypesIdDelete()**](BillTypesApi.md#apiBillTypesIdDelete) | **DELETE** /open-api/v3/bill_types/{id} | Removes the bill_types resource. |
| [**apiBillTypesIdGet()**](BillTypesApi.md#apiBillTypesIdGet) | **GET** /open-api/v3/bill_types/{id} | Retrieves a bill_types resource. |
| [**apiBillTypesIdPut()**](BillTypesApi.md#apiBillTypesIdPut) | **PUT** /open-api/v3/bill_types/{id} | Replaces the bill_types resource. |
| [**apiBillTypesPost()**](BillTypesApi.md#apiBillTypesPost) | **POST** /open-api/v3/bill_types | Creates a bill_types resource. |
| [**billTypeApiFileUpload()**](BillTypesApi.md#billTypeApiFileUpload) | **POST** /open-api/v3/bill_types/{id}/file/upload | Creates a bill_types resource. |
| [**billTypeDropDown()**](BillTypesApi.md#billTypeDropDown) | **GET** /open-api/v3/bill_types/dropdown/get | Retrieves the collection of bill_types resources. |
| [**billTypeDuplicate()**](BillTypesApi.md#billTypeDuplicate) | **GET** /open-api/v3/bill_types/duplicate/{id} | Retrieves a bill_types resource. |
| [**billTypeFetchFiles()**](BillTypesApi.md#billTypeFetchFiles) | **GET** /open-api/v3/bill_types/fetch_files/{id} | Retrieves a bill_types resource. |
| [**billTypeGetBySlug()**](BillTypesApi.md#billTypeGetBySlug) | **GET** /open-api/v3/bill_types/by_slug/{slug} | Retrieves a bill_types resource. |
| [**billTypeGetDeleteRelations()**](BillTypesApi.md#billTypeGetDeleteRelations) | **GET** /open-api/v3/bill_types/get_delete_relations/{id} | Retrieves a bill_types resource. |
| [**billTypeMetadata()**](BillTypesApi.md#billTypeMetadata) | **GET** /open-api/v3/bill_types/metadata/{id} | Retrieves a bill_types resource. |


## `apiBillTypesGetCollection()`

```php
apiBillTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiBillTypesGetCollection200Response
```

Retrieves the collection of bill_types resources.

Retrieves the collection of bill_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | bill_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_types slug_end_with
$id_partial = 'id_partial_example'; // string | bill_types id_partial
$id_start_with = 'id_start_with_example'; // string | bill_types id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_types id_end_with
$number_partial = 'number_partial_example'; // string | bill_types number_partial
$number_start_with = 'number_start_with_example'; // string | bill_types number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_types number_end_with
$color_partial = 'color_partial_example'; // string | bill_types color_partial
$color_start_with = 'color_start_with_example'; // string | bill_types color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_types color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | bill_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | bill_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | bill_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | bill_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | bill_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | bill_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | bill_types priority_range

try {
    $result = $apiInstance->apiBillTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->apiBillTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| bill_types slug_partial | [optional] |
| **slug_start_with** | **string**| bill_types slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_types slug_end_with | [optional] |
| **id_partial** | **string**| bill_types id_partial | [optional] |
| **id_start_with** | **string**| bill_types id_start_with | [optional] |
| **id_end_with** | **string**| bill_types id_end_with | [optional] |
| **number_partial** | **string**| bill_types number_partial | [optional] |
| **number_start_with** | **string**| bill_types number_start_with | [optional] |
| **number_end_with** | **string**| bill_types number_end_with | [optional] |
| **color_partial** | **string**| bill_types color_partial | [optional] |
| **color_start_with** | **string**| bill_types color_start_with | [optional] |
| **color_end_with** | **string**| bill_types color_end_with | [optional] |
| **icon_partial** | **string**| bill_types icon_partial | [optional] |
| **icon_start_with** | **string**| bill_types icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| bill_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| bill_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| bill_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| bill_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| bill_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| bill_types translations.description_end_with | [optional] |
| **priority_range** | **string**| bill_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiBillTypesGetCollection200Response**](../Model/ApiBillTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillTypesIdDelete()`

```php
apiBillTypesIdDelete($id)
```

Removes the bill_types resource.

Removes the bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier

try {
    $apiInstance->apiBillTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->apiBillTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |

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

## `apiBillTypesIdGet()`

```php
apiBillTypesIdGet($id): \OpenAPI\Client\Model\BillTypesJsonldBillTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a bill_types resource.

Retrieves a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier

try {
    $result = $apiInstance->apiBillTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->apiBillTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonldBillTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTypesJsonldBillTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillTypesIdPut()`

```php
apiBillTypesIdPut($id, $bill_types_jsonld_post): \OpenAPI\Client\Model\BillTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the bill_types resource.

Replaces the bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier
$bill_types_jsonld_post = new \OpenAPI\Client\Model\BillTypesJsonldPost(); // \OpenAPI\Client\Model\BillTypesJsonldPost | The updated bill_types resource

try {
    $result = $apiInstance->apiBillTypesIdPut($id, $bill_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->apiBillTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |
| **bill_types_jsonld_post** | [**\OpenAPI\Client\Model\BillTypesJsonldPost**](../Model/BillTypesJsonldPost.md)| The updated bill_types resource | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/BillTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBillTypesPost()`

```php
apiBillTypesPost($bill_types_jsonld_add_post): \OpenAPI\Client\Model\BillTypesJsonld
```

Creates a bill_types resource.

Creates a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_types_jsonld_add_post = new \OpenAPI\Client\Model\BillTypesJsonldAddPost(); // \OpenAPI\Client\Model\BillTypesJsonldAddPost | The new bill_types resource

try {
    $result = $apiInstance->apiBillTypesPost($bill_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->apiBillTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_types_jsonld_add_post** | [**\OpenAPI\Client\Model\BillTypesJsonldAddPost**](../Model/BillTypesJsonldAddPost.md)| The new bill_types resource | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonld**](../Model/BillTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTypeApiFileUpload()`

```php
billTypeApiFileUpload($id, $bill_types_jsonld): \OpenAPI\Client\Model\BillTypesJsonldBillTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a bill_types resource.

Creates a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier
$bill_types_jsonld = new \OpenAPI\Client\Model\BillTypesJsonld(); // \OpenAPI\Client\Model\BillTypesJsonld | The new bill_types resource

try {
    $result = $apiInstance->billTypeApiFileUpload($id, $bill_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->billTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |
| **bill_types_jsonld** | [**\OpenAPI\Client\Model\BillTypesJsonld**](../Model/BillTypesJsonld.md)| The new bill_types resource | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonldBillTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/BillTypesJsonldBillTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTypeDropDown()`

```php
billTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range): \OpenAPI\Client\Model\BillTypeDropDown200Response
```

Retrieves the collection of bill_types resources.

Retrieves the collection of bill_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
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
$slug_partial = 'slug_partial_example'; // string | bill_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | bill_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | bill_types slug_end_with
$id_partial = 'id_partial_example'; // string | bill_types id_partial
$id_start_with = 'id_start_with_example'; // string | bill_types id_start_with
$id_end_with = 'id_end_with_example'; // string | bill_types id_end_with
$number_partial = 'number_partial_example'; // string | bill_types number_partial
$number_start_with = 'number_start_with_example'; // string | bill_types number_start_with
$number_end_with = 'number_end_with_example'; // string | bill_types number_end_with
$color_partial = 'color_partial_example'; // string | bill_types color_partial
$color_start_with = 'color_start_with_example'; // string | bill_types color_start_with
$color_end_with = 'color_end_with_example'; // string | bill_types color_end_with
$icon_partial = 'icon_partial_example'; // string | bill_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | bill_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | bill_types icon_end_with
$priority_range = 'priority_range_example'; // string | bill_types priority_range

try {
    $result = $apiInstance->billTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $accountable, $impacting_inventory, $priority, $priority2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->billTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug_partial** | **string**| bill_types slug_partial | [optional] |
| **slug_start_with** | **string**| bill_types slug_start_with | [optional] |
| **slug_end_with** | **string**| bill_types slug_end_with | [optional] |
| **id_partial** | **string**| bill_types id_partial | [optional] |
| **id_start_with** | **string**| bill_types id_start_with | [optional] |
| **id_end_with** | **string**| bill_types id_end_with | [optional] |
| **number_partial** | **string**| bill_types number_partial | [optional] |
| **number_start_with** | **string**| bill_types number_start_with | [optional] |
| **number_end_with** | **string**| bill_types number_end_with | [optional] |
| **color_partial** | **string**| bill_types color_partial | [optional] |
| **color_start_with** | **string**| bill_types color_start_with | [optional] |
| **color_end_with** | **string**| bill_types color_end_with | [optional] |
| **icon_partial** | **string**| bill_types icon_partial | [optional] |
| **icon_start_with** | **string**| bill_types icon_start_with | [optional] |
| **icon_end_with** | **string**| bill_types icon_end_with | [optional] |
| **priority_range** | **string**| bill_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillTypeDropDown200Response**](../Model/BillTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTypeDuplicate()`

```php
billTypeDuplicate($id): \OpenAPI\Client\Model\BillTypesJsonldBillTypeShowIdTimestampableTagTaggingList
```

Retrieves a bill_types resource.

Retrieves a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier

try {
    $result = $apiInstance->billTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->billTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonldBillTypeShowIdTimestampableTagTaggingList**](../Model/BillTypesJsonldBillTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTypeFetchFiles()`

```php
billTypeFetchFiles($id): \OpenAPI\Client\Model\BillTypesJsonld
```

Retrieves a bill_types resource.

Retrieves a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier

try {
    $result = $apiInstance->billTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->billTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonld**](../Model/BillTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTypeGetBySlug()`

```php
billTypeGetBySlug($slug): \OpenAPI\Client\Model\BillTypesJsonldBillTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a bill_types resource.

Retrieves a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | bill_types identifier

try {
    $result = $apiInstance->billTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->billTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| bill_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonldBillTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList**](../Model/BillTypesJsonldBillTypeShowStandardShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTypeGetDeleteRelations()`

```php
billTypeGetDeleteRelations($id): \OpenAPI\Client\Model\BillTypesJsonldBillTypeRelations
```

Retrieves a bill_types resource.

Retrieves a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier

try {
    $result = $apiInstance->billTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->billTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonldBillTypeRelations**](../Model/BillTypesJsonldBillTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTypeMetadata()`

```php
billTypeMetadata($id): \OpenAPI\Client\Model\BillTypesJsonldIdStandardMetadataBillTypeMetadataTagTaggingListBillTypeRelationsTimestampable
```

Retrieves a bill_types resource.

Retrieves a bill_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | bill_types identifier

try {
    $result = $apiInstance->billTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillTypesApi->billTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| bill_types identifier | |

### Return type

[**\OpenAPI\Client\Model\BillTypesJsonldIdStandardMetadataBillTypeMetadataTagTaggingListBillTypeRelationsTimestampable**](../Model/BillTypesJsonldIdStandardMetadataBillTypeMetadataTagTaggingListBillTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
