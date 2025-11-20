# OpenAPI\Client\AsyncRequestInputApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiAsyncPost()**](AsyncRequestInputApi.md#apiAsyncPost) | **POST** /open-api/v3/async | Creates a AsyncRequestInput resource. |


## `apiAsyncPost()`

```php
apiAsyncPost($async_request_input_jsonld): \OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonld
```

Creates a AsyncRequestInput resource.

Creates a AsyncRequestInput resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AsyncRequestInputApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$async_request_input_jsonld = new \OpenAPI\Client\Model\AsyncRequestInputJsonld(); // \OpenAPI\Client\Model\AsyncRequestInputJsonld | The new AsyncRequestInput resource

try {
    $result = $apiInstance->apiAsyncPost($async_request_input_jsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncRequestInputApi->apiAsyncPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **async_request_input_jsonld** | [**\OpenAPI\Client\Model\AsyncRequestInputJsonld**](../Model/AsyncRequestInputJsonld.md)| The new AsyncRequestInput resource | |

### Return type

[**\OpenAPI\Client\Model\AsyncRequestInputAsyncRequestOutputJsonld**](../Model/AsyncRequestInputAsyncRequestOutputJsonld.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`
- **Accept**: `application/ld+json`, `application/hal+json`, `application/vnd.api+json`, `application/json`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
