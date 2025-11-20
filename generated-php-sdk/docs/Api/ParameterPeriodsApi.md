# OpenAPI\Client\ParameterPeriodsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiParameterPeriodsGetCollection()**](ParameterPeriodsApi.md#apiParameterPeriodsGetCollection) | **GET** /open-api/v3/parameter_periods | Retrieves the collection of parameter_periods resources. |
| [**apiParameterPeriodsIdDelete()**](ParameterPeriodsApi.md#apiParameterPeriodsIdDelete) | **DELETE** /open-api/v3/parameter_periods/{id} | Removes the parameter_periods resource. |
| [**apiParameterPeriodsIdGet()**](ParameterPeriodsApi.md#apiParameterPeriodsIdGet) | **GET** /open-api/v3/parameter_periods/{id} | Retrieves a parameter_periods resource. |
| [**apiParameterPeriodsIdPut()**](ParameterPeriodsApi.md#apiParameterPeriodsIdPut) | **PUT** /open-api/v3/parameter_periods/{id} | Replaces the parameter_periods resource. |
| [**apiParameterPeriodsPost()**](ParameterPeriodsApi.md#apiParameterPeriodsPost) | **POST** /open-api/v3/parameter_periods | Creates a parameter_periods resource. |
| [**parameterPeriodApiFileUpload()**](ParameterPeriodsApi.md#parameterPeriodApiFileUpload) | **POST** /open-api/v3/parameter_periods/{id}/file/upload | Creates a parameter_periods resource. |
| [**parameterPeriodDropDown()**](ParameterPeriodsApi.md#parameterPeriodDropDown) | **GET** /open-api/v3/parameter_periods/dropdown/get | Retrieves the collection of parameter_periods resources. |
| [**parameterPeriodDuplicate()**](ParameterPeriodsApi.md#parameterPeriodDuplicate) | **GET** /open-api/v3/parameter_periods/duplicate/{id} | Retrieves a parameter_periods resource. |
| [**parameterPeriodFetchFiles()**](ParameterPeriodsApi.md#parameterPeriodFetchFiles) | **GET** /open-api/v3/parameter_periods/fetch_files/{id} | Retrieves a parameter_periods resource. |
| [**parameterPeriodGetBySlug()**](ParameterPeriodsApi.md#parameterPeriodGetBySlug) | **GET** /open-api/v3/parameter_periods/by_slug/{slug} | Retrieves a parameter_periods resource. |
| [**parameterPeriodGetDeleteRelations()**](ParameterPeriodsApi.md#parameterPeriodGetDeleteRelations) | **GET** /open-api/v3/parameter_periods/get_delete_relations/{id} | Retrieves a parameter_periods resource. |
| [**parameterPeriodMetadata()**](ParameterPeriodsApi.md#parameterPeriodMetadata) | **GET** /open-api/v3/parameter_periods/metadata/{id} | Retrieves a parameter_periods resource. |


## `apiParameterPeriodsGetCollection()`

```php
apiParameterPeriodsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $interval_spec_between, $interval_spec_gt, $interval_spec_gte, $interval_spec_lt, $interval_spec_lte, $order_id, $order_created_at, $order_updated_at, $order_interval_spec, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range): \OpenAPI\Client\Model\ApiParameterPeriodsGetCollection200Response
```

Retrieves the collection of parameter_periods resources.

Retrieves the collection of parameter_periods resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$interval_spec_between = 'interval_spec_between_example'; // string | 
$interval_spec_gt = 'interval_spec_gt_example'; // string | 
$interval_spec_gte = 'interval_spec_gte_example'; // string | 
$interval_spec_lt = 'interval_spec_lt_example'; // string | 
$interval_spec_lte = 'interval_spec_lte_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_interval_spec = 'order_interval_spec_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | parameter_periods slug_partial
$slug_start_with = 'slug_start_with_example'; // string | parameter_periods slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | parameter_periods slug_end_with
$id_partial = 'id_partial_example'; // string | parameter_periods id_partial
$id_start_with = 'id_start_with_example'; // string | parameter_periods id_start_with
$id_end_with = 'id_end_with_example'; // string | parameter_periods id_end_with
$number_partial = 'number_partial_example'; // string | parameter_periods number_partial
$number_start_with = 'number_start_with_example'; // string | parameter_periods number_start_with
$number_end_with = 'number_end_with_example'; // string | parameter_periods number_end_with
$icon_partial = 'icon_partial_example'; // string | parameter_periods icon_partial
$icon_start_with = 'icon_start_with_example'; // string | parameter_periods icon_start_with
$icon_end_with = 'icon_end_with_example'; // string | parameter_periods icon_end_with
$translations_title_partial = 'translations_title_partial_example'; // string | parameter_periods translations.title_partial
$translations_title_start_with = 'translations_title_start_with_example'; // string | parameter_periods translations.title_start_with
$translations_title_end_with = 'translations_title_end_with_example'; // string | parameter_periods translations.title_end_with
$translations_description_partial = 'translations_description_partial_example'; // string | parameter_periods translations.description_partial
$translations_description_start_with = 'translations_description_start_with_example'; // string | parameter_periods translations.description_start_with
$translations_description_end_with = 'translations_description_end_with_example'; // string | parameter_periods translations.description_end_with
$priority_range = 'priority_range_example'; // string | parameter_periods priority_range

try {
    $result = $apiInstance->apiParameterPeriodsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $interval_spec_between, $interval_spec_gt, $interval_spec_gte, $interval_spec_lt, $interval_spec_lte, $order_id, $order_created_at, $order_updated_at, $order_interval_spec, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $number_partial, $number_start_with, $number_end_with, $icon_partial, $icon_start_with, $icon_end_with, $translations_title_partial, $translations_title_start_with, $translations_title_end_with, $translations_description_partial, $translations_description_start_with, $translations_description_end_with, $priority_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->apiParameterPeriodsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval_spec_between** | **string**|  | [optional] |
| **interval_spec_gt** | **string**|  | [optional] |
| **interval_spec_gte** | **string**|  | [optional] |
| **interval_spec_lt** | **string**|  | [optional] |
| **interval_spec_lte** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_interval_spec** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| parameter_periods slug_partial | [optional] |
| **slug_start_with** | **string**| parameter_periods slug_start_with | [optional] |
| **slug_end_with** | **string**| parameter_periods slug_end_with | [optional] |
| **id_partial** | **string**| parameter_periods id_partial | [optional] |
| **id_start_with** | **string**| parameter_periods id_start_with | [optional] |
| **id_end_with** | **string**| parameter_periods id_end_with | [optional] |
| **number_partial** | **string**| parameter_periods number_partial | [optional] |
| **number_start_with** | **string**| parameter_periods number_start_with | [optional] |
| **number_end_with** | **string**| parameter_periods number_end_with | [optional] |
| **icon_partial** | **string**| parameter_periods icon_partial | [optional] |
| **icon_start_with** | **string**| parameter_periods icon_start_with | [optional] |
| **icon_end_with** | **string**| parameter_periods icon_end_with | [optional] |
| **translations_title_partial** | **string**| parameter_periods translations.title_partial | [optional] |
| **translations_title_start_with** | **string**| parameter_periods translations.title_start_with | [optional] |
| **translations_title_end_with** | **string**| parameter_periods translations.title_end_with | [optional] |
| **translations_description_partial** | **string**| parameter_periods translations.description_partial | [optional] |
| **translations_description_start_with** | **string**| parameter_periods translations.description_start_with | [optional] |
| **translations_description_end_with** | **string**| parameter_periods translations.description_end_with | [optional] |
| **priority_range** | **string**| parameter_periods priority_range | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiParameterPeriodsGetCollection200Response**](../Model/ApiParameterPeriodsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiParameterPeriodsIdDelete()`

```php
apiParameterPeriodsIdDelete($id)
```

Removes the parameter_periods resource.

Removes the parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier

try {
    $apiInstance->apiParameterPeriodsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->apiParameterPeriodsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |

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

## `apiParameterPeriodsIdGet()`

```php
apiParameterPeriodsIdGet($id): \OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingListStandardShow
```

Retrieves a parameter_periods resource.

Retrieves a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier

try {
    $result = $apiInstance->apiParameterPeriodsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->apiParameterPeriodsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingListStandardShow**](../Model/ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiParameterPeriodsIdPut()`

```php
apiParameterPeriodsIdPut($id, $parameter_periods_jsonld_post): \OpenAPI\Client\Model\ParameterPeriodsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Replaces the parameter_periods resource.

Replaces the parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier
$parameter_periods_jsonld_post = new \OpenAPI\Client\Model\ParameterPeriodsJsonldPost(); // \OpenAPI\Client\Model\ParameterPeriodsJsonldPost | The updated parameter_periods resource

try {
    $result = $apiInstance->apiParameterPeriodsIdPut($id, $parameter_periods_jsonld_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->apiParameterPeriodsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |
| **parameter_periods_jsonld_post** | [**\OpenAPI\Client\Model\ParameterPeriodsJsonldPost**](../Model/ParameterPeriodsJsonldPost.md)| The updated parameter_periods resource | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ParameterPeriodsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiParameterPeriodsPost()`

```php
apiParameterPeriodsPost($parameter_periods_jsonld_add_post): \OpenAPI\Client\Model\ParameterPeriodsJsonld
```

Creates a parameter_periods resource.

Creates a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parameter_periods_jsonld_add_post = new \OpenAPI\Client\Model\ParameterPeriodsJsonldAddPost(); // \OpenAPI\Client\Model\ParameterPeriodsJsonldAddPost | The new parameter_periods resource

try {
    $result = $apiInstance->apiParameterPeriodsPost($parameter_periods_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->apiParameterPeriodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parameter_periods_jsonld_add_post** | [**\OpenAPI\Client\Model\ParameterPeriodsJsonldAddPost**](../Model/ParameterPeriodsJsonldAddPost.md)| The new parameter_periods resource | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonld**](../Model/ParameterPeriodsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parameterPeriodApiFileUpload()`

```php
parameterPeriodApiFileUpload($id, $parameter_periods_jsonld): \OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingListStandardShow
```

Creates a parameter_periods resource.

Creates a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier
$parameter_periods_jsonld = new \OpenAPI\Client\Model\ParameterPeriodsJsonld(); // \OpenAPI\Client\Model\ParameterPeriodsJsonld | The new parameter_periods resource

try {
    $result = $apiInstance->parameterPeriodApiFileUpload($id, $parameter_periods_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->parameterPeriodApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |
| **parameter_periods_jsonld** | [**\OpenAPI\Client\Model\ParameterPeriodsJsonld**](../Model/ParameterPeriodsJsonld.md)| The new parameter_periods resource | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingListStandardShow**](../Model/ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parameterPeriodDropDown()`

```php
parameterPeriodDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $interval_spec_between, $interval_spec_gt, $interval_spec_gte, $interval_spec_lt, $interval_spec_lte, $order_id, $order_created_at, $order_updated_at, $order_interval_spec, $properties, $enabled, $tag): \OpenAPI\Client\Model\ParameterPeriodDropDown200Response
```

Retrieves the collection of parameter_periods resources.

Retrieves the collection of parameter_periods resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
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
$priority = 56; // int | 
$priority2 = array(56); // int[] | 
$interval_spec_between = 'interval_spec_between_example'; // string | 
$interval_spec_gt = 'interval_spec_gt_example'; // string | 
$interval_spec_gte = 'interval_spec_gte_example'; // string | 
$interval_spec_lt = 'interval_spec_lt_example'; // string | 
$interval_spec_lte = 'interval_spec_lte_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_interval_spec = 'order_interval_spec_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->parameterPeriodDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $slug, $slug2, $id, $id2, $color, $color2, $icon, $icon2, $search, $priority, $priority2, $interval_spec_between, $interval_spec_gt, $interval_spec_gte, $interval_spec_lt, $interval_spec_lte, $order_id, $order_created_at, $order_updated_at, $order_interval_spec, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->parameterPeriodDropDown: ', $e->getMessage(), PHP_EOL;
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
| **priority** | **int**|  | [optional] |
| **priority2** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval_spec_between** | **string**|  | [optional] |
| **interval_spec_gt** | **string**|  | [optional] |
| **interval_spec_gte** | **string**|  | [optional] |
| **interval_spec_lt** | **string**|  | [optional] |
| **interval_spec_lte** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_interval_spec** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodDropDown200Response**](../Model/ParameterPeriodDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parameterPeriodDuplicate()`

```php
parameterPeriodDuplicate($id): \OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingList
```

Retrieves a parameter_periods resource.

Retrieves a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier

try {
    $result = $apiInstance->parameterPeriodDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->parameterPeriodDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingList**](../Model/ParameterPeriodsJsonldParameterPeriodShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parameterPeriodFetchFiles()`

```php
parameterPeriodFetchFiles($id): \OpenAPI\Client\Model\ParameterPeriodsJsonld
```

Retrieves a parameter_periods resource.

Retrieves a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier

try {
    $result = $apiInstance->parameterPeriodFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->parameterPeriodFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonld**](../Model/ParameterPeriodsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parameterPeriodGetBySlug()`

```php
parameterPeriodGetBySlug($slug): \OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdCustomPropertyTimestampableTagTaggingList
```

Retrieves a parameter_periods resource.

Retrieves a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | parameter_periods identifier

try {
    $result = $apiInstance->parameterPeriodGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->parameterPeriodGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| parameter_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodShowIdCustomPropertyTimestampableTagTaggingList**](../Model/ParameterPeriodsJsonldParameterPeriodShowIdCustomPropertyTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parameterPeriodGetDeleteRelations()`

```php
parameterPeriodGetDeleteRelations($id): \OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodRelations
```

Retrieves a parameter_periods resource.

Retrieves a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier

try {
    $result = $apiInstance->parameterPeriodGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->parameterPeriodGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonldParameterPeriodRelations**](../Model/ParameterPeriodsJsonldParameterPeriodRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parameterPeriodMetadata()`

```php
parameterPeriodMetadata($id): \OpenAPI\Client\Model\ParameterPeriodsJsonldIdStandardMetadataParameterPeriodMetadataTagTaggingListParameterPeriodRelationsTimestampable
```

Retrieves a parameter_periods resource.

Retrieves a parameter_periods resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ParameterPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | parameter_periods identifier

try {
    $result = $apiInstance->parameterPeriodMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterPeriodsApi->parameterPeriodMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| parameter_periods identifier | |

### Return type

[**\OpenAPI\Client\Model\ParameterPeriodsJsonldIdStandardMetadataParameterPeriodMetadataTagTaggingListParameterPeriodRelationsTimestampable**](../Model/ParameterPeriodsJsonldIdStandardMetadataParameterPeriodMetadataTagTaggingListParameterPeriodRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
