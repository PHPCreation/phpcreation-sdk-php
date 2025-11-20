# OpenAPI\Client\CoordinateLocationsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCoordinateLocationsGetCollection()**](CoordinateLocationsApi.md#apiCoordinateLocationsGetCollection) | **GET** /open-api/v3/coordinate_locations | Retrieves the collection of coordinate_locations resources. |
| [**apiCoordinateLocationsIdDelete()**](CoordinateLocationsApi.md#apiCoordinateLocationsIdDelete) | **DELETE** /open-api/v3/coordinate_locations/{id} | Removes the coordinate_locations resource. |
| [**apiCoordinateLocationsIdGet()**](CoordinateLocationsApi.md#apiCoordinateLocationsIdGet) | **GET** /open-api/v3/coordinate_locations/{id} | Retrieves a coordinate_locations resource. |
| [**apiCoordinateLocationsIdPut()**](CoordinateLocationsApi.md#apiCoordinateLocationsIdPut) | **PUT** /open-api/v3/coordinate_locations/{id} | Replaces the coordinate_locations resource. |
| [**apiCoordinateLocationsPost()**](CoordinateLocationsApi.md#apiCoordinateLocationsPost) | **POST** /open-api/v3/coordinate_locations | Creates a coordinate_locations resource. |
| [**coordinateLocationApiCorporationAdd()**](CoordinateLocationsApi.md#coordinateLocationApiCorporationAdd) | **POST** /open-api/v3/coordinate_locations/{id}/corporation/add | Creates a coordinate_locations resource. |
| [**coordinateLocationApiCorporationRemove()**](CoordinateLocationsApi.md#coordinateLocationApiCorporationRemove) | **POST** /open-api/v3/coordinate_locations/{id}/corporation/remove | Creates a coordinate_locations resource. |
| [**coordinateLocationApiFileUpload()**](CoordinateLocationsApi.md#coordinateLocationApiFileUpload) | **POST** /open-api/v3/coordinate_locations/{id}/file/upload | Creates a coordinate_locations resource. |
| [**coordinateLocationDropDown()**](CoordinateLocationsApi.md#coordinateLocationDropDown) | **GET** /open-api/v3/coordinate_locations/dropdown/get | Retrieves the collection of coordinate_locations resources. |
| [**coordinateLocationDuplicate()**](CoordinateLocationsApi.md#coordinateLocationDuplicate) | **GET** /open-api/v3/coordinate_locations/duplicate/{id} | Retrieves a coordinate_locations resource. |
| [**coordinateLocationFetchFiles()**](CoordinateLocationsApi.md#coordinateLocationFetchFiles) | **GET** /open-api/v3/coordinate_locations/fetch_files/{id} | Retrieves a coordinate_locations resource. |
| [**coordinateLocationGetBySlug()**](CoordinateLocationsApi.md#coordinateLocationGetBySlug) | **GET** /open-api/v3/coordinate_locations/by_slug/{slug} | Retrieves a coordinate_locations resource. |
| [**coordinateLocationGetDeleteRelations()**](CoordinateLocationsApi.md#coordinateLocationGetDeleteRelations) | **GET** /open-api/v3/coordinate_locations/get_delete_relations/{id} | Retrieves a coordinate_locations resource. |
| [**coordinateLocationMetadata()**](CoordinateLocationsApi.md#coordinateLocationMetadata) | **GET** /open-api/v3/coordinate_locations/metadata/{id} | Retrieves a coordinate_locations resource. |


## `apiCoordinateLocationsGetCollection()`

```php
apiCoordinateLocationsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $road, $road2, $city, $city2, $state, $state2, $country, $country2, $postal_code, $postal_code2, $search, $exists_deleted_at, $exists_custom_properties, $exists_address, $exists_suite, $exists_road, $exists_city, $exists_state, $exists_postal_code, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_suite, $order_road, $order_city, $order_state, $order_country, $order_postal_code, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $adress_partial, $adress_start_with, $adress_end_with, $road_partial, $road_start_with, $road_end_with, $city_partial, $city_start_with, $city_end_with, $state_partial, $state_start_with, $state_end_with, $country_partial, $country_start_with, $country_end_with, $postal_code_partial, $postal_code_start_with, $postal_code_end_with): \OpenAPI\Client\Model\ApiCoordinateLocationsGetCollection200Response
```

Retrieves the collection of coordinate_locations resources.

Retrieves the collection of coordinate_locations resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
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
$road = 'road_example'; // string | 
$road2 = array('road_example'); // string[] | 
$city = 'city_example'; // string | 
$city2 = array('city_example'); // string[] | 
$state = 'state_example'; // string | 
$state2 = array('state_example'); // string[] | 
$country = 'country_example'; // string | 
$country2 = array('country_example'); // string[] | 
$postal_code = 'postal_code_example'; // string | 
$postal_code2 = array('postal_code_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_address = True; // bool | 
$exists_suite = True; // bool | 
$exists_road = True; // bool | 
$exists_city = True; // bool | 
$exists_state = True; // bool | 
$exists_postal_code = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_suite = 'order_suite_example'; // string | 
$order_road = 'order_road_example'; // string | 
$order_city = 'order_city_example'; // string | 
$order_state = 'order_state_example'; // string | 
$order_country = 'order_country_example'; // string | 
$order_postal_code = 'order_postal_code_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | coordinate_locations slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinate_locations slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinate_locations slug_end_with
$id_partial = 'id_partial_example'; // string | coordinate_locations id_partial
$id_start_with = 'id_start_with_example'; // string | coordinate_locations id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinate_locations id_end_with
$adress_partial = 'adress_partial_example'; // string | coordinate_locations adress_partial
$adress_start_with = 'adress_start_with_example'; // string | coordinate_locations adress_start_with
$adress_end_with = 'adress_end_with_example'; // string | coordinate_locations adress_end_with
$road_partial = 'road_partial_example'; // string | coordinate_locations road_partial
$road_start_with = 'road_start_with_example'; // string | coordinate_locations road_start_with
$road_end_with = 'road_end_with_example'; // string | coordinate_locations road_end_with
$city_partial = 'city_partial_example'; // string | coordinate_locations city_partial
$city_start_with = 'city_start_with_example'; // string | coordinate_locations city_start_with
$city_end_with = 'city_end_with_example'; // string | coordinate_locations city_end_with
$state_partial = 'state_partial_example'; // string | coordinate_locations state_partial
$state_start_with = 'state_start_with_example'; // string | coordinate_locations state_start_with
$state_end_with = 'state_end_with_example'; // string | coordinate_locations state_end_with
$country_partial = 'country_partial_example'; // string | coordinate_locations country_partial
$country_start_with = 'country_start_with_example'; // string | coordinate_locations country_start_with
$country_end_with = 'country_end_with_example'; // string | coordinate_locations country_end_with
$postal_code_partial = 'postal_code_partial_example'; // string | coordinate_locations postalCode_partial
$postal_code_start_with = 'postal_code_start_with_example'; // string | coordinate_locations postalCode_start_with
$postal_code_end_with = 'postal_code_end_with_example'; // string | coordinate_locations postalCode_end_with

try {
    $result = $apiInstance->apiCoordinateLocationsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $road, $road2, $city, $city2, $state, $state2, $country, $country2, $postal_code, $postal_code2, $search, $exists_deleted_at, $exists_custom_properties, $exists_address, $exists_suite, $exists_road, $exists_city, $exists_state, $exists_postal_code, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_suite, $order_road, $order_city, $order_state, $order_country, $order_postal_code, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $adress_partial, $adress_start_with, $adress_end_with, $road_partial, $road_start_with, $road_end_with, $city_partial, $city_start_with, $city_end_with, $state_partial, $state_start_with, $state_end_with, $country_partial, $country_start_with, $country_end_with, $postal_code_partial, $postal_code_start_with, $postal_code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->apiCoordinateLocationsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **road** | **string**|  | [optional] |
| **road2** | [**string[]**](../Model/string.md)|  | [optional] |
| **city** | **string**|  | [optional] |
| **city2** | [**string[]**](../Model/string.md)|  | [optional] |
| **state** | **string**|  | [optional] |
| **state2** | [**string[]**](../Model/string.md)|  | [optional] |
| **country** | **string**|  | [optional] |
| **country2** | [**string[]**](../Model/string.md)|  | [optional] |
| **postal_code** | **string**|  | [optional] |
| **postal_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_address** | **bool**|  | [optional] |
| **exists_suite** | **bool**|  | [optional] |
| **exists_road** | **bool**|  | [optional] |
| **exists_city** | **bool**|  | [optional] |
| **exists_state** | **bool**|  | [optional] |
| **exists_postal_code** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_suite** | **string**|  | [optional] |
| **order_road** | **string**|  | [optional] |
| **order_city** | **string**|  | [optional] |
| **order_state** | **string**|  | [optional] |
| **order_country** | **string**|  | [optional] |
| **order_postal_code** | **string**|  | [optional] |
| **slug_partial** | **string**| coordinate_locations slug_partial | [optional] |
| **slug_start_with** | **string**| coordinate_locations slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinate_locations slug_end_with | [optional] |
| **id_partial** | **string**| coordinate_locations id_partial | [optional] |
| **id_start_with** | **string**| coordinate_locations id_start_with | [optional] |
| **id_end_with** | **string**| coordinate_locations id_end_with | [optional] |
| **adress_partial** | **string**| coordinate_locations adress_partial | [optional] |
| **adress_start_with** | **string**| coordinate_locations adress_start_with | [optional] |
| **adress_end_with** | **string**| coordinate_locations adress_end_with | [optional] |
| **road_partial** | **string**| coordinate_locations road_partial | [optional] |
| **road_start_with** | **string**| coordinate_locations road_start_with | [optional] |
| **road_end_with** | **string**| coordinate_locations road_end_with | [optional] |
| **city_partial** | **string**| coordinate_locations city_partial | [optional] |
| **city_start_with** | **string**| coordinate_locations city_start_with | [optional] |
| **city_end_with** | **string**| coordinate_locations city_end_with | [optional] |
| **state_partial** | **string**| coordinate_locations state_partial | [optional] |
| **state_start_with** | **string**| coordinate_locations state_start_with | [optional] |
| **state_end_with** | **string**| coordinate_locations state_end_with | [optional] |
| **country_partial** | **string**| coordinate_locations country_partial | [optional] |
| **country_start_with** | **string**| coordinate_locations country_start_with | [optional] |
| **country_end_with** | **string**| coordinate_locations country_end_with | [optional] |
| **postal_code_partial** | **string**| coordinate_locations postalCode_partial | [optional] |
| **postal_code_start_with** | **string**| coordinate_locations postalCode_start_with | [optional] |
| **postal_code_end_with** | **string**| coordinate_locations postalCode_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiCoordinateLocationsGetCollection200Response**](../Model/ApiCoordinateLocationsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateLocationsIdDelete()`

```php
apiCoordinateLocationsIdDelete($id)
```

Removes the coordinate_locations resource.

Removes the coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier

try {
    $apiInstance->apiCoordinateLocationsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->apiCoordinateLocationsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |

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

## `apiCoordinateLocationsIdGet()`

```php
apiCoordinateLocationsIdGet($id): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinate_locations resource.

Retrieves a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier

try {
    $result = $apiInstance->apiCoordinateLocationsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->apiCoordinateLocationsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateLocationsIdPut()`

```php
apiCoordinateLocationsIdPut($id, $coordinate_locations_jsonld_add_post): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the coordinate_locations resource.

Replaces the coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier
$coordinate_locations_jsonld_add_post = new \OpenAPI\Client\Model\CoordinateLocationsJsonldAddPost(); // \OpenAPI\Client\Model\CoordinateLocationsJsonldAddPost | The updated coordinate_locations resource

try {
    $result = $apiInstance->apiCoordinateLocationsIdPut($id, $coordinate_locations_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->apiCoordinateLocationsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |
| **coordinate_locations_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonldAddPost**](../Model/CoordinateLocationsJsonldAddPost.md)| The updated coordinate_locations resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCoordinateLocationsPost()`

```php
apiCoordinateLocationsPost($coordinate_locations_jsonld_add_post): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a coordinate_locations resource.

Creates a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coordinate_locations_jsonld_add_post = new \OpenAPI\Client\Model\CoordinateLocationsJsonldAddPost(); // \OpenAPI\Client\Model\CoordinateLocationsJsonldAddPost | The new coordinate_locations resource

try {
    $result = $apiInstance->apiCoordinateLocationsPost($coordinate_locations_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->apiCoordinateLocationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coordinate_locations_jsonld_add_post** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonldAddPost**](../Model/CoordinateLocationsJsonldAddPost.md)| The new coordinate_locations resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationApiCorporationAdd()`

```php
coordinateLocationApiCorporationAdd($id, $coordinate_locations_jsonld): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowIdTimestampableTagTaggingListStandardShow
```

Creates a coordinate_locations resource.

Creates a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier
$coordinate_locations_jsonld = new \OpenAPI\Client\Model\CoordinateLocationsJsonld(); // \OpenAPI\Client\Model\CoordinateLocationsJsonld | The new coordinate_locations resource

try {
    $result = $apiInstance->coordinateLocationApiCorporationAdd($id, $coordinate_locations_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |
| **coordinate_locations_jsonld** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonld**](../Model/CoordinateLocationsJsonld.md)| The new coordinate_locations resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowIdTimestampableTagTaggingListStandardShow**](../Model/CoordinateLocationsJsonldCoordinateLocationShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationApiCorporationRemove()`

```php
coordinateLocationApiCorporationRemove($id, $coordinate_locations_jsonld): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowIdTimestampableTagTaggingListStandardShow
```

Creates a coordinate_locations resource.

Creates a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier
$coordinate_locations_jsonld = new \OpenAPI\Client\Model\CoordinateLocationsJsonld(); // \OpenAPI\Client\Model\CoordinateLocationsJsonld | The new coordinate_locations resource

try {
    $result = $apiInstance->coordinateLocationApiCorporationRemove($id, $coordinate_locations_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |
| **coordinate_locations_jsonld** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonld**](../Model/CoordinateLocationsJsonld.md)| The new coordinate_locations resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowIdTimestampableTagTaggingListStandardShow**](../Model/CoordinateLocationsJsonldCoordinateLocationShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationApiFileUpload()`

```php
coordinateLocationApiFileUpload($id, $coordinate_locations_jsonld): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a coordinate_locations resource.

Creates a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier
$coordinate_locations_jsonld = new \OpenAPI\Client\Model\CoordinateLocationsJsonld(); // \OpenAPI\Client\Model\CoordinateLocationsJsonld | The new coordinate_locations resource

try {
    $result = $apiInstance->coordinateLocationApiFileUpload($id, $coordinate_locations_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |
| **coordinate_locations_jsonld** | [**\OpenAPI\Client\Model\CoordinateLocationsJsonld**](../Model/CoordinateLocationsJsonld.md)| The new coordinate_locations resource | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationDropDown()`

```php
coordinateLocationDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $road, $road2, $city, $city2, $state, $state2, $country, $country2, $postal_code, $postal_code2, $search, $exists_deleted_at, $exists_custom_properties, $exists_address, $exists_suite, $exists_road, $exists_city, $exists_state, $exists_postal_code, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_suite, $order_road, $order_city, $order_state, $order_country, $order_postal_code, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $adress_partial, $adress_start_with, $adress_end_with, $road_partial, $road_start_with, $road_end_with, $city_partial, $city_start_with, $city_end_with, $state_partial, $state_start_with, $state_end_with, $country_partial, $country_start_with, $country_end_with, $postal_code_partial, $postal_code_start_with, $postal_code_end_with): \OpenAPI\Client\Model\CoordinateLocationDropDown200Response
```

Retrieves the collection of coordinate_locations resources.

Retrieves the collection of coordinate_locations resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
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
$road = 'road_example'; // string | 
$road2 = array('road_example'); // string[] | 
$city = 'city_example'; // string | 
$city2 = array('city_example'); // string[] | 
$state = 'state_example'; // string | 
$state2 = array('state_example'); // string[] | 
$country = 'country_example'; // string | 
$country2 = array('country_example'); // string[] | 
$postal_code = 'postal_code_example'; // string | 
$postal_code2 = array('postal_code_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_address = True; // bool | 
$exists_suite = True; // bool | 
$exists_road = True; // bool | 
$exists_city = True; // bool | 
$exists_state = True; // bool | 
$exists_postal_code = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_suite = 'order_suite_example'; // string | 
$order_road = 'order_road_example'; // string | 
$order_city = 'order_city_example'; // string | 
$order_state = 'order_state_example'; // string | 
$order_country = 'order_country_example'; // string | 
$order_postal_code = 'order_postal_code_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | coordinate_locations slug_partial
$slug_start_with = 'slug_start_with_example'; // string | coordinate_locations slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | coordinate_locations slug_end_with
$id_partial = 'id_partial_example'; // string | coordinate_locations id_partial
$id_start_with = 'id_start_with_example'; // string | coordinate_locations id_start_with
$id_end_with = 'id_end_with_example'; // string | coordinate_locations id_end_with
$adress_partial = 'adress_partial_example'; // string | coordinate_locations adress_partial
$adress_start_with = 'adress_start_with_example'; // string | coordinate_locations adress_start_with
$adress_end_with = 'adress_end_with_example'; // string | coordinate_locations adress_end_with
$road_partial = 'road_partial_example'; // string | coordinate_locations road_partial
$road_start_with = 'road_start_with_example'; // string | coordinate_locations road_start_with
$road_end_with = 'road_end_with_example'; // string | coordinate_locations road_end_with
$city_partial = 'city_partial_example'; // string | coordinate_locations city_partial
$city_start_with = 'city_start_with_example'; // string | coordinate_locations city_start_with
$city_end_with = 'city_end_with_example'; // string | coordinate_locations city_end_with
$state_partial = 'state_partial_example'; // string | coordinate_locations state_partial
$state_start_with = 'state_start_with_example'; // string | coordinate_locations state_start_with
$state_end_with = 'state_end_with_example'; // string | coordinate_locations state_end_with
$country_partial = 'country_partial_example'; // string | coordinate_locations country_partial
$country_start_with = 'country_start_with_example'; // string | coordinate_locations country_start_with
$country_end_with = 'country_end_with_example'; // string | coordinate_locations country_end_with
$postal_code_partial = 'postal_code_partial_example'; // string | coordinate_locations postalCode_partial
$postal_code_start_with = 'postal_code_start_with_example'; // string | coordinate_locations postalCode_start_with
$postal_code_end_with = 'postal_code_end_with_example'; // string | coordinate_locations postalCode_end_with

try {
    $result = $apiInstance->coordinateLocationDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $id, $id2, $slug, $slug2, $road, $road2, $city, $city2, $state, $state2, $country, $country2, $postal_code, $postal_code2, $search, $exists_deleted_at, $exists_custom_properties, $exists_address, $exists_suite, $exists_road, $exists_city, $exists_state, $exists_postal_code, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_suite, $order_road, $order_city, $order_state, $order_country, $order_postal_code, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $adress_partial, $adress_start_with, $adress_end_with, $road_partial, $road_start_with, $road_end_with, $city_partial, $city_start_with, $city_end_with, $state_partial, $state_start_with, $state_end_with, $country_partial, $country_start_with, $country_end_with, $postal_code_partial, $postal_code_start_with, $postal_code_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationDropDown: ', $e->getMessage(), PHP_EOL;
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
| **road** | **string**|  | [optional] |
| **road2** | [**string[]**](../Model/string.md)|  | [optional] |
| **city** | **string**|  | [optional] |
| **city2** | [**string[]**](../Model/string.md)|  | [optional] |
| **state** | **string**|  | [optional] |
| **state2** | [**string[]**](../Model/string.md)|  | [optional] |
| **country** | **string**|  | [optional] |
| **country2** | [**string[]**](../Model/string.md)|  | [optional] |
| **postal_code** | **string**|  | [optional] |
| **postal_code2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_address** | **bool**|  | [optional] |
| **exists_suite** | **bool**|  | [optional] |
| **exists_road** | **bool**|  | [optional] |
| **exists_city** | **bool**|  | [optional] |
| **exists_state** | **bool**|  | [optional] |
| **exists_postal_code** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_suite** | **string**|  | [optional] |
| **order_road** | **string**|  | [optional] |
| **order_city** | **string**|  | [optional] |
| **order_state** | **string**|  | [optional] |
| **order_country** | **string**|  | [optional] |
| **order_postal_code** | **string**|  | [optional] |
| **slug_partial** | **string**| coordinate_locations slug_partial | [optional] |
| **slug_start_with** | **string**| coordinate_locations slug_start_with | [optional] |
| **slug_end_with** | **string**| coordinate_locations slug_end_with | [optional] |
| **id_partial** | **string**| coordinate_locations id_partial | [optional] |
| **id_start_with** | **string**| coordinate_locations id_start_with | [optional] |
| **id_end_with** | **string**| coordinate_locations id_end_with | [optional] |
| **adress_partial** | **string**| coordinate_locations adress_partial | [optional] |
| **adress_start_with** | **string**| coordinate_locations adress_start_with | [optional] |
| **adress_end_with** | **string**| coordinate_locations adress_end_with | [optional] |
| **road_partial** | **string**| coordinate_locations road_partial | [optional] |
| **road_start_with** | **string**| coordinate_locations road_start_with | [optional] |
| **road_end_with** | **string**| coordinate_locations road_end_with | [optional] |
| **city_partial** | **string**| coordinate_locations city_partial | [optional] |
| **city_start_with** | **string**| coordinate_locations city_start_with | [optional] |
| **city_end_with** | **string**| coordinate_locations city_end_with | [optional] |
| **state_partial** | **string**| coordinate_locations state_partial | [optional] |
| **state_start_with** | **string**| coordinate_locations state_start_with | [optional] |
| **state_end_with** | **string**| coordinate_locations state_end_with | [optional] |
| **country_partial** | **string**| coordinate_locations country_partial | [optional] |
| **country_start_with** | **string**| coordinate_locations country_start_with | [optional] |
| **country_end_with** | **string**| coordinate_locations country_end_with | [optional] |
| **postal_code_partial** | **string**| coordinate_locations postalCode_partial | [optional] |
| **postal_code_start_with** | **string**| coordinate_locations postalCode_start_with | [optional] |
| **postal_code_end_with** | **string**| coordinate_locations postalCode_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationDropDown200Response**](../Model/CoordinateLocationDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationDuplicate()`

```php
coordinateLocationDuplicate($id): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinate_locations resource.

Retrieves a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier

try {
    $result = $apiInstance->coordinateLocationDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationFetchFiles()`

```php
coordinateLocationFetchFiles($id): \OpenAPI\Client\Model\CoordinateLocationsJsonld
```

Retrieves a coordinate_locations resource.

Retrieves a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier

try {
    $result = $apiInstance->coordinateLocationFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonld**](../Model/CoordinateLocationsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationGetBySlug()`

```php
coordinateLocationGetBySlug($slug): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a coordinate_locations resource.

Retrieves a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | coordinate_locations identifier

try {
    $result = $apiInstance->coordinateLocationGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| coordinate_locations identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/CoordinateLocationsJsonldCoordinateLocationShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationGetDeleteRelations()`

```php
coordinateLocationGetDeleteRelations($id): \OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationRelations
```

Retrieves a coordinate_locations resource.

Retrieves a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier

try {
    $result = $apiInstance->coordinateLocationGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldCoordinateLocationRelations**](../Model/CoordinateLocationsJsonldCoordinateLocationRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coordinateLocationMetadata()`

```php
coordinateLocationMetadata($id): \OpenAPI\Client\Model\CoordinateLocationsJsonldIdStandardMetadataCoordinateLocationMetadataTagTaggingListCoordinateLocationRelationsTimestampable
```

Retrieves a coordinate_locations resource.

Retrieves a coordinate_locations resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoordinateLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | coordinate_locations identifier

try {
    $result = $apiInstance->coordinateLocationMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoordinateLocationsApi->coordinateLocationMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| coordinate_locations identifier | |

### Return type

[**\OpenAPI\Client\Model\CoordinateLocationsJsonldIdStandardMetadataCoordinateLocationMetadataTagTaggingListCoordinateLocationRelationsTimestampable**](../Model/CoordinateLocationsJsonldIdStandardMetadataCoordinateLocationMetadataTagTaggingListCoordinateLocationRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
