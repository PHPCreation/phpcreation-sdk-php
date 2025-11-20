# OpenAPI\Client\LoginCheckApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginCheckPost()**](LoginCheckApi.md#loginCheckPost) | **POST** /open_api_login_check | Creates a user token. |


## `loginCheckPost()`

```php
loginCheckPost($login_check_post_request): \OpenAPI\Client\Model\OpenApiLoginCheck200Response
```

Creates a user token.

Creates a user token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LoginCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_check_post_request = new \OpenAPI\Client\Model\LoginCheckPostRequest(); // \OpenAPI\Client\Model\LoginCheckPostRequest | The login data

try {
    $result = $apiInstance->loginCheckPost($login_check_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginCheckApi->loginCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_check_post_request** | [**\OpenAPI\Client\Model\LoginCheckPostRequest**](../Model/LoginCheckPostRequest.md)| The login data | |

### Return type

[**\OpenAPI\Client\Model\OpenApiLoginCheck200Response**](../Model/OpenApiLoginCheck200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
