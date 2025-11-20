# OpenAPI\Client\FollowupDelayTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiFollowupDelayTypesGetCollection()**](FollowupDelayTypesApi.md#apiFollowupDelayTypesGetCollection) | **GET** /open-api/v3/followup_delay_types | Retrieves the collection of followup_delay_types resources. |
| [**apiFollowupDelayTypesIdDelete()**](FollowupDelayTypesApi.md#apiFollowupDelayTypesIdDelete) | **DELETE** /open-api/v3/followup_delay_types/{id} | Removes the followup_delay_types resource. |
| [**apiFollowupDelayTypesIdGet()**](FollowupDelayTypesApi.md#apiFollowupDelayTypesIdGet) | **GET** /open-api/v3/followup_delay_types/{id} | Retrieves a followup_delay_types resource. |
| [**apiFollowupDelayTypesIdPut()**](FollowupDelayTypesApi.md#apiFollowupDelayTypesIdPut) | **PUT** /open-api/v3/followup_delay_types/{id} | Replaces the followup_delay_types resource. |
| [**apiFollowupDelayTypesPost()**](FollowupDelayTypesApi.md#apiFollowupDelayTypesPost) | **POST** /open-api/v3/followup_delay_types | Creates a followup_delay_types resource. |
| [**followupDelayTypeApiFileUpload()**](FollowupDelayTypesApi.md#followupDelayTypeApiFileUpload) | **POST** /open-api/v3/followup_delay_types/{id}/file/upload | Creates a followup_delay_types resource. |
| [**followupDelayTypeDropDown()**](FollowupDelayTypesApi.md#followupDelayTypeDropDown) | **GET** /open-api/v3/followup_delay_types/dropdown/get | Retrieves the collection of followup_delay_types resources. |
| [**followupDelayTypeDuplicate()**](FollowupDelayTypesApi.md#followupDelayTypeDuplicate) | **GET** /open-api/v3/followup_delay_types/duplicate/{id} | Retrieves a followup_delay_types resource. |
| [**followupDelayTypeFetchFiles()**](FollowupDelayTypesApi.md#followupDelayTypeFetchFiles) | **GET** /open-api/v3/followup_delay_types/fetch_files/{id} | Retrieves a followup_delay_types resource. |
| [**followupDelayTypeGetBySlug()**](FollowupDelayTypesApi.md#followupDelayTypeGetBySlug) | **GET** /open-api/v3/followup_delay_types/by_slug/{slug} | Retrieves a followup_delay_types resource. |
| [**followupDelayTypeGetDeleteRelations()**](FollowupDelayTypesApi.md#followupDelayTypeGetDeleteRelations) | **GET** /open-api/v3/followup_delay_types/get_delete_relations/{id} | Retrieves a followup_delay_types resource. |
| [**followupDelayTypeMetadata()**](FollowupDelayTypesApi.md#followupDelayTypeMetadata) | **GET** /open-api/v3/followup_delay_types/metadata/{id} | Retrieves a followup_delay_types resource. |


## `apiFollowupDelayTypesGetCollection()`

```php
apiFollowupDelayTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $nb_day, $nb_day2, $nb_day_between, $nb_day_gt, $nb_day_gte, $nb_day_lt, $nb_day_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_nb_day, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiFollowupDelayTypesGetCollection200Response
```

Retrieves the collection of followup_delay_types resources.

Retrieves the collection of followup_delay_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_day = 56; // int | 
$nb_day2 = array(56); // int[] | 
$nb_day_between = 'nb_day_between_example'; // string | 
$nb_day_gt = 'nb_day_gt_example'; // string | 
$nb_day_gte = 'nb_day_gte_example'; // string | 
$nb_day_lt = 'nb_day_lt_example'; // string | 
$nb_day_lte = 'nb_day_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_nb_day = 'order_nb_day_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | followup_delay_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | followup_delay_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | followup_delay_types slug_end_with
$id_partial = 'id_partial_example'; // string | followup_delay_types id_partial
$id_start_with = 'id_start_with_example'; // string | followup_delay_types id_start_with
$id_end_with = 'id_end_with_example'; // string | followup_delay_types id_end_with
$icon_partial = 'icon_partial_example'; // string | followup_delay_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | followup_delay_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | followup_delay_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | followup_delay_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | followup_delay_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | followup_delay_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | followup_delay_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | followup_delay_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | followup_delay_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | followup_delay_types priority_range

try {
    $result = $apiInstance->apiFollowupDelayTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $nb_day, $nb_day2, $nb_day_between, $nb_day_gt, $nb_day_gte, $nb_day_lt, $nb_day_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_nb_day, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->apiFollowupDelayTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_day** | **int**|  | [optional] |
| **nb_day2** | [**int[]**](../Model/int.md)|  | [optional] |
| **nb_day_between** | **string**|  | [optional] |
| **nb_day_gt** | **string**|  | [optional] |
| **nb_day_gte** | **string**|  | [optional] |
| **nb_day_lt** | **string**|  | [optional] |
| **nb_day_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_nb_day** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| followup_delay_types slug_partial | [optional] |
| **slug_start_with** | **string**| followup_delay_types slug_start_with | [optional] |
| **slug_end_with** | **string**| followup_delay_types slug_end_with | [optional] |
| **id_partial** | **string**| followup_delay_types id_partial | [optional] |
| **id_start_with** | **string**| followup_delay_types id_start_with | [optional] |
| **id_end_with** | **string**| followup_delay_types id_end_with | [optional] |
| **icon_partial** | **string**| followup_delay_types icon_partial | [optional] |
| **icon_start_with** | **string**| followup_delay_types icon_start_with | [optional] |
| **icon_end_with** | **string**| followup_delay_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| followup_delay_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| followup_delay_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| followup_delay_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| followup_delay_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| followup_delay_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| followup_delay_types translations.description_end_with | [optional] |
| **priority_range** | **string**| followup_delay_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiFollowupDelayTypesGetCollection200Response**](../Model/ApiFollowupDelayTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupDelayTypesIdDelete()`

```php
apiFollowupDelayTypesIdDelete($id)
```

Removes the followup_delay_types resource.

Removes the followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier

try {
    $apiInstance->apiFollowupDelayTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->apiFollowupDelayTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |

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

## `apiFollowupDelayTypesIdGet()`

```php
apiFollowupDelayTypesIdGet($id): \OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a followup_delay_types resource.

Retrieves a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier

try {
    $result = $apiInstance->apiFollowupDelayTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->apiFollowupDelayTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupDelayTypesIdPut()`

```php
apiFollowupDelayTypesIdPut($id, $followup_delay_types_jsonld_post): \OpenAPI\Client\Model\FollowupDelayTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the followup_delay_types resource.

Replaces the followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier
$followup_delay_types_jsonld_post = new \OpenAPI\Client\Model\FollowupDelayTypesJsonldPost(); // \OpenAPI\Client\Model\FollowupDelayTypesJsonldPost | The updated followup_delay_types resource

try {
    $result = $apiInstance->apiFollowupDelayTypesIdPut($id, $followup_delay_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->apiFollowupDelayTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |
| **followup_delay_types_jsonld_post** | [**\OpenAPI\Client\Model\FollowupDelayTypesJsonldPost**](../Model/FollowupDelayTypesJsonldPost.md)| The updated followup_delay_types resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/FollowupDelayTypesJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFollowupDelayTypesPost()`

```php
apiFollowupDelayTypesPost($followup_delay_types_jsonld_add_post): \OpenAPI\Client\Model\FollowupDelayTypesJsonld
```

Creates a followup_delay_types resource.

Creates a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$followup_delay_types_jsonld_add_post = new \OpenAPI\Client\Model\FollowupDelayTypesJsonldAddPost(); // \OpenAPI\Client\Model\FollowupDelayTypesJsonldAddPost | The new followup_delay_types resource

try {
    $result = $apiInstance->apiFollowupDelayTypesPost($followup_delay_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->apiFollowupDelayTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **followup_delay_types_jsonld_add_post** | [**\OpenAPI\Client\Model\FollowupDelayTypesJsonldAddPost**](../Model/FollowupDelayTypesJsonldAddPost.md)| The new followup_delay_types resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonld**](../Model/FollowupDelayTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDelayTypeApiFileUpload()`

```php
followupDelayTypeApiFileUpload($id, $followup_delay_types_jsonld): \OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingListStandardShow
```

Creates a followup_delay_types resource.

Creates a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier
$followup_delay_types_jsonld = new \OpenAPI\Client\Model\FollowupDelayTypesJsonld(); // \OpenAPI\Client\Model\FollowupDelayTypesJsonld | The new followup_delay_types resource

try {
    $result = $apiInstance->followupDelayTypeApiFileUpload($id, $followup_delay_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->followupDelayTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |
| **followup_delay_types_jsonld** | [**\OpenAPI\Client\Model\FollowupDelayTypesJsonld**](../Model/FollowupDelayTypesJsonld.md)| The new followup_delay_types resource | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingListStandardShow**](../Model/FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDelayTypeDropDown()`

```php
followupDelayTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $nb_day, $nb_day2, $nb_day_between, $nb_day_gt, $nb_day_gte, $nb_day_lt, $nb_day_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_nb_day, $properties, $enabled, $tag): \OpenAPI\Client\Model\FollowupDelayTypeDropDown200Response
```

Retrieves the collection of followup_delay_types resources.

Retrieves the collection of followup_delay_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
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
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$color = 'color_example'; // string | 
$color2 = array('color_example'); // string[] | 
$icon = 'icon_example'; // string | 
$icon2 = array('icon_example'); // string[] | 
$search = 'search_example'; // string | 
$nb_day = 56; // int | 
$nb_day2 = array(56); // int[] | 
$nb_day_between = 'nb_day_between_example'; // string | 
$nb_day_gt = 'nb_day_gt_example'; // string | 
$nb_day_gte = 'nb_day_gte_example'; // string | 
$nb_day_lt = 'nb_day_lt_example'; // string | 
$nb_day_lte = 'nb_day_lte_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_number = True; // bool | 
$exists_color = True; // bool | 
$exists_icon = True; // bool | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_nb_day = 'order_nb_day_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->followupDelayTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $nb_day, $nb_day2, $nb_day_between, $nb_day_gt, $nb_day_gte, $nb_day_lt, $nb_day_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $order_id, $order_created_at, $order_updated_at, $order_nb_day, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->followupDelayTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **color** | **string**|  | [optional] |
| **color2** | [**string[]**](../Model/string.md)|  | [optional] |
| **icon** | **string**|  | [optional] |
| **icon2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **nb_day** | **int**|  | [optional] |
| **nb_day2** | [**int[]**](../Model/int.md)|  | [optional] |
| **nb_day_between** | **string**|  | [optional] |
| **nb_day_gt** | **string**|  | [optional] |
| **nb_day_gte** | **string**|  | [optional] |
| **nb_day_lt** | **string**|  | [optional] |
| **nb_day_lte** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_number** | **bool**|  | [optional] |
| **exists_color** | **bool**|  | [optional] |
| **exists_icon** | **bool**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_nb_day** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypeDropDown200Response**](../Model/FollowupDelayTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDelayTypeDuplicate()`

```php
followupDelayTypeDuplicate($id): \OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingList
```

Retrieves a followup_delay_types resource.

Retrieves a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier

try {
    $result = $apiInstance->followupDelayTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->followupDelayTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingList**](../Model/FollowupDelayTypesJsonldFollowupDelayTypeShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDelayTypeFetchFiles()`

```php
followupDelayTypeFetchFiles($id): \OpenAPI\Client\Model\FollowupDelayTypesJsonld
```

Retrieves a followup_delay_types resource.

Retrieves a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier

try {
    $result = $apiInstance->followupDelayTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->followupDelayTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonld**](../Model/FollowupDelayTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDelayTypeGetBySlug()`

```php
followupDelayTypeGetBySlug($slug): \OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a followup_delay_types resource.

Retrieves a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | followup_delay_types identifier

try {
    $result = $apiInstance->followupDelayTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->followupDelayTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| followup_delay_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeShowIdCustomPropertyTimestampableTagTaggingList**](../Model/FollowupDelayTypesJsonldFollowupDelayTypeShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDelayTypeGetDeleteRelations()`

```php
followupDelayTypeGetDeleteRelations($id): \OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeRelations
```

Retrieves a followup_delay_types resource.

Retrieves a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier

try {
    $result = $apiInstance->followupDelayTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->followupDelayTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonldFollowupDelayTypeRelations**](../Model/FollowupDelayTypesJsonldFollowupDelayTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followupDelayTypeMetadata()`

```php
followupDelayTypeMetadata($id): \OpenAPI\Client\Model\FollowupDelayTypesJsonldIdStandardMetadataFollowupDelayTypeMetadataTagTaggingListFollowupDelayTypeRelationsTimestampable
```

Retrieves a followup_delay_types resource.

Retrieves a followup_delay_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FollowupDelayTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | followup_delay_types identifier

try {
    $result = $apiInstance->followupDelayTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowupDelayTypesApi->followupDelayTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| followup_delay_types identifier | |

### Return type

[**\OpenAPI\Client\Model\FollowupDelayTypesJsonldIdStandardMetadataFollowupDelayTypeMetadataTagTaggingListFollowupDelayTypeRelationsTimestampable**](../Model/FollowupDelayTypesJsonldIdStandardMetadataFollowupDelayTypeMetadataTagTaggingListFollowupDelayTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
