# OpenAPI\Client\ShippingShipmentsApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiShippingShipmentsGetCollection()**](ShippingShipmentsApi.md#apiShippingShipmentsGetCollection) | **GET** /open-api/v3/shipping_shipments | Retrieves the collection of shipping_shipments resources. |
| [**apiShippingShipmentsIdDelete()**](ShippingShipmentsApi.md#apiShippingShipmentsIdDelete) | **DELETE** /open-api/v3/shipping_shipments/{id} | Removes the shipping_shipments resource. |
| [**apiShippingShipmentsIdGet()**](ShippingShipmentsApi.md#apiShippingShipmentsIdGet) | **GET** /open-api/v3/shipping_shipments/{id} | Retrieves a shipping_shipments resource. |
| [**apiShippingShipmentsIdPut()**](ShippingShipmentsApi.md#apiShippingShipmentsIdPut) | **PUT** /open-api/v3/shipping_shipments/{id} | Replaces the shipping_shipments resource. |
| [**apiShippingShipmentsPost()**](ShippingShipmentsApi.md#apiShippingShipmentsPost) | **POST** /open-api/v3/shipping_shipments | Creates a shipping_shipments resource. |
| [**shippingShipmentApiCorporationAdd()**](ShippingShipmentsApi.md#shippingShipmentApiCorporationAdd) | **POST** /open-api/v3/shipping_shipments/{id}/corporation/add | Creates a shipping_shipments resource. |
| [**shippingShipmentApiCorporationRemove()**](ShippingShipmentsApi.md#shippingShipmentApiCorporationRemove) | **POST** /open-api/v3/shipping_shipments/{id}/corporation/remove | Creates a shipping_shipments resource. |
| [**shippingShipmentApiFileUpload()**](ShippingShipmentsApi.md#shippingShipmentApiFileUpload) | **POST** /open-api/v3/shipping_shipments/{id}/file/upload | Creates a shipping_shipments resource. |
| [**shippingShipmentDropDown()**](ShippingShipmentsApi.md#shippingShipmentDropDown) | **GET** /open-api/v3/shipping_shipments/dropdown/get | Retrieves the collection of shipping_shipments resources. |
| [**shippingShipmentDuplicate()**](ShippingShipmentsApi.md#shippingShipmentDuplicate) | **GET** /open-api/v3/shipping_shipments/duplicate/{id} | Retrieves a shipping_shipments resource. |
| [**shippingShipmentFetchFiles()**](ShippingShipmentsApi.md#shippingShipmentFetchFiles) | **GET** /open-api/v3/shipping_shipments/fetch_files/{id} | Retrieves a shipping_shipments resource. |
| [**shippingShipmentGetBySlug()**](ShippingShipmentsApi.md#shippingShipmentGetBySlug) | **GET** /open-api/v3/shipping_shipments/by_slug/{slug} | Retrieves a shipping_shipments resource. |
| [**shippingShipmentGetDeleteRelations()**](ShippingShipmentsApi.md#shippingShipmentGetDeleteRelations) | **GET** /open-api/v3/shipping_shipments/get_delete_relations/{id} | Retrieves a shipping_shipments resource. |
| [**shippingShipmentMetadata()**](ShippingShipmentsApi.md#shippingShipmentMetadata) | **GET** /open-api/v3/shipping_shipments/metadata/{id} | Retrieves a shipping_shipments resource. |


## `apiShippingShipmentsGetCollection()`

```php
apiShippingShipmentsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_send_before, $date_send_strictly_before, $date_send_after, $date_send_strictly_after, $date_received_before, $date_received_strictly_before, $date_received_after, $date_received_strictly_after, $id, $id2, $slug, $slug2, $tracking_number, $tracking_number2, $physical_identifier, $physical_identifier2, $invoice, $invoice2, $bill, $bill2, $shipper, $shipper2, $location, $location2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $exists_tracking_website, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_send, $order_date_received, $order_tracking_number, $order_physical_identifier, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $tracking_number_partial, $tracking_number_start_with, $tracking_number_end_with, $physical_identifier_partial, $physical_identifier_start_with, $physical_identifier_end_with): \OpenAPI\Client\Model\ApiShippingShipmentsGetCollection200Response
```

Retrieves the collection of shipping_shipments resources.

Retrieves the collection of shipping_shipments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
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
$date_send_before = 'date_send_before_example'; // string | 
$date_send_strictly_before = 'date_send_strictly_before_example'; // string | 
$date_send_after = 'date_send_after_example'; // string | 
$date_send_strictly_after = 'date_send_strictly_after_example'; // string | 
$date_received_before = 'date_received_before_example'; // string | 
$date_received_strictly_before = 'date_received_strictly_before_example'; // string | 
$date_received_after = 'date_received_after_example'; // string | 
$date_received_strictly_after = 'date_received_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$tracking_number = 'tracking_number_example'; // string | 
$tracking_number2 = array('tracking_number_example'); // string[] | 
$physical_identifier = 'physical_identifier_example'; // string | 
$physical_identifier2 = array('physical_identifier_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$shipper = 'shipper_example'; // string | 
$shipper2 = array('shipper_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_tracking_number = True; // bool | 
$exists_physical_identifier = True; // bool | 
$exists_tracking_website = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_send = 'order_date_send_example'; // string | 
$order_date_received = 'order_date_received_example'; // string | 
$order_tracking_number = 'order_tracking_number_example'; // string | 
$order_physical_identifier = 'order_physical_identifier_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | shipping_shipments slug_partial
$slug_start_with = 'slug_start_with_example'; // string | shipping_shipments slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | shipping_shipments slug_end_with
$id_partial = 'id_partial_example'; // string | shipping_shipments id_partial
$id_start_with = 'id_start_with_example'; // string | shipping_shipments id_start_with
$id_end_with = 'id_end_with_example'; // string | shipping_shipments id_end_with
$tracking_number_partial = 'tracking_number_partial_example'; // string | shipping_shipments trackingNumber_partial
$tracking_number_start_with = 'tracking_number_start_with_example'; // string | shipping_shipments trackingNumber_start_with
$tracking_number_end_with = 'tracking_number_end_with_example'; // string | shipping_shipments trackingNumber_end_with
$physical_identifier_partial = 'physical_identifier_partial_example'; // string | shipping_shipments physicalIdentifier_partial
$physical_identifier_start_with = 'physical_identifier_start_with_example'; // string | shipping_shipments physicalIdentifier_start_with
$physical_identifier_end_with = 'physical_identifier_end_with_example'; // string | shipping_shipments physicalIdentifier_end_with

try {
    $result = $apiInstance->apiShippingShipmentsGetCollection($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_send_before, $date_send_strictly_before, $date_send_after, $date_send_strictly_after, $date_received_before, $date_received_strictly_before, $date_received_after, $date_received_strictly_after, $id, $id2, $slug, $slug2, $tracking_number, $tracking_number2, $physical_identifier, $physical_identifier2, $invoice, $invoice2, $bill, $bill2, $shipper, $shipper2, $location, $location2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $exists_tracking_website, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_send, $order_date_received, $order_tracking_number, $order_physical_identifier, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $tracking_number_partial, $tracking_number_start_with, $tracking_number_end_with, $physical_identifier_partial, $physical_identifier_start_with, $physical_identifier_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->apiShippingShipmentsGetCollection: ', $e->getMessage(), PHP_EOL;
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
| **date_send_before** | **string**|  | [optional] |
| **date_send_strictly_before** | **string**|  | [optional] |
| **date_send_after** | **string**|  | [optional] |
| **date_send_strictly_after** | **string**|  | [optional] |
| **date_received_before** | **string**|  | [optional] |
| **date_received_strictly_before** | **string**|  | [optional] |
| **date_received_after** | **string**|  | [optional] |
| **date_received_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tracking_number** | **string**|  | [optional] |
| **tracking_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **physical_identifier** | **string**|  | [optional] |
| **physical_identifier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipper** | **string**|  | [optional] |
| **shipper2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_tracking_number** | **bool**|  | [optional] |
| **exists_physical_identifier** | **bool**|  | [optional] |
| **exists_tracking_website** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_send** | **string**|  | [optional] |
| **order_date_received** | **string**|  | [optional] |
| **order_tracking_number** | **string**|  | [optional] |
| **order_physical_identifier** | **string**|  | [optional] |
| **slug_partial** | **string**| shipping_shipments slug_partial | [optional] |
| **slug_start_with** | **string**| shipping_shipments slug_start_with | [optional] |
| **slug_end_with** | **string**| shipping_shipments slug_end_with | [optional] |
| **id_partial** | **string**| shipping_shipments id_partial | [optional] |
| **id_start_with** | **string**| shipping_shipments id_start_with | [optional] |
| **id_end_with** | **string**| shipping_shipments id_end_with | [optional] |
| **tracking_number_partial** | **string**| shipping_shipments trackingNumber_partial | [optional] |
| **tracking_number_start_with** | **string**| shipping_shipments trackingNumber_start_with | [optional] |
| **tracking_number_end_with** | **string**| shipping_shipments trackingNumber_end_with | [optional] |
| **physical_identifier_partial** | **string**| shipping_shipments physicalIdentifier_partial | [optional] |
| **physical_identifier_start_with** | **string**| shipping_shipments physicalIdentifier_start_with | [optional] |
| **physical_identifier_end_with** | **string**| shipping_shipments physicalIdentifier_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiShippingShipmentsGetCollection200Response**](../Model/ApiShippingShipmentsGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiShippingShipmentsIdDelete()`

```php
apiShippingShipmentsIdDelete($id)
```

Removes the shipping_shipments resource.

Removes the shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier

try {
    $apiInstance->apiShippingShipmentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->apiShippingShipmentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |

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

## `apiShippingShipmentsIdGet()`

```php
apiShippingShipmentsIdGet($id): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a shipping_shipments resource.

Retrieves a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier

try {
    $result = $apiInstance->apiShippingShipmentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->apiShippingShipmentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiShippingShipmentsIdPut()`

```php
apiShippingShipmentsIdPut($id, $shipping_shipments_jsonld_add_post): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the shipping_shipments resource.

Replaces the shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier
$shipping_shipments_jsonld_add_post = new \OpenAPI\Client\Model\ShippingShipmentsJsonldAddPost(); // \OpenAPI\Client\Model\ShippingShipmentsJsonldAddPost | The updated shipping_shipments resource

try {
    $result = $apiInstance->apiShippingShipmentsIdPut($id, $shipping_shipments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->apiShippingShipmentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |
| **shipping_shipments_jsonld_add_post** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonldAddPost**](../Model/ShippingShipmentsJsonldAddPost.md)| The updated shipping_shipments resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiShippingShipmentsPost()`

```php
apiShippingShipmentsPost($shipping_shipments_jsonld_add_post): \OpenAPI\Client\Model\ShippingShipmentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a shipping_shipments resource.

Creates a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_shipments_jsonld_add_post = new \OpenAPI\Client\Model\ShippingShipmentsJsonldAddPost(); // \OpenAPI\Client\Model\ShippingShipmentsJsonldAddPost | The new shipping_shipments resource

try {
    $result = $apiInstance->apiShippingShipmentsPost($shipping_shipments_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->apiShippingShipmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipping_shipments_jsonld_add_post** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonldAddPost**](../Model/ShippingShipmentsJsonldAddPost.md)| The new shipping_shipments resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/ShippingShipmentsJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentApiCorporationAdd()`

```php
shippingShipmentApiCorporationAdd($id, $shipping_shipments_jsonld): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a shipping_shipments resource.

Creates a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier
$shipping_shipments_jsonld = new \OpenAPI\Client\Model\ShippingShipmentsJsonld(); // \OpenAPI\Client\Model\ShippingShipmentsJsonld | The new shipping_shipments resource

try {
    $result = $apiInstance->shippingShipmentApiCorporationAdd($id, $shipping_shipments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentApiCorporationAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |
| **shipping_shipments_jsonld** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonld**](../Model/ShippingShipmentsJsonld.md)| The new shipping_shipments resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentApiCorporationRemove()`

```php
shippingShipmentApiCorporationRemove($id, $shipping_shipments_jsonld): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a shipping_shipments resource.

Creates a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier
$shipping_shipments_jsonld = new \OpenAPI\Client\Model\ShippingShipmentsJsonld(); // \OpenAPI\Client\Model\ShippingShipmentsJsonld | The new shipping_shipments resource

try {
    $result = $apiInstance->shippingShipmentApiCorporationRemove($id, $shipping_shipments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentApiCorporationRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |
| **shipping_shipments_jsonld** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonld**](../Model/ShippingShipmentsJsonld.md)| The new shipping_shipments resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentApiFileUpload()`

```php
shippingShipmentApiFileUpload($id, $shipping_shipments_jsonld): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Creates a shipping_shipments resource.

Creates a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier
$shipping_shipments_jsonld = new \OpenAPI\Client\Model\ShippingShipmentsJsonld(); // \OpenAPI\Client\Model\ShippingShipmentsJsonld | The new shipping_shipments resource

try {
    $result = $apiInstance->shippingShipmentApiFileUpload($id, $shipping_shipments_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |
| **shipping_shipments_jsonld** | [**\OpenAPI\Client\Model\ShippingShipmentsJsonld**](../Model/ShippingShipmentsJsonld.md)| The new shipping_shipments resource | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentDropDown()`

```php
shippingShipmentDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_send_before, $date_send_strictly_before, $date_send_after, $date_send_strictly_after, $date_received_before, $date_received_strictly_before, $date_received_after, $date_received_strictly_after, $id, $id2, $slug, $slug2, $tracking_number, $tracking_number2, $physical_identifier, $physical_identifier2, $invoice, $invoice2, $bill, $bill2, $shipper, $shipper2, $location, $location2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $exists_tracking_website, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_send, $order_date_received, $order_tracking_number, $order_physical_identifier, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $tracking_number_partial, $tracking_number_start_with, $tracking_number_end_with, $physical_identifier_partial, $physical_identifier_start_with, $physical_identifier_end_with): \OpenAPI\Client\Model\ShippingShipmentDropDown200Response
```

Retrieves the collection of shipping_shipments resources.

Retrieves the collection of shipping_shipments resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
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
$date_send_before = 'date_send_before_example'; // string | 
$date_send_strictly_before = 'date_send_strictly_before_example'; // string | 
$date_send_after = 'date_send_after_example'; // string | 
$date_send_strictly_after = 'date_send_strictly_after_example'; // string | 
$date_received_before = 'date_received_before_example'; // string | 
$date_received_strictly_before = 'date_received_strictly_before_example'; // string | 
$date_received_after = 'date_received_after_example'; // string | 
$date_received_strictly_after = 'date_received_strictly_after_example'; // string | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$tracking_number = 'tracking_number_example'; // string | 
$tracking_number2 = array('tracking_number_example'); // string[] | 
$physical_identifier = 'physical_identifier_example'; // string | 
$physical_identifier2 = array('physical_identifier_example'); // string[] | 
$invoice = 'invoice_example'; // string | 
$invoice2 = array('invoice_example'); // string[] | 
$bill = 'bill_example'; // string | 
$bill2 = array('bill_example'); // string[] | 
$shipper = 'shipper_example'; // string | 
$shipper2 = array('shipper_example'); // string[] | 
$location = 'location_example'; // string | 
$location2 = array('location_example'); // string[] | 
$search = 'search_example'; // string | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$exists_tracking_number = True; // bool | 
$exists_physical_identifier = True; // bool | 
$exists_tracking_website = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$order_id = 'order_id_example'; // string | 
$order_created_at = 'order_created_at_example'; // string | 
$order_updated_at = 'order_updated_at_example'; // string | 
$order_date_send = 'order_date_send_example'; // string | 
$order_date_received = 'order_date_received_example'; // string | 
$order_tracking_number = 'order_tracking_number_example'; // string | 
$order_physical_identifier = 'order_physical_identifier_example'; // string | 
$slug_partial = 'slug_partial_example'; // string | shipping_shipments slug_partial
$slug_start_with = 'slug_start_with_example'; // string | shipping_shipments slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | shipping_shipments slug_end_with
$id_partial = 'id_partial_example'; // string | shipping_shipments id_partial
$id_start_with = 'id_start_with_example'; // string | shipping_shipments id_start_with
$id_end_with = 'id_end_with_example'; // string | shipping_shipments id_end_with
$tracking_number_partial = 'tracking_number_partial_example'; // string | shipping_shipments trackingNumber_partial
$tracking_number_start_with = 'tracking_number_start_with_example'; // string | shipping_shipments trackingNumber_start_with
$tracking_number_end_with = 'tracking_number_end_with_example'; // string | shipping_shipments trackingNumber_end_with
$physical_identifier_partial = 'physical_identifier_partial_example'; // string | shipping_shipments physicalIdentifier_partial
$physical_identifier_start_with = 'physical_identifier_start_with_example'; // string | shipping_shipments physicalIdentifier_start_with
$physical_identifier_end_with = 'physical_identifier_end_with_example'; // string | shipping_shipments physicalIdentifier_end_with

try {
    $result = $apiInstance->shippingShipmentDropDown($page, $items_per_page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $date_send_before, $date_send_strictly_before, $date_send_after, $date_send_strictly_after, $date_received_before, $date_received_strictly_before, $date_received_after, $date_received_strictly_after, $id, $id2, $slug, $slug2, $tracking_number, $tracking_number2, $physical_identifier, $physical_identifier2, $invoice, $invoice2, $bill, $bill2, $shipper, $shipper2, $location, $location2, $search, $exists_notes, $exists_deleted_at, $exists_custom_properties, $exists_tracking_number, $exists_physical_identifier, $exists_tracking_website, $properties, $enabled, $tag, $order_id, $order_created_at, $order_updated_at, $order_date_send, $order_date_received, $order_tracking_number, $order_physical_identifier, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $tracking_number_partial, $tracking_number_start_with, $tracking_number_end_with, $physical_identifier_partial, $physical_identifier_start_with, $physical_identifier_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentDropDown: ', $e->getMessage(), PHP_EOL;
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
| **date_send_before** | **string**|  | [optional] |
| **date_send_strictly_before** | **string**|  | [optional] |
| **date_send_after** | **string**|  | [optional] |
| **date_send_strictly_after** | **string**|  | [optional] |
| **date_received_before** | **string**|  | [optional] |
| **date_received_strictly_before** | **string**|  | [optional] |
| **date_received_after** | **string**|  | [optional] |
| **date_received_strictly_after** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **tracking_number** | **string**|  | [optional] |
| **tracking_number2** | [**string[]**](../Model/string.md)|  | [optional] |
| **physical_identifier** | **string**|  | [optional] |
| **physical_identifier2** | [**string[]**](../Model/string.md)|  | [optional] |
| **invoice** | **string**|  | [optional] |
| **invoice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **bill** | **string**|  | [optional] |
| **bill2** | [**string[]**](../Model/string.md)|  | [optional] |
| **shipper** | **string**|  | [optional] |
| **shipper2** | [**string[]**](../Model/string.md)|  | [optional] |
| **location** | **string**|  | [optional] |
| **location2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **exists_tracking_number** | **bool**|  | [optional] |
| **exists_physical_identifier** | **bool**|  | [optional] |
| **exists_tracking_website** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_created_at** | **string**|  | [optional] |
| **order_updated_at** | **string**|  | [optional] |
| **order_date_send** | **string**|  | [optional] |
| **order_date_received** | **string**|  | [optional] |
| **order_tracking_number** | **string**|  | [optional] |
| **order_physical_identifier** | **string**|  | [optional] |
| **slug_partial** | **string**| shipping_shipments slug_partial | [optional] |
| **slug_start_with** | **string**| shipping_shipments slug_start_with | [optional] |
| **slug_end_with** | **string**| shipping_shipments slug_end_with | [optional] |
| **id_partial** | **string**| shipping_shipments id_partial | [optional] |
| **id_start_with** | **string**| shipping_shipments id_start_with | [optional] |
| **id_end_with** | **string**| shipping_shipments id_end_with | [optional] |
| **tracking_number_partial** | **string**| shipping_shipments trackingNumber_partial | [optional] |
| **tracking_number_start_with** | **string**| shipping_shipments trackingNumber_start_with | [optional] |
| **tracking_number_end_with** | **string**| shipping_shipments trackingNumber_end_with | [optional] |
| **physical_identifier_partial** | **string**| shipping_shipments physicalIdentifier_partial | [optional] |
| **physical_identifier_start_with** | **string**| shipping_shipments physicalIdentifier_start_with | [optional] |
| **physical_identifier_end_with** | **string**| shipping_shipments physicalIdentifier_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentDropDown200Response**](../Model/ShippingShipmentDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentDuplicate()`

```php
shippingShipmentDuplicate($id): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a shipping_shipments resource.

Retrieves a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier

try {
    $result = $apiInstance->shippingShipmentDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentFetchFiles()`

```php
shippingShipmentFetchFiles($id): \OpenAPI\Client\Model\ShippingShipmentsJsonld
```

Retrieves a shipping_shipments resource.

Retrieves a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier

try {
    $result = $apiInstance->shippingShipmentFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonld**](../Model/ShippingShipmentsJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentGetBySlug()`

```php
shippingShipmentGetBySlug($slug): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a shipping_shipments resource.

Retrieves a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | shipping_shipments identifier

try {
    $result = $apiInstance->shippingShipmentGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| shipping_shipments identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/ShippingShipmentsJsonldShippingShipmentShowStandardShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentGetDeleteRelations()`

```php
shippingShipmentGetDeleteRelations($id): \OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentRelations
```

Retrieves a shipping_shipments resource.

Retrieves a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier

try {
    $result = $apiInstance->shippingShipmentGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldShippingShipmentRelations**](../Model/ShippingShipmentsJsonldShippingShipmentRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingShipmentMetadata()`

```php
shippingShipmentMetadata($id): \OpenAPI\Client\Model\ShippingShipmentsJsonldIdStandardMetadataShippingShipmentMetadataTagTaggingListShippingShipmentRelationsTimestampable
```

Retrieves a shipping_shipments resource.

Retrieves a shipping_shipments resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | shipping_shipments identifier

try {
    $result = $apiInstance->shippingShipmentMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingShipmentsApi->shippingShipmentMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| shipping_shipments identifier | |

### Return type

[**\OpenAPI\Client\Model\ShippingShipmentsJsonldIdStandardMetadataShippingShipmentMetadataTagTaggingListShippingShipmentRelationsTimestampable**](../Model/ShippingShipmentsJsonldIdStandardMetadataShippingShipmentMetadataTagTaggingListShippingShipmentRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
