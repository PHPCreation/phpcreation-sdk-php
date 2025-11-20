# OpenAPI\Client\RentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiRentsGetCollection()**](RentsApi.md#apiRentsGetCollection) | **GET** /open-api/v3/rents | Retrieves the collection of rents resources. |
| [**apiRentsIdDelete()**](RentsApi.md#apiRentsIdDelete) | **DELETE** /open-api/v3/rents/{id} | Removes the rents resource. |
| [**apiRentsIdGet()**](RentsApi.md#apiRentsIdGet) | **GET** /open-api/v3/rents/{id} | Retrieves a rents resource. |
| [**apiRentsIdPut()**](RentsApi.md#apiRentsIdPut) | **PUT** /open-api/v3/rents/{id} | Replaces the rents resource. |
| [**apiRentsPost()**](RentsApi.md#apiRentsPost) | **POST** /open-api/v3/rents | Creates a rents resource. |
| [**getAvailableProductsForRent()**](RentsApi.md#getAvailableProductsForRent) | **GET** /open-api/v3/rents/available_products_for_rent/get | Retrieves the collection of rents resources. |
| [**getCollidingRents()**](RentsApi.md#getCollidingRents) | **GET** /open-api/v3/rents/colliding_rents/get | Retrieves the collection of rents resources. |
| [**getUnavailableProductsForRent()**](RentsApi.md#getUnavailableProductsForRent) | **GET** /open-api/v3/rents/unavailable_products_for_rent/get | Retrieves the collection of rents resources. |
| [**rentApiCorporationAdd()**](RentsApi.md#rentApiCorporationAdd) | **POST** /open-api/v3/rents/{id}/corporation/add | Creates a rents resource. |
| [**rentApiCorporationRemove()**](RentsApi.md#rentApiCorporationRemove) | **POST** /open-api/v3/rents/{id}/corporation/remove | Creates a rents resource. |
| [**rentApiFileUpload()**](RentsApi.md#rentApiFileUpload) | **POST** /open-api/v3/rents/{id}/file/upload | Creates a rents resource. |
| [**rentDropDown()**](RentsApi.md#rentDropDown) | **GET** /open-api/v3/rents/dropdown/get | Retrieves the collection of rents resources. |
| [**rentDuplicate()**](RentsApi.md#rentDuplicate) | **GET** /open-api/v3/rents/duplicate/{id} | Retrieves a rents resource. |
| [**rentFetchFiles()**](RentsApi.md#rentFetchFiles) | **GET** /open-api/v3/rents/fetch_files/{id} | Retrieves a rents resource. |
| [**rentGetBySlug()**](RentsApi.md#rentGetBySlug) | **GET** /open-api/v3/rents/by_slug/{slug} | Retrieves a rents resource. |
| [**rentGetDeleteRelations()**](RentsApi.md#rentGetDeleteRelations) | **GET** /open-api/v3/rents/get_delete_relations/{id} | Retrieves a rents resource. |
| [**rentGetMetadata()**](RentsApi.md#rentGetMetadata) | **GET** /open-api/v3/rents/metadata/{id} | Retrieves a rents resource. |


## `apiRentsGetCollection()`

```php
apiRentsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin): \OpenAPI\Client\Model\ApiRentsGetCollection200Response
```

Retrieves the collection of rents resources.

Retrieves the collection of rents resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$date_checkout_before = 'date_checkout_before_example'; // string | 
$date_checkout_strictly_before = 'date_checkout_strictly_before_example'; // string | 
$date_checkout_after = 'date_checkout_after_example'; // string | 
$date_checkout_strictly_after = 'date_checkout_strictly_after_example'; // string | 
$date_checkin_before = 'date_checkin_before_example'; // string | 
$date_checkin_strictly_before = 'date_checkin_strictly_before_example'; // string | 
$date_checkin_after = 'date_checkin_after_example'; // string | 
$date_checkin_strictly_after = 'date_checkin_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$charged_product = 'charged_product_example'; // string | 
$charged_product2 = array('charged_product_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$reserved_employee = 'reserved_employee_example'; // string | 
$reserved_employee2 = array('reserved_employee_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$search = 'search_example'; // string | 
$chargeable = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_location = True; // bool | 
$exists_date_end = True; // bool | 
$exists_date_checkout = True; // bool | 
$exists_date_checkin = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_date_checkout = 'order_date_checkout_example'; // string | 
$order_date_checkin = 'order_date_checkin_example'; // string | 

try {
    $result = $apiInstance->apiRentsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->apiRentsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **date_checkout_before** | **string**|  | [optional] |
| **date_checkout_strictly_before** | **string**|  | [optional] |
| **date_checkout_after** | **string**|  | [optional] |
| **date_checkout_strictly_after** | **string**|  | [optional] |
| **date_checkin_before** | **string**|  | [optional] |
| **date_checkin_strictly_before** | **string**|  | [optional] |
| **date_checkin_after** | **string**|  | [optional] |
| **date_checkin_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_product** | **string**|  | [optional] |
| **charged_product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **reserved_employee** | **string**|  | [optional] |
| **reserved_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_location** | **bool**|  | [optional] |
| **exists_date_end** | **bool**|  | [optional] |
| **exists_date_checkout** | **bool**|  | [optional] |
| **exists_date_checkin** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_date_checkout** | **string**|  | [optional] |
| **order_date_checkin** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiRentsGetCollection200Response**](../Model/ApiRentsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRentsIdDelete()`

```php
apiRentsIdDelete($id)
```

Removes the rents resource.

Removes the rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier

try {
    $apiInstance->apiRentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->apiRentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |

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

## `apiRentsIdGet()`

```php
apiRentsIdGet($id): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rents resource.

Retrieves a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier

try {
    $result = $apiInstance->apiRentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->apiRentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRentsIdPut()`

```php
apiRentsIdPut($id, $rents_jsonld_add_post): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the rents resource.

Replaces the rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier
$rents_jsonld_add_post = new \OpenAPI\Client\Model\RentsJsonldAddPost(); // \OpenAPI\Client\Model\RentsJsonldAddPost | The updated rents resource

try {
    $result = $apiInstance->apiRentsIdPut($id, $rents_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->apiRentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |
| **rents_jsonld_add_post** | [**\OpenAPI\Client\Model\RentsJsonldAddPost**](../Model/RentsJsonldAddPost.md)| The updated rents resource | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRentsPost()`

```php
apiRentsPost($rents_jsonld_add_post): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rents resource.

Creates a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rents_jsonld_add_post = new \OpenAPI\Client\Model\RentsJsonldAddPost(); // \OpenAPI\Client\Model\RentsJsonldAddPost | The new rents resource

try {
    $result = $apiInstance->apiRentsPost($rents_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->apiRentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rents_jsonld_add_post** | [**\OpenAPI\Client\Model\RentsJsonldAddPost**](../Model/RentsJsonldAddPost.md)| The new rents resource | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableProductsForRent()`

```php
getAvailableProductsForRent($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin): \OpenAPI\Client\Model\GetAvailableProductsForRent200Response
```

Retrieves the collection of rents resources.

Retrieves the collection of rents resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$date_checkout_before = 'date_checkout_before_example'; // string | 
$date_checkout_strictly_before = 'date_checkout_strictly_before_example'; // string | 
$date_checkout_after = 'date_checkout_after_example'; // string | 
$date_checkout_strictly_after = 'date_checkout_strictly_after_example'; // string | 
$date_checkin_before = 'date_checkin_before_example'; // string | 
$date_checkin_strictly_before = 'date_checkin_strictly_before_example'; // string | 
$date_checkin_after = 'date_checkin_after_example'; // string | 
$date_checkin_strictly_after = 'date_checkin_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$charged_product = 'charged_product_example'; // string | 
$charged_product2 = array('charged_product_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$reserved_employee = 'reserved_employee_example'; // string | 
$reserved_employee2 = array('reserved_employee_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$search = 'search_example'; // string | 
$chargeable = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_location = True; // bool | 
$exists_date_end = True; // bool | 
$exists_date_checkout = True; // bool | 
$exists_date_checkin = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_date_checkout = 'order_date_checkout_example'; // string | 
$order_date_checkin = 'order_date_checkin_example'; // string | 

try {
    $result = $apiInstance->getAvailableProductsForRent($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->getAvailableProductsForRent: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **date_checkout_before** | **string**|  | [optional] |
| **date_checkout_strictly_before** | **string**|  | [optional] |
| **date_checkout_after** | **string**|  | [optional] |
| **date_checkout_strictly_after** | **string**|  | [optional] |
| **date_checkin_before** | **string**|  | [optional] |
| **date_checkin_strictly_before** | **string**|  | [optional] |
| **date_checkin_after** | **string**|  | [optional] |
| **date_checkin_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_product** | **string**|  | [optional] |
| **charged_product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **reserved_employee** | **string**|  | [optional] |
| **reserved_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_location** | **bool**|  | [optional] |
| **exists_date_end** | **bool**|  | [optional] |
| **exists_date_checkout** | **bool**|  | [optional] |
| **exists_date_checkin** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_date_checkout** | **string**|  | [optional] |
| **order_date_checkin** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAvailableProductsForRent200Response**](../Model/GetAvailableProductsForRent200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollidingRents()`

```php
getCollidingRents($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin): \OpenAPI\Client\Model\ApiRentsGetCollection200Response
```

Retrieves the collection of rents resources.

Retrieves the collection of rents resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$date_checkout_before = 'date_checkout_before_example'; // string | 
$date_checkout_strictly_before = 'date_checkout_strictly_before_example'; // string | 
$date_checkout_after = 'date_checkout_after_example'; // string | 
$date_checkout_strictly_after = 'date_checkout_strictly_after_example'; // string | 
$date_checkin_before = 'date_checkin_before_example'; // string | 
$date_checkin_strictly_before = 'date_checkin_strictly_before_example'; // string | 
$date_checkin_after = 'date_checkin_after_example'; // string | 
$date_checkin_strictly_after = 'date_checkin_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$charged_product = 'charged_product_example'; // string | 
$charged_product2 = array('charged_product_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$reserved_employee = 'reserved_employee_example'; // string | 
$reserved_employee2 = array('reserved_employee_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$search = 'search_example'; // string | 
$chargeable = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_location = True; // bool | 
$exists_date_end = True; // bool | 
$exists_date_checkout = True; // bool | 
$exists_date_checkin = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_date_checkout = 'order_date_checkout_example'; // string | 
$order_date_checkin = 'order_date_checkin_example'; // string | 

try {
    $result = $apiInstance->getCollidingRents($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->getCollidingRents: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **date_checkout_before** | **string**|  | [optional] |
| **date_checkout_strictly_before** | **string**|  | [optional] |
| **date_checkout_after** | **string**|  | [optional] |
| **date_checkout_strictly_after** | **string**|  | [optional] |
| **date_checkin_before** | **string**|  | [optional] |
| **date_checkin_strictly_before** | **string**|  | [optional] |
| **date_checkin_after** | **string**|  | [optional] |
| **date_checkin_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_product** | **string**|  | [optional] |
| **charged_product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **reserved_employee** | **string**|  | [optional] |
| **reserved_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_location** | **bool**|  | [optional] |
| **exists_date_end** | **bool**|  | [optional] |
| **exists_date_checkout** | **bool**|  | [optional] |
| **exists_date_checkin** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_date_checkout** | **string**|  | [optional] |
| **order_date_checkin** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiRentsGetCollection200Response**](../Model/ApiRentsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnavailableProductsForRent()`

```php
getUnavailableProductsForRent($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin): \OpenAPI\Client\Model\GetAvailableProductsForRent200Response
```

Retrieves the collection of rents resources.

Retrieves the collection of rents resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$date_checkout_before = 'date_checkout_before_example'; // string | 
$date_checkout_strictly_before = 'date_checkout_strictly_before_example'; // string | 
$date_checkout_after = 'date_checkout_after_example'; // string | 
$date_checkout_strictly_after = 'date_checkout_strictly_after_example'; // string | 
$date_checkin_before = 'date_checkin_before_example'; // string | 
$date_checkin_strictly_before = 'date_checkin_strictly_before_example'; // string | 
$date_checkin_after = 'date_checkin_after_example'; // string | 
$date_checkin_strictly_after = 'date_checkin_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$charged_product = 'charged_product_example'; // string | 
$charged_product2 = array('charged_product_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$reserved_employee = 'reserved_employee_example'; // string | 
$reserved_employee2 = array('reserved_employee_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$search = 'search_example'; // string | 
$chargeable = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_location = True; // bool | 
$exists_date_end = True; // bool | 
$exists_date_checkout = True; // bool | 
$exists_date_checkin = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_date_checkout = 'order_date_checkout_example'; // string | 
$order_date_checkin = 'order_date_checkin_example'; // string | 

try {
    $result = $apiInstance->getUnavailableProductsForRent($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->getUnavailableProductsForRent: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **date_checkout_before** | **string**|  | [optional] |
| **date_checkout_strictly_before** | **string**|  | [optional] |
| **date_checkout_after** | **string**|  | [optional] |
| **date_checkout_strictly_after** | **string**|  | [optional] |
| **date_checkin_before** | **string**|  | [optional] |
| **date_checkin_strictly_before** | **string**|  | [optional] |
| **date_checkin_after** | **string**|  | [optional] |
| **date_checkin_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_product** | **string**|  | [optional] |
| **charged_product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **reserved_employee** | **string**|  | [optional] |
| **reserved_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_location** | **bool**|  | [optional] |
| **exists_date_end** | **bool**|  | [optional] |
| **exists_date_checkout** | **bool**|  | [optional] |
| **exists_date_checkin** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_date_checkout** | **string**|  | [optional] |
| **order_date_checkin** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAvailableProductsForRent200Response**](../Model/GetAvailableProductsForRent200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentApiCorporationAdd()`

```php
rentApiCorporationAdd($id, $rents_jsonld): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rents resource.

Creates a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier
$rents_jsonld = new \OpenAPI\Client\Model\RentsJsonld(); // \OpenAPI\Client\Model\RentsJsonld | The new rents resource

try {
    $result = $apiInstance->rentApiCorporationAdd($id, $rents_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |
| **rents_jsonld** | [**\OpenAPI\Client\Model\RentsJsonld**](../Model/RentsJsonld.md)| The new rents resource | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentApiCorporationRemove()`

```php
rentApiCorporationRemove($id, $rents_jsonld): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rents resource.

Creates a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier
$rents_jsonld = new \OpenAPI\Client\Model\RentsJsonld(); // \OpenAPI\Client\Model\RentsJsonld | The new rents resource

try {
    $result = $apiInstance->rentApiCorporationRemove($id, $rents_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |
| **rents_jsonld** | [**\OpenAPI\Client\Model\RentsJsonld**](../Model/RentsJsonld.md)| The new rents resource | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentApiFileUpload()`

```php
rentApiFileUpload($id, $rents_jsonld): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a rents resource.

Creates a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier
$rents_jsonld = new \OpenAPI\Client\Model\RentsJsonld(); // \OpenAPI\Client\Model\RentsJsonld | The new rents resource

try {
    $result = $apiInstance->rentApiFileUpload($id, $rents_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |
| **rents_jsonld** | [**\OpenAPI\Client\Model\RentsJsonld**](../Model/RentsJsonld.md)| The new rents resource | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentDropDown()`

```php
rentDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin): \OpenAPI\Client\Model\RentDropDown200Response
```

Retrieves the collection of rents resources.

Retrieves the collection of rents resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
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
$date_start_before = 'date_start_before_example'; // string | 
$date_start_strictly_before = 'date_start_strictly_before_example'; // string | 
$date_start_after = 'date_start_after_example'; // string | 
$date_start_strictly_after = 'date_start_strictly_after_example'; // string | 
$date_end_before = 'date_end_before_example'; // string | 
$date_end_strictly_before = 'date_end_strictly_before_example'; // string | 
$date_end_after = 'date_end_after_example'; // string | 
$date_end_strictly_after = 'date_end_strictly_after_example'; // string | 
$date_checkout_before = 'date_checkout_before_example'; // string | 
$date_checkout_strictly_before = 'date_checkout_strictly_before_example'; // string | 
$date_checkout_after = 'date_checkout_after_example'; // string | 
$date_checkout_strictly_after = 'date_checkout_strictly_after_example'; // string | 
$date_checkin_before = 'date_checkin_before_example'; // string | 
$date_checkin_strictly_before = 'date_checkin_strictly_before_example'; // string | 
$date_checkin_after = 'date_checkin_after_example'; // string | 
$date_checkin_strictly_after = 'date_checkin_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$charged_product = 'charged_product_example'; // string | 
$charged_product2 = array('charged_product_example'); // string[] | 
$type = 'type_example'; // string | 
$type2 = array('type_example'); // string[] | 
$product = 'product_example'; // string | 
$product2 = array('product_example'); // string[] | 
$reserved_employee = 'reserved_employee_example'; // string | 
$reserved_employee2 = array('reserved_employee_example'); // string[] | 
$project = 'project_example'; // string | 
$project2 = array('project_example'); // string[] | 
$task = 'task_example'; // string | 
$task2 = array('task_example'); // string[] | 
$client = 'client_example'; // string | 
$client2 = array('client_example'); // string[] | 
$responsible = 'responsible_example'; // string | 
$responsible2 = array('responsible_example'); // string[] | 
$search = 'search_example'; // string | 
$chargeable = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_location = True; // bool | 
$exists_date_end = True; // bool | 
$exists_date_checkout = True; // bool | 
$exists_date_checkin = True; // bool | 
$exists_description = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_start = 'order_date_start_example'; // string | 
$order_date_end = 'order_date_end_example'; // string | 
$order_date_checkout = 'order_date_checkout_example'; // string | 
$order_date_checkin = 'order_date_checkin_example'; // string | 

try {
    $result = $apiInstance->rentDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_start_before, $date_start_strictly_before, $date_start_after, $date_start_strictly_after, $date_end_before, $date_end_strictly_before, $date_end_after, $date_end_strictly_after, $date_checkout_before, $date_checkout_strictly_before, $date_checkout_after, $date_checkout_strictly_after, $date_checkin_before, $date_checkin_strictly_before, $date_checkin_after, $date_checkin_strictly_after, $id, $id2, $slug, $slug2, $location, $location2, $charged_product, $charged_product2, $type, $type2, $product, $product2, $reserved_employee, $reserved_employee2, $project, $project2, $task, $task2, $client, $client2, $responsible, $responsible2, $search, $chargeable, $exists_deleted_at, $exists_custom_properties, $exists_location, $exists_date_end, $exists_date_checkout, $exists_date_checkin, $exists_description, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_start, $order_date_end, $order_date_checkout, $order_date_checkin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_start_before** | **string**|  | [optional] |
| **date_start_strictly_before** | **string**|  | [optional] |
| **date_start_after** | **string**|  | [optional] |
| **date_start_strictly_after** | **string**|  | [optional] |
| **date_end_before** | **string**|  | [optional] |
| **date_end_strictly_before** | **string**|  | [optional] |
| **date_end_after** | **string**|  | [optional] |
| **date_end_strictly_after** | **string**|  | [optional] |
| **date_checkout_before** | **string**|  | [optional] |
| **date_checkout_strictly_before** | **string**|  | [optional] |
| **date_checkout_after** | **string**|  | [optional] |
| **date_checkout_strictly_after** | **string**|  | [optional] |
| **date_checkin_before** | **string**|  | [optional] |
| **date_checkin_strictly_before** | **string**|  | [optional] |
| **date_checkin_after** | **string**|  | [optional] |
| **date_checkin_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **charged_product** | **string**|  | [optional] |
| **charged_product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | **string**|  | [optional] |
| **type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **product** | **string**|  | [optional] |
| **product2** | [**string[]**](../Model/string.md)|  | [optional] |
| **reserved_employee** | **string**|  | [optional] |
| **reserved_employee2** | [**string[]**](../Model/string.md)|  | [optional] |
| **project** | **string**|  | [optional] |
| **project2** | [**string[]**](../Model/string.md)|  | [optional] |
| **task** | **string**|  | [optional] |
| **task2** | [**string[]**](../Model/string.md)|  | [optional] |
| **client** | **string**|  | [optional] |
| **client2** | [**string[]**](../Model/string.md)|  | [optional] |
| **responsible** | **string**|  | [optional] |
| **responsible2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **chargeable** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_location** | **bool**|  | [optional] |
| **exists_date_end** | **bool**|  | [optional] |
| **exists_date_checkout** | **bool**|  | [optional] |
| **exists_date_checkin** | **bool**|  | [optional] |
| **exists_description** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_start** | **string**|  | [optional] |
| **order_date_end** | **string**|  | [optional] |
| **order_date_checkout** | **string**|  | [optional] |
| **order_date_checkin** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RentDropDown200Response**](../Model/RentDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentDuplicate()`

```php
rentDuplicate($id): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rents resource.

Retrieves a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier

try {
    $result = $apiInstance->rentDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentFetchFiles()`

```php
rentFetchFiles($id): \OpenAPI\Client\Model\RentsJsonld
```

Retrieves a rents resource.

Retrieves a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier

try {
    $result = $apiInstance->rentFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonld**](../Model/RentsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentGetBySlug()`

```php
rentGetBySlug($slug): \OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a rents resource.

Retrieves a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | rents identifier

try {
    $result = $apiInstance->rentGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| rents identifier | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/RentsJsonldRentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentGetDeleteRelations()`

```php
rentGetDeleteRelations($id): \OpenAPI\Client\Model\RentsJsonldRentRelations
```

Retrieves a rents resource.

Retrieves a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier

try {
    $result = $apiInstance->rentGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentRelations**](../Model/RentsJsonldRentRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rentGetMetadata()`

```php
rentGetMetadata($id): \OpenAPI\Client\Model\RentsJsonldRentMetadataIdTimestampableTagTaggingList
```

Retrieves a rents resource.

Retrieves a rents resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | rents identifier

try {
    $result = $apiInstance->rentGetMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RentsApi->rentGetMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| rents identifier | |

### Return type

[**\OpenAPI\Client\Model\RentsJsonldRentMetadataIdTimestampableTagTaggingList**](../Model/RentsJsonldRentMetadataIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
