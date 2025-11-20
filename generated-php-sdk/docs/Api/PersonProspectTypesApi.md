# OpenAPI\Client\PersonProspectTypesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonProspectTypesGetCollection()**](PersonProspectTypesApi.md#apiPersonProspectTypesGetCollection) | **GET** /open-api/v3/person_prospect_types | Retrieves the collection of person_prospect_types resources. |
| [**apiPersonProspectTypesIdDelete()**](PersonProspectTypesApi.md#apiPersonProspectTypesIdDelete) | **DELETE** /open-api/v3/person_prospect_types/{id} | Removes the person_prospect_types resource. |
| [**apiPersonProspectTypesIdGet()**](PersonProspectTypesApi.md#apiPersonProspectTypesIdGet) | **GET** /open-api/v3/person_prospect_types/{id} | Retrieves a person_prospect_types resource. |
| [**apiPersonProspectTypesIdPut()**](PersonProspectTypesApi.md#apiPersonProspectTypesIdPut) | **PUT** /open-api/v3/person_prospect_types/{id} | Replaces the person_prospect_types resource. |
| [**apiPersonProspectTypesPost()**](PersonProspectTypesApi.md#apiPersonProspectTypesPost) | **POST** /open-api/v3/person_prospect_types | Creates a person_prospect_types resource. |
| [**personProspectTypeApiFileUpload()**](PersonProspectTypesApi.md#personProspectTypeApiFileUpload) | **POST** /open-api/v3/person_prospect_types/{id}/file/upload | Creates a person_prospect_types resource. |
| [**personProspectTypeDropDown()**](PersonProspectTypesApi.md#personProspectTypeDropDown) | **GET** /open-api/v3/person_prospect_types/dropdown/get | Retrieves the collection of person_prospect_types resources. |
| [**personProspectTypeDuplicate()**](PersonProspectTypesApi.md#personProspectTypeDuplicate) | **GET** /open-api/v3/person_prospect_types/duplicate/{id} | Retrieves a person_prospect_types resource. |
| [**personProspectTypeFetchFiles()**](PersonProspectTypesApi.md#personProspectTypeFetchFiles) | **GET** /open-api/v3/person_prospect_types/fetch_files/{id} | Retrieves a person_prospect_types resource. |
| [**personProspectTypeGetBySlug()**](PersonProspectTypesApi.md#personProspectTypeGetBySlug) | **GET** /open-api/v3/person_prospect_types/by_slug/{slug} | Retrieves a person_prospect_types resource. |
| [**personProspectTypeGetDeleteRelations()**](PersonProspectTypesApi.md#personProspectTypeGetDeleteRelations) | **GET** /open-api/v3/person_prospect_types/get_delete_relations/{id} | Retrieves a person_prospect_types resource. |
| [**personProspectTypeMetadata()**](PersonProspectTypesApi.md#personProspectTypeMetadata) | **GET** /open-api/v3/person_prospect_types/metadata/{id} | Retrieves a person_prospect_types resource. |


## `apiPersonProspectTypesGetCollection()`

```php
apiPersonProspectTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiPersonProspectTypesGetCollection200Response
```

Retrieves the collection of person_prospect_types resources.

Retrieves the collection of person_prospect_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
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
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_prospect_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_prospect_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_prospect_types slug_end_with
$id_partial = 'id_partial_example'; // string | person_prospect_types id_partial
$id_start_with = 'id_start_with_example'; // string | person_prospect_types id_start_with
$id_end_with = 'id_end_with_example'; // string | person_prospect_types id_end_with
$number_partial = 'number_partial_example'; // string | person_prospect_types number_partial
$number_start_with = 'number_start_with_example'; // string | person_prospect_types number_start_with
$number_end_with = 'number_end_with_example'; // string | person_prospect_types number_end_with
$color_partial = 'color_partial_example'; // string | person_prospect_types color_partial
$color_start_with = 'color_start_with_example'; // string | person_prospect_types color_start_with
$color_end_with = 'color_end_with_example'; // string | person_prospect_types color_end_with
$icon_partial = 'icon_partial_example'; // string | person_prospect_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_prospect_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_prospect_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_prospect_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_prospect_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_prospect_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_prospect_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_prospect_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_prospect_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_prospect_types priority_range

try {
    $result = $apiInstance->apiPersonProspectTypesGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->apiPersonProspectTypesGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
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
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| person_prospect_types slug_partial | [optional] |
| **slug_start_with** | **string**| person_prospect_types slug_start_with | [optional] |
| **slug_end_with** | **string**| person_prospect_types slug_end_with | [optional] |
| **id_partial** | **string**| person_prospect_types id_partial | [optional] |
| **id_start_with** | **string**| person_prospect_types id_start_with | [optional] |
| **id_end_with** | **string**| person_prospect_types id_end_with | [optional] |
| **number_partial** | **string**| person_prospect_types number_partial | [optional] |
| **number_start_with** | **string**| person_prospect_types number_start_with | [optional] |
| **number_end_with** | **string**| person_prospect_types number_end_with | [optional] |
| **color_partial** | **string**| person_prospect_types color_partial | [optional] |
| **color_start_with** | **string**| person_prospect_types color_start_with | [optional] |
| **color_end_with** | **string**| person_prospect_types color_end_with | [optional] |
| **icon_partial** | **string**| person_prospect_types icon_partial | [optional] |
| **icon_start_with** | **string**| person_prospect_types icon_start_with | [optional] |
| **icon_end_with** | **string**| person_prospect_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_prospect_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_prospect_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_prospect_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_prospect_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_prospect_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_prospect_types translations.description_end_with | [optional] |
| **priority_range** | **string**| person_prospect_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPersonProspectTypesGetCollection200Response**](../Model/ApiPersonProspectTypesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectTypesIdDelete()`

```php
apiPersonProspectTypesIdDelete($id)
```

Removes the person_prospect_types resource.

Removes the person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier

try {
    $apiInstance->apiPersonProspectTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->apiPersonProspectTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |

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

## `apiPersonProspectTypesIdGet()`

```php
apiPersonProspectTypesIdGet($id): \OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_prospect_types resource.

Retrieves a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier

try {
    $result = $apiInstance->apiPersonProspectTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->apiPersonProspectTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectTypesIdPut()`

```php
apiPersonProspectTypesIdPut($id, $person_prospect_types_jsonld_post): \OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the person_prospect_types resource.

Replaces the person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier
$person_prospect_types_jsonld_post = new \OpenAPI\Client\Model\PersonProspectTypesJsonldPost(); // \OpenAPI\Client\Model\PersonProspectTypesJsonldPost | The updated person_prospect_types resource

try {
    $result = $apiInstance->apiPersonProspectTypesIdPut($id, $person_prospect_types_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->apiPersonProspectTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |
| **person_prospect_types_jsonld_post** | [**\OpenAPI\Client\Model\PersonProspectTypesJsonldPost**](../Model/PersonProspectTypesJsonldPost.md)| The updated person_prospect_types resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonProspectTypesPost()`

```php
apiPersonProspectTypesPost($person_prospect_types_jsonld_add_post): \OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_prospect_types resource.

Creates a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_prospect_types_jsonld_add_post = new \OpenAPI\Client\Model\PersonProspectTypesJsonldAddPost(); // \OpenAPI\Client\Model\PersonProspectTypesJsonldAddPost | The new person_prospect_types resource

try {
    $result = $apiInstance->apiPersonProspectTypesPost($person_prospect_types_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->apiPersonProspectTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_prospect_types_jsonld_add_post** | [**\OpenAPI\Client\Model\PersonProspectTypesJsonldAddPost**](../Model/PersonProspectTypesJsonldAddPost.md)| The new person_prospect_types resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectTypeApiFileUpload()`

```php
personProspectTypeApiFileUpload($id, $person_prospect_types_jsonld): \OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a person_prospect_types resource.

Creates a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier
$person_prospect_types_jsonld = new \OpenAPI\Client\Model\PersonProspectTypesJsonld(); // \OpenAPI\Client\Model\PersonProspectTypesJsonld | The new person_prospect_types resource

try {
    $result = $apiInstance->personProspectTypeApiFileUpload($id, $person_prospect_types_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->personProspectTypeApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |
| **person_prospect_types_jsonld** | [**\OpenAPI\Client\Model\PersonProspectTypesJsonld**](../Model/PersonProspectTypesJsonld.md)| The new person_prospect_types resource | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectTypeDropDown()`

```php
personProspectTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\PersonProspectTypeDropDown200Response
```

Retrieves the collection of person_prospect_types resources.

Retrieves the collection of person_prospect_types resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$priority_between = 'priority_between_example'; // string | 
$priority_gt = 'priority_gt_example'; // string | 
$priority_gte = 'priority_gte_example'; // string | 
$priority_lt = 'priority_lt_example'; // string | 
$priority_lte = 'priority_lte_example'; // string | 
$value_between = 'value_between_example'; // string | 
$value_gt = 'value_gt_example'; // string | 
$value_gte = 'value_gte_example'; // string | 
$value_lt = 'value_lt_example'; // string | 
$value_lte = 'value_lte_example'; // string | 
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
$order_color = 'order_color_example'; // string | 
$order_icon = 'order_icon_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | person_prospect_types slug_partial
$slug_start_with = 'slug_start_with_example'; // string | person_prospect_types slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | person_prospect_types slug_end_with
$id_partial = 'id_partial_example'; // string | person_prospect_types id_partial
$id_start_with = 'id_start_with_example'; // string | person_prospect_types id_start_with
$id_end_with = 'id_end_with_example'; // string | person_prospect_types id_end_with
$number_partial = 'number_partial_example'; // string | person_prospect_types number_partial
$number_start_with = 'number_start_with_example'; // string | person_prospect_types number_start_with
$number_end_with = 'number_end_with_example'; // string | person_prospect_types number_end_with
$color_partial = 'color_partial_example'; // string | person_prospect_types color_partial
$color_start_with = 'color_start_with_example'; // string | person_prospect_types color_start_with
$color_end_with = 'color_end_with_example'; // string | person_prospect_types color_end_with
$icon_partial = 'icon_partial_example'; // string | person_prospect_types icon_partial
$icon_start_with = 'icon_start_with_example'; // string | person_prospect_types icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | person_prospect_types icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | person_prospect_types translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | person_prospect_types translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | person_prospect_types translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | person_prospect_types translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | person_prospect_types translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | person_prospect_types translations.description_end_with
$priority_range = 'priority_range_example'; // string | person_prospect_types priority_range

try {
    $result = $apiInstance->personProspectTypeDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $number, $number2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $priority_between, $priority_gt, $priority_gte, $priority_lt, $priority_lte, $value_between, $value_gt, $value_gte, $value_lt, $value_lte, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_number, $exists_color, $exists_icon, $properties, $enabled, $tag, $order_id, $order_slug, $order_priority, $order_color, $order_icon, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $color_partial, $color_start_with, $color_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->personProspectTypeDropDown: ', $e->getMessage(), PHP_EOL;
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority_between** | **string**|  | [optional] |
| **priority_gt** | **string**|  | [optional] |
| **priority_gte** | **string**|  | [optional] |
| **priority_lt** | **string**|  | [optional] |
| **priority_lte** | **string**|  | [optional] |
| **value_between** | **string**|  | [optional] |
| **value_gt** | **string**|  | [optional] |
| **value_gte** | **string**|  | [optional] |
| **value_lt** | **string**|  | [optional] |
| **value_lte** | **string**|  | [optional] |
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
| **order_color** | **string**|  | [optional] |
| **order_icon** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| person_prospect_types slug_partial | [optional] |
| **slug_start_with** | **string**| person_prospect_types slug_start_with | [optional] |
| **slug_end_with** | **string**| person_prospect_types slug_end_with | [optional] |
| **id_partial** | **string**| person_prospect_types id_partial | [optional] |
| **id_start_with** | **string**| person_prospect_types id_start_with | [optional] |
| **id_end_with** | **string**| person_prospect_types id_end_with | [optional] |
| **number_partial** | **string**| person_prospect_types number_partial | [optional] |
| **number_start_with** | **string**| person_prospect_types number_start_with | [optional] |
| **number_end_with** | **string**| person_prospect_types number_end_with | [optional] |
| **color_partial** | **string**| person_prospect_types color_partial | [optional] |
| **color_start_with** | **string**| person_prospect_types color_start_with | [optional] |
| **color_end_with** | **string**| person_prospect_types color_end_with | [optional] |
| **icon_partial** | **string**| person_prospect_types icon_partial | [optional] |
| **icon_start_with** | **string**| person_prospect_types icon_start_with | [optional] |
| **icon_end_with** | **string**| person_prospect_types icon_end_with | [optional] |
| **translations_title_partial** | **string**| person_prospect_types translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| person_prospect_types translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| person_prospect_types translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| person_prospect_types translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| person_prospect_types translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| person_prospect_types translations.description_end_with | [optional] |
| **priority_range** | **string**| person_prospect_types priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypeDropDown200Response**](../Model/PersonProspectTypeDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectTypeDuplicate()`

```php
personProspectTypeDuplicate($id): \OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_prospect_types resource.

Retrieves a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier

try {
    $result = $apiInstance->personProspectTypeDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->personProspectTypeDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectTypeFetchFiles()`

```php
personProspectTypeFetchFiles($id): \OpenAPI\Client\Model\PersonProspectTypesJsonld
```

Retrieves a person_prospect_types resource.

Retrieves a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier

try {
    $result = $apiInstance->personProspectTypeFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->personProspectTypeFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonld**](../Model/PersonProspectTypesJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectTypeGetBySlug()`

```php
personProspectTypeGetBySlug($slug): \OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a person_prospect_types resource.

Retrieves a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | person_prospect_types identifier

try {
    $result = $apiInstance->personProspectTypeGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->personProspectTypeGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| person_prospect_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/PersonProspectTypesJsonldPersonProspectTypeShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectTypeGetDeleteRelations()`

```php
personProspectTypeGetDeleteRelations($id): \OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeRelations
```

Retrieves a person_prospect_types resource.

Retrieves a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier

try {
    $result = $apiInstance->personProspectTypeGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->personProspectTypeGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldPersonProspectTypeRelations**](../Model/PersonProspectTypesJsonldPersonProspectTypeRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personProspectTypeMetadata()`

```php
personProspectTypeMetadata($id): \OpenAPI\Client\Model\PersonProspectTypesJsonldIdStandardMetadataPersonProspectTypeMetadataTagTaggingListPersonProspectTypeRelationsTimestampable
```

Retrieves a person_prospect_types resource.

Retrieves a person_prospect_types resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PersonProspectTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | person_prospect_types identifier

try {
    $result = $apiInstance->personProspectTypeMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonProspectTypesApi->personProspectTypeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| person_prospect_types identifier | |

### Return type

[**\OpenAPI\Client\Model\PersonProspectTypesJsonldIdStandardMetadataPersonProspectTypeMetadataTagTaggingListPersonProspectTypeRelationsTimestampable**](../Model/PersonProspectTypesJsonldIdStandardMetadataPersonProspectTypeMetadataTagTaggingListPersonProspectTypeRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
