# OpenAPI\Client\EventSubscriberApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiEventSubscribersGetCollection()**](EventSubscriberApi.md#apiEventSubscribersGetCollection) | **GET** /open-api/v3/event_subscribers | Retrieves the collection of EventSubscriber resources. |
| [**apiEventSubscribersIdDelete()**](EventSubscriberApi.md#apiEventSubscribersIdDelete) | **DELETE** /open-api/v3/event_subscribers/{id} | Removes the EventSubscriber resource. |
| [**apiEventSubscribersIdGet()**](EventSubscriberApi.md#apiEventSubscribersIdGet) | **GET** /open-api/v3/event_subscribers/{id} | Retrieves a EventSubscriber resource. |
| [**apiEventSubscribersIdPut()**](EventSubscriberApi.md#apiEventSubscribersIdPut) | **PUT** /open-api/v3/event_subscribers/{id} | Replaces the EventSubscriber resource. |
| [**apiEventSubscribersPost()**](EventSubscriberApi.md#apiEventSubscribersPost) | **POST** /open-api/v3/event_subscribers | Creates a EventSubscriber resource. |
| [**eventSubscriberMetadata()**](EventSubscriberApi.md#eventSubscriberMetadata) | **GET** /open-api/v3/event_subscribers/metadata/{id} | Retrieves a EventSubscriber resource. |
| [**eventSubscriberingApiFileUpload()**](EventSubscriberApi.md#eventSubscriberingApiFileUpload) | **POST** /open-api/v3/event_subscribers/{id}/file/upload | Creates a EventSubscriber resource. |
| [**eventSubscriberingDropDown()**](EventSubscriberApi.md#eventSubscriberingDropDown) | **GET** /open-api/v3/event_subscribers/dropdown/get | Retrieves the collection of EventSubscriber resources. |
| [**eventSubscriberingDuplicate()**](EventSubscriberApi.md#eventSubscriberingDuplicate) | **GET** /open-api/v3/event_subscribers/duplicate/{id} | Retrieves a EventSubscriber resource. |
| [**eventSubscriberingFetchFiles()**](EventSubscriberApi.md#eventSubscriberingFetchFiles) | **GET** /open-api/v3/event_subscribers/fetch_files/{id} | Retrieves a EventSubscriber resource. |
| [**eventSubscriberingGetBySlug()**](EventSubscriberApi.md#eventSubscriberingGetBySlug) | **GET** /open-api/v3/event_subscribers/by_slug/{slug} | Retrieves a EventSubscriber resource. |
| [**eventSubscriberingGetDeleteRelations()**](EventSubscriberApi.md#eventSubscriberingGetDeleteRelations) | **GET** /open-api/v3/event_subscribers/get_delete_relations/{id} | Retrieves a EventSubscriber resource. |


## `apiEventSubscribersGetCollection()`

```php
apiEventSubscribersGetCollection($page, $items_per_page, $slug, $slug2, $id, $id2, $entity, $entity2, $event_type, $event_type2, $callback_url, $callback_url2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $entity_partial, $entity_start_with, $entity_end_with, $event_type_partial, $event_type_start_with, $event_type_end_with, $callback_url_partial, $callback_url_start_with, $callback_url_end_with): \OpenAPI\Client\Model\ApiEventSubscribersGetCollection200Response
```

Retrieves the collection of EventSubscriber resources.

Retrieves the collection of EventSubscriber resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$entity = 'entity_example'; // string | 
$entity2 = array('entity_example'); // string[] | 
$event_type = 'event_type_example'; // string | 
$event_type2 = array('event_type_example'); // string[] | 
$callback_url = 'callback_url_example'; // string | 
$callback_url2 = array('callback_url_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | EventSubscriber slug_partial
$slug_start_with = 'slug_start_with_example'; // string | EventSubscriber slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | EventSubscriber slug_end_with
$id_partial = 'id_partial_example'; // string | EventSubscriber id_partial
$id_start_with = 'id_start_with_example'; // string | EventSubscriber id_start_with
$id_end_with = 'id_end_with_example'; // string | EventSubscriber id_end_with
$entity_partial = 'entity_partial_example'; // string | EventSubscriber entity_partial
$entity_start_with = 'entity_start_with_example'; // string | EventSubscriber entity_start_with
$entity_end_with = 'entity_end_with_example'; // string | EventSubscriber entity_end_with
$event_type_partial = 'event_type_partial_example'; // string | EventSubscriber eventType_partial
$event_type_start_with = 'event_type_start_with_example'; // string | EventSubscriber eventType_start_with
$event_type_end_with = 'event_type_end_with_example'; // string | EventSubscriber eventType_end_with
$callback_url_partial = 'callback_url_partial_example'; // string | EventSubscriber callbackUrl_partial
$callback_url_start_with = 'callback_url_start_with_example'; // string | EventSubscriber callbackUrl_start_with
$callback_url_end_with = 'callback_url_end_with_example'; // string | EventSubscriber callbackUrl_end_with

try {
    $result = $apiInstance->apiEventSubscribersGetCollection($page, $items_per_page, $slug, $slug2, $id, $id2, $entity, $entity2, $event_type, $event_type2, $callback_url, $callback_url2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $entity_partial, $entity_start_with, $entity_end_with, $event_type_partial, $event_type_start_with, $event_type_end_with, $callback_url_partial, $callback_url_start_with, $callback_url_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->apiEventSubscribersGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **entity** | **string**|  | [optional] |
| **entity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **event_type** | **string**|  | [optional] |
| **event_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **callback_url** | **string**|  | [optional] |
| **callback_url2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| EventSubscriber slug_partial | [optional] |
| **slug_start_with** | **string**| EventSubscriber slug_start_with | [optional] |
| **slug_end_with** | **string**| EventSubscriber slug_end_with | [optional] |
| **id_partial** | **string**| EventSubscriber id_partial | [optional] |
| **id_start_with** | **string**| EventSubscriber id_start_with | [optional] |
| **id_end_with** | **string**| EventSubscriber id_end_with | [optional] |
| **entity_partial** | **string**| EventSubscriber entity_partial | [optional] |
| **entity_start_with** | **string**| EventSubscriber entity_start_with | [optional] |
| **entity_end_with** | **string**| EventSubscriber entity_end_with | [optional] |
| **event_type_partial** | **string**| EventSubscriber eventType_partial | [optional] |
| **event_type_start_with** | **string**| EventSubscriber eventType_start_with | [optional] |
| **event_type_end_with** | **string**| EventSubscriber eventType_end_with | [optional] |
| **callback_url_partial** | **string**| EventSubscriber callbackUrl_partial | [optional] |
| **callback_url_start_with** | **string**| EventSubscriber callbackUrl_start_with | [optional] |
| **callback_url_end_with** | **string**| EventSubscriber callbackUrl_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiEventSubscribersGetCollection200Response**](../Model/ApiEventSubscribersGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEventSubscribersIdDelete()`

```php
apiEventSubscribersIdDelete($id)
```

Removes the EventSubscriber resource.

Removes the EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier

try {
    $apiInstance->apiEventSubscribersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->apiEventSubscribersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |

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

## `apiEventSubscribersIdGet()`

```php
apiEventSubscribersIdGet($id): \OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a EventSubscriber resource.

Retrieves a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier

try {
    $result = $apiInstance->apiEventSubscribersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->apiEventSubscribersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEventSubscribersIdPut()`

```php
apiEventSubscribersIdPut($id, $event_subscriber_jsonld_add_post): \OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Replaces the EventSubscriber resource.

Replaces the EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier
$event_subscriber_jsonld_add_post = new \OpenAPI\Client\Model\EventSubscriberJsonldAddPost(); // \OpenAPI\Client\Model\EventSubscriberJsonldAddPost | The updated EventSubscriber resource

try {
    $result = $apiInstance->apiEventSubscribersIdPut($id, $event_subscriber_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->apiEventSubscribersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |
| **event_subscriber_jsonld_add_post** | [**\OpenAPI\Client\Model\EventSubscriberJsonldAddPost**](../Model/EventSubscriberJsonldAddPost.md)| The updated EventSubscriber resource | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEventSubscribersPost()`

```php
apiEventSubscribersPost($event_subscriber_jsonld_add_post): \OpenAPI\Client\Model\EventSubscriberJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations
```

Creates a EventSubscriber resource.

Creates a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_subscriber_jsonld_add_post = new \OpenAPI\Client\Model\EventSubscriberJsonldAddPost(); // \OpenAPI\Client\Model\EventSubscriberJsonldAddPost | The new EventSubscriber resource

try {
    $result = $apiInstance->apiEventSubscribersPost($event_subscriber_jsonld_add_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->apiEventSubscribersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_subscriber_jsonld_add_post** | [**\OpenAPI\Client\Model\EventSubscriberJsonldAddPost**](../Model/EventSubscriberJsonldAddPost.md)| The new EventSubscriber resource | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations**](../Model/EventSubscriberJsonldStandardShowNoteShowIdTimestampableTagTaggingListNoteRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventSubscriberMetadata()`

```php
eventSubscriberMetadata($id): \OpenAPI\Client\Model\EventSubscriberJsonldIdStandardMetadataEventSubscriberMetadataTagTaggingListEventSubscriberRelationsTimestampable
```

Retrieves a EventSubscriber resource.

Retrieves a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier

try {
    $result = $apiInstance->eventSubscriberMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->eventSubscriberMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldIdStandardMetadataEventSubscriberMetadataTagTaggingListEventSubscriberRelationsTimestampable**](../Model/EventSubscriberJsonldIdStandardMetadataEventSubscriberMetadataTagTaggingListEventSubscriberRelationsTimestampable.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventSubscriberingApiFileUpload()`

```php
eventSubscriberingApiFileUpload($id, $event_subscriber_jsonld): \OpenAPI\Client\Model\EventSubscriberJsonldEventSubscriberingShowIdTimestampableTagTaggingListStandardShow
```

Creates a EventSubscriber resource.

Creates a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier
$event_subscriber_jsonld = new \OpenAPI\Client\Model\EventSubscriberJsonld(); // \OpenAPI\Client\Model\EventSubscriberJsonld | The new EventSubscriber resource

try {
    $result = $apiInstance->eventSubscriberingApiFileUpload($id, $event_subscriber_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->eventSubscriberingApiFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |
| **event_subscriber_jsonld** | [**\OpenAPI\Client\Model\EventSubscriberJsonld**](../Model/EventSubscriberJsonld.md)| The new EventSubscriber resource | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldEventSubscriberingShowIdTimestampableTagTaggingListStandardShow**](../Model/EventSubscriberJsonldEventSubscriberingShowIdTimestampableTagTaggingListStandardShow.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventSubscriberingDropDown()`

```php
eventSubscriberingDropDown($page, $items_per_page, $slug, $slug2, $id, $id2, $entity, $entity2, $event_type, $event_type2, $callback_url, $callback_url2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $entity_partial, $entity_start_with, $entity_end_with, $event_type_partial, $event_type_start_with, $event_type_end_with, $callback_url_partial, $callback_url_start_with, $callback_url_end_with): \OpenAPI\Client\Model\EventSubscriberingDropDown200Response
```

Retrieves the collection of EventSubscriber resources.

Retrieves the collection of EventSubscriber resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$slug = 'slug_example'; // string | 
$slug2 = array('slug_example'); // string[] | 
$id = 56; // int | 
$id2 = array(56); // int[] | 
$entity = 'entity_example'; // string | 
$entity2 = array('entity_example'); // string[] | 
$event_type = 'event_type_example'; // string | 
$event_type2 = array('event_type_example'); // string[] | 
$callback_url = 'callback_url_example'; // string | 
$callback_url2 = array('callback_url_example'); // string[] | 
$exists_notes = True; // bool | 
$exists_deleted_at = True; // bool | 
$exists_custom_properties = True; // bool | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.
$slug_partial = 'slug_partial_example'; // string | EventSubscriber slug_partial
$slug_start_with = 'slug_start_with_example'; // string | EventSubscriber slug_start_with
$slug_end_with = 'slug_end_with_example'; // string | EventSubscriber slug_end_with
$id_partial = 'id_partial_example'; // string | EventSubscriber id_partial
$id_start_with = 'id_start_with_example'; // string | EventSubscriber id_start_with
$id_end_with = 'id_end_with_example'; // string | EventSubscriber id_end_with
$entity_partial = 'entity_partial_example'; // string | EventSubscriber entity_partial
$entity_start_with = 'entity_start_with_example'; // string | EventSubscriber entity_start_with
$entity_end_with = 'entity_end_with_example'; // string | EventSubscriber entity_end_with
$event_type_partial = 'event_type_partial_example'; // string | EventSubscriber eventType_partial
$event_type_start_with = 'event_type_start_with_example'; // string | EventSubscriber eventType_start_with
$event_type_end_with = 'event_type_end_with_example'; // string | EventSubscriber eventType_end_with
$callback_url_partial = 'callback_url_partial_example'; // string | EventSubscriber callbackUrl_partial
$callback_url_start_with = 'callback_url_start_with_example'; // string | EventSubscriber callbackUrl_start_with
$callback_url_end_with = 'callback_url_end_with_example'; // string | EventSubscriber callbackUrl_end_with

try {
    $result = $apiInstance->eventSubscriberingDropDown($page, $items_per_page, $slug, $slug2, $id, $id2, $entity, $entity2, $event_type, $event_type2, $callback_url, $callback_url2, $exists_notes, $exists_deleted_at, $exists_custom_properties, $properties, $enabled, $tag, $slug_partial, $slug_start_with, $slug_end_with, $id_partial, $id_start_with, $id_end_with, $entity_partial, $entity_start_with, $entity_end_with, $event_type_partial, $event_type_start_with, $event_type_end_with, $callback_url_partial, $callback_url_start_with, $callback_url_end_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->eventSubscriberingDropDown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **slug** | **string**|  | [optional] |
| **slug2** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **entity** | **string**|  | [optional] |
| **entity2** | [**string[]**](../Model/string.md)|  | [optional] |
| **event_type** | **string**|  | [optional] |
| **event_type2** | [**string[]**](../Model/string.md)|  | [optional] |
| **callback_url** | **string**|  | [optional] |
| **callback_url2** | [**string[]**](../Model/string.md)|  | [optional] |
| **exists_notes** | **bool**|  | [optional] |
| **exists_deleted_at** | **bool**|  | [optional] |
| **exists_custom_properties** | **bool**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |
| **slug_partial** | **string**| EventSubscriber slug_partial | [optional] |
| **slug_start_with** | **string**| EventSubscriber slug_start_with | [optional] |
| **slug_end_with** | **string**| EventSubscriber slug_end_with | [optional] |
| **id_partial** | **string**| EventSubscriber id_partial | [optional] |
| **id_start_with** | **string**| EventSubscriber id_start_with | [optional] |
| **id_end_with** | **string**| EventSubscriber id_end_with | [optional] |
| **entity_partial** | **string**| EventSubscriber entity_partial | [optional] |
| **entity_start_with** | **string**| EventSubscriber entity_start_with | [optional] |
| **entity_end_with** | **string**| EventSubscriber entity_end_with | [optional] |
| **event_type_partial** | **string**| EventSubscriber eventType_partial | [optional] |
| **event_type_start_with** | **string**| EventSubscriber eventType_start_with | [optional] |
| **event_type_end_with** | **string**| EventSubscriber eventType_end_with | [optional] |
| **callback_url_partial** | **string**| EventSubscriber callbackUrl_partial | [optional] |
| **callback_url_start_with** | **string**| EventSubscriber callbackUrl_start_with | [optional] |
| **callback_url_end_with** | **string**| EventSubscriber callbackUrl_end_with | [optional] |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberingDropDown200Response**](../Model/EventSubscriberingDropDown200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventSubscriberingDuplicate()`

```php
eventSubscriberingDuplicate($id): \OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a EventSubscriber resource.

Retrieves a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier

try {
    $result = $apiInstance->eventSubscriberingDuplicate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->eventSubscriberingDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventSubscriberingFetchFiles()`

```php
eventSubscriberingFetchFiles($id): \OpenAPI\Client\Model\EventSubscriberJsonld
```

Retrieves a EventSubscriber resource.

Retrieves a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier

try {
    $result = $apiInstance->eventSubscriberingFetchFiles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->eventSubscriberingFetchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonld**](../Model/EventSubscriberJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventSubscriberingGetBySlug()`

```php
eventSubscriberingGetBySlug($slug): \OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty
```

Retrieves a EventSubscriber resource.

Retrieves a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | EventSubscriber identifier

try {
    $result = $apiInstance->eventSubscriberingGetBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->eventSubscriberingGetBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| EventSubscriber identifier | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty**](../Model/EventSubscriberJsonldStandardShowEventSubscriberShowNoteShowIdTimestampableTagTaggingListNoteRelationsCustomProperty.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventSubscriberingGetDeleteRelations()`

```php
eventSubscriberingGetDeleteRelations($id): \OpenAPI\Client\Model\EventSubscriberJsonldEventSubscriberingRelations
```

Retrieves a EventSubscriber resource.

Retrieves a EventSubscriber resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventSubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | EventSubscriber identifier

try {
    $result = $apiInstance->eventSubscriberingGetDeleteRelations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriberApi->eventSubscriberingGetDeleteRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| EventSubscriber identifier | |

### Return type

[**\OpenAPI\Client\Model\EventSubscriberJsonldEventSubscriberingRelations**](../Model/EventSubscriberJsonldEventSubscriberingRelations.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
