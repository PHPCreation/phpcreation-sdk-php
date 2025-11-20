# OpenAPI\Client\CoordinateMbtisApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCoordinateMbtisGetCollection()**](CoordinateMbtisApi.md#apiCoordinateMbtisGetCollection) | **GET** /open-api/v3/coordinate_mbtis | Retrieves the collection of coordinate_mbtis resources. |
| [**apiCoordinateMbtisIdDelete()**](CoordinateMbtisApi.md#apiCoordinateMbtisIdDelete) | **DELETE** /open-api/v3/coordinate_mbtis/{id} | Removes the coordinate_mbtis resource. |
| [**apiCoordinateMbtisIdGet()**](CoordinateMbtisApi.md#apiCoordinateMbtisIdGet) | **GET** /open-api/v3/coordinate_mbtis/{id} | Retrieves a coordinate_mbtis resource. |
| [**apiCoordinateMbtisIdPut()**](CoordinateMbtisApi.md#apiCoordinateMbtisIdPut) | **PUT** /open-api/v3/coordinate_mbtis/{id} | Replaces the coordinate_mbtis resource. |
| [**apiCoordinateMbtisPost()**](CoordinateMbtisApi.md#apiCoordinateMbtisPost) | **POST** /open-api/v3/coordinate_mbtis | Creates a coordinate_mbtis resource. |
| [**coordinateMbtiApiFileUpload()**](CoordinateMbtisApi.md#coordinateMbtiApiFileUpload) | **POST** /open-api/v3/coordinate_mbtis/{id}/file/upload | Creates a coordinate_mbtis resource. |
| [**coordinateMbtiDropDown()**](CoordinateMbtisApi.md#coordinateMbtiDropDown) | **GET** /open-api/v3/coordinate_mbtis/dropdown/get | Retrieves the collection of coordinate_mbtis resources. |
| [**coordinateMbtiDuplicate()**](CoordinateMbtisApi.md#coordinateMbtiDuplicate) | **GET** /open-api/v3/coordinate_mbtis/duplicate/{id} | Retrieves a coordinate_mbtis resource. |
| [**coordinateMbtiFetchFiles()**](CoordinateMbtisApi.md#coordinateMbtiFetchFiles) | **GET** /open-api/v3/coordinate_mbtis/fetch_files/{id} | Retrieves a coordinate_mbtis resource. |
| [**coordinateMbtiGetBySlug()**](CoordinateMbtisApi.md#coordinateMbtiGetBySlug) | **GET** /open-api/v3/coordinate_mbtis/by_slug/{slug} | Retrieves a coordinate_mbtis resource. |
| [**coordinateMbtiGetDeleteRelations()**](CoordinateMbtisApi.md#coordinateMbtiGetDeleteRelations) | **GET** /open-api/v3/coordinate_mbtis/get_delete_relations/{id} | Retrieves a coordinate_mbtis resource. |
| [**coordinateMbtiMetadata()**](CoordinateMbtisApi.md#coordinateMbtiMetadata) | **GET** /open-api/v3/coordinate_mbtis/metadata/{id} | Retrieves a coordinate_mbtis resource. |


## `apiCoordinateMbtisGetCollection()`

```php
apiCoordinateMbtisGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $extraversion_between, $extraversion_gt, $extraversion_gte, $extraversion_lt, $extraversion_lte, $sensing_between, $sensing_gt, $sensing_gte, $sensing_lt, $sensing_lte, $thinking_between, $thinking_gt, $thinking_gte, $thinking_lt, $thinking_lte, $judging_between, $judging_gt, $judging_gte, $judging_lt, $judging_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $order_extraversion, $order_sensing, $order_thinking, $order_judging, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiCoordinateMbtisGetCollection200Response
```

Retrieves the collection of coordinate_mbtis resources.

Retrieves the collection of coordinate_mbtis resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
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
$coordinates = 'coordinates_example'; // string | 
$coordinates2 = array('coordinates_example'); // string[] | 
$search = 'search_example'; // string | 
$extraversion_between = 'extraversion_between_example'; // string | 
$extraversion_gt = 'extraversion_gt_example'; // string | 
$extraversion_gte = 'extraversion_gte_example'; // string | 
$extraversion_lt = 'extraversion_lt_example'; // string | 
$extraversion_lte = 'extraversion_lte_example'; // string | 
$sensing_between = 'sensing_between_example'; // string | 
$sensing_gt = 'sensing_gt_example'; // string | 
$sensing_gte = 'sensing_gte_example'; // string | 
$sensing_lt = 'sensing_lt_example'; // string | 
$sensing_lte = 'sensing_lte_example'; // string | 
$thinking_between = 'thinking_between_example'; // string | 
$thinking_gt = 'thinking_gt_example'; // string | 
$thinking_gte = 'thinking_gte_example'; // string | 
$thinking_lt = 'thinking_lt_example'; // string | 
$thinking_lte = 'thinking_lte_example'; // string | 
$judging_between = 'judging_between_example'; // string | 
$judging_gt = 'judging_gt_example'; // string | 
$judging_gte = 'judging_gte_example'; // string | 
$judging_lt = 'judging_lt_example'; // string | 
$judging_lte = 'judging_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_extraversion = 'order_extraversion_example'; // string | 
$order_sensing = 'order_sensing_example'; // string | 
$order_thinking = 'order_thinking_example'; // string | 
$order_judging = 'order_judging_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | coordinate_mbtis slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinate_mbtis slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinate_mbtis slug_end_with
$id_partial = 'id_partial_example'; // string | coordinate_mbtis id_partial
$id_start_with = 'id_start_with_example'; // string | coordinate_mbtis id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinate_mbtis id_end_with

try {
    $result = $apiInstance->apiCoordinateMbtisGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $extraversion_between, $extraversion_gt, $extraversion_gte, $extraversion_lt, $extraversion_lte, $sensing_between, $sensing_gt, $sensing_gte, $sensing_lt, $sensing_lte, $thinking_between, $thinking_gt, $thinking_gte, $thinking_lt, $thinking_lte, $judging_between, $judging_gt, $judging_gte, $judging_lt, $judging_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $order_extraversion, $order_sensing, $order_thinking, $order_judging, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->apiCoordinateMbtisGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **coordinates** | **string**|  | [optional] |
| **coordinates2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **extraversion_between** | **string**|  | [optional] |
| **extraversion_gt** | **string**|  | [optional] |
| **extraversion_gte** | **string**|  | [optional] |
| **extraversion_lt** | **string**|  | [optional] |
| **extraversion_lte** | **string**|  | [optional] |
| **sensing_between** | **string**|  | [optional] |
| **sensing_gt** | **string**|  | [optional] |
| **sensing_gte** | **string**|  | [optional] |
| **sensing_lt** | **string**|  | [optional] |
| **sensing_lte** | **string**|  | [optional] |
| **thinking_between** | **string**|  | [optional] |
| **thinking_gt** | **string**|  | [optional] |
| **thinking_gte** | **string**|  | [optional] |
| **thinking_lt** | **string**|  | [optional] |
| **thinking_lte** | **string**|  | [optional] |
| **judging_between** | **string**|  | [optional] |
| **judging_gt** | **string**|  | [optional] |
| **judging_gte** | **string**|  | [optional] |
| **judging_lt** | **string**|  | [optional] |
| **judging_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_extraversion** | **string**|  | [optional] |
| **order_sensing** | **string**|  | [optional] |
| **order_thinking** | **string**|  | [optional] |
| **order_judging** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| coordinate_mbtis slug_partial | [optional] |
| **slug_start_with** | **string**| coordinate_mbtis slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinate_mbtis slug_end_with | [optional] |
| **id_partial** | **string**| coordinate_mbtis id_partial | [optional] |
| **id_start_with** | **string**| coordinate_mbtis id_start_with | [optional] |
| **id_end_with** | **string**| coordinate_mbtis id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiCoordinateMbtisGetCollection200Response**](../Model/ApiCoordinateMbtisGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateMbtisIdDelete()`

```php
apiCoordinateMbtisIdDelete($id)
```

Removes the coordinate_mbtis resource.

Removes the coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier

try {
    $apiInstance->apiCoordinateMbtisIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->apiCoordinateMbtisIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |

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

## `apiCoordinateMbtisIdGet()`

```php
apiCoordinateMbtisIdGet($id): \OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a coordinate_mbtis resource.

Retrieves a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier

try {
    $result = $apiInstance->apiCoordinateMbtisIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->apiCoordinateMbtisIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingListStandardShow**](../Model/CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateMbtisIdPut()`

```php
apiCoordinateMbtisIdPut($id, $coordinate_mbtis_jsonld_add_post): \OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the coordinate_mbtis resource.

Replaces the coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier
$coordinate_mbtis_jsonld_add_post = new \OpenAPI\Client\Model\CoordinateMbtisJsonldAddPost(); // \OpenAPI\Client\Model\CoordinateMbtisJsonldAddPost | The updated coordinate_mbtis resource

try {
    $result = $apiInstance->apiCoordinateMbtisIdPut($id, $coordinate_mbtis_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->apiCoordinateMbtisIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |
| **coordinate_mbtis_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinateMbtisJsonldAddPost**](../Model/CoordinateMbtisJsonldAddPost.md)| The updated coordinate_mbtis resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateMbtisJsonldCoordinateMbtiShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateMbtisPost()`

```php
apiCoordinateMbtisPost($coordinate_mbtis_jsonld_add_post): \OpenAPI\Client\Model\CoordinateMbtisJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a coordinate_mbtis resource.

Creates a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coordinate_mbtis_jsonld_add_post = new \OpenAPI\Client\Model\CoordinateMbtisJsonldAddPost(); // \OpenAPI\Client\Model\CoordinateMbtisJsonldAddPost | The new coordinate_mbtis resource

try {
    $result = $apiInstance->apiCoordinateMbtisPost($coordinate_mbtis_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->apiCoordinateMbtisPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coordinate_mbtis_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinateMbtisJsonldAddPost**](../Model/CoordinateMbtisJsonldAddPost.md)| The new coordinate_mbtis resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/CoordinateMbtisJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMbtiApiFileUpload()`

```php
coordinateMbtiApiFileUpload($id, $coordinate_mbtis_jsonld): \OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingListStandardShow
```

Creates a coordinate_mbtis resource.

Creates a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier
$coordinate_mbtis_jsonld = new \OpenAPI\Client\Model\CoordinateMbtisJsonld(); // \OpenAPI\Client\Model\CoordinateMbtisJsonld | The new coordinate_mbtis resource

try {
    $result = $apiInstance->coordinateMbtiApiFileUpload($id, $coordinate_mbtis_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->coordinateMbtiApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |
| **coordinate_mbtis_jsonld** | [**\OpenAPI\Client\Model\CoordinateMbtisJsonld**](../Model/CoordinateMbtisJsonld.md)| The new coordinate_mbtis resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingListStandardShow**](../Model/CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMbtiDropDown()`

```php
coordinateMbtiDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $extraversion_between, $extraversion_gt, $extraversion_gte, $extraversion_lt, $extraversion_lte, $sensing_between, $sensing_gt, $sensing_gte, $sensing_lt, $sensing_lte, $thinking_between, $thinking_gt, $thinking_gte, $thinking_lt, $thinking_lte, $judging_between, $judging_gt, $judging_gte, $judging_lt, $judging_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $order_extraversion, $order_sensing, $order_thinking, $order_judging, $properties, $enabled, $tag): \OpenAPI\Client\Model\CoordinateMbtiDropDown200Response
```

Retrieves the collection of coordinate_mbtis resources.

Retrieves the collection of coordinate_mbtis resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
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
$coordinates = 'coordinates_example'; // string | 
$coordinates2 = array('coordinates_example'); // string[] | 
$search = 'search_example'; // string | 
$extraversion_between = 'extraversion_between_example'; // string | 
$extraversion_gt = 'extraversion_gt_example'; // string | 
$extraversion_gte = 'extraversion_gte_example'; // string | 
$extraversion_lt = 'extraversion_lt_example'; // string | 
$extraversion_lte = 'extraversion_lte_example'; // string | 
$sensing_between = 'sensing_between_example'; // string | 
$sensing_gt = 'sensing_gt_example'; // string | 
$sensing_gte = 'sensing_gte_example'; // string | 
$sensing_lt = 'sensing_lt_example'; // string | 
$sensing_lte = 'sensing_lte_example'; // string | 
$thinking_between = 'thinking_between_example'; // string | 
$thinking_gt = 'thinking_gt_example'; // string | 
$thinking_gte = 'thinking_gte_example'; // string | 
$thinking_lt = 'thinking_lt_example'; // string | 
$thinking_lte = 'thinking_lte_example'; // string | 
$judging_between = 'judging_between_example'; // string | 
$judging_gt = 'judging_gt_example'; // string | 
$judging_gte = 'judging_gte_example'; // string | 
$judging_lt = 'judging_lt_example'; // string | 
$judging_lte = 'judging_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_extraversion = 'order_extraversion_example'; // string | 
$order_sensing = 'order_sensing_example'; // string | 
$order_thinking = 'order_thinking_example'; // string | 
$order_judging = 'order_judging_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->coordinateMbtiDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $coordinates, $coordinates2, $search, $extraversion_between, $extraversion_gt, $extraversion_gte, $extraversion_lt, $extraversion_lte, $sensing_between, $sensing_gt, $sensing_gte, $sensing_lt, $sensing_lte, $thinking_between, $thinking_gt, $thinking_gte, $thinking_lt, $thinking_lte, $judging_between, $judging_gt, $judging_gte, $judging_lt, $judging_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $order_id, $order_created_at, $order_updated_at, $order_extraversion, $order_sensing, $order_thinking, $order_judging, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->coordinateMbtiDropDown: ', $e->getMessage(), PHP_EOL;
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
| **coordinates** | **string**|  | [optional] |
| **coordinates2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **extraversion_between** | **string**|  | [optional] |
| **extraversion_gt** | **string**|  | [optional] |
| **extraversion_gte** | **string**|  | [optional] |
| **extraversion_lt** | **string**|  | [optional] |
| **extraversion_lte** | **string**|  | [optional] |
| **sensing_between** | **string**|  | [optional] |
| **sensing_gt** | **string**|  | [optional] |
| **sensing_gte** | **string**|  | [optional] |
| **sensing_lt** | **string**|  | [optional] |
| **sensing_lte** | **string**|  | [optional] |
| **thinking_between** | **string**|  | [optional] |
| **thinking_gt** | **string**|  | [optional] |
| **thinking_gte** | **string**|  | [optional] |
| **thinking_lt** | **string**|  | [optional] |
| **thinking_lte** | **string**|  | [optional] |
| **judging_between** | **string**|  | [optional] |
| **judging_gt** | **string**|  | [optional] |
| **judging_gte** | **string**|  | [optional] |
| **judging_lt** | **string**|  | [optional] |
| **judging_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_extraversion** | **string**|  | [optional] |
| **order_sensing** | **string**|  | [optional] |
| **order_thinking** | **string**|  | [optional] |
| **order_judging** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtiDropDown200Response**](../Model/CoordinateMbtiDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMbtiDuplicate()`

```php
coordinateMbtiDuplicate($id): \OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingList
```

Retrieves a coordinate_mbtis resource.

Retrieves a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier

try {
    $result = $apiInstance->coordinateMbtiDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->coordinateMbtiDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingList**](../Model/CoordinateMbtisJsonldCoordinateMbtiShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMbtiFetchFiles()`

```php
coordinateMbtiFetchFiles($id): \OpenAPI\Client\Model\CoordinateMbtisJsonld
```

Retrieves a coordinate_mbtis resource.

Retrieves a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier

try {
    $result = $apiInstance->coordinateMbtiFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->coordinateMbtiFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonld**](../Model/CoordinateMbtisJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMbtiGetBySlug()`

```php
coordinateMbtiGetBySlug($slug): \OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a coordinate_mbtis resource.

Retrieves a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | coordinate_mbtis identifier

try {
    $result = $apiInstance->coordinateMbtiGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->coordinateMbtiGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| coordinate_mbtis identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiShowIdCustomPropertyTimestampableTagTaggingList**](../Model/CoordinateMbtisJsonldCoordinateMbtiShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMbtiGetDeleteRelations()`

```php
coordinateMbtiGetDeleteRelations($id): \OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiRelations
```

Retrieves a coordinate_mbtis resource.

Retrieves a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier

try {
    $result = $apiInstance->coordinateMbtiGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->coordinateMbtiGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldCoordinateMbtiRelations**](../Model/CoordinateMbtisJsonldCoordinateMbtiRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateMbtiMetadata()`

```php
coordinateMbtiMetadata($id): \OpenAPI\Client\Model\CoordinateMbtisJsonldIdStandardMetadataCoordinateMbtiMetadataTagTaggingListCoordinateMbtiRelationsTimestampable
```

Retrieves a coordinate_mbtis resource.

Retrieves a coordinate_mbtis resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateMbtisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_mbtis identifier

try {
    $result = $apiInstance->coordinateMbtiMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateMbtisApi->coordinateMbtiMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_mbtis identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateMbtisJsonldIdStandardMetadataCoordinateMbtiMetadataTagTaggingListCoordinateMbtiRelationsTimestampable**](../Model/CoordinateMbtisJsonldIdStandardMetadataCoordinateMbtiMetadataTagTaggingListCoordinateMbtiRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
