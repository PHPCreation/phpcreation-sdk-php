# OpenAPI\Client\OrganisationUnitsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiOrganisationUnitsGetCollection()**](OrganisationUnitsApi.md#apiOrganisationUnitsGetCollection) | **GET** /open-api/v3/organisation_units | Retrieves the collection of organisation_units resources. |
| [**apiOrganisationUnitsIdDelete()**](OrganisationUnitsApi.md#apiOrganisationUnitsIdDelete) | **DELETE** /open-api/v3/organisation_units/{id} | Removes the organisation_units resource. |
| [**apiOrganisationUnitsIdGet()**](OrganisationUnitsApi.md#apiOrganisationUnitsIdGet) | **GET** /open-api/v3/organisation_units/{id} | Retrieves a organisation_units resource. |
| [**apiOrganisationUnitsIdPut()**](OrganisationUnitsApi.md#apiOrganisationUnitsIdPut) | **PUT** /open-api/v3/organisation_units/{id} | Replaces the organisation_units resource. |
| [**apiOrganisationUnitsPost()**](OrganisationUnitsApi.md#apiOrganisationUnitsPost) | **POST** /open-api/v3/organisation_units | Creates a organisation_units resource. |
| [**organisationUnitsApiCorporationAdd()**](OrganisationUnitsApi.md#organisationUnitsApiCorporationAdd) | **POST** /open-api/v3/organisation_units/{id}/corporation/add | Creates a organisation_units resource. |
| [**organisationUnitsApiCorporationRemove()**](OrganisationUnitsApi.md#organisationUnitsApiCorporationRemove) | **POST** /open-api/v3/organisation_units/{id}/corporation/remove | Creates a organisation_units resource. |
| [**organisationUnitsApiFileUpload()**](OrganisationUnitsApi.md#organisationUnitsApiFileUpload) | **POST** /open-api/v3/organisation_units/{id}/file/upload | Creates a organisation_units resource. |
| [**organisationUnitsDropDown()**](OrganisationUnitsApi.md#organisationUnitsDropDown) | **GET** /open-api/v3/organisation_units/dropdown/get | Retrieves the collection of organisation_units resources. |
| [**organisationUnitsDuplicate()**](OrganisationUnitsApi.md#organisationUnitsDuplicate) | **GET** /open-api/v3/organisation_units/duplicate/{id} | Retrieves a organisation_units resource. |
| [**organisationUnitsFetchFiles()**](OrganisationUnitsApi.md#organisationUnitsFetchFiles) | **GET** /open-api/v3/organisation_units/fetch_files/{id} | Retrieves a organisation_units resource. |
| [**organisationUnitsGetBySlug()**](OrganisationUnitsApi.md#organisationUnitsGetBySlug) | **GET** /open-api/v3/organisation_units/by_slug/{slug} | Retrieves a organisation_units resource. |
| [**organisationUnitsGetDeleteRelations()**](OrganisationUnitsApi.md#organisationUnitsGetDeleteRelations) | **GET** /open-api/v3/organisation_units/get_delete_relations/{id} | Retrieves a organisation_units resource. |
| [**organisationUnitsMetadata()**](OrganisationUnitsApi.md#organisationUnitsMetadata) | **GET** /open-api/v3/organisation_units/metadata/{id} | Retrieves a organisation_units resource. |
| [**productApiSellsReportListing()**](OrganisationUnitsApi.md#productApiSellsReportListing) | **GET** /open-api/v3/organisation_units/sells/report/listing | Retrieves the collection of organisation_units resources. |
| [**productApiSellsReportSummary()**](OrganisationUnitsApi.md#productApiSellsReportSummary) | **GET** /open-api/v3/organisation_units/sells/report/summary | Retrieves the collection of organisation_units resources. |


## `apiOrganisationUnitsGetCollection()`

```php
apiOrganisationUnitsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\ApiOrganisationUnitsGetCollection200Response
```

Retrieves the collection of organisation_units resources.

Retrieves the collection of organisation_units resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
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
$entity = 'entity_example'; // string | 
$entity2 = array('entity_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | organisation_units slug_partial
$slug_start_with = 'slug_start_with_example'; // string | organisation_units slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | organisation_units slug_end_with
$id_partial = 'id_partial_example'; // string | organisation_units id_partial
$id_start_with = 'id_start_with_example'; // string | organisation_units id_start_with
$id_end_with = 'id_end_with_example'; // string | organisation_units id_end_with

try {
    $result = $apiInstance->apiOrganisationUnitsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->apiOrganisationUnitsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **entity** | **string**|  | [optional] |
| **entity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| organisation_units slug_partial | [optional] |
| **slug_start_with** | **string**| organisation_units slug_start_with | [optional] |
| **slug_end_with** | **string**| organisation_units slug_end_with | [optional] |
| **id_partial** | **string**| organisation_units id_partial | [optional] |
| **id_start_with** | **string**| organisation_units id_start_with | [optional] |
| **id_end_with** | **string**| organisation_units id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiOrganisationUnitsGetCollection200Response**](../Model/ApiOrganisationUnitsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganisationUnitsIdDelete()`

```php
apiOrganisationUnitsIdDelete($id)
```

Removes the organisation_units resource.

Removes the organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier

try {
    $apiInstance->apiOrganisationUnitsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->apiOrganisationUnitsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |

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

## `apiOrganisationUnitsIdGet()`

```php
apiOrganisationUnitsIdGet($id): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty
```

Retrieves a organisation_units resource.

Retrieves a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier

try {
    $result = $apiInstance->apiOrganisationUnitsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->apiOrganisationUnitsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty**](../Model/OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganisationUnitsIdPut()`

```php
apiOrganisationUnitsIdPut($id, $organisation_units_jsonld_add_post): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty
```

Replaces the organisation_units resource.

Replaces the organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier
$organisation_units_jsonld_add_post = new \OpenAPI\Client\Model\OrganisationUnitsJsonldAddPost(); // \OpenAPI\Client\Model\OrganisationUnitsJsonldAddPost | The updated organisation_units resource

try {
    $result = $apiInstance->apiOrganisationUnitsIdPut($id, $organisation_units_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->apiOrganisationUnitsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |
| **organisation_units_jsonld_add_post** | [**\OpenAPI\Client\Model\OrganisationUnitsJsonldAddPost**](../Model/OrganisationUnitsJsonldAddPost.md)| The updated organisation_units resource | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty**](../Model/OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganisationUnitsPost()`

```php
apiOrganisationUnitsPost($organisation_units_jsonld_post_add): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitsShowCustomizedIdTimestampableTagTaggingListStandardShow
```

Creates a organisation_units resource.

Creates a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation_units_jsonld_post_add = new \OpenAPI\Client\Model\OrganisationUnitsJsonldPostAdd(); // \OpenAPI\Client\Model\OrganisationUnitsJsonldPostAdd | The new organisation_units resource

try {
    $result = $apiInstance->apiOrganisationUnitsPost($organisation_units_jsonld_post_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->apiOrganisationUnitsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation_units_jsonld_post_add** | [**\OpenAPI\Client\Model\OrganisationUnitsJsonldPostAdd**](../Model/OrganisationUnitsJsonldPostAdd.md)| The new organisation_units resource | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitsShowCustomizedIdTimestampableTagTaggingListStandardShow**](../Model/OrganisationUnitsJsonldOrganisationUnitsShowCustomizedIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsApiCorporationAdd()`

```php
organisationUnitsApiCorporationAdd($id, $organisation_units_jsonld): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowIdTimestampableTagTaggingListStandardShow
```

Creates a organisation_units resource.

Creates a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier
$organisation_units_jsonld = new \OpenAPI\Client\Model\OrganisationUnitsJsonld(); // \OpenAPI\Client\Model\OrganisationUnitsJsonld | The new organisation_units resource

try {
    $result = $apiInstance->organisationUnitsApiCorporationAdd($id, $organisation_units_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |
| **organisation_units_jsonld** | [**\OpenAPI\Client\Model\OrganisationUnitsJsonld**](../Model/OrganisationUnitsJsonld.md)| The new organisation_units resource | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowIdTimestampableTagTaggingListStandardShow**](../Model/OrganisationUnitsJsonldOrganisationUnitssShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsApiCorporationRemove()`

```php
organisationUnitsApiCorporationRemove($id, $organisation_units_jsonld): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowIdTimestampableTagTaggingListStandardShow
```

Creates a organisation_units resource.

Creates a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier
$organisation_units_jsonld = new \OpenAPI\Client\Model\OrganisationUnitsJsonld(); // \OpenAPI\Client\Model\OrganisationUnitsJsonld | The new organisation_units resource

try {
    $result = $apiInstance->organisationUnitsApiCorporationRemove($id, $organisation_units_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |
| **organisation_units_jsonld** | [**\OpenAPI\Client\Model\OrganisationUnitsJsonld**](../Model/OrganisationUnitsJsonld.md)| The new organisation_units resource | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowIdTimestampableTagTaggingListStandardShow**](../Model/OrganisationUnitsJsonldOrganisationUnitssShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsApiFileUpload()`

```php
organisationUnitsApiFileUpload($id, $organisation_units_jsonld): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty
```

Creates a organisation_units resource.

Creates a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier
$organisation_units_jsonld = new \OpenAPI\Client\Model\OrganisationUnitsJsonld(); // \OpenAPI\Client\Model\OrganisationUnitsJsonld | The new organisation_units resource

try {
    $result = $apiInstance->organisationUnitsApiFileUpload($id, $organisation_units_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |
| **organisation_units_jsonld** | [**\OpenAPI\Client\Model\OrganisationUnitsJsonld**](../Model/OrganisationUnitsJsonld.md)| The new organisation_units resource | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty**](../Model/OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsDropDown()`

```php
organisationUnitsDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with): \OpenAPI\Client\Model\OrganisationUnitsDropDown200Response
```

Retrieves the collection of organisation_units resources.

Retrieves the collection of organisation_units resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
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
$entity = 'entity_example'; // string | 
$entity2 = array('entity_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | organisation_units slug_partial
$slug_start_with = 'slug_start_with_example'; // string | organisation_units slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | organisation_units slug_end_with
$id_partial = 'id_partial_example'; // string | organisation_units id_partial
$id_start_with = 'id_start_with_example'; // string | organisation_units id_start_with
$id_end_with = 'id_end_with_example'; // string | organisation_units id_end_with

try {
    $result = $apiInstance->organisationUnitsDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsDropDown: ', $e->getMessage(), PHP_EOL;
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
| **entity** | **string**|  | [optional] |
| **entity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **slug_partial** | **string**| organisation_units slug_partial | [optional] |
| **slug_start_with** | **string**| organisation_units slug_start_with | [optional] |
| **slug_end_with** | **string**| organisation_units slug_end_with | [optional] |
| **id_partial** | **string**| organisation_units id_partial | [optional] |
| **id_start_with** | **string**| organisation_units id_start_with | [optional] |
| **id_end_with** | **string**| organisation_units id_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsDropDown200Response**](../Model/OrganisationUnitsDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsDuplicate()`

```php
organisationUnitsDuplicate($id): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty
```

Retrieves a organisation_units resource.

Retrieves a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier

try {
    $result = $apiInstance->organisationUnitsDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty**](../Model/OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsFetchFiles()`

```php
organisationUnitsFetchFiles($id): \OpenAPI\Client\Model\OrganisationUnitsJsonld
```

Retrieves a organisation_units resource.

Retrieves a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier

try {
    $result = $apiInstance->organisationUnitsFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonld**](../Model/OrganisationUnitsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsGetBySlug()`

```php
organisationUnitsGetBySlug($slug): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty
```

Retrieves a organisation_units resource.

Retrieves a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | organisation_units identifier

try {
    $result = $apiInstance->organisationUnitsGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| organisation_units identifier | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty**](../Model/OrganisationUnitsJsonldOrganisationUnitssShowStandardShowOrganisationUnitsShowIdTimestampableTagTaggingListOrganisationUnitsRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsGetDeleteRelations()`

```php
organisationUnitsGetDeleteRelations($id): \OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitsRelations
```

Retrieves a organisation_units resource.

Retrieves a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier

try {
    $result = $apiInstance->organisationUnitsGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldOrganisationUnitsRelations**](../Model/OrganisationUnitsJsonldOrganisationUnitsRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organisationUnitsMetadata()`

```php
organisationUnitsMetadata($id): \OpenAPI\Client\Model\OrganisationUnitsJsonldIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable
```

Retrieves a organisation_units resource.

Retrieves a organisation_units resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | organisation_units identifier

try {
    $result = $apiInstance->organisationUnitsMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->organisationUnitsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| organisation_units identifier | |

### Return type

[**\OpenAPI\Client\Model\OrganisationUnitsJsonldIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable**](../Model/OrganisationUnitsJsonldIdStandardMetadataOrganisationUnitsMetadataTagTaggingListOrganisationUnitsRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productApiSellsReportListing()`

```php
productApiSellsReportListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\ProductApiSellsReportListing200Response
```

Retrieves the collection of organisation_units resources.

Retrieves the collection of organisation_units resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
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
$entity = 'entity_example'; // string | 
$entity2 = array('entity_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->productApiSellsReportListing($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->productApiSellsReportListing: ', $e->getMessage(), PHP_EOL;
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
| **entity** | **string**|  | [optional] |
| **entity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductApiSellsReportListing200Response**](../Model/ProductApiSellsReportListing200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productApiSellsReportSummary()`

```php
productApiSellsReportSummary($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at): \OpenAPI\Client\Model\ProductApiSellsReportSummary200Response
```

Retrieves the collection of organisation_units resources.

Retrieves the collection of organisation_units resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationUnitsApi(
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
$entity = 'entity_example'; // string | 
$entity2 = array('entity_example'); // string[] | 
$search = 'search_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 

try {
    $result = $apiInstance->productApiSellsReportSummary($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $entity, $entity2, $search, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationUnitsApi->productApiSellsReportSummary: ', $e->getMessage(), PHP_EOL;
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
| **entity** | **string**|  | [optional] |
| **entity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductApiSellsReportSummary200Response**](../Model/ProductApiSellsReportSummary200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
