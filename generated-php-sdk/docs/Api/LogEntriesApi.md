# OpenAPI\Client\LogEntriesApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLogEntriesGetCollection()**](LogEntriesApi.md#apiLogEntriesGetCollection) | **GET** /open-api/v3/log_entries | Retrieves the collection of log_entries resources. |
| [**apiLogEntriesIdGet()**](LogEntriesApi.md#apiLogEntriesIdGet) | **GET** /open-api/v3/log_entries/{id} | Retrieves a log_entries resource. |


## `apiLogEntriesGetCollection()`

```php
apiLogEntriesGetCollection($page, $items_per_page, $id, $id2, $object_class, $object_class2, $object_id, $object_id2, $action, $action2, $search, $logged_at_before, $logged_at_strictly_before, $logged_at_after, $logged_at_strictly_after, $order_id, $order_logged_at, $properties, $enabled, $tag): \OpenAPI\Client\Model\ApiLogEntriesGetCollection200Response
```

Retrieves the collection of log_entries resources.

Retrieves the collection of log_entries resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$id = 56; // int | 
$id2 = array(56); // int[] | 
$object_class = 'object_class_example'; // string | 
$object_class2 = array('object_class_example'); // string[] | 
$object_id = 56; // int | 
$object_id2 = array(56); // int[] | 
$action = 'action_example'; // string | 
$action2 = array('action_example'); // string[] | 
$search = 'search_example'; // string | 
$logged_at_before = 'logged_at_before_example'; // string | 
$logged_at_strictly_before = 'logged_at_strictly_before_example'; // string | 
$logged_at_after = 'logged_at_after_example'; // string | 
$logged_at_strictly_after = 'logged_at_strictly_after_example'; // string | 
$order_id = 'order_id_example'; // string | 
$order_logged_at = 'order_logged_at_example'; // string | 
$properties = array('properties_example'); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$enabled = True; // bool | Filter entities by enabled (1), disabled (0), or all (nothing).
$tag = 'tag_example'; // string | Filter using tag.

try {
    $result = $apiInstance->apiLogEntriesGetCollection($page, $items_per_page, $id, $id2, $object_class, $object_class2, $object_id, $object_id2, $action, $action2, $search, $logged_at_before, $logged_at_strictly_before, $logged_at_after, $logged_at_strictly_after, $order_id, $order_logged_at, $properties, $enabled, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogEntriesApi->apiLogEntriesGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **items_per_page** | **int**| The number of items per page | [optional] [default to 30] |
| **id** | **int**|  | [optional] |
| **id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_class** | **string**|  | [optional] |
| **object_class2** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_id** | **int**|  | [optional] |
| **object_id2** | [**int[]**](../Model/int.md)|  | [optional] |
| **action** | **string**|  | [optional] |
| **action2** | [**string[]**](../Model/string.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **logged_at_before** | **string**|  | [optional] |
| **logged_at_strictly_before** | **string**|  | [optional] |
| **logged_at_after** | **string**|  | [optional] |
| **logged_at_strictly_after** | **string**|  | [optional] |
| **order_id** | **string**|  | [optional] |
| **order_logged_at** | **string**|  | [optional] |
| **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional] |
| **enabled** | **bool**| Filter entities by enabled (1), disabled (0), or all (nothing). | [optional] |
| **tag** | **string**| Filter using tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiLogEntriesGetCollection200Response**](../Model/ApiLogEntriesGetCollection200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLogEntriesIdGet()`

```php
apiLogEntriesIdGet($id): \OpenAPI\Client\Model\LogEntriesJsonldStandardShowLogEntryShowIdTimestampableTagTaggingList
```

Retrieves a log_entries resource.

Retrieves a log_entries resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LogEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | log_entries identifier

try {
    $result = $apiInstance->apiLogEntriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogEntriesApi->apiLogEntriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| log_entries identifier | |

### Return type

[**\OpenAPI\Client\Model\LogEntriesJsonldStandardShowLogEntryShowIdTimestampableTagTaggingList**](../Model/LogEntriesJsonldStandardShowLogEntryShowIdTimestampableTagTaggingList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
